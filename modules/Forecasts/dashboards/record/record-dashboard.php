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
                    'rows' => [
                        [
                            [
                                'view' => [
                                    'type' => 'forecastdetails',
                                    'label' => 'LBL_DASHLET_FORECAST_NAME',
                                ],
                                'context' => [
                                    'module' => 'Forecasts',
                                ],
                                'width' => 12,
                            ],
                        ],
                        [
                            [
                                'view' => [
                                    'type' => 'forecasts-chart',
                                    'label' => 'LBL_DASHLET_FORECASTS_CHART_NAME',
                                ],
                                'context' => [
                                    'module' => 'Forecasts',
                                ],
                                'width' => 12,
                            ],
                        ],
                    ],
                    'width' => 12,
                ],
            ],
        ],
    'name' => 'LBL_FORECASTS_RECORD_DASHBOARD',
];
