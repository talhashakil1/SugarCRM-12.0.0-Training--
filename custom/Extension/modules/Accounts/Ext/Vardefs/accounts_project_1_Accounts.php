<?php

$dictionary["Account"]["fields"]["accounts_project_1"] = array(
    'name' => 'accounts_project_1',
    'type' => 'link',
    'relationship' => 'accounts_project_1',
    'source' => 'non-db',
    'module' => 'Project',
    'bean_name' => 'Project',
    'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_PROJECT_TITLE',
    'id_name' => 'accounts_project_1project_idb',
);
$dictionary["Account"]["fields"]["accounts_project_1_name"] = array (
    'name' => 'accounts_project_1_name',
    'type' => 'relate',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_PROJECT_TITLE',
    'save' => true,
    'id_name' => 'accounts_project_1project_idb',
    'link' => 'accounts_project_1',
    'table' => 'project',
    'module' => 'Project',
    'rname' => 'name',
  );
  $dictionary["Account"]["fields"]["accounts_project_1project_idb"] = array (
    'name' => 'accounts_project_1project_idb',
    'type' => 'id',
    'source' => 'non-db',
    'vname' => 'LBL_ACCOUNTS_PROJECT_1_FROM_PROJECT_TITLE_ID',
    'id_name' => 'accounts_project_1project_idb',
    'link' => 'accounts_project_1',
    'table' => 'project',
    'module' => 'Project',
    'rname' => 'id',
    'reportable' => false,
    'side' => 'left',
    'massupdate' => false,
    'duplicate_merge' => 'disabled',
    'hideacl' => true,
  );