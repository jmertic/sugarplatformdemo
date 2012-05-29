<?php
$module_name = 'pos_Feedback';
$listViewDefs [$module_name] = 
array (
  'POS_SESSION_FEEDBACK_NAME' => 
  array (
    'type' => 'relate',
    'link' => 'pos_sessions_pos_feedback',
    'label' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_SESSIONS_TITLE',
    'width' => '10%',
    'default' => true,
  ),
  'RATING' => 
  array (
    'type' => 'radioenum',
    'default' => true,
    'studio' => 'visible',
    'label' => 'LBL_RATING',
    'width' => '10%',
  ),
  'DESCRIPTION' => 
  array (
    'type' => 'text',
    'label' => 'LBL_DESCRIPTION',
    'sortable' => false,
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
?>
