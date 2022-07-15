<?php
/* Smarty version 3.1.39, created on 2022-07-15 11:58:05
  from '/var/www/html/SugarEnt-Full-12.0.0/themes/RacerX/tpls/_head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62d10ffd6a9431_87830658',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9553c0ab7630470dcad10e78401f6feef326e00' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/themes/RacerX/tpls/_head.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62d10ffd6a9431_87830658 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getjspath.php','function'=>'smarty_function_sugar_getjspath',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getscript.php','function'=>'smarty_function_sugar_getscript',),2=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugar_getimagepath.php','function'=>'smarty_function_sugar_getimagepath',),));
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html <?php echo $_smarty_tpl->tpl_vars['langHeader']->value;?>
 style="color-scheme: <?php echo $_smarty_tpl->tpl_vars['appearance']->value;?>
;">
<head>
<link rel="SHORTCUT ICON" href="<?php echo $_smarty_tpl->tpl_vars['FAVICON_URL']->value;?>
">
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->tpl_vars['APP']->value['LBL_CHARSET'];?>
">
<title><?php echo $_smarty_tpl->tpl_vars['SYSTEM_NAME']->value;?>
</title>
<?php echo $_smarty_tpl->tpl_vars['SUGAR_CSS']->value;?>

<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file'=>"styleguide/assets/css/sugar-theme-variables.css"),$_smarty_tpl);?>
'/>
<?php if ($_smarty_tpl->tpl_vars['AUTHENTICATED']->value) {?>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file'=>"vendor/ytree/TreeView/css/folders/tree.css"),$_smarty_tpl);?>
'/>
<link rel='stylesheet' href='<?php echo smarty_function_sugar_getjspath(array('file'=>"styleguide/assets/css/sucrose.css"),$_smarty_tpl);?>
'/>
<?php }
echo $_smarty_tpl->tpl_vars['SUGAR_JS']->value;?>


<?php echo smarty_function_sugar_getscript(array('file'=>"include/javascript/mousetrap/mousetrap.min.js"),$_smarty_tpl);?>


<?php echo '<script'; ?>
 type="text/javascript">
<!--
SUGAR.themes.theme_name      = '<?php echo $_smarty_tpl->tpl_vars['THEME']->value;?>
';
SUGAR.themes.hide_image      = '<?php echo smarty_function_sugar_getimagepath(array('file'=>"hide.gif"),$_smarty_tpl);?>
';
SUGAR.themes.show_image      = '<?php echo smarty_function_sugar_getimagepath(array('file'=>"show.gif"),$_smarty_tpl);?>
';
SUGAR.themes.loading_image      = '<?php echo smarty_function_sugar_getimagepath(array('file'=>"img_loading.gif"),$_smarty_tpl);?>
';
if ( YAHOO.env.ua )
    UA = YAHOO.env.ua;
-->


<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript">
        function showBwcIframe() {
            // Remove the element hiding the BWC iframe upon iframe content load
            let helperDiv = window.parent.document.getElementById('hide-bwc-iframe-loading');
            if (helperDiv) {
                helperDiv.parentNode.removeChild(helperDiv);
            }
        }

        window.onload = showBwcIframe();

        if (window.parent && typeof(window.parent.SUGAR) !== 'undefined' && typeof(window.parent.SUGAR.App) !== 'undefined') {
            // update bwc context
            var app = window.parent.SUGAR.App;
            if (app.additionalComponents.sweetspot) {
                Mousetrap.bind('esc', function(e) {
                    app.additionalComponents.sweetspot.hide()
                    return false;
                });
                Mousetrap.bind('mod+shift+space', function(e) {
                    app.additionalComponents.sweetspot.show()
                    return false;
                });
            }
        }

        // Manually fire this in case an onload event is not present (in the case of Reports)
        if (document.readyState === 'complete') {
            showBwcIframe();
        }
    <?php echo '</script'; ?>
>
</head>
<?php }
}
