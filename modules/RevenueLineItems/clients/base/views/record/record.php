<?php

/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

// PRO/CORP only fields
$fields = array(
    array(
        'name' => 'product_template_name',
    ),
    array(
        'name' => 'spacer', // we need this for when forecasts is not setup and we also need to remove the spacer
        'span' => 6,
        'readonly' => true
    ),
    'account_name',
    'status',
    'quantity',
    array(
        'name' => 'cost_price',
        'type' => 'currency',
        'related_fields' => array(
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'list_price',
        'type' => 'currency',
        'related_fields' => array(
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'discount_price',
        'type' => 'currency',
        'related_fields' => array(
            'discount_price',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'discount_amount',
        'type' => 'currency',
        'related_fields' => array(
            'discount_amount',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'discount_rate_percent',
        'readonly' => true,
    ),
    array(
        'name' => 'tag',
        'span' => 12,
    ),
);

$fieldsHidden = array(
    'serial_number',
    'contact_name',
    'asset_number',
    'date_purchased',
    array(
        'name' => 'book_value',
        'type' => 'currency',
        'related_fields' => array(
            'book_value',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    'date_support_starts',
    'book_value_date',
    'date_support_expires',
    'website',
    'tax_class',
    'manufacturer_name',
    'weight',
    'mft_part_num',
    array(
        'name' => 'category_name',
        'type' => 'productCategoriesRelate',
        'label' => 'LBL_CATEGORY',
        'readonly' => true
    ),
    'vendor_part_num',
    'product_type',
    array(
        'name' => 'description',
        'span' => 12,
    ),
    'support_name',
    'support_contact',
    'support_description',
    'support_term',
    array(
        'name' => 'date_entered_by',
        'readonly' => true,
        'inline' => true,
        'type' => 'fieldset',
        'label' => 'LBL_DATE_ENTERED',
        'fields' => array(
            array(
                'name' => 'date_entered',
            ),
            array(
                'type' => 'label',
                'default_value' => 'LBL_BY',
            ),
            array(
                'name' => 'created_by_name',
            ),
        ),
    ),
    array(
        'name' => 'date_modified_by',
        'readonly' => true,
        'inline' => true,
        'type' => 'fieldset',
        'label' => 'LBL_DATE_MODIFIED',
        'fields' => array(
            array(
                'name' => 'date_modified',
            ),
            array(
                'type' => 'label',
                'default_value' => 'LBL_BY',
            ),
            array(
                'name' => 'modified_by_name',
            ),
        ),
    ),
);

// ENT/ULT only fields
$fields = array(
    array(
        'name' => 'opportunity_name',
        'filter_relate' => array(
            'account_id' => 'account_id',
        ),
    ),
    array(
        'name' => 'account_name',
        'readonly' => true,
    ),
    'sales_stage',
    'probability',
    array(
        'name' => 'commit_stage',
        'span' => 6
    ),
    array(
        'name' => 'date_closed',
        'related_fields' => array(
            'date_closed_timestamp'
        )
    ),
    array(
        'name' => 'likely_case',
        'type' => 'currency',
        'related_fields' => array(
            'likely_case',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    'product_type',
    array(
        'name' => 'best_case',
        'type' => 'currency',
        'related_fields' => array(
            'best_case',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'worst_case',
        'type' => 'currency',
        'related_fields' => array(
            'worst_case',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    'product_template_name',
    array(
        'name' => 'category_name',
        'type' => 'relate',
        'label' => 'LBL_CATEGORY',
    ),
    'quantity',
    array(
        'name' => 'discount_price',
        'type' => 'currency',
        'related_fields' => array(
            'discount_price',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'discount_field',
        'type' => 'fieldset',
        'css_class' => 'discount-field',
        'label' => 'LBL_DISCOUNT_AMOUNT',
        'show_child_labels' => false,
        'sortable' => false,
        'fields' => array(
            array(
                'name' => 'discount_amount',
                'label' => 'LBL_DISCOUNT_AMOUNT',
                'type' => 'discount-amount',
                'discountFieldName' => 'discount_select',
                'related_fields' => array(
                    'currency_id',
                ),
                'convertToBase' => true,
                'base_rate_field' => 'base_rate',
                'showTransactionalAmount' => true,
            ),
            array(
                'type' => 'discount-select',
                'name' => 'discount_select',
                'options' => array(),
            ),
        ),
    ),
    array(
        'name' => 'total_amount',
        'type' => 'currency',
        'label' => 'LBL_CALCULATED_LINE_ITEM_AMOUNT',
        'readonly' => true,
        'related_fields' => array(
            'total_amount',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'tag',
        'span' => 12,
    ),
);

$fieldsHidden = array(
    'service',
    array(
        'name' => 'service_duration',
        'type' => 'fieldset',
        'css_class' => 'service-duration-field',
        'label' => 'LBL_SERVICE_DURATION',
        'inline' => true,
        'show_child_labels' => false,
        'fields' => array(
            array(
                'name' => 'service_duration_value',
                'label' => 'LBL_SERVICE_DURATION_VALUE',
            ),
            array(
                'name' => 'service_duration_unit',
                'label' => 'LBL_SERVICE_DURATION_UNIT',
            ),
        ),
    ),
    'service_start_date' => array(
        'name' => 'service_start_date',
        'label' => 'LBL_SERVICE_START_DATE',
        'type' => 'date',
    ),
    'service_end_date' => array(
        'name' => 'service_end_date',
        'label' => 'LBL_SERVICE_END_DATE',
        'type' => 'service-enddate',
    ),
    'renewable' => array(
        'name' => 'renewable',
        'label' => 'LBL_RENEWABLE',
        'type' => 'bool',
    ),
    'add_on_to_name' => [
        'name' => 'add_on_to_name',
        'type' => 'add-on-to',
    ],
    'lead_source',
    'next_step',
    array(
        'name' => 'description',
        'span' => 12,
    ),
    array(
        'name' => 'list_price',
        'readonly' => true,
        'type' => 'currency',
        'related_fields' => array(
            'list_price',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    array(
        'name' => 'cost_price',
        'readonly' => true,
        'type' => 'currency',
        'related_fields' => array(
            'cost_price',
            'currency_id',
            'base_rate',
        ),
        'convertToBase' => true,
        'showTransactionalAmount' => true,
        'currency_field' => 'currency_id',
        'base_rate_field' => 'base_rate',
    ),
    'tax_class',
    'name' => 'purchasedlineitem_name',
    'team_name',
    'assigned_user_name',
    array(
        'name' => 'date_entered_by',
        'readonly' => true,
        'type' => 'fieldset',
        'inline' => true,
        'label' => 'LBL_DATE_ENTERED',
        'fields' => array(
            array(
                'name' => 'date_entered',
            ),
            array(
                'type' => 'label',
                'default_value' => 'LBL_BY',
            ),
            array(
                'name' => 'created_by_name',
            ),
        ),
    ),
    array(
        'name' => 'date_modified_by',
        'readonly' => true,
        'type' => 'fieldset',
        'inline' => true,
        'label' => 'LBL_DATE_MODIFIED',
        'fields' => array(
            array(
                'name' => 'date_modified',
            ),
            array(
                'type' => 'label',
                'default_value' => 'LBL_BY',
            ),
            array(
                'name' => 'modified_by_name',
            ),
        ),
    ),
);

$viewdefs['RevenueLineItems']['base']['view']['record'] = array(
    'buttons' => array(
        array(
            'type' => 'button',
            'name' => 'cancel_button',
            'label' => 'LBL_CANCEL_BUTTON_LABEL',
            'css_class' => 'btn-invisible btn-link',
            'showOn' => 'edit',
            'events' => array(
                'click' => 'button:cancel_button:click',
            ),
        ),
        array(
            'type' => 'rowaction',
            'event' => 'button:save_button:click',
            'name' => 'save_button',
            'label' => 'LBL_SAVE_BUTTON_LABEL',
            'css_class' => 'btn btn-primary',
            'showOn' => 'edit',
            'acl_action' => 'edit',
        ),
        array(
            'type' => 'actiondropdown',
            'name' => 'main_dropdown',
            'primary' => true,
            'showOn' => 'view',
            'buttons' => array(
                array(
                    'type' => 'rowaction',
                    'event' => 'button:edit_button:click',
                    'name' => 'edit_button',
                    'label' => 'LBL_EDIT_BUTTON_LABEL',
                    'primary' => true,
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'shareaction',
                    'name' => 'share',
                    'label' => 'LBL_RECORD_SHARE_BUTTON',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'pdfaction',
                    'name' => 'download-pdf',
                    'label' => 'LBL_PDF_VIEW',
                    'action' => 'download',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'pdfaction',
                    'name' => 'email-pdf',
                    'label' => 'LBL_PDF_EMAIL',
                    'action' => 'email',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'module' => 'RevenueLineItems',
                    'type' => 'convert-to-quote',
                    'event' => 'button:convert_to_quote:click',
                    'name' => 'convert_to_quote_button',
                    'label' => 'LBL_CONVERT_TO_QUOTE',
                    'acl_module' => 'Quotes',
                    'acl_action' => 'create',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:find_duplicates_button:click',
                    'name' => 'find_duplicates_button',
                    'label' => 'LBL_DUP_MERGE',
                    'acl_action' => 'edit',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:duplicate_button:click',
                    'name' => 'duplicate_button',
                    'label' => 'LBL_DUPLICATE_BUTTON_LABEL',
                    'acl_module' => 'RevenueLineItems',
                    'acl_action' => 'create',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:historical_summary_button:click',
                    'name' => 'historical_summary_button',
                    'label' => 'LBL_HISTORICAL_SUMMARY',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:audit_button:click',
                    'name' => 'audit_button',
                    'label' => 'LNK_VIEW_CHANGE_LOG',
                    'acl_action' => 'view',
                ),
                array(
                    'type' => 'divider',
                ),
                array(
                    'type' => 'rowaction',
                    'event' => 'button:delete_button:click',
                    'name' => 'delete_button',
                    'label' => 'LBL_DELETE_BUTTON_LABEL',
                    'acl_action' => 'delete',
                ),
            ),
        ),
        array(
            'name' => 'sidebar_toggle',
            'type' => 'sidebartoggle',
        ),
    ),
    'panels' => array(
        array(
            'name' => 'panel_header',
            'header' => true,
            'fields' => array(
                array(
                    'name'          => 'picture',
                    'type'          => 'avatar',
                    'size'          => 'large',
                    'dismiss_label' => true,
                    'readonly'      => true,
                ),
                array(
                    'name' => 'name',
                ),
                array(
                    'name' => 'favorite',
                    'label' => 'LBL_FAVORITE',
                    'type' => 'favorite',
                    'dismiss_label' => true,
                ),
                array(
                    'name' => 'follow',
                    'label' => 'LBL_FOLLOW',
                    'type' => 'follow',
                    'readonly' => true,
                    'dismiss_label' => true,
                ),
                array(
                    'type' => 'badge',
                    'name' => 'quote_id',
                    'event' => 'button:convert_to_quote:click',
                    'readonly' => true,
                    'tooltip' => 'LBL_CONVERT_RLI_TO_QUOTE',
                    'acl_module' => 'RevenueLineItems',
                ),
            ),
        ),
        array(
            'name' => 'panel_body',
            'label' => 'LBL_RECORD_BODY',
            'columns' => 2,
            'labels' => true,
            'placeholders' => true,
            'fields' => $fields,
        ),
        array(
            'name' => 'panel_hidden',
            'label' => 'LBL_RECORD_SHOWMORE',
            'hide' => true,
            'columns' => 2,
            'placeholders' => true,
            'fields' => $fieldsHidden,
        ),
    ),
);
