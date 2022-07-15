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
                'name' => 'linkedin_profile_c',
                'label' => 'LBL_LINKEDIN_PROFILE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              4 => 
              array (
                'name' => 'gender_c',
                'label' => 'LBL_GENDER',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'email',
                'enabled' => true,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'phone_mobile',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              7 => 
              array (
                'name' => 'phone_work',
                'enabled' => true,
                'default' => true,
              ),
              8 => 
              array (
                'name' => 'phone_other',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              9 => 
              array (
                'name' => 'assistant_phone',
                'enabled' => true,
                'default' => true,
                'selected' => false,
              ),
              10 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_LIST_ASSIGNED_USER',
                'id' => 'ASSIGNED_USER_ID',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              12 => 
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
