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
$viewdefs['Meetings']['base']['view']['dupecheck-list'] = array(
    'panels' => array(
        array(
            'label' => 'LBL_PANEL_1',
            'fields' => array(
                array(
                    'name' => 'name',
                    'label' => 'LBL_LIST_SUBJECT',
                    'link' => true,
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'contact_name',
                    'label' => 'LBL_LIST_CONTACT',
                    'link' => true,
                    'id' => 'CONTACT_ID',
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'parent_name',
                    'label' => 'LBL_LIST_RELATED_TO',
                    'id' => 'PARENT_ID',
                    'link' => true,
                    'default' => true,
                    'enabled' => true,
                    'sortable' => false,
                ),
                array(
                    'name' => 'date_start',
                    'label' => 'LBL_LIST_DATE',
                    'link' => false,
                    'default' => true,
                    'enabled' => true,
                ),
                array(
                    'name' => 'team_name',
                    'label' => 'LBL_LIST_TEAM',
                    'default' => false,
                    'enabled' => true,
                ),
                array(
                    'name' => 'assigned_user_name',
                    'label' => 'LBL_LIST_ASSIGNED_TO_NAME',
                    'id' => 'ASSIGNED_USER_ID',
                    'default' => false,
                    'enabled' => true,
                ),
                array(
                    'name' => 'direction',
                    'type' => 'enum',
                    'label' => 'LBL_LIST_DIRECTION',
                    'default' => false,
                    'enabled' => true,
                ),
                array(
                    'name' => 'status',
                    'label' => 'LBL_LIST_STATUS',
                    'link' => false,
                    'default' => false,
                    'enabled' => true,
                ),
                array(
                    'name' => 'date_entered',
                    'label' => 'LBL_DATE_ENTERED',
                    'default' => false,
                    'enabled' => true,
                    'readonly' => true,
                ),
            ),
        ),
    ),
);
