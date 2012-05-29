<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-24 00:03:24
$dictionary["pos_Sessions"]["fields"]["pos_sessions_pos_events"] = array (
  'name' => 'pos_sessions_pos_events',
  'type' => 'link',
  'relationship' => 'pos_sessions_pos_events',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SESSIONS_POS_EVENTS_FROM_POS_EVENTS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Sessions"]["fields"]["pos_sessions_pos_feedback"] = array (
  'name' => 'pos_sessions_pos_feedback',
  'type' => 'link',
  'relationship' => 'pos_sessions_pos_feedback',
  'source' => 'non-db',
  'side' => 'right',
  'vname' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_FEEDBACK_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_Sessions"]["fields"]["pos_speakers_pos_sessions"] = array (
  'name' => 'pos_speakers_pos_sessions',
  'type' => 'link',
  'relationship' => 'pos_speakers_pos_sessions',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SPEAKERS_TITLE',
  'id_name' => 'pos_speakers_pos_sessionspos_speakers_ida',
);
$dictionary["pos_Sessions"]["fields"]["pos_speakers_pos_sessions_name"] = array (
  'name' => 'pos_speakers_pos_sessions_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SPEAKERS_TITLE',
  'save' => true,
  'id_name' => 'pos_speakers_pos_sessionspos_speakers_ida',
  'link' => 'pos_speakers_pos_sessions',
  'table' => 'pos_speakers',
  'module' => 'pos_Speakers',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["pos_Sessions"]["fields"]["pos_speakers_pos_sessionspos_speakers_ida"] = array (
  'name' => 'pos_speakers_pos_sessionspos_speakers_ida',
  'type' => 'link',
  'relationship' => 'pos_speakers_pos_sessions',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SESSIONS_TITLE',
);


 // created: 2012-05-02 16:28:10
$dictionary['pos_Sessions']['fields']['joindin_widget']['default_value']='<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
   $.getScript("http://joind.in/widget/widget.php", function() {        joindin.draw(document.getElementById(\'joindin_id\').innerHTML,"joindin_widget"); });
// ]]></script>
<p>{/literal}</p>';
$dictionary['pos_Sessions']['fields']['joindin_widget']['default']='<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
   $.getScript("http://joind.in/widget/widget.php", function() {        joindin.draw(document.getElementById(\'joindin_id\').innerHTML,"joindin_widget"); });
// ]]></script>
<p>{/literal}</p>';

 
?>