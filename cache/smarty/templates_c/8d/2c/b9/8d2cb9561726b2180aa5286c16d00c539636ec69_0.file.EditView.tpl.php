<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:14
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431e3b80f3_12130306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d2cb9561726b2180aa5286c16d00c539636ec69' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/EditView.tpl',
      1 => 1660830494,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/PdfManager/tpls/getFields.tpl' => 1,
  ),
),false)) {
function content_62fe431e3b80f3_12130306 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar_teamset.php','function'=>'smarty_function_sugarvar_teamset',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),8=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),9=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),10=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.lookup.php','function'=>'smarty_modifier_lookup',),11=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
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
<input type="hidden" name="base_module_history" id="base_module_history" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['value'];?>
">   



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
')<?php } else { ?>parent.SUGAR.App.router.buildRoute('PdfManager')<?php }
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_KEY'];?>
" class="button" onclick="parent.SUGAR.App.bwc.revertAttributes();parent.SUGAR.App.router.navigate(<?php echo $_smarty_tpl->tpl_vars['cancelReturnUrl']->value;?>
, {trigger: true}); return false;" type="button" name="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
" id="CANCEL_HEADER">  <?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=PdfManager", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?><div class="clear"></div></div>
</td>
<td align='right'>
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
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'PdfManager'),$_smarty_tpl);
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

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['team_name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['team_name']['acl'] > 0)) {?>
	
				<td valign="top" id='team_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['team_name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['team_name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['team_name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['team_name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value['team_name'],'tabindex'=>1,'display'=>'1','labelSpan'=>'','fieldSpan'=>'','formName'=>'EditView','displayType'=>'renderEditView'),$_smarty_tpl);?>


									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value['team_name'],'tabindex'=>1,'display'=>'1','labelSpan'=>'','fieldSpan'=>'','formName'=>'EditView','displayType'=>'renderDetailView'),$_smarty_tpl);?>


				    
				
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

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 0)) {?>
	
				<td valign="top" id='description_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['description']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['description']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['description']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['description']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['description']['value']);
}?>  


<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['description']['name'];?>
'
rows="1" 
cols="80" 
title='' tabindex="0" 
 ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<span class="sugar_field" id="<?php echo nl2br(url2html(htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['description']['name'], ENT_QUOTES, 'UTF-8', true)));?>
"><?php echo nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['base_module']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['base_module']['acl'] > 0)) {?>
	
				<td valign="top" id='base_module_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BASE_MODULE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['base_module']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                                                      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_BASE_MODULE_POPUP_HELP",'module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['popupText']->value,'WIDTH'=>-1),$_smarty_tpl);?>

            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['base_module']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['base_module']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['base_module']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'])) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
" 
	title=''        onChange="SUGAR.PdfManager.loadFields(this.value, '');"
	>

	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['base_module']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['base_module']['value']),$_smarty_tpl);?>

	</select>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['base_module']['options']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "field_val", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'field_val'));?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ac_key", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('ac_key', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ac_key'));?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
" 
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
" 
		title=''           onChange="SUGAR.PdfManager.loadFields(this.value, '');"
		>

		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['base_module']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['base_module']['value']),$_smarty_tpl);?>

		</select>
	
	<input
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-input"
		name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-input"
		size="30"
		value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-image"></button><button type="button"
	        id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];

			(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
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
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
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
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
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
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
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

				

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['base_module']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['base_module']['value'];?>
">
    <?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['base_module']['options']);?>
    <?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->tpl_vars['fields']->value['base_module']['value']);?>
    <?php echo $_smarty_tpl->tpl_vars['field_options']->value[$_smarty_tpl->tpl_vars['field_val']->value];?>

<?php }?>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['published']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['published']['acl'] > 0)) {?>
	
				<td valign="top" id='published_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PUBLISHED','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['published']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                                                      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_PUBLISHED_POPUP_HELP",'module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['popupText']->value,'WIDTH'=>-1),$_smarty_tpl);?>

            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['published']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['published']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['published']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'])) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
" 
	title=''       
	>

	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['published']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['published']['value']),$_smarty_tpl);?>

	</select>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['published']['options']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "field_val", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['published']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'field_val'));?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ac_key", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('ac_key', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ac_key'));?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
