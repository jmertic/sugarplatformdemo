<?php
// created: 2012-03-22 22:24:10
$dictionary["pos_sessions_pos_events"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'pos_sessions_pos_events' => 
    array (
      'lhs_module' => 'pos_Sessions',
      'lhs_table' => 'pos_sessions',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Events',
      'rhs_table' => 'pos_events',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pos_sessions_pos_events_c',
      'join_key_lhs' => 'pos_sessions_pos_eventspos_sessions_ida',
      'join_key_rhs' => 'pos_sessions_pos_eventspos_events_idb',
    ),
  ),
  'table' => 'pos_sessions_pos_events_c',
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
      'name' => 'pos_sessions_pos_eventspos_sessions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pos_sessions_pos_eventspos_events_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pos_sessions_pos_eventsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pos_sessions_pos_events_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pos_sessions_pos_eventspos_sessions_ida',
        1 => 'pos_sessions_pos_eventspos_events_idb',
      ),
    ),
  ),
);