<?php
// created: 2022-07-19 12:49:26
$dictionary["talha_mediatracking_activities_notes"] = array (
  'relationships' => 
  array (
    'talha_mediatracking_activities_notes' => 
    array (
      'lhs_module' => 'Talha_MediaTracking',
      'lhs_table' => 'talha_mediatracking',
      'lhs_key' => 'id',
      'rhs_module' => 'Notes',
      'rhs_table' => 'notes',
      'relationship_role_column_value' => 'Talha_MediaTracking',
      'rhs_key' => 'parent_id',
      'relationship_type' => 'one-to-many',
      'relationship_role_column' => 'parent_type',
    ),
  ),
  'fields' => '',
  'indices' => '',
  'table' => '',
);