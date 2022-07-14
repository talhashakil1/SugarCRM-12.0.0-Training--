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

/**
 * Generic interface all sublcasses must implement in order to be pluggable with FTS.
 *
 *                      !!! DEPRECATION WARNING !!!
 *
 * All code in include/SugarSearchEngine is going to be deprecated in a future
 * release. Do not use any of its APIs for code customizations as there will be
 * no guarantee of support and/or functionality for it. Use the new framework
 * located in the directories src/SearchEngine and src/Elasticsearch.
 *
 * @deprecated
 */
interface SugarSearchEngineInterface
{
    /**
     *
     * Perform a search against the Full Text Search Engine
     *
     * @abstract
     * @param $query
     * @param int $offset
     * @param int $limit
     * @return array
     */
    public function search($query, $offset = 0, $limit = 20);

}
