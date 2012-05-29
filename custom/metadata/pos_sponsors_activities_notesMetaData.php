<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_sponsors_activities_notes"] = array (
  'relationships' => 
  array (
    'pos_sponsors_activities_notes' => 
    array (
      'lhs_module' => 'pos_Sponsors',
      'lhs_table' => 'pos_sponsors',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'pos_Sponsors',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);