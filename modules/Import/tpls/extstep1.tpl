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

<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<form enctype="multipart/form-data" real_id="extstep1" id="extstep1" name="extstep1" method="POST" action="index.php">
{sugar_csrf_form_token}
<input type="hidden" name="module" value="Import">
<input type="hidden" name="import_type" value="{$TYPE|escape:'html':'UTF-8'}">
<input type="hidden" name="external_source" value="{$smarty.request.external_source|escape:'html':'UTF-8'}">
<input type="hidden" name="action" value="ExtStep1">
<input type="hidden" name="records_per_import" value="{$RECORDTHRESHOLD|escape:'html':'UTF-8'}">
<input type="hidden" name="import_module" value="{$IMPORT_MODULE|escape:'html':'UTF-8'}">
<input type="hidden" name="current_step" value="{$CURRENT_STEP|escape:'html':'UTF-8'}">
<input type="hidden" name="columncount" value ="{$COLUMNCOUNT|escape:'html':'UTF-8'}">
<input type="hidden" name="enabled_dup_fields" value ="{$ENABLED_DUP_FIELDS|escape:'html':'UTF-8'}">
<input type="hidden" name="offset" value="0">
<input type="hidden" name="to_pdf" value="1">
<input type="hidden" name="has_header" value="off">
<input type="hidden" name="from_admin_wizard" value="{$smarty.request.from_admin_wizard|escape:'html':'UTF-8'}">

<p>
    {$MOD.LBL_EXTERNAL_MAP_HELP}
    <br/>
    <br/>
    {$MOD.LBL_EXTERNAL_MAP_SUB_HELP}
</p>

<br>
{if $MOD.LBL_EXTERNAL_MAP_NOTE != ''}
    <p>
        <input title="{$MOD.LBL_SHOW_ADVANCED_OPTIONS}"  id="toggleNotes" class="button" type="button"
                       name="button" value="  {$MOD.LBL_SHOW_NOTES|escape:'html':'UTF-8'}  ">
        <div id="importNotes" style="display: none;">
            <ul>
                <li>{$MOD.LBL_EXTERNAL_MAP_NOTE|escape:'html':'UTF-8'}</li>
                <li>{$MOD.LBL_EXTERNAL_MAP_NOTE_SUB|escape:'html':'UTF-8'}</li>
            </ul>
        </div>
    </p>
{/if}    
    
<div align="right">
    <span class="required" align="right">{$APP.LBL_REQUIRED_SYMBOL|escape:'html':'UTF-8'}</span> {$APP.NTC_REQUIRED|escape:'html':'UTF-8'}
</div>

<table border="0" cellpadding="0" width="100%" id="importTable" class="detail view">
{foreach from=$rows key=key item=item name=rows}
{if $smarty.foreach.rows.first}
<tr>
    <td style="text-align: left;" scope="col">
        <b>{$MOD.LBL_EXTERNAL_FIELD|escape:'html':'UTF-8'}</b>&nbsp;
        {sugar_help text=$MOD.LBL_EXTERNAL_FIELD_TOOLTIP}
    </td>
    <td style="text-align: left;" scope="col">
        <b>{$MOD.LBL_DATABASE_FIELD|escape:'html':'UTF-8'}</b>&nbsp;
        {sugar_help text=$MOD.LBL_DATABASE_FIELD_HELP}
    </td>
    <td style="text-align: left;" scope="col" id="default_column_header" width="10%">
        <span id="hide_default_link" class="expand">&nbsp;<b id="">{$MOD.LBL_DEFAULT_VALUE|escape:'html':'UTF-8'}</b>&nbsp;
        {sugar_help text=$MOD.LBL_EXTERNAL_DEFAULT_TOOPLTIP}</span>
        <span id="default_column_header_span">&nbsp;</span>
    </td>
</tr>
{/if}
<tr>
    <td id="row_{$smarty.foreach.rows.index}_header"><label for"colnum_{$smarty.foreach.rows.index}">{$item.cell1}</label>
        {if $item.help_text != ''}
            {sugar_help text=$item.help_text}
        {/if}
    </td>

    <td valign="top" align="left" id="row_{$smarty.foreach.rows.index|escape:'html':'UTF-8'}_col_0">
        <select class='fixedwidth' name="colnum_{$smarty.foreach.rows.index|escape:'html':'UTF-8'}" id="colnum_{$smarty.foreach.rows.index|escape:'html':'UTF-8'}" >
            <option value="-1">{$MOD.LBL_DONT_MAP}</option>
            {$item.field_choices|escape:'html':'UTF-8'}
        </select>
        <input type="hidden" name="extkey_{$smarty.foreach.rows.index|escape:'html':'UTF-8'}" value="{$item.ext_key|escape:'html':'UTF-8'}">
    </td>
    <td id="defaultvaluepicker_{$smarty.foreach.rows.index|escape:'html':'UTF-8'}" nowrap="nowrap">
        {$item.default_field|escape:'html':'UTF-8'}
    </td>
</tr>
{/foreach}
    <tr>
    <td align="left" colspan="4" style="display: none;">
        <input title="{$MOD.LBL_ADD_ROW|escape:'html':'UTF-8'}"  id="addrow" class="button" type="button"
            name="button" value="  {$MOD.LBL_ADD_ROW|escape:'html':'UTF-8'}  ">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    </td>
