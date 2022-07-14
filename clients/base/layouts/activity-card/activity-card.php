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

$viewdefs['base']['layout']['activity-card'] = [
    'css_class' => 'activity-card',
    'components' => [
        [
            'view' => 'activity-card-detail',
        ],
        [
            'layout' => [
                'type' => 'base',
                'name' => 'activity-card-main',
                'css_class' => 'activity-card-main',
                'components' => [
                    [
                        'view' => 'activity-card-header',
                    ],
                    [
                        'view' => 'activity-card-content',
                    ],
                ],
            ],
        ],
        [
            'view' => 'activity-card-menu',
        ],
    ],
];
