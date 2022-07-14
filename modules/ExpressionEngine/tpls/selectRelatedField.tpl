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

</script>
<table id="selrf_table">
    <tr>
        <td class="label">Module:</td>
        <td>{html_options name="rmodule" id="selrf_rmodule" selected=$selLink  values=$rmodules options=$rmodules onChange="SUGAR.expressions.updateSelRFLink(this.value)" }</td>
    </tr><tr>
        <td scope="label">Field:</td>
        <td>{html_options name="rfield" id="selrf_rfield" values=$rfields options=$rfields onChange="console.log(this)"}</td>
    </tr>
</table>
<div style="width:100%;text-align:right">
    <button class='button' name='selrf_cancelbtn' onclick="SUGAR.formulaRelFieldWin.hide()" >
        {sugar_translate module="ModuleBuilder" label="LBL_BTN_CANCEL"}
    </button>
    <button class='button' name='selrf_insertbtn' onclick='SUGAR.expressions.insertRelated()' >
        {sugar_translate module="ModuleBuilder" label="LBL_BTN_INSERT"}
    </button>
</div>