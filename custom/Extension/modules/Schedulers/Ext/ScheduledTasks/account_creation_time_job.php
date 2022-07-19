<?php

array_push($job_strings, 'account_creation_time_job');
function account_creation_time_job()
{
  

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