<?php
/* Smarty version 3.1.39, created on 2022-07-15 14:44:56
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/coreDependent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d13718972189_83746821',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '35e458f232e25f17ca6ecdec55f095db15dbfaf4' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/coreDependent.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d13718972189_83746821 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
if ($_smarty_tpl->tpl_vars['vardef']->value['type'] != 'enum' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'address' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'multienum' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'radioenum' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'html' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'relate' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'url' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'iframe' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'parent' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'image' && $_smarty_tpl->tpl_vars['vardef']->value['type'] != 'autoincrement' && empty($_smarty_tpl->tpl_vars['vardef']->value['function']) && (!(isset($_smarty_tpl->tpl_vars['vardef']->value['studio']['calculated'])) || $_smarty_tpl->tpl_vars['vardef']->value['studio']['calculated'] != false)) {?>

<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_CALCULATED"),$_smarty_tpl);?>
:</td>
    <td style="line-height:1em"><input type="checkbox" name="calculated" id="calculated" value="1" onclick ="ModuleBuilder.toggleCF()"
        <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['calculated']) && !empty($_smarty_tpl->tpl_vars['vardef']->value['formula'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/>
		<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>
            <input type="hidden" name="calculated" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['calculated'];?>
">
        <?php }?>
		<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_CALCULATED'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

		<input type="hidden" name="enforced" id="enforced" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['enforced'];?>
">
    </td>
</tr>
<tr id='formulaRow' <?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['formula'])) {?>style="display:none"<?php }?>>
	<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_FORMULA"),$_smarty_tpl);?>
:</td>
    <td>
        <input id="formula" type="hidden" name="formula" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['formula'];?>
" onchange="document.getElementById('formula_display').value = this.value"/>
        <input id="formula_display" type="text" name="formula_display" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['formula'];?>
" readonly="1"/>
	    <input type="button" class="button"  name="editFormula" style="margin-top: -2px"
		      value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_BTN_EDIT_FORMULA"),$_smarty_tpl);?>
"
            onclick="ModuleBuilder.moduleLoadFormula(YAHOO.util.Dom.get('formula').value, 'formula', '<?php echo $_smarty_tpl->tpl_vars['calcFieldType']->value;?>
')"/>
    </td>
</tr>
<?php }
if ($_smarty_tpl->tpl_vars['vardef']->value['type'] != 'address' && !$_smarty_tpl->tpl_vars['hideDependent']->value) {?>
<tr id='depCheckboxRow'><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_DEPENDENT"),$_smarty_tpl);?>
:</td>
    <td><input type="checkbox" name="dependent" id="dependent" value="1" onclick ="ModuleBuilder.toggleDF(null, '#popup_form_id .toggleDep')"
        <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['dependency'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/>
        <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_DEPENDENT'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

    </td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['vardef']->value['type'] !== 'enum' && $_smarty_tpl->tpl_vars['vardef']->value['type'] !== 'multienum') {?>
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
}
if ($_smarty_tpl->tpl_vars['vardef']->value['type'] != 'bool' && !$_smarty_tpl->tpl_vars['hideRequired']->value) {?>
    <tr>
        <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_REQUIRED_OPTION"),$_smarty_tpl);?>
:</td>
        <td>
            <input type="checkbox" name="required" id="required" value="1" onclick ="ModuleBuilder.toggleRequiredFormula()"
                   <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['required'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/>
            <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type="hidden" name="required" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['required'];?>
"><?php }?>
            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_REQUIRED'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

        </td>
    </tr>
    <tr id='requiredFormulaRow' <?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['required'])) {?>style="display:none"<?php }?>>
        <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_REQUIRED_IF"),$_smarty_tpl);?>
:</td>
        <td>
            <input id="required_formula" type="hidden" name="required_formula"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vardef']->value['required_formula'], ENT_QUOTES, 'UTF-8', true);?>
"
                   onchange="document.getElementById('required_formula_display').value = this.value"/>
            <input id="required_formula_display" type="text" name="required_formula_display"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vardef']->value['required_formula'], ENT_QUOTES, 'UTF-8', true);?>
"
                   readonly="1"/>
            <input class="button" type=button name="editFormula" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_BTN_EDIT_FORMULA"),$_smarty_tpl);?>
"
                   onclick="ModuleBuilder.moduleLoadFormula(YAHOO.util.Dom.get('required_formula').value, 'required_formula', 'boolean')"/>
        </td>
    </tr>
<?php }
if (!$_smarty_tpl->tpl_vars['hideReadOnly']->value) {?>
    <tr id='readonlyRow' <?php if ($_smarty_tpl->tpl_vars['vardef']->value['calculated'] || $_smarty_tpl->tpl_vars['vardef']->value['massupdate']) {?>style="display:none"<?php }?>>
        <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_READONLY_OPTION"),$_smarty_tpl);?>
:</td>
        <td>
            <input type="checkbox" name="readonly" id="readonly" value="1" onclick="ModuleBuilder.handleFieldInteractions('readonly')"
                   <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['readonly'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/>
            <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type="hidden" name="readonly" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['readonly'];?>
"><?php }?>
            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_READONLY'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

        </td>
    </tr>
    <tr id='readonlyFormulaRow' <?php if (!$_smarty_tpl->tpl_vars['vardef']->value['readonly'] || $_smarty_tpl->tpl_vars['vardef']->value['calculated'] || $_smarty_tpl->tpl_vars['vardef']->value['massupdate']) {?>style="display:none"<?php }?>>
        <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"LBL_READONLY_IF"),$_smarty_tpl);?>
:</td>
        <td>
            <input id="readonly_formula" type="hidden" name="readonly_formula"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vardef']->value['readonly_formula'], ENT_QUOTES, 'UTF-8', true);?>
"
                   onchange="document.getElementById('readonly_formula_display').value = this.value"/>
            <input id="readonly_formula_display" type="text" name="readonly_formula_display"
                   value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['vardef']->value['readonly_formula'], ENT_QUOTES, 'UTF-8', true);?>
"
                   readonly="1"/>
            <input class="button" type=button name="editFormula" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_BTN_EDIT_FORMULA"),$_smarty_tpl);?>
"
                   onclick="ModuleBuilder.moduleLoadFormula(YAHOO.util.Dom.get('readonly_formula').value, 'readonly_formula', 'boolean')"/>
        </td>
    </tr>
<?php }
}
}
