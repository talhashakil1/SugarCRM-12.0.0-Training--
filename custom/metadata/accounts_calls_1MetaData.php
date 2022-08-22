<?php
// created: 2022-08-04 12:47:22
$dictionary["accounts_calls_1"] = array (
  'true_relationship_type' => 'one-to-one',
  'from_studio' => true,
  'relationships' => 
  array (
    'accounts_calls_1' => 
    array (
      'lhs_module' => 'Accounts',
      'lhs_table' => 'accounts',
      'lhs_key' => 'id',
      'rhs_module' => 'Calls',
      'rhs_table' => 'calls',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'accounts_calls_1_c',
      'join_key_lhs' => 'accounts_calls_1accounts_ida',
      'join_key_rhs' => 'accounts_calls_1calls_idb',
    ),
  ),
  'table' => 'accounts_calls_1_c',
  'fields' => 
  array (
    'id' => 
    array (
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
    'accounts_calls_1accounts_ida' => 
    array (
      'name' => 'accounts_calls_1accounts_ida',
      'type' => 'id',
    ),
    'accounts_calls_1calls_idb' => 
    array (
      'name' => 'accounts_calls_1calls_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_accounts_calls_1_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_accounts_calls_1_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_calls_1accounts_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_accounts_calls_1_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'accounts_calls_1calls_idb',
        1 => 'deleted',
      ),
    ),
  ),
);