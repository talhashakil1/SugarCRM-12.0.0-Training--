<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from Ext/LogicHooks/pmse.php

 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

// Full text search.

$pmseHookClassPath = SugarAutoLoader::requireWithCustom('modules/pmse_Inbox/engine/PMSELogicHook.php');
$pmseHookClassName = SugarAutoLoader::customClass('PMSELogicHook');
$hook_array['after_save'][] = array(
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_save'
);
$hook_array['after_delete'][] = array(
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_delete'
);
$hook_array['after_relationship_add'][] = [
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_relationship',
];
$hook_array['after_relationship_delete'][] = [
    100,
    'pmse',
    $pmseHookClassPath,
    $pmseHookClassName,
    'after_relationship',
];
//remove unnecessary globals
unset($pmseHookClassPath);
unset($pmseHookClassName);

?>
<?php
// Merged from Ext/LogicHooks/sugarconnect.php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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

// Logic hooks to publish a bean to the Sugar Connect webhook.

$hook_array['after_save'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_delete'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_restore'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_relationship_add'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_relationship_delete'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

$hook_array['after_relationship_update'][] = array(
    1,
    'sugarconnect',
    null,
    '\\Sugarcrm\\Sugarcrm\\SugarConnect\\LogicHooks\\Handler',
    'publish',
);

?>
<?php
// Merged from Ext/LogicHooks/SugarMetricHooks.php

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

$hook_array['after_entry_point'][] = array(1, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'afterEntryPoint');
$hook_array['server_round_trip'][] = array(1, 'smm', 'include/SugarMetric/HookManager.php', 'SugarMetric_HookManager', 'serverRoundTrip');

?>
<?php
// Merged from Ext/LogicHooks/fts.php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

// Full text search after_save hook to update/index a bean

$hook_array['after_save'][] = array(
    1,
    'fts',
    null,
    '\\Sugarcrm\\Sugarcrm\\SearchEngine\\HookHandler',
    'indexBean',
);

$hook_array['after_delete'][] = array(
    1,
    'fts',
    null,
    '\\Sugarcrm\\Sugarcrm\\SearchEngine\\HookHandler',
    'indexBean',
);

$hook_array['after_restore'][] = array(
    1,
    'fts',
    null,
    '\\Sugarcrm\\Sugarcrm\\SearchEngine\\HookHandler',
    'indexBean',
);

?>
<?php
// Merged from Ext/LogicHooks/maps.php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
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

$hook_array['after_save'][] = [
    1,
    'geocode',
    null,
    '\\Sugarcrm\\Sugarcrm\\Maps\\HookHandler',
    'geocode',
];

?>
<?php
// Merged from Ext/LogicHooks/activitystream.php

 if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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

// Activity stream.
$activitystream = array(
    1,
    'activitystream',
    'modules/ActivityStream/Activities/ActivityQueueManager.php',
    'ActivityQueueManager',
    'eventDispatcher',
);
$hook_array['after_save'][] = $activitystream;
$hook_array['after_delete'][] = $activitystream;
$hook_array['after_undelete'][] = $activitystream;
$hook_array['after_relationship_add'][] = $activitystream;
$hook_array['after_relationship_delete'][] = $activitystream;
unset($activitystream);

?>
