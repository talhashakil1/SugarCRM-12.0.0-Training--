<?php

$viewdefs['Accounts']['base']['view']['fourFieldsView'] = array(
    'fields' => array(
        'name' => array(
            'name' => 'name',
            'type' => 'name',
            'vname' => 'Account Name',
        ),
        'account_type' => array(
            'name' => 'account_type',
            'type' => 'enum',
            'vname' => 'Account Type',
            'options' => 'account_type_dom',
        ),
        'date_entered' => array(
            'name' => 'date_entered',
            'type' => 'datetimecombo',
            'vname' => 'Account Date Created',
        ),
        'assigned_user_name' => array(
            'name' => 'assigned_user_name',
            'type' => 'relate',
            'vname' => 'Account Relate Field',
        ),
    ),
);