<?php

$viewdefs['Accounts']['base']['view']['customRecordCreateView'] = array(
    'fields' => array(
        'controller_dropdown' => array(
            'name' => 'controller_dropdown',
            'vname' => 'Drop Down Whose Options Filled Through Controller',
            'type' => 'enum',
            'options' => 'account_type_dom',
        ),
        'contact_names_dropdown' => array(
            'name' => 'contact_names_dropdown',
            'vname' => 'Contact Drop Down Whose Options Filled Through Controller',
            'type' => 'enum',
            'options' => 'account_type_dom',
        ),
    ),
);