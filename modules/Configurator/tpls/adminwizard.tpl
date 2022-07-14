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
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html {$langHeader}>
<head>
<link rel="SHORTCUT ICON" href="{$FAVICON_URL}">
<meta http-equiv="Content-Type" content="text/html; charset={$APP.LBL_CHARSET}">
<title>{$MOD.LBL_WIZARD_TITLE}</title>
{$SUGAR_JS}
{$SUGAR_CSS}
{$CSS}
</head>
<script type='text/javascript'>
function disableReturnSubmission(e) {
   var key = window.event ? window.event.keyCode : e.which;
   return (key != 13);
}
</script>
<body class="yui-skin-sam">
<div id="main">
    <div id="content">
        <table style="width:auto;height:600px;" align="center"><tr><td align="center">
        
<form name="AdminWizard" id="AdminWizard" enctype='multipart/form-data' method="POST" action="index.php" onkeypress="return disableReturnSubmission(event);">
{sugar_csrf_form_token}
<input type='hidden' name='action' value='SaveAdminWizard'/>
<input type='hidden' name='module' value='Configurator'/>
<span class='error'>{$error.main}</span>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_emails.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='modules/Users/User.js'}"></script>

<div class="dashletPanelMenu wizard">

<div class="bd">

<div id="welcome" class="screen">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <div class="edit view">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th align="left" scope="row" colspan="4"><h2>{$MOD.LBL_WIZARD_WELCOME_TITLE}</h2></th>
            </tr>
            <tr>
                <td scope="row">
              <p>{$MOD.LBL_WIZARD_WELCOME}</p>
				<div class="userWizWelcome"><img src='include/images/sugar_wizard_welcome.jpg' alt='{$MOD.LBL_WELCOME}' border='0' width='765px' height='325px'></div>
                </td>
            </tr>
            </table>
            </div>
        </td>
    </tr>
    </table>
    <div class="nav-buttons">
        <input title="{$MOD.LBL_WIZARD_SKIP_BUTTON}"  
            onclick="document.location.href='{$SKIP_URL}';" class="button"  
            type="button" name="cancel" value="  {$MOD.LBL_WIZARD_SKIP_BUTTON}  " id="skip_tab" />&nbsp;
        <input title="{$MOD.LBL_WIZARD_NEXT_BUTTON}"
            class="button primary" type="button" name="next_tab1" value="  {$MOD.LBL_WIZARD_NEXT_BUTTON}  "
            onclick="SugarWizard.changeScreen('system',false);" id="next_tab_system" />
    </div>
</div>

<div id="system" class="screen">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <div class="edit view">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th align="left" scope="row" colspan="4"><h2>{$MOD.LBL_WIZARD_SYSTEM_TITLE}</h2></th>
            </tr>
            <tr>
                <td align="left" scope="row" colspan="4"><i>{$MOD.LBL_WIZARD_SYSTEM_DESC}</i></td>
            </tr>
            <tr>
                <td scope="row" width='15%' nowrap>{$MOD.SYSTEM_NAME_WIZARD}&nbsp;{sugar_help text=$MOD.SYSTEM_NAME_HELP}</td>
                <td width='35%'>
                    <input type='text' name='system_name' value='{$settings.system_name}' />
                </td>
            </tr>
            <tr>
                <td scope="row" width='12%' nowrap>{$MOD.NEW_LOGO}&nbsp;{sugar_help text=$MOD.NEW_LOGO_HELP_NO_SPACE}
                </td>
                <td  width='35%'>
                    <div id="container_upload"></div>
                    <input type="text" id="commit_company_logo" name="commit_company_logo" style="display:none" />
                </td>
            </tr>
            <tr>
                <td scope="row" width='12%' nowrap>{$MOD.CURRENT_LOGO}&nbsp;{sugar_help text=$MOD.CURRENT_LOGO_HELP}</td>
                <td width="35%">
                    <div class="company_logo_image_container">
                        <img id="company_logo_image" src="{$company_logo}"
                             alt="{$MOD.LBL_LOGO}"/>
                    </div>
                </td>
            </tr>
            </table>
            </div>
        </td>
    </tr>
    </table>
    <div class="nav-buttons">
            <input title="{$MOD.LBL_WIZARD_BACK_BUTTON}"
                class="button" type="button" name="next_tab1" value="  {$MOD.LBL_WIZARD_BACK_BUTTON}  "
                onclick="SugarWizard.changeScreen('welcome',true);" id="previous_tab_welcome" />&nbsp;
            <input title="{$MOD.LBL_WIZARD_NEXT_BUTTON}"
                class="button primary" type="button" name="next_tab1" value="  {$MOD.LBL_WIZARD_NEXT_BUTTON}  "
                onclick="SugarWizard.changeScreen('locale',false);" id="next_tab_locale" />
    </div>
