<?php
/* Smarty version 3.1.39, created on 2022-08-19 16:31:29
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_summary_combo_view.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff7491bd7048_67362642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a998047d4e537149421682d1bc6f5c0047d038f' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_summary_combo_view.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff7491bd7048_67362642 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.in_array.php','function'=>'smarty_modifier_in_array',),));
?>

<?php 
	global $mod_strings;
?>

<br/>

<input type="hidden" name="expandAllState" id="expandAllState" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['expandAll']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<input class="button" name="expandCollapse" id="expandCollapse" title="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_COLLAPSE_ALL'];?>
"
    type="button"
    value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_COLLAPSE_ALL'];?>
" 
    onclick="expandCollapseAll('false');">
<br/><br/>
<?php 
require_once('modules/Reports/templates/templates_reports.php');
$reporter = $_smarty_tpl->getTemplateVars('reporter');
$args = $_smarty_tpl->getTemplateVars('args');
$header_row = $_smarty_tpl->getTemplateVars('header_row');
$columns_row = $_smarty_tpl->getTemplateVars('columns_row');
$countKeyIndex = $_smarty_tpl->getTemplateVars('countKeyIndex');
$count = 0;
$totalGroupByCount = 0;
$topLevelGroupByCount = 0;
$previousRow = array();
$counterArray = array();
$indexOfGroupByStart = 0;
$rowIdToCountArray = array();
$forLoopIndexForGroupBy;
$topLevelGroupColumnNameId = "";
$got_row = 0;                                                                                   
$divCounter = 0;
while (( $row = $reporter->get_summary_next_row()) != 0 ) {
	$got_row = 1;                                                                                   
	$startTable = true;
	$indexOfGroupByStart = whereToStartGroupByRowSummaryCombo($reporter, $count, $previousRow, $row);
	if ($indexOfGroupByStart != 0) {
		$startTable = false;
	} // if
	$previousRow = $row;
	template_header_row($header_row, $args, true, $_smarty_tpl);
if ($count != 0 && $startTable) {
?>
			</table>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportGroupBySpaceTableView">
				<tr height=1>
					<td width="3%">&nbsp;

					</td>
				</tr>
			</table>
<?php 
} // if
if ($startTable) {
	$spanId = "img_combo_summary_div_" . $divCounter;
	$divId = "combo_summary_div_" . $divCounter;
	$counterArray = getCounterArrayForGroupBy($reporter, $topLevelGroupByCount);
	$rowId = generateIdForGroupByIndex($counterArray, 0);
	$rowIdToCountArray[$rowId] = 0;
	$groupByColumnName = getGroupByColumnName($reporter, $indexOfGroupByStart, $header_row, $row);
	$indexOfGroupByStart++;
	$topLevelGroupClass = "reportGroupNByTable";
	if (count($reporter->report_def['group_defs']) > 1) {
		$topLevelGroupClass = "reportGroup1ByTable";
	} // if
	$_smarty_tpl->assign('topLevelGroupClass', $topLevelGroupClass);
	$_smarty_tpl->assign('groupByColumnName', $groupByColumnName);
	$_smarty_tpl->assign('rowId', $rowId);
	$_smarty_tpl->assign('spanId', $spanId);
	$_smarty_tpl->assign('divId', $divId);
	$topLevelGroupByCount++;
?>
<table id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['divId']->value, ENT_QUOTES, 'UTF-8', true);?>
" width="100%" border="0" cellpadding="0" cellspacing="0" class="reportGroupViewTable">
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topLevelGroupClass']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				<tr height="20" >				
				  <th align='left' id = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rowId']->value, ENT_QUOTES, 'UTF-8', true);?>
" name= "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rowId']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="reportGroup1ByTableEvenListRowS1" valign=middle nowrap><span id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['spanId']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="javascript:expandCollapseComboSummaryDivTable('<?php echo strtr($_smarty_tpl->tpl_vars['divId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ALT_SHOW'];?>
" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'basic_search.gif'),$_smarty_tpl);?>
"/></a></span>&nbsp;<?php echo $_smarty_tpl->tpl_vars['groupByColumnName']->value;?>

				  </th>
				</tr>
			</table>
		</td>
	</tr>
<?php 
$totalGroupByCount++;
$divCounter++;
} // if
if (($_smarty_tpl->tpl_vars['show_pagination']->value != '')) {
echo $_smarty_tpl->tpl_vars['pagination_data']->value;?>

<?php }?>

<?php 
for ($forLoopIndexForGroupBy = $indexOfGroupByStart ; $forLoopIndexForGroupBy < count($reporter->report_def['group_defs']) ; $forLoopIndexForGroupBy++) {
	$groupByColumnName = getGroupByColumnName($reporter, $indexOfGroupByStart, $header_row, $row);
	$spaces = "&nbsp;&nbsp;&nbsp;";
	$reportGroupByClass = "reportGroupNByTable";
	for ($spacesCount = 0 ; $spacesCount < $indexOfGroupByStart ; $spacesCount++) {
		$spaces = $spaces . $spaces;
	} // for
	$rowId = generateIdForGroupByIndex($counterArray, $forLoopIndexForGroupBy);
	if (array_key_exists($rowId, $rowIdToCountArray)) {
		$counterArray[$forLoopIndexForGroupBy] = $counterArray[$forLoopIndexForGroupBy] + 1;	
		$rowId = generateIdForGroupByIndex($counterArray, $forLoopIndexForGroupBy);
	} 
	$rowIdToCountArray[$rowId] = 0;
	$newRowId = $rowId;
	if ($forLoopIndexForGroupBy < (count($reporter->report_def['group_defs']) -1)) {
		$reportGroupByClass = "reportGroup1ByTable";
	} // if
	if ($forLoopIndexForGroupBy == (count($reporter->report_def['group_defs']) -1)) {
		if ($countKeyIndex != -1) {
			$newRowId = "";
		} // if
	} // if
	$_smarty_tpl->assign('reportGroupByClass', $reportGroupByClass);
	$_smarty_tpl->assign('spaces', $spaces);
	$indexOfGroupByStart++;
	$_smarty_tpl->assign('groupByColumnName', $groupByColumnName);
	$_smarty_tpl->assign('rowId', $newRowId);
?>
	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reportGroupByClass']->value, ENT_QUOTES, 'UTF-8', true);?>
">
				<tr height="20" class="reportGroupNByTableEvenListRowS1">
				  <td align='left' id = "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rowId']->value, ENT_QUOTES, 'UTF-8', true);?>
" name= "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rowId']->value, ENT_QUOTES, 'UTF-8', true);?>
" width="30%" nowrap class="reportGroupNByTableEvenListRowS1"><?php echo $_smarty_tpl->tpl_vars['spaces']->value;
echo $_smarty_tpl->tpl_vars['groupByColumnName']->value;?>
</td>
				</tr>
			</table>
		</td>
	</tr>
<?php 
} // for
?>

<?php 
	//echo template_end_table($args);
	//echo "<div id='". $divId ."' style='padding-left: 30px;display:none'>";
	template_header_row($columns_row, $args, false, $_smarty_tpl);
?>

	<tr>
		<td>
			<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportGroupByDataTableHeader">
				<tr>
					<td>
						<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportDataChildtablelistView">
						<?php if (($_smarty_tpl->tpl_vars['show_pagination']->value != '')) {?>
						<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value;?>

						<?php }?>
							<tr height="20">
<?php if (($_smarty_tpl->tpl_vars['isSummaryCombo']->value)) {?>
								<th scope="col" align='center' class="reportGroupByDataChildTablelistViewThS1" valign=middle nowrap>&nbsp;</th>
<?php }?>

<?php 
	$count1 = 0;
	$_smarty_tpl->assign('count1', $count1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_row']->value, 'cell', false, 'module');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
	<?php if ((($_smarty_tpl->tpl_vars['args']->value['group_column_is_invisible'] != '') && ($_smarty_tpl->tpl_vars['args']->value['group_pos'] == $_smarty_tpl->tpl_vars['count1']->value))) {
$count1 = $count1 + 1;
	$_smarty_tpl->assign('count1', $count1);
?>
	<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['cell']->value == '') {
$cell = "&nbsp;";
	$_smarty_tpl->assign('cell', $cell);
?>
	<?php }?>	
								<th scope="col" align='center' class="reportGroupByDataChildTablelistViewThS1" valign=middle nowrap>	
	
	<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

								</th>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
							</tr>
<?php 
  		if ($reporter->current_summary_row_count > 0) {
            setCountForRowId($rowIdToCountArray, $rowId, $row, $countKeyIndex);
  			for($i=0; $i < $reporter->current_summary_row_count; $i++ ) {
				if (($column_row = $reporter->get_next_row() ) != 0 ) {
					template_list_row($column_row, true, false, '', $_smarty_tpl);
?>
<tr height=20>
<?php if (($_smarty_tpl->tpl_vars['isSummaryComboHeader']->value)) {?>

<?php }
$count1 = 0;
	$_smarty_tpl->assign('count1', $count1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column_row']->value['cells'], 'cell', false, 'module');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
	<?php if ((($_smarty_tpl->tpl_vars['column_row']->value['group_column_is_invisible'] != '') && (smarty_modifier_in_array($_smarty_tpl->tpl_vars['count1']->value,$_smarty_tpl->tpl_vars['column_row']->value['group_pos'])))) {
$count1 = $count1 + 1;
	$_smarty_tpl->assign('count1', $count1);
?>
	<?php } else { ?>
	<?php if ($_smarty_tpl->tpl_vars['cell']->value == '') {
$cell = "&nbsp;";
	$_smarty_tpl->assign('cell', $cell);
?>
	<?php }?>	
									<td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
%" valign=TOP class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row_class']->value[$_smarty_tpl->tpl_vars['module']->value], ENT_QUOTES, 'UTF-8', true);?>
" bgcolor="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_color']->value, ENT_QUOTES, 'UTF-8', true);?>
" scope="row">
	
	<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

									</td>
	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
								</tr>
				
<?php 
			   } else {
			     break;
			   } // else
  			} // for
?>							
  								</table>

								</td>
							</tr>
						</table>
					</td>
				</tr>

<?php 

  		} else {
			echo template_no_results();
  		}
		//echo template_end_table($args);
		//echo "</div>";
		$count++;
} // while
if (!$got_row) {
	echo template_summary_combo_view_no_results($args);
	echo template_end_table($args);
} // if	
$_smarty_tpl->assign('divCounter', $divCounter);
global $global_json;
if (count($reporter->report_def['group_defs']) > 1) {
	$_smarty_tpl->assign('totalGroupCountArrayString', $global_json->encode($rowIdToCountArray));
}
echo '<script'; ?>
 language="javascript">
var totalGroupCountArrayString = '<?php echo strtr($_smarty_tpl->tpl_vars['totalGroupCountArrayString']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var totalDivCounter = <?php echo strtr($_smarty_tpl->tpl_vars['divCounter']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
;
var groupCountObject = new Object();

if (totalGroupCountArrayString != '') {
	groupCountObject = YAHOO.lang.JSON.parse(totalGroupCountArrayString);
} // if

function displayGroupCount() {
	for (i in groupCountObject) {
		elem = document.getElementById(i);
		if (elem != null) {
			elem.innerHTML = trim(elem.innerHTML) + ', ' + SUGAR.language.get('app_strings','LBL_REPORT_NEWREPORT_COLUMNS_TAB_COUNT') +' = ' + groupCountObject[i];
		}
	} // for
} // fn

function showHideTableRows(divId, toShow) {
	var tableElm = document.getElementById(divId);
	for (i = 1 ; i < tableElm.rows.length ; i++) {
		if (toShow) {
			tableElm.rows[i].style.display = "";
		} else {
			tableElm.rows[i].style.display = "none";
		} // else
	} // for
}

function expandCollapseAll(expandAll, makeAjaxCall) {
	expandCollapseButton = document.getElementById('expandCollapse');
	if (expandAll == 'false') {
		if (makeAjaxCall == null) {
			saveReportOptionsState("expandAll", "0");
		}
		expandCollapseButton.title = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_EXPAND_ALL'];?>
";
		expandCollapseButton.value = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_EXPAND_ALL'];?>
";
		expandCollapseButton.onclick = function() { expandCollapseAll('true') };
	} else {
		if (makeAjaxCall == null) {
			saveReportOptionsState("expandAll", "1");
		} // if
		expandCollapseButton.title = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_COLLAPSE_ALL'];?>
";
		expandCollapseButton.value = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_COLLAPSE_ALL'];?>
";
		expandCollapseButton.onclick = function() { expandCollapseAll('false') };
	} // else
	for (var i = 0 ; i < totalDivCounter ; i++) {
		expandCollapseComboSummaryDivTable(("combo_summary_div_" + i), expandAll);
	} // for
} // fn


function doExpandCollapseAll() {
	var expandAllState = document.getElementById('expandAllState');
	if (expandAllState != null && (expandAllState.value == "0")) {
		expandCollapseAll('false', false);
	} // if
} // fn

function expandCollapseComboSummaryDiv(divId) {

}

function expandCollapseComboSummaryDivTable(divId, expandAll) {
	if (document.getElementById(divId)) {
		var searchReturn = document.getElementById("img_" + divId).innerHTML.search(/advanced_search/);
		if (expandAll != null) {
			if (expandAll == 'true') {
				searchReturn = 1;
			} else {
				searchReturn = -1;
			} // else
		} // if
		if (searchReturn != -1) {
			showHideTableRows(divId, true);
			//document.getElementById(divId).style.display = "";
			document.getElementById("img_" + divId).innerHTML = 
			document.getElementById("img_" + divId).innerHTML.replace(/advanced_search/,"basic_search");
			document.getElementById('expanded_combo_summary_divs').value += divId + " ";
		} else {
			//document.getElementById(divId).style.display = "none";
			showHideTableRows(divId, false);
			document.getElementById("img_" + divId).innerHTML = 			
			document.getElementById("img_" + divId).innerHTML.replace(/basic_search/,"advanced_search");
			document.getElementById('expanded_combo_summary_divs').value = 
			document.getElementById('expanded_combo_summary_divs').value.replace(divId,"");

		} // else
	}
}


<?php echo '</script'; ?>
>
<?php 
if ( ! isset($header_row[0]['norows'])) {
	echo get_form_header( $mod_strings['LBL_GRAND_TOTAL'],"", false); 
} // if
if ( $reporter->has_summary_columns()) {
	// start template_total_table code
	global $mod_strings;
	$total_header_row = $reporter->get_total_header_row(); 
	$total_row = $reporter->get_summary_total_row();
	if ( isset($total_row['group_pos'])) {
		$args['group_pos'] = $total_row['group_pos'];
	} // if
	if ( isset($total_row['group_column_is_invisible'])) {
		$args['group_column_is_invisible'] = $total_row['group_column_is_invisible'];
	} // if
 	$reporter->layout_manager->setAttribute('no_sort',1);
  	echo get_form_header( $mod_strings['LBL_GRAND_TOTAL'],"", false); 
  	template_header_row($total_header_row, $args, false, $_smarty_tpl);
?>
	<table width="100%" border="0" cellpadding="0" cellspacing="0" class="list view">
	<?php if (($_smarty_tpl->tpl_vars['show_pagination']->value != '')) {?>
	<?php echo $_smarty_tpl->tpl_vars['pagination_data']->value;?>

	<?php }?>
	<tr height="20">
	<?php if (($_smarty_tpl->tpl_vars['isSummaryCombo']->value)) {?>
	<th scope="col" align='left'  valign=middle nowrap>&nbsp;</th>
	<?php }?>
	<?php if (($_smarty_tpl->tpl_vars['isSummaryComboHeader']->value)) {?>
	<th><span id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['divId']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo strtr($_smarty_tpl->tpl_vars['divId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ALT_SHOW'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['image_path']->value;?>
advanced_search.gif"/></a></span></th>
	<?php }?>
	<?php 
		$count = 0;
		$_smarty_tpl->assign('count', $count);
	?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['header_row']->value, 'cell', false, 'module');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
		<?php if ((($_smarty_tpl->tpl_vars['args']->value['group_column_is_invisible'] != '') && ($_smarty_tpl->tpl_vars['args']->value['group_pos'] == $_smarty_tpl->tpl_vars['count']->value))) {?>
	<?php 	
		$count = $count + 1;
		$_smarty_tpl->assign('count', $count);
	?>
		<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['cell']->value == '') {?>
	<?php 	
		$cell = "&nbsp;";
		$_smarty_tpl->assign('cell', $cell);
	?>
		<?php }?>		
		<td scope="col" align='left'  valign=middle nowrap>	
		
		<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</tr>
<?php 
  	if (!empty($total_row)) {
    	template_list_row($total_row, false, false, '', $_smarty_tpl);
?>
		<tr height=20 class="<?php echo $_smarty_tpl->tpl_vars['row_class']->value;?>
" onmouseover="setPointer(this, '<?php echo strtr($_smarty_tpl->tpl_vars['rownum']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', 'over', '<?php echo strtr($_smarty_tpl->tpl_vars['bg_color']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['hilite_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['click_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');" onmouseout="setPointer(this, '<?php echo strtr($_smarty_tpl->tpl_vars['rownum']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', 'out', '<?php echo strtr($_smarty_tpl->tpl_vars['bg_color']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['hilite_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['click_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');" onmousedown="setPointer(this, '<?php echo strtr($_smarty_tpl->tpl_vars['rownum']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', 'click', '<?php echo strtr($_smarty_tpl->tpl_vars['bg_color']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['hilite_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
', '<?php echo strtr($_smarty_tpl->tpl_vars['click_bg']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');">
		<?php if (($_smarty_tpl->tpl_vars['isSummaryComboHeader']->value)) {?>
		<td><span id="img_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['divId']->value, ENT_QUOTES, 'UTF-8', true);?>
"><a href="javascript:expandCollapseComboSummaryDiv('<?php echo strtr($_smarty_tpl->tpl_vars['divId']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')"><img width="8" height="8" border="0" absmiddle="" alt="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ALT_SHOW'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['image_path']->value;?>
advanced_search.gif"/></a></span></td>
		<?php }?>
		<?php 
			$count = 0;
			$_smarty_tpl->assign('count', $count);
		?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['column_row']->value['cells'], 'cell', false, 'module');
$_smarty_tpl->tpl_vars['cell']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['module']->value => $_smarty_tpl->tpl_vars['cell']->value) {
$_smarty_tpl->tpl_vars['cell']->do_else = false;
?>
			<?php if ((($_smarty_tpl->tpl_vars['column_row']->value['group_column_is_invisible'] != '') && (smarty_modifier_in_array($_smarty_tpl->tpl_vars['count']->value,$_smarty_tpl->tpl_vars['column_row']->value['group_pos'])))) {?>
		<?php 	
			$count = $count + 1;
			$_smarty_tpl->assign('count', $count);
		?>
			<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['cell']->value == '') {?>
		<?php 	
			$cell = "&nbsp;";
			$_smarty_tpl->assign('cell', $cell);
		?>
			<?php }?>
			
			<td width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['width']->value, ENT_QUOTES, 'UTF-8', true);?>
%" align="left" valign=TOP class="<?php echo $_smarty_tpl->tpl_vars['row_class']->value;?>
" bgcolor="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['bg_color']->value, ENT_QUOTES, 'UTF-8', true);?>
" scope="row">
			
			<?php echo $_smarty_tpl->tpl_vars['cell']->value;?>

			<?php }?>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</tr>
		
<?php 
  	} else {
		echo template_no_results();
  	}
	echo template_end_table($args);
  	// end template_total_table code
  //template_total_table($reporter);
} // if
template_query_table($reporter);
}
}
