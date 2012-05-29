<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_speakers_activities_calls"] = array (
  'relationships' => 
  array (
    'pos_speakers_activities_calls' => 
    array (
      'lhs_module' => 'pos_Speakers',
      'lhs_table' => 'pos_speakers',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
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