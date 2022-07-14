<?php
/* Smarty version 3.1.39, created on 2022-07-13 16:42:20
  from '/var/www/html/SugarEnt-Full-12.0.0/modules/PdfManager/tpls/templateInvoice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62ceaf9ca603d9_12580162',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee722caa60f534e4cb20776df9043b943bac444f' => 
    array (
      0 => '/var/www/html/SugarEnt-Full-12.0.0/modules/PdfManager/tpls/templateInvoice.tpl',
      1 => 1649221076,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62ceaf9ca603d9_12580162 (Smarty_Internal_Template $_smarty_tpl) {
?><table border="0" cellspacing="2">
<tbody>
<tr>
<td rowspan="6" width="180%"><img src="<?php echo $_smarty_tpl->tpl_vars['logoUrl']->value;?>
" alt="" /></td>
<td width="60%"><strong><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_INVOICE'];?>
</strong></td>
<td width="60%">&nbsp;</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_INVOICE_NUMBER'];?>
</td>
<td width="75%">{$fields.quote_num}</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_SALES_PERSON'];?>
</td>
<td width="75%">{if isset($fields.assigned_user_link.name)}{$fields.assigned_user_link.name}{/if}</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_VALID_UNTIL'];?>
</td>
<td width="75%">{$fields.date_quote_expected_closed}</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PURCHASE_ORDER_NUM'];?>
</td>
<td width="75%">{$fields.purchase_order_num}</td>
</tr>
<tr>
<td bgcolor="#DCDCDC" width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_PAYMENT_TERMS'];?>
</td>
<td width="75%">{$fields.payment_terms}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 50%;" border="0" cellspacing="2">
<tbody>
<tr style="color: #ffffff;" bgcolor="#4B4B4B">
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_BILL_TO'];?>
</td>
<td><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_SHIP_TO'];?>
</td>
</tr>
<tr>
<td>{$fields.billing_contact_name}</td>
<td>{$fields.shipping_contact_name}</td>
</tr>
<tr>
<td>{$fields.billing_account_name}</td>
<td>{$fields.shipping_account_name}</td>
</tr>
<tr>
<td>{$fields.billing_address_street}</td>
<td>{$fields.shipping_address_street}</td>
</tr>
<tr>
<td>{if $fields.billing_address_city!=""}{$fields.billing_address_city},{/if} {if $fields.billing_address_state!=""}{$fields.billing_address_state},{/if} {$fields.billing_address_postalcode}</td>
<td>{if $fields.shipping_address_city!=""}{$fields.shipping_address_city},{/if} {if $fields.shipping_address_state!=""}{$fields.shipping_address_state},{/if} {$fields.shipping_address_postalcode}</td>
</tr>
<tr>
<td>{$fields.billing_address_country}</td>
<td>{$fields.shipping_address_country}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
{foreach from=$product_bundles item="bundle"}
{if $bundle.products|@count}
<p>&nbsp;</p>
<h3>{$bundle.name}</h3>
<table style="width: 100%;" border="0">
<tbody>
<tr style="color: #ffffff;" bgcolor="#4B4B4B">
    <?php if ($_smarty_tpl->tpl_vars['withServices']->value) {?>
        <td width="60%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_QUANTITY'];?>
</td>
        <td width="150%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_PART_NUMBER'];?>
</td>
        <td width="150%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_PRODUCT'];?>
</td>
        <td width="120%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DURATION'];?>
</td>
        <td width="80%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_LIST_PRICE'];?>
</td>
        <td width="80%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_UNIT_PRICE'];?>
</td>
        <td width="80%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_EXT_PRICE'];?>
</td>
        <td width="80%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DISCOUNT'];?>
</td>
    <?php } else { ?>
        <td width="70%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_QUANTITY'];?>
</td>
        <td width="175%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_PART_NUMBER'];?>
</td>
        <td width="175%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_PRODUCT'];?>
</td>
        <td width="70%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_LIST_PRICE'];?>
</td>
        <td width="70%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_UNIT_PRICE'];?>
</td>
        <td width="70%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_EXT_PRICE'];?>
</td>
        <td width="70%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DISCOUNT'];?>
</td>
    <?php }?>
</tr>
<!--START_PRODUCT_LOOP-->
<tr>
    <?php if ($_smarty_tpl->tpl_vars['withServices']->value) {?>
        <td width="60%">{if isset($product.quantity)}{$product.quantity}{/if}</td>
        <td width="150%">{if isset($product.manufacturer_name)}{$product.manufacturer_name}{/if}
                {if isset($product.mft_part_num)}<br></br>{$product.mft_part_num}{/if}</td>
        <td width="150%">{if isset($product.name)}{$product.name}{/if}{if isset($product.list_price)}<br></br>{$product.description}{/if}</td>
        <td width="120%">
                {if !empty($product.service_duration_value) && !empty($product.service_duration_unit)}
                        {$product.service_duration_value} {$product.service_duration_unit}
                {/if}
                {if !empty($product.service_start_date) && !empty($product.service_end_date)}
                        <br></br><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DURATION_STARTS'];?>
 {$product.service_start_date}
                        <br></br><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DURATION_ENDS'];?>
 {$product.service_end_date}
                {/if}
        </td>
        <td align="right" width="80%">{if isset($product.list_price)}{$product.list_price}{/if}</td>
        <td align="right" width="80%">{if isset($product.discount_price)}{$product.discount_price}{/if}</td>
        <td align="right" width="80%">{if isset($product.ext_price)}{$product.ext_price}{/if}</td>
        <td align="right" width="80%">
                {if isset($product.discount_amount)}
                {if !empty($product.discount_select)}
                {sugar_number_format var=$product.discount_amount}%
                {else}
                {sugar_currency_format var=$product.discount_amount currency_id=$product.currency_id}
                {/if}
                {/if}</td>
    <?php } else { ?>
        <td width="70%">{if isset($product.quantity)}{$product.quantity}{/if}</td>
        <td width="175%">{if isset($product.manufacturer_name)}{$product.manufacturer_name}{/if}
                {if isset($product.mft_part_num)}<br></br>{$product.mft_part_num}{/if}</td>
        <td width="175%">{if isset($product.name)}{$product.name}{/if}{if isset($product.list_price)}<br></br>{$product.description}{/if}</td>
        <td align="right" width="70%">{if isset($product.list_price)}{$product.list_price}{/if}</td>
        <td align="right" width="70%">{if isset($product.discount_price)}{$product.discount_price}{/if}</td>
        <td align="right" width="70%">{if isset($product.ext_price)}{$product.ext_price}{/if}</td>
        <td align="right" width="70%">
                {if isset($product.discount_amount)}
                {if !empty($product.discount_select)}
                {sugar_number_format var=$product.discount_amount}%
                {else}
                {sugar_currency_format var=$product.discount_amount currency_id=$product.currency_id}
                {/if}
                {/if}</td>
    <?php }?>
</tr>
<!--END_PRODUCT_LOOP--></tbody>
</table>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<table style="width: 100%; margin: auto;" border="0">
<tbody>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_SUBTOTAL'];?>
</td>
<td align="right" width="45%">{$bundle.subtotal}</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DISCOUNT'];?>
</td>
<td align="right" width="45%">{$bundle.deal_tot}</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DISCOUNTED_SUBTOTAL'];?>
</td>
<td align="right" width="45%">{$bundle.new_sub}</td>
</tr>
<tr>
<td width="210%">&nbsp;</td>
<td width="45%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_TOTAL'];?>
</td>
<td align="right" width="45%">{$bundle.total}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
{/if}
{/foreach}
<p>&nbsp;</p>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table style="width: 100%; margin: auto;" border="0">
<tbody>
<tr>
<td width="200%">&nbsp;</td>
<td style="font-weight: bold;" colspan="2" align="center" width="150%"><b><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_GRAND_TOTAL'];?>
</b></td>
<td width="75%">&nbsp;</td>
<td align="right" width="75%">&nbsp;</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_CURRENCY'];?>
</td>
<td width="75%">{$fields.currency_iso}</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_SUBTOTAL'];?>
</td>
<td align="right" width="75%">{$fields.subtotal}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td align="right" width="75%">&nbsp;</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DISCOUNT'];?>
</td>
<td align="right" width="75%">{$fields.deal_tot}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_DISCOUNTED_SUBTOTAL'];?>
</td>
<td align="right" width="75%">{$fields.new_sub}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_TAX_RATE'];?>
</td>
<td width="75%">{$fields.taxrate_value}</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_TAX'];?>
</td>
<td align="right" width="75%">{$fields.tax}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_SHIPPING_PROVIDER'];?>
</td>
<td width="75%">{$fields.shipper_name}</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_SHIPPING'];?>
</td>
<td align="right" width="75%">{$fields.shipping}</td>
</tr>
<tr>
<td width="200%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%">&nbsp;</td>
<td width="75%"><?php echo $_smarty_tpl->tpl_vars['MOD']->value['LBL_TPL_TOTAL'];?>
</td>
<td align="right" width="75%">{$fields.total}</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<?php }
}
