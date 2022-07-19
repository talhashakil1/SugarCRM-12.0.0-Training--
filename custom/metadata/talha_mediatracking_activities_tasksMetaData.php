<?php
// created: 2022-07-19 12:45:14
$dictionary["talha_mediatracking_activities_tasks"] = array (
  'relationships' => 
  array (
    'talha_mediatracking_activities_tasks' => 
    array (
      'lhs_module' => 'Talha_MediaTracking',
      'lhs_table' => 'talha_mediatracking',
      'lhs_key' => 'id',
      'rhs_module' => 'Tasks',
      'rhs_table' => 'tasks',
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