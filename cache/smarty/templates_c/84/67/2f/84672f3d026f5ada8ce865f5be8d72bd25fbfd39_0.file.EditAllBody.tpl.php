<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:20:33
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/EditAllBody.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dea10b5af3_65085048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '84672f3d026f5ada8ce865f5be8d72bd25fbfd39' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ACLRoles/EditAllBody.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dea10b5af3_65085048 (Smarty_Internal_Template $_smarty_tpl) {
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
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " id="SAVE_HEADER"> &nbsp;
<input id="ACLROLE_CANCEL_BUTTON" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"   class='button' accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" type='button' name='save' value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 " class='button' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "All");'>
</p>
<p>
</p>
<TABLE width='100%' class='detail view' border='0' cellpadding=0 cellspacing = 1  >
<TR id="ACLEditView_Access_Header">
<td id="ACLEditView_Access_Header_category"></td>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
?>
	<td align='center' id="ACLEditView_Access_Header_<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
"><div align='center'><b><?php echo $_smarty_tpl->tpl_vars['ACTION_LABEL']->value;?>
</b></div></td>
<?php
}
if ($_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else) {
?>

          <td colspan="2">&nbsp;</td>

<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</TR>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIES']->value, 'TYPES', false, 'CATEGORY_NAME');
$_smarty_tpl->tpl_vars['TYPES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value => $_smarty_tpl->tpl_vars['TYPES']->value) {
$_smarty_tpl->tpl_vars['TYPES']->do_else = false;
?>
	<TR id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
">
	<td nowrap width='1%' id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
_category"><b>
	<?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == 'Users') {?>
	   <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_NAME_FOR_ROLE'];?>

	<?php } elseif (!empty($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value])) {?>
	   <?php echo $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value];?>

	<?php } else { ?>
        <?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>

	<?php }?>
	</b></td>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ACTION_NAMES']->value, 'ACTION_LABEL', false, 'ACTION_NAME');
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ACTION_NAME']->value => $_smarty_tpl->tpl_vars['ACTION_LABEL']->value) {
$_smarty_tpl->tpl_vars['ACTION_LABEL']->do_else = false;
?>
		<?php $_smarty_tpl->_assignInScope('ACTION_FIND', 'false');?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TYPES']->value, 'ACTIONS');
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
%' style="text-align: center;" id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
">
					<div  style="display: none" id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
">
					<?php if ($_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList'][$_smarty_tpl->tpl_vars['CATEGORY_NAME']->value] == $_smarty_tpl->tpl_vars['APP_LIST']->value['moduleList']['Users'] && $_smarty_tpl->tpl_vars['ACTION_LABEL']->value != $_smarty_tpl->tpl_vars['MOD']->value['LBL_ACTION_ADMIN']) {?>
					<select DISABLED name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' id = 'act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
');" >
                    <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

                    </select>
					<?php } else { ?>
					<select name='act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' id = 'act_guid<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
' onblur="document.getElementById('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link').innerHTML=this.options[this.selectedIndex].text; aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
');" >
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['ACTION']->value['accessOptions'],'selected'=>$_smarty_tpl->tpl_vars['ACTION']->value['aclaccess']),$_smarty_tpl);?>

					</select>
					<?php }?>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['ACTION']->value['accessLabel'] == 'dev' || $_smarty_tpl->tpl_vars['ACTION']->value['accessLabel'] == 'admin_dev') {?>
					   <div class="aclAdmin"  id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</div>
					<?php } else { ?>
                       <div class="acl<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
"  id="<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
link" onclick="aclviewer.toggleDisplay('<?php echo $_smarty_tpl->tpl_vars['ACTION']->value['id'];?>
')"><?php echo $_smarty_tpl->tpl_vars['ACTION']->value['accessName'];?>
</div>
                    <?php }?>
					</td>
					<?php $_smarty_tpl->_assignInScope('ACTION_FIND', 'true');?>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php if ($_smarty_tpl->tpl_vars['ACTION_FIND']->value == 'false') {?>
			<td nowrap width='<?php echo $_smarty_tpl->tpl_vars['TDWIDTH']->value;?>
%' style="text-align: center;" id="ACLEditView_Access_<?php echo $_smarty_tpl->tpl_vars['CATEGORY_NAME']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['ACTION_NAME']->value;?>
">
			<div><font color='red'>N/A</font></div>
			</td>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</TR>
<?php
}
if ($_smarty_tpl->tpl_vars['TYPES']->do_else) {
?>
    <tr> <td colspan="2">No Actions Defined</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</TABLE>
<div style="padding-top:10px;">
&nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" class="button" onclick="this.form.action.value='Save';aclviewer.save('ACLEditView');return false;" type="button" name="button" value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
  " id="SAVE_FOOTER"> &nbsp;
<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
"   class='button' type='button' name='save' value="  <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
 " class='button' onclick='aclviewer.view("<?php echo $_smarty_tpl->tpl_vars['ROLE']->value['id'];?>
", "All");'>
</div>
</form>
<?php }
}
