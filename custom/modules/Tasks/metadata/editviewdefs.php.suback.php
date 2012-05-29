<?php
$viewdefs ['Tasks'] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'hidden' => 
        array (
          0 => '<input type="hidden" name="isSaveAndNew" value="false">',
        ),
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
          2 => 
          array (
            'customCode' => '{if $fields.status.value != "Completed"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="document.getElementById(\'status\').value=\'Completed\'; this.form.action.value=\'Save\'; this.form.return_module.value=\'Tasks\'; this.form.isDuplicate.value=true; this.form.isSaveAndNew.value=true; this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'; return check_form(\'EditView\');" type="submit" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
          ),
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
      'useTabs' => false,
    ),
    'panels' => 
    array (
      'lbl_task_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'status',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'date_start',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'parent_name',
            'label' => 'LBL_LIST_RELATED_TO',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'date_due',
            'type' => 'datetimecombo',
            'displayParams' => 
            array (
              'showNoneCheckbox' => true,
              'showFormats' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'contact_name',
            'label' => 'LBL_CONTACT_NAME',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'priority',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
          ),
          1 => '',
        ),
        5 => 
        array (
          0 => '',
          1 => '',
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
        7 => 
        array (
          0 => '',
          1 => '',
        ),
        8 => 
        array (
          0 => '',
          1 => '',
        ),
        9 => 
        array (
          0 => '',
          1 => '',
        ),
        10 => 
        array (
          0 => '',
          1 => '',
        ),
        11 => 
        array (
          0 => '',
          1 => '',
        ),
        12 => 
        array (
          0 => '',
          1 => '',
        ),
        13 => 
        array (
          0 => '',
          1 => '',
        ),
        14 => 
        array (
          0 => '',
          1 => '',
        ),
        15 => 
        array (
          0 => '',
          1 => '',
        ),
        16 => 
        array (
          0 => '',
          1 => '',
        ),
        17 => 
        array (
          0 => '',
          1 => '',
        ),
        18 => 
        array (
          0 => '',
          1 => '',
        ),
        19 => 
        array (
          0 => '',
          1 => '',
        ),
        20 => 
        array (
          0 => '',
          1 => '',
        ),
        21 => 
        array (
          0 => '',
          1 => '',
        ),
        22 => 
        array (
          0 => '',
          1 => '',
        ),
        23 => 
        array (
          0 => '',
          1 => '',
        ),
        24 => 
        array (
          0 => '',
          1 => '',
        ),
        25 => 
        array (
          0 => '',
          1 => '',
        ),
        26 => 
        array (
          0 => '',
          1 => '',
        ),
        27 => 
        array (
          0 => '',
          1 => '',
        ),
        28 => 
        array (
          0 => '',
          1 => '',
        ),
        29 => 
        array (
          0 => '',
          1 => '',
        ),
        30 => 
        array (
          0 => '',
          1 => '',
        ),
        31 => 
        array (
          0 => '',
          1 => '',
        ),
        32 => 
        array (
          0 => '',
          1 => '',
        ),
        33 => 
        array (
          0 => '',
          1 => '',
        ),
        34 => 
        array (
          0 => 
          array (
            'name' => 'pos_speakers_activities_tasks_name',
          ),
          1 => 
          array (
            'name' => 'pos_sponsorcontacts_activities_tasks_name',
          ),
        ),
        35 => 
        array (
          0 => 
          array (
            'name' => 'pos_sponsors_activities_tasks_name',
          ),
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO_NAME',
          ),
        ),
      ),
    ),
  ),
);
?>
