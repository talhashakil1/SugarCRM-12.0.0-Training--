<?php
// created: 2022-07-19 12:45:14
$dictionary["talha_mediatracking_contacts"] = array (
  'true_relationship_type' => 'many-to-many',
  'relationships' => 
  array (
    'talha_mediatracking_contacts' => 
    array (
      'lhs_module' => 'Talha_MediaTracking',
      'lhs_table' => 'talha_mediatracking',
      'lhs_key' => 'id',
      'rhs_module' => 'Contacts',
      'rhs_table' => 'contacts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'talha_mediatracking_contacts_c',
      'join_key_lhs' => 'talha_mediatracking_contactstalha_mediatracking_ida',
      'join_key_rhs' => 'talha_mediatracking_contactscontacts_idb',
    ),
  ),
  'table' => 'talha_mediatracking_contacts_c',
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
    'talha_mediatracking_contactstalha_mediatracking_ida' => 
    array (
      'name' => 'talha_mediatracking_contactstalha_mediatracking_ida',
      'type' => 'id',
    ),
    'talha_mediatracking_contactscontacts_idb' => 
    array (
      'name' => 'talha_mediatracking_contactscontacts_idb',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_talha_mediatracking_contacts_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_talha_mediatracking_contacts_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'talha_mediatracking_contactstalha_mediatracking_ida',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_talha_mediatracking_contacts_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'talha_mediatracking_contactscontacts_idb',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'talha_mediatracking_contacts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'talha_mediatracking_contactstalha_mediatracking_ida',
        1 => 'talha_mediatracking_contactscontacts_idb',
      ),
    ),
  ),
);