</tr>
</table>
<table width="100%" cellpadding="2" cellspacing="0" border="0">
<tr>
    <td align="left">
        <input title="{$MOD.LBL_BACK|escape:'html':'UTF-8'}"  id="goback" class="button" type="submit" name="button" value="  {$MOD.LBL_BACK|escape:'html':'UTF-8'}  ">&nbsp;
        <input title="{$MOD.LBL_IMPORT_NOW|escape:'html':'UTF-8'}"  id="importnow" class="button" type="button" name="button" value="  {$MOD.LBL_IMPORT_NOW|escape:'html':'UTF-8'}  ">
    </td>
</tr>
</table>
</form>

<script type="text/javascript">
/**
 * Singleton to handle processing the import
 */
ProcessESImport = new function()
{
    /*
     * number of file to process processed
     */
    this.offsetStart         = 0;

    /*
     * Total number of records to process, unknown when import starts.
     */
    this.totalRecordCount    = 0;

    /*
     * maximum number of records per file
     */
    this.recordsPerImport   = {$RECORDTHRESHOLD|escape:javascript};

    /*
     * submits the form
     */
    this.submit = function()
    {
        document.getElementById("extstep1").offset.value = this.offsetStart * this.recordsPerImport;

        YAHOO.util.Connect.setForm(document.getElementById("extstep1"));
        YAHOO.util.Connect.asyncRequest('POST', 'index.php',
            {
                success: function(o) {
                    var resp = false;
                    try
                    {
                        resp = JSON.parse(o.responseText);
                    }
                    catch(e)
                    {
                           this.showErrorMessage(o);
                    }

                    //Check if we encountered any errors first
                    if( !resp || (typeof(resp['error']) != 'undefined' && resp['error'] != '')  )
                    {
                        var errorMessage = o.responseText;
                        if(resp)
                            errorMessage = resp['error'];
                        ProcessESImport.showErrorMessage(errorMessage);
                        return;
                    }

                    //Continue the import if no errors were detected
                    ProcessESImport.totalRecordCount = resp['totalRecordCount'];
                    var locationStr = "index.php?module=Import&action=Last"
                        + "&current_step=" + document.getElementById("extstep1").current_step.value
                        + "&type={$TYPE|escape:url}"
                        + "&import_module={$IMPORT_MODULE|escape:url}"
                        + "&has_header=" +  document.getElementById("extstep1").has_header.value ;

                    //Determine if we are not or not.
                    if ( resp['done'] || (ProcessESImport.recordsPerImport * (ProcessESImport.offsetStart + 1) >= ProcessESImport.totalRecordCount) )
                    {
                        YAHOO.SUGAR.MessageBox.updateProgress(1,'{$MOD.LBL_IMPORT_COMPLETED|escape:javascript}');
                        SUGAR.util.hrefURL(locationStr);
                    }
                    else
                    {
                        ProcessESImport.offsetStart++;
                        ProcessESImport.submit();
                    }
                },
                failure: function(o) {
                    ProcessESImport.showErrorMessage(o.responseText);
                    return;
                }
            }
        );
        var move = 0;
        if ( ProcessESImport.offsetStart > 0 ) {
            move = ((ProcessESImport.offsetStart * ProcessESImport.recordsPerImport) / ProcessESImport.totalRecordCount) * 100;
        }

        if(this.totalRecordCount == 0 )
            displayMessg = "{$MOD.LBL_IMPORT_RECORDS|escape:javascript} ";
        else
            displayMessg = "{$MOD.LBL_IMPORT_RECORDS|escape:javascript} " + ((this.offsetStart * this.recordsPerImport) + 1)
                            + " {$MOD.LBL_IMPORT_RECORDS_TO|escape:javascript} " + Math.min(((this.offsetStart+1) * this.recordsPerImport),this.totalRecordCount)
                            + " {$MOD.LBL_IMPORT_RECORDS_OF|escape:javascript} " + this.totalRecordCount;

        YAHOO.SUGAR.MessageBox.updateProgress( move,displayMessg);
    }

    this.showErrorMessage = function(errorMessage)
    {
        YAHOO.SUGAR.MessageBox.minWidth = 500;
        YAHOO.SUGAR.MessageBox.show({
            type:  "alert",
            title: '{$MOD.LBL_IMPORT_ERROR|escape:javascript}',
            msg:   errorMessage,
            fn: function() { }
        });
    }
    /*
     * begins the form submission process
     */
    this.begin = function()
    {
        datestarted = '{$MOD.LBL_IMPORT_STARTED|escape:javascript} ' +
                YAHOO.util.Date.format('{$datetimeformat}');
        YAHOO.SUGAR.MessageBox.show({
            title: '{$STEP4_TITLE|escape:javascript}',
            msg: datestarted,
            width: 500,
            type: "progress",
            closable:false,
            animEl: 'importnow'
        });
        this.submit();
    }
}
enableQS(false);


document.getElementById('goback').onclick = function(){
    document.getElementById('extstep1').to_pdf.value = '';
    document.getElementById('extstep1').action.value = 'step1';
    return true;
}

document.getElementById('importnow').onclick = function(){

    if( ImportView.validateMappings() )
    {
        var form = document.getElementById('extstep1');
        // Move on to next step
        document.getElementById('extstep1').action.value = 'extimport';
        ProcessESImport.begin();
        return false;
    }
    else
        return false;


}

</script>
