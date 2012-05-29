<?php 
 //WARNING: The contents of this file are auto-generated


 // created: 2012-03-24 00:03:24
$layout_defs["pos_Sessions"]["subpanel_setup"]['pos_sessions_pos_events'] = array (
  'order' => 100,
  'module' => 'pos_Events',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_POS_SESSIONS_POS_EVENTS_FROM_POS_EVENTS_TITLE',
  'get_subpanel_data' => 'pos_sessions_pos_events',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);


 // created: 2012-03-24 00:03:24
$layout_defs["pos_Sessions"]["subpanel_setup"]['pos_sessions_pos_feedback'] = array (
  'order' => 100,
  'module' => 'pos_Feedback',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_FEEDBACK_TITLE',
  'get_subpanel_data' => 'pos_sessions_pos_feedback',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);

?>