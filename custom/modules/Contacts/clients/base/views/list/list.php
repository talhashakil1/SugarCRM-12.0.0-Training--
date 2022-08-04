<?php
$viewdefs['Contacts'] = 
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
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'name',
                'type' => 'fullname',
                'fields' => 
                array (
                  0 => 'salutation',
                  1 => 'first_name',
                  2 => 'last_name',
                ),
                'link' => true,
                'label' => 'LBL_LIST_NAME',
                'enabled' => true,
                'default' => true,
              ),
              1 => 
              array (
                'name' => 'title',
                'enabled' => true,
                'default' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'enabled' => true,
                'default' => true,
              ),
              3 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'phone_home',
                'label' => 'LBL_HOME_PHONE',
                'enabled' => true,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'phone_mobile',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              6 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
              ),
              7 => 
              array (
                'name' => 'phone_other',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              8 => 
              array (
                'name' => 'twitter',
                'label' => 'LBL_TWITTER',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              10 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'date_entered',
                'enabled' => true,
                'default' => true,
                'readonly' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
