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

namespace Sugarcrm\Sugarcrm\Audit;

use DBManagerFactory;
use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception as DBALException;
use JsonSerializable;
use SugarBean;
use Sugarcrm\Sugarcrm\Security\Context;
use Sugarcrm\Sugarcrm\Security\Subject;
use Sugarcrm\Sugarcrm\Util\Uuid;
use TimeDate;
use Sugarcrm\IdentityProvider\Srn\Converter;

class EventRepository
{
    /**
     * @var Connection
     */
    private $conn;

    /**
     * @var Context
     */
    private $context;

    /**
     * Constructor
     *
     * @param Connection $conn
     * @param Context $context
     */
    public function __construct(Connection $conn, Context $context)
    {
        $this->conn = $conn;
        $this->context = $context;
    }

    /**
     * Registers update in EventRepository. Then saves audited fields.
     * @param SugarBean $bean
     *
     * @return string id of audit event created
     * @throws DBALException
     */
    public function registerUpdate(SugarBean $bean)
    {
        return $this->save($bean, 'update', $this->context);
    }

    /**
     * Registers the update and attributes it to the provided subject
     *
     * @param SugarBean $bean The updated bean
     * @param Subject $subject The subject to attribute the update to
     *
     * @return string id of audit event created
     * @throws DBALException
     */
    public function registerUpdateAttributedToSubject(SugarBean $bean, Subject $subject)
    {
        return $this->save($bean, 'update', [
            'subject' => $subject,
            'attributes' => [],
        ]);
    }

    /**
     * Registers erasure EventRepository. Then saves audited fields.
     *
     * @param SugarBean $bean
     *
     * @return string id of audit event created
     * @throws DBALException
     */
    public function registerErasure(SugarBean $bean)
    {
        return $this->save($bean, 'erasure', $this->context);
    }

    /**
     * Saves EventRepository
     * @param SugarBean $bean SugarBean that was changed
     * @param string $eventType Audit event type
     * @param array|JsonSerializable $source The source of the event
     * @return string id of record saved
     * @throws DBALException
     */
    private function save(SugarBean $bean, string $eventType, $source)
    {
        /* @var User $current_user */
        global $current_user;
        $id =  Uuid::uuid1();

        $impersonated_by = null;
        if (isset($current_user->id) && null !== $current_user->sudoer) {
            $srn = Converter::fromString($current_user->sudoer);
            $srnResource = $srn->getResource();
            if ('user' === $srnResource[0]) {
                $impersonated_by = $srnResource[1];
            }
        }

        $this->conn->insert(
            'audit_events',
            [
                'id' => $id,
                'type' => $eventType,
                'parent_id' => $bean->id,
                'module_name' => $bean->module_name,
                'source' => json_encode($source),
                'date_created' => TimeDate::getInstance()->nowDb(),
                'impersonated_by' => $impersonated_by,
            ]
        );

        return $id;
    }

    /**
     * Retrieves latest audit events for given instance of bean and fields
     *
     * @param SugarBean $bean
     * @param array $fields
     * @return array[]
     */
    public function getLatestBeanEvents(SugarBean $bean, array $fields)
    {
        if (empty($fields)) {
            return [];
        }

        if (in_array('email', $fields)) {
            if (empty($bean->emailAddress->hasFetched)) {
                $emailsRaw = $bean->emailAddress->getAddressesByGUID($bean->id, $bean->module_name);
            } else {
                $emailsRaw = $bean->emailAddress->addresses;
            }

            if (count($fields) == 1 && $fields[0] === 'email' && empty($emailsRaw)) {
                return [];
            }
        }

        $auditTable = $bean->get_audit_table_name();

        $selectWithLJoin = "SELECT  atab.field_name, atab.date_created, atab.after_value_string, 
                                    ae.source, ae.type, ae.impersonated_by
                            FROM {$auditTable} atab
                            LEFT JOIN audit_events ae ON (ae.id = atab.event_id) 
                            LEFT JOIN {$auditTable} atab2 ON";

        $leftJoinCond = [];
        $leftJoinCond[] = 'atab2.parent_id = atab.parent_id AND atab2.field_name = atab.field_name
                           AND (atab2.date_created > atab.date_created
                                    OR (atab2.date_created = atab.date_created AND atab2.id > atab.id))';

        $where = [];
        $where[] = 'atab2.id is NULL AND atab.parent_id = ?';

        $addLJoinCond = [];
        $addWhere = [];
        $params = [$bean->id];
        $paramTypes = [null];
        $nonEmailFields = array_diff($fields, ['email']);
        if ($nonEmailFields) {
            $addLJoinCond[] = "(atab.field_name != 'email')";
            $addWhere[] = 'atab.field_name IN (?)';
            $params[] = $nonEmailFields;
            $paramTypes[] = Connection::PARAM_STR_ARRAY;
        }

        if (in_array('email', $fields) && !empty($emailsRaw)) {
            $addLJoinCond[] = "(atab.field_name = 'email' AND atab2.after_value_string = atab.after_value_string)";
            $addWhere[] = "(atab.field_name = 'email' AND atab.after_value_string IN (?))";
            $emailIds = array_column($emailsRaw, 'email_address_id');
            $params[] = $emailIds;
            $paramTypes[] = Connection::PARAM_STR_ARRAY;
        }

        $leftJoinCond[] = sprintf('(%s)', implode(' OR ', $addLJoinCond));
        $where[] = sprintf('(%s)', implode(' OR ', $addWhere));

        $sql = sprintf(
            '%s %s WHERE %s',
            $selectWithLJoin,
            implode(' AND ', $leftJoinCond),
            implode(' AND ', $where)
        );

        $stmt = $this->conn->executeQuery($sql, $params, $paramTypes);

        $db = DBManagerFactory::getInstance();

        $return = [];
        while ($row = $stmt->fetchAssociative()) {
            $row['source'] = json_decode($row['source'], true);
            //convert date
            $row['date_created'] = $db->fromConvert($row['date_created'], 'datetime');
            $return[] = $row;
        }

        return $return;
    }
}
