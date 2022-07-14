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
<style>
    .company_logo_image_container {
        height: 24px;
        width: 180px;
    }
    .dark-bg {
        background-color: #2b2d2e;
    }
    .light-bg {
        background-color: #ffffff;
    }
    #company_logo_image,
    #company_logo_image_dark {
        max-height: 100%;
        max-width: 100%;
    }
</style>
<form name="ConfigureSettings" enctype='multipart/form-data' method="POST" action="index.php" onSubmit="return (add_checks(document.ConfigureSettings) && check_form('ConfigureSettings'));">
{sugar_csrf_form_token}
<input type='hidden' name='action' value='SaveConfig'/>
<input type='hidden' name='module' value='Configurator'/>
<span class='error'>{$error.main}</span>
<table width="100%" cellpadding="0" cellspacing="1" border="0" class="actionsContainer">
<tr>

	<td>
		<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" id="ConfigureSettings_save_button" type="submit"  name="save" value="  {$APP.LBL_SAVE_BUTTON_LABEL}  " >
		<!-- &nbsp;<input title="{$MOD.LBL_SAVE_BUTTON_TITLE}"  id="ConfigureSettings_restore_button"  class="button"  type="submit" name="restore" value="  {$MOD.LBL_RESTORE_BUTTON_LABEL}  " > -->
		&nbsp;<input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}" id="ConfigureSettings_cancel_button"   onclick={literal}"parent.SUGAR.App.router.navigate('#Administration', {trigger: true})"{/literal} class="button"  type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  " > </td>
	<td align="right" nowrap>
		<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span> {$APP.NTC_REQUIRED}
	</td>
</tr>
</table>


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
<tr>
	<th align="left" scope="row" colspan="4"><h4>{$MOD.DEFAULT_SYSTEM_SETTINGS}</h4></th>
