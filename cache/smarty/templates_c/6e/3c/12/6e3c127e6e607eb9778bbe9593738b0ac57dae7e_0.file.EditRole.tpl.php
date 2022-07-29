<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:20:41
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/EditRole.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dea9b355e4_82733285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6e3c127e6e607eb9778bbe9593738b0ac57dae7e' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/EditRole.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dea9b355e4_82733285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<form method='POST' name='EditView' id='ACLEditView'>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type='hidden' name='record' value='<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
'>
<input type='hidden' name='module' value='ACLRoles'>
<input type='hidden' name='action' value='Save'>
<input type='hidden' name='return_record' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['record'];?>
'>
<input type='hidden' name='return_action' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['action'];?>
'>
<input type='hidden' name='return_module' value='<?php echo $_smarty_tpl->tpl_vars['RETURN']->value['module'];?>
'>
<input id="ACLROLE_SAVE_BUTTON" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" > &nbsp;
<input id="ACLROLE_CANCEL_BUTTON" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" class='button' accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" type='button' name='save' value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" class='button' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "All");'>
<br>
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
<?php if (!empty($_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value])) {?>
	<TR>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value], 'ACTIONS');
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTIONS']->value) {
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = false;
?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIONS']->value, 'ACTION', false, 'ACTION_NAME_ACTIVE');
$_smarty_tpl->tpl_vars['ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value => $_smarty_tpl->tpl_vars['ACTION']->value) {
$_smarty_tpl->tpl_vars['ACTION']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['ACTION_NAME']->value == $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value) {?>
					<td align='center'><div align='center'><b><?php echo $_smarty_tpl->tpl_vars['ACTION_LABEL']->value;?>
</b></div></td>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
if ($_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else) {
?>
	
	          <td colspan="2">&nbsp;</td>
	
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</TR>
	
	<TR>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
?>
	    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value[$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value], 'ACTIONS');
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTIONS']->value) {
$_smarty_tpl->tpl_vars['ACTIONS']->do_else = false;
?>
	        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTIONS']->value, 'ACTION', false, 'ACTION_NAME_ACTIVE');
$_smarty_tpl->tpl_vars['ACTION']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value => $_smarty_tpl->tpl_vars['ACTION']->value) {
$_smarty_tpl->tpl_vars['ACTION']->do_else = false;
?>
	            <?php if ($_smarty_tpl->tpl_vars['ACTION_NAME']->value == $_smarty_tpl->tpl_vars['ACTION_NAME_ACTIVE']->value) {?>	
					<td nowrap width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' style="text-align: center;" >
					<div  style="display: none" id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList']['Users'] && $_smarty_tpl->tpl_vars['ACTION_LABEL']->value != $_smarty_tpl->tpl_vars['MOD']->value['LBL_ACTION_ADMIN']) {?>
					<select DISABLED class="acl<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
" name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' id = 'act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
');" >
				   		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

					</select>
					<?php } else { ?>
                    <select class="acl<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
" name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' id = 'act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
');" >
                        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

                    </select>					
					<?php }?>
					</div>
					<div class="acl<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
"  id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</div>
					</td>
	            <?php }?>
	        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<?php
}
if ($_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else) {
?>
	          <td colspan="2">&nbsp;</td>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	
	</TR>
<?php } else { ?>
    <tr> <td colspan="2">No Actions Defined</td></tr>
<?php }?>
</TABLE>
<?php }
}
