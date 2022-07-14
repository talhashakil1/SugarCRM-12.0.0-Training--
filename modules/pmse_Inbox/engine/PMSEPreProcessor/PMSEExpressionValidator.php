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
 * Description of PMSERecordValidator
 *
 */
class PMSEExpressionValidator extends PMSEBaseValidator implements PMSEValidate
{
    /**
     *
     * @param PMSERequest $request
     * @return \PMSERequest
     */
    public function validateRequest(PMSERequest $request)
    {
        // This can't be valid without a bean
        $bean = $request->getBean();
        if (empty($bean)) {
            $request->invalidate();
            return $request;
        }

        $flowData = $request->getFlowData();
        if ($flowData['evn_id'] != 'TERMINATE') {
            $paramsRelated = $this->validateParamsRelated($bean, $flowData, $request);

            // If there is a need to update the relate criteria, do that here
            if (!empty($paramsRelated['updateRelateCriteria'])) {
                $flowData = $this->updateRelateCriteria($flowData, $request);
                unset($paramsRelated['updateRelateCriteria']);
            }

            if ($request->isValid()) {
                $this->validateExpression($bean, $flowData, $request, $paramsRelated);
            }
        }

        return $request;
    }

    /**
     *
     * @param type $bean
     * @param type $flowData
     * @param type $request
     * @param type $paramsRelated
     * @return type
     */
    public function validateExpression($bean, $flowData, $request, $paramsRelated = array())
    {
        // Start with trimming our criteria for evaluation
        $criteria = trim($flowData['evn_criteria']);

        // Empty criteria is valid
        $valid = $criteria === '' || $criteria === '[]';

        // If there is no criteria, we are valid straight away
        if ($valid) {
            $request->validate();
        } else {
            // If we need to evaluate the criteria then we need to check for if
            // this is an update to handle changes/to/from
            $criteria = $this->validateUpdateState($criteria, $request->getArguments());

            $this->setLogicHookArgs($request->getArguments());

            // Now check if the evaluation is valid as well
            if ($this->getEvaluator()->evaluateExpression($criteria, $bean, $paramsRelated)) {
                $request->validate();
            } else {
                $request->invalidate();
            }
        }

        $condition = $this->getEvaluator()->condition();
        $this->getLogger()->debug("Eval: $condition returned " . ($request->isValid()));
        return $request;
    }

    /**
     *
     * @param type $bean
     * @param type $flowData
     * @param type $request
     * @return array
     */
    public function validateParamsRelated($bean, $flowData, $request)
    {
        $paramsRelated = array();
        if ($request->getExternalAction() == 'EVALUATE_RELATED_MODULE') {
            // If this expression is for a waiting event with criteria on a related
            // record then evaluation is different when doing an ANY or ALL criteria
            // evaluation. In this case the bean needs to be the target bean and
            // we should NOT replace any fields.
            if ($this->hasValidRelationship($bean, $flowData)) {
                // Check if this is an ANY or ALL type operation
                if ($this->hasAnyOrAllTypeOperation(trim($flowData['evn_criteria']))) {
                    $paramsRelated['updateRelateCriteria'] = true;
                } else {
                    $paramsRelated = array(
                        'replace_fields' => array(
                            $flowData['rel_element_relationship'] => $flowData['rel_element_module'],
                        ),
                    );
                }
            } else {
                $request->invalidate();
            }
        }

        if ($request->getExternalAction() == 'EVALUATE_MAIN_MODULE') {
            if (
                $bean->module_name != $flowData['cas_sugar_module']
                || $bean->id != $flowData['cas_sugar_object_id']
            ) {
                $request->invalidate();
            }
        }

        if ($request->getExternalAction() == 'NEW') {
            if (!PMSEEngineUtils::isTargetModule($flowData, $bean)
            ) {
                $paramsRelated = array(
                    'replace_fields' => array(
                        $flowData['rel_element_relationship'] => $flowData['rel_element_module']
                    )
                );
            }
        }

        $this->getLogger()->debug("Parameters related returned :" . print_r($paramsRelated, true));
        return $paramsRelated;
    }


    /**
     * Return true if bean specified by data in flowdata and bean specified by bean have a link defined
     * @param $bean
     * @param $flowData
     * @return bool
     */
    public function hasValidRelationship($bean, $flowData)
    {
        // Check the cache for this first
        $cacheKey = sprintf(
            '%s:%s:%s',
            $flowData['cas_sugar_module'],
            $flowData['cas_sugar_object_id'],
            $flowData['rel_element_relationship']
        );

        // If we have a cached value, send it back
        if ($this->hasCacheValue($cacheKey)) {
            return $this->getCacheValue($cacheKey);
        }

        // We don't need the entire retrieved bean for this operation...
        $seedBean = BeanFactory::getBean($flowData['cas_sugar_module'], $flowData['cas_sugar_object_id']);

        if (is_null($seedBean) || empty($seedBean->id) || empty($bean->id)) {
            return false;
        }

        // Get the relationship field and see if we have it
        $relField = $flowData['rel_element_relationship'];
        $hasRel = $seedBean->load_relationship($relField);

        $return = false;
        // If there is a seed bean and there is a valid relationship...
        if ($seedBean->id && $hasRel) {
            // Get the row for this relationship by query instead through beans
            // which is much more expensive
            $relWhere = array(
                'where' => array(
                    'lhs_field' => 'id',
                    'operator' => '=',
                    'rhs_value' => $bean->id,
                ),
            );

            // use load() since getQuery() is deprecated
            $results = $seedBean->$relField->getRelationshipObject()->load($seedBean->$relField, $relWhere);
            
            $rows = !empty($results['rows']) ? $results['rows'] : [];
            if (count($rows) > 0) {
                // And verify that the relationship is actually valid record to record
                $id = key($rows);
                $return = $id === $bean->id;
            }
        } else {
            // Otherwise just return whether there is a relationship
            $return = $hasRel;
        }

        // Set the cache and return the value
        $this->addCacheValue($cacheKey, $return);
        return $return;
    }
}
