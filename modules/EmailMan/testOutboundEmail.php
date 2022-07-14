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

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/





global $mod_strings;
global $app_list_strings;
global $app_strings;
global $current_user;

$json = getJSONobj();
$pass = '';

if (!is_admin($current_user)) {
    sugar_die($app_strings['ERR_NOT_ADMIN']);
}

if(!empty($_REQUEST['mail_smtppass'])) {
    $pass = $_REQUEST['mail_smtppass'];
} else if (!empty($_REQUEST['mail_type']) && $_REQUEST['mail_type'] == 'system') {
    $oe = new OutboundEmail();
    $oe = $oe->getSystemMailerSettings();
    if(!empty($oe)) {
        $pass = $oe->mail_smtppass;
    }
} elseif(isset($_REQUEST['mail_name'])) {
    $oe = new OutboundEmail();
    $oe = $oe->getMailerByName($current_user, $_REQUEST['mail_name']);
    if(!empty($oe)) {
        $pass = $oe->mail_smtppass;
    }
}
$smtpType = !empty($_REQUEST['mail_smtptype']) ? $_REQUEST['mail_smtptype'] : '';
$authType = !empty($_REQUEST['mail_authtype']) ? $_REQUEST['mail_authtype'] : '';
$eapmId = !empty($_REQUEST['eapm_id']) ? $_REQUEST['eapm_id'] : '';
$authAccount = !empty($_REQUEST['authorized_account']) ? $_REQUEST['authorized_account'] : '';

$out = Email::sendEmailTest($_REQUEST['mail_smtpserver'], $_REQUEST['mail_smtpport'], $_REQUEST['mail_smtpssl'],
        							($_REQUEST['mail_smtpauth_req'] == 'true' ? 1 : 0), $_REQUEST['mail_smtpuser'],
        							$pass, $_REQUEST['outboundtest_from_address'], $_REQUEST['outboundtest_to_address'], $_REQUEST['mail_sendtype'],
    (!empty($_REQUEST['mail_from_name']) ? $_REQUEST['mail_from_name'] : ''),
    $smtpType,
    $authType,
    $eapmId,
    $authAccount
);

$out = $json->encode($out);
echo $out;
?>
