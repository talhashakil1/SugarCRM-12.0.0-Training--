<?php
/* Smarty version 3.1.39, created on 2022-08-18 18:48:09
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/SavedSearch/SavedSearchSelects.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62fe43192050c7_50880421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1d6c53fe57302698725880e9871d54ab5e82875d' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/SavedSearch/SavedSearchSelects.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62fe43192050c7_50880421 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value != null) {?>
<select style="width: auto !important; min-width: 150px;" name='saved_search_select' id='saved_search_select' onChange='SUGAR.savedViews.shortcut_select(this, "<?php echo $_smarty_tpl->tpl_vars['SEARCH_MODULE']->value;?>
");'>
	<?php echo $_smarty_tpl->tpl_vars['SAVED_SEARCHES_OPTIONS']->value;?>

</select>
<?php echo '<script'; ?>
>
	//if the function exists, call the function that will populate the searchform
	//labels based on the value of the saved search dropdown
	if(typeof(fillInLabels)=='function'){
		fillInLabels();
	}
<?php echo '</script'; ?>
>
<?php }?>

<?php }
}
