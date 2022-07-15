<?php
/* Smarty version 3.1.39, created on 2022-07-15 14:50:34
  from '/var/www/html/SugarEnt-Full-12.0.0/include/MVC/View/tpls/xsrf.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d1386a1d5cb0_92886470',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bca680b24294113a46ae2d834fb46fb1de72d3d9' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/MVC/View/tpls/xsrf.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d1386a1d5cb0_92886470 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div align='center' style='background:lightgray'>

<?php if ($_smarty_tpl->tpl_vars['csrfAuthFailure']->value) {?>
<h3 style='color:red'>Cross Site Request Forgery (XSRF) Attack Detected</h3>
<h4>Form authentication failure (<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
 -> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>
). Contact your administrator.</h4>
<?php } else { ?>
<h3 style='color:red'>Possible Cross Site Request Forgery (XSRF) Attack Detected</h3>
<h4>If you think this is a mistake please ask your administrator to add the following site to the acceptable referer list</h4>
<h3><?php echo $_smarty_tpl->tpl_vars['host']->value;?>
</h3>
<h4><a href='javascript:void(0);' onclick='document.getElementById("directions").style.display="";'>Click here for directions to add this site to the acceptable referer list</a></h4>
</div>
<div id='directions' style='display:none'>
    <h3>Directions:</h3>
    <ol>
        <li>On your file system go to the root of your SugarCRM instance
        <li>Open the file config_override.php. If it does not exist, create it. (it should be at the same level as index.php and config.php)
        <li>Make sure the file starts with <pre>&lt;?php</pre> followed by a new line
        <li>Add the following line to your config_override.php file<br> <pre>$sugar_config['http_referer']['list'][] = '<?php echo $_smarty_tpl->tpl_vars['host']->value;?>
';</pre>
        <li>Save the file and it should work
    </ol>
    <h3>Attempted action (<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
):</h3>
    If you feel this is a valid action that should be allowed from any referer, add the following to your config_override.php file
    <ul><li><pre>$sugar_config['http_referer']['actions'] =array( <?php echo $_smarty_tpl->tpl_vars['whiteListString']->value;?>
 ); </pre></ul>
</div>
<?php }
}
}
