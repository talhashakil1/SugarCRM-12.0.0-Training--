<?php

array_push($job_strings, 'account_creation_time_job');
function account_creation_time_job()
{
    global $timedate, $db;
    $currentDateTime = $timedate->nowDb();

    $query = 'SELECT * FROM accounts WHERE date_entered <= '.$db->quoted($currentDateTime).' - interval 10 minute';
    
    //$GLOBALS['log']->fatal('query executed: ', $query);

    $stmt = $db->query($query);
    while($row = $db->fetchByAssoc($stmt))
    {
        $id = $row['id'];
        $assigned_user = 'eef904ea-07f0-11ed-a272-024252287491';
        $updation_query = 'UPDATE accounts SET assigned_user_id = ? WHERE id = ?';
        $conn2 = $GLOBALS['db']->getConnection();
        $updation_result = $conn2->executeQuery($updation_query, array($assigned_user, $id));

        //$GLOBALS['log']->fatal("assigned user changed successfully");
    }
    return true;
}















/*require_once 'include/SugarQueue/SugarJobQueue.php';
$scheduledJob = new SchedulersJob();

$scheduledJob->name = 'Account Creation Time';
$scheduledJob->assigned_user_id = 1;
$scheduledJob->data = json_encode(array(
    'date_entered' => $bean->date_entered;
));

$scheduledJob->target = "class::accountCreationTimeCheck";

$queue = new SugarJobQueue();
if($queue->submitJob(scheduledJob))
{
    write_to_log(array(), "Job to track account creation time was scheduled", false);
}*/