<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:07
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/TeamsetCollectionEmailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1cd34d83d4_20874847',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '079f81ca8cec3547c7711160ad5334be424ec717' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Teamset/TeamsetCollectionEmailView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1cd34d83d4_20874847 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alt1', 'alt_selectButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_TEAMS_LABEL'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alt2', 'alt_removeButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_REMOVE_TEAM_ROW'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'alt3', 'alt_addButton', null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_ADD_TEAM_ROW'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

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
    collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"] = new SUGAR.collection('<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
', '<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
', '<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['popupData'];?>
');
	<?php if ($_smarty_tpl->tpl_vars['hideShowHideButton']->value) {?>
		collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].show_more_image = false;
	<?php }
echo '</script'; ?>
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
" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
">

<?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['required'])) {?>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_field" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_field" value="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_table">
<?php }?>
<table name='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_table' id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_table' style="border-spacing: 0pt;">
    <!-- BEGIN Labels Line -->
    <tr id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
" name="lineLabel_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
">
        <td colspan='2' nowrap>
			<span class="id-ff multiple ownline">
            <button type="button" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SELECT_BUTTON_LABEL'),$_smarty_tpl);?>
" onclick='javascript:open_popup_for_email_teams("Teams", 600, 400, "", true, false, { "call_back_function": "set_return_teams_for_editview", "form_name": "<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
","field_name":"<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
", "field_to_name_array": { "id": "team_id", "name": "team_name" } }, "<?php echo $_smarty_tpl->tpl_vars['CUSTOM_METHOD']->value;?>
", "<?php echo $_smarty_tpl->tpl_vars['USER_ID']->value;?>
", "MULTISELECT", true); if(collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].more_status)collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].js_more();' title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ID_FF_SELECT"),$_smarty_tpl);?>
">
            <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-select.png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_selectButton']->value)),$_smarty_tpl);?>

            </button><button type="button" class="button lastChild" value="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADD_BUTTON'),$_smarty_tpl);?>
" onclick="javascript:collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].add(); if(collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].more_status)collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].js_more();" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ID_FF_ADD"),$_smarty_tpl);?>
">
            <?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-add.png",'alt'=>((string)$_smarty_tpl->tpl_vars['alt_addButton']->value)),$_smarty_tpl);?>
</button>
			</span>
        </td>
        <th scope='col' align='center' id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_primary" rowspan='1' scope='row' style='white-space: nowrap; word-wrap: normal;'>
            <?php echo smarty_function_sugar_translate(array('label'=>'LBL_COLLECTION_PRIMARY'),$_smarty_tpl);?>

        </th>
        <?php if ($_smarty_tpl->tpl_vars['isTBAEnabled']->value) {?>
            <th scope='col' align='center' id="lineLabel_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_selected" rowspan='1' scope='row'
                style='white-space: nowrap; word-wrap:normal;'>
                <?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_SELECTED'),$_smarty_tpl);?>

            </th>
        <?php }?>
<!-- BEGIN Add and collapse -->
        <td rowspan='1' scope='row' style='white-space:nowrap; word-wrap:normal;'>
            &nbsp;
            <?php if (!$_smarty_tpl->tpl_vars['hideShowHideButton']->value) {?>
            <span onclick="javascript:collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].js_more();" id='more_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
' style="text-decoration:none;" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_HIDE_SHOW"),$_smarty_tpl);?>
">
            <input id="arrow_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
" name="arrow_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
" type="hidden" value="show">
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "attr", null);?>border="0" id="more_img_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
            <?php echo smarty_function_sugar_getimage(array('name'=>"advanced_search.gif",'attr'=>$_smarty_tpl->tpl_vars['attr']->value),$_smarty_tpl);?>

            <span id="more_div_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
" ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW'),$_smarty_tpl);?>
</span>
        	</span>
        	<?php }?>
        </td>
<!-- END Add and collapse -->
        <td width='100%'>
        &nbsp;
        </td>
    </tr>
<!-- END Labels Line -->
    <tr id="lineFields_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_0">
        <td scop='row' valign='top'>
            <span id='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_input_div_0' name='teamset_div'>          
            <input type="text" name="<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" id="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" class="sqsEnabled" tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
