<?php
// created: 2012-03-22 22:24:10
$dictionary["pos_sponsors_pos_sponsorcontacts"] = array (
  'relationships' => 
  array (
    'pos_sponsors_pos_sponsorcontacts' => 
    array (
      'lhs_module' => 'pos_Sponsors',
      'lhs_table' => 'pos_sponsors',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_SponsorContacts',
      'rhs_table' => 'pos_sponsorcontacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pos_sponsors_pos_sponsorcontacts_c',
      'join_key_lhs' => 'pos_sponsors_pos_sponsorcontactspos_sponsors_ida',
      'join_key_rhs' => 'pos_sponsors_pos_sponsorcontactspos_sponsorcontacts_idb',
    ),
  ),
  'table' => 'pos_sponsors_pos_sponsorcontacts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'pos_sponsors_pos_sponsorcontactspos_sponsors_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pos_sponsors_pos_sponsorcontactspos_sponsorcontacts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pos_sponsors_pos_sponsorcontactsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pos_sponsors_pos_sponsorcontacts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pos_sponsors_pos_sponsorcontactspos_sponsors_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pos_sponsors_pos_sponsorcontacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pos_sponsors_pos_sponsorcontactspos_sponsorcontacts_idb',
      ),
    ),
  ),
);