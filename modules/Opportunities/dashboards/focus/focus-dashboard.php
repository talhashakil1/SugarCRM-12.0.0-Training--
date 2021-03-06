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

return [
    'name' => 'LBL_OPPORTUNITIES_FOCUS_DRAWER_DASHBOARD',
    'id' => 'e64f2d12-13cb-11eb-a909-acde48001122',
    'metadata' => [
        'components' => [
            [
                'width' => 12,
                'rows' => [
                    // Row 1
                    [
                        [
                            'view' => [
                                'type' => 'dashablerecord',
                                'module' => 'Opportunities',
                                'tabs' => [
                                    [
                                        'active' => true,
                                        'label' => 'LBL_MODULE_NAME_SINGULAR',
                                        'link' => '',
                                        'module' => 'Opportunities',
                                    ],
                                    [
                                        'active' => false,
                                        'link' => 'revenuelineitems',
                                        'module' => 'RevenueLineItems',
                                        'limit' => 5,
                                        'fields' => [
                                            'name',
                                            'quantity',
                                            'likely_case',
                                            'service_duration',
                                            'service_start_date',
                                            'service_end_date',
                                            'commit_stage',
                                        ],
                                    ],
                                ],
                                'tab_list' => [
                                    'Opportunities',
                                    'revenuelineitems',
                                ],
                            ],
                            'context' => [
                                'module' => 'Opportunities',
                            ],
                            'width' => 6,
                        ],
                        [
                            'view' => [
                                'type' => 'commentlog-dashlet',
                                'label' => 'LBL_DASHLET_COMMENTLOG_NAME',
                            ],
                            'width' => 6,
                        ],
                    ],
                    // Row 2
                    [
                        [
                            'view' => [
                                'type' => 'dashablerecord',
                                'module' => 'Opportunities',
                                'tabs' => [
                                    [
                                        'active' => true,
                                        'label' => 'LBL_MODULE_NAME_SINGULAR',
                                        'link' => 'accounts',
                                        'module' => 'Accounts',
                                    ],
                                ],
                                'tab_list' => [
                                    'accounts',
                                ],
                            ],
                            'context' => [
                                'module' => 'Opportunities',
                            ],
                            'width' => 6,
                        ],
                        [
                            'view' => [
                                'module' => 'Opportunities',
                                'type' => 'activity-timeline',
                                'label' => 'LBL_ACTIVITY_TIMELINE_DASHLET',
                            ],
                            'context' => [
                                'module' => 'Opportunities',
                            ],
                            'width' => 6,
                        ],
                    ],
                    // Row 3
                    [
                        [
                            'view' => [
                                'type' => 'purchase-history',
                                'label' => 'LBL_PURCHASE_HISTORY_DASHLET',
                                'linked_account_field' => 'account_id',
                            ],
                            'width' => 6,
                        ],
                        [
                            'view' => [
                                'type' => 'active-subscriptions',
                                'label' => 'LBL_ACTIVE_SUBSCRIPTIONS_DASHLET',
                                'linked_subscriptions_account_field' => 'account_id',
                            ],
                            'width' => 6,
                        ],
                    ],
                ],
            ],
        ],
    ],
];
