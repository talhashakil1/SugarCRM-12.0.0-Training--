{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}
{php}
	require_once('modules/Reports/templates/templates_reports.php');
	$reporter = $_smarty_tpl->getTemplateVars('reporter');
	$args = $_smarty_tpl->getTemplateVars('args');
	$header_row = $_smarty_tpl->getTemplateVars('header_row');
	$got_row = 0;
	$maximumCellSize = 0;
	$rowsAndColumnsData = array();
	$legend = array();
	$columnDataFor2ndGroup = array();
	$columnDataFor3rdGroup = array();
	$grandTotal = array();
	getColumnDataAndFillRowsFor3By3GPBY($reporter, $header_row, $rowsAndColumnsData, $columnDataFor2ndGroup, $columnDataFor3rdGroup, $maximumCellSize, $legend, $grandTotal);
	$headerColumnNameArray = getHeaderColumnNamesForMatrix($reporter, $header_row, $columnDataFor2ndGroup);
	$totalColumns = count($headerColumnNameArray) + count($columnDataFor3rdGroup) - 1;
	$_smarty_tpl->assign('legend', implode(",", $legend));
	$maximumCellSize = $maximumCellSize - $reporter->addedColumns;
{/php}

<B>{$mod_strings.LBL_REPORT_DATA_COLUMN_ORDERS}</B> {$legend|escape:'html':'UTF-8'}
<br/>
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="reportlistView">
<tr height="20">
{php}
	for ($i = 0 ; $i < count($headerColumnNameArray) ; $i++) {
		$_smarty_tpl->assign('headerColumnName', $headerColumnNameArray[$i]);
		$headerColumnClassName = "reportlistViewMatrixThS1";
		if ($i == (count($headerColumnNameArray) - 1)) {
			$headerColumnClassName = "reportlistViewMatrixThS2";
		} // if
		$_smarty_tpl->assign('headerColumnClassName', $headerColumnClassName);
		if ($i == 2) {
		$_smarty_tpl->assign('topLevelColSpan', count($columnDataFor3rdGroup));
{/php}
	<th scope="col" align='center' colspan="{$topLevelColSpan|escape:'html':'UTF-8'}" class="{$headerColumnClassName|escape:'html':'UTF-8'}" valign=middle wrap>{$headerColumnName|escape:'html':'UTF-8'}</th>
{php}
		} else {
		$_smarty_tpl->assign('topLevelRowSpan', 2);
{/php}
	<th scope="col" align='center' class="{$headerColumnClassName|escape:'html':'UTF-8'}" valign=middle wrap>{$headerColumnName|escape:'html':'UTF-8'}</th>

{php}
		} // else
	} // for
{/php}
</tr>