</tr>

	<tr>
		<td  scope="row">{$MOD.LIST_ENTRIES_PER_LISTVIEW}: {sugar_help text=$list_entries_per_listview_help}</td>
		<td  >
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_page' name='list_max_entries_per_page' value='{$config.list_max_entries_per_page}'>
		</td>
		<td  scope="row">{$MOD.LIST_ENTRIES_PER_SUBPANEL}: {sugar_help text=$list_entries_per_subpanel_help}</td>
		<td  >
			<input type='text' size='4' id='ConfigureSettings_list_max_entries_per_subpanel' name='list_max_entries_per_subpanel' value='{$config.list_max_entries_per_subpanel}'>
		</td>
	</tr>
    <tr>
        <td  scope="row">{$MOD.FREEZE_FIRST_COLUMN}: {sugar_help text={$MOD.FREEZE_FIRST_COLUMN_HELP}}</td>
        {if !empty($config.allow_freeze_first_column )}
            {assign var='allow_freeze_first_column_checked' value='CHECKED'}
        {else}
            {assign var='allow_freeze_first_column_checked' value=''}
        {/if}
        <td >
            <input type='hidden' name='allow_freeze_first_column' value='false'>
            <input name='allow_freeze_first_column'  type="checkbox" class="checkbox" value="true" {$allow_freeze_first_column_checked}>
        </td>
    </tr>
	<tr>
		<td  scope="row">{$MOD.DISPLAY_RESPONSE_TIME}: </td>
		{if !empty($config.calculate_response_time )}
			{assign var='calculate_response_time_checked' value='CHECKED'}
		{else}
			{assign var='calculate_response_time_checked' value=''}
		{/if}
		<td ><input type='hidden' name='calculate_response_time' value='false'><input name='calculate_response_time'  type="checkbox" value="true" {$calculate_response_time_checked}></td>
		<td scope="row">{$MOD.LBL_MODULE_FAVICON} &nbsp;{sugar_help text=$MOD.LBL_MODULE_FAVICON_HELP} </td>
		{if !empty($config.default_module_favicon)}
			{assign var='default_module_favicon' value='CHECKED'}
		{else}
			{assign var='default_module_favicon' value=''}
		{/if}
		<td >
			<input type='hidden' name='default_module_favicon' value='false'>
			<input name='default_module_favicon'  type="checkbox" value="true" {$default_module_favicon}>
		</td>
	</tr>
	<tr>
		<td scope="row" width='15%' nowrap>{$MOD.SYSTEM_NAME} </td>
		<td width='35%'>
			<input type='text' name='system_name' value='{$settings.system_name}'>
		</td>


        <td  scope="row" nowrap>{$MOD.LBL_USE_REAL_NAMES}: &nbsp;{sugar_help text=$MOD.LBL_USE_REAL_NAMES_DESC}</td>
        {if !empty($config.use_real_names)}
            {assign var='use_real_names' value='CHECKED'}
        {else}
            {assign var='use_real_names' value=''}
        {/if}
        <td>
            <input type='hidden' name='use_real_names' value='false'>
            <input name='use_real_names'  type="checkbox" value="true" {$use_real_names}>
        </td>
    </tr>
    <tr>
        <td  scope="row" width='12%' nowrap>
        {$MOD.CURRENT_LOGO}&nbsp;{sugar_help text=$MOD.CURRENT_LOGO_HELP}
        </td>
        <td width="35%">
            <div class="company_logo_image_container light-bg">
                <img id="company_logo_image" src="{$company_logo}"
                     alt="{$mod_strings.LBL_LOGO}" />
            </div>
        </td>
        <td  scope="row"> {$MOD.SHOW_DOWNLOADS_TAB}: &nbsp;{sugar_help text=$MOD.SHOW_DOWNLOADS_TAB_HELP} </td>
		{if !isset($config.show_download_tab) || !empty($config.show_download_tab)}
			{assign var='show_download_tab_checked' value='CHECKED'}
		{else}
			{assign var='show_download_tab_checked' value=''}
		{/if}
		<td ><input type='hidden' name='show_download_tab' value='false'><input name='show_download_tab'  type="checkbox" value='true' {$show_download_tab_checked}></td>
    </tr>
    <tr>
        <td  scope="row" width='12%' nowrap>
            {$MOD.NEW_LOGO}&nbsp;{sugar_help text=$MOD.NEW_LOGO_HELP_NO_SPACE}
        </td>
        <td  width='35%'>
            <div id="container_upload"></div>
            <input type="text" id="commit_company_logo" name="commit_company_logo" style="display:none"/>
        </td>
    </tr>
    <tr>
        <td scope="row" nowrap>
            {$MOD.CURRENT_LOGO_DARK}&nbsp;{sugar_help text=$MOD.CURRENT_LOGO_DARK_HELP}
        </td>
        <td>
            <div class="company_logo_image_container dark-bg">
                <img id="company_logo_image_dark" src="{$company_logo_dark}" alt="{$mod_strings.LBL_LOGO_DARK}" />
            </div>
        </td>
    </tr>
    <tr>
        <td scope="row">
            {$MOD.NEW_LOGO_DARK}&nbsp;{sugar_help text=$MOD.NEW_LOGO_HELP_NO_SPACE}
        </td>
        <td>
            <div id="container_upload_dark"></div>
            <input type="text" id="commit_company_logo_dark" name="commit_company_logo_dark" style="display:none"/>
        </td>
    </tr>
    <tr>
        <td scope="row">{$MOD.LBL_LEAD_CONV_OPTION}:&nbsp;{sugar_help text=$MOD.LEAD_CONV_OPT_HELP}</td>
        <td><select name="lead_conv_activity_opt">{$lead_conv_activities}</select></td>
        <td scope="row">{$MOD.COLLAPSE_SUBPANELS}: &nbsp;{sugar_help text=$MOD.LBL_COLLAPSE_SUBPANELS_DESC}</td>
        <td>
            {if !empty($config.collapse_subpanels)}
                {assign var='collapse_subpanels_checked' value='CHECKED'}
            {else}
                {assign var='collapse_subpanels_checked' value=''}
            {/if}
            <input type='hidden' name='collapse_subpanels' value='false'>
            <input type='checkbox' name='collapse_subpanels' value='true' {$collapse_subpanels_checked}>
        </td>
    </tr>
    <tr>
        <td  scope="row" nowrap>{$MOD.LBL_ENABLE_ACTION_MENU}: &nbsp;{sugar_help text=$MOD.LBL_ENABLE_ACTION_MENU_DESC}</td>
    {if isset($config.enable_action_menu) && $config.enable_action_menu != "true" }
        {assign var='enable_action_menu' value=''}
        {else}
        {assign var='enable_action_menu' value='CHECKED'}
    {/if}
        <td>
            <input type='hidden' name='enable_action_menu' value='false'>
            <input name='enable_action_menu'  type="checkbox" value="true" {$enable_action_menu}>
        </td>

        <td  scope="row">{$MOD.LOCK_SUBPANELS}: &nbsp;{sugar_help text=$MOD.LBL_LOCK_SUBPANELS_DESC}</td>
        <td  >
            {if !empty($config.lock_subpanels)}
                {assign var='lock_subpanels_checked' value='CHECKED'}
            {else}
                {assign var='lock_subpanels_checked' value=''}
            {/if}
            <input type='hidden' name='lock_subpanels' value='false'>
            <input type='checkbox' name='lock_subpanels' value='true' {$lock_subpanels_checked}>
        </td>
    </tr>
