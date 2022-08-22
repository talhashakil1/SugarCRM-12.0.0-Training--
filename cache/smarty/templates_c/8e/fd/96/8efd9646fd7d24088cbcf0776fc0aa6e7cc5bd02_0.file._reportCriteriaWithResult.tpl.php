<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:32:37
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_reportCriteriaWithResult.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe3f758e0778_43074973',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8efd9646fd7d24088cbcf0776fc0aa6e7cc5bd02' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Reports/templates/_reportCriteriaWithResult.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe3f758e0778_43074973 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Reports/tpls/reports.css'),$_smarty_tpl);?>
" />

<?php if (($_smarty_tpl->tpl_vars['issetSaveResults']->value)) {?>

	<?php if (($_smarty_tpl->tpl_vars['isSaveResults']->value)) {?>
<p>	<span><b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SUCCESS_REPORT'];
echo $_smarty_tpl->tpl_vars['save_report_as_str']->value;
echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_WAS_SAVED'];?>
</b></span></p>
	<?php } else { ?>
	<span><b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_FAILURE_REPORT'];
echo $_smarty_tpl->tpl_vars['save_report_as_str']->value;
echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_WAS_NOT_SAVED'];?>
</b></span></p>
	<?php }
}
echo $_smarty_tpl->tpl_vars['form_header']->value;?>


<?php echo $_smarty_tpl->tpl_vars['chartResources']->value;?>



<form action="index.php?action=ReportCriteriaResults&module=Reports&page=report&id=<?php echo $_smarty_tpl->tpl_vars['report_id']->value;?>
" method="post" name="EditView" id="EditView" onSubmit="return fill_form();">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

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
<input type="hidden" name='expanded_combo_summary_divs' id='expanded_combo_summary_divs' value=''>
<input type="hidden" name="action" value="ReportCriteriaResults">
<input type="hidden" name="module" value="Reports">
<input type="hidden" id="record" name="record" value="<?php echo $_smarty_tpl->tpl_vars['report_id']->value;?>
">
<input type="hidden" id="report_name" name="report_name" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reportName']->value, ENT_QUOTES, 'UTF-8', true);?>
">
<input type="hidden" id="id" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
<input type="hidden" name='report_def' value ="">
<input type="hidden" name='save_as' value ="">
<input type="hidden" name='save_as_report_type' value ="">
<input type="hidden" name="page" value="report">
<input type="hidden" name="is_delete" value="0">
<input type="hidden" name="to_pdf" value="<?php echo $_smarty_tpl->tpl_vars['to_pdf']->value;?>
"/>
<input type="hidden" name="to_csv" value="<?php echo $_smarty_tpl->tpl_vars['to_csv']->value;?>
"/>
<input type="hidden" name="save_report" value=""/>
<input type="hidden" name='showReportDetails' value ="<?php echo $_smarty_tpl->tpl_vars['showReportDetails']->value;?>
">
<input type="hidden" name='showChart' value ="<?php echo $_smarty_tpl->tpl_vars['showChart']->value;?>
">
<input type="hidden" id="blankimagepath" name="blankimagepath" value="<?php echo smarty_function_sugar_getimagepath(array('file'=>'blank.gif'),$_smarty_tpl);?>
">


<table border="0" cellspacing="0" cellpadding="0">
<tr>
<td>

<?php echo smarty_function_sugar_action_menu(array('id'=>"detail_header_action_menu",'buttons'=>$_smarty_tpl->tpl_vars['action_button']->value,'class'=>"clickMenu fancymenu"),$_smarty_tpl);?>

</td>
</tr>
</table>
<?php echo '<script'; ?>
 language="javascript">
var form_submit = "<?php echo $_smarty_tpl->tpl_vars['form_submit']->value;?>
";
LBL_RELATED = '<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_RELATED'];?>
';


ACLAllowedModules = <?php echo $_smarty_tpl->tpl_vars['ACLAllowedModules']->value;?>
;
<?php echo '</script'; ?>
>
<BR>





<?php if (($_smarty_tpl->tpl_vars['warnningMessage']->value != '')) {?>
<table width="100%" cellspacing=0 cellpadding=0>
<tr>
	<td><h3><?php echo $_smarty_tpl->tpl_vars['warnningMessage']->value;?>
</h3>
	</td>
</tr>
</table>
<?php }?>
<table width="100%" cellspacing=0 cellpadding=0 class="actionsContainer">
<tr>
<td><input type=button name="showHideReportDetails" id="showHideReportDetails" class="button" title="<?php echo $_smarty_tpl->tpl_vars['reportDetailsButtonTitle']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['reportDetailsButtonTitle']->value;?>
" onClick="showHideReportDetailsButton();">
</td>
</tr>
</table>
<table width="100%" cellspacing=0 cellpadding=0>
<tr>
	<td width="100%" scope="row">
		<table width="100%" id="reportDetailsTable" name="reportDetailsTable" style="<?php echo $_smarty_tpl->tpl_vars['reportDetailsTableStyle']->value;?>
