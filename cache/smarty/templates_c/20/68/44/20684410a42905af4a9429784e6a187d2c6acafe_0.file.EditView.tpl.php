<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:30
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Users/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1cea05a264_85911521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20684410a42905af4a9429784e6a187d2c6acafe' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Users/EditView.tpl',
      1 => 1660886249,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Meetings/tpls/reminders.tpl' => 1,
  ),
),false)) {
function content_62ff1cea05a264_85911521 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_image.php','function'=>'smarty_function_sugar_image',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),8=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),9=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),10=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.lookup.php','function'=>'smarty_modifier_lookup',),11=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),12=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_ajax_url.php','function'=>'smarty_function_sugar_ajax_url',),13=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),14=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),15=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_password_requirements_box.php','function'=>'smarty_function_sugar_password_requirements_box',),));
?>





<?php echo $_smarty_tpl->tpl_vars['ROLLOVER']->value;?>

<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_emails.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/PasswordRequirementBox.css'),$_smarty_tpl);?>
">
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/SubPanel/SubPanelTiles.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript'>
var ERR_RULES_NOT_MET = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_RULES_NOT_MET'];?>
';
var ERR_ENTER_OLD_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_ENTER_OLD_PASSWORD'];?>
';
var ERR_ENTER_NEW_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_ENTER_NEW_PASSWORD'];?>
';
var ERR_ENTER_CONFIRMATION_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_ENTER_CONFIRMATION_PASSWORD'];?>
';
var ERR_REENTER_PASSWORDS = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_REENTER_PASSWORDS'];?>
';
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/User.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/UserEditView.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/PasswordRequirementBox.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['ERROR_STRING']->value;?>

<span id="ajax_error_string" class="error"></span>

<form name="EditView" enctype="multipart/form-data" id="EditView" method="POST" action="index.php">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

	<input type="hidden" name="display_tabs_def">
	<input type="hidden" name="hide_tabs_def">
	<input type="hidden" name="remove_tabs_def">
	<input type="hidden" name="module" value="Users">
	<input type="hidden" name="record" id="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
	<input type="hidden" name="action">
	<input type="hidden" name="page" value="EditView">
	<input type="hidden" name="return_module" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_MODULE']->value;?>
">
	<input type="hidden" name="return_id" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ID']->value;?>
">
	<input type="hidden" name="return_action" value="<?php echo $_smarty_tpl->tpl_vars['RETURN_ACTION']->value;?>
">
	<input type="hidden" name="password_change" id="password_change" value="false">
    <input type="hidden" name="required_password" id="required_password" value='<?php echo $_smarty_tpl->tpl_vars['REQUIRED_PASSWORD']->value;?>
' >
	<input type="hidden" name="old_user_name" value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
">
	<input type="hidden" name="type" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['REDIRECT_EMAILS_TYPE']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<input type="hidden" id="is_group" name="is_group" value='<?php echo $_smarty_tpl->tpl_vars['IS_GROUP']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['IS_GROUP_DISABLED']->value;?>
>
	<input type="hidden" id='portal_only' name='portal_only' value='<?php echo $_smarty_tpl->tpl_vars['IS_PORTALONLY']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['IS_PORTAL_ONLY_DISABLED']->value;?>
>
	<input type="hidden" name="is_admin" id="is_admin" value='<?php echo $_smarty_tpl->tpl_vars['IS_FOCUS_ADMIN']->value;?>
' <?php echo $_smarty_tpl->tpl_vars['IS_ADMIN_DISABLED']->value;?>
 >
	<input type="hidden" name="is_current_admin" id="is_current_admin" value='<?php echo $_smarty_tpl->tpl_vars['IS_ADMIN']->value;?>
' >
	<input type="hidden" name="edit_self" id="edit_self" value='<?php echo $_smarty_tpl->tpl_vars['EDIT_SELF']->value;?>
' >
	<input type="hidden" name="required_email_address" id="required_email_address" value='<?php echo $_smarty_tpl->tpl_vars['REQUIRED_EMAIL_ADDRESS']->value;?>
' >
    <input type="hidden" name="isDuplicate" id="isDuplicate" value="<?php echo $_smarty_tpl->tpl_vars['isDuplicate']->value;?>
">
	<div id="popup_window"></div>

<?php echo '<script'; ?>
 type="text/javascript">
<?php if ($_smarty_tpl->tpl_vars['SHOW_NON_EDITABLE_FIELDS_ALERT']->value) {?>
        app.alert.show('non_editable_user_fields', {
            level: 'info',
            messages: '<?php echo $_smarty_tpl->tpl_vars['NON_EDITABLE_FIELDS_MSG']->value;?>
',
            autoClose: false
        });
<?php }?>

var EditView_tabs = new YAHOO.widget.TabView("EditView_tabs");

//Override so we do not force submit, just simulate the 'save button' click
SUGAR.EmailAddressWidget.prototype.forceSubmit = function() { document.getElementById('Save').click();}

EditView_tabs.on('contentReady', function(e){
<?php if ($_smarty_tpl->tpl_vars['ID']->value) {?>
    var eapmTabIndex = 4;
    <?php if (!$_smarty_tpl->tpl_vars['SHOW_THEMES']->value) {?>eapmTabIndex = 3;<?php }?>
    EditView_tabs.getTab(eapmTabIndex).set('dataSrc','index.php?sugar_body_only=1&module=Users&subpanel=eapm&action=SubPanelViewer&inline=1&record=<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
&layout_def_key=UserEAPM&inline=1&ajaxSubpanel=true');
    EditView_tabs.getTab(eapmTabIndex).set('cacheData',true);
    EditView_tabs.getTab(eapmTabIndex).on('dataLoadedChange',function(){
        //reinit action menus
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

    if ( document.location.hash == '#tab5' ) {
        EditView_tabs.selectTab(eapmTabIndex);
    }

<?php }
if ($_smarty_tpl->tpl_vars['EDIT_SELF']->value && $_smarty_tpl->tpl_vars['SHOW_DOWNLOADS_TAB']->value) {?>

    EditView_tabs.addTab( new YAHOO.widget.Tab({
        label: '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DOWNLOADS'];?>
',
        dataSrc: 'index.php?to_pdf=1&module=Home&action=pluginList',
        content: '<div style="text-align:center; width: 100%"><?php echo smarty_function_sugar_image(array('name'=>"loading"),$_smarty_tpl);?>
</div>',
        cacheData: true
    }));
    EditView_tabs.getTab(5).getElementsByTagName('a')[0].id = 'tab6';

<?php }
if ($_smarty_tpl->tpl_vars['scroll_to_cal']->value) {?>
    
        //we are coming from the tour welcome page, so we need to simulate a click on the 4th tab
        // and scroll to the calendar_options div after the tabs have rendered
        document.getElementById('tab4').click();
        document.getElementById('calendar_options').scrollIntoView();
    
<?php }?>

});
<?php echo '</script'; ?>
>

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer">
    <tr>
        <td>
            <?php echo smarty_function_sugar_action_menu(array('id'=>"userEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_BUTTON_HEADER']->value,'flat'=>true),$_smarty_tpl);?>

        </td>
        <td align="right" nowrap>
            <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

        </td>
    </tr>
</table>

<div id="EditView_tabs" class="yui-navset">
    <ul class="yui-nav">
        <li class="selected"><a id="tab1" href="#tab1"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_INFORMATION'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['CHANGE_PWD']->value == 0) {?>style='display:none'<?php }?>><a id="tab2" href="#tab2"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHANGE_PASSWORD_TITLE'];?>
</em></a></li>
        <?php if ($_smarty_tpl->tpl_vars['SHOW_THEMES']->value) {?>
        <li><a id="tab3" href="#tab3" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THEME'];?>
</em></a></li>
        <?php }?>
        <li><a id="tab4" href="#tab4" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADVANCED'];?>
</em></a></li>
        <?php if ($_smarty_tpl->tpl_vars['ID']->value) {?>
        <li><a id="tab5" href="#tab5" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EAPM_SUBPANEL_TITLE'];?>
</em></a></li>
        <?php }?>
    </ul>
    <div class="yui-content">
        <div>
<!-- BEGIN METADATA GENERATED CONTENT -->
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>


<span id='tabcounterJS'><?php echo '<script'; ?>
>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references<?php echo '</script'; ?>
></span>

<div id="EditView_tabs"
>
        <div >




  
  <div id="detailpanel_1" class="<?php echo (($tmp = @$_smarty_tpl->tpl_vars['def']->value['templateMeta']['panelClass'])===null||$tmp==='' ? 'edit view edit508' : $tmp);?>
">

<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>


<h4>&nbsp;&nbsp;
  <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
  <img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"basic_search.gif"),$_smarty_tpl);?>
"></a>
  <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
  <img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"advanced_search.gif"),$_smarty_tpl);?>
