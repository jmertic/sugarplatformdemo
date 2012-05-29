<?php
// created: 2012-05-02 15:39:10
$viewdefs['Notes']['EditView'] = array (
  'templateMeta' => 
  array (
    'form' => 
    array (
      'enctype' => 'multipart/form-data',
      'headerTpl' => 'modules/Notes/tpls/EditViewHeader.tpl',
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
    'javascript' => '<script type="text/javascript" src="include/javascript/dashlets.js?s={$SUGAR_VERSION}&c={$JS_CUSTOM_VERSION}"></script>
<script>
function deleteAttachmentCallBack(text)
	{literal} { {/literal}
	if(text == \'true\') {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'\';
		ajaxStatus.hideStatus();
		document.getElementById(\'old_attachment\').innerHTML = \'\';
	{literal} } {/literal} else {literal} { {/literal}
		document.getElementById(\'new_attachment\').style.display = \'none\';
		ajaxStatus.flashStatus(SUGAR.language.get(\'Notes\', \'ERR_REMOVING_ATTACHMENT\'), 2000);
	{literal} } {/literal}
{literal} } {/literal}
</script>
<script>toggle_portal_flag(); function toggle_portal_flag()  {literal} { {/literal} {$TOGGLE_JS} {literal} } {/literal} </script>',
  ),
  'panels' => 
  array (
    'lbl_note_information' => 
    array (
      0 => 
      array (
        0 => 
        array (
          'name' => 'contact_name',
          'label' => 'LBL_CONTACT_NAME',
        ),
        1 => 
        array (
          'name' => 'parent_name',
          'label' => 'LBL_RELATED_TO',
        ),
      ),
      1 => 
      array (
        0 => 
        array (
          'name' => 'name',
          'displayParams' => 
          array (
            'size' => 60,
          ),
        ),
        1 => '',
      ),
      2 => 
      array (
        0 => 
        array (
          'name' => 'filename',
          'comment' => 'File name associated with the note (attachment)',
          'label' => 'LBL_FILENAME',
        ),
      ),
      3 => 
      array (
        0 => 
        array (
          'name' => 'description',
          'label' => 'LBL_NOTE_STATUS',
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
          'name' => 'pos_speakers_activities_notes_name',
        ),
        1 => 
        array (
          'name' => 'pos_sponsorcontacts_activities_notes_name',
        ),
      ),
      34 => 
      array (
        0 => 
        array (
          'name' => 'pos_sponsors_activities_notes_name',
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
          'label' => 'LBL_ASSIGNED_TO',
        ),
      ),
    ),
  ),
);