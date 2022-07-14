{*
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
*}
<div style="position: absolute;display:none;">
    <input id="import_metadata_file" type="file">
</div>
{if !empty($config.authenticationClass) && $config.authenticationClass == 'IdMSAMLAuthenticate'}
    {assign var='saml_enabled_checked' value='CHECKED'}
    {assign var='saml_display' value='inline'}
{else}
    {assign var='saml_enabled_checked' value=''}
    {assign var='saml_display' value='none'}
{/if}

<form name="ConfigurePasswordSettings" method="POST" action="index.php" enctype="multipart/form-data">
{sugar_csrf_form_token}
<input type='hidden' name='action' value='PasswordManager'/>
<input type='hidden' name='module' value='Administration'/>
<input type='hidden' name='saveConfig' value='1'/>
<span class='error'>{$error.main}</span>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
    <tr>

        <td style="padding-bottom: 2px;">
            <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary"
                   id="btn_save" type="submit" onclick="addcheck(form);return check_form('ConfigurePasswordSettings');"
                   name="save" value="{$APP.LBL_SAVE_BUTTON_LABEL}">
            &nbsp;<input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" id="btn_cancel"
                         onclick={literal}"parent.SUGAR.App.router.navigate('#Administration', {trigger: true})"{/literal}
                         class="button" type="button" name="cancel" value="{$APP.LBL_CANCEL_BUTTON_LABEL}">
            <div style="display: inline-block;">
                <div id="saml_top_buttons" style='display:{$saml_display}'>
                    <input title="{$MOD.LBL_EXPORT_METADATA_BUTTON_TITLE}" class="button btn_export_metadata"
                             onclick="document.location.href='index.php?module=Administration&action=exportMetaDataFile'"
                             type="button" name="export_metadata" value="{$MOD.LBL_EXPORT_METADATA_BUTTON_LABEL}">
                    &nbsp;<input title="{$MOD.LBL_IMPORT_METADATA_BUTTON_TITLE}" class="button btn_import_metadata" href="#"
                             type="button" name="export_metadata" value="{$MOD.LBL_IMPORT_METADATA_BUTTON_LABEL}">
                </div>
            </div>
        </td>
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>

