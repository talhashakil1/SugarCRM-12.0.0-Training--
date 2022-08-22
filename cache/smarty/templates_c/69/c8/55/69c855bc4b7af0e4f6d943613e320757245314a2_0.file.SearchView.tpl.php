<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:09
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Relate/SearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431924ee58_21446694',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69c855bc4b7af0e4f6d943613e320757245314a2' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Relate/SearchView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431924ee58_21446694 (Smarty_Internal_Template $_smarty_tpl) {
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
<input type="text" name="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
"  class=<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['class'])) {?>"sqsEnabled"<?php } else { ?> "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['class'];?>
" <?php }?> <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" size="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['size'];?>
" value="<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
" title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['readOnly'];?>
 <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
<input type="hidden" <?php if ($_smarty_tpl->tpl_vars['displayParams']->value['useIdSearch']) {?>name="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'name'),$_smarty_tpl);?>
"<?php }?> id="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'name'),$_smarty_tpl);?>
" value="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
">
<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['hideButtons'])) {?>
<span class="id-ff multiple">
<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['clearOnly'])) {?>
<button type="button" name="btn_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['selectOnly'])) {?> firstChild<?php }?>" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup("<?php echo smarty_function_sugarvar(array('key'=>'module'),$_smarty_tpl);?>
", 600, 400, "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['initial_filter'];?>
", true, false, <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['popupData'];?>
, "single", true);'>{sugar_getimage alt=$app_strings.LBL_ID_FF_SELECT name="id-ff-select" ext=".png" other_attributes=''}</button><?php }
if (empty($_smarty_tpl->tpl_vars['displayParams']->value['selectOnly'])) {?><button type="button" name="btn_clr_<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['clearOnly'])) {?> lastChild<?php }?>" onclick="this.form.<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
.value = ''; this.form.<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'name'),$_smarty_tpl);?>
.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}">{sugar_getimage name="id-ff-clear" alt=$app_strings.LBL_ID_FF_CLEAR ext=".png" other_attributes=''}</button>
<?php }?>
</span>
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['allowNewValue'])) {?>
<input type="hidden" name="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
_allow_new_value" id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
_allow_new_value" value="true">
<?php }
}
}