</table>

{if $proxy_visible}
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">

	<tr>
	<th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_PROXY_TITLE}</h4></th>
	</tr>
	<tr>
	<td width="25%" scope="row" valign='middle'>{$MOD.LBL_PROXY_ON}&nbsp{sugar_help text=$MOD.LBL_PROXY_ON_DESC}</td>
		{if !empty($settings.proxy_on)}
		{assign var='proxy_on_checked' value='CHECKED'}
	{else}
		{assign var='proxy_on_checked' value=''}
	{/if}
	<td width="75%" align="left"  valign='middle' colspan='3'><input type='hidden' name='proxy_on' value='0'><input name="proxy_on" id="proxy_on" value="1" class="checkbox" tabindex='1' type="checkbox" {$proxy_on_checked} onclick='toggleDisplay_2("proxy_config_display")'></td>
	</tr><tr>
	<td colspan="4">
	<div id="proxy_config_display" style='display:{$PROXY_CONFIG_DISPLAY}'>
		<table width="100%" cellpadding="0" cellspacing="1"><tr>
		<td width="15%" scope="row">{$MOD.LBL_PROXY_HOST}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
		<td width="35%" ><input type="text" id="proxy_host" name="proxy_host" size="25"  value="{$settings.proxy_host}" tabindex='1' ></td>
		<td width="15%" scope="row">{$MOD.LBL_PROXY_PORT}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
		<td width="35%" ><input type="text" id="proxy_port" name="proxy_port" size="6"  value="{$settings.proxy_port}" tabindex='1' ></td>
		</tr><tr>
		<td width="15%" scope="row" valign='middle'>{$MOD.LBL_PROXY_AUTH}</td>
	{if !empty($settings.proxy_auth)}
		{assign var='proxy_auth_checked' value='CHECKED'}
	{else}
		{assign var='proxy_auth_checked' value=''}
	{/if}
		<td width="35%" align="left"  valign='middle' ><input type='hidden' name='proxy_auth' value='0'><input id="proxy_auth" name="proxy_auth" value="1" class="checkbox" tabindex='1' type="checkbox" {$proxy_auth_checked} onclick='toggleDisplay_2("proxy_auth_display")'> </td>
		</tr></table>

		<div id="proxy_auth_display" style='display:{$PROXY_AUTH_DISPLAY}'>

		<table width="100%" cellpadding="0" cellspacing="1"><tr>
		<td width="15%" scope="row">{$MOD.LBL_PROXY_USERNAME}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>

		<td width="35%" ><input type="text" id="proxy_username" name="proxy_username" size="25"  value="{$settings.proxy_username}" tabindex='1' ></td>
		<td width="15%" scope="row">{$MOD.LBL_PROXY_PASSWORD}<span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
        <td width="35%" >
           {if !empty($settings.proxy_password)}
               <input type="password" id="proxy_password" name="proxy_password" size="25"  disabled tabindex="1" style="display: none">
               <a href="javascript:void(0)" id="proxy_password_link" onClick="SUGAR.util.setEmailPasswordEdit('proxy_password')">{$APP.LBL_CHANGE_PASSWORD}</a>
           {else}
               <input type="password" id="proxy_password" name="proxy_password" size="25"  value="" tabindex='1' autocomplete="off">
           {/if}
        </td>
		</tr></table>
		</div>
	</div>
  </td>
  </tr>
 </table>
{/if}