<table id="passRequirementId" name="passRequirementName" width="100%" border="0" cellspacing="1" cellpadding="0"
       class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4">
            <h4>
                {$MOD.LBL_PASSWORD_RULES_MANAGEMENT}
            </h4>
        </th>
    </tr>
    <tr>
        <td scope="row" width='25%'>
            {$MOD.LBL_PASSWORD_MINIMUM_LENGTH}:
        </td>
        <td width='25%'>
            <input type='text' size='4' id='passwordsetting_minpwdlength' name='passwordsetting_minpwdlength'
                   value='{$config.passwordsetting.minpwdlength}'>
        </td>
        <td scope="row" width='25%'>
            {$MOD.LBL_PASSWORD_MAXIMUM_LENGTH}:
        </td>
        <td width='25%'>
            <input type='text' size='4' id='passwordsetting_maxpwdlength' name='passwordsetting_maxpwdlength'
                   value='{$config.passwordsetting.maxpwdlength}'>
        </td>
    </tr>
    <tr>
        <td scope="row">
            {$MOD.LBL_PASSWORD_ONE_UPPER_CASE}:
        </td>
        {if ($config.passwordsetting.oneupper ) == '1'}
            {assign var='oneupper_checked' value='CHECKED'}
        {else}
            {assign var='oneupper_checked' value=''}
        {/if}
        <td>
            <input type='hidden' name='passwordsetting_oneupper' value='0'>
            <input id='passwordsetting_oneupper' name='passwordsetting_oneupper' type='checkbox'
                   value='1' {$oneupper_checked}>
        </td>
        <td scope="row">
            {$MOD.LBL_PASSWORD_ONE_LOWER_CASE}:
        </td>
        {if ($config.passwordsetting.onelower ) == '1'}
            {assign var='onelower_checked' value='CHECKED'}
        {else}
            {assign var='onelower_checked' value=''}
        {/if}
        <td>
            <input type='hidden' name='passwordsetting_onelower' value='0'>
            <input id='passwordsetting_onelower' name='passwordsetting_onelower' type='checkbox'
                   value='1' {$onelower_checked}>
        </td>
    </tr>
    <tr>
        <td scope="row">
            {$MOD.LBL_PASSWORD_ONE_NUMBER}:
        </td>
        {if ($config.passwordsetting.onenumber ) == '1'}
            {assign var='onenumber_checked' value='CHECKED'}
        {else}
            {assign var='onenumber_checked' value=''}
        {/if}
        <td>
            <input type='hidden' name='passwordsetting_onenumber' value='0'>
            <input id='passwordsetting_onenumber' name='passwordsetting_onenumber' type='checkbox'
                   value='1' {$onenumber_checked}>
        </td>
        <td scope="row">
            {$MOD.LBL_PASSWORD_ONE_SPECIAL_CHAR}:
        </td>
        {if ($config.passwordsetting.onespecial ) == '1'}
            {assign var='onespecial_checked' value='CHECKED'}
        {else}
            {assign var='onespecial_checked' value=''}
        {/if}
        <td>
            <input type='hidden' name='passwordsetting_onespecial' value='0'>
            <input id='passwordsetting_onespecial' name='passwordsetting_onespecial' type='checkbox'
                   value='1' {$onespecial_checked}>
        </td>
    </tr>
    <tr>
        <td colspan='4'>
            <a class="tabFormAdvLink"
               href="javascript:toggleDisplay_2('regex_config_display')">{sugar_getimage alt=$mod_strings.LBL_ADVANCED_SEARCH name="advanced_search" ext=".gif" other_attributes='border="0" id="regex_config_display_img" '}
                &nbsp<span id='regex_config_display_lbl'>{$MOD.LBL_SHOW_ADVANCED_OPTIONS}<span></a>
        </td>
    </tr>
    <tr>
        <td colspan='4'>
            <table id='regex_config_display' style='display:none;' cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td width='25%' scope="row">
                        {$MOD.LBL_PASSWORD_REGEX}: {sugar_help text=$MOD.LBL_REGEX_HELP_TEXT WIDTH=500}
                    </td>
                    <td width='25%'>
                        <input type='text' style="width: 200px;" size='10' name='passwordsetting_customregex'
                               id='customregex' value='{$config.passwordsetting.customregex}' onblur='testregex(this)'>
                    </td>
                    <td width='25%' scope="row">
                        {$MOD.LBL_PASSWORD_REGEX_COMMENT}: {sugar_help text=$MOD.LBL_REGEX_DESC_HELP_TEXT WIDTH=500}
                    </td>
                    <td width='25%'>
                        <input type='text' style="width: 250px;" size='10' name='passwordsetting_regexcomment'
                               value='{$config.passwordsetting.regexcomment}'>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table id="sysGeneratedId" name="sysGeneratedName" width="100%" border="0" cellspacing="1" cellpadding="0"
       class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4">
            <h4>
                {$MOD.LBL_PASSWORD_SYST_GENERATED_TITLE}
            </h4>
        </th>
    </tr>
    <tr>
        <td scope="row" width='25%'>
            {$MOD.LBL_PASSWORD_SYST_GENERATED_PWD_ON}
            :&nbsp{sugar_help text=$MOD.LBL_PASSWORD_SYST_GENERATED_PWD_HELP WIDTH=400}
        </td>
        <td>
            {if ($config.passwordsetting.SystemGeneratedPasswordON ) == '1'}
                {assign var='SystemGeneratedPasswordON' value='CHECKED'}
            {else}
                {assign var='SystemGeneratedPasswordON' value=''}
            {/if}
            <input type='hidden' name='passwordsetting_SystemGeneratedPasswordON' value='0'>
            <input name='passwordsetting_SystemGeneratedPasswordON' id='SystemGeneratedPassword_checkbox'
                   type='checkbox' value='1' {$SystemGeneratedPasswordON}
                   onclick='enable_syst_generated_pwd(this);toggleDisplay("SystemGeneratedPassword_warning");'>
        </td>
        {if !($config.passwordsetting.SystemGeneratedPasswordON)}
            {assign var='smtp_warning' value='none'}
        {/if}
    </tr>
    <tr>
        <td colspan="2" id="SystemGeneratedPassword_warning" scope="row" style='display:{$smtp_warning}'
        ;>
        <i>{if $SMTP_SERVER_NOT_SET}&nbsp;&nbsp;&nbsp;&nbsp;{$MOD.ERR_SMTP_SERVER_NOT_SET}<br>{/if}
            &nbsp;&nbsp;&nbsp;&nbsp;{$MOD.LBL_EMAIL_ADDRESS_REQUIRED_FOR_FEATURE}</i>
        </td>
    </tr>
    <tr>
        <td align="left" scope="row" colspan="4">
            {$MOD.LBL_PASSWORD_SYST_EXPIRATION}
        </td>
    </tr>
    <tr>
        <td colspan='4'>
            <table width="100%" id='syst_generated_pwd_table' border="0" cellspacing="1" cellpadding="0">
                <tr>
                    {assign var='systexplogin' value=''}
                    {assign var='systexptime' value=''}
                    {assign var='systexpnone' value=''}
                    {if ($config.passwordsetting.systexpiration) == '0' || $config.passwordsetting.systexpiration==''}
                        {assign var='systexpnone' value='CHECKED'}
                    {/if}
                    {if ($config.passwordsetting.systexpiration) == '1'}
                        {assign var='systexptime' value='CHECKED'}
                    {/if}
                    {if ($config.passwordsetting.systexpiration) == '2'}
                        {assign var='systexplogin' value='CHECKED'}
                    {/if}
                    <td width='30%'>
                        <input type="radio" name="passwordsetting_systexpiration" value='0' {$systexpnone}
                               onclick="form.passwordsetting_systexpirationtime.value='';form.passwordsetting_systexpirationlogin.value='';">
                        {$MOD.LBL_UW_NONE}
                    </td>
                    <td width='30%'>
                        <input type="radio" name="passwordsetting_systexpiration" id="required_sys_pwd_exp_time"
                               value='1' {$systexptime} onclick="form.passwordsetting_systexpirationlogin.value='';">
                        {$MOD.LBL_PASSWORD_EXP_IN}
                        {assign var='sdays' value=''}
                        {assign var='sweeks' value=''}
                        {assign var='smonths' value=''}
                        {if ($config.passwordsetting.systexpirationtype ) == '1'}
                            {assign var='sdays' value='SELECTED'}
                        {/if}
                        {if ($config.passwordsetting.systexpirationtype ) == '7'}
                            {assign var='sweeks' value='SELECTED'}
                        {/if}
                        {if ($config.passwordsetting.systexpirationtype ) == '30'}
                            {assign var='smonths' value='SELECTED'}
                        {/if}
                        <input type='text' maxlength="3" and style="width:2em" name='passwordsetting_systexpirationtime'
                               value='{$config.passwordsetting.systexpirationtime}'>
                        <SELECT NAME="passwordsetting_systexpirationtype">
                            <OPTION VALUE='1' {$sdays}>{$MOD.LBL_DAYS}
                            <OPTION VALUE='7' {$sweeks}>{$MOD.LBL_WEEKS}
                            <OPTION VALUE='30' {$smonths}>{$MOD.LBL_MONTHS}
                        </SELECT>
                    </td>
                    <td colspan='2' width='40%'>
                        <input type="radio" name="passwordsetting_systexpiration" id="required_sys_pwd_exp_login"
                               value='2' {$systexplogin} onclick="form.passwordsetting_systexpirationtime.value='';">
                        {$MOD.LBL_PASSWORD_EXP_AFTER}
                        <input type='text' maxlength="3" and style="width:2em"
                               name='passwordsetting_systexpirationlogin'
                               value="{$config.passwordsetting.systexpirationlogin}">
                        {$MOD.LBL_PASSWORD_LOGINS}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<table id="userResetPassId" name="userResetPassName" width="100%" border="0" cellspacing="1" cellpadding="0"
       class="edit view">
    <tr>
        <th align="left" scope="row" colspan="2"><h4>{$MOD.LBL_PASSWORD_USER_RESET}</h4>
        </th>
    </tr>
    <tr>

        <td width="25%" scope="row">{$MOD.LBL_PASSWORD_FORGOT_FEATURE}
            :&nbsp{sugar_help text=$MOD.LBL_PASSWORD_FORGOT_FEATURE_HELP WIDTH=400}</td>
        <td scope="row" width="25%">
            {if ($config.passwordsetting.forgotpasswordON ) == '1'}
                {assign var='forgotpasswordON' value='CHECKED'}
            {else}
                {assign var='forgotpasswordON' value=''}
            {/if}
            <input type='hidden' name='passwordsetting_forgotpasswordON' value='0'>
            <input name="passwordsetting_forgotpasswordON" id="forgotpassword_checkbox" value="1" class="checkbox"
                   type="checkbox"
                   onclick='forgot_password_enable(this); toggleDisplay("SystemGeneratedPassword_warning2");' {$forgotpasswordON}>
        </td>
        {if !($config.passwordsetting.forgotpasswordON)}
            {assign var='smtp_warning_2' value='none'}
        {/if}
    </tr>
    <tr>
        <td colspan="4" id="SystemGeneratedPassword_warning2" scope="row" style='display:{$smtp_warning_2}'
        ;>
        <i>{if $SMTP_SERVER_NOT_SET}&nbsp;&nbsp;&nbsp;&nbsp;{$MOD.ERR_SMTP_SERVER_NOT_SET}<br>{/if}
            &nbsp;&nbsp;&nbsp;&nbsp;{$MOD.LBL_EMAIL_ADDRESS_REQUIRED_FOR_FEATURE}</i>
        </td>
    </tr>
    <tr>
        <td width="25%" scope="row">{$MOD.LBL_PASSWORD_LINK_EXPIRATION}
            :&nbsp{sugar_help text=$MOD.LBL_PASSWORD_LINK_EXPIRATION_HELP WIDTH=400}</td>
        <td colspan="3">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" id="forgot_password_table">
                <tr>

                    {assign var='linkexptime' value=''}
                    {assign var='linkexpnone' value=''}
                    {if ($config.passwordsetting.linkexpiration) == '0'}
                        {assign var='linkexpnone' value='CHECKED'}
                    {/if}
                    {if ($config.passwordsetting.linkexpiration) == '1'}
                        {assign var='linkexptime' value='CHECKED'}
                    {/if}
                    <td width='30%'>
                        <input type="radio" name="passwordsetting_linkexpiration" value='0'  {$linkexpnone}
                               onclick="form.passwordsetting_linkexpirationtime.value='';">
                        {$MOD.LBL_UW_NONE}
                    </td>
                    <td width='30%'>
                        <input type="radio" name="passwordsetting_linkexpiration" id="required_link_exp_time"
                               value='1'  {$linkexptime}>
                        {$MOD.LBL_PASSWORD_LINK_EXP_IN}
                        {assign var='ldays' value=''}
                        {assign var='lweeks' value=''}
                        {assign var='lmonths' value=''}
                        {if ($config.passwordsetting.linkexpirationtype ) == '1'}
                            {assign var='ldays' value='SELECTED'}
                        {/if}
                        {if ($config.passwordsetting.linkexpirationtype ) == '60'}
                            {assign var='lweeks' value='SELECTED'}
                        {/if}
                        {if ($config.passwordsetting.linkexpirationtype ) == '1440'}
                            {assign var='lmonths' value='SELECTED'}
                        {/if}
                        <input type='text' maxlength="3" and style="width:2em" name='passwordsetting_linkexpirationtime'
                               value='{$config.passwordsetting.linkexpirationtime}'>
                        <SELECT NAME="passwordsetting_linkexpirationtype">
                            <OPTION VALUE='1' {$ldays}>{$MOD.LBL_MINUTES}
                            <OPTION VALUE='60' {$lweeks}>{$MOD.LBL_HOURS}
                            <OPTION VALUE='1440' {$lmonths}>{$MOD.LBL_DAYS}
                        </SELECT>
                    </td width='40%'>
                    <td>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
    {if !empty($settings.honeypot_on)}
        {assign var='honeypot_checked' value='CHECKED'}
    {else}
        {assign var='honeypot_checked' value=''}
    {/if}
    <td width="25%" scope="row">{$MOD.ENABLE_HONEYPOT}:&nbsp{sugar_help text=$MOD.LBL_HONEYPOT_HELP_TEXT WIDTH=400}</td>
    <td scope="row" width="75%"><input type='hidden' name='honeypot_on' value='0'><input name="honeypot_on"
                                                                                         id="honeypot_id" value="1"
                                                                                         class="checkbox" tabindex='1'
                                                                                         type="checkbox" {$honeypot_checked}>
    </td>
    </tr>

