/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
if(typeof(SUGAR.collection)=="undefined"){SUGAR.collection=function(form_name,field_name,module,popupData){this.more_status=false;this.form=form_name;this.field=field_name;this.field_element_name=this.form+'_'+this.field;this.module=module;this.fields_count=0;this.extra_fields_count=0;this.first=true;this.primary_field="";this.cloneField=new Array();this.sqs_clone="";this.secondaries_values=new Array();this.update_fields=new Object();this.show_more_image=true;};SUGAR.collection.prototype={remove:function(num){var radio_els=this.get_radios();var div_el;if(radio_els.length==1){div_el=document.getElementById(this.field_element_name+'_input_div_'+num);var input_els=div_el.getElementsByTagName('input');input_els[0].value='';input_els[1].value='';if(this.primary_field){div_el=document.getElementById(this.field_element_name+'_radio_div_'+num);radio_els=div_el.getElementsByTagName('input');radio_els[0].checked=false;}}else{div_el=document.getElementById(this.field_element_name+'_input_div_'+num);if(!div_el)
div_el=document.getElementById(this.field_element_name+'_radio_div_'+num);var tr_to_remove=document.getElementById('lineFields_'+this.field_element_name+'_'+num);div_el.parentNode.parentNode.parentNode.removeChild(tr_to_remove);var div_id='lineFields_'+this.field_element_name+'_'+num;if(typeof sqs_objects[div_id.replace("_field_","_")]!='undefined'){delete(sqs_objects[div_id.replace("_field_","_")]);}
var checked=false;for(var k=0;k<radio_els.length;k++){if(radio_els[k].checked){checked=true;}}
var primary_checked=document.forms[this.form].elements[this.field+"_allowed_to_check"];var allowed_to_check=true;if(primary_checked&&primary_checked.value=='false'){allowed_to_check=false;}
if(/EditView/.test(this.form)&&!checked&&typeof radio_els[0]!='undefined'&&allowed_to_check){radio_els[0].checked=true;this.changePrimary(true);this.js_more();this.js_more();}
if(radio_els.length==1){this.more_status=false;if(document.getElementById('more_'+this.field_element_name)&&document.getElementById('more_'+this.field_element_name).style.display!='none'){document.getElementById('more_'+this.field_element_name).style.display='none';}
this.show_arrow_label(false);this.js_more();}else{this.js_more();this.js_more();}}},get_radios:function(){return YAHOO.util.Selector.query('input[name^=primary]',document.getElementById(this.field_element_name+'_table'));},add:function(values){this.fields_count++;var Field0=this.init_clone(values);this.cloneField[1].appendChild(Field0);enableQS(true);this.changePrimary(false);if(document.getElementById('more_'+this.field_element_name)&&document.getElementById('more_'+this.field_element_name).style.display=='none'){document.getElementById('more_'+this.field_element_name).style.display='';}
if(!this.is_expanded()){this.js_more();this.show_arrow_label(true);}},add_secondaries:function(){var clone_id=this.form+'_'+this.field+'_collection_0';YAHOO.util.Event.onContentReady(clone_id,function(c){c.create_clone();enableQS();c.changePrimary(true);for(key in c.secondaries_values){if(isInteger(key)){c.add(c.secondaries_values[key]);}}
c.js_more();initEditView(document.forms[c.form]);},this);},init_clone:function(values){if(typeof this.cloneField[0]=='undefined'){return;}
if(typeof values=="undefined"){values=new Array();values['name']="";values['id']="";}
var count=this.fields_count;var Field0=SUGAR.isIE?SUGAR.collection.safe_clone(this.cloneField[0],true):this.cloneField[0].cloneNode(true);Field0.id="lineFields_"+this.field_element_name+"_"+count;for(var ii=0;ii<Field0.childNodes.length;ii++){if(typeof(Field0.childNodes[ii].tagName)!='undefined'&&Field0.childNodes[ii].tagName=="TD"){for(var jj=0;jj<Field0.childNodes[ii].childNodes.length;jj++){currentNode=Field0.childNodes[ii].childNodes[jj];this.process_node(Field0.childNodes[ii],currentNode,values);}}}
return Field0;},process_node:function(parentNode,currentNode,values){if(parentNode.className=='td_extra_field'){if(parentNode.id){parentNode.id='';}
var toreplace=this.field+"_collection_extra_0";var re=new RegExp(toreplace,'g');parentNode.innerHTML=parentNode.innerHTML.replace(re,this.field+"_collection_extra_"+this.fields_count);}else if(currentNode.tagName&&currentNode.tagName=='SPAN'){currentNode.id=/_input/.test(currentNode.id)?this.field_element_name+'_input_div_'+this.fields_count:this.field_element_name+'_radio_div_'+this.fields_count;if(/_input/.test(currentNode.id)){currentNode.name='teamset_div';}
var input_els=currentNode.getElementsByTagName('input');for(var x=0;x<input_els.length;x++){if(typeof(input_els[x].id)=='undefined'||input_els[x].id==''){input_els[x].id=currentNode.id;}
if(input_els[x].tagName&&input_els[x].tagName=='INPUT'){this.process_node(parentNode,input_els[x],values);}}}else if(currentNode.name){var toreplace=this.field+"_collection_0";var re=new RegExp(toreplace,'g');var name=currentNode.name;var new_name=name.replace(re,this.field+"_collection_"+this.fields_count);var new_id=currentNode.id.replace(re,this.field+"_collection_"+this.fields_count);switch(name){case toreplace:var sqs_id=this.form+'_'+new_name;if(typeof this.sqs_clone!='undefined'){var sqs_clone=YAHOO.lang.JSON.stringify(this.sqs_clone);eval('sqs_objects[sqs_id]='+sqs_clone);for(var pop_field in sqs_objects[sqs_id]['populate_list']){if(typeof sqs_objects[sqs_id]['populate_list'][pop_field]=='string'){sqs_objects[sqs_id]['populate_list'][pop_field]=sqs_objects[sqs_id]['populate_list'][pop_field].replace(RegExp('_0','g'),"_"+this.fields_count);}}
for(var req_field in sqs_objects[sqs_id]['required_list']){if(typeof sqs_objects[sqs_id]['required_list'][req_field]=='string'){sqs_objects[sqs_id]['required_list'][req_field]=sqs_objects[sqs_id]['required_list'][req_field].replace(RegExp('_0','g'),"_"+this.fields_count);}}}
currentNode.name=new_name;currentNode.id=new_id;currentNode.value=values['name'];break;case"id_"+toreplace:currentNode.name=new_name.replace(RegExp('_0','g'),"_"+this.fields_count);currentNode.id=new_id.replace(RegExp('_0','g'),"_"+this.fields_count);currentNode.value=values['id'];break;case"btn_"+toreplace:currentNode.name=new_name;currentNode.attributes['onclick'].value=currentNode.attributes['onclick'].value.replace(re,this.field+"_collection_"+this.fields_count);currentNode.attributes['onclick'].value=currentNode.attributes['onclick'].value.replace(RegExp(this.field+"_collection_extra_0",'g'),this.field+"_collection_extra_"+this.fields_count);break;case"allow_new_value_"+toreplace:currentNode.name=new_name;currentNode.id=new_id;break;case"remove_"+toreplace:currentNode.name=new_name;currentNode.id=new_id;currentNode.setAttribute('collection_id',this.field_element_name);currentNode.setAttribute('remove_id',this.fields_count);currentNode.onclick=function(){collection[this.getAttribute('collection_id')].remove(this.getAttribute('remove_id'));};break;case"primary_"+this.field+"_collection":currentNode.id=new_id;currentNode.value=this.fields_count;currentNode.checked=false;currentNode.setAttribute('defaultChecked','');break;default:alert(toreplace+'|'+currentNode.name+'|'+name+'|'+new_name);break;}}},js_more:function(val){if(this.show_more_image){var more_=document.getElementById('more_img_'+this.field_element_name);var arrow=document.getElementById('arrow_'+this.field);var radios=this.get_radios();if(this.more_status==false){more_.src="index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=advanced_search.gif";this.more_status=true;var hidden_count=0;for(var k=0;k<radios.length;k++){if(radios[k].type&&radios[k].type=='radio'){if(radios[k].checked){radios[k].parentNode.parentNode.parentNode.style.display='';}else{radios[k].parentNode.parentNode.parentNode.style.display='none';hidden_count++;}}}
if(hidden_count==radios.length){radios[0].parentNode.parentNode.parentNode.style.display='';}
arrow.value='hide';}else{more_.src="index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=basic_search.gif";this.more_status=false;for(var k=0;k<radios.length;k++){if(isInteger(k)){radios[k].parentNode.parentNode.parentNode.style.display='';}}
arrow.value='show';}
var more_div=document.getElementById('more_div_'+this.field_element_name);if(more_div){more_div.innerHTML=arrow.value=='show'?SUGAR.language.get('app_strings','LBL_HIDE'):SUGAR.language.get('app_strings','LBL_SHOW');}}},create_clone:function(){var oneField=document.getElementById('lineFields_'+this.field_element_name+'_0');this.cloneField[0]=SUGAR.isIE?SUGAR.collection.safe_clone(oneField,true):oneField.cloneNode(true);this.cloneField[1]=oneField.parentNode;var clone_id=this.form+'_'+this.field+'_collection_0';if(typeof sqs_objects!='undefined'&&typeof sqs_objects[clone_id]!='undefined'){var clone=YAHOO.lang.JSON.stringify(sqs_objects[clone_id]);eval('this.sqs_clone='+clone);}},validateTemSet:function(formname,fieldname){var table_element_id=formname+'_'+fieldname+'_table';if(document.getElementById(table_element_id)){var input_elements=YAHOO.util.Selector.query('input[type=radio]',document.getElementById(table_element_id));var has_primary=false;var primary_field_id=fieldname+'_collection_0';for(t in input_elements){primary_field_id=fieldname+'_collection_'+input_elements[t].value;if(input_elements[t].type&&input_elements[t].type=='radio'&&input_elements[t].checked==true){if(document.forms[formname].elements[primary_field_id].value!=''){has_primary=true;}
break;}}
if(!has_primary){return false;}
return true;}
return true;},getTeamIdsfromUI:function(formname,fieldname){var team_ids=new Array();var table_element_id=formname+'_'+fieldname+'_table';if(document.getElementById(table_element_id)){input_elements=YAHOO.util.Selector.query('input[type=hidden]',document.getElementById(table_element_id));for(t=0;t<input_elements.length;t++){if(input_elements[t].id.match(fieldname+"_collection_")!=null){team_ids.push(input_elements[t].value);}}}
return team_ids;},getPrimaryTeamidsFromUI:function(formname,fieldname){var table_element_id=formname+'_'+fieldname+'_table';if(document.getElementById(table_element_id)){var input_elements=YAHOO.util.Selector.query('input[type=radio]',document.getElementById(table_element_id));for(t in input_elements){var primary_field_id='id_'+document.forms[formname][fieldname].name+'_collection_'+input_elements[t].value;if(input_elements[t].type&&input_elements[t].type=='radio'&&input_elements[t].checked==true){if(document.forms[formname].elements[primary_field_id].value!=''){return document.forms[formname].elements[primary_field_id].value;}}}}
return'';},changePrimary:function(noAdd){var old_primary=this.primary_field;var radios=this.get_radios();for(var k=0;k<radios.length;k++){var qs_id=radios[k].id.replace('primary_','');if(radios[k].checked){this.primary_field=qs_id;}else{qs_id=qs_id+'_'+k;}
qs_id=this.form+'_'+qs_id;if(typeof sqs_objects!='undefined'&&typeof sqs_objects[qs_id]!='undefined'&&sqs_objects[qs_id]['primary_field_list']){for(var ii=0;ii<sqs_objects[qs_id]['primary_field_list'].length;ii++){if(radios[k].checked&&qs_id!=old_primary){sqs_objects[qs_id]['field_list'].push(sqs_objects[qs_id]['primary_field_list'][ii]);sqs_objects[qs_id]['populate_list'].push(sqs_objects[qs_id]['primary_populate_list'][ii]);}else if(old_primary==qs_id&&!radios[k].checked){sqs_objects[qs_id]['field_list'].pop();sqs_objects[qs_id]['populate_list'].pop();}}}}
if(noAdd){enableQS(false);}
this.first=false;},js_more_detail:function(id){var more_img=document.getElementById('more_img_'+id);if(more_img.style.display=='inline'){more_img.src="index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=advanced_search.gif";}else{more_img.src="index.php?entryPoint=getImage&themeName="+SUGAR.themes.theme_name+"&imageName=basic_search.gif";}},replace_first:function(values){for(var i=0;i<=this.fields_count;i++){var div_el=document.getElementById(this.field_element_name+'_input_div_'+i);if(div_el){var name_field=document.getElementById(this.field_element_name+"_collection_"+i);var id_field=document.getElementById("id_"+this.field_element_name+"_collection_"+i);name_field.value=values['name'];id_field.value=values['id'];break;}}},clean_up:function(){var divsToClean=new Array();var isFirstFieldEmpty=false;var divCount=0;for(var i=0;i<=this.fields_count;i++){var div_el=document.getElementById(this.field_element_name+'_input_div_'+i);if(div_el){input_els=div_el.getElementsByTagName('input');for(var x=0;x<input_els.length;x++){if(input_els[x].id&&input_els[x].name==(this.field+'_collection_'+i)&&trim(input_els[x].value)==''){if(divCount==0){isFirstFieldEmpty=true;}else{divsToClean.push(i);}}}
divCount++;}}
for(var j=0;j<divsToClean.length;j++){this.remove(divsToClean[j]);}
return isFirstFieldEmpty;},show_arrow_label:function(show){var more_div=document.getElementById('more_div_'+this.field_element_name);if(more_div){more_div.style.display=show?'':'none';}},is_expanded:function(){var more_div=document.getElementById('more_div_'+this.field_element_name);if(more_div){return more_div.style.display=='';}
return false;}};SUGAR.collection.safe_clone=function(e,recursive)
{if(e.nodeName=="#text")
{return document.createTextNode(e.data);}
if(!e.tagName)return false;var newNode=document.createElement(e.tagName);if(!newNode)return false;var properties=['class','style','name','type','valign','border','width','height','top','bottom','left','right','scope','row','columns','src','href','className','align','nowrap'];if(SUGAR.isIE7&&e.tagName.toLowerCase()=='input')
{var properties=['class','style','name','type','valign','border','width','top','bottom','left','right','scope','row','columns','src','href','className','align','nowrap'];}else{var properties=['class','style','name','type','valign','border','width','height','top','bottom','left','right','scope','row','columns','src','href','className','align','nowrap'];}
for(var i in properties)
{if(e[properties[i]])
{if(((properties[i]!='style'&&properties[i]!='type')||!SUGAR.isIE)&&(properties[i]!='href'||e.tagName=='a'||e.tagName=='iframe'))
{newNode[properties[i]]=e[properties[i]];}}}
if(recursive)
{for(var i in e.childNodes)
{if(e.childNodes[i].nodeName&&(!e.className||e.className!="yui-ac-container"))
{var child=SUGAR.collection.safe_clone(e.childNodes[i],true);if(child)newNode.appendChild(child);}}}
return newNode;}}
// End of File include/SugarFields/Fields/Collection/SugarFieldCollection.js

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2012 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/
function Datetimecombo(datetime,field,timeformat,tabindex,showCheckbox,checked,allowEmptyHM){this.datetime=datetime;this.allowEmptyHM=allowEmptyHM;if(typeof this.datetime=="undefined"||datetime==''||trim(datetime).length<10){this.datetime='';var d=new Date();var month=d.getMonth();var date=d.getDate();var year=d.getYear();var hours=d.getHours();var minutes=d.getMinutes();}
this.fieldname=field;if(datetime!='')
{parts=datetime.split(' ');this.hrs=parseInt(parts[1].substring(0,2),10);this.mins=parseInt(parts[1].substring(3,5),10);}
this.timeformat=timeformat;this.tabindex=tabindex==null||isNaN(tabindex)?1:tabindex;this.timeseparator=this.timeformat.substring(2,3);this.has12Hours=/^11/.test(this.timeformat);this.hasMeridiem=/am|pm/i.test(this.timeformat);if(this.hasMeridiem){this.pm=/pm/.test(this.timeformat);}
this.meridiem=this.hasMeridiem?trim(this.datetime.substring(16)):'';this.datetime=this.datetime.substr(0,10);this.showCheckbox=showCheckbox;this.checked=parseInt(checked);document.getElementById(this.fieldname+'_date').value=this.datetime;if(this.mins>0&&this.mins<15){this.mins=15;}else if(this.mins>15&&this.mins<30){this.mins=30;}else if(this.mins>30&&this.mins<45){this.mins=45;}else if(this.mins>45){this.hrs+=1;this.mins=0;if(this.hasMeridiem&&this.hrs==12){if(this.meridiem=="pm"||this.meridiem=="am"){if(this.meridiem=="pm"){this.meridiem="am";}else{this.meridiem="pm";}}else{if(this.meridiem=="PM"){this.meridiem="AM";}else{this.meridiem="PM";}}}
if(this.hrs>12){this.hrs=this.hrs-12;}}}
Datetimecombo.prototype.jsscript=function(callback){text='\nfunction update_'+this.fieldname+'(calendar) {';text+='\nd = document.getElementById("'+this.fieldname+'_date").value;';text+='\nh = document.getElementById("'+this.fieldname+'_hours").value;';text+='\nm = document.getElementById("'+this.fieldname+'_minutes").value;';text+='\nnewdate = d + " " + h + "'+this.timeseparator+'" + m;';if(this.hasMeridiem){text+='\nif(typeof document.getElementById("'+this.fieldname+'_meridiem") != "undefined") {';text+='\n   newdate += document.getElementById("'+this.fieldname+'_meridiem").value;';text+='\n}';}
text+='\nif(trim(newdate) =="'+this.timeseparator+'") newdate="";';text+='\ndocument.getElementById("'+this.fieldname+'").value = newdate;';text+='\n'+callback;text+='\n}';return text;}
Datetimecombo.prototype.html=function(callback){var text='<select class="datetimecombo_time" size="1" id="'+this.fieldname+'_hours" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'">';var h1=this.has12Hours?1:0;var h2=this.has12Hours?12:23;if(this.allowEmptyHM){text+='<option></option>';}
for(i=h1;i<=h2;i++){val=i<10?"0"+i:i;text+='<option value="'+val+'" '+(i==this.hrs?"SELECTED":"")+'>'+val+'</option>';}
text+='\n</select>&nbsp;';text+=this.timeseparator;text+='\n&nbsp;<select class="datetimecombo_time" size="1" id="'+this.fieldname+'_minutes" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'">';if(this.allowEmptyHM){text+='\n<option></option>';}
text+='\n<option value="00" '+(this.mins==0?"SELECTED":"")+'>00</option>';text+='\n<option value="15" '+(this.mins==15?"SELECTED":"")+'>15</option>';text+='\n<option value="30" '+(this.mins==30?"SELECTED":"")+'>30</option>';text+='\n<option value="45" '+(this.mins==45?"SELECTED":"")+'>45</option>';text+='\n</select>';if(this.hasMeridiem){text+='\n&nbsp;';text+='\n<select class="datetimecombo_time" size="1" id="'+this.fieldname+'_meridiem" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'">';if(this.allowEmptyHM){text+='\n<option></option>';}
text+='\n<option value="'+(this.pm?"am":"AM")+'" '+(/am/i.test(this.meridiem)?"SELECTED":"")+'>'+(this.pm?"am":"AM")+'</option>';text+='\n<option value="'+(this.pm?"pm":"PM")+'" '+(/pm/i.test(this.meridiem)?"SELECTED":"")+'>'+(this.pm?"pm":"PM")+'</option>';text+='\n</select>';}
if(this.showCheckbox){text+='\n<input style="visibility:hidden;" type="checkbox" name="'+this.fieldname+'_flag" id="'+this.fieldname+'_flag" tabindex="'+this.tabindex+'" onchange="combo_'+this.fieldname+'.update(); '+callback+'" '+(this.checked?'CHECKED':'')+'>';}
return text;};Datetimecombo.prototype.update=function(updateListeners){if(typeof(updateListeners)=="undefined")
updateListeners=true;var d=window.document.getElementById(this.fieldname+'_date');var h=window.document.getElementById(this.fieldname+'_hours');var m=window.document.getElementById(this.fieldname+'_minutes');var mer=document.getElementById(this.fieldname+"_meridiem");if(d.value==""){h.selectedIndex=0;m.selectedIndex=0;if(mer)mer.selectedIndex=0;}else{if(this.allowEmptyHM){if(h.selectedIndex==0)h.selectedIndex=12;if(m.selectedIndex==0)m.selectedIndex=1;if(mer&&(mer.selectedIndex==0))mer.selectedIndex=1;}}
var newdate=d.value+' '+h.value+this.timeseparator+m.value;if(this.hasMeridiem){ampm=document.getElementById(this.fieldname+"_meridiem").value;newdate+=ampm;}
if(trim(newdate)==""+this.timeseparator+""){newdate='';}
document.getElementById(this.fieldname).value=newdate;if(updateListeners)
SUGAR.util.callOnChangeListers(this.fieldname);if(this.showCheckbox){flag=this.fieldname+'_flag';date=this.fieldname+'_date';hours=this.fieldname+'_hours';mins=this.fieldname+'_minutes';if(document.getElementById(flag).checked){document.getElementById(flag).value=1;document.getElementById(this.fieldname).value='';document.getElementById(date).disabled=true;document.getElementById(hours).disabled=true;document.getElementById(mins).disabled=true;}else{document.getElementById(flag).value=0;document.getElementById(date).disabled=false;document.getElementById(hours).disabled=false;document.getElementById(mins).disabled=false;}}};
// End of File include/SugarFields/Fields/Datetimecombo/Datetimecombo.js

