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

{$CSS}

{$INSTRUCTION}


<form enctype="multipart/form-data" real_id="importstep3" id="importstep3" name="importstep3" method="POST" action="index.php">
{sugar_csrf_form_token}
<input type="hidden" name="module" value="Import">
<input type="hidden" name="previous_action" value="Confirm">
<input type="hidden" name="custom_delimiter" value="{$CUSTOM_DELIMITER}">
<input type="hidden" name="custom_delimiter_other" value="{$CUSTOM_DELIMITER_OTHER}">
<input type="hidden" name="custom_enclosure" value="{$CUSTOM_ENCLOSURE}">
<input type="hidden" name="import_type" value="{$TYPE}">
<input type="hidden" name="source" value="{$smarty.request.source|escape:'html':'UTF-8'}">
<input type="hidden" name="source_id" value="{$smarty.request.source_id}">
<input type="hidden" name="action" value="Step3">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE}">
<input type="hidden" name="has_header" value="{$HAS_HEADER}">
<input type="hidden" name="tmp_file" value="{$TMP_FILE}">
<input type="hidden" name="file_name" value="{$TMP_FILE}">
<input type="hidden" name="tmp_file_base" value="{$TMP_FILE}">
<input type="hidden" name="firstrow" value="{$FIRSTROW}">
<input type="hidden" name="columncount" value ="{$COLUMNCOUNT}">
<input type="hidden" name="current_step" value="{$CURRENT_STEP}">
<input type="hidden" name="importlocale_charset" value="{$smarty.request.importlocale_charset}">
<input type="hidden" name="importlocale_dateformat" value="{$smarty.request.importlocale_dateformat}">
<input type="hidden" name="importlocale_timeformat" value="{$smarty.request.importlocale_timeformat}">
<input type="hidden" name="importlocale_timezone" value="{$smarty.request.importlocale_timezone}">
<input type="hidden" name="importlocale_currency" value="{$smarty.request.importlocale_currency}">
<input type="hidden" name="importlocale_default_currency_significant_digits" value="{$smarty.request.importlocale_default_currency_significant_digits}">
<input type="hidden" name="importlocale_num_grp_sep" value="{$smarty.request.importlocale_num_grp_sep}">
<input type="hidden" name="importlocale_dec_sep" value="{$smarty.request.importlocale_dec_sep}">
<input type="hidden" name="importlocale_default_locale_name_format" value="{$smarty.request.importlocale_default_locale_name_format}">
<input type="hidden" name="from_admin_wizard" value="{$smarty.request.from_admin_wizard}">
    
<br>
{if $NOTETEXT != ''}
    <p>
        <input title="{$MOD.LBL_SHOW_ADVANCED_OPTIONS}"  id="toggleNotes" class="button" type="button"
                       name="button" value="  {$MOD.LBL_SHOW_NOTES}  ">
        <div id="importNotes" style="display: none;">
            <ul>
                {$NOTETEXT}
            </ul>
        </div>
    </p>
{/if}

<div class="hr"></div>


<table border="0" cellspacing="0" cellpadding="0" width="100%" id="importTable" class="detail view">
{foreach from=$rows key=key item=item name=rows}
{if $smarty.foreach.rows.first}
<tr>
    {if $HAS_HEADER == 'on'}
    <th style="text-align: left;" scope="col">
        <b>{$MOD.LBL_HEADER_ROW}</b>&nbsp;
        {sugar_help text=$MOD.LBL_HEADER_ROW_HELP}
    </th>
    {/if}
    <th style="text-align: left;" scope="col">
        <b>{$MOD.LBL_DATABASE_FIELD}</b>&nbsp;
        {sugar_help text=$MOD.LBL_DATABASE_FIELD_HELP}
    </th>
    <th style="text-align: left;" scope="col">
        <b>{$MOD.LBL_ROW} 1</b>&nbsp;
        {sugar_help text=$MOD.LBL_ROW_HELP}
    </th>
    {if $HAS_HEADER != 'on'}
    <th style="text-align: left;" scope="col"><b>{$MOD.LBL_ROW} 2</b></td>
    {/if}
    <th scope='col' style="text-align: left;" scope="rcol" id="default_column_header" width="10%">
        <span id="hide_default_link" class="expand">&nbsp;<b id="">{$MOD.LBL_DEFAULT_VALUE}</b>&nbsp;
        {sugar_help text=$MOD.LBL_DEFAULT_VALUE_HELP}</span>
        <span id="default_column_header_span">&nbsp;</span>
    </th>
</tr>
{/if}
<tr {if $item.hidden}style="display:none"{/if}>
    {if $HAS_HEADER == 'on'}
    <td id="row_{$smarty.foreach.rows.index}_header">{$item.cell1}</td>
    {/if}
    <td valign="top" align="left" id="row_{$smarty.foreach.rows.index}_col_0">
        <select class='fixedwidth' name="colnum_{$smarty.foreach.rows.index}">
            <option value="-1">{$MOD.LBL_DONT_MAP}</option>
            {$item.field_choices}
        </select>
    </td>
    {if $item.show_remove}
    <td colspan="2">
        <input title="{$MOD.LBL_REMOVE_ROW}" 
            id="deleterow_{$smarty.foreach.rows.index}" class="button" type="button"
            value="  {$MOD.LBL_REMOVE_ROW}  ">
    </td>
    {else}
    {if $HAS_HEADER != 'on'}
    <td id="row_{$smarty.foreach.rows.index}_col_1" scope="row">{$item.cell1}</td>
    {/if}
    <td id="row_{$smarty.foreach.rows.index}_col_2" scope="row" colspan="2">{$item.cell2}</td>
    {/if}
    <td id="defaultvaluepicker_{$smarty.foreach.rows.index}" nowrap="nowrap">
        {$item.default_field}
    </td>
</tr>
{/foreach}
<tr>
    <td align="left" colspan="4">
        <input title="{$MOD.LBL_ADD_ROW}"  id="addrow" class="button" type="button"
            name="button" value="  {$MOD.LBL_ADD_ROW}  "> {sugar_help text=$MOD.LBL_ADD_FIELD_HELP}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
</tr>
</table>

<br />

<table width="100%" cellpadding="2" cellspacing="0" border="0">
<tr>
    <td align="left">
        <input title="{$MOD.LBL_BACK}"  id="goback" class="button" type="submit" name="button" value="  {$MOD.LBL_BACK}  ">&nbsp;
        {if $idm_update_mode_only}
            <input title="{$MOD.LBL_IMPORT_NOW}"  id="importnow" class="button" type="button" name="button" value="  {$MOD.LBL_IMPORT_NOW}  ">
        {else}
            <input title="{$MOD.LBL_NEXT}"  id="gonext" class="button" type="submit" name="button" value="  {$MOD.LBL_NEXT}  ">
        {/if}
    </td>
</tr>
</table>

{$QS_JS}
