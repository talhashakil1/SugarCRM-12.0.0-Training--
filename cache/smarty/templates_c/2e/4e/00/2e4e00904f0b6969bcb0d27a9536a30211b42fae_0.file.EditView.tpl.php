<?php
/* Smarty version 3.1.39, created on 2022-07-19 19:48:13
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Schedulers/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6c42d978380_89313618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e4e00904f0b6969bcb0d27a9536a30211b42fae' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Schedulers/EditView.tpl',
      1 => 1658242093,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6c42d978380_89313618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.lookup.php','function'=>'smarty_modifier_lookup',),8=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),9=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),10=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>



<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/EditView/Panels.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });
    });
<?php echo '</script'; ?>
>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['enctype']->value;?>
>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php } else { ?>
<input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
<?php }?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module'];?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action'];?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id'];?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if ((!empty($_REQUEST['return_module']) || !empty($_REQUEST['relate_to'])) && !((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true")) {?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']) {
echo $_REQUEST['return_relationship'];
} elseif ($_REQUEST['relate_to'] && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['relate_to'];
} elseif (empty($_smarty_tpl->tpl_vars['isDCForm']->value) && empty($_REQUEST['from_dcmenu'])) {
echo $_REQUEST['return_module'];
}?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id'];?>
">
<?php }?>
<input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
<?php $_smarty_tpl->_assignInScope('place', "_HEADER");?> <!-- to be used for id for buttons with custom code in def files-->



<div class="action_buttons"><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save") || $_smarty_tpl->tpl_vars['isDuplicate']->value) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE_HEADER"><?php }?>  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cancelReturnUrl", "cancelReturnUrl", null);
if (!empty($_REQUEST['return_action']) && $_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && empty($_REQUEST['return_id'])) {?>parent.SUGAR.App.router.buildRoute('<?php echo rawurlencode($_REQUEST['return_module']);?>
', '<?php echo rawurlencode($_smarty_tpl->tpl_vars['fields']->value['id']['value']);?>
', '<?php echo rawurlencode($_REQUEST['return_action']);?>
')<?php } elseif (!empty($_REQUEST['return_module']) || !empty($_REQUEST['return_action']) || !empty($_REQUEST['return_id'])) {?>parent.SUGAR.App.router.buildRoute('<?php echo rawurlencode($_REQUEST['return_module']);?>
', '<?php echo rawurlencode($_REQUEST['return_id']);?>
', '<?php echo rawurlencode($_REQUEST['return_action']);?>
')<?php } else { ?>parent.SUGAR.App.router.buildRoute('Schedulers')<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $_smarty_tpl->tpl_vars['cancelReturnUrl']->value;?>
, {trigger: true}); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL_HEADER">  <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Schedulers", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?><div class="clear"></div></div>
</td>
<td align='right'>
    			<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

	<span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>


<span id='tabcounterJS'><?php echo '<script'; ?>
>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references<?php echo '</script'; ?>
></span>

<div id="EditView_tabs"
>
        <div >




  
  <div id="detailpanel_1" >

<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>


<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='Default_<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
_Subpanel'  class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['name']['acl'] > 0)) {?>
	
				<td valign="top" id='name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
		 				    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      accesskey='7'  >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['name']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 0)) {?>
	
				<td valign="top" id='status_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['status']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['status']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'])) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" 
	title=''       
	>

	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

	</select>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['status']['options']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "field_val", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['status']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'field_val'));?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ac_key", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('ac_key', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ac_key'));?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" 
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" 
		title=''          
		>

		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status']['value']),$_smarty_tpl);?>

		</select>
	
	<input
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input"
		name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input"
		size="30"
		value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-image"></button><button type="button"
	        id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];

			(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = { key:selectElem.value, text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({ 'key': selectElem.options[i].value, 'text': selectElem.options[i].innerHTML });
				    	return ret;
				    }
				});
			});
		})();
			YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('change');
			}

			//global variable 
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
", syncFromHiddenToWidget);

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions = <?php echo count($_smarty_tpl->tpl_vars['field_options']->value);?>
;
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 300) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 200;
		}
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 3000) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 500;
		}
		
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
	
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		minQueryLength: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen,
		queryDelay: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay,
		zIndex: 99999,

				
		source: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function () {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('blur');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.blur();
		} else {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
<?php echo '</script'; ?>
> 



<?php }?>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['status']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['status']['value'];?>
">
    <?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['status']['options']);?>
    <?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->tpl_vars['fields']->value['status']['value']);?>
    <?php echo $_smarty_tpl->tpl_vars['field_options']->value[$_smarty_tpl->tpl_vars['field_val']->value];?>

<?php }?>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['job_function']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['job_function']['acl'] > 0)) {?>
	
				<td valign="top" id='job_function_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_function']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_function']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['job_function']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['job_function']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'])) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
" 
	title=''       
	>

	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['value']),$_smarty_tpl);?>

	</select>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['job_function']['options']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "field_val", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'field_val'));?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ac_key", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('ac_key', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ac_key'));?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
" 
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
" 
		title=''          
		>

		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['job_function']['value']),$_smarty_tpl);?>

		</select>
	
	<input
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-input"
		name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-input"
		size="30"
		value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-image"></button><button type="button"
	        id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];

			(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = { key:selectElem.value, text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({ 'key': selectElem.options[i].value, 'text': selectElem.options[i].innerHTML });
				    	return ret;
				    }
				});
			});
		})();
			YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('change');
			}

			//global variable 
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
", syncFromHiddenToWidget);

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 0;
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions = <?php echo count($_smarty_tpl->tpl_vars['field_options']->value);?>
;
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 300) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 200;
		}
		if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.numOptions >= 3000) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen = 1;
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay = 500;
		}
		
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
	
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		minQueryLength: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen,
		queryDelay: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.queryDelay,
		zIndex: 99999,

				
		source: SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if(SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.minQLen == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function () {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.simulate('blur');
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible = false;
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.optionsVisible) {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.blur();
		} else {
			SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
<?php echo '</script'; ?>
> 



<?php }?>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['job_function']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_function']['value'];?>
">
    <?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['job_function']['options']);?>
    <?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->tpl_vars['fields']->value['job_function']['value']);?>
    <?php echo $_smarty_tpl->tpl_vars['field_options']->value[$_smarty_tpl->tpl_vars['field_val']->value];?>

<?php }?>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['job_url']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['job_url']['acl'] > 0)) {?>
	
				<td valign="top" id='job_url_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB_URL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_url']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_url']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['job_url']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['job_url']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['job_url']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job_url']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job_url']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_url']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_url']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['job_url']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job_url']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job_url']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job_url']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['job_url']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['acl'] > 0)) {?>
	
				<td valign="top" id='adv_interval_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADV_OPTIONS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['adv_interval']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['adv_interval']['name'];?>
" value="$fields.adv_interval.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 0)) {?>
	
				<td valign="top" id='job_interval_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['job_interval']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['job_interval']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
				<div id="job_interval_advanced">
				<?php echo '<script'; ?>
>
					var adv_interval = <?php echo $_smarty_tpl->tpl_vars['adv_interval']->value;?>
;
				<?php echo '</script'; ?>
>
				<table cellpadding="0" cellspacing="0">
					<tr>
						<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MINS'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HOURS'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DAY_OF_MONTH'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MONTHS'];?>
</td>
						<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DAY_OF_WEEK'];?>
</td>
					</tr><tr>
						<td><input accesskey=""  tabindex="0"  name="mins" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['mins']->value;?>
"></td>
						<td><input accesskey=""  tabindex="0"  name="hours" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['hours']->value;?>
"></td>
						<td><input accesskey=""  tabindex="0"  name="day_of_month" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['day_of_month']->value;?>
"></td>
						<td><input accesskey=""  tabindex="0"  name="months" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['months']->value;?>
"></td>
						<td><input accesskey=""  tabindex="0"  name="day_of_week" maxlength="25" type="text" size="3" value="<?php echo $_smarty_tpl->tpl_vars['day_of_week']->value;?>
"></td>
					</tr><tr>
						<td colspan="5">
							<em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CRONTAB_EXAMPLES'];?>
</em>
						</td>
					</tr>
				</table>
				</div>
				
									<?php } else { ?>
			                                </td>
				<td></td><td></td>
				    
		</td>		
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 0)) {?>
	
				<td valign="top" id='job_interval_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['job_interval']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['job_interval']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
				<div id="job_interval_basic">
				<table cellpadding="0" cellspacing="0" border="0">
					<tr>
						<td valign="top" width="25%">
							&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EVERY'];?>
&nbsp;
							<select accesskey=""  tabindex="0"  name="basic_interval"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['basic_intervals']->value,'selected'=>$_smarty_tpl->tpl_vars['basic_interval']->value),$_smarty_tpl);?>
</select>&nbsp;
							<select accesskey=""  tabindex="0"  name="basic_period"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['basic_periods']->value,'selected'=>$_smarty_tpl->tpl_vars['basic_period']->value),$_smarty_tpl);?>
</select>
						</td>
						<td valign="top" width="25%">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="all" value="true" id="all" <?php echo $_smarty_tpl->tpl_vars['ALL']->value;?>
 onClick="allDays();">&nbsp;<i><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALL'];?>
</i></slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="mon" value="true" id="mon" <?php echo $_smarty_tpl->tpl_vars['MON']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MON'];?>
</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="tue" value="true" id="tue"  <?php echo $_smarty_tpl->tpl_vars['TUE']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TUE'];?>
</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="wed" value="true" id="wed"  <?php echo $_smarty_tpl->tpl_vars['WED']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WED'];?>
</slot></td>
							</tr>
						</table>
						</td>

						<td valign="top" width="25%">
						<table cellpadding="0" cellspacing="0" border="0">
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="thu" value="true" id="thu"  <?php echo $_smarty_tpl->tpl_vars['THU']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THU'];?>
</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="fri" value="true" id="fri"  <?php echo $_smarty_tpl->tpl_vars['FRI']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FRI'];?>
</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="sat" value="true" id="sat"  <?php echo $_smarty_tpl->tpl_vars['SAT']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SAT'];?>
</slot></td>
							</tr>
							<tr>
								<td><slot><input accesskey=""  tabindex="0"  type="checkbox" name="sun" value="true" id="sun"  <?php echo $_smarty_tpl->tpl_vars['SUN']->value;?>
>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SUN'];?>
</slot></td>
							</tr>
						</table>
						</td>
					</tr>
				</table>
				</div>
				
									<?php } else { ?>
			                                </td>
				<td></td><td></td>
				    
		</td>		
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
</table>


</div>
<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("DEFAULT").style.display='none';<?php echo '</script'; ?>
>
<?php }?>

  
  <div id="detailpanel_2" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['def']->value['templateMeta']['panelClass'])===null||$tmp==='' ? 'edit view edit508' : $tmp);?>
">

<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>


<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
  <img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
  <img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
"></a>
  <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADV_OPTIONS','module'=>'Schedulers'),$_smarty_tpl);?>

              <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_2').className += ' expanded';
    <?php echo '</script'; ?>
>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_ADV_OPTIONS'  class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['catch_up']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['catch_up']['acl'] > 0)) {?>
	
				<td valign="top" id='catch_up_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['catch_up']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CATCH_UP_WARNING']),$_smarty_tpl);?>

		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['catch_up']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['catch_up']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['catch_up']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['catch_up']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['catch_up']['name'];?>
" value="$fields.catch_up.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['acl'] > 0)) {?>
	
				<td valign="top" id='date_time_start_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_START','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name']]['value'];?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.update();" onchange="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.update(); "    >
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "other_attributes", null);?>alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
" style="position:relative; top:6px" border="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_trigger"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_sugar_getimage(array('name'=>"jscalendar",'ext'=>".gif",'other_attributes'=>((string)$_smarty_tpl->tpl_vars['other_attributes']->value)),$_smarty_tpl);?>
&nbsp;
</td>
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
 = new Datetimecombo("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0", '', false, true);
//Render the remaining widget fields
text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.html('');
document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.jsscript(''));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date",'date',false,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_hours", 'alpha', false, "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS']);?>
 <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS']);?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_minutes", 'alpha', false, "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS']);?>
 <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES']);?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_meridiem", 'alpha', false, "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS']);?>
 <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM']);?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
,
	inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_date",
	ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value)===null||$tmp==='' ? '0' : $tmp);?>
,
	comboObject: combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>

	});

	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
.update(false);

}); 
<?php echo '</script'; ?>
>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_start']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['time_from']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['time_from']['acl'] > 0)) {?>
	
				<td valign="top" id='time_from_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['time_from']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['time_from']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['time_from']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['time_from']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_from']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/SugarFields/Fields/Time/Time.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

//cleanup because this happens in a screwy order in a quickcreate, and the standard $(document).ready and YUI functions don't work quite right
var timeclosure_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
 = function(){
	var idname = "<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
";
	var timeField = "<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_from']['name']]['value'];?>
";
	var timeFormat = "<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_from']['name']]['value'];?>
";
	var tabIndex = "0";
	var callback = "";
	

	SUGAR.util.doWhen(typeof(Time) != "undefined", function(){
		var combo = new Time(timeField, idname, timeFormat, tabIndex);
		//Render the remaining widget fields
		var text = combo.html(callback);
		document.getElementById(idname + "_time").innerHTML = text;	
	});
}
timeclosure_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
();
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
function update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_available() {
      YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_time_hours", this.handleOnAvailable, this);
}

update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_available.prototype.handleOnAvailable = function(me) {
	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
.update();
}

var obj_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
 = new update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
_available();
<?php echo '</script'; ?>
>
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['time_from']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['time_from']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['time_from']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['acl'] > 0)) {?>
	
				<td valign="top" id='date_time_end_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_END','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap>
<input autocomplete="off" type="text" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name']]['value'];?>
" size="11" maxlength="10" title='' tabindex="0" onblur="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.update();" onchange="combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.update(); "    >
<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "other_attributes", null);?>alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ENTER_DATE'];?>
" style="position:relative; top:6px" border="0" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_trigger"<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
echo smarty_function_sugar_getimage(array('name'=>"jscalendar",'ext'=>".gif",'other_attributes'=>((string)$_smarty_tpl->tpl_vars['other_attributes']->value)),$_smarty_tpl);?>
&nbsp;
</td>
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="DateTimeCombo" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>"include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
var combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
 = new Datetimecombo("<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name']]['value'];?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
", "<?php echo $_smarty_tpl->tpl_vars['TIME_FORMAT']->value;?>
", "0", '', false, true);
//Render the remaining widget fields
text = combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.html('');
document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_time_section').innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
eval(combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.jsscript(''));

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
',"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date",'date',false,"<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_hours", 'alpha', false, "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS']);?>
 <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['LBL_HOURS']);?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_minutes", 'alpha', false, "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS']);?>
 <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['LBL_MINUTES']);?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date");
addToValidateBinaryDependency('<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
', "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_meridiem", 'alpha', false, "<?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['ERR_MISSING_REQUIRED_FIELDS']);?>
 <?php echo preg_replace('!\s+!u', ' ',$_smarty_tpl->tpl_vars['APP']->value['LBL_MERIDIEM']);?>
", "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date");

YAHOO.util.Event.onDOMReady(function()
{

	Calendar.setup ({
	onClose : update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
,
	inputField : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_date",
	ifFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	daFormat : "<?php echo $_smarty_tpl->tpl_vars['CALENDAR_FORMAT']->value;?>
",
	button : "<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
_trigger",
	singleClick : true,
	step : 1,
	weekNumbers: false,
        startWeekday: <?php echo (($tmp = @$_smarty_tpl->tpl_vars['CALENDAR_FDOW']->value)===null||$tmp==='' ? '0' : $tmp);?>
,
	comboObject: combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>

	});

	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
.update(false);

}); 
<?php echo '</script'; ?>
>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['time_from']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['time_from']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['time_from']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['time_from']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['time_to']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['time_to']['acl'] > 0)) {?>
	
				<td valign="top" id='time_to_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['time_to']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['time_to']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['time_to']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['time_to']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				


<table border="0" cellpadding="0" cellspacing="0">
<tr valign="middle">
<td nowrap>
<div id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_time"></div>
</td>
</tr>
</table>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_to']['name']]['value'];?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/SugarFields/Fields/Time/Time.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">

//cleanup because this happens in a screwy order in a quickcreate, and the standard $(document).ready and YUI functions don't work quite right
var timeclosure_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
 = function(){
	var idname = "<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
";
	var timeField = "<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_to']['name']]['value'];?>
";
	var timeFormat = "<?php echo $_smarty_tpl->tpl_vars['fields']->value[$_smarty_tpl->tpl_vars['fields']->value['time_to']['name']]['value'];?>
";
	var tabIndex = "0";
	var callback = "";
	

	SUGAR.util.doWhen(typeof(Time) != "undefined", function(){
		var combo = new Time(timeField, idname, timeFormat, tabIndex);
		//Render the remaining widget fields
		var text = combo.html(callback);
		document.getElementById(idname + "_time").innerHTML = text;	
	});
}
timeclosure_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
();
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
function update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_available() {
      YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_time_hours", this.handleOnAvailable, this);
}

update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_available.prototype.handleOnAvailable = function(me) {
	//Call update for first time to round hours and minute values
	combo_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
.update();
}

var obj_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
 = new update_<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
_available();
<?php echo '</script'; ?>
>
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['time_to']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['time_to']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['time_to']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['time_to']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }?>
</table>
<?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); <?php echo '</script'; ?>
>


</div>
<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("LBL_ADV_OPTIONS").style.display='none';<?php echo '</script'; ?>
>
<?php }?>
</div></div>

<?php echo '<script'; ?>
 language="javascript">
    var _form_id = '<?php echo $_smarty_tpl->tpl_vars['form_id']->value;?>
';
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
<?php echo '</script'; ?>
>
<?php $_smarty_tpl->_assignInScope('place', "_FOOTER");?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">



<div class="action_buttons"><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("save") || $_smarty_tpl->tpl_vars['isDuplicate']->value) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($_smarty_tpl->tpl_vars['isDuplicate']->value) {?>_form.return_id.value=''; <?php }?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
" id="SAVE_FOOTER"><?php }?>  <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "cancelReturnUrl", "cancelReturnUrl", null);
if (!empty($_REQUEST['return_action']) && $_REQUEST['return_action'] == "DetailView" && !empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && empty($_REQUEST['return_id'])) {?>parent.SUGAR.App.router.buildRoute('<?php echo rawurlencode($_REQUEST['return_module']);?>
', '<?php echo rawurlencode($_smarty_tpl->tpl_vars['fields']->value['id']['value']);?>
', '<?php echo rawurlencode($_REQUEST['return_action']);?>
')<?php } elseif (!empty($_REQUEST['return_module']) || !empty($_REQUEST['return_action']) || !empty($_REQUEST['return_id'])) {?>parent.SUGAR.App.router.buildRoute('<?php echo rawurlencode($_REQUEST['return_module']);?>
', '<?php echo rawurlencode($_REQUEST['return_id']);?>
', '<?php echo rawurlencode($_REQUEST['return_action']);?>
')<?php } else { ?>parent.SUGAR.App.router.buildRoute('Schedulers')<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $_smarty_tpl->tpl_vars['cancelReturnUrl']->value;?>
, {trigger: true}); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL_FOOTER">  <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Schedulers", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?><div class="clear"></div></div>
</div>
</form>

<?php echo $_smarty_tpl->tpl_vars['set_focus_block']->value;?>


<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('EditView') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'job', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'job_url', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOB_URL','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'job_function', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_time_start_date', 'date', true,'Date & Time Start' );
addToValidate('EditView', 'date_time_end_date', 'date', false,'Date & Time End' );
addToValidate('EditView', 'job_interval', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'adv_interval', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADV_OPTIONS','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'time_from', 'time', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'time_to', 'time', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'last_run_date', 'date', false,'Last Successful Run' );
addToValidate('EditView', 'status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'catch_up', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'system_job', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYSTEM_JOB','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'following', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FOLLOWING','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'my_favorite', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAVORITE','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'commentlog', 'collection', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COMMENTLOG','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'locked_fields', 'locked_fields', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LOCKED_FIELDS','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sync_key', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYNC_KEY','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Schedulers','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"schedulers_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"schedulers_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"scheduler_activities","module":"Activities"},"schedulers_times":{"relationship":"schedulers_jobs_rel","module":"SchedulersJobs"},"following_link":{"relationship":"schedulers_following"},"favorite_link":{"relationship":"schedulers_favorite"},"commentlog_link":{"relationship":"schedulers_commentlog"},"locked_fields_link":{"relationship":"schedulers_locked_fields"}}
var job_url_visdep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['job_function'], 'true'), [new SUGAR.forms.SetVisibilityAction('job_url','equal($job_function, "url::")', '')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
