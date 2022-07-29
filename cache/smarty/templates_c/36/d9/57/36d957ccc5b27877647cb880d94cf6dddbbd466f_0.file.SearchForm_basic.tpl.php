<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:17:52
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/ACLRoles/SearchForm_basic.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3de0052bdb0_20784496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36d957ccc5b27877647cb880d94cf6dddbbd466f' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/ACLRoles/SearchForm_basic.tpl',
      1 => 1659100672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3de0052bdb0_20784496 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
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
		
		<label for='name_basic' ><?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'ACLRoles'),$_smarty_tpl);?>
</label>
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
    maxlength='150' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      accesskey='9'  >
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
<?php }
}
