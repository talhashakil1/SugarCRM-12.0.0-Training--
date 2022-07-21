<?php

array_push($job_strings, 'change_description_job');
function change_description_job()
{
	global $timedate, $db;
    $currentDateTime = $timedate->nowDb();
	$desc = 'my description has changed';

    $GLOBALS['log']->fatal('before query execution: ');

    $query = 'SELECT * FROM abc_testing WHERE date_entered <= '.$db->quoted($currentDateTime).' - interval 2 minute';

    
    $stmt = $db->query($query);

    $GLOBALS['log']->fatal('query executed: ', $query);


    /*while($row = $db->fetchByAssoc($stmt))
    {
        $id = $row['id'];
        $assigned_user = 'eef904ea-07f0-11ed-a272-024252287491';
        $updation_query = 'UPDATE abc_testing SET description = ? WHERE id = ?';
        $conn2 = $GLOBALS['db']->getConnection();
        $updation_result = $conn2->executeQuery($updation_query, array($assigned_user, $id));

        //$GLOBALS['log']->fatal("assigned user changed successfully");
    }*/


    return true;
}