" size="<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['size'];?>
" value=""  title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECTED_TITLE'),$_smarty_tpl);?>
"  autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['readOnly'];?>
 <?php echo $_smarty_tpl->tpl_vars['displayParams']->value['field'];?>
>
            <input type="hidden" name="id_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" id="id_<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0"" value="">
            </span>
        </td>
<!-- BEGIN Remove and Radio -->
        <td valign='top' align='left' nowrap class="teamset-row">
            &nbsp;
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "attr", null);?>id="remove_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" name="remove_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].remove(0);"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alt", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_ID_FF_REMOVE"),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

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
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_radio_div_0'>
            &nbsp;
            <input id="primary_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0" name="primary_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection" type="radio" class="radio" <?php if ($_smarty_tpl->tpl_vars['displayParams']->value['primaryChecked']) {?>checked="checked" <?php }?> title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECT_AS_PRIM_TITLE'),$_smarty_tpl);?>
"value="0" onclick="collection['<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
'].changePrimary(true);"/>
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
                   type="checkbox" class="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['values']->value['primary']['id'];?>
"
                   <?php if ($_smarty_tpl->tpl_vars['values']->value['primary']['selected']) {?>checked="checked"
                   title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_TBSELECTED_TITLE'),$_smarty_tpl);?>
"
                   <?php } else { ?>title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SELECT_AS_TBSELECTED_TITLE'),$_smarty_tpl);?>
"<?php }?>/>
            </span>
            </td>
        <?php }?>
        <td>
        &nbsp;
        </td>
<!-- END Remove and Radio -->
    </tr>
</table>
<?php if ($_smarty_tpl->tpl_vars['includeMassUpdateField']->value) {?>
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
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
	if(collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"] && collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].secondaries_values.length == 0) {
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
			collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"].secondaries_values.push(temp_array);
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<?php }?>
	    collection_field = collection["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
"];
		collection_field.add_secondaries(collection_field.secondaries_values);	
	}

 	document.forms["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
"].elements["id_<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0"].value = "<?php echo $_smarty_tpl->tpl_vars['values']->value['primary']['id'];?>
";
 	document.forms["<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['formName'];?>
"].elements["<?php echo $_smarty_tpl->tpl_vars['vardef']->value['name'];?>
_collection_0"].value = "<?php echo $_smarty_tpl->tpl_vars['values']->value['primary']['name'];?>
";
  
    <?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['arrow'])) && $_smarty_tpl->tpl_vars['displayParams']->value['arrow'] == 'show') {?>
        setTimeout('call_js_more(collection_field)',1000);
    <?php }?>
    
	function call_js_more(c) {
	    c.js_more();
	}    
	
	function open_popup_for_email_teams(module_name, width, height, initial_filter, close_popup, hide_clear_button, popup_request_data, custom_method, user_id, popup_mode, create, metadata) {
		// set the variables that the popup will pull from
		window.document.popup_request_data = popup_request_data;
		window.document.close_popup = close_popup;
		//globally changing width and height of standard pop up window from 600 x 400 to 800 x 800 
		width = (width == 600) ? 800 : width;
		height = (height == 400) ? 800 : height;
		// launch the popup
		URL = 'index.php?'
			+ 'module=' + module_name
			+ '&action=Popup';
		
		if(initial_filter != '')
		{
			URL += '&query=true' + initial_filter;
		}
		
		if(hide_clear_button)
		{
			URL += '&hide_clear_button=true';
		}
		
		windowName = 'popup_window';
		
		windowFeatures = 'width=' + width
			+ ',height=' + height
			+ ',resizable=1,scrollbars=1';
	
		if (popup_mode == '' && popup_mode == 'undefined') {
			popup_mode='single';		
		}
		URL+='&mode='+popup_mode;
		if (create == '' && create == 'undefined') {
			create = 'false';
		}
		URL+='&create='+create;
	
		if (metadata != '' && metadata != 'undefined') {
			URL+='&metadata='+metadata;	
		}
	
	    if(custom_method != '') {
	    	URL+='&custom_method=' + custom_method;
		}
		
		if(user_id != '') {
		    URL+='&user_id=' + user_id;
		}
		
		win = window.open(URL, windowName, windowFeatures);
	
		if(window.focus)
		{
			// put the focus on the popup if the browser supports the focus() method
			win.focus();
		}
	
		return win;	
	}
<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['quickSearchCode']->value;?>

<?php }
}
