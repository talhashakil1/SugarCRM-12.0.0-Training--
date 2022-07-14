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

namespace Sugarcrm\Sugarcrm\Dbal\IbmDb2;

use Doctrine\DBAL\Driver\IBMDB2\DB2Statement as BaseStatement;
use Throwable;

/**
 * IBM DB2 statement
 */
class Statement extends BaseStatement
{
    /**
     * {@inheritdoc}
     *
     * @link https://bugs.php.net/bug.php?id=74703
     * @link https://bugs.php.net/bug.php?id=74732
     */
    public function execute($params = null)
    {
        if ($params) {
            foreach ($params as $key => $value) {
                if (is_bool($value)) {
                    // cast boolean values to integers to avoid ibm_db2 bugs on PHP 7
                    $params[$key] = (int) $value;
                }
            }
        }

        try {
            $res = parent::execute($params);
        } catch (Throwable $e) {
            [$msg, $code] = $this->errorInfo();
            throw new Db2Exception($msg, $code);
        }

        return $res;
    }
}
