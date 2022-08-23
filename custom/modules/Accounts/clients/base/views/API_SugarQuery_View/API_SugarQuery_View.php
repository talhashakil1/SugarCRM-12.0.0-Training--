<?php

// $SugarQuery = new SugarQuery(); 
// $SugarQuery->select()->fieldRaw('GROUP_CONCAT(accounts.name), test.email_address');
// $SugarQuery->from(BeanFactory::newBean('Accounts'));
// $SugarQuery->joinTable('email_addr_bean_rel')->on()
//     ->equalsField('accounts.id','email_addr_bean_rel.bean_id');
// $SugarQuery->joinTable('email_addresses',array('alias'=>'test'))->on()
//     ->equalsField('test.id','email_addr_bean_rel.email_address_id');
// $SugarQuery->where()->equals('industry', 'Education');
// $SugarQuery->groupByRaw("test.email_address");
// $SugarQuery->havingRaw('count(accounts.id) > 1');

// $preparedStmt = $SugarQuery->compile();
// $sql = $preparedStmt->getSQL();

// $GLOBALS['log']->fatal('Generated SQL: ', $sql);

// $result = $SugarQuery->execute();
// $GLOBALS['log']->fatal('Sugar Query Result: ', $result);





// $SugarQuery = new SugarQuery(); 
// $SugarQuery->select()->fieldRaw('GROUP_CONCAT(accounts.name), test.email_address');
// $SugarQuery->from(BeanFactory::newBean('Accounts'));
// $SugarQuery->joinTable('email_addr_bean_rel')->on()
//     ->equalsField('accounts.id','email_addr_bean_rel.bean_id');
// $SugarQuery->joinTable('email_addresses',array('alias'=>'test'))->on()
//     ->equalsField('test.id','email_addr_bean_rel.email_address_id');
// $SugarQuery->where()->equals('industry', 'Education');
// $SugarQuery->groupByRaw("test.email_address");
// $SugarQuery->havingRaw('count(accounts.id) > 1');
// $result = $SugarQuery->execute();
// $GLOBALS['log']->fatal('Sugar Query Result Using API: ', $result);