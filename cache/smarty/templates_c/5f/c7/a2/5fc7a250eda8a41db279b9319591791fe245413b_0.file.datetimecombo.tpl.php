<?php
/* Smarty version 3.1.39, created on 2022-07-14 11:48:41
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/datetimecombo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfbc491f0443_00275940',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc7a250eda8a41db279b9319591791fe245413b' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/datetimecombo.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl' => 1,
    'file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' => 1,
  ),
),false)) {
function content_62cfbc491f0443_00275940 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>

<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
echo '<script'; ?>
 language="Javascript">
	function timeValueUpdate(){
		var fieldname = 'defaultTime';
		var timeseparator = ':';
		var newtime = '';
		
		id = fieldname + '_hours';
		h = window.document.getElementById(id).value;
		id = fieldname + '_minutes';
		m = window.document.getElementById(id).value;
		
		id = fieldname + '_meridiem';
		ampm = '';
		if(document.getElementById(id)) {
		   ampm = document.getElementById(id).value;
		}
		newtime = h + timeseparator + m + ampm;
		document.getElementById(fieldname).value = newtime;
		
	}
<?php echo '</script'; ?>
>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<?php echo smarty_function_html_options(array('name'=>'defaultDate','id'=>'defaultDate_date','options'=>$_smarty_tpl->tpl_vars['default_values']->value,'selected'=>$_smarty_tpl->tpl_vars['default_date']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<input type='hidden' name='defaultDate' value='<?php echo $_smarty_tpl->tpl_vars['default_date']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['default_date']->value;?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'></td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		  <div>
			<?php echo smarty_function_html_options(array('name'=>'defaultHours','size'=>'1','id'=>'defaultTime_hours','options'=>$_smarty_tpl->tpl_vars['default_hours_values']->value,'onchange'=>"timeValueUpdate();",'selected'=>$_smarty_tpl->tpl_vars['default_hours']->value),$_smarty_tpl);?>

		   :
		 <?php echo smarty_function_html_options(array('name'=>'defaultMinutes','size'=>'1','id'=>'defaultTime_minutes','options'=>$_smarty_tpl->tpl_vars['default_minutes_values']->value,'onchange'=>"timeValueUpdate();",'selected'=>$_smarty_tpl->tpl_vars['default_minutes']->value),$_smarty_tpl);?>

		 <?php if ($_smarty_tpl->tpl_vars['show_meridiem']->value === true) {?>
		 <?php echo smarty_function_html_options(array('name'=>'defaultMeridiem','size'=>'1','id'=>'defaultTime_meridiem','options'=>$_smarty_tpl->tpl_vars['default_meridiem_values']->value,'onchange'=>"timeValueUpdate();",'selected'=>$_smarty_tpl->tpl_vars['default_meridiem']->value),$_smarty_tpl);?>

		 <?php }?>
		</div>
		<input type='hidden' name='defaultTime' id='defaultTime' value="<?php echo $_smarty_tpl->tpl_vars['defaultTime']->value;?>
">
	<?php } else { ?>
		<input type='hidden' name='defaultTime' id='defaultTime' value='<?php echo $_smarty_tpl->tpl_vars['defaultTime']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['defaultTime']->value;?>

	<?php }?>
	</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['range_search_option_enabled']->value) {?>
<tr>	
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_ENABLE_RANGE_SEARCH"),$_smarty_tpl);?>
:</td>
    <td>
        <input type='checkbox' name='enable_range_search' value=1 <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['enable_range_search'])) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?> />
        <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type='hidden' name='enable_range_search' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['enable_range_search'];?>
'><?php }?>
    </td>	
</tr>
<?php }
echo '<script'; ?>
>
addToValidateBinaryDependency('popup_form',"defaultDate_date", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DATE'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OR'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS'];?>
" ,"defaultTime_hours");
addToValidateBinaryDependency('popup_form',"defaultTime_hours", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OR'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES'];?>
" ,"defaultTime_minutes");
addToValidateBinaryDependency('popup_form', "defaultTime_minutes", 'alpha', false, "<?php echo $_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_OR'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM'];?>
","defaultTime_meridiem");
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
