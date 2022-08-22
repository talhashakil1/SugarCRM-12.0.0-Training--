<?php
/* Smarty version 3.1.39, created on 2022-08-18 19:03:35
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/ReportsWizard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe46b75a3ed9_00842075',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c407220d158b6eeea5c5e210a0e24102452f61b' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/ReportsWizard.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe46b75a3ed9_00842075 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),));
echo $_smarty_tpl->tpl_vars['chartResources']->value;?>

<div id='progress_div' ></div>
<?php echo '<script'; ?>
>
document.getElementById('progress_div').innerHTML = '<?php echo smarty_function_sugar_getimage(array('name'=>"bar_loader",'alt'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_LOADING'],'ext'=>".gif",'other_attributes'=>''),$_smarty_tpl);?>
';
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript" src="cache/modules/modules_def_<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['USER_ID_MD5']->value;?>
.js?v=_<?php echo $_smarty_tpl->tpl_vars['ENTROPY']->value;?>
"><?php echo '</script'; ?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['fiscalStartDate']->value)) {
echo '<script'; ?>
 type="text/javascript" src="cache/modules/modules_def_fiscal_<?php echo $_smarty_tpl->tpl_vars['LANG']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['USER_ID_MD5']->value;?>
.js?v=_<?php echo $_smarty_tpl->tpl_vars['ENTROPY']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'vendor/ytree/TreeView/css/folders/tree.css'),$_smarty_tpl);?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Reports/tpls/reports.css'),$_smarty_tpl);?>
" />
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/reports.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/FiltersWidget.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/SugarFields/Fields/Teamset/Teamset.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<form name="ReportsWizardForm" id="ReportsWizardForm" method="post" action="index.php">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

	<input type="hidden" name="module" value="Reports">
	<input type="hidden" name="current_module" value="">
	<input type="hidden" name="page" value="report">
	<input type="hidden" name="action" value="ReportsWizard">
	<input type="hidden" id="return_module" name="return_module" value="Reports">
	<input type="hidden" id="return_action" name="return_action" value="ReportsWizardType">
	<input type="hidden" name="run_query" value="0">
	<input type="hidden" name="save_and_run_query" value="0">
    <input type="hidden" name="current_step" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['current_step']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['record']->value;?>
">
	<input type="hidden" name="save_report" value="0">
	<input type="hidden" name="is_delete" value="0">
	<input type="hidden" name="report_def">
	<input type="hidden" name="panels_def">
	<input type="hidden" name="filters_defs">
	<input type="hidden" name='expanded_combo_summary_divs' id='expanded_combo_summary_divs' value=''>
	<input type="hidden" name='report_offset' value ="<?php echo $_smarty_tpl->tpl_vars['report_offset']->value;?>
">	
	<input type="hidden" name='sort_by' value ="<?php echo $_smarty_tpl->tpl_vars['sort_by']->value;?>
">
	<input type="hidden" name='sort_dir' value ="<?php echo $_smarty_tpl->tpl_vars['sort_dir']->value;?>
">
	<input type="hidden" name='summary_sort_by' value ="<?php echo $_smarty_tpl->tpl_vars['summary_sort_by']->value;?>
">
	<input type="hidden" name='summary_sort_dir' value ="<?php echo $_smarty_tpl->tpl_vars['summary_sort_dir']->value;?>
">
	
	<div id='wizard_outline_div' width='20%' >
	</div>
	<div id='report_type_div' style='display:none' class="edit view reportwizard">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td colspan=4 ><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SELECT_REPORT_TYPE'];?>
<br><br>
				</td>
			</tr>		
			<tr valign="top">
				<td width="35%">
					<table  border="0" cellspacing="2" cellpadding="0" >	
						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'RowsAndColumns.gif'),$_smarty_tpl);?>
" name="rowsColsImg" onclick="SUGAR.reports.selectReportType('tabular');"
								onMouseOver="document.rowsColsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'RowsAndColumnsOver.gif'),$_smarty_tpl);?>
'"
								onMouseOut="document.rowsColsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'RowsAndColumns.gif'),$_smarty_tpl);?>
'"
                                alt="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ROWS_AND_COLUMNS_REPORT'];?>
"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><h3 class='bold'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ROWS_AND_COLUMNS_REPORT'];?>
</h3><br/>
								<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ROWS_AND_COLUMNS_REPORT_DESC'];?>

							</td>
						</tr>
						<tr>
							<td colspan=2>&nbsp;</td>
						</tr>
						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'Summation.gif'),$_smarty_tpl);?>
" name="summationImg" onclick="SUGAR.reports.selectReportType('summation');"
								onMouseOver="document.summationImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'SummationOver.gif'),$_smarty_tpl);?>
'"
								onMouseOut="document.summationImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'Summation.gif'),$_smarty_tpl);?>
'"
                                     alt="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMATION_REPORT'];?>
"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><h3 class='bold'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMATION_REPORT'];?>
</h3>
								<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMATION_REPORT_DESC'];?>

							</td>
						</tr>
					</table>
				</td>
				<td width="10%">&nbsp;</td>
				<td width="35%">
					<table  border="0" cellspacing="2" cellpadding="0">	
						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'SummationWithDetails.gif'),$_smarty_tpl);?>
" name="summationWithDetailsImg" onclick="SUGAR.reports.selectReportType('summation_with_details');"
								onMouseOver="document.summationWithDetailsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'SummationWithDetailsOver.gif'),$_smarty_tpl);?>
'"
								onMouseOut="document.summationWithDetailsImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'SummationWithDetails.gif'),$_smarty_tpl);?>
'"
                                alt="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMATION_REPORT_WITH_DETAILS'];?>
"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><h3 class='bold'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMATION_REPORT_WITH_DETAILS'];?>
</h3>
								<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUMMATION_REPORT_WITH_DETAILS_DESC'];?>

							</td>
						</tr>
						<tr>
							<td colspan=2>&nbsp;</td>
						</tr>

						<tr valign='top'>
							<td><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'MatrixReport.gif'),$_smarty_tpl);?>
" name="matrixImg" onclick="SUGAR.reports.selectReportType('summation', true);"
								onMouseOver="document.matrixImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'MatrixReportOver.gif'),$_smarty_tpl);?>
'"
								onMouseOut="document.matrixImg.src='<?php echo smarty_function_sugar_getimagepath(array('file'=>'MatrixReport.gif'),$_smarty_tpl);?>
'"
                                alt="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MATRIX_REPORT'];?>
"></td>
							<td>&nbsp;&nbsp;</td>
							<td class="buttonText"><h3 class='bold'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MATRIX_REPORT'];?>
</h3>
								<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MATRIX_REPORT_DESC'];?>

							</td>
						</tr>
					</table>
				</td>				
				<td width="20%">&nbsp;</td>
			</tr>
		</table>
		
		<br/>
	</div>
	
	
	<div id='module_select_div' style="display:none" class="edit view reportwizard">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td  colspan="6"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SELECT_MODULE_BUTTON'];?>
<br><br>
				</td>
			</tr>
			<tr>
				<td>
					<table width="90%" id='buttons_table'>
							<?php echo smarty_function_counter(array('start'=>0,'name'=>"buttonCounter",'print'=>false,'assign'=>"buttonCounter"),$_smarty_tpl);?>

							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BUTTONS']->value, 'button');
$_smarty_tpl->tpl_vars['button']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['button']->value) {
$_smarty_tpl->tpl_vars['button']->do_else = false;
?>
								<?php if ($_smarty_tpl->tpl_vars['buttonCounter']->value > 5) {?>
									</tr><tr>
									<?php echo smarty_function_counter(array('start'=>0,'name'=>"buttonCounter",'print'=>false,'assign'=>"buttonCounter"),$_smarty_tpl);?>

								<?php }?>
								<td width="16%" style="padding: 5px;"  valign="top" id='buttons_td'>
								     <table class='wizardButton' onclick='SUGAR.reports.moduleButtonClick("<?php echo $_smarty_tpl->tpl_vars['button']->value['key'];?>
", this);' onmousedown="" onmouseout="" width="60%" border='1' id='<?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
'>
								         <tr>
											<td align="left" width='50%'>
                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "name", null);
echo $_smarty_tpl->tpl_vars['button']->value['img'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "alt", null);
echo $_smarty_tpl->tpl_vars['button']->value['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                                <div><a class='studiolink' href="javascript:void(0)"><?php echo smarty_function_sugar_getimage(array('name'=>((string)$_smarty_tpl->tpl_vars['name']->value),'attr'=>'border="0"','alt'=>((string)$_smarty_tpl->tpl_vars['alt']->value)),$_smarty_tpl);?>
</a></div>
											</td>
											<td align="left" width='50%' valign="middle"><a class='studiolink' href="javascript:void(0)" onclick=""><?php echo $_smarty_tpl->tpl_vars['button']->value['name'];?>
</a></td>
										 </tr>
									 </table>
								</td>
								<?php echo smarty_function_counter(array('name'=>"buttonCounter"),$_smarty_tpl);?>

							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</table>
				</td>
			</tr>
		</table>
	
		<br/>
	</div>	
	<div id='filters_div' style="display:none">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" style="margin-bottom: 20px;">
			<tr>
				<td align='left'><input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" 
					onClick='SUGAR.reports.showWizardStep(1);' id="previousBtn">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
"
					onClick='SUGAR.reports.showWizardStep(0);' id="nextBtn"><?php if ($_smarty_tpl->tpl_vars['RUN_QUERY']->value == 1 || $_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.saveReport();' id="saveBtn">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
"
					onClick='SUGAR.reports.previewReport();' id="previewBtn"><?php }
if ($_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
"
					onClick='SUGAR.reports.runReport();' id="saveAndRunBtn"><?php }
if ($_smarty_tpl->tpl_vars['record']->value && ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 1 || $_smarty_tpl->tpl_vars['IS_OWNER']->value == 1)) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.deleteReport();' id="deleteBtn"><?php }?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
"
					onClick='SUGAR.reports.cancelReport();' id="cancelBtn"></td>
			</tr>
		</table>	
		</br>
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td  width="15%" valign='top'>
					<div id="leftlayout" style="z-index:100;height:610px; width:202px;">
						<div id="module_tree_panel" style="height:260px; width:200px;">
						</div>
						<div id="autocomplete" style="width:200px;">
							<div class="autocompletewrapper">
							<input id="dt_input" size="23" style="width: 135px !important;" type="text"/>
							<input type="button" style="width: 45px;" id="clearButton" class="button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CLEAR'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CLEAR'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CLEAR'];?>
" />				    			
							<div id="dt_ac_container"></div> 
			    			</div>
						</div> 
						<div id="module_fields_panel" style="width:200px; float: left;">
						</div>
					</div>
				</td>
				<!--<td  width="10px" valign='top'>&nbsp;</td>-->
				<td id='filters_td' style="padding-bottom: 2px;" valign="top">
					<div id='filter_designer_div'></div>
					<div id='group_by_div' style="display:none">
						<div id='group_by_panel'>
						</div>
					</div>						
					<div id='display_summaries_div' style="display:none">
						<div id='display_summaries_panel'>
						</div>
					</div>						
					<div id='display_cols_div' style="display:none">
						<div id='display_cols_panel'>
						</div>
					</div>					
				</td>


			</tr>
		</table>
		<br/>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" 
					onClick='SUGAR.reports.showWizardStep(1);' id="previousButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
"
					onClick='SUGAR.reports.showWizardStep(0);' id="nextButton"><?php if ($_smarty_tpl->tpl_vars['RUN_QUERY']->value == 1 || $_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.saveReport();' id="saveButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
"
					onClick='SUGAR.reports.previewReport();' id="previewButton"><?php }
if ($_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
"
					onClick='SUGAR.reports.runReport();' id="saveAndRunButton"><?php }
if ($_smarty_tpl->tpl_vars['record']->value && ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 1 || $_smarty_tpl->tpl_vars['IS_OWNER']->value == 1)) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.deleteReport();' id="deleteButton"><?php }?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
"
					onClick='SUGAR.reports.cancelReport();' id="cancelButton"></td>
			</tr>
		</table>	
	</div>
	<div id='chart_options_div' style="display:none">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" 
					onClick='SUGAR.reports.showWizardStep(1);' id="previousButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
"
					onClick='SUGAR.reports.showWizardStep(0);' id="nextButton"><?php if ($_smarty_tpl->tpl_vars['RUN_QUERY']->value == 1 || $_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.saveReport();' id="saveButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
"
					onClick='SUGAR.reports.previewReport();' id="previewButton"><?php }
if ($_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
"
					onClick='SUGAR.reports.runReport();' id="saveAndRunButton"><?php }
if ($_smarty_tpl->tpl_vars['record']->value && ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 1 || $_smarty_tpl->tpl_vars['IS_OWNER']->value == 1)) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.deleteReport();' id="deleteButton"><?php }?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
"
					onClick='SUGAR.reports.cancelReport();' id="cancelButton"></td>
			</tr>
		</table>	
		</br>
        <div class="edit view">
		<table width="100%" border="0" cellspacing="1" cellpadding="0" >	
			<tr>
				<td id="no_chart_text" colspan=2><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_GROUP_BY_REQUIRED'];?>
<br/></td>
			</tr>
			<tr>
				<td scope="row" width='20%'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHART_TYPE'];?>
:</td>
				<td align=left>
					<select name='chart_type' id='chart_type'>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['chart_types']->value, 'theval', false, 'thekey');
$_smarty_tpl->tpl_vars['theval']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['thekey']->value => $_smarty_tpl->tpl_vars['theval']->value) {
$_smarty_tpl->tpl_vars['theval']->do_else = false;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['thekey']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['theval']->value;?>
</option>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</td>
			</tr>
			<tr>
				<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_COLUMN_FOR'];?>
:<?php echo $_smarty_tpl->tpl_vars['chart_data_help']->value;?>
</td>
				<td align=left>
					<select name='numerical_chart_column' onchange='SUGAR.reports.setNumericalChartColumnType()'>
					</select>
					<input type='hidden' name='numerical_chart_column_type'>
				</td>
			</tr>
			<tr>
				<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHART_DESCRIPTION'];?>
:</td>
				<td align=left>
					<input name='chart_description' id="chart_description" size='50' value="<?php echo $_smarty_tpl->tpl_vars['chart_description']->value;?>
" maxsize="255"/>
				</td>
			</tr>
			<tr>
				<td scope="row"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DO_ROUND'];?>
:<?php echo $_smarty_tpl->tpl_vars['do_round_help']->value;?>
</td>
				<td align=left>
					<input type="checkbox" class="checkbox" name="do_round" id="do_round" <?php if (($_smarty_tpl->tpl_vars['do_round']->value)) {?>CHECKED<?php }?>>
				</td>
			</tr>			
		</table>
        </div>
		<br/>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" 
					onClick='SUGAR.reports.showWizardStep(1);' id="previousButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
"
					onClick='SUGAR.reports.showWizardStep(0);' id="nextButton"><?php if ($_smarty_tpl->tpl_vars['RUN_QUERY']->value == 1 || $_smarty_tpl->tpl_vars['id']->value || $_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.saveReport();' id="saveButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
"
					onClick='SUGAR.reports.previewReport();' id="previewButton"><?php }
if ($_smarty_tpl->tpl_vars['record']->value) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
"
					onClick='SUGAR.reports.runReport();' id="saveAndRunButton"><?php }
if ($_smarty_tpl->tpl_vars['record']->value && ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 1 || $_smarty_tpl->tpl_vars['IS_OWNER']->value == 1)) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.deleteReport();' id="deleteButton"><?php }?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
"
					onClick='SUGAR.reports.cancelReport();' id="cancelButton"></td>
			</tr>
		</table>	
	</div>	
	<div id='report_details_div' style="display:none">
		<table  width='100%' border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" 
					onClick='SUGAR.reports.showWizardStep(1);' id="previousButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.saveReport();' id="saveButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
"
					onClick='SUGAR.reports.previewReport();' id="previewButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
"
					onClick='SUGAR.reports.runReport();' id="saveAndRunButton"><?php if ($_smarty_tpl->tpl_vars['record']->value && ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 1 || $_smarty_tpl->tpl_vars['IS_OWNER']->value == 1)) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.deleteReport();' id="deleteButton"><?php }?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
"
					onClick='SUGAR.reports.cancelReport();' id="cancelButton"></td>
							
			</tr>
		</table>
		<br/>	
		<div class="edit view">
		<table id="report_details_table" border="0"  width="100%" cellspacing="0" cellpadding="0" >
			<tr>
				<td width="20%" scope='row'><label for='save_report_as'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REPORT_NAME'];?>
:</label> <span class='required'>*</span></td>
				<td><input type='text' size='45' name='save_report_as' id='save_report_as' value='<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['save_report_as']->value, ENT_QUOTES, 'UTF-8', true);?>
'></td>
			</tr>
			<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value) {?>
			<tr>
				<td scope='row'><label for='show_query'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SHOW_QUERY'];?>
:</label></td>
				<td><input type="checkbox" class="checkbox" name="show_query" id='show_query'  <?php if (($_smarty_tpl->tpl_vars['show_query']->value)) {?>CHECKED<?php }?>></td>
			</tr>			
			<?php }?>
			<tr>
				<td scope='row'><label for='assigned_user_name'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OWNER'];?>
:</label> <span class='required'>*</span></td>
				<td><?php echo $_smarty_tpl->tpl_vars['USER_HTML']->value;?>
</td>
			</tr>	

			<tr>
				<td scope='row'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TEAM'];?>
: <span class='required'>*</span></td>
				<td><?php echo $_smarty_tpl->tpl_vars['TEAM_HTML']->value;?>
</td>
			</tr>
			<tr id='outerjoin_row' style="display:none">
				<td scope='row'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OUTER_JOIN_CHECKBOX'];?>
: <?php echo $_smarty_tpl->tpl_vars['help_image']->value;?>

				</td>
				<td><div id='outerjoin_div'></div></td>
			</tr>
			<tr id='matrixLayoutRow' style="display:none">
				<td scope='row'><label for='layout_options'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MATRIX_LAYOUT'];?>
</label></td>
				<td><select name='layout_options' id='layout_options'>
					<option value='1x2'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_1X2'];?>
</option>
					<option value='2x1'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_2X1'];?>
</option>
					</select></td>
			</tr>

		</table>
		</div>
		<br/>
		<table  width='100%' border="0" cellspacing="0" cellpadding="0" >
			<tr>
				<td align='left'><input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIOUS'];?>
" 
					onClick='SUGAR.reports.showWizardStep(1);' id="previousButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.saveReport();' id="saveButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW_REPORT'];?>
"
					onClick='SUGAR.reports.previewReport();' id="previewButton">&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAVE_RUN'];?>
"
					onClick='SUGAR.reports.runReport();' id="saveAndRunButton"><?php if ($_smarty_tpl->tpl_vars['record']->value && ($_smarty_tpl->tpl_vars['IS_ADMIN']->value == 1 || $_smarty_tpl->tpl_vars['IS_OWNER']->value == 1)) {?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"
					onClick='SUGAR.reports.deleteReport();' id="deleteButton"><?php }?>&nbsp;&nbsp;<input type='button' title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" class="button" name="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CANCEL'];?>
"
					onClick='SUGAR.reports.cancelReport();' id="cancelButton"></td>
							
			</tr>
		</table>	
	</div>

</form>
<?php echo $_smarty_tpl->tpl_vars['quicksearch_js']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">

//Disable the Enter Key

function stopEnterKey(evt) {
  var evt = (evt) ? evt : ((event) ? event : null);
  var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null);
  if ((evt.keyCode == 13) && (node.type=="text")) {
       SUGAR.reports.checkEnterKey();
  }
}


var users_array = new Array();
users_array[0]={ text:'<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENT_USER'];?>
',value:'Current User' };
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users_array']->value, 'user_name', false, 'user_id');
$_smarty_tpl->tpl_vars['user_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user_id']->value => $_smarty_tpl->tpl_vars['user_name']->value) {
$_smarty_tpl->tpl_vars['user_name']->do_else = false;
?>
	users_array[users_array.length] = { text:'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8', true);?>
',value:'<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
' };
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


function loadChartForReports() {

	var idObject = document.getElementById('record');
	var id = '';
	if (idObject != null) {
		id = idObject.value;
	} // if
	var chartId = document.getElementById(id + '_div');
	var showHideChartButton = document.getElementById('showHideChartButton');
	if (chartId == null) {
		if (showHideChartButton != null) {
			showHideChartButton.style.display = 'none';	
		}
	} // if
}

function displayGroupCount() {
	
}


function onLoadDoInit() {
	<?php if ($_smarty_tpl->tpl_vars['report_def_str']->value) {?>
		SUGAR.reports.init("<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
", <?php echo $_smarty_tpl->tpl_vars['report_def_str']->value;?>
, users_array, "<?php echo $_smarty_tpl->tpl_vars['ORIG_IMG']->value;?>
");
	<?php } else { ?>
		SUGAR.reports.init("<?php echo $_smarty_tpl->tpl_vars['IMG']->value;?>
", '', users_array,"<?php echo $_smarty_tpl->tpl_vars['ORIG_IMG']->value;?>
");
	<?php }?>
	loadChartForReports();
	displayGroupCount();
}


var reportLoader = new YAHOO.util.YUILoader({
	require : ["layout", "element"],
	loadOptional: true,
	skin: { base: 'blank', defaultSkin: '' },
	onSuccess : onLoadDoInit,
	base : "include/javascript/yui/build/"
});
reportLoader.addModule({ 
    name: "sugarwidgets",
    type: "js", 

    fullpath: "<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/sugarwidgets/SugarYUIWidgets.js'),$_smarty_tpl);?>
",

    varName: "YAHOO.SUGAR",
    requires: ["datatable", "dragdrop", "treeview", "tabview", "button", "autocomplete", "container"]
});
reportLoader.insert();


enableQS(true);
document.getElementById('progress_div').style.display="none";
function saveReportOptionsState(name, value) {
	
}
<?php echo '</script'; ?>
>
<?php }
}
