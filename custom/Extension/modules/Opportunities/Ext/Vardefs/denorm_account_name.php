<?php

// 'account_name'
$dictionary['Opportunity']['fields']['account_name']['is_denormalized'] = true;
$dictionary['Opportunity']['fields']['account_name']['denormalized_field_name'] = 'denorm_account_name';

// 'denorm_account_name'
$dictionary['Opportunity']['fields']['denorm_account_name']['name'] = 'denorm_account_name';
$dictionary['Opportunity']['fields']['denorm_account_name']['type'] = 'varchar';
$dictionary['Opportunity']['fields']['denorm_account_name']['dbType'] = 'varchar';
$dictionary['Opportunity']['fields']['denorm_account_name']['vname'] = 'LBL_ACCOUNT_NAME';
$dictionary['Opportunity']['fields']['denorm_account_name']['len'] = 255;
$dictionary['Opportunity']['fields']['denorm_account_name']['comment'] = 'Name of the Company';
$dictionary['Opportunity']['fields']['denorm_account_name']['unified_search'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['full_text_search'] = array (
  'enabled' => true,
  'searchable' => true,
  'boost' => 1.91,
);
$dictionary['Opportunity']['fields']['denorm_account_name']['audited'] = true;
$dictionary['Opportunity']['fields']['denorm_account_name']['required'] = false;
$dictionary['Opportunity']['fields']['denorm_account_name']['importable'] = 'required';
$dictionary['Opportunity']['fields']['denorm_account_name']['duplicate_on_record_copy'] = 'always';
$dictionary['Opportunity']['fields']['denorm_account_name']['merge_filter'] = 'selected';
$dictionary['Opportunity']['fields']['denorm_account_name']['denorm_from_module'] = 'Accounts';
$dictionary['Opportunity']['fields']['denorm_account_name']['studio'] = false;
