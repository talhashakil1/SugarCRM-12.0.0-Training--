<?php


$fields=array(
	'name' => 'integer_field_example',
	'label' => 'LBL_INTEGER_FIELD_EXAMPLE',
	'type' => 'INTEGER',
	'module' => 'Accounts',
	'help' => '',
	'comment' => '',
	'default_value' => 13,
	'max_size' => 255,
	'required' => false, // true or false
	'reportable' => true, // true or false
	'audited' => false, // true or false
	'importable' => 'true', // 'true', 'false', 'required'
	'duplicate_merge' => false, // true or false
);

require_once('ModuleInstall/ModuleInstaller.php');
$moduleInstaller = new ModuleInstaller();
$moduleInstaller->install_custom_fields($fields);
    
 ?>
