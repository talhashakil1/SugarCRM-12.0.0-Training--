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

$viewdefs['Cases']['base']['view']['request-closed-cases-dashlet'] = array(
    'template' => 'list',
    'dashlets' => array(
        array(
            'label' => 'LBL_DASHLET_REQUESTED_CLOSE_CASES_NAME',
            'description' => 'LBL_DASHLET_REQUESTED_CLOSE_CASES_DESCRIPTION',
            'config' => array(
                'module' => 'Cases',
            ),
            'preview' => array(
                'module' => 'Cases',
            ),
            'filter' => array(
                'module' => array('Cases'),
                'view' => array('records'),
            ),
        ),
    ),
);