<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
    <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_DIALOUT_TITLE}</h4></th>
	</tr>
	<tr>
    <td width="25%" scope="row" valign='middle'>{$MOD.LBL_DIALOUT_ON}&nbsp{sugar_help text=$MOD.LBL_DIALOUT_ON_DESC WIDTH=400}</td>
	{if !empty($settings.system_skypeout_on)}
		{assign var='system_skypeout_on_checked' value='CHECKED'}
	{else}
		{assign var='system_skypeout_on_checked' value=''}
	{/if}
	<td width="75%" align="left"  valign='middle'><input type='hidden' name='system_skypeout_on' value='0'><input name="system_skypeout_on" value="1" class="checkbox" tabindex='1' type="checkbox" {$system_skypeout_on_checked}></td>
	</tr>
 </table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_TWEETTOCASE_TITLE}</h4></th>
    </tr>
    <tr>
        <td width="25%" scope="row" valign='middle'>{$MOD.LBL_TWEETTOCASE_ON}&nbsp{sugar_help text=$MOD.LBL_TWEETTOCASE_ON_DESC WIDTH=400}</td>
        {if !empty($settings.system_tweettocase_on)}
            {assign var='system_tweettocase_on_checked' value='CHECKED'}
        {else}
            {assign var='system_tweettocase_on_checked' value=''}
        {/if}
        <td width="75%" align="left"  valign='middle'><input type='hidden' name='system_tweettocase_on' value='0'><input name="system_tweettocase_on" value="1" class="checkbox" tabindex='1' type="checkbox" {$system_tweettocase_on_checked}></td>
    </tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_PREVIEW_SETTINGS}</h4></th>
    </tr>
    <tr>
        <td width="25%" scope="row" valign='middle'>{$MOD.LBL_PREVIEW_EDIT}&nbsp{sugar_help text=$MOD.LBL_PREVIEW_EDIT_HELP WIDTH=400}</td>
        {if !empty($config.preview_edit)}
            {assign var='preview_edit_checked' value='CHECKED'}
        {else}
            {assign var='preview_edit_checked' value=''}
        {/if}
        <td width="75%" align="left"  valign='middle'>
            <input type='hidden' name='preview_edit' value='false'>
            <input name="preview_edit" value="true" class="checkbox" tabindex='1' type="checkbox" {$preview_edit_checked}>
        </td>
    </tr>
