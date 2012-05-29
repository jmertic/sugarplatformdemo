<?php
// created: 2012-05-03 12:51:47
$viewdefs = array (
  'pos_Sponsors' => 
  array (
    'DetailView' => 
    array (
      'templateMeta' => 
      array (
        'form' => 
        array (
          'buttons' => 
          array (
            0 => 'EDIT',
            1 => 'DUPLICATE',
            2 => 'DELETE',
            3 => 'FIND_DUPLICATES',
          ),
        ),
        'maxColumns' => '2',
        'widths' => 
        array (
          0 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
          1 => 
          array (
            'label' => '10',
            'field' => '30',
          ),
        ),
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'name',
              'displayParams' => 
              array (
                'enableConnectors' => true,
                'module' => 'pos_Sponsors',
                'connectors' => 
                array (
                  0 => 'ext_rest_googlenews',
                ),
              ),
            ),
            1 => 'phone_office',
          ),
          1 => 
          array (
            0 => 
            array (
              'name' => 'website',
              'type' => 'link',
            ),
            1 => 'phone_fax',
          ),
          2 => 
          array (
            0 => 'ticker_symbol',
            1 => 
            array (
              'name' => 'phone_alternate',
              'label' => 'LBL_OTHER_PHONE',
            ),
          ),
          3 => 
          array (
            0 => 
            array (
              'name' => '',
              'displayParams' => 
              array (
              ),
            ),
            1 => 'employees',
          ),
          4 => 
          array (
            0 => 'ownership',
            1 => 'rating',
          ),
          5 => 
          array (
            0 => 'industry',
          ),
          6 => 
          array (
            0 => 'pos_sponsors_type',
            1 => 'annual_revenue',
          ),
          7 => 
          array (
            0 => 'team_name',
            1 => 
            array (
              'name' => 'date_modified',
              'label' => 'LBL_DATE_MODIFIED',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
            ),
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'assigned_user_name',
              'label' => 'LBL_ASSIGNED_TO',
            ),
            1 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
            ),
          ),
          9 => 
          array (
            0 => 
            array (
              'name' => 'billing_address_street',
              'label' => 'LBL_BILLING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'billing',
              ),
            ),
            1 => 
            array (
              'name' => 'shipping_address_street',
              'label' => 'LBL_SHIPPING_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'shipping',
              ),
            ),
          ),
          10 => 
          array (
            0 => 'description',
          ),
          11 => 
          array (
            0 => 'email1',
          ),
        ),
      ),
    ),
  ),
);