<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:19:12
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3de50e69192_75219819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dce235ca3a0bbef650cd99171d4ae7e57bd9789f' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/EditView.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3de50e69192_75219819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),));
?>

<?php echo '<script'; ?>
>
function set_focus(){
	document.getElementById('name').focus();
}
<?php echo '</script'; ?>
>

<form method='POST' name='EditView' action='index.php'>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<TABLE width='100%' border='0' cellpadding=0 cellspacing = 0 class="actionsContainer">
<tbody>
<tr>
<td>
<input type='hidden' name='record' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='isduplicate' value='<?php echo $_smarty_tpl->tpl_vars['ISDUPLICATE']->value;?>
'>
<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'> &nbsp;
<?php echo smarty_function_sugar_action_menu(array('id'=>"roleEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_MENU']->value,'flat'=>true),$_smarty_tpl);?>

</td>
</tr>
</tbody>
</table>
<TABLE width='100%' class="edit view"  border='0' cellpadding=0 cellspacing = 0  >
<TR>
<td scope="row" align='right'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
:<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span></td><td >
<input id='name' name='name' type='text' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['name'];?>
'>
</td><td>&nbsp;</td><td>&nbsp;</td>
</tr>
<tr>
<td scope="row" align='right'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DESCRIPTION'];?>
:</td>
<td ><textarea name='description' cols="80" rows="8"><?php echo $_smarty_tpl->tpl_vars['ROLE']->value['description'];?>
</textarea></td>
</tr>
</table>

</form>
<?php echo '<script'; ?>
 type="text/javascript">
addToValidate('EditView', 'name', 'varchar', true, '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NAME'];?>
');
<?php echo '</script'; ?>
>
<?php }
}
