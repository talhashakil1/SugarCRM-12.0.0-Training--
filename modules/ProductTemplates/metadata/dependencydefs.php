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

$serviceFieldDefaults = array(
    'service_duration_value' => '1',
    'service_duration_unit' => '"year"',
);

// Handle the dependencies when the 'service' field is checked/unchecked
$serviceFieldActions = array();
foreach ($serviceFieldDefaults as $field => $defaultValue) {
    $serviceFieldActions[] = array(
        'name' => 'ReadOnly',
        'params' => array(
            'target' => $field,
            'value' => 'equal($service, "0")',
        ),
    );
    $serviceFieldActions[] = array(
        'name' => 'SetRequired',
        'params' => array(
            'target' => $field,
            'value' => 'equal($service, "1")',
        ),
    );
    $serviceFieldActions[] = array(
        'name' => 'SetValue',
        'params' => array(
            'target' => $field,
            'value' => 'ifElse(
                equal($service, "1"),
                ifElse(
                    equal($' . $field . ', ""),
                    '. $defaultValue .',
                    $'. $field .'
                ),
                "")',
        ),
    );
}

// 'renewable' field is similar to the other service fields, but never required
$serviceFieldActions[] = array(
    'name' => 'ReadOnly',
    'params' => array(
        'target' => 'renewable',
        'value' => 'equal($service, "0")',
    ),
);
$serviceFieldActions[] = array(
    'name' => 'SetValue',
    'params' => array(
        'target' => 'renewable',
        'value' => 'ifElse(
                equal($service, "1"),
                $renewable,
                "0")',
    ),
);
$serviceFieldActions[] = [
    'name' => 'ReadOnly',
    'params' => [
        'target' => 'lock_duration',
        'value' => 'equal($service, "0")',
    ],
];
$serviceFieldActions[] = [
    'name' => 'SetValue',
    'params' => [
        'target' => 'lock_duration',
        'value' => 'ifElse(
                equal($service, "1"),
                $lock_duration,
                "0")',
    ],
];
$dependencies['ProductTemplates']['handle_service_dependencies'] = array(
    'hooks' => array('edit'),
    'trigger' => 'true',
    'triggerFields' => array('service'),
    'onload' => true,
    'actions' => $serviceFieldActions,
);
