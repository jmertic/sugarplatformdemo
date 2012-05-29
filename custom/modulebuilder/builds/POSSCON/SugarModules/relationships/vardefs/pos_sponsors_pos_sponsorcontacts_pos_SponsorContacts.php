<?php
// created: 2012-03-22 22:24:10
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
