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
{php}
global $emailInstances;
if (empty($emailInstances))
$emailInstances = array();
$module = $_smarty_tpl->getTemplateVars('module');
if (!isset($emailInstances[$module]))
$emailInstances[$module] = 0;
$_smarty_tpl->assign('index', $emailInstances[$module]);
$emailInstances['module']++;
{/php}
<script type="text/javascript" language="javascript">
var emailAddressWidgetLoaded = false;
</script>
<script type="text/javascript" src="include/SugarEmailAddress/SugarEmailAddress.js"></script>
<script type="text/javascript">
    var module = '{$module}';
</script>
<table style="border-spacing: 0pt;">
    <tr>
	<td  valign="top" NOWRAP>
	    <table id="{$module}emailAddressesTable{$index}" class="emailaddresses">
		<tbody id="targetBody"></tbody>
		<tr>
		    <td scope="row" NOWRAP>
		        <input type=hidden id="{$module}_email_widget_id" name="{$module}_email_widget_id" value="">
			<input type=hidden id='emailAddressWidget' name='emailAddressWidget' value='1'>
                {capture assign="other_attributes"}id="{$module}{$index}_email_widget_add" onclick="javascript:SUGAR.EmailAddressWidget.instances.{$module}{$index}.addEmailAddress('{$module}emailAddressesTable{$index}','','');"{/capture}
                {capture assign=alt_addButton}{sugar_translate label='LBL_ID_FF_ADD'}{/capture}
                <button type="button" {$other_attributes}>{sugar_getimage name="id-ff-add" alt="$alt_addButton" ext=".png"}</button>
		    </td>
		    <td scope="row" NOWRAP>
		        &nbsp;
		    </td>
		    <td scope="row" NOWRAP>
			{$APP.LBL_EMAIL_PRIMARY}
		    </td>
		    {if $useReplyTo == true}
		    <td scope="row" NOWRAP>
			{$APP.LBL_EMAIL_REPLY_TO}
		    </td>
		    {/if}
		    {if $useOptOut == true}
		    <td scope="row" NOWRAP>
			{$APP.LBL_EMAIL_OPT_OUT}
		    </td>
		    {/if}
		    {if $useInvalid == true}
		    <td scope="row" NOWRAP>
			{$APP.LBL_EMAIL_INVALID}
		    </td>
		    {/if}
		</tr>
	    </table>
	</td>
    </tr>
</table>
<input type="hidden" name="useEmailWidget" value="true">
<script type="text/javascript" language="javascript">
SUGAR_callsInProgress++;
function init{$module}Email{$index}(){ldelim}
    if(emailAddressWidgetLoaded || SUGAR.EmailAddressWidget){ldelim}
	var table = YAHOO.util.Dom.get("{$module}emailAddressesTable{$index}");
        var eaw = SUGAR.EmailAddressWidget.instances.{$module}{$index} = new SUGAR.EmailAddressWidget("{$module}");
	eaw.emailView = '{$emailView}';
        eaw.emailIsRequired = "{$required}";
        eaw.tabIndex = '{$tabindex}';
        var addDefaultAddress = '{$addDefaultAddress}';
        var prefillEmailAddress = '{$prefillEmailAddresses}';
        var prefillData = {$prefillData|default:"new Object()"};
        if(prefillEmailAddress == 'true') {ldelim}
            eaw.prefillEmailAddresses('{$module}emailAddressesTable{$index}', prefillData);
	{rdelim} else if(addDefaultAddress == 'true') {ldelim}
            eaw.addEmailAddress('{$module}emailAddressesTable{$index}');
	{rdelim}
	if('{$module}_email_widget_id') {ldelim}
	   document.getElementById('{$module}_email_widget_id').value = eaw.count;
	{rdelim}
	SUGAR_callsInProgress--;
        //if the form has already been registered, re-register it with the new element
        var form = Dom.getAncestorByTagName(table, "form");
        if (SUGAR.forms.AssignmentHandler.VARIABLE_MAP[form.name])
            SUGAR.forms.AssignmentHandler.registerForm(form.name, form);
    {rdelim}else{ldelim}
	setTimeout("init{$module}Email{$index}();", 500);
    {rdelim}
{rdelim}

YAHOO.util.Event.onDOMReady(init{$module}Email{$index});
</script>