</div>

<div id="locale" class="screen">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
        <td>
            <div class="edit view">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <th align="left" scope="row" colspan="4"><h2>{sugar_translate module='Administration' label='LBL_LOCALE_TITLE'}</h2></th>
                </tr>
                <tr>
                    <td align="left" scope="row" colspan="4"><i>{$MOD.LBL_WIZARD_LOCALE_DESC}</i></td>
                </tr>
                <tr>
                    <td nowrap="nowrap" scope="row" width="200">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_DATE_FORMAT'}: </td>
                    <td>
                        {html_options name='default_date_format' selected=$config.default_date_format options=$config.date_formats}
                    </td>
                    <td nowrap="nowrap" scope="row" width="200">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_TIME_FORMAT'}: </td>
                    <td>
                        {html_options name='default_time_format' selected=$config.default_time_format options=$config.time_formats}
                    </td>
                </tr>
                <tr>
                    <td nowrap="nowrap" scope="row">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_LANGUAGE'}: </td>
                    <td>
                        {html_options name='default_language' selected=$config.default_language options=$LANGUAGES}
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><hr /></td>
                </tr>
                <tr>
                    <td nowrap="nowrap" scope="row" width="200">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_CURRENCY_NAME'}: </td>
                    <td>
                        <input type='text' size='15' name='default_currency_name' value='{$config.default_currency_name}' >
                    </td>
                    <td nowrap="nowrap" scope="row" width="200">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_CURRENCY_SYMBOL'}: </td>
                    <td>
                        <input type='text' size='4' name='default_currency_symbol'  value='{$config.default_currency_symbol}' >
                    </td>
                </tr>
                <tr>
                    <td nowrap="nowrap" scope="row" width="200">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_CURRENCY_ISO4217'}: </td>
                    <td>
                        <input type='text' size='4' name='default_currency_iso4217' value='{$config.default_currency_iso4217}'>
                    </td>
                    <td nowrap="nowrap" scope="row">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_NUMBER_GROUPING_SEP'}: </td>
                    <td>
                        <input type='text' size='3' maxlength='1' name='default_number_grouping_seperator' value='{$config.default_number_grouping_seperator}'>
                    </td>
                </tr>
                <tr>
                    <td nowrap="nowrap" scope="row">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_DECIMAL_SEP'}: </td>
                    <td>
                        <input type='text' size='3' maxlength='1' name='default_decimal_seperator'  value='{$config.default_decimal_seperator}'>
                    </td>
                    <td nowrap="nowrap" scope="row"></td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="4"><hr /></td>
                </tr>
                <tr>
                    <td nowrap="nowrap" scope="row" valign="top">{sugar_translate module='Administration' label='LBL_LOCALE_DEFAULT_NAME_FORMAT'}: </td>
                    <td>
                        {html_options id="default_locale_name_format" name="default_locale_name_format" selected=$config.default_locale_name_format options=$NAMEFORMATS}
                    </td>
                </tr>
            </table>
            </div>
        </td>
    </tr>
    </table>
    <div class="nav-buttons">
        <input title="{$MOD.LBL_WIZARD_BACK_BUTTON}"
            class="button" type="button" name="next_tab1" value="  {$MOD.LBL_WIZARD_BACK_BUTTON}  "
            onclick="SugarWizard.changeScreen('system',true);" id="previous_tab_system" />&nbsp;
        <input title="{$MOD.LBL_WIZARD_NEXT_BUTTON}"
            class="button primary" type="button" name="next_tab1" value="  {$MOD.LBL_WIZARD_NEXT_BUTTON}  "
            onclick="SugarWizard.changeScreen('smtp',false); changeEmailScreenDisplay('{$mail_smtptype}'); document.getElementById('AdminWizard').mail_smtptype.value = 'gmail';" id="next_tab_smtp" />
    </div>
