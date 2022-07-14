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

$viewdefs['base']['view']['activity-card-header'] = [
    'panels' => [
        [
            'name' => 'panel_users',
            'label' => 'LBL_PANEL_USERS',
            'css_class' => 'panel-users',
            'template' => 'user-single',
            'fields' => [
                [
                    'label' => 'LBL_CREATED',
                    'name' => 'created_by_name',
                    'type' => 'relate',
                ],
            ],
        ],
        [
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_HEADER',
            'css_class' => 'panel-header',
            'fields' => [
                [
                    'name' => 'name',
                    'type' => 'name',
                ],
            ],
        ],
    ],
];
