<?php

$dictionary["Contacts"]["fields"]["quotes_contacts_1"] = array (
  'name' => 'quotes_contacts_1',
  'type' => 'link',
  'relationship' => 'quotes_contacts_1',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE',
  'id_name' => 'quotes_contacts_1contacts_ida',
);
$dictionary["Contacts"]["fields"]["quotes_contacts_1_name"] = array (
  'name' => 'accounts_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'quotes_contacts_1contacts_ida',
  'link' => 'quotes_contacts_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'name',
);
$dictionary["Contacts"]["fields"]["quotes_contacts_1contacts_ida"] = array (
  'name' => 'quotes_contacts_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE_ID',
  'id_name' => 'quotes_contacts_1contacts_ida',
  'link' => 'quotes_contacts_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
