<?php
/* Smarty version 3.1.39, created on 2022-07-15 11:24:32
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/includes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d10820634cc0_22597843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b6578c273ced6f7a3a8592570162f1e0238cc5b' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/ModuleBuilder/tpls/includes.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d10820634cc0_22597843 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),));
echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/JSTransaction.js'),$_smarty_tpl);?>
" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
	var jstransaction = new JSTransaction();
	if (SUGAR.themes.tempHideLeftCol){
    	SUGAR.themes.tempHideLeftCol();
    }
<?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>"modules/ModuleBuilder/tpls/LayoutEditor.css"),$_smarty_tpl);?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>"vendor/ytree/TreeView/css/folders/tree.css"),$_smarty_tpl);?>
" />

<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2PanelDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2RowDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2FieldDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studiotabgroups.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/studio2ListDD.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>

<!--end ModuleBuilder Assistant!-->
<?php echo '<script'; ?>
 type="text/javascript" language="Javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/ModuleBuilder.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" language="Javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/SimpleList.js'),$_smarty_tpl);?>
'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/javascript/JSTransaction.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src='<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/tiny_mce/tiny_mce.js'),$_smarty_tpl);?>
' ><?php echo '</script'; ?>
>

<!-- Formula builder and dependency manager -->
<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/jquery/markitup/jquery.markitup.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/jquery/markitup/sets/default/set.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'sidecar/minified/sidecar.min.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 language="javascript">
    jQuery.noConflict();
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/sugarAuthStore.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/twitterbootstrap/bootstrap-colorpicker.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/select2/select2.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>

<link rel="stylesheet" type="text/css" href="<?php echo smarty_function_sugar_getjspath(array('file'=>'modules/ModuleBuilder/tpls/MB.css'),$_smarty_tpl);?>
" />
<?php }
}
