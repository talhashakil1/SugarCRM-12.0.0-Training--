<?php
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


global $app_strings;
global $app_list_strings;
global $mod_strings;
global $currentModule;
global $gridline;
global $current_user;

if (!is_admin($current_user)) {
    sugar_die($GLOBALS['app_strings']['ERR_NOT_ADMIN']);
}

echo getClassicModuleTitle($mod_strings['LBL_MODULE_NAME'], array($mod_strings['LBL_UPGRADE_TITLE']), false);

?>
<p>
<table class="other view">
<tr>
    <td scope="row"><?php
        echo SugarThemeRegistry::current()->getImage(
            'Repair',
            'align="absmiddle" border="0"',
            null,
            null,
            '.gif',
            $mod_strings['LBL_QUICK_REPAIR_AND_REBUILD']
        ); ?>&nbsp;<a href="./index.php?module=Administration&action=repair"
                      onclick="new quickRepairAndRebuild(event); return false;"
        ><?php echo $mod_strings['LBL_QUICK_REPAIR_AND_REBUILD']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_QUICK_REPAIR_AND_REBUILD_DESC'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Upgrade','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_UPGRADE_TEAM_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=upgradeTeams"><?php echo $mod_strings['LBL_UPGRADE_TEAM_TITLE']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_UPGRADE_TEAMS'] ; ?> </td>
</tr>
<tr>
<?php
$server_software = $_SERVER["SERVER_SOFTWARE"];
if(strpos($server_software,'Microsoft-IIS') === false) {
?>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_REBUILD_HTACCESS']); ?>&nbsp;<a href="./index.php?module=Administration&action=UpgradeAccess"><?php echo $mod_strings['LBL_REBUILD_HTACCESS']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_HTACCESS_DESC'] ; ?> </td>
<?php
} else {
?>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_REBUILD_WEBCONFIG']); ?>&nbsp;<a href="./index.php?module=Administration&action=UpgradeIISAccess"><?php echo $mod_strings['LBL_REBUILD_WEBCONFIG']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_WEBCONFIG_DESC'] ; ?> </td>
<?php
}
?>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_REBUILD_CONFIG']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildConfig"><?php echo $mod_strings['LBL_REBUILD_CONFIG']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_CONFIG_DESC'] ; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_REBUILD_EXPRESSIONS_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildExpressionPlugins"><?php echo $mod_strings['LBL_REBUILD_EXPRESSIONS_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_EXPRESSIONS_DESC'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_REBUILD_REL_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildRelationship"><?php echo $mod_strings['LBL_REBUILD_REL_TITLE']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REBUILD_REL_DESC'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REBUILD_SCHEDULERS_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildSchedulers"><?php echo $mod_strings['LBL_REBUILD_SCHEDULERS_TITLE']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REBUILD_SCHEDULERS_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REBUILD_CONFIG']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildWorkFlow"><?php echo $mod_strings['LBL_REBUILD_WORKFLOW']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_WORKFLOW_DESC'] ; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildJSLang"><?php echo $mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REBUILD_CONCAT_JS_FILES_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairJSFile&type=concat" ><?php echo $mod_strings['LBL_REBUILD_CONCAT_JS_FILES_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_CONCAT_JS_FILES_DESC_SHORT'] ; ?> </td>
</tr>
<?php if(!empty($GLOBALS['sugar_config']['use_sprites']) && $GLOBALS['sugar_config']['use_sprites']) { ?>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Rebuild','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REBUILD_SPRITES_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RebuildSprites"><?php echo $mod_strings['LBL_REBUILD_SPRITES_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REBUILD_SPRITES_DESC_SHORT'] ; ?> </td>
</tr>
<?php } ?>
<tr>
    <td scope="row"><?php
        echo SugarThemeRegistry::current()->getImage(
            'Repair',
            'align="absmiddle" border="0"',
            null,
            null,
            '.gif',
            $mod_strings['LBL_REPAIR_JS_FILES_TITLE']
        ); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairJSFile&type=repair"><?php
            echo $mod_strings['LBL_REPAIR_JS_FILES_TITLE']; ?></a>
    </td>
    <td> <?php echo $mod_strings['LBL_REPAIR_JS_FILES_DESC_SHORT']; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REPAIR_FIELD_CASING_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairFieldCasing&type=repair"><?php echo $mod_strings['LBL_REPAIR_FIELD_CASING_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REPAIR_FIELD_CASING_DESC_SHORT'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REPAIR_TEAMS']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairTeams&silent=0"><?php echo $mod_strings['LBL_REPAIR_TEAMS']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REPAIR_TEAMS_DESC'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"',null,null,'.gif',$mod_strings['LBL_REPAIR_ROLES']); ?>&nbsp;<a href="./index.php?module=ACL&action=install_actions"><?php echo $mod_strings['LBL_REPAIR_ROLES']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REPAIR_ROLES_DESC'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REPAIR_IE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairIE"><?php echo $mod_strings['LBL_REPAIR_IE']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REPAIR_IE_DESC'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REPAIR_XSS']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairXSS"><?php echo $mod_strings['LBL_REPAIR_XSS']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REPAIRXSS_TITLE'] ; ?> </td>
