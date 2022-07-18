<?php
// created: 2022-07-18 16:02:29
$dictionary["Contact"]["fields"]["cases_contacts_1"] = array (
  'name' => 'cases_contacts_1',
  'type' => 'link',
  'relationship' => 'cases_contacts_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'cases_contacts_1cases_ida',
  'link-type' => 'one',
);
$dictionary["Contact"]["fields"]["cases_contacts_1_name"] = array (
  'name' => 'cases_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_contacts_1cases_ida',
  'link' => 'cases_contacts_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["cases_contacts_1cases_ida"] = array (
  'name' => 'cases_contacts_1cases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CONTACTS_TITLE_ID',
  'id_name' => 'cases_contacts_1cases_ida',
  'link' => 'cases_contacts_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
