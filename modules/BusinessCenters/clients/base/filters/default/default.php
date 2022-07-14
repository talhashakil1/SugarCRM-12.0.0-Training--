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

$viewdefs['BusinessCenters']['base']['filter']['default'] = array(
    'default_filter' => 'all_records',
    'fields' => array(
        'name' => array(),
        'address_city' => array(),
        'address_state' => array(),
        'address_country' => array(),
        'timezone' => array(),
        '$distance' => [
            'name' => '$distance',
            'vname' => 'LBL_MAPS_DISTANCE',
            'type' => 'maps-distance',
            'source' => 'non-db',
            'merge_filter' => 'enabled',
            'licenseFilter' => ['MAPS'],
        ],
    ),
);
