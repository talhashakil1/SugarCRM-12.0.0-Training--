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

namespace Sugarcrm\Sugarcrm\SugarConnect\Event;

use Sugarcrm\Sugarcrm\SugarConnect\Publisher;
use Sugarcrm\Sugarcrm\SugarConnect\Configuration\ConfigurationAwareInterface;
use Sugarcrm\Sugarcrm\SugarConnect\Configuration\ConfigurationAwareTrait;

final class Nop implements Publisher, ConfigurationAwareInterface
{
    use ConfigurationAwareTrait;

    /**
     * Does nothing. The event dies here.
     *
     * @param \SugarBean $bean  The bean that was changed.
     * @param string     $event The type of event.
     * @param array      $args  Additional arguments.
     *
     * @return void
     */
    public function publish(\SugarBean $bean, string $event, array $args) : void
    {
    }
}
