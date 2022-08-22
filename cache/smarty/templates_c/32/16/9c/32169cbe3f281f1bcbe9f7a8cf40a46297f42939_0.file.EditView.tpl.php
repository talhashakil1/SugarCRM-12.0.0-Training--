<?php
/* Smarty version 3.1.39, created on 2022-08-19 10:17:29
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Image/EditView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff1ce9e08213_27613172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32169cbe3f281f1bcbe9f7a8cf40a46297f42939' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Image/EditView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff1ce9e08213_27613172 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),));
?>
{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}
{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}  

<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, 'idname', 'idname', null);
echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);
if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['idName'])) {?>
    <?php $_smarty_tpl->_assignInScope('idname', $_smarty_tpl->tpl_vars['displayParams']->value['idName']);
}?>

{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_duplicate" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
_duplicate" value="{$value}"/>
{/if}

<input 
	type="file" id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" 
	title="" size="30" maxlength="255" value="" tabindex="<?php echo $_smarty_tpl->tpl_vars['tabindex']->value;?>
"
	onchange="SUGAR.image.confirm_imagefile('<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
');" 
	class="imageUploader"
	{if !empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['calculated'])) {?>|| true<?php }?> }
	style="display:none"
	{/if}  <?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['accesskey'])) {?> accesskey='<?php echo $_smarty_tpl->tpl_vars['displayParams']->value['accesskey'];?>
' <?php }?>
/>

{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <?php if (!empty($_smarty_tpl->tpl_vars['vardef']->value['calculated'])) {?>&& false<?php }?>}
{else}
<a href="javascript:SUGAR.image.lightbox(Dom.get('img_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
').src)">
<img
	id="img_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" 
	name="img_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" 	
	<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['calculated'])) {?>
	   src='index.php?entryPoint=download&id=<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
&type=SugarFieldImage&isTempFile=1'
	<?php } else { ?>
	   src='<?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
'
	<?php }?>
	style='
		{if "<?php echo $_smarty_tpl->tpl_vars['vardef']->value['border'];?>
" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "<?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
" eq ""}
			width: auto;
		{else}
			width: <?php echo $_smarty_tpl->tpl_vars['vardef']->value['width'];?>
px;
		{/if}
		{if "<?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
" eq ""}
			height: auto;
		{else}
			height: <?php echo $_smarty_tpl->tpl_vars['vardef']->value['height'];?>
px;
		{/if}
		{if empty(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
)} 
		  visibility:hidden;
		{/if}
		'	

></a>
<?php if (empty($_smarty_tpl->tpl_vars['vardef']->value['calculated'])) {?>
<img
	id="bt_remove_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" 
	name="bt_remvoe_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" 
	alt="{sugar_translate label='LBL_REMOVE'}"
	title="{sugar_translate label='LBL_REMOVE'}"
	src="{sugar_getimagepath file='delete_inline.gif'}"
	onclick="SUGAR.image.remove_upload_imagefile('<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
');" 	
	/>

<input 
	id="remove_imagefile_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" name="remove_imagefile_<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
" 
	type="hidden"  value="" />
<?php }?>
{/if}<?php }
}
