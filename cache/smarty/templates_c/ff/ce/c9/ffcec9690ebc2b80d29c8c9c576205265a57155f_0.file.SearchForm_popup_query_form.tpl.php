<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:41:48
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Users/SearchForm_popup_query_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3e39c23cf81_76238526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ffcec9690ebc2b80d29c8c9c576205265a57155f' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Users/SearchForm_popup_query_form.tpl',
      1 => 1659102108,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3e39c23cf81_76238526 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.counter.php','function'=>'smarty_function_counter',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.math.php','function'=>'smarty_function_math',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),3=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),4=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),5=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimage.php','function'=>'smarty_function_sugar_getimage',),));
?>

<?php echo '<script'; ?>
>
	$(function() {
	var $dialog = $('<div></div>')
		.html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
		.dialog({
			autoOpen: false,
			title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
			width: 700
		});
		
		$('.help-search').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
	});
	
	});
<?php echo '</script'; ?>
>
<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
      
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['first_name_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='first_name_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_FIRST_NAME','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['first_name_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['first_name_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['first_name_advanced']['name'];?>
' size='30' 
    maxlength='30' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      accesskey='9'  >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['last_name_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='last_name_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_LAST_NAME','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['last_name_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['last_name_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['last_name_advanced']['name'];?>
' size='30' 
    maxlength='30' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['user_name_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='user_name_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_USER_NAME','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['user_name_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['user_name_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['user_name_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['user_name_advanced']['name'];?>
' size='30' 
    maxlength='60' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['status_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='status_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATUS','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php echo smarty_function_html_options(array('id'=>'status_advanced','name'=>'status_advanced[]','options'=>$_smarty_tpl->tpl_vars['fields']->value['status_advanced']['options'],'size'=>"6",'style'=>"width: 150px",'multiple'=>"1",'selected'=>$_smarty_tpl->tpl_vars['fields']->value['status_advanced']['value']),$_smarty_tpl);?>


   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['is_admin_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='is_admin_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_IS_ADMIN','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php $_smarty_tpl->_assignInScope('yes', '');
$_smarty_tpl->_assignInScope('no', '');
$_smarty_tpl->_assignInScope('default', '');?>

<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['is_admin_advanced']['value']) == "1") {?>
	<?php $_smarty_tpl->_assignInScope('yes', "SELECTED");
} elseif (strval($_smarty_tpl->tpl_vars['fields']->value['is_admin_advanced']['value']) == "0") {?>
	<?php $_smarty_tpl->_assignInScope('no', "SELECTED");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('default', "SELECTED");
}?>

<select id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_admin_advanced']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_admin_advanced']['name'];?>
"  tabindex="1"   >
 <option value="" <?php echo $_smarty_tpl->tpl_vars['default']->value;?>
></option>
 <option value = "0" <?php echo $_smarty_tpl->tpl_vars['no']->value;?>
> <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_DROPDOWN_NO'];?>
</option>
 <option value = "1" <?php echo $_smarty_tpl->tpl_vars['yes']->value;?>
> <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_DROPDOWN_YES'];?>
</option>
</select>


   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['title_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='title_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_TITLE','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['title_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['title_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['title_advanced']['name'];?>
' size='30' 
    maxlength='50' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['is_group_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='is_group_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_GROUP_USER','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php $_smarty_tpl->_assignInScope('yes', '');
$_smarty_tpl->_assignInScope('no', '');
$_smarty_tpl->_assignInScope('default', '');?>

<?php if (strval($_smarty_tpl->tpl_vars['fields']->value['is_group_advanced']['value']) == "1") {?>
	<?php $_smarty_tpl->_assignInScope('yes', "SELECTED");
} elseif (strval($_smarty_tpl->tpl_vars['fields']->value['is_group_advanced']['value']) == "0") {?>
	<?php $_smarty_tpl->_assignInScope('no', "SELECTED");
} else { ?>
	<?php $_smarty_tpl->_assignInScope('default', "SELECTED");
}?>

<select id="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_group_advanced']['name'];?>
" name="<?php echo $_smarty_tpl->tpl_vars['fields']->value['is_group_advanced']['name'];?>
"  tabindex="1"   >
 <option value="" <?php echo $_smarty_tpl->tpl_vars['default']->value;?>
></option>
 <option value = "0" <?php echo $_smarty_tpl->tpl_vars['no']->value;?>
> <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_DROPDOWN_NO'];?>
</option>
 <option value = "1" <?php echo $_smarty_tpl->tpl_vars['yes']->value;?>
> <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_DROPDOWN_YES'];?>
</option>
</select>


   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
			<label for='department_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_DEPARTMENT','module'=>'Users'),$_smarty_tpl);?>
</label>
		</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
    maxlength='50' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['phone_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='phone_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_PHONE','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
     
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_street_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='address_street_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_ADDRESS','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
    maxlength='150' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['email_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='email_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_ANY_EMAIL','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
     
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_city_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='address_city_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_CITY','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_state_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='address_state_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_STATE','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_postalcode_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='address_postalcode_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_POSTAL_CODE','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
    maxlength='20' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
		    
      
	
		
		<?php if ($_smarty_tpl->tpl_vars['fields']->value['address_country_advanced']['acl'] > 0) {?>
		<?php echo smarty_function_counter(array('assign'=>'index'),$_smarty_tpl);?>

	<?php echo smarty_function_math(array('equation'=>"left % right",'left'=>$_smarty_tpl->tpl_vars['index']->value,'right'=>$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'],'assign'=>'modVal'),$_smarty_tpl);?>

	<?php if (($_smarty_tpl->tpl_vars['index']->value%$_smarty_tpl->tpl_vars['templateMeta']->value['maxColumns'] == 1 && $_smarty_tpl->tpl_vars['index']->value != 1)) {?>
        <?php if ($_smarty_tpl->tpl_vars['isHelperShown']->value == 0) {?>
            <?php $_smarty_tpl->_assignInScope('isHelperShown', "1");?>
            <td class="helpIcon" width="*">
                <img alt="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_HELP_TITLE'];?>
" id="helper_popup_image" border="0" src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
            </td>
        <?php } else { ?>
            <td>&nbsp;</td>
        <?php }?>
		</tr><tr>
	<?php }?>
	
	<td scope="row" nowrap="nowrap" width='10%' >
		
		<label for='address_country_advanced'><?php echo smarty_function_sugar_translate(array('label'=>'LBL_COUNTRY','module'=>'Users'),$_smarty_tpl);?>
</label>
    	</td>
	<td  nowrap="nowrap" width='30%'>
			
<?php if (strlen($_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']) <= 0) {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['default_value']);
} else {
$_smarty_tpl->_assignInScope('value', $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['value']);
}?>  
<input type='text' name='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' 
    id='<?php echo $_smarty_tpl->tpl_vars['fields']->value['department_advanced']['name'];?>
' size='30' 
    maxlength='100' 
    value='<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
' title=''  tabindex='1'      >
   	   	</td>
					<?php }?>
			</tr>
<tr>
	<td colspan='20'>
		&nbsp;
	</td>
</tr>	
<?php if ($_smarty_tpl->tpl_vars['DISPLAY_SAVED_SEARCH']->value) {?>
<tr>
	<td colspan='2'>
    <a class='tabFormAdvLink' id='tabFormAdvLink' href='javascript:toggleInlineSearch()' title="<?php echo smarty_function_sugar_translate(array('label'=>'LBL_ALT_SHOW_OPTIONS'),$_smarty_tpl);?>
">
        <?php echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['alt_show_hide']->value,'name'=>"advanced_search",'ext'=>".gif",'other_attributes'=>'border="0" class="tabFormAdvLink-icon tabFormAdvLink-advanced" '),$_smarty_tpl);
echo smarty_function_sugar_getimage(array('alt'=>$_smarty_tpl->tpl_vars['alt_show_hide']->value,'name'=>"basic_search",'ext'=>".gif",'other_attributes'=>'border="0" class="tabFormAdvLink-icon tabFormAdvLink-basic" '),$_smarty_tpl);?>
&nbsp;<?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_SAVED_VIEWS'];?>

		</a><br>
		<input type='hidden' id='showSSDIV' name='showSSDIV' value='<?php echo $_smarty_tpl->tpl_vars['SHOWSSDIV']->value;?>
'><p>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
		<?php echo smarty_function_sugar_translate(array('label'=>'LBL_SAVE_SEARCH_AS','module'=>'SavedSearch'),$_smarty_tpl);?>
:
	</td>
	<td width='30%' nowrap>
		<input type='text' name='saved_search_name'>
		<input type='hidden' name='search_module' value=''>
		<input type='hidden' name='saved_search_action' value=''>
		<input title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVE_BUTTON_LABEL'];?>
' class='button' type='button' name='saved_search_submit' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
	</td>
	<td scope='row' width='10%' nowrap="nowrap">
	    <?php echo smarty_function_sugar_translate(array('label'=>'LBL_MODIFY_CURRENT_SEARCH','module'=>'SavedSearch'),$_smarty_tpl);?>
:
	</td>
	<td width='30%' nowrap>
        <input class='button' onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_UPDATE'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_UPDATE'];?>
' name='ss_update' id='ss_update' type='button' >
		<input class='button' onclick='return SUGAR.savedViews.saved_search_action("delete", "<?php echo smarty_function_sugar_translate(array('label'=>'LBL_DELETE_CONFIRM','module'=>'SavedSearch'),$_smarty_tpl);?>
")' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE'];?>
' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_DELETE'];?>
' name='ss_delete' id='ss_delete' type='button'>
		<br><span id='curr_search_name'></span>
	</td>
</tr>

<tr>
<td colspan='6'>
<div style='<?php echo $_smarty_tpl->tpl_vars['DISPLAYSS']->value;?>
' id='inlineSavedSearch' >
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCH']->value;?>

</div>
</td>
</tr>

<?php }
if ($_smarty_tpl->tpl_vars['displayType']->value != 'popupView') {?>
<tr>
	<td colspan='5'>
        <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_TITLE'];?>
' onclick='SUGAR.savedViews.setChooser()' class='button' type='submit' name='button' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SEARCH_BUTTON_LABEL'];?>
' id='search_form_submit_advanced'/>&nbsp;
        <input tabindex='2' title='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_TITLE'];?>
'  onclick='SUGAR.searchForm.clear_form(this.form); document.getElementById("saved_search_select").options[0].selected=true; return false;' class='button' type='button' name='clear' id='search_form_clear_advanced' value='<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CLEAR_BUTTON_LABEL'];?>
'/>
        <?php if ($_smarty_tpl->tpl_vars['DOCUMENTS_MODULE']->value) {?>
        &nbsp;<input title="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BROWSE_DOCUMENTS_BUTTON_TITLE'];?>
" type="button" class="button" value="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_BROWSE_DOCUMENTS_BUTTON_LABEL'];?>
" onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");' />
        <?php }?>
        <a id="basic_search_link" onclick="SUGAR.searchForm.searchFormSelect('<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|basic_search','<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
|advanced_search')" href="javascript:void(0)" accesskey="<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_ADV_SEARCH_LNK_KEY'];?>
" ><?php echo $_smarty_tpl->tpl_vars['APP']->value['LNK_BASIC_SEARCH'];?>
</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value) {?>|&nbsp;&nbsp;&nbsp;<b><?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_SAVED_SEARCH_SHORTCUT'];?>
</b>&nbsp;
            <?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>
 <?php }?>
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'  onclick='SUGAR.searchForm.clear_form(this.form);' class='button' type='button' name='go_select' value=' <?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_GO_BUTTON_LABEL'];?>
 '/></span>	
        </span>
	</td>
	<td class="help">
	    <?php if ($_smarty_tpl->tpl_vars['DISPLAY_SEARCH_HELP']->value) {?>
	    <img  border='0' src='<?php echo smarty_function_sugar_getimagepath(array('file'=>"help-dashlet.gif"),$_smarty_tpl);?>
' class="help-search">
	    <?php }?>
    </td>
</tr>
<?php }?>
</table>

<?php echo '<script'; ?>
>
	if(typeof(loadSSL_Scripts)=='function'){
		loadSSL_Scripts();
	}
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['popup_query_form_created_by_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_business_center_name_advanced']={"form":"popup_query_form","method":"query","modules":["BusinessCenters"],"group":"or","field_list":["name","id"],"populate_list":["business_center_name_advanced","business_center_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_team_name_advanced']={"form":"popup_query_form","method":"query","modules":["Teams"],"group":"or","field_list":["name","id"],"populate_list":["team_name_advanced","team_id_advanced"],"required_list":["team_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""},{"name":"name","op":"like_custom","begin":"(","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['popup_query_form_reports_to_name_advanced']={"form":"popup_query_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name_advanced","reports_to_id_advanced"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};<?php echo '</script'; ?>
><?php }
}
