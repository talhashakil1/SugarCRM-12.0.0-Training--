<?php
$viewdefs['ForecastWorksheets'] = 
array (
  'base' => 
  array (
    'view' => 
    array (
      'list' => 
      array (
        'panels' => 
        array (
          0 => 
          array (
            'label' => 'LBL_PANEL_1',
            'fields' => 
            array (
              0 => 
              array (
                'name' => 'commit_stage',
                'label' => 'LBL_FORECAST',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'probability',
                ),
                'click_to_edit' => true,
                'sortable' => true,
              ),
              1 => 
              array (
                'name' => 'parent_name',
                'label' => 'LBL_REVENUELINEITEM_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'parent_id',
                  1 => 'parent_type',
                  2 => 'parent_deleted',
                  3 => 'name',
                ),
                'id' => 'PARENT_ID',
                'link' => true,
                'sortable' => true,
              ),
              2 => 
              array (
                'name' => 'account_name',
                'label' => 'LBL_ACCOUNT_NAME',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'account_id',
                ),
                'id' => 'ACCOUNT_ID',
                'link' => true,
                'sortable' => true,
              ),
              3 => 
              array (
                'name' => 'date_closed',
                'label' => 'LBL_DATE_CLOSED',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'date_closed_timestamp',
                ),
                'click_to_edit' => true,
                'sortable' => true,
              ),
              4 => 
              array (
                'name' => 'sales_stage',
                'label' => 'LBL_SALES_STAGE',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'probability',
                ),
                'click_to_edit' => true,
                'sortable' => true,
              ),
              5 => 
              array (
                'name' => 'probability',
                'label' => 'LBL_OW_PROBABILITY',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'sales_stage',
                ),
                'align' => 'right',
                'sortable' => true,
              ),
              6 => 
              array (
                'name' => 'likely_case',
                'label' => 'LBL_LIKELY',
                'enabled' => true,
                'default' => true,
                'related_fields' => 
                array (
                  0 => 'base_rate',
                  1 => 'currency_id',
                  2 => 'best_case',
                  3 => 'worst_case',
                ),
                'align' => 'right',
                'currency_format' => true,
                'click_to_edit' => true,
                'convertToBase' => true,
                'showTransactionalAmount' => true,
                'sortable' => true,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
);
