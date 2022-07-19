<?php
$module_name = 'Talha_MediaTracking';
$_module_name = 'talha_mediatracking';
$viewdefs[$module_name] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_DEFAULT',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'talha_mediatracking_number',
                'label' => 'LBL_NUMBER',
                'default' => true,
                'enabled' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_SUBJECT',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'issue_type',
                'label' => 'LBL_ISSUE_TYPE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'priority',
                'label' => 'LBL_PRIORITY',
                'default' => true,
                'enabled' => true,
              ),
              5 => 
              array (
                'name' => 'mac_address',
                'label' => 'LBL_MAC_ADDRESS',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'default' => true,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'hours_to_resolution',
                'type' => 'decimal',
                'readonly' => true,
                'label' => 'LBL_HOURS_TO_RESOLUTION',
                'enabled' => true,
                'default' => false,
              ),
              10 => 
              array (
                'name' => 'business_hours_to_resolution',
                'type' => 'decimal',
                'readonly' => true,
                'label' => 'LBL_BUSINESS_HOURS_TO_RESOLUTION',
                'enabled' => true,
                'default' => false,
              ),
              11 => 
              array (
                'name' => 'follow_up_datetime',
                'type' => 'relative-time',
                'label' => 'LBL_FOLLOW_UP',
                'default' => false,
                'enabled' => true,
              ),
              12 => 
              array (
                'name' => 'resolved_datetime',
                'label' => 'LBL_RESOLVED_DATETIME',
                'enabled' => true,
                'default' => false,
              ),
              13 => 
              array (
                'name' => 'work_log',
                'label' => 'LBL_WORK_LOG',
                'enabled' => true,
                'sortable' => false,
                'default' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
