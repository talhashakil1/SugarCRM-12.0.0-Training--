<?php

$manifest = array(
    'acceptable_sugar_flavors' => array(
        'PRO',
        'ENT',
        'ULT'
    ),

    'acceptable_sugar_versions' => array(
        
      'regex_matches' => array(
          '.*',
      ),

    ),
    'author' => 'Talha',
    'description' => 'Installs a Field, after_retrieve Logic hook and Scheduler',
    'icon' => '',
    'is_uninstallable' => true,
    'name' => 'HooksPackage',
    'published_date' => '2022-07-22 03:44:05',
    'type' => 'module',
    'version' => '1.0.0',
);

$installdefs = array(
  'id' => 'abc1',


  'copy' => array(
    array(
      'from' => '<basepath>/Files/custom/modules/Accounts/vehicle_retrieve.php',
      'to' => 'custom/modules/Accounts/vehicle_retrieve.php',
    ),
    array(
      'from' => '<basepath>/Files/custom/Extension/modules/Schedulers/Ext/ScheduledTasks/change_description_job.php',
      'to' => 'custom/Extension/modules/Schedulers/Ext/ScheduledTasks/change_description_job.php',
    ),
    array(
      'from' => '<basepath>/Files/custom/Extension/modules/Schedulers/Ext/Language/en_us.change_description_job.php',
      'to' => 'custom/Extension/modules/Schedulers/Ext/Language/en_us.change_description_job.php',
    ),
  ),


  'hookdefs' => array(
    array(
      'from' => '<basepath>/Files/custom/Extension/modules/Accounts/Ext/LogicHooks/vehicle_number_hook.php',
      'to_module' => 'Accounts',
    )
  ),


  'language' => array(
    array(
      'from' => '<basepath>/Files/Language/Accounts/en_us.lang.php',
      'to_module' => 'Accounts',
      'language' => 'en_us'
    )
  ),


  'custom_fields' => array(
    array(
      'name' => 'vehicle_number',
      'label' => 'LBL_VEHICLE_NUMBER',
      'type' => 'text',
      'required' => 'false',
      'module' => 'Accounts',
      'max_size' => 255,

    ),
  ),




);