<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:25:01
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Teams/tpls/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dfad8106d7_71445978',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0089a919b4e4aea1dd57855b23c2d15877513f9c' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Teams/tpls/DetailView.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dfad8106d7_71445978 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_teamset_badges.php','function'=>'smarty_function_sugar_teamset_badges',),));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['teams']->value, 'team', false, 'key', 'tn', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['team']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['team']->value) {
$_smarty_tpl->tpl_vars['team']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['total'];
echo htmlspecialchars($_smarty_tpl->tpl_vars['team']->value['title'], ENT_QUOTES, 'UTF-8', true);
if ($_smarty_tpl->tpl_vars['team']->value['badges']) {?> (<em><?php echo smarty_function_sugar_teamset_badges(array('items'=>$_smarty_tpl->tpl_vars['team']->value['badges']),$_smarty_tpl);?>
</em>)<?php }
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tn']->value['last'] : null)) {?>, <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
