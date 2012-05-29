<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_sponsors_pos_events"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'pos_sponsors_pos_events' => 
    array (
      'lhs_module' => 'pos_Sponsors',
      'lhs_table' => 'pos_sponsors',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Events',
      'rhs_table' => 'pos_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pos_sponsors_pos_events_c',
      'join_key_lhs' => 'pos_sponsors_pos_eventspos_sponsors_ida',
      'join_key_rhs' => 'pos_sponsors_pos_eventspos_events_idb',
    ),
  ),
  'table' => 'pos_sponsors_pos_events_c',
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
      'name' => 'pos_sponsors_pos_eventspos_sponsors_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pos_sponsors_pos_eventspos_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pos_sponsors_pos_eventsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pos_sponsors_pos_events_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pos_sponsors_pos_eventspos_sponsors_ida',
        1 => 'pos_sponsors_pos_eventspos_events_idb',
      ),
    ),
  ),
);