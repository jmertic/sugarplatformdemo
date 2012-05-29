<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_sponsorcontacts_activities_meetings"] = array (
  'relationships' => 
  array (
    'pos_sponsorcontacts_activities_meetings' => 
    array (
      'lhs_module' => 'pos_SponsorContacts',
      'lhs_table' => 'pos_sponsorcontacts',
      'lhs_key' => 'id',
      'rhs_module' => 'Meetings',
      'rhs_table' => 'meetings',
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