"></a>
  <?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

              <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_1').className += ' expanded';
    <?php echo '</script'; ?>
>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_USER_INFORMATION'  class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['user_name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['user_name']['acl'] > 0)) {?>
	
				<td valign="top" id='user_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_USER_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['user_name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
		 				    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['user_name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['user_name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['user_name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['user_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['user_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['user_name']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['name'];?>
' size='30' 
    maxlength='60' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      accesskey='7'  >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['user_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['user_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['user_name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['first_name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['first_name']['acl'] > 0)) {?>
	
				<td valign="top" id='first_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['first_name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['first_name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['first_name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['first_name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['first_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['name'];?>
' size='30' 
    maxlength='30' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['first_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name']['value'];?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 0)) {?>
	
				<td valign="top" id='status_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
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

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['last_name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['last_name']['acl'] > 0)) {?>
	
				<td valign="top" id='last_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['last_name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['last_name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['last_name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['last_name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['last_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
' size='30' 
    maxlength='30' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['last_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name']['value'];?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['UserType']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['UserType']['acl'] > 0)) {?>
	
				<td valign="top" id='UserType_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_USER_TYPE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['UserType']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['UserType']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['UserType']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['UserType']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value && !$_smarty_tpl->tpl_vars['IDM_MODE_ENABLED']->value) {
echo $_smarty_tpl->tpl_vars['USER_TYPE_DROPDOWN']->value;
} else {
echo $_smarty_tpl->tpl_vars['USER_TYPE_READONLY']->value;
}?>
									<?php } else { ?>
			                                </td>
				<td></td><td></td>
				    
		</td>		
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['license_type']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['license_type']['acl'] > 0)) {?>
	
				<td valign="top" id='license_type_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LICENSE_TYPE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
													    <span class="required">*</span>
			
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['license_type']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['license_type']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['license_type']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['license_type']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				<?php if ($_smarty_tpl->tpl_vars['IS_ADMIN']->value && !$_smarty_tpl->tpl_vars['IDM_MODE_LC_LOCK']->value) {
echo $_smarty_tpl->tpl_vars['LICENSE_TYPE_DROPDOWN']->value;
} else {
echo $_smarty_tpl->tpl_vars['LICENSE_TYPE_READONLY']->value;
}?>
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

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['picture']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['picture']['acl'] > 0)) {?>
	
				<td valign="top" id='picture_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PICTURE_FILE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['picture']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['picture']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['picture']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['picture']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['picture']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['picture']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['picture']['value']);
}?>  


<?php if ((isset($_REQUEST['isDuplicate'])) && $_REQUEST['isDuplicate'] == "true") {?>
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
_duplicate" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
_duplicate" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
"/>
<?php }?>

<input 
	type="file" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
	title="" size="30" maxlength="255" value="" tabindex="0"
	onchange="SUGAR.image.confirm_imagefile('<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
');" 
	class="imageUploader"
	<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['picture']['value'])) {?>
	style="display:none"
	<?php }?>  />

<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['picture']['value'])) {
} else { ?>
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
').src)">
<img
	id="img_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
	name="img_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 	
		   src='index.php?entryPoint=download&id=<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['value'];?>
&type=SugarFieldImage&isTempFile=1'
		style='
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
		<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['picture']['value'])) {?> 
		  visibility:hidden;
		<?php }?>
		'	

></a>
<img
	id="bt_remove_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
	name="bt_remvoe_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
	alt="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REMOVE'),$_smarty_tpl);?>
"
	title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REMOVE'),$_smarty_tpl);?>
"
	src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'delete_inline.gif'),$_smarty_tpl);?>
"
	onclick="SUGAR.image.remove_upload_imagefile('<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
');" 	
	/>

<input 
	id="remove_imagefile_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" name="remove_imagefile_<?php echo $_smarty_tpl->tpl_vars['fields']->value['picture']['name'];?>
" 
	type="hidden"  value="" />
<?php }?>
									<?php } else { ?>
						    
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
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); <?php echo '</script'; ?>
>


</div>
<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("LBL_USER_INFORMATION").style.display='none';<?php echo '</script'; ?>
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
  <?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

              <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_2').className += ' expanded';
    <?php echo '</script'; ?>
>
  </h4>
 <table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_EMPLOYEE_INFORMATION'  class="yui3-skin-sam edit view panelContainer">


<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['employee_status']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['employee_status']['acl'] > 0)) {?>
	
				<td valign="top" id='employee_status_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_STATUS','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['employee_status']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['employee_status']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['employee_status']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['employee_status']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'])) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
" 
	title=''       
	>

	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['employee_status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['employee_status']['value']),$_smarty_tpl);?>

	</select>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['employee_status']['options']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "field_val", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'field_val'));?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ac_key", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('ac_key', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ac_key'));?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
