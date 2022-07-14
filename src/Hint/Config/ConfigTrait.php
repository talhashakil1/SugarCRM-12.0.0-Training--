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
namespace Sugarcrm\Sugarcrm\Hint\Config;

trait ConfigTrait
{
    /**
     * @var Config
     */
    protected $config;


    /**
     * Get config
     *
     * @return Config
     */
    protected function getConfig(): Config
    {
        if (is_null($this->config)) {
            $this->config = new Config(\SugarConfig::getInstance());
        }

        return $this->config;
    }
}
