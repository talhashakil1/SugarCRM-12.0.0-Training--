<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:24:48
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Phone/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dfa0c9a3c5_75305958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b87bee51a815ce4cbe36a19da84998e10e2ac224' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Phone/ListView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dfa0c9a3c5_75305958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'getPhone', 'phone', null);
echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone']->value,'usa_format'=>$_smarty_tpl->tpl_vars['usa_format']->value),$_smarty_tpl);
}
}
