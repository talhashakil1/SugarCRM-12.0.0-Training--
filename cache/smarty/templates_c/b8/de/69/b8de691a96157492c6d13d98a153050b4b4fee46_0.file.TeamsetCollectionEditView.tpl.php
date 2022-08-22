<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:14
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431e3e8fb3_26784125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b8de691a96157492c6d13d98a153050b4b4fee46' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/TeamsetCollectionEditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431e3e8fb3_26784125 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo $_smarty_tpl->tpl_vars['vardef']->value['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

<?php echo '<script'; ?>
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
    if(typeof collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"] == 'undefined') {
       collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"] = new SUGAR.collection('<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['popupData'];?>
');
	   <?php if ($_smarty_tpl->tpl_vars['hideShowHideButton']->value) {?>
		 collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"].show_more_image = false;
	   <?php }?>
	}
<?php echo '</script'; ?>
>
<input type="hidden" id="update_fields_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection" name="update_fields_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection" value="">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_new_on_update" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_new_on_update" value="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['new_on_update'];?>
">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_allow_update" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_allow_update" value="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['allow_update'];?>
">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_allow_new" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_allow_new" value="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['allow_new'];?>
">
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
">

<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['required'])) {?>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_field" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_field" value="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_table">
<?php }?>
<table name='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_table' id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_table' style="border-spacing: 0pt;">
    <!-- BEGIN Labels Line -->
    <tr id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="lineLabel_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
">
        <td nowrap>
			<span class="id-ff multiple ownline">
            <button type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_BUTTON_LABEL'),$_smarty_tpl);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, { "call_back_function": "set_return_teams_for_editview", "form_name": "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
","field_name":"<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
","field_to_name_array": { "id": "team_id", "name": "team_name" } }, "MULTISELECT", true); if(collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"].more_status)collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"].js_more();' name="teamSelect" id="teamSelect" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ID_FF_SELECT"),$_smarty_tpl);?>
"><?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-select.png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_selectButton']->value)),$_smarty_tpl);?>
</button><button type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADD_BUTTON'),$_smarty_tpl);?>
" onclick="javascript:collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'].add(); if(collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'].more_status)collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'].js_more();" name="teamAdd" id="teamAdd" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ID_FF_ADD"),$_smarty_tpl);?>
"><?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-add.png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_addButton']->value)),$_smarty_tpl);?>
</button>
			</span>
        </td>
        <td>
        &nbsp;
        </td>
        <th scope='col' align='center' id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_primary" rowspan='1' scope='row' style='white-space: nowrap; word-wrap:normal;'>
            <?php echo smarty_function_sugar_translate(array('label'=>'LBL_COLLECTION_PRIMARY'),$_smarty_tpl);?>

        </th>
        <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>
        <td>
            &nbsp;
        </td>
        <th scope='col' align='center' id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_selected" rowspan='1' scope='row' style='white-space: nowrap; word-wrap:normal;'>
            <?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_SELECTED'),$_smarty_tpl);?>

        </th>
        <td>
            &nbsp;
        </td>
        <?php }?>
<!-- BEGIN Add and collapse -->
        <td rowspan='1' scope='row' style='white-space:nowrap; word-wrap:normal;' valign='top'>
            <?php if (!$_smarty_tpl->tpl_vars['hideShowHideButton']->value) {?>
            <span onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'].js_more();" id='more_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
' style="text-decoration:none;" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_HIDE_SHOW"),$_smarty_tpl);?>
">
            <input id="arrow_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="arrow_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" type="hidden" value="show">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "attr", null);?>border="0" id="more_img_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo smarty_function_sugar_getimage(array('name'=>"advanced_search.gif",'width'=>"8",'height'=>"8",'attr'=>$_smarty_tpl->tpl_vars['attr']->value),$_smarty_tpl);?>

            <span id="more_div_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW'),$_smarty_tpl);?>
</span>
            </span>
            <?php }?>
        </td>
<!-- END Add and collapse -->
        <td width='100%'>
        &nbsp;
        </th>
    </tr>
<!-- END Labels Line -->
    <tr id="lineFields_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_0">
        <td scope="row" valign='top'>
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_input_div_0' name='teamset_div'>          
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?> size="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['size'];?>
" value="" title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECTED_TITLE'),$_smarty_tpl);?>
" autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['readOnly'];?>
 <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
            <input type="hidden" name="id_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" id="id_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign='top' align='left' nowrap class="teamset-row">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "attr", null);?>class="id-ff-remove" name="remove_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" id="remove_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'].remove(0); return false;"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

            <button type="button" class="id-ff-remove" <?php echo $_smarty_tpl->tpl_vars['attr']->value;?>
