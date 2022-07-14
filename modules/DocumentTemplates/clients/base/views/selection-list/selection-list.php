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

$viewdefs['DocumentTemplates']['base']['view']['selection-list'] = [
    'panels' => [
        [
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => [
                [
                    'name' => 'name',
                    'label' => 'LBL_NAME',
                    'link' => true,
                    'enabled' => true,
                    'default' => true,
                ],
                [
                    'name' => 'team_name',
                    'enabled' => true,
                    'default' => true,
                ],
                [
                    'name' => 'file_ext',
                    'label' => 'LBL_DM_TYPE',
                    'enabled' => true,
                    'default' => true,
                ],
                [
                    'name' => 'assigned_user_name',
                    'enabled' => true,
                    'default' => true,
                ],
                [
                    'name' => 'date_modified',
                    'enabled' => true,
                    'default' => true,
                ],
            ],
        ],
    ],
];