" 
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
" 
		title=''          
		>

		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['employee_status']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['employee_status']['value']),$_smarty_tpl);?>

		</select>
	
	<input
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-input"
		name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-input"
		size="30"
		value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-image"></button><button type="button"
	        id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];

			(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
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
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
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
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
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
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['employee_status']['name'];?>
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

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['acl'] > 0)) {?>
	
				<td valign="top" id='show_on_employees_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW_ON_EMPLOYEES','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" value="0"> 
<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" 
name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" 
value="1" title='' tabindex="0" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
 >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "1" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "yes" || strval($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['value']) == "on") {?> 
<?php $_smarty_tpl->_assignInScope('checked', "CHECKED");
} else {
$_smarty_tpl->_assignInScope('checked', '');
}?>
<input type="checkbox" class="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['name'];?>
" value="$fields.show_on_employees.value" disabled="true" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['title']['acl'] > 0)) {?>
	
				<td valign="top" id='title_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users'),$_smarty_tpl);
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
    maxlength='50' 
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

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_work']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['phone_work']['acl'] > 0)) {?>
	
				<td valign="top" id='phone_work_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_WORK_PHONE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_work']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_work']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['phone_work']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['phone_work']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_work']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']);
}?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_work']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_work']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_work']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_work']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['department']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['department']['acl'] > 0)) {?>
	
				<td valign="top" id='department_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['department']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['department']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['department']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['department']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department']['name'];?>
' size='30' 
    maxlength='50' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
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

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['acl'] > 0)) {?>
	
				<td valign="top" id='phone_mobile_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']);
}?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_mobile']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['acl'] > 0)) {?>
	
				<td valign="top" id='reports_to_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="sqsEnabled" tabindex="0" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" size="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['id_name'], ENT_QUOTES, 'UTF-8', true);?>
" 
	id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['id_name'], ENT_QUOTES, 'UTF-8', true);?>
" 
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'], ENT_QUOTES, 'UTF-8', true);?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_SELECT_USERS_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
    "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['module'], ENT_QUOTES, 'UTF-8', true);?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"reports_to_id","name":"reports_to_name"}}, 
	"single", 
	true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-select.png"),$_smarty_tpl);?>
"></button><button type="button" name="btn_clr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="btn_clr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['id_name'], ENT_QUOTES, 'UTF-8', true);?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_USERS_LABEL"),$_smarty_tpl);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_other']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['phone_other']['acl'] > 0)) {?>
	
				<td valign="top" id='phone_other_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_other']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_other']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['phone_other']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['phone_other']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_other']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']);
}?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_other']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_other']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_other']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_other']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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

	

		
        

	
	

	
    	
				<td valign="top" id='_label' width='12.5%' scope="col">
						    &nbsp;
										
                                                            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		
					
		</td>
		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['acl'] > 0)) {?>
	
				<td valign="top" id='phone_fax_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']);
}?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_fax']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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

	

		
        

	
	

	
    	
				<td valign="top" id='_label' width='12.5%' scope="col">
						    &nbsp;
										
                                                            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		
					
		</td>
		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_home']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['phone_home']['acl'] > 0)) {?>
	
				<td valign="top" id='phone_home_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_home']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_home']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['phone_home']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['phone_home']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_home']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']);
}?>  

<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_home']['name'];?>
' id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['phone_home']['name'];?>
' size='30' maxlength='50' value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title='' tabindex='0'	  class="phone" >

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['phone_home']['value'])) {
$_smarty_tpl->_assignInScope('phone_value', $_smarty_tpl->tpl_vars['fields']->value['phone_home']['value']);?>

<?php echo smarty_function_sugar_phone(array('value'=>$_smarty_tpl->tpl_vars['phone_value']->value,'usa_format'=>"0"),$_smarty_tpl);?>


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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['business_center_name']['acl'] > 0)) {?>
	
				<td valign="top" id='business_center_name_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BUSINESS_CENTER_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['business_center_name']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['business_center_name']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<input type="text" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" class="sqsEnabled" tabindex="0" id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" size="" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['id_name'], ENT_QUOTES, 'UTF-8', true);?>
" 
	id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['id_name'], ENT_QUOTES, 'UTF-8', true);?>
" 
	value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_id']['value'], ENT_QUOTES, 'UTF-8', true);?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="btn_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_TITLE"),$_smarty_tpl);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_SELECT_BUTTON_LABEL"),$_smarty_tpl);?>
"
onclick='open_popup(
    "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['module'], ENT_QUOTES, 'UTF-8', true);?>
", 
	600, 
	400, 
	"", 
	true, 
	false, 
	{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"business_center_id","name":"business_center_name"}}, 
	"single", 
	true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-select.png"),$_smarty_tpl);?>
"></button><button type="button" name="btn_clr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" id="btn_clr_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_TITLE"),$_smarty_tpl);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['id_name'], ENT_QUOTES, 'UTF-8', true);?>
');"  value="<?php echo smarty_function_sugar_translate(array('label'=>"LBL_ACCESSKEY_CLEAR_RELATE_LABEL"),$_smarty_tpl);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
</span>
<?php echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $_smarty_tpl->tpl_vars['form_name']->value;?>
_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['name'], ENT_QUOTES, 'UTF-8', true);?>
']) != 'undefined'",
		enableQS
);
<?php echo '</script'; ?>
>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
 
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['business_center_id']['value'])) {
$_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'default', "detail_url", null);?>index.php?module=BusinessCenters&action=DetailView&record=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_id']['value'], ENT_QUOTES, 'UTF-8', true);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
<a href="<?php echo smarty_function_sugar_ajax_url(array('url'=>$_smarty_tpl->tpl_vars['detail_url']->value),$_smarty_tpl);?>
"><?php }?>
<span id="business_center_id" class="sugar_field" data-id-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_id']['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['fields']->value['business_center_id']['value'])) {?></a><?php }?>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    	
				<td valign="top" id='_label' width='12.5%' scope="col">
						    &nbsp;
										
                                                            
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		
					
		</td>
		    
	</tr>
<?php $_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsUsed']->value > 0) {
echo $_smarty_tpl->tpl_vars['tableRow']->value;?>

<?php }
echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
<tr>

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['acl'] > 0)) {?>
	
				<td valign="top" id='messenger_type_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_TYPE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_type']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				

<?php if (!(isset($_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'])) || $_smarty_tpl->tpl_vars['config']->value['enable_autocomplete'] == false) {?>
	<select name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" 
	id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" 
	title=''       
	>

	<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']),$_smarty_tpl);?>

	</select>
<?php } else { ?>
	<?php $_smarty_tpl->_assignInScope('field_options', $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options']);?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "field_val", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('field_val', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'field_val'));?>
	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "ac_key", null, null);
echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
	<?php $_smarty_tpl->_assignInScope('ac_key', $_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'ac_key'));?>

			<select style='display:none' name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" 
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
" 
		title=''          
		>

		<?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['options'],'selected'=>$_smarty_tpl->tpl_vars['fields']->value['messenger_type']['value']),$_smarty_tpl);?>

		</select>
	
	<input
		id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input"
		name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input"
		size="30"
		value="<?php echo smarty_modifier_lookup($_smarty_tpl->tpl_vars['field_val']->value,$_smarty_tpl->tpl_vars['field_options']->value);?>
"
		type="text" style="vertical-align: top;">

		
	<span class="id-ff multiple">
	    <button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-down.png"),$_smarty_tpl);?>
" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-image"></button><button type="button"
	        id="btn-clear-<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input"
	        title="Clear"
	        onclick="SUGAR.clearRelateField(this.form, '<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input', '<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
');sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file'=>"id-ff-clear.png"),$_smarty_tpl);?>
"></button>
	</span>

	<?php echo '<script'; ?>
>
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
 = [];

			(function (){
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
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
.inputNode = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputImage = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-image');
	SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputHidden = Y.one('#<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
');
	
				function SyncToHidden(selectme){
				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
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
			sync_<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
 = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.get('value');

				SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
-input'))
						SUGAR.AutoComplete.<?php echo $_smarty_tpl->tpl_vars['ac_key']->value;?>
.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
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
			var selectElem = document.getElementById("<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_type']['name'];?>
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

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['acl'] > 0)) {?>
	
				<td valign="top" id='messenger_id_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_ID','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['messenger_id']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_street']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['address_street']['acl'] > 0)) {?>
	
				<td valign="top" id='address_street_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STREET','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_street']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_street']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['address_street']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['address_street']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (empty($_smarty_tpl->tpl_vars['fields']->value['address_street']['value'])) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_street']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_street']['value']);
}?>  


<textarea  id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['name'];?>
' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_street']['name'];?>
'
rows="4" 
cols="60" 
title='' tabindex="0" 
 ><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</textarea>

									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<span class="sugar_field" id="<?php echo nl2br(url2html(htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['address_street']['name'], ENT_QUOTES, 'UTF-8', true)));?>
"><?php echo nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['address_street']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_city']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['address_city']['acl'] > 0)) {?>
	
				<td valign="top" id='address_city_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_CITY','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_city']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_city']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['address_city']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['address_city']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_city']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_city']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_city']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_city']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_city']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_city']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_city']['value'];?>
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

	

		
        

	
	

	
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_state']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['address_state']['acl'] > 0)) {?>
	
				<td valign="top" id='address_state_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STATE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_state']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_state']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['address_state']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['address_state']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_state']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_state']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_state']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_state']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_state']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_state']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_state']['value'];?>
</span>

				    
				
		<?php }?>

		<?php } else { ?>

		  <td></td><td></td>

	<?php }?>

		    
	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['acl'] > 0)) {?>
	
				<td valign="top" id='address_postalcode_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_POSTALCODE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' >
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['name'];?>
' size='30' 
    maxlength='20' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['value'];?>
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

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_country']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['address_country']['acl'] > 0)) {?>
	
				<td valign="top" id='address_country_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_COUNTRY','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			   <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
										
                                                            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_country']['locked'] == true) {?>
                <?php echo $_smarty_tpl->tpl_vars['lockedIcon']->value;?>

            <?php }?>
                        
		</td>
				<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

		
						    
		    				<td valign="top" width='37.5%' colspan='3'>
			
		
		            <?php if ($_smarty_tpl->tpl_vars['fields']->value['address_country']['acl'] > 1 && $_smarty_tpl->tpl_vars['fields']->value['address_country']['locked'] == false && $_smarty_tpl->tpl_vars['fields']->value['address_country']['disabled'] == false) {?>
		
							<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

			    
				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_country']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_country']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_country']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''      >
									<?php } else { ?>
						    
			    <?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

				
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_country']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_country']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_country']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['value'];?>
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

	

		
        

	
	

				
    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 1 || ($_smarty_tpl->tpl_vars['showDetailData']->value && $_smarty_tpl->tpl_vars['fields']->value['description']['acl'] > 0)) {?>
	
				<td valign="top" id='description_label' width='12.5%' scope="col">
						   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Users'),$_smarty_tpl);
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
rows="4" 
cols="60" 
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

<?php }?>
</table>
<?php echo '<script'; ?>
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); <?php echo '</script'; ?>
>


</div>
<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("LBL_EMPLOYEE_INFORMATION").style.display='none';<?php echo '</script'; ?>
>
<?php }?>
</div></div>

<!-- END METADATA GENERATED CONTENT -->

            <div id="email_options">
            <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                            <tr>
                                <th align="left" scope="row" colspan="4">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_OPTIONS_TITLE'];?>
</h4>
                                </th>
                            </tr>
                            <tr>
                                <td scope="row" width="17%">
                                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL'];?>
:  <?php if ($_smarty_tpl->tpl_vars['REQUIRED_EMAIL_ADDRESS']->value) {?><span class="required" id="mandatory_email"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php }?>
                                </td>
                                <td>
                                    <?php echo $_smarty_tpl->tpl_vars['NEW_EMAIL']->value;?>

                                </td>
                            </tr>
                            <tr id="email_options_link_type" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
'>
                                <td scope="row" width="17%">
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_LINK_TYPE'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_LINK_TYPE_HELP'],'WIDTH'=>450),$_smarty_tpl);?>

                                </td>
                                <td>
                                    <select id="email_link_type" name="email_link_type" <?php if ($_smarty_tpl->tpl_vars['DISABLE_SUGAR_CLIENT']->value) {?> data-sugarclientdisabled="true"<?php }?> tabindex='410'>
                                    <?php echo $_smarty_tpl->tpl_vars['EMAIL_LINK_TYPE']->value;?>

                                    </select>
                                </td>
                            </tr>
                            <?php if (!$_smarty_tpl->tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']->value) {?>
                            <tr id="mail_smtpserver_tr">
                                <td width="20%" scope="row"><span id="mail_smtpserver_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_PROVIDER'];?>
</span></td>
                                <td width="30%" ><slot><?php echo $_smarty_tpl->tpl_vars['mail_smtpdisplay']->value;?>
<input id='mail_smtpserver' name='mail_smtpserver' type="hidden" value='<?php echo $_smarty_tpl->tpl_vars['mail_smtpserver']->value;?>
' /></slot></td>
                                <td>&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                             <?php if (!empty($_smarty_tpl->tpl_vars['mail_smtpauth_req']->value)) {?>

                            <tr id="mail_smtpuser_tr">
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtpuser_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER'];?>
</span></td>
                                <td width="30%" ><slot><input type="text" id="mail_smtpuser" name="mail_smtpuser" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtpuser']->value;?>
" tabindex='1' ></slot></td>
                                <td>&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            <tr id="mail_smtppass_tr">
                                <td width="20%" scope="row" nowrap="nowrap"><span id="mail_smtppass_label"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPPASS'];?>
</span></td>
                                <td width="30%" ><slot>
                                <input type="password" id="mail_smtppass" name="mail_smtppass" size="25" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['mail_smtppass']->value;?>
" tabindex='1'>
                                <a href="javascript:void(0)" id='mail_smtppass_link' onClick="SUGAR.util.setEmailPasswordEdit('mail_smtppass')" style="display: none"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHANGE_PASSWORD'];?>
</a>
                                </slot></td>
                                <td>&nbsp;</td>
                                <td >&nbsp;</td>
                            </tr>
                            <?php }?>

                            <tr id="test_outbound_settings_tr">
                                <td width="17%" scope="row"><input type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_TEST_OUTBOUND_SETTINGS'];?>
" onclick="startOutBoundEmailSettingsTest();"></td>
                                <td width="33%" >&nbsp;</td>
                                <td width="17%">&nbsp;</td>
                                <td width="33%" >&nbsp;</td>
                            </tr>
                            <?php }?>
                        </table>
            </div>
