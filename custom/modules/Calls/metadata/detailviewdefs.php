<?php
// created: 2012-05-02 15:39:10
$viewdefs['Calls']['DetailView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'buttons' => 
      array (
        0 => 'EDIT',
        1 => 'DUPLICATE',
        2 => 'DELETE',
        3 => 
        array (
          'customCode' => '{if $fields.status.value != "Held"} <input type="hidden" name="isSaveAndNew" value="false">  <input type="hidden" name="status" value="">  <input type="hidden" name="isSaveFromDetailView" value="true">  <input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"   class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'" id="close_create_button" name="button"  value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}"  type="submit">{/if}',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}',
              'class' => 'button',
              'onclick' => 'this.form.isSaveFromDetailView.value=true; this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isDuplicate.value=true;this.form.isSaveAndNew.value=true;this.form.return_action.value=\'EditView\'; this.form.return_id.value=\'{$fields.id.value}\'',
              'name' => 'button',
              'id' => 'close_create_button',
            ),
            'template' => '{if $fields.status.value != "Held"}[CONTENT]{/if}',
          ),
        ),
        4 => 
        array (
          'customCode' => '{if $fields.status.value != "Held"} <input type="hidden" name="isSave" value="false">  <input title="{$APP.LBL_CLOSE_BUTTON_TITLE}"  accesskey="{$APP.LBL_CLOSE_BUTTON_KEY}"  class="button"  onclick="this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'" id="close_button" name="button1"  value="{$APP.LBL_CLOSE_BUTTON_TITLE}"  type="submit">{/if}',
          'sugar_html' => 
          array (
            'type' => 'submit',
            'value' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
            'htmlOptions' => 
            array (
              'title' => '{$APP.LBL_CLOSE_BUTTON_TITLE}',
              'accesskey' => '{$APP.LBL_CLOSE_BUTTON_KEY}',
              'class' => 'button',
              'onclick' => 'this.form.status.value=\'Held\'; this.form.action.value=\'Save\';this.form.return_module.value=\'Calls\';this.form.isSave.value=true;this.form.return_action.value=\'DetailView\'; this.form.return_id.value=\'{$fields.id.value}\'',
              'name' => 'button1',
              'id' => 'close_button',
            ),
            'template' => '{if $fields.status.value != "Held"}[CONTENT]{/if}',
          ),
        ),
      ),
      'hidden' => 
      array (
        0 => '<input type="hidden" name="isSaveAndNew">',
        1 => '<input type="hidden" name="status">',
        2 => '<input type="hidden" name="isSaveFromDetailView">',
        3 => '<input type="hidden" name="isSave">',
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
    'lbl_call_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'label' => 'LBL_SUBJECT',
        ),
        1 => 
        array (
          'name' => 'direction',
          'customCode' => '{$fields.direction.options[$fields.direction.value]} {$fields.status.options[$fields.status.value]}',
          'label' => 'LBL_STATUS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'date_start',
          'customCode' => '{$fields.date_start.value} {$fields.time_start.value}&nbsp;',
          'label' => 'LBL_DATE_TIME',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'customLabel' => '{sugar_translate label=\'LBL_MODULE_NAME\' module=$fields.parent_type.value}',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'duration_hours',
          'customCode' => '{$fields.duration_hours.value}{$MOD.LBL_HOURS_ABBREV} {$fields.duration_minutes.value}{$MOD.LBL_MINSS_ABBREV}&nbsp;',
          'label' => 'LBL_DURATION',
        ),
        1 => 
        array (
          'name' => 'reminder_checked',
          'fields' => 
          array (
            0 => 'reminder_checked',
            1 => 'reminder_time',
          ),
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'comment' => 'Full text of the note',
          'label' => 'LBL_DESCRIPTION',
        ),
        1 => '',
      ),
      4 => 
      array (
        0 => '',
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
        0 => 
        array (
          'name' => 'pos_speakers_activities_calls_name',
        ),
        1 => 
        array (
          'name' => 'pos_sponsorcontacts_activities_calls_name',
        ),
      ),
      34 => 
      array (
        0 => 
        array (
          'name' => 'pos_sponsors_activities_calls_name',
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
          'customCode' => '{$fields.assigned_user_name.value}',
          'label' => 'LBL_ASSIGNED_TO',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'date_modified',
          'customCode' => '{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value}&nbsp;',
          'label' => 'LBL_DATE_MODIFIED',
        ),
        1 => 
        array (
          'name' => 'date_entered',
          'customCode' => '{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value}&nbsp;',
          'label' => 'LBL_DATE_ENTERED',
        ),
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'reminder_time',
          'customCode' => '{include file="modules/Meetings/tpls/reminders.tpl"}',
          'label' => 'LBL_REMINDER',
        ),
      ),
    ),
  ),
);