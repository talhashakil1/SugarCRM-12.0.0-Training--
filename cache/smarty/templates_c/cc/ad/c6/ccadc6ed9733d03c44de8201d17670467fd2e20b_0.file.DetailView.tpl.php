<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:14:06
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Employees/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1c1ebeaf31_97790057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ccadc6ed9733d03c44de8201d17670467fd2e20b' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Employees/DetailView.tpl',
      1 => 1660886046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1c1ebeaf31_97790057 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_button.php','function'=>'smarty_function_sugar_button',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),8=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),));
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
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" ><?php if ($_smarty_tpl->tpl_vars['DISPLAY_EDIT']->value) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';_form.submit();" id="edit_button" name="Edit" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"/><?php }?><ul id class="subnav" ><li><?php if ($_smarty_tpl->tpl_vars['DISPLAY_DUPLICATE']->value) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" name="Duplicate" id="duplicate_button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
"/><?php }?></li><li><?php if ($_smarty_tpl->tpl_vars['DISPLAY_DELETE']->value) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView');if( confirm('<?php echo $_smarty_tpl->tpl_vars['DELETE_WARNING']->value;?>
') ) { _form.return_module.value='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'; _form.return_action.value='index'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='delete'; _form.submit();};" name="Delete" id="delete_button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
"/><?php }?></li><li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"REALPDFVIEW",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'record'=>$_smarty_tpl->tpl_vars['fields']->value['id']['value']),$_smarty_tpl);?>
</li><li><?php echo smarty_function_sugar_button(array('module'=>((string)$_smarty_tpl->tpl_vars['module']->value),'id'=>"REALPDFEMAIL",'view'=>((string)$_smarty_tpl->tpl_vars['view']->value),'form_id'=>"formDetailView",'record'=>$_smarty_tpl->tpl_vars['fields']->value['id']['value']),$_smarty_tpl);?>
</li><li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Employees", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
"><?php }
}?></li></ul></li></ul>

</div>

</td>


<td align="right" width="20%"><?php echo $_smarty_tpl->tpl_vars['ADMIN_EDIT']->value;?>

		    					<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

				
	</td>
</tr>
</table>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="Employees_detailview_tabs"
>
        <div >


  
                <div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>



    	  <table id='' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['employee_status']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['employee_status']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_STATUS','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['employee_status']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['employee_status']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['value'];?>
">
    <?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['employee_status']['options']);?>
    <?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->tpl_vars['fields']->value['employee_status']['value']);?>
    <?php echo $_smarty_tpl->tpl_vars['field_options']->value[$_smarty_tpl->tpl_vars['field_val']->value];?>

<?php }?>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['picture']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['picture']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PICTURE_FILE','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['picture']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" value="$fields.picture.value">
<?php if ((isset($_smarty_tpl->tpl_vars['displayParams']->value['link']))) {?>
<a href=''>
<?php } else { ?>
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
').src)">
<?php }?>
<img
	id="img_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
	name="img_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
		<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['picture']['value'])) {?>
	   src='' 	
	<?php } else { ?>
	   src='index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['value'];?>
&type=SugarFieldImage&isTempFile=1'
	<?php }?>
		style='
		<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['picture']['value'])) {?>
			display:	none;
		<?php }?>
		<?php if ('' == '') {?>
			border: 0; 
		<?php } else { ?>
			border: 1px solid black; 
		<?php }?>
		<?php if ("42" == '') {?>
			width: auto;
		<?php } else { ?>
			width: 42px;
		<?php }?>
		<?php if ("42" == '') {?>
			height: auto;
		<?php } else { ?>
			height: 42px;
		<?php }?>
		'		
>
</a>

												
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['first_name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['first_name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['first_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="first_name" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['value'];?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['title']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Employees'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_work']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_work']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_OFFICE_PHONE','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_work']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['department']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['department']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['department']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['value'];?>
</span>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="reports_to_name" class="sugar_field"><a href="index.php?module=Employees&action=DetailView&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['value'];?>
</a></span>
												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_other']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_other']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_other']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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
							    	    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
												   &nbsp;
				                                                			</td>
			<td width='37.5%'  >
			    				
												
							</td>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_fax']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_fax']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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
							    	    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
												   &nbsp;
				                                                			</td>
			<td width='37.5%'  >
			    				
												
							</td>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_home']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_home']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  class="phone">
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['phone_home']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_TYPE','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					

<?php if (is_string($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'])) {?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'];?>
">
<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'];?>

<?php } else { ?>
<input type="hidden" class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value'];?>
">
    <?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options']);?>
    <?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']);?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_id']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_ID','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_id']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value'];?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_country']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_country']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_country']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="address_country" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['value'];?>
<br><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['value'];?>
&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value'];?>
<br><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['value'];?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['description']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NOTES','module'=>'Employees'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['email']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['email']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL','module'=>'Employees'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['email']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id='email_span'>
<?php echo $_smarty_tpl->tpl_vars['fields']->value['email']['value'];?>

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
>document.getElementById("").style.display='none';<?php echo '</script'; ?>
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
                for(panel in sugar_panel_collase['Employees_d'])
                    if(sugar_panel_collase['Employees_d'][panel])
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
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"employees_created_by","module":"Users","id_name":"created_by"},"business_centers":{"relationship":"business_center_users","id_name":"business_center_id","module":"BusinessCenters"},"shifts":{"relationship":"shifts_users","module":"Shifts"},"shift_exceptions":{"relationship":"shift_exceptions_users","module":"ShiftExceptions"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"message_invites":{"relationship":"messages_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
