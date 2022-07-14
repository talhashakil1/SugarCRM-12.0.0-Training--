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
require_once 'modules/EmailMarketing/Forms.php';

global $timedate;
global $app_strings;
global $app_list_strings;
global $mod_strings;
global $current_user;

$focus = BeanFactory::newBean('EmailMarketing');
if (!empty($_REQUEST['record'])) {
    $focus->retrieve($_REQUEST['record']);
}

$dateStartFormatted = ViewDateFormatter::format('datetime', $focus->date_start);
list($dateStart, $timeStart) = $timedate->split_date_time($dateStartFormatted);

if (isset($_REQUEST['isDuplicate']) && $_REQUEST['isDuplicate'] === 'true') {
    $focus->id = '';
}
global $theme;

$GLOBALS['log']->info('EmailMarketing Edit View');
$xtpl = new XTemplate('modules/EmailMarketing/EditView.html');
if (!ACLController::checkAccess('EmailTemplates', 'edit', true)) {
    unset($mod_strings['LBL_CREATE_EMAIL_TEMPLATE'], $mod_strings['LBL_EDIT_EMAIL_TEMPLATE']);
}
$xtpl->assign('MOD', $mod_strings);
$xtpl->assign('APP', $app_strings);
$xtpl->assign('THEME', SugarThemeRegistry::current()->__toString());
$xtpl->assign('CALENDAR_LANG', 'en');
$xtpl->assign('USER_DATEFORMAT', '(' . $timedate->get_user_date_format() . ')');
$xtpl->assign('CALENDAR_DATEFORMAT', $timedate->get_cal_date_format());
$time_ampm = $timedate->AMPMMenu('', $timeStart);
$xtpl->assign('TIME_MERIDIEM', $time_ampm);

if (isset($_REQUEST['return_module'])) {
    $xtpl->assign('RETURN_MODULE', $_REQUEST['return_module']);
} else {
    $xtpl->assign('RETURN_MODULE', 'Campaigns');
}
if (isset($_REQUEST['return_action'])) {
    $xtpl->assign('RETURN_ACTION', $_REQUEST['return_action']);
} else {
    $xtpl->assign('RETURN_ACTION', 'DetailView');
}
if (isset($_REQUEST['return_id'])) {
    $xtpl->assign('RETURN_ID', $_REQUEST['return_id']);
} else {
    if (!empty($focus->campaign_id)) {
        $xtpl->assign('RETURN_ID', $focus->campaign_id);
    }
}

if ($focus->campaign_id) {
    $campaign_id = $focus->campaign_id;
} else {
    $campaign_id = $_REQUEST['campaign_id'];
}
$xtpl->assign('CAMPAIGN_ID', $campaign_id);

// Remove the meridiem from the time since it is edited in a different field.
if (!empty($time_ampm) && !empty($timeStart)) {
    $split = $timedate->splitTime($timeStart, $timedate->get_time_format());
    $timeStart = $split['h'] . $timedate->timeSeparator() . $split['m'];
}

$xtpl->assign('JAVASCRIPT', get_set_focus_js() . get_validate_record_js());
$xtpl->assign('DATE_ENTERED', $focus->date_entered);
$xtpl->assign('DATE_MODIFIED', $focus->date_modified);
$xtpl->assign('ID', $focus->id);
$xtpl->assign('NAME', $focus->name);
$xtpl->assign('FROM_NAME', $focus->from_name);
$xtpl->assign('FROM_ADDR', $focus->from_addr);
$xtpl->assign('REPLY_NAME', $focus->reply_to_name);
$xtpl->assign('REPLY_ADDR', $focus->reply_to_addr);
$xtpl->assign('DATE_START', $dateStart);
$xtpl->assign('TIME_START', $timeStart);
$xtpl->assign('TIME_FORMAT', '(' . $timedate->get_user_time_format() . ')');

$email_templates_arr = get_bean_select_array(true, 'EmailTemplate', 'name', "(type IS NULL OR type='' OR type='campaign')", 'name');
if ($focus->template_id) {
    $xtpl->assign('TEMPLATE_ID', $focus->template_id);
    $xtpl->assign('EMAIL_TEMPLATE_OPTIONS', get_select_options_with_id($email_templates_arr, $focus->template_id));
    $xtpl->assign('EDIT_TEMPLATE', 'visibility:inline');
} else {
    $xtpl->assign('EMAIL_TEMPLATE_OPTIONS', get_select_options_with_id($email_templates_arr, ''));
    $xtpl->assign('EDIT_TEMPLATE', 'visibility:hidden');
}

