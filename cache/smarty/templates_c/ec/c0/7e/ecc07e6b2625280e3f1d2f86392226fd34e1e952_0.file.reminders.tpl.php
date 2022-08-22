<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:07
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Meetings/tpls/reminders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1cd363c115_02019809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ecc07e6b2625280e3f1d2f86392226fd34e1e952' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Meetings/tpls/reminders.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1cd363c115_02019809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>

	<?php if ($_smarty_tpl->tpl_vars['fields']->value['reminder_time']) {?>            	
            	
            	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_OPTIONS', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']);?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_OPTIONS', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['options']);?>	
            	
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['reminder_checked']['value']) {?>            		
            		<?php $_smarty_tpl->_assignInScope('REMINDER_TIME', -1);?>
            	<?php } else { ?>
            		<?php $_smarty_tpl->_assignInScope('REMINDER_TIME', $_smarty_tpl->tpl_vars['fields']->value['reminder_time']['value']);?>
            	<?php }?>
            	<?php if (!$_smarty_tpl->tpl_vars['fields']->value['email_reminder_checked']['value']) {?>            		
            		<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME', -1);?>
            	<?php } else { ?>
            		<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME', $_smarty_tpl->tpl_vars['fields']->value['email_reminder_time']['value']);?>
            	<?php }?>
	<?php }?>
	
	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_DISPLAY', "none");?>
	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_DISPLAY', "none");?>
	<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
            	<?php $_smarty_tpl->_assignInScope('REMINDER_CHECKED', "checked");?>
            	<?php $_smarty_tpl->_assignInScope('REMINDER_TIME_DISPLAY', "inline");?>	
	<?php }?>
        <?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_CHECKED', "checked");?>
            	<?php $_smarty_tpl->_assignInScope('EMAIL_REMINDER_TIME_DISPLAY', "inline");?>
        <?php }?>

<?php if ($_smarty_tpl->tpl_vars['view']->value == "EditView" || $_smarty_tpl->tpl_vars['view']->value == "QuickCreate" || $_smarty_tpl->tpl_vars['view']->value == "QuickEdit" || $_smarty_tpl->tpl_vars['view']->value == "wirelessedit") {?>
		<div>
		    	   	
		    	<input name="reminder_checked" type="hidden" value="0">
		    	<input name="reminder_checked" id="reminder_checked" onclick="toggleReminder(this,'reminder');" type="checkbox" class="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value;?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_POPUP'];?>
</div>
		    	<div id="reminder_list" style="display: <?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_DISPLAY']->value;?>
">
		    		<select tabindex="<?php echo $_smarty_tpl->tpl_vars['REMINDER_TABINDEX']->value;?>
" name="reminder_time">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['REMINDER_TIME']->value),$_smarty_tpl);?>

				</select>
		    	</div>
            	</div>
            	<div>
		    	
		   	<input name="email_reminder_checked" type="hidden" value="0">
		    	<input name="email_reminder_checked" id="email_reminder_checked" onclick="toggleReminder(this,'email_reminder');" type="checkbox" class="checkbox" value="1" <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value;?>
>
		    	<div style="display: inline-block; width: 111px;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_EMAIL_ALL_INVITEES'];?>
</div>
		    	<div id="email_reminder_list" style="display: <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_DISPLAY']->value;?>
">
		    		<select tabindex="<?php echo $_smarty_tpl->tpl_vars['REMINDER_TABINDEX']->value;?>
" name="email_reminder_time">
					<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_OPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value),$_smarty_tpl);?>

				</select>
		    	</div>
		</div>
            	<?php echo '<script'; ?>
 type="text/javascript">
			function toggleReminder(el,field){
				if(el.checked){
					document.getElementById(field + "_list").style.display = "inline";
				}else{
					document.getElementById(field + "_list").style.display = "none";
				}
			}
            	<?php echo '</script'; ?>
>
	<?php } else { ?>
		<div>			
			<input type="checkbox" disabled  <?php echo $_smarty_tpl->tpl_vars['REMINDER_CHECKED']->value;?>
>
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_POPUP'];?>

			<?php if ($_smarty_tpl->tpl_vars['REMINDER_TIME']->value != -1) {?>
				<?php echo $_smarty_tpl->tpl_vars['REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['REMINDER_TIME']->value];?>

			<?php }?>			
		</div>
		<div>			
			<input type="checkbox" disabled  <?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_CHECKED']->value;?>
>
			<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_EMAIL_ALL_INVITEES'];?>

			<?php if ($_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value != -1) {?>
				<?php echo $_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME_OPTIONS']->value[$_smarty_tpl->tpl_vars['EMAIL_REMINDER_TIME']->value];?>

			<?php }?>			
		</div>
	<?php }?>	
<?php }
}
