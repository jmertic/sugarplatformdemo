<?php
// created: 2012-03-24 00:03:24
$dictionary["pos_speakers_pos_sessions"] = array (
  'relationships' => 
  array (
    'pos_speakers_pos_sessions' => 
    array (
      'lhs_module' => 'pos_Speakers',
      'lhs_table' => 'pos_speakers',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sessions',
      'rhs_table' => 'pos_sessions',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pos_speakers_pos_sessions_c',
      'join_key_lhs' => 'pos_speakers_pos_sessionspos_speakers_ida',
      'join_key_rhs' => 'pos_speakers_pos_sessionspos_sessions_idb',
    ),
  ),
  'table' => 'pos_speakers_pos_sessions_c',
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
      'name' => 'pos_speakers_pos_sessionspos_speakers_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pos_speakers_pos_sessionspos_sessions_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pos_speakers_pos_sessionsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pos_speakers_pos_sessions_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pos_speakers_pos_sessionspos_speakers_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pos_speakers_pos_sessions_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pos_speakers_pos_sessionspos_sessions_idb',
      ),
    ),
  ),
);