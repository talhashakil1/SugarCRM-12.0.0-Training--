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

use Elastica\Exception\ResponseException;
use Sugarcrm\Sugarcrm\SearchEngine\SearchEngine;
use Sugarcrm\Sugarcrm\SearchEngine\Capability\GlobalSearch\GlobalSearchCapable;
use Sugarcrm\Sugarcrm\Elasticsearch\Adapter\ResultSet;
use Sugarcrm\Sugarcrm\Elasticsearch\Mapping\Mapping;
use Elastica\ResultSet as BaseResultSet;
use Elastica\Response;
use Elastica\Query;

/**
 *
 * Wrapper around new GlobalSearch framework, replaces previous logic.
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
class SugarSearchEngineElastic extends SugarSearchEngineAbstractBase
{
    /**
     * @var GlobalSearchCapable
     */
    protected $engine;

    /**
     * @var array
     */
    protected $options = array();

    /**
     * Ctor
     * @param array $options
     * @param GlobalSearchCapable $engine
     * @param LoggerManager $logger
     */
    public function __construct($options = array(), GlobalSearchCapable $engine = null, LoggerManager $logger = null)
    {
        $this->options = $options;
        $this->engine = $engine ?: SearchEngine::getInstance('GlobalSearch')->getEngine();
        parent::__construct($logger);
    }

    /**
     * {@inheritdoc}
     *
     * @return \Sugarcrm\Sugarcrm\SearchEngine\Capability\GlobalSearch\ResultSetInterface|null
     *
     * @throws \Exception
     */
    public function search($query, $offset = 0, $limit = 20, $options = array())
    {
        global $current_user;

        if (!$this->engine->isAvailable()) {
            return null;
        }

        $this->engine->term($query);
        $this->engine->offset($offset);
        $this->engine->limit($limit);
        $this->engine->highlighter(true);
        $this->engine->fieldBoost(true);

        // set module filter
        if (!empty($options['moduleFilter'])) {
            $this->engine->from($options['moduleFilter']);
        }

        $filters = array();

        if (isset($options['my_items']) && $options['my_items'] !== false) {
            if (empty($current_user->id)) {
                return null;
            }

            $ownerField = Mapping::PREFIX_COMMON . 'owner_id.owner';
            $filters[] = new \Elastica\Query\Term(array(
                $ownerField => $current_user->id,
            ));
        }

        // TODO - range filter
        if (isset($options['filter']) && $options['filter']['type'] == 'range') {
        }

        if (isset($options['favorites']) && $options['favorites'] == 2) {
            if (empty($current_user->id)) {
                return null;
            }

            $favField = Mapping::PREFIX_COMMON . 'user_favorites.agg';
            $filters[] = new \Elastica\Query\Term(array(
                $favField => $current_user->id,
            ));
        }

        // TODO - sort options
        if (isset($options['sort']) && is_array($options['sort'])) {
            foreach ($options['sort'] as $sort) {
            }
        }

        $this->engine->setFilters($filters);
        try {
            return $this->createResultSet($this->engine->search());
        } catch (ResponseException $responseException) {
            // just return empty result
            $emptySet = new BaseResultSet(new Response(''), new Query($query), []);
            $empty = new ResultSet($emptySet);
            return $this->createResultSet($empty);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * wrapper
     * @param ResultSet $resultSet
     * @return \Sugarcrm\Sugarcrm\Elasticsearch\Adapter\ResultSet
     */
    protected function createResultSet(ResultSet $resultSet)
    {
        return $resultSet;
    }
}