{php}
	if (!empty($rowsAndColumnsData)) {
{/php}
<tr height="20">
{php}
	$count = 0;
	for ($i = 0 ; $i < $totalColumns ; $i++) {
		if ($i == 0 || $i == 1 || $i == ($totalColumns -1)) {
			$headerColumn2ClassName = "reportlistViewMatrixThS4";
			if ($i == 0) {
				$headerColumn2ClassName = "reportlistViewMatrixThS3";
			}
			$_smarty_tpl->assign('headerColumn2ClassName', $headerColumn2ClassName);
{/php}
	<th scope="col" align='center' class="{$headerColumn2ClassName|escape:'html':'UTF-8'}" valign=middle wrap>&nbsp;</th>
{php}
		}  else {
		$headerColumn2ClassName = "reportlistViewMatrixThS1";
		$_smarty_tpl->assign('headerColumn2ClassName', $headerColumn2ClassName);
		$cellData = $columnDataFor3rdGroup[$count];
		if (empty($cellData)) {
			$cellData = " ";
		} // if
		$_smarty_tpl->assign('columnDataFor2ndGroup', $cellData);
		$count++;
{/php}
	<th scope="col" align='center' class="{$headerColumn2ClassName|escape:'html':'UTF-8'}" valign=middle wrap>{$columnDataFor2ndGroup}</th>
{php}
		} // else
	} // for
{/php}
</tr>

{php}
	// iteration for the group by data
	$columnDataFor2ndGroup[] = 'Total';
	$noofrows = count($columnDataFor2ndGroup) * $maximumCellSize;
	$columnDataFor3rdGroup[] = 'Total';
	$noofcolumns = (count($reporter->report_def['group_defs']) - 1) + count($columnDataFor3rdGroup);
	for ($i = 0 ; $i < count($rowsAndColumnsData) ; $i++) {
		$rowData = $rowsAndColumnsData[$i];
		$set1stGroupBy = true;
		for ($j = 0 ; $j < count($columnDataFor2ndGroup) ; $j++) {
			$topLevelGpByData = " ";
			$set2ndstGroupBy = true;
			for ($k = 0 ; $k < $maximumCellSize ; $k++) {
{/php}
			<tr height="20">
{php}
				for ($m = 0 ; $m < count($columnDataFor3rdGroup) ; $m++) {

					if ($set1stGroupBy) {
						if (isset($rowData[$headerColumnNameArray[0]])) {
							$topLevelGpByData = $rowData[$headerColumnNameArray[0]];
							if (empty($topLevelGpByData)) {
								$topLevelGpByData = " ";
							} // if
						} // if
						$_smarty_tpl->assign('topLevelGpByData', $topLevelGpByData);
						$_smarty_tpl->assign('rowSpanForTopGpByData', $noofrows);
						$dataCellClass = "reportlistViewMatrixRightEmptyData";
						$_smarty_tpl->assign('dataCellClass', $dataCellClass);
{/php}
						<td scope="col" align='center' rowspan={$rowSpanForTopGpByData|escape:'html':'UTF-8'} class="{$dataCellClass|escape:'html':'UTF-8'}" valign=middle wrap>{$topLevelGpByData}</td>
{php}
						$set1stGroupBy = false;
					} // if

					if ($set2ndstGroupBy) {

						$topLevelGp2ByData = " ";
						//if (isset($rowData[$columnDataFor2ndGroup[$j]])) {
							$topLevelGp2ByData = $columnDataFor2ndGroup[$j];
							if (empty($topLevelGp2ByData)) {
								$topLevelGp2ByData = " ";
							} // if
						//} // if
						$_smarty_tpl->assign('topLevelGpBy2Data', $topLevelGp2ByData);
						$_smarty_tpl->assign('rowSpanFor2ndGpByData', $maximumCellSize);
						$dataCellClass = "reportlistViewMatrixRightEmptyData";
						$_smarty_tpl->assign('dataCellClass', $dataCellClass);
{/php}
					<td scope="col" align='center' rowspan={$rowSpanFor2ndGpByData|escape:'html':'UTF-8'} class="{$dataCellClass|escape:'html':'UTF-8'}" valign=middle wrap>{$topLevelGpBy2Data}</td>
{php}
						$set2ndstGroupBy = false;
					} // if
					$topLevelGp3ByData = " ";
					if (isset($rowData[$columnDataFor2ndGroup[$j]])) {
						if (isset($rowData[$columnDataFor2ndGroup[$j]][$columnDataFor3rdGroup[$m]])) {
							$cellDataArray = $rowData[$columnDataFor2ndGroup[$j]][$columnDataFor3rdGroup[$m]];
							$arrayKeys = array_keys($cellDataArray);
							$cellData = $cellDataArray[$arrayKeys[$k]];
							$topLevelGp3ByData = $cellData;
							if (empty($topLevelGp3ByData)) {
								$topLevelGp3ByData = " ";
							} // if
						} // if
					} // if

					$_smarty_tpl->assign('topLevelGp3ByData', $topLevelGp3ByData);
					$dataCellClass = "reportGroupByDataMatrixEvenListRowS1";
					if ($m == (count($columnDataFor3rdGroup)-1)) {
						$dataCellClass = "reportGroupByDataMatrixEvenListRowS2";
					} // if
					if ($j == 0) {
						//$dataCellClass = "reportlistViewMatrixRightEmptyData11";
					} // if
					$_smarty_tpl->assign('dataCellClass', $dataCellClass);
{/php}
					<td scope="col" align='center' class="{$dataCellClass|escape:'html':'UTF-8'}" valign=middle wrap>{$topLevelGp3ByData}</td>
{php}

				} // for
{/php}
</tr>
{php}
			} // for

		} // for
	} // for
	$setGrandTotalString = true;
	for ($k = 0 ; $k < $maximumCellSize ; $k++) {
{/php}
	<tr height="20">
{php}
		for ($m = 0 ; $m < count($columnDataFor3rdGroup) ; $m++) {
			$grandTotalString = $grandTotal[$headerColumnNameArray[0]];
			$_smarty_tpl->assign('grandTotalData', $grandTotalString);
			$dataCellClass = "reportlistViewMatrixRightEmptyData1";
			$_smarty_tpl->assign('dataCellClass', $dataCellClass);
			if ($setGrandTotalString) {
				$setGrandTotalString = false;
				$_smarty_tpl->assign('rowSpanFor2ndGpByData', $maximumCellSize);
{/php}
	<td scope="col" align='center' colspan='2' rowspan="{$rowSpanFor2ndGpByData|escape:'html':'UTF-8'}" class="{$dataCellClass|escape:'html':'UTF-8'}" valign=middle wrap>{$grandTotalData|escape:'html':'UTF-8'}</td>
{php}
			} // if
			$grandTotalData = " ";
			if (isset($grandTotal[$columnDataFor3rdGroup[$m]])) {
				$cellDataArray = $grandTotal[$columnDataFor3rdGroup[$m]];
				$arrayKeys = array_keys($cellDataArray);
				$cellData = $cellDataArray[$arrayKeys[$k]];
				$grandTotalData = $cellData;
				if (is_array($grandTotalData)) {
					$arrayKeys = array_keys($grandTotalData);
					$cellData = $grandTotalData[$arrayKeys[$k]];
					$grandTotalData = $cellData;
					if (empty($grandTotalData)) {
						$grandTotalData = " ";
					} // if
				} else {
					if (empty($grandTotalData)) {
						$grandTotalData = " ";
					} // if
				} // else
			} // if
			$_smarty_tpl->assign('grandTotalData', $grandTotalData);
			$dataCellClass = "reportGroupByDataMatrixEvenListRowS1";
			if ($m == (count($columnDataFor3rdGroup)-1)) {
				$dataCellClass = "reportGroupByDataMatrixEvenListRowS2";
			} // if
			if ($k == ($maximumCellSize -1)) {
				$dataCellClass = "reportGroupByDataMatrixEvenListRowS3";
				if ($m == (count($columnDataFor3rdGroup)-1)) {
					$dataCellClass = "reportGroupByDataMatrixEvenListRowS4";
				} // if
			} // if
			//$dataCellClass = "reportlistViewMatrixRightEmptyData";
			$_smarty_tpl->assign('dataCellClass', $dataCellClass);
{/php}
	<td scope="col" align='center' class="{$dataCellClass|escape:'html':'UTF-8'}" valign=middle wrap>{$grandTotalData|escape:'html':'UTF-8'}</td>
{php}
		} // for
{/php}
	</tr>
{php}
	} // for
{/php}
{php}
	} else {
{/php}
<tr height="20">
{php}
	for ($j = 0 ; $j < 4 ; $j++) {
{/php}
<td scope="col" align='center' class="reportGroupByDataMatrixEvenListRowS4" valign=middle wrap>No results</td>
{php}
	} // for
{/php}
</tr>
{php}
	} // else
{/php}
</table>


{php}
template_query_table($reporter);
{/php}
