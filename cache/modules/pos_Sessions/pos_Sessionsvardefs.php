<?php 
 $GLOBALS["dictionary"]["pos_Sessions"]=array (
  'table' => 'pos_sessions',
  'audited' => true,
  'duplicate_merge' => true,
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_ID',
      'type' => 'id',
      'required' => true,
      'reportable' => true,
      'comment' => 'Unique identifier',
    ),
    'name' => 
    array (
      'name' => 'name',
      'vname' => 'LBL_NAME',
      'type' => 'name',
      'link' => true,
      'dbType' => 'varchar',
      'len' => 255,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'required' => true,
      'importable' => 'required',
      'duplicate_merge' => 'enabled',
      'merge_filter' => 'selected',
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'group' => 'created_by_name',
      'comment' => 'Date record created',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'group' => 'modified_by_name',
      'comment' => 'Date record last modified',
      'enable_range_search' => true,
      'options' => 'date_range_search_dom',
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_MODIFIED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'group' => 'modified_by_name',
      'dbType' => 'id',
      'reportable' => true,
      'comment' => 'User who last modified record',
      'massupdate' => false,
    ),
    'modified_by_name' => 
    array (
      'name' => 'modified_by_name',
      'vname' => 'LBL_MODIFIED_NAME',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'rname' => 'user_name',
      'table' => 'users',
      'id_name' => 'modified_user_id',
      'module' => 'Users',
      'link' => 'modified_user_link',
      'duplicate_merge' => 'disabled',
      'massupdate' => false,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_CREATED',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => 'false',
      'dbType' => 'id',
      'group' => 'created_by_name',
      'comment' => 'User who created record',
      'massupdate' => false,
    ),
    'created_by_name' => 
    array (
      'name' => 'created_by_name',
      'vname' => 'LBL_CREATED',
      'type' => 'relate',
      'reportable' => false,
      'link' => 'created_by_link',
      'rname' => 'user_name',
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'created_by',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
      'importable' => 'false',
      'massupdate' => false,
    ),
    'description' => 
    array (
      'name' => 'description',
      'vname' => 'LBL_DESCRIPTION',
      'type' => 'text',
      'comment' => 'Full text of the note',
      'rows' => 6,
      'cols' => 80,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'default' => '0',
      'reportable' => false,
      'comment' => 'Record deletion indicator',
    ),
    'created_by_link' => 
    array (
      'name' => 'created_by_link',
      'type' => 'link',
      'relationship' => 'pos_sessions_created_by',
      'vname' => 'LBL_CREATED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'modified_user_link' => 
    array (
      'name' => 'modified_user_link',
      'type' => 'link',
      'relationship' => 'pos_sessions_modified_user',
      'vname' => 'LBL_MODIFIED_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
    ),
    'assigned_user_id' => 
    array (
      'name' => 'assigned_user_id',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'vname' => 'LBL_ASSIGNED_TO_ID',
      'group' => 'assigned_user_name',
      'type' => 'relate',
      'table' => 'users',
      'module' => 'Users',
      'reportable' => true,
      'isnull' => 'false',
      'dbType' => 'id',
      'audited' => true,
      'comment' => 'User ID assigned to record',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_name' => 
    array (
      'name' => 'assigned_user_name',
      'link' => 'assigned_user_link',
      'vname' => 'LBL_ASSIGNED_TO_NAME',
      'rname' => 'user_name',
      'type' => 'relate',
      'reportable' => false,
      'source' => 'non-db',
      'table' => 'users',
      'id_name' => 'assigned_user_id',
      'module' => 'Users',
      'duplicate_merge' => 'disabled',
    ),
    'assigned_user_link' => 
    array (
      'name' => 'assigned_user_link',
      'type' => 'link',
      'relationship' => 'pos_sessions_assigned_user',
      'vname' => 'LBL_ASSIGNED_TO_USER',
      'link_type' => 'one',
      'module' => 'Users',
      'bean_name' => 'User',
      'source' => 'non-db',
      'duplicate_merge' => 'enabled',
      'rname' => 'user_name',
      'id_name' => 'assigned_user_id',
      'table' => 'users',
    ),
    'status' => 
    array (
      'required' => true,
      'name' => 'status',
      'vname' => 'LBL_STATUS',
      'type' => 'enum',
      'massupdate' => '1',
      'default' => 'In Review',
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'len' => 100,
      'size' => '20',
      'options' => 'status_list',
      'studio' => 'visible',
      'dependency' => false,
    ),
    'joindin_id' => 
    array (
      'required' => false,
      'name' => 'joindin_id',
      'vname' => 'LBL_JOINDIN_ID',
      'type' => 'int',
      'massupdate' => 0,
      'comments' => '',
      'help' => '',
      'importable' => 'true',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => true,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
      'enable_range_search' => false,
      'disable_num_format' => '1',
    ),
    'joindin_widget' => 
    array (
      'required' => false,
      'source' => 'non-db',
      'name' => 'joindin_widget',
      'vname' => 'LBL_JOINDIN_WIDGET',
      'type' => 'html',
      'massupdate' => 0,
      'default' => '<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
   $.getScript("http://joind.in/widget/widget.php", function() {        joindin.draw(document.getElementById(\'joindin_id\').innerHTML,"joindin_widget"); });
// ]]></script>
<p>{/literal}</p>',
      'comments' => '',
      'help' => '',
      'importable' => 'false',
      'duplicate_merge' => 'disabled',
      'duplicate_merge_dom_value' => '0',
      'audited' => false,
      'reportable' => true,
      'unified_search' => false,
      'len' => '255',
      'size' => '20',
      'default_value' => '<p>{literal}</p>
<script type="text/javascript">// <![CDATA[
   $.getScript("http://joind.in/widget/widget.php", function() {        joindin.draw(document.getElementById(\'joindin_id\').innerHTML,"joindin_widget"); });
// ]]></script>
<p>{/literal}</p>',
      'studio' => 'visible',
      'dbType' => 'text',
    ),
    'pos_sessions_pos_events' => 
    array (
      'name' => 'pos_sessions_pos_events',
      'type' => 'link',
      'relationship' => 'pos_sessions_pos_events',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SESSIONS_POS_EVENTS_FROM_POS_EVENTS_TITLE',
    ),
    'pos_sessions_pos_feedback' => 
    array (
      'name' => 'pos_sessions_pos_feedback',
      'type' => 'link',
      'relationship' => 'pos_sessions_pos_feedback',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_POS_SESSIONS_POS_FEEDBACK_FROM_POS_FEEDBACK_TITLE',
    ),
    'pos_speakers_pos_sessions' => 
    array (
      'name' => 'pos_speakers_pos_sessions',
      'type' => 'link',
      'relationship' => 'pos_speakers_pos_sessions',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SPEAKERS_TITLE',
      'id_name' => 'pos_speakers_pos_sessionspos_speakers_ida',
    ),
    'pos_speakers_pos_sessions_name' => 
    array (
      'name' => 'pos_speakers_pos_sessions_name',
      'type' => 'relate',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SPEAKERS_TITLE',
      'save' => true,
      'id_name' => 'pos_speakers_pos_sessionspos_speakers_ida',
      'link' => 'pos_speakers_pos_sessions',
      'table' => 'pos_speakers',
      'module' => 'pos_Speakers',
      'rname' => 'name',
      'db_concat_fields' => 
      array (
        0 => 'first_name',
        1 => 'last_name',
      ),
    ),
    'pos_speakers_pos_sessionspos_speakers_ida' => 
    array (
      'name' => 'pos_speakers_pos_sessionspos_speakers_ida',
      'type' => 'link',
      'relationship' => 'pos_speakers_pos_sessions',
      'source' => 'non-db',
      'reportable' => false,
      'side' => 'right',
      'vname' => 'LBL_POS_SPEAKERS_POS_SESSIONS_FROM_POS_SESSIONS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'pos_sessions_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sessions',
      'rhs_table' => 'pos_sessions',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'pos_sessions_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sessions',
      'rhs_table' => 'pos_sessions',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'pos_sessions_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sessions',
      'rhs_table' => 'pos_sessions',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'pos_sessionspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);