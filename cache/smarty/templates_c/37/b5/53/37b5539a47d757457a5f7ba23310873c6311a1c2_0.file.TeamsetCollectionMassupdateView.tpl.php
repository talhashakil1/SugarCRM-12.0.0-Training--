<?php
/* Smarty version 3.1.39, created on 2022-07-13 18:00:10
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cec1daba8dd4_01200779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37b5539a47d757457a5f7ba23310873c6311a1c2' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/TeamsetCollectionMassupdateView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cec1daba8dd4_01200779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alt1', 'alt_selectButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_TEAMS_LABEL'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alt2', 'alt_removeButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_REMOVE_TEAM_ROW'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alt3', 'alt_addButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADD_TEAM_ROW'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Collection/SugarFieldCollection.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Teamset/Teamset.js"),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
    var collection = (typeof collection == 'undefined') ? new Array() : collection;
    collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"] = new SUGAR.collection('<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['popupData'];?>
');
	collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].show_more_image = false;
<?php echo '</script'; ?>
>
<input type="hidden" id="update_fields_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection" name="update_fields_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection" value="">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_new_on_update" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_new_on_update" value="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['new_on_update'];?>
">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_allow_update" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_allow_update" value="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['allow_update'];?>
">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_allow_new" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_allow_new" value="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['allow_new'];?>
">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_allowed_to_check" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_allowed_to_check" value="false">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_mass" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_mass" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_table">
<table name='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_table' id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_table' style="border-spacing: 0pt;">
	 <tr>
	    <td colspan='2' nowrap>
			<span class="id-ff multiple ownline">
            <button title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_ID_FF_SELECT'];?>
" type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_BUTTON_LABEL'),$_smarty_tpl);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, { "call_back_function": "set_return_teams_for_editview", "form_name": "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
","field_name":"<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
","field_to_name_array": { "id": "team_id", "name": "team_name" } }, "MULTISELECT", true); if(collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].more_status)collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].js_more();' name="teamSelect">
            <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-select.png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_selectButton']->value)),$_smarty_tpl);?>

            </button><button title="<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_ID_FF_ADD'];?>
" type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADD_BUTTON'),$_smarty_tpl);?>
" onclick="javascript:collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].add(); if(collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].more_status)collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].js_more();"  name="teamAdd">
            <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-add.png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_addButton']->value)),$_smarty_tpl);?>
</button>
			</span>			
		</td>
        <th scope='col' id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_primary" <?php if (empty($_smarty_tpl->tpl_vars['values']->value['role_field'])) {?>style="display:none"<?php }?>>
            <?php echo smarty_function_sugar_translate(array('label'=>'LBL_COLLECTION_PRIMARY'),$_smarty_tpl);?>

        </th>
         <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>
             <th scope='col' align='center' id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_selected" rowspan='1' scope='row'
                 style='white-space: nowrap; word-wrap:normal;'>
                 <?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_SELECTED'),$_smarty_tpl);?>

             </th>
         <?php }?>
		<td>
        <a class="utilsLink" href="javascript:collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].js_more();" id='more_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
' <?php if (empty($_smarty_tpl->tpl_vars['values']->value['secondaries'])) {?>style="display:none"<?php }?>></a>
        </td>
        <td>&nbsp;</td>
    </tr>
    <tr id="lineFields_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_0" class="lineFields_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
">
        <td scope='row' valign="top">
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_input_div_0' name='teamset_div'>   
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" size="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['size'];?>
" value=""  title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECTED_TITLE'),$_smarty_tpl);?>
"  autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['readOnly'];?>
 <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
            <input type="hidden" name="id_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" id="id_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign="top" nowrap class="teamset-row">
            &nbsp;
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'tmp', 'attr', null);?>id="remove_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" name="remove_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].remove(0);"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <button type="button" class="id-ff-remove" <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
>
                <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-remove-nobg",'ext'=>".png",'attr'=>'','alt'=>$_smarty_tpl->tpl_vars['alt_removeButton']->value),$_smarty_tpl);?>

                <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['allowNewValue'])) {?><input type="hidden" name="allow_new_value_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" id="allow_new_value_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" value="true"><?php }?>
            </button>
        </td>
        <td valign="top" align="center" class="teamset-row">
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_radio_div_0'>
            <input id="primary_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" name="primary_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection" type="radio" class="radio" value="0" style="visibility:visible<?php if (empty($_smarty_tpl->tpl_vars['values']->value['role_field'])) {?>;display:none;<?php }?>" onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].changePrimary(true);" title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECT_AS_PRIM_TITLE'),$_smarty_tpl);?>
" />
            </span>
        </td>
        <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>
        <td valign='top' align='center' class="teamset-row">
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_checkbox_div_0'>
            &nbsp;
            <input id="selected_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" name="selected_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0"
                   type="checkbox" class="checkbox" value="on"
                   title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECT_AS_TBSELECTED_TITLE'),$_smarty_tpl);?>
"/>
            </span>
        </td>
        <?php }?>
        <td>&nbsp;</td>
<!-- END Remove and Radio -->
    </tr>
</table>
<table style="border-spacing: 0pt;">
    <tr>
		<td nowrap>
            <div id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_mass_operation_div'>
        	<input type="radio" class="radio" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_type" value="replace" checked> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPLACE_BUTTON'),$_smarty_tpl);?>

			<input type="radio" class="radio" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_type" value="add"> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADD_BUTTON'),$_smarty_tpl);?>

            </div>	
		</td>
	</tr>    
</table>
<?php if (!empty($_smarty_tpl->tpl_vars['values']->value['secondaries'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value['secondaries'], 'secondary_field', false, 'key');
$_smarty_tpl->tpl_vars['secondary_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['secondary_field']->value) {
$_smarty_tpl->tpl_vars['secondary_field']->do_else = false;
?>
                <?php echo '<script'; ?>
 type="text/javascript">
                    var temp_array = new Array();
                    temp_array['name'] = '<?php echo $_smarty_tpl->tpl_vars['secondary_field']->value['name'];?>
';
                    temp_array['id'] = '<?php echo $_smarty_tpl->tpl_vars['secondary_field']->value['id'];?>
';
                    <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>temp_array['selected'] = '<?php echo $_smarty_tpl->tpl_vars['secondary_field']->value['selected'];?>
';<?php }?>
                    //collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].secondaries_values.push(temp_array);
                <?php echo '</script'; ?>
>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
<!--
Put this button in here since we have moved the Add and Select buttons above the text fields, the accesskey will skip these. So create this button
and push it outside the screen.
-->
 <input style='position:absolute; left:-9999px; width: 0px; height: 0px;' halign='left' type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_BUTTON_LABEL'),$_smarty_tpl);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, { "call_back_function": "set_return_teams_for_editview", "form_name": "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
", "field_name": "team_name", "field_to_name_array": { "id": "team_id", "name": "team_name" } }, "MULTISELECT", true);'>

<?php echo '<script'; ?>
 type="text/javascript"> 
(function() {
    SUGAR_callsInProgress++;
    var field_id = '<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
';
    YAHOO.util.Event.onContentReady(field_id + "_table", function(){
        SUGAR_callsInProgress--;
		if(collection[field_id] && collection[field_id].secondaries_values.length == 0) {
            <?php if (!empty($_smarty_tpl->tpl_vars['values']->value['secondaries'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value['secondaries'], 'secondary_field');
$_smarty_tpl->tpl_vars['secondary_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondary_field']->value) {
$_smarty_tpl->tpl_vars['secondary_field']->do_else = false;
?>
                var temp_array = new Array();
                temp_array['name'] = '<?php echo $_smarty_tpl->tpl_vars['secondary_field']->value['name'];?>
';
                temp_array['id'] = '<?php echo $_smarty_tpl->tpl_vars['secondary_field']->value['id'];?>
';
                <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>temp_array['selected'] = '<?php echo $_smarty_tpl->tpl_vars['secondary_field']->value['selected'];?>
';<?php }?>
                collection[field_id].secondaries_values.push(temp_array);
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            var collection_field = collection[field_id];
			collection_field.add_secondaries(collection_field.secondaries_values);
        }
    });
})();
//	collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].add_secondaries(collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].secondaries_values);
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['quickSearchCode']->value;?>


<?php echo '<script'; ?>
 type="text/javascript">
addToValidate('MassUpdate', 'team_name_mass', 'teamset_mass', true, 'Team');
<?php echo '</script'; ?>
>
<?php }
}