">
			<tr>
				<td wrap="true">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_ATT_NAME'];?>
:</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reportName']->value, ENT_QUOTES, 'UTF-8', true);?>

				</td>
				<td wrap="true">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT__ATT_TYPE'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['reportType']->value;?>

				</td>
			</tr>
			<tr>
				<td wrap="true">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_ATT_MODULES'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['reportModuleList']->value;?>

				</td>
				<td wrap="true">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_TEAM'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['reportTeam']->value;?>

				</td>
			</tr>
			<tr>
				<td wrap="true">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_DISPLAY_COLUMNS'];?>
:</b> <?php echo $_smarty_tpl->tpl_vars['reportDisplayColumnsList']->value;?>

				</td>
				<td wrap="true">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_OWNER'];?>
:</b> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reportAssignedToName']->value, ENT_QUOTES, 'UTF-8', true);?>

				</td>
			</tr>
			<?php echo $_smarty_tpl->tpl_vars['summaryAndGroupDefData']->value;?>

			<tr>
			<tr>
				<td wrap="true" colspan="2">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_SCHEDULE_TITLE'];?>
:</b> <span id="schduleDateTimeDiv"><?php echo $_smarty_tpl->tpl_vars['schedule_value']->value;?>
</span>
				</td>
			</tr>
			<tr>
				<td wrap="true" colspan="2">
					<b><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_FILTERS'];?>
:</b><?php echo $_smarty_tpl->tpl_vars['reportFilters']->value;?>

				</td>
			</tr>
			</tr>
		</table>
	</td>
</tr>
<tr>
<td valign="top" width="90%">
<div id="filters_tab" style=<?php echo $_smarty_tpl->tpl_vars['filterTabStyle']->value;?>
>
<div scope="row"><h3><?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_RUNTIME_FILTERS'];?>
:<span valign="bottom">&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['mod_strings']->value['LBL_VIEWER_RUNTIME_HELP']),$_smarty_tpl);?>
</span></h3>
</div>
<input type=hidden name='filters_def' value ="">
<table id='filters_top' border=0 cellpadding="0" cellspacing="0">
<tbody id='filters'></tbody>
</table>
<table>
    <tr>
        <td colspan="2">&nbsp;</td>
    </tr>
    <tr>
		<td>
			<input type=submit class="button" title="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_RUN_WITH_FILTER'];?>
"
			    value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_RUN_WITH_FILTER'];?>
"
			    onclick="this.form.to_pdf.value='';this.form.to_csv.value='';this.form.save_report.value='';">
		</td>
		<td>
			<input type=submit class="button" title="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_RESET_FILTER'];?>
"
			    value="<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_RESET_FILTER'];?>
"
			    onclick="this.form.to_pdf.value='';this.form.to_csv.value='';this.form.save_report.value='';this.form.reset_filters.value='1'">
                        <input type="hidden" name="reset_filters" id="reset_filters" value="0">
		</td>
        </tr>
</table>
</div>

</td>

</tr>
</table>
</form>
</p>
<?php echo '<script'; ?>
 type="text/javascript" src="cache/modules/modules_def_<?php echo $_smarty_tpl->tpl_vars['current_language']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['md5_current_user_id']->value;?>
.js?v=_<?php echo $_smarty_tpl->tpl_vars['ENTROPY']->value;?>
"><?php echo '</script'; ?>
>
<?php if (!empty($_smarty_tpl->tpl_vars['fiscalStartDate']->value)) {
echo '<script'; ?>
 type="text/javascript" src="cache/modules/modules_def_fiscal_<?php echo $_smarty_tpl->tpl_vars['current_language']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['md5_current_user_id']->value;?>
.js?v=_<?php echo $_smarty_tpl->tpl_vars['ENTROPY']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>
<div id="overDiv" style="position:absolute; visibility:hidden; z-index:1000;"></div>
<?php echo '<script'; ?>
>

var visible_modules;
var report_def;
var current_module;
var visible_fields = new Array();
var visible_fields_map =  new Object();
var visible_summary_fields = new Array();
var visible_summary_field_map =  new Object();
var current_report_type;
var display_columns_ref = 'display';
var hidden_columns_ref = 'hidden';
var field_defs;
var previous_links_map = new Object();
var previous_links =  new Array();
var display_summary_ref = 'display';
var hidden_summary_ref = 'hidden';
var users_array = new Array();

<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
var image_path = "<?php echo $_smarty_tpl->tpl_vars['args_image_path']->value;?>
";
var lbl_and = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_AND'];?>
";
var lbl_select = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_SELECT'];?>
";
var lbl_remove = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REMOVE'];?>
";
var lbl_missing_fields = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_MISSING_FIELDS'];?>
";
var lbl_at_least_one_display_column = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_AT_LEAST_ONE_DISPLAY_COLUMN'];?>
";
var lbl_at_least_one_summary_column = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_AT_LEAST_ONE_SUMMARY_COLUMN'];?>
";
var lbl_missing_input_value  = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_MISSING_INPUT_VALUE'];?>
";
var lbl_missing_second_input_value = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_MISSING_SECOND_INPUT_VALUE'];?>
";
var lbl_nothing_was_selected = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_NOTHING_WAS_SELECTED'];?>
"
var lbl_none = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_NONE'];?>
";
var lbl_outer_join_checkbox = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_OUTER_JOIN_CHECKBOX'];?>
";
var lbl_add_related = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ADD_RELATE'];?>
";
var lbl_del_this = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_DEL_THIS'];?>
";
var lbl_alert_cant_add = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_ALERT_CANT_ADD'];?>
";
var lbl_related_table_blank = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_RELATED_TABLE_BLANK'];?>
";
var lbl_optional_help = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_OPTIONAL_HELP'];?>
";
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/reportCriteria.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/reportsInlineEdit.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
visible_modules = <?php echo $_smarty_tpl->tpl_vars['allowed_modules_js']->value;?>
;
report_def = <?php echo $_smarty_tpl->tpl_vars['reporter_report_def_str1']->value;?>
;
goto_anchor = <?php echo $_smarty_tpl->tpl_vars['goto_anchor']->value;?>
;

function report_onload() {
	if (goto_anchor != '') {
		var anch = document.getElementById(goto_anchor);
	  	if ( typeof(anch) != 'undefined' && anch != null) {
	    	anch.focus();
	  	} // if
	} else {
		// no op
	}
} // fn

function showFilterString() {
	if(YAHOO.util.Dom.get('filter_results') && YAHOO.util.Dom.get('filter_results_text')) {
	   filter_span = YAHOO.util.Dom.get('filter_results');
	   filter_results_text_span = YAHOO.util.Dom.get('filter_results_text');
	   expand = (filter_results_text_span.style.visibility == 'hidden') ? true : false;
	   document.getElementById('filter_results_image').src = 'index.php?entryPoint=getImage&themeName=' + SUGAR.themes.theme_name + '&imageName=' + (expand ? 'advanced_search.gif' : 'basic_search.gif');
       filter_results_text_span.innerHTML = '&nbsp;' + (expand ? filterString : '');
       filter_results_text_span.style.visibility = expand ? 'visible' : 'hidden';
	}
} // fn

function schedulePOPUP(){
    var id = document.getElementById('record').value;
    var name = document.getElementById('report_name').value;
    var sugarApp = SUGAR.App || SUGAR.app || app;
    var newModel = sugarApp.data.createBean('ReportSchedules');
    newModel.set({
        report_id : id,
        report_name: name
    });
    sugarApp.drawer.open({
        layout: 'create',
        context: {
            create: true,
            module: 'ReportSchedules',
            model: newModel
        }
    });
}
function viewSchedulesPOPUP(){
    var id = document.getElementById('record').value;
    var name = document.getElementById('report_name').value;
    var sugarApp = SUGAR.App || SUGAR.app || app;
    var filterOptions = new sugarApp.utils.FilterOptions().config({
        initial_filter_label: name,
        initial_filter: 'by_report',
        filter_populate: {
            'report_id': [id]
        }
    });
    sugarApp.controller.loadView({
        module: 'ReportSchedules',
        layout: 'records',
        filterOptions: filterOptions.format()
    });
}
function performFavAction(actionToPerfrom) {
	var callback = {
        success:function(o){},
        failure:function(o){}
    };
	var postDataString = actionToPerfrom + '=1&report_id=' + document.getElementById('record').value;
	YAHOO.util.Connect.asyncRequest("POST", "index.php?action=ReportCriteriaResults&module=Reports&page=report", callback, postDataString);
	var imageTag = "<img border=\"0\" height='16px' width='11px' align=\"absmiddle\" src=\"" + document.getElementById('blankimagepath').value + "\"/>";

	var favButton = document.getElementById('favButton');
	if (actionToPerfrom == 'addtofavorites') {
		favButton.title = "<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_REMOVE_FROM_FAVORITES'];?>
";
		favButton.value = "<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_REMOVE_FROM_FAVORITES'];?>
";
		favButton.onclick = function() { performFavAction('removefromfavorites') };
	} else {
		favButton.title = "<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_ADD_TO_FAVORITES'];?>
";
		favButton.value = "<?php echo $_smarty_tpl->tpl_vars['app_strings']->value['LBL_ADD_TO_FAVORITES'];?>
";
		favButton.onclick = function() { performFavAction('addtofavorites') };
	} // else
} // fn

function showHideReportDetailsButton() {
	var reportDetailsTable = document.getElementById("reportDetailsTable");
	var showHideReportDetailsButton = document.getElementById("showHideReportDetails");
	if (reportDetailsTable.style.display == "none") {
		saveReportOptionsState("showDetails", "1");
		reportDetailsTable.style.display = "";
		showHideReportDetailsButton.title = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_HIDE_DETAILS'];?>
";
		showHideReportDetailsButton.value = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_HIDE_DETAILS'];?>
";
	} else {
		saveReportOptionsState("showDetails", "0");
		reportDetailsTable.style.display = "none";
		showHideReportDetailsButton.title = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_SHOW_DETAILS'];?>
";
		showHideReportDetailsButton.value = "<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_REPORT_SHOW_DETAILS'];?>
";
	} // else
} // fn
function saveReportOptionsState(name, value) {
	var callback = {
        success:function(o){ },
        failure:function(o){ }
    };
	var postDataString = 'to_pdf=true&report_options=1&report_id=' + document.getElementById('record').value + "&" + name + "=" + value;
	YAHOO.util.Connect.asyncRequest("POST", "index.php?action=ReportCriteriaResults&module=Reports&page=report", callback, postDataString);
} // fn

window.onload = report_onload;
current_module = report_def.module;
field_defs = module_defs[current_module].field_defs;

current_report_type = "<?php echo $_smarty_tpl->tpl_vars['report_type']->value;?>
";

for(var i in report_def.display_columns) {
	visible_fields.push(getFieldKey(report_def.display_columns[i]));
    visible_fields_map[getFieldKey(report_def.display_columns[i])] = report_def.display_columns[i];
} // for

for(var i in report_def.summary_columns) {
	if (typeof(report_def.summary_columns[i].is_group_by) != 'undefined' && report_def.summary_columns[i].is_group_by == 'hidden') {
    continue;
  	} // if
  	visible_summary_fields.push(getFieldKey(report_def.summary_columns[i]));
  	visible_summary_field_map[getFieldKey(report_def.summary_columns[i])] = report_def.summary_columns[i];
} // for


for(var i in report_def.links_def) {
    previous_links_map[ report_def.links_def[i] ] = 1;
	previous_links.push( report_def.links_def[i]);
} // for

function load_page() {
	var abortLoad = openEditMode();
	if (abortLoad) return;
	displayGroupCount();
	reload_joins();
    //current_module = document.EditView.self.options[document.EditView.self.options.selectedIndex].value;
    //reload_join_rows('regular');
    all_fields = getAllFieldsMapped(current_module);
    if(form_submit != "true")
    {
        //remakeGroups();
        //reload_groups();
        reload_actual_filters();
    }
    loadChartForReports();
    doExpandCollapseAll();
    //reload_columns('regular');
}

function doExpandCollapseAll() {

} // fn

function loadChartForReports() {
	var idObject = document.getElementById('record');
	var id = '';
	if (idObject != null) {
		id = idObject.value;
	} // if
	var chartId = document.getElementById(id + '_div');
	var showHideChartButton = document.getElementById('showHideChartButton');
	if (chartId == null && showHideChartButton != null) {
		showHideChartButton.style.display = 'none';
	} // if
} // fn

function setSchuleTime(scheduleDateTime) {
	document.getElementById("schduleDateTimeDiv").innerHTML = scheduleDateTime;
} // fn

function displayGroupCount() {
	// no op
} // fn

var current_user_id = '<?php echo $_smarty_tpl->tpl_vars['current_user_id']->value;?>
';
users_array[0]={ text:'<?php echo $_smarty_tpl->tpl_vars['mod_strings']->value['LBL_CURRENT_USER'];?>
',value:'Current User' };
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['user_array']->value, 'user_name', false, 'user_id');
$_smarty_tpl->tpl_vars['user_name']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user_id']->value => $_smarty_tpl->tpl_vars['user_name']->value) {
$_smarty_tpl->tpl_vars['user_name']->do_else = false;
?>
users_array[users_array.length] = { text:'<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['user_name']->value, ENT_QUOTES, 'UTF-8', true);?>
',value:'<?php echo $_smarty_tpl->tpl_vars['user_id']->value;?>
' };
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
if(typeof YAHOO != 'undefined') YAHOO.util.Event.addListener(window, 'load', load_page);
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
function openEditMode() {
	var abortLoadPage = false;
	var forminput = document.getElementById('editReportButton_old');
	if (forminput && (typeof(viewMode) != 'undefined') && (viewMode === 'edit')) {
		forminput.form.to_pdf.value='';
		forminput.form.to_csv.value='';
		forminput.form.action.value='ReportsWizard';
		forminput.form.submit();
		abortLoadPage = true;
	}
	return abortLoadPage;
}
<?php echo '</script'; ?>
>
<?php }
}
