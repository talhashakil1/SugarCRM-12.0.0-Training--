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
    'metadata' => array(
        'components' => array(
            array(
                'rows' => array(
                    array(
                        array(
                            'view' => array(
                                'type' => 'dashablelist',
                                'label' => 'TPL_DASHLET_MY_MODULE',
                                'display_columns' => array(
                                    'bug_number',
                                    'name',
                                    'status',
                                ),
                            ),
                            'context' => array(
                                'module' => 'Bugs',
                            ),
                            'width' => 12,
                        ),
                    ),
                    array(
                        array(
                            'view' => array(
                                'type' => 'request-closed-cases-dashlet',
                                'label' => 'LBL_DASHLET_MY_REQUESTED_CLOSE_CASES_NAME',
                            ),
                            'context' => array(
                                'module' => 'Cases',
                            ),
                            'width' => 12,
                        ),
                    ),
                    array(
                        array(
                            'view' => array(
                                'type' => 'twitter',
                                'label' => 'LBL_TWITTER_NAME',
                                'twitter' => 'sugarcrm',
                                'limit' => '5',
                            ),
                            'context' => array(
                                'module' => 'Home',
                            ),
                            'width' => 12,
                        ),
                    ),
                ),
                'width' => 12,
            ),
        ),
    ),
    'name' => 'LBL_CASES_LIST_DASHBOARD',
    'id' => '5d673c00-7b52-11e9-871e-f218983a1c3e',
];