//include campaign utils..
require_once 'modules/Campaigns/utils.php';
if (empty($_REQUEST['campaign_name'])) {
    $campaign = BeanFactory::getBean('Campaigns', $campaign_id);
    $campaign_name = $campaign->name;
} else {
    $campaign_name = $_REQUEST['campaign_name'];
}

$params = [];
$params[] = sprintf(
    '<a href="index.php?module=Campaigns&action=index">%s</a>',
    htmlspecialchars($mod_strings['LNK_CAMPAIGN_LIST'])
);
$params = [];
$href = 'index.php?' . http_build_query([
        'module' => 'Campaigns',
        'action' => 'DetailView',
        'record' => $campaign_id,
    ]);
$params[] = sprintf(
    '<a href="%s">%s</a>',
    htmlspecialchars($href),
    htmlspecialchars($campaign_name)
);

if (empty($focus->id)) {
    $params[] = htmlspecialchars(
        $GLOBALS['app_strings']['LBL_CREATE_BUTTON_LABEL'] . ' ' . $mod_strings['LBL_MODULE_NAME']
    );
} else {
    $href = 'index.php?' . http_build_query([
            'module' => $focus->module_dir,
            'action' => 'DetailView',
            'record' => $focus->id,
        ]);
    $params[] = sprintf(
        '<a href="%s">%s</a>',
        htmlspecialchars($href),
        htmlspecialchars($focus->name)
    );
    $params[] = htmlspecialchars($GLOBALS['app_strings']['LBL_EDIT_BUTTON_LABEL']);
}
$xtpl->assign('PAGE_TITLE', getClassicModuleTitle($focus->module_dir, $params, true));

$scope_options = get_message_scope_dom($campaign_id);
$prospectlists = [];
if (isset($focus->all_prospect_lists) && $focus->all_prospect_lists == 1) {
    $xtpl->assign('ALL_PROSPECT_LISTS_CHECKED', 'checked');
    $xtpl->assign('MESSAGE_FOR_DISABLED', 'disabled');
} elseif (!empty($focus->id)) {
    $focus->load_relationship('prospectlists');
    $prospectlists = $focus->prospectlists->get();
}
if (empty($prospectlists)) {
    $prospectlists = [];
}
if (empty($scope_options)) {
    $scope_options = [];
}
$xtpl->assign('SCOPE_OPTIONS', get_select_options_with_id($scope_options, $prospectlists));

$emails = [];
$mailboxes = get_campaign_mailboxes($emails);
$mailboxes_with_from_name = get_campaign_mailboxes($emails, false);

//add empty options.
$emails[''] = 'nobody@example.com';
$mailboxes[''] = '';

//inbound_email_id
$default_email_address = 'nobody@example.com';
$from_emails = '';
foreach ($mailboxes_with_from_name as $id => $name) {
    if (!empty($from_emails)) {
        $from_emails .= ',';
    }
    if ($id == '') {
        $from_emails .= "'EMPTY','$name','$emails[$id]'";
    } else {
        $from_emails .= "'$id','$name','$emails[$id]'";
    }
    if ($id == $focus->inbound_email_id) {
        $default_email_address = $emails[$id];
    }
}
$xtpl->assign('FROM_EMAILS', $from_emails);
$xtpl->assign('DEFAULT_FROM_EMAIL', $default_email_address);

if (empty($focus->inbound_email_id)) {
    $xtpl->assign('MAILBOXES', get_select_options_with_id($mailboxes, ''));
} else {
    $xtpl->assign('MAILBOXES', get_select_options_with_id($mailboxes, $focus->inbound_email_id));
}

$xtpl->assign('STATUS_OPTIONS', get_select_options_with_id($app_list_strings['email_marketing_status_dom'], $focus->status));

//pass in info to populate from/reply address info
require_once 'modules/Campaigns/utils.php';
$json = getJSONobj();
$IEStoredOptions = get_campaign_mailboxes_with_stored_options();
$IEStoredOptionsJSON = (!empty($IEStoredOptions)) ? $json->encode($IEStoredOptions, false) : 'new Object()';
$xtpl->assign("IEStoredOptions", $IEStoredOptionsJSON);

$xtpl->parse('main');
$xtpl->out('main');

$javascript = new javascript();
$javascript->setFormName('EditView');
$javascript->setSugarBean($focus);
$javascript->addAllFields('');
$javascript->addFieldIsValidTime(
    'time_start',
    'time',
    'LBL_TIME_START',
    $javascript->stripEndColon(translate('LBL_START_DATE_TIME', $focus->module_dir)),
    true
);
echo $javascript->getScript();
