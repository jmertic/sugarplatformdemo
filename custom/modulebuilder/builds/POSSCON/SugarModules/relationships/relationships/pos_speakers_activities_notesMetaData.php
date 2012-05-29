<?php
// created: 2012-03-22 22:24:10
$dictionary["pos_speakers_activities_notes"] = array (
  'relationships' => 
  array (
    'pos_speakers_activities_notes' => 
    array (
      'lhs_module' => 'pos_Speakers',
      'lhs_table' => 'pos_speakers',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
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