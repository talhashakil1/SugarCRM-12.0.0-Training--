<?php

$dictionary["accounts_project_1"] = array(
    'true_relationship_type' => 'one-to-many',
    'from_studio' => false,
    'relationships' =>
    array(
        'accounts_project_1' =>
        array(
            'lhs_module' => 'Accounts',
            'lhs_table' => 'accounts',
            'lhs_key' => 'id',
            'rhs_module' => 'Project',
            'rhs_table' => 'project',
            'rhs_key' => 'id',
            'relationship_type' => 'many-to-many',
            'join_table' => 'accounts_project_1',
            'join_key_lhs' => 'accounts_project_1accounts_ida',
            'join_key_rhs' => 'accounts_project_1project_idb',
        ),
    ),
    'table' => 'accounts_project_1',
    'fields' =>
    array(
        'id' =>
        array(
            'name' => 'id',
            'type' => 'id',
        ),
        'date_modified' => 
        array (
          'name' => 'date_modified',
          'type' => 'datetime',
        ),
        'deleted' => 
        array (
          'name' => 'deleted',
          'type' => 'bool',
          'default' => 0,
        ),
        'accounts_project_1accounts_ida' => 
        array (
          'name' => 'accounts_project_1accounts_ida',
          'type' => 'id',
        ),
        'accounts_project_1project_idb' => 
        array (
          'name' => 'accounts_project_1project_idb',
          'type' => 'id',
        ),
    ),
);