</div>

<div id="smtp" class="screen">
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>
    <td>
        <div class="edit view">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <th align="left" scope="row" colspan="4">
                    <h2>{$MOD.LBL_MAIL_SMTP_SETTINGS}</h2>
                </th>
            </tr>
            <tr>
                <td align="left" scope="row" colspan="4"><i>{$MOD.LBL_WIZARD_SMTP_DESC}</i></td>
            </tr>
             <tr>
                <td align="left" scope="row" colspan="4">{$MOD.LBL_CHOOSE_EMAIL_PROVIDER}</td>
            </tr>
            <tr>
                <td colspan="4">
                    <input type="hidden" name="mail_sendtype" value="SMTP" />
                    <div id="smtpButtonGroup" class="yui-buttongroup">
                        <span id="gmail" class="yui-button yui-radio-button{if $mail_smtptype == 'gmail'} yui-button-checked{/if}">
                            <span class="first-child">
                                <button type="button" name="mail_smtptype" value="gmail">
                                    &nbsp;&nbsp;&nbsp;&nbsp;{$APP.LBL_SMTPTYPE_GMAIL}&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </span>
                        </span>
                        <span id="yahoomail" class="yui-button yui-radio-button{if $mail_smtptype == 'yahoomail'} yui-button-checked{/if}">
                            <span class="first-child">
                                <button type="button" name="mail_smtptype" value="yahoomail">
                                    &nbsp;&nbsp;&nbsp;&nbsp;{$APP.LBL_SMTPTYPE_YAHOO}&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </span>
                        </span>
                        <span id="exchange" class="yui-button yui-radio-button{if $mail_smtptype == 'exchange'} yui-button-checked{/if}">
                            <span class="first-child">
                                <button type="button" name="mail_smtptype" value="exchange">
                                    &nbsp;&nbsp;&nbsp;&nbsp;{$APP.LBL_SMTPTYPE_EXCHANGE}&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </span>
                        </span>
                        <span id="other" class="yui-button yui-radio-button{if $mail_smtptype == 'other' || empty($mail_smtptype)} yui-button-checked{/if}">
                            <span class="first-child">
                                <button type="button" name="mail_smtptype" value="other">
                                    &nbsp;&nbsp;&nbsp;&nbsp;{$APP.LBL_SMTPTYPE_OTHER}&nbsp;&nbsp;&nbsp;&nbsp;
                                </button>
                            </span>
                        </span>
                    </div>
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    <div id="smtp_settings">
                        <table width="100%" cellpadding="0" cellspacing="0">
                            <tr id="mailsettings1">
                                <td width="20%" scope="row"><span id="mail_smtpserver_label">{$MOD.LBL_MAIL_SMTPSERVER}</span> <span class="required" id="required_mail_smtpserver"></span></td>
                                <td width="30%" ><slot><input type="text" id="mail_smtpserver" name="mail_smtpserver" tabindex="1" size="25" maxlength="64" value="{$mail_smtpserver}"></slot></td>
                                <td width="20%" scope="row"><span id="mail_smtpport_label">{$MOD.LBL_MAIL_SMTPPORT}</span></td>
                                <td width="30%" ><input type="text" id="mail_smtpport" name="mail_smtpport" tabindex="1" size="5" maxlength="5" value="{$mail_smtpport}"></td>
                            </tr>
                            <tr id="mailsettings2">
                                <td width="20%" scope="row"><span id='mail_smtpauth_req_label'>{$MOD.LBL_MAIL_SMTPAUTH_REQ}</span></td>
                                <td width="30%">
                                    <input id='mail_smtpauth_req' name='mail_smtpauth_req' type="checkbox" class="checkbox" value="1" tabindex='1'
                                        onclick="notify_setrequired();" {$mail_smtpauth_req}>
                                </td>
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpssl_label">{$APP.LBL_EMAIL_SMTP_SSL_OR_TLS}</span></td>
                                <td width="30%">
                                <select id="mail_smtpssl" name="mail_smtpssl" onchange="setDefaultSMTPPort()" tabindex="501">{$MAIL_SSL_OPTIONS}</select>
                                </td>
                            </tr>
                            <tr id="smtp_auth1">
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpuser_label">{$MOD.LBL_MAIL_SMTPUSER}</span> <span class="required"></span></td>
                                <td width="30%" ><slot><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="{$mail_smtpuser}" tabindex='1' ></slot></td>
                                <td scope="row">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            <tr id="smtp_auth2">
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtppass_label">{$MOD.LBL_MAIL_SMTPPASS}</span> <span class="required"></span></td>
                                <td width="30%" ><slot><input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64" value="{$mail_smtppass}" tabindex='1'></slot></td>
                                <td scope="row">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            <tr>
                                <td width="20%" scope="row">
                                    <span id="notify_allow_default_outbound_label">
                                    {$MOD.LBL_ALLOW_DEFAULT_SELECTION}&nbsp;
                                   {sugar_help text=$MOD.LBL_ALLOW_DEFAULT_SELECTION_HELP }
                                    </span>
                                </td>
                                <td width="30%">
                                     <slot>
                                     <input type="hidden" name="notify_allow_default_outbound" id="notify_allow_default_outbound_hidden_input" value="0">
                                     <input id='notify_allow_default_outbound' name='notify_allow_default_outbound' value="2" tabindex='1' class="checkbox" type="checkbox" {$notify_allow_default_outbound_on}>
                                     </slot>
                                </td>                
                                <td scope="row">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>                            
                            <tr>
                                <td width="50%" cellspan="2" scope="row" nowrap>
                                    <input title="{$APP.LBL_CLEAR_BUTTON_TITLE}"
                                        class="button" type="button" name="btn_clear" accesskey="{$APP.LBL_CLEAR_BUTTON_KEY}" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"
                                        onclick="clearEmailFields();" />&nbsp;                                    
                                    <input type="button" class="button" value="{$APP.LBL_EMAIL_TEST_OUTBOUND_SETTINGS}" 
                                        onclick="testOutboundSettingsDialog();">&nbsp;
                                </td>
                                <td scope="row">&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                        </table>
                     </div>
                </td>
            </tr>       
        </table>
        </div>
    </td>
    </table>
    <div class="nav-buttons">
        <input title="{$MOD.LBL_WIZARD_BACK_BUTTON}"
            class="button" type="button" name="next_tab1" value="  {$MOD.LBL_WIZARD_BACK_BUTTON}  "
            onclick="SugarWizard.changeScreen('locale',true);" id="previous_tab_locale" />&nbsp;
        <input title="{$MOD.LBL_WIZARD_CONTINUE_BUTTON}" class="button primary"
            onclick="if(adjustEmailSettings())this.form.submit();" type="button" name="continue" value="{$MOD.LBL_WIZARD_CONTINUE_BUTTON}" id="next_tab_continue" />&nbsp;
    </div>
