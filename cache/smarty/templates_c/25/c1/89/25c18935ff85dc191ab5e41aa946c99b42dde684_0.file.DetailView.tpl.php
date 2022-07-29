<?php
/* Smarty version 3.1.39, created on 2022-07-29 18:25:01
  from '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Fullname/DetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62e3dfada4d1a0_47501595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25c18935ff85dc191ab5e41aa946c99b42dde684' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/include/SugarFields/Fields/Fullname/DetailView.tpl',
      1 => 1649221080,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62e3dfada4d1a0_47501595 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar.php','function'=>'smarty_function_sugarvar',),1=>array('file'=>'/var/www/html/SugarEnt-Full-12.0.0/include/SugarSmarty/plugins/function.sugarvar_connector.php','function'=>'smarty_function_sugarvar_connector',),));
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
{if strlen(<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
) <= 0}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'default_value','string'=>true),$_smarty_tpl);?>
 }
{else}
{assign var="value" value=<?php echo smarty_function_sugarvar(array('key'=>'value','string'=>true),$_smarty_tpl);?>
 }
{/if}
<span id='<?php echo smarty_function_sugarvar(array('key'=>'name'),$_smarty_tpl);?>
'><?php echo smarty_function_sugarvar(array('key'=>'value'),$_smarty_tpl);?>
</span>
&nbsp;&nbsp;
<span class="id-ff">
    <a id="btn_vCardButton" title="{$APP.LBL_VCARD}" href="#">{sugar_getimage alt=$app_strings.LBL_ID_FF_VCARD name="id-ff-vcard" ext=".png"}</a>
</span>
<?php if (!empty($_smarty_tpl->tpl_vars['displayParams']->value['enableConnectors'])) {?>
{if !empty($value)}
<?php echo smarty_function_sugarvar_connector(array('view'=>'DetailView'),$_smarty_tpl);?>

{/if}
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    $("#btn_vCardButton").click(function(e){
        window.location.assign('index.php?module={$module}&action=vCard&record={$fields.id.value}&to_pdf=true');

        if (e.preventDefault) {
            e.preventDefault();
        }
    });
<?php echo '</script'; ?>
>
<?php }
}
