<?php
// created: 2022-08-04 12:47:22
$dictionary["Call"]["fields"]["accounts_calls_1"] = array (
  'name' => 'accounts_calls_1',
  'type' => 'link',
  'relationship' => 'accounts_calls_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_calls_1accounts_ida',
);
$dictionary["Call"]["fields"]["accounts_calls_1_name"] = array (
  'name' => 'accounts_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_calls_1accounts_ida',
  'link' => 'accounts_calls_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Call"]["fields"]["accounts_calls_1accounts_ida"] = array (
  'name' => 'accounts_calls_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'accounts_calls_1accounts_ida',
  'link' => 'accounts_calls_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