</table>

	<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
		<tr>
			<th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_ACTIVITY_STREAMS_SETTINGS_TITLE}</h4></th>
		</tr>
		<tr>
			<td width="25%" scope="row" valign='middle'>{$MOD.LBL_ACTIVITY_STREAMS_SETTINGS_EDIT}&nbsp{sugar_help text=$MOD.LBL_ACTIVITY_STREAMS_SETTINGS_EDIT_HELP WIDTH=400}</td>
            {if !empty($config.activity_streams_enabled)}
                {assign var='activity_streams_enabled_checked' value='CHECKED'}
            {else}
                {assign var='activity_streams_enabled_checked' value=''}
            {/if}
			<td width="75%" align="left"  valign='middle'>
				<input type='hidden' name='activity_streams_enabled' value='false'>
				<input name="activity_streams_enabled" value="true" class="checkbox" tabindex='1' type="checkbox" {$activity_streams_enabled_checked}>
			</td>
		</tr>
	</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
        <!-- This heading is hard coded because it is NOT intended to be translatable or dynamic -->
        <th align="left" scope="row" colspan="4"><h4>SugarBPM<sup class="heading">TM</sup></h4></th>
	</tr>
	<tr>
		<td width="25%" scope="row">{$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_AUTO_SAVE_INTERVAL}:&nbsp;{sugar_help text=$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_AUTO_SAVE_INTERVAL_HELP}</td>
		<td><select name="processes_auto_save_interval">{$processes_auto_save_options}</select></td>
		<td width="25%" scope="row">{$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_SAVE}&nbsp{sugar_help text=$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_SAVE_HELP WIDTH=400}</td>
	    {if !empty($config.processes_auto_validate_on_autosave)}
	        {assign var='processes_auto_validate_on_autosave_checked' value='CHECKED'}
	    {else}
	        {assign var='processes_auto_validate_on_autosave_checked' value=''}
	    {/if}
	    <td width="25%">
			<input type='hidden' name='processes_auto_validate_on_autosave' value='false'>
			<input name="processes_auto_validate_on_autosave" value="true" class="checkbox" tabindex='1' type="checkbox" {$processes_auto_validate_on_autosave_checked}>
		</td>
	</tr>
	<tr>
		<td width="25%" scope="row">{$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_IMPORT}&nbsp{sugar_help text=$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_IMPORT_HELP WIDTH=400}</td>
	    {if !empty($config.processes_auto_validate_on_import)}
	        {assign var='processes_auto_validate_on_import_checked' value='CHECKED'}
	    {else}
	        {assign var='processes_auto_validate_on_import_checked' value=''}
	    {/if}
	    <td width="25">
			<input type='hidden' name='processes_auto_validate_on_import' value='false'>
			<input name="processes_auto_validate_on_import" value="true" class="checkbox" tabindex='1' type="checkbox" {$processes_auto_validate_on_import_checked}>
		</td>
		<td scope="row">{$MOD.LBL_ADVANCED_WORKFLOW_SETTINGS_CYCLES}  <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
		<td > <input name="error_number_of_cycles" value="{$config.error_number_of_cycles}"></td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
		<th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_COMMENT_LOG_SETTINGS}</h4></th>
	</tr>
	<tr>
		<td width="25%" scope="row">{$MOD.LBL_COMMENT_LOG_MAX_CHARS}</td>
		<td> <input name="commentlog_maxchars" value="{$config.commentlog.maxchars}"></td>
	</tr>
</table>