</table>


<table id="emailTemplatesId" name="emailTemplatesName" width="100%" border="0" cellspacing="1" cellpadding="0"
       class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4">
            <h4>
                {$MOD.LBL_PASSWORD_TEMPLATE}
            </h4>
        </th>
    </tr>

    <tr>
        <td scope="row" width="35%">{$MOD.LBL_PASSWORD_GENERATE_TEMPLATE_MSG}:</td>
        <td>
            <slot>
                <select tabindex='251' id="generatepasswordtmpl"
                        name="passwordsetting_generatepasswordtmpl" {$IE_DISABLED}>{$TMPL_DRPDWN_GENERATE}</select>
                <input type="button" class="button"
                       onclick="javascript:open_email_template_form('generatepasswordtmpl')"
                       value="{$MOD.LBL_PASSWORD_CREATE_TEMPLATE}" {$IE_DISABLED}>
                <input type="button" value="{$MOD.LBL_PASSWORD_EDIT_TEMPLATE}" class="button"
                       onclick="javascript:edit_email_template_form('generatepasswordtmpl')"
                       name='edit_generatepasswordtmpl' id='edit_generatepasswordtmpl' style="{$EDIT_TEMPLATE}">
            </slot>
        </td>
        <td></td>
        <td></td>
    </tr>
    <tr>
        <td scope="row">{$MOD.LBL_PASSWORD_LOST_TEMPLATE_MSG}:</td>
        <td>
            <slot>
                <select tabindex='251' id="lostpasswordtmpl"
                        name="passwordsetting_lostpasswordtmpl" {$IE_DISABLED}>{$TMPL_DRPDWN_LOST}</select>
                <input type="button" class="button" onclick="javascript:open_email_template_form('lostpasswordtmpl')"
                       value="{$MOD.LBL_PASSWORD_CREATE_TEMPLATE}" {$IE_DISABLED}>
                <input type="button" value="{$MOD.LBL_PASSWORD_EDIT_TEMPLATE}" class="button"
                       onclick="javascript:edit_email_template_form('lostpasswordtmpl')" name='edit_lostpasswordtmpl'
                       id='edit_lostpasswordtmpl' style="{$EDIT_TEMPLATE}">
            </slot>
        </td>
        <td></td>
        <td></td>
    </tr>
</table>




<table id="userGenPassExpId" name="userGenPassExpName" width="100%" border="0" cellspacing="1" cellpadding="0"
       class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4">
            <h4 scope="row">
                {$MOD.LBL_PASSWORD_USER_EXPIRATION}
            </h4>
        </th>
    </tr>
    <tr>

        {assign var='userexplogin' value=''}
        {assign var='userexptime' value=''}
        {assign var='userexpnone' value=''}
        {if ($config.passwordsetting.userexpiration) == '0'}
            {assign var='userexpnone' value='CHECKED'}
        {/if}
        {if ($config.passwordsetting.userexpiration) == '1'}
            {assign var='userexptime' value='CHECKED'}
        {/if}
        {if ($config.passwordsetting.userexpiration) == '2'}
            {assign var='userexplogin' value='CHECKED'}
        {/if}
        <td width='30%'>
            <input type="radio" name="passwordsetting_userexpiration" value='0' {$userexpnone}
                   onclick="form.passwordsetting_userexpirationtime.value='';form.passwordsetting_userexpirationlogin.value='';">
            {$MOD.LBL_UW_NONE}
        </td>
        <td width='30%'>
            <input type="radio" name="passwordsetting_userexpiration" id="required_user_pwd_exp_time"
                   value='1' {$userexptime} onclick="form.passwordsetting_userexpirationlogin.value='';">
            {$MOD.LBL_PASSWORD_EXP_IN}
            {assign var='udays' value=''}
            {assign var='uweeks' value=''}
            {assign var='umonths' value=''}
            {if ($config.passwordsetting.userexpirationtype ) == '1'}
                {assign var='udays' value='SELECTED'}
            {/if}
            {if ($config.passwordsetting.userexpirationtype ) == '7'}
                {assign var='uweeks' value='SELECTED'}
            {/if}
            {if ($config.passwordsetting.userexpirationtype ) == '30'}
                {assign var='umonths' value='SELECTED'}
            {/if}
            <input type='text' maxlength="3" and style="width:2em" name='passwordsetting_userexpirationtime'
                   value='{$config.passwordsetting.userexpirationtime}'>
            <SELECT NAME="passwordsetting_userexpirationtype">
                <OPTION VALUE='1' {$udays}>{$MOD.LBL_DAYS}
                <OPTION VALUE='7' {$uweeks}>{$MOD.LBL_WEEKS}
                <OPTION VALUE='30' {$umonths}>{$MOD.LBL_MONTHS}
            </SELECT>
        </td>
        <td colspan='2 width='
        40%'>
        <input type="radio" name="passwordsetting_userexpiration" id="required_user_pwd_exp_login"
               value='2' {$userexplogin} onclick="form.passwordsetting_userexpirationtime.value='';">
        {$MOD.LBL_PASSWORD_EXP_AFTER}
        <input type='text' maxlength="3" and style="width:2em" name='passwordsetting_userexpirationlogin'
               value="{$config.passwordsetting.userexpirationlogin}">
        {$MOD.LBL_PASSWORD_LOGINS}
        </td>
    </tr>
