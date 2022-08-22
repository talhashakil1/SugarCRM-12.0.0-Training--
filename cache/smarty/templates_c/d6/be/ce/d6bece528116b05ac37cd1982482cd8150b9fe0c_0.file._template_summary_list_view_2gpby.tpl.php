<?php
/* Smarty version 3.1.39, created on 2022-08-19 17:07:42
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_summary_list_view_2gpby.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff7d0e2a10c3_94348179',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6bece528116b05ac37cd1982482cd8150b9fe0c' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_template_summary_list_view_2gpby.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff7d0e2a10c3_94348179 (Smarty_Internal_Template $_smarty_tpl) {
require_once('modules/Reports/templates/templates_reports.php');
	$reporter = $_smarty_tpl->getTemplateVars('reporter');
	$args = $_smarty_tpl->getTemplateVars('args');
	$header_row = $_smarty_tpl->getTemplateVars('header_row');
	$got_row = 0;
	$maximumCellSize = 0;
	$rowsAndColumnsData = array();
	$legend = array();
	$columnDataFor2ndGroup = array();
	$columnDataArray = getColumnDataAndFillRowsFor2By2GPBY($reporter, $header_row, $rowsAndColumnsData, $columnDataFor2ndGroup, 1, $maximumCellSize, $legend);
	$headerColumnNameArray = getHeaderColumnNamesForMatrix($reporter, $header_row, $columnDataFor2ndGroup);
	$columnNameArray = getColumnNamesForMatrix($reporter, $header_row, $columnDataFor2ndGroup);
	$totalColumns = count($headerColumnNameArray) + count($columnDataFor2ndGroup) - 1;
	$_smarty_tpl->assign('legend', $legend);
	$maximumCellSize = $maximumCellSize - $reporter->addedColumns;
	$_smarty_tpl->assign('legend', implode(",", $legend));
?>

<B><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_DATA_COLUMN_ORDERS'];?>
</B> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['legend']->value, ENT_QUOTES, 'UTF-8', true);?>

<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportlistView">
<tr height="20">
<?php 
	for ($i = 0 ; $i < count($headerColumnNameArray) ; $i++) {
		$_smarty_tpl->assign('headerColumnName', $headerColumnNameArray[$i]);
		$headerColumnClassName = "reportlistViewMatrixThS1";
		if ($i == (count($headerColumnNameArray) - 1)) {
			$headerColumnClassName = "reportlistViewMatrixThS2";
		} // if
		$_smarty_tpl->assign('headerColumnClassName', $headerColumnClassName);
		if ($i == 1) {
		$_smarty_tpl->assign('topLevelColSpan', count($columnDataFor2ndGroup));
?>
	<th scope="col" align='center' colspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topLevelColSpan']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerColumnClassName']->value, ENT_QUOTES, 'UTF-8', true);?>
" valign=middle wrap><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerColumnName']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>
<?php 
		} else {
		$rowSpan = 2;
		if (count($columnDataFor2ndGroup) == 0) {
			$rowSpan = 1;
		} // if
		$_smarty_tpl->assign('topLevelRowSpan', $rowSpan);
?>
	<th scope="col" align='center' rowspan="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['topLevelRowSpan']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerColumnClassName']->value, ENT_QUOTES, 'UTF-8', true);?>
" valign=middle wrap><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerColumnName']->value, ENT_QUOTES, 'UTF-8', true);?>
</td>

<?php 
		} // else
	} // for
?>
</tr>
<?php 
	if ($totalColumns > 2) {
?>
<tr height="20">
<?php 
	$count = 0;
	for ($i = 0 ; $i < $totalColumns ; $i++) {
		if ($i == 0 || $i == ($totalColumns -1)) {
			continue;
		}  else {
		$headerColumn2ClassName = "reportlistViewMatrixThS1";
		$_smarty_tpl->assign('headerColumn2ClassName', $headerColumn2ClassName);
		$cellData = $columnDataFor2ndGroup[$count];
		if (empty($cellData)) {
			$cellData = " ";
		} // if
		$_smarty_tpl->assign('columnDataFor2ndGroup', $cellData);
		$count++;
?>
	<th scope="col" align='center' class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['headerColumn2ClassName']->value, ENT_QUOTES, 'UTF-8', true);?>
" valign=middle wrap><?php echo $_smarty_tpl->tpl_vars['columnDataFor2ndGroup']->value;?>
</td>
<?php 
		} // else
	} // for
?>
</tr>
<?php 
	} // if
// iteration for the group by data
	for ($i = 0 ; $i < count($rowsAndColumnsData) ; $i++) {
		$rowData = $rowsAndColumnsData[$i];
		for ($k = 0 ; $k < $maximumCellSize ; $k++) {
?>
		<tr height="20">
<?php 
		for ($j = 0 ; $j < count($columnNameArray) ; $j++) {
			$cellData = " ";
			if ($j == 0 ) {
				if ($k != 0) {
					continue;
				} // if
				if (isset($rowData[$columnNameArray[$j]])) {
					$cellData = $rowData[$columnNameArray[$j]];
				} // if
				if (empty($cellData)) {
					$cellData = " ";
				} // if
				$_smarty_tpl->assign('cellData', $cellData);
				$_smarty_tpl->assign('rowSpanForData', $maximumCellSize);
				$dataCellClass = "reportlistViewMatrixRightEmptyData";
				if ($i == (count($rowsAndColumnsData)-1)) {
					$dataCellClass = "reportlistViewMatrixRightEmptyData1";
				} // if
				$_smarty_tpl->assign('dataCellClass', $dataCellClass);
?>
	<th scope="col" ROWSPAN='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['rowSpanForData']->value, ENT_QUOTES, 'UTF-8', true);?>
' align='center' class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dataCellClass']->value, ENT_QUOTES, 'UTF-8', true);?>
" valign=middle wrap><?php echo $_smarty_tpl->tpl_vars['cellData']->value;?>
</td>
<?php 
			} else {
				$cellData = " ";
				if (isset($rowData[$columnNameArray[$j]])) {
					$cellDataArray = $rowData[$columnNameArray[$j]];
					if (is_array($cellDataArray)) {
						$arrayKeys = array_keys($cellDataArray);
						$cellData = $cellDataArray[$arrayKeys[$k]];
						if ($j == 1) {
							//$cellData = $arrayKeys[$k] . " = " . $cellData;
						} // if
						//$cellData = " ";
					} else {
						$cellData = " ";
					} // else
				} // if
				$_smarty_tpl->assign('cellData', $cellData);
				$dataCellClass = "reportGroupByDataMatrixEvenListRowS1";
				if ($j == (count($columnNameArray)-1)) {
					$dataCellClass = "reportGroupByDataMatrixEvenListRowS2";
				} // if
				if ($i == (count($rowsAndColumnsData)-1)) {
					if ($k == ($maximumCellSize -1)) {
						$dataCellClass = "reportGroupByDataMatrixEvenListRowS3";
						if ($j == (count($columnNameArray)-1)) {
							$dataCellClass = "reportGroupByDataMatrixEvenListRowS4";
						} // if
					} // if
				} // if

				$_smarty_tpl->assign('dataCellClass', $dataCellClass);
?>
	<td scope="col" align='center' class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['dataCellClass']->value, ENT_QUOTES, 'UTF-8', true);?>
" valign=middle wrap><?php echo $_smarty_tpl->tpl_vars['cellData']->value;?>
</td>
<?php 
			} // else
		} // for
?>
</tr>
<?php 
		} // for
} // for
	if (empty($rowsAndColumnsData)) {
?>
<tr height="20">
<?php 
		$emptyRowColumns = 2; // This is for 1 group by and 1 grand total
		if (count($columnDataFor2ndGroup) == 0) {
			$emptyRowColumns = $emptyRowColumns + 1;
		} else {
			$emptyRowColumns = $emptyRowColumns + count($columnDataFor2ndGroup);
		} // else
		for ($j = 0 ; $j < $emptyRowColumns ; $j++) {
?>
<td scope="col" align='center' class="reportGroupByDataMatrixEvenListRowS4" valign=middle wrap>No results</td>
<?php 
		} // for
	} // if
?>
</tr>
</table>
<?php 
template_query_table($reporter);
?>

<?php }
}
