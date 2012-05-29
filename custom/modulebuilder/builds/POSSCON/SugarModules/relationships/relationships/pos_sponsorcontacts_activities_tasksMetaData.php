<?php
// created: 2012-03-22 22:24:10
$dictionary["pos_sponsorcontacts_activities_tasks"] = array (
  'relationships' => 
  array (
    'pos_sponsorcontacts_activities_tasks' => 
    array (
      'lhs_module' => 'pos_SponsorContacts',
      'lhs_table' => 'pos_sponsorcontacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
      'relationship_role_column_value' => 'pos_SponsorContacts',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);