</table>

<table id="loginLockoutId" name="loginLockoutName" width="100%" border="0" cellspacing="1" cellpadding="0"
       class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4">
            <h4>
                {$MOD.LBL_PASSWORD_LOCKOUT}
            </h4>
        </th>
    </tr>
    <tr>
        {assign var='lockouttypelogin' value=''}
        {assign var='lockoutnone' value=''}
        {if ($config.passwordsetting.lockoutexpiration) == '0'}
            {assign var='lockoutnone' value='CHECKED'}
        {/if}
        {if ($config.passwordsetting.lockoutexpiration) == '1' || ($config.passwordsetting.lockoutexpiration) == '2'}
            {assign var='lockouttypelogin' value='CHECKED'}
        {/if}
        <td width='30%'>
            <input type="radio" name="passwordsetting_lockoutexpiration" value='0' {$lockoutnone}
                   onclick="form.passwordsetting_lockoutexpirationtime.value='';form.passwordsetting_lockoutexpirationlogin.value=''; document.getElementById('dione').style.display='none';">
            {$MOD.LBL_UW_NONE}

        </td>
        <td width='30%'>
            <input type="radio" id="required_lockout_exp_login" name="passwordsetting_lockoutexpiration"
                   value='1' {$lockouttypelogin} onclick="document.getElementById('dione').style.display='';">
            {$MOD.LBL_PASSWORD_LOCKOUT_ATTEMPT1}
            <input type='text' maxlength="3" and style="width:2em" id='passwordsetting_lockoutexpirationlogin'
                   name='passwordsetting_lockoutexpirationlogin'
                   value='{$config.passwordsetting.lockoutexpirationlogin}'>
            {$MOD.LBL_PASSWORD_LOCKOUT_ATTEMPT2}
        </td>
        <td width='40%'>
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <div id="dione" style="display:{$LOGGED_OUT_DISPLAY_STATUS};">
                <table width='100%'>
                    <td scope="row" width='25%'>{$MOD.LBL_PASSWORD_LOGIN_DELAY}:
                        {assign var='lminutes' value=''}
                        {assign var='lhours' value=''}
                        {assign var='ldays' value=''}
                        {if ($config.passwordsetting.lockoutexpirationtype ) == '1'}
                            {assign var='lminutes' value='SELECTED'}
                        {/if}
                        {if ($config.passwordsetting.lockoutexpirationtype ) == '60'}
                            {assign var='lhours' value='SELECTED'}
                        {/if}
                        {if ($config.passwordsetting.lockoutexpirationtype ) == '1440'}
                            {assign var='ldays' value='SELECTED'}
                        {/if}
                        <input type='text' maxlength="3" and style="width:2em"
                               id="passwordsetting_lockoutexpirationtime" name='passwordsetting_lockoutexpirationtime'
                               value="{$config.passwordsetting.lockoutexpirationtime}">
                        <SELECT NAME="passwordsetting_lockoutexpirationtype">
                            <OPTION VALUE='1' {$lminutes}>{$MOD.LBL_MINUTES}
                            <OPTION VALUE='60' {$lhours}>{$MOD.LBL_HOURS}
                            <OPTION VALUE='1440' {$ldays}>{$MOD.LBL_DAYS}
                        </SELECT>
                    </td>
                </table>
            </div>
        </td>
    </tr>
</table>

