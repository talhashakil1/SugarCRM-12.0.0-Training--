<?php
/* Smarty version 3.1.39, created on 2022-07-14 11:41:17
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/varchar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfba8ddaf633_59205426',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b5f74241be46152920287ad638fc58cb3e827dc' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/varchar.tpl',
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
function content_62cfba8ddaf633_59205426 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>


<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='default' id='default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
' maxlength='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vardef']->value['len'])===null||$tmp==='' ? 50 : $tmp);?>
'>
	<?php } else { ?>
		<input type='hidden' id='default' name='default' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>

	<?php }?>
	</td>
</tr>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MAX_SIZE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
		<input type='text' name='len' id='field_len' value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vardef']->value['len'])===null||$tmp==='' ? 25 : $tmp);?>
' onchange="forceRange(this,1,255);changeMaxLength(document.getElementById('default'),this.value);">
		<input type='hidden' id="orig_len" name='orig_len' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>
'>
		<?php if ($_smarty_tpl->tpl_vars['action']->value == "saveSugarField") {?>
		  <input type='hidden' name='customTypeValidate' id='customTypeValidate' value='<?php echo (($tmp = @$_smarty_tpl->tpl_vars['vardef']->value['len'])===null||$tmp==='' ? 25 : $tmp);?>
' 
		      onchange="if (parseInt(document.getElementById('field_len').value) < parseInt(document.getElementById('orig_len').value)) return confirm(SUGAR.language.get('ModuleBuilder', 'LBL_CONFIRM_LOWER_LENGTH')); return true;" > 
		<?php }?>
		<?php echo '<script'; ?>
>
		function forceRange(field, min, max){
			field.value = parseInt(field.value);
			if(field.value == 'NaN')field.value = max;
			if(field.value > max) field.value = max;
			if(field.value < min) field.value = min;
		}
		function changeMaxLength(field, length){
			field.maxLength = parseInt(length);
			field.value = field.value.substr(0, field.maxLength);
		}
		<?php echo '</script'; ?>
>
	<?php } else { ?>
		<input type='hidden' name='len' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['len'];?>

	<?php }?>
	</td>
</tr>
<?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
