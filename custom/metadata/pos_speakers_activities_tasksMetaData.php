<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_speakers_activities_tasks"] = array (
  'relationships' => 
  array (
    'pos_speakers_activities_tasks' => 
    array (
      'lhs_module' => 'pos_Speakers',
      'lhs_table' => 'pos_speakers',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'pos_Speakers',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);