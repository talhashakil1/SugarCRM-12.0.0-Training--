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
namespace Sugarcrm\Sugarcrm\Hint\Queue\Event;

abstract class AccountTagEvent extends AccountEvent
{
    /**
     * Converts event to format compatible with event queue
     *
     * @return array
     */
    public function toQueueRows(): array
    {
        $rows = [];

        $accountData = $this->getAccountData();
        $ids = $this->getAccountsetIdsByTagId($this->data['tagId']);
        foreach ($ids as $id) {
            $rows[] = [
                'type' => $this->getEventType(),
                'data' => array_merge(['accountsetId' => $id], $accountData),
            ];
        }

        return $rows;
    }
}