{if !empty($settings.system_ldap_enabled)}
    {assign var='system_ldap_enabled_checked' value='CHECKED'}
    {assign var='ldap_display' value='inline'}
{else}
    {assign var='system_ldap_enabled_checked' value=''}
    {assign var='ldap_display' value='none'}
{/if}
<table id='ldap_table' width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th align="left" scope="row" colspan='3'><h4>{$MOD.LBL_LDAP_TITLE}</h4></th>
                </tr>
                <tr>
                    <td width="25%" scope="row" valign='middle'>
                        {$MOD.LBL_LDAP_ENABLE}{sugar_help text=$MOD.LBL_LDAP_HELP_TXT}
                    </td>
                    <td valign='middle'><input name="system_ldap_enabled" id="system_ldap_enabled" class="checkbox"
                                               type="checkbox" {$system_ldap_enabled_checked}
                                               onclick='toggleDisplay("ldap_display");enableDisablePasswordTable("system_ldap_enabled");'>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='4'>
                        <table cellspacing='0' cellpadding='1' id='ldap_display' style='display:{$ldap_display}'
                               width='100%'>
                            <tr>
                                <td width='25%' scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_ENCRYPTION_TYPE} {sugar_help text=$MOD.LBL_LDAP_ENCRYPTION_TYPE_DESC}
                                </td>
                                <td width='25%' align="left" valign='top'>
                                    <select tabindex='2' id="ldap_encryption" name="ldap_encryption">
                                        {$LDAP_ENCRYPTION_TYPE_OPTIONS}
                                    </select>
                                </td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                            </tr>
                            <tr>
                                <td width='25%' scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_SERVER_HOSTNAME} {sugar_help text=$MOD.LBL_LDAP_SERVER_HOSTNAME_DESC}</td>{$settings.proxy_host}
                                <td width='25%' align="left" valign='top'><input name="ldap_hostname" size='25'
                                                                                 type="text"
                                                                                 value="{$settings.ldap_hostname}"></td>
                                <td width='25%' scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_SERVER_PORT} {sugar_help text=$MOD.LBL_LDAP_SERVER_PORT_DESC}</td>{$settings.proxy_port}
                                <td width='25%' align="left" valign='top'><input name="ldap_port" size='6' type="text"
                                                                                 value="{$settings.ldap_port}"></td>
                            </tr>
                            <tr>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_LDAP_USER_DN} {sugar_help text=$MOD.LBL_LDAP_USER_DN_DESC}</td>
                                <td align="left" valign='middle'><input name="ldap_base_dn" size='35' type="text"
                                                                        value="{$settings.ldap_base_dn}"></td>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_LDAP_USER_FILTER} {sugar_help text=$MOD.LBL_LDAP_USER_FILTER_DESC}</td>
                                <td align="left" valign='middle'><input name="ldap_login_filter" size='25' type="text"
                                                                        value="{$settings.ldap_login_filter}"></td>
                            </tr>
                            <tr>
                                <td scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_BIND_ATTRIBUTE} {sugar_help text=$MOD.LBL_LDAP_BIND_ATTRIBUTE_DESC}</td>
                                <td align="left" valign='top'><input name="ldap_bind_attr" size='25' type="text"
                                                                     value="{$settings.ldap_bind_attr}"></td>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_LDAP_LOGIN_ATTRIBUTE} {sugar_help text=$MOD.LBL_LDAP_LOGIN_ATTRIBUTE_DESC}</td>
                                <td align="left" valign='middle'><input name="ldap_login_attr" size='25' type="text"
                                                                        value="{$settings.ldap_login_attr}"></td>
                            </tr>
                            <tr>
                                <td scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_GROUP_MEMBERSHIP} {sugar_help text=$MOD.LBL_LDAP_GROUP_MEMBERSHIP_DESC}</td>
                                <td align="left" valign='top'>
                                    {if !empty($settings.ldap_group)}
                                        {assign var='ldap_group_checked' value='CHECKED'}
                                        {assign var='ldap_group_display' value=''}
                                    {else}
                                        {assign var='ldap_group_checked' value=''}
                                        {assign var='ldap_group_display' value='none'}
                                    {/if}
                                    <input name="ldap_group_checkbox" class="checkbox"
                                           type="checkbox" {$ldap_group_checked} onclick='toggleDisplay("ldap_group")'>
                                </td>
                                <td valign='middle' nowrap></td>
                                <td align="left" valign='middle'></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan='3'>
																<span id='ldap_group'
                                                                      style='display:{$ldap_group_display}'>
																	<table width='100%'>
                                                                        <tr>
                                                                            <td width='25%' scope="row" valign='top'
                                                                                nowrap>{$MOD.LBL_LDAP_GROUP_DN} {sugar_help text=$MOD.LBL_LDAP_GROUP_DN_DESC}</td>
                                                                            <td width='25%' align="left" valign='top'>
                                                                                <input name="ldap_group_dn" size='20'
                                                                                       type="text"
                                                                                       value="{$settings.ldap_group_dn}">
                                                                            </td>
                                                                            <td width='25%' scope="row" valign='top'
                                                                                nowrap>{$MOD.LBL_LDAP_GROUP_NAME} {sugar_help text=$MOD.LBL_LDAP_GROUP_NAME_DESC}</td>
                                                                            <td width='25%' align="left" valign='top'>
                                                                                <input name="ldap_group_name" size='20'
                                                                                       type="text"
                                                                                       value="{$settings.ldap_group_name}">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" valign='top'
                                                                                nowrap>{$MOD.LBL_LDAP_GROUP_USER_ATTR} {sugar_help text=$MOD.LBL_LDAP_GROUP_USER_ATTR_DESC}</td>
                                                                            <td align="left" valign='top'><input
                                                                                        name="ldap_group_user_attr"
                                                                                        size='20' type="text"
                                                                                        value="{$settings.ldap_group_user_attr}">
                                                                            </td>
                                                                            <td scope="row" valign='top'
                                                                                nowrap>{$MOD.LBL_LDAP_GROUP_ATTR} {sugar_help text=$MOD.LBL_LDAP_GROUP_ATTR_DESC}</td>
                                                                            <td align="left" valign='top'><input
                                                                                        name="ldap_group_attr" size='20'
                                                                                        type="text"
                                                                                        value="{$settings.ldap_group_attr}">
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td scope="row" valign='top'
                                                                                nowrap>{$MOD.LBL_LDAP_GROUP_ATTR_REQ_DN} {sugar_help text=$MOD.LBL_LDAP_GROUP_ATTR_REQ_DN_DESC}</td>
                                                                            <td align="left" valign='top'>
                                                                                {if !empty($settings.ldap_group_attr_req_dn)}
                                                                                    {assign var='ldap_group_attr_req_dn' value='CHECKED'}
                                                                                {else}
                                                                                    {assign var='ldap_group_attr_req_dn' value='none'}
                                                                                {/if}
                                                                                <input
                                                                                        name="ldap_group_attr_req_dn"
                                                                                        class="checkbox"
                                                                                        type="checkbox"
                                                                                        {$ldap_group_attr_req_dn}>
                                                                            </td>
                                                                        </tr>
                                                                    </table>
																 <br>
																</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_AUTHENTICATION} {sugar_help text=$MOD.LBL_LDAP_AUTHENTICATION_DESC}</td>
                                <td align="left" valign='top'>
                                    {if !empty($settings.ldap_authentication)}
                                        {assign var='ldap_authentication_checked' value='CHECKED'}
                                        {assign var='ldap_authentication_display' value=''}
                                    {else}
                                        {assign var='ldap_authentication_checked' value=''}
                                        {assign var='ldap_authentication_display' value='none'}
                                    {/if}
                                    <input name="ldap_authentication_checkbox" class="checkbox"
                                           type="checkbox" {$ldap_authentication_checked}
                                           onclick='toggleDisplay("ldap_authentication")'>
                                </td>
                                <td valign='middle' nowrap></td>
                                <td align="left" valign='middle'></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan='3'>
															<span id='ldap_authentication'
                                                                  style='display:{$ldap_authentication_display}'>
																<table width='100%'>
                                                                    <tr>
                                                                        <td width='25%' scope="row" valign='top'
                                                                            nowrap>{$MOD.LBL_LDAP_ADMIN_USER} {sugar_help text=$MOD.LBL_LDAP_ADMIN_USER_DESC}</td>
                                                                        <td width='25%' align="left" valign='top'><input
                                                                                    name="ldap_admin_user" size='20'
                                                                                    type="text"
                                                                                    value="{$settings.ldap_admin_user}">
                                                                        </td>
                                                                        <td width='25%' scope="row" valign='middle'
                                                                            nowrap>{$MOD.LBL_LDAP_ADMIN_PASSWORD}</td>
                                                                        <td width='25%' align="left" valign='middle'>
                                                                            <input name="ldap_admin_password" id="ldap_admin_password" size='20'
                                                                                   type="password"
                                                                                   value="{$settings.ldap_admin_password}" autocomplete="off">
                                                                        </td>
                                                                    </tr>
                                                                </table>
																<br>
															</span>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign='top'
                                    nowrap>{$MOD.LBL_LDAP_AUTO_CREATE_USERS} {sugar_help text=$MOD.LBL_LDAP_AUTO_CREATE_USERS_DESC}</td>
                                {if !empty($settings.ldap_auto_create_users)}
                                    {assign var='ldap_auto_create_users_checked' value='CHECKED'}
                                {else}
                                    {assign var='ldap_auto_create_users_checked' value=''}
                                {/if}
                                <td align="left" valign='top'><input type='hidden' name='ldap_auto_create_users'
                                                                     value='0'><input name="ldap_auto_create_users"
                                                                                      value="1" class="checkbox"
                                                                                      type="checkbox" {$ldap_auto_create_users_checked}>
                                </td>
                                <td valign='middle' nowrap></td>
                                <td align="left" valign='middle'></td>
                            </tr>
                            <tr>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_LDAP_ENC_KEY} {sugar_help text=$LDAP_ENC_KEY_DESC}</td>
                                <td align="left" valign='middle'><input name="ldap_enc_key" size='35' type="password"
                                                                        value="{$settings.ldap_enc_key}" {$LDAP_ENC_KEY_READONLY}>
                                </td>
                                <td valign='middle' nowrap></td>
                                <td align="left" valign='middle'></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- start SAML -->

