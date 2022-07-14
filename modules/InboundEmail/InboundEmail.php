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

use Sugarcrm\Sugarcrm\Security\InputValidation\Exception\ViolationException;
use Sugarcrm\Sugarcrm\Security\InputValidation\InputValidation;
use Sugarcrm\Sugarcrm\Security\Validator\Constraints\File;
use Sugarcrm\Sugarcrm\Security\Validator\Validator;

/**
 * Stub for certain interactions;
 */
class temp {
	var $name;
}

class InboundEmail extends SugarBean {

    /**
     * @var EmailUI
     */
    private $ui;

    // module specific
	var $conn;
	var $purifier; // HTMLPurifier object placeholder
	var $email;

	// fields
	var $id;
	var $deleted;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $name;
	var $status;
    /**
     * @var RemoteSystemName
     */
    private $remoteSystemName;
	var $email_user;
	var $email_password;
    public $eapm_id;
	var $port;
	var $service;
	var $mailbox;
	var $mailboxarray;
	var $delete_seen;
	var $mailbox_type;
	var $template_id;
	var $stored_options;
	var $group_id;
	var $is_personal;
	var $groupfolder_id;

	// email 2.0
	var $pop3socket;
	var $outboundInstance; // id to outbound_email instance
	var $autoImport;
	var $iconFlagged = "F";
	var $iconDraft = "D";
	var $iconAnswered = "A";
	var $iconDeleted = "del";
	var $isAutoImport = false;
	var $smarty;
	var $attachmentCount = 0;
	var $tempAttachment = array();
	var $unsafeChars = array("&", "!", "'", '"', '\\', '/', '<', '>', '|', '$',);
	var $currentCache;
	var $defaultSort = 'date';
	var $defaultDirection = "DESC";
	var $hrSort = array(
			0 => 'flagged',
			1 => 'status',
			2 => 'from',
			3 => 'subj',
			4 => 'date',
		);
	var $hrSortLocal = array(
			'flagged' => 'flagged',
			'status'  => 'answered',
			'from'    => 'fromaddr',
			'subject' => 'subject',
			'date'    => 'senddate',
		);

	// default attributes
	var $transferEncoding				  = array(0 => '7BIT',
												1 => '8BIT',
												2 => 'BINARY',
												3 => 'BASE64',
												4 => 'QUOTED-PRINTABLE',
												5 => 'OTHER'
											);
	// object attributes
	var $compoundMessageId; // concatenation of messageID and deliveredToEmail
	var $serverConnectString;
    public $EmailCachePath;
	var $InboundEmailCacheFile			= 'InboundEmail.cache.php';
	var $object_name					= 'InboundEmail';
	var $module_dir					= 'InboundEmail';
	var $table_name					= 'inbound_email';
	var $new_schema					= true;
	var $process_save_dates 			= true;
	var $order_by;
	var $dbManager;
	var $field_defs;
	var $column_fields;
	var $required_fields				= array('name'			=> 'name',
												'server_url' 	=> 'server_url',
												'mailbox'		=> 'mailbox',
												'user'			=> 'user',
												'port'			=> 'port',
											);
	var $imageTypes					= array("JPG", "JPEG", "GIF", "PNG");
	var $inlineImages					= array();  // temporary space to store ID of inlined images
	var $defaultEmailNumAutoreplies24Hours = 10;
	var $maxEmailNumAutoreplies24Hours = 10;
	// custom ListView attributes
	var $mailbox_type_name;
	var $global_personal_string;
	// service attributes
	var $tls;
	var $ca;
	var $ssl;
	var $protocol;
	var $keyForUsersDefaultIEAccount = 'defaultIEAccount';
    // URL template to use when importing inline images in emails
    public $imageUrlTemplate;
	protected $module_key = 'InboundEmail';

	/**
	 * Sole constructor
	 */
	public function __construct() {
	    $this->EmailCachePath = sugar_cached('modules/Emails');
	    parent::__construct();
        if (extension_loaded('imap')) {
			/*
			 * 1: Open
			 * 2: Read
			 * 3: Write
			 * 4: Close
			 */
			imap_timeout(1, 60);
			imap_timeout(2, 60);
			imap_timeout(3, 60);
		}

		$this->smarty = new Sugar_Smarty();
		$this->overview = new Overview();
        $settings = new ApiSettings();
        $this->imageUrlTemplate = rtrim(SugarConfig::getInstance()->get("site_url", false), '/')
            . "/rest/" . $settings->formatVersionForUrl() . "/Notes/%s/file/filename?force_download=0&platform=base";
	}

    public function __set($name, $value)
    {
        switch ($name) {
            case 'server_url':
                if ($value === null || $value === '') {
                    $this->remoteSystemName = null;

                    return;
                }

                try {
                    $this->remoteSystemName = RemoteSystemName::fromString($value);
                } catch (\DomainException $exception) {
                    $GLOBALS['log']->fatal(
                        'Unable to set InboundEmail::$server_url: ' . $exception->getMessage()
                    );
                }
                break;
            default:
                $this->$name = $value;
        }
    }

    public function &__get($name)
    {
        switch ($name) {
            case 'server_url':
                $server_url = $this->remoteSystemName !== null? $this->remoteSystemName->value() : null;
                return $server_url;
            default:
                return parent::__get($name);
        }
    }

    public function __isset($name)
    {
        switch ($name) {
            case 'server_url':
                return $this->remoteSystemName !== null;
            default:
                return parent::__isset($name);
        }
    }

    /**
	 * retrieves I-E bean
	 * @param string id
	 * @return object Bean
	 */
    function retrieve($id = -1, $encode=true, $deleted=true)
    {
		$ret = parent::retrieve($id,$encode,$deleted);
		// if I-E bean exist
		if (!is_null($ret)) {
            if (!empty($ret->email_password)) {
                $ret->email_password = htmlspecialchars_decode($this->email_password, ENT_QUOTES);
            }

		    $this->retrieveMailBoxFolders();
		}
		return $ret;
	}

	/**
	 * wraps SugarBean->save()
	 * @param string ID of saved bean
	 */
	function save($check_notify=false) {
        if (!empty($this->email_password)) {
            $this->email_password = htmlspecialchars_decode($this->email_password, ENT_QUOTES);
        }

		// generate cache table for email 2.0
		$multiDImArray = $this->generateMultiDimArrayFromFlatArray(explode(",", $this->mailbox), $this->retrieveDelimiter());
		$raw = $this->generateFlatArrayFromMultiDimArray($multiDImArray, $this->retrieveDelimiter());
		sort($raw);
		$raw = $this->filterMailBoxFromRaw(explode(",", $this->mailbox), $raw);
		$this->mailbox = implode(",", $raw);
		$ret = parent::save($check_notify);
		return $ret;
	}

	function filterMailBoxFromRaw($mailboxArray, $rawArray) {
		$newArray = array_intersect($mailboxArray, $rawArray);
		sort($newArray);
		return $newArray;
	} // fn

	/**
	 * Overrides SugarBean's mark_deleted() to drop the related cache table
	 * @param string $id GUID of I-E instance
	 */
	function mark_deleted($id) {
		parent::mark_deleted($id);

		//bug52021  we need to keep the reference to the folders table in order for emails module to function properly
		$this->deleteCache();
	}

	/**
	 * Mark cached email answered (replied)
	 * @param string $mailid (uid for imap, message_id for pop3)
	 */
	function mark_answered($mailid, $type = 'smtp') {
		switch ($type) {
			case 'smtp' :
                $q = "update email_cache set answered = 1 WHERE imap_uid = $mailid and ie_id = ".
                    $this->db->quoted($this->id);
				$this->db->query($q);
				break;
			case 'pop3' :
                $q = "update email_cache set answered = 1 WHERE message_id = " .
                    $this->db->quoted($mailid) . " and ie_id = ". $this->db->quoted($this->id);
				$this->db->query($q);
				break;
		}
	}

