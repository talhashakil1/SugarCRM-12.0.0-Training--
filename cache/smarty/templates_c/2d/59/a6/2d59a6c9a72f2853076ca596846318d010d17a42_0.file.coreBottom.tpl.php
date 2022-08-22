<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:36:54
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff21765bb632_71329709',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d59a6c9a72f2853076ca596846318d010d17a42' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/DynamicFields/templates/Fields/Forms/coreDependent.tpl' => 1,
  ),
),false)) {
function content_62ff21765bb632_71329709 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>

<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5 && $_smarty_tpl->tpl_vars['show_fts']->value) {?>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_FTS"),$_smarty_tpl);?>
:</td>
    <td>
        <?php echo smarty_function_html_options(array('name'=>"full_text_search[enabled]",'id'=>"fts_field_config",'selected'=>$_smarty_tpl->tpl_vars['fts_field_config_selected']->value,'options'=>$_smarty_tpl->tpl_vars['fts_field_config']->value,'onchange'=>"ModuleBuilder.toggleBoost()"),$_smarty_tpl);?>

        <img border="0" class="inlineHelpTip" alt="Information" src="themes/Sugar/images/helpInline.png" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_FTS_FIELD_CONFIG'];?>
','','' );">
    </td>
</tr>
<tr id="ftsFieldBoostRow" <?php if ($_smarty_tpl->tpl_vars['fts_field_config_selected']->value < 2) {?>style="display:none"<?php }?>>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_FTS_BOOST"),$_smarty_tpl);?>
:</td>
    <td>
        <input type="text" name="full_text_search[boost]" id="fts_field_boost" value="<?php echo $_smarty_tpl->tpl_vars['fts_field_boost_value']->value;?>
" />
        <img border="0" class="inlineHelpTip" alt="Information" src="themes/Sugar/images/helpInline.png" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_FTS_FIELD_BOOST'];?>
','','' );">
    </td>
</tr>
<?php }?>

<?php if (!$_smarty_tpl->tpl_vars['hideMassUpdate']->value && !$_smarty_tpl->tpl_vars['vardef']->value['hidemassupdate']) {?>
        <tr id="massUpdateRow" <?php if ($_smarty_tpl->tpl_vars['vardef']->value['readonly']) {?>style="display: none"<?php }?>>
        <td class='mbLBL' ><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_MASS_UPDATE"),$_smarty_tpl);?>
:</td>
        <td>
            <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
                <input type="checkbox" id="massupdate"  name="massupdate" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['massupdate'])) {?>checked<?php }?> onclick="ModuleBuilder.handleFieldInteractions('massupdate')"/>
            <?php } else { ?>
                <input type="checkbox" id="massupdate"  name="massupdate" value="1" disabled <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['massupdate'])) {?>checked<?php }?>/>
            <?php }?>
        </td>
    </tr>
<?php }?>

<?php $_smarty_tpl->_subTemplateRender('file:modules/DynamicFields/templates/Fields/Forms/coreDependent.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<tr>
<?php if (!$_smarty_tpl->tpl_vars['hideReportable']->value) {?>
<td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_REPORTABLE"),$_smarty_tpl);?>
:</td>
<td>
	<input type="checkbox" name="reportableCheckbox" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['reportable'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?> 
	onClick="if(this.checked) document.getElementById('reportable').value=1; else document.getElementById('reportable').value=0;"/>
	<input type="hidden" name="reportable" id="reportable" value="<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['reportable'])) {
echo $_smarty_tpl->tpl_vars['vardef']->value['reportable'];
} else { ?>0<?php }?>">
</td>
</tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['auditable']->value && !in_array($_smarty_tpl->tpl_vars['vardef']->value['type'],array('parent','html'))) {?>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_AUDIT"),$_smarty_tpl);?>
:</td>
    <td>
        <?php if ($_smarty_tpl->tpl_vars['is_relationship_field']->value) {?>
            <input id="auditedCheckbox" type="checkbox" name="audited" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['relationship_field_audited']->value) || !empty($_smarty_tpl->tpl_vars['vardef']->value['pii'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/>
            <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>
                <input type="hidden" name="audited" value="<?php echo $_smarty_tpl->tpl_vars['relationship_field_audited']->value;?>
">
            <?php }?>
        <?php } else { ?>
            <input id="auditedCheckbox" type="checkbox" name="audited" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['audited']) || !empty($_smarty_tpl->tpl_vars['vardef']->value['pii'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/>
            <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>
                <input type="hidden" name="audited" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['audited'];?>
">
            <?php }?>
        <?php }?>
    </td>
</tr>
<?php if (!in_array($_smarty_tpl->tpl_vars['vardef']->value['type'],array('bool','image','relate'))) {?>
<tr>
    <td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_PII"),$_smarty_tpl);?>
:</td>
    <td>
        <input id="piiCheckbox"  type="checkbox" onclick="ModuleBuilder.enforceAuditPii()" name="pii" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['pii'])) {?>CHECKED<?php }?> <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?>disabled<?php }?>/><?php if ($_smarty_tpl->tpl_vars['hideLevel']->value > 5) {?><input type="hidden" name="pii" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['pii'];?>
"><?php }?>
        <img border="0" class="inlineHelpTip" alt="Information" src="themes/Sugar/images/helpInline.png" onclick="return SUGAR.util.showHelpTips(this,'<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_PII'];?>
','','' );">
    </td>
</tr>
<?php }
}?>

