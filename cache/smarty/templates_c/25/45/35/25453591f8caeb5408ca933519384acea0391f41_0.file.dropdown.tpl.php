<?php
/* Smarty version 3.1.39, created on 2022-07-14 12:09:03
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/MBModule/dropdown.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfc10f59fe55_64042102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25453591f8caeb5408ca933519384acea0391f41' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/MBModule/dropdown.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfc10f59fe55_64042102 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),));
?>
<div>
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/tpls/ListEditor.css'),$_smarty_tpl);?>
"></link>
    <link rel="stylesheet" type="text/css"
          href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/tpls/MBModule/dropdown.css'),$_smarty_tpl);?>
"></link>
    <form name='dropdown_form' onsubmit="return false">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

        <input type='hidden' name='module' value='ModuleBuilder'>
        <input type='hidden' name='action' value='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
'>
        <input type='hidden' name='to_pdf' value='true'>
        <input type='hidden' name='view_module' value='<?php echo $_smarty_tpl->tpl_vars['module_name']->value;?>
'>
        <input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['package_name']->value;?>
'>
        <input type='hidden' id='list_value' name='list_value' value=''>
                <?php if (($_smarty_tpl->tpl_vars['fromNewField']->value)) {?>
            <input type='hidden' name='is_new' value='1'>
        <?php }?>
        <?php if (($_smarty_tpl->tpl_vars['refreshTree']->value)) {?>
            <input type='hidden' name='refreshTree' value='1'>
        <?php }?>
        <input type="hidden" name="new" value="<?php echo intval($_smarty_tpl->tpl_vars['new']->value);?>
">
        <?php if ($_smarty_tpl->tpl_vars['allow_sales_stage_classification']->value) {?>
            <input type="hidden" id="sales_stage_classification" name="sales_stage_classification">
        <?php }?>
        <table>
            <tr>
                <td colspan='2'>
                    <input id="saveBtn" type='button' class='button' onclick='SimpleList.handleSave()'
                           value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SAVE_BUTTON_LABEL'),$_smarty_tpl);?>
'>
                    <input type='button' class='button' onclick='SimpleList.undo()'
                           value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BTN_UNDO'),$_smarty_tpl);?>
'>
                    <input type='button' class='button' onclick='SimpleList.redo()'
                           value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BTN_REDO'),$_smarty_tpl);?>
'>
                    <input type='button' class='button' name='cancel' value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BTN_CANCEL'),$_smarty_tpl);?>
'
                           onclick='ModuleBuilder.tabPanel.get("activeTab").close()'>
                </td>
                <td style="text-align: right">
                    <label><?php echo smarty_function_sugar_translate(array('label'=>'LBL_ROLE'),$_smarty_tpl);?>

                        <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                            <?php echo smarty_function_html_options(array('name'=>'dropdown_role','options'=>$_smarty_tpl->tpl_vars['roles']->value,'onchange'=>'this.form.action.value="roledropdownfilter";ModuleBuilder.handleSave("dropdown_form")'),$_smarty_tpl);?>

                        <?php } else { ?>
                           <?php echo smarty_function_html_options(array('name'=>'dropdown_role','options'=>$_smarty_tpl->tpl_vars['roles']->value,'disabled'=>true),$_smarty_tpl);?>

                        <?php }?>
                    </label>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <hr/>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <span class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_TITLE_NAME'),$_smarty_tpl);?>
:&nbsp;</span>
                    <?php if (!$_smarty_tpl->tpl_vars['new']->value) {?>
                        <input type='hidden' id='dropdown_name' name='dropdown_name'
                               value='<?php echo $_smarty_tpl->tpl_vars['dropdown_name']->value;?>
'><?php echo $_smarty_tpl->tpl_vars['dropdown_name']->value;?>

                    <?php } else { ?>
                        <input type='text' id='dropdown_name' name='dropdown_name' value=<?php echo $_smarty_tpl->tpl_vars['dropdown_name']->value;?>
>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td colspan="3" class='mbLBLL'>
                    <?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_LANGUAGE'),$_smarty_tpl);?>
:&nbsp;
                    <?php echo smarty_function_html_options(array('name'=>'dropdown_lang','options'=>$_smarty_tpl->tpl_vars['available_languages']->value,'selected'=>$_smarty_tpl->tpl_vars['selected_lang']->value,'onchange'=>'this.form.action.value="dropdown";ModuleBuilder.handleSave("dropdown_form")'),$_smarty_tpl);?>

                </td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['allow_language_comparison']->value) {?>
                <tr>
                    <td colspan="3" class='mbLBLL'>
                        <?php echo smarty_function_sugar_translate(array('label'=>'LBL_COMPARISON_LANGUAGE'),$_smarty_tpl);?>
:&nbsp;
                        <?php echo smarty_function_html_options(array('name'=>'comparison_lang','options'=>$_smarty_tpl->tpl_vars['available_comparison_languages']->value,'selected'=>$_smarty_tpl->tpl_vars['comparison_lang']->value,'onchange'=>'this.form.action.value="dropdown";ModuleBuilder.handleSave("dropdown_form")'),$_smarty_tpl);?>

                    </td>
                </tr>
            <?php }?>
            <tr>
                <td colspan="3" style='padding-top:10px;' class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_ITEMS'),$_smarty_tpl);?>
:
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <b><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_ITEM_NAME'),$_smarty_tpl);?>
</b>
                    <span class='fieldValue'>[<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_ITEM_LABEL'),$_smarty_tpl);?>
]</span>
                    <?php if ($_smarty_tpl->tpl_vars['allow_language_comparison']->value && !empty($_smarty_tpl->tpl_vars['comparison_lang']->value)) {?>
                        <span class='fieldValue'>[<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COMPARISON_LANGUAGE'),$_smarty_tpl);?>
]</span>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['allow_sales_stage_classification']->value) {?>
                        <span class='fieldValue' id='allow_sales_stage_classification'>[Classification]</span>
                    <?php }?>
                </td>
                <td style="text-align: right">
                    <input type='button' class='button' value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BTN_SORT_ASCENDING'),$_smarty_tpl);?>
'
                           onclick='SimpleList.sortAscending()'>
                    <input type='button' class='button' value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BTN_SORT_DESCENDING'),$_smarty_tpl);?>
'
                           onclick='SimpleList.sortDescending()'>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <ul id="ul1" class="listContainer">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['options']->value, 'val', false, 'name');
$_smarty_tpl->tpl_vars['val']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['name']->value => $_smarty_tpl->tpl_vars['val']->value) {
$_smarty_tpl->tpl_vars['val']->do_else = false;
?>
                            <?php if (($_smarty_tpl->tpl_vars['name']->value === '')) {?>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', 'name', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BLANK'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <?php $_smarty_tpl->_assignInScope('val', $_smarty_tpl->tpl_vars['name']->value);?>
                                <?php $_smarty_tpl->_assignInScope('is_blank', true);?>
                            <?php } else { ?>
                                <?php $_smarty_tpl->_assignInScope('is_blank', false);?>
                            <?php }?>
                            <li class="draggable" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">
                                <table width='100%'>
                                    <tr>
                                        <td class="first">
                                                                                        <?php if ($_smarty_tpl->tpl_vars['is_blank']->value) {?>
                                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
</b>
                                            <?php }?>
                                            <input id="value_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
" type='hidden' />

                                                                                        <span class="fieldValue" id="span_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
]</span>
                                            <span class="fieldValue" id="span_edit_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display:none">
                                                <input type="text" id="input_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['val']->value, ENT_QUOTES, 'UTF-8', true);?>
"
                                                    onBlur='SimpleList.setDropDownValue("<?php echo strtr($_smarty_tpl->tpl_vars['name']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", this.value, true)'>
                                            </span>

                                                                                        <?php if ($_smarty_tpl->tpl_vars['allow_language_comparison']->value && !empty($_smarty_tpl->tpl_vars['comparison_lang']->value)) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['is_blank']->value) {?>
                                                    <span class="fieldValue" id="span_comparison_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BLANK'),$_smarty_tpl);?>
]</span>
                                                <?php } else { ?>
                                                    <?php if (((isset($_smarty_tpl->tpl_vars['comparisonOptions']->value[$_smarty_tpl->tpl_vars['name']->value])))) {?>
                                                        <?php if (($_smarty_tpl->tpl_vars['comparisonOptions']->value[$_smarty_tpl->tpl_vars['name']->value] === $_smarty_tpl->tpl_vars['val']->value)) {?>
                                                            <?php echo $_smarty_tpl->tpl_vars['matchingLabelHelp']->value;?>

                                                        <?php }?>
                                                        <span class="fieldValue" id="span_comparison_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['comparisonOptions']->value[$_smarty_tpl->tpl_vars['name']->value], ENT_QUOTES, 'UTF-8', true);?>
]</span>
                                                    <?php } else { ?>
                                                        <span class="fieldValue" id="span_comparison_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[]</span>
                                                    <?php }?>
                                                <?php }?>
                                            <?php }?>

                                                                                        <?php if ($_smarty_tpl->tpl_vars['allow_sales_stage_classification']->value) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['is_blank']->value) {?>
                                                    <span class="fieldValue" id="span_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sales_stage_open']->value, ENT_QUOTES, 'UTF-8', true);?>
]</span>
                                                <?php } else { ?>
                                                    <?php if ((in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['sales_stage_won_options']->value))) {?>
                                                        <span class="fieldValue" id="span_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sales_stage_classification_options']->value[$_smarty_tpl->tpl_vars['sales_stage_closed_won']->value], ENT_QUOTES, 'UTF-8', true);?>
]</span>
                                                        <span class="fieldValue" id="span_edit_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display:none">
                                                            <?php echo smarty_function_html_options(array('name'=>'sales_stage_classification_dropdown','options'=>$_smarty_tpl->tpl_vars['sales_stage_classification_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sales_stage_classification_options']->value[$_smarty_tpl->tpl_vars['sales_stage_closed_won']->value],'onchange'=>'SimpleList.setSalesStageDropDownValue(this, this.value, true);','onblur'=>'SimpleList.setSalesStageDropDownValue(this, this.value, true);'),$_smarty_tpl);?>

                                                        </span>
                                                    <?php } elseif ((in_array($_smarty_tpl->tpl_vars['name']->value,$_smarty_tpl->tpl_vars['sales_stage_lost_options']->value))) {?>
                                                        <span class="fieldValue" id="span_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sales_stage_classification_options']->value[$_smarty_tpl->tpl_vars['sales_stage_closed_lost']->value], ENT_QUOTES, 'UTF-8', true);?>
]</span>
                                                        <span class="fieldValue" id="span_edit_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display:none">
                                                            <?php echo smarty_function_html_options(array('name'=>'sales_stage_classification_dropdown','options'=>$_smarty_tpl->tpl_vars['sales_stage_classification_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sales_stage_classification_options']->value[$_smarty_tpl->tpl_vars['sales_stage_closed_lost']->value],'onchange'=>'SimpleList.setSalesStageDropDownValue(this, this.value, true);','onblur'=>'SimpleList.setSalesStageDropDownValue(this, this.value, true);'),$_smarty_tpl);?>

                                                        </span>
                                                    <?php } else { ?>
                                                        <span class="fieldValue" id="span_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
">[<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sales_stage_classification_options']->value[$_smarty_tpl->tpl_vars['sales_stage_open']->value], ENT_QUOTES, 'UTF-8', true);?>
]</span>
                                                        <span class="fieldValue" id="span_edit_sales_stage_classification_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['name']->value, ENT_QUOTES, 'UTF-8', true);?>
" style="display:none">
                                                            <?php echo smarty_function_html_options(array('name'=>'sales_stage_classification_dropdown','options'=>$_smarty_tpl->tpl_vars['sales_stage_classification_options']->value,'selected'=>$_smarty_tpl->tpl_vars['sales_stage_classification_options']->value[$_smarty_tpl->tpl_vars['sales_stage_open']->value],'onchange'=>'SimpleList.setSalesStageDropDownValue(this, this.value, true);','onblur'=>'SimpleList.setSalesStageDropDownValue(this, this.value, true);'),$_smarty_tpl);?>

                                                        </span>
                                                    <?php }?>
                                                <?php }?>
                                            <?php }?>
                                        </td>
                                        <td align='right'>
                                            <a href='javascript:void(0)'
                                               onclick='SimpleList.editDropDownValue("<?php echo strtr($_smarty_tpl->tpl_vars['name']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", true)'>
                                                <?php echo $_smarty_tpl->tpl_vars['editImage']->value;?>
</a>
                                            &nbsp;
                                            <a href='javascript:void(0)'
                                               onclick='SimpleList.deleteDropDownValue("<?php echo strtr($_smarty_tpl->tpl_vars['name']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
", true)'>
                                                <?php echo $_smarty_tpl->tpl_vars['deleteImage']->value;?>
</a>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ul>
                </td>
            </tr>
            <tr>
                <td colspan='3'>
                    <table width='100%'>
                        <tr>
                            <td class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_ITEM_NAME'),$_smarty_tpl);?>
:</td>
                            <td class='mbLBLL'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DROPDOWN_ITEM_LABEL'),$_smarty_tpl);?>
:</td>
                        </tr>
                        <tr>
                            <td><input type='text' id='drop_name' name='drop_name' maxlength='100'></td>
                            <td><input type='text' id='drop_value' name='drop_value'></td>
                            <td><input type='button' id='dropdownaddbtn'
                                       value='<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADD_BUTTON'),$_smarty_tpl);?>
' class='button'>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </form>

    <?php echo '<script'; ?>
>
        addForm('dropdown_form');
        addToValidate('dropdown_form', 'dropdown_name', 'DBName', false, SUGAR.language.get("ModuleBuilder", "LBL_JS_VALIDATE_NAME"));
        addToValidate('dropdown_form', 'drop_value', 'varchar', false, SUGAR.language.get("ModuleBuilder", "LBL_JS_VALIDATE_LABEL"));
        addToValidateCallback('dropdown_form', 'dropdown_name', 'callback', false, null, function(formName, fieldName, index) {
                var el = document.forms[formName].elements[fieldName];
                var value = el.value;
                if (SUGAR.language.languages.app_list_strings[value] !== undefined) {
                    validate[formName][index][msgIndex] = "<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"ERR_DROPDOWN_NAME_ALREADY_EXISTS"),$_smarty_tpl);?>
";
                    return false;
                }
                return true;
            }
        );

        eval(<?php echo $_smarty_tpl->tpl_vars['ul_list']->value;?>
);
        SimpleList.name = '<?php echo $_smarty_tpl->tpl_vars['dropdown_name']->value;?>
';
        SimpleList.requiredOptions = <?php echo $_smarty_tpl->tpl_vars['required_items']->value;?>
;
        SimpleList.ul_list = list;
        SimpleList.hasSalesStageClassification = Boolean('<?php echo $_smarty_tpl->tpl_vars['allow_sales_stage_classification']->value;?>
');
        SimpleList.init('<?php echo $_smarty_tpl->tpl_vars['editImage']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['deleteImage']->value;?>
');
        ModuleBuilder.helpSetup('dropdowns', 'editdropdown');

        var addListenerFields = ['drop_name', 'drop_value']
        YAHOO.util.Event.addListener(addListenerFields, "keydown", function (e) {
            if (e.keyCode == 13) {
                YAHOO.util.Event.stopEvent(e);
            }
        });

    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>// Bug in FF4 where it doesn't run the last script. Remove when the bug is fixed.<?php echo '</script'; ?>
>

</div>

<?php }
}
