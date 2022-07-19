<?php

$hook_array['before_save'][] = Array(
  1,                        // processing index for sorting the array
  'before_save_example',    //label
  'custom/modules/Accounts/before_save_class.php',  //location of class
  'before_save_class',      //in which class the method is
  'before_save_method'      //method to call
);