<?php if (!$_smarty_tpl->tpl_vars['hideImportable']->value && (!(isset($_smarty_tpl->tpl_vars['vardef']->value['studio']['importable'])) || isTruthy($_smarty_tpl->tpl_vars['vardef']->value['studio']['importable']))) {?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_IMPORTABLE"),$_smarty_tpl);?>
:</td><td>
    <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
        <?php echo smarty_function_html_options(array('name'=>"importable",'id'=>"importable",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['importable'],'options'=>$_smarty_tpl->tpl_vars['importable_options']->value),$_smarty_tpl);?>

        <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_IMPORTABLE'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

    <?php } else { ?>
        <?php if ((isset($_smarty_tpl->tpl_vars['vardef']->value['importable']))) {
echo $_smarty_tpl->tpl_vars['importable_options']->value[$_smarty_tpl->tpl_vars['vardef']->value['importable']];?>

        <?php } else {
echo $_smarty_tpl->tpl_vars['importable_options']->value['true'];
}?>
    <?php }?>
</td></tr>
<?php }
if (!$_smarty_tpl->tpl_vars['hideDuplicatable']->value && (!(isset($_smarty_tpl->tpl_vars['vardef']->value['studio']['duplicate_merge'])) || isTruthy($_smarty_tpl->tpl_vars['vardef']->value['studio']['duplicate_merge']))) {?>
<tr><td class='mbLBL'><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DUPLICATE_MERGE"),$_smarty_tpl);?>
:</td><td>
<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
    <?php echo smarty_function_html_options(array('name'=>"duplicate_merge",'id'=>"duplicate_merge",'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['duplicate_merge_dom_value'],'options'=>$_smarty_tpl->tpl_vars['duplicate_merge_options']->value),$_smarty_tpl);?>

    <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_DUPLICATE_MERGE'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

<?php } else { ?>
    <?php if ((isset($_smarty_tpl->tpl_vars['vardef']->value['duplicate_merge_dom_value']))) {
echo $_smarty_tpl->tpl_vars['vardef']->value['duplicate_merge_dom_value'];?>

    <?php } else {
echo $_smarty_tpl->tpl_vars['duplicate_merge_options']->value[0];
}
}?>
</td></tr>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['showCalculationVisible']->value) {?>
    <tr>
        <td class='mbLBL'>
            <?php echo smarty_function_sugar_translate(array('module'=>'DynamicFields','label'=>'LBL_CALCULATION_VISIBLE'),$_smarty_tpl);?>
:
        </td>
        <td>
            <input id="calculation_visible" type="checkbox" name="calculation_visible" value="1" <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['calculation_visible'])) {?>checked<?php }?> />
        </td>
    </tr>
<?php }?>

</table>

<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['group'])) {?>
    <input type="hidden" name="group" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['group'];?>
">
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['options']) && !empty($_smarty_tpl->tpl_vars['vardef']->value['type']) && $_smarty_tpl->tpl_vars['vardef']->value['type'] == 'parent_type') {?>
    <input type="hidden" name="options" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['options'];?>
">
<?php }?>

<?php echo '<script'; ?>
>
    ModuleBuilder.enforceAuditPii();
<?php echo '</script'; ?>
>
<?php }
}
