<?php
/* Smarty version 3.1.39, created on 2022-07-15 14:44:56
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/enum.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d13718933fa6_91851778',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4087d69509e4bfbcc13e1cef009eeebd13f40016' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/enum.tpl',
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
function content_62d13718933fa6_91851778 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.json.php','function'=>'smarty_modifier_json',),));
?>

 <?php $_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreTop.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_DROP_DOWN_LIST"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5 && empty($_smarty_tpl->tpl_vars['vardef']->value['function']) && (!(isset($_smarty_tpl->tpl_vars['vardef']->value['studio']['field']['options'])) || isTruthy($_smarty_tpl->tpl_vars['vardef']->value['studio']['field']['options']))) {?>
		<?php echo smarty_function_html_options(array('name'=>"options",'id'=>"options",'selected'=>$_smarty_tpl->tpl_vars['selected_dropdown']->value,'values'=>$_smarty_tpl->tpl_vars['dropdowns']->value,'output'=>$_smarty_tpl->tpl_vars['dropdowns']->value,'onChange'=>"ModuleBuilder.dropdownChanged(this.value);"),$_smarty_tpl);
if (!$_smarty_tpl->tpl_vars['uneditable']->value) {?><br><input type='button' value='<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_BTN_EDIT"),$_smarty_tpl);?>
' class='button' onclick="ModuleBuilder.moduleDropDown(this.form.options.value, this.form.options.value);">&nbsp;<input type='button' value='<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_BTN_ADD"),$_smarty_tpl);?>
' class='button' onclick="ModuleBuilder.moduleDropDown('', this.form.name.value);"><?php }?>
	<?php } else { ?>
		<input type='hidden' name='options' value='<?php echo $_smarty_tpl->tpl_vars['selected_dropdown']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['selected_dropdown']->value;?>

	<?php }?>
	</td>
</tr>
<?php if (!(isset($_smarty_tpl->tpl_vars['vardef']->value['studio']['default'])) || isTruthy($_smarty_tpl->tpl_vars['vardef']->value['studio']['default'])) {?>
<tr>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DEFAULT_VALUE"),$_smarty_tpl);?>
:</td>
	<td>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5 && empty($_smarty_tpl->tpl_vars['vardef']->value['function'])) {?>
		<?php echo smarty_function_html_options(array('name'=>"default[]",'id'=>"default[]",'selected'=>$_smarty_tpl->tpl_vars['selected_options']->value,'options'=>$_smarty_tpl->tpl_vars['default_dropdowns']->value,'multiple'=>$_smarty_tpl->tpl_vars['multi']->value),$_smarty_tpl);?>

	<?php } else { ?>
		<input type='hidden' name='default[]' id='default[]' value='<?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>
'><?php echo $_smarty_tpl->tpl_vars['vardef']->value['default'];?>

	<?php }?>
	</td>
</tr>
<?php }
if (!$_smarty_tpl->tpl_vars['radio']->value && (!(isset($_smarty_tpl->tpl_vars['vardef']->value['studio']['field']['options'])) || isTruthy($_smarty_tpl->tpl_vars['vardef']->value['studio']['field']['options']))) {?>
<tr id='depTypeRow' class="toggleDep"><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_DEPENDENT"),$_smarty_tpl);?>
:</td>
    <td>
        <select id="depTypeSelect" onchange="ModuleBuilder.toggleParent(this.value == 'parent'); ModuleBuilder.toggleDF(this.value == 'formula'); ">
            <option label="<?php echo smarty_function_sugar_translate(array('module'=>"ModuleBuilder",'label'=>"LBL_NONE"),$_smarty_tpl);?>
" value=""><?php echo smarty_function_sugar_translate(array('module'=>"ModuleBuilder",'label'=>"LBL_NONE"),$_smarty_tpl);?>
</option>
            <?php if (!empty($_smarty_tpl->tpl_vars['module_dd_fields']->value)) {?>
                <option label="<?php echo smarty_function_sugar_translate(array('module'=>"ModuleBuilder",'label'=>"LBL_PARENT_DROPDOWN"),$_smarty_tpl);?>
" value="parent"><?php echo smarty_function_sugar_translate(array('module'=>"ModuleBuilder",'label'=>"LBL_PARENT_DROPDOWN"),$_smarty_tpl);?>
</option>
            <?php }?>
            <option label="<?php echo smarty_function_sugar_translate(array('module'=>"ModuleBuilder",'label'=>"LBL_FORMULA"),$_smarty_tpl);?>
" value="formula"><?php echo smarty_function_sugar_translate(array('module'=>"ModuleBuilder",'label'=>"LBL_FORMULA"),$_smarty_tpl);?>
</option>
        </select>
        <?php echo '<script'; ?>
>
			//For enums, don't use the formal dependent checkbox, use this dependency type selector
            $('#depCheckboxRow').hide();
            ModuleBuilder.toggleParent(<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['visibility_grid'])) {?>false<?php } else { ?>true<?php }?>);
            <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['visibility_grid'])) {?>
                $('#depTypeSelect').val("parent");
            <?php } elseif (!empty($_smarty_tpl->tpl_vars['vardef']->value['dependency'])) {?>
                $('#depTypeSelect').val("formula");
            <?php }?>
		<?php echo '</script'; ?>
>
                <input type="hidden" id="customTypeValidate" onchange="return ModuleBuilder.validateDD()" />
    </td>
</tr>
<tr id='visGridRow' <?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['visibility_grid'])) {?>style="display:none"<?php }?> class="toggleDep">
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_PARENT_DROPDOWN"),$_smarty_tpl);?>
:</td>
	<td>
        <?php echo smarty_function_html_options(array('name'=>"parent_dd",'id'=>"parent_dd",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['visibility_grid']['trigger'],'options'=>$_smarty_tpl->tpl_vars['module_dd_fields']->value),$_smarty_tpl);?>

         <input type="hidden" name="visibility_grid" id="visibility_grid" value='<?php echo smarty_modifier_json($_smarty_tpl->tpl_vars['vardef']->value['visibility_grid']);?>
'/>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
        <button onclick="ModuleBuilder.editVisibilityGrid('visibility_grid', YAHOO.util.Dom.get('parent_dd').value, YAHOO.util.Dom.get('options').value)">
            <?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_EDIT_VIS"),$_smarty_tpl);?>

        </button>
	<?php }?>
	</td>
</tr>
<tr id='visFormulaRow' <?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['dependency'])) {?>style="display:none"<?php }?>><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_VISIBLE_IF"),$_smarty_tpl);?>
:</td>
    <td>
        <input id="dependency" type="hidden" name="dependency" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vardef']->value['dependency'], ENT_QUOTES, 'UTF-8', true);?>
" onchange="document.getElementById('dependency_display').value = this.value"/>
        <input id="dependency_display" type="text" name="dependency_display" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vardef']->value['dependency'], ENT_QUOTES, 'UTF-8', true);?>
" readonly="1"/>
        <input class="button" type=button name="editFormula" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_BTN_EDIT_FORMULA"),$_smarty_tpl);?>
"
               onclick="ModuleBuilder.moduleLoadFormula(YAHOO.util.Dom.get('dependency').value, 'dependency', 'boolean')"/>
    </td>
</tr>
<?php }
$_smarty_tpl->_subTemplateRender("file:modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
