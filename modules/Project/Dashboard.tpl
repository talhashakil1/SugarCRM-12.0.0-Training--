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
<script type="text/javascript">
	var resourceArray = new Array();
	{foreach from=$RESOURCES item="RESOURCE" }
		resourceArray['{$RESOURCE->id}'] = "{$RESOURCE->full_name}";
	{/foreach}
	
	function populateResourceName(resourceId, divId) {
		if (resourceArray[resourceId]) {
			alert(document.getElementById(divId).innerHMTL);
			document.getElementById(divId).innerHMTL = resourceArray[resourceId];
		}
	}
</script>

{if $PROJECTS}
	<table cellspacing="1" class="other view">	
		<tr height="25" >
			<th width="10%">{$MOD.LBL_MODULE_NAME}</th>
			<th width="40%">{$MOD.LBL_LIST_OVERDUE_TASKS}</th>
			<th width="40%">{$MOD.LBL_LIST_UPCOMING_TASKS}</th>
			<th width="10%">{$MOD.LBL_LIST_OPEN_CASES}</th>
	
		</tr>
		{foreach from=$PROJECTS item="PROJECT" }
		{assign var=project_id value=$PROJECT->id}
		<tr valign="top">
			<td scope="row"><a href="index.php?module=Project&action=DetailView&record={$PROJECT->id}&return_module=Project&return_action=DetailView">{$PROJECT->name}</a><br/>{$PROJECT->estimated_end_date}</td>
			<td>
				<table cellspacing="0" class="other view">
					{foreach from=$OVERDUE_TASKS item="OVERDUE_TASKS_FOR_PROJECT" key="PROJECT_KEY"}
						{if $PROJECT_KEY == $PROJECT->id}
							{foreach from=$OVERDUE_TASKS_FOR_PROJECT item="OVERDUE_TASK"}
								{assign var=resource_id value=$OVERDUE_TASK->resource_id}
								<tr valign="top">
									<td width="55%" valign="top"><a  href="index.php?module=Project&action=EditGridView&record={$PROJECT->id}&return_module=Project&return_action=DetailView">{$OVERDUE_TASK->name}</a>{if $OVERDUE_TASK->milestone_flag == 1}&nbsp;*{/if}</td>
									<td width="30%" valign="top" align="left">{$RESOURCES[$resource_id]}</td>
									<td align="right" valign="top">{$OVERDUE_TASK->date_finish}</td>
								</tr>
							{/foreach}
						{/if}
					{/foreach}
					{if $OVERDUE_TASKS_COUNT[$project_id] > 10}
						<tr valign="top">
							<td colspan=3><a href="index.php?module=Project&action=EditGridView&record={$PROJECT->id}&return_module=Project&return_action=DetailView">
							{$MOD.LBL_MORE}</a></td>
						</tr>
					{/if}
				</table>{if $OVERDUE_TASKS_COUNT[$project_id] == 0}&nbsp;{/if}
			</td>
			<td>
				<table cellspacing="0" class="other view">
					{foreach from=$UPCOMING_TASKS item="UPCOMING_TASKS_FOR_PROJECT" key="PROJECT_KEY"}
						{if $PROJECT_KEY == $PROJECT->id}
							{foreach from=$UPCOMING_TASKS_FOR_PROJECT item="UPCOMING_TASK"}
								{assign var=resource_id value=$UPCOMING_TASK->resource_id}
								<tr valign="top">
									<td width="55%" valign="top"><a   href="index.php?module=Project&action=EditGridView&record={$PROJECT->id}&return_module=Project&return_action=DetailView">{$UPCOMING_TASK->name}</a>{if $UPCOMING_TASK->milestone_flag == 1}&nbsp;*{/if}</td>
									<td width="30%"valign="top" >{$RESOURCES[$resource_id]}</td>
									<td align="right" valign="top">{$UPCOMING_TASK->date_finish}</td>
								</tr>
							{/foreach}
						{/if}
					{/foreach}
					{if $UPCOMING_TASKS_COUNT[$project_id] > 10}
						<tr>
							<td colspan=3><a href="index.php?module=Project&action=EditGridView&record={$PROJECT->id}&return_module=Project&return_action=DetailView">
							{$MOD.LBL_MORE}</a></td>
						</tr>
					{/if}					
				</table>{if $UPCOMING_TASKS_COUNT[$project_id] == 0}&nbsp;{/if}
			</td>
			<td>
				<table cellspacing="0" class="other view">
					{foreach from=$OPEN_CASES item="OPEN_CASES_FOR_PROJECT" key="PROJECT_KEY"}
						{if $PROJECT_KEY == $PROJECT->id}
							{foreach from=$OPEN_CASES_FOR_PROJECT item="OPEN_CASE"}
								<tr valign="top">
									<td width="50%" valign="top"><a   href="index.php?module=Cases&action=DetailView&record={$OPEN_CASE->id}&return_module=Project&return_action=DetailView">{$OPEN_CASE->case_number}</a></td>
								</tr>
							{/foreach}
						{/if}
					{/foreach}
					{if $OPEN_CASES_COUNT[$project_id] > 10}
						<tr>
							<td colspan=3><a href="index.php?module=Project&action=EditGridView&record={$PROJECT->id}&return_module=Project&return_action=DetailView">
							{$MOD.LBL_MORE}</a></td>
						</tr>
					{/if}					
				</table>{if $OPEN_CASES_COUNT[$project_id] == 0}&nbsp;{/if}
			</td>
		</tr>
		{/foreach}
	</table>
{/if}

<br />

{if $MY_OVERDUE_TASKS || $MY_UPCOMING_TASKS}
<h2>{$MOD.LBL_MY_PROJECT_TASKS}</h1>
	<table width="70%" cellspacing="0" class="other view">	
		<tr height="25">
			<th width="50%" align="center">{$MOD.LBL_LIST_OVERDUE_TASKS}</th>
			<th width="50%" align="center">{$MOD.LBL_LIST_UPCOMING_TASKS}</th>
		</tr>
		<tr valign="top">
			<td scope="row">
				<table cellspacing="0" class="other view">
					{foreach from=$MY_OVERDUE_TASKS item="MY_OVERDUE_TASK"}
						{if $MY_OVERDUE_TASK->name != ""}
						<tr valign="top">
							<td width="70%"><a href="index.php?module=Project&action=EditGridView&record={$MY_OVERDUE_TASK->project_id}&return_module=Project&return_action=DetailView">{$MY_OVERDUE_TASK->name}</a>{if $MY_OVERDUE_TASK->milestone_flag == 1}&nbsp;*{/if}</td>
							<td align="right">{$MY_OVERDUE_TASK->date_finish}</td>
						</tr>
						{/if}
					{/foreach}
				</table>&nbsp;
			</td>
			<td>
				<table cellspacing="0" class="other view">
					{foreach from=$MY_UPCOMING_TASKS item="MY_UPCOMING_TASK"}
						{if $MY_UPCOMING_TASK->name != ""}
						<tr valign="top">
							<td width="70%"><a href="index.php?module=Project&action=EditGridView&record={$MY_UPCOMING_TASK->project_id}&return_module=Project&return_action=DetailView">{$MY_UPCOMING_TASK->name}</a>{if $MY_UPCOMING_TASK->milestone_flag == 1}&nbsp;*{/if}</td>
							<td align="right">{$MY_UPCOMING_TASK->date_finish}</td>
						</tr>
						{/if}
					{/foreach}
				</table>&nbsp;
			</td>		
		</tr>
	</table>
{/if}


{if !$MY_OVERDUE_TASKS && !$MY_UPCOMING_TASKS && !$PROJECTS}
	<b>{$MOD.NTC_NO_ACTIVE_PROJECTS}</b>
{/if}
