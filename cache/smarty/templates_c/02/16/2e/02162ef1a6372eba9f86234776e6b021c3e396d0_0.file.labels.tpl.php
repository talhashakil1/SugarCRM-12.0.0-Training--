<?php
/* Smarty version 3.1.39, created on 2022-07-14 12:28:40
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/labels.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfc5a82540e2_09547955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '02162ef1a6372eba9f86234776e6b021c3e396d0' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/labels.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfc5a82540e2_09547955 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<form name = 'editlabels' id = 'editlabels' onsubmit='return false;'>
    <?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

    <input type='hidden' name='module' value='ModuleBuilder'>
    <input type='hidden' name='action' value='saveLabels'>
    <input type='hidden' name='view_module' value='<?php echo $_smarty_tpl->tpl_vars['view_module']->value;?>
'>
    <?php if ($_smarty_tpl->tpl_vars['view_package']->value) {?>
        <input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
'>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['inPropertiesTab']->value) {?>
        <input type='hidden' name='editLayout' value='<?php echo $_smarty_tpl->tpl_vars['editLayout']->value;?>
'>
    <?php } elseif ($_smarty_tpl->tpl_vars['mb']->value) {?>
        <input class='button' name = 'saveBtn' id = "saveBtn" type='button' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVE'];?>
' onclick='ModuleBuilder.handleSave("editlabels" );'>
    <?php } else { ?>
        <input class='button' name = 'publishBtn' id = "publishBtn" type='button' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVEPUBLISH'];?>
' onclick='ModuleBuilder.handleSave("editlabels" );'>
        <input class='button' name = 'renameModBtn' id = "renameModBtn" type='button' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_RENAME_MODULE'];?>
'
               onclick='document.location.href = "index.php?action=wizard&module=Studio&wizard=StudioWizard&option=RenameTabs"'>
    <?php }?>
    <div style="float: right">
        <?php echo smarty_function_html_options(array('name'=>'labels','options'=>$_smarty_tpl->tpl_vars['labels_choice']->value,'selected'=>$_smarty_tpl->tpl_vars['labels_current']->value,'onchange'=>'this.form.action.value="EditLabels";ModuleBuilder.handleSave("editlabels")'),$_smarty_tpl);?>

    </div>
    <hr >
    <input type='hidden' name='to_pdf' value='1'>

    <table class='mbLBL'>
        <thead>
            <tr>
                <th class="labels-cell align-right">
                    <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LANGUAGE'];?>

                </th>
                <th class="labels-cell align-left">
                    <?php echo smarty_function_html_options(array('name'=>'selected_lang','options'=>$_smarty_tpl->tpl_vars['available_languages']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_lang']->value,'onchange'=>'this.form.action.value="EditLabels";ModuleBuilder.handleSave("editlabels")'),$_smarty_tpl);?>

                </th>

                <?php if ($_smarty_tpl->tpl_vars['showCompareLanguage']->value) {?>
                    <th class="labels-cell align-left">
                        <?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_COMPARISON_LANGUAGE'];?>
:
                    </th>
                    <th class="labels-cell align-left">
                        <?php echo smarty_function_html_options(array('name'=>'comparison_lang','options'=>$_smarty_tpl->tpl_vars['availableCompareLanguages']->value,'selected'=>$_smarty_tpl->tpl_vars['comparisonLang']->value,'onchange'=>'this.form.action.value="EditLabels";ModuleBuilder.handleSave("editlabels")'),$_smarty_tpl);?>

                    </th>
                <?php }?>
            </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MOD']->value, 'label', false, 'key');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
                <tr>
                    <td class="labels-cell align-right">
                        <?php echo $_smarty_tpl->tpl_vars['key']->value;?>
:
                    </td>
                    <td class="labels-cell align-left">
                        <input type='hidden' name='label_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' id='label_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' value='no_change'><input id='input_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
' onchange='document.getElementById("label_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
").value = this.value; ModuleBuilder.state.markAsDirty();' value='<?php echo $_smarty_tpl->tpl_vars['label']->value;?>
' size='60'>
                    </td>

                    <?php if ($_smarty_tpl->tpl_vars['showCompareLanguage']->value) {?>
                        <td class="labels-cell align-left">
                            <?php if ($_smarty_tpl->tpl_vars['showCompareLanguage']->value && $_smarty_tpl->tpl_vars['matchingLabels']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                <?php echo $_smarty_tpl->tpl_vars['matchingLabelHelp']->value;?>

                            <?php }?>
                        </td>
                        <td class="labels-cell align-left">
                            <?php if ($_smarty_tpl->tpl_vars['comparisonLangStrings']->value[$_smarty_tpl->tpl_vars['key']->value]) {?>
                                <?php echo $_smarty_tpl->tpl_vars['comparisonLangStrings']->value[$_smarty_tpl->tpl_vars['key']->value];?>

                            <?php }?>
                        </td>
                    <?php }?>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>

    <?php if ($_smarty_tpl->tpl_vars['inPropertiesTab']->value) {?>
        <input class='button' type='button' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
' onclick="ModuleBuilder.hidePropertiesTab();">
    <?php }?>
</form>
<?php echo '<script'; ?>
>
    //ModuleBuilder.helpRegisterByID('editlabels', 'a');
    ModuleBuilder.helpRegister('editlabels');
    ModuleBuilder.helpSetup('labelsHelp','default');
<?php echo '</script'; ?>
>
<?php }
}