</div>
<div>
            <?php if (($_smarty_tpl->tpl_vars['CHANGE_PWD']->value) == '1') {?>
            <div id="generate_password">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
                <tr>
                    <td width='40%'>
                        <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                            <tr>
                                <th align="left" scope="row" colspan="4">
                                    <h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHANGE_PASSWORD_TITLE'];?>
</h4><br>
                                    <span id="error_pwd" class="error" <?php if (empty($_smarty_tpl->tpl_vars['ERROR_PASSWORD']->value)) {?> style="display: none" <?php }?>><?php echo $_smarty_tpl->tpl_vars['ERROR_PASSWORD']->value;?>
</span>
                                </th>
                            </tr>
                        </table>
                        <!-- field to stop firefox autofill -->
                        <input style="display:none;" type="password" name="stopautofill" />
                            <!-- hide field if user is admin -->
                            <div id='generate_password_old_password' <?php if (($_smarty_tpl->tpl_vars['IS_ADMIN']->value)) {?> style='display:none' <?php }?>>
                                 <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                                    <tr>
                                        <td width='35%' scope="row">
                                            <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_OLD_PASSWORD'];?>

                                        </td>
                                        <td >
                                            <input name='old_password' id='old_password' type='password' tabindex='2' autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                               onkeyup="password_confirmation();"
                                               onchange="password_confirmation();"
                                            >
                                        </td>
                                        <td width='40%'>
                                        </td>
                                    </tr>
                                 </table>
                            </div>
                        <table width='100%' cellspacing='0' cellpadding='0' border='0' >
                            <tr>
                                <td width='35%' scope="row" snowrap>
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEW_PASSWORD'];?>

                                    <span class="required" id="mandatory_pwd"><?php if (($_smarty_tpl->tpl_vars['REQUIRED_PASSWORD']->value)) {
echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];
}?></span>
                                </td>
                                <td class='dataField'>

                                    <input name='new_password' id= "new_password" type='password' tabindex='2' autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                       onkeyup="password_confirmation();newrules('<?php echo $_smarty_tpl->tpl_vars['PWDSETTINGS']->value['minpwdlength'];?>
','<?php echo $_smarty_tpl->tpl_vars['PWDSETTINGS']->value['maxpwdlength'];?>
','<?php echo $_smarty_tpl->tpl_vars['REGEX']->value;?>
');"
                                       onchange="password_confirmation();newrules('<?php echo $_smarty_tpl->tpl_vars['PWDSETTINGS']->value['minpwdlength'];?>
','<?php echo $_smarty_tpl->tpl_vars['PWDSETTINGS']->value['maxpwdlength'];?>
','<?php echo $_smarty_tpl->tpl_vars['REGEX']->value;?>
');"
                                    />
                                </td>
                                <td width='40%'>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row" width='35%'>
                                    <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_PASSWORD'];?>

                                </td>
                                <td class='dataField'>
                                    <input name='confirm_new_password' id='confirm_pwd' style ='' type='password' tabindex='2' autocomplete="off" <?php echo $_smarty_tpl->tpl_vars['DISABLED']->value;?>

                                        onkeyup="password_confirmation();"  >
                                </td>
                                <td width='40%'>
                                <div id="comfirm_pwd_match" class="error" style="display: none;"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['ERR_PASSWORD_MISMATCH'];?>
</div>
                                     
                                </td>
                            </tr>
                            <tr>
                                <td class='dataLabel'></td>
                                <td class='dataField'></td>
                            </td>
                        </table>

                        <table width='17%' cellspacing='0' cellpadding='1' border='0'>
                            <tr>
                                <td width='50%'>
                                    <input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_TITLE'];?>
" accessKey='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_KEY'];?>
' class='button' id='save_new_pwd_button' LANGUAGE=javascript onclick='if (set_password(this.form)) window.close(); else return false;' type='submit' name='button' style='display:none;' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
'>
                                </td>
                                <td width='50%'>
                                </td>
                            </tr>
                        </table>
                    </td>
                    <td width='60%' style="vertical-align:middle;">
                        <?php if (!$_smarty_tpl->tpl_vars['IS_PORTALONLY']->value) {?>
                            <?php echo smarty_function_sugar_password_requirements_box(array('width'=>'300px','class'=>'x-sqs-list','style'=>'padding:5px !important;'),$_smarty_tpl);?>

                        <?php }?>
                    </td>
                </tr>
            </table>
            </div>
            <?php } else { ?>
            <div id="generate_password">
                <input name='old_password' id='old_password' type='hidden'>
                <input name='new_password' id= "new_password" type='hidden'>
                <input name='confirm_new_password' id='confirm_pwd' type='hidden'>
            </div>
            <?php }?>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['SHOW_THEMES']->value) {?>
    <div>
        <div id="themepicker" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
">
        <table class="edit view" border="0" cellpadding="0" cellspacing="0" width="100%">
            <tbody>
                <tr>
                    <td scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_THEME'];?>
</h4></td>
                </tr>
                <tr>
                    <td width="17%">
                        <select name="user_theme" tabindex='366' size="20" id="user_theme_picker" style="width: 100%">
                            <?php echo $_smarty_tpl->tpl_vars['THEMES']->value;?>

                        </select>
                    </td>
                    <td width="33%">
                        <img id="themePreview" src="<?php echo smarty_function_sugar_getimagepath(array('file'=>'themePreview.png'),$_smarty_tpl);?>
" border="1" />
                    </td>
                    <td width="17%">&nbsp;</td>
                    <td width="33%">&nbsp;</td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
    <?php }?>
    <div>
        <div id="settings" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">

                        <tr>
                            <th width="100%" align="left" scope="row" colspan="4"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_SETTINGS'];?>
</slot></h4></th>
                        </tr>
                        <tr>
                            <td scope="row"  valign="top"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER_DESC']),$_smarty_tpl);?>
</td>
                            <td ><slot><input type="text" tabindex='12' name="export_delimiter" value="<?php echo $_smarty_tpl->tpl_vars['EXPORT_DELIMITER']->value;?>
" size="5"></slot></td>
                            <td scope="row" width="17%">
                            <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS_TEXT']),$_smarty_tpl);?>

                            </td>
                            <td width="33%">
                            <slot><input name='receive_notifications' class="checkbox" tabindex='12' type="checkbox" value="12" <?php echo $_smarty_tpl->tpl_vars['RECEIVE_NOTIFICATIONS']->value;?>
></slot>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" valign="top"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET_DESC']),$_smarty_tpl);?>
</td>
                            <td ><slot><select tabindex='12' name="default_export_charset"><?php echo $_smarty_tpl->tpl_vars['EXPORT_CHARSET']->value;?>
