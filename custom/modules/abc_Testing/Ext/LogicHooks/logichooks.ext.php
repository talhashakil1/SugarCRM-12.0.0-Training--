<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/abc_Testing/Ext/LogicHooks/after_retrieve_class.php


if(!defined('sugarEntry') || !sugarEntry)
    die('Not a valid entry point');

class after_retrieve_class
{
    function after_retrieve_method(&$bean, $events, $arguments)
    {
        $bean->vehicle_number = 'PK-747';
        $GLOBALS['log']->fatal('vehicle number changed');
    }
}
?>
<?php
// Merged from modules/abc_Testing/Ext/LogicHooks/after_retrieve_hook.php


$hook_array['after_retrieve'][] = Array(
  1,                         // processing index for sorting the array
  'after_retrieve_example',    //label
  'custom/modulebuilder/packages/FinalPackage/modules/Testing/Ext/LogicHooks/after_retrieve_class.php',  //location of class
  'after_retrieve_class',      //in which class the method is
  'after_retrieve_method'      //method to call
);
?>
