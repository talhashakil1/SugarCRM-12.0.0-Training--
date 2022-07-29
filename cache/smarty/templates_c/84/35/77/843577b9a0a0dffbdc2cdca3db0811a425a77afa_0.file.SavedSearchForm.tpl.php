<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:41:48
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/SavedSearch/SavedSearchForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3e39c1c0ab2_05371704',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '843577b9a0a0dffbdc2cdca3db0811a425a77afa' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/SavedSearch/SavedSearchForm.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3e39c1c0ab2_05371704 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
?>

<table width="100%" border="0" cellspacing="0" cellpadding="0" style="border-top: 0px none; margin-bottom: 4px" >
<tr valign='top'>
	<td width='34%' align='left' rowspan='4' colspan='2'>
		<input id='displayColumnsDef' type='hidden' name='displayColumns'>
		<input id='hideTabsDef' type='hidden' name='hideTabs'>
		<?php echo $_smarty_tpl->tpl_vars['columnChooser']->value;?>

		<br>
	</td>
	<td scope='row' align='left' width='10%'>
		<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ORDER_BY_COLUMNS','module'=>'SavedSearch'),$_smarty_tpl);?>


	</td>
	<td width='23%'>
		<select name='orderBy' id='orderBySelect'>
		</select>
	</td>
	<td scope='row' width='10%'>
		<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DIRECTION','module'=>'SavedSearch'),$_smarty_tpl);?>

	</td>
	<td width='23%'>
		<div><input id='sort_order_desc_radio' type='radio' name='sortOrder' value='DESC' <?php if ($_smarty_tpl->tpl_vars['selectedSortOrder']->value == 'DESC') {?>checked<?php }?>>&nbsp;<span onclick='document.getElementById("sort_order_desc_radio").checked = true' style="cursor: pointer; cursor: hand"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DESCENDING'];?>
</span></div>
		
		<div><input id='sort_order_asc_radio' type='radio' name='sortOrder' value='ASC' <?php if ($_smarty_tpl->tpl_vars['selectedSortOrder']->value == 'ASC') {?>checked<?php }?>>&nbsp;<span onclick='document.getElementById("sort_order_asc_radio").checked = true' style="cursor: pointer; cursor: hand"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ASCENDING'];?>
</span>
		</div>
	</td>
	</tr>

</table>
<?php echo '<script'; ?>
>
	SUGAR.savedViews.columnsMeta = <?php echo $_smarty_tpl->tpl_vars['columnsMeta']->value;?>
;
	columnsMeta = <?php echo $_smarty_tpl->tpl_vars['columnsMeta']->value;?>
;
	saved_search_select = "<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCH_SELECT']->value;?>
";
	selectedSortOrder = "<?php echo strtr((($tmp = @$_smarty_tpl->tpl_vars['selectedSortOrder']->value)===null||$tmp==='' ? 'DESC' : $tmp), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";
	selectedOrderBy = "<?php echo strtr($_smarty_tpl->tpl_vars['selectedOrderBy']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";


	//this populates the label that shows the name of the current saved view
	//The label is located under the update/delete buttons
	function fillInLabels(){
		//this javascript runs and populates values in savedSearchForm.tpl
		x = document.getElementById('saved_search_select');
		if ((typeof(x) != 'undefined' && x != null) && x.selectedIndex !=0) {
            curr_search_name = document.getElementById('curr_search_name');
            curr_search_name.innerHTML = '';
            curr_search_name.appendChild(document.createTextNode('"'+x.options[x.selectedIndex].text+'"'));
			document.getElementById('ss_update').disabled = false;
			document.getElementById('ss_delete').disabled = false;
		}else{
			document.getElementById('ss_update').disabled = true;
			document.getElementById('ss_delete').disabled = true;
			document.getElementById('curr_search_name').innerHTML = '';
		}
	}
	//call scripts that need to get run onload of this form.  This function is called when image
	//to collapse/show subpanels is loaded
	function loadSSL_Scripts(){
		//this will fill in the name of the current module, and enable/disable update/delete buttons
		fillInLabels();
		//this populates the order by dropdown, and activates the chooser widget.
		SUGAR.savedViews.handleForm();
	}

<?php echo '</script'; ?>
>


<?php }
}