</select></slot></td>
                            <td scope="row" width="17%">
                                <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SEND_EMAIL_ON_MENTION'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_SEND_EMAIL_ON_MENTION_TEXT']),$_smarty_tpl);?>

                            </td>
                            <td width="33%">
                                <slot><input name='send_email_on_mention' class="checkbox" tabindex='12' type="checkbox" <?php echo $_smarty_tpl->tpl_vars['SEND_EMAIL_ON_MENTION']->value;?>
></slot>
                            </td>
                        </tr>
                        <tr>
                            <td scope="row" valign="top"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES_DESC']),$_smarty_tpl);?>
</td>
                            <td ><slot><input tabindex='12' type="checkbox" name="use_real_names" <?php echo $_smarty_tpl->tpl_vars['USE_REAL_NAMES']->value;?>
></slot></td>
                            <td scope="row" valign="top">
                            <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_TEXT']),$_smarty_tpl);?>

                            </td>
                            <td valign="top"  nowrap>
                                <slot><?php $_smarty_tpl->_subTemplateRender("file:modules/Meetings/tpls/reminders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></slot>
                            </td>
                        </tr>
                        <tr>
                            <?php if (!empty($_smarty_tpl->tpl_vars['SHOW_TEAM_SELECTION']->value)) {?>
                            <td width="20%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DEFAULT_TEAM'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DEFAULT_TEAM_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot><?php echo $_smarty_tpl->tpl_vars['DEFAULT_TEAM_OPTIONS']->value;?>
</slot></td>
                            <?php }?>
                            <td scope="row">
                                <slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_APPEARANCE']);?>
:</slot>
                                <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_APPEARANCE_DESC']),$_smarty_tpl);?>

                            </td>
                            <td>
                                <slot>
                                    <select tabindex="12" name="appearance">
                                        <?php echo $_smarty_tpl->tpl_vars['APPEARANCE']->value;?>

                                    </select>
                                </slot>
                            </td>
                        </tr>
                        <!--<?php if (!empty($_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value) && !empty($_smarty_tpl->tpl_vars['IS_ADMIN']->value)) {?>-->
                            <tr>
                                <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'SMARTY_LBL_EXTERNAL_AUTH_ONLY', null, null);?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXTERNAL_AUTH_ONLY'];?>
 <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS_1']->value;
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                                <td scope="row" nowrap><slot><?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ONLY'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'SMARTY_LBL_EXTERNAL_AUTH_ONLY')),$_smarty_tpl);?>
</td>
                                <td ><input type='hidden' value='0' name='external_auth_only'><input type='checkbox' value='1' name='external_auth_only' <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']->value;?>
></td>
                                <td ></td>
                                <td ></td>
                            </tr>
                        <!--<?php }?>-->
                    </table>
        </div>
        <div id="layout">
        <table class="edit view" border="0" cellpadding="0" cellspacing="1" width="100%">
            <tbody>
                <tr>
                    <th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LAYOUT_OPTIONS'];?>
</h4></th>
                </tr>
                            <tr>
                                <td colspan="2" width="50%">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td scope="row" align="left" style="padding-bottom: 2em;"><?php echo $_smarty_tpl->tpl_vars['TAB_CHOOSER']->value;?>
</td>
                                            <td width="90%" valign="top"><BR>&nbsp;</td>
                                        </tr>
                                    </table>
                                </td>
                                <td colspan="2" width="50%">
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td scope="row" width="17%">
                                            <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FIELD_NAME_PLACEMENT'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_FIELD_NAME_PLACEMENT_TEXT']),$_smarty_tpl);?>

                                            </td>
                                            <td width="33%"><slot><select tabindex='12' name="field_name_placement"><?php echo $_smarty_tpl->tpl_vars['FIELD_NAME_PLACEMENT']->value;?>
</select></slot></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
        </div>
        <div id="locale" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                        <tr>
                            <th width="100%" align="left" scope="row" colspan="4">
                                <h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_LOCALE'];?>
</slot></h4></th>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT_TEXT']),$_smarty_tpl);?>
</td>
                            <td width="33%"><slot><select tabindex='14' name='dateformat'><?php echo $_smarty_tpl->tpl_vars['DATEOPTIONS']->value;?>
</select></slot></td>
                            <!-- END: prompttz -->
                            <!-- BEGIN: currency -->
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_TEXT']),$_smarty_tpl);?>
</td>
                                <td ><slot>
                                    <select tabindex='14' id='currency_select' name='currency' onchange='setSymbolValue(this.options[this.selectedIndex].value);setSigDigits();'><?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>
</select>
                                    <input type="hidden" id="symbol" value="">
                                </slot></td>
                            <!-- END: currency -->
                        </tr>
                        <tr>
                            <!-- BEGIN: show preferred currency -->
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SHOW_PREFERRED'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SHOW_PREFERRED_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot>
                                    <input id="currency_show_preferred" type="checkbox" name="currency_show_preferred" value="YES" <?php if ($_smarty_tpl->tpl_vars['currency_show_preferred']->value) {?>checked="checked"<?php }?>>
                                </slot></td>
                            <!-- END: show preferred currency -->
                            <!-- BEGIN: create rlis in preferred currency -->
                            <td width="17%" scope="row">
                                <slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_CREATE_IN_PREFERRED'];?>
:</slot>
                                &nbsp <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_CREATE_IN_PREFERRED_TEXT']),$_smarty_tpl);?>

                            </td>
                            <td>
                                <slot>
                                    <input id="currency_create_in_preferred"
                                        type="checkbox" name="currency_create_in_preferred"
                                        value="YES" <?php if ($_smarty_tpl->tpl_vars['currency_create_in_preferred']->value) {?>checked="checked"<?php }?>>
                                </slot>
                            </td>
                            <!-- END: create rlis in preferred currency -->

                        </tr>
                        <tr>
                            <td scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot><select tabindex='14' name='timeformat'><?php echo $_smarty_tpl->tpl_vars['TIMEOPTIONS']->value;?>
</select></slot></td>
                            <!-- BEGIN: currency -->
                            <td width="17%" scope="row"><slot>
                                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SYSTEM_SIG_DIGITS'];?>
:
                            </slot></td>
                            <td ><slot>
                                <select id='sigDigits' onchange='setSigDigits(this.value);' name='default_currency_significant_digits'><?php echo $_smarty_tpl->tpl_vars['sigDigits']->value;?>