</tr>
<tr>
	<td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REPAIR_ACTIVITIES']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairActivities"><?php echo $mod_strings['LBL_REPAIR_ACTIVITIES']; ?></a></td>
	<td> <?php echo $mod_strings['LBL_REPAIR_ACTIVITIES_DESC'] ; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_REPAIR_SEED_USERS_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=RepairSeedUsers"><?php echo $mod_strings['LBL_REPAIR_SEED_USERS_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_REPAIR_SEED_USERS_DESC'] ; ?> </td>
</tr>
<tr>
    <td scope="row"><?php echo SugarThemeRegistry::current()->getImage('Repair','align="absmiddle" border="0"', null,null,'.gif',$mod_strings['LBL_CLEAR_ADDITIONAL_CACHE_TITLE']); ?>&nbsp;<a href="./index.php?module=Administration&action=ClearAdditionalCache"><?php echo $mod_strings['LBL_CLEAR_ADDITIONAL_CACHE_TITLE']; ?></a></td>
    <td> <?php echo $mod_strings['LBL_CLEAR_ADDITIONAL_CACHE_DESC'] ; ?> </td>
</tr>
</table></p>

<script>
    class quickRepairAndRebuild {
        constructor(e) {
            e.preventDefault();
            this.error = false;
            this.inProgress = false;
            this.isDone = false;
            this.progress = 0;
            this.progressStep = 100;

            this.prepareContentView();
            this.progressMessage(true);
            this.startQrr();
            this.setInstallationProgressCheck(true);
        }

        startQrr() {
            let url = 'index.php?module=Administration&action=repair&async=true';
            let self = this;
            this.inProgress = true;
            this.isDone = false;
            $.ajax({
                url: url,
                data: null,
                success: function(content) {
                    self.successMessage();
                },
                error: function(content) {
                    self.errorMessage();
                },
                complete: function(xhr) {
                    if (self.error) {
                        self.appendContent(xhr.responseText);
                        $("html, body").animate({scrollTop: $(document).height()}, 1000);
                    }
                    self.inProgress = false;
                },
                cache: false,
                dataType: 'html',
            });
        }

        prepareContentView() {
            this.contentView = $('<td></td>');
            $('#contentTable table:first').parent().replaceWith(this.contentView);
        }

        progressMessage(flag) {
            if (flag) {
                let template = app.template.getView('repair-and-rebuild.process', 'Administration');
                this.progressMessageEl = $('<div></div>');
                this.progressMessageEl.html(template({id: 'qrr-progress-bar'}));
                app.$rootEl.find('.alert-top').append(this.progressMessageEl);
            } else if (this.progressMessageEl) {
                this.progressMessageEl.remove();
            }
        }

        errorMessage(title, messages) {
            this.progressMessage(false);
            app.alert.show('qrr_error', {
                level: 'error',
                title: title || app.lang.get('ERR_INTERNAL_ERR_MSG'),
                messages: messages || ['ERR_HTTP_500_TEXT_LINE1', 'ERR_HTTP_500_TEXT_LINE2']
            });
        }

        successMessage() {
            this.progressMessage(false);
            app.alert.show('qrr_success', {
                level: 'success',
                title: app.lang.get('LBL_DONE', 'Administration'),
                messages: app.lang.get('LBL_QUICK_REPAIR_AND_REBUILD_FINISHED', 'Administration'),
                autoClose: true,
            });
        }

        setInstallationProgressCheck(flag) {
            if (flag) {
                this.setInstallationProgressCheck(false);
                this.installationProgressTimer = setTimeout(this.checkInstallationProgress.bind(this), 1000);
            } else if (this.installationProgressTimer) {
                clearTimeout(this.installationProgressTimer);
            }
        }

        appendContent(html) {
            this.contentView.append(html);
        }

        checkInstallationProgress() {
            let url = 'index.php?module=Administration&action=repairstatus';
            let self = this;
            $.ajax({
                url: url,
                data: null,
                success: function(content) {
                    self.appendContent(content);
                },
                error: function() {
                    self.error = true;
                },
                complete: function() {
                    let pPart = Math.floor(self.progressStep / 4);
                    self.progressStep -= pPart;
                    self.progress += pPart;
                    self.progressMessageEl.find('.progress .bar').css('width', self.progress + '%');
                    self.progressMessageEl.find('h5').html(self.progress + '%');

                    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
                    if (self.isDone) {
                        return;
                    }
                    self.setInstallationProgressCheck(true);
                    if (!self.inProgress) {
                        self.isDone = true;
                    }
                },
                cache: false,
                dataType: 'html',
            });
        }
    }
</script>
