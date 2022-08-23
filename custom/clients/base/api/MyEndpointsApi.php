<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class MyEndpointsApi extends SugarApi
{
    public function registerApiRest()
    {
        return array(
            'MyGetEndpoint' => array(
                'reqType' => 'GET',

                'noLoginRequired' => true,

                'path' => array('Accounts', 'SameEmailAddressAccounts'),

                'pathVars' => array('', ''),

                'method' => 'SameEmailAddressAccounts',
            ),
        );
    }

    
    public function SameEmailAddressAccounts($api, $args)
    {

        $SugarQuery = new SugarQuery(); 
        $SugarQuery->select()->fieldRaw('GROUP_CONCAT(accounts.name) as accountName, test.email_address as emailAddress');
        $accountsBean = BeanFactory::newBean('Accounts');
        $accountsBean->disable_row_level_security = true;
        $accountsBean->disable_team_security = true;
        $SugarQuery->from($accountsBean);
        $SugarQuery->joinTable('email_addr_bean_rel')->on()
            ->equalsField('accounts.id','email_addr_bean_rel.bean_id');
        $SugarQuery->joinTable('email_addresses',array('alias'=>'test'))->on()
            ->equalsField('test.id','email_addr_bean_rel.email_address_id');
        $SugarQuery->where()->equals('industry', 'Education');
        $SugarQuery->groupByRaw("test.email_address");
        $SugarQuery->havingRaw('count(accounts.id) > 1');
        $result = $SugarQuery->execute();

        return $result;
    }

}