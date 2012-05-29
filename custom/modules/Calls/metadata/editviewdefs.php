<?php
// created: 2012-05-02 15:39:10
$viewdefs['Calls']['EditView'] = array (
  'templateMeta' => 
  array (
    'maxColumns' => '2',
    'form' => 
    array (
      'hidden' => 
      array (
        0 => '<input type="hidden" name="isSaveAndNew" value="false">',
        1 => '<input type="hidden" name="send_invites">',
        2 => '<input type="hidden" name="user_invitees">',
        3 => '<input type="hidden" name="lead_invitees">',
        4 => '<input type="hidden" name="contact_invitees">',
      ),
      'buttons' => 
      array (
        0 => 
        array (
          'customCode' => '<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.calls.fill_invitees();document.EditView.action.value=\'Save\'; document.EditView.return_action.value=\'DetailView\'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=\'\'; {/if}formSubmitCheck();;" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}" id="SAVE">',
        ),
        1 => 'CANCEL',
        2 => 
        array (
          'customCode' => '<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" class="button" onclick="document.EditView.send_invites.value=\'1\';SUGAR.calls.fill_invitees();document.EditView.action.value=\'Save\';document.EditView.return_action.value=\'EditView\';document.EditView.return_module.value=\'{$smarty.request.return_module}\';formSubmitCheck();;" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}">',
        ),
        3 => 
        array (
          'customCode' => '{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" accessKey="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_KEY}" class="button" onclick="SUGAR.calls.fill_invitees(); document.EditView.status.value=\'Held\'; document.EditView.action.value=\'Save\'; document.EditView.return_module.value=\'Calls\'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value=\'EditView\'; document.EditView.return_id.value=\'{$fields.id.value}\'; formSubmitCheck();" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}">{/if}',
        ),
      ),
      'footerTpl' => 'modules/Calls/tpls/footer.tpl',
    ),
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
    'javascript' => '{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim}
function formSubmitCheck(){ldelim}if(check_form(\'EditView\') && isValidDuration()){ldelim}SUGAR.ajaxUI.submitForm("EditView");{rdelim}{rdelim}</script>',
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
          0 => 
          array (
            'name' => 'status',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'direction',
              ),
              1 => 
              array (
                'name' => 'status',
              ),
            ),
          ),
        ),
        1 => 
        array (
          'name' => 'status',
          'comment' => 'The status of the call (Held, Not Held, etc.)',
          'label' => 'LBL_STATUS',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'date_start',
          'displayParams' => 
          array (
            'updateCallback' => 'SugarWidgetScheduler.update_time();',
          ),
          'label' => 'LBL_DATE_TIME',
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
          'name' => 'duration_hours',
          'label' => 'LBL_DURATION',
          'customCode' => '{literal}<script type="text/javascript">function isValidDuration() { form = document.getElementById(\'EditView\'); if ( form.duration_hours.value + form.duration_minutes.value <= 0 ) { alert(\'{/literal}{$MOD.NOTICE_DURATION_TIME}{literal}\'); return false; } return true; }</script>{/literal}<input id="duration_hours" name="duration_hours" size="2" maxlength="2" type="text" value="{$fields.duration_hours.value}" onkeyup="SugarWidgetScheduler.update_time();"/>{$fields.duration_minutes.value}&nbsp;<span class="dateFormat">{$MOD.LBL_HOURS_MINUTES}</span>',
        ),
        1 => 
        array (
          'name' => 'reminder_time',
          'customCode' => '{include file="modules/Meetings/tpls/reminders.tpl"}',
          'label' => 'LBL_REMINDER',
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
          'label' => 'LBL_ASSIGNED_TO_NAME',
        ),
      ),
    ),
  ),
);