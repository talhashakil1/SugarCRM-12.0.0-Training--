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

namespace Sugarcrm\Sugarcrm\Maps;

use BeanFactory;
use Doctrine\DBAL\Exception as DBALException;
use Exception;
use RunnableSchedulerJob;
use SchedulersJob;
use Sugarcrm\Sugarcrm\Maps\GCSClient;

/**
 *
 * Persistent scheduler which is responsible to create subsequent jobs based
 * on what needs to be consumed from the database queue.
 *
 */
class Resolver implements RunnableSchedulerJob
{
    /**
     * @var SchedulersJob
     */
    protected $job;

    protected $gcsClient;

    /**
     * {@inheritDoc}
     */
    public function __construct()
    {
        $this->gcsClient = new GCSClient();
    }

    /**
     * {@inheritdoc}
     */
    public function setJob(SchedulersJob $job)
    {
        $this->job = $job;
    }

    /**
     * {@inheritdoc}
     */
    public function run($data)
    {
        if (!hasMapsLicense()) {
            return $this->job->failJob(translate('LBL_MAPS_NO_LICENSE_ACCESS'));
        }

        $data = $this->gcsClient->getData();

        $batchId = $data['batchId'];
        $message = "Batch ${batchId} is not ready";

        if ($data['response']['status'] === Constants::GEOCODE_SCHEDULER_STATUS_COMPLETED) {
            $this->geocodeSugarRecords($data);

            $message = "Batch ${batchId} was resolved";
        }

        return $this->job->succeedJob($message);
    }

    /**
     * Update the geocode records in sugar with longitude and latitude
     *
     * @param array $data
     *
     * @throws Exception
     * @throws DBALException
     */
    private function geocodeSugarRecords(array $data)
    {
        $records = $data['response']['data'];

        foreach ($records as $record) {
            $geocodeRecord = BeanFactory::retrieveBean(Constants::GEOCODE_MODULE, $record['sugar_id']);

            $geocoded = $record['status'] === Constants::GEOCODE_SCHEDULER_STATUS_COMPLETED;

            $geocodeRecord->latitude = $record['lat'];
            $geocodeRecord->longitude = $record['long'];
            $geocodeRecord->status = $record['status'];
            $geocodeRecord->postalcode = $record['postalcode'];
            $geocodeRecord->country = $record['country'];
            $geocodeRecord->geocoded = $geocoded;

            $geocodeRecord->save();
        }

        $this->updateExternalScheduler($data);
    }

    /**
     * Update External Scheduler record in sugar
     *
     * @param array $data
     *
     * @throws Exception
     * @throws DBALException
     */
    private function updateExternalScheduler(array $data)
    {
        $externalBatchId = $data['batchId'];
        $gcsResponse = $data['response'];
        $geocodedRecords = $gcsResponse['data'];
        $failedEntityCount = $gcsResponse['failedEntityCount'];
        $successEntityCount = $gcsResponse['successEntityCount'];

        $geocodeExternalBatchBean = BeanFactory::retrieveBean(Constants::GEOCODE_SCHEDULER_MODULE, $externalBatchId);

        $geocodeExternalBatchBean->processed_entity_success_count = $successEntityCount;
        $geocodeExternalBatchBean->processed_entity_failed_count = $failedEntityCount;
        $geocodeExternalBatchBean->geocode_result = json_encode($geocodedRecords);
        $geocodeExternalBatchBean->status = Constants::GEOCODE_SCHEDULER_STATUS_COMPLETED;

        $geocodeExternalBatchBean->save();
    }
}
