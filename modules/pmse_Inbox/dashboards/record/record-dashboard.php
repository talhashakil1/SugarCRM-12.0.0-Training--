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
    'metadata' => [
        'components' => [
            [
                'width' => 12,
                'rows' => [
                    [
                        [
                            'view' => [
                                'type' => 'dashablelist',
                                'label' => 'LBL_PMSE_MY_PROCESSES',
                                'display_columns' => [
                                    'cas_id',
                                    'pro_title',
                                    'task_name',
                                    'cas_title',
                                    'assigned_user_name',
                                    'cas_user_id_full_name',
                                    'prj_user_id_full_name',
                                    'date_modified',
                                    'date_entered',
                                ],
                                'filter_id' => 'assigned_to_me',
                            ],
                            'context' => [
                                'module' => 'pmse_Inbox',
                            ],
                            'width' => 12,
                        ],
                    ],
                    [
                        [
                            'view' => [
                                'type' => 'dashablelist',
                                'label' => 'LBL_PMSE_MY_PROCESS_DEFINITIONS',
                                'display_columns' => [
                                    'name',
                                    'prj_module',
                                    'prj_status',
                                    'prj_run_order',
                                    'assigned_user_name',
                                    'date_modified',
                                    'date_entered',
                                ],
                                'filter_id' => 'assigned_to_me',
                            ],
                            'context' => [
                                'module' => 'pmse_Project',
                            ],
                            'width' => 12,
                        ],
                    ],
                    [
                        [
                            'view' => [
                                'type' => 'dashablelist',
                                'label' => 'LBL_PMSE_MY_BUSINESS_RULES',
                                'display_columns' => [
                                    'name',
                                    'rst_type',
                                    'rst_module',
                                    'assigned_user_name',
                                    'date_modified',
                                    'date_entered',
                                ],
                                'filter_id' => 'assigned_to_me',
                            ],
                            'context' => [
                                'module' => 'pmse_Business_Rules',
                            ],
                            'width' => 12,
                        ],
                    ],
                ],
            ],
        ],
    ],
    'name' => 'LBL_PMSE_INBOX_RECORD_DASHBOARD',
];
