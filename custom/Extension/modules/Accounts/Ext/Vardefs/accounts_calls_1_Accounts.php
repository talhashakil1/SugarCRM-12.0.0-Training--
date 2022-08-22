<?php
// created: 2022-08-04 12:47:22
$dictionary["Account"]["fields"]["accounts_calls_1"] = array (
  'name' => 'accounts_calls_1',
  'type' => 'link',
  'relationship' => 'accounts_calls_1',
  'source' => 'non-db',
  'module' => 'Calls',
  'bean_name' => 'Call',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_CALLS_TITLE',
  'id_name' => 'accounts_calls_1calls_idb',
);
$dictionary["Account"]["fields"]["accounts_calls_1_name"] = array (
  'name' => 'accounts_calls_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_CALLS_TITLE',
  'save' => true,
  'id_name' => 'accounts_calls_1calls_idb',
  'link' => 'accounts_calls_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'name',
);
$dictionary["Account"]["fields"]["accounts_calls_1calls_idb"] = array (
  'name' => 'accounts_calls_1calls_idb',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_CALLS_1_FROM_CALLS_TITLE_ID',
  'id_name' => 'accounts_calls_1calls_idb',
  'link' => 'accounts_calls_1',
  'table' => 'calls',
  'module' => 'Calls',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
