<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:09
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/SearchForm_basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe4319271fa5_26844408',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7afb5d0f254db0907a95e7a75cfc2675e69fe1ff' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/SearchForm_basic.tpl',
      1 => 1660830489,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe4319271fa5_26844408 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>

<?php if (!(isset($_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']))) {?>
	<?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns']);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('basicMaxColumns', $_smarty_tpl->tpl_vars['templateMeta']->value['maxColumnsBasic']);
}
echo '<script'; ?>
>
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_HELP'),
			width: 700
		});
		
		$('#filterHelp').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
<?php echo '</script'; ?>
>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
      
      
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['name_basic']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='name_basic'> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'PdfManager'),$_smarty_tpl);?>

		</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name_basic']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name_basic']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      accesskey='9'  >
   						<?php }?>
		   	</td>
    
      
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['base_module_basic']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='base_module_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_BASE_MODULE','module'=>'PdfManager'),$_smarty_tpl);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php echo smarty_function_html_options(array('id'=>'base_module_basic','name'=>'base_module_basic[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['base_module_basic']['options'],'size'=>"6",'style'=>"width: 150px",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['base_module_basic']['value']),$_smarty_tpl);?>


   						<?php }?>
		   	</td>
    
      
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['published_basic']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
			<label for='published_basic'> <?php echo smarty_function_sugar_translate(array('label'=>'LBL_PUBLISHED','module'=>'PdfManager'),$_smarty_tpl);?>

		</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<?php echo smarty_function_html_options(array('id'=>'published_basic','name'=>'published_basic[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['published_basic']['options'],'size'=>"6",'style'=>"width: 150px",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['published_basic']['value']),$_smarty_tpl);?>


   						<?php }?>
		   	</td>
    
      
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['basicMaxColumns']->value,'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['basicMaxColumns']->value == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='1%' >
		
		<label for='team_name_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'PdfManager'),$_smarty_tpl);?>
</label>
    	</td>

	
	<td  nowrap="nowrap" width='1%'>
			
<input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
"  class="sqsEnabled"  tabindex="1"   id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
" size="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['value'], ENT_QUOTES, 'UTF-8', true);?>
" title='' autocomplete="off"  >
<input type="hidden"  id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_id_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_id_basic']['value'], ENT_QUOTES, 'UTF-8', true);?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
"  tabindex="1"   title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT_BUTTON_TITLE'];?>
" class="button firstChild" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SELECT_BUTTON_LABEL'];?>
" onclick='open_popup("<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['module'], ENT_QUOTES, 'UTF-8', true);?>
", 600, 400, "", true, false, {"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"team_id_basic","name":"team_name_basic"}}, "single", true);'><?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LBL_ID_FF_SELECT'],'name'=>"id-ff-select",'ext'=>".png",'other_attributes'=>''),$_smarty_tpl);?>
</button><button type="button" name="btn_clr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
"  tabindex="1"   title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
" class="button lastChild" onclick="this.form.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_name_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
.value = ''; this.form.<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['team_id_basic']['name'], ENT_QUOTES, 'UTF-8', true);?>
.value = '';" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
"><?php echo smarty_function_sugar_getimage(array('name'=>"id-ff-clear",'alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LBL_ID_FF_CLEAR'],'ext'=>".png",'other_attributes'=>''),$_smarty_tpl);?>
</button>
</span>

   						<?php }?>
		   	</td>
    <?php if (count($_smarty_tpl->tpl_vars['formData']->value) >= $_smarty_tpl->tpl_vars['basicMaxColumns']->value+1) {?>
    </tr>
    <tr>
	<td colspan="<?php echo $_smarty_tpl->tpl_vars['searchTableColumnCount']->value;?>
">
    <?php } else { ?>
	<td class="sumbitButtons">
    <?php }?>
        <input tabindex="2" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
" onclick="SUGAR.savedViews.setChooser();" class="button" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
" id="search_form_submit"/>&nbsp;
	    <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
' onclick='SUGAR.searchForm.clear_form(this.form); return false;' class='button' type='button' name='clear' id='search_form_clear' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
        <?php if ($_smarty_tpl->tpl_vars['HAS_ADVANCED_SEARCH']->value) {?>
	    &nbsp;&nbsp;<a id="advanced_search_link" onclick="SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search')" href="javascript:void(0);" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
" ><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_ADVANCED_SEARCH'];?>
</a>
	    <?php }?>
    </td>
	<td class="helpIcon" width="*"><img alt="Help" border='0' id="filterHelp" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
'></td>
	</tr>
</table>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_basic","modified_user_id_basic"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_created_by_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_basic","created_by_basic"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_team_name_basic']={"form":"search_form","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name_basic","team_id_basic"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_assigned_user_name_basic']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_basic","assigned_user_id_basic"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php }
}
