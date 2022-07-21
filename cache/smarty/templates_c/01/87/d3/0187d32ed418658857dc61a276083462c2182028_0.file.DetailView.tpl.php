<?php
/* Smarty version 3.1.39, created on 2022-07-21 19:33:42
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Schedulers/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d963c6688be9_81290931',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0187d32ed418658857dc61a276083462c2182028' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Schedulers/DetailView.tpl',
      1 => 1658414022,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d963c6688be9_81290931 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),));
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
" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EDIT_BUTTON_LABEL'];?>
"><?php }?> <ul id class="subnav" ><li><?php if ($_smarty_tpl->tpl_vars['bean']->value->ACLAccess("edit")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='DuplicateView'; _form.return_id.value='<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DUPLICATE_BUTTON_LABEL'];?>
" id="duplicate_button"><?php }?> </li><li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("delete")) {?><input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_TITLE'];?>
" accessKey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_KEY'];?>
" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('<?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_DELETE_CONFIRMATION'];?>
')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE_BUTTON_LABEL'];?>
" id="delete_button"><?php }?> </li><li><?php if ($_smarty_tpl->tpl_vars['bean']->value->aclAccess("detail")) {
if (!empty($_smarty_tpl->tpl_vars['fields']->value['id']['value']) && $_smarty_tpl->tpl_vars['isAuditEnabled']->value) {?><input id="btn_view_change_log" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&module_name=Schedulers", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_VIEW_CHANGE_LOG'];?>
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

<div id="Schedulers_detailview_tabs"
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
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Schedulers'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {?>
			    				
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_start']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_START','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_start']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['time_from']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_from']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_FROM','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_from']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="time_from" class="sugar_field"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['fields']->value['time_from']['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALWAYS'] : $tmp);?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_TIME_END','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_time_end']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_time_end']['value'];?>
</span>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['time_to']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_to']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TIME_TO','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['time_to']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="time_to" class="sugar_field"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['fields']->value['time_to']['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_ALWAYS'] : $tmp);?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['last_run']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['last_run']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_RUN','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['last_run']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="last_run" class="sugar_field"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['fields']->value['last_run']['value'])===null||$tmp==='' ? $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEVER'] : $tmp);?>
</span>
												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['job_interval']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['job_interval']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_INTERVAL','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['job_interval']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="job_interval" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['JOB_INTERVAL']->value;?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['catch_up']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['catch_up']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_CATCH_UP','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['catch_up']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['job']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['job']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_JOB','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['job']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['job']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['job']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['job']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['job']['value'];?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['date_entered']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_ENTERED','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_entered']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="date_entered" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_entered']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['created_by_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</span>
												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['date_modified']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DATE_MODIFIED','module'=>'Schedulers'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['date_modified']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="date_modified" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['fields']->value['date_modified']['value'];?>
 <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BY'];?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['modified_by_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
&nbsp;</span>
												
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
                for(panel in sugar_panel_collase['Schedulers_d'])
                    if(sugar_panel_collase['Schedulers_d'][panel])
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
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"schedulers_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"schedulers_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"scheduler_activities","module":"Activities"},"schedulers_times":{"relationship":"schedulers_jobs_rel","module":"SchedulersJobs"},"following_link":{"relationship":"schedulers_following"},"favorite_link":{"relationship":"schedulers_favorite"},"commentlog_link":{"relationship":"schedulers_commentlog"},"locked_fields_link":{"relationship":"schedulers_locked_fields"}}
var job_url_visdep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['job_function'], 'true'), [new SUGAR.forms.SetVisibilityAction('job_url','equal($job_function, "url::")', '')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
