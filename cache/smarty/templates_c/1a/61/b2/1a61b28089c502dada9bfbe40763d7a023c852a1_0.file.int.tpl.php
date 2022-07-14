<?php
/* Smarty version 3.1.39, created on 2022-07-14 11:41:22
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/int.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfba924e56a7_02335092',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a61b28089c502dada9bfbe40763d7a023c852a1' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/int.tpl',
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
function content_62cfba924e56a7_02335092 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
echo '<script'; ?>
>
formsWithFieldLogic=null;
<?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td><td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='default' id='int_default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
'>
		<?php if ((isset($_smarty_tpl->tpl_vars['field_range_value']->value))) {?>
            <?php echo '<script'; ?>
>addToValidateRange('popup_form', 'default', 'int', false, '<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
',<?php echo $_smarty_tpl->tpl_vars['field_range_value']->value['min'];?>
,<?php echo $_smarty_tpl->tpl_vars['field_range_value']->value['max'];?>
);<?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
>addToValidate('popup_form', 'default', 'int', false,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
' );<?php echo '</script'; ?>
>
        <?php }?>
	<?php } else { ?>
		<input type='hidden' name='default' id='int_default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MIN_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='min' id='int_min' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['validation']['min'];?>
'>
		<?php if ((isset($_smarty_tpl->tpl_vars['field_range_value']->value))) {?>
            <?php echo '<script'; ?>
>addToValidateRange('popup_form', 'min', 'int', false, '<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MIN_VALUE"),$_smarty_tpl);?>
',<?php echo $_smarty_tpl->tpl_vars['field_range_value']->value['min'];?>
,<?php echo $_smarty_tpl->tpl_vars['field_range_value']->value['max'];?>
);<?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
>addToValidate('popup_form', 'min', 'int', false,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MIN_VALUE"),$_smarty_tpl);?>
' );<?php echo '</script'; ?>
>
        <?php }?>
	<?php } else { ?>
		<input type='hidden' name='min' id='int_min' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['validation']['min'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['range']['min'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='max' id='int_max' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['validation']['max'];?>
'>
		<?php if ((isset($_smarty_tpl->tpl_vars['field_range_value']->value))) {?>
            <?php echo '<script'; ?>
>addToValidateRange('popup_form', 'max', 'int', false, '<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_VALUE"),$_smarty_tpl);?>
',<?php echo $_smarty_tpl->tpl_vars['field_range_value']->value['min'];?>
,<?php echo $_smarty_tpl->tpl_vars['field_range_value']->value['max'];?>
);<?php echo '</script'; ?>
>
        <?php } else { ?>
            <?php echo '<script'; ?>
>addToValidate('popup_form', 'max', 'int', false,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_VALUE"),$_smarty_tpl);?>
' );<?php echo '</script'; ?>
>
        <?php }?>
	<?php } else { ?>
		<input type='hidden' name='max' id='int_max' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['validation']['max'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['range']['max'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_SIZE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='len' id='int_len' value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vardef']->value['len'])===null||$tmp==='' ? 11 : $tmp);?>
'></td>
		<?php echo '<script'; ?>
>addToValidate('popup_form', 'len', 'int', false,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_SIZE"),$_smarty_tpl);?>
' );<?php echo '</script'; ?>
>
	<?php } else { ?>
		<input type='hidden' name='len' id='int_len' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>

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
if (!empty($_smarty_tpl->tpl_vars['vardef']->value['auto_increment'])) {?>
<tr id="autoinc_start_wrap" <?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['auto_increment'])) {?>style="display:none" <?php }?>>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_AUTOINC_NEXT"),$_smarty_tpl);?>
:</td>
    <td>
        <input type='hidden' name='auto_increment' id='auto_increment' value='true'>
		<input type='text' name='autoinc_next' id='autoinc_next' value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vardef']->value['autoinc_next'])===null||$tmp==='' ? 1 : $tmp);?>
' <?php if ($_smarty_tpl->tpl_vars['MB']->value) {?>disabled=1<?php }?>>
        <?php echo '<script'; ?>
>addToValidateMoreThan('popup_form', 'autoinc_next', 'int', false,'<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_AUTOINC_NEXT"),$_smarty_tpl);?>
', <?php echo (($tmp = @$_smarty_tpl->tpl_vars['vardef']->value['autoinc_next'])===null||$tmp==='' ? 1 : $tmp);?>
);<?php echo '</script'; ?>
>
        <input type='hidden' name='autoinc_val_changed' id='autoinc_val_changed' value='false'>
    </td>
</tr>
<?php }?>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_DISABLE_NUMBER_FORMAT"),$_smarty_tpl);?>
:</td>
    <td>
        <input type='checkbox' name='ext3' value=1 <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['disable_num_format'])) {?>checked<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?> />
        <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type='hidden' name='ext3' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['disable_num_format'];?>
'><?php }?>
    </td>
</tr>
<?php echo '<script'; ?>
>
	formsWithFieldLogic=new addToValidateFieldLogic('popup_form_id', 'int_min', 'int_max', 'int_default', 'int_len', 'int', 'Invalid Logic.');
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
