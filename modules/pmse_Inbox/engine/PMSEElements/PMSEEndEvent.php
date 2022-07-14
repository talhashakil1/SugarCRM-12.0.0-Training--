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


class PMSEEndEvent extends PMSEEvent
{
    /**
     * This method prepares the response of the current element based on the
     * $bean object and the $flowData, an external action such as
     * ROUTE or ADHOC_REASSIGN could be also processed.
     *
     * This method probably should be override for each new element, but it's
     * not mandatory. However the response structure always must pass using
     * the 'prepareResponse' Method.
     *
     * As defined in the example:
     *
     * $response['route_action'] = 'ROUTE'; //The action that should process the Router
     * $response['flow_action'] = 'CREATE'; //The record action that should process the router
     * $response['flow_data'] = $flowData; //The current flowData
     * $response['flow_filters'] = array('first_id', 'second_id'); //This attribute is used to filter the execution of the following elements
     * $response['flow_id'] = $flowData['id']; // The flowData id if present
     *
     * @param mixed $flowData
     * @param mixed $bean
     * @param string $externalAction
     * @param array $arguments
     * @return array
     * @throws SugarQueryException
     */
    public function run($flowData, $bean = null, $externalAction = '', $arguments = array())
    {
        if (!$this->hasMultipleOpenThreads($flowData['cas_id'])) {
            //close the whole case, flows and remaining threads included
            $this->caseFlowHandler->closeCase($flowData['cas_id']);
        }

        //close the thread
        $this->caseFlowHandler->closeThreadByCaseIndex($flowData['cas_id'], $flowData['cas_previous']);

        $flowData['cas_flow_status'] = 'CLOSED';
        return $this->prepareResponse($flowData, 'ROUTE', 'CREATE');
    }

    /**
     * True if flow data has 2 or more open threads
     *
     * @param string $casId
     * @return bool
     * @throws SugarQueryException
     */
    protected function hasMultipleOpenThreads(string $casId): bool
    {
        $q = $this->caseFlowHandler->retrieveSugarQueryObject();
        $q->from($this->caseFlowHandler->retrieveBean('pmse_BpmThread'));
        $q->select()->fieldRaw("NULL");
        $q->where()->equals('cas_id', $casId);
        $q->where()->equals('cas_thread_status', 'OPEN');
        $q->limit(2);
        $result = $q->execute();
        $count = count($result);

        return $count > 1;
    }
}
