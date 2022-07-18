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
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_gender_c.php

 // created: 2022-07-15 12:30:42
$dictionary['Contact']['fields']['gender_c']['labelValue']='Gender';
$dictionary['Contact']['fields']['gender_c']['dependency']='';
$dictionary['Contact']['fields']['gender_c']['required_formula']='';
$dictionary['Contact']['fields']['gender_c']['readonly_formula']='';
$dictionary['Contact']['fields']['gender_c']['visibility_grid']='';

 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/sugarfield_car_color_c.php

 // created: 2022-07-15 12:49:02
$dictionary['Contact']['fields']['car_color_c']['labelValue']='car color';
$dictionary['Contact']['fields']['car_color_c']['dependency']='';
$dictionary['Contact']['fields']['car_color_c']['required_formula']='';
$dictionary['Contact']['fields']['car_color_c']['readonly_formula']='';
$dictionary['Contact']['fields']['car_color_c']['visibility_grid']='';
$dictionary['Contact']['fields']['car_color_c']['options']='car_color_dom';


 
?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/cases_contacts_1_Contacts.php

// created: 2022-07-18 16:02:29
$dictionary["Contact"]["fields"]["cases_contacts_1"] = array (
  'name' => 'cases_contacts_1',
  'type' => 'link',
  'relationship' => 'cases_contacts_1',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'side' => 'right',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CONTACTS_TITLE',
  'id_name' => 'cases_contacts_1cases_ida',
  'link-type' => 'one',
);
$dictionary["Contact"]["fields"]["cases_contacts_1_name"] = array (
  'name' => 'cases_contacts_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CASES_TITLE',
  'save' => true,
  'id_name' => 'cases_contacts_1cases_ida',
  'link' => 'cases_contacts_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'name',
);
$dictionary["Contact"]["fields"]["cases_contacts_1cases_ida"] = array (
  'name' => 'cases_contacts_1cases_ida',
  'type' => 'id',
  'source' => 'non-db',
  'vname' => 'LBL_CASES_CONTACTS_1_FROM_CONTACTS_TITLE_ID',
  'id_name' => 'cases_contacts_1cases_ida',
  'link' => 'cases_contacts_1',
  'table' => 'cases',
  'module' => 'Cases',
  'rname' => 'id',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);

?>
<?php
// Merged from custom/Extension/modules/Contacts/Ext/Vardefs/cases_contacts_2_Contacts.php

// created: 2022-07-18 18:41:53
$dictionary["Contact"]["fields"]["cases_contacts_2"] = array (
  'name' => 'cases_contacts_2',
  'type' => 'link',
  'relationship' => 'cases_contacts_2',
  'source' => 'non-db',
  'module' => 'Cases',
  'bean_name' => 'Case',
  'vname' => 'LBL_CASES_CONTACTS_2_FROM_CASES_TITLE',
  'id_name' => 'cases_contacts_2cases_ida',
);

?>