<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
	<tr>
	<th align="left" scope="row" colspan="4"><h4>{$MOD.ADVANCED}</h4></th>
	</tr>
	<tr>
		<td  scope="row">{$MOD.VERIFY_CLIENT_IP}: </td>
		{if !empty($config.verify_client_ip)}
			{assign var='verify_client_ip_checked' value='CHECKED'}
		{else}
			{assign var='verify_client_ip_checked' value=''}
		{/if}
		<td  ><input type='hidden' name='verify_client_ip' value='false'><input name='verify_client_ip'  type="checkbox" value="1" {$verify_client_ip_checked}></td>

		<td  scope="row">{$MOD.LOG_MEMORY_USAGE}: </td>
		{if !empty($config.log_memory_usage)}
			{assign var='log_memory_usage_checked' value='CHECKED'}
		{else}
			{assign var='log_memory_usage_checked' value=''}
		{/if}
		<td  ><input type='hidden' name='log_memory_usage' value='false'><input name='log_memory_usage'  type="checkbox" value='true' {$log_memory_usage_checked}></td>

	</tr>
	<tr>
		<td  scope="row">{$MOD.LOG_SLOW_QUERIES}: </td>
		{if !empty($config.dump_slow_queries)}
			{assign var='dump_slow_queries_checked' value='CHECKED'}
		{else}
			{assign var='dump_slow_queries_checked' value=''}
		{/if}
		<td ><input type='hidden' name='dump_slow_queries' value='false'><input name='dump_slow_queries'  type="checkbox" value='true' {$dump_slow_queries_checked}></td>

		<td  scope="row">{$MOD.SLOW_QUERY_TIME_MSEC}: </td>
		<td  >
			<input type='text' size='5' name='slow_query_time_msec' value='{$config.slow_query_time_msec}'>
		</td>

	</tr>
	<tr>
		<td  scope="row">{$MOD.UPLOAD_MAX_SIZE}: </td>
		<td  >
			<input type='text' size='8' name='upload_maxsize' value='{$config.upload_maxsize}'>&nbsp;{$MOD.UPLOAD_MAXSIZE_UNITS}
		</td>
		<td  scope="row">{$MOD.STACK_TRACE_ERRORS}: </td>
		{if !empty($config.stack_trace_errors)}
			{assign var='stack_trace_errors_checked' value='CHECKED'}
		{else}
			{assign var='stack_trace_errors_checked' value=''}
		{/if}
		<td ><input type='hidden' name='stack_trace_errors' value='false'><input name='stack_trace_errors'  type="checkbox" value='true' {$stack_trace_errors_checked}></td>



	</tr>

	<tr>
		<td  scope="row">{$MOD.SESSION_TIMEOUT}:&nbsp;{sugar_help text=$MOD.LBL_SESSION_TIMEOUT_TOOLTIP}</td>
		<td  >
			<input type='text' size='8' name='system_session_timeout' value='{$SESSION_TIMEOUT}'>&nbsp;{$MOD.SESSION_TIMEOUT_UNITS}
		</td>
		{if $developer_mode_visible}
		<td  scope="row">{$MOD.DEVELOPER_MODE}: </td>
		{if !empty($config.developerMode)}
			{assign var='developerModeChecked' value='CHECKED'}
		{else}
			{assign var='developerModeChecked' value=''}
		{/if}
		<td ><input type='hidden' name='developerMode' value='false'><input name='developerMode'  type="checkbox" value='true' {$developerModeChecked}></td>
		{/if}
	</tr>
	<tr>
		<td scope="row">{$MOD.LBL_VCAL_PERIOD} {sugar_help text=$MOD.vCAL_HELP}</td>
		<td >
			<input type='text' size='4' name='vcal_time' value='{$config.vcal_time}'>
		</td>
        <td scope="row">{$MOD.LBL_IMPORT_MAX_RECORDS} {sugar_help text=$MOD.LBL_IMPORT_MAX_RECORDS_HELP}</td>
		<td >
			<input type='text' size='4' name='import_max_records_total_limit' value='{$config.import_max_records_total_limit}'>
		</td>

	</tr>
    <tr>
        <td  scope="row">{$MOD.LBL_NO_PRIVATE_TEAM_UPDATE}: </td>
        {if !empty($config.noPrivateTeamUpdate)}
            {assign var='noPrivateTeamUpdateChecked' value='CHECKED'}
        {else}
            {assign var='noPrivateTeamUpdateChecked' value=''}
        {/if}
        <td ><input type='hidden' name='noPrivateTeamUpdate' value='false'><input name='noPrivateTeamUpdate'  type="checkbox" value='true' {$noPrivateTeamUpdateChecked}></td>
    </tr>




</table>

