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

function removeACLActions($current_user, $beanList, $beanFiles, $silent)
{
    $actionarr = ACLAction::getDefaultActions();
    if (is_admin($current_user)) {
        $arr = array();
        foreach ($actionarr as $actionobj) {
            if (empty($actionobj->category)) {
                continue;
            }
            if (!isset($beanList[$actionobj->category]) || !file_exists($beanFiles[$beanList[$actionobj->category]])) {
                if (!isset($_REQUEST['upgradeWizard'])) {
                    if (!in_array($actionobj->category, $arr)) {
                        array_push($arr, $actionobj->category);
                        if (!$silent) {
                            echo 'Removing for ' . htmlspecialchars($actionobj->category) . '<br>';
                        }
                    }
                }
                ACLAction::removeActions($actionobj->category);
            }
        }
    }
}

?>
