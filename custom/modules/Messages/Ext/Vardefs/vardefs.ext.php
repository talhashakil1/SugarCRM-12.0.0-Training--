<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Messages/Ext/Vardefs/rli_link_workflow.php

$dictionary['Message']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Messages/Ext/Vardefs/accounts_messages_1_Messages.php


$dictionary["Message"]["fields"]["accounts_messages_1"] = array (
  'name' => 'accounts_messages_1',
  'type' => 'link',
  'relationship' => 'accounts_messages_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_MESSAGES_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_messages_1accounts_ida',
);
$dictionary["Message"]["fields"]["accounts_messages_1_name"] = array (
  'name' => 'accounts_messages_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MESSAGES_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_messages_1accounts_ida',
  'link' => 'accounts_messages_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Message"]["fields"]["accounts_messages_1accounts_ida"] = array (
  'name' => 'accounts_messages_1accounts_ida',
  'type' => 'id',
  //'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_MESSAGES_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'accounts_messages_1accounts_ida',
  'link' => 'accounts_messages_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
$dictionary['Message']['relationships']['accounts_messages_1'] = array(
  'lhs_module'		=> 'Accounts',
  'lhs_table'			=> 'accounts',
  'lhs_key'			=> 'id',
  'rhs_module'		=> 'Messages',
  'rhs_table'			=> 'messages',
  'rhs_key'			=> 'accounts_messages_1accounts_ida',
  'relationship_type'	=> 'one-to-many',
  );
?>
