<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:12
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431c3297b2_66896192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2c9db8caa9ec4d37402ba193b83899d195f9e584' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/PdfManager/DetailView.tpl',
      1 => 1660830492,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431c3297b2_66896192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar_teamset.php','function'=>'smarty_function_sugarvar_teamset',),8=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),9=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>


<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/EditView/Panels.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0 && YAHOO.util.Event.DOMReady;
}, SUGAR.themes.actionMenu);
<?php echo '</script'; ?>
>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
    
                    
        
                            
        
                            
        
                                                                                                                            
                            
    


<form action="index.php" method="post" name="DetailView" id="formDetailView">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

    <input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
">
    <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_id">
    <input type="hidden" name="module_tab">
    <input type="hidden" name="isDuplicate" value="false">
    <input type="hidden" name="offset" value="<?php echo $_smarty_tpl->tpl_vars['offset']->value;?>
">
    <input type="hidden" name="action" value="EditView">
    <input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" ><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PdfManager'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> <ul id class="subnav" ><li><?php if ($_smarty_tpl->tpl_vars['bean']->value->ACLAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PdfManager'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='DuplicateView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?> </li><li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PdfManager'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li><li><input type="button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW'];?>
" name="pdf_preview" onclick="document.location='index.php?module=PdfManager&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&action=sugarpdf&sugarpdf=pdfmanager&pdf_template_id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&pdf_preview=1'" class="button" title="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PREVIEW'];?>
" id="pdf_preview"/></li><li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"REALPDFVIEW",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'record'=>$_smarty_tpl->tpl_vars['fields']->value['id']['value']),$_smarty_tpl);?>
</li><li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"REALPDFEMAIL",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'record'=>$_smarty_tpl->tpl_vars['fields']->value['id']['value']),$_smarty_tpl);?>
</li></ul></li></ul>

</div>

</td>


<td align="right" width="20%"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

		    					<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

				
	</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="PdfManager_detailview_tabs"
>
        <div >


  
                <div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>



    	  <table id='DEFAULT' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['name']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['team_name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['team_name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['team_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php echo smarty_function_sugarvar_teamset(array('parentFieldArray'=>'fields','vardef'=>$_smarty_tpl->tpl_vars['fields']->value['team_name'],'tabindex'=>1,'display'=>'','labelSpan'=>'','fieldSpan'=>'','formName'=>'','displayType'=>'renderDetailView'),$_smarty_tpl);?>


												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<span class="sugar_field" id="<?php echo nl2br(url2html(htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['description']['name'], ENT_QUOTES, 'UTF-8', true)));?>
"><?php echo nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['description']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
</span>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['base_module']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['base_module']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BASE_MODULE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['base_module']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['published']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['published']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PUBLISHED','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['published']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['body_html']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['body_html']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BODY_HTML','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['body_html']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="body_html" class="sugar_field"><iframe sandbox srcdoc="<?php echo $_smarty_tpl->tpl_vars['fields']->value['body_html']['value'];?>
" style="border: 0" /></span>
												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['header_title']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['header_title']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_TITLE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['header_title']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['header_text']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['header_text']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_TEXT','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['header_text']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['header_logo']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['header_logo']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HEADER_LOGO_FILE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['header_logo']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['name'];?>
">
<a href="index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&type=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
" class="tabDetailViewDFLink" target='_blank'><?php echo $_smarty_tpl->tpl_vars['fields']->value['header_logo']['value'];?>
</a>
</span>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['footer_text']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['footer_text']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FOOTER_TEXT','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['footer_text']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		</table>
    </div>
<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("DEFAULT").style.display='none';<?php echo '</script'; ?>
>
<?php }?>
  
                <div id='detailpanel_2' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>



        <h4>
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

    	  <table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['author']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['author']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_AUTHOR','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['author']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['title']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['title']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

	<?php }?>
		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['subject']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['subject']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SUBJECT','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['subject']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['keywords']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['keywords']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_KEYWORDS','module'=>'PdfManager'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['keywords']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							</tr>
	<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0 && $_smarty_tpl->tpl_vars['fieldsUsed']->value != $_smarty_tpl->tpl_vars['fieldsHidden']->value) {?>
	<?php echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

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

</div>
</div>

</form>
<?php echo '<script'; ?>
>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){SUGAR.util.buildAccessKeyLabels();});
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['PdfManager_d'])
                    if(sugar_panel_collase['PdfManager_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            }
        });
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('DetailView');
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"pdfmanager_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"pdfmanager_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"pdfmanager_activities","module":"Activities"},"following_link":{"relationship":"pdfmanager_following"},"favorite_link":{"relationship":"pdfmanager_favorite"},"commentlog_link":{"relationship":"pdfmanager_commentlog"},"locked_fields_link":{"relationship":"pdfmanager_locked_fields"},"assigned_user_link":{"relationship":"pdfmanager_assigned_user","module":"Users","id_name":"assigned_user_id"}}
var PdfManagerEditView_read_only_base_module_editiondep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['id'], 'true'), [new SUGAR.forms.ReadOnlyAction('base_module','not(equal($record, ""))')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
