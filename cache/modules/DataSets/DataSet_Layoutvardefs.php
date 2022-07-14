<?php 
 $GLOBALS["dictionary"]["DataSet_Layout"]=array (
  'table' => 'dataset_layouts',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'vname' => 'LBL_NAME',
      'type' => 'id',
      'required' => true,
      'reportable' => false,
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'vname' => 'LBL_DELETED',
      'type' => 'bool',
      'required' => true,
      'default' => '0',
      'reportable' => false,
    ),
    'date_entered' => 
    array (
      'name' => 'date_entered',
      'vname' => 'LBL_DATE_ENTERED',
      'type' => 'datetime',
      'required' => true,
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'vname' => 'LBL_DATE_MODIFIED',
      'type' => 'datetime',
      'required' => true,
    ),
    'modified_user_id' => 
    array (
      'name' => 'modified_user_id',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'dbType' => 'id',
      'reportable' => true,
    ),
    'created_by' => 
    array (
      'name' => 'created_by',
      'rname' => 'user_name',
      'id_name' => 'modified_user_id',
      'vname' => 'LBL_ASSIGNED_TO',
      'type' => 'assigned_user_name',
      'table' => 'users',
      'isnull' => false,
      'dbType' => 'id',
    ),
    'parent_value' => 
    array (
      'name' => 'parent_value',
      'vname' => 'LBL_PARENT_VALUE',
      'type' => 'varchar',
      'len' => '50',
    ),
    'layout_type' => 
    array (
      'name' => 'layout_type',
      'vname' => 'LBL_LAYOUT_TYPE',
      'type' => 'enum',
      'required' => true,
      'options' => 'dataset_layout_type_dom',
      'len' => 25,
    ),
    'parent_id' => 
    array (
      'name' => 'parent_id',
      'type' => 'id',
      'required' => false,
      'reportable' => false,
    ),
    'list_order_x' => 
    array (
      'name' => 'list_order_x',
      'vname' => 'LBL_LIST_ORDER_X',
      'type' => 'int',
      'len' => '4',
    ),
    'list_order_z' => 
    array (
      'name' => 'list_order_z',
      'vname' => 'LBL_LIST_ORDER_Z',
      'type' => 'int',
      'len' => '4',
    ),
    'row_header_id' => 
    array (
      'name' => 'row_header_id',
      'vname' => 'LBL_ROW_HEADER_ID',
      'type' => 'id',
    ),
    'hide_column' => 
    array (
      'name' => 'hide_column',
      'vname' => 'LBL_HIDE_COLUMN',
      'type' => 'bool',
      'dbType' => 'varchar',
      'len' => '3',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'datasetlayout_k',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_datasetlayout',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'parent_value',
        1 => 'deleted',
      ),
    ),
  ),
  'custom_fields' => false,
  'has_pii_fields' => false,
  'related_calc_fields' => 
  array (
  ),
);