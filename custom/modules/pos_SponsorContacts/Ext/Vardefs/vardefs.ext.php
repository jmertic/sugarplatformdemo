<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2012-03-24 00:03:24
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsorcontacts_activities_calls"] = array (
  'name' => 'pos_sponsorcontacts_activities_calls',
  'type' => 'link',
  'relationship' => 'pos_sponsorcontacts_activities_calls',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORCONTACTS_ACTIVITIES_CALLS_FROM_CALLS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsorcontacts_activities_emails"] = array (
  'name' => 'pos_sponsorcontacts_activities_emails',
  'type' => 'link',
  'relationship' => 'pos_sponsorcontacts_activities_emails',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORCONTACTS_ACTIVITIES_EMAILS_FROM_EMAILS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsorcontacts_activities_meetings"] = array (
  'name' => 'pos_sponsorcontacts_activities_meetings',
  'type' => 'link',
  'relationship' => 'pos_sponsorcontacts_activities_meetings',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORCONTACTS_ACTIVITIES_MEETINGS_FROM_MEETINGS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsorcontacts_activities_notes"] = array (
  'name' => 'pos_sponsorcontacts_activities_notes',
  'type' => 'link',
  'relationship' => 'pos_sponsorcontacts_activities_notes',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORCONTACTS_ACTIVITIES_NOTES_FROM_NOTES_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsorcontacts_activities_tasks"] = array (
  'name' => 'pos_sponsorcontacts_activities_tasks',
  'type' => 'link',
  'relationship' => 'pos_sponsorcontacts_activities_tasks',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORCONTACTS_ACTIVITIES_TASKS_FROM_TASKS_TITLE',
);


// created: 2012-03-24 00:03:24
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsors_pos_sponsorcontacts"] = array (
  'name' => 'pos_sponsors_pos_sponsorcontacts',
  'type' => 'link',
  'relationship' => 'pos_sponsors_pos_sponsorcontacts',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORS_POS_SPONSORCONTACTS_FROM_POS_SPONSORS_TITLE',
  'id_name' => 'pos_sponsors_pos_sponsorcontactspos_sponsors_ida',
);
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsors_pos_sponsorcontacts_name"] = array (
  'name' => 'pos_sponsors_pos_sponsorcontacts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_POS_SPONSORS_POS_SPONSORCONTACTS_FROM_POS_SPONSORS_TITLE',
  'save' => true,
  'id_name' => 'pos_sponsors_pos_sponsorcontactspos_sponsors_ida',
  'link' => 'pos_sponsors_pos_sponsorcontacts',
  'table' => 'pos_sponsors',
  'module' => 'pos_Sponsors',
  'rname' => 'name',
);
$dictionary["pos_SponsorContacts"]["fields"]["pos_sponsors_pos_sponsorcontactspos_sponsors_ida"] = array (
  'name' => 'pos_sponsors_pos_sponsorcontactspos_sponsors_ida',
  'type' => 'link',
  'relationship' => 'pos_sponsors_pos_sponsorcontacts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_POS_SPONSORS_POS_SPONSORCONTACTS_FROM_POS_SPONSORCONTACTS_TITLE',
);

?>