<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:20:33
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dea1098350_17645794',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2dbf4fe289270fdf103a0e597bd50f9718da4957' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/DetailView.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/ACLRoles/EditViewBody.tpl' => 1,
  ),
),false)) {
function content_62e3dea1098350_17645794 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>


<form action="index.php" method="post" name="DetailView" id="form">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>


			<input type="hidden" name="module" value="ACLRoles">
			<input type="hidden" name="user_id" value="">
			<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
">
			<input type="hidden" name="isDuplicate" value=''>
			<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
			<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
			<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'>
			<input type="hidden" name="action">

            <?php echo smarty_function_sugar_action_menu(array('id'=>"userEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['buttons']->value),$_smarty_tpl);?>

		</form>
		<p>
		<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
		<TR>
<td valign='top' width='15%' align='right'><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
:</b></td><td width='85%' colspan='3'><?php echo $_smarty_tpl->tpl_vars['ROLE']->value['name'];?>
</td>
</tr
><TR>
<td valign='top'  width='15%' align='right'><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DESCRIPTION'];?>
:</b></td><td colspan='3' valign='top'  width='85%' align='left'><?php echo nl2br($_smarty_tpl->tpl_vars['ROLE']->value['description']);?>
</td>
</tr></table>
</p>
		<p>

<?php $_smarty_tpl->_subTemplateRender("file:modules/ACLRoles/EditViewBody.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
