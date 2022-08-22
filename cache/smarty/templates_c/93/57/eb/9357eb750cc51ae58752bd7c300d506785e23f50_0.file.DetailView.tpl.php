<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:12
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/File/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431c2ad546_25462994',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9357eb750cc51ae58752bd7c300d506785e23f50' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/File/DetailView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431c2ad546_25462994 (Smarty_Internal_Template $_smarty_tpl) {
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
<span class="sugar_field" id="<?php if (empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
} else {
echo $_smarty_tpl->tpl_vars['displayParams']->value['idName'];
}?>">
<a href="index.php?entryPoint=download&id={$fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['fileId'];?>
.value}&type=<?php echo $_smarty_tpl->tpl_vars['vardef']->value['linkModule'];?>
" class="tabDetailViewDFLink" target='_blank'><?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
</a>
</span>
<?php if ((isset($_smarty_tpl->tpl_vars['vardef']->value)) && (isset($_smarty_tpl->tpl_vars['vardef']->value['allowEapm'])) && $_smarty_tpl->tpl_vars['vardef']->value['allowEapm']) {?>
{if isset($fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['docType'];?>
) && !empty($fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['docType'];?>
.value) && $fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['docType'];?>
.value != 'SugarCRM' && !empty($fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['docUrl'];?>
.value) }
{capture name=imageNameCapture assign=imageName}
{$fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['docType'];?>
.value}_image_inline.png
{/capture}
<a href="{$fields.<?php echo $_smarty_tpl->tpl_vars['vardef']->value['docUrl'];?>
.value}" class="tabDetailViewDFLink" target="_blank">{sugar_getimage name=$imageName alt=$imageName other_attributes='border="0" '}</a>
{/if}
<?php }
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {
echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

<?php }
}
}
