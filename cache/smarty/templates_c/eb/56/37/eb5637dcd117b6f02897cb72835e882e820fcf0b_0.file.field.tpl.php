<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:36:54
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/MBModule/field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff21765ddd04_84922789',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb5637dcd117b6f02897cb72835e882e820fcf0b' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/MBModule/field.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff21765ddd04_84922789 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000"></div>
<?php echo '<script'; ?>
>
addForm('popup_form');
<?php echo '</script'; ?>
>

<form name='popup_form' id='popup_form_id' onsubmit='return false;'>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
'>
<input type='hidden' name='new_dropdown' value=''>
<input type='hidden' name='to_pdf' value='true'>
<input type='hidden' name='view_module' value='<?php echo $_smarty_tpl->tpl_vars['module']->value->name;?>
'>
<?php if ($_smarty_tpl->tpl_vars['isNew']->value) {?>
<input type='hidden' name='is_new' value='1'>
<?php }
if ((isset($_smarty_tpl->tpl_vars['package']->value->name))) {?>
    <input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['package']->value->name;?>
'>
<?php }?>
<input type='hidden' name='is_update' value='true'>
	<?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 5) {?>
	    &nbsp;
	    <input type='button' class='button' name='fsavebtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVE'];?>
' 
			onclick='if(validate_type_selection() && check_form("popup_form")){ <?php echo $_smarty_tpl->tpl_vars['preSave']->value;?>
 ModuleBuilder.submitForm("popup_form_id"); }'>
	    <input type='button' name='cancelbtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_CANCEL'];?>
' 
			onclick='ModuleBuilder.tabPanel.removeTab(ModuleBuilder.findTabById("east"));' class='button'>
	    <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['name'])) {?>
	        <?php if ($_smarty_tpl->tpl_vars['hideLevel']->value < 3) {?>

	            &nbsp;<input type='button' class='button' name='fdeletebtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_DELETE'];?>
' onclick='if(confirm("<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_CONFIRM_FIELD_DELETE'];?>
")){ document.popup_form.action.value="DeleteField";ModuleBuilder.submitForm("popup_form_id"); }'>

	        <?php }?>
	        <?php if (!$_smarty_tpl->tpl_vars['no_duplicate']->value) {?>

	        &nbsp;<input type='button' class='button' name='fclonebtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_CLONE'];?>
' onclick='document.popup_form.action.value="CloneField";ModuleBuilder.submitForm("popup_form_id");'>

	    <?php }?>
	    <?php }?>
	
	<?php } else { ?>

	     <input type='button' class='button' name='lsavebtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_SAVE'];?>
' onclick='if(check_form("popup_form")){ this.form.action.value = "<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
";ModuleBuilder.submitForm("popup_form_id") };'>


	        &nbsp;<input type='button' class='button' name='fclonebtn' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_CLONE'];?>
' onclick='document.popup_form.action.value="CloneField";ModuleBuilder.submitForm("popup_form_id");'>


        <?php if (!$_smarty_tpl->tpl_vars['no_duplicate']->value) {?>

                &nbsp;<input type='button' class='button' name='cancel' value='<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_BTN_CANCEL'];?>
' onclick='ModuleBuilder.tabPanel.get("activeTab").close()'>

        <?php }?>
	        
<?php }?>
<hr>

<table width="400px" >
<tr>
    <td class="mbLBL" style="width:92px;"><?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"COLUMN_TITLE_DATA_TYPE"),$_smarty_tpl);?>
:</td>
    <td ><?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['name']) && $_smarty_tpl->tpl_vars['isClone']->value == 0) {?>
                <?php echo smarty_function_html_options(array('name'=>"type",'id'=>"type",'options'=>$_smarty_tpl->tpl_vars['field_types']->value,'selected'=>$_smarty_tpl->tpl_vars['vardef']->value['type'],'onchange'=>'ModuleBuilder.moduleLoadField("", this.options[this.selectedIndex].value);'),$_smarty_tpl);?>

                <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_POPHELP_FIELD_DATA_TYPE'],'FIXX'=>250,'FIXY'=>80),$_smarty_tpl);?>

            <?php } else { ?>
                <?php if (!empty($_smarty_tpl->tpl_vars['display_type']->value)) {?>
                    <?php echo $_smarty_tpl->tpl_vars['display_type']->value;?>

                <?php } else { ?>
                    <?php echo $_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['vardef']->value['type']];?>

                <?php }?>
            <?php }?>
            <?php if (empty($_smarty_tpl->tpl_vars['field_types']->value[$_smarty_tpl->tpl_vars['vardef']->value['type']]) && !empty($_smarty_tpl->tpl_vars['vardef']->value['type'])) {?>(<?php echo $_smarty_tpl->tpl_vars['vardef']->value['type'];?>
)<?php }?>
            <input type='hidden' name='type' value=<?php echo $_smarty_tpl->tpl_vars['vardef']->value['type'];?>
 />
    </td>
</tr>
</table>
<?php echo $_smarty_tpl->tpl_vars['fieldLayout']->value;?>

</form>

<?php echo '<script'; ?>
>

function validate_type_selection(){
    var typeSel = document.getElementById('type');
    if(typeSel && typeSel.options){
        if(typeSel.options[typeSel.selectedIndex].value == ''){
            alert('<?php echo smarty_function_sugar_translate(array('module'=>"DynamicFields",'label'=>"ERR_SELECT_FIELD_TYPE"),$_smarty_tpl);?>
');
            return false;
        }
    }
    if (document.getElementById("customTypeValidate")){
        return document.getElementById("customTypeValidate").onchange(); 
    }
    return true;
}

ModuleBuilder.helpSetup('fieldsEditor','<?php echo $_smarty_tpl->tpl_vars['help_group']->value;?>
');
<?php echo '</script'; ?>
>
<?php }
}
