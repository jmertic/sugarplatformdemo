<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-24 00:03:24
$dictionary["pos_Speakers"]["fields"]["pos_speakers_activities_calls"] = array (
  'name' => 'pos_speakers_activities_calls',
  'type' => 'link',
  'relationship' => 'pos_speakers_activities_calls',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Speakers"]["fields"]["pos_speakers_activities_emails"] = array (
  'name' => 'pos_speakers_activities_emails',
  'type' => 'link',
  'relationship' => 'pos_speakers_activities_emails',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Speakers"]["fields"]["pos_speakers_activities_meetings"] = array (
  'name' => 'pos_speakers_activities_meetings',
  'type' => 'link',
  'relationship' => 'pos_speakers_activities_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Speakers"]["fields"]["pos_speakers_activities_notes"] = array (
  'name' => 'pos_speakers_activities_notes',
  'type' => 'link',
  'relationship' => 'pos_speakers_activities_notes',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Speakers"]["fields"]["pos_speakers_activities_tasks"] = array (
  'name' => 'pos_speakers_activities_tasks',
  'type' => 'link',
  'relationship' => 'pos_speakers_activities_tasks',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Speakers"]["fields"]["pos_speakers_pos_sessions"] = array (
  'name' => 'pos_speakers_pos_sessions',
  'type' => 'link',
  'relationship' => 'pos_speakers_pos_sessions',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SESSIONS_TITLE',
);


 // created: 2012-05-02 21:32:14
$dictionary['pos_Speakers']['fields']['twitter_widget']['default_value']='<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
       $.getScript("http://widgets.twimg.com/j/2/widget.js"); new TWTR.Widget({   id: \'twitter_widget\',   version: 2,   type: \'profile\',   rpp: 4,   interval: 30000,   width: 250,   height: 600,   theme: {     shell: {       background: \'#333333\',       color: \'#ffffff\'     },     tweets: {       background: \'#000000\',       color: \'#ffffff\',       links: \'#4aed05\'     }   },   features: {     scrollbar: false,     loop: false,     live: false,     behavior: \'all\'   } }).render().setUser(\'{/literal}{$bean->twitter_id}{literal}\').start();
// ]]></script>
<p>{/literal}</p>';
$dictionary['pos_Speakers']['fields']['twitter_widget']['default']='<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
       $.getScript("http://widgets.twimg.com/j/2/widget.js"); new TWTR.Widget({   id: \'twitter_widget\',   version: 2,   type: \'profile\',   rpp: 4,   interval: 30000,   width: 250,   height: 600,   theme: {     shell: {       background: \'#333333\',       color: \'#ffffff\'     },     tweets: {       background: \'#000000\',       color: \'#ffffff\',       links: \'#4aed05\'     }   },   features: {     scrollbar: false,     loop: false,     live: false,     behavior: \'all\'   } }).render().setUser(\'{/literal}{$bean->twitter_id}{literal}\').start();
// ]]></script>
<p>{/literal}</p>';

 
?>