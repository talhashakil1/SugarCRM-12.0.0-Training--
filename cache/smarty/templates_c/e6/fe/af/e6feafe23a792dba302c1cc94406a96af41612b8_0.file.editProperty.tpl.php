<?php
/* Smarty version 3.1.39, created on 2022-07-14 12:45:01
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/editProperty.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cfc97d5e59f6_11945433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e6feafe23a792dba302c1cc94406a96af41612b8' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/editProperty.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cfc97d5e59f6_11945433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),));
?>
<form name="editProperty" id="editProperty" onsubmit='return false;'>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type='hidden' name='module' value='ModuleBuilder'>
<input type='hidden' name='action' value='saveProperty'>
<input type='hidden' name='view_module' value='<?php echo $_smarty_tpl->tpl_vars['view_module']->value;?>
'>
<?php if ((isset($_smarty_tpl->tpl_vars['view_package']->value))) {?><input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
'><?php }?>
<input type='hidden' name='subpanel' value='<?php echo $_smarty_tpl->tpl_vars['subpanel']->value;?>
'>
<input type='hidden' name='to_pdf' value='true'>

<?php if ((isset($_smarty_tpl->tpl_vars['MB']->value))) {?>
<input type='hidden' name='MB' value='<?php echo $_smarty_tpl->tpl_vars['MB']->value;?>
'>
<input type='hidden' name='view_package' value='<?php echo $_smarty_tpl->tpl_vars['view_package']->value;?>
'>
<?php }?>

<?php echo '<script'; ?>
>
    function saveAction() {
        var widthUnit = '<?php echo $_smarty_tpl->tpl_vars['widthUnit']->value;?>
';
        for(var i=0, l=document.editProperty.elements.length; i<l; i++) {
            var field = document.editProperty.elements[i];
            if (field.className.indexOf('save') != -1 )
            {
                if (field.value != 'no_change')
                {
                    var id = field.id.substring('editProperty_'.length);
                    var fieldSpan = document.getElementById(id);
                    var value = YAHOO.lang.escapeHTML(field.value);

                    // If editing a width on list layouts, update the unit
                    if (field.name.toLowerCase().indexOf('width') != -1) {
                        value = value.replace('px', '').replace('%', '').trim();
                        fieldSpan.nextElementSibling.innerHTML = field.value == '' || isNaN(+value) ? '' : widthUnit;
                    }
                    fieldSpan.innerHTML = value;
                }
            }
        }
    }

	function switchLanguage( language )
	{
        var request = 'module=ModuleBuilder&action=editProperty&view_module=<?php echo $_smarty_tpl->tpl_vars['editModule']->value;?>
&selected_lang=' + language ;
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'property', false, 'key');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
                request += '&id_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
&name_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['property']->value['name'];?>
&title_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['property']->value['title'];?>
&label_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
=<?php echo $_smarty_tpl->tpl_vars['property']->value['label'];?>
' ;
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        ModuleBuilder.getContent( request ) ;
    }

<?php echo '</script'; ?>
>

<table style="width:100%">

	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['properties']->value, 'property', false, 'key');
$_smarty_tpl->tpl_vars['property']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['property']->value) {
$_smarty_tpl->tpl_vars['property']->do_else = false;
?>
	<tr>
		<td width="25%" align='right'><?php if ((isset($_smarty_tpl->tpl_vars['property']->value['title']))) {
echo $_smarty_tpl->tpl_vars['property']->value['title'];
} else {
echo $_smarty_tpl->tpl_vars['property']->value['name'];
}?>:</td>
		<td width="75%">
			<input class='save' type='hidden' name='<?php echo $_smarty_tpl->tpl_vars['property']->value['name'];?>
' id='editProperty_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
' value='no_change'>
			<?php if ((isset($_smarty_tpl->tpl_vars['property']->value['hidden']))) {?>
				<?php echo $_smarty_tpl->tpl_vars['property']->value['value'];?>

			<?php } else { ?>
				<?php if ($_smarty_tpl->tpl_vars['key']->value == 'width') {?>
					<select id="selectWidthClass_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
" onchange="handleClassSelection(this)">
						<option value="" selected="selected">default</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['defaultWidths']->value, 'width');
$_smarty_tpl->tpl_vars['width']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['width']->value) {
$_smarty_tpl->tpl_vars['width']->do_else = false;
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['width']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['width']->value;?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						<option value="custom">custom</option>
					</select>
					<input id="widthValue_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
" onchange="handleWidthChange(this.value)" value="<?php echo $_smarty_tpl->tpl_vars['property']->value['value'];?>
" style="display:none">
                    
                    <?php echo '<script'; ?>
>
                    var propertyValue, widthValue, saveWidthProperty, selectWidthClass;
                    

                    propertyValue = '<?php echo $_smarty_tpl->tpl_vars['property']->value['value'];?>
';
                    saveWidthProperty = document.getElementById('editProperty_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
');
                    widthValue = document.getElementById('widthValue_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
');
                    selectWidthClass = document.getElementById('selectWidthClass_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
');

                    
                    if (propertyValue != '') {
                        if (isNaN(propertyValue)) {
                            selectWidthClass.value = propertyValue;
                            widthValue.style.display = 'none';
                            widthValue.value = '';
                        } else {
                            selectWidthClass.value = 'custom';
                            widthValue.style.display = 'inline';
                            widthValue.value = isNaN(propertyValue) ? '' : propertyValue;
                        }
                    }
                    function handleClassSelection(el) {
                        var selected = el.options[el.selectedIndex].value;

                        if (selected === 'custom') {
                            widthValue.style.display = 'inline';
                            widthValue.value = isNaN(propertyValue) ? '' : propertyValue;
                        } else {
                            widthValue.style.display = 'none';
                            widthValue.value = '';
                            saveWidthProperty.value = selected;
                        }
                    }

                    function handleWidthChange(w) {
                        saveWidthProperty.value = w;
                    }
                    <?php echo '</script'; ?>
>
                    
				<?php } else { ?>
                    <input onchange='document.getElementById("editProperty_<?php echo $_smarty_tpl->tpl_vars['id']->value;
echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
").value = this.value' value='<?php echo $_smarty_tpl->tpl_vars['property']->value['value'];?>
'>
                <?php }?>
			<?php }?>
		</td>
	</tr>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<tr>
		<td><input class="button" type="Button" name="save" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" onclick="saveAction(); ModuleBuilder.submitForm('editProperty'); ModuleBuilder.closeAllTabs();"></td>
	</tr>
</table>
</form>

<?php echo '<script'; ?>
>
ModuleBuilder.helpSetup('layoutEditor','property', 'east');
<?php echo '</script'; ?>
>


<?php }
}
