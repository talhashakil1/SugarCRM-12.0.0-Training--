<?php
/* Smarty version 3.1.39, created on 2022-07-13 16:59:18
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/EmailMan/tpls/config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ceb3963785d1_35195620',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '08cedcf25795086d2f2402a1a964d7f235aa04fb' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/EmailMan/tpls/config.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ceb3963785d1_35195620 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>

<!-- BEGIN: main -->
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/User.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript" >
<!--
function change_state(radiobutton) {

	if (radiobutton.value == '1') {
		radiobutton.form['massemailer_tracking_entities_location'].disabled=true;
		radiobutton.form['massemailer_tracking_entities_location'].value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'];?>
';
	} else {
		radiobutton.form['massemailer_tracking_entities_location'].disabled=false;
		radiobutton.form['massemailer_tracking_entities_location'].value=null;
	}
}
var authInfo = <?php echo $_smarty_tpl->tpl_vars['js_authinfo']->value;?>

-->
<?php echo '</script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['ROLLOVER']->value;?>

<form name="ConfigureSettings" id="EditView" method="POST" action="index.php" data-disablebwchaschanged="true">
    <?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

	<input type="hidden" name="module" value="EmailMan">
	<input type="hidden" name="action">
	<input type="hidden" name="return_module" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
">
	<input type="hidden" name="return_action" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
">
	<input type="hidden" name="source_form" value="config" />
    <input type="hidden" name="eapm_id" id="eapm_id" value="<?php echo $_smarty_tpl->tpl_vars['eapm_id']->value;?>
" />
    <input type="hidden" name="authorized_account" id="authorized_account" value="<?php echo $_smarty_tpl->tpl_vars['authorized_account']->value;?>
" />
    <input type="hidden" name="mail_authtype" id="mail_authtype" value="<?php echo $_smarty_tpl->tpl_vars['mail_authtype']->value;?>
" />

<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>

		<td>
			<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="this.form.action.value='Save';return save_data(this);" type="submit" name="button" id="btn_save" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
 ">
			<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="parent.SUGAR.App.router.navigate('#Administration', {trigger: true})" type="submit" name="button" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 ">
		</td>
		<td align="right" nowrap>
			<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

		</td>
	</tr>
</table>
<table width="100%" border="1" cellspacing="0" cellpadding="0" class="edit view">
		<tr><th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_OUTBOUND_CONFIGURATION'];?>
</h4></th>
		</tr>
		<tr>
			<td align="left" scope="row" colspan="4">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OUTGOING_SECTION_HELP'];?>

					<br />&nbsp;
			</td>
	   </tr>
		<tr class="<?php echo $_smarty_tpl->tpl_vars['OUTBOUND_TYPE_CLASS']->value;?>
">
			<td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SENDTYPE'];?>
</td>
			<td width="30%">
				<select id="mail_sendtype" name="mail_sendtype" onChange="notify_setrequired(document.ConfigureSettings); SUGAR.user.showHideGmailDefaultLink(this);" tabindex="1"><?php echo $_smarty_tpl->tpl_vars['mail_sendtype_options']->value;?>
</select>
			</td>
			<td scope="row">&nbsp;</td>
			<td >&nbsp;</td>
		</tr>
		<tr>
            <td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTIFY_FROMNAME'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
            <td width="30%" > <input id='notify_fromname' name='notify_fromname' tabindex='1' size='25' maxlength='128' type="text" value="<?php echo $_smarty_tpl->tpl_vars['notify_fromname']->value;?>
"></td>
        </tr>
		<tr>
		    <td width="20%" scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTIFY_FROMADDRESS'];?>
 <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
            <td width="30%"><input id='notify_fromaddress' name='notify_fromaddress' tabindex='1' size='25' maxlength='128' type="text" value="<?php echo $_smarty_tpl->tpl_vars['notify_fromaddress']->value;?>
"></td>
        </tr>
		<tr>
            <td align="left" scope="row" colspan="4"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_EMAIL_PROVIDER'];?>
</td>
        </tr>
        <tr>
            <td colspan="4">
                <div id="smtpButtonGroup" class="yui-buttongroup">
                    <span id="google_oauth2" class="yui-button yui-radio-button<?php if ($_smarty_tpl->tpl_vars['mail_smtptype']->value == 'google_oauth2') {?> yui-button-checked<?php }?>">
                        <span class="first-child">
                            <button type="button" name="mail_smtptype" value="google_oauth2">
                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SMTPTYPE_GOOGLE_OAUTH2'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </span>
                    </span>
                    <span id="exchange_online" class="yui-button yui-radio-button<?php if ($_smarty_tpl->tpl_vars['mail_smtptype']->value == 'exchange_online') {?> yui-button-checked<?php }?>">
                        <span class="first-child">
                            <button type="button" name="mail_smtptype" value="exchange_online">
                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SMTPTYPE_EXCHANGE_ONLINE'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </span>
                    </span>
                    <span id="yahoomail" class="yui-button yui-radio-button<?php if ($_smarty_tpl->tpl_vars['mail_smtptype']->value == 'yahoomail') {?> yui-button-checked<?php }?>">
                        <span class="first-child">
                            <button type="button" name="mail_smtptype" value="yahoomail">
                                <?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_YAHOO_MAIL_LOGO'],'name'=>"yahoomail_logo",'ext'=>".png",'other_attributes'=>''),$_smarty_tpl);?>

                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SMTPTYPE_YAHOO'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </span>
                    </span>
                    <span id="exchange" class="yui-button yui-radio-button<?php if ($_smarty_tpl->tpl_vars['mail_smtptype']->value == 'exchange') {?> yui-button-checked<?php }?>">
                        <span class="first-child">
                            <button type="button" name="mail_smtptype" value="exchange">
                                <?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_EXCHANGE_LOGO'],'name'=>"exchange_logo",'ext'=>".png",'other_attributes'=>''),$_smarty_tpl);?>

                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SMTPTYPE_EXCHANGE'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </span>
                    </span>
                    <span id="gmail" class="yui-button yui-radio-button<?php if ($_smarty_tpl->tpl_vars['mail_smtptype']->value == 'gmail') {?> yui-button-checked<?php }?>">
                        <span class="first-child">
                            <button type="button" name="mail_smtptype" value="gmail">
                                <?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_GMAIL_LOGO'],'name'=>"gmail_logo",'ext'=>".png",'other_attributes'=>''),$_smarty_tpl);?>

                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SMTPTYPE_GMAIL'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </span>
                    </span>
                    <span id="other" class="yui-button yui-radio-button<?php if ($_smarty_tpl->tpl_vars['mail_smtptype']->value == 'other' || empty($_smarty_tpl->tpl_vars['mail_smtptype']->value)) {?> yui-button-checked<?php }?>">
                        <span class="first-child">
                            <button type="button" name="mail_smtptype" value="other">
                                &nbsp;&nbsp;&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SMTPTYPE_OTHER'];?>
&nbsp;&nbsp;&nbsp;&nbsp;
                            </button>
                        </span>
                    </span>
                </div>
            </td>
        </tr>
        <tr id="auth_block" style="display:none">
            <td colspan="4">
                <div id="auth_warning">
                Placeholder
                </div>
                <button type="button" id="auth_button" name="auth_button" style="padding:5px;margin:10px 2px" onclick="authorize();"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_AUTHORIZE'];?>
</button>
            </td>
        </tr>
		<tr>
			<td colspan="4">
			     <div id="smtp_settings">
					<table width="100%" cellpadding="0" cellspacing="0">
                        <tr id="mailsettings0">
                            <td width="20%" scope="row"><span id="auth_status_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AUTH_STATUS'];?>
</span></td>
                            <td width="30%" ><input type="text" id="auth_status" name="auth_status" tabindex="1" size="25" maxlength="64" value="<?php if (!empty($_smarty_tpl->tpl_vars['eapm_id']->value)) {
echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_AUTHORIZED'];
}
if (empty($_smarty_tpl->tpl_vars['eapm_id']->value)) {
echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_NOT_AUTHORIZED'];
}?>" disabled></td>
                            <td width="20%" scope="row"><span id="auth_email_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_AUTHORIZED_ACCOUNT'];?>
</span></td>
                            <td width="30%" ><input type="text" id="auth_email" name="auth_email" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['authorized_account']->value;?>
" tabindex='1' disabled></td>
                        </tr>
						<tr id="mailsettings1">
							<td width="20%" scope="row"><span id="mail_smtpserver_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPSERVER'];?>
</span> <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
							<td width="30%" ><input type="text" id="mail_smtpserver" name="mail_smtpserver" tabindex="1" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpserver']->value;?>
"></td>
							<td width="20%" scope="row"><span id="mail_smtpport_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPORT'];?>
</span> <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
							<td width="30%" ><input type="text" id="mail_smtpport" name="mail_smtpport" tabindex="1" size="5" maxlength="5" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpport']->value;?>
"></td>
						</tr>
						<tr id="mailsettings2">
					        <td scope="row"><span id='mail_smtpauth_req_label'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPAUTH_REQ'];?>
</span></td>
							<td >
								<input id='mail_smtpauth_req' name='mail_smtpauth_req' type="checkbox" class="checkbox" value="1" tabindex='1'
								onclick="notify_setrequired(document.ConfigureSettings);" <?php echo $_smarty_tpl->tpl_vars['mail_smtpauth_req']->value;?>
>
							</td>
						    <td width="15%" scope="row"><span id="mail_smtpssl_label"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SMTP_SSL_OR_TLS'];?>
</span></td>
					        <td width="35%" >
							<select id="mail_smtpssl" name="mail_smtpssl" tabindex="501" onchange="setDefaultSMTPPort();" ><?php echo $_smarty_tpl->tpl_vars['MAIL_SSL_OPTIONS']->value;?>
</select>
					        </td>
						</tr>
						<tr id="smtp_auth1">
                            <td width="20%" scope="row"><span id="mail_smtpuser_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER'];?>
</span> <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
                            <td width="30%" ><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpuser']->value;?>
" tabindex='1' ></td>
                            <td width="20%">&nbsp;</td>
                            <td width="30%">&nbsp;</td>
                       </tr>
                       <tr id="smtp_auth2">
                            <td width="20%" scope="row"><span id="mail_smtppass_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPASS'];?>
</span> <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td>
                            <td width="30%" >
                            <input type="password" id="mail_smtppass" name="mail_smtppass" size="25" <?php if (!empty($_smarty_tpl->tpl_vars['PASSWORD_MAX_LENGTH']->value)) {?>maxlength="<?php echo $_smarty_tpl->tpl_vars['PASSWORD_MAX_LENGTH']->value;?>
" <?php }?>tabindex='1' autocomplete="off">
                            <a href="javascript:void(0)" id='mail_smtppass_link' onClick="SUGAR.util.setEmailPasswordEdit('mail_smtppass')" style="display: none"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHANGE_PASSWORD'];?>
</a>
                            </td>
                            <td width="20%">&nbsp;</td>
                            <td width="30%">&nbsp;</td>
                       </tr>
				 		<tr id="mail_allow_user">
				 		     <td width="20%" scope="row">
									<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALLOW_DEFAULT_SELECTION'];?>
&nbsp;
                                    <img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['MOD']->value['LBL_ALLOW_DEFAULT_SELECTION_HELP'], ENT_QUOTES, 'UTF-8', true);?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&themeName=<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
&imageName=helpInline.gif">
							</td>
				 		    <td width="30%">
                                 <input type='hidden' id="notify_allow_default_outbound_hidden_input" name='notify_allow_default_outbound' value='0'>
							     <input id="notify_allow_default_outbound" name='notify_allow_default_outbound' value="2" tabindex='1' class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['notify_allow_default_outbound_on']->value;?>
>
							</td>
							<td width="20%">&nbsp;</td>
							<td width="30%">&nbsp;</td>
				 		</tr>
				 	</table>
				 </div>
			</td>
		</tr>
		<tr><td colspan="4">&nbsp;</tr>
		<tr>
		    <td width="15%"><input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
" onclick="testOutboundSettings();">&nbsp;</td>
		    <td width="15%">&nbsp;</td>
            <td width="40%">&nbsp;</td>
		    <td width="40%">&nbsp;</td>
		</tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="4">
			<h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTIFY_TITLE'];?>
</h4>
		</th>
    </tr>
    <tr>
    	<td width="20%" scope="row" valign='top'>
    	   <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTIFY_ON'];?>
:&nbsp;
            <img border="0" class="inlineHelpTip" onclick="return SUGAR.util.showHelpTips(this,'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTIFICATION_ON_DESC'], ENT_QUOTES, 'UTF-8', true);?>
','','','dialogHelpPopup')" src="index.php?entryPoint=getImage&themeName=<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
&imageName=helpInline.gif">
    	</td>
    	<td width="30%"  valign='top'>
    		<input type='hidden' name='notify_on' value='0'><input name="notify_on" tabindex='1' value="1" class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['notify_on']->value;?>
>
    	</td>
        <td scope="row" width="17%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALLOW_USER_EMAIL_ACCOUNT'];?>
:&nbsp;</td>
        <td>
            <input type='hidden' name='allow_user_email_accounts' value='0'>
            <input name="allow_user_email_accounts" tabindex='1'  value='1' class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['allow_user_email_accounts']->value;?>
>
        </td>
    </tr>
     <tr>
         <td scope="row" width="20%">
             <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NOTIFY_SEND_FROM_ASSIGNING_USER'];?>
:
             <img border="0" class="inlineHelpTip"
                  onclick="return SUGAR.util.showHelpTips(this,'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['MOD']->value['LBL_FROM_ADDRESS_HELP'], ENT_QUOTES, 'UTF-8', true);?>
','','','dialogHelpPopup')"
                  src="index.php?entryPoint=getImage&themeName=<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
&imageName=helpInline.gif">
         </td>
         <td width="30%" valign='top'><input type='hidden' name='notify_send_from_assigning_user' value='0'><input
                     name='notify_send_from_assigning_user' value="2" tabindex='1' class="checkbox"
                     type="checkbox" <?php echo $_smarty_tpl->tpl_vars['notify_send_from_assigning_user']->value;?>
></td>
         <td width="20%" scope="row" valign='top'>
             <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_OPT_OUT_DEFAULT'];?>
:
             <img border="0" class="inlineHelpTip"
                  onclick="return SUGAR.util.showHelpTips(this,'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_OPT_OUT_DEFAULT_TOOLTIP'], ENT_QUOTES, 'UTF-8', true);?>
','','','dialogHelpPopup')"
                  src="index.php?entryPoint=getImage&themeName=<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
&imageName=helpInline.gif">
         </td>
         <td width="30%" valign='top'>
             <input type='hidden' name='new_email_addresses_opted_out' value='0'>
             <input name='new_email_addresses_opted_out' value="1" tabindex='1' class="checkbox"
                    type="checkbox" <?php echo $_smarty_tpl->tpl_vars['new_email_addresses_opted_out']->value;?>
>
         </td>
    </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
			<tr>
				<th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_TITLE'];?>
</h4></th>
			</tr>
			<tr>
				<td align="left" scope="row" colspan="4">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_DESC'];?>

				</td>
			</tr>
			<tr>
				<td valign="middle" valign="top" scope="row" colspan="3">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_OUTLOOK_DEFAULTS'];?>

				</td>
				<td width="10%" NOWRAP valign="top" >
					<input type="checkbox" value="1" name="set_outlook_defaults" id="set_outlook_defaults" onclick="setOutlookDefaults();">&nbsp;
					
					<?php echo '<script'; ?>
 type="text/javascript" language="Javascript">
					<!--
						function toggleAllSecurityOptions() {
							document.getElementById('set_outlook_defaults').checked = false;

							var check = false;

							if(document.getElementById('toggle_all').checked == true) {
								check = true;
							}
							document.getElementById('applet').checked = check;
							document.getElementById('base').checked = check;
							document.getElementById('embed').checked = check;
							document.getElementById('form').checked = check;
							document.getElementById('frame').checked = check;
							document.getElementById('frameset').checked = check;
							document.getElementById('iframe').checked = check;
							document.getElementById('import').checked = check;
							document.getElementById('layer').checked = check;
							document.getElementById('link').checked = check;
							document.getElementById('object').checked = check;
							document.getElementById('style').checked = check;
							document.getElementById('xmp').checked = check;
						}

						function setOutlookDefaults() {
							document.getElementById('toggle_all').checked = false;

							document.getElementById('applet').checked = true;
							document.getElementById('base').checked = true;
							document.getElementById('embed').checked = true;
							document.getElementById('form').checked = true;
							document.getElementById('frame').checked = true;
							document.getElementById('frameset').checked = true;
							document.getElementById('iframe').checked = true;
							document.getElementById('import').checked = true;
							document.getElementById('layer').checked = true;
							document.getElementById('link').checked = true;
							document.getElementById('object').checked = true;
							document.getElementById('style').checked = false;
							document.getElementById('xmp').checked = true;
						}
                    -->
					<?php echo '</script'; ?>
>
					
				</td>
			</tr>
			<tr>
				<td valign="middle" valign="top" scope="row" colspan="3">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_TOGGLE_ALL'];?>

				</td>
				<td width="10%" NOWRAP valign="top" >
					<input type="checkbox" value="1" name="toggle_all" id="toggle_all" onclick="toggleAllSecurityOptions();">&nbsp;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_APPLET'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="applet" id="applet" <?php echo $_smarty_tpl->tpl_vars['appletChecked']->value;?>
>&nbsp; &lt;applet&gt;
				</td>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_BASE'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="base" id="base" <?php echo $_smarty_tpl->tpl_vars['baseChecked']->value;?>
>&nbsp; &lt;base&gt;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_EMBED'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="embed" id="embed" <?php echo $_smarty_tpl->tpl_vars['embedChecked']->value;?>
>&nbsp; &lt;embed&gt;
				</td>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_FORM'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="form" id="form" <?php echo $_smarty_tpl->tpl_vars['formChecked']->value;?>
>&nbsp; &lt;form&gt;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_FRAME'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="frame" id="frame" <?php echo $_smarty_tpl->tpl_vars['frameChecked']->value;?>
>&nbsp; &lt;frame&gt;
				</td>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_FRAMESET'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="frameset" id="frameset" <?php echo $_smarty_tpl->tpl_vars['framesetChecked']->value;?>
>&nbsp; &lt;frameset&gt;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_IFRAME'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="iframe" id="iframe" <?php echo $_smarty_tpl->tpl_vars['iframeChecked']->value;?>
>&nbsp; &lt;iframe&gt;
				</td>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_IMPORT'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="import" id="import" <?php echo $_smarty_tpl->tpl_vars['importChecked']->value;?>
>&nbsp; &lt;import&gt;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_LAYER'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="layer" id="layer" <?php echo $_smarty_tpl->tpl_vars['layerChecked']->value;?>
>&nbsp; &lt;layer&gt;
				</td>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_LINK'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="link" id="link" <?php echo $_smarty_tpl->tpl_vars['linkChecked']->value;?>
>&nbsp; &lt;link&gt;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_OBJECT'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="object" id="object" <?php echo $_smarty_tpl->tpl_vars['objectChecked']->value;?>
>&nbsp; &lt;object&gt;
				</td>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_STYLE'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="style" id="style" <?php echo $_smarty_tpl->tpl_vars['styleChecked']->value;?>
>&nbsp; &lt;style&gt;
				</td>
			</tr>
			<tr>
				<td width="10%" valign="middle" scope="row">
					<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SECURITY_XMP'];?>

				</td>
				<td width="40%" NOWRAP valign="middle" >
					<input type="checkbox" value="1" name="xmp" id="xmp" <?php echo $_smarty_tpl->tpl_vars['xmpChecked']->value;?>
>&nbsp; &lt;xmp&gt;
				</td>
				<td scope="row">&nbsp;</td>
				<td>&nbsp;</td>
		</tr>
</table>
</td>
</tr>
</table>
<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
			<tr>
				<td scope="row">
					<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>

					<span class="required">
						<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>

					</span>
				</td>
				<td >
					<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER_EMAIL']->value;?>
">
				</td>
			</tr>
			<tr>
				<td scope="row" colspan="2">
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SEND'];?>
   " onclick="javascript:sendTestEmail();">&nbsp;
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
				</td>
			</tr>

		</table>
	</div>
</div>

<div style="padding-top:2px;">
			<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" class="button primary" onclick="this.form.action.value='Save';return save_data(this);" type="submit" name="button" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
 ">
			<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" class="button" onclick="parent.SUGAR.App.router.navigate('#Administration', {trigger: true})" type="submit" name="button" value=" <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 ">
</div>

	</form>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


<?php echo '<script'; ?>
 type="text/javascript">
<!--
var loader = new YAHOO.util.YUILoader({
    require : ["element","sugarwidgets"],
    loadOptional: true,
    skin: { base: 'blank', defaultSkin: '' },
    allowRollup: true,
    base: "include/javascript/yui/build/"
});
loader.addModule({
    name :"sugarwidgets",
    type : "js",

    fullpath: "<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/sugarwidgets/SugarYUIWidgets.js'),$_smarty_tpl);?>
",

    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview"]
});
loader.insert();

EmailMan = {};

var first_load = true;
function testOutboundSettings() {
	if (document.getElementById('mail_sendtype').value == 'sendmail') {
		testOutboundSettingsDialog();
		return;
	}
	var errorMessage = '';
	var isError = false;
	var fromAddress = document.getElementById("outboundtest_from_address").value;
    var errorMessage = '';
    var isError = false;
    var smtpServer = document.getElementById('mail_smtpserver').value;
    var smtpPort = document.getElementById('mail_smtpport').value;
    var smtpssl  = document.getElementById('mail_smtpssl').value;
    var mailsmtpauthreq = document.getElementById('mail_smtpauth_req');
    var smtpType = document.getElementById('EditView').mail_smtptype.value;
    var eapmId = document.getElementById('EditView').eapm_id.value;
    var authAccount = document.getElementById('authorized_account').value;
    var authType = document.getElementById('mail_authtype').value;

    if(authType === 'oauth2' && (trim(eapmId) === '' || trim(authAccount) === '')) {
        errorMessage = "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_PLEASE_AUTHORIZE_TESTING'];?>
" + "<br/>";
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ACCOUNT_NOT_AUTHORIZED'];?>
", errorMessage, 'alert');
        return false;
    }
    if(trim(smtpServer) == '') {
        isError = true;
        errorMessage += "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ACCOUNTS_SMTPSERVER'];?>
" + "<br/>";
    }
    if(trim(smtpPort) == '') {
        isError = true;
        errorMessage += "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ACCOUNTS_SMTPPORT'];?>
" + "<br/>";
    }
    if(mailsmtpauthreq.checked && authType !== 'oauth2') {
        if(trim(document.getElementById('mail_smtpuser').value) == '') {
            isError = true;
            errorMessage += "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ACCOUNTS_SMTPUSER'];?>
" + "<br/>";
        }
    }
    if(isError) {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
", errorMessage, 'alert');
        return false;
    }

    testOutboundSettingsDialog();

}

function sendTestEmail()
{
    var toAddress = document.getElementById("outboundtest_from_address").value;
    var fromAddress = document.getElementById("notify_fromaddress").value;
    if (trim(toAddress) == "")
    {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>
", 'alert');
        return;
    }
    else if (!isValidEmailAddress(toAddress)) {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_INVALID_REQUIRED_FIELDS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>
", 'alert');
        return;
    }
    if (trim(fromAddress) == "")
    {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_ADDR'];?>
", 'alert');
        return;
    }
    else if (!isValidEmailAddress(fromAddress)) {
        overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_INVALID_REQUIRED_FIELDS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_ADDR'];?>
", 'alert');
        return;
    }
    //Hide the email address window and show a message notifying the user that the test email is being sent.
    EmailMan.testOutboundDialog.hide();
    overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_PERFORMING_TASK'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_ONE_MOMENT'];?>
", 'alert');

    var callbackOutboundTest = {
    	success	: function(o) {
    		hideOverlay();
			var responseObject = YAHOO.lang.JSON.parse(o.responseText);
			if (responseObject.status)
				overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
", "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_NOTIFICATION_SENT'];?>
", 'alert');
			else
				overlay("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
", responseObject.errorMessage, 'alert');
		}
    };
    var smtpServer = document.getElementById('mail_smtpserver').value;
    var smtpPort = document.getElementById('mail_smtpport').value;
    var smtpssl  = document.getElementById('mail_smtpssl').value;
    var mailsmtpauthreq = document.getElementById('mail_smtpauth_req');
    var mail_sendtype = document.getElementById('mail_sendtype').value;
    var smtppass = trim(document.getElementById('mail_smtppass').value);
    var smtpType = document.getElementById('EditView').mail_smtptype.value;
    var eapmId = document.getElementById('EditView').eapm_id.value;
    var authAccount = document.getElementById('authorized_account').value;
    var authType = document.getElementById('mail_authtype').value;
    var from_name = document.getElementById('notify_fromname').value;
	var postDataString = 'mail_type=system&mail_sendtype=' + mail_sendtype + '&mail_smtpserver=' + smtpServer + "&mail_smtpport=" + smtpPort + "&mail_smtpssl=" + smtpssl +
	                      "&mail_smtpauth_req=" + mailsmtpauthreq.checked + "&mail_smtpuser=" + trim(document.getElementById('mail_smtpuser').value) +
	                      "&mail_smtppass=" + encodeURIComponent(smtppass) + "&outboundtest_to_address=" + encodeURIComponent(toAddress) +
                          "&outboundtest_from_address=" + fromAddress + "&mail_from_name=" + from_name + "&mail_smtptype=" + smtpType  + "&mail_authtype=" + authType + "&eapm_id=" + eapmId + "&authorized_account=" + authAccount;

	YAHOO.util.Connect.asyncRequest("POST", "index.php?action=testOutboundEmail&module=EmailMan&to_pdf=true&sugar_body_only=true", callbackOutboundTest, postDataString);
}
function testOutboundSettingsDialog() {
        // lazy load dialogue
        if(!EmailMan.testOutboundDialog) {
        	EmailMan.testOutboundDialog = new YAHOO.widget.Dialog("testOutboundDialog", {
                modal:true,
				visible:true,
            	fixedcenter:true,
            	constraintoviewport: true,
                width	: 600,
                shadow	: false
            });
            EmailMan.testOutboundDialog.setHeader("<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
");
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

function notify_setrequired(f) {
	document.getElementById("smtp_settings").style.display = (f.mail_sendtype.value == "SMTP") ? "inline" : "none";
	document.getElementById("smtp_settings").style.visibility = (f.mail_sendtype.value == "SMTP") ? "visible" : "hidden";
    if (document.getElementById('EditView').mail_authtype.value !== 'oauth2') {
        document.getElementById("smtp_auth1").style.display = (document.getElementById('mail_smtpauth_req').checked) ? "" : "none";
        document.getElementById("smtp_auth1").style.visibility = (document.getElementById('mail_smtpauth_req').checked) ? "visible" : "hidden";
        document.getElementById("smtp_auth2").style.display = (document.getElementById('mail_smtpauth_req').checked) ? "" : "none";
        document.getElementById("smtp_auth2").style.visibility = (document.getElementById('mail_smtpauth_req').checked) ? "visible" : "hidden";
    }
	if( document.getElementById('mail_smtpauth_req').checked)
	   YAHOO.util.Dom.removeClass('mail_allow_user', "yui-hidden");
	else
	   YAHOO.util.Dom.addClass("mail_allow_user", "yui-hidden");

	return true;
}

function setDefaultSMTPPort()
{
    var smtpPortField;
    var smtpProtocol;
    if (!first_load) {
        smtpPortField = document.getElementById('mail_smtpport');
        smtpProtocol  = document.getElementById('mail_smtpssl').value;
        smtpPortField.value = smtpProtocol === '1' ? '465' : smtpProtocol === '2' ? '587' : '25';
    } else {
        first_load = false;
    }
}

/**
*  If the outlook options are all set on page load then enable the outlook field so that the user has an indication
*  that that filter has been applied.
*/
function setOutlookDefault()
{
    var shouldToggle = true;
    var aCheckFields = ['applet','base', 'embed','form','frame','frameset', 'iframe','import','layer','link', 'object', 'xmp'];

    for(var i=0;i<aCheckFields.length;i++)
    {
        var tmpName = aCheckFields[i];

        if( ! document.getElementById(tmpName).checked )
        {
            shouldToggle = false;
            break;
        }
    }

    if(shouldToggle && !document.getElementById('style').checked)
        document.getElementById('set_outlook_defaults').checked = true;

}
YAHOO.util.Event.onDOMReady(setOutlookDefault);
notify_setrequired(document.ConfigureSettings);
function authorize() {
    var smtpType = document.getElementById('EditView').mail_smtptype.value;
    if (authInfo[smtpType]['auth_url']) {
        window.addEventListener('message', handleOauthComplete);
        var height = 600;
        var width = 600;
        var left = (window.parent.screen.width - width) / 2;
        var top = (window.parent.screen.height - height) / 4;
        var submitWindow = window.open('/', "_blank", 'width=' + width + ',height=' + height + ',left=' + left + ',top=' + top + ',resizable=1');
        submitWindow.location.href = 'about:blank';
        submitWindow.location.href = authInfo[smtpType]['auth_url'];
    }
}
function handleOauthComplete(e) {
    var smtpType = document.getElementById('EditView').mail_smtptype.value;
    var data = JSON.parse(e.data);
    if (!data.dataSource || !authInfo[smtpType] || data.dataSource !== authInfo[smtpType]['dataSource']) {
        return;
    }
    if (data.eapmId && data.emailAddress && data.userName) {
        authInfo[smtpType]['eapm_id'] = data.eapmId;
        authInfo[smtpType]['authorized_account'] = data.emailAddress;
        authInfo[smtpType]['mail_smtpuser'] = data.userName;
        document.getElementById('eapm_id').value = data.eapmId;
        document.getElementById('auth_status').value = '<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_AUTHORIZED'];?>
';
        document.getElementById('authorized_account').value = data.emailAddress;
        document.getElementById('auth_email').value = data.emailAddress;
        document.getElementById('mail_smtpuser').value = data.userName;
    } else {
        alert('<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_AUTH_FAILURE'];?>
');
    }
    window.removeEventListener('message', handleOauthComplete);
}
function save_data(form) {
    var eapmId = document.getElementById('EditView').eapm_id.value;
    var authAccount = document.getElementById('authorized_account').value;
    var authType = document.getElementById('mail_authtype').value;

    if(authType === 'oauth2' && (trim(eapmId) === '' || trim(authAccount) === '')) {
        errorMessage = "<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_PLEASE_AUTHORIZE'];?>
";
        alert(errorMessage);
        return false;
    }
    return verify_data(form);
}
function changeEmailScreenDisplay(smtptype, clear)
{
    document.getElementById("auth_block").style.display = 'none';
    document.getElementById("mailsettings0").style.display = 'none';
    document.getElementById("smtp_auth1").style.display = '';
    document.getElementById("smtp_auth2").style.display = '';
    document.getElementById("smtp_auth1").style.visibility = 'visible';
    document.getElementById("smtp_auth2").style.visibility = 'visible';
    document.getElementById("mail_smtpauth_req").disabled = false;

    if(clear) {
        document.getElementById("mail_authtype").value = '';
        document.getElementById("eapm_id").value = '';
        document.getElementById("authorized_account").value = '';
	    document.getElementById("mail_smtpserver").value = '';
	    document.getElementById("mail_smtpport").value = '25';
	    document.getElementById("mail_smtpauth_req").checked = true;
	    document.getElementById("mailsettings1").style.display = '';
	    document.getElementById("mailsettings2").style.display = '';
	    document.getElementById("mail_smtppass_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPASS'];?>
';
	    document.getElementById("mail_smtpport_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPORT'];?>
';
	    document.getElementById("mail_smtpserver_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPSERVER'];?>
';
	    document.getElementById("mail_smtpuser_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER'];?>
';
    }

    switch(smtptype) {
        case 'yahoomail':
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
            document.getElementById("mail_smtppass_label").innerHTML =
                    document.getElementById("mail_smtppass_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_YAHOOMAIL_SMTPPASS'];?>
';
            document.getElementById("mail_smtpuser_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_YAHOOMAIL_SMTPUSER'];?>
';
            break;
        case 'gmail':
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
            document.getElementById("mail_smtppass_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_GMAIL_SMTPPASS'];?>
';
            document.getElementById("mail_smtpuser_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_GMAIL_SMTPUSER'];?>
';
            break;
        case 'exchange_online':
            document.getElementById("mail_smtpport_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXCHANGE_SMTPPORT'];?>
';
            document.getElementById("mail_smtpserver_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXCHANGE_SMTPSERVER'];?>
';
            var defaults = {
                mail_smtpserver: 'smtp.office365.com',
                mail_smtpport: '587',
                mail_smtpssl: '2'
            };
        case 'google_oauth2':
            var defaults = defaults || {
                mail_smtpserver: 'smtp.gmail.com',
                mail_smtpport: '587',
                mail_smtpssl: '2'
            };
            handleOauth2TabSwitch(smtptype, defaults);
            break;
        case 'exchange':
            if ( document.getElementById("mail_smtpserver").value == 'plus.smtp.mail.yahoo.com'
                    || document.getElementById("mail_smtpserver").value == 'smtp.gmail.com' ) {
                document.getElementById("mail_smtpserver").value = '';
            }
            document.getElementById("mailsettings1").style.display = '';
            document.getElementById("mailsettings2").style.display = '';
            document.getElementById("mail_smtppass_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXCHANGE_SMTPPASS'];?>
';
            document.getElementById("mail_smtpport_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXCHANGE_SMTPPORT'];?>
';
            document.getElementById("mail_smtpserver_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXCHANGE_SMTPSERVER'];?>
';
            document.getElementById("mail_smtpuser_label").innerHTML = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXCHANGE_SMTPUSER'];?>
';
            break;
    }
    setDefaultSMTPPort();
    notify_setrequired(document.ConfigureSettings);
}

var handleOauth2TabSwitch = function(smtptype, defaults) {
	// Hide the username/password fields
	document.getElementById("smtp_auth1").style.display = 'none';
	document.getElementById("smtp_auth2").style.display = 'none';
	document.getElementById("smtp_auth1").style.visibility = 'hidden';
	document.getElementById("smtp_auth2").style.visibility = 'hidden';

	// Show the OAuth2 fields
	document.getElementById("auth_block").style.display = '';
	document.getElementById("mailsettings0").style.display = '';
	if (!authInfo[smtptype]['auth_url']) {
		document.getElementById("auth_warning").style.display = 'block';
		document.getElementById("auth_warning").innerHTML = authInfo[smtptype]['auth_warning'];
		document.getElementById("auth_button").disabled = true;
	} else {
		document.getElementById("auth_warning").style.display = 'none';
		document.getElementById("auth_button").disabled = false;
	}

	// Set the default values for the selected tab
	document.getElementById("mail_authtype").value = 'oauth2';
	document.getElementById("mail_smtpauth_req").disabled = true;
	document.getElementById("mail_smtpauth_req").checked = true;
	_.each(defaults, function(value, key) {
		document.getElementById(key).value = value;
	});

	// Set the authorized values of the oauth fields if they exist
	document.getElementById("authorized_account").value = authInfo[smtptype]['authorized_account'] || '';
	document.getElementById("auth_email").value = authInfo[smtptype]['authorized_account'] || '';
	document.getElementById("eapm_id").value = authInfo[smtptype]['eapm_id'] || '';
	document.getElementById("mail_smtpuser").value = authInfo[smtptype]['mail_smtpuser'] || '';
	document.getElementById('auth_status').value = authInfo[smtptype]['eapm_id'] ?
			'<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_AUTHORIZED'];?>
' : '<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_NOT_AUTHORIZED'];?>
';
}

var oButtonGroup = new YAHOO.widget.ButtonGroup("smtpButtonGroup");
oButtonGroup.subscribe('checkedButtonChange', function(e)
{
    document.getElementById('EditView').mail_smtptype.value = e.newValue.get('value');
    changeEmailScreenDisplay(e.newValue.get('value'), true);
    document.getElementById('smtp_settings').style.display = '';
});
YAHOO.widget.Button.addHiddenFieldsToForm(document.ConfigureSettings);
if(window.addEventListener){
    window.addEventListener("load", function() { SUGAR.util.setEmailPasswordDisplay('mail_smtppass', <?php echo $_smarty_tpl->tpl_vars['mail_haspass']->value;?>
); }, false);
}else{
    window.attachEvent("onload", function() { SUGAR.util.setEmailPasswordDisplay('mail_smtppass', <?php echo $_smarty_tpl->tpl_vars['mail_haspass']->value;?>
); });
}
<?php if (!empty($_smarty_tpl->tpl_vars['mail_smtptype']->value)) {?>
document.getElementById('EditView').mail_smtptype.value = "<?php echo $_smarty_tpl->tpl_vars['mail_smtptype']->value;?>
";
changeEmailScreenDisplay("<?php echo $_smarty_tpl->tpl_vars['mail_smtptype']->value;?>
", false);
<?php }?>
-->
<?php echo '</script'; ?>
>

<?php }
}
