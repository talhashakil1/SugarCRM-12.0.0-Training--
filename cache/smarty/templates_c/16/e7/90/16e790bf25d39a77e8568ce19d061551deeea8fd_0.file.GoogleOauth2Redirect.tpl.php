<?php
/* Smarty version 3.1.39, created on 2022-08-19 11:21:50
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/EAPM/tpls/GoogleOauth2Redirect.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ff2bfe5bd9e2_81329661',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16e790bf25d39a77e8568ce19d061551deeea8fd' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/EAPM/tpls/GoogleOauth2Redirect.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ff2bfe5bd9e2_81329661 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/modifier.json.php','function'=>'smarty_modifier_json',),));
echo '<script'; ?>
>
    var message = <?php echo smarty_modifier_json($_smarty_tpl->tpl_vars['response']->value);?>
;
    window.opener.postMessage(JSON.stringify(message), <?php echo smarty_modifier_json($_smarty_tpl->tpl_vars['siteUrl']->value);?>
);
    window.close();
<?php echo '</script'; ?>
>
<?php }
}
