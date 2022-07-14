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
    'Marketing' => 'Маркетинг',
    'Knowledege Base' => 'База от знания',
    'Sales' => 'Продажби',
  ),

    strtolower($object_name).'_subcategory_dom' =>
    array (
    '' => '',
    'Marketing Collateral' => 'Маркетингови материали',
    'Product Brochures' => 'Брошури',
    'FAQ' => 'Често задавани въпроси',
  ),

    strtolower($object_name).'_status_dom' =>
    array (
    'Active' => 'Активен',
    'Draft' => 'Работен вариант',
    'FAQ' => 'Често задавани въпроси',
    'Expired' => 'С изтекъл срок на валидност',
    'Under Review' => 'В процес на обработка',
    'Pending' => 'Висяща',
  ),
  );