</div>

</div>

</div>

<script>
addToValidate('ConfigureSettings', 'system_name', 'varchar', true,'System Name' );
</script>
</form>

<div id='upload_panel' style="display:none">
    <form id="upload_form" name="upload_form" method="POST" action='index.php' enctype="multipart/form-data">
{sugar_csrf_form_token}
        <input type="file" id="my_file_company" name="file_1" size="20" onchange="uploadCheck(false)"/>
        {sugar_getimage name="sqsWait" ext=".gif" alt=$mod_strings.LBL_LOADING other_attributes='id="loading_img_company" style="display:none" '}
    </form>
</div>

<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
        <form>
        <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
            <tr>
                <td scope="row">
                    {$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR} 
                    <span class="required">
                    </span>
                </td>
                <td>
                    <input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="">
                </td>
            </tr>
            <tr>
                <td scope="row" colspan="2">
                    <input type="button" class="button" value="   {$APP.LBL_EMAIL_SEND}   " onclick="javascript:sendTestEmail();">&nbsp;
                    <input type="button" class="button" value="   {$APP.LBL_CANCEL_BUTTON_LABEL}   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
                </td>
            </tr>
        </table>
        </form>
    </div>
</div>

<script type='text/javascript'>
<!--
var SugarWizard = new function()
{
    this.currentScreen = 'welcome';
    
    this.handleKeyStroke = function(e)
    {
        // get the key pressed
        var key;
        if (window.event) {
            key = window.event.keyCode;
        }
        else if(e.which) {
            key = e.which
        }
        
        switch(key) {
        case 13:
            primaryButton = YAHOO.util.Selector.query('input.primary',SugarWizard.currentScreen,true);
            primaryButton.click();
            break;
        }
    }
    
    this.changeScreen = function(screen,skipCheck)
    {
        if ( !skipCheck ) {
            clear_all_errors();
            var form = document.getElementById('AdminWizard');
            var isError = false;
            
            switch(this.currentScreen) {
            case 'smtp':
                smtp_type = document.getElementById('AdminWizard').mail_smtptype.value;
                smtp_server_required = smtp_type == 'exchange' || smtp_type == 'other' ? true : false;
            
                if(document.getElementById('mail_smtpuser').value != '' ||
                   document.getElementById('mail_smtppass').value != '' ||
                   document.getElementById('notify_allow_default_outbound').checked ||
                   (smtp_server_required &&  document.getElementById('mail_smtpserver').value != '') 
                   ) {
                       
                        if ( document.getElementById('mail_smtpserver').value == '' ) {
                            add_error_style('AdminWizard',form.mail_smtpserver.name,
                                '{$APP.ERR_MISSING_REQUIRED_FIELDS} {$MOD.LBL_MAIL_SMTPSERVER}' );
                            isError = true;
                        }
                        if ( document.getElementById('mail_smtpauth_req').checked 
                                && document.getElementById('mail_smtpuser').value == '' ) {
                            add_error_style('AdminWizard',form.mail_smtpuser.name,
                                '{$APP.ERR_MISSING_REQUIRED_FIELDS} {$MOD.LBL_MAIL_SMTPUSER}' );
                            isError = true;
                        }
                        
                        if ( document.getElementById('mail_smtpauth_req').checked 
                                && document.getElementById('mail_smtppass').value == '' ) {
                            add_error_style('AdminWizard',form.mail_smtppass.name,
                                '{$APP.ERR_MISSING_REQUIRED_FIELDS} {$MOD.LBL_MAIL_SMTPPASS}' );
                            isError = true;
                        }                       
                }
                break;
            default:
                document.getElementById('upload_panel').style.display="none";
            }
            if (isError == true)
                return false;
        }
        
        document.getElementById(this.currentScreen).style.display = 'none';
        document.getElementById(screen).style.display = 'block';
        
        this.currentScreen = screen;
        
        switch(screen) {
        case 'system':
            document.getElementById('upload_panel').style.display="inline";
            document.getElementById('upload_panel').style.position="absolute";
            YAHOO.util.Dom.setX('upload_panel', YAHOO.util.Dom.getX('container_upload'));
            YAHOO.util.Dom.setY('upload_panel', YAHOO.util.Dom.getY('container_upload') - 1);
            break;
        case 'smtp':
            if ( !SUGAR.smtpButtonGroup ) {
                SUGAR.smtpButtonGroup = new YAHOO.widget.ButtonGroup("smtpButtonGroup");
                SUGAR.smtpButtonGroup.subscribe('checkedButtonChange', function(e)
                {
                    changeEmailScreenDisplay(e.newValue.get('value'));
                    document.getElementById('smtp_settings').style.display = '';
                    document.getElementById('AdminWizard').mail_smtptype.value = e.newValue.get('value');
                });
                YAHOO.widget.Button.addHiddenFieldsToForm(document.getElementById('AdminWizard'));
            }
            break;
        default:
            document.getElementById('upload_panel').style.display="none";
        }
    }
} 
SugarWizard.changeScreen("{$START_PAGE|escape:'html':'UTF-8'}");
document.onkeypress = SugarWizard.handleKeyStroke;

