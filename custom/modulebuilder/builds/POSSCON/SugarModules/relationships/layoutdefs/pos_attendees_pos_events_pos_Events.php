<?php
 // created: 2012-03-22 22:24:10
$layout_defs["pos_Events"]["subpanel_setup"]['pos_attendees_pos_events'] = array (
  'order' => 100,
  'module' => 'pos_Attendees',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_POS_ATTENDEES_POS_EVENTS_FROM_POS_ATTENDEES_TITLE',
  'get_subpanel_data' => 'pos_attendees_pos_events',
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
