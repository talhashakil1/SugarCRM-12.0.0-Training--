<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/rli_link_workflow.php

$dictionary['Quote']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Quotes/Ext/Vardefs/quotes_contacts_1_Quotes.php


$dictionary["Quotes"]["fields"]["quotes_contacts_1"] = array (
  'name' => 'quotes_contacts_1',
  'type' => 'link',
  'relationship' => 'quotes_contacts_1',
  'source' => 'non-db',
  'module' => 'Contacts',
  'bean_name' => 'Contact',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE',
  'id_name' => 'quotes_contacts_1contacts_ida',
);
$dictionary["Quotes"]["fields"]["quotes_contacts_1_name"] = array (
  'name' => 'accounts_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'quotes_contacts_1contacts_ida',
  'link' => 'quotes_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'name',
);
$dictionary["Quotes"]["fields"]["quotes_contacts_1contacts_ida"] = array (
  'name' => 'quotes_contacts_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE_ID',
  'id_name' => 'quotes_contacts_1contacts_ida',
  'link' => 'quotes_contacts_1',
  'table' => 'contacts',
  'module' => 'Contacts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
