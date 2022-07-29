<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:25:01
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/DetailViewBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dfad9af170_43130719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259fc41f48b1f2f20af3a195fb328a538e8dc36a' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/DetailViewBody.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dfad9af170_43130719 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),));
?>

<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  ><TR><td style="background: transparent;"></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value) {
$_smarty_tpl->tpl_vars['ACTION_NAME']->do_else = false;
?><td style="text-align: center;" scope="row"><b><?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
</b></td><?php
}
if ($_smarty_tpl->tpl_vars['ACTION_NAME']->do_else) {
?><td colspan="2">&nbsp;</td><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></TR><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'TYPES', false, 'CATEGORY_NAME');
$_smarty_tpl->tpl_vars['TYPES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value => $_smarty_tpl->tpl_vars['TYPES']->value) {
$_smarty_tpl->tpl_vars['TYPES']->do_else = false;
?><TR><?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == 'Users') {?><td nowrap width='1%' scope="row"><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_NAME_FOR_ROLE'];?>
</b></td><?php } else { ?><td nowrap width='1%' scope="row"><b><?php echo $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value];?>
</b></td><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
$_smarty_tpl->_assignInScope('ACTION_FIND', 'false');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPES']->value, 'ACTIONS', false, 'TYPE_NAME');
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['TYPE_NAME']->value => $_smarty_tpl->tpl_vars['ACTIONS']->value) {
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = false;
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIONS']->value, 'ACTION', false, 'ACTION_NAME_ACTIVE');
$_smarty_tpl->tpl_vars['ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value => $_smarty_tpl->tpl_vars['ACTION']->value) {
$_smarty_tpl->tpl_vars['ACTION']->do_else = false;
if ($_smarty_tpl->tpl_vars['ACTION_NAME']->value == $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value) {
$_smarty_tpl->_assignInScope('ACTION_FIND', 'true');?><td width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' align='center'><div align='center' class="acl<?php echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['ACTION']->value['accessLabel']);?>
"><b><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</b></div></td><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['ACTION_FIND']->value == 'false') {?><td nowrap width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' style="text-align: center;"><div><font color='red'>N/A</font></div></td><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></TR><?php
}
if ($_smarty_tpl->tpl_vars['TYPES']->do_else) {
?><tr> <td colspan="2">No Actions</td></tr><?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></TABLE><?php }
}