<table  width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
{if $logger_visible}
<tr>
<th align="left" scope="row" colspan="6"><h4>{$MOD.LBL_LOGGER}</h4></th>
</tr>
	<tr>
		<td  scope="row" valign='middle'>{$MOD.LBL_LOGGER_FILENAME} <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
		<td   valign='middle' ><input type='text' name = 'logger_file_name'  value="{$config.logger.file.name}"></td>
		<td scope="row">{$MOD.LBL_LOGGER_FILENAME_SUFFIX}</td>
		<td ><select name = "logger_file_suffix" selected='{$config.logger.file.suffix}'>{$filename_suffix}</select></td>
	</tr>
	<tr>
		<td scope="row">{$MOD.LBL_LOGGER_MAX_LOG_SIZE}  <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
		<td > <input name="logger_file_maxSize" size="4" value="{$config.logger.file.maxSize}"></td>
		<td scope="row">{$MOD.LBL_LOGGER_DEFAULT_DATE_FORMAT}</td>
		<td  ><input name ="logger_file_dateFormat" type="text" value="{$config.logger.file.dateFormat}"></td>
	</tr>
	<tr>
		<td scope="row">{$MOD.LBL_LOGGER_LOG_LEVEL} </td>
		<td > <select name="logger_level">{$log_levels}</select></td>
		<td scope="row">{$MOD.LBL_LOGGER_MAX_LOGS}  <span class="required">{$APP.LBL_REQUIRED_SYMBOL}</span></td>
		<td > <input name="logger_file_maxLogs" value="{$config.logger.file.maxLogs}"></td>
	</tr>
{/if}
	<tr>
	    <td><a href="index.php?module=Configurator&action=LogView" target="_blank">{$MOD.LBL_LOGVIEW}</a></td>
	</tr>
</table>

{if $SHOW_CATALOG_CONFIG}
<table width="100%" border="0" cellspacing="1" cellpadding="0" class="edit view">
    <tr>
        <th align="left" scope="row" colspan="4"><h4>{$MOD.LBL_SUGAR_CATALOG_SETTINGS}</h4></th>
    </tr>
	<tr>
		<td width="25%" scope="row">{$MOD.LBL_SUGAR_CATALOG_ENABLED}</td>
		{if !empty($config.catalog_enabled)}
			{assign var='catalogChecked' value='CHECKED'}
		{else}
			{assign var='catalogChecked' value=''}
		{/if}
		<td><input type='hidden' name='catalog_enabled' value='false'><input name='catalog_enabled'  type="checkbox" value='true' {$catalogChecked}></td>
	</tr>
	<tr>
		<td width="25%" scope="row">{$MOD.LBL_SUGAR_CATALOG_URL}</td>
		<td><input style="width:40%" name="catalog_url" value="{$config.catalog_url}"></td>
	</tr>
</table>
{/if}

<div style="padding-top: 2px;">
<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" class="button primary"  type="submit" name="save" value="  {$APP.LBL_SAVE_BUTTON_LABEL}  " class="button primary"/>
		<!-- &nbsp;<input title="{$MOD.LBL_SAVE_BUTTON_TITLE}"  class="button"  type="submit" name="restore" value="  {$MOD.LBL_RESTORE_BUTTON_LABEL} " /> -->
		&nbsp;<input title="{$MOD.LBL_CANCEL_BUTTON_TITLE}"  onclick={literal}"parent.SUGAR.App.router.navigate('#Administration', {trigger: true})"{/literal} class="button"  type="button" name="cancel" value="  {$APP.LBL_CANCEL_BUTTON_LABEL}  " />
</div>
{$JAVASCRIPT}

</form>
<div id='upload_panel' style="display:none">
    <form id="upload_form" name="upload_form" method="POST" action='index.php' enctype="multipart/form-data">
        {sugar_csrf_form_token}
        <input type="file" id="my_file_company" name="file_1" size="20" onchange="uploadCheck(false)"/>
        {sugar_getimage name="sqsWait" ext=".gif" alt=$mod_strings.LBL_LOADING other_attributes='id="loading_img_company" style="display:none" '}
    </form>
</div>
<div id='upload_panel_dark' style="display:none">
    <form id="upload_form_dark" name="upload_form_dark" method="POST" action='index.php' enctype="multipart/form-data">
        {sugar_csrf_form_token}
        <input type="file" id="my_file_company_dark" name="file_dark" size="20" onchange="uploadCheck(true)"/>
        {sugar_getimage name="sqsWait" ext=".gif" alt=$mod_strings.LBL_LOADING other_attributes='id="loading_img_company_dark" style="display:none" '}
    </form>
