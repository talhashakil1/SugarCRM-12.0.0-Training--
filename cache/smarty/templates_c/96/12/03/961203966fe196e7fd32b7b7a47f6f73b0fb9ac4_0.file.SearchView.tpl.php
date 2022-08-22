<?php
/* Smarty version 3.1.39, created on 2022-08-19 16:02:12
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Bool/SearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff6db4349e85_29733467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '961203966fe196e7fd32b7b7a47f6f73b0fb9ac4' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Bool/SearchView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff6db4349e85_29733467 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
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
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval(<?php echo smarty_function_sugarvar(array('key'=>'value','stringFormat'=>'false'),$_smarty_tpl);?>
) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval(<?php echo smarty_function_sugarvar(array('key'=>'value','stringFormat'=>'false'),$_smarty_tpl);?>
) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" name="<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
" <?php if (!empty($_smarty_tpl->tpl_vars['tabindex']->value)) {?> tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php }?>  <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

<?php }
}
