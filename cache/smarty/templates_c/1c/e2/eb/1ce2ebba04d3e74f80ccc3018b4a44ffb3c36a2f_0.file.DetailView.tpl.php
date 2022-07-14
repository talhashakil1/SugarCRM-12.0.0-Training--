<?php
/* Smarty version 3.1.39, created on 2022-07-13 18:52:27
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Relate/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cece1b40b327_34680095',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ce2ebba04d3e74f80ccc3018b4a44ffb3c36a2f' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Relate/DetailView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cece1b40b327_34680095 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar_connector.php','function'=>'smarty_function_sugarvar_connector',),));
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
<?php if (!$_smarty_tpl->tpl_vars['nolink']->value && !empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?> 
{if !empty(<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value','string'=>'true'),$_smarty_tpl);?>
)}
{capture assign="detail_url"}index.php?module=<?php echo $_smarty_tpl->tpl_vars['vardef']->value['module'];?>
&action=DetailView&record=<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
{/capture}
<a href="{sugar_ajax_url url=$detail_url}">{/if}
<?php }?>
<span id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['id_name'];?>
" class="sugar_field" data-id-value="<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value'),$_smarty_tpl);?>
"><?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
</span>
<?php if (!$_smarty_tpl->tpl_vars['nolink']->value && !empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value','string'=>'true'),$_smarty_tpl);?>
)}</a>{/if}
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors']) && !empty($_smarty_tpl->tpl_vars['vardef']->value['id_name'])) {?>
{if !empty(<?php echo smarty_function_sugarvar(array('memberName'=>'vardef.id_name','key'=>'value','string'=>'true'),$_smarty_tpl);?>
)}
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>
 
{/if}
<?php }
}
}
