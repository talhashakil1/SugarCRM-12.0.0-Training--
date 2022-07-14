<?php
/* Smarty version 3.1.39, created on 2022-07-13 18:52:27
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Users/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cece1b4fa6c0_42751651',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77ac8d15551853dc8b6209082635df2df1a17db9' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Users/DetailView.tpl',
      1 => 1657720347,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Meetings/tpls/reminders.tpl' => 1,
  ),
),false)) {
function content_62cece1b4fa6c0_42751651 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_image.php','function'=>'smarty_function_sugar_image',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_action_menu.php','function'=>'smarty_function_sugar_action_menu',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_include.php','function'=>'smarty_function_sugar_include',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),6=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),7=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),8=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.strip_semicolon.php','function'=>'smarty_modifier_strip_semicolon',),9=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),10=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_phone.php','function'=>'smarty_function_sugar_phone',),11=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_ajax_url.php','function'=>'smarty_function_sugar_ajax_url',),12=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/modifier.escape.php','function'=>'smarty_modifier_escape',),13=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_help.php','function'=>'smarty_function_sugar_help',),));
?>


<?php echo '<script'; ?>
 type='text/javascript' src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/Users/DetailView.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'cache/include/javascript/sugar_grp_yui_widgets.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript'>
var LBL_NEW_USER_PASSWORD = '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEW_USER_PASSWORD_2'];?>
';
<?php if (!empty($_smarty_tpl->tpl_vars['ERRORS']->value)) {?>
YAHOO.SUGAR.MessageBox.show({
    title: '<?php echo strtr($_smarty_tpl->tpl_vars['ERROR_MESSAGE']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
',
    msg: '<?php echo strtr($_smarty_tpl->tpl_vars['ERRORS']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
'
});

<?php }
echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
var user_detailview_tabs = new YAHOO.widget.TabView("user_detailview_tabs");


user_detailview_tabs.on('contentReady', function(e){

<?php if ($_smarty_tpl->tpl_vars['EDIT_SELF']->value && $_smarty_tpl->tpl_vars['SHOW_DOWNLOADS_TAB']->value) {?>

    user_detailview_tabs.addTab( new YAHOO.widget.Tab({
        label: '<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DOWNLOADS'];?>
',
        dataSrc: 'index.php?to_pdf=1&module=Home&action=pluginList',
        content: '<div style="text-align:center; width: 100%"><?php echo smarty_function_sugar_image(array('name'=>"loading"),$_smarty_tpl);?>
</div>',
        cacheData: true
    }));
    user_detailview_tabs.getTab(3).getElementsByTagName('a')[0].id = 'tab4';

<?php }?>
});

$(document).ready(function(){
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

<?php echo '</script'; ?>
>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="actionsContainer">
<tr>
<td width="20%">

<form action="index.php" method="post" name="DetailView" id="form">
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

    <input type="hidden" name="module" value="Users">
    <input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['ID']->value;?>
">
    <input type="hidden" name="isDuplicate" value=false>
    <input type="hidden" name="action">
    <input type="hidden" name="user_name" value="<?php echo $_smarty_tpl->tpl_vars['USER_NAME']->value;?>
">
    <input type="hidden" id="user_type" name="user_type" value="<?php echo $_smarty_tpl->tpl_vars['UserType']->value;?>
">
    <input type="hidden" name="password_generate">
    <input type="hidden" name="old_password">
    <input type="hidden" name="new_password">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_id">
<table width="100%" cellpadding="0" cellspacing="0" border="0">

    <tr><td colspan='2' width="100%" nowrap>

            <?php echo smarty_function_sugar_action_menu(array('id'=>"detail_header_action_menu",'class'=>"clickMenu fancymenu",'buttons'=>$_smarty_tpl->tpl_vars['EDITBUTTONS']->value),$_smarty_tpl);?>


    </td></tr>
</table>
</form>

</td>
<td width="100%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>

</table>
</td>
</tr>
</table>
<div id="user_detailview_tabs" class="yui-navset detailview_tabs">
    <ul class="yui-nav">
        <li class="selected"><a id="tab1" href="#tab1"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_INFORMATION'];?>
</em></a></li>
        <li <?php if ($_smarty_tpl->tpl_vars['IS_GROUP_OR_PORTAL']->value) {?>style="display: none;"<?php }?>><a id="tab2" href="#tab2"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ADVANCED'];?>
</em></a></li>
        <?php if ($_smarty_tpl->tpl_vars['SHOW_ROLES']->value) {?>
        <li><a id="tab3" href="#tab3"><em><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_ACCESS'];?>
</em></a></li>
        <?php }?>
    </ul>
    <div class="yui-content">
        <div>
<?php echo smarty_function_sugar_include(array('include'=>$_smarty_tpl->tpl_vars['includes']->value),$_smarty_tpl);?>

<div id="Users_detailview_tabs"
>
        <div >


  
                <div id='detailpanel_1' class='detail view  detail508 expanded'>
<?php echo smarty_function_counter(array('name'=>"panelFieldCount",'start'=>0,'print'=>false,'assign'=>"panelFieldCount"),$_smarty_tpl);?>



        <h4>
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

    	  <table id='LBL_USER_INFORMATION' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
'>



		<?php echo smarty_function_counter(array('name'=>"fieldsUsed",'start'=>0,'print'=>false,'assign'=>"fieldsUsed"),$_smarty_tpl);?>

	<?php echo smarty_function_counter(array('name'=>"fieldsHidden",'start'=>0,'print'=>false,'assign'=>"fieldsHidden"),$_smarty_tpl);?>

	<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "tr", "tableRow", null);?>
	<tr>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['full_name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['full_name']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['full_name']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['full_name']['value']);
}?>
<span id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['name'];?>
'><?php echo $_smarty_tpl->tpl_vars['fields']->value['full_name']['value'];?>
</span>
&nbsp;&nbsp;
<span class="id-ff">
    <a id="btn_vCardButton" title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_VCARD'];?>
" href="#"><?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['app_strings']->value['LBL_ID_FF_VCARD'],'name'=>"id-ff-vcard",'ext'=>".png"),$_smarty_tpl);?>
</a>
</span>

<?php echo '<script'; ?>
 type="text/javascript">
    $("#btn_vCardButton").click(function(e){
        window.location.assign('index.php?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&action=vCard&record=<?php echo $_smarty_tpl->tpl_vars['fields']->value['id']['value'];?>
&to_pdf=true');

        if (e.preventDefault) {
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['user_name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['user_name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_USER_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['user_name']['hidden']) {?>
			    				
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['status']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['status']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Users'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['UserType']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['UserType']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_USER_TYPE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['UserType']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="UserType" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['USER_TYPE_READONLY']->value;?>
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['picture']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['picture']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_PICTURE_FILE','module'=>'Users'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['license_type']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['license_type']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_LICENSE_TYPE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['license_type']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					<span id="license_type" class="sugar_field"><?php echo $_smarty_tpl->tpl_vars['LICENSE_TYPE_READONLY']->value;?>
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
 type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); <?php echo '</script'; ?>
>
    </div>
<?php if ($_smarty_tpl->tpl_vars['panelFieldCount']->value == 0) {?>

<?php echo '<script'; ?>
>document.getElementById("LBL_USER_INFORMATION").style.display='none';<?php echo '</script'; ?>
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
      <?php echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_INFORMATION','module'=>'Users'),$_smarty_tpl);?>

        <?php echo '<script'; ?>
>
      document.getElementById('detailpanel_2').className += ' expanded';
    <?php echo '</script'; ?>
>
        </h4>

    	  <table id='LBL_EMPLOYEE_INFORMATION' class="panelContainer" cellspacing='<?php echo $_smarty_tpl->tpl_vars['gridline']->value;?>
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
echo smarty_function_sugar_translate(array('label'=>'LBL_EMPLOYEE_STATUS','module'=>'Users'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_SHOW_ON_EMPLOYEES','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['show_on_employees']['hidden']) {?>
			    				
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
echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_WORK_PHONE','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_MOBILE_PHONE','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_REPORTS_TO_NAME','module'=>'Users'),$_smarty_tpl);
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

					
<span id="reports_to_id" class="sugar_field" data-id-value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_id']['value'], ENT_QUOTES, 'UTF-8', true);?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['reports_to_name']['value'], ENT_QUOTES, 'UTF-8', true);?>
</span>

												
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
echo smarty_function_sugar_translate(array('label'=>'LBL_OTHER_PHONE','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_FAX_PHONE','module'=>'Users'),$_smarty_tpl);
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
echo smarty_function_sugar_translate(array('label'=>'LBL_HOME_PHONE','module'=>'Users'),$_smarty_tpl);
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['business_center_name']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['business_center_name']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_BUSINESS_CENTER_NAME','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['business_center_name']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
												   &nbsp;
				                                                			</td>
			<td width='37.5%'  >
			    				
												
							</td>
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
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_TYPE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['messenger_id']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['messenger_id']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_MESSENGER_ID','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_street']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_street']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STREET','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_street']['hidden']) {?>
			    				
									<?php echo smarty_function_counter(array('name'=>"panelFieldCount"),$_smarty_tpl);?>

					
<span class="sugar_field" id="<?php echo nl2br(url2html(htmlspecialchars($_smarty_tpl->tpl_vars['fields']->value['address_street']['name'], ENT_QUOTES, 'UTF-8', true)));?>
"><?php echo nl2br(url2html(htmlspecialchars(smarty_modifier_escape($_smarty_tpl->tpl_vars['fields']->value['address_street']['value'], 'htmlentitydecode'), ENT_QUOTES, 'UTF-8', true)));?>
</span>

												
								<?php }?>
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_city']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_city']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_CITY','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_city']['hidden']) {?>
			    				
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
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_state']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_state']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_STATE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_state']['hidden']) {?>
			    				
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
							</td>
					<?php } else { ?>

			<td>&nbsp;</td><td>&nbsp;</td>
			<?php }?>
							    	    			<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['acl'] > 0) {?>
					<?php echo smarty_function_counter(array('name'=>"fieldsUsed"),$_smarty_tpl);?>

						<td width='12.5%' scope="col">
								    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['hidden']) {?>
                								   <?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "label", "label", null);
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_POSTALCODE','module'=>'Users'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>
			       <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['label']->value);?>
:
				                                                <?php } else { ?>
                    <?php echo smarty_function_counter(array('name'=>"fieldsHidden"),$_smarty_tpl);?>

                <?php }?>
                                			</td>
			<td width='37.5%'  >
			    			    <?php if (!$_smarty_tpl->tpl_vars['fields']->value['address_postalcode']['hidden']) {?>
			    				
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
echo smarty_function_sugar_translate(array('label'=>'LBL_ADDRESS_COUNTRY','module'=>'Users'),$_smarty_tpl);
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

					
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['address_country']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_country']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['address_country']['value']);
}?> 
<span class="sugar_field" id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['fields']->value['address_country']['value'];?>
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
echo smarty_function_sugar_translate(array('label'=>'LBL_DESCRIPTION','module'=>'Users'),$_smarty_tpl);
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

</div>
</div>

<!-- END METADATA SECTION -->
            <div id='email_options'>
                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
                    <tr>
                        <th align="left" scope="row" colspan="4">
                            <h4><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_OPTIONS_TITLE'];?>
</h4>
                        </th>
                    </tr>
                    <tr>
                        <td align="top" scope="row" width="15%">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL']);?>
:
                        </td>
                        <td align="top" width="85%">
                            <?php echo $_smarty_tpl->tpl_vars['NEW_EMAIL']->value;?>

                        </td>
                    </tr>
                    <tr id="email_options_link_type">
                        <td align="top"  scope="row">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_LINK_TYPE']);?>
:
                        </td>
                        <td >
                            <?php echo $_smarty_tpl->tpl_vars['EMAIL_LINK_TYPE']->value;?>

                        </td>
                    </tr>
                    <?php if (!$_smarty_tpl->tpl_vars['HIDE_IF_CAN_USE_DEFAULT_OUTBOUND']->value) {?>
                    <tr>
                        <td scope="row" width="15%">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EMAIL_PROVIDER']);?>
:
                        </td>
                        <td width="35%">
                            <?php echo $_smarty_tpl->tpl_vars['mail_smtpdisplay']->value;?>

                        </td>
                    </tr>
                    <?php if (!empty($_smarty_tpl->tpl_vars['mail_smtpauth_req']->value)) {?>
                    <tr>
                        <td align="top"  scope="row">
                            <?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_MAIL_SMTPUSER']);?>
:
                        </td>
                        <td width="35%">
                            <?php echo $_smarty_tpl->tpl_vars['mail_smtpuser']->value;?>

                        </td>
                    </tr>
                    <?php }?>
                    <?php }?>
                </table>
            </div>
        </div>
        <div>
        <div id="settings">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
                <tr>
                <th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_SETTINGS'];?>
</slot></h4></th>
                </tr>
                <tr>
                <td scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS']);?>
:</slot></td>
                <td><slot><input class="checkbox" type="checkbox" disabled <?php echo $_smarty_tpl->tpl_vars['RECEIVE_NOTIFICATIONS']->value;?>
></slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_RECEIVE_NOTIFICATIONS_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                <td scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SEND_EMAIL_ON_MENTION']);?>
:</slot></td>
                <td><slot><input class="checkbox" type="checkbox" disabled <?php echo $_smarty_tpl->tpl_vars['SEND_EMAIL_ON_MENTION']->value;?>
></slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SEND_EMAIL_ON_MENTION_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_DEFAULT_TEAM']);?>
:</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['DEFAULT_TEAM_LIST']->value;?>
&nbsp;</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DEFAULT_TEAM_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER']);?>
:</td>
                <td valign="top" nowrap><slot><?php $_smarty_tpl->_subTemplateRender("file:modules/Meetings/tpls/reminders.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></slot></td>
                <td ><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_REMINDER_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                <td valign="top" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SETTINGS_URL']);?>
:</slot></td>
                <td valign="top" nowrap><slot><?php echo $_smarty_tpl->tpl_vars['SETTINGS_URL']->value;?>
</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SETTINGS_URL_DESC'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER']);?>
:</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['EXPORT_DELIMITER']->value;?>
</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_DELIMITER_DESC'];?>
</slot></td>
                </tr>
                <tr>
                <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET']);?>
:</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['EXPORT_CHARSET_DISPLAY']->value;?>
</slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXPORT_CHARSET_DESC'];?>
</slot></td>
                </tr>
                <tr>
                <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES']);?>
:</slot></td>
                <td><slot><input tabindex='3' name='use_real_names' disabled class="checkbox" type="checkbox" <?php echo $_smarty_tpl->tpl_vars['USE_REAL_NAMES']->value;?>
></slot></td>
                <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USE_REAL_NAMES_DESC'];?>
</slot></td>
                </tr>
                <?php if ($_smarty_tpl->tpl_vars['DISPLAY_EXTERNAL_AUTH']->value) {?>
                <tr>
                  <td scope="row" valign="top"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value);?>
:</slot></td>
                  <td valign="top" nowrap><slot><input id="external_auth_only" name="external_auth_only" type="checkbox" class="checkbox" <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_ONLY_CHECKED']->value;?>
></slot></td>
                  <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_EXTERNAL_AUTH_ONLY'];?>
 <?php echo $_smarty_tpl->tpl_vars['EXTERNAL_AUTH_CLASS']->value;?>
</slot></td>
                </tr>
                <?php }?>
                <tr>
                    <td scope="row" valign="top"><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_APPEARANCE']);?>
:</td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['APPEARANCE_DISPLAY']->value;?>
</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_APPEARANCE_DESC'];?>
</slot></td>
                </tr>
            </table>
        </div>

        <div id='locale'>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
                <tr>
                    <th colspan='4' align="left" width="100%" valign="top">
                        <h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_USER_LOCALE'];?>
</slot></h4></th>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['DATEFORMAT']->value;?>
&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DATE_FORMAT_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['TIMEFORMAT']->value;?>
&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TIME_FORMAT_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_TIMEZONE']);?>
:</slot></td>
                    <td nowrap><slot><?php echo $_smarty_tpl->tpl_vars['TIMEZONE']->value;?>
&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_ZONE_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['CURRENCY_DISPLAY']->value;?>
&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SHOW_PREFERRED']);?>
:</slot></td>
                    <td><slot><?php if ($_smarty_tpl->tpl_vars['currency_show_preferred']->value) {?>Yes<?php } else { ?>No<?php }?>&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_SHOW_PREFERRED_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_CREATE_IN_PREFERRED']);?>
:</slot></td>
                    <td><slot><?php if ($_smarty_tpl->tpl_vars['currency_create_in_preferred']->value) {?>Yes<?php } else { ?>No<?php }?>&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CURRENCY_CREATE_IN_PREFERRED_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SYSTEM_SIG_DIGITS']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SIG_DIGITS']->value;?>
&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SYSTEM_SIG_DIGITS_DESC'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['NUM_GRP_SEP']->value;?>
&nbsp;</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NUMBER_GROUPING_SEP_TEXT'];?>
&nbsp;</slot></td>
                </tr><tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['DEC_SEP']->value;?>
&nbsp;</slot></td>
                    <td><slot></slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DECIMAL_SEP_TEXT'];?>
&nbsp;</td>
                </tr>
                </tr><tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_DEFAULT_NAME_FORMAT']);?>
:</slot></td>
                    <td><slot><?php echo $_smarty_tpl->tpl_vars['NAME_FORMAT']->value;?>
&nbsp;</slot></td>
                    <td><slot></slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LOCALE_NAME_FORMAT_DESC'];?>
&nbsp;</td>
                </tr>
            </table>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['SHOW_PDF_OPTIONS']->value) {?>
        <div id='pdf'>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
                <tr>
                    <th colspan='4' align="left"  width="100%" valign="top">
                        <h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_SETTINGS'];?>
</slot></h4></th>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_MAIN']);?>
:</slot></td>
                    <td width="35%"><slot><?php echo $_smarty_tpl->tpl_vars['PDF_FONT_NAME_MAIN_DISPLAY']->value;?>
&nbsp;</slot></td>
                    <td colspan="2"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_MAIN_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_MAIN']);?>
:</slot></td>
                    <td width="35%"><slot><?php echo $_smarty_tpl->tpl_vars['PDF_FONT_SIZE_MAIN']->value;?>
&nbsp;</slot></td>
                    <td colspan="2"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_MAIN_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_DATA']);?>
:</slot></td>
                    <td width="35%"><slot><?php echo $_smarty_tpl->tpl_vars['PDF_FONT_NAME_DATA_DISPLAY']->value;?>
&nbsp;</slot></td>
                    <td colspan="2" class="tabDetailViewDF"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_NAME_DATA_TEXT'];?>
&nbsp;</slot></td>
                </tr>
                <tr>
                    <td width="15%"  scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_DATA']);?>
:</slot></td>
                    <td width="35%" class="tabDetailViewDF"><slot><?php echo $_smarty_tpl->tpl_vars['PDF_FONT_SIZE_DATA']->value;?>
&nbsp;</slot></td>
                    <td colspan="2" class="tabDetailViewDF"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PDF_FONT_SIZE_DATA_TEXT'];?>
&nbsp;</slot></td>
                </tr>
            </table>
        </div>
        <?php }?>

        <div id='calendar_options'>
            <table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
            <tr>
            <th colspan='4' align="left" width="100%" valign="top"><h4><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CALENDAR_OPTIONS'];?>
</slot></h4></th>
            </tr>
            <tr>
            <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_PUBLISH_KEY']);?>
:</slot></td>
            <td width="20%"><slot><?php echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value;?>
&nbsp;</slot></td>
            <td width="65%"><slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHOOSE_A_KEY'];?>
&nbsp;</slot></td>
            </tr>
            <tr>
            <td width="15%" scope="row"><slot><nobr><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_YOUR_PUBLISH_URL']);?>
:</nobr></slot></td>
            <td colspan=2><?php if ($_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value) {
echo $_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_URL']->value;
} else {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];
}?></td>
            </tr>
            <tr>
            <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_SEARCH_URL']);?>
:</slot></td>
            <td colspan=2><slot><?php if ($_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value) {
echo $_smarty_tpl->tpl_vars['CALENDAR_SEARCH_URL']->value;
} else {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];
}?></slot></td>
            </tr>
            <tr>
            <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL']);?>
: <?php echo smarty_function_sugar_help(array('text'=>$_smarty_tpl->tpl_vars['MOD']->value['LBL_ICAL_PUB_URL_HELP']),$_smarty_tpl);?>
</slot></td>
            <td colspan=2><slot><?php if ($_smarty_tpl->tpl_vars['CALENDAR_PUBLISH_KEY']->value) {
echo $_smarty_tpl->tpl_vars['CALENDAR_ICAL_URL']->value;
} else {
echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NO_KEY'];
}?></slot></td>
            </tr>
            <tr>
            <td width="15%" scope="row"><slot><?php echo smarty_modifier_strip_semicolon($_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW']);?>
:</slot></td>
            <td><slot><?php echo $_smarty_tpl->tpl_vars['FDOWDISPLAY']->value;?>
&nbsp;</slot></td>
            <td><slot></slot><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_FDOW_TEXT'];?>
&nbsp;</td>
            </tr>
            </table>
        </div>
    </div>
<?php if ($_smarty_tpl->tpl_vars['SHOW_ROLES']->value) {?>
    <?php echo $_smarty_tpl->tpl_vars['ROLE_HTML']->value;?>

<?php } else { ?>
</div>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['refreshMetadata']->value) {
echo '<script'; ?>
 type="text/javascript">
// Make an API request to check for possible http 412 codes so metadata and user
// prefs can be updates in the client
var api = parent.SUGAR.App.api;
api.call('read', api.buildURL('ping'));
<?php echo '</script'; ?>
>
<?php }
echo '<script'; ?>
 type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['Users_d'])
                    if(sugar_panel_collase['Users_d'][panel])
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
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"users_created_by","module":"Users","id_name":"created_by"},"business_centers":{"relationship":"business_center_users","id_name":"business_center_id","module":"BusinessCenters"},"shifts":{"relationship":"shifts_users","module":"Shifts"},"shift_exceptions":{"relationship":"shift_exceptions_users","module":"ShiftExceptions"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"message_invites":{"relationship":"messages_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});<?php echo '</script'; ?>
>
<?php }
}
