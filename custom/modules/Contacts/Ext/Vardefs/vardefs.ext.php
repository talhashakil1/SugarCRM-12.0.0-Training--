<?php
// WARNING: The contents of this file are auto-generated.
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_linkedin_profile_c.php

 // created: 2022-07-14 17:55:50
$dictionary['Contact']['fields']['linkedin_profile_c']['labelValue']='linkedin profile';
$dictionary['Contact']['fields']['linkedin_profile_c']['full_text_search']=array (
  'enabled' => '0',
  'boost' => '1',
  'searchable' => false,
);
$dictionary['Contact']['fields']['linkedin_profile_c']['dependency']='';
$dictionary['Contact']['fields']['linkedin_profile_c']['required_formula']='';
$dictionary['Contact']['fields']['linkedin_profile_c']['readonly_formula']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/denorm_account_name.php


// 'account_name'
$dictionary['Contact']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Contact']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Contact']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Contact']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Contact']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Contact']['fields']['denorm_account_name']['len'] = 255;
$dictionary['Contact']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Contact']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Contact']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Contact']['fields']['denorm_account_name']['required'] = false;
$dictionary['Contact']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Contact']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Contact']['fields']['denorm_account_name']['merge_filter'] = 'selected';
$dictionary['Contact']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Contact']['fields']['denorm_account_name']['studio'] = false;

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_title.php


$dictionary['Contact']['fields']['title']['type']='Readonlytitle';
$dictionary['Contact']['fields']['title']['dbType']='varchar';
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/quotes_contacts_1_Contacts.php


$dictionary["Contacts"]["fields"]["quotes_contacts_1"] = array (
  'name' => 'quotes_contacts_1',
  'type' => 'link',
  'relationship' => 'quotes_contacts_1',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE',
  'id_name' => 'quotes_contacts_1contacts_ida',
);
$dictionary["Contacts"]["fields"]["quotes_contacts_1_name"] = array (
  'name' => 'accounts_project_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'quotes_contacts_1contacts_ida',
  'link' => 'quotes_contacts_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'name',
);
$dictionary["Contacts"]["fields"]["quotes_contacts_1contacts_ida"] = array (
  'name' => 'quotes_contacts_1contacts_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_QUOTES_CONTACTS_1_FROM_QUOTES_TITLE_ID',
  'id_name' => 'quotes_contacts_1contacts_ida',
  'link' => 'quotes_contacts_1',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'left',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