<table id='saml_table' width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
    <tr>
        <td>
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th align="left" scope="row" colspan='3'><h4>{$MOD.LBL_SAML_TITLE}</h4></th>
                </tr>
                <tr>
                    <td width="25%" scope="row" valign='middle'>
                        {$MOD.LBL_SAML_ENABLE}{sugar_help text=$MOD.LBL_SAML_HELP_TXT}
                    </td>
                    <td valign='middle'>

                        <input name="authenticationClass" id="system_saml_enabled" class="checkbox"
                               value="IdMSAMLAuthenticate" type="checkbox"
                               {if $saml_enabled_checked}checked="1"{/if}
                               onclick='toggleDisplay("saml_top_buttons");
                               toggleDisplay("saml_bottom_buttons");
                               toggleDisplay("saml_display");
                               toggleDisplay("saml_advanced");
                               enableDisablePasswordTable("system_saml_enabled");'>
                    </td>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan='4'>
                        <table cellspacing='0' cellpadding='1' id='saml_display' style='display:{$saml_display}'
                               width='100%'>
                            <tr>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_SAML_LOGIN_URL} {sugar_help text=$MOD.LBL_SAML_LOGIN_URL_DESC}<span class="required">*</span></td>
                                <td align="left" valign='middle'><input name="SAML_loginurl" size='35' type="text"
                                                                        value="{$config.SAML_loginurl}"></td>

                            </tr>
                            <tr>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_SAML_LOGOUT_URL} {sugar_help text=$MOD.LBL_SAML_LOGOUT_URL_DESC}</td>
                                <td align="left" valign='middle'><input name="SAML_SLO" size='35' type="text"
                                                                        value="{$config.SAML_SLO}"></td>

                            </tr>
                            <tr>
                                <td scope="row" valign='middle'
                                    nowrap>{$MOD.LBL_SAML_IDP_ENTITY_ID}
                                    {sugar_help text=$MOD.LBL_SAML_IDP_ENTITY_ID_DESC}
                                    <span class="required">*</span>
                                </td>
                                <td align="left" valign='middle'>
                                    <input name="SAML_idp_entityId" size='35' type="text" value="{$config.SAML_idp_entityId}">
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign="middle"
                                    nowrap>{$MOD.LBL_SAML_SP_ENTITY_ID}
                                    {sugar_help text=$MOD.LBL_SAML_SP_ENTITY_ID_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    <input name="SAML_issuer" size="35" type="text" value="{$config.SAML_issuer}">
                                </td>
                            </tr>
                            <tr>
                                <td width='25%' scope="row" valign='top'
                                    nowrap>{$MOD.LBL_SAML_CERT} {sugar_help text=$MOD.LBL_SAML_CERT_DESC}<span class="required">*</span></td>
                                <td width='25%' align="left" valign='top'><textarea style='height:200px;width:600px'
                                                                                    name="SAML_X509Cert">{$config.SAML_X509Cert}</textarea>
                                </td>

                            </tr>
                            <tr>
                                {if isset($config.SAML_provisionUser)}
                                    {assign var='saml_provision_user' value=$config.SAML_provisionUser}
                                {else}
                                    {assign var='saml_provision_user' value=true}
                                {/if}
                                <td width='25%' scope="row" valign='top' nowrap>
                                    {$MOD.LBL_SAML_PROVISION_USER} {sugar_help text=$MOD.LBL_SAML_PROVISION_USER_DESC}
                                </td>
                                <td width='25%' align="left" valign='top'>
                                    <input type="checkbox" name="SAML_provisionUser"
                                           {if $saml_provision_user}checked="1"{/if}/>
                                </td>
                            </tr>
                            <tr>
                                <td width='25%' scope="row" valign='top'
                                    nowrap>{$MOD.LBL_SAML_SAME_WINDOW} {sugar_help text=$MOD.LBL_SAML_SAME_WINDOW_DESC}</td>
                                <td width='25%' align="left" valign='top'><input type="checkbox" name="SAML_SAME_WINDOW" {if $config.SAML_SAME_WINDOW}checked="1"{/if}>
                                </td>

                            </tr>


                        </table>


                    </td>
                </tr>
                <tr>
                    <td colspan="4">
                        <table cellspacing="0" cellpadding="1" id="saml_advanced" style="display:{$saml_display}" width="100%">
                            <tr>
                                <td scope="row" valign="middle" nowrap>
                                    {$MOD.LBL_SAML_REQUEST_SIGNING_PKEY} {sugar_help text=$MOD.LBL_SAML_REQUEST_SIGNING_PKEY_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    <input name="SAML_request_signing_pkey_file" type="file" />
                                    {$config.SAML_request_signing_pkey_name}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign="middle" nowrap>
                                    {$MOD.LBL_SAML_REQUEST_SIGNING_CERT} {sugar_help text=$MOD.LBL_SAML_REQUEST_SIGNING_CERT_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    <input name="SAML_request_signing_cert_file" type="file" />
                                    {$config.SAML_request_signing_cert_name}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign="middle" nowrap>
                                    {$MOD.LBL_SAML_REQUEST_SIGNING_METHOD} {sugar_help text=$MOD.LBL_SAML_REQUEST_SIGNING_METHOD_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    {html_options name=SAML_request_signing_method options=$SAML_AVAILABLE_SIGNING_ALGOS selected=$config.SAML_request_signing_method}
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign="middle" nowrap>
                                    {$MOD.LBL_SAML_SIGN_AUTHN} {sugar_help text=$MOD.LBL_SAML_SIGN_AUTHN_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    <input type="checkbox" name="SAML_sign_authn" {if $config.SAML_sign_authn}checked="checked"{/if} />
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign="middle" nowrap>
                                    {$MOD.LBL_SAML_SIGN_LOGOUT_REQUEST} {sugar_help text=$MOD.LBL_SAML_SIGN_LOGOUT_REQUEST_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    <input type="checkbox" name="SAML_sign_logout_request" {if $config.SAML_sign_logout_request}checked="checked"{/if} />
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" valign="middle" nowrap>
                                    {$MOD.LBL_SAML_SIGN_LOGOUT_RESPONSE} {sugar_help text=$MOD.LBL_SAML_SIGN_LOGOUT_RESPONSE_DESC}
                                </td>
                                <td align="left" valign="middle">
                                    <input type="checkbox" name="SAML_sign_logout_response" {if $config.SAML_sign_logout_response}checked="checked"{/if} />
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <!-- end SAML -->
        </td>
    </tr>
</table>
<div style="padding-top: 2px;">
    <input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary" id="btn_save" type="submit"
           onclick="addcheck(form);return check_form('ConfigurePasswordSettings');" name="save"
           value="{$APP.LBL_SAVE_BUTTON_LABEL}"/>
    &nbsp;<input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}"
                 onclick={literal}"parent.SUGAR.App.router.navigate('#Administration', {trigger: true})"{/literal} class="button"
                 type="button" name="cancel" value="{$APP.LBL_CANCEL_BUTTON_LABEL}"/>
    <div style="display: inline-block;">
        <div id="saml_bottom_buttons" style='display:{$saml_display}'>
            <input title="{$MOD.LBL_EXPORT_METADATA_BUTTON_TITLE}" class="button btn_export_metadata"
                   onclick="document.location.href='index.php?module=Administration&action=exportMetaDataFile'"
                   type="button" name="export_metadata" value="{$MOD.LBL_EXPORT_METADATA_BUTTON_LABEL}">
            &nbsp;<input title="{$MOD.LBL_IMPORT_METADATA_BUTTON_TITLE}" class="button btn_import_metadata" href="#"
                   type="button" name="export_metadata" value="{$MOD.LBL_IMPORT_METADATA_BUTTON_LABEL}">
        </div>
    </div>
</div>
</td>
</tr>
</table>

</td>
</tr>
</table>
</form>
{$JAVASCRIPT}

<script>
function addcheck(form) {
    addForm('ConfigurePasswordSettings');


    removeFromValidate('ConfigurePasswordSettings', 'passwordsetting_minpwdlength');
    addToValidateLessThan('ConfigurePasswordSettings', 'passwordsetting_minpwdlength', 'int', false, "{$MOD.LBL_PASSWORD_MINIMUM_LENGTH}", document.getElementById('passwordsetting_maxpwdlength').value, "{$MOD.LBL_PASSWORD_MAXIMUM_LENGTH}");

    if (document.getElementById('forgotpassword_checkbox').checked) {
        addToValidate('ConfigurePasswordSettings', 'passwordsetting_linkexpirationtime', 'int', form.required_link_exp_time.checked, "{$MOD.ERR_PASSWORD_LINK_EXPIRE_TIME} ");
    }

    if (document.getElementById('SystemGeneratedPassword_checkbox').checked) {
        addToValidate('ConfigurePasswordSettings', 'passwordsetting_systexpirationtime', 'int', form.required_sys_pwd_exp_time.checked, "{$MOD.ERR_PASSWORD_EXPIRE_TIME}");
        addToValidate('ConfigurePasswordSettings', 'passwordsetting_systexpirationlogin', 'int', form.required_sys_pwd_exp_login.checked, "{$MOD.ERR_PASSWORD_EXPIRE_LOGIN}");
    }


    addToValidate('ConfigurePasswordSettings', 'passwordsetting_userexpirationtime', 'int', form.required_user_pwd_exp_time.checked, "{$MOD.ERR_PASSWORD_EXPIRE_TIME}");
    addToValidate('ConfigurePasswordSettings', 'passwordsetting_userexpirationlogin', 'int', form.required_user_pwd_exp_login.checked, "{$MOD.ERR_PASSWORD_EXPIRE_LOGIN}");

    addToValidate('ConfigurePasswordSettings', 'passwordsetting_lockoutexpirationlogin', 'int', form.required_lockout_exp_login.checked, "{$MOD.ERR_PASSWORD_LOCKOUT_LOGIN}");
    addToValidate('ConfigurePasswordSettings', 'passwordsetting_lockoutexpirationtime', 'int', form.required_lockout_exp_login.checked, "{$MOD.ERR_PASSWORD_LOCKOUT_TIME}");
    addToValidateMoreThan('ConfigurePasswordSettings', 'passwordsetting_minpwdlength', 'int', false, "{$MOD.LBL_PASSWORD_MINIMUM_LENGTH}", '0');

    var number_of_requirements = 0;
    if (document.getElementById('passwordsetting_onespecial').checked)
        number_of_requirements++;
    if (document.getElementById('passwordsetting_onenumber').checked)
        number_of_requirements++;
    if (document.getElementById('passwordsetting_onelower').checked)
        number_of_requirements++;
    if (document.getElementById('passwordsetting_oneupper').checked)
        number_of_requirements++;
    if (document.getElementById('passwordsetting_maxpwdlength').value != '')
        addToValidateMoreThan('ConfigurePasswordSettings', 'passwordsetting_maxpwdlength', 'int', false, "{$MOD.LBL_PASSWORD_MAXIMUM_LENGTH}", number_of_requirements);

    if (document.getElementById('customregex').value != '')
        addToValidate('ConfigurePasswordSettings', 'passwordsetting_regexcomment', 'alpha', 'true', "{$MOD.ERR_EMPTY_REGEX_DESCRIPTION}");

}


function open_email_template_form(fieldToSet) {
    fieldToSetValue = fieldToSet;
    URL = "index.php?module=EmailTemplates&action=EditView&inboundEmail=true&show_js=1";
    windowName = 'email_template';
    windowFeatures = 'width=800' + ',height=600' + ',resizable=1,scrollbars=1';

    win = window.open(URL, windowName, windowFeatures);
    if (window.focus) {
        // put the focus on the popup if the browser supports the focus() method
        win.focus();
    }
}

function enableDisablePasswordTable(checkbox_id) {
    var other = checkbox_id == "system_saml_enabled" ? "ldap_table" : "saml_table";
    var enabled = document.getElementById(checkbox_id).checked;
    if (enabled) {
        document.getElementById("emailTemplatesId").style.display = "none";
        document.getElementById("sysGeneratedId").style.display = "none";
        document.getElementById("userResetPassId").style.display = "none";

        document.getElementById("passRequirementId").style.display = "none";
        document.getElementById("userGenPassExpId").style.display = "none";
        document.getElementById("loginLockoutId").style.display = "none";
        document.getElementById(other).style.display = "none";
    } else {
        document.getElementById("emailTemplatesId").style.display = "";
        document.getElementById("sysGeneratedId").style.display = "";
        document.getElementById("userResetPassId").style.display = "";

        document.getElementById("passRequirementId").style.display = "";
        document.getElementById("userGenPassExpId").style.display = "";
        document.getElementById("loginLockoutId").style.display = "";
        document.getElementById(other).style.display = "";

    }
} // if

function edit_email_template_form(templateField) {
    fieldToSetValue = templateField;
    var field = document.getElementById(templateField);
    URL = "index.php?module=EmailTemplates&action=EditView&inboundEmail=true&show_js=1";
    if (field.options[field.selectedIndex].value != 'undefined') {
        URL += "&record=" + field.options[field.selectedIndex].value;
    }
    windowName = 'email_template';
    windowFeatures = 'width=800' + ',height=600' + ',resizable=1,scrollbars=1';

    win = window.open(URL, windowName, windowFeatures);
    if (window.focus) {
        // put the focus on the popup if the browser supports the focus() method
        win.focus();
    }
}

function refresh_email_template_list(template_id, template_name) {
    var field = document.getElementById(fieldToSetValue);
    var bfound = 0;
    for (var i = 0; i < field.options.length; i++) {
        if (field.options[i].value == template_id) {
            if (field.options[i].selected == false) {
                field.options[i].selected = true;
            }
            field.options[i].text = template_name;
            bfound = 1;
        }
    }
    //add item to selection list.
    if (bfound == 0) {
        var newElement = document.createElement('option');
        newElement.text = template_name;
        newElement.value = template_id;
        field.options.add(newElement);
        newElement.selected = true;
    }

    //enable the edit button.
    var editButtonName = 'edit_generatepasswordtmpl';
    if (fieldToSetValue == 'generatepasswordtmpl') {
        editButtonName = 'edit_lostpasswordtmpl';
    } // if
    var field1 = document.getElementById(editButtonName);
    field1.style.visibility = "visible";

    var applyListToTemplateField = 'generatepasswordtmpl';
    if (fieldToSetValue == 'generatepasswordtmpl') {
        applyListToTemplateField = 'lostpasswordtmpl';
    } // if
    var field = document.getElementById(applyListToTemplateField);
    if (bfound == 1) {
        for (var i = 0; i < field.options.length; i++) {
            if (field.options[i].value == template_id) {
                field.options[i].text = template_name;
            } // if
        } // for

    } else {
        var newElement = document.createElement('option');
        newElement.text = template_name;
        newElement.value = template_id;
        field.options.add(newElement);
    } // else
}

function testregex(customregex) {
    try {
        var string = 'hello';
        string.match(customregex.value);
    }
    catch (err) {
        alert(SUGAR.language.get("Administration", "ERR_INCORRECT_REGEX"));
        setTimeout("document.getElementById('customregex').select()", 10);
    }
}
function toggleDisplay_2(id) {

    if (this.document.getElementById(id).style.display == 'none') {
        this.document.getElementById(id).style.display = '';
        this.document.getElementById(id + "_lbl").innerHTML = '{$MOD.LBL_HIDE_ADVANCED_OPTIONS}';
        this.document.getElementById("regex_config_display_img").src = '{sugar_getimagepath file="basic_search.gif"}';
    } else {
        this.document.getElementById(id).style.display = 'none'
        this.document.getElementById(id + "_lbl").innerHTML = '{$MOD.LBL_SHOW_ADVANCED_OPTIONS}';
        this.document.getElementById("regex_config_display_img").src = '{sugar_getimagepath file="advanced_search.gif"}';
    }
}

function forgot_password_enable(check) {
    var table_fields = document.getElementById('forgot_password_table');
    var forgot_password_input = table_fields.getElementsByTagName('input');
    var forgot_password_select = table_fields.getElementsByTagName('select');
    if (check.checked) {
        for (i = 0; i < forgot_password_input.length; i++)
            forgot_password_input[i].disabled = '';
        for (j = 0; j < forgot_password_select.length; j++)
            forgot_password_select[j].disabled = '';
        document.ConfigurePasswordSettings.honeypot_on[1].disabled = '';
    } else {
        document.ConfigurePasswordSettings.honeypot_on[1].disabled = 'disabled';
        document.ConfigurePasswordSettings.honeypot_on[1].checked = '';
        for (i = 0; i < forgot_password_input.length; i++)
            forgot_password_input[i].disabled = 'disabled';
        for (j = 0; j < forgot_password_select.length; j++)
            forgot_password_select[j].disabled = 'disabled';
    }
}

function enable_syst_generated_pwd(check) {
    var table_fields = document.getElementById('syst_generated_pwd_table');
    var syst_generated_pwd_input = table_fields.getElementsByTagName('input');
    var syst_generated_pwd_select = table_fields.getElementsByTagName('select');
    if (check.checked) {
        for (i = 0; i < syst_generated_pwd_input.length; i++)
            syst_generated_pwd_input[i].disabled = '';
        for (j = 0; j < syst_generated_pwd_select.length; j++)
            syst_generated_pwd_select[j].disabled = '';
    } else {
        for (i = 0; i < syst_generated_pwd_input.length; i++)
            syst_generated_pwd_input[i].disabled = 'disabled';
        for (j = 0; j < syst_generated_pwd_select.length; j++)
            syst_generated_pwd_select[j].disabled = 'disabled';
    }
}
forgot_password_enable(document.getElementById('forgotpassword_checkbox'));
enable_syst_generated_pwd(document.getElementById('SystemGeneratedPassword_checkbox'));
if (document.getElementById('system_saml_enabled').checked)enableDisablePasswordTable('system_saml_enabled');
if (document.getElementById('system_ldap_enabled').checked)enableDisablePasswordTable('system_ldap_enabled');
clickToEditPassword('#ldap_admin_password', '::PASSWORD::');
</script>



<script>
    var wrongImportFileTitle = '{$MOD.WRONG_IMPORT_XML_TITLE}',
        wrongImportFileTypeError = '{$MOD.WRONG_IMPORT_FILE_TYPE_ERROR}',
        csrfFieldName = '{$csrf_field_name}';
    $('.btn_import_metadata').on('click', function () {
        $('#import_metadata_file').click();
        return false;
    });
    $('#import_metadata_file').change(function(event) {
        var file = event.target.files[0],
            data = new FormData();
        if (typeof file !== 'object') {
            event.stopPropagation();
            return false;
        }
        // check file type
        if (file.type !== 'text/xml') {
            app.alert.show('import_metadata_file_wrong_format', {
                level: 'error',
                title: wrongImportFileTitle,
                messages: wrongImportFileTypeError,
                autoclose: true
            });
        }
        data.append('import_metadata_file', file);
        data.append('OAuth-Token', window.parent.App.api.getOAuthToken());
        data.append(csrfFieldName, $("[name='" + csrfFieldName + "']").val());

        $.ajax({
            method: 'POST',
            url: 'index.php?module=Administration&action=parseImportSamlXmlFile',
            data: data,
            processData: false,
            contentType: false
        }).done(function (data) {
            $.each(data, function (name, value) {
                $("[name='" + name + "']").val(value);
            });
        }).fail(function (response) {
            app.alert.show('import_metadata_file_wrong_format', {
                level: 'error',
                title: wrongImportFileTitle,
                messages: response.responseJSON.error,
                autoclose: true
            });
        });
        $(event.target).val(null);
        return true;
    });
</script>

