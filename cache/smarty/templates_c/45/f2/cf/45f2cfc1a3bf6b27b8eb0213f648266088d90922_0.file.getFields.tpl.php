<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:14
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/PdfManager/tpls/getFields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe431e3f12e0_55415503',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '45f2cfc1a3bf6b27b8eb0213f648266088d90922' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/PdfManager/tpls/getFields.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe431e3f12e0_55415503 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/vendor/smarty/smarty/libs/plugins/function.html_options.php','function'=>'smarty_function_html_options',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_translate.php','function'=>'smarty_function_sugar_translate',),));
echo smarty_function_html_options(array('name'=>"field",'id'=>"field",'selected'=>$_smarty_tpl->tpl_vars['selectedField']->value,'values'=>$_smarty_tpl->tpl_vars['fieldsForSelectedModule']->value,'options'=>$_smarty_tpl->tpl_vars['fieldsForSelectedModule']->value,'onChange'=>"SUGAR.PdfManager.loadFields(YAHOO.util.Dom.get('base_module').value, this.value)"),$_smarty_tpl);
if ($_smarty_tpl->tpl_vars['fieldsForSubModule']->value) {?> <?php echo smarty_function_html_options(array('name'=>"subField",'id'=>"subField",'values'=>$_smarty_tpl->tpl_vars['fieldsForSubModule']->value,'options'=>$_smarty_tpl->tpl_vars['fieldsForSubModule']->value),$_smarty_tpl);
}?> <input type="button" class="button" name="pdfManagerInsertField" id="pdfManagerInsertField" value="<?php echo smarty_function_sugar_translate(array('module'=>"PdfManager",'label'=>"LBL_BTN_INSERT"),$_smarty_tpl);?>
" onclick="SUGAR.PdfManager.insertField(YAHOO.util.Dom.get('field'), YAHOO.util.Dom.get('subField'));" /><?php }
}
