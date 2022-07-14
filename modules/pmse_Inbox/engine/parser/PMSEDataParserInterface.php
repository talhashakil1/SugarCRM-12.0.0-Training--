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


/**
 * interfaces for classes
 * ADAMUserRoleParser, ADAMFormResponseParser, ADAMFieldParser and ADAMBusinessRuleParser
 * @codeCoverageIgnore
 */
interface PMSEDataParserInterface
{
    public function setEvaluatedBean($bean);

    public function setCurrentUser($currentUser);

    public function setBeanList($beanList);

    public function setCriteriaToken($criteriaToken);

    public function parseCriteriaToken($criteriaToken, $params = array());
}
