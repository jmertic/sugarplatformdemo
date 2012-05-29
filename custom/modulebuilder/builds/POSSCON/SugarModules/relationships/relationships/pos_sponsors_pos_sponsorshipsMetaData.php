<?php
// created: 2011-03-17 16:06:44
$dictionary["pos_sponsors_pos_sponsorships"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'pos_sponsors_pos_sponsorships' => 
    array (
      'lhs_module' => 'pos_Sponsors',
      'lhs_table' => 'pos_sponsors',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sponsorships',
      'rhs_table' => 'pos_sponsorships',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pos_sponsorsponsorships_c',
      'join_key_lhs' => 'pos_sponso6863ponsors_ida',
      'join_key_rhs' => 'pos_sponso0bd7orships_idb',
    ),
  ),
  'table' => 'pos_sponsorsponsorships_c',
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
      'name' => 'pos_sponso6863ponsors_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pos_sponso0bd7orships_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pos_sponsors_sponsorshipsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pos_sponsors_sponsorships_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pos_sponso6863ponsors_ida',
        1 => 'pos_sponso0bd7orships_idb',
      ),
    ),
  ),
);
?>
