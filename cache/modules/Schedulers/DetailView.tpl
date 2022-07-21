

<script type="text/javascript" src="{sugar_getjspath file='include/EditView/Panels.js'}"></script>
<script language="javascript">
SUGAR.util.doWhen(function(){
    return $("#contentTable").length == 0 && YAHOO.util.Event.DOMReady;
}, SUGAR.themes.actionMenu);
</script>


<table cellpadding="0" cellspacing="0" border="0" width="100%" id="">
<tr>
<td class="buttons" align="left" NOWRAP width="80%">
<div class="actionsContainer">
    
    
    

    

<form action="index.php" method="post" name="DetailView" id="formDetailView">
{sugar_csrf_form_token}
    <input type="hidden" name="module" value="{$module}">
    <input type="hidden" name="record" value="{$fields.id.value}">
    <input type="hidden" name="return_action">
    <input type="hidden" name="return_module">
    <input type="hidden" name="return_id">
    <input type="hidden" name="module_tab">
    <input type="hidden" name="isDuplicate" value="false">
    <input type="hidden" name="offset" value="{$offset}">
    <input type="hidden" name="action" value="EditView">
    <input type="hidden" name="sugar_body_only">
</form>
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->ACLAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='DuplicateView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='Schedulers'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Schedulers", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>

</div>

</td>


<td align="right" width="20%">{$ADMIN_EDIT}
		    					{$PAGINATION}
				
	</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="Schedulers_detailview_tabs"
>
        <div >


  
                <div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}


    	  <table id='DEFAULT' class="panelContainer" cellspacing='{$gridline}'>



		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.name.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.name.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if} 
<span class="sugar_field" id="{$fields.name.name}">{$fields.name.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.status.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.status.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.status.hidden}
			    				
									{counter name="panelFieldCount"}
					

{if is_string($fields.status.options)}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{$fields.status.options}">
{$fields.status.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.status.name}" value="{$fields.status.value}">
    {assign var="field_options" value=$fields.status.options }
    {assign var="field_val" value=$fields.status.value }
    {$field_options[$field_val]}
{/if}

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.date_time_start.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.date_time_start.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME_START' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.date_time_start.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.date_time_start.value) <= 0}
{assign var="value" value=$fields.date_time_start.default_value }
{else}
{assign var="value" value=$fields.date_time_start.value }
{/if} 
<span class="sugar_field" id="{$fields.date_time_start.name}">{$fields.date_time_start.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.time_from.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.time_from.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_TIME_FROM' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.time_from.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="time_from" class="sugar_field">{$fields.time_from.value|default:$MOD.LBL_ALWAYS}</span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.date_time_end.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.date_time_end.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_TIME_END' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.date_time_end.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.date_time_end.value) <= 0}
{assign var="value" value=$fields.date_time_end.default_value }
{else}
{assign var="value" value=$fields.date_time_end.value }
{/if} 
<span class="sugar_field" id="{$fields.date_time_end.name}">{$fields.date_time_end.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.time_to.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.time_to.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_TIME_TO' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.time_to.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="time_to" class="sugar_field">{$fields.time_to.value|default:$MOD.LBL_ALWAYS}</span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.last_run.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.last_run.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_LAST_RUN' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.last_run.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="last_run" class="sugar_field">{$fields.last_run.value|default:$MOD.LBL_NEVER}</span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.job_interval.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.job_interval.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_INTERVAL' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.job_interval.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="job_interval" class="sugar_field">{$JOB_INTERVAL}</span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.catch_up.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.catch_up.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_CATCH_UP' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.catch_up.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strval($fields.catch_up.value) == "1" || strval($fields.catch_up.value) == "yes" || strval($fields.catch_up.value) == "on"} 
{assign var="checked" value="CHECKED"}
{else}
{assign var="checked" value=""}
{/if}
<input type="checkbox" class="checkbox" name="{$fields.catch_up.name}" id="{$fields.catch_up.name}" value="$fields.catch_up.value" disabled="true" {$checked}>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.job.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.job.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_JOB' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.job.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.job.value) <= 0}
{assign var="value" value=$fields.job.default_value }
{else}
{assign var="value" value=$fields.job.value }
{/if} 
<span class="sugar_field" id="{$fields.job.name}">{$fields.job.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.date_entered.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.date_entered.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_ENTERED' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.date_entered.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="date_entered" class="sugar_field">{$fields.date_entered.value} {$APP.LBL_BY} {$fields.created_by_name.value|escape:"html":"UTF-8"}&nbsp;</span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.date_modified.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.date_modified.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DATE_MODIFIED' module='Schedulers'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.date_modified.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="date_modified" class="sugar_field">{$fields.date_modified.value} {$APP.LBL_BY} {$fields.modified_by_name.value|escape:"html":"UTF-8"}&nbsp;</span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		</table>
    </div>
{if $panelFieldCount == 0}

<script>document.getElementById("DEFAULT").style.display='none';</script>
{/if}

</div>
</div>

</form>
<script>SUGAR.util.doWhen("document.getElementById('form') != null",
        function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script><script type="text/javascript">
SUGAR.util.doWhen("typeof collapsePanel == 'function'",
        function(){ldelim}
            var sugar_panel_collase = Get_Cookie("sugar_panel_collase");
            if(sugar_panel_collase != null) {ldelim}
                sugar_panel_collase = YAHOO.lang.JSON.parse(sugar_panel_collase);
                for(panel in sugar_panel_collase['Schedulers_d'])
                    if(sugar_panel_collase['Schedulers_d'][panel])
                        collapsePanel(panel);
                    else
                        expandPanel(panel);
            {rdelim}
        {rdelim});
</script>
{literal}
<script type=text/javascript>
SUGAR.util.doWhen('!SUGAR.util.ajaxCallInProgress()', function(){
SUGAR.forms.AssignmentHandler.registerView('DetailView');
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"schedulers_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"schedulers_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"scheduler_activities","module":"Activities"},"schedulers_times":{"relationship":"schedulers_jobs_rel","module":"SchedulersJobs"},"following_link":{"relationship":"schedulers_following"},"favorite_link":{"relationship":"schedulers_favorite"},"commentlog_link":{"relationship":"schedulers_commentlog"},"locked_fields_link":{"relationship":"schedulers_locked_fields"}}
var job_url_visdep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['job_function'], 'true'), [new SUGAR.forms.SetVisibilityAction('job_url','equal($job_function, "url::")', '')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
