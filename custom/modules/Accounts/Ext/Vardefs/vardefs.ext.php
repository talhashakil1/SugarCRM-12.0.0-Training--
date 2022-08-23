<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/rli_link_workflow.php

$dictionary['Account']['fields']['revenuelineitems']['workflow'] = true;
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_vehicle_number_c.php

 // created: 2022-07-22 19:20:41

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_print_pdf_c.php

 // created: 2022-07-25 10:54:27
$dictionary['Account']['fields']['print_pdf_c']['labelValue']='print pdf';

 
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_calls_1_Accounts.php

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

?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_project_1_Accounts.php


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
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/accounts_messages_1_Accounts.php


$dictionary["Account"]["fields"]["accounts_messages_1"] = array(
    'name' => 'accounts_messages_1',
    'type' => 'link',
    'relationship' => 'accounts_messages_1',
    'source' => 'non-db',
    'module' => 'Messages',
    'bean_name' => 'Message',
    'vname' => 'LBL_ACCOUNTS_MESSAGES_1_FROM_MESSAGES_TITLE',
   // 'id_name' => 'accounts_messages_1messages_idb',
);
// $dictionary["Account"]["fields"]["accounts_messages_1_name"] = array (
//     'name' => 'accounts_messages_1_name',
//     'type' => 'relate',
//     'source' => 'non-db',
//     'vname' => 'LBL_ACCOUNTS_MESSAGES_1_FROM_MESSAGES_TITLE',
//     'save' => true,
//     'id_name' => 'accounts_messages_1messages_idb',
//     'link' => 'accounts_messages_1',
//     'table' => 'messages',
//     'module' => 'Messages',
//     'rname' => 'name',
//   );
//   $dictionary["Account"]["fields"]["accounts_messages_1messages_idb"] = array (
//     'name' => 'accounts_messages_1messages_idb',
//     'type' => 'id',
//     'source' => 'non-db',
//     'vname' => 'LBL_ACCOUNTS_MESSAGES_1_FROM_MESSAGES_TITLE_ID',
//     'id_name' => 'accounts_messages_1messages_idb',
//     'link' => 'accounts_messages_1',
//     'table' => 'messages',
//     'module' => 'Messages',
//     'rname' => 'id',
//     'reportable' => false,
//     'side' => 'left',
//     'massupdate' => false,
//     'duplicate_merge' => 'disabled',
//     'hideacl' => true,
//   );
?>
<?php
// Merged from custom/Extension/modules/Accounts/Ext/Vardefs/sugarfield_controller_dropdown.php


$dictionary['Account']['fields']['controller_dropdown'] = array(
    'name' => 'controller_dropdown',
    'labelValue' => 'Drop Down Whose Options Filled Through Controller',
    'type' => 'enum',
    'readonly' => 'false',
);
?>
