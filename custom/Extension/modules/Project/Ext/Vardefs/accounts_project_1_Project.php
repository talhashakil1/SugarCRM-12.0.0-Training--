<?php

$dictionary["Project"]["fields"]["accounts_project_1"] = array (
  'name' => 'accounts_project_1',
  'type' => 'link',
  'relationship' => 'accounts_project_1',
  'source' => 'non-db',
  'module' => 'Accounts',
  'bean_name' => 'Account',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_ACCOUNTS_TITLE',
  'id_name' => 'accounts_documents_1accounts_ida',
);
$dictionary["Project"]["fields"]["accounts_project_1_name"] = array (
  'name' => 'accounts_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_ACCOUNTS_TITLE',
  'save' => true,
  'id_name' => 'accounts_project_1accounts_ida',
  'link' => 'accounts_project_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'name',
);
$dictionary["Project"]["fields"]["accounts_project_1accounts_ida"] = array (
  'name' => 'accounts_project_1accounts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_ACCOUNTS_TITLE_ID',
  'id_name' => 'accounts_project_1accounts_ida',
  'link' => 'accounts_project_1',
  'table' => 'accounts',
  'module' => 'Accounts',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
