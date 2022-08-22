

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
<ul id="detail_header_action_menu" class="clickMenu fancymenu" name ><li class="sugar_action_button" >{if $bean->aclAccess("edit")}<input title="{$APP.LBL_EDIT_BUTTON_TITLE}" accessKey="{$APP.LBL_EDIT_BUTTON_KEY}" class="button primary" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PdfManager'; _form.return_action.value='DetailView'; _form.return_id.value='{$id}'; _form.action.value='EditView';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Edit" id="edit_button" value="{$APP.LBL_EDIT_BUTTON_LABEL}">{/if} <ul id class="subnav" ><li>{if $bean->ACLAccess("edit")}<input title="{$APP.LBL_DUPLICATE_BUTTON_TITLE}" accessKey="{$APP.LBL_DUPLICATE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PdfManager'; _form.return_action.value='DetailView'; _form.isDuplicate.value=true; _form.action.value='DuplicateView'; _form.return_id.value='{$id}';SUGAR.ajaxUI.submitForm(_form);" type="button" name="Duplicate" value="{$APP.LBL_DUPLICATE_BUTTON_LABEL}" id="duplicate_button">{/if} </li><li>{if $bean->aclAccess("delete")}<input title="{$APP.LBL_DELETE_BUTTON_TITLE}" accessKey="{$APP.LBL_DELETE_BUTTON_KEY}" class="button" onclick="var _form = document.getElementById('formDetailView'); _form.return_module.value='PdfManager'; _form.return_action.value='ListView'; _form.action.value='Delete'; if(confirm('{$APP.NTC_DELETE_CONFIRMATION}')) SUGAR.ajaxUI.submitForm(_form);" type="submit" name="Delete" value="{$APP.LBL_DELETE_BUTTON_LABEL}" id="delete_button">{/if} </li><li><input type="button" value="{$MOD.LBL_PREVIEW}" name="pdf_preview" onclick="document.location='index.php?module=PdfManager&record={$fields.id.value}&action=sugarpdf&sugarpdf=pdfmanager&pdf_template_id={$fields.id.value}&pdf_preview=1'" class="button" title="{$MOD.LBL_PREVIEW}" id="pdf_preview"/></li><li>{sugar_button module="$module" id="REALPDFVIEW" view="$view" form_id="formDetailView" record=$fields.id.value}</li><li>{sugar_button module="$module" id="REALPDFEMAIL" view="$view" form_id="formDetailView" record=$fields.id.value}</li></ul></li></ul>

</div>

</td>


<td align="right" width="20%">{$ADMIN_EDIT}
		    					{$PAGINATION}
				
	</td>
</tr>
</table>
{sugar_include include=$includes}
<div id="PdfManager_detailview_tabs"
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
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_NAME' module='PdfManager'}{/capture}
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
							    	    			{if $fields.team_name.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.team_name.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_TEAMS' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.team_name.hidden}
			    				
									{counter name="panelFieldCount"}
					
{sugarvar_teamset parentFieldArray=fields vardef=$fields.team_name tabindex='1' display='' labelSpan='' fieldSpan='' formName='' tabindex=1 displayType='renderDetailView'  	 }

												
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
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='PdfManager'}{/capture}
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
							    	    			{if $fields.base_module.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.base_module.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_BASE_MODULE' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.base_module.hidden}
			    				
									{counter name="panelFieldCount"}
					

{if is_string($fields.base_module.options)}
<input type="hidden" class="sugar_field" id="{$fields.base_module.name}" value="{$fields.base_module.options}">
{$fields.base_module.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.base_module.name}" value="{$fields.base_module.value}">
    {assign var="field_options" value=$fields.base_module.options }
    {assign var="field_val" value=$fields.base_module.value }
    {$field_options[$field_val]}
{/if}

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.published.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.published.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_PUBLISHED' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.published.hidden}
			    				
									{counter name="panelFieldCount"}
					

{if is_string($fields.published.options)}
<input type="hidden" class="sugar_field" id="{$fields.published.name}" value="{$fields.published.options}">
{$fields.published.options}
{else}
<input type="hidden" class="sugar_field" id="{$fields.published.name}" value="{$fields.published.value}">
    {assign var="field_options" value=$fields.published.options }
    {assign var="field_val" value=$fields.published.value }
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
							    	    			{if $fields.body_html.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.body_html.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_BODY_HTML' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%' colspan='3' >
			    			    {if !$fields.body_html.hidden}
			    				
									{counter name="panelFieldCount"}
					<span id="body_html" class="sugar_field"><iframe sandbox srcdoc="{$fields.body_html.value}" style="border: 0" /></span>
												
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
							    	    			{if $fields.header_title.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.header_title.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_HEADER_TITLE' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.header_title.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.header_title.value) <= 0}
{assign var="value" value=$fields.header_title.default_value }
{else}
{assign var="value" value=$fields.header_title.value }
{/if} 
<span class="sugar_field" id="{$fields.header_title.name}">{$fields.header_title.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.header_text.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.header_text.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_HEADER_TEXT' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.header_text.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.header_text.value) <= 0}
{assign var="value" value=$fields.header_text.default_value }
{else}
{assign var="value" value=$fields.header_text.value }
{/if} 
<span class="sugar_field" id="{$fields.header_text.name}">{$fields.header_text.value}</span>

												
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
							    	    			{if $fields.header_logo.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.header_logo.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_HEADER_LOGO_FILE' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.header_logo.hidden}
			    				
									{counter name="panelFieldCount"}
					
<span class="sugar_field" id="{$fields.header_logo.name}">
<a href="index.php?entryPoint=download&id={$fields.id.value}&type={$module}" class="tabDetailViewDFLink" target='_blank'>{$fields.header_logo.value}</a>
</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.footer_text.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.footer_text.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_FOOTER_TEXT' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.footer_text.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.footer_text.value) <= 0}
{assign var="value" value=$fields.footer_text.default_value }
{else}
{assign var="value" value=$fields.footer_text.value }
{/if} 
<span class="sugar_field" id="{$fields.footer_text.name}">{$fields.footer_text.value}</span>

												
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
  
                <div id='detailpanel_2' class='detail view  detail508 expanded'>
{counter name="panelFieldCount" start=0 print=false assign="panelFieldCount"}


        <h4>
      <a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
      <img border="0" id="detailpanel_2_img_hide" src="{sugar_getimagepath file="basic_search.gif"}"></a>
      <a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
      <img border="0" id="detailpanel_2_img_show" src="{sugar_getimagepath file="advanced_search.gif"}"></a>
      {sugar_translate label='LBL_EDITVIEW_PANEL1' module='PdfManager'}
        <script>
      document.getElementById('detailpanel_2').className += ' expanded';
    </script>
        </h4>

    	  <table id='LBL_EDITVIEW_PANEL1' class="panelContainer" cellspacing='{$gridline}'>



		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.author.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.author.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_AUTHOR' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.author.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.author.value) <= 0}
{assign var="value" value=$fields.author.default_value }
{else}
{assign var="value" value=$fields.author.value }
{/if} 
<span class="sugar_field" id="{$fields.author.name}">{$fields.author.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.title.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.title.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_TITLE' module='PdfManager'}{/capture}
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
							</tr>
	{/capture}
	{if $fieldsUsed > 0 && $fieldsUsed != $fieldsHidden}
	{$tableRow}
	{/if}
		{counter name="fieldsUsed" start=0 print=false assign="fieldsUsed"}
	{counter name="fieldsHidden" start=0 print=false assign="fieldsHidden"}
	{capture name="tr" assign="tableRow"}
	<tr>
							    	    			{if $fields.subject.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.subject.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.subject.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.subject.value) <= 0}
{assign var="value" value=$fields.subject.default_value }
{else}
{assign var="value" value=$fields.subject.value }
{/if} 
<span class="sugar_field" id="{$fields.subject.name}">{$fields.subject.value}</span>

												
								{/if}
							</td>
					{else}

			<td>&nbsp;</td><td>&nbsp;</td>
			{/if}
							    	    			{if $fields.keywords.acl > 0}
					{counter name="fieldsUsed"}
						<td width='12.5%' scope="col">
								    {if !$fields.keywords.hidden}
                								   {capture name="label" assign="label"}{sugar_translate label='LBL_KEYWORDS' module='PdfManager'}{/capture}
			       {$label|strip_semicolon}:
				                                                {else}
                    {counter name="fieldsHidden"}
                {/if}
                                			</td>
			<td width='37.5%'  >
			    			    {if !$fields.keywords.hidden}
			    				
									{counter name="panelFieldCount"}
					
{if strlen($fields.keywords.value) <= 0}
{assign var="value" value=$fields.keywords.default_value }
{else}
{assign var="value" value=$fields.keywords.value }
{/if} 
<span class="sugar_field" id="{$fields.keywords.name}">{$fields.keywords.value}</span>

												
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
        <script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() {ldelim} initPanel(2, 'expanded'); {rdelim}); </script>
    </div>
{if $panelFieldCount == 0}

<script>document.getElementById("LBL_EDITVIEW_PANEL1").style.display='none';</script>
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
                for(panel in sugar_panel_collase['PdfManager_d'])
                    if(sugar_panel_collase['PdfManager_d'][panel])
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
SUGAR.forms.AssignmentHandler.LINKS['DetailView'] = {"created_by_link":{"relationship":"pdfmanager_created_by","module":"Users","id_name":"created_by"},"modified_user_link":{"relationship":"pdfmanager_modified_user","module":"Users","id_name":"modified_user_id"},"activities":{"relationship":"pdfmanager_activities","module":"Activities"},"following_link":{"relationship":"pdfmanager_following"},"favorite_link":{"relationship":"pdfmanager_favorite"},"commentlog_link":{"relationship":"pdfmanager_commentlog"},"locked_fields_link":{"relationship":"pdfmanager_locked_fields"},"assigned_user_link":{"relationship":"pdfmanager_assigned_user","module":"Users","id_name":"assigned_user_id"}}
var PdfManagerEditView_read_only_base_module_editiondep = new SUGAR.forms.Dependency(new SUGAR.forms.Trigger(['id'], 'true'), [new SUGAR.forms.ReadOnlyAction('base_module','not(equal($record, ""))')],[],true,'EditView');

YAHOO.util.Event.onContentReady('EditView', SUGAR.forms.AssignmentHandler.loadComplete);});</script>{/literal}
