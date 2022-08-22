<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:04
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Fullname/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1cd0e31181_89442337',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cba6c9e93fd9d566633ae2e8b17c330efd4580b4' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Fullname/ListView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1cd0e31181_89442337 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_fetch.php','function'=>'smarty_function_sugar_fetch',),));
?>

<?php echo smarty_function_sugar_fetch(array('object'=>$_smarty_tpl->tpl_vars['parentFieldArray']->value,'key'=>$_smarty_tpl->tpl_vars['col']->value,'escape'=>"html"),$_smarty_tpl);?>

<?php }
}