function adjustEmailSettings(){
    var server = document.getElementById('mail_smtpserver'),
        user = document.getElementById('mail_smtpuser'),
        pass = document.getElementById('mail_smtppass'),
        port = document.getElementById('mail_smtpport');
    if( !server.value || !user.value || !pass.value || !port.value)
    {
            server.value = ""; 
            user.value = ""; 
            pass.value = ""; 
            port.value = "";
            return true;
    } else {
        if (validate['AdminWizard'])
        {
            removeFromValidate('AdminWizard', 'mail_smtpserver');
            removeFromValidate('AdminWizard', 'mail_smtpuser');
            removeFromValidate('AdminWizard', 'mail_smtppass');
            removeFromValidate('AdminWizard', 'mail_smtpport');
        }
        if (server.value == "smtp.gmail.com" && !isValidEmail(user.value)) {
            addToValidate("AdminWizard", 'mail_smtpuser', 'email', false, 
              SUGAR.language.get('Configurator','LBL_GMAIL_SMTPUSER'));
        }
        else if (server.value == "plus.smtp.mail.yahoo.com" && !isValidEmail(user.value)) {
            addToValidate("AdminWizard", 'mail_smtpuser', 'email', false, 
              SUGAR.language.get('Configurator','LBL_YAHOOMAIL_SMTPUSER'));
        }
        addToValidateMoreThan("AdminWizard", 'mail_smtpport', 'int', false, 
              document.getElementById("mail_smtpport_label").innerHTML, 1);
        return check_form("AdminWizard");
    }
}

