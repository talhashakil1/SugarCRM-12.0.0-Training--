<?php
 // created: 2022-07-19 12:49:26
$layout_defs["Contacts"]["subpanel_setup"]['talha_mediatracking_contacts'] = array (
  'order' => 100,
  'module' => 'Talha_MediaTracking',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_TALHA_MEDIATRACKING_CONTACTS_FROM_TALHA_MEDIATRACKING_TITLE',
  'get_subpanel_data' => 'talha_mediatracking_contacts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
