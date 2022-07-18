<?php
$viewdefs['Cases'] = 
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
                'name' => 'case_number',
                'label' => 'LBL_LIST_NUMBER',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              1 => 
              array (
                'name' => 'name',
                'label' => 'LBL_LIST_SUBJECT',
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_LIST_ACCOUNT_NAME',
                'module' => 'Accounts',
                'id' => 'ACCOUNT_ID',
                'ACLTag' => 'ACCOUNT',
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'link' => true,
                'default' => true,
                'enabled' => true,
              ),
              3 => 
              array (
                'name' => 'priority',
                'label' => 'LBL_LIST_PRIORITY',
                'default' => true,
                'enabled' => true,
              ),
              4 => 
              array (
                'name' => 'age_c',
                'label' => 'LBL_AGE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              5 => 
              array (
                'name' => 'hiring_date_c',
                'label' => 'LBL_HIRING_DATE',
                'enabled' => true,
                'readonly' => false,
                'default' => true,
              ),
              6 => 
              array (
                'name' => 'status',
                'label' => 'LBL_STATUS',
                'default' => true,
                'enabled' => true,
              ),
              7 => 
              array (
                'name' => 'assigned_user_name',
                'label' => 'LBL_ASSIGNED_TO_NAME',
                'id' => 'ASSIGNED_USER_ID',
                'default' => true,
                'enabled' => true,
              ),
              8 => 
              array (
                'name' => 'date_modified',
                'enabled' => true,
                'default' => true,
              ),
              9 => 
              array (
                'name' => 'date_entered',
                'label' => 'LBL_DATE_ENTERED',
                'default' => true,
                'enabled' => true,
                'readonly' => true,
              ),
              10 => 
              array (
                'name' => 'birth_date',
                'label' => 'LBL_BIRTH_DATE',
                'enabled' => true,
                'default' => true,
              ),
              11 => 
              array (
                'name' => 'team_name',
                'label' => 'LBL_LIST_TEAM',
                'default' => false,
                'enabled' => true,
              ),
              12 => 
              array (
                'name' => 'primary_contact_name',
                'label' => 'LBL_PRIMARY_CONTACT_NAME',
                'default' => false,
                'enabled' => true,
              ),
              13 => 
              array (
                'name' => 'request_close',
                'label' => 'LBL_REQUEST_CLOSE',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              14 => 
              array (
                'name' => 'request_close_date',
                'label' => 'LBL_REQUEST_CLOSE_DATE',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              15 => 
              array (
                'name' => 'business_center_name',
                'label' => 'LBL_BUSINESS_CENTER_NAME',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              16 => 
              array (
                'name' => 'service_level',
                'label' => 'LBL_SERVICE_LEVEL',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              17 => 
              array (
                'name' => 'follow_up_datetime',
                'label' => 'LBL_FOLLOW_UP',
                'default' => false,
                'enabled' => true,
              ),
              18 => 
              array (
                'name' => 'first_response_sla_met',
                'label' => 'LBL_FIRST_RESPONSE_SLA_MET',
                'default' => false,
                'enabled' => true,
                'readonly' => true,
              ),
              19 => 
              array (
                'name' => 'is_escalated',
                'label' => 'LBL_ESCALATED',
                'badge_label' => 'LBL_ESCALATED',
                'warning_level' => 'important',
                'type' => 'badge',
                'enabled' => true,
                'default' => false,
              ),
              20 => 
              array (
                'name' => 'title_line',
                'label' => 'LBL_TEXT_LINE',
                'enabled' => true,
                'default' => false,
              ),
              21 => 
              array (
                'name' => 'relate_contact_c',
                'label' => 'LBL_RELATE_CONTACT',
                'enabled' => true,
                'readonly' => false,
                'link' => true,
                'sortable' => false,
                'default' => false,
              ),
              22 => 
              array (
                'name' => 'branch_name',
                'enabled' => true,
                'readonly' => false,
                'link' => true,
                'sortable' => false,
                'default' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
