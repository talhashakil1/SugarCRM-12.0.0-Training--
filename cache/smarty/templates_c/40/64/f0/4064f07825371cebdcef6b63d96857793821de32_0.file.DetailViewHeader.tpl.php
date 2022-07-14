<?php
/* Smarty version 3.1.39, created on 2022-07-13 18:52:27
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/Users/tpls/DetailViewHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62cece1b3dfe71_53474296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4064f07825371cebdcef6b63d96857793821de32' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/Users/tpls/DetailViewHeader.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62cece1b3dfe71_53474296 (Smarty_Internal_Template $_smarty_tpl) {
?>{*
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
<?php echo '<script'; ?>
 type='text/javascript' src='{sugar_getjspath file='modules/Users/DetailView.js'}'><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type='text/javascript'>
var LBL_NEW_USER_PASSWORD = '{$MOD.LBL_NEW_USER_PASSWORD_2}';
{if !empty($ERRORS)}
YAHOO.SUGAR.MessageBox.show({
    title: '{$ERROR_MESSAGE|escape:javascript}',
    msg: '{$ERRORS|escape:javascript}'
});

{/if}
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
var user_detailview_tabs = new YAHOO.widget.TabView("user_detailview_tabs");


user_detailview_tabs.on('contentReady', function(e){

{if $EDIT_SELF && $SHOW_DOWNLOADS_TAB}

    user_detailview_tabs.addTab( new YAHOO.widget.Tab({
        label: '{$MOD.LBL_DOWNLOADS}',
        dataSrc: 'index.php?to_pdf=1&module=Home&action=pluginList',
        content: '<div style="text-align:center; width: 100%">{sugar_image name="loading"}</div>',
        cacheData: true
    }));
    user_detailview_tabs.getTab(3).getElementsByTagName('a')[0].id = 'tab4';

{/if}
});

$(document).ready(function(){
        $("ul.clickMenu").each(function(index, node){
            $(node).sugarActionMenu();
        });
    });

<?php echo '</script'; ?>
>

<table width="100%" border="0" cellspacing="0" cellpadding="0" class="actionsContainer">
<tr>
<td width="20%">

<form action="index.php" method="post" name="DetailView" id="form">
{sugar_csrf_form_token}
    <input type="hidden" name="module" value="Users">
    <input type="hidden" name="record" value="{$ID}">
    <input type="hidden" name="isDuplicate" value=false>
    <input type="hidden" name="action">
    <input type="hidden" name="user_name" value="{$USER_NAME}">
    <input type="hidden" id="user_type" name="user_type" value="{$UserType}">
    <input type="hidden" name="password_generate">
    <input type="hidden" name="old_password">
    <input type="hidden" name="new_password">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_id">
<table width="100%" cellpadding="0" cellspacing="0" border="0">

    <tr><td colspan='2' width="100%" nowrap>

            {sugar_action_menu id="detail_header_action_menu" class="clickMenu fancymenu" buttons=$EDITBUTTONS}

    </td></tr>
</table>
</form>

</td>
<td width="100%">
<table width="100%" border="0" cellspacing="0" cellpadding="0">
{$PAGINATION}
</table>
</td>
</tr>
</table>
<div id="user_detailview_tabs" class="yui-navset detailview_tabs">
    <ul class="yui-nav">
        <li class="selected"><a id="tab1" href="#tab1"><em>{$MOD.LBL_USER_INFORMATION}</em></a></li>
        <li {if $IS_GROUP_OR_PORTAL}style="display: none;"{/if}><a id="tab2" href="#tab2"><em>{$MOD.LBL_ADVANCED}</em></a></li>
        {if $SHOW_ROLES}
        <li><a id="tab3" href="#tab3"><em>{$MOD.LBL_USER_ACCESS}</em></a></li>
        {/if}
    </ul>
    <div class="yui-content">
        <div>
<?php }
}
