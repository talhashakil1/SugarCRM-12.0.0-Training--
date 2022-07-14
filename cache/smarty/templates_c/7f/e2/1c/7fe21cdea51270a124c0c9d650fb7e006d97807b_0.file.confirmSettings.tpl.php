<?php
/* Smarty version 3.1.39, created on 2022-07-13 16:40:24
  from '/var/www/html/SugarEnt-Full-12.0.0/install/templates/confirmSettings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ceaf281d3966_45725856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fe21cdea51270a124c0c9d650fb7e006d97807b' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/install/templates/confirmSettings.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ceaf281d3966_45725856 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html <?php echo $_smarty_tpl->tpl_vars['langHeader']->value;?>
>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript">
    <meta http-equiv="Content-Style-Type" content="text/css">
    <title><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_WIZARD_TITLE'];?>
 <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_TITLE'];?>
</title>
    <link REL="SHORTCUT ICON" HREF="<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
">
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['css']->value;?>
" type="text/css" />
</head>
<body onload="javascript:document.getElementById('button_next2').focus();">
<form action="install.php" method="post" name="setConfig" id="form">
    <input type="hidden" name="current_step" value="<?php echo $_smarty_tpl->tpl_vars['next_step']->value;?>
">
    <table cellspacing="0" cellpadding="0" border="0" align="center" class="shell">
        <tr>
            <td colspan="2" id="help"><a href="<?php echo $_smarty_tpl->tpl_vars['help_url']->value;?>
" target='_blank'><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HELP'];?>
 </a></td>
        </tr>
        <tr>
            <th width="500">
                <p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['sugar_md']->value;?>
" alt="SugarCRM" border="0">
                </p>
                <?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_TITLE'];?>
</th>
            <th width="200" style="text-align: right;"><a href="http://www.sugarcrm.com" target="_blank"><img
                            src="<?php echo $_smarty_tpl->tpl_vars['loginImage']->value;?>
" alt="SugarCRM" border="0" class="sugarcrm-logo"></a>
            </th>
        </tr>
        <tr>
            <td colspan="2">
                <table width="100%" cellpadding="0" cellpadding="0" border="0" class="StyleDottedHr">
                    <tr>
                        <th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_TITLE'];?>
</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CONFIRM_DB_TYPE'];?>
</strong></td>
                        <td><?php echo $_SESSION['setup_db_type'];?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_HOST_NAME'];?>
</strong></td>
                        <td><?php echo $_SESSION['setup_db_host_name'];?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_DB_NAME'];?>
</strong></td>
                        <td>
                            <?php echo $_SESSION['setup_db_database_name'];?>
 <?php echo $_smarty_tpl->tpl_vars['dbCreate']->value;?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_DB_ADMIN_USER'];?>
</strong></td>
                        <td><?php echo $_SESSION['setup_db_admin_user_name'];?>
</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_DEMO_DATA'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['demoData']->value;?>
</td>
                    </tr>
                    <?php if ($_smarty_tpl->tpl_vars['yesNoDropCreate']->value) {?>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_DB_DROP'];?>
</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['yesNoDropCreate']->value;?>
</td>
                        </tr>
                    <?php }?>
                    <?php if ($_SESSION['install_type'] && $_SESSION['install_type'] == 'custom') {?>
                        <tr>
                            <td colspan="3" align="left"></td>
                        </tr>
                        <tr>
                            <th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_TITLE'];?>
</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_URL'];?>
</strong></td>
                            <td><?php echo $_SESSION['setup_site_url'];?>
</td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="3" align="left"></td>
                        </tr>
                        <th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_SUGAR_UPDATES'];?>
</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_SUGAR_UP'];?>
</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['yesNoSugarUpdates']->value;?>
</td>
                        </tr>
                        <tr>
                        <tr>
                            <td colspan="3" align="left"></td>
                        </tr>
                        <th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_SITE_SECURITY'];?>
</th>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_CUSTOM_SESSION'];?>
?</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['yesNoCustomSession']->value;?>
</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_CUSTOM_LOG'];?>
?</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['yesNoCustomLog']->value;?>
</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_CUSTOM_ID'];?>
?</strong></td>
                            <td><?php echo $_smarty_tpl->tpl_vars['yesNoCustomId']->value;?>
</td>
                        </tr>
                    <?php }?>
                    <tr>
                        <td colspan="3" align="left"></td>
                    </tr>
                    <tr>
                        <th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SYSTEM_CREDS'];?>
</th>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_DB_USER'];?>
</strong></td>
                        <td>
                            <?php echo $_SESSION['setup_db_sugarsales_user'];?>

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_DBCONF_DB_PASSWORD'];?>
</strong></td>
                        <td>
                            <span id="hide_db_admin_pass"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HIDDEN'];?>
</span>
                            <span style="display:none"
                                  id="show_db_admin_pass"><?php echo $_SESSION['setup_db_sugarsales_password'];?>
</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_ADMIN_Name'];?>
</strong></td>
                        <td>Admin</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SITECFG_ADMIN_PASS'];?>
</strong></td>
                        <td>
                            <span id="hide_site_admin_pass"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HIDDEN'];?>
</span>
                            <span style="display:none"
                                  id="show_site_admin_pass"><?php echo $_SESSION['setup_site_admin_password'];?>
</span>
                        </td>
                    </tr>
                    <tr><td colspan="3" align="left"></td></tr>
                    <tr><th colspan="3" align="left"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SYSTEM_ENV'];?>
</th></tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_PHPVER'];?>
</strong></td>
                        <td><?php echo constant('PHP_VERSION');?>
</td>
                    </tr>
                                                            <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_XML'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_MBSTRING'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['mbStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_CONFIG'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_CUSTOM'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_MODULE'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_UPLOAD'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_DATA'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_CACHE'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_OK'];?>
</td>
                    </tr>
                                                            <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_MEM'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['memory_msg']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_ZLIB'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zlibStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_ZIP'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['zipStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_IMAP'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['imapStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_CURL'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['curlStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_UPLOAD_MAX_FILESIZE_TITLE'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['fileMaxStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SPRITE_SUPPORT'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['spriteSupportStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong>PHP allows to use stream (<?php echo $_smarty_tpl->tpl_vars['uploadStream']->value;?>
://)</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['suhosinStatus']->value;?>
</td>
                    </tr>
                                        <tr>
                        <td></td>
                        <td><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_CHECKSYS_PHP_INI'];?>
</strong></td>
                        <td><?php echo $_smarty_tpl->tpl_vars['phpIniLocation']->value;?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
                <tr>
            <td align="right" colspan="2">
                <table cellspacing="0" cellpadding="0" border="0" class="stdTable">
                    <tr><th align="left" colspan="2">&nbsp;</th></tr>
                    <tr>
                        <td align="left" colspan="2">
                            <?php if ($_smarty_tpl->tpl_vars['is_windows']->value) {?>
                                <font color="red">
                                    <?php echo $_smarty_tpl->tpl_vars['mod_strings_scheduler']->value['LBL_CRON_WINDOWS_DESC'];?>
<br>
                                </font>
                                cd <?php echo realpath('./');?>
<br>
                                php.exe -f cron.php
                            <?php } else { ?>
                                <font color="red">
                                    <?php echo $_smarty_tpl->tpl_vars['mod_strings_scheduler']->value['LBL_CRON_INSTRUCTIONS_LINUX'];?>

                                </font>
                                <?php echo $_smarty_tpl->tpl_vars['mod_strings_scheduler']->value['LBL_CRON_LINUX_DESC'];?>

                                <br>
                                *&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;
                                cd <?php echo realpath('./');?>
; php -f cron.php > /dev/null 2>&1
                            <?php }?>
                        </td>
                    </tr>
                </table>
            </td>
        <tr>
            <td colspan="3" align="right">
                <input type="button" class="button" name="print_summary" id="button_print_summary_settings"
                       value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PRINT_SUMM'];?>
"
                       onClick='window.print()'
                       onCluck='window.open("install.php?current_step="+(document.setConfig.current_step.value -1)+"&goto=<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
&print=true");'/>&nbsp;
            </td>
        </tr>
        <tr>
            <td align="right" colspan="2">
                <hr>
                <table cellspacing="0" cellpadding="0" border="0" class="stdTable">
                    <tr>
                        <td align=right>
                            <input type="button" class="button" id="show_pass_button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SHOW_PASS'];?>
"
                                   onClick='togglePass();'/>
                        </td>
                        <td>
                            <input type="hidden" name="goto" id="goto">
                            <input class="button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_BACK'];?>
" id="button_back_settings"
                                   onclick="document.getElementById('goto').value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_BACK'];?>
';document.getElementById('form').submit();"/>
                        </td>
                        <td>
                            <input class="button" type="button" value="<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_LANG_BUTTON_COMMIT'];?>
"
                                   onclick="document.getElementById('goto').value='<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_NEXT'];?>
';document.getElementById('form').submit();"
                                   id="button_next2"/>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</form>
<?php echo '<script'; ?>
>
    function togglePass(){
        if(document.getElementById('show_site_admin_pass').style.display == ''){
            document.getElementById('show_pass_button').value = "<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_SHOW_PASS'];?>
";
            document.getElementById('hide_site_admin_pass').style.display = '';
            document.getElementById('hide_db_admin_pass').style.display = '';
            document.getElementById('show_site_admin_pass').style.display = 'none';
            document.getElementById('show_db_admin_pass').style.display = 'none';
        } else {
            document.getElementById('show_pass_button').value = "<?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_HIDE_PASS'];?>
";
            document.getElementById('show_site_admin_pass').style.display = '';
            document.getElementById('show_db_admin_pass').style.display = '';
            document.getElementById('hide_site_admin_pass').style.display = 'none';
            document.getElementById('hide_db_admin_pass').style.display = 'none';

        }
    }
<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
