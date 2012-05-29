<?php 
 $GLOBALS["dictionary"]["pos_Sponsors"]=array (
  'table' => 'pos_sponsors',
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
      'type' => 'name',
      'dbType' => 'varchar',
      'vname' => 'LBL_NAME',
      'len' => 150,
      'comment' => 'Name of the Company',
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 3,
      ),
      'audited' => true,
      'required' => true,
      'importable' => 'required',
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
      'relationship' => 'pos_sponsors_created_by',
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
      'relationship' => 'pos_sponsors_modified_user',
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
      'relationship' => 'pos_sponsors_assigned_user',
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
    'pos_sponsors_type' => 
    array (
      'name' => 'pos_sponsors_type',
      'vname' => 'LBL_TYPE',
      'type' => 'enum',
      'options' => 'pos_sponsors_type_dom',
      'len' => 50,
      'comment' => 'The Company is of this type',
    ),
    'industry' => 
    array (
      'name' => 'industry',
      'vname' => 'LBL_INDUSTRY',
      'type' => 'enum',
      'options' => 'industry_dom',
      'len' => 50,
      'comment' => 'The company belongs in this industry',
      'merge_filter' => 'enabled',
    ),
    'annual_revenue' => 
    array (
      'name' => 'annual_revenue',
      'vname' => 'LBL_ANNUAL_REVENUE',
      'type' => 'varchar',
      'len' => 100,
      'comment' => 'Annual revenue for this company',
      'merge_filter' => 'enabled',
    ),
    'phone_fax' => 
    array (
      'name' => 'phone_fax',
      'vname' => 'LBL_FAX',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 1,
      ),
      'comment' => 'The fax phone number of this company',
    ),
    'billing_address_street' => 
    array (
      'name' => 'billing_address_street',
      'vname' => 'LBL_BILLING_ADDRESS_STREET',
      'type' => 'varchar',
      'len' => '150',
      'comment' => 'The street address used for billing address',
      'group' => 'billing_address',
      'merge_filter' => 'enabled',
    ),
    'billing_address_street_2' => 
    array (
      'name' => 'billing_address_street_2',
      'vname' => 'LBL_BILLING_ADDRESS_STREET_2',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
    ),
    'billing_address_street_3' => 
    array (
      'name' => 'billing_address_street_3',
      'vname' => 'LBL_BILLING_ADDRESS_STREET_3',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
    ),
    'billing_address_street_4' => 
    array (
      'name' => 'billing_address_street_4',
      'vname' => 'LBL_BILLING_ADDRESS_STREET_4',
      'type' => 'varchar',
      'len' => '150',
      'source' => 'non-db',
    ),
    'billing_address_city' => 
    array (
      'name' => 'billing_address_city',
      'vname' => 'LBL_BILLING_ADDRESS_CITY',
      'type' => 'varchar',
      'len' => '100',
      'comment' => 'The city used for billing address',
      'group' => 'billing_address',
      'merge_filter' => 'enabled',
    ),
    'billing_address_state' => 
    array (
      'name' => 'billing_address_state',
      'vname' => 'LBL_BILLING_ADDRESS_STATE',
      'type' => 'varchar',
      'len' => '100',
      'group' => 'billing_address',
      'comment' => 'The state used for billing address',
      'merge_filter' => 'enabled',
    ),
    'billing_address_postalcode' => 
    array (
      'name' => 'billing_address_postalcode',
      'vname' => 'LBL_BILLING_ADDRESS_POSTALCODE',
      'type' => 'varchar',
      'len' => '20',
      'group' => 'billing_address',
      'comment' => 'The postal code used for billing address',
      'merge_filter' => 'enabled',
    ),
    'billing_address_country' => 
    array (
      'name' => 'billing_address_country',
      'vname' => 'LBL_BILLING_ADDRESS_COUNTRY',
      'type' => 'varchar',
      'group' => 'billing_address',
      'comment' => 'The country used for the billing address',
      'merge_filter' => 'enabled',
    ),
    'rating' => 
    array (
      'name' => 'rating',
      'vname' => 'LBL_RATING',
      'type' => 'varchar',
      'len' => 100,
      'comment' => 'An arbitrary rating for this company for use in comparisons with others',
    ),
    'phone_office' => 
    array (
      'name' => 'phone_office',
      'vname' => 'LBL_PHONE_OFFICE',
      'type' => 'phone',
      'dbType' => 'varchar',
      'len' => 100,
      'audited' => true,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 1,
      ),
      'comment' => 'The office phone number',
      'merge_filter' => 'enabled',
    ),
    'phone_alternate' => 
    array (
      'name' => 'phone_alternate',
      'vname' => 'LBL_PHONE_ALT',
      'type' => 'phone',
      'group' => 'phone_office',
      'dbType' => 'varchar',
      'len' => 100,
      'unified_search' => true,
      'full_text_search' => 
      array (
        'boost' => 1,
      ),
      'comment' => 'An alternate phone number',
      'merge_filter' => 'enabled',
    ),
    'website' => 
    array (
      'name' => 'website',
      'vname' => 'LBL_WEBSITE',
      'type' => 'url',
      'dbType' => 'varchar',
      'len' => 255,
      'comment' => 'URL of website for the company',
    ),
    'ownership' => 
    array (
      'name' => 'ownership',
      'vname' => 'LBL_OWNERSHIP',
      'type' => 'varchar',
      'len' => 100,
      'comment' => '',
    ),
    'employees' => 
    array (
      'name' => 'employees',
      'vname' => 'LBL_EMPLOYEES',
      'type' => 'varchar',
      'len' => 10,
      'comment' => 'Number of employees, varchar to accomodate for both number (100) or range (50-100)',
    ),
    'ticker_symbol' => 
    array (
      'name' => 'ticker_symbol',
      'vname' => 'LBL_TICKER_SYMBOL',
      'type' => 'varchar',
      'len' => 10,
      'comment' => 'The stock trading (ticker) symbol for the company',
      'merge_filter' => 'enabled',
    ),
    'shipping_address_street' => 
    array (
      'name' => 'shipping_address_street',
      'vname' => 'LBL_SHIPPING_ADDRESS_STREET',
      'type' => 'varchar',
      'len' => 150,
      'group' => 'shipping_address',
      'comment' => 'The street address used for for shipping purposes',
      'merge_filter' => 'enabled',
    ),
    'shipping_address_street_2' => 
    array (
      'name' => 'shipping_address_street_2',
      'vname' => 'LBL_SHIPPING_ADDRESS_STREET_2',
      'type' => 'varchar',
      'len' => 150,
      'source' => 'non-db',
    ),
    'shipping_address_street_3' => 
    array (
      'name' => 'shipping_address_street_3',
      'vname' => 'LBL_SHIPPING_ADDRESS_STREET_3',
      'type' => 'varchar',
      'len' => 150,
      'source' => 'non-db',
    ),
    'shipping_address_street_4' => 
    array (
      'name' => 'shipping_address_street_4',
      'vname' => 'LBL_SHIPPING_ADDRESS_STREET_4',
      'type' => 'varchar',
      'len' => 150,
      'source' => 'non-db',
    ),
    'shipping_address_city' => 
    array (
      'name' => 'shipping_address_city',
      'vname' => 'LBL_SHIPPING_ADDRESS_CITY',
      'type' => 'varchar',
      'len' => 100,
      'group' => 'shipping_address',
      'comment' => 'The city used for the shipping address',
      'merge_filter' => 'enabled',
    ),
    'shipping_address_state' => 
    array (
      'name' => 'shipping_address_state',
      'vname' => 'LBL_SHIPPING_ADDRESS_STATE',
      'type' => 'varchar',
      'len' => 100,
      'group' => 'shipping_address',
      'comment' => 'The state used for the shipping address',
      'merge_filter' => 'enabled',
    ),
    'shipping_address_postalcode' => 
    array (
      'name' => 'shipping_address_postalcode',
      'vname' => 'LBL_SHIPPING_ADDRESS_POSTALCODE',
      'type' => 'varchar',
      'len' => 20,
      'group' => 'shipping_address',
      'comment' => 'The zip code used for the shipping address',
      'merge_filter' => 'enabled',
    ),
    'shipping_address_country' => 
    array (
      'name' => 'shipping_address_country',
      'vname' => 'LBL_SHIPPING_ADDRESS_COUNTRY',
      'type' => 'varchar',
      'group' => 'shipping_address',
      'comment' => 'The country used for the shipping address',
      'merge_filter' => 'enabled',
    ),
    'email1' => 
    array (
      'name' => 'email1',
      'vname' => 'LBL_EMAIL',
      'group' => 'email1',
      'type' => 'varchar',
      'function' => 
      array (
        'name' => 'getEmailAddressWidget',
        'returns' => 'html',
      ),
      'source' => 'non-db',
      'studio' => 
      array (
        'editField' => true,
        'searchview' => false,
      ),
    ),
    'email_addresses_primary' => 
    array (
      'name' => 'email_addresses_primary',
      'type' => 'link',
      'relationship' => 'pos_sponsors_email_addresses_primary',
      'source' => 'non-db',
      'vname' => 'LBL_EMAIL_ADDRESS_PRIMARY',
      'duplicate_merge' => 'disabled',
    ),
    'email_addresses' => 
    array (
      'name' => 'email_addresses',
      'type' => 'link',
      'relationship' => 'pos_sponsors_email_addresses',
      'source' => 'non-db',
      'vname' => 'LBL_EMAIL_ADDRESSES',
      'reportable' => false,
      'unified_search' => true,
      'rel_fields' => 
      array (
        'primary_address' => 
        array (
          'type' => 'bool',
        ),
      ),
    ),
    'pos_sponsors_activities_calls' => 
    array (
      'name' => 'pos_sponsors_activities_calls',
      'type' => 'link',
      'relationship' => 'pos_sponsors_activities_calls',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPONSORS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
    ),
    'pos_sponsors_activities_emails' => 
    array (
      'name' => 'pos_sponsors_activities_emails',
      'type' => 'link',
      'relationship' => 'pos_sponsors_activities_emails',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPONSORS_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
    ),
    'pos_sponsors_activities_meetings' => 
    array (
      'name' => 'pos_sponsors_activities_meetings',
      'type' => 'link',
      'relationship' => 'pos_sponsors_activities_meetings',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPONSORS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
    ),
    'pos_sponsors_activities_notes' => 
    array (
      'name' => 'pos_sponsors_activities_notes',
      'type' => 'link',
      'relationship' => 'pos_sponsors_activities_notes',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPONSORS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
    ),
    'pos_sponsors_activities_tasks' => 
    array (
      'name' => 'pos_sponsors_activities_tasks',
      'type' => 'link',
      'relationship' => 'pos_sponsors_activities_tasks',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPONSORS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
    ),
    'pos_sponsors_pos_events' => 
    array (
      'name' => 'pos_sponsors_pos_events',
      'type' => 'link',
      'relationship' => 'pos_sponsors_pos_events',
      'source' => 'non-db',
      'vname' => 'LBL_POS_SPONSORS_POS_EVENTS_FROM_POS_EVENTS_TITLE',
    ),
    'pos_sponsors_pos_sponsorcontacts' => 
    array (
      'name' => 'pos_sponsors_pos_sponsorcontacts',
      'type' => 'link',
      'relationship' => 'pos_sponsors_pos_sponsorcontacts',
      'source' => 'non-db',
      'side' => 'right',
      'vname' => 'LBL_POS_SPONSORS_POS_SPONSORCONTACTS_FROM_POS_SPONSORCONTACTS_TITLE',
    ),
  ),
  'relationships' => 
  array (
    'pos_sponsors_modified_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sponsors',
      'rhs_table' => 'pos_sponsors',
      'rhs_key' => 'modified_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'pos_sponsors_created_by' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sponsors',
      'rhs_table' => 'pos_sponsors',
      'rhs_key' => 'created_by',
      'relationship_type' => 'one-to-many',
    ),
    'pos_sponsors_assigned_user' => 
    array (
      'lhs_module' => 'Users',
      'lhs_table' => 'users',
      'lhs_key' => 'id',
      'rhs_module' => 'pos_Sponsors',
      'rhs_table' => 'pos_sponsors',
      'rhs_key' => 'assigned_user_id',
      'relationship_type' => 'one-to-many',
    ),
    'pos_sponsors_email_addresses' => 
    array (
      'lhs_module' => 'pos_Sponsors',
      'lhs_table' => 'pos_sponsors',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailAddresses',
      'rhs_table' => 'email_addresses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'email_addr_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'email_address_id',
      'relationship_role_column' => 'bean_module',
      'relationship_role_column_value' => 'pos_Sponsors',
    ),
    'pos_sponsors_email_addresses_primary' => 
    array (
      'lhs_module' => 'pos_Sponsors',
      'lhs_table' => 'pos_sponsors',
      'lhs_key' => 'id',
      'rhs_module' => 'EmailAddresses',
      'rhs_table' => 'email_addresses',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'email_addr_bean_rel',
      'join_key_lhs' => 'bean_id',
      'join_key_rhs' => 'email_address_id',
      'relationship_role_column' => 'primary_address',
      'relationship_role_column_value' => '1',
    ),
  ),
  'optimistic_locking' => true,
  'unified_search' => true,
  'indices' => 
  array (
    'id' => 
    array (
      'name' => 'pos_sponsorspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
  ),
  'templates' => 
  array (
    'company' => 'company',
    'assignable' => 'assignable',
    'basic' => 'basic',
  ),
  'custom_fields' => false,
);