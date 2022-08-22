<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:29
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Relate/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1ce9e31d02_24667598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6deef0d38f3ff97ad67cccabdee5cf969ac10b73' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Relate/EditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1ce9e31d02_24667598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
?>
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
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>
<input type="text" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" class=<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['class'])) {?>"sqsEnabled"<?php } else { ?> "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['class'];?>
" <?php }?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" size="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['size'];?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
" title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['readOnly'];?>
 <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
	<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> >
<input type="hidden" name="<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idNameHidden'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idNameHidden'];
}
echo smarty_function_sugarvar(array('key'=>'id_name'),$_smarty_tpl);?>
" 
	id="<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idNameHidden'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idNameHidden'];
}
echo smarty_function_sugarvar(array('key'=>'id_name'),$_smarty_tpl);?>
" 
	<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?>value="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
"<?php }?>>
<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['hideButtons'])) {?>
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" id="btn_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" title="{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accessKeySelectTitle'];?>
"}" class="button firstChild" value="{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accessKeySelectLabel'];?>
"}"
onclick='open_popup(
    "<?php echo smarty_function_sugarvar(array('key'=>'module'),$_smarty_tpl);?>
", 
	600, 
	400, 
	"<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['initial_filter'];?>
", 
	true, 
	false, 
	<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['popupData'];?>
, 
	"single", 
	true
);' <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['javascript']['btn']))) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['javascript']['btn'];
}?>><img src="{sugar_getimagepath file="id-ff-select.png"}"></button><?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['selectOnly'])) {?><button type="button" name="btn_clr_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" id="btn_clr_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" title="{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accessKeyClearTitle'];?>
"}"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
', '<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];?>
_<?php }
echo smarty_function_sugarvar(array('key'=>'id_name'),$_smarty_tpl);?>
');"  value="{sugar_translate label="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accessKeyClearLabel'];?>
"}" <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['javascript']['btn_clear']))) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['javascript']['btn_clear'];
}?>><img src="{sugar_getimagepath file="id-ff-clear.png"}"></button>
<?php }?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['allowNewValue'])) {?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_allow_new_value" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_allow_new_value" value="true">
<?php }
echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>
<?php }
}
