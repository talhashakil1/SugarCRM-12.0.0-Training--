<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:29
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarEmailAddress/templates/forEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1ce9d69d10_25304300',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40aaa56dc30727689bd658c78b1a44e42aeac0d5' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarEmailAddress/templates/forEditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1ce9d69d10_25304300 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
global $emailInstances;
if (empty($emailInstances))
$emailInstances = array();
$module = $_smarty_tpl->getTemplateVars('module');
if (!isset($emailInstances[$module]))
$emailInstances[$module] = 0;
$_smarty_tpl->assign('index', $emailInstances[$module]);
$emailInstances['module']++;
echo '<script'; ?>
 type="text/javascript" language="javascript">
var emailAddressWidgetLoaded = false;
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/SugarEmailAddress/SugarEmailAddress.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
	var module = '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
';
<?php echo '</script'; ?>
>
<table style="border-spacing: 0pt;">
	<tr>
		<td  valign="top" NOWRAP>
			<table id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
" class="emailaddresses">
				<tbody id="targetBody"></tbody>
				<tr>
					<td scope="row" NOWRAP>
					    <input type=hidden id="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id" name="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id" value="">
						<input type=hidden id='emailAddressWidget' name='emailAddressWidget' value='1'>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "other_attributes", null);?>id="<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
_email_widget_add" onclick="javascript:SUGAR.EmailAddressWidget.instances.<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
.addEmailAddress('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
','','');"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'alt_addButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ID_FF_ADD'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <button type="button" <?php echo $_smarty_tpl->tpl_vars['other_attributes']->value;?>
><?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-add",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_addButton']->value),'ext'=>".png"),$_smarty_tpl);?>
</button>
					</td>
					<td scope="row" NOWRAP>
					    &nbsp;
					</td>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_PRIMARY'];?>

					</td>
					<?php if ($_smarty_tpl->tpl_vars['useReplyTo']->value == true) {?>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_REPLY_TO'];?>

					</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['useOptOut']->value == true) {?>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_OPT_OUT'];?>

					</td>
					<?php }?>
					<?php if ($_smarty_tpl->tpl_vars['useInvalid']->value == true) {?>
					<td scope="row" NOWRAP>
						<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_EMAIL_INVALID'];?>

					</td>
					<?php }?>
				</tr>
			</table>
		</td>
	</tr>
</table>
<input type="hidden" name="useEmailWidget" value="true">
<?php echo '<script'; ?>
 type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
function init<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
Email<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
(){
	if(emailAddressWidgetLoaded || SUGAR.EmailAddressWidget){
		var table = YAHOO.util.Dom.get("<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
");
	    var eaw = SUGAR.EmailAddressWidget.instances.<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['index']->value;?>
 = new SUGAR.EmailAddressWidget("<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
");
		eaw.emailView = '<?php echo $_smarty_tpl->tpl_vars['emailView']->value;?>
';
	    eaw.emailIsRequired = "<?php echo $_smarty_tpl->tpl_vars['required']->value;?>
";
	    eaw.tabIndex = '<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
';
	    var addDefaultAddress = '<?php echo $_smarty_tpl->tpl_vars['addDefaultAddress']->value;?>
';
	    var prefillEmailAddress = '<?php echo $_smarty_tpl->tpl_vars['prefillEmailAddresses']->value;?>
';
	    var prefillData = <?php echo $_smarty_tpl->tpl_vars['prefillData']->value;?>
;
        eaw.idmMode = <?php echo $_smarty_tpl->tpl_vars['idmMode']->value;?>
;
	    if(prefillEmailAddress == 'true') {
	        eaw.prefillEmailAddresses('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
', prefillData);
		} else if(addDefaultAddress == 'true') {
	        eaw.addEmailAddress('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
emailAddressesTable<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
');
		}
		if('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id') {
		   document.getElementById('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_email_widget_id').value = eaw.count;
		}
		SUGAR_callsInProgress--;
        //if the form has already been registered, re-register it with the new element
        var form = Dom.getAncestorByTagName(table, "form");
        if (SUGAR.forms.AssignmentHandler.VARIABLE_MAP[form.name])
            SUGAR.forms.AssignmentHandler.registerForm(form.name, form);
	}else{
		setTimeout("init<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
Email<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
();", 500);
	}
}

YAHOO.util.Event.onDOMReady(init<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
Email<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
);
<?php echo '</script'; ?>
>
<?php }
}
