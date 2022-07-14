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
$viewdefs['Bugs']['base']['view']['resolve-conflicts-list'] = array(
    'panels' => array(
        array(
            'name' => 'panel_header',
            'label' => 'LBL_PANEL_1',
            'fields' => array(
                array(
                    'name' => 'bug_number',
                    'enabled' => true,
                    'default' => true,
                    'readonly' => true,
                ),
                array(
                    'name' => 'name',
                    'enabled' => true,
                    'default' => true,
                ),
                array(
                    'name' => 'status',
                    'enabled' => true,
                    'default' => true,
                ),
                array(
                    'name' => 'type',
                    'enabled' => true,
                    'default' => true
                ),
                array(
                    'name' => 'priority',
                    'enabled' => true,
                    'default' => false,
                ),
                array(
                    'name' => 'fixed_in_release_name',
                    'enabled' => true,
                    'default' => false,
                    'link' => false,
                ),
                array(
                    'name' => 'assigned_user_name',
                    'enabled' => true,
                    'default' => false,
                ),
                array(
                    'name' => 'release_name',
                    'enabled' => true,
                    'default' => false,
                    'link' => false,
                ),
                array(
                    'name' => 'resolution',
                    'enabled' => true,
                    'default' => false,
                ),
                array(
                    'name' => 'team_name',
                    'enabled' => true,
                    'default' => false,
                ),
            ),
        ),
    ),
);
