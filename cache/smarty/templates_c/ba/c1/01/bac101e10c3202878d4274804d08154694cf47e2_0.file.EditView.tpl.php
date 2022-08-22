<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:14
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Text/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431e2ab7f3_95067927',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac101e10c3202878d4274804d08154694cf47e2' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Text/EditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431e2ab7f3_95067927 (Smarty_Internal_Template $_smarty_tpl) {
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
{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}  

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

<textarea  id='<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
' name='<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'
rows="<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['rows'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['rows'];
} elseif (!empty($_smarty_tpl->tpl_vars['vardef']->value['rows'])) {
echo $_smarty_tpl->tpl_vars['vardef']->value['rows'];
} else {
echo 4;
}?>" 
cols="<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['cols'])) {
echo $_smarty_tpl->tpl_vars['displayParams']->value['cols'];
} elseif (!empty($_smarty_tpl->tpl_vars['vardef']->value['cols'])) {
echo $_smarty_tpl->tpl_vars['vardef']->value['cols'];
} else {
echo 60;
}?>" 
title='<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['vardef']->value['help'], "hexentity");?>
' tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>

<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> >{$value}</textarea>
<?php }
}