	/**
	 * Renames an IMAP mailbox
	 * @param string $newName
	 */
	function renameFolder($oldName, $newName) {
		$this->connectMailserver();
        $oldConnect = $this->getMailbox('', $oldName)->value();
        $newConnect = $this->getMailbox('', $newName)->value();
		if(!imap_renamemailbox($this->conn, $oldConnect , $newConnect)) {
			$GLOBALS['log']->debug("***INBOUNDEMAIL: failed to rename mailbox [ {$oldConnect} ] to [ {$newConnect} ]");
		} else {
        	$this->mailbox = str_replace($oldName, $newName, $this->mailbox);
        	$this->save();
            $sessionFoldersString = $this->getSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol);
        	$sessionFoldersString = str_replace($oldName, $newName, $sessionFoldersString);
            $this->setSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, $sessionFoldersString);
		}
	}

	///////////////////////////////////////////////////////////////////////////
	////	CUSTOM LOGIC HOOKS
	/**
	 * Called from $this->getMessageText()
	 * Allows upgrade-safe custom processing of message text.
	 *
	 * To use:
	 * 1. Create a directory path: ./custom/modules/InboundEmail if it does not exist
	 * 2. Create a file in the ./custom/InboundEmail/ folder called "getMessageText.php"
	 * 3. Define a function named "custom_getMessageText()" that takes a string as an argument and returns a string
	 *
	 * @param string $msgPart
	 * @return string
	 */
	function customGetMessageText($msgPart)
	{
		if(SugarAutoLoader::requireWithCustom("modules/InboundEmail/getMessageText.php")) {
			if(function_exists("custom_getMessageText")) {
				$GLOBALS['log']->debug("*** INBOUND EMAIL-CUSTOM_LOGIC: calling custom_getMessageText()");
				$msgPart = custom_getMessageText($msgPart);
			}
		}

		return $msgPart;
	}
	////	END CUSTOM LOGIC HOOKS
	///////////////////////////////////////////////////////////////////////////



	///////////////////////////////////////////////////////////////////////////
	////	EMAIL 2.0 SPECIFIC
	/**
	 * constructs a nicely formatted version of raw source
	 * @param int $uid UID of email
	 * @return string
	 */
	function getFormattedRawSource($uid) {
		global $app_strings;

			if (empty($this->id)) {
                $q = "SELECT raw_source FROM emails_text WHERE email_id = ". $this->db->quoted($uid);
				$r = $this->db->query($q);
				$a = $this->db->fetchByAssoc($r);
				$ret = array();
				$raw = $this->convertToUtf8($a['raw_source']);
				if (empty($raw)) {
					$raw = $app_strings['LBL_EMAIL_ERROR_VIEW_RAW_SOURCE'];
				}
			} else {
				if ($this->isPop3Protocol()) {
					$uid = $this->getCorrectMessageNoForPop3($uid);
				}
				$raw  = imap_fetchheader($this->conn, $uid, FT_UID+FT_PREFETCHTEXT);
				$raw .= $this->convertToUtf8(imap_body($this->conn, $uid, FT_UID));
			} // else
			$raw = to_html($raw);
			$raw = nl2br($raw);

		return $raw;
	}


    /**
     * helper method to convert text to utf-8 if necessary
     *
     * @param string $input text
     * @return string output text
     */
    function convertToUtf8($input)
    {
       $charset = $GLOBALS['locale']->detectCharset($input, true);

       // we haven't a clue due to missing package?, just return as itself
       if ($charset === FALSE) {
           return $input;
       }

       // convert if we can or must
       return $this->handleCharsetTranslation($input, $charset);
    }

	/**
	 * constructs a nicely formatted version of email headers.
	 * @param int $uid
	 * @return string
	 */
	function getFormattedHeaders($uid) {
		global $app_strings;

			if ($this->isPop3Protocol()) {
				$uid = $this->getCorrectMessageNoForPop3($uid);
			}
			$headers = imap_fetchheader($this->conn, $uid, FT_UID);

			$lines = explode("\n", $headers);

			$header = "<table cellspacing='0' cellpadding='2' border='0' width='100%'>";

			foreach($lines as $line) {
				$line = trim($line);

				if(!empty($line)) {
					$key = trim(substr($line, 0, strpos($line, ":")));
					$key = strip_tags($key);
					$value = trim(substr($line, strpos($line, ":") + 1));
					$value = to_html($value);

					$header .= "<tr>";
					$header .= "<td class='displayEmailLabel' NOWRAP><b>{$key}</b>&nbsp;</td>";
					$header .= "<td class='displayEmailValueWhite'>{$value}&nbsp;</td>";
					$header .= "</tr>";
				}
			}

			$header .= "</table>";
		return $header;
	}

	/**
	 * Empties Trash folders
	 */
	function emptyTrash() {
		global $sugar_config;

		$this->mailbox = $this->get_stored_options("trashFolder");
		if (empty($this->mailbox)) {
			$this->mailbox = 'INBOX.Trash';
		}
		$this->connectMailserver();

		$uids = imap_search($this->conn, "ALL", SE_UID);

		foreach($uids as $uid) {
			if(!imap_delete($this->conn, $uid, FT_UID)) {
				$lastError = imap_last_error();
				$GLOBALS['log']->warn("INBOUNDEMAIL: emptyTrash() Could not delete message [ {$uid} ] from [ {$this->mailbox} ].  IMAP_ERROR [ {$lastError} ]");
			}
		}

		// remove local cache file
		$q = "DELETE FROM email_cache WHERE mbox = '{$this->mailbox}' AND ie_id = '{$this->id}'";
		$r = $this->db->query($q);
	}

	/**
	 * Fetches a timestamp
	 */
	function getCacheTimestamp($mbox) {
		$key = $this->db->quote("{$this->id}_{$mbox}");
        $q = "SELECT ie_timestamp FROM inbound_email_cache_ts WHERE id = ". $this->db->quoted($key);
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		if(empty($a)) {
			return -1;
		}
		return $a['ie_timestamp'];
	}

	/**
	 * sets the cache timestamp
	 * @param string mbox
	 */
    public function setCacheTimestamp($mbox): void
    {
		$key = $this->db->quote("{$this->id}_{$mbox}");
        $ts = time();
		$tsOld = $this->getCacheTimestamp($mbox);

		if($tsOld < 0) {
            $q = "INSERT INTO inbound_email_cache_ts (id, ie_timestamp) VALUES (". $this->db->quoted($key) .", {$ts})";
		} else {
            $q = "UPDATE inbound_email_cache_ts SET ie_timestamp = {$ts} WHERE id = " . $this->db->quoted($key);
		}

		$r = $this->db->query($q, true);
		$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: setting timestamp query [ {$q} ]");
	}


	/**
	 * Gets a count of all rows that are flagged seen = 0
	 * @param string $mbox
	 * @return int
	 */
	function getCacheUnreadCount($mbox) {
        $q = "SELECT count(*) c FROM email_cache WHERE mbox = " . $this->db->quoted($mbox) .
            " AND seen = 0 AND ie_id = ". $this->db->quoted($this->id);
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		return $a['c'];
	}

	/**
	 * Returns total number of emails for a mailbox
	 * @param string mbox
	 * @return int
	 */
	function getCacheCount($mbox) {
        $q = "SELECT count(*) c FROM email_cache WHERE mbox = " . $this->db->quoted($mbox) .
            " AND ie_id = ". $this->db->quoted($this->id);
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);

		return $a['c'];
	}

    function getCacheUnread($mbox) {
        $q = "SELECT count(*) c FROM email_cache WHERE mbox = " . $this->db->quoted($mbox) .
            " AND ie_id = " . $this->db->quoted($this->id) . " AND seen = '0'";
        $r = $this->db->query($q);
        $a = $this->db->fetchByAssoc($r);

        return $a['c'];
    }


	/**
	 * Deletes all rows for a given instance
	 */
	function deleteCache() {
        $q = "DELETE FROM email_cache WHERE ie_id = ? ";

		$GLOBALS['log']->info("INBOUNDEMAIL: deleting cache using query [ {$q} ]");
        $conn = $this->db->getConnection();
        $conn->executeQuery($q, array($this->id));
	}

	/**
	 * Deletes all the pop3 data which has been deleted from server
	 */
	function deletePop3Cache() {
		global $sugar_config;
		$UIDLs = $this->pop3_getUIDL();
		$cacheUIDLs = $this->pop3_getCacheUidls();
		foreach($cacheUIDLs as $msgNo => $msgId) {
			if (!in_array($msgId, $UIDLs)) {
                $this->getEmailUI()->deleteMboxCache($this->id, 'INBOX', $msgId);
                $q = "DELETE from email_cache where imap_uid = {$msgNo} AND msgno = {$msgNo} AND ie_id = " .
                    $this->db->quoted($this->id) . " AND message_id = " . $this->db->quoted($msgId);
				$r = $this->db->query($q);
			} // if
		} // for
	} // fn

	/**
	 * Retrieves cached headers
	 * @return array
	 */
	function getCacheValueForUIDs($mbox, $UIDs) {
		if (!is_array($UIDs) || empty($UIDs)) {
			return array();
		}

        $q = "SELECT * FROM email_cache WHERE ie_id = " . $this->db->quoted($this->id) .
            " AND mbox = " . $this->db->quoted($mbox) . " AND ";
		$startIndex = 0;
		$endIndex = 5;

		$slicedArray = array_slice($UIDs, $startIndex ,$endIndex);
		$columnName = ($this->isPop3Protocol() ? "message_id" : "imap_uid");
		$ret = array(
			'timestamp'	=> $this->getCacheTimestamp($mbox),
			'uids'		=> array(),
			'retArr'	=> array(),
		);
		while (!empty($slicedArray)) {
			$messageIdString = implode(',', $slicedArray);
			$GLOBALS['log']->debug("sliced array = {$messageIdString}");
			$extraWhere = "{$columnName} IN (";
			$i = 0;
			foreach($slicedArray as $UID) {
				if($i != 0) {
					$extraWhere = $extraWhere . ",";
				} // if
				$i++;
                $extraWhere = "{$extraWhere} " . $this->db->quoted($UID);
			} // foreach
			$newQuery = $q . $extraWhere . ")";
			$r = $this->db->query($newQuery);

			while($a = $this->db->fetchByAssoc($r)) {
				if (isset($a['uid'])) {
					if ($this->isPop3Protocol()) {
						$ret['uids'][] = $a['message_id'];
					} else {
				    	$ret['uids'][] = $a['uid'];
					}
				}

				$overview = new Overview();

				foreach($a as $k => $v) {
					$k=strtolower($k);
					switch($k) {
						case "imap_uid":
							$overview->imap_uid = $v;
							if ($this->isPop3Protocol()) {
								$overview->uid = $a['message_id'];
							} else {
								$overview->uid = $v;
							}
						break;
						case "toaddr":
							$overview->to = from_html($v);
						break;

						case "fromaddr":
							$overview->from = from_html($v);
						break;

						case "mailsize":
							$overview->size = $v;
						break;

						case "senddate":
							$overview->date = $v;
						break;

                        case 'subject':
                            $overview->subject = $v;
                        break;

						default:
							$overview->$k = from_html($v);
						break;
					} // switch
				} // foreach
				$ret['retArr'][] = $overview;
			} // while
			$startIndex = $startIndex + $endIndex;
			$slicedArray = array_slice($UIDs, $startIndex ,$endIndex);
			$messageIdString = implode(',', $slicedArray);
			$GLOBALS['log']->debug("sliced array = {$messageIdString}");
		} // while
		return $ret;
	}

	/**
	 * Retrieves cached headers
	 * @return array
	 */
	function getCacheValue($mbox, $limit = 20, $page = 1, $sort='', $direction='') {
		// try optimizing this call as we don't want repeat queries
		if(!empty($this->currentCache)) {
			return $this->currentCache;
		}

		$sort = (empty($sort)) ? $this->defaultSort : $sort;
		if (!in_array(strtolower($direction), array('asc', 'desc'))) $direction = $this->defaultDirection;

		if (!empty($this->hrSortLocal[$sort]))
		{
			$order = " ORDER BY {$this->hrSortLocal[$sort]} {$direction}";
		}
		else
		{
			$order = "";
		}

        $q = "SELECT * FROM email_cache WHERE ie_id = " . $this->db->quoted($this->id) . " AND mbox = " .
            $this->db->quoted($mbox) . " {$order}";

		if(!empty($limit)) {
			$start = ( $page - 1 ) * $limit;
			$r = $this->db->limitQuery($q, $start, $limit);
		} else {
			$r = $this->db->query($q);
		}

		$ret = array(
			'timestamp'	=> $this->getCacheTimestamp($mbox),
			'uids'		=> array(),
			'retArr'	=> array(),
		);

		while($a = $this->db->fetchByAssoc($r)) {
			if (isset($a['uid'])) {
				if ($this->isPop3Protocol()) {
					$ret['uids'][] = $a['message_id'];
				} else {
			    	$ret['uids'][] = $a['uid'];
				}
			}

			$overview = new Overview();

			foreach($a as $k => $v) {
				$k=strtolower($k);
				switch($k) {
					case "imap_uid":
						$overview->imap_uid = $v;
						if ($this->isPop3Protocol()) {
							$overview->uid = $a['message_id'];
						} else {
							$overview->uid = $v;
						}
					break;
					case "toaddr":
						$overview->to = from_html($v);
					break;

					case "fromaddr":
						$overview->from = from_html($v);
					break;

					case "mailsize":
						$overview->size = $v;
					break;

					case "senddate":
						$overview->date = $v;
					break;

                    case 'subject':
                        $overview->subject = $v;
                    break;

					default:
						$overview->$k = from_html($v);
					break;
				}
			}
			$ret['retArr'][] = $overview;
		}

		$this->currentCache = $ret;

		return $ret;
	}

	/**
	 * Sets cache values
	 */
    public function setCacheValue($mbox, array $insert, array $update = array(), array $remove = array())
    {
		if(empty($mbox)) {
			return;
		}
		global $timedate;


		// reset in-memory cache
		$this->currentCache = null;

		$table = 'email_cache';
        $where = "WHERE ie_id = " . $this->db->quoted($this->id) . " AND mbox = " . $this->db->quoted($mbox);

		// handle removed rows
		if(!empty($remove)) {
			$removeIds = '';
			foreach($remove as $overview) {
				if(!empty($removeIds)) {
					$removeIds .= ",";
				}

                $removeIds .= $this->db->quoted($overview->imap_uid);
			}

			$q = "DELETE FROM {$table} {$where} AND imap_uid IN ({$removeIds})";

			$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: delete query [ {$q} ]");

			$r = $this->db->query($q, true, $q);
		}

		// handle insert rows
		if(!empty($insert)) {
			$q = "SELECT imap_uid FROM {$table} {$where}";
			$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: filter UIDs query [ {$q} ]");
			$r = $this->db->query($q);
			$uids = array();

			while($a = $this->db->fetchByAssoc($r)) {
				$uids[] = $a['imap_uid'];
			}
			$count = count($uids);
			$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: found [ {$count} ] UIDs to filter against");

			$tmp = '';
			foreach($uids as $uid) {
				if(!empty($tmp))
					$tmp .= ", ";
				$tmp .= "{$uid}";
			}
			$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: filter UIDs: [ {$tmp} ]");

			$cols = "";

			foreach($this->overview->fieldDefs as $colDef) {
				if(!empty($cols))
					$cols .= ",";

				$cols .= "{$colDef['name']}";
			}
			foreach($insert as $overview) {
                if(in_array($overview->imap_uid, $uids))
                {
                    // fixing bug #49543: setting 'mbox' property for the following updating of other items in this box
                    if (!isset($overview->mbox))
                    {
                        $overview->mbox = $mbox;
                    }
                    $update[] = $overview;
                    continue;
                }

				$values = '';

				foreach($this->overview->fieldDefs as $colDef) {
					if(!empty($values)) {
						$values .= ", ";
					}

					// trim values for Oracle/MSSql
					if(	isset($colDef['len']) && !empty($colDef['len']) &&
						isset($colDef['type']) && !empty($colDef['type']) &&
						$colDef['type'] == 'varchar'
                        && isset($overview->{$colDef['name']})) {
                            $overview->{$colDef['name']} = substr($overview->{$colDef['name']}, 0, $colDef['len']);
                    }

					switch($colDef['name']) {
						case "imap_uid":
							if(isset($overview->uid) && !empty($overview->uid)) {
								$this->imap_uid = $overview->uid;
							}
                            $values .= $this->db->quoted($this->imap_uid);
						break;

						case "ie_id":
                            $values .= $this->db->quoted($this->id);
						break;

						case "toaddr":
							$values .= $this->db->quoted($overview->to);
						break;

						case "fromaddr":
							$values .= $this->db->quoted($overview->from);
						break;

						case "message_id" :
							$values .= $this->db->quoted($overview->message_id);
						break;

						case "mailsize":
							$values .= $overview->size;
						break;

						case "senddate":
							$conv=$timedate->fromString($overview->date);
							if (!empty($conv)) {
								$values .= $this->db->quoted($conv->asDb());
							} else {
								$values .= "NULL";
							}
						break;

                        case 'subject':
                            $overview->subject = SugarCleaner::cleanHtml(htmlspecialchars_decode($overview->subject, ENT_QUOTES));
                            $overview->subject = htmlspecialchars_decode($overview->subject, ENT_QUOTES);
                            $values .= $this->db->quoted($overview->subject);
                        break;

						case "mbox":
                            $values .= $this->db->quoted($mbox);
						break;

						default:
                            $overview->{$colDef['name']} = SugarCleaner::cleanHtml(from_html($overview->{$colDef['name']}));
                            $values .= $this->db->quoted($overview->{$colDef['name']});
						break;
					}
				}

				$q = "INSERT INTO {$table} ({$cols}) VALUES ({$values})";
				$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: insert query [ {$q} ]");
				$r = $this->db->query($q, true, $q);
			}
		}

		// handle update rows
		if(!empty($update)) {
			$cols = "";
			foreach($this->overview->fieldDefs as $colDef) {
				if(!empty($cols))
					$cols .= ",";

				$cols .= "{$colDef['name']}";
			}

			foreach($update as $overview) {
				$q = "UPDATE {$table} SET ";

				$set = '';
				foreach($this->overview->fieldDefs as $colDef) {

					switch($colDef['name']) {
						case "toaddr":
						case "fromaddr":
						case "mailsize":
						case "senddate":
						case "mbox":
						case "ie_id":
						break;

						default:
                            if(!empty($set))
                            {
                                $set .= ",";
                            }
                            $value = '';
                            if (isset($overview->{$colDef['name']})) {
                                $value = $this->db->quoted($overview->{$colDef['name']});
                            }
                            else
                            {
                                $value = $this->db->quoted($value);
                            }
                            $set .= "{$colDef['name']} = " . $value;
						break;
					}
				}

                $q .= $set . " WHERE ie_id = " . $this->db->quoted($this->id) . " AND mbox = " .
                    $this->db->quoted($overview->mbox) . " AND imap_uid = " .
                    $this->db->quoted($overview->imap_uid);
				$GLOBALS['log']->info("INBOUNDEMAIL-CACHE: update query [ {$q} ]");
				$r = $this->db->query($q, true, $q);
			}
		}

	}

	/**
	 * Opens a socket connection to the pop3 server
	 * @return bool
	 */
	function pop3_open() {
		if(!is_resource($this->pop3socket)) {
			$GLOBALS['log']->info("*** INBOUNDEMAIL: opening socket connection");
			$exServ = explode('::', $this->service);
			$socket  = ($exServ[2] == 'ssl') ? "ssl://" : "tcp://";
            $socket .= $this->remoteSystemName->value();
			$this->pop3socket = fsockopen($socket, $this->port);
		} else {
			$GLOBALS['log']->info("*** INBOUNDEMAIL: REUSING socket connection");
			return true;
		}

		if(!is_resource($this->pop3socket)) {
			$GLOBALS['log']->debug("*** INBOUNDEMAIL: unable to open socket connection");
			return false;
		}

		// clear buffer
		$ret = trim(fgets($this->pop3socket, 1024));
		$GLOBALS['log']->info("*** INBOUNDEMAIL: got socket connection [ {$ret} ]");
		return true;
	}

	/**
	 * Closes connections and runs clean-up routines
	 */
	function pop3_cleanUp() {
		$GLOBALS['log']->info("*** INBOUNDEMAIL: cleaning up socket connection");
		fputs($this->pop3socket, "QUIT\r\n");
		$buf = fgets($this->pop3socket, 1024);
		fclose($this->pop3socket);
	}

	/**
	 * sends a command down to the POP3 server
	 * @param string command
	 * @param string args
	 * @param bool return
	 * @return string
	 */
	function pop3_sendCommand($command, $args='', $return=true) {
		$command .= " {$args}";
		$command = trim($command);
		$GLOBALS['log']->info("*** INBOUNDEMAIL: pop3_sendCommand() SEND [ {$command} ]");
		$command .= "\r\n";

		fputs($this->pop3socket, $command);

		if($return) {
			$ret = trim(fgets($this->pop3socket, 1024));
			$GLOBALS['log']->info("*** INBOUNDEMAIL: pop3_sendCommand() RECEIVE [ {$ret} ]");
			return $ret;
		}
	}

	function getPop3NewMessagesToDownload() {
		$pop3UIDL = $this->pop3_getUIDL();
		$cacheUIDLs = $this->pop3_getCacheUidls();
		// new email cache values we should deal with
		$diff = array_diff_assoc($pop3UIDL, $cacheUIDLs);
		// this is msgNo to UIDL array
		$diff = $this->pop3_shiftCache($diff, $cacheUIDLs);
		// get all the keys which are msgnos;
		return array_keys($diff);
	}

	function getPop3NewMessagesToDownloadForCron() {
		$pop3UIDL = $this->pop3_getUIDL();
		$cacheUIDLs = $this->pop3_getCacheUidls();
		// new email cache values we should deal with
		$diff = array_diff_assoc($pop3UIDL, $cacheUIDLs);
		// this is msgNo to UIDL array
		$diff = $this->pop3_shiftCache($diff, $cacheUIDLs);
		// insert data into email_cache
		if ($this->groupfolder_id != null && $this->groupfolder_id != "" && $this->isPop3Protocol()) {
			$searchResults = array_keys($diff);
			$concatResults = implode(",", $searchResults);
			if ($this->connectMailserver() == 'true') {
				$fetchedOverviews = imap_fetch_overview($this->conn, $concatResults);
				// clean up cache entry
				foreach($fetchedOverviews as $k => $overview) {
					$overview->message_id = trim($diff[$overview->msgno]);
					$fetchedOverviews[$k] = $overview;
				}
				$this->updateOverviewCacheFile($fetchedOverviews);
			}
		} // if
		return $diff;
	}

	/**
	 * This method returns all the UIDL for this account. This should be called if the protocol is pop3
	 * @return array od messageno to UIDL array
	 */
	function pop3_getUIDL() {
		$UIDLs = array();
		if($this->pop3_open()) {
			// authenticate
			$this->pop3_sendCommand("USER", $this->email_user);
			$this->pop3_sendCommand("PASS", $this->email_password);

			// get UIDLs
			$this->pop3_sendCommand("UIDL", '', false); // leave socket buffer alone until the while()
			fgets($this->pop3socket, 1024); // handle "OK+";
			$UIDLs = array();

			$buf = '!';

			if(is_resource($this->pop3socket)) {
				while(!feof($this->pop3socket)) {
					$buf = fgets($this->pop3socket, 1024); // 8kb max buffer - shouldn't be more than 80 chars via pop3...

					if(trim($buf) == '.') {
						$GLOBALS['log']->debug("*** GOT '.'");
						break;
					}

					// format is [msgNo] [UIDL]
					$exUidl = explode(" ", $buf);
					$UIDLs[$exUidl[0]] = trim($exUidl[1]);
				} // while
			} // if
			$this->pop3_cleanUp();
		} // if
		return $UIDLs;
	} // fn

	/**
	 * Special handler for POP3 boxes.  Standard IMAP commands are useless.
	 * This will fetch only partial emails for POP3 and hence needs to be call again and again based on status it returns
	 */
	function pop3_checkPartialEmail($synch = false) {
		global $current_user;
		global $sugar_config;

		$cacheDataExists = false;
		$diff = array();
		$results = array();
		$cacheFilePath = clean_path("{$this->EmailCachePath}/{$this->id}/folders/MsgNOToUIDLData.php");
		if(file_exists($cacheFilePath)) {
			$cacheDataExists = true;
			if($fh = @fopen($cacheFilePath, "rb")) {
				$data = "";
				$chunksize = 1*(1024*1024); // how many bytes per chunk
				while(!feof($fh)) {
					$buf = fgets($fh, $chunksize); // 8kb max buffer - shouldn't be more than 80 chars via pop3...
					$data = $data . $buf;
	    			flush();
				} // while
				fclose($fh);
                $diff = unserialize($data, ['allowed_classes' => false]);
				if (!empty($diff)) {
					if (count($diff)> 50) {
	                	$newDiff = array_slice($diff, 50, count($diff), true);
					} else {
						$newDiff=array();
					}
	                $results = array_slice(array_keys($diff), 0 ,50);
					$data = serialize($newDiff);
				    if($fh = @fopen($cacheFilePath, "w")) {
				        fputs($fh, $data);
				        fclose($fh);
				    } // if
				}
			} // if
		} // if
		if (!$cacheDataExists) {
			if ($synch) {
			    $this->deletePop3Cache();
			}
			$UIDLs = $this->pop3_getUIDL();
			if(count($UIDLs) > 0) {
				// get cached UIDLs
				$cacheUIDLs = $this->pop3_getCacheUidls();

				// new email cache values we should deal with
				$diff = array_diff_assoc($UIDLs, $cacheUIDLs);
				$diff = $this->pop3_shiftCache($diff, $cacheUIDLs);
                $this->getEmailUI()->preflightEmailCache("{$this->EmailCachePath}/{$this->id}");

				if (count($diff)> 50) {
                	$newDiff = array_slice($diff, 50, count($diff), true);
				} else {
					$newDiff=array();
				}

				$results = array_slice(array_keys($diff), 0 ,50);
				$data = serialize($newDiff);
			    if($fh = @fopen($cacheFilePath, "w")) {
			        fputs($fh, $data);
			        fclose($fh);
			    } // if
			} else {
				$GLOBALS['log']->debug("*** INBOUNDEMAIL: could not open socket connection to POP3 server");
				return "could not open socket connection to POP3 server";
			} // else
		} // if

		// build up msgNo request
		if(count($diff) > 0) {
			// remove dirty cache entries
			$startingNo = 0;
			if (isset($_REQUEST['currentCount']) && $_REQUEST['currentCount'] > -1) {
			     $startingNo = $_REQUEST['currentCount'];
			}

			$this->mailbox = 'INBOX';
			$this->connectMailserver();
			$concatResults = implode(",", $results);
			$GLOBALS['log']->info('$$$$ '.$concatResults);
			$GLOBALS['log']->info("[EMAIL] Start POP3 fetch overview on mailbox [{$this->mailbox}] for user [{$current_user->user_name}] on 50 data");
			$fetchedOverviews = imap_fetch_overview($this->conn, $concatResults);
			$GLOBALS['log']->info("[EMAIL] End POP3 fetch overview on mailbox [{$this->mailbox}] for user [{$current_user->user_name}] on "
			. sizeof($fetchedOverviews) . " data");

			// clean up cache entry
			foreach($fetchedOverviews as $k => $overview) {
				$overview->message_id = trim($diff[$overview->msgno]);
				$fetchedOverviews[$k] = $overview;
			}

			$GLOBALS['log']->info("[EMAIL] Start updating overview cache for pop3 mailbox [{$this->mailbox}] for user [{$current_user->user_name}]");
			$this->updateOverviewCacheFile($fetchedOverviews);
			$GLOBALS['log']->info("[EMAIL] Start updating overview cache for pop3 mailbox [{$this->mailbox}] for user [{$current_user->user_name}]");
			return array('status' => "In Progress", 'mbox' => $this->mailbox, 'count'=> (count($results) + $startingNo), 'totalcount' => count($diff), 'ieid' => $this->id);
		} // if
		unlink($cacheFilePath);
		return  array('status' => "done");
	}


	/**
	 * Special handler for POP3 boxes.  Standard IMAP commands are useless.
	 */
	function pop3_checkEmail() {
		if($this->pop3_open()) {
			// authenticate
			$this->pop3_sendCommand("USER", $this->email_user);
			$this->pop3_sendCommand("PASS", $this->email_password);

			// get UIDLs
			$this->pop3_sendCommand("UIDL", '', false); // leave socket buffer alone until the while()
			fgets($this->pop3socket, 1024); // handle "OK+";
			$UIDLs = array();

			$buf = '!';

			if(is_resource($this->pop3socket)) {
				while(!feof($this->pop3socket)) {
					$buf = fgets($this->pop3socket, 1024); // 8kb max buffer - shouldn't be more than 80 chars via pop3...
					if(trim($buf) == '.') {
						$GLOBALS['log']->debug("*** GOT '.'");
						break;
					}

					// format is [msgNo] [UIDL]
					$exUidl = explode(" ", $buf);
					$UIDLs[$exUidl[0]] = trim($exUidl[1]);
				}
			}

			$this->pop3_cleanUp();

			// get cached UIDLs
			$cacheUIDLs = $this->pop3_getCacheUidls();

			// new email cache values we should deal with
			$diff = array_diff_assoc($UIDLs, $cacheUIDLs);

			// remove dirty cache entries
			$diff = $this->pop3_shiftCache($diff, $cacheUIDLs);

			// build up msgNo request
			if(!empty($diff)) {
				$this->mailbox = 'INBOX';
				$this->connectMailserver();
				$searchResults = array_keys($diff);
				$concatResults = implode(",", $searchResults);
				$fetchedOverviews = imap_fetch_overview($this->conn, $concatResults);

				// clean up cache entry
				foreach($fetchedOverviews as $k => $overview) {
					$overview->message_id = trim($diff[$overview->msgno]);
					$fetchedOverviews[$k] = $overview;
				}

				$this->updateOverviewCacheFile($fetchedOverviews);
			}
		} else {
			$GLOBALS['log']->debug("*** INBOUNDEMAIL: could not open socket connection to POP3 server");
			return false;
		}
	}

	/**
	 * Iterates through msgno and message_id to remove dirty cache entries
	 * @param array diff
	 */
	function pop3_shiftCache($diff, $cacheUIDLs) {
		$msgNos = "";
		$msgIds = "";
		$newArray = array();
		foreach($diff as $msgNo => $msgId) {
			if (in_array($msgId, $cacheUIDLs)) {
                $q1 = "UPDATE email_cache SET imap_uid = {$msgNo}, msgno = {$msgNo} WHERE ie_id = " .
                    $this->db->quoted($this->id) . " AND message_id = " . $this->db->quoted($msgId);
				$this->db->query($q1);
			} else {
				$newArray[$msgNo] = $msgId;
			}
		}
		return $newArray;
	}

	/**
	 * retrieves cached uidl values.
	 * When dealing with POP3 accounts, the message_id column in email_cache will contain the UIDL.
	 * @return array
	 */
	function pop3_getCacheUidls() {
        $q = "SELECT msgno, message_id FROM email_cache WHERE ie_id = " . $this->db->quoted($this->id);
		$r = $this->db->query($q);

		$ret = array();
		while($a = $this->db->fetchByAssoc($r)) {
			$ret[$a['msgno']] = $a['message_id'];
		}

		return $ret;
	}

	/**
	 * This function is used by cron job for group mailbox without group folder
	 * @param string $msgno for pop
	 * @param string $uid for imap
	 */
	function getMessagesInEmailCache($msgno, $uid) {
		$fetchedOverviews = array();
		if ($this->isPop3Protocol()) {
			$fetchedOverviews = imap_fetch_overview($this->conn, $msgno);
			foreach($fetchedOverviews as $k => $overview) {
				$overview->message_id = $uid;
				$fetchedOverviews[$k] = $overview;
			}
		} else {
            $fetchedOverviews = $this->getImapOverview($uid);
		} // else
		$this->updateOverviewCacheFile($fetchedOverviews);

	} // fn

    /**
     * Returns object with a bunch of headers and flags set from a message. Tries to emulate
     * the return value of imap_fetch_overview
     * @param $uid
     * @return stdClass
     */
    public function getImapOverview($uid)
    {
        $overview = new stdClass();
        $headersToCheck = ['subject', 'from', 'to', 'date', 'message_id', 'references', 'in_reply_to'];

        $message = $this->conn->getMessageFromId($uid);

        foreach ($headersToCheck as $headerName) {
            if (isset($message->$headerName)) {
                $name = strtolower($headerName);
                $name = str_replace('-', '_', $name);
                $overview->$name = $message->getHeader($headerName, 'string');
            }
        }

        $overview->size = $message->getSize();
        $overview->uid = $uid;
        $overview->msgno = $this->conn->getMessageNum($uid);

        $flags = ['recent', 'answered', 'flagged', 'deleted', 'draft'];

        foreach ($flags as $flag) {
            $overview->$flag = $this->conn->hasFlag($flag, $uid);
        }

        return $overview;
    }

	/**
	 * Checks email (local caching too) for one mailbox
	 * @param string $mailbox IMAP Mailbox path
	 * @param bool $prefetch Flag to prefetch email body on check
	 */
	function checkEmailOneMailbox($mailbox, $prefetch=true, $synchronize=false) {
		global $sugar_config;
		global $current_user;
		global $app_strings;

        $result = 1;

		$GLOBALS['log']->info("INBOUNDEMAIL: checking mailbox [ {$mailbox} ]");
		$this->mailbox = $mailbox;
		$this->connectMailserver();

		$checkTime = '';
		$shouldProcessRules = true;

		$timestamp = $this->getCacheTimestamp($mailbox);

		if($timestamp > 0) {
			$checkTime = date('r', $timestamp);
		}

		/* first time through, process ALL emails */
		if(empty($checkTime) || $synchronize) {
			// do not process rules for the first time or sunchronize
			$shouldProcessRules = false;
			$criteria = "ALL UNDELETED";
			$prefetch = false; // do NOT prefetch emails on a brand new account - timeouts happen.
			$GLOBALS['log']->info("INBOUNDEMAIL: new account detected - not prefetching email bodies.");
		} else {
			$criteria = "SINCE \"{$checkTime}\" UNDELETED"; // not using UNSEEN
		}
		$this->setCacheTimestamp($mailbox);
		$GLOBALS['log']->info("[EMAIL] Performing IMAP search using criteria [{$criteria}] on mailbox [{$mailbox}] for user [{$current_user->user_name}]");
		$searchResults = imap_search($this->conn, $criteria, SE_UID);
		$GLOBALS['log']->info("[EMAIL] Done IMAP search on mailbox [{$mailbox}] for user [{$current_user->user_name}]. Result count = ".count($searchResults));

		if(!empty($searchResults)) {
			// process rules
			if(($this->mailbox == 'INBOX') && ($shouldProcessRules == true)) { // only process rules when looking at INBOX emails
				$GLOBALS['log']->info("[EMAIL] Start processing rules mailbox [{$mailbox}] for user [{$current_user->user_name}]");
				$searchResults = $this->processRules($searchResults);
				$GLOBALS['log']->info("[EMAIL] Done processing rules mailbox [{$mailbox}] for user [{$current_user->user_name}]");
			}

			$concatResults = implode(",", $searchResults);
			$GLOBALS['log']->info("[EMAIL] Start IMAP fetch overview on mailbox [{$mailbox}] for user [{$current_user->user_name}]");
			$fetchedOverview = imap_fetch_overview($this->conn, $concatResults, FT_UID);
			$GLOBALS['log']->info("[EMAIL] Done IMAP fetch overview on mailbox [{$mailbox}] for user [{$current_user->user_name}]");

			$GLOBALS['log']->info("[EMAIL] Start updating overview cache for mailbox [{$mailbox}] for user [{$current_user->user_name}]");
			$this->updateOverviewCacheFile($fetchedOverview);
			$GLOBALS['log']->info("[EMAIL] Done updating overview cache for mailbox [{$mailbox}] for user [{$current_user->user_name}]");

			// prefetch emails
			if($prefetch == true) {
				$GLOBALS['log']->info("[EMAIL] Start fetching emails for mailbox [{$mailbox}] for user [{$current_user->user_name}]");
				if(!$this->fetchCheckedEmails($fetchedOverview))
                {
                    $result = 0;
                }
				$GLOBALS['log']->info("[EMAIL] Done fetching emails for mailbox [{$mailbox}] for user [{$current_user->user_name}]");
			}
		} else {
			$GLOBALS['log']->info("INBOUNDEMAIL: no results for mailbox [ {$mailbox} ]");
            $result = 1;
		}

		/**
		 * To handle the use case where an external client is also connected, deleting emails, we need to clear our
		 * local cache of all emails with the "DELETED" flag
		 */
		$criteria  = 'DELETED';
		$criteria .= (!empty($checkTime)) ? " SINCE \"{$checkTime}\"" : "";
		$GLOBALS['log']->info("INBOUNDEMAIL: checking for deleted emails using [ {$criteria} ]");

		$trashFolder = $this->get_stored_options("trashFolder");
		if (empty($trashFolder)) {
			$trashFolder = "INBOX.Trash";
		}

		if($this->mailbox != $trashFolder) {
			$searchResults = imap_search($this->conn, $criteria, SE_UID);
			if(!empty($searchResults)) {
				$uids = implode($app_strings['LBL_EMAIL_DELIMITER'], $searchResults);
				$GLOBALS['log']->info("INBOUNDEMAIL: removing UIDs found deleted [ {$uids} ]");
				$this->getOverviewsFromCacheFile($uids, $mailbox, true);
			}
		}
        return $result;
	}

	   /**
     * Checks email (local caching too) for one mailbox
     * @param string $mailbox IMAP Mailbox path
     * @param bool $prefetch Flag to prefetch email body on check
     */
    function checkEmailOneMailboxPartial($mailbox, $prefetch=true, $synchronize=false, $start = 0, $max = -1) {
        global $sugar_config;
        global $current_user;
        global $app_strings;

        $GLOBALS['log']->info("INBOUNDEMAIL: checking mailbox [ {$mailbox} ]");
        $this->mailbox = $mailbox;
        $this->connectMailserver();

        $checkTime = '';
        $shouldProcessRules = true;

        $timestamp = $this->getCacheTimestamp($mailbox);

        if($timestamp > 0) {
            $checkTime = date('r', $timestamp);
        }

        /* first time through, process ALL emails */
        if(empty($checkTime) || $synchronize) {
            // do not process rules for the first time or sunchronize
            $shouldProcessRules = false;
            $criteria = "ALL UNDELETED";
            $prefetch = false; // do NOT prefetch emails on a brand new account - timeouts happen.
            $GLOBALS['log']->info("INBOUNDEMAIL: new account detected - not prefetching email bodies.");
        } else {
            $criteria = "SINCE \"{$checkTime}\" UNDELETED"; // not using UNSEEN
        }
        $this->setCacheTimestamp($mailbox);
        $GLOBALS['log']->info("[EMAIL] Performing IMAP search using criteria [{$criteria}] on mailbox [{$mailbox}] for user [{$current_user->user_name}]");
        $searchResults = $this->getCachedIMAPSearch($criteria);

        if(!empty($searchResults)) {
            $total = sizeof($searchResults);
            $searchResults = array_slice($searchResults, $start, $max);

            $GLOBALS['log']->info("INBOUNDEMAIL: there are  $total messages in [{$mailbox}], we are on $start");
            $GLOBALS['log']->info("INBOUNDEMAIL: getting the next " . sizeof($searchResults) . " messages");
            $concatResults = implode(",", $searchResults);
            $GLOBALS['log']->info("INBOUNDEMAIL: Start IMAP fetch overview on mailbox [{$mailbox}] for user [{$current_user->user_name}]");
            $fetchedOverview = imap_fetch_overview($this->conn, $concatResults, FT_UID);
            $GLOBALS['log']->info("INBOUNDEMAIL: Done IMAP fetch overview on mailbox [{$mailbox}] for user [{$current_user->user_name}]");

            $GLOBALS['log']->info("INBOUNDEMAIL: Start updating overview cache for mailbox [{$mailbox}] for user [{$current_user->user_name}]");
            $this->updateOverviewCacheFile($fetchedOverview);
            $GLOBALS['log']->info("INBOUNDEMAIL: Done updating overview cache for mailbox [{$mailbox}] for user [{$current_user->user_name}]");

            // prefetch emails
            if($prefetch == true) {
                $GLOBALS['log']->info("INBOUNDEMAIL: Start fetching emails for mailbox [{$mailbox}] for user [{$current_user->user_name}]");
                $this->fetchCheckedEmails($fetchedOverview);
                $GLOBALS['log']->info("INBOUNDEMAIL: Done fetching emails for mailbox [{$mailbox}] for user [{$current_user->user_name}]");
            }
            $status = ($total > $start + sizeof($searchResults)) ? 'continue' : 'done';
            $count = $start + sizeof($searchResults);
            $ret = array('status' => $status, 'count' => $count, 'mbox' => $mailbox, 'totalcount' => $total);
            $GLOBALS['log']->info("INBOUNDEMAIL: $status : Downloaded $count messages of $total");
        } else {
            $GLOBALS['log']->info("INBOUNDEMAIL: no results for mailbox [ {$mailbox} ]");
            $ret = array('status' =>'done');
        }

        if ($ret['status'] == 'done') {
        	//Remove the cached search if we are done with this mailbox
        	$cacheFilePath = clean_path("{$this->EmailCachePath}/{$this->id}/folders/SearchData.php");
            unlink($cacheFilePath);
	        /**
	         * To handle the use case where an external client is also connected, deleting emails, we need to clear our
	         * local cache of all emails with the "DELETED" flag
	         */
	        $criteria  = 'DELETED';
	        $criteria .= (!empty($checkTime)) ? " SINCE \"{$checkTime}\"" : "";
	        $GLOBALS['log']->info("INBOUNDEMAIL: checking for deleted emails using [ {$criteria} ]");

			$trashFolder = $this->get_stored_options("trashFolder");
			if (empty($trashFolder)) {
				$trashFolder = "INBOX.Trash";
			}

	        if($this->mailbox != $trashFolder) {
	            $searchResults = imap_search($this->conn, $criteria, SE_UID);
	            if(!empty($searchResults)) {
	                $uids = implode($app_strings['LBL_EMAIL_DELIMITER'], $searchResults);
	                $GLOBALS['log']->info("INBOUNDEMAIL: removing UIDs found deleted [ {$uids} ]");
	                $this->getOverviewsFromCacheFile($uids, $mailbox, true);
	            }
	        }
        }
        return $ret;
    }

    function getCachedIMAPSearch($criteria) {
    	global $current_user;
        global $sugar_config;

    	$cacheDataExists = false;
        $diff = array();
        $results = array();
        $cacheFolderPath = clean_path("{$this->EmailCachePath}/{$this->id}/folders");
        if (!file_exists($cacheFolderPath)) {
        	mkdir_recursive($cacheFolderPath);
        }
        $cacheFilePath = $cacheFolderPath . '/SearchData.php';
        $GLOBALS['log']->info("INBOUNDEMAIL: Cache path is $cacheFilePath");
        if(file_exists($cacheFilePath)) {
            $cacheDataExists = true;
            if($fh = @fopen($cacheFilePath, "rb")) {
                $data = "";
                $chunksize = 1*(1024*1024); // how many bytes per chunk
                while(!feof($fh)) {
                    $buf = fgets($fh, $chunksize); // 8kb max buffer - shouldn't be more than 80 chars via pop3...
                    $data = $data . $buf;
                    flush();
                } // while
                fclose($fh);
                $results = unserialize($data, ['allowed_classes' => false]);
            } // if
        } // if
        if (!$cacheDataExists) {
            $searchResults = imap_search($this->conn, $criteria, SE_UID);
            if(count($searchResults) > 0) {
                $results = $searchResults;
                $data = serialize($searchResults);
                if($fh = @fopen($cacheFilePath, "w")) {
                    fputs($fh, $data);
                    fclose($fh);
                } // if
            }
        } // if
        return $results;
    }

    function checkEmailIMAPPartial($prefetch=true, $synch = false) {
    	$GLOBALS['log']->info("*****************INBOUNDEMAIL: at IMAP check partial");
        global $sugar_config;
        $result = $this->connectMailserver();
        if ($result == 'false')
        {
            return array(
                'status' => 'error',
                'message' => 'Email server is down'
            );
        }
        $mailboxes = $this->getMailboxes(true);
        if (!in_array('INBOX', $mailboxes)) {
            $mailboxes[] = 'INBOX';
        }
        sort($mailboxes);
        if (isset($_REQUEST['mbox']) && !empty($_REQUEST['mbox']) && isset($_REQUEST['currentCount'])) {
        	$GLOBALS['log']->info("INBOUNDEMAIL: Picking up from where we left off");
            $mbox = $_REQUEST['mbox'];
            $count = $_REQUEST['currentCount'];
        } else {
        	if ($synch) {
        		$GLOBALS['log']->info("INBOUNDEMAIL: Cleaning out the cache");
        		$this->cleanOutCache();
        	}
            $mbox = $mailboxes[0];
            $count = 0;
        }
        $GLOBALS['log']->info("INBOUNDEMAIL:found " . sizeof($mailboxes) . " Mailboxes");
        $index = array_search($mbox, $mailboxes) + 1;
        $ret = $this->checkEmailOneMailboxPartial($mbox, $prefetch, $synch, $count, 100);
        while($ret['status'] == 'done' && $index < sizeof($mailboxes)) {
            if ($ret['count'] > 100) {
                $ret['mbox'] = $mailboxes[$index];
                $ret['status'] = 'continue';
                return $ret;
            }
            $GLOBALS['log']->info("INBOUNDEMAIL: checking account [ $index => $mbox : $count]");
            $mbox = $mailboxes[$index];
            $ret = $this->checkEmailOneMailboxPartial($mbox, $prefetch, $synch, 0, 100);
            $index++;
        }

        return $ret;
    }

	function checkEmail2_meta() {
		global $sugar_config;

		$this->connectMailserver();
		$mailboxes = $this->getMailboxes(true);
		$mailboxes[] = 'INBOX';
		sort($mailboxes);

		$GLOBALS['log']->info("INBOUNDEMAIL: checking account [ {$this->name} ]");

		$mailboxes_meta = array();
		foreach($mailboxes as $mailbox) {
			$mailboxes_meta[$mailbox] = $this->getMailboxProcessCount($mailbox);
		}

		$ret = array();
		$ret['mailboxes'] = $mailboxes_meta;

		foreach($mailboxes_meta as $count) {
			$ret['processCount'] += $count;
		}
		return $ret;
	}

	function getMailboxProcessCount($mailbox) {
		global $sugar_config;

		$GLOBALS['log']->info("INBOUNDEMAIL: checking mailbox [ {$mailbox} ]");
		$this->mailbox = $mailbox;
		$this->connectMailserver();

		$timestamp = $this->getCacheTimestamp($mailbox);

		$checkTime = '';
		if($timestamp > 0) {
			$checkTime = date('r', $timestamp);
		}

		/* first time through, process ALL emails */
		if(empty($checkTime)) {
			$criteria = "ALL UNDELETED";
			$prefetch = false; // do NOT prefetch emails on a brand new account - timeouts happen.
			$GLOBALS['log']->info("INBOUNDEMAIL: new account detected - not prefetching email bodies.");
		} else {
			$criteria = "SINCE \"{$checkTime}\" UNDELETED"; // not using UNSEEN
		}

		$GLOBALS['log']->info("INBOUNDEMAIL: using [ {$criteria} ]");
		$searchResults = imap_search($this->conn, $criteria, SE_UID);

		if(!empty($searchResults)) {
			$concatResults = implode(",", $searchResults);
		} else {
			$GLOBALS['log']->info("INBOUNDEMAIL: no results for mailbox [ {$mailbox} ]");
		}

		if(empty($searchResults)) {
			return 0;
		}

		return count($searchResults);
	}

	/**
	 * update INBOX
	 */
	function checkEmail($prefetch=true, $synch = false) {
		global $sugar_config;

		if($this->protocol == 'pop3') {
			$this->pop3_checkEmail();
		} else {
			$this->connectMailserver();
			$mailboxes = $this->getMailboxes(true);
			sort($mailboxes);

			$GLOBALS['log']->info("INBOUNDEMAIL: checking account [ {$this->name} ]");

			foreach($mailboxes as $mailbox) {
				$this->checkEmailOneMailbox($mailbox, $prefetch, $synch);
			}
		}
	}

	/**
	 * full synchronization
	 */
	function syncEmail() {
		global $sugar_config;
		global $current_user;

        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		if(empty($showFolders)) {
			$showFolders = array();
		}

		$email = BeanFactory::newBean('Emails');
		$email->email2init();

		// personal accounts
		if($current_user->hasPersonalEmail()) {
			$personals = $this->retrieveByGroupId($current_user->id);

			foreach($personals as $personalAccount) {
				if(in_array($personalAccount->id, $showFolders)) {
					$personalAccount->email = $email;
					if ($personalAccount->isPop3Protocol()) {
						$personalAccount->deletePop3Cache();
						continue;
					}
					$personalAccount->cleanOutCache();
					$personalAccount->connectMailserver();
					$mailboxes = $personalAccount->getMailboxes(true);
					$mailboxes[] = 'INBOX';
					sort($mailboxes);

					$GLOBALS['log']->info("[EMAIL] Start checking account [{$personalAccount->name}] for user [{$current_user->user_name}]");

					foreach($mailboxes as $mailbox) {
						$GLOBALS['log']->info("[EMAIL] Start checking mailbox [{$mailbox}] of account [{$personalAccount->name}] for user [{$current_user->user_name}]");
						$personalAccount->checkEmailOneMailbox($mailbox, false, true);
						$GLOBALS['log']->info("[EMAIL] Done checking mailbox [{$mailbox}] of account [{$personalAccount->name}] for user [{$current_user->user_name}]");
					}
					$GLOBALS['log']->info("[EMAIL] Done checking account [{$personalAccount->name}] for user [{$current_user->user_name}]");
				}
			}
		}

		// group accounts
		$beans = $this->retrieveAllByGroupId($current_user->id, false);
		foreach($beans as $k => $groupAccount) {
			if(in_array($groupAccount->id, $showFolders)) {
				$groupAccount->email = $email;
				$groupAccount->cleanOutCache();
				$groupAccount->connectMailserver();
				$mailboxes = $groupAccount->getMailboxes(true);
				$mailboxes[] = 'INBOX';
				sort($mailboxes);

				$GLOBALS['log']->info("INBOUNDEMAIL: checking account [ {$groupAccount->name} ]");

				foreach($mailboxes as $mailbox) {
					$groupAccount->checkEmailOneMailbox($mailbox, false, true);
				}
			}
		}
	}

	/**
	 * Applies rules where applicable
	 * @param array $searchResults
	 * @param object $user User in focus, default to $current_user
	 * @return array
	 */
	function processRules($searchResults, $user=null) {
		global $current_user;



		if(empty($user)) {
			global $current_user;
			$user = $current_user;
		}

        $routing = new SugarRouting($this, $user);
		if (!isset($routing->rules) || empty($routing->rules)) {
		    // No point of going through results if there is no rule defined.
		    return $searchResults;
		}

		$newSearchResults = array();

		foreach($searchResults as $k => $result) {
			// special assignment for rules
			/*stdClass Object
			(
			    [subject] => aaa
			    [from] => Some Name
			    [to] => Some Name
			    [date] => Mon, 22 Jan 2007 17:32:57 -0800
			    [message_id] =>
			    [size] => 718
			    [uid] => 191
			    [msgno] => 141
			    [recent] => 0
			    [flagged] => 0
			    [answered] => 0
			    [deleted] => 0
			    [seen] => 1
			    [draft] => 0
			)*/
			$arr = imap_fetch_overview($this->conn, $result, FT_UID);
			$overview = $arr[0];
			$this->email = BeanFactory::newBean('Emails');
			$this->email->uid = $result;
			$this->email->imap_uid = $result;
			$this->email->mailbox_id = $this->id;
			$this->email->name = $overview->subject;
			$this->email->from_addr = $overview->from; // not in vardefs
			$this->email->to = $overview->to; // not in vardefs
			$this->email->date_sent = $overview->date;
			$this->email->flagged = $overview->flagged;
			$this->email->answered = $overview->answered;
			$this->email->deleted = $overview->deleted;
			$this->email->seen = $overview->seen;
			$this->email->draft = $overview->draft;

			if(!$routing->processRules($this->email, $this)) {
				$GLOBALS['log']->info("INBOUNDEMAIL: Rules not processed, adding to \$newSearchResults array");
				$newSearchResults[$k] = $result;
			} else {
				$GLOBALS['log']->info("INBOUNDEMAIL: Rule processed, NOT adding to \$newSearchResults array");
			}
		}

		return $newSearchResults;
	}

	/**
	 * Deletes cached messages when moving from folder to folder
	 * @param string $uids
	 * @param string $fromFolder
	 * @param string $toFolder
	 */
	function deleteCachedMessages($uids, $fromFolder) {
		global $sugar_config;

        $uids = $this->getEmailUI()->_cleanUIDList($uids);

		foreach($uids as $uid) {
            $this->getEmailUI()->deleteMboxCache($this->id, $fromFolder, $uid);
		}
	}

	/**
	 * similar to imap_fetch_overview, but it gets overviews from a local cache
	 * file.
	 * @param string $uids UIDs in comma-delimited format
	 * @param string $mailbox The mailbox in focus, will default to $this->mailbox
	 * @param bool $remove Default false
	 * @return array
	 */
	function getOverviewsFromCacheFile($uids, $mailbox='', $remove=false) {
		global $app_strings;

        $uids = $this->getEmailUI()->_cleanUIDList($uids, true);

		// load current cache file
		$mailbox = empty($mailbox) ? $this->mailbox : $mailbox;
		$cacheValue = $this->getCacheValue($mailbox);
		$ret = array();

		// prep UID array
		$exUids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);
		foreach($exUids as $k => $uid) {
			$exUids[$k] = trim($uid);
		}

		// fill $ret will requested $uids
		foreach($cacheValue['retArr'] as $k => $overview) {
			if(in_array($overview->imap_uid, $exUids)) {
				$ret[] = $overview;
			}
		}

		// remove requested $uids from current cache file (move_mail() type action)
		if($remove) {
			$this->setCacheValue($mailbox, array(), array(), $ret);
		}
		return $ret;
	}

	/**
	 * merges new info with the saved cached file
	 * @param array $array Array of email Overviews
	 * @param string $type 'append' or 'remove'
	 * @param string $mailbox Target mailbox if not current assigned
	 */
	function updateOverviewCacheFile($array, $type='append', $mailbox='') {
		$mailbox = empty($mailbox) ? $this->mailbox : $mailbox;

		$cacheValue = $this->getCacheValue($mailbox);
		$uids = $cacheValue['uids'];

		$updateRows = array();
		$insertRows = array();
		$removeRows = array();

		// update values
		if($type == 'append') { // append
			/* we are adding overviews to the cache file */
			foreach($array as $overview) {
				if(isset($overview->uid)) {
					$overview->imap_uid = $overview->uid; // coming from imap_fetch_overview() call
				}

				if(!in_array($overview->imap_uid, $uids)) {
					$insertRows[] = $overview;
				}
			}
		} else {
			$updatedCacheOverviews = array();
			// compare against generated list
			/* we are removing overviews from the cache file */
			foreach($cacheValue['retArr'] as $cacheOverview) {
				if(!in_array($cacheOverview->imap_uid, $uids)) {
					$insertRows[] = $cacheOverview;
				} else {
					$removeRows[] = $cacheOverview;
				}
			}

			$cacheValue['retArr'] = $updatedCacheOverviews;
		}

		$this->setCacheValue($mailbox, $insertRows, $updateRows, $removeRows);
	}

	/**
	 * Check email prefetches email bodies for quicker display
	 * @param array array of fetched overviews
	 */
	function fetchCheckedEmails($fetchedOverviews) {
		global $sugar_config;

		if(is_array($fetchedOverviews) && !empty($fetchedOverviews)) {
			foreach($fetchedOverviews as $overview) {
				if($overview->size < 10000) {

					$uid = $overview->imap_uid;
					if(!empty($uid)) {
                        if (!$this->getEmailUI()->mboxCacheExists($this->id, $this->mailbox, $uid)) {
							$this->setEmailForDisplay($uid);
							$out = $this->displayOneEmail($uid, $this->mailbox);
                            $this->getEmailUI()->writeMboxCacheValue($this->id, $this->mailbox, $uid, $out);
						}
					} else {
						$GLOBALS['log']->debug("*** INBOUNDEMAIL: prefetch has a message with no UID");
					}
                    return true;
				} else {
					$GLOBALS['log']->debug("INBOUNDEMAIL: skipping email prefetch - size too large [ {$overview->size} ]");
				}
			}
		}
        return false;
	}

	/**
	 * Sets flags on emails.  Assumes that connection is live, correct folder is
	 * set.
	 * @param string $uids Sequence of UIDs, comma separated
	 * @param string $type Flag to mark
	 */
	function markEmails($uids, $type) {
		switch($type) {
			case 'unread':
				$result = imap_clearflag_full($this->conn, $uids, '\\SEEN', ST_UID);
			break;
			case 'read':
				$result = imap_setflag_full($this->conn, $uids, '\\SEEN', ST_UID);
			break;
			case 'flagged':
				$result = imap_setflag_full($this->conn, $uids, '\\FLAGGED', ST_UID);
			break;
			case 'unflagged':
				$result = imap_clearflag_full($this->conn, $uids, '\\FLAGGED', ST_UID);
			break;
			case 'answered':
				$result = imap_setflag_full($this->conn, $uids, '\\Answered', ST_UID);
			break;
		}
	}
	////	END EMAIL 2.0 SPECIFIC
	///////////////////////////////////////////////////////////////////////////



	///////////////////////////////////////////////////////////////////////////
	////	SERVER MANIPULATION METHODS
	/**
	 * Deletes the specified folder
	 * @param string $mbox "::" delimited IMAP mailbox path, ie, INBOX.saved.stuff
     * @return array
	 */
    public function deleteFolder($mbox): array
    {
        $returnArray = array();
        if ($this->getCacheCount($mbox) > 0) {
            $returnArray['status']       = false;
            $returnArray['errorMessage'] = "Can not delete {$mbox} as it has emails.";
        } else {
            $connectString = $this->getMailbox('', $mbox)->value();
            //Remove Folder cache
            unlink("{$this->EmailCachePath}/{$this->id}/folders/folders.php");
            if (imap_unsubscribe($this->conn, imap_utf7_encode($connectString))) {
                if (imap_deletemailbox($this->conn, $connectString)) {
                    $this->mailbox = str_replace(("," . $mbox), "", $this->mailbox);
                    $this->save();
                    $sessionFoldersString = $this->getSessionInboundFoldersString(
                        $this->remoteSystemName,
                        $this->email_user,
                        $this->port,
                        $this->protocol
                    );
                    $sessionFoldersString = str_replace(("," . $mbox), "", $sessionFoldersString);
                    $this->setSessionInboundFoldersString(
                        $this->remoteSystemName,
                        $this->email_user,
                        $this->port,
                        $this->protocol,
                        $sessionFoldersString
                    );
                    $returnArray['status'] = true;
                } else {
                    $GLOBALS['log']->error(
                        "*** ERROR: EMAIL2.0 - could not delete IMAP mailbox with path: [ {$connectString} ]"
                    );
                    $returnArray['status']       = false;
                    $returnArray['errorMessage'] = 'ERR_DELETE_FOLDER';
                }
            } else {
                $GLOBALS['log']->error(
                    "*** ERROR: EMAIL2.0 - could not unsubscribe from folder, {$connectString} before deletion."
                );
                $returnArray['status']       = false;
                $returnArray['errorMessage'] = 'ERR_UNSUBSCRIBE_FROM_FOLDER';
            }
        }
        if (strlen($returnArray['errorMessage']) > 0) {
            $returnArray['errorMessage'] = translate($returnArray['errorMessage'], $this->module_name);
        }
        return $returnArray;
    }

	/**
	 * Saves new folders
	 * @param string $name Name of new IMAP mailbox
	 * @param string $mbox "::" delimited IMAP mailbox path, ie, INBOX.saved.stuff
	 * @return bool True on success
	 */
	function saveNewFolder($name, $mbox) {
		global $sugar_config;
        //Remove Folder cache
        global $sugar_config;
        $delimiter = $this->get_stored_options('folderDelimiter');
        if (!$delimiter) {
        	$delimiter = '.';
        }

        $newFolder = $mbox . $delimiter . $name;
        $mbox .= $delimiter.str_replace($delimiter, "_", $name);
        $connectString = $this->getMailbox('', $mbox)->value();

		if(imap_createmailbox($this->conn, imap_utf7_encode($connectString))) {
			imap_subscribe($this->conn, imap_utf7_encode($connectString));
			$status = imap_status($this->conn, str_replace("{$delimiter}{$name}","",$connectString), SA_ALL);
        	$this->mailbox = $this->mailbox . "," . $newFolder;
        	$this->save();
            $sessionFoldersString = $this->getSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol);
        	$sessionFoldersString = $sessionFoldersString . "," . $newFolder;
            $this->setSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, $sessionFoldersString);

			echo json_encode($status);
			return true;
		} else {
			echo "NOOP: could not create folder";
			$GLOBALS['log']->error("*** ERROR: EMAIL2.0 - could not create IMAP mailbox with path: [ {$connectString} ]");
			return false;
		}

	}

	/**
	 * Constructs an IMAP c-client compatible folder path from Sugar proprietary
	 * @param string $mbox "::" delimited IMAP mailbox path, ie, INBOX.saved.stuff
	 * @return string
	 */
	function getImapMboxFromSugarProprietary($mbox) {
		$exMbox = explode("::", $mbox);

		$mboxImap = '';

		for($i=2; $i<count($exMbox); $i++) {
			if(!empty($mboxImap)) {
				$mboxImap .= ".";
			}
			$mboxImap .= $exMbox[$i];
		}

		return $mboxImap;
	}

	/**
	 * Searches IMAP (and POP3?) accounts/folders for emails with qualifying criteria
	 */
	function search($ieId, $subject='', $from='', $to='', $body='', $dateFrom='', $dateTo='') {
		global $current_user;
		global $app_strings;
		global $timedate;

		$beans = array();
		$bean = BeanFactory::getBean('InboundEmail', $ieId);
		$beans[] = $bean;
		//$beans = $this->retrieveAllByGroupId($current_user->id, true);

		$subject = urldecode($subject);

		$criteria  = "";
		$criteria .= (!empty($subject)) ? 'SUBJECT '.from_html($subject).'' : "";
		$criteria .= (!empty($from)) ? ' FROM "'.$from.'"' : "";
		$criteria .= (!empty($to)) ? ' FROM "'.$to.'"' : "";
		$criteria .= (!empty($body)) ? ' TEXT "'.$body.'"' : "";
		$criteria .= (!empty($dateFrom)) ? ' SINCE "'.$timedate->fromString($dateFrom)->format('d-M-Y').'"' : "";
		$criteria .= (!empty($dateTo)) ? ' BEFORE "'.$timedate->fromString($dateTo)->format('d-M-Y').'"' : "";

        $showFolders = unserialize(base64_decode($current_user->getPreference('showFolders', 'Emails')), ['allowed_classes' => false]);

		$out = array();

		foreach($beans as $bean) {
			if(!in_array($bean->id, $showFolders)) {
				continue;
			}

			$GLOBALS['log']->info("*** INBOUNDEMAIL: searching [ {$bean->name} ] for [ {$subject}{$from}{$to}{$body}{$dateFrom}{$dateTo} ]");
			$group = (!$bean->is_personal) ? 'group.' : '';
			$bean->connectMailServer();
			$mailboxes = $bean->getMailboxes(true);
			if (!in_array('INBOX', $mailboxes)) {
				$mailboxes[] = 'INBOX';
			}
			$totalHits = 0;

			foreach($mailboxes as $mbox) {
				$bean->mailbox = $mbox;
				$searchOverviews = array();
				if ($bean->protocol == 'pop3') {
                    $pop3Criteria = "SELECT * FROM email_cache WHERE ie_id = " . $this->db->quoted($bean->id) .
                        " AND mbox = " .$this->db->quoted($mbox);
					$pop3Criteria .= (!empty($subject)) ? ' AND subject like "%'.$bean->db->quote($subject).'%"' : "";
					$pop3Criteria .= (!empty($from)) ? ' AND fromaddr like "%'.$from.'%"' : "";
					$pop3Criteria .= (!empty($to)) ? ' AND toaddr like "%'.$to.'%"' : "";
					$pop3Criteria .= (!empty($dateFrom)) ? ' AND senddate > "'.$dateFrom.'"' : "";
					$pop3Criteria .= (!empty($dateTo)) ? ' AND senddate < "'.$dateTo.'"' : "";
					$GLOBALS['log']->info("*** INBOUNDEMAIL: searching [ {$mbox} ] using criteria [ {$pop3Criteria} ]");

					$r = $bean->db->query($pop3Criteria);
					while($a = $bean->db->fetchByAssoc($r)) {
						$overview = new Overview();

						foreach($a as $k => $v) {
							$k=strtolower($k);
							switch($k) {
								case "imap_uid":
									$overview->imap_uid = $v;
									$overview->uid = $a['message_id'];
								break;
								case "toaddr":
									$overview->to = from_html($v);
								break;

								case "fromaddr":
									$overview->from = from_html($v);
								break;

								case "mailsize":
									$overview->size = $v;
								break;

								case "senddate":
									$overview->date = $timedate->fromString($v)->format('r');
								break;

								default:
									$overview->$k = from_html($v);
								break;
							} // sqitch
						} // foreach
						$searchOverviews[] = $overview;
					} // while
				} else {
					$bean->connectMailServer();
					$searchResult = imap_search($bean->conn, $criteria, SE_UID);
					if (!empty($searchResult)) {
						$searchOverviews = imap_fetch_overview($bean->conn, implode(',', $searchResult), FT_UID);
					} // if
				} // else
				$numHits = count($searchOverviews);

				if($numHits > 0) {
					$totalHits = $totalHits + $numHits;
					$ret = $bean->sortFetchedOverview($searchOverviews, 'date', 'desc', true);
					$mbox = "{$bean->id}.SEARCH";
					$out = array_merge($out, $bean->displayFetchedSortedListXML($ret, $mbox, false));
				}
			}
		}

		$metadata = array();
		$metadata['mbox'] = $app_strings['LBL_EMAIL_SEARCH_RESULTS_TITLE'];
		$metadata['ieId'] = $this->id;
		$metadata['name'] = $this->name;
		$metadata['unreadChecked'] = ($current_user->getPreference('showUnreadOnly', 'Emails') == 1) ? 'CHECKED' : '';
		$metadata['out'] = $out;

		return $metadata;
	}

	/**
	 * repairs the encrypted password for a given I-E account
	 * @return bool True on success
	 */
	function repairAccount() {

		for($i=0; $i<3; $i++) {
			$this->email_password = $this->email_password; // decode password

			if($this->connectMailserver() == 'true') {
				$this->save(); // save decoded password (is encoded on save())
				return true;
			}
		}

		return false;
	}

	/**
	 * soft deletes a User's personal inbox
	 * @param string id I-E id
	 * @param string user_name User name of User in focus, NOT current_user
	 * @return bool True on success
	 */
	function deletePersonalEmailAccount($id, $user_name) {
        $q = "SELECT ie.id FROM inbound_email ie LEFT JOIN users u ON ie.group_id = u.id WHERE u.user_name = " .
            $this->db->quoted($user_name);
		$r = $this->db->query($q, true);

		while($a = $this->db->fetchByAssoc($r)) {
			if(!empty($a) && $a['id'] == $id) {
				$this->retrieve($id);
				$this->deleted = 1;
				$this->save();
				return true;
			}
		}
		return false;
	}

	function getTeamSetIdForTeams($teamIds) {
		if(!is_array($teamIds)){
		   $teamIds = array($teamIds);
		} // if
		$teamSet = BeanFactory::newBean('TeamSets');
		$team_set_id = $teamSet->addTeams($teamIds);
		return $team_set_id;
	} // fn

	/**
	 * Saves Personal Inbox settings for Users
	 * @param string userId ID of user to assign all emails for this account
	 * @param strings userName Name of account, for Sugar purposes
	 * @param bool forceSave Default true.  Flag to save errored settings.
	 * @return boolean true on success, false on fail
	 */
	function savePersonalEmailAccount($userId = '', $userName = '', $forceSave=true) {
		global $current_user;

		if (SugarConfig::getInstance()->get("disable_user_email_config", false)
			&& !$current_user->isAdminForModule("Emails")
		) {
			ACLController::displayNoAccess(false);
			return false;
		}
		$groupId = $userId;
		$accountExists = false;
		if(isset($_REQUEST['ie_id']) && !empty($_REQUEST['ie_id'])) {
			$this->retrieve($_REQUEST['ie_id']);
			$accountExists = true;
		}
		$ie_name = $_REQUEST['ie_name'];

		$this->is_personal = 1;
		$this->name = $ie_name;
		$this->group_id = $groupId;
		$this->status = $_REQUEST['ie_status'];
        $this->remoteSystemName = RemoteSystemName::fromString(trim($_REQUEST['server_url']));
		$this->email_user = trim($_REQUEST['email_user']);
		if(!empty($_REQUEST['email_password'])) {
		    $this->email_password = html_entity_decode($_REQUEST['email_password'], ENT_QUOTES);
		}
		$this->port = trim($_REQUEST['port']);
		$this->protocol = $_REQUEST['protocol'];
		if ($this->protocol == "pop3") {
			$_REQUEST['mailbox'] = "INBOX";
		}
		$this->mailbox = $_REQUEST['mailbox'];
		$this->mailbox_type = 'pick'; // forcing this

		if(!empty($userId)) {
            if ($_REQUEST['ie_team'] == -1) {
                /** @var User $user */
                $user = BeanFactory::getBean('Users', $userId);
                $teamId = $user->getPrivateTeamID();
            } else {
                $teamId = $_REQUEST['ie_team'];
            }
			$this->team_id = $teamId;
			$this->team_set_id = $this->getTeamSetIdForTeams($teamId);
		}

		if(isset($_REQUEST['ssl']) && $_REQUEST['ssl'] == 1) { $useSsl = true; }
		else $useSsl = false;
		$this->service = '::::::::::';

		if($forceSave) {
			$id = $this->save(); // saving here to prevent user from having to re-enter all the info in case of error
			$this->retrieve($id);
		}

		$this->protocol = $_REQUEST['protocol']; // need to set this again since we safe the "service" string to empty explode values
        $opts = $this->getSessionConnectionOptions($this->remoteSystemName, $this->email_user, $this->port, $this->protocol);
		$detectedOpts = $this->findOptimumSettings($useSsl);

		//If $detectedOpts is empty, there was an error connecting, so clear $opts. If $opts was empty, use $detectedOpts
		if (empty($opts) || empty($detectedOpts) || (empty($detectedOpts['good']) && empty($detectedOpts['serial'])))
		{
		  $opts = $detectedOpts;
		}
        $delimiter = $this->getSessionInboundDelimiterString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol);

		if(isset($opts['serial']) && !empty($opts['serial'])) {
			$this->service = $opts['serial'];
			if(isset($_REQUEST['mark_read']) && $_REQUEST['mark_read'] == 1) {
				$this->delete_seen = 0;
			} else {
				$this->delete_seen = 1;
			}

			// handle stored_options serialization
			if(isset($_REQUEST['only_since']) && $_REQUEST['only_since'] == 1) {
				$onlySince = true;
			} else {
				$onlySince = false;
			}

			$focusUser = BeanFactory::getBean('Users', $groupId);
			$mailerId = (isset($_REQUEST['outbound_email'])) ? $_REQUEST['outbound_email'] : "";

			$oe = new OutboundEmail();
            $oe->getSystemMailerSettings();

			$stored_options = array();
			$stored_options['from_name'] = trim($_REQUEST['from_name']);
			$stored_options['from_addr'] = trim($_REQUEST['from_addr']);
			$stored_options['reply_to_addr'] = trim($_REQUEST['reply_to_addr']);

			if (!$this->isPop3Protocol()) {
				$stored_options['trashFolder'] = (isset($_REQUEST['trashFolder']) ? trim($_REQUEST['trashFolder']) : "");
				$stored_options['sentFolder'] = (isset($_REQUEST['sentFolder']) ? trim($_REQUEST['sentFolder']) : "");
			} // if
			$stored_options['only_since'] = $onlySince;
			$stored_options['filter_domain'] = '';
			$storedOptions['folderDelimiter'] = $delimiter;
			$stored_options['outbound_email'] = (isset($_REQUEST['outbound_email'])) ? $_REQUEST['outbound_email'] : $oe->id;
			$this->stored_options = base64_encode(serialize($stored_options));

			$ieId = $this->save();

			//If this is the first personal account the user has setup mark it as default for them.
			$currentIECount = $this->getUserPersonalAccountCount($focusUser);
			if($currentIECount == 1)
			    $this->setUsersDefaultOutboundServerId($focusUser, $ieId);

			return true;
		} else {
			// could not find opts, no save
			$GLOBALS['log']->debug('-----> InboundEmail could not find optimums for User: '.$ie_name);
			return false;
		}
	}
	/**
	 * Determines if this instance of I-E is for a Group Inbox or Personal Inbox
	 */
	function handleIsPersonal() {
        $qp = 'SELECT users.id, users.user_name FROM users WHERE users.is_group = 0 AND users.deleted = 0
            AND users.status = \'active\' AND users.id = '.$this->db->quoted($this->group_id);
		$rp = $this->db->query($qp, true);
		$personalBox = array();
		while($ap = $this->db->fetchByAssoc($rp)) {
			$personalBox[] = array($ap['id'], $ap['user_name']);
		}
		if(count($personalBox) > 0) {
			return true;
		} else {
			return false;
		}
	}

	function getUserNameFromGroupId() {
        $r = $this->db->query('SELECT users.user_name FROM users WHERE deleted=0 AND id='.
            $this->db->quoted($this->group_id), true);
		while($a = $this->db->fetchByAssoc($r)) {
			return $a['user_name'];
		}
		return '';
	}

	function getFoldersListForMailBox() {
		$return = array();
        $foldersList = $this->getSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol);
		if (empty($foldersList)) {
			global $mod_strings;
            $msg = $this->connectToImapServer(true);
			if (strpos($msg, "successfully")) {
                $foldersList = $this->getSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol);
				$return['status'] = true;
				$return['foldersList'] = $foldersList;
				$return['statusMessage'] = "";
			} else {
				$return['status'] = false;
				$return['statusMessage'] = $msg;
			} // else
		} else {
			$return['status'] = true;
			$return['foldersList'] = $foldersList;
			$return['statusMessage'] = "";
		}
		return $return;
	} // fn

    /**
     * Sets up connection info into session
     *
     * @param bool $useSsl
     * @param string $user
     * @param string $pass
     * @param RemoteSystemName|null $remoteSystemName
     * @param string $port
     * @param string $prot
     * @param string $mailboxName
     * @return array|bool
     */
    public function preConnectMailServer(
        $useSsl = false,
        $user = '',
        $pass = '',
        ?RemoteSystemName $remoteSystemName = null,
        $port = '',
        $prot = '',
        $mailboxName = '',
        $eapm_id = null
    ) {
        if (isset($_REQUEST['ssl']) && isTruthy($_REQUEST['ssl'])) {
            $useSsl = true;
        }

        if (isset($user) && !empty($user)) {
            $this->email_password = $pass;
            $this->email_user = $user;
            $this->remoteSystemName = $remoteSystemName;
            $this->port = $port;
            $this->protocol = $prot;
            $this->mailbox = $mailboxName;
            $this->eapm_id = $eapm_id;
        }

        //If user has selected multiple mailboxes, we only need to test the first mailbox for the connection string.
        $a_mailbox = explode(",", $this->mailbox);
        $tmpMailbox = isset($a_mailbox[0]) ? $a_mailbox[0] : "";

        $nonSsl = '/notls/novalidate-cert/secure';
        $ssl = '/ssl/tls/validate-cert/secure';

        $servicesList = $useSsl ? $ssl : $nonSsl;
        $mailbox = $this->getMailbox($servicesList, $tmpMailbox);

        // open the connection and test the settings
        $this->conn = $this->getImapMailer($mailbox);

        if (empty($this->conn)) {
            return false;
        }

        $boxes = $this->conn->getMailboxes();
        $delimiter = '.';
        // clean MBOX path names
        foreach ($boxes as $boxName => $boxProperties) {
            $raw[] = $boxName;
            if (!empty($boxProperties['delim'])) {
                $delimiter = $boxProperties['delim'];
            }
        }
        if (!empty($this->remoteSystemName)) {
            $this->setSessionInboundDelimiterString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, $delimiter);
        }

        $connectionOptions = '{' . $this->remoteSystemName->value() . ':' . $this->port
            . '/service=' . $this->protocol . $servicesList . '}';
        $connectionSettings = [
            'serial' => $this->getSerial($servicesList),
            'service' => $servicesList,
        ];
        $this->setSessionConnectionOptions($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, $connectionSettings);

        $i = 0;
        foreach ($raw as $mbox) {
            $raw[$i] = str_replace($connectionOptions, "", $GLOBALS['locale']->translateCharset($mbox, "UTF7-IMAP", "UTF8"));
            $i++;
        }
        sort($raw);
        $this->setSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, implode(",", $raw));

        return $connectionSettings;
    }

	/**
	 * Programatically determines best-case settings for imap_open()
	 */
    public function findOptimumSettings(
        $useSsl = false,
        $user = '',
        $pass = '',
        ?RemoteSystemName $remoteSystemName = null,
        $port = '',
        $prot = '',
        $mailboxName = ''
    ) {
		global $mod_strings;
        $mailboxes = [];
		$returnService = array();
		$badService = array();
		$goodService = array();
		$errorArr = array();
		$raw = array();
		$retArray = array(	'good' => $goodService,
							'bad' => $badService,
							'err' => $errorArr);

        if (!extension_loaded('imap')) {
			$retArray['err'][0] = $mod_strings['ERR_NO_IMAP'];
			return $retArray;
		}

		imap_errors(); // clearing error stack

		if(isset($_REQUEST['ssl']) && $_REQUEST['ssl'] == 1) {
			$useSsl = true;
		}

		$exServ = explode('::', $this->service);
		$service = '/'.$exServ[1];

		$nonSsl = array('both-secure'			=> '/notls/novalidate-cert/secure',
						'both'					=> '/notls/novalidate-cert',
						'nocert-secure'			=> '/novalidate-cert/secure',
						'nocert'				=> '/novalidate-cert',
						'notls-secure'			=> '/notls/secure',
						'secure'				=> '/secure', // for POP3 servers that force CRAM-MD5
						'notls'					=> '/notls',
						'none'					=> '', // try default nothing
					);
		$ssl = array(
						'ssl-both-on-secure'	=> '/ssl/tls/validate-cert/secure',
						'ssl-both-on'			=> '/ssl/tls/validate-cert',
						'ssl-cert-secure'		=> '/ssl/validate-cert/secure',
						'ssl-cert'				=> '/ssl/validate-cert',
						'ssl-tls-secure'		=> '/ssl/tls/secure',
						'ssl-tls'				=> '/ssl/tls',
						'ssl-both-off-secure'	=> '/ssl/notls/novalidate-cert/secure',
						'ssl-both-off'			=> '/ssl/notls/novalidate-cert',
						'ssl-nocert-secure'		=> '/ssl/novalidate-cert/secure',
						'ssl-nocert'			=> '/ssl/novalidate-cert',
						'ssl-notls-secure'		=> '/ssl/notls/secure',
						'ssl-notls'				=> '/ssl/notls',
						'ssl-secure'			=> '/ssl/secure',
						'ssl-none'				=> '/ssl',
					);

		if(isset($user) && !empty($user) && isset($pass) && !empty($pass)) {
			$this->email_password = $pass;
			$this->email_user = $user;
            $this->remoteSystemName = $remoteSystemName;
			$this->port = $port;
			$this->protocol = $prot;
            $this->mailbox = $mailboxName;
		}

		// in case we flip from IMAP to POP3
		if($this->protocol == 'pop3')
		  $this->mailbox = 'INBOX';

		//If user has selected multiple mailboxes, we only need to test the first mailbox for the connection string.
		$a_mailbox = explode(",", $this->mailbox);
		$tmpMailbox = isset($a_mailbox[0]) ? $a_mailbox[0] : "";

        if (null !== $this->remoteSystemName) {
            $servicesList = $useSsl ? $ssl : $nonSsl;
            foreach ($servicesList as $k => $service) {
                $returnService[$k] = 'foo' . $service;
                $mailboxes[$k] = $this->getMailbox($service, $tmpMailbox);
            }
        }

		$GLOBALS['log']->debug('---------------STARTING FINDOPTIMUMS LOOP----------------');
		$l = 1;

		//php imap library will capture c-client library warnings as errors causing good connections to be ignored.
		//Check against known warnings to ensure good connections are used.
		$acceptableWarnings = array("SECURITY PROBLEM: insecure server advertised AUTH=PLAIN", //c-client auth_pla.c
			                        "Mailbox is empty");
		$login = $this->email_user;
		$passw = $this->email_password;
		$foundGoodConnection = false;
        foreach ($mailboxes as $k => $mailbox) {
            $serviceTest = $mailbox->value();
            $GLOBALS['log']->debug($l . ': I-E testing string: ' . $serviceTest);

            // open the connection and try the test string
            $this->conn = $this->getImapConnection($mailbox, $login, $passw);

			if(($errors = imap_last_error()) || ($alerts = imap_alerts())) {
				if($errors == 'Too many login failures' || $errors == '[CLOSED] IMAP connection broken (server response)') { // login failure means don't bother trying the rest
					$GLOBALS['log']->debug($l.': I-E failed using ['.$serviceTest.']');
					$retArray['err'][$k] = $mod_strings['ERR_BAD_LOGIN_PASSWORD'];
					$retArray['bad'][$k] = $serviceTest;
					$GLOBALS['log']->debug($l.': I-E ERROR: $ie->findOptimums() failed due to bad user credentials for user login: '.$this->email_user);
				} elseif( in_array($errors, $acceptableWarnings, TRUE)) { // false positive
					$GLOBALS['log']->debug($l.': I-E found good connection but with warnings ['.$serviceTest.'] Errors:' . $errors);
					$retArray['good'][$k] = $returnService[$k];
					$foundGoodConnection = true;
				}
				else {
					$GLOBALS['log']->debug($l.': I-E failed using ['.$serviceTest.'] - error: '.$errors);
					$retArray['err'][$k] = $errors;
					$retArray['bad'][$k] = $serviceTest;
				}
			} else {
				$GLOBALS['log']->debug($l.': I-E found good connect using ['.$serviceTest.']');
				$retArray['good'][$k] = $returnService[$k];
				$foundGoodConnection = true;
			}

			if(is_resource($this->conn)) {
				if (!$this->isPop3Protocol()) {
					$serviceTest = str_replace("INBOX", "", $serviceTest);
					$boxes = imap_getmailboxes($this->conn, $serviceTest, "*");
					$delimiter = '.';
					// clean MBOX path names
					foreach($boxes as $k => $mbox) {
						$raw[] = $mbox->name;
						if ($mbox->delimiter) {
							$delimiter = $mbox->delimiter;
						} // if
					} // foreach
                    $this->setSessionInboundDelimiterString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, $delimiter);
				} // if

				if(!imap_close($this->conn)) $GLOBALS['log']->debug('imap_close() failed!');
			}

			$GLOBALS['log']->debug($l.': I-E clearing error and alert stacks.');
			imap_errors(); // clear stacks
			imap_alerts();
			// If you find a good connection, then don't do any further testing to find URL
			if ($foundGoodConnection) {
				break;
			} // if
			$l++;
		}
		$GLOBALS['log']->debug('---------------end FINDOPTIMUMS LOOP----------------');

		if(!empty($retArray['good'])) {
			$good = array_pop($retArray['good']); // get most complete string

            $goodStr['serial'] = $this->getSerial($good);
			$goodStr['service'] = $good;
			$testConnectString = str_replace('foo','', $good);
            $testConnectString = '{' . $this->remoteSystemName->value() . ':' . $this->port
                . '/service=' . $this->protocol . $testConnectString . '}';
            $this->setSessionConnectionOptions($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, $goodStr);
			$i = 0;
			foreach($raw as $mbox)
			{
				$raw[$i] = str_replace($testConnectString, "", $GLOBALS['locale']->translateCharset($mbox, "UTF7-IMAP", "UTF8" ));
				$i++;
			} // foreach
			sort($raw);
            $this->setSessionInboundFoldersString($this->remoteSystemName, $this->email_user, $this->port, $this->protocol, implode(",", $raw));
			return $goodStr;
		} else {
			return false;
		}
	}

    /**
     * Gets service info to be stored in session
     *
     * @param string $serviceStr
     * @return string
     */
    private function getSerial($serviceStr)
    {
        $newTls = '';
        $newCert = '';
        $newSsl = '';
        $newNotls = '';
        $newNovalidate_cert = '';
        $secure = '';
        $services = explode('/', $serviceStr);
        foreach ($services as $v) {
            switch ($v) {
                case 'ssl':
                    $newSsl = 'ssl';
                    break;
                case 'tls':
                    $newTls = 'tls';
                    break;
                case 'notls':
                    $newNotls = 'notls';
                    break;
                case 'cert':
                    $newCert = 'validate-cert';
                    break;
                case 'novalidate-cert':
                    $newNovalidate_cert = 'novalidate-cert';
                    break;
                case 'secure':
                    $secure = 'secure';
                    break;
            }
        }

        return  $newTls . '::' . $newCert . '::' . $newSsl . '::' . $this->protocol . '::' . $newNovalidate_cert
            . '::' . $newNotls . '::' . $secure;
    }

    public function getSessionConnectionOptions(RemoteSystemName $remoteSystemName, $email_user, $port, $protocol)
    {
        $sessionConnectionString = $remoteSystemName->value() . $email_user . $port . $protocol;
        return (isset($_SESSION[$sessionConnectionString]) ? $_SESSION[$sessionConnectionString] : "");
    }

    public function setSessionConnectionOptions(RemoteSystemName $remoteSystemName, $email_user, $port, $protocol, $goodStr)
    {
        $sessionConnectionString = $remoteSystemName->value() . $email_user . $port . $protocol;
        $_SESSION[$sessionConnectionString] = $goodStr;
    }

    public function getSessionInboundDelimiterString(RemoteSystemName $remoteSystemName, $email_user, $port, $protocol)
    {
        $sessionInboundDelimiterString = $remoteSystemName->value() . $email_user . $port . $protocol . 'delimiter';
        return (isset($_SESSION[$sessionInboundDelimiterString]) ? $_SESSION[$sessionInboundDelimiterString] : "");
    }

    public function setSessionInboundDelimiterString(
        RemoteSystemName $remoteSystemName,
        $email_user,
        $port,
        $protocol,
        $delimiter
    ) {
        $sessionInboundDelimiterString = $remoteSystemName->value() . $email_user . $port . $protocol . 'delimiter';
        $_SESSION[$sessionInboundDelimiterString] = $delimiter;
    }

    public function getSessionInboundFoldersString(RemoteSystemName $remoteSystemName, $email_user, $port, $protocol)
    {
        $sessionInboundFoldersListString = $remoteSystemName->value() . $email_user . $port . $protocol . 'foldersList';
        return (isset($_SESSION[$sessionInboundFoldersListString]) ? $_SESSION[$sessionInboundFoldersListString] : "");
    }

    public function setSessionInboundFoldersString(
        RemoteSystemName $remoteSystemName,
        $email_user,
        $port,
        $protocol,
        $foldersList
    ) {
        $sessionInboundFoldersListString = $remoteSystemName->value() . $email_user . $port . $protocol . 'foldersList';
        $_SESSION[$sessionInboundFoldersListString] = $foldersList;
    }

	/**
	 * Checks for duplicate Group User names when creating a new one at save()
	 * @return	GUID		returns GUID of Group User if user_name match is
	 * found
	 * @return	boolean		false if NO DUPE IS FOUND
	 */
	function groupUserDupeCheck() {
        $q = "SELECT u.id FROM users u WHERE u.deleted=0 AND u.is_group=1 AND u.user_name = ".
            $this->db->quoted($this->name);
		$r = $this->db->query($q, true);
		$uid = '';
		while($a = $this->db->fetchByAssoc($r)) {
			$uid = $a['id'];
		}

		if(strlen($uid) > 0) {
			return $uid;
		} else {
			return false;
		}
	}

	/**
	 * Returns <option> markup with the contents of Group users
	 * @param array $groups default empty array
	 * @return string HTML options
	 */
	function getGroupsWithSelectOptions($groups = array()) {
		$r = $this->db->query('SELECT id, user_name FROM users WHERE users.is_group = 1 AND deleted = 0', true);
		if(is_resource($r)) {
			while($a = $this->db->fetchByAssoc($r)) {
				$groups[$a['id']] = $a['user_name'];
			}
		}

		$selectOptions = get_select_options_with_id_separate_key($groups, $groups, $this->group_id);
		return $selectOptions;
	}

	/**
	 * handles auto-responses to inbound emails
	 *
	 * @param object email Email passed as reference
	 */
	function handleAutoresponse(&$email, &$contactAddr) {
		if($this->template_id) {
			$GLOBALS['log']->debug('found auto-reply template id - prefilling and mailing response');

			if($this->getAutoreplyStatus($contactAddr)
			&& $this->checkOutOfOffice($email->name)
			&& $this->checkFilterDomain($email)) { // if we haven't sent this guy 10 replies in 24hours

                $storedOptions = unserialize(base64_decode($this->stored_options), ['allowed_classes' => false]);
				// get FROM NAME
				if(!empty($storedOptions['from_name'])) {
					$from_name = $storedOptions['from_name'];
					$GLOBALS['log']->debug('got from_name from storedOptions: '.$from_name);
				} else { // use system default
					$rName = $this->db->query('SELECT value FROM config WHERE name = \'fromname\'', true);
					if(is_resource($rName)) {
						$aName = $this->db->fetchByAssoc($rName);
					}
					if(!empty($aName['value'])) {
						$from_name = $aName['value'];
					} else {
						$from_name = '';
					}
				}
				// get FROM ADDRESS
				if(!empty($storedOptions['from_addr'])) {
					$from_addr = $storedOptions['from_addr'];
				} else {
					$rAddr = $this->db->query('SELECT value FROM config WHERE name = \'fromaddress\'', true);
					if(is_resource($rAddr)) {
						$aAddr = $this->db->fetchByAssoc($rAddr);
					}
					if(!empty($aAddr['value'])) {
						$from_addr = $aAddr['value'];
					} else {
						$from_addr = '';
					}
				}

				$replyToName = (!empty($storedOptions['reply_to_name']))? from_html($storedOptions['reply_to_name']) :$from_name ;
				$replyToAddr = (!empty($storedOptions['reply_to_addr'])) ? $storedOptions['reply_to_addr'] : $from_addr;


				if(!empty($email->reply_to_email)) {
					$to[0]['email'] = $email->reply_to_email;
				} else {
					$to[0]['email'] = $email->from_addr;
				}
				// handle to name: address, prefer reply-to
				if(!empty($email->reply_to_name)) {
					$to[0]['display'] = $email->reply_to_name;
				} elseif(!empty($email->from_name)) {
					$to[0]['display'] = $email->from_name;
				}

				$et = BeanFactory::getBean('EmailTemplates', $this->template_id);
				if(empty($et->subject))		{ $et->subject = ''; }
				if(empty($et->body))		{ $et->body = ''; }
				if(empty($et->body_html))	{ $et->body_html = ''; }

				$reply = BeanFactory::newBean('Emails');
				$reply->type				= 'out';
                $reply->state = Email::STATE_ARCHIVED;
				$reply->to_addrs			= $to[0]['email'];
				$reply->to_addrs_arr		= $to;
				$reply->cc_addrs_arr		= array();
				$reply->bcc_addrs_arr		= array();
				$reply->from_name			= $from_name;
				$reply->from_addr			= $from_addr;
				$reply->name				= $et->subject;
				$reply->description			= $et->body;
				$reply->description_html	= $et->body_html;
				$reply->reply_to_name		= $replyToName;
				$reply->reply_to_addr		= $replyToAddr;

				$GLOBALS['log']->debug('saving and sending auto-reply email');
				$reply->send();
				$this->setAutoreplyStatus($contactAddr);
			} else {
				$GLOBALS['log']->debug('InboundEmail: auto-reply threshold reached for email ('.$contactAddr.') - not sending auto-reply');
			}
		}
	}

    /**
     * @deprecated since 11.1 This is now handled in Emails::handleCaseAssignment
     * @param $email
     * @return bool
     */
	function handleCaseAssignment($email) {
		$c = BeanFactory::newBean('Cases');
		if($caseId = $this->getCaseIdFromCaseNumber($email->name, $c)) {
			$c->retrieve($caseId);
			$email->retrieve($email->id);
            //assign the case info to parent id and parent type so that the case can be linked to the email on Email Save
			$email->parent_type = "Cases";
			$email->parent_id = $caseId;
			// assign the email to the case owner
			$email->assigned_user_id = $c->assigned_user_id;
            // Tell the case to recalc its SLAs
            $c->pending_processing = true;
            $c->save();
			$email->save();
			$GLOBALS['log']->debug('InboundEmail found exactly 1 match for a case: '.$c->name);
			return true;
		} // if
		return false;
	} // fn

	/**
	 * handles functionality specific to the Mailbox type (Cases, bounced
	 * campaigns, etc.)
	 *
	 * @param object email Email object passed as a reference
	 * @param object header Header object generated by imap_headerinfo();
	 */
	function handleMailboxType(&$email, &$header) {
		switch($this->mailbox_type) {
			case 'support':
				break;
			case 'bug':

				break;

			case 'info':
				// do something with this?
				break;
			case 'sales':
				// do something with leads? we don't have an email_leads table
				break;
			case 'task':
				// do something?
				break;
			case 'bounce':
				require_once('modules/Campaigns/ProcessBouncedEmails.php');
				campaign_process_bounced_emails($email, $header);
				break;
            case 'pick':
				break;
		}
	}

	function isMailBoxTypeCreateCase() {
		return ($this->mailbox_type == 'createcase' && !empty($this->groupfolder_id));
	} // fn

	function handleCreateCase($email, $userId) {
		global $current_user, $mod_strings, $current_language;
		$mod_strings = return_module_language($current_language, "Emails");
		$GLOBALS['log']->debug('In handleCreateCase');
		$c = BeanFactory::newBean('Cases');
		$this->getCaseIdFromCaseNumber($email->name, $c);

		if (!$this->handleCaseAssignment($email) && $this->isMailBoxTypeCreateCase()) {
			// create a case
			$GLOBALS['log']->debug('retrieveing email');
			$email->retrieve($email->id);
			$c = BeanFactory::newBean('Cases');

            //set the default values for the new case bean
            $description = $email->description ?: $email->description_html;
            $description = htmlspecialchars_decode($description);
            $caseDefaultValues = [
                'description' => $description,
                'assigned_user_id' => $userId,
                'name' => $email->name,
                'status' => 'New',
                'priority' => 'P1',
                'team_id' => $_REQUEST['team_id'],
                'team_set_id' => $_REQUEST['team_set_id'],
                'acl_team_set_id' => $_REQUEST['acl_team_set_id'],
                'pending_processing' => true,
            ];

            //assign default case values but check for empty state first in case some logic hook,
            //or custom studio default has already been assigned
            foreach ($caseDefaultValues as $field => $default) {
                if (empty($c->$field)) {
                    $c->$field = $default;
                }
            }

			if(!empty($email->reply_to_email)) {
				$contactAddr = $email->reply_to_email;
			} else {
				$contactAddr = $email->from_addr;
			}

			$GLOBALS['log']->debug('finding related accounts with address ' . $contactAddr);
			if($accountIds = $this->getRelatedId($contactAddr, 'accounts')) {
				if (sizeof($accountIds) == 1) {
					$c->account_id = $accountIds[0];

					$acct = BeanFactory::getBean('Accounts', $c->account_id);
					$c->account_name = $acct->name;
				} // if
			} // if
			$c->save(true);
			$caseId = $c->id;
			$c = BeanFactory::getBean('Cases', $caseId);
            if (empty($c->case_number)) {
                $sq = new SugarQuery();
                $sq->select(array('case_number'));
                $sq->from(BeanFactory::newBean('Cases'))
                    ->where()
                    ->equals('id', $c->id);

                $c->case_number = $sq->getOne();
            }
			if($c->load_relationship('emails')) {
				$c->emails->add($email->id);
			} // if
			if($contactIds = $this->getRelatedId($contactAddr, 'contacts')) {
				if(!empty($contactIds) && $c->load_relationship('contacts')) {
                    if (!$accountIds && count($contactIds) == 1) {
                        $contact = BeanFactory::getBean('Contacts', $contactIds[0]);
                        if ($contact->load_relationship('accounts')) {
                            $acct = $contact->accounts->get();
                            if ($c->load_relationship('accounts') && !empty($acct[0])) {
                                $c->accounts->add($acct[0]);
                            }
                        }
                    }
					$c->contacts->add($contactIds);
				} // if
			} // if
			$c->email_id = $email->id;
			$email->parent_type = "Cases";
			$email->parent_id = $caseId;
			// assign the email to the case owner
			$email->assigned_user_id = $c->assigned_user_id;
			$email->name = str_replace('%1', $c->case_number, $c->getEmailSubjectMacro()) . " ". $email->name;
			$email->save();
			$GLOBALS['log']->debug('InboundEmail created one case with number: '.$c->case_number);
			$createCaseTemplateId = $this->get_stored_options('create_case_email_template', "");
            $storedOptions = unserialize(base64_decode($this->stored_options), ['allowed_classes' => false]);
			if(!empty($createCaseTemplateId)) {
				$fromName = "";
				$fromAddress = "";
				if (!empty($this->stored_options)) {
					$fromAddress = $storedOptions['from_addr'];
					$fromName = from_html($storedOptions['from_name']);
					$replyToName = (!empty($storedOptions['reply_to_name']))? from_html($storedOptions['reply_to_name']) :$fromName ;
					$replyToAddr = (!empty($storedOptions['reply_to_addr'])) ? $storedOptions['reply_to_addr'] : $fromAddress;
				} // if
				$defaults = $current_user->getPreferredEmail();
				$fromAddress = (!empty($fromAddress)) ? $fromAddress : $defaults['email'];
				$fromName = (!empty($fromName)) ? $fromName : $defaults['name'];
				$to[0]['email'] = $contactAddr;

				// handle to name: address, prefer reply-to
				if(!empty($email->reply_to_name)) {
					$to[0]['display'] = $email->reply_to_name;
				} elseif(!empty($email->from_name)) {
					$to[0]['display'] = $email->from_name;
				}

				$et = BeanFactory::getBean('EmailTemplates', $createCaseTemplateId);
				if(empty($et->subject))		{ $et->subject = ''; }
				if(empty($et->body))		{ $et->body = ''; }
				if(empty($et->body_html))	{ $et->body_html = ''; }

				$et->subject = "Re:" . " " . str_replace('%1', $c->case_number, $c->getEmailSubjectMacro() . " ". $c->name);

				$html = trim($email->description_html);
				$plain = trim($email->description);

				$email->email2init();
	            $email->from_addr = $email->from_addr_name;
	            $email->to_addrs = $email->to_addrs_names;
	            $email->cc_addrs = $email->cc_addrs_names;
	            $email->bcc_addrs = $email->bcc_addrs_names;
	            $email->from_name = $email->from_addr;

            	$email = $email->et->handleReplyType($email, "reply");
            	$ret = $email->et->displayComposeEmail($email);
            	$ret['description'] = empty($email->description_html) ?  str_replace("\n", "\n<BR/>", $email->description) : $email->description_html;

				include_once('include/workflow/alert_utils.php');

				$reply = BeanFactory::newBean('Emails');
				$reply->type				= 'out';
                $reply->state = Email::STATE_ARCHIVED;
				$reply->to_addrs			= $to[0]['email'];
				$reply->to_addrs_arr		= $to;
				$reply->cc_addrs_arr		= array();
				$reply->bcc_addrs_arr		= array();
				$reply->from_name			= $fromName;
				$reply->from_addr			= $fromAddress;
				$reply->reply_to_name		= $replyToName;
				$reply->reply_to_addr		= $replyToAddr;
				$reply->name				= $et->subject;
				$reply->description			= trim(parse_alert_template($c, $et->body)) . "<div><hr /></div>" .  $email->description;
				if (!$et->text_only) {
					$reply->description_html = trim(parse_alert_template($c, $et->body_html)) .  "<div><hr /></div>" . $email->description;
				}
				$GLOBALS['log']->debug('saving and sending auto-reply email');
				$reply->send();
			} // if

		} else {
			if(!empty($email->reply_to_email)) {
				$contactAddr = $email->reply_to_email;
			} else {
				$contactAddr = $email->from_addr;
			}
			$this->handleAutoresponse($email, $contactAddr);
		}

	} // fn

	/**
	 * handles linking contacts, accounts, etc. to an email
	 *
	 * @param object Email bean to be linked against
	 * @return string contactAddr is the email address of the sender
	 */
	function handleLinking(&$email) {
		// link email to an User if emails match TO addr
		if($userIds = $this->getRelatedId($email->to_addrs, 'users')) {
			$GLOBALS['log']->debug('I-E linking email to User');
			// link the user to the email
			$email->load_relationship('users');
			$email->users->add($userIds);
		}

		// link email to a Contact, Lead, or Account if the emails match
		// give precedence to REPLY-TO above FROM
		if(!empty($email->reply_to_email)) {
			$contactAddr = $email->reply_to_email;
		} else {
			$contactAddr = $email->from_addr;
		}

		// Samir Gandhi : 12/06/07
		// This changes has been done because the linking was done only with the from address and
		// not with to address
		$relationShipAddress = $contactAddr;
		if (empty($relationShipAddress)) {
			$relationShipAddress .= $email->to_addrs;
		} else {
			$relationShipAddress = $relationShipAddress . "," . $email->to_addrs;
		}
		if($leadIds = $this->getRelatedId($relationShipAddress, 'leads')) {
			$GLOBALS['log']->debug('I-E linking email to Lead');
			$email->load_relationship('leads');
			$email->leads->add($leadIds);

			foreach($leadIds as $leadId) {
				$lead = BeanFactory::getBean('Leads', $leadId);
				$lead->load_relationship('emails');
				$lead->emails->add($email->id);
			}
		}

		if($contactIds = $this->getRelatedId($relationShipAddress, 'contacts')) {
			$GLOBALS['log']->debug('I-E linking email to Contact');
			// link the contact to the email
			$email->load_relationship('contacts');
			$email->contacts->add($contactIds);
		}

		if($accountIds = $this->getRelatedId($relationShipAddress, 'accounts')) {
			$GLOBALS['log']->debug('I-E linking email to Account');
			// link the account to the email
			$email->load_relationship('accounts');
			$email->accounts->add($accountIds);
		}
		return $contactAddr;
	}

	/**
	 * Gets part by following breadcrumb path
	 * @param string $bc the breadcrumb string in format (1.1.1)
	 * @param array parts the root level parts array
	 */
	protected function getPartByPath($bc, $parts)
	{
		if(strstr($bc,'.')) {
			$exBc = explode('.', $bc);
		} else {
			$exBc = array($bc);
		}

		foreach($exBc as $step) {
		    if(empty($parts)) return false;
		    $res = $parts[$step-1]; // MIME starts with 1, array starts with 0
		    if(!empty($res->parts)) {
		        $parts = $res->parts;
		    } else {
		        $parts = false;
		    }
		}
		return $res;
 	}

	/**
	 * takes a breadcrumb and returns the encoding at that level
	 * @param	string bc the breadcrumb string in format (1.1.1)
	 * @param	array parts the root level parts array
	 * @return	int retInt Int key to transfer encoding (see handleTranserEncoding())
	 */
	function getEncodingFromBreadCrumb($bc, $parts) {
		if(strstr($bc,'.')) {
			$exBc = explode('.', $bc);
		} else {
			$exBc[0] = $bc;
		}

		$depth = count($exBc);

		for($i=0; $i<$depth; $i++) {
			$tempObj[$i] = $parts[($exBc[$i]-1)];
			$retInt = imap_utf8($tempObj[$i]->encoding);
			if(!empty($tempObj[$i]->parts)) {
				$parts = $tempObj[$i]->parts;
			}
		}
		return $retInt;
	}

	/**
	 * retrieves the charset for a given part of an email body
	 *
	 * @param string bc target part of the message in format (1.1.1)
	 * @param array parts 1 level above ROOT array of Objects representing a multipart body
	 * @return string charset name
	 */
	function getCharsetFromBreadCrumb($bc, $parts)
	{
		$tempObj = $this->getPartByPath($bc, $parts);
		// now we have the tempObj at the end of the breadCrumb trail

		if(!empty($tempObj->ifparameters)) {
			foreach($tempObj->parameters as $param) {
				if(strtolower($param->attribute) == 'charset') {
					return $param->value;
				}
			}
		}

		return 'default';
	}

	/**
	 * Get the message text from a single mime section, html or plain.
	 *
	 * @param string $msgNo
	 * @param string $section
	 * @param stdObject $structure
	 * @return string
	 */
	function getMessageTextFromSingleMimePart($msgNo,$section,$structure)
	{
	    $msgPartTmp = imap_fetchbody($this->conn, $msgNo, $section);
	    $enc = $this->getEncodingFromBreadCrumb($section, $structure->parts);
	    $charset = $this->getCharsetFromBreadCrumb($section, $structure->parts);
	    $msgPartTmp = $this->handleTranserEncoding($msgPartTmp, $enc);
	    return $this->handleCharsetTranslation($msgPartTmp, $charset);
	}

	/**
	 * Givin an existing breadcrumb add a cooresponding offset
	 *
	 * @param string $bc
	 * @param string $offset
	 * @return string
	 */
	function addBreadCrumbOffset($bc, $offset)
	{
	    if( (empty($bc) || is_null($bc)) && !empty($offset) )
	       return $offset;

	    $a_bc = explode(".", $bc);
	    $a_offset = explode(".",$offset);
	    if(count($a_bc) < count($a_offset))
	       $a_bc = array_merge($a_bc,array_fill( count($a_bc), count($a_offset) - count($a_bc), 0));

	    $results = array();
	    for($i=0;$i < count($a_bc); $i++)
	    {
	        if(isset($a_offset[$i]))
	           $results[] = $a_bc[$i] + $a_offset[$i];
	        else
	           $results[] = $a_bc[$i];
	    }
	    return implode(".", $results);
	}

	/**
	 * returns the HTML text part of a multi-part message
	 *
	 * @param int msgNo the relative message number for the monitored mailbox
	 * @param string $type the type of text processed, either 'PLAIN' or 'HTML'
	 * @return string UTF-8 encoded version of the requested message text
	 */
	function getMessageText($msgNo, $type, $structure, $fullHeader,$clean_email=true, $bcOffset = "") {
		global $sugar_config;

		$msgPart = '';
		if(!empty($structure->parts)) {
		    $bc = $this->buildBreadCrumbs($structure->parts, $type);
		}
		//Add an offset if specified
		if(!empty($bcOffset))
            $bc = $this->addBreadCrumbOffset($bc, $bcOffset);

		if(!empty($bc)) { // multi-part
			// HUGE difference between PLAIN and HTML
			if($type == 'PLAIN') {
				$msgPart = $this->getMessageTextFromSingleMimePart($msgNo,$bc,$structure);
			} else {
				// get part of structure that will
				$msgPartRaw = '';
				$bcArray = $this->buildBreadCrumbsHTML($structure->parts,$bcOffset);
				// construct inline HTML/Rich msg
				foreach($bcArray as $bcArryKey => $bcArr) {
					foreach($bcArr as $type => $bcTrail) {
						if($type == 'html')
						    $msgPartRaw .= $this->getMessageTextFromSingleMimePart($msgNo,$bcTrail,$structure);
						 else {
							// deal with inline image
							$part = $this->getPartByPath($bcTrail, $structure->parts);
							if(empty($part) || empty($part->id)) continue;
							$partid = substr($part->id, 1, -1); // strip <> around
							if(isset($this->inlineImages[$partid])) {
                                $imageName = $this->inlineImages[$partid];
                                $imageUrl = sprintf($this->imageUrlTemplate, $imageName);
                                $newImagePath = "class=\"image\" src=\"{$imageUrl}\"";
                                $preImagePath = "src=\"cid:$partid\"";
                                $msgPartRaw = str_replace($preImagePath, $newImagePath, $msgPartRaw);
							}
						}
					}
				}
				$msgPart = $msgPartRaw;
			}
		} else { // either PLAIN message type (flowed) or b0rk3d RFC
			// make sure we're working on valid data here.
			if($structure->subtype != $type) {
				return '';
			}

			$decodedHeader = $this->decodeHeader($fullHeader);

			// now get actual body contents
			$text = imap_body($this->conn, $msgNo);

			$upperCaseKeyDecodeHeader = array();
			if (is_array($decodedHeader)) {
				$upperCaseKeyDecodeHeader = array_change_key_case($decodedHeader, CASE_UPPER);
			} // if
			if(isset($upperCaseKeyDecodeHeader[strtoupper('Content-Transfer-Encoding')])) {
				$flip = array_flip($this->transferEncoding);
				$text = $this->handleTranserEncoding($text, $flip[strtoupper($upperCaseKeyDecodeHeader[strtoupper('Content-Transfer-Encoding')])]);
			}

			if(is_array($upperCaseKeyDecodeHeader['CONTENT-TYPE']) && isset($upperCaseKeyDecodeHeader['CONTENT-TYPE']['charset']) && !empty($upperCaseKeyDecodeHeader['CONTENT-TYPE']['charset'])) {
				// we have an explicit content type, use it
                $msgPart = $this->handleCharsetTranslation($text, $upperCaseKeyDecodeHeader['CONTENT-TYPE']['charset']);
			} else {
                // make a best guess as to what our content type is
                $msgPart = $this->convertToUtf8($text);
            }
		} // end else clause

		$msgPart = $this->customGetMessageText($msgPart);
		/* cn: bug 9176 - htmlEntitites hide XSS attacks. */
		if($type == 'PLAIN') {
		    return SugarCleaner::cleanHtml(to_html($msgPart), false);
		}
        // Bug 50241: can't process <?xml:namespace .../> properly. Strip <?xml ...> tag first.
		$msgPart = preg_replace("/<\?xml[^>]*>/","",$msgPart);

        return SugarCleaner::cleanHtml($msgPart, false);
	}

	/**
	 * decodes raw header information and passes back an associative array with
	 * the important elements key'd by name
	 * @param header string the raw header
	 * @return decodedHeader array the associative array
	 */
	function decodeHeader($fullHeader) {
		$decodedHeader = array();
		$exHeaders = explode("\r", $fullHeader);
		if (!is_array($exHeaders)) {
			$exHeaders = explode("\r\n", $fullHeader);
		}
		$quotes = array('"', "'");

		foreach($exHeaders as $lineNum => $head) {
			$key 	= '';
			$key	= trim(substr($head, 0, strpos($head, ':')));
			$value	= '';
			$value	= trim(substr($head, (strpos($head, ':') + 1), strlen($head)));

			// handle content-type section in headers
			if(strtolower($key) == 'content-type' && strpos($value, ';')) { // ";" means something follows related to (such as Charset)
				$semiColPos = mb_strpos($value, ';');
				$strLenVal = mb_strlen($value);
				if(($semiColPos + 4) >= $strLenVal) {
					// the charset="[something]" is on the next line
					$value .= str_replace($quotes, "", trim($exHeaders[$lineNum+1]));
				}

				$newValue = array();
				$exValue = explode(';', $value);
				$newValue['type'] = $exValue[0];

				for($i=1; $i<count($exValue); $i++) {
					$exContent = explode('=', $exValue[$i]);
					$newValue[trim($exContent[0])] = trim($exContent[1], "\t \"");
				}
				$value = $newValue;
			}

			if(!empty($key) && !empty($value)) {
				$decodedHeader[$key] = $value;
			}
		}

		return $decodedHeader;
	}

	/**
	 * handles translating message text from orignal encoding into UTF-8
	 *
	 * @param string text test to be re-encoded
	 * @param string charset original character set
	 * @return string utf8 re-encoded text
	 */
	function handleCharsetTranslation($text, $charset) {
		global $locale;

		if(empty($charset)) {
			$GLOBALS['log']->debug("***ERROR: InboundEmail::handleCharsetTranslation() called without a \$charset!");
			$GLOBALS['log']->debug("***STACKTRACE: ".print_r(debug_backtrace(), true));
			return $text;
		}

		// typical headers have no charset - let destination pick (since it's all ASCII anyways)
		if(strtolower($charset) == 'default' || strtolower($charset) == 'utf-8') {
			return $text;
		}

		return $locale->translateCharset($text, $charset);
	}



	/**
	 * Builds up the "breadcrumb" trail that imap_fetchbody() uses to return
	 * parts of an email message, including attachments and inline images
	 * @param	$parts	array of objects
	 * @param	$subtype	what type of trail to return? HTML? Plain? binaries?
	 * @param	$breadcrumb	text trail to build up
	 */
	function buildBreadCrumbs($parts, $subtype, $breadcrumb = '0') {
		// loop through available parts in the array
		foreach($parts as $k => $part) {
			// mark passage through level
			$thisBc = ($k+1);
			// if this is not the first time through, start building the map
			if($breadcrumb != 0) {
				$thisBc = $breadcrumb.'.'.$thisBc;
			}

			// found a multi-part/mixed 'part' - keep digging
			if($part->type == 1 && (strtoupper($part->subtype) == 'RELATED' || strtoupper($part->subtype) == 'ALTERNATIVE' || strtoupper($part->subtype) == 'MIXED')) {
				$thisBc = $this->buildBreadCrumbs($part->parts, $subtype, $thisBc);
				return $thisBc;

			} elseif(strtolower($part->subtype) == strtolower($subtype)) { // found the subtype we want, return the breadcrumb value
				return $thisBc;
			}
		}
	}

	/**
	 * Similar to buildBreadCrumbs() but returns an ordered array containing all parts of the message that would be
	 * considered "HTML" or Richtext (embedded images, formatting, etc.).
	 * @param array parts Array of parts of a message
	 * @param int breadcrumb Passed integer value to start breadcrumb trail
	 * @param array stackedBreadcrumbs Persistent trail of breadcrumbs
	 * @return array Ordered array of parts to retrieve via imap_fetchbody()
	 */
	function buildBreadCrumbsHTML($parts, $breadcrumb = '0', $stackedBreadcrumbs = array()) {
		$subtype = 'HTML';
		$disposition = 'inline';

		foreach($parts as $k => $part) {
			// mark passage through level
			$thisBc = ($k+1);

			if($breadcrumb != 0) {
				$thisBc = $breadcrumb.'.'.$thisBc;
			}
			// found a multi-part/mixed 'part' - keep digging
			if($part->type == 1 && (strtoupper($part->subtype) == 'RELATED' || strtoupper($part->subtype) == 'ALTERNATIVE' || strtoupper($part->subtype) == 'MIXED')) {
				$stackedBreadcrumbs = $this->buildBreadCrumbsHTML($part->parts, $thisBc, $stackedBreadcrumbs);
			} elseif(
				(strtolower($part->subtype) == strtolower($subtype)) ||
					(
						isset($part->disposition) && strtolower($part->disposition) == 'inline' &&
						in_array(strtoupper($part->subtype), $this->imageTypes)
					)
			) {
				// found the subtype we want, return the breadcrumb value
				$stackedBreadcrumbs[] = array(strtolower($part->subtype) => $thisBc);
			} elseif($part->type == 5) {
				$stackedBreadcrumbs[] = array(strtolower($part->subtype) => $thisBc);
			}
		}

		return $stackedBreadcrumbs;
	}

	/**
	 * Takes a PHP imap_* object's to/from/cc/bcc address field and converts it
	 * to a standard string that SugarCRM expects
	 * @param	$arr	an array of email address objects
	 */
	function convertImapToSugarEmailAddress($arr) {
		if(is_array($arr)) {
			$addr = '';
			foreach($arr as $key => $obj) {
				$addr .= $obj->mailbox.'@'.$obj->host.', ';
			}
			// strip last comma
			$ret = substr_replace($addr,'',-2,-1);
			return trim($ret);
		}
	}

    /**
     * Decodes the filename using whatever encodings are found in it.
     *
     * @param string $encodedName
     * @return string
     */
    public function handleEncodedFilename($encodedName)
    {
        $decodedName = '';
        $imapDecodedName = imap_mime_header_decode($encodedName);

        foreach ($imapDecodedName as $element) {
            $encoding = strtolower($element->charset);
            $text = $element->text;

            if ($encoding === 'default') {
                // Use UTF-8 as the default.
                $encoding = 'utf-8';

                // Encoded file names are formatted as [encoding]''[filename].
                if (strpos($text, "''") !== false) {
                    $encoding = strtolower(substr($text, 0, strpos($text, "'")));

                    while (strpos($text, "'") !== false) {
                        $text = trim(substr($text, (strpos($text, "'") + 1), strlen($text)));
                    }
                }

                $text = urldecode($text);
            }

            // Need to trim the encoding so we don't end up with something like " utf-8".
            $encoding = trim($encoding);

            if ($encoding !== 'utf-8') {
                $text = $GLOBALS['locale']->translateCharset($text, strtoupper($encoding), 'UTF-8');
            }

            $decodedName .= $text;
        }

        return $decodedName;
    }

	/*
		Primary body types for a part of a mail structure (imap_fetchstructure returned object)
		0 => text
		1 => multipart
		2 => message
		3 => application
		4 => audio
		5 => image
		6 => video
		7 => other
	*/

	/**
	Primary body types for a part of a mail structure (imap_fetchstructure returned object)
	@var array $imap_types
	*/
	public $imap_types = array(
			0 => 'text',
			1 => 'multipart',
			2 => 'message',
			3 => 'application',
			4 => 'audio',
			5 => 'image',
			6 => 'video',
	);

	public function getMimeType($type, $subtype)
	{
		if(isset($this->imap_types[$type])) {
			return $this->imap_types[$type]."/$subtype";
		} else {
			return "other/$subtype";
		}
	}

	/**
	 * Takes the "parts" attribute of the object that imap_fetchbody() method
	 * returns, and recursively goes through looking for objects that have a
	 * disposition of "attachement" or "inline"
	 * @param int $msgNo The relative message number for the monitored mailbox
	 * @param object $parts Array of objects to examine
	 * @param string $emailId The GUID of the email saved prior to calling this method
	 * @param array $breadcrumb Default 0, build up of the parts mapping
	 * @param bool $forDisplay Default false
	 */
    public function saveAttachments(int $msgNo, array $parts, string $emailId, int $breadcrumb, bool $forDisplay): void
    {
		global $sugar_config;
		/*
			Primary body types for a part of a mail structure (imap_fetchstructure returned object)
			0 => text
			1 => multipart
			2 => message
			3 => application
			4 => audio
			5 => image
			6 => video
			7 => other
		*/

		foreach($parts as $k => $part) {
			$thisBc = $k+1;
			if($breadcrumb != '0') {
				$thisBc = $breadcrumb.'.'.$thisBc;
			}
			$attach = null;
			// check if we need to recurse into the object
			//if($part->type == 1 && !empty($part->parts)) {
			if(isset($part->parts) && !empty($part->parts) && !( isset($part->subtype) && strtolower($part->subtype) == 'rfc822')  ) {
				$this->saveAttachments($msgNo, $part->parts, $emailId, $thisBc, $forDisplay);
                continue;
                        } elseif ($part->ifdisposition && strtolower($part->subtype) != 'rfc822') {
				// we will take either 'attachments' or 'inline'
				if(strtolower($part->disposition) == 'attachment' || ((strtolower($part->disposition) == 'inline') && $part->type != 0)) {
					$attach = $this->getNoteBeanForAttachment($emailId);
					$fname = $this->handleEncodedFilename($this->retrieveAttachmentNameFromStructure($part));

					if(!empty($fname)) {//assign name to attachment
						$attach->name = $fname;
					} else {//if name is empty, default to filename
						$attach->name = urlencode($this->retrieveAttachmentNameFromStructure($part));
					}
					$attach->filename = $attach->name;
					if (empty($attach->filename)) {
						continue;
					}

					// deal with the MIME types email has
					$attach->file_mime_type = $this->getMimeType($part->type, $part->subtype);
					$attach->safeAttachmentName();
					if($forDisplay) {
						$attach->id = $this->getTempFilename();
					} else {
						// only save if doing a full import, else we want only the binaries
						$attach->save();
					}
				} // end if disposition type 'attachment'
			}// end ifdisposition
			//Retrieve contents of subtype rfc8822
			elseif ($part->type == 2 && isset($part->subtype) && strtolower($part->subtype) == 'rfc822' )
			{
			    $tmp_eml =  imap_fetchbody($this->conn, $msgNo, $thisBc);
                            $rfcheaders = imap_rfc822_parse_headers($tmp_eml);
			    $attach = $this->getNoteBeanForAttachment($emailId);
                            $attach->file_mime_type = 'message/rfc822';
			    $attach->description = $tmp_eml;
			    $attach->filename = $attach->name = $rfcheaders->subject . ".eml";
			    $attach->safeAttachmentName();
			    if($forDisplay) {
			        $attach->id = $this->getTempFilename();
			    } else {
			        // only save if doing a full import, else we want only the binaries
			        $attach->save();
			    }
			} elseif(!$part->ifdisposition && $part->type != 1 && $part->type != 2 && $thisBc != '1') {
        		// No disposition here, but some IMAP servers lie about disposition headers, try to find the truth
				// Also Outlook puts inline attachments as type 5 (image) without a disposition
				if($part->ifparameters) {
                    foreach($part->parameters as $param) {
                        if(strtolower($param->attribute) == "name" || strtolower($param->attribute) == "filename") {
                            $fname = $this->handleEncodedFilename($param->value);
                            break;
                        }
                    }
                    if(empty($fname)) continue;

					// we assume that named parts are attachments too
                    $attach = $this->getNoteBeanForAttachment($emailId);

					$attach->filename = $attach->name = $fname;
					$attach->file_mime_type = $this->getMimeType($part->type, $part->subtype);

					$attach->safeAttachmentName();
					if($forDisplay) {
						$attach->id = $this->getTempFilename();
					} else {
						// only save if doing a full import, else we want only the binaries
						$attach->save();
					}
				}
			}
			$this->saveAttachmentBinaries($attach, $msgNo, $thisBc, $part, $forDisplay);
		} // end foreach
	}

	/**
	 * Return a new note object for attachments.
	 *
	 * @param string $emailId
	 * @return Note
	 */
	function getNoteBeanForAttachment($emailId)
	{
	    $attach = BeanFactory::newBean('Notes');
	    $attach->email_id = $emailId;
	    $attach->email_type = 'Emails';
	    // Check whether it is from Email Module Import or from CheckInboundEmail
	    if(isset($_REQUEST['primary_team_id']) && !empty($_REQUEST['primary_team_id'])) {
	        $attach->team_id = $_REQUEST['primary_team_id'];
	        $attachTeamSet = BeanFactory::newBean('TeamSets');
	        $attachTeamIdsArray =  (isset($_REQUEST['team_ids']) ?  explode(",", $_REQUEST['team_ids']) : $this->team_set_id);
	        $attach->team_set_id = $attachTeamSet->addTeams($attachTeamIdsArray);
	    }elseif(!empty($GLOBALS['current_user']->team_id) && !empty($GLOBALS['current_user']->team_set_id)){
	        $attach->team_id = $GLOBALS['current_user']->team_id;
            $attach->team_set_id = $GLOBALS['current_user']->team_set_id;
	    }else {
	        $attach->team_id = $this->team_id;
	        $attach->team_set_id = $this->team_set_id;
	    }

	    return $attach;
	}

	/**
	 * Return the filename of the attachment by examining the dparameters or parameters returned from imap_fetch_structure
     *
	 * @param object $part
	 * @return string
	 */
	function retrieveAttachmentNameFromStructure($part)
	{
	   $result = "";

	   foreach ($part->dparameters as $k => $v)
	   {
	       if( strtolower($v->attribute) == 'filename')
	       {
	           $result = $v->value;
	           break;
	       }
	   }

		if (empty($result)) {
			foreach ($part->parameters as $k => $v) {
				if (strtolower($v->attribute) == 'name') {
					$result = $v->value;
					break;
				}
			}
		}

	   return $result;

    }
	/**
	 * saves the actual binary file of a given attachment
	 * @param object attach Note object that is attached to the binary file
	 * @param string msgNo Message Number on IMAP/POP3 server
	 * @param string thisBc Breadcrumb to navigate email structure to find the content
	 * @param object part IMAP standard object that contains the "parts" of this section of email
	 * @param bool $forDisplay
	 */
	function saveAttachmentBinaries($attach, $msgNo, $thisBc, $part, $forDisplay) {
		// decide where to place the file temporarily
		$uploadDir = ($forDisplay) ? "{$this->EmailCachePath}/{$this->id}/attachments/" : "upload://";

		// decide what name to save file as
		$fileName = $attach->id;

		// download the attachment if we didn't do it yet
		if(!file_exists($uploadDir.$fileName)) {
			$msgPartRaw = imap_fetchbody($this->conn, $msgNo, $thisBc);
    		// deal with attachment encoding and decode the text string
			$msgPart = $this->handleTranserEncoding($msgPartRaw, $part->encoding);

			if(file_put_contents($uploadDir.$fileName, $msgPart)) {
				$GLOBALS['log']->debug('InboundEmail saved attachment file: '.$attach->filename);

                // When $forDisplay is false, the attachment has been saved as a Notes record. However, the file size
                // would not have been captured because the file did not exist. Resave the bean to guarantee that the
                // file size is stored.
                if (!$forDisplay) {
                    $attach->save();
                }
			} else {
                $GLOBALS['log']->debug('InboundEmail could not create attachment file: '.$attach->filename ." - temp file target: [ {$uploadDir}{$fileName} ]");
                return;
			}
		}

        if ($fileName) {
            $fileConstraint = new File([
                'baseDirs' => [UploadFile::realpath($uploadDir)],
            ]);
            $violations = Validator::getService()->validate(UploadFile::realpath($uploadDir . $fileName), $fileConstraint);
            if ($violations->count()) {
                throw new ViolationException('Invalid mail attachment file path', $violations);
            }
        }

		$this->tempAttachment[$fileName] = urldecode($attach->filename);
		// if all was successful, feel for inline and cache Note ID for display:
		if((strtolower($part->disposition) == 'inline' && in_array($part->subtype, $this->imageTypes))
		    || ($part->type == 5)) {
            $id = substr($part->id, 1, -1); //strip <> around
            $this->inlineImages[$id] = $attach->id . "." . strtolower($part->subtype);
		}
	}

	/**
	 * decodes a string based on its associated encoding
	 * if nothing is passed, we default to no-encoding type
	 * @param	$str	encoded string
	 * @param	$enc	detected encoding
	 */
	function handleTranserEncoding($str, $enc=0) {
		switch($enc) {
			case 2:// BINARY
				$ret = $str;
				break;
			case 3:// BASE64
				$ret = base64_decode($str);
				break;
			case 4:// QUOTED-PRINTABLE
				$ret = quoted_printable_decode($str);
				break;
			case 0:// 7BIT or 8BIT
			case 1:// already in a string-useable format - do nothing
			case 5:// OTHER
			default:// catch all
				$ret = $str;
				break;
		}

		return $ret;
	}


	/**
	 * Some emails do not get assigned a message_id, specifically from
	 * Outlook/Exchange.
	 *
	 * We need to derive a reliable one for duplicate import checking.
	 */
	function getMessageId($header) {
		$message_id = md5(print_r($header, true));
		return $message_id;
	}

	/**
	 * checks for duplicate emails on polling.  The uniqueness of a given email message is determined by a concatenation
	 * of 2 values, the messageID and the delivered-to field.  This allows multiple To: and B/CC: destination addresses
	 * to be imported by Sugar without violating the true duplicate-email issues.
	 *
	 * @param string message_id message ID generated by sending server
	 * @param int message number (mailserver's key) of email
	 * @param object header object generated by imap_headerinfo()
	 * @param string textHeader Headers in normal text format
	 * @return bool
	 */
	function importDupeCheck($message_id, $header, $textHeader) {
		$GLOBALS['log']->debug('*********** InboundEmail doing dupe check.');

		// generate "delivered-to" seed for email duplicate check
		$deliveredTo = $this->id; // cn: bug 12236 - cc's failing dupe check
		$exHeader = explode("\n", $textHeader);

		foreach($exHeader as $headerLine) {
			if(strpos(strtolower($headerLine), 'delivered-to:') !== false) {
				$deliveredTo = substr($headerLine, strpos($headerLine, " "), strlen($headerLine));
				$GLOBALS['log']->debug('********* InboundEmail found [ '.$deliveredTo.' ] as the destination address for email [ '.$message_id.' ]');
			} elseif(strpos(strtolower($headerLine), 'x-real-to:') !== false) {
				$deliveredTo = substr($headerLine, strpos($headerLine, " "), strlen($headerLine));
				$GLOBALS['log']->debug('********* InboundEmail found [ '.$deliveredTo.' ] for non-standards compliant email x-header [ '.$message_id.' ]');
			}
		}

		//if(empty($message_id) && !isset($message_id)) {
		if(empty($message_id) || !isset($message_id)) {
			$GLOBALS['log']->debug('*********** NO MESSAGE_ID.');
			$message_id = $this->getMessageId($header);
		}

		// generate compound messageId
		$this->compoundMessageId = trim($message_id).trim($deliveredTo);
		if (empty($this->compoundMessageId)) {
			$GLOBALS['log']->error('Inbound Email found a message without a header and message_id');
			return false;
		} // if
		$this->compoundMessageId = md5($this->compoundMessageId);

        $query = 'SELECT count(emails.id) AS c FROM emails WHERE emails.message_id = '.
            $this->db->quoted($this->compoundMessageId).' and emails.deleted = 0';
		$r = $this->db->query($query, true);
		$a = $this->db->fetchByAssoc($r);

		if($a['c'] > 0) {
			$GLOBALS['log']->debug('InboundEmail found a duplicate email with ID ('.$this->compoundMessageId.')');
			return false; // we have a dupe and don't want to import the email'
		} else {
			return true;
		}
	}

	/**
	 * takes the output from imap_mime_hader_decode() and handles multiple types of encoding
	 * @param string subject Raw subject string from email
	 * @return string ret properly formatted UTF-8 string
	 */
	function handleMimeHeaderDecode($subject) {
		$subjectDecoded = imap_mime_header_decode($subject);

		$ret = '';
		foreach($subjectDecoded as $object) {
			if($object->charset != 'default') {
				$ret .= $this->handleCharsetTranslation($object->text, $object->charset);
			} else {
				$ret .= $object->text;
			}
		}
		return $ret;
	}

	/**
	 * Calculates the appropriate display date/time sent for an email.
	 * @param string headerDate The date sent of email in MIME header format
	 * @return string GMT-0 Unix timestamp
	 */
	function getUnixHeaderDate($headerDate) {
		global $timedate;

		if (empty($headerDate)) {
			return "";
		}
		///////////////////////////////////////////////////////////////////
		////	CALCULATE CORRECT SENT DATE/TIME FOR EMAIL
		if(!empty($headerDate)) {
		    // Bug 25254 - Strip trailing space that come in some header dates (maybe ones with 1-digit day number)
		    $headerDate = trim($headerDate);
			// need to hack PHP/windows' bad handling of strings when using POP3
			if(strstr($headerDate,'+0000 GMT')) {
				$headerDate = str_replace('GMT','', $headerDate);
			} elseif(!strtotime($headerDate)) {
				$headerDate = 'now'; // catch non-standard format times.
			} else {
				// cn: bug 9196 parse the GMT offset
				if(strpos($headerDate, '-') || strpos($headerDate, '+')) {
					// cn: bug make sure last 5 chars are [+|-]nnnn
					if(strpos($headerDate, "(")) {
						$headerDate = preg_replace('/\([\w]+\)/i', "", $headerDate);
						$headerDate = trim($headerDate);
					}

					// parse mailserver time
					$gmtEmail = trim(substr($headerDate, -5, 5));
					$posNeg = substr($gmtEmail, 0, 1);
					$gmtHours = substr($gmtEmail, 1, 2);
					$gmtMins = substr($gmtEmail, -2, 2);

					// get seconds
					$secsHours = $gmtHours * 60 * 60;
					$secsTotal = $secsHours + ($gmtMins * 60);
					$secsTotal = ($posNeg == '-') ? $secsTotal : -1 * $secsTotal;

					$headerDate = trim(substr_replace($headerDate, '', -5)); // mfh: bug 10961/12855 - date time values with GMT offsets not properly formatted
				}
			}
		} else {
			$headerDate = 'now';
		}

		$unixHeaderDate = strtotime($headerDate);

		if(isset($secsTotal)) {
			// this gets the timestamp to true GMT-0
			$unixHeaderDate += $secsTotal;
		}

		if(strtotime('Jan 1, 2001') > $unixHeaderDate) {
			$unixHeaderDate = strtotime('now');
		}

		return $unixHeaderDate;
		////	END CALCULATE CORRECT SENT DATE/TIME FOR EMAIL
		///////////////////////////////////////////////////////////////////
	}

	/**
	 * This method returns the correct messageno for the pop3 protocol
	 * @param String UIDL
	 * @return returnMsgNo
	 */
	function getCorrectMessageNoForPop3($messageId) {
		$returnMsgNo = -1;
		if ($this->protocol == 'pop3') {
			if($this->pop3_open()) {
				// get the UIDL from database;
                $query = "SELECT msgno FROM email_cache WHERE ie_id = ". $this->db->quoted($this->id) .
                    " AND message_id = " . $this->db->quoted($messageId);
				$r = $this->db->query($query);
				$a = $this->db->fetchByAssoc($r);
				$msgNo = $a['msgno'];
				$returnMsgNo = $msgNo;

				// authenticate
				$this->pop3_sendCommand("USER", $this->email_user);
				$this->pop3_sendCommand("PASS", $this->email_password);

				// get UIDL for this msgNo
				$this->pop3_sendCommand("UIDL {$msgNo}", '', false); // leave socket buffer alone until the while()
				$buf = fgets($this->pop3socket, 1024); // handle "OK+ msgNo UIDL(UIDL for this messageno)";

				// if it returns OK then we have found the message else get all the UIDL
				// and search for the correct msgNo;
				$foundMessageNo = false;
				if (preg_match("/OK/", $buf) > 0) {
					$mailserverResponse = explode(" ", $buf);
					// if the cachedUIDL and the UIDL from mail server matches then its the correct messageno
					if (trim($mailserverResponse[sizeof($mailserverResponse) - 1]) == $messageId) {
						$foundMessageNo = true;
					}
				} //if

				//get all the UIDL and then find the correct messageno
				if (!$foundMessageNo) {
					// get UIDLs
					$this->pop3_sendCommand("UIDL", '', false); // leave socket buffer alone until the while()
					fgets($this->pop3socket, 1024); // handle "OK+";
					$UIDLs = array();
					$buf = '!';
					if(is_resource($this->pop3socket)) {
						while(!feof($this->pop3socket)) {
							$buf = fgets($this->pop3socket, 1024); // 8kb max buffer - shouldn't be more than 80 chars via pop3...
							if(trim($buf) == '.') {
								$GLOBALS['log']->debug("*** GOT '.'");
								break;
							} // if
							// format is [msgNo] [UIDL]
							$exUidl = explode(" ", $buf);
							$UIDLs[trim($exUidl[1])] = trim($exUidl[0]);
						} // while
						if (array_key_exists($messageId, $UIDLs)) {
							$returnMsgNo = $UIDLs[$messageId];
						} else {
							// message could not be found on server
							$returnMsgNo = -1;
						} // else
					} // if

				} // if
				$this->pop3_cleanUp();
			} //if
		} //if
		return $returnMsgNo;
	}

	/**
	 * If the importOneEmail returns false, then findout if the duplicate email
	 */
	function getDuplicateEmailId($msgNo, $uid) {
		global $timedate;
		global $app_strings;
		global $app_list_strings;
		global $sugar_config;
		global $current_user;

		$header = imap_headerinfo($this->conn, $msgNo);
		$fullHeader = imap_fetchheader($this->conn, $msgNo); // raw headers

		// reset inline images cache
		$this->inlineImages = array();

		// handle messages deleted on server
		if(empty($header)) {
			if(!isset($this->email) || empty($this->email)) {
				$this->email = BeanFactory::newBean('Emails');
			} // if
			return "";
		} else {
			$dupeCheckResult = $this->importDupeCheck($header->message_id, $header, $fullHeader);
			if (!$dupeCheckResult && !empty($this->compoundMessageId)) {
				// we have a duplicate email
                $query = 'SELECT id FROM emails WHERE emails.message_id = '.
                    $this->db->quoted($this->compoundMessageId).' and emails.deleted = 0';
				$r = $this->db->query($query, true);
				$a = $this->db->fetchByAssoc($r);

				$this->email = BeanFactory::newBean('Emails');
				$this->email->id = $a['id'];
				return $a['id'];
			} // if
			return "";
		} // else
	} // fn


	/**
	 * shiny new importOneEmail() method
	 * @param int msgNo
	 * @param bool forDisplay
	 * @param clean_email boolean, default true,
	 */
	function importOneEmail($msgNo, $uid, $forDisplay=false, $clean_email=true) {
		$GLOBALS['log']->debug("InboundEmail processing 1 email {$msgNo}-----------------------------------------------------------------------------------------");
		global $timedate;
		global $app_strings;
		global $app_list_strings;
		global $sugar_config;
		global $current_user;

        // Bug # 45477
        // So, on older versions of PHP (PHP VERSION < 5.3),
        // calling imap_headerinfo and imap_fetchheader can cause a buffer overflow for exteremly large headers,
        // This leads to the remaining messages not being read because Sugar crashes everytime it tries to read the headers.
        // The workaround is to mark a message as read before making trying to read the header of the msg in question
        // This forces this message not be read again, and we can continue processing remaining msgs.

        // place  $sugar_config['mark_emails_seen'] = true;  into  config_override.php  to enable the workaround

        if (!empty($sugar_config['mark_emails_seen'])) {
            $this->markEmails($uid, "read");
        }

		$header = imap_headerinfo($this->conn, $msgNo);
		$fullHeader = imap_fetchheader($this->conn, $msgNo); // raw headers

		// reset inline images cache
		$this->inlineImages = array();

		// handle messages deleted on server
		if(empty($header)) {
			if(!isset($this->email) || empty($this->email)) {
				$this->email = BeanFactory::newBean('Emails');
			}

			if ($this->isPop3Protocol()) {
                $identifier = [
                    'message_id' => $uid,
                    'ie_id' => $this->id,
                    'mbox' => $this->mailbox,
                ];
			} else {
				$this->email->name = $app_strings['LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'];
                $identifier = [
                    'imap_uid' => $uid,
                    'ie_id' => $this->id,
                    'mbox' => $this->mailbox,
                ];
			} // else
			// delete local cache
            $this->db->getConnection()
                ->delete(
                    'email_cache',
                    $identifier
                );

			$this->email->date_sent = $timedate->nowDb();
			return false;
			//return "Message deleted from server.";
		}

		///////////////////////////////////////////////////////////////////////
		////	DUPLICATE CHECK
		$dupeCheckResult = $this->importDupeCheck($header->message_id, $header, $fullHeader);
		if($forDisplay || $dupeCheckResult) {
			$GLOBALS['log']->debug('*********** NO duplicate found, continuing with processing.');

			$structure = imap_fetchstructure($this->conn, $msgNo); // map of email

			///////////////////////////////////////////////////////////////////
			////	CREATE SEED EMAIL OBJECT
			$email = BeanFactory::newBean('Emails');
			$email->isDuplicate = ($dupeCheckResult) ? false : true;
			$email->mailbox_id = $this->id;
			$message = array();
			$email->id = create_guid();
			$email->new_with_id = true; //forcing a GUID here to prevent double saves.

            // Don't assign the email to the current user by default.
            $email->assigned_user_id = null;
			////	END CREATE SEED EMAIL
			///////////////////////////////////////////////////////////////////

			///////////////////////////////////////////////////////////////////
			////	PREP SYSTEM USER
			if(empty($current_user)) {
				// I-E runs as admin, get admin prefs

				$current_user = BeanFactory::newBean('Users');
				$current_user->getSystemUser();
			}
			$tPref = $current_user->getUserDateTimePreferences();
			////	END USER PREP
			///////////////////////////////////////////////////////////////////
            if(!empty($header->date)) {
			    $unixHeaderDate = $timedate->fromString($header->date);
            }
			///////////////////////////////////////////////////////////////////
			////	HANDLE EMAIL ATTACHEMENTS OR HTML TEXT
			////	Inline images require that I-E handle attachments before body text
			// parts defines attachments - be mindful of .html being interpreted as an attachment
			if($structure->type == 1 && !empty($structure->parts)) {
				$GLOBALS['log']->debug('InboundEmail found multipart email - saving attachments if found.');
				$this->saveAttachments($msgNo, $structure->parts, $email->id, 0, $forDisplay);
			} elseif($structure->type == 0) {
				$uuemail = ($this->isUuencode($email->description)) ? true : false;
				/*
				 * UUEncoded attachments - legacy, but still have to deal with it
				 * format:
				 * begin 777 filename.txt
				 * UUENCODE
				 *
				 * end
				 */
				// set body to the filtered one
				if($uuemail) {
					$email->description = $this->handleUUEncodedEmailBody($email->description, $email->id);
					$email->retrieve($email->id);
			   		$email->save();
		   		}
			} else {
				if($this->port != 110) {
					$GLOBALS['log']->debug('InboundEmail found a multi-part email (id:'.$msgNo.') with no child parts to parse.');
				}
			}
			////	END HANDLE EMAIL ATTACHEMENTS OR HTML TEXT
			///////////////////////////////////////////////////////////////////

			///////////////////////////////////////////////////////////////////
			////	ASSIGN APPROPRIATE ATTRIBUTES TO NEW EMAIL OBJECT
			// handle UTF-8/charset encoding in the ***headers***
			global $db;
			$email->name			= $this->handleMimeHeaderDecode($header->subject);
            $email->state = Email::STATE_ARCHIVED;
			$email->type = 'inbound';
			if(!empty($unixHeaderDate)) {
			    $email->date_sent = $timedate->asUser($unixHeaderDate);
			    list($email->date_start, $email->time_start) = $timedate->split_date_time($email->date_sent);
			} else {
			    $email->date_start = $email->time_start = $email->date_sent = "";
			}
			$email->status = 'unread'; // this is used in Contacts' Emails SubPanel
			if(!empty($header->toaddress)) {
				$email->to_name	 = $this->handleMimeHeaderDecode($header->toaddress);
				$email->to_addrs_names = $email->to_name;
			}
			if(!empty($header->to)) {
				$email->to_addrs	= $this->convertImapToSugarEmailAddress($header->to);
			}
			$email->from_name		= $this->handleMimeHeaderDecode($header->fromaddress);
			$email->from_addr_name = $email->from_name;
			$email->from_addr		= $this->convertImapToSugarEmailAddress($header->from);
			if(!empty($header->cc)) {
				$email->cc_addrs	= $this->convertImapToSugarEmailAddress($header->cc);
			}
			if(!empty($header->ccaddress)) {
				$email->cc_addrs_names	 = $this->handleMimeHeaderDecode($header->ccaddress);
			} // if
			$email->reply_to_name   = $this->handleMimeHeaderDecode($header->reply_toaddress);
			$email->reply_to_email  = $this->convertImapToSugarEmailAddress($header->reply_to);
			if (!empty($email->reply_to_email)) {
				$email->reply_to_addr   = $email->reply_to_name;
			}
			$email->intent			= $this->mailbox_type;

			$email->message_id		= $this->compoundMessageId; // filled by importDupeCheck();

            // save uid to have ability to remove message from imap/pop
            $email->message_uid     = $uid;

            $oldUrlTemplate = $this->imageUrlTemplate;
			if(!$forDisplay) {
				// Store CIDs in imported messages, convert on display
                $this->imageUrlTemplate = "cid:%s";
			}
			// handle multi-part email bodies
            // runs through handleTranserEncoding() already
            $email->description_html = $this->getMessageText($msgNo, 'HTML', $structure, $fullHeader, $clean_email);
            // runs through handleTranserEncoding() already
            $email->description = $this->getMessageText($msgNo, 'PLAIN', $structure, $fullHeader, $clean_email);
            $this->imageUrlTemplate = $oldUrlTemplate;
            if (empty($email->description)) {
                $email->description = strip_tags($email->description_html);
            }

			// empty() check for body content
			if(empty($email->description)) {
				$GLOBALS['log']->debug('InboundEmail Message (id:'.$email->message_id.') has no body');
			}

			// assign_to group
            if (!empty($_REQUEST['user_id'])) {
                $email->assigned_user_id = $_REQUEST['user_id'];
            }
			// assign to mailbox team if available
			if (!empty($_REQUEST['team_ids']))
			{
				$teamIds = explode(",", $_REQUEST['team_ids']);
				$primaryTeamId = $_REQUEST['primary_team_id'];
				$_REQUEST['team_id'] = $primaryTeamId;
				$email->load_relationship('teams');
			    if(!empty($email->teams))
			    {
				    //Use the TeamSetLink to generate the correct team set id rather than
				    //re-implementing the logic.
			        $email->team_id = $primaryTeamId;
				    $email->teams->replace($teamIds,array(), FALSE);
			        $email->teams->save(false, false);
			        $_REQUEST['team_set_id'] = $email->team_set_id;
			    }
			}

			if (empty($_REQUEST['team_id'])) {
				if (empty($this->team_id)) {
					$email->team_id = "1";
					$email->team_set_id = $this->getTeamSetIdForTeams($email->team_id);
				} else {
					$email->team_id = $this->team_id;
					$email->team_set_id = $this->team_set_id;
				}
			} else {
				$email->team_id = $_REQUEST['team_id'];
				if(!empty($_REQUEST['team_set_id'])) {
					$email->team_set_id = $_REQUEST['team_set_id'];
				} // if
			}

            $email->acl_team_set_id = '';
            $selectedTeamIdsArray = InputValidation::getService()->getValidInputRequest('selected_team_ids');
            if (!empty($selectedTeamIdsArray)) {
                $selectedTeamIdsArray = explode(',', $selectedTeamIdsArray);
                $selectedTeamIdsArray = array_filter($selectedTeamIdsArray);
                if (!empty($selectedTeamIdsArray)) {
                    $email->acl_team_set_id = $this->getTeamSetIdForTeams($selectedTeamIdsArray);
                }
            }

	        //Assign Parent Values if set
	        if (!empty($_REQUEST['parent_id']) && !empty($_REQUEST['parent_type'])) {
                $email->parent_id = $_REQUEST['parent_id'];
                $email->parent_type = $_REQUEST['parent_type'];
                $parent = BeanFactory::retrieveBean(
                    $email->parent_type,
                    $email->parent_id,
                    [
                        'disable_row_level_security' => true,
                    ]
                );

                if ($parent) {
                    $linkName = $email->findEmailsLink($parent);

                    if ($parent->load_relationship($linkName)) {
                        $parent->$linkName->add($email);
                    } else {
                        return false;
                    }
                }
	        }

			// override $forDisplay w/user pref
			if($forDisplay) {
				if($this->isAutoImport()) {
					$forDisplay = false; // triggers save of imported email
				}
			}

			if(!$forDisplay) {
				$email->save();

				$email->new_with_id = false; // to allow future saves by UPDATE, instead of INSERT
				////	ASSIGN APPROPRIATE ATTRIBUTES TO NEW EMAIL OBJECT
				///////////////////////////////////////////////////////////////////

				///////////////////////////////////////////////////////////////////
				////	MAILBOX TYPE HANDLING
				$this->handleMailboxType($email, $header);
				////	END MAILBOX TYPE HANDLING
				///////////////////////////////////////////////////////////////////

				///////////////////////////////////////////////////////////////////
				////	SEND AUTORESPONSE
				if(!empty($email->reply_to_email)) {
					$contactAddr = $email->reply_to_email;
				} else {
					$contactAddr = $email->from_addr;
				}
				if (!$this->isMailBoxTypeCreateCase()) {
					$this->handleAutoresponse($email, $contactAddr);
				}
				////	END SEND AUTORESPONSE
				///////////////////////////////////////////////////////////////////
				////	END IMPORT ONE EMAIL
				///////////////////////////////////////////////////////////////////
			}
		} else {
			// only log if not POP3; pop3 iterates through ALL mail
			if($this->protocol != 'pop3') {
				$GLOBALS['log']->info("InboundEmail found a duplicate email: ".$header->message_id);
				//echo "This email has already been imported";
			}
			return false;
		}
		////	END DUPLICATE CHECK
		///////////////////////////////////////////////////////////////////////

		///////////////////////////////////////////////////////////////////////
		////	DEAL WITH THE MAILBOX
		if(!$forDisplay) {
			$r = imap_setflag_full($this->conn, $msgNo, '\\SEEN');

			// if delete_seen, mark msg as deleted
			if($this->delete_seen == 1  && !$forDisplay) {
				$GLOBALS['log']->info("INBOUNDEMAIL: delete_seen == 1 - deleting email");
				imap_setflag_full($this->conn, $msgNo, '\\DELETED');
			}
		} else {
			// for display - don't touch server files?
			//imap_setflag_full($this->conn, $msgNo, '\\UNSEEN');
		}

		$GLOBALS['log']->debug('********************************* InboundEmail finished import of 1 email: '.$email->name);
		////	END DEAL WITH THE MAILBOX
		///////////////////////////////////////////////////////////////////////

		///////////////////////////////////////////////////////////////////////
		////	TO SUPPORT EMAIL 2.0
		$this->email = $email;

		if(empty($this->email->et)) {
			$this->email->email2init();
		}

		return true;
	}

    /**
     * Import an email into Sugar
     * @param $uid
     * @return bool
     * @throws Doctrine\DBAL\Exception
     * @throws \Doctrine\DBAL\Exception\InvalidArgumentException
     */
    public function importEmailFromUid($uid)
    {
        global $app_strings, $timedate;

        $mailer = $this->conn;

        if (!empty($sugar_config['mark_emails_seen'])) {
            $mailer->setFlag($uid, 'seen', true);
        }

        $header = $mailer->getHeaders($uid);

        // reset inline images cache
        $this->inlineImages = [];

        // handle messages deleted on server
        if (empty($header)) {
            if (!isset($this->email) || empty($this->email)) {
                $this->email = BeanFactory::newBean('Emails');
            }


            $this->email->name = $app_strings['LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED'];
            $identifier = [
                'imap_uid' => $uid,
                'ie_id' => $this->id,
                'mbox' => $this->mailbox,
            ];

            // delete local cache
            $this->db->getConnection()
                ->delete(
                    'email_cache',
                    $identifier
                );

            $this->email->date_sent = $timedate->nowDb();
            return false;
        }

        // DUPLICATE CHECK
        $message_id = $mailer->getMessageId($uid);
        $dupeCheckResult = $this->importDupeCheck($message_id, $header, $mailer->getRawHeaders($uid));
        if ($dupeCheckResult) {
            $GLOBALS['log']->debug('*********** NO duplicate found, continuing with processing.');

            $email = BeanFactory::newBean('Emails');
            $email->isDuplicate = false;
            $email->mailbox_id = $this->id;
            $email->id = create_guid();
            $email->new_with_id = true; //forcing a GUID here to prevent double saves.

            // Don't assign the email to the current user by default.
            $email->assigned_user_id = null;

            $email->name = $mailer->getSubject($uid);
            $email->state = Email::STATE_ARCHIVED;
            $email->type = 'inbound';

            $dateSent = $mailer->getDate($uid);
            if (!empty($dateSent)) {
                $unixHeaderDate = $timedate->fromString($dateSent);
            }

            if (!empty($unixHeaderDate)) {
                $email->date_sent = $timedate->asUser($unixHeaderDate);
                list($email->date_getMessageUidstart, $email->time_start) = $timedate->split_date_time($email->date_sent);
            } else {
                $email->date_start = $email->time_start = $email->date_sent = "";
            }
            $email->status = 'unread'; // this is used in Contacts' Emails SubPanel

            $email->to_name = $mailer->getTo($uid);
            $email->to_addrs_names = $email->to_name;
            $email->to_addrs = implode(',', $mailer->getToAddresses($uid));

            $email->from_name = $mailer->getFrom($uid);
            $email->from_addr_name = $email->from_name;
            $email->from_addr = implode(',', $mailer->getFromAddress($uid));

            $email->cc_addrs = implode(',', $mailer->getCcAddresses($uid));
            $email->cc_addrs_names = $mailer->getCc($uid);

            $email->reply_to_name = $mailer->getReplyTo($uid);
            $email->reply_to_email = implode(',', $mailer->getReplyToAddresses($uid));

            if (!empty($email->reply_to_email)) {
                $email->reply_to_addr   = $email->reply_to_name;
            }
            $email->intent = $this->mailbox_type;

            $email->message_id = $this->compoundMessageId; // filled by importDupeCheck();

            // save uid to have ability to remove message from imap
            $email->message_uid = $uid;

            // Handle message body and attachments
            $this->processMessageAttachments($uid, $email);
            $this->processMessageBodyText($uid, $email);

            // assign_to group
            if (!empty($_REQUEST['user_id'])) {
                $email->assigned_user_id = $_REQUEST['user_id'];
            }
            // assign to mailbox team if available
            if (!empty($_REQUEST['team_ids'])) {
                $teamIds = explode(",", $_REQUEST['team_ids']);
                $primaryTeamId = $_REQUEST['primary_team_id'];
                $_REQUEST['team_id'] = $primaryTeamId;
                $email->load_relationship('teams');
                if (!empty($email->teams)) {
                    //Use the TeamSetLink to generate the correct team set id rather than
                    //re-implementing the logic.
                    $email->team_id = $primaryTeamId;
                    $email->teams->replace($teamIds, array(), false);
                    $email->teams->save(false, false);
                    $_REQUEST['team_set_id'] = $email->team_set_id;
                }
            }

            if (empty($_REQUEST['team_id'])) {
                if (empty($this->team_id)) {
                    $email->team_id = "1";
                    $email->team_set_id = $this->getTeamSetIdForTeams($email->team_id);
                } else {
                    $email->team_id = $this->team_id;
                    $email->team_set_id = $this->team_set_id;
                }
            } else {
                $email->team_id = $_REQUEST['team_id'];
                if (!empty($_REQUEST['team_set_id'])) {
                    $email->team_set_id = $_REQUEST['team_set_id'];
                }
            }

            $email->acl_team_set_id = '';
            $selectedTeamIdsArray = InputValidation::getService()->getValidInputRequest('selected_team_ids');
            if (!empty($selectedTeamIdsArray)) {
                $selectedTeamIdsArray = explode(',', $selectedTeamIdsArray);
                $selectedTeamIdsArray = array_filter($selectedTeamIdsArray);
                if (!empty($selectedTeamIdsArray)) {
                    $email->acl_team_set_id = $this->getTeamSetIdForTeams($selectedTeamIdsArray);
                }
            }

            //Assign Parent Values if set
            if (!empty($_REQUEST['parent_id']) && !empty($_REQUEST['parent_type'])) {
                $email->parent_id = $_REQUEST['parent_id'];
                $email->parent_type = $_REQUEST['parent_type'];
                $parent = BeanFactory::retrieveBean(
                    $email->parent_type,
                    $email->parent_id,
                    [
                        'disable_row_level_security' => true,
                    ]
                );

                if ($parent) {
                    $linkName = $email->findEmailsLink($parent);

                    if ($parent->load_relationship($linkName)) {
                        $parent->$linkName->add($email);
                    } else {
                        return false;
                    }
                }
            }

            $email->save();

            $email->new_with_id = false; // to allow future saves by UPDATE, instead of INSERT
            $this->handleMailboxType($email, $header);

            // SEND AUTORESPONSE
            if (!empty($email->reply_to_email)) {
                $contactAddr = $email->reply_to_email;
            } else {
                $contactAddr = $email->from_addr;
            }
            if (!$this->isMailBoxTypeCreateCase()) {
                $this->handleAutoresponse($email, $contactAddr);
            }
        } else {
            // only log if not POP3; pop3 iterates through ALL mail
            if ($this->protocol != 'pop3') {
                $GLOBALS['log']->info('InboundEmail found a duplicate email: ' . $message_id);
                //echo "This email has already been imported";
            }
            return false;
        }

        // if delete_seen, mark msg as deleted
        if ($this->delete_seen == 1) {
            $GLOBALS['log']->info("INBOUNDEMAIL: delete_seen == 1 - deleting email");
            $mailer->deleteMessage($uid);
        }

        $GLOBALS['log']->debug('********************************* InboundEmail finished import of 1 email: '.$email->name);
        $this->email = $email;

        return true;
    }

    /**
     * Gets the attachments of a message, saves the attachment files, and creates
     * a Note bean to represent the attachment in Sugar
     *
     * @param int $uid the ID of the message
     * @param $emailBean
     */
    protected function processMessageAttachments($uid, $emailBean)
    {
        // Get the array of attachment data from the message
        $attachments = $this->conn->getAttachments($uid);

        // For each attachment, create a note bean to represent it and save the
        // attachment in the file system
        foreach ($attachments as $attachment) {
            // Create a note bean to represent the attachment
            $noteBean = $this->getNoteBeanForAttachment($emailBean->id);
            if ($attachment['contentType'] === 'message/rfc822') {
                // Handle encapsulated RFC822 message
                $rfcHeaders = imap_rfc822_parse_headers($attachment['content']);
                $fileName = $rfcHeaders->subject . '.eml';
            } else {
                // Handle standard attachment
                $fileName = $this->handleEncodedFilename($attachment['fileName']);
            }
            $noteBean->name = $noteBean->filename = $fileName;
            $noteBean->file_mime_type = $attachment['contentType'];
            $noteBean->safeAttachmentName();
            $noteBean->save();

            // Save the attachment in the file system
            $this->saveAttachmentFile($attachment, $noteBean);
        }
    }

    /**
     * Handles saving a single attachment file
     *
     * @param array $attachment array containing the attachment data
     * @param Note $noteBean the Note bean representing the attachment in Sugar
     */
    protected function saveAttachmentFile($attachment, $noteBean)
    {
        $uploadDir = 'upload://';
        $fileName = $noteBean->id;

        // Download the attachment if we haven't yet
        if (!file_exists($uploadDir . $fileName)) {
            // Save the decoded file content to the path and filename
            $content = InboundEmailUtils::handleTransferEncoding($attachment['content'], $attachment['encoding']);
            if (file_put_contents($uploadDir . $fileName, $content)) {
                // Resave the bean to guarantee that the file size is stored
                $noteBean->save();
                $GLOBALS['log']->debug('InboundEmail saved attachment file: ' . $noteBean->filename);
            } else {
                $GLOBALS['log']->debug(
                    'InboundEmail could not create attachment file: ' . $noteBean->filename .
                    ' - temp file target: [ ' . $uploadDir . $fileName . ' ]'
                );
                return;
            }
        }

        if ($fileName) {
            $fileConstraint = new File([
                'baseDirs' => [UploadFile::realpath($uploadDir)],
            ]);
            $violations = Validator::getService()->validate(UploadFile::realpath($uploadDir . $fileName), $fileConstraint);
            if ($violations->count()) {
                throw new ViolationException('Invalid mail attachment file path', $violations);
            }
        }

        // For inline images, the Content-ID header stores their ID. We need to
        // update the inlineImages array to store the correct mapping from
        // Content-ID header value => saved filename. This is used later to
        // replace image references in the email body with the correct values.
        // When there's no Content-Disposition available (such as Lotus Notes),
        // we check if random file name is generated.
        $subType = $attachment['subtype'];
        if (($attachment['contentDisposition'] === 'inline' || $attachment['randomFileName']) &&
            in_array(strtoupper($subType), $this->imageTypes)
        ) {
            // Strip the <> around the Content-Id
            $imageId = substr($attachment['contentId'], 1, -1);
            $this->inlineImages[$imageId] = $noteBean->id . '.' . strtolower($subType);
        }
    }

    /**
     * Adds both the plaintext and HTML versions of the given message to the
     * given Email bean's 'description' and 'description_html' fields respectively
     *
     * @param int $uid the UID of the message to get the body from
     * @param Email $emailBean the Email bean to set the body text in
     */
    protected function processMessageBodyText($uid, $emailBean)
    {
        $bodyText = $this->conn->getBody($uid);
        $emailBean->description_html = $this->postProcessMessageText($bodyText['html'], 'html');
        $emailBean->description = $this->postProcessMessageText($bodyText['plain'], 'plain');
        $emailBean->description = $emailBean->description ?: strip_tags($emailBean->description_html);
        if (empty($emailBean->description)) {
            $GLOBALS['log']->debug('InboundEmail Message (id:' . $emailBean->message_id . ') has no body');
        }
    }

    /**
     * Performs final processing of email message body text
     *
     * @param string $text the body text to process
     * @param string $type the type of text ('plain' or 'html')
     * @return string the processed text
     */
    protected function postProcessMessageText($text, $type)
    {
        // Allow for custom processing of email message text
        $text = $this->customGetMessageText($text);

        // Clean and return the text
        if ($type === 'plain') {
            // Bug 9176: htmlEntitites hide XSS attacks
            $text = to_html($text);
        } else {
            // Bug 50241: can't process <?xml:namespace .../> properly. Strip <?xml ...> tag first.
            $text = preg_replace("/<\?xml[^>]*>/", "", $text);
            $text = InboundEmailUtils::updateInlineImageHtml($text, $this->inlineImages);
        }
        return SugarCleaner::cleanHtml($text, false);
    }

	/**
	 * figures out if a plain text email body has UUEncoded attachments
	 * @param string string The email body
	 * @return bool True if UUEncode is detected.
	 */
	function isUuencode($string) {
		$rx = "begin [0-9]{3} .*";

		$exBody = explode("\r", $string);
		foreach($exBody as $line) {
			if(preg_match("/begin [0-9]{3} .*/i", $line)) {
				return true;
			}
		}

		return false;
	}

	/**
	 * handles UU Encoded emails - a legacy from pre-RFC 822 which must still be supported (?)
	 * @param string raw The raw email body
	 * @param string id Parent email ID
	 * @return string The filtered email body, stripped of attachments
	 */
	function handleUUEncodedEmailBody($raw, $id) {
		global $locale;

		$emailBody = '';
		$attachmentBody = '';
		$inAttachment = false;

		$exRaw = explode("\n", $raw);

		foreach($exRaw as $k => $line) {
			$line = trim($line);

			if(preg_match("/begin [0-9]{3} .*/i", $line, $m)) {
				$inAttachment = true;
				$fileName = $this->handleEncodedFilename(substr($m[0], 10, strlen($m[0])));

				$attachmentBody = ''; // reset for next part of loop;
				continue;
			}

			// handle "end"
			if(strpos($line, "end") === 0) {
				if(!empty($fileName) && !empty($attachmentBody)) {
					$this->handleUUDecode($id, $fileName, trim($attachmentBody));
					$attachmentBody = ''; // reset for next part of loop;
				}
			}

			if($inAttachment === false) {
				$emailBody .= "\n".$line;
			} else {
				$attachmentBody .= "\n".$line;
			}
		}

		/* since UUEncode was developed before MIME, we have NO idea what character set encoding was used.  we will assume the user's locale character set */
		$emailBody = $locale->translateCharset($emailBody, $locale->getExportCharset(), 'UTF-8');
		return $emailBody;
	}

	/**
	 * wrapper for UUDecode
	 * @param string id Id of the email
	 * @param string UUEncode Encode US-ASCII
	 */
	function handleUUDecode($id, $fileName, $UUEncode) {
		global $sugar_config;
		/* include PHP_Compat library; it auto-feels for PHP5's compiled convert_uuencode() function */
		require_once('include/PHP_Compat/convert_uudecode.php');

		$attach = BeanFactory::newBean('Notes');
		$attach->email_id = $id;
		$attach->email_type = 'Emails';
		$attach->team_id = $this->team_id;
		$attach->team_set_id = $this->team_set_id;
		//$attach

		$fname = $this->handleEncodedFilename($fileName);

		if(!empty($fname)) {//assign name to attachment
			$attach->name = $fname;
		} else {//if name is empty, default to filename
			$attach->name = urlencode($fileName);
		}

		$attach->filename = urlencode($attach->name);

		//get position of last "." in file name
		$file_ext_beg = strrpos($attach->filename,".");
		$file_ext = "";
		//get file extension
		if($file_ext_beg >0) {
			$file_ext = substr($attach->filename, $file_ext_beg+1);
		}
		//check to see if this is a file with extension located in "badext"
		foreach($sugar_config['upload_badext'] as $badExt) {
			if(strtolower($file_ext) == strtolower($badExt)) {
				//if found, then append with .txt and break out of lookup
				$attach->name = $attach->name . ".txt";
				$attach->file_mime_type = 'text/';
				$attach->filename = $attach->filename . ".txt";
				break; // no need to look for more
			}
		}

        // Write the file before saving so that the file size is captured during save.
		$bin = convert_uudecode($UUEncode);
		$filename = "upload://{$attach->id}";
		if(file_put_contents($filename, $bin)) {
    		$GLOBALS['log']->debug('InboundEmail saved attachment file: '.$filename);
		} else {
    		$GLOBALS['log']->debug('InboundEmail could not create attachment file: '.$filename);
		}

        $attach->save();
	}

	/**
	 * returns true if the email's domain is NOT in the filter domain string
	 *
	 * @param object email Email object in question
	 * @return bool true if not filtered, false if filtered
	 */
	function checkFilterDomain($email) {
		$filterDomain = $this->get_stored_options('filter_domain');
		if(!isset($filterDomain) || empty($filterDomain)) {
			return true; // nothing set for this
		} else {
			$replyTo = strtolower($email->reply_to_email);
			$from = strtolower($email->from_addr);
			$filterDomain = '@'.strtolower($filterDomain);
			if(strpos($replyTo, $filterDomain) !== false) {
				$GLOBALS['log']->debug('Autoreply cancelled - [reply to] address domain matches filter domain.');
				return false;
			} elseif(strpos($from, $filterDomain) !== false) {
				$GLOBALS['log']->debug('Autoreply cancelled - [from] address domain matches filter domain.');
				return false;
			} else {
				return true; // no match
			}
		}
	}

	/**
	 * returns true if subject is NOT "out of the office" type
	 *
	 * @param string subject Subject line of email in question
	 * @return bool returns false if OOTO found
	 */
	function checkOutOfOffice($subject) {
		$ooto = array("Out of the Office", "Out of Office");

		foreach($ooto as $str) {
			if(preg_match('/'.$str.'/i', $subject)) {
				$GLOBALS['log']->debug('Autoreply cancelled - found "Out of Office" type of subject.');
				return false;
			}
		}
		return true; // no matches to ooto strings
	}


	/**
	 * sets a timestamp for an autoreply to a single email addy
	 *
	 * @param string addr Address of auto-replied target
	 */
	function setAutoreplyStatus($addr) {
	    $timedate = TimeDate::getInstance();
		$this->db->query(	'INSERT INTO inbound_email_autoreply (id, deleted, date_entered, date_modified, autoreplied_to, ie_id) VALUES (
							\''.create_guid().'\',
							0,
							\''.$timedate->nowDb().'\',
							\''.$timedate->nowDb().'\',
                            '.$this->db->quoted($addr).',
                            '.$this->db->quoted($this->id).') ', true);
	}


	/**
	 * returns true if recipient has NOT received 10 auto-replies in 24 hours
	 *
	 * @param string from target address for auto-reply
	 * @return bool true if target is valid/under limit
	 */
	function getAutoreplyStatus($from) {
		global $sugar_config;
        $timedate = TimeDate::getInstance();

		$q_clean = 'UPDATE inbound_email_autoreply SET deleted = 1 WHERE date_entered < \''.$timedate->getNow()->modify("-24 hours")->asDb().'\'';
		$r_clean = $this->db->query($q_clean, true);

        $q = 'SELECT count(*) AS c FROM inbound_email_autoreply WHERE deleted = 0 AND autoreplied_to = '.
            $this->db->quoted($from).' AND ie_id = '.$this->db->quoted($this->id);
		$r = $this->db->query($q, true);
		$a = $this->db->fetchByAssoc($r);

		$email_num_autoreplies_24_hours = $this->get_stored_options('email_num_autoreplies_24_hours');
		$maxReplies = (isset($email_num_autoreplies_24_hours)) ? $email_num_autoreplies_24_hours : $this->maxEmailNumAutoreplies24Hours;

		if($a['c'] >= $maxReplies) {
			$GLOBALS['log']->debug('Autoreply cancelled - more than ' . $maxReplies . ' replies sent in 24 hours.');
			return false;
		} else {
			return true;
		}
	}

	/**
	 * returns exactly 1 id match. if more than one, than returns false
	 * @param	$emailName		the subject of the email to match
	 * @param	$tableName		the table of the matching bean type
	 */
	function getSingularRelatedId($emailName, $tableName) {
		$repStrings = array('RE:','Re:','re:');
		$preppedName = str_replace($repStrings,'',trim($emailName));

		//TODO add team security to this query
		$q = 'SELECT count(id) AS c FROM '.$tableName.' WHERE deleted = 0 AND name LIKE \'%'.$preppedName.'%\'';
		$r = $this->db->query($q, true);
		$a = $this->db->fetchByAssoc($r);

		if($a['c'] == 0) {
			$q = 'SELECT id FROM '.$tableName.' WHERE deleted = 0 AND name LIKE \'%'.$preppedName.'%\'';
			$r = $this->db->query($q, true);
			$a = $this->db->fetchByAssoc($r);
			return $a['id'];
		} else {
			return false;
		}
	}

	/**
	 * saves InboundEmail parse macros to config.php
	 * @param string type Bean to link
	 * @param string macro The new macro
	 */
	function saveInboundEmailSystemSettings($type, $macro) {
		global $sugar_config;

		// inbound_email_case_subject_macro
		$var = "inbound_email_".strtolower($type)."_subject_macro";
		$sugar_config[$var] = $macro;

		ksort($sugar_config);

		$sugar_config_string = "<?php\n" .
			'// created: ' . date('Y-m-d H:i:s') . "\n" .
			'$sugar_config = ' .
			var_export($sugar_config, true) .
			";\n?>\n";

		write_array_to_file("sugar_config", $sugar_config, "config.php");
	}

	/**
	 * returns the HTML for InboundEmail system settings
	 * @return string HTML
	 */
	function getSystemSettingsForm() {
		global $sugar_config;
		global $mod_strings;
		global $app_strings;
		global $app_list_strings;

		////	Case Macro
		$c = BeanFactory::newBean('Cases');

		$macro = $c->getEmailSubjectMacro();

		$ret =<<<eoq
			<form action="index.php" method="post" name="Macro" id="form">
						<input type="hidden" name="module" value="InboundEmail">
						<input type="hidden" name="action" value="ListView">
						<input type="hidden" name="save" value="true">

			<table width="100%" cellpadding="0" cellspacing="0" border="0">
				<tr>
					<td>
						<input 	title="{$app_strings['LBL_SAVE_BUTTON_TITLE']}"
								accessKey="{$app_strings['LBL_SAVE_BUTTON_KEY']}"
								class="button"
								onclick="this.form.return_module.value='InboundEmail'; this.form.return_action.value='ListView';"
								type="submit" name="Edit" value="  {$app_strings['LBL_SAVE_BUTTON_LABEL']}  ">
					</td>
				</tr>
			</table>

			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="detail view">
				<tr>
					<td valign="top" width='10%' NOWRAP scope="row">
						<slot>
							<b>{$mod_strings['LBL_CASE_MACRO']}:</b>
						</slot>
					</td>
					<td valign="top" width='20%'>
						<slot>
							<input name="inbound_email_case_macro" type="text" value="{$macro}">
						</slot>
					</td>
					<td valign="top" width='70%'>
						<slot>
							{$mod_strings['LBL_CASE_MACRO_DESC']}
							<br />
							<i>{$mod_strings['LBL_CASE_MACRO_DESC2']}</i>
						</slot>
					</td>
				</tr>
			</table>
			</form>
eoq;
		return $ret;
	}

    /**
     * @deprecated since 11.1 This is now handled in Emails::getCaseIdFromCaseNumber
     *
     * For mailboxes of type "Support" parse for '[CASE:%1]'
     *
     * @param string $emailName The subject line of the email
     * @param aCase  $aCase     A Case object
     *
     * @return string|boolean   Case ID or FALSE if not found
     */
	function getCaseIdFromCaseNumber($emailName, $aCase) {
		//$emailSubjectMacro
		$exMacro = explode('%1', $aCase->getEmailSubjectMacro());
		$open = $exMacro[0];
		$close = $exMacro[1];

		if($sub = stristr($emailName, $open)) { // eliminate everything up to the beginning of the macro and return the rest
			// $sub is [CASE:XX] xxxxxxxxxxxxxxxxxxxxxx
			$sub2 = str_replace($open, '', $sub);
			// $sub2 is XX] xxxxxxxxxxxxxx
			$sub3 = substr($sub2, 0, strpos($sub2, $close));

            // case number is supposed to be numeric
            if (ctype_digit(ltrim($sub3))) {
                // filter out deleted records in order to create a new case
                // if email is related to deleted one (bug #49840)
                $query = 'SELECT id FROM cases WHERE case_number = '
                    . $this->db->quoted($sub3)
                    . ' and deleted = 0';
                $r = $this->db->query($query, true);
                $a = $this->db->fetchByAssoc($r);
                if (!empty($a['id'])) {
                    return $a['id'];
                }
            }
        }

        return false;
    }

    public function get_stored_options($option_name, $default_value = null)
    {
        return self::decode_stored_option($this->stored_options, $option_name, $default_value);
    }

    public static function decode_stored_option($stored_options, $option_name, $default_value = null)
    {
        if (!empty($stored_options)) {
            $decoded = unserialize(base64_decode($stored_options), ['allowed_classes' => false]);
            if (isset($decoded[$option_name])) {
                return $decoded[$option_name];
            }
        }

        return $default_value;
    }

	/**
	 * This function returns a contact or user ID if a matching email is found
	 * @param	$email		the email address to match
	 * @param	$table		which table to query
	 */
	function getRelatedId($email, $module) {
        $email = trim(sugarStrToUpper($email));
		if(strpos($email, ',') !== false) {
			$emailsArray = explode(',', $email);
			$emailAddressString = "";
			foreach($emailsArray as $emailAddress) {
				if (!empty($emailAddressString)) {
					$emailAddressString .= ",";
				}
				$emailAddressString .= $this->db->quoted(trim($emailAddress));
			} // foreach
			$email = $emailAddressString;
		} else {
			$email = $this->db->quoted($email);
		} // else
		$module = $this->db->quoted(ucfirst($module));

		$q = "SELECT bean_id FROM email_addr_bean_rel eabr
				JOIN email_addresses ea ON (eabr.email_address_id = ea.id)
				WHERE bean_module = $module AND ea.email_address_caps in ( {$email} ) AND eabr.deleted=0";

		$r = $this->db->query($q, true);

		$retArr = array();
		while($a = $this->db->fetchByAssoc($r)) {
			$retArr[] = $a['bean_id'];
		}
		if(count($retArr) > 0) {
			return $retArr;
		} else {
			return false;
		}
	}

	/**
	 * finds emails tagged "//UNSEEN" on mailserver and "SINCE: [date]" if that
	 * option is set
	 *
	 * @return array Array of messageNumbers (mail server's internal keys)
	 */
	function getNewMessageIds() {
        $storedOptions = unserialize(base64_decode($this->stored_options), ['allowed_classes' => false]);

		//TODO figure out if the since date is UDT
		if($storedOptions['only_since']) {// POP3 does not support Unseen flags
			if(!isset($storedOptions['only_since_last']) && !empty($storedOptions['only_since_last'])) {
				$q = 'SELECT last_run FROM schedulers WHERE job = \'function::pollMonitoredInboxes\'';
				$r = $this->db->query($q, true);
				$a = $this->db->fetchByAssoc($r);

				$date = date('r', strtotime($a['last_run']));
			} else {
				$date = $storedOptions['only_since_last'];
			}
			$ret = imap_search($this->conn, 'SINCE "'.$date.'" UNDELETED UNSEEN');
			$check = imap_check($this->conn);
			$storedOptions['only_since_last'] = $check->Date;
			$this->stored_options = base64_encode(serialize($storedOptions));
			$this->save();
		} else {
            $ret = imap_search($this->conn, 'UNDELETED UNSEEN');
		}

		$GLOBALS['log']->debug('-----> getNewMessageIds() got '.count($ret).' new Messages');
		return $ret;
	}

    /**
     * Searches mailbox for new emails
     * @return mixed
     */
    public function getNewIds()
    {
        if (!empty($this->conn)) {
            $ids = $this->conn->search(['UNDELETED', 'UNSEEN']);
        }
        $GLOBALS['log']->debug('-----> getNewIds() got ' . count($ids) . ' new Messages');
        return $ids;
    }

    /**
     * @param string $service Service string, will generate if not passed
     * @return Mailbox
     */
    public function getMailbox($service = '', $mbox = '', $includeMbox = true): Mailbox
    {
        $mbox = $mbox ?: $this->mailbox;
        $service = $service ?: $this->service;
        $flags = ['/service=' . $this->protocol];
        if (!empty($service)) {
            $services = array_filter(explode('::', str_replace('/', '::', $service)));
            foreach ($services as $v) {
                if (!empty($v) && ($v !== 'imap' && $v !== 'pop3')) {
                    $flags[] = '/' . $v;
                }
            }
        }
        return Mailbox::fromRemoteSystemName($this->remoteSystemName, $this->port, $flags, $includeMbox ? $mbox : '');
    }

	function disconnectMailserver() {
		if(is_resource($this->conn)) {
			imap_close($this->conn);
		}
	}

    /**
     * Connects to Imap Server
     *
     * @param bool $test
     * @param bool $force
     * @return mixed|string
     */
    public function connectToImapServer($test = false, $force = false)
    {
        global $mod_strings;

        if ($test) {
            $opts = $this->preConnectMailServer();
            if (isset($opts['good']) && empty($opts['good'])) {
                return array_pop($opts['err']);
            } else {
                $service = $opts['service'];
                $service = str_replace('foo', '', $service); // foo there to support no-item explodes
            }
        } else {
            $service = $this->getServiceString();
        }
        $mailbox = $this->getMailbox($service, $this->mailbox);

        if (empty($this->conn) && !$test) {
            $this->conn = $this->getImapMailer($mailbox);
        }

        if ($test) {
            $msg = '';

            if (!empty($this->conn)) {
                if ($this->protocol == 'imap') {
                    $msg .= $mod_strings['LBL_TEST_SUCCESSFUL'];
                }
            } else {
                $msg = $mod_strings['ERR_TEST_MAILBOX'];
            }

            return $msg;
        } elseif (empty($this->conn)) {
            return "false";
        } else {
            return "true";
        }
    }

	/**
	 * Connects to mailserver.  If an existing IMAP resource is available, it
	 * will attempt to reuse the connection, updating the mailbox path.
	 *
	 * @param bool test Flag to test connection
	 * @param bool force Force reconnect
	 * @return string "true" on success, "false" or $errorMessage on failure
	 */
	function connectMailserver($test=false, $force=false) {
		global $mod_strings;
        if (!extension_loaded('imap')) {
			$GLOBALS['log']->debug('------------------------- IMAP libraries NOT available!!!! die()ing thread.----');
			return $mod_strings['LBL_WARN_NO_IMAP'];
		}

		imap_errors(); // clearing error stack

		// tls::ca::ssl::protocol::novalidate-cert::notls
		$useSsl = ($_REQUEST['ssl'] == 'true') ? true : false;
		if($test) {
			imap_timeout(1, 15); // 60 secs is the default
			imap_timeout(2, 15);
			imap_timeout(3, 15);

			$opts = $this->findOptimumSettings($useSsl);
			if(isset($opts['good']) && empty($opts['good'])) {
				return array_pop($opts['err']);
			} else {
				$service = $opts['service'];
				$service = str_replace('foo','', $service); // foo there to support no-item explodes
			}
		} else {
			$service = $this->getServiceString();
		}

        $mailbox = $this->getMailbox($service, $this->mailbox);

		/*
		 * Try to recycle the current connection to reduce response times
		 */
		if(is_resource($this->conn)) {
			if($force) {
				// force disconnect
				imap_close($this->conn);
			}

			if(imap_ping($this->conn)) {
				// we have a live connection
                imap_reopen($this->conn, $mailbox->value(), CL_EXPUNGE);
			}
		}

		// final test
		if(!is_resource($this->conn) && !$test) {
            $this->conn = $this->getImapConnection($mailbox, $this->email_user, $this->email_password, CL_EXPUNGE);
		}

		if($test) {
			if ($opts == false && !is_resource($this->conn)) {
                $this->conn = $this->getImapConnection($mailbox, $this->email_user, $this->email_password, CL_EXPUNGE);
			}
			$alerts = '';
            $msg = '';
			$successful = false;
			if(($errors = imap_last_error()) || ($alerts = imap_alerts())) {
				if($errors == 'Mailbox is empty') { // false positive
					$successful = true;
				} else {
					$msg .= $errors;
					$msg .= '<p>'.$alerts.'<p>';
					$msg .= '<p>'.$mod_strings['ERR_TEST_MAILBOX'];
				}
			} else {
				$successful = true;
			}

			if($successful) {
				if($this->protocol == 'imap') {
					$msg .= $mod_strings['LBL_TEST_SUCCESSFUL'];
				} else {
					$msg .= $mod_strings['LBL_POP3_SUCCESS'];
				}
			}

			imap_errors(); // collapse error stack
			imap_close($this->conn);
			return $msg;
		} elseif(!is_resource($this->conn)) {
			return "false";
		} else {
			return "true";
		}
	}



	function checkImap() {
        $mod_strings = return_module_language('en_us', 'InboundEmail');

        if (!extension_loaded('imap')) {
			echo '
			<table cellpadding="0" cellspacing="0" width="100%" border="0" class="list view">
				<tr height="20">
					<td scope="col" width="25%"  colspan="2"><slot>
						'.$mod_strings['LBL_WARN_IMAP_TITLE'].'
					</slot></td>
				</tr>
				<tr>
					<td scope="row" valign=TOP bgcolor="#fdfdfd" width="20%"><slot>
						'.$mod_strings['LBL_WARN_IMAP'].'
					<td scope="row" valign=TOP class="oddListRowS1" bgcolor="#fdfdfd" width="80%"><slot>
						<span class=error>'.$mod_strings['LBL_WARN_NO_IMAP'].'</span>
					</slot></td>
				</tr>
			</table>
			<br>';
		}
	}

    /**
     * Attempt to create an IMAP connection using passed in parameters
     * return either the connection resource or false if unable to connect
     *
     * @param  Mailbox  $mailbox  Mailbox to be used to create imap connection
     * @param  string  $username The user name
     * @param  string  $password The password associated with the username
     * @param  integer $options  Bitmask for options parameter to the imap_open function
     *
     * @return resource|boolean  Connection resource on success, FALSE on failure
     */
    protected function getImapConnection(Mailbox $mailbox, $username, $password, $options = 0)
    {
        $connection = null;
        $authenticators = array('', 'GSSAPI', 'NTLM');

        while (!$connection && ($authenticator = array_shift($authenticators)) !== null) {
            if ($authenticator) {
                $params = array(
                    'DISABLE_AUTHENTICATOR' => $authenticator,
                );
            } else {
                $params = array();
            }

            $connection = imap_open($mailbox->value(), $username, $password, $options, 0, $params);
        }

        return $connection;
    }


    /**
     * Get an ImapMailer object
     *
     * @param Mailbox $mailbox
     * @return null|ImapMailer returns `null` if authentication fails
     */
    protected function getImapMailer(Mailbox $mailbox)
    {
        try {
            $mailer = new ImapMailer($mailbox, $this->email_user, $this->email_password, $this->eapm_id);
            return $mailer->testSettings() ? $mailer : null;
        } catch (\Exception $e) {
            LoggerManager::getLogger()->error($e->getMessage());
            return null;
        }
    }

	/**
	 * retrieves an array of I-E beans based on the group_id
	 * @param	string	$groupId	GUID of the group user or Individual
	 * @return	array	$beans		array of beans
	 * @return 	boolean false if none returned
	 */
	function retrieveByGroupId($groupId) {
        $q = 'SELECT id FROM inbound_email WHERE group_id = '.
            $this->db->quoted($groupId).' AND deleted = 0 AND status = \'Active\'';
		$r = $this->db->query($q, true);

		$beans = array();
		while($a = $this->db->fetchByAssoc($r)) {
			$ie = BeanFactory::getBean('InboundEmail', $a['id']);
			$beans[$a['id']] = $ie;
		}
		return $beans;
	}

	/**
	 * Retrieves the current count of personal accounts for the user specified.
	 *
	 * @param unknown_type $user
	 */
	function getUserPersonalAccountCount($user = null)
	{
	    if($user == null)
	       $user = $GLOBALS['current_user'];

        $query = "SELECT count(*) as c FROM inbound_email WHERE deleted=0 AND is_personal='1' AND group_id=" .
            $this->db->quoted($user->id) . " AND status='Active'";

	    $rs = $this->db->query($query);
		$row = $this->db->fetchByAssoc($rs);
        return $row['c'];
	}

	/**
	 * retrieves an array of I-E beans based on the group folder id
	 * @param	string	$groupFolderId	GUID of the group folder
	 * @return	array	$beans		array of beans
	 * @return 	boolean false if none returned
	 */
	function retrieveByGroupFolderId($groupFolderId) {
        $q = 'SELECT id FROM inbound_email WHERE groupfolder_id = '.
            $this->db->quoted($groupFolderId).' AND deleted = 0 ';
        $r = $this->db->query($q, true);

		$beans = array();
		while($a = $this->db->fetchByAssoc($r)) {
			$ie = BeanFactory::getBean('InboundEmail', $a['id']);
			$beans[] = $ie;
		}
		return $beans;
	}

	/**
	 * Retrieves an array of I-E beans that the user has team access to
	 */
	function retrieveAllByGroupId($id, $includePersonal=true) {
		global $current_user;

		$beans = ($includePersonal) ? $this->retrieveByGroupId($id) : array();

		$teamJoin = '';


        $this->disable_row_level_security = false;
		$this->add_team_security_where_clause($teamJoin);
		$this->disable_row_level_security = true;

        // bug 50536: groupfolder_id cannot be updated to NULL from sugarbean's nullable check ('type' set to ID in the vardef)
        // hence the awkward or check -- rbacon
		$q = "SELECT inbound_email.id FROM inbound_email {$teamJoin} WHERE is_personal = 0 AND (groupfolder_id is null OR groupfolder_id = '') AND mailbox_type not like 'bounce' AND inbound_email.deleted = 0 AND status = 'Active' ";



		$r = $this->db->query($q, true);

		while($a = $this->db->fetchByAssoc($r)) {
			$found = false;
			foreach($beans as $bean) {
				if($bean->id == $a['id']) {
					$found = true;
				}
			}

			if(!$found) {
				$ie = BeanFactory::getBean('InboundEmail', $a['id']);
				$beans[$a['id']] = $ie;
			}
		}

		return $beans;
	}

	/**
	 * Retrieves an array of I-E beans that the user has team access to including group
	 */
	function retrieveAllByGroupIdWithGroupAccounts($id, $includePersonal=true) {
		global $current_user;

		$beans = ($includePersonal) ? $this->retrieveByGroupId($id) : array();

		$teamJoin = '';


        $this->disable_row_level_security = false;
		$this->add_team_security_where_clause($teamJoin);
		$this->disable_row_level_security = true;




		$q = "SELECT DISTINCT inbound_email.id FROM inbound_email {$teamJoin} WHERE is_personal = 0 AND mailbox_type not like 'bounce' AND status = 'Active' AND inbound_email.deleted = 0 ";

		$r = $this->db->query($q, true);

		while($a = $this->db->fetchByAssoc($r)) {
			$found = false;
			foreach($beans as $bean) {
				if($bean->id == $a['id']) {
					$found = true;
				}
			}

			if(!$found) {
				$ie = BeanFactory::getBean('InboundEmail', $a['id']);
				$beans[$a['id']] = $ie;
			}
		}

		return $beans;
	}


	/**
	 * returns the bean name - overrides SugarBean's
	 */
	function get_summary_text() {
		return $this->name;
	}

	/**
	 * Override's SugarBean's
	 */

	/**
	 * Override's SugarBean's
	 */
	function get_list_view_data(){
		global $mod_strings;
		global $app_list_strings;
		$temp_array = $this->get_list_view_array();
		$temp_array['MAILBOX_TYPE_NAME']= $app_list_strings['dom_mailbox_type'][$this->mailbox_type];
		//cma, fix bug 21670.
        $temp_array['GLOBAL_PERSONAL_STRING']= ($this->is_personal ? $mod_strings['LBL_IS_PERSONAL'] : $mod_strings['LBL_IS_GROUP']);
        $temp_array['STATUS'] = ($this->status == 'Active') ? $mod_strings['LBL_STATUS_ACTIVE'] : $mod_strings['LBL_STATUS_INACTIVE'];
		return $temp_array;
	}

	/**
	 * Override's SugarBean's
	 */
	function fill_in_additional_list_fields() {
		$this->fill_in_additional_detail_fields();
	}

	/**
	 * Override's SugarBean's
	 */
	function fill_in_additional_detail_fields() {
		if(!empty($this->service)) {
			$exServ = explode('::', $this->service);
			$this->tls		= $exServ[0];
			if ( isset($exServ[1]) )
			    $this->ca		= $exServ[1];
			if ( isset($exServ[2]) )
			    $this->ssl		= $exServ[2];
			if ( isset($exServ[3]) )
			    $this->protocol	= $exServ[3];
		}
	}














	///////////////////////////////////////////////////////////////////////////
	////	IN SUPPORT OF EMAIL 2.0
	/**
	 * Checks for $user's autoImport setting and returns the current value
	 * @param object $user User in focus, defaults to $current_user
	 * @return bool
	 */
	function isAutoImport($user=null) {
		if(!empty($this->autoImport)) {
			return $this->autoImport;
		}

		global $current_user;
		if(empty($user)) $user = $current_user;

		$emailSettings = $current_user->getPreference('emailSettings', 'Emails');
        $emailSettings = is_string($emailSettings) ? unserialize($emailSettings, ['allowed_classes' => false]) : $emailSettings;

		$this->autoImport = (isset($emailSettings['autoImport']) && !empty($emailSettings['autoImport'])) ? true : false;
		return $this->autoImport;
	}

	/**
	 * Clears out cache files for a user
	 */
	function cleanOutCache() {
		$GLOBALS['log']->debug("INBOUNDEMAIL: at cleanOutCache()");
		$this->deleteCache();
	}

	/**
	 * moves emails from folder to folder
	 * @param string $fromIe I-E id
	 * @param string $fromFolder IMAP path to folder in which the email lives
	 * @param string $toIe I-E id
	 * @param string $toFolder
	 * @param string $uids UIDs of emails to move, either Sugar GUIDS or IMAP
	 * UIDs
	 */
	function copyEmails($fromIe, $fromFolder, $toIe, $toFolder, $uids) {
		$this->moveEmails($fromIe, $fromFolder, $toIe, $toFolder, $uids, true);
	}

	/**
	 * moves emails from folder to folder
	 * @param string $fromIe I-E id
	 * @param string $fromFolder IMAP path to folder in which the email lives
	 * @param string $toIe I-E id
	 * @param string $toFolder
	 * @param string $uids UIDs of emails to move, either Sugar GUIDS or IMAP
	 * UIDs
	 * @param bool $copy Default false
	 * @return bool True on successful execution
	 */
	function moveEmails($fromIe, $fromFolder, $toIe, $toFolder, $uids, $copy=false) {
		global $app_strings;
		global $current_user;

		// same I-E server
		if($fromIe == $toIe) {
			$GLOBALS['log']->debug("********* SUGARFOLDER - moveEmails() moving email from I-E to I-E");
			//$exDestFolder = explode("::", $toFolder);
			//preserve $this->mailbox
	        if (isset($this->mailbox)) {
	            $oldMailbox = $this->mailbox;
	        }


			$this->retrieve($fromIe);
		    $this->mailbox = $fromFolder;
			$this->connectMailserver();
			$exUids = explode('::;::', $uids);
			$uids = implode(",", $exUids);
			// imap_mail_move accepts comma-delimited lists of UIDs
			if($copy) {
				if(imap_mail_copy($this->conn, $uids, $toFolder, CP_UID)) {
					$this->mailbox = $toFolder;
					$this->connectMailserver();
					$newOverviews = imap_fetch_overview($this->conn, $uids, FT_UID);
					$this->updateOverviewCacheFile($newOverviews, 'append');
				    if (isset($oldMailbox)) {
                        $this->mailbox = $oldMailbox;
                    }
					return true;
				} else {
					$GLOBALS['log']->debug("INBOUNDEMAIL: could not imap_mail_copy() [ {$uids} ] to folder [ {$toFolder} ] from folder [ {$fromFolder} ]");
				}
			} else {
                $connectStringToFolder = $this->getMailbox('', $toFolder)->value();
                $imapStatus = imap_status($this->conn, $connectStringToFolder, SA_UIDNEXT);

                if ($imapStatus && imap_mail_move($this->conn, $uids, $toFolder, CP_UID)) {
                    $nextUid = $imapStatus->uidnext;
					$GLOBALS['log']->info("INBOUNDEMAIL: imap_mail_move() [ {$uids} ] to folder [ {$toFolder} ] from folder [ {$fromFolder} ]");
					imap_expunge($this->conn); // hard deletes moved messages

					// update cache on fromFolder
                    $overviews = $this->getOverviewsFromCacheFile($exUids, $fromFolder, true);
					$this->deleteCachedMessages($uids, $fromFolder);

                    // Need to switch folder because imap_search doesn't accept folder as a parameter
                    imap_reopen($this->conn, $connectStringToFolder);

                    $newUids = array_filter(
                        imap_search($this->conn, 'ALL UNDELETED', SE_UID),
                        function ($x) use ($nextUid) {
                            return $x >= $nextUid;
                        }
                    );

                    foreach ($overviews as $overview) {
                        // need to update UIDs to match the new target folder
                        $overview->uid = array_shift($newUids);
                    }

					// update cache on toFolder
                    $this->setCacheValue($toFolder, $overviews, array(), array());

				    if (isset($oldMailbox)) {
                        $this->mailbox = $oldMailbox;
                    }

					return true;
				} else {
					$GLOBALS['log']->debug("INBOUNDEMAIL: could not imap_mail_move() [ {$uids} ] to folder [ {$toFolder} ] from folder [ {$fromFolder} ]");
				}
			}
		} elseif($toIe == 'folder' && $fromFolder == 'sugar::Emails') {
			$GLOBALS['log']->debug("********* SUGARFOLDER - moveEmails() moving email from SugarFolder to SugarFolder");
			// move from sugar folder to sugar folder
			$sugarFolder = new SugarFolder();
			$exUids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);
			foreach($exUids as $id) {
				if($copy) {
					$sugarFolder->copyBean($fromIe, $toFolder, $id, "Emails");
				} else {
					$fromSugarFolder = new SugarFolder();
					$fromSugarFolder->retrieve($fromIe);
					$toSugarFolder = new SugarFolder();
					$toSugarFolder->retrieve($toFolder);

					$email = BeanFactory::getBean('Emails', $id);
					$email->status = 'unread';

					// when you move from My Emails to Group Folder, Assign To field for the Email should become null
					if ($fromSugarFolder->is_dynamic && $toSugarFolder->is_group) {
						$email->team_id = $toSugarFolder->team_id;
						$email->team_set_id = $toSugarFolder->team_set_id;
                        // Bug 50972 - assigned_user_id set to empty string not true null
                        // Modifying the field defs in just this one place to allow
                        // a true null since this is what is expected when reading
                        // inbox folders
                        $email->setFieldNullable('assigned_user_id');
						$email->assigned_user_id = "";
						$email->save();
                        $email->revertFieldNullable('assigned_user_id');
                        // End fix 50972

                        //FIXME: notes.email_type should be Emails
                        $where = 'notes.email_id=' . $this->db->quoted($id);
                        $attachments = BeanFactory::getBean('Notes')->get_full_list('', $where, true);

                        foreach ($attachments as $note) {
                            $note->team_id = $toSugarFolder->team_id;
                            $note->team_set_id = $toSugarFolder->team_set_id;
                            $note->save();
                        }

						if (!$toSugarFolder->checkEmailExistForFolder($id)) {
							$fromSugarFolder->deleteEmailFromAllFolder($id);
							$toSugarFolder->addBean($email);
						}
					} elseif ($fromSugarFolder->is_group && $toSugarFolder->is_dynamic) {
						$fromSugarFolder->deleteEmailFromAllFolder($id);
						$email->assigned_user_id = $current_user->id;
						$email->save();
					} else {
						// If you are moving something from personal folder then delete an entry from all folder
						if (!$fromSugarFolder->is_dynamic && !$fromSugarFolder->is_group) {
							$fromSugarFolder->deleteEmailFromAllFolder($id);
						} // if

						if ($fromSugarFolder->is_dynamic && !$toSugarFolder->is_dynamic && !$toSugarFolder->is_group) {
							// moving email from dynamic folder.  Clean up old relationships and add new one
               				$fromSugarFolder->deleteEmailFromAllFolder($id);
							$toSugarFolder->addBean($email);
						} // if
						if (!$toSugarFolder->checkEmailExistForFolder($id)) {
							if (!$toSugarFolder->is_dynamic) {
								if ($email->team_id != $toSugarFolder->team_id) {
									$email->team_id = $toSugarFolder->team_id;
									$email->team_set_id = $toSugarFolder->team_set_id;
								} // if
								$fromSugarFolder->deleteEmailFromAllFolder($id);
								$toSugarFolder->addBean($email);
							} else {
								$fromSugarFolder->deleteEmailFromAllFolder($id);
								$email->assigned_user_id = $current_user->id;
							}
						} else {
							$sugarFolder->move($fromIe, $toFolder, $id);
						} // else
						$email->save();
					} // else
				}
			}

			return true;
		} elseif($toIe == 'folder') {
			$GLOBALS['log']->debug("********* SUGARFOLDER - moveEmails() moving email from I-E to SugarFolder");
			// move to Sugar folder
			$sugarFolder = new SugarFolder();
			$sugarFolder->retrieve($toFolder);
			//Show the import form if we don't have the required info
			if (!isset($_REQUEST['delete'])) {
				$json = getJSONobj();
				if ($sugarFolder->is_group) {
					$_REQUEST['showTeam'] = false;
					$_REQUEST['showAssignTo'] = false;
				}
                $ret = $this->getEmailUI()->getImportForm($_REQUEST, $this->email);
	            $ret['move'] = true;
	            $ret['srcFolder'] = $fromFolder;
	            $ret['srcIeId']   = $fromIe;
	            $ret['dstFolder'] = $toFolder;
	            $ret['dstIeId']   = $toIe;
	            $out = trim($json->encode($ret, false));
	            echo  $out;
	            return true;
			}


			// import to Sugar
			$this->retrieve($fromIe);
			$this->mailbox = $fromFolder;
			$this->connectMailserver();
			// If its a group folder the team should be of the folder team
			if ($sugarFolder->is_group) {
				$_REQUEST['team_id'] = $sugarFolder->team_id;
				$_REQUEST['team_set_id'] = $sugarFolder->team_set_id;
			} else {
				// TODO - set team_id, team_set for new UI
			} // else

			$exUids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);

			if(!empty($sugarFolder->id)) {
				$count = 1;
				$return = array();
				$json = getJSONobj();
				foreach($exUids as $k => $uid) {
					$msgNo = $uid;
					if ($this->isPop3Protocol()) {
						$msgNo = $this->getCorrectMessageNoForPop3($uid);
					} else {
						$msgNo = imap_msgno($this->conn, $uid);
					}

					if(!empty($msgNo)) {
						$importStatus = $this->importOneEmail($msgNo, $uid);
						// add to folder
						if($importStatus) {
							$sugarFolder->addBean($this->email);
							if(!$copy && isset($_REQUEST['delete']) && ($_REQUEST['delete'] == "true") && $importStatus) {
								$GLOBALS['log']->error("********* delete from mailserver [ {explode(",", $uids)} ]");
								// delete from mailserver
								$this->deleteMessageOnMailServer($uid);
								$this->deleteMessageFromCache($uid);
							} // if
                            if ($sugarFolder->is_group) {
                                //FIXME: notes.email_type should be Emails
                                $where = 'notes.email_id=' . $this->db->quoted($this->email->id);
                                $attachments = BeanFactory::getBean('Notes')->get_full_list('', $where, true);

                                foreach ($attachments as $note) {
                                    $note->team_id = $sugarFolder->team_id;
                                    $note->team_set_id = $sugarFolder->team_set_id;
                                    $note->save();
                                }
                            }
						}
						$return[] = $app_strings['LBL_EMAIL_MESSAGE_NO'] . " " . $count . ", " . $app_strings['LBL_STATUS'] . " " . ($importStatus ? $app_strings['LBL_EMAIL_IMPORT_SUCCESS'] : $app_strings['LBL_EMAIL_IMPORT_FAIL']);
						$count++;
					} // if
				} // foreach
				echo $json->encode($return);
				return true;
			} else {
				$GLOBALS['log']->error("********* SUGARFOLDER - failed to retrieve folder ID [ {$toFolder} ]");
			}
		} else {
			$GLOBALS['log']->debug("********* SUGARFOLDER - moveEmails() called with no passing criteria");
		}

		return false;
	}


	/**
	 * Hard deletes an I-E account
	 * @param string id GUID
	 */
	function hardDelete($id) {
        $q = "DELETE FROM inbound_email WHERE id = " . $this->db->quoted($id);
		$r = $this->db->query($q, true);
	}

	/**
	 * Generate a unique filename for attachments based on the message id.  There are no maximum
	 * specifications for the length of the message id, the only requirement is that it be globally unique.
	 *
	 * @param bool $nameOnly Whether or not the attachment count should be appended to the filename.
	 * @return string The temp file name
	 */
	function getTempFilename($nameOnly=false) {

        $str = $this->compoundMessageId;

		if(!$nameOnly) {
			$str = $str.$this->attachmentCount;
			$this->attachmentCount++;
		}

		return $str;
	}

	/**
	 * deletes and expunges emails on server
	 * @param string $uid UID(s), comma delimited, of email(s) on server
	 * @return bool true on success
	 */
	function deleteMessageOnMailServer($uid) {
		global $app_strings;
		$this->connectMailserver();

		if(strpos($uid, $app_strings['LBL_EMAIL_DELIMITER']) !== false) {
			$uids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uid);
		} else {
			$uids[] = $uid;
		}

		$return = true;

		if($this->protocol == 'imap') {
			$trashFolder = $this->get_stored_options("trashFolder");
			if (empty($trashFolder)) {
				$trashFolder = "INBOX.Trash";
			}
			$uidsToMove = implode('::;::', $uids);
			if($this->moveEmails($this->id, $this->mailbox, $this->id, $trashFolder, $uidsToMove))
				$GLOBALS['log']->debug("INBOUNDEMAIL: MoveEmail to {$trashFolder} successful.");
			else {
				$GLOBALS['log']->debug("INBOUNDEMAIL: MoveEmail to {$trashFolder} FAILED - trying hard delete for message: $uid");
				$uidsToDelete = implode(',', $uids);
				imap_delete($this->conn, $uidsToDelete, FT_UID);
				$return = true;
			}
		}
        else {
            $msgnos = array();
        	foreach($uids as $uid) {
            	$msgnos[] = $this->getCorrectMessageNoForPop3($uid);
			}
			$msgnos = implode(',', $msgnos);
			imap_delete($this->conn, $msgnos);
			$return = true;
		}

		if(!imap_expunge($this->conn)) {
            $GLOBALS['log']->debug("NOOP: could not expunge deleted email.");
            $return = false;
         }
         else
            $GLOBALS['log']->info("INBOUNDEMAIL: hard-deleted mail with MSgno's' [ {$msgnos} ]");

		return $return;
	}

	/**
	 * deletes and expunges emails on server
	 * @param string $uid UID(s), comma delimited, of email(s) on server
	 */
	function deleteMessageOnMailServerForPop3($uid) {
		if(imap_delete($this->conn, $uid)) {
            if(!imap_expunge($this->conn)) {
                $GLOBALS['log']->debug("NOOP: could not expunge deleted email.");
                $return = false;
            } else {
                $GLOBALS['log']->info("INBOUNDEMAIL: hard-deleted mail with MSgno's' [ {$uid} ]");
            }
		}
	}

	/**
	 * Checks if this is a pop3 type of an account or not
	 * @return boolean
	 */
	function isPop3Protocol() {
		return ($this->protocol == 'pop3');
	}

	/**
	 * Gets the UIDL from database for the corresponding msgno
	 * @param int messageNo of a message
	 * @return UIDL for the message
	 */
	function getUIDLForMessage($msgNo) {
        $query = "SELECT message_id FROM email_cache WHERE ie_id = " .
            $this->db->quoted($this->id) . " AND msgno = " . $this->db->quoted($msgNo);
		$r = $this->db->query($query);
		$a = $this->db->fetchByAssoc($r);
		return $a['message_id'];
	}
		/**
	 * Get the users default IE account id
	 *
	 * @param User $user
	 * @return string
	 */
	function getUsersDefaultOutboundServerId($user)
	{
		$id =  $user->getPreference($this->keyForUsersDefaultIEAccount,'Emails',$user);
		//If no preference has been set, grab the default system id.
		if(empty($id))
		{
			$oe = new OutboundEmail();
			$system = $oe->getSystemMailerSettings();
			$id=empty($system->id) ? '' : $system->id;
		}

		return $id;
	}

	/**
	 * Get the users default IE account id
	 *
	 * @param User $user
	 */
	function setUsersDefaultOutboundServerId($user,$oe_id)
	{
		$user->setPreference($this->keyForUsersDefaultIEAccount, $oe_id, '', 'Emails');
	}
	/**
	 * Gets the UIDL from database for the corresponding msgno
	 * @param int messageNo of a message
	 * @return UIDL for the message
	 */
	function getMsgnoForMessageID($messageid) {
        $query = "SELECT msgno FROM email_cache WHERE ie_id = " .
            $this->db->quoted($this->id) ." AND message_id = " . $this->db->quoted($messageid);
		$r = $this->db->query($query);
		$a = $this->db->fetchByAssoc($r);
		return $a['message_id'];
	}

	/**
	 * fills InboundEmail->email with an email's details
	 * @param int uid Unique ID of email
	 * @param bool isMsgNo flag that passed ID is msgNo, default false
	 * @param bool setRead Sets the 'seen' flag in cache
	 * @param bool forceRefresh Skips cache file
	 * @return string
	 */
	function setEmailForDisplay($uid, $isMsgNo=false, $setRead=false, $forceRefresh=false) {

		if(empty($uid)) {
			$GLOBALS['log']->debug("*** ERROR: INBOUNDEMAIL trying to setEmailForDisplay() with no UID");
			return 'NOOP';
		}

		global $sugar_config;
		global $app_strings;

		// if its a pop3 then get the UIDL and see if this file name exist or not

        if ($this->getEmailUI()->mboxCacheExists($this->id, $this->mailbox, $uid) && !$forceRefresh) {
			$GLOBALS['log']->info("INBOUNDEMAIL: Using cache file for setEmailForDisplay()");
            $metaOut = $this->getEmailUI()->getMboxCacheValue($this->id, $this->mailbox, $uid);
			$meta = $metaOut['meta']['email'];
			$email = BeanFactory::newBean('Emails');

			foreach($meta as $k => $v) {
				$email->$k = $v;
			}

			$email->to_addrs = $meta['toaddrs'];
			$email->date_sent = $meta['date_start'];

			$this->email = $email;
			$this->email->email2init();
			$ret = 'cache';
		} else {
			$GLOBALS['log']->info("INBOUNDEMAIL: opening new connection for setEmailForDisplay()");
            if($this->isPop3Protocol()) {
            	$msgNo = $this->getCorrectMessageNoForPop3($uid);
            } else {
				if(empty($this->conn)) {
					$this->connectMailserver();
				}
            	$msgNo = ($isMsgNo) ? $uid : imap_msgno($this->conn, $uid);
            }
			if(empty($this->conn)) {
				$status = $this->connectMailserver();
				if($status == "false") {
					$this->email = BeanFactory::newBean('Emails');
					$this->email->name = $app_strings['LBL_EMAIL_ERROR_MAILSERVERCONNECTION'];
					$ret = 'error';
					return $ret;
				}

			}

			$this->importOneEmail($msgNo, $uid, true);
			$this->email->id = '';
			$this->email->new_with_id = false;
			$ret = 'import';
		}

		if($setRead) {
			$this->setStatuses($uid, 'seen', 1);
		}

		return $ret;
	}


	/**
	 * Sets status for a particular attribute on the mailserver and the local cache file
	 */
	function setStatuses($uid, $field, $value) {
		global $sugar_config;
		/** available status fields
		    [subject] => aaa
		    [from] => Some Name
		    [to] => Some Name
		    [date] => Mon, 22 Jan 2007 17:32:57 -0800
		    [message_id] =>
		    [size] => 718
		    [uid] => 191
		    [msgno] => 141
		    [recent] => 0
		    [flagged] => 0
		    [answered] => 0
		    [deleted] => 0
		    [seen] => 1
		    [draft] => 0
		*/
		// local cache
		$file = "{$this->mailbox}.imapFetchOverview.php";
		$overviews = $this->getCacheValueForUIDs($this->mailbox, array($uid));

		if(!empty($overviews)) {
			$updates = array();

			foreach($overviews['retArr'] as $k => $obj) {
				if($obj->imap_uid == $uid) {
					$obj->$field = $value;
					$updates[] = $obj;
				}
			}

			if(!empty($updates)) {
				$this->setCacheValue($this->mailbox, array(), $updates);
			}
		}
	}

	/**
	 * Removes an email from the cache file, deletes the message from the cache too
	 * @param string String of uids, comma delimited
	 */
	function deleteMessageFromCache($uids) {
		global $sugar_config;
		global $app_strings;

		// delete message cache file and email_cache file
		$exUids = explode($app_strings['LBL_EMAIL_DELIMITER'], $uids);

		foreach($exUids as $uid) {
			// local cache
			if ($this->isPop3Protocol()) {
                $q = "DELETE FROM email_cache
				        WHERE message_id = '" . $this->db->quote($uid) . "'
				        AND ie_id = '" . $this->db->quote($this->id) . "'
				        AND mbox = '" . $this->db->quote($this->mailbox) . "'
				        ";
			} else {
                $q = "DELETE FROM email_cache
				        WHERE imap_uid = '" . $this->db->quote($uid) . "'
				        AND ie_id = '" . $this->db->quote($this->id) . "'
				        AND mbox = '" . $this->db->quote($this->mailbox) . "'
				        ";
			}
			$r = $this->db->query($q);
			if ($this->isPop3Protocol()) {
				$uid = md5($uid);
			} // if

            $this->getEmailUI()->deleteMboxCache($this->id, $this->mailbox, $uid);
		}
	}


	/**
	 * Shows one email.
	 * @param int uid UID of email to display
	 * @param string mbox Mailbox to look in for the message
	 * @param bool isMsgNo Flag to assume $uid is a MessageNo, not UniqueID, default false
	 */
	function displayOneEmail($uid, $mbox, $isMsgNo=false) {

		global $timedate;
		global $app_strings;
		global $app_list_strings;
		global $sugar_smarty;
		global $theme;
		global $current_user;
		global $sugar_config;

		$fetchedAttributes = array(
			'name',
			'from_name',
			'from_addr',
			'date_start',
			'time_start',
			'message_id',
		);

		$souEmail = array();
		foreach($fetchedAttributes as $k) {
			if ($k == 'date_start') {
				$this->email->$k . " " . $this->email->time_start;
				$souEmail[$k] = $this->email->$k . " " . $this->email->time_start;
			} elseif ($k == 'time_start') {
				$souEmail[$k] = "";
			} else {
				$souEmail[$k] = trim($this->email->$k);
			}
		}

		// if a MsgNo is passed in, convert to UID
		if($isMsgNo)
			$uid = imap_uid($this->conn, $uid);

		// meta object to allow quick retrieval for replies
		$meta = array();
		$meta['type'] = $this->email->type;
		$meta['uid'] = $uid;
		$meta['ieId'] = $this->id;
		$meta['email'] = $souEmail;
		$meta['mbox'] = $this->mailbox;
		$ccs = '';
		// imap vs pop3

		// self mapping
		$exMbox = explode("::", $mbox);

		// CC section
		$cc = '';
		if(!empty($this->email->cc_addrs)) {
			//$ccs = $this->collapseLongMailingList($this->email->cc_addrs);
			$ccs = to_html($this->email->cc_addrs_names);
			$cc =<<<eoq
				<tr>
					<td NOWRAP valign="top" class="displayEmailLabel">
						{$app_strings['LBL_EMAIL_CC']}:
					</td>
					<td class="displayEmailValue">
						{$ccs}
					</td>
				</tr>
eoq;
		}
		$meta['cc'] = $cc;
		$meta['email']['cc_addrs'] = $ccs;
		// attachments
		$attachments = '';
		if ($mbox == "sugar::Emails") {

            //FIXME: notes.email_type should be Emails
            $q = "SELECT id, filename, file_mime_type FROM notes WHERE email_id = " .
                $this->db->quoted($uid) . " AND deleted = 0";
			$r = $this->db->query($q);
			$i = 0;
			while($a = $this->db->fetchByAssoc($r)) {
				$url = "index.php?entryPoint=download&type=notes&id={$a['id']}";
				$lbl = ($i == 0) ? $app_strings['LBL_EMAIL_ATTACHMENTS'].":" : '';
				$i++;
				$attachments .=<<<EOQ
				<tr>
							<td NOWRAP valign="top" class="displayEmailLabel">
								{$lbl}
							</td>
							<td NOWRAP valign="top" colspan="2" class="displayEmailValue">
								<a href="{$url}">{$a['filename']}</a>
							</td>
						</tr>
EOQ;
				$this->email->cid2Link($a['id'], $a['file_mime_type']);
		    } // while


		} else {

			if($this->attachmentCount > 0) {
				$theCount = $this->attachmentCount;

				for($i=0; $i<$theCount; $i++) {
					$lbl = ($i == 0) ? $app_strings['LBL_EMAIL_ATTACHMENTS'].":" : '';
					$name = $this->getTempFilename(true).$i;
					$tempName = urlencode($this->tempAttachment[$name]);

					$url = "index.php?entryPoint=download&type=temp&isTempFile=true&ieId={$this->id}&tempName={$tempName}&id={$name}";

					$attachments .=<<<eoq
						<tr>
							<td NOWRAP valign="top" class="displayEmailLabel">
								{$lbl}
							</td>
							<td NOWRAP valign="top" colspan="2" class="displayEmailValue">
								<a href="{$url}">{$this->tempAttachment[$name]}</a>
							</td>
						</tr>
eoq;
				} // for
			} // if
		} // else
		$meta['email']['attachments'] = $attachments;

		// toasddrs
		$meta['email']['toaddrs'] = $this->collapseLongMailingList($this->email->to_addrs);
		$meta['email']['cc_addrs'] = $ccs;

		// body
        if (empty($this->email->description_html)) {
            $description = nl2br($this->email->description);
            $description_html = '';
        } else {
            $description = SugarCleaner::cleanHtml(from_html($this->email->description_html, false), false);
            $description_html  = $this->getHTMLDisplay($description);
        }
		$meta['email']['description'] = $description;
        $meta['email']['description_html'] = $description_html;

		// meta-metadata
		$meta['is_sugarEmail'] = ($exMbox[0] == 'sugar') ? true : false;

		if(!$meta['is_sugarEmail']) {
			if($this->isAutoImport) {
				$meta['is_sugarEmail'] = true;
			}
		} else {
			if( $this->email->status != 'sent' ){
                $email = BeanFactory::getBean('Emails', $uid);
                if (!empty($email->id)) {
                    $email->status = 'read';
                    $email->save();
                }
			}
		}

		$return = array();
        $meta['email']['name'] = $this->email->name;
        $meta['email']['from_addr'] = ( !empty($this->email->from_addr_name) ) ? to_html($this->email->from_addr_name) : to_html($this->email->from_addr);
        $meta['email']['toaddrs'] = ( !empty($this->email->to_addrs_names) ) ? to_html($this->email->to_addrs_names) : to_html($this->email->to_addrs);
        $meta['email']['cc_addrs'] = to_html($this->email->cc_addrs_names);
        $meta['email']['reply_to_addr'] = to_html($this->email->reply_to_addr);
		$return['meta'] = $meta;

		return $return;
	}

	/**
	 * Takes a long list of email addresses from a To or CC field and shows the first 3, the rest hidden
	 * @param string emails
	 * @return string
	 */
	function collapseLongMailingList($emails) {
		global $app_strings;

		$ex = explode(",", $emails);
		$i = 0;
		$j = 0;

		if(count($ex) > 3) {
			$emails = "";
			$emailsHidden = "";

			foreach($ex as $email) {
				if($i < 2) {
					if(!empty($emails)) {
						$emails .= ", ";
					}
					$emails .= trim($email);
				} else {
					if(!empty($emailsHidden)) {
						$emailsHidden .= ", ";
					}
					$emailsHidden .= trim($email);
					$j++;
				}
				$i++;
			}

			if(!empty($emailsHidden)) {
				$email2 = $emails;
				$emails = "<span onclick='javascript:SUGAR.email2.detailView.showFullEmailList(this);' style='cursor:pointer;'>{$emails} [...{$j} {$app_strings['LBL_MORE']}]</span>";
				$emailsHidden = "<span onclick='javascript:SUGAR.email2.detailView.showCroppedEmailList(this)' style='cursor:pointer; display:none;'>{$email2}, {$emailsHidden} [ {$app_strings['LBL_LESS']} ]</span>";
			}

			$emails .= $emailsHidden;
		}

		return $emails;
	}


	/**
	 * Sorts IMAP's imap_fetch_overview() results
	 * @param array $arr Array of standard objects
	 * @param string $sort Column to sort by
	 * @param string direction Direction to sort by (asc/desc)
	 * @return array Sorted array of obj.
	 */
	function sortFetchedOverview($arr, $sort=4, $direction='DESC', $forceSeen=false) {
		global $current_user;

		$sortPrefs = $current_user->getPreference('folderSortOrder', 'Emails');
		if(!empty($sortPrefs))
			$listPrefs = $sortPrefs;
		else
			$listPrefs = array();

		if(isset($listPrefs[$this->id][$this->mailbox])) {
			$currentNode = $listPrefs[$this->id][$this->mailbox];
		}

		if(isset($currentNode['current']) && !empty($currentNode['current'])) {
			$sort = $currentNode['current']['sort'];
			$direction = $currentNode['current']['direction'];
		}

		// sort defaults
		if(empty($sort)) {
			$sort = $this->defaultSort;//4;
			$direction = $this->defaultDirection; //'DESC';
		} elseif(!is_numeric($sort)) {
			// handle bad sort index
			$sort = $this->defaultSort;
		} else {
			// translate numeric index to human readable
            $sort = $this->hrSort[$sort];
		}
		if(empty($direction)) {
			$direction = 'DESC';
		}



		$retArr = array();
		$sorts = array();

		foreach($arr as $k => $overview) {
			$sorts['flagged'][$k] = $overview->flagged;
			$sorts['status'][$k] = $overview->answered;
			$sorts['from'][$k] = str_replace('"', "", $this->handleMimeHeaderDecode($overview->from));
			$sorts['subj'][$k] = $this->handleMimeHeaderDecode(quoted_printable_decode($overview->subject));
			$sorts['date'][$k] = $overview->date;
		}

		// sort by column
		natcasesort($sorts[$sort]);

		// direction
		if(strtolower($direction) == 'desc') {
			$revSorts = array();
			$keys = array_reverse(array_keys($sorts[$sort]));

			for($i=0; $i<count($keys); $i++) {
				$v = $keys[$i];
				$revSorts[$v] = $sorts[$sort][$v];
			}

			$sorts[$sort] = $revSorts;
		}
        $timedate = TimeDate::getInstance();
		foreach($sorts[$sort] as $k2 => $overview2) {
		    $arr[$k2]->date = $timedate->fromString($arr[$k2]->date)->asDb();
			$retArr[] = $arr[$k2];
		}

		$finalReturn = array();
		$finalReturn['retArr'] = $retArr;
		$finalReturn['sortBy'] = $sort;
		$finalReturn['direction'] = $direction;
		return $finalReturn;
	}


	function setReadFlagOnFolderCache($mbox, $uid) {
		global $sugar_config;

		$this->mailbox = $mbox;

		// cache
		if($this->validCacheExists($this->mailbox)) {
			$ret = $this->getCacheValue($this->mailbox);

			$updates = array();

			foreach($ret as $k => $v) {
				if($v->imap_uid == $uid) {
					$v->seen = 1;
					$updates[] = $v;
					break;
				}
			}

			$this->setCacheValue($this->mailbox, array(), $updates);
		}
	}

	/**
	 * Returns a list of emails in a mailbox.
	 * @param string mbox Name of mailbox using dot notation paths to display
	 * @param string $forceRefresh Flag to use cache or not
	 */
    public function displayFolderContents($mbox, $forceRefresh = 'false', $page = 1)
    {
		global $current_user;

		$delimiter = $this->get_stored_options('folderDelimiter');
		if ($delimiter) {
			$mbox = str_replace('.', $delimiter, $mbox);
		}

		$this->mailbox = $mbox;

		// jchi #9424, get sort and direction from user preference
		$sort = 'date';
		$direction = 'desc';
		$sortSerial = $current_user->getPreference('folderSortOrder', 'Emails');
		if(!empty($sortSerial) && !empty($_REQUEST['ieId']) && !empty($_REQUEST['mbox'])) {
            $sortArray = unserialize($sortSerial, ['allowed_classes' => false]);
			$sort = $sortArray[$_REQUEST['ieId']][$_REQUEST['mbox']]['current']['sort'];
			$direction = $sortArray[$_REQUEST['ieId']][$_REQUEST['mbox']]['current']['direction'];
		}
		//end

		// save sort order
		if(!empty($_REQUEST['sort']) && !empty($_REQUEST['dir'])) {
            $ieId = InputValidation::getService()->getValidInputRequest('ieId', 'Assert\Guid');
            $mbox = InputValidation::getService()->getValidInputRequest('mbox');
            $this->getEmailUI()->saveListViewSortOrder($ieId, $mbox, $_REQUEST['sort'], $_REQUEST['dir']);
			$sort = $_REQUEST['sort'];
			$direction = $_REQUEST['dir'];
		} else {
			$_REQUEST['sort'] = '';
			$_REQUEST['dir'] = '';
		}

		// cache
		$ret = array();
		$cacheUsed = false;
		if($forceRefresh == 'false' && $this->validCacheExists($this->mailbox)) {
			$emailSettings = $current_user->getPreference('emailSettings', 'Emails');

			// cn: default to a low number until user specifies otherwise
			if(empty($emailSettings['showNumInList'])) {
				$emailSettings['showNumInList'] = 20;
			}

			$ret = $this->getCacheValue($this->mailbox, $emailSettings['showNumInList'], $page, $sort, $direction);
			$cacheUsed = true;
		}

		$out = $this->displayFetchedSortedListXML($ret, $mbox);

		$metadata = array();
		$metadata['mbox'] = $mbox;
		$metadata['ieId'] = $this->id;
		$metadata['name'] = $this->name;
		$metadata['fromCache'] = $cacheUsed ? 1 : 0;
		$metadata['out'] = $out;

		return $metadata;
	}

	/**
	 * For a group email account, create subscriptions for all users associated with the
	 * team assigned to the account.
	 *
	 */
	function createUserSubscriptionsForGroupAccount()
	{
	    $team = BeanFactory::getBean('Teams', $this->team_id);
	    $usersList = $team->get_team_members(true);
	    foreach($usersList as $userObject)
	    {
            $showFolders = $userObject->getPreference('showFolders', 'Emails', $userObject);
            $previousSubscriptions = unserialize(base64_decode($showFolders), ['allowed_classes' => false]);
	        if($previousSubscriptions === FALSE)
	            $previousSubscriptions = array();

	        $previousSubscriptions[] = $this->id;

	        $encodedSubs = base64_encode(serialize($previousSubscriptions));
	        $userObject->setPreference('showFolders',$encodedSubs , '', 'Emails');
	        $userObject->savePreferencesToDB();
	    }
    }
	/**
    * Create a sugar folder for this inbound email account
    * if the Enable Auto Import option is selected
    *
    * @return String Id of the sugar folder created.
    */
	function createAutoImportSugarFolder()
	{
	    global $current_user;
	    $guid = create_guid();
	    $GLOBALS['log']->debug("Creating Sugar Folder for IE with id $guid");
	    $folder = new SugarFolder();
	    $folder->id = $guid;
	    $folder->new_with_id = TRUE;
	    $folder->name = $this->name;
	    $folder->has_child = 0;
	    $folder->is_group = 1;
	    $folder->assign_to_id = $current_user->id;
	    $folder->parent_folder = "";

	    $folder->team_id = $this->team_id;
	    $folder->team_set_id = empty($this->team_set_id ) ? $this->team_id : $this->team_set_id;

	    //If this inbound email is marked as inactive, don't add subscriptions.
	    $addSubscriptions = ($this->status == 'Inactive' || $this->mailbox_type == 'bounce') ? FALSE : TRUE;
	    $folder->save($addSubscriptions);

	    return $guid;
	}

	function validCacheExists($mbox) {
        $q = "SELECT count(*) c FROM email_cache WHERE ie_id = " . $this->db->quoted($this->id);
		$r = $this->db->query($q);
		$a = $this->db->fetchByAssoc($r);
		$count = $a['c'];

		if($count > 0) {
			return true;
		}

		return false;
	}




	function displayFetchedSortedListXML($ret, $mbox) {

		global $timedate;
		global $current_user;
		global $sugar_config;

		if(empty($ret['retArr'])) {
		    return array();
		}

		$tPref = $current_user->getUserDateTimePreferences();

		$return = array();

		foreach($ret['retArr'] as $msg) {

			$flagged	= ($msg->flagged == 0) ? "" : $this->iconFlagged;
			$status		= ($msg->deleted) ? $this->iconDeleted : "";
			$status		= ($msg->draft == 0) ? $status : $this->iconDraft;
			$status		= ($msg->answered == 0) ? $status : $this->iconAnswered;
			$from		= $this->handleMimeHeaderDecode($msg->from);
			$subject	= $this->handleMimeHeaderDecode($msg->subject);
			//$date		= date($tPref['date']." ".$tPref['time'], $msg->date);
			$date		= $timedate->to_display_date_time($this->db->fromConvert($msg->date, 'datetime'));
			//$date		= date($tPref['date'], $this->getUnixHeaderDate($msg->date));

			$temp = array();
			$temp['flagged'] = $flagged;
			$temp['status'] = $status;
			$temp['from']	= to_html($from);
			$temp['subject'] = $subject;
			$temp['date']	= $date;
			$temp['uid'] = $msg->uid; // either from an imap_search() or massaged cache value
			$temp['mbox'] = $this->mailbox;
			$temp['ieId'] = $this->id;
			$temp['site_url'] = $sugar_config['site_url'];
			$temp['seen'] = $msg->seen;
			$temp['type'] = (isset($msg->type)) ? $msg->type: 'remote';
			$temp['to_addrs'] = to_html($msg->to);
			$temp['hasAttach'] = '0';

			$return[] = $temp;
		}

		return $return;
	}



	/**
	 * retrieves the mailboxes for a given account in the following format
	 * Array(
	    [INBOX] => Array
	        (
	            [Bugs] => Bugs
	            [Builder] => Builder
	            [DEBUG] => Array
	                (
	                    [out] => out
	                    [test] => test
	                )
	        )
	 * @param bool $justRaw Default false
	 * @return array
	 */
	function getMailboxes($justRaw=false) {
		if($justRaw == true) {
			return $this->mailboxarray;
		} // if

		return $this->generateMultiDimArrayFromFlatArray($this->mailboxarray, $this->retrieveDelimiter());
	}

	function getMailBoxesForGroupAccount() {
		$mailboxes = $this->generateMultiDimArrayFromFlatArray(explode(",", $this->mailbox), $this->retrieveDelimiter());
		$mailboxesArray = $this->generateFlatArrayFromMultiDimArray($mailboxes, $this->retrieveDelimiter());
		$mailboxesArray = $this->filterMailBoxFromRaw(explode(",", $this->mailbox), $mailboxesArray);
		$this->saveMailBoxFolders($mailboxesArray);
		/*
		if ($this->mailbox != $this->$email_user) {
			$mailboxes = $this->sortMailboxes($this->mailbox, $this->retrieveDelimiter());
			$mailboxesArray = $this->generateFlatArrayFromMultiDimArray($mailboxes, $this->retrieveDelimiter());
			$this->saveMailBoxFolders($mailboxesArray);
			// save mailbox value of an inbound email account to email user
			$this->saveMailBoxValueOfInboundEmail();
		} else {
			$mailboxes = $this->getMailboxes();
		}
		*/
		return $mailboxes;
	} // fn

	function saveMailBoxFolders($value) {
		if (is_array($value)) {
			$value = implode(",", $value);
		}
		$this->mailboxarray = explode(",", $value);
		$value = $this->db->quoted($value);
        $query = "update inbound_email set mailbox = $value where id = " . $this->db->quoted($this->id);
		$this->db->query($query);
	}

	function insertMailBoxFolders($value) {
        $query = "select value from config where category='InboundEmail' and name=" . $this->db->quoted($this->id);
		$r = $this->db->query($query);
		$a = $this->db->fetchByAssoc($r);
		if (empty($a['value'])) {
			if (is_array($value)) {
				$value = implode(",", $value);
			}
			$this->mailboxarray = explode(",", $value);
			$value = $this->db->quoted($value);

            $query = "INSERT INTO config VALUES('InboundEmail', " . $this->db->quoted($this->id) . ", $value)";
			$this->db->query($query);
		} // if
	}

	function saveMailBoxValueOfInboundEmail() {
        $query = "update Inbound_email set mailbox = " . $this->db->quoted($this->email_user);
		$this->db->query($query);
	}

	function retrieveMailBoxFolders() {
		$this->mailboxarray = explode(",", $this->mailbox);
		/*
		$query = "select value from config where category='InboundEmail' and name='{$this->id}'";
		$r = $this->db->query($query);
		$a = $this->db->fetchByAssoc($r);
		$this->mailboxarray = explode(",", $a['value']);
		*/
	} // fn


	function retrieveDelimiter() {
		$delimiter = $this->get_stored_options('folderDelimiter');
        if (!$delimiter) {
        	$delimiter = '.';
        }
		return $delimiter;
	} // fn

	function generateFlatArrayFromMultiDimArray($arraymbox, $delimiter) {
		$ret = array();
		foreach($arraymbox as $key => $value) {
			$this->generateArrayData($key, $value, $ret, $delimiter);
		} // foreach
		return $ret;

	} // fn

	function generateMultiDimArrayFromFlatArray($raw, $delimiter) {
		// generate a multi-dimensional array to iterate through
		$ret = array();
		foreach($raw as $mbox) {
			$ret = $this->sortMailboxes($mbox, $ret, $delimiter);
		}
		return $ret;

	} // fn

	function generateArrayData($key, $arraymbox, &$ret, $delimiter) {
		$ret [] = $key;
		if (is_array($arraymbox)) {
			foreach($arraymbox as $mboxKey => $value) {
				$newKey = $key . $delimiter . $mboxKey;
				$this->generateArrayData($newKey, $value, $ret, $delimiter);
			} // foreach
		} // if
	}

	/**
	 * sorts the folders in a mailbox in a multi-dimensional array
	 * @param string $MBOX
	 * @param array $ret
	 * @return array
	 */
	function sortMailboxes($mbox, $ret, $delimeter = ".") {
		if(strpos($mbox, $delimeter)) {
			$node = substr($mbox, 0, strpos($mbox, $delimeter));
			$nodeAfter = substr($mbox, strpos($mbox, $node) + strlen($node) + 1, strlen($mbox));

			if(!isset($ret[$node])) {
				$ret[$node] = array();
			} elseif(isset($ret[$node]) && !is_array($ret[$node])) {
				$ret[$node] = array();
			}
			$ret[$node] = $this->sortMailboxes($nodeAfter, $ret[$node], $delimeter);
		} else {
			$ret[$mbox] = $mbox;
		}

		return $ret;
	}

	/**
	 * parses Sugar's storage method for imap server service strings
	 * @return string
	 */
	function getServiceString() {
		$service = '';
		$exServ = explode('::', $this->service);

		foreach($exServ as $v) {
			if(!empty($v) && ($v != 'imap' && $v !='pop3')) {
				$service .= '/'.$v;
			}
		}
		return $service;
	}


    /**
     * Get Email messages IDs from server which aren't in database
     * @return array Ids of messages, which aren't still in database
     */
    public function getNewEmailsForSyncedMailbox()
    {
        // ids's count limit for batch processing
        $limit = 20;
        $msgIds = imap_search($this->conn, 'ALL UNDELETED');
        $result = array();
        try{
            if(count($msgIds) > 0)
            {
                /*
                 * @var collect results of queries and message headers
                 */
                $tmpMsgs = array();
                $repeats = 0;
                $counter = 0;

                // sort IDs to get lastest on top
                arsort($msgIds);
                $GLOBALS['log']->debug('-----> getNewEmailsForSyncedMailbox() got '.count($msgIds).' Messages');
                foreach($msgIds as $k => &$msgNo)
                {
                    $uid = imap_uid($this->conn, $msgNo);
                    $header = imap_headerinfo($this->conn, $msgNo);
                    $fullHeader = imap_fetchheader($this->conn, $msgNo);
                    $message_id = $header->message_id;
                    $deliveredTo = $this->id;
                    $matches = array();
                    preg_match('/(delivered-to:|x-real-to:){1}\s*(\S+)\s*\n{1}/im', $fullHeader, $matches);
                    if(count($matches))
                    {
                        $deliveredTo = $matches[2];
                    }
                    if(empty($message_id) || !isset($message_id))
                    {
                        $GLOBALS['log']->debug('*********** NO MESSAGE_ID.');
                        $message_id = $this->getMessageId($header);
                    }

                    // generate compound messageId
                    $this->compoundMessageId = trim($message_id) . trim($deliveredTo);
                    // if the length > 255 then md5 it so that the data will be of smaller length
                    if (strlen($this->compoundMessageId) > 255)
                    {
                        $this->compoundMessageId = md5($this->compoundMessageId);
                    } // if

                    if (empty($this->compoundMessageId))
                    {
                        break;
                    } // if
                    $counter++;
                    $potentials = clean_xss($this->compoundMessageId, false);

                    if(is_array($potentials) && !empty($potentials))
                    {
                        foreach($potentials as $bad)
                        {
                            $this->compoundMessageId = str_replace($bad, "", $this->compoundMessageId);
                        }
                    }
                    array_push($tmpMsgs, array('msgNo' => $msgNo, 'msgId' => $this->compoundMessageId, 'exists' => 0));
                    if($counter == $limit)
                    {
                        $counter = 0;
                        $query = array();
                        foreach(array_slice($tmpMsgs, -$limit, $limit) as $k1 => $v1)
                        {
                            $query[] = $this->db->quoted($v1['msgId']);
                        }
                        $query = 'SELECT count(emails.message_id) as cnt, emails.message_id AS mid FROM emails
                            WHERE emails.message_id IN (' . implode(',', $query) . ') and emails.deleted = 0
                            group by emails.message_id';
                        $r = $this->db->query($query);
                        $tmp = array();
                        while($a = $this->db->fetchByAssoc($r))
                        {
                            $tmp[html_entity_decode($a['mid'])] = $a['cnt'];
                        }
                        foreach($tmpMsgs as $k1 => $v1)
                        {
                            if(isset($tmp[$v1['msgId']]) && $tmp[$v1['msgId']] > 0)
                            {
                                $tmpMsgs[$k1]['exists'] = 1;
                            }
                        }
                        foreach($tmpMsgs as $k1 => $v1)
                        {
                            if($v1['exists'] == 0)
                            {
                                $repeats = 0;
                                array_push($result, $v1['msgNo']);
                            }else{
                                $repeats++;
                            }
                        }
                        if($repeats > 0)
                        {
                            if($repeats >= $limit)
                            {
                                break;
                            }
                            else
                            {
                                $tmpMsgs = array_splice($tmpMsgs, -$repeats, $repeats);
                            }
                        }
                        else
                        {
                            $tmpMsgs = array();
                        }
                    }
                }
                unset($msgNo);
            }
        }catch(Exception $ex)
        {
            $GLOBALS['log']->fatal($ex->getMessage());
        }
        $GLOBALS['log']->debug('-----> getNewEmailsForSyncedMailbox() got '.count($result).' unsynced messages');
        return $result;
    }

    /**
     * Perform specialized Windows Outlook fixup to remove unnwanted blank lines caused from empty paragraphs
     * left behind by HTML Purifier when MSOffice namespaces and Embedded styles are removed.
     *
     * Issue reported: https://sugarcrm.atlassian.net/browse/MAR-2297  (SI Bug number: 66022)
     *
     * Note: this fixup is enabled when the 'mso_fixup_paragraph_tags' config option has been added and is set to true.
     *
     * @param string $html
     * @return string $html
     */
    public function getHTMLDisplay($html)
    {
        if (!empty($GLOBALS['sugar_config']['mso_fixup_paragraph_tags'])
            && $GLOBALS['sugar_config']['mso_fixup_paragraph_tags'] === true
            && (strpos($html, 'class="MsoNormal"') !== false ||
                strpos($html, "<o:p>") !== false)
        ) {
                $replaceStrings = array(
                    '<p></p>' => '',
                    '<p> </p>' => '<br/>',
                    '<p>&nbsp;</p>' => '<br/>',
                    '<p>' . chr(0xC2) . chr(0xA0) . '</p>' => '<br/>',
                    '<p class="MsoNormal"></p>' => '',
                    '<p class="MsoNormal"> </p>' => '',
                    '<p class="MsoNormal">&nbsp;</p>' => '',
                    '<p class="MsoNormal">' . chr(0xC2) . chr(0xA0) . '</p>' => '',
                );
                $html = str_replace(array_keys($replaceStrings), array_values($replaceStrings), $html);
                $html = "<style>p.MsoNormal {margin: 0;}</style>\n" . $html;
        }
        return $html;
    }

    /**
     * Returns an instance of EmailUI
     * @return EmailUI
     */
    public function getEmailUI()
    {
        if (empty($this->ui)) {
            $this->ui = new EmailUI();
        }

        return $this->ui;
    }

} // end class definition


