<?php
// created: 2012-05-03 12:51:47
$viewdefs = array (
  'pos_Speakers' => 
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
        'useTabs' => true,
      ),
      'panels' => 
      array (
        'default' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'full_name',
              'label' => 'LBL_NAME',
              'displayParams' => 
              array (
                'enableConnectors' => true,
                'module' => 'pos_Speakers',
                'connectors' => 
                array (
                  0 => 'ext_rest_linkedin',
                ),
              ),
            ),
            1 => 
            array (
              'name' => 'phone_work',
            ),
          ),
          1 => 
          array (
            0 => 'title',
            1 => 
            array (
              'name' => 'phone_mobile',
            ),
          ),
          2 => 
          array (
            0 => 'department',
            1 => 
            array (
              'name' => 'phone_home',
              'label' => 'LBL_HOME_PHONE',
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
            1 => 
            array (
              'name' => 'phone_other',
              'label' => 'LBL_OTHER_PHONE',
            ),
          ),
          4 => 
          array (
            0 => 
            array (
              'name' => 'date_entered',
              'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}',
              'label' => 'LBL_DATE_ENTERED',
            ),
            1 => 
            array (
              'name' => 'phone_fax',
              'label' => 'LBL_FAX_PHONE',
            ),
          ),
          5 => 
          array (
            0 => 
            array (
              'name' => 'date_modified',
              'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}',
              'label' => 'LBL_DATE_MODIFIED',
            ),
            1 => 'do_not_call',
          ),
          6 => 
          array (
            0 => 'assigned_user_name',
            1 => '',
          ),
          7 => 
          array (
            0 => 'email1',
          ),
          8 => 
          array (
            0 => 
            array (
              'name' => 'primary_address_street',
              'label' => 'LBL_PRIMARY_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'primary',
              ),
            ),
            1 => 
            array (
              'name' => 'alt_address_street',
              'label' => 'LBL_ALT_ADDRESS',
              'type' => 'address',
              'displayParams' => 
              array (
                'key' => 'alt',
              ),
            ),
          ),
          9 => 
          array (
            0 => 'description',
          ),
          10 => 
          array (
            0 => 
            array (
              'name' => 'twitter_id',
              'label' => 'LBL_TWITTER_ID',
            ),
            1 => 
            array (
              'name' => 'joindin_id',
              'label' => 'LBL_JOINDIN_ID',
            ),
          ),
        ),
        'lbl_detailview_panel3' => 
        array (
          0 => 
          array (
            0 => 
            array (
              'name' => 'twitter_widget',
              'studio' => 'visible',
              'label' => 'LBL_TWITTER_WIDGET',
            ),
            1 => 
            array (
              'name' => 'joindin_profile',
              'label' => 'LBL_JOINDIN_PROFILE',
            ),
          ),
        ),
      ),
    ),
  ),
);