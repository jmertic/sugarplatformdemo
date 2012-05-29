<?php
// created: 2012-03-22 22:24:10
$dictionary["pos_sessions_pos_feedback"] = array (
  'relationships' => 
  array (
    'pos_sessions_pos_feedback' => 
    array (
      'lhs_module' => 'pos_Sessions',
      'lhs_table' => 'pos_sessions',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Feedback',
      'rhs_table' => 'pos_feedback',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'pos_sessions_pos_feedback_c',
      'join_key_lhs' => 'pos_sessions_pos_feedbackpos_sessions_ida',
      'join_key_rhs' => 'pos_sessions_pos_feedbackpos_feedback_idb',
    ),
  ),
  'table' => 'pos_sessions_pos_feedback_c',
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
      'name' => 'pos_sessions_pos_feedbackpos_sessions_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'pos_sessions_pos_feedbackpos_feedback_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'pos_sessions_pos_feedbackspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'pos_sessions_pos_feedback_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'pos_sessions_pos_feedbackpos_sessions_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'pos_sessions_pos_feedback_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'pos_sessions_pos_feedbackpos_feedback_idb',
      ),
    ),
  ),
);