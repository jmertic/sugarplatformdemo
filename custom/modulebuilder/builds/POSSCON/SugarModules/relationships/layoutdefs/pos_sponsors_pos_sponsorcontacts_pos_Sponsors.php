<?php
 // created: 2012-03-22 22:24:10
$layout_defs["pos_Sponsors"]["subpanel_setup"]['pos_sponsors_pos_sponsorcontacts'] = array (
  'order' => 100,
  'module' => 'pos_SponsorContacts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_POS_SPONSORS_POS_SPONSORCONTACTS_FROM_POS_SPONSORCONTACTS_TITLE',
  'get_subpanel_data' => 'pos_sponsors_pos_sponsorcontacts',
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
