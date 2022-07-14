<?php
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
/*********************************************************************************
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/
 
$app_list_strings = array (
strtolower($object_name).'_category_dom' =>
    array (
    '' => '',
    'Marketing' => '마케팅',
    'Knowledege Base' => '지식 기반',
    'Sales' => '영업',
  ),

    strtolower($object_name).'_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => '홍보 자료',
    'Product Brochures' => '브로슈어',
    'FAQ' => '자주묻는질문',
  ),

    strtolower($object_name).'_status_dom' =>
    array (
    'Active' => '작동중',
    'Draft' => '임시 보관',
    'FAQ' => '자주묻는질문',
    'Expired' => '기간 만료됨',
    'Under Review' => '검토중',
    'Pending' => '보류중',
  ),
  );
