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
/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright(C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/


logThis('Upgrade Wizard At Layout Commits');

global $mod_strings;
$curr_lang = 'en_us';
if(isset($GLOBALS['current_language']) && ($GLOBALS['current_language'] != null))
	$curr_lang = $GLOBALS['current_language'];

return_module_language($curr_lang, 'UpgradeWizard');
error_reporting(E_ERROR);
set_time_limit(0);
set_upgrade_progress('layouts','in_progress');

//If the user has seleceted which modules they want to merge, perform the filtering and 
//execute the merge.
if( isset($_POST['layoutSelectedModules']) )
{
    logThis('Layout Commits examining modules to revert');
    
    $mergedModules = $_SESSION['sugarMergeRunResults'];
    $selectedModules  = explode("^,^",$_POST['layoutSelectedModules']);
    logThis('Layout Commits, selected modules by user: ' . print_r($selectedModules, TRUE));
    $rollBackList = array();
    $actualMergedList = array();
    
    foreach ( $mergedModules as $moduleKey => $layouts)
    {
        if( ! in_array($moduleKey , $selectedModules) )
        {
            logThis("Adding $moduleKey module to rollback list.");
            $rollBackList[$moduleKey] = $layouts;
        }
        else 
        {
            $actualMergedList[$moduleKey] = $layouts;
        }
    }
    
    logThis('Layout Commits will rollback the following modules: ' . print_r($rollBackList, TRUE));
    logThis('Layout Commits merged the following modules: ' . print_r($actualMergedList, TRUE));
    
    $layoutMergeData = $actualMergedList;
    
    rollBackMergedModules($rollBackList);
    
    $stepBack = $_REQUEST['step'] - 1;
    $stepNext = $_REQUEST['step'] + 1;
    $stepCancel = -1;
    $stepRecheck = $_REQUEST['step'];
    $_SESSION['step'][$steps['files'][$_REQUEST['step']]] = 'success';
    
    logThis('Layout Commits completed successfully');
    $smarty->assign("CONFIRM_LAYOUT_HEADER", $mod_strings['LBL_UW_CONFIRM_LAYOUT_RESULTS']);
    $smarty->assign("CONFIRM_LAYOUT_DESC", $mod_strings['LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC']);
    $showCheckBoxes = FALSE;
    $GLOBALS['top_message'] = "<b>{$mod_strings['LBL_LAYOUT_MERGE_TITLE2']}</b>";
}
else 
{
    //Fist visit to the commit layout page.  Display the selection table to the user.
    logThis('Layout Commits about to show selection table');
    $smarty->assign("CONFIRM_LAYOUT_HEADER", $mod_strings['LBL_UW_CONFIRM_LAYOUTS']);
    $smarty->assign("CONFIRM_LAYOUT_DESC", $mod_strings['LBL_LAYOUT_MERGE_DESC']);
    $layoutMergeData = cleanMergeData($_SESSION['sugarMergeRunResults']);
    $stepNext = $_REQUEST['step'];
    $showCheckBoxes = TRUE;
    $GLOBALS['top_message'] = "<b>{$mod_strings['LBL_LAYOUT_MERGE_TITLE']}</b>";
}

$smarty->assign("APP", $app_strings);
$smarty->assign("APP_LIST", $app_list_strings);
$smarty->assign("MOD", $mod_strings);
$smarty->assign("showCheckboxes", $showCheckBoxes);
$layoutMergeData = formatLayoutMergeDataForDisplay($layoutMergeData);
$smarty->assign("METADATA_DATA", $layoutMergeData);
$uwMain = $smarty->fetch('modules/UpgradeWizard/tpls/layoutsMerge.tpl');
    
$showBack = FALSE;
$showCancel = FALSE;
$showRecheck = FALSE;
$showNext = TRUE;

set_upgrade_progress('layouts','done');

/**
 * Clean the merge data results, removing any emptys or blanks that should not be displayed 
 * to the user on the confirm layout screen.
 *
 * @param array $data
 * @return array
 */
function cleanMergeData($data)
{
    $results = array();
    foreach ($data as $m => $layouts)
    {
        if(count($layouts) > 0)
        {
            $results[$m] = $layouts;
        }
    }
    
    return $results;
}
/**
 * Rollback metadata files for each module provided in the list.
 *
 * @param array $data
 */
function rollBackMergedModules($data)
{
    logThis('Layout Commits, starting rollback');
    $backupFileSufix = '.suback.php';
    foreach ($data as $moduleName => $layouts)
    {
        logThis('Layout Commits, iterating over module:' . $moduleName);
        foreach ($layouts as $fileName => $wasMerged)
        {
            if($wasMerged)
            {
                $srcFile = 'custom' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . $moduleName . DIRECTORY_SEPARATOR . 'metadata'. DIRECTORY_SEPARATOR . $fileName;
                $srcBackupFile = $srcFile . $backupFileSufix;
                logThis('Layout Commits, rollBackMergedModules source file: ' . $srcDirectory);
                logThis('Layout Commits, rollBackMergedModules backup file: ' . $srcBackupFile);
                if( file_exists($srcBackupFile) )
                {
                    if( file_exists($srcFile) )
                    {
                        logThis('Layout Commits, rollBackMergedModules is removing file: ' . $srcFile);
                        @unlink($srcFile);
                    }
                    $copyResult = @copy($srcBackupFile, $srcFile);
                    if($copyResult === TRUE)
                    {
                        @unlink($srcBackupFile);
                        logThis("Layout Commits, rollBackMergedModules successfully reverted file $srcFile");
                    }
                    else 
                    {
                        logThis("Layout Commits, rollBackMergedModules was unable to copy file: $srcBackupFile, to $srcFile.");
                    }
                }
                else 
                {
                    logThis("Layout Commits, rollBackMergedModules is unable to find backup file $srcBackupFile , nothing to do.");
                }
            }
        }
    }
}

/**
 * Format results from SugarMerge output to be used in the selection table.
 *
 * @param array $layoutMergeData
 * @return array
 */
function formatLayoutMergeDataForDisplay($layoutMergeData)
{
    global $mod_strings,$app_list_strings;
    
    $curr_lang = 'en_us';
    if(isset($GLOBALS['current_language']) && ($GLOBALS['current_language'] != null))
    	$curr_lang = $GLOBALS['current_language'];

    $module_builder_language = return_module_language($curr_lang, 'ModuleBuilder');

    $results = array();
    foreach ($layoutMergeData as $k => $v)
    {
        $layouts = array();
        foreach ($v as $layoutPath => $isMerge)
        {
            if( preg_match('/listviewdefs.php/i', $layoutPath) )
                $label = $module_builder_language['LBL_LISTVIEW'];
            else if( preg_match('/detailviewdefs.php/i', $layoutPath) )
                $label = $module_builder_language['LBL_DETAILVIEW'];
            else if( preg_match('/editviewdefs.php/i', $layoutPath) )
                $label = $module_builder_language['LBL_EDITVIEW'];
            else if( preg_match('/quickcreatedefs.php/i', $layoutPath) )
                $label = $module_builder_language['LBL_QUICKCREATE'];
            else if( preg_match('/searchdefs.php/i', $layoutPath) )
                $label = $module_builder_language['LBL_SEARCH'];
            else 
                continue;

            $layouts[] = array('path' => $layoutPath, 'label' => $label);
        }

        $results[$k]['layouts'] = $layouts; 
        $results[$k]['moduleName'] = $app_list_strings['moduleList'][$k]; 
    }

    return $results;
}