<?php

$hook_array['after_retrieve'][] = Array(
  1,                         // processing index for sorting the array
  'after_retrieve_example',    //label
  'custom/modulebuilder/packages/FinalPackage/modules/Testing/Ext/LogicHooks/after_retrieve_class.php',  //location of class
  'after_retrieve_class',      //in which class the method is
  'after_retrieve_method'      //method to call
);