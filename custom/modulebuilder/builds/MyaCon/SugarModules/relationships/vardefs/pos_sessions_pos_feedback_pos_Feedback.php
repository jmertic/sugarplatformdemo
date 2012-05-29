<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_Feedback"]["fields"]["pos_sessions_pos_feedback"] = array (
  'name' => 'pos_sessions_pos_feedback',
  'type' => 'link',
  'relationship' => 'pos_sessions_pos_feedback',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_SESSIONS_TITLE',
  'id_name' => 'pos_sessions_pos_feedbackpos_sessions_ida',
);
$dictionary["pos_Feedback"]["fields"]["pos_sessions_pos_feedback_name"] = array (
  'name' => 'pos_sessions_pos_feedback_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_SESSIONS_TITLE',
  'save' => true,
  'id_name' => 'pos_sessions_pos_feedbackpos_sessions_ida',
  'link' => 'pos_sessions_pos_feedback',
  'table' => 'pos_sessions',
  'module' => 'pos_Sessions',
  'rname' => 'name',
);
$dictionary["pos_Feedback"]["fields"]["pos_sessions_pos_feedbackpos_sessions_ida"] = array (
  'name' => 'pos_sessions_pos_feedbackpos_sessions_ida',
  'type' => 'link',
  'relationship' => 'pos_sessions_pos_feedback',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_FEEDBACK_TITLE',
);
