<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:41:48
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Enum/SearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3e39c1e1988_32695522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c1da17f7cfe2fed56ad4928adeacd37dfbe552e' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Enum/SearchView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3e39c1e1988_32695522 (Smarty_Internal_Template $_smarty_tpl) {
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
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'display_size', 'size', null);
echo (($tmp = @$_smarty_tpl->tpl_vars['displayParams']->value['size'])===null||$tmp==='' ? 6 : $tmp);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
{html_options id='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
[]' options=<?php echo smarty_function_sugarvar(array('key'=>'options','string'=>true),$_smarty_tpl);?>
 size="<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
" style="width: 150px" <?php if ($_smarty_tpl->tpl_vars['size']->value > 1) {?>multiple="1"<?php }?> selected=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
}
<?php }
}