" 
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
" 
		title=''          
		>

		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['published']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['published']['value']),$_smarty_tpl);?>

		</select>
	
	<input
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-input"
		name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-input"
		size="30"
		value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-image"></button><button type="button"
	        id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];

			(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
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
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
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
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
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
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
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

				

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['published']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['published']['value'];?>
">
    <?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['published']['options']);?>
    <?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->tpl_vars['fields']->value['published']['value']);?>
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

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['field']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['field']['acl'] > 0)) {?>
	
				<td valign="top" id='field_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FIELD','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['field']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                                                      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_FIELD_POPUP_HELP",'module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['popupText']->value,'WIDTH'=>-1),$_smarty_tpl);?>

            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['field']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['field']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['field']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php $_smarty_tpl->_subTemplateRender("file:modules/PdfManager/tpls/getFields.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
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

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['body_html']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['body_html']['acl'] > 0)) {?>
	
				<td valign="top" id='body_html_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BODY_HTML','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['body_html']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                                                      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_BODY_HTML_POPUP_HELP",'module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['popupText']->value,'WIDTH'=>-1),$_smarty_tpl);?>

            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['body_html']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['body_html']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['body_html']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['body_html']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['body_html']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['body_html']['value']);
}?>  


<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['body_html']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['body_html']['name'];?>
'
rows="4" 
cols="20" 
title='' tabindex="0" 
 ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<span class="sugar_field" id="<?php echo nl2br(url2html(htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['body_html']['name'], ENT_QUOTES, 'UTF-8', true)));?>
"><?php echo nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['body_html']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['header_title']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['header_title']['acl'] > 0)) {?>
	
				<td valign="top" id='header_title_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_TITLE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['header_title']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['header_title']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['header_title']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['header_title']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['header_title']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_title']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_title']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_title']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_title']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='&#x48;&#x65;&#x61;&#x64;&#x65;&#x72;&#x20;&#x74;&#x69;&#x74;&#x6C;&#x65;'      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['header_title']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_title']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_title']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_title']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['header_title']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['header_text']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['header_text']['acl'] > 0)) {?>
	
				<td valign="top" id='header_text_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_TEXT','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['header_text']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['header_text']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['header_text']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['header_text']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['header_text']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_text']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_text']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_text']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_text']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='&#x48;&#x65;&#x61;&#x64;&#x65;&#x72;&#x20;&#x74;&#x65;&#x78;&#x74;'      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['header_text']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_text']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['header_text']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_text']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['header_text']['value'];?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['header_logo']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['header_logo']['acl'] > 0)) {?>
	
				<td valign="top" id='header_logo_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_LOGO_FILE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['header_logo']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                                                      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_HEADER_LOGO_POPUP_HELP",'module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['popupText']->value,'WIDTH'=>-1),$_smarty_tpl);?>

            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['header_logo']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['header_logo']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['header_logo']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php echo '<script'; ?>
 type="text/javascript" src='include/SugarFields/Fields/File/SugarFieldFile.js?v=nCHLtjCudXW7t33TaQjTyw'><?php echo '</script'; ?>
>

<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['header_logo']['value'])) {?>
    <?php $_smarty_tpl->_assignInScope('showRemove', true);
} else { ?>
    <?php $_smarty_tpl->_assignInScope('showRemove', false);
}?>

    <?php $_smarty_tpl->_assignInScope('noChange', false);?>

<input type="hidden" name="deleteAttachment" value="0">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['value'];?>
">
<span id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
_old" style="display:<?php if (!$_smarty_tpl->tpl_vars['showRemove']->value) {?>none;<?php }?>">
  <a href="index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" class="tabDetailViewDFLink" target="_blank"><?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['value'];?>
</a>

