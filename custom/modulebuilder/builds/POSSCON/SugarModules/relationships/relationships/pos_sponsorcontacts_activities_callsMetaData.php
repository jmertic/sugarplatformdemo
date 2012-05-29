<?php
// created: 2012-03-22 22:24:10
$dictionary["pos_sponsorcontacts_activities_calls"] = array (
  'relationships' => 
  array (
    'pos_sponsorcontacts_activities_calls' => 
    array (
      'lhs_module' => 'pos_SponsorContacts',
      'lhs_table' => 'pos_sponsorcontacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
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