function clearEmailFields() { 
    document.getElementById('AdminWizard').mail_smtpuser.value = '';
    document.getElementById('AdminWizard').mail_smtppass.value = '';
    document.getElementById('notify_allow_default_outbound').checked = false;
    changeEmailScreenDisplay(document.getElementById('AdminWizard').mail_smtptype.value);
}

function changeEmailScreenDisplay(smtptype)
{
    document.getElementById("mail_smtpserver").value = '';
    document.getElementById("mail_smtpport").value = '25';
    document.getElementById("mail_smtpauth_req").checked = true;
    document.getElementById("mailsettings1").style.display = '';
    document.getElementById("mailsettings2").style.display = '';
    document.getElementById("mail_smtppass_label").innerHTML = '{$MOD.LBL_MAIL_SMTPPASS}';
    document.getElementById("mail_smtpport_label").innerHTML = '{$MOD.LBL_MAIL_SMTPPORT}';
    document.getElementById("mail_smtpserver_label").innerHTML = '{$MOD.LBL_MAIL_SMTPSERVER}';
    document.getElementById("mail_smtpuser_label").innerHTML = '{$MOD.LBL_MAIL_SMTPUSER}';
    
    switch (smtptype) {
    case "yahoomail":
        document.getElementById("mail_smtpserver").value = 'plus.smtp.mail.yahoo.com';
        document.getElementById("mail_smtpport").value = '465';
        document.getElementById("mail_smtpauth_req").checked = true;
        var ssl = document.getElementById("mail_smtpssl");
        for(var j=0;j<ssl.options.length;j++) {
            if(ssl.options[j].text == 'SSL') {
                ssl.options[j].selected = true;
                break;
            }
        }
        document.getElementById("mailsettings1").style.display = 'none';
        document.getElementById("mailsettings2").style.display = 'none';
        document.getElementById("mail_smtppass_label").innerHTML = '{$MOD.LBL_YAHOOMAIL_SMTPPASS}';
        document.getElementById("mail_smtpuser_label").innerHTML = '{$MOD.LBL_YAHOOMAIL_SMTPUSER}';
        break;
    case "gmail":
        if(document.getElementById("mail_smtpserver").value == "" || document.getElementById("mail_smtpserver").value == 'plus.smtp.mail.yahoo.com') {    
            document.getElementById("mail_smtpserver").value = 'smtp.gmail.com';
            document.getElementById("mail_smtpport").value = '587';
            document.getElementById("mail_smtpauth_req").checked = true;
            var ssl = document.getElementById("mail_smtpssl");
            for(var j=0;j<ssl.options.length;j++) {
                if(ssl.options[j].text == 'TLS') {
                    ssl.options[j].selected = true;
                    break;
                }
            }
        }
        document.getElementById("mail_smtppass_label").innerHTML = '{$MOD.LBL_GMAIL_SMTPPASS}';
        document.getElementById("mail_smtpuser_label").innerHTML = '{$MOD.LBL_GMAIL_SMTPUSER}';
        break;
    case "exchange":
        document.getElementById("mail_smtpserver").value = '';
        document.getElementById("mail_smtpport").value = '25';
        document.getElementById("mail_smtpauth_req").checked = true;
        document.getElementById("mailsettings1").style.display = '';
        document.getElementById("mailsettings2").style.display = '';
        document.getElementById("mail_smtppass_label").innerHTML = '{$MOD.LBL_EXCHANGE_SMTPPASS}';
        document.getElementById("mail_smtpport_label").innerHTML = '{$MOD.LBL_EXCHANGE_SMTPPORT}';
        document.getElementById("mail_smtpserver_label").innerHTML = '{$MOD.LBL_EXCHANGE_SMTPSERVER}';
        document.getElementById("mail_smtpuser_label").innerHTML = '{$MOD.LBL_EXCHANGE_SMTPUSER}';
        break;
    }
    notify_setrequired();
    setDefaultSMTPPort();
}

function uploadCheck(){
    //AJAX call for checking the file size and comparing with php.ini settings.
    var callback = {
        upload:function(r) {
            var file_type = JSON.parse(r.responseText);
            document.getElementById('loading_img_company').style.display = 'none';
            bad_image = SUGAR.language.get('Configurator', 'LBL_ALERT_TYPE_IMAGE');
            switch (file_type['data']) {
                case 'other':
                    alert(bad_image);
                    document.getElementById('my_file_company').value = '';
                    break;
                case 'size':
                    alert(SUGAR.language.get('Configurator', 'LBL_ALERT_SIZE_RATIO'));
                    document.getElementById('commit_company_logo').value = '1';
                    document.getElementById('company_logo_image').src = file_type['url'];
                    break;
                case 'file_error':
                    alert(SUGAR.language.get('Configurator', 'ERR_ALERT_FILE_UPLOAD'));
                    document.getElementById('my_file_company').value = '';
                    break;
                //File good
                case 'ok':
                    document.getElementById('commit_company_logo').value = '1';
                    document.getElementById('company_logo_image').src = file_type['url'];
                    break;
                //error in getimagesize because unsupported type
                default:
                    alert(bad_image);
                    document.getElementById('my_file_company').value = '';
            }
        },
        failure:function(r){
            alert(SUGAR.language.get('app_strings','LBL_AJAX_FAILURE'));
        }
    }
    document.getElementById('commit_company_logo').value = '';
    document.getElementById('loading_img_company').style.display="inline";
    var file_name = document.getElementById('my_file_company').value;
    postData = '&entryPoint=UploadFileCheck&csrf_token=' + SUGAR.csrf.form_token;
    YAHOO.util.Connect.setForm(document.getElementById('upload_form'), true,true);
    if(file_name){
        if(postData.substring(0,1) == '&'){
            postData=postData.substring(1);
        }
        YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, postData);
    }
}

var urlStandard = 'sugar_body_only=true&to_pdf=true&module=Emails&action=EmailUIAjax';
UA = YAHOO.env.ua;

EmailMan = {};

function testOutboundSettings() {
    var errorMessage = '';
    var isError = false;
    var fromAddress = document.getElementById("outboundtest_from_address").value;
    var errorMessage = '';
    var isError = false;
    var smtpServer = document.getElementById('mail_smtpserver').value;
    var smtpPort = document.getElementById('mail_smtpport').value;
    var smtpssl  = document.getElementById('mail_smtpssl').value;
    var mailsmtpauthreq = document.getElementById('mail_smtpauth_req');
    if(trim(smtpServer) == '') {
        isError = true;
        errorMessage += "{$APP.LBL_EMAIL_ACCOUNTS_SMTPSERVER}" + "<br/>";
    }
    if(trim(smtpPort) == '') {
        isError = true;
        errorMessage += "{$APP.LBL_EMAIL_ACCOUNTS_SMTPPORT}" + "<br/>";
    }
    if(mailsmtpauthreq.checked) {
        if(trim(document.getElementById('mail_smtpuser').value) == '') {
            isError = true;
            errorMessage += "{$APP.LBL_EMAIL_ACCOUNTS_SMTPUSER}" + "<br/>";
        }
        if(trim(document.getElementById('mail_smtppass').value) == '') {
            isError = true;
            errorMessage += "{$APP.LBL_EMAIL_ACCOUNTS_SMTPPASS}" + "<br/>";
        }                
    }
    if(isError) {
        overlay("{$APP.ERR_MISSING_REQUIRED_FIELDS}", errorMessage, 'alert');
        return false;    
    } 
    
    testOutboundSettingsDialog();
        
}

function sendTestEmail()
{
    var fromAddress = document.getElementById("outboundtest_from_address").value;
    
    if (trim(fromAddress) == "") 
    {
        overlay("{$APP.ERR_MISSING_REQUIRED_FIELDS}", "{$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}", 'alert');
        return;
    }
    else if (!isValidEmail(fromAddress)) {
        overlay("{$APP.ERR_INVALID_REQUIRED_FIELDS}", "{$APP.LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR}", 'alert');
        return;
    }
    
    //Hide the email address window and show a message notifying the user that the test email is being sent.
    EmailMan.testOutboundDialog.hide();
    overlay("{$APP.LBL_EMAIL_PERFORMING_TASK}", "{$APP.LBL_EMAIL_ONE_MOMENT}", 'alert');
    
    var callbackOutboundTest = {
        success : function(o) {
            hideOverlay();
            overlay("{$APP.LBL_EMAIL_TEST_OUTBOUND_SETTINGS}", "{$APP.LBL_EMAIL_TEST_NOTIFICATION_SENT}", 'alert');
        }
    };    
    var smtpServer = document.getElementById('mail_smtpserver').value;
    var smtpPort = document.getElementById('mail_smtpport').value;
    var smtpssl  = document.getElementById('mail_smtpssl').value;
    var mailsmtpauthreq = document.getElementById('mail_smtpauth_req');
    var mail_sendtype = 'SMTP';
    var smtppass = trim(document.getElementById('mail_smtppass').value);
    var postDataString = 'mail_sendtype=' + mail_sendtype + '&mail_smtpserver=' + smtpServer + "&mail_smtpport=" + smtpPort + "&mail_smtpssl=" + smtpssl + "&mail_smtpauth_req=" + mailsmtpauthreq.checked + "&mail_smtpuser=" + trim(document.getElementById('mail_smtpuser').value) + "&mail_smtppass=" + encodeURIComponent(smtppass) + "&outboundtest_from_address=" + fromAddress;
    YAHOO.util.Connect.asyncRequest("POST", "index.php?action=EmailUIAjax&module=Emails&emailUIAction=testOutbound&to_pdf=true&sugar_body_only=true", callbackOutboundTest, postDataString);
}
function testOutboundSettingsDialog() {
        // lazy load dialogue
        if(!EmailMan.testOutboundDialog) {
            EmailMan.testOutboundDialog = new YAHOO.widget.Dialog("testOutboundDialog", {
                modal:true,
                visible:true,
                fixedcenter:true,
                constraintoviewport: true,
                width   : 600,
                shadow  : false
            });
            EmailMan.testOutboundDialog.setHeader("{$APP.LBL_EMAIL_TEST_OUTBOUND_SETTINGS}");
            YAHOO.util.Dom.removeClass("testOutboundDialog", "yui-hidden");
        } // end lazy load
        
        EmailMan.testOutboundDialog.render();
        EmailMan.testOutboundDialog.show();
} // fn

function overlay(reqtitle, body, type) {
    var config = { };
    config.type = type;
    config.title = reqtitle;
    config.msg = body;
    YAHOO.SUGAR.MessageBox.show(config);
}

function hideOverlay() {
    YAHOO.SUGAR.MessageBox.hide();
}

function notify_setrequired() {
    document.getElementById("smtp_auth1").style.display = (document.getElementById('mail_smtpauth_req').checked) ? "" : "none";
    document.getElementById("smtp_auth1").style.visibility = (document.getElementById('mail_smtpauth_req').checked) ? "visible" : "hidden";
    document.getElementById("smtp_auth2").style.display = (document.getElementById('mail_smtpauth_req').checked) ? "" : "none";
    document.getElementById("smtp_auth2").style.visibility = (document.getElementById('mail_smtpauth_req').checked) ? "visible" : "hidden";
    return true;
}
notify_setrequired();

function setDefaultSMTPPort() 
{
    useSSLPort = !document.getElementById("mail_smtpssl").options[0].selected;
    
    if ( useSSLPort && document.getElementById("mail_smtpport").value == '25' ) {
        document.getElementById("mail_smtpport").value = '465';
    }
    if ( !useSSLPort && document.getElementById("mail_smtpport").value == '465' ) {
        document.getElementById("mail_smtpport").value = '25';
    }
        
}

{$getNameJs}
-->
</script>
