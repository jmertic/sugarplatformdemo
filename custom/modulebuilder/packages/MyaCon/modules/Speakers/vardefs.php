<?php
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

$vardefs = array (
  'fields' => 
  array (
    'department' => 
    array (
      'name' => 'department',
      'vname' => 'LBL_DEPARTMENT',
      'type' => 'varchar',
      'len' => '255',
      'comment' => 'The department of the contact',
      'merge_filter' => 'enabled',
      'required' => false,
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'size' => '20',
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => '6',
      'cols' => '80',
      'required' => false,
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'size' => '20',
      'studio' => 'visible',
    ),
    'joindin_id' => 
    array (
      'required' => false,
      'name' => 'joindin_id',
      'vname' => 'LBL_JOINDIN_ID',
      'type' => 'int',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '1',
    ),
    'twitter_id' => 
    array (
      'required' => false,
      'name' => 'twitter_id',
      'vname' => 'LBL_TWITTER_ID',
      'type' => 'varchar',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
    ),
    'joindin_profile' => 
    array (
      'required' => false,
      'name' => 'joindin_profile',
      'vname' => 'LBL_JOINDIN_PROFILE',
      'type' => 'iframe',
      'massupdate' => 0,
      'default' => 'https://joind.in/user/view/{joindin_id}',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
      'dbType' => 'varchar',
      'gen' => '1',
      'link_target' => '600',
      'height' => '600',
    ),
    'twitter_widget' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'twitter_widget',
      'vname' => 'LBL_TWITTER_WIDGET',
      'type' => 'html',
      'massupdate' => 0,
      'default' => '&lt;p&gt;{literal}&lt;/p&gt;
&lt;p&gt;&nbsp;&lt;/p&gt;
&lt;script charset=&quot;utf-8&quot; type=&quot;text/javascript&quot; src=&quot;http://widgets.twimg.com/j/2/widget.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;// &lt;![CDATA[
     new TWTR.Widget({   version: 2,   type: &#039;profile&#039;,   rpp: 20,   interval: 30000,   width: &#039;auto&#039;,   height: 300,   theme: {     shell: {       background: &#039;#333333&#039;,       color: &#039;#ffffff&#039;     },     tweets: {       background: &#039;#000000&#039;,       color: &#039;#ffffff&#039;,       links: &#039;#4aed05&#039;     }   },   features: {     scrollbar: true,     loop: false,     live: true,     behavior: &#039;all&#039;   } }).render().setUser(&quot;{/literal}{$bean-&gt;twitter_id}{literal}&quot;).start();
// ]]&gt;&lt;/script&gt;
&lt;p&gt;{/literal}&lt;/p&gt;',
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
      'default_value' => '&lt;p&gt;{literal}&lt;/p&gt;
&lt;p&gt;&nbsp;&lt;/p&gt;
&lt;script charset=&quot;utf-8&quot; type=&quot;text/javascript&quot; src=&quot;http://widgets.twimg.com/j/2/widget.js&quot;&gt;&lt;/script&gt;
&lt;script type=&quot;text/javascript&quot;&gt;// &lt;![CDATA[
     new TWTR.Widget({   version: 2,   type: &#039;profile&#039;,   rpp: 20,   interval: 30000,   width: &#039;auto&#039;,   height: 300,   theme: {     shell: {       background: &#039;#333333&#039;,       color: &#039;#ffffff&#039;     },     tweets: {       background: &#039;#000000&#039;,       color: &#039;#ffffff&#039;,       links: &#039;#4aed05&#039;     }   },   features: {     scrollbar: true,     loop: false,     live: true,     behavior: &#039;all&#039;   } }).render().setUser(&quot;{/literal}{$bean-&gt;twitter_id}{literal}&quot;).start();
// ]]&gt;&lt;/script&gt;
&lt;p&gt;{/literal}&lt;/p&gt;',
      'studio' => 'visible',
      'dbType' => 'text',
    ),
  ),
  'relationships' => 
  array (
  ),
);