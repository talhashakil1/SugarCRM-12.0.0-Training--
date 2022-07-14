<?php
 if(!defined('sugarEntry'))define('sugarEntry', true);
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
chdir(dirname(__FILE__).'/../../');
require 'include/entryPoint.php';
require 'soap/SoapErrorDefinitions.php';
require 'service/core/SugarSoapService.php';
define('ENTRY_POINT_TYPE', 'api');

$style = $_GET['style'] ?? null;
$use = $_GET['use'] ?? null;
$wsdl = isset($_GET['wsdl']) ? 'wsdl' : '';
$method = $_REQUEST['method'] ?? "";

Webservice::soap('2_1', $style, $use, $wsdl)->run($method);