/**
 * Simple class to mirror the passed object from an imap_fetch_overview() call
 */
class Overview {
	var $subject;
	var $from;
	var $fromaddr;
	var $to;
	var $toaddr;
	var $date;
	var $message_id;
	var $size;
	var $uid;
	var $msgno;
	var $recent;
	var $flagged;
	var $answered;
	var $deleted;
	var $seen;
	var $draft;
	var $indices; /* = array(

			array(
				'name'			=> 'mail_date',
				'type'			=> 'index',
				'fields'		=> array(
					'mbox',
					'senddate',
				)
			),
			array(
				'name'			=> 'mail_from',
				'type'			=> 'index',
				'fields'		=> array(
					'mbox',
					'fromaddr',
				)
			),
			array(
				'name'			=> 'mail_subj',
				'type'			=> 'index',
				'fields'		=> array(
					'mbox',
					'subject',
				)
			),
		);
	*/
	var $fieldDefs;/* = array(
			'mbox' => array(
				'name'		=> 'mbox',
				'type'		=> 'varchar',
				'len'		=> 60,
				'required'	=> true,
			),
			'subject' => array(
				'name'		=> 'subject',
				'type'		=> 'varchar',
				'len'		=> 100,
				'required'	=> false,
			),
			'fromaddr' => array(
				'name'		=> 'fromaddr',
				'type'		=> 'varchar',
				'len'		=> 100,
				'required'	=> true,
			),
			'toaddr' => array(
				'name'		=> 'toaddr',
				'type'		=> 'varchar',
				'len'		=> 100,
				'required'	=> true,
			),
			'senddate' => array(
				'name'		=> 'senddate',
				'type'		=> 'datetime',
				'required'	=> true,
			),
			'message_id' => array(
				'name'		=> 'message_id',
				'type'		=> 'varchar',
				'len'		=> 255,
				'required'	=> false,
			),
			'mailsize' => array(
				'name'		=> 'mailsize',
				'type'		=> 'uint',
				'len'		=> 16,
				'required'	=> true,
			),
			'uid' => array(
				'name'		=> 'uid',
				'type'		=> 'uint',
				'len'		=> 32,
				'required'	=> true,
			),
			'msgno' => array(
				'name'		=> 'msgno',
				'type'		=> 'uint',
				'len'		=> 32,
				'required'	=> false,
			),
			'recent' => array(
				'name'		=> 'recent',
				'type'		=> 'tinyint',
				'len'		=> 1,
				'required'	=> true,
			),
			'flagged' => array(
				'name'		=> 'flagged',
				'type'		=> 'tinyint',
				'len'		=> 1,
				'required'	=> true,
			),
			'answered' => array(
				'name'		=> 'answered',
				'type'		=> 'tinyint',
				'len'		=> 1,
				'required'	=> true,
			),
			'deleted' => array(
				'name'		=> 'deleted',
				'type'		=> 'tinyint',
				'len'		=> 1,
				'required'	=> true,
			),
			'seen' => array(
				'name'		=> 'seen',
				'type'		=> 'tinyint',
				'len'		=> 1,
				'required'	=> true,
			),
			'draft' => array(
				'name'		=> 'draft',
				'type'		=> 'tinyint',
				'len'		=> 1,
				'required'	=> true,
			),
		);
	*/

    public function __construct()
    {
		global $dictionary;

		if(!isset($dictionary['email_cache']) || empty($dictionary['email_cache'])) {
		    include SugarAutoLoader::existingCustomOne('metadata/email_cacheMetaData.php');
		}

		$this->fieldDefs = $dictionary['email_cache']['fields'];
		$this->indices = $dictionary['email_cache']['indices'];
	}
}
