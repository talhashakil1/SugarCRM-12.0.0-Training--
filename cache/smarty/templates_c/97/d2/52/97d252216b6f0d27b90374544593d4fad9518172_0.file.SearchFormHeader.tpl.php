<?php
/* Smarty version 3.1.39, created on 2022-07-19 19:48:10
  from '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Schedulers/SearchFormHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d6c42a0b89e6_06970326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '97d252216b6f0d27b90374544593d4fad9518172' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/cache/modules/Schedulers/SearchFormHeader.tpl',
      1 => 1658242090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d6c42a0b89e6_06970326 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_csrf_form_token.php','function'=>'smarty_function_sugar_csrf_form_token',),));
?>

<div class="clear"></div>
<div class='listViewBody'>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo smarty_function_sugar_getjspath(array('file'=>'include/javascript/popup_parent_helper.js'),$_smarty_tpl);?>
"><?php echo '</script'; ?>
>
<?php echo $_smarty_tpl->tpl_vars['TABS']->value;?>

<?php echo '<script'; ?>
>
function submitOnEnter(e)
{
    var characterCode = (e && e.which) ? e.which : event.keyCode;

    if (characterCode == 13) {
        document.getElementById('search_form').submit();
        return false;
    } else {
        return true;
    }
}
<?php echo '</script'; ?>
>
<form name='search_form' id='search_form' class='search_form' method='post' action='index.php?module=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&action=<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
' onkeydown='submitOnEnter(event);'>
<?php echo smarty_function_sugar_csrf_form_token(array(),$_smarty_tpl);?>

<input type='hidden' name='searchFormTab' value='<?php echo $_smarty_tpl->tpl_vars['displayView']->value;?>
'/>
<input type='hidden' name='module' value='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
'/>
<input type='hidden' name='action' value='<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
'/> 
<input type='hidden' name='query' value='true'/>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAB_ARRAY']->value, 'tabData', false, 'tabkey', 'tabIteration', array (
));
$_smarty_tpl->tpl_vars['tabData']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tabkey']->value => $_smarty_tpl->tpl_vars['tabData']->value) {
$_smarty_tpl->tpl_vars['tabData']->do_else = false;
?>
<div id='<?php echo $_smarty_tpl->tpl_vars['module']->value;
echo $_smarty_tpl->tpl_vars['tabData']->value['name'];?>
_searchSearchForm' style='<?php echo $_smarty_tpl->tpl_vars['tabData']->value['displayDiv'];?>
' class="edit view search <?php echo $_smarty_tpl->tpl_vars['tabData']->value['name'];?>
"><?php if ($_smarty_tpl->tpl_vars['tabData']->value['displayDiv']) {
} else {
echo $_smarty_tpl->tpl_vars['return_txt']->value;
}?></div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<div id='<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
saved_viewsSearchForm' style='display: none;'><?php echo $_smarty_tpl->tpl_vars['saved_views_txt']->value;?>
</div>
<?php }
}