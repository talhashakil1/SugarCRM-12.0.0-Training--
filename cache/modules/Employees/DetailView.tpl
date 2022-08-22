

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
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $DISPLAY_EDIT}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='{$module}'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';_form.submit();" id="edit_button" name="Edit" type="button" value="{$APP.LBL_EDIT_BUTTON_LABEL}"/>{/if}<ul id class="subnav" ><li>{if $DISPLAY_DUPLICATE}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView');_form.return_module.value='{$module}'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.isDuplicate.value=true; _form.action.value='EditView';_form.submit();" name="Duplicate" id="duplicate_button" type="button" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}"/>{/if}</li><li>{if $DISPLAY_DELETE}<input title="{$APP.LBL_DELETE_BUTTON_LABEL}" accessKey="{$APP.LBL_DELETE_BUTTON_LABEL}" class="button" onclick="var _form = document.getElementById('formDetailView');if( confirm('{$DELETE_WARNING}') ) {ldelim} _form.return_module.value='{$module}'; _form.return_action.value='index'; _form.return_id.value='{$id}'; _form.action.value='delete'; _form.submit();{rdelim};" name="Delete" id="delete_button" type="button" value="{$APP.LBL_DELETE_BUTTON_LABEL}"/>{/if}</li><li>{sugar_button module="$module" id="REALPDFVIEW" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{sugar_button module="$module" id="REALPDFEMAIL" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Employees", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}</li></ul></li></ul>

</div>

</td>


<td align="right" width="20%">{$ADMIN_EDIT}
		    					{$PAGINATION}
				
	</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="Employees_detailview_tabs"
>
        <div >


  
                <div id='detailpanel_1' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}


    	  <table id='' class="panelContainer" cellspacing='{$gridline}'>



		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.employee_status.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.employee_status.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_EMPLOYEE_STATUS' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.employee_status.hidden}
			    				
									{counter name="panelFieldCount"}
					

{if is_string($fields.employee_status.options)}
<input type="hidden" class="sugar_field" id="{$fields.employee_status.name}" value="{$fields.employee_status.options}">
{$fields.employee_status.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.employee_status.name}" value="{$fields.employee_status.value}">
    {assign var="field_options" value=$fields.employee_status.options }
    {assign var="field_val" value=$fields.employee_status.value }
    {$field_options[$field_val]}
{/if}

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.picture.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.picture.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_PICTURE_FILE' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.picture.hidden}
			    				
									{counter name="panelFieldCount"}
					
<input type="hidden" class="sugar_field" id="{$fields.picture.name}" value="$fields.picture.value">
{if isset($displayParams.link)}
<a href=''>
{else}
<a href="javascript:SUGAR.image.lightbox(YAHOO.util.Dom.get('img_{$fields.picture.name}').src)">
{/if}
<img
	id="img_{$fields.picture.name}" 
	name="img_{$fields.picture.name}" 
		{if empty($fields.picture.value)}
	   src='' 	
	{else}
	   src='index.php?entryPoint=download&id={$fields.picture.value}&type=SugarFieldImage&isTempFile=1'
	{/if}
		style='
		{if empty($fields.picture.value)}
			display:	none;
		{/if}
		{if "" eq ""}
			border: 0; 
		{else}
			border: 1px solid black; 
		{/if}
		{if "42" eq ""}
			width: auto;
		{else}
			width: 42px;
		{/if}
		{if "42" eq ""}
			height: auto;
		{else}
			height: 42px;
		{/if}
		'		
>
</a>

												
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
							    	    			{if $fields.first_name.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.first_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.first_name.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="first_name" class="sugar_field">{$fields.full_name.value}</span>
												
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
							    	    			{if $fields.title.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.title.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.title.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.title.value) <= 0}
{assign var="value" value=$fields.title.default_value }
{else}
{assign var="value" value=$fields.title.value }
{/if} 
<span class="sugar_field" id="{$fields.title.name}">{$fields.title.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.phone_work.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_work.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_OFFICE_PHONE' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  class="phone">
			    			    {if !$fields.phone_work.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_work.value)}
{assign var="phone_value" value=$fields.phone_work.value }

{sugar_phone value=$phone_value usa_format="0"}

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
							    	    			{if $fields.department.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.department.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DEPARTMENT' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.department.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.department.value) <= 0}
{assign var="value" value=$fields.department.default_value }
{else}
{assign var="value" value=$fields.department.value }
{/if} 
<span class="sugar_field" id="{$fields.department.name}">{$fields.department.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.phone_mobile.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_mobile.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_MOBILE_PHONE' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  class="phone">
			    			    {if !$fields.phone_mobile.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_mobile.value)}
{assign var="phone_value" value=$fields.phone_mobile.value }

{sugar_phone value=$phone_value usa_format="0"}

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
							    	    			{if $fields.reports_to_name.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.reports_to_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_REPORTS_TO_NAME' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.reports_to_name.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="reports_to_name" class="sugar_field"><a href="index.php?module=Employees&action=DetailView&record={$fields.reports_to_id.value}">{$fields.reports_to_name.value}</a></span>
												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.phone_other.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_other.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_OTHER' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  class="phone">
			    			    {if !$fields.phone_other.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_other.value)}
{assign var="phone_value" value=$fields.phone_other.value }

{sugar_phone value=$phone_value usa_format="0"}

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
							    	    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
												   &nbsp;
				                                                			</td>
			<td width='37.5%'  >
			    				
												
							</td>
							    	    			{if $fields.phone_fax.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_fax.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_FAX' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  class="phone">
			    			    {if !$fields.phone_fax.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_fax.value)}
{assign var="phone_value" value=$fields.phone_fax.value }

{sugar_phone value=$phone_value usa_format="0"}

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
							    	    			{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
												   &nbsp;
				                                                			</td>
			<td width='37.5%'  >
			    				
												
							</td>
							    	    			{if $fields.phone_home.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.phone_home.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_HOME_PHONE' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  class="phone">
			    			    {if !$fields.phone_home.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if !empty($fields.phone_home.value)}
{assign var="phone_value" value=$fields.phone_home.value }

{sugar_phone value=$phone_value usa_format="0"}

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
							    	    			{if $fields.messenger_type.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.messenger_type.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_TYPE' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.messenger_type.hidden}
			    				
									{counter name="panelFieldCount"}
					

{if is_string($fields.messenger_type.options)}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{$fields.messenger_type.options}">
{$fields.messenger_type.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.messenger_type.name}" value="{$fields.messenger_type.value}">
    {assign var="field_options" value=$fields.messenger_type.options }
    {assign var="field_val" value=$fields.messenger_type.value }
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
							    	    			{if $fields.messenger_id.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.messenger_id.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_MESSENGER_ID' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.messenger_id.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.messenger_id.value) <= 0}
{assign var="value" value=$fields.messenger_id.default_value }
{else}
{assign var="value" value=$fields.messenger_id.value }
{/if} 
<span class="sugar_field" id="{$fields.messenger_id.name}">{$fields.messenger_id.value}</span>

												
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
							    	    			{if $fields.address_country.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.address_country.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_ADDRESS' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.address_country.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="address_country" class="sugar_field">{$fields.address_street.value}<br>{$fields.address_city.value} {$fields.address_state.value}&nbsp;&nbsp;{$fields.address_postalcode.value}<br>{$fields.address_country.value}</span>
												
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
							    	    			{if $fields.description.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.description.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_NOTES' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.description.hidden}
			    				
									{counter name="panelFieldCount"}
					
<span class="sugar_field" id="{$fields.description.name|escape:'html'|url2html|nl2br}">{$fields.description.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}</span>

												
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
							    	    			{if $fields.email.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.email.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_EMAIL' module='Employees'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.email.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id='email_span'>
{$fields.email.value}
</span>
												
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

<script>document.getElementById("").style.display='none';</script>
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
                for(panel in sugar_panel_collase['Employees_d'])
                    if(sugar_panel_collase['Employees_d'][panel])
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
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"employees_created_by","module":"Users","id_name":"created_by"},"business_centers":{"relationship":"business_center_users","id_name":"business_center_id","module":"BusinessCenters"},"shifts":{"relationship":"shifts_users","module":"Shifts"},"shift_exceptions":{"relationship":"shift_exceptions_users","module":"ShiftExceptions"},"users_signatures":{"relationship":"users_users_signatures"},"calls":{"relationship":"calls_users"},"message_invites":{"relationship":"messages_users"},"kbusefulness":{"relationship":"kbusefulness"},"meetings":{"relationship":"meetings_users"},"contacts_sync":{"relationship":"contacts_users"},"reports_to_link":{"relationship":"user_direct_reports","id_name":"reports_to_id","module":"Users"},"reportees":{"relationship":"user_direct_reports"},"email_addresses":{"relationship":"users_email_addresses","module":"EmailAddress"},"email_addresses_primary":{"relationship":"users_email_addresses_primary"},"aclroles":{"relationship":"acl_roles_users"},"prospect_lists":{"relationship":"prospect_list_users","module":"ProspectLists"},"holidays":{"relationship":"users_holidays"},"eapm":{"relationship":"eapm_assigned_user"},"oauth_tokens":{"relationship":"oauthtokens_assigned_user","module":"OAuthTokens"},"project_resource":{"relationship":"projects_users_resources"},"quotas":{"relationship":"users_quotas"},"forecasts":{"relationship":"users_forecasts"},"reportschedules":{"relationship":"reportschedules_users"},"activities":{"relationship":"activities_users","module":"Activities"},"acl_role_sets":{"relationship":"users_acl_role_sets"}}

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
