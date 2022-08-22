<p><span style="font-size: large;"><strong>BUSINESS CARD</strong></span></p>
<table align="left">
<tbody>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Quote Number:</span>&nbsp;{$fields.quote_num}&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Opportunity Name:</span>&nbsp;{$fields.opportunities.name}</span></td>
</tr>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Purchase Order Num:</span>&nbsp;{$fields.purchase_order_num}&nbsp; &nbsp;</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Quote Stage:</span>&nbsp;{$fields.quote_stage}</span></td>
</tr>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Payment Terms:</span>&nbsp;{$fields.payment_terms}</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Valid Until:</span>&nbsp;{$fields.date_quote_expected_closed}</span></td>
</tr>
<tr>
<td><span style="font-size: medium; background-color: #515151; color: #ffffff;">Tags:&nbsp;&nbsp;<span>{$fields.tag}</span></span></td>
<td><span style="font-size: medium;">&nbsp;</span></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<hr />
<p><span style="font-size: large;"><strong>BILLING AND SHIPPING</strong></span></p>
<table>
<tbody>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Billing Account Name:</span>&nbsp;{$fields.billing_accounts.name}&nbsp; &nbsp; &nbsp;</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Shipping Account Name:</span>&nbsp;{$fields.shipping_accounts.name}</span></td>
</tr>
<tr>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Billing Contact Name:</span>&nbsp;{$fields.billing_contacts.first_name}&nbsp;{$fields.billing_contacts.last_name}</span></td>
<td><span style="font-size: medium;"><span style="background-color: #515151; color: #ffffff;">Shipping Contact Name:</span>&nbsp;{$fields.shipping_contacts.first_name}&nbsp;{$fields.shipping_contacts.last_name}</span></td>
</tr>
<tr>
<td>
<p><span style="font-size: medium;"><span class="text-overflow"><span style="background-color: #515151; color: #ffffff;">Billing Address:</span><br /></span>{if {$fields.billing_address_street}!=""}{$fields.billing_address_street} {/if}</span><br /><span style="font-size: medium;">{if {$fields.billing_address_city}!=""} {$fields.billing_address_city}, {/if}&nbsp;{if {$fields.billing_address_state}!=""} {$fields.billing_address_state} {/if}&nbsp;{if {$fields.billing_address_postalcode}!=""} {$fields.billing_address_postalcode} {/if}</span><br /><span style="font-size: medium;">{if {$fields.billing_address_country}!=""} {$fields.billing_address_country} {/if}</span></p>
</td>
<td><span style="font-size: medium; background-color: #515151; color: #ffffff;">Shipping Address:</span><br /><span style="font-size: medium;">{if {$fields.shipping_address_street}!=""} {$fields.shipping_address_street}, {/if}</span><br /><span style="font-size: medium;">{if {$fields.shipping_address_city}!=""} {$fields.shipping_address_city}, {/if}&nbsp;{if {$fields.shipping_address_state}!=""} {$fields.shipping_address_state} {/if} {if {$fields.shipping_address_postalcode}!=""} {$fields.shipping_address_postalcode} {/if}</span><br /><span style="font-size: medium;">{if {$fields.shipping_address_country}!=""}{$fields.shipping_address_country} {/if}</span></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>{foreach from=$product_bundles item="bundle"}</p>
<p>{if $bundle.products|@count}</p>
<h3>{$bundle.name}</h3>
<table style="height: 135px; width: 100%;" border="0">
<tbody>
<tr bgcolor="#4B4B4B">
<td width="70%"><span style="color: #ffffff;">Quantity</span></td>
<td width="175%"><span style="color: #ffffff;">Product</span></td>
<td width="140%"><span style="color: #ffffff;">Part Number</span></td>
<td width="70%"><span style="color: #ffffff;">Unit Price</span></td>
<td width="70%"><span style="color: #ffffff;">Discount Amount</span></td>
<td width="70%"><span style="color: #ffffff;">Line Item Total</span></td>
</tr>
{foreach from=$bundle.products item="product"}
<tr>
<td width="70%">{if isset($product.quantity)}{$product.quantity}{/if}</td>
<td width="175%">{if isset($product.name)}{$product.name}{/if}{if isset($product.list_price)}<br />{$product.description}{/if}</td>
<td width="140%">{if isset($product.manufacturer_name)}{$product.manufacturer_name}{/if} {if isset($product.mft_part_num)}<br />{$product.mft_part_num}{/if}</td>
<td align="right" width="70%">{if isset($product.discount_price)}{$product.discount_price}{/if}</td>
<td align="right" width="70%">{if isset($product.discount_amount)} {if !empty($product.discount_select)} {sugar_number_format var=$product.discount_amount}% {else} {sugar_currency_format var=$product.discount_amount currency_id=$product.currency_id} {/if} {/if}</td>
<td align="right" width="70%">{$product.total_amount}</td>
</tr>
{/foreach}</tbody>
</table>
<table align="right">
<tbody>
<tr>
<td>{if {$bundle.name}!=""} <strong>Group Total</strong> {/if}</td>
<td>
<p>{if {$bundle.name}!=""}<strong>{$bundle.total}</strong> {/if}</p>
</td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p>{/if}</p>
<p>{/foreach}</p>
<table>
<tbody>
<tr>
<td><hr /></td>
</tr>
</tbody>
</table>
<table border="0">
<tbody>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Discounted Subtotal</td>
<td align="right" width="45%">
<p><strong>{$fields.new_sub}</strong></p>
</td>
</tr>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Tax</td>
<td align="right" width="45%"><strong>{$fields.tax_usdollar}</strong></td>
</tr>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Shipping</td>
<td align="right" width="45%"><strong>{$fields.shipping_usdollar}</strong></td>
</tr>
<tr>
<td width="190%">&nbsp;</td>
<td width="55%">Grand Total</td>
<td align="right" width="45%"><strong>{$fields.total}</strong></td>
</tr>
</tbody>
</table>
<p>&nbsp;</p>
<p><span>&nbsp;</span></p>