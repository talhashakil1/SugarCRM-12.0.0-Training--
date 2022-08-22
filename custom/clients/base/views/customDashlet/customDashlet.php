<?php

$viewdefs['base']['view']['customDashlet'] = array(
    'template' => 'list',
    'dashlets' => array(
        array(
            'label' => 'Open Tasks',
            'description' => 'A basic dashlet which displays all open tasks in contacts module',
            'config' => array(
                'module' => 'Contacts',
                'label' => 'Contacts Module',
                'display_columns' => array(
                    'name',
                    'priority',
                ),
            ),
            'preview' => array(
                'module' => 'Contacts',
                'label' => 'Contacts Module',
                'display_columns' => array(
                    'name',
                    'priority',
                ),
            ),
            'filter' => array(),
        ),
    ),
    'panels' => array(
        array(
            'name' => 'dashlet_settings',
            'columns' => 2,
            'labelsOnTop' => true,
            'placeholders' => true,
            'fields' => array(
                array(
                    'name' => 'name',
                    'vname' => 'Name',
                    'dbType' => 'varchar',
                    'type' => 'name',
                ),
                array(
                    'name' => 'priority',
                    'vname' => 'Priority',
                    'type' => 'enum',
                    'options' => 'task_priority_dom',
                    'len' => 100,
                ),
            ),
        ),
    ),
    
);