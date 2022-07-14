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
{include file="modules/DynamicFields/templates/Fields/Forms/coreTop.tpl"}
<input type=hidden id='ext3' name='ext3' value='{$vardef.gen}'>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_GENERATE_URL"}:</td>
	<td>
	{if $hideLevel < 5}
		<input type='checkbox' id='gencheck' {if $vardef.gen}checked=true{/if} name='genCheck' value="0" onclick="
			if(this.checked) {ldelim}
				 YAHOO.util.Dom.setStyle('fieldListHelper', 'display', '');
                 YAHOO.util.Dom.get('ext3').value = 1;
			{rdelim} else {ldelim}
				YAHOO.util.Dom.setStyle('fieldListHelper', 'display', 'none');
                YAHOO.util.Dom.get('ext3').value = 0;
			{rdelim}">
	{else}
		<input type='checkbox' name='ext3' {if $vardef.gen}checked=true{/if} disabled>
	{/if}
	</td>
</tr>
<tr id='fieldListHelper' {if !$vardef.gen}style="display:none"{/if}>
	<td></td>
	<td>{html_options name="flo" id="fieldListOptions" options=$fieldOpts}
		<input type='button' class='button' value="Insert Field" onclick="
			YAHOO.util.Dom.get('default').value += '{ldelim}' + YAHOO.util.Dom.get('fieldListOptions').value + '{rdelim}'
		"></td> 
</tr>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_DEFAULT_VALUE"}:</td>
	<td>
	{if $hideLevel < 5}
		<input type='text' name='default' id='default' value='{$vardef.default}' maxlength='{$vardef.len|default:50}'>
	{else}
		<input type='hidden' id='default' name='default' value='{$vardef.default}'>{$vardef.default}
	{/if}
	</td>
</tr>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="COLUMN_TITLE_MAX_SIZE"}:</td>
	<td>
	{if $hideLevel < 5}
		<input type='text' name='len' value='{$vardef.len|default:255}' onchange="forceRange(this,1,4096);changeMaxLength(document.getElementById('default'),this.value);">
		<script>
		function forceRange(field, min, max){
			field.value = parseInt(field.value);
			if(field.value == 'NaN')field.value = max;
			if(field.value > max) field.value = max;
			if(field.value < min) field.value = min;
		}
		function changeMaxLength(field, length){
			field.maxLength = parseInt(length);
			field.value = field.value.substr(0, field.maxLength);
		}
		</script>
	{else}
		<input type='hidden' name='len' value='{$vardef.len}'>{$vardef.len}
	{/if}
	</td>
</tr>
<tr>
	<td class='mbLBL'>{sugar_translate module="DynamicFields" label="LBL_LINK_TARGET"}:</td>
	<td>
	{if $hideLevel < 5}
		<select name='ext4' id='ext4'>
            {$TARGET_OPTIONS}
        </select>
	{else}
		<select name='extdis' id='extdis' disabled>
            <option value='{$LINK_TARGET}'>{$LINK_TARGET_LABEL}</option>
        </select>
        <input type='hidden' name='ext4' value='{$LINK_TARGET}'>
	{/if}
	</td>
</tr>

{include file="modules/DynamicFields/templates/Fields/Forms/coreBottom.tpl"}