</select>
                            </slot></td>
                            <!-- END: currency -->
                        </tr>
                        <tr>
                            <td scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot><select tabindex='14' name='timezone'><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['TIMEZONEOPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['TIMEZONE_CURRENT']->value),$_smarty_tpl);?>
</select></slot></td>
                            <!-- BEGIN: currency -->
                            <td width="17%" scope="row"><slot>
                                <i><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_EXAMPLE_NAME_FORMAT'];?>
</i>:
                            </slot></td>
                            <td ><slot>
                                <input type="text" disabled id="sigDigitsExample" name="sigDigitsExample">
                            </slot></td>
                            <!-- END: currency -->
                        </tr>
                        <tr>
                        <?php if (($_smarty_tpl->tpl_vars['IS_ADMIN']->value)) {?>
                            <td scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PROMPT_TIMEZONE'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_PROMPT_TIMEZONE_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot><input type="checkbox" tabindex='14'class="checkbox" name="ut" value="0" <?php echo $_smarty_tpl->tpl_vars['PROMPTTZ']->value;?>
></slot></td>
                        <?php } else { ?>
                            <td scope="row"><slot></td>
                            <td ><slot></slot></td>
                        <?php }?>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot>
                                <input tabindex='14' name='num_grp_sep' id='default_number_grouping_seperator'
                                    type='text' maxlength='1' size='1' value='<?php echo $_smarty_tpl->tpl_vars['NUM_GRP_SEP']->value;?>
'
                                    onkeydown='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'
                                    onkeyup='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'>
                            </slot></td></tr>
                        <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'SMARTY_LOCALE_NAME_FORMAT_DESC', null, null);?>&nbsp;<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_NAME_FORMAT_DESC'];
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
                        <tr>
                            <td  scope="row" valign="top"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NAME_FORMAT'];?>
:&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'SMARTY_LOCALE_NAME_FORMAT_DESC')),$_smarty_tpl);?>
</td>
                            <td  valign="top"><slot><select tabindex='14' id="default_locale_name_format" name="default_locale_name_format" selected="<?php echo $_smarty_tpl->tpl_vars['default_locale_name_format']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAMEOPTIONS']->value;?>
</select></slot></td>
                             <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot>
                                <input tabindex='14' name='dec_sep' id='default_decimal_seperator'
                                    type='text' maxlength='1' size='1' value='<?php echo $_smarty_tpl->tpl_vars['DEC_SEP']->value;?>
'
                                    onkeydown='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'
                                    onkeyup='this.value=this.value.replace(/[\w]+/g, "");setSigDigits();'>
                            </slot></td>
                        </tr>
                    </table>
        </div>

        <div id="pdf_settings" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
">
        <?php if ($_smarty_tpl->tpl_vars['SHOW_PDF_OPTIONS']->value) {?>
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
                        <tr>
                            <th width="100%" align="left"  colspan="4">
                                <h4 ><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_SETTINGS'];?>
</slot></h4></th>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_MAIN'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_MAIN_TEXT']),$_smarty_tpl);?>
</td>
                            <td width="33%"><slot><select name='sugarpdf_pdf_font_name_main' tabindex='16'><?php echo $_smarty_tpl->tpl_vars['PDF_FONT_NAME_MAIN']->value;?>
</select></slot></td>
                            <td colspan="2"><slot>&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_MAIN'];?>
:</slot></td>
                            <td width="33%"><slot><input type="text" name="sugarpdf_pdf_font_size_main" value="<?php echo $_smarty_tpl->tpl_vars['PDF_FONT_SIZE_MAIN']->value;?>
" size="5" maxlength="5" tabindex='16'/></slot></td>
                            <td colspan="2"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_MAIN_TEXT'];?>
&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_DATA'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_DATA_TEXT']),$_smarty_tpl);?>
</td>
                            <td width="33%"><slot><select name='sugarpdf_pdf_font_name_data' tabindex='16'><?php echo $_smarty_tpl->tpl_vars['PDF_FONT_NAME_DATA']->value;?>
</select></slot></td>
                            <td colspan="2"><slot>&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_DATA'];?>
:</slot></td>
                            <td width="33%"><slot><input type="text" name="sugarpdf_pdf_font_size_data" value="<?php echo $_smarty_tpl->tpl_vars['PDF_FONT_SIZE_DATA']->value;?>
" size="5" maxlength="5" tabindex='16'/></slot></td>
                            <td colspan="2"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_DATA_TEXT'];?>
&nbsp;</slot></td>
                        </tr>
                    </table>
        <?php }?>
        </div>
        <div id="calendar_options" style="display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
">
        <table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
            <tr>
                <th align="left" scope="row" colspan="4"><h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CALENDAR_OPTIONS'];?>
</h4></th>
            </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PUBLISH_KEY'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_A_KEY']),$_smarty_tpl);?>
</td>
                            <td width="20%" ><slot><input id='calendar_publish_key' name='calendar_publish_key' tabindex='17' size='25' maxlength='25' type="text" value="<?php echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value;?>
"></slot></td>
                            <td width="63%" ><slot>&nbsp;</slot></td>
                        </tr>
                        <tr>
                            <td width="15%" scope="row"><slot><nobr><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_YOUR_PUBLISH_URL']);?>
:</nobr></slot></td>
                            <td colspan=2><span class="calendar_publish_ok"><?php echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_URL']->value;?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];?>
</span></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SEARCH_URL']);?>
:</slot></td>
                            <td colspan=2><span class="calendar_publish_ok"><?php echo $_smarty_tpl->tpl_vars['CALENDAR_SEARCH_URL']->value;?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];?>
</span></td>
                        </tr>
                        <tr>
                            <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL']);?>
: <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL_HELP']),$_smarty_tpl);?>
</slot></td>
                            <td colspan=2><span class="calendar_publish_ok"><?php echo $_smarty_tpl->tpl_vars['CALENDAR_ICAL_URL']->value;?>
</span><span class="calendar_publish_none" style="display: none"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];?>
</span></td>
                        </tr>
                        <tr>
                            <td width="17%" scope="row"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW'];?>
:</slot>&nbsp;<?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW_TEXT']),$_smarty_tpl);?>
</td>
                            <td ><slot>
                                <select tabindex='14' name='fdow'><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['FDOWOPTIONS']->value,'selected'=>$_smarty_tpl->tpl_vars['FDOWCURRENT']->value),$_smarty_tpl);?>
</select>
                            </slot></td>
                        </tr>
                    </table>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['ID']->value) {?>
    <div id="eapm_area" style='display:<?php echo $_smarty_tpl->tpl_vars['HIDE_FOR_GROUP_AND_PORTAL']->value;?>
;'>
        <div style="text-align:center; width: 100%"><?php echo smarty_function_sugar_image(array('name'=>"loading"),$_smarty_tpl);?>
</div>
    </div>
    <?php }?>
</div>

<?php echo '<script'; ?>
 type="text/javascript">

var mail_smtpport = '<?php echo $_smarty_tpl->tpl_vars['MAIL_SMTPPORT']->value;?>
';
var mail_smtpssl = '<?php echo $_smarty_tpl->tpl_vars['MAIL_SMTPSSL']->value;?>
';

EmailMan = { };

