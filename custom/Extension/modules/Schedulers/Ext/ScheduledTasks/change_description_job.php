<?php

array_push($job_strings, 'change_description_job');
function change_description_job()
{
    $query = 'SELECT * FROM accounts WHERE assigned_user_id = 1;';
    
    $GLOBALS['log']->fatal('query executed: ', $query);

    $stmt = $db->query($query);
    while($row = $db->fetchByAssoc($stmt))
    {
        $id = $row['id'];
        $website = 'www.quora.com';
        $updation_query = 'UPDATE accounts SET website = ? WHERE id = ?';
        $conn2 = $GLOBALS['db']->getConnection();
        $updation_result = $conn2->executeQuery($updation_query, array($website, $id));
        $GLOBALS['log']->fatal("website changed successfully");
    }

    return true;
}