<?php if (!$_smarty_tpl->tpl_vars['noChange']->value) {?>
<input type='button' class='button' id='remove_button' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REMOVE'];?>
' onclick='SUGAR.field.file.deleteAttachment("<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
","",this);'>
<?php }?>
</span>
<?php if (!$_smarty_tpl->tpl_vars['noChange']->value) {?>
<span id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
_new" style="display:<?php if ($_smarty_tpl->tpl_vars['showRemove']->value) {?>none;<?php }?>">
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
_escaped">
<input id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
_file" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
_file" 
type="file" title='&#x50;&#x44;&#x46;&#x20;&#x68;&#x65;&#x61;&#x64;&#x65;&#x72;&#x20;&#x6C;&#x6F;&#x67;&#x6F;' size="30"
 
    maxlength='255'
>

<?php } else { ?>



<?php }?>


</span>
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
">
<a href="index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" class="tabDetailViewDFLink" target='_blank'><?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['value'];?>
</a>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['footer_text']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['footer_text']['acl'] > 0)) {?>
	
				<td valign="top" id='footer_text_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FOOTER_TEXT','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['footer_text']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['footer_text']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['footer_text']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['footer_text']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['footer_text']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['footer_text']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['footer_text']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['footer_text']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['footer_text']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='&#x46;&#x6F;&#x6F;&#x74;&#x65;&#x72;&#x20;&#x74;&#x65;&#x78;&#x74;'      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['footer_text']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['footer_text']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['footer_text']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['footer_text']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['footer_text']['value'];?>
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
  <?php echo smarty_function_sugar_translate(array('label'=>'LBL_EDITVIEW_PANEL1','module'=>'PdfManager'),$_smarty_tpl);?>

              <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_2').className += ' expanded';
    <?php echo '</script'; ?>
>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EDITVIEW_PANEL1'  class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['author']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['author']['acl'] > 0)) {?>
	
				<td valign="top" id='author_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_AUTHOR','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['author']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['author']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['author']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['author']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['author']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['author']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['author']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['author']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['author']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['author']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['author']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['author']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['author']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['author']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 0)) {?>
	
				<td valign="top" id='title_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['title']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['title']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['title']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['title']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['title']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['title']['value'];?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['subject']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['subject']['acl'] > 0)) {?>
	
				<td valign="top" id='subject_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SUBJECT','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['subject']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['subject']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['subject']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['subject']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['subject']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['subject']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['subject']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['subject']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['subject']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['subject']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['subject']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['subject']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['subject']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['subject']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['keywords']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['keywords']['acl'] > 0)) {?>
	
				<td valign="top" id='keywords_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_KEYWORDS','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['keywords']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                                                      <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "popupText", "popupText", null);
echo smarty_function_sugar_translate(array('label'=>"LBL_KEYWORDS_POPUP_HELP",'module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                            <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['popupText']->value,'WIDTH'=>-1),$_smarty_tpl);?>

            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['keywords']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['keywords']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['keywords']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['keywords']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['keywords']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['keywords']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['keywords']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['keywords']['name'];?>
' size='30' 
    maxlength='255' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['keywords']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['keywords']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['keywords']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['keywords']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['keywords']['value'];?>
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
>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';<?php echo '</script'; ?>
>
<?php }?>
</div></div>

<?php echo $_smarty_tpl->tpl_vars['tiny_script']->value;?>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'base_module', 'enum', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BASE_MODULE','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'published', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PUBLISHED','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'field', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIELD','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'body_html', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BODY_HTML','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'template_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEMPLATE_NAME','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'author', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_AUTHOR','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'title', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'subject', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUBJECT','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'keywords', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_KEYWORDS','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'header_title', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_TITLE','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'header_text', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_TEXT','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'header_logo', 'file', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_LOGO_FILE','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'footer_text', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FOOTER_TEXT','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'following', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FOLLOWING','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'my_favorite', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAVORITE','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'commentlog', 'collection', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COMMENTLOG','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'locked_fields', 'locked_fields', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LOCKED_FIELDS','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sync_key', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYNC_KEY','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_id', 'team_list', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_ID','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_set_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_ID','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'acl_team_set_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_SELECTED_ID','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_count', 'relate', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_name', 'teamset', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'acl_team_names', 'teamset', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_SELECTED_TEAMS','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO_ID','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'PdfManager','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_team_name']={"form":"EditView","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name","team_id"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"pdfmanager_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"pdfmanager_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"pdfmanager_activities","module":"Activities"},"following_link":{"relationship":"pdfmanager_following"},"favorite_link":{"relationship":"pdfmanager_favorite"},"commentlog_link":{"relationship":"pdfmanager_commentlog"},"locked_fields_link":{"relationship":"pdfmanager_locked_fields"},"assigned_user_link":{"relationship":"pdfmanager_assigned_user","module":"Users","id_name":"assigned_user_id"}}
var PdfManagerEditView_read_only_base_module_editiondep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['id'], 'true'), [new SUGAR.forms.ReadOnlyAction('base_module','not(equal($record, ""))')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