function Admin_check(){
	if (('<?php echo $_smarty_tpl->tpl_vars['IS_FOCUS_ADMIN']->value;?>
') && document.getElementById('is_admin').value=='0'){
		r=confirm('<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_REGULAR_USER'];?>
');
		return r;
		}
	else
		return true;
}


$(document).ready(function() {
	var checkKey = function(key) {
		if(key != '') {
			$(".calendar_publish_ok").css('display', 'inline');
			$(".calendar_publish_none").css('display', 'none');
	        $('#cal_pub_key_span').text( key );
	        $('#ical_pub_key_span').text( key );
	        $('#search_pub_key_span').text( key );
		} else {
			$(".calendar_publish_ok").css('display', 'none');
			$(".calendar_publish_none").css('display', 'inline');
		}
	};
    $('#calendar_publish_key').keyup(function(){
    	checkKey($(this).val());
    });
    $('#calendar_publish_key').change(function(){
    	checkKey($(this).val());
    });
    checkKey($('#calendar_publish_key').val());


    <?php if ($_smarty_tpl->tpl_vars['mail_haspass']->value) {?>

    if(window.addEventListener){
        window.addEventListener("load", function() { SUGAR.util.setEmailPasswordDisplay('mail_smtppass', <?php echo $_smarty_tpl->tpl_vars['mail_haspass']->value;?>
); }, false);
    }else{
        window.attachEvent("onload", function() { SUGAR.util.setEmailPasswordDisplay('mail_smtppass', <?php echo $_smarty_tpl->tpl_vars['mail_haspass']->value;?>
); });
    }

    <?php }?>

});

<?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['JAVASCRIPT']->value;?>


<?php echo '<script'; ?>
 type="text/javascript" language="Javascript">

<?php echo $_smarty_tpl->tpl_vars['getNameJs']->value;?>

<?php echo $_smarty_tpl->tpl_vars['getNumberJs']->value;?>

currencies = <?php echo $_smarty_tpl->tpl_vars['currencySymbolJSON']->value;?>
;

onUserEditView();

<?php echo '</script'; ?>
>

</form>

<div id="testOutboundDialog" class="yui-hidden">
    <div id="testOutbound">
        <form>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="edit view">
			<tr>
				<td scope="row">
					<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR'];?>

					<span class="required">
						<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>

					</span>
				</td>
				<td >
					<input type="text" id="outboundtest_from_address" name="outboundtest_from_address" size="35" maxlength="64" value="<?php echo $_smarty_tpl->tpl_vars['TEST_EMAIL_ADDRESS']->value;?>
">
				</td>
			</tr>
			<tr>
				<td scope="row" colspan="2">
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_EMAIL_SEND'];?>
   " onclick="javascript:sendTestEmail();">&nbsp;
					<input type="button" class="button" value="   <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CANCEL_BUTTON_LABEL'];?>
   " onclick="javascript:EmailMan.testOutboundDialog.hide();">&nbsp;
				</td>
			</tr>
		</table>
		</form>
	</div>
</div>
<style>
    .actionsContainer.footer td {
        height:120px;
        vertical-align: top;
    }
</style>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="actionsContainer footer">
    <tr>
        <td>
        <?php echo smarty_function_sugar_action_menu(array('id'=>"userEditActions",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['ACTION_BUTTON_FOOTER']->value,'flat'=>true),$_smarty_tpl);?>

        </td>
        <td align="right" nowrap>
            <span class="required"><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_REQUIRED_SYMBOL'];?>
</span> <?php echo $_smarty_tpl->tpl_vars['APP']->value['NTC_REQUIRED'];?>

        </td>
    </tr>
</table>

<?php echo '<script'; ?>
 type="text/javascript">
addForm('EditView');addToValidate('EditView', 'user_name', 'username', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'user_hash', 'password', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_HASH','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'system_generated_password', 'bool', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYSTEM_GENERATED_PASSWORD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'pwd_last_changed_date', 'date', false,'Password Last Changed' );
addToValidate('EditView', 'authenticate_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_AUTHENTICATE_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'sugar_login', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SUGAR_LOGIN','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'picture', 'image', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PICTURE_FILE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'first_name', 'name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'last_name', 'name', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'full_name', 'fullname', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'name', 'fullname', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'is_admin', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_IS_ADMIN','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'external_auth_only', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EXT_AUTHENTICATE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'receive_notifications', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_RECEIVE_NOTIFICATIONS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'send_email_on_mention', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SEND_EMAIL_ON_MENTION','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'description', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'date_entered_date', 'date', true,'Date Entered' );
addToValidate('EditView', 'date_modified_date', 'date', true,'Date Modified' );
addToValidate('EditView', 'last_login_date', 'date', false,'last login' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_BY_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'modified_by_name', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFIED_BY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'created_by_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_CREATED_BY_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'title', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'department', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_home', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_mobile', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_work', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_WORK_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_other', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'phone_fax', 'phone', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'status', 'enum', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_street', 'text', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STREET','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_city', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_CITY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_state', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STATE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_country', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_COUNTRY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'address_postalcode', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_POSTALCODE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'UserType', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'license_type[]', 'json', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LICENSE_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'default_team', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEFAULT_TEAM','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEFAULT_TEAM','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_set_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'acl_team_set_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAM_SET_SELECTED_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'business_center_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BUSINESS_CENTER_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'business_center_id', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_BUSINESS_CENTER_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_count', 'relate', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'team_name', 'teamset', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_TEAMS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'deleted', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETED','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'portal_only', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PORTAL_ONLY_USER','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'show_on_employees', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW_ON_EMPLOYEES','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'employee_status', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'messenger_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'messenger_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'reports_to_id', 'id', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'reports_to_name', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email1', 'varchar', true,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_ADDRESS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email', 'email', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_EMAIL','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'email_link_type', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMAIL_LINK_TYPE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'is_group', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_GROUP_USER','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'c_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'm_accept_status_fields', 'relate', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_name', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_calls', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_meetings', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'accept_status_messages', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_LIST_ACCEPT_STATUS','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'preferred_language', 'enum', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_PREFERRED_LANGUAGE','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'site_user_id', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SITE_USER_ID','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'cookie_consent', 'bool', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_COOKIE_CONSENT','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidate('EditView', 'cookie_consent_received_on_date', 'date', false,'Cookie Consent Received On' );
addToValidate('EditView', 'sync_key', 'varchar', false,'<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SYNC_KEY','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_ASSIGNED_TO','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
', 'assigned_user_id' );
addToValidateBinaryDependency('EditView', 'business_center_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_BUSINESS_CENTER_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
', 'business_center_id' );
addToValidateBinaryDependency('EditView', 'reports_to_name', 'alpha', false,'<?php echo smarty_function_sugar_translate(array('label'=>'ERR_SQS_NO_MATCH_FIELD','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
: <?php echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users','for_js'=>true),$_smarty_tpl);?>
', 'reports_to_id' );
<?php echo '</script'; ?>
><?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_reports_to_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name","reports_to_id"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['EditView_business_center_name']={"form":"EditView","method":"query","modules":["BusinessCenters"],"group":"or","field_list":["name","id"],"populate_list":["business_center_name","business_center_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php echo '<script'; ?>
 type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('EditView');
SUGAR.forms.AssignmentHandler.LINKS['EditView'] = {"created_by_link":{"relationship":"users_created_by","module":"Users","id_name":"created_by"},"business_centers":{"relationship":"business_center_users","id_name":"business_center_id","module":"BusinessCenters"},"shifts":{"relationship":"shifts_users","module":"Shifts"},"shift_exceptions":{"relationship":"shift_exceptions_users","module":"ShiftExceptions"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"message_invites":{"relationship":"messages_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
