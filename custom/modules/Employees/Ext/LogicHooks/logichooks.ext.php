<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from modules/Employees/Ext/LogicHooks/hint_hook.php

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
// Same logic hooks we use for Users
$hook_array['after_save'][] = [
    1,
    'Hook description',
    null,
    'Sugarcrm\\Sugarcrm\\modules\\Users\\HintUsersHook',
    'afterSave',
];

$hook_array['before_delete'][] = [
    1,
    'Hook description',
    null,
    'Sugarcrm\\Sugarcrm\\modules\\Users\\HintUsersHook',
    'beforeDelete',
];

?>
