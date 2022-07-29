<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:24:48
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Bool/ListView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dfa0ca1ea0_72388895',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c02ea60fe66e1cee5f9f6912a33f4834746ba79c' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Bool/ListView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dfa0ca1ea0_72388895 (Smarty_Internal_Template $_smarty_tpl) {
if (strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "1" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "yes" || strval($_smarty_tpl->tpl_vars['parentFieldArray']->value[$_smarty_tpl->tpl_vars['col']->value]) == "on") {
$_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
<?php }
}
