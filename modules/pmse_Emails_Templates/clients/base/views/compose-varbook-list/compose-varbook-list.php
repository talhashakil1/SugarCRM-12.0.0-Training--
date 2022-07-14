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


$viewdefs['pmse_Emails_Templates']['base']['view']['compose-varbook-list'] = array(
    'template'   => 'flex-list',
    'panels'     => array(
        array(
            'fields' => array(
                array(
                    'name' => 'process_et_field_type',
                    'label' => 'LBL_FIELD_SELECTOR_DROPDOWN',
                    'type' => 'enum',
                    'options' => 'process_et_field_type',
                    'sortable' => false,
                    'default' => 'none',
                ),
                array(
                    'name'    => 'name',
                    'label'   => 'LBL_LIST_NAME',
                    'enabled' => true,
                    'default' => true,
                ),
                array(
                    'name'     => '_module',
                    'label'    => 'LBL_MODULE',
                    'sortable' => false,
                    'enabled'  => true,
                    'default'  => true,
                ),
            ),
        ),
    ),
);