>
                <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-remove-nobg",'ext'=>".png",'attr'=>'','alt'=>$_smarty_tpl->tpl_vars['alt_removeButton']->value),$_smarty_tpl);?>

                <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['allowNewValue'])) {?><input type="hidden" name="allow_new_value_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" id="allow_new_value_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" value="true"><?php }?>
            </button>

        </td>
        <td valign='top' align='center' class="teamset-row">
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_radio_div_0'>
            &nbsp;
            <input id="primary_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" name="primary_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection" type="radio" class="radio" <?php if ($_smarty_tpl->tpl_vars['displayParams']->value['primaryChecked']) {?>checked="checked" title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECTED_TITLE'),$_smarty_tpl);?>
" <?php } else { ?> title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECT_AS_PRIM_TITLE'),$_smarty_tpl);?>
" <?php }?> value="0" onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
'].changePrimary(true);"/>
            </span>
        </td>
        <td>
            &nbsp;
        </td>
        <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>
        <td valign='top' align='center' class="teamset-row">
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_checkbox_div_0'>
            &nbsp;
            <input id="selected_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" name="selected_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0" type="checkbox"
                   class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['primary']['id'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['values']->value['primary']['selected']) {?>checked="checked"
                   title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_TBSELECTED_TITLE'),$_smarty_tpl);?>
" <?php } else { ?>
                   title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECT_AS_TBSELECTED_TITLE'),$_smarty_tpl);?>
" <?php }?>/>
            </span>
        </td>
        <td>
        &nbsp;
        </td>
        <?php }?>
        <td>
            &nbsp;
        </td>
        <td>
            &nbsp;
        </td>
<!-- END Remove and Radio -->
    </tr>
</table>
<!--
Put this button in here since we have moved the Add and Select buttons above the text fields, the accesskey will skip these. So create this button
and push it outside the screen.
-->
 <input style='position:absolute; left:-9999px; width: 0px; height: 0px;' halign='left' type="button" class="button" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_BUTTON_LABEL'),$_smarty_tpl);?>
" onclick='javascript:open_popup("Teams", 600, 400, "", true, false, { "call_back_function": "set_return_teams_for_editview", "form_name": "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
", "field_name":"<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
", "field_to_name_array": { "id": "team_id", "name": "team_name" } }, "MULTISELECT", true); if(collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"].more_status)collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"].js_more();'>
<?php echo '<script'; ?>
 type="text/javascript">
(function() {
    SUGAR_callsInProgress++;
    var field_id = '<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
';
    YAHOO.util.Event.onContentReady(field_id + "_table", function(){

        //reset the secondary fields array for this form before populating
         collection[field_id].secondaries_values = new Array();

        if(collection[field_id] && collection[field_id].secondaries_values.length == 0) {
            <?php if (!empty($_smarty_tpl->tpl_vars['values']->value['secondaries'])) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['values']->value['secondaries'], 'secondary_field');
$_smarty_tpl->tpl_vars['secondary_field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['secondary_field']->value) {
$_smarty_tpl->tpl_vars['secondary_field']->do_else = false;
?>
                var temp_array = new Array();
                temp_array['name'] = '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['secondary_field']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
';
                temp_array['name'] = replaceHTMLChars(temp_array['name']);
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
 	document.getElementById("id_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0").value = "<?php echo $_smarty_tpl->tpl_vars['values']->value['primary']['id'];?>
";
 	document.getElementById("<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0").value = replaceHTMLChars("<?php echo $_smarty_tpl->tpl_vars['values']->value['primary']['name'];?>
");
    <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['arrow'])) && $_smarty_tpl->tpl_vars['displayParams']->value['arrow'] == 'show') {?>
        setTimeout('call_js_more(collection_field)',1000);
    <?php } else { ?>
	   SUGAR_callsInProgress--;
	<?php }?>
	
    
	function call_js_more(c) {
	    c.js_more();
		SUGAR_callsInProgress--;
	}    
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['quickSearchCode']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
<!--
if(typeof QSProcessedFieldsArray != 'undefined')
	QSProcessedFieldsArray["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_collection_0"] = false;
enableQS(false);
-->
<?php echo '</script'; ?>
>
<?php }
}