</div>
<script type='text/javascript'>
function init_logo(){
    var uploadPanel = document.getElementById('upload_panel');
    var uploadPanelDark = document.getElementById('upload_panel_dark');
    uploadPanel.style.display = 'inline';
    uploadPanel.style.position = 'absolute';
    uploadPanelDark.style.display = 'inline';
    uploadPanelDark.style.position = 'absolute';
    YAHOO.util.Dom.setX('upload_panel', YAHOO.util.Dom.getX('container_upload'));
    YAHOO.util.Dom.setY('upload_panel', YAHOO.util.Dom.getY('container_upload') - 1);
    YAHOO.util.Dom.setX('upload_panel_dark', YAHOO.util.Dom.getX('container_upload_dark'));
    YAHOO.util.Dom.setY('upload_panel_dark', YAHOO.util.Dom.getY('container_upload_dark') - 1);
}

// Initialize the file upload container placement on page load and resize
$(window).on('load resize', init_logo);
$(window).unload(function() {
    $(window).off('load resize', init_logo);
});

function toggleDisplay_2(div_string){
    toggleDisplay(div_string);
    init_logo();
}
 function uploadCheck(isDarkMode){
    //AJAX call for checking the file size and comparing with php.ini settings.
    var fileElName = isDarkMode ? 'my_file_company_dark' : 'my_file_company';
    var commitCompanyLogoName = isDarkMode ? 'commit_company_logo_dark' : 'commit_company_logo';
    var companyLogoImageName = isDarkMode ? 'company_logo_image_dark' : 'company_logo_image';
    var uploadFormName = isDarkMode ? 'upload_form_dark' : 'upload_form';
    var loadingImageName = isDarkMode ? 'loading_img_company_dark' : 'loading_img_company';

    var callback = {
        upload:function(r) {
            var file_type = JSON.parse(r.responseText);
            var bad_image = SUGAR.language.get('Configurator', 'LBL_ALERT_TYPE_IMAGE');

            document.getElementById('loading_img_company').style.display = 'none';
            document.getElementById('loading_img_company_dark').style.display = 'none';

            switch (file_type['data']) {
                case 'other':
                    alert(bad_image);
                    document.getElementById(fileElName).value = '';
                    break;
                case 'size':
                    alert(SUGAR.language.get('Configurator', 'LBL_ALERT_SIZE_RATIO'));
                    document.getElementById(commitCompanyLogoName).value = '1';
                    document.getElementById(companyLogoImageName).src = file_type['url'];
                    break;
                case 'file_error':
                    alert(SUGAR.language.get('Configurator', 'ERR_ALERT_FILE_UPLOAD'));
                    document.getElementById(fileElName).value = '';
                    break;
                //File good
                case 'ok':
                    document.getElementById(commitCompanyLogoName).value = '1';
                    document.getElementById(companyLogoImageName).src = file_type['url'];
                    break;
                //error in getimagesize because unsupported type
                default:
                    alert(bad_image);
                    document.getElementById(fileElName).value = '';
            }
        },
        failure:function(r){
            alert(SUGAR.language.get('app_strings','LBL_AJAX_FAILURE'));
        }
    }

    document.getElementById(commitCompanyLogoName).value = '';
    document.getElementById(loadingImageName).style.display="inline";

    var file_name = document.getElementById(fileElName).value;
    var postData = '&entryPoint=UploadFileCheck&csrf_token=' + SUGAR.csrf.form_token;
    YAHOO.util.Connect.setForm(document.getElementById(uploadFormName), true, true);
    if (file_name) {
        if (postData.substring(0,1) == '&') {
            postData=postData.substring(1);
        }
        YAHOO.util.Connect.asyncRequest('POST', 'index.php', callback, postData);
    }
}
</script>
