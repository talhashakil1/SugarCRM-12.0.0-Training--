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
class ProspectList extends SugarBean {

	// Stored fields
	var $id;
	var $date_entered;
	var $date_modified;
	var $modified_user_id;
	var $assigned_user_id;
	var $created_by;
	var $created_by_name;
	var $modified_by_name;
	var $list_type;
	var $domain_name;
	var $team_id;
	var $team_name;

	var $name;
	var $description;

	// These are related
	var $assigned_user_name;
	var $prospect_id;
	var $contact_id;
	var $lead_id;

	// module name definitions and table relations
	var $table_name = "prospect_lists";
	var $module_dir = 'ProspectLists';
	var $rel_prospects_table = "prospect_lists_prospects";
	var $object_name = "ProspectList";

	// This is used to retrieve related fields from form posts.
	var $additional_column_fields = array(
		'assigned_user_name', 'assigned_user_id', 'campaign_id',
	);
	var $relationship_fields = array(
		'campaign_id'=>'campaigns',
		'prospect_list_prospects' => 'prospects',
	);

    var $entry_count;

	var $new_schema = true;

	function get_summary_text()
	{
		return "$this->name";
	}

	function create_list_query($order_by, $where, $show_deleted = 0)
	{
        $custom_join = $this->getCustomJoin();
		
		$query = "SELECT ";
		$query .= "users.user_name as assigned_user_name, ";
		$query .= "prospect_lists.*";

		if($custom_join){
			$query .= $custom_join['select'];
		}
        $query .= ", teams.name as team_name";
		$query .= " FROM prospect_lists ";

		// We need to confirm that the user is a member of the team of the item.
		$this->add_team_security_where_clause($query);
		$query .= "LEFT JOIN users
					ON prospect_lists.assigned_user_id=users.id ";
		$query .= "LEFT JOIN teams ON prospect_lists.team_id=teams.id ";

		if($custom_join){
			$query .= $custom_join['join'];
		}

			$where_auto = '1=1';
				if($show_deleted == 0){
                	$where_auto = "$this->table_name.deleted=0";
				}else if($show_deleted == 1){
                	$where_auto = "$this->table_name.deleted=1";
				}

		if($where != "")
			$query .= "where $where AND ".$where_auto;
		else
			$query .= "where ".$where_auto;

		if($order_by != "")
			$query .= " ORDER BY $order_by";
		else
			$query .= " ORDER BY prospect_lists.name";

		return $query;
	}

    public function create_export_members_query(string $record_id): string
    {
        return sprintf(
            "SELECT l.id AS id, 'Leads' AS related_type, '' AS name, l.first_name AS first_name, 
                l.last_name AS last_name, l.title AS title, l.salutation AS salutation,
                l.primary_address_street AS primary_address_street,l.primary_address_city AS primary_address_city, 
                l.primary_address_state AS primary_address_state, 
                l.primary_address_postalcode AS primary_address_postalcode, 
                l.primary_address_country AS primary_address_country,
                l.account_name AS account_name,
                ea.email_address AS primary_email_address, ea.invalid_email AS invalid_email, 
                ea.opt_out AS opt_out, ea.deleted AS ea_deleted, ear.deleted AS ear_deleted, 
                ear.primary_address AS primary_address,
                l.do_not_call AS do_not_call, l.phone_fax AS phone_fax, l.phone_other AS phone_other, 
                l.phone_home AS phone_home, l.phone_mobile AS phone_mobile, l.phone_work AS phone_work
            FROM prospect_lists_prospects plp
            INNER JOIN leads l ON plp.related_id=l.id
            LEFT JOIN email_addr_bean_rel ear ON  ear.bean_id=l.id AND ear.bean_module = 'Leads' AND ear.deleted=0
            LEFT JOIN email_addresses ea ON ear.email_address_id=ea.id
            WHERE plp.prospect_list_id = %1\$s AND plp.related_type = 'Leads' AND plp.deleted=0
            AND l.deleted=0
            AND (ear.deleted=0 OR ear.deleted IS NULL)
        UNION ALL
            SELECT u.id AS id, 'Users' AS related_type, '' AS name, u.first_name AS first_name, 
                u.last_name AS last_name, u.title AS title, '' AS salutation,
                u.address_street AS primary_address_street,u.address_city AS primary_address_city,
                u.address_state AS primary_address_state,  u.address_postalcode AS primary_address_postalcode, 
                u.address_country AS primary_address_country,
                '' AS account_name, ea.email_address AS email_address, ea.invalid_email AS invalid_email, 
                ea.opt_out AS opt_out, ea.deleted AS ea_deleted, ear.deleted AS ear_deleted, 
                ear.primary_address AS primary_address, 0 AS do_not_call, u.phone_fax AS phone_fax, 
                u.phone_other AS phone_other, u.phone_home AS phone_home, u.phone_mobile AS phone_mobile, 
                u.phone_work AS phone_work
            FROM prospect_lists_prospects plp
            INNER JOIN users u ON plp.related_id=u.id
            LEFT JOIN email_addr_bean_rel ear ON  ear.bean_id=u.id AND ear.bean_module = 'Users' AND ear.deleted=0
            LEFT JOIN email_addresses ea ON ear.email_address_id=ea.id
            WHERE plp.prospect_list_id = %1\$s AND plp.related_type = 'Users' AND plp.deleted=0
            AND u.deleted=0
            AND (ear.deleted=0 OR ear.deleted IS NULL)
        UNION ALL 
            SELECT c.id AS id, 'Contacts' AS related_type, '' AS name, c.first_name AS first_name,
                c.last_name AS last_name,c.title AS title, c.salutation AS salutation,
                c.primary_address_street AS primary_address_street, c.primary_address_city AS primary_address_city, 
                c.primary_address_state AS primary_address_state,  
                c.primary_address_postalcode AS primary_address_postalcode, 
                c.primary_address_country AS primary_address_country, a.name AS account_name,
                ea.email_address AS email_address, ea.invalid_email AS invalid_email, ea.opt_out AS opt_out, 
                ea.deleted AS ea_deleted, ear.deleted AS ear_deleted, ear.primary_address AS primary_address,
                c.do_not_call AS do_not_call, c.phone_fax AS phone_fax, c.phone_other AS phone_other, 
                c.phone_home AS phone_home, c.phone_mobile AS phone_mobile, c.phone_work AS phone_work
            FROM prospect_lists_prospects plp
            INNER JOIN contacts c ON plp.related_id=c.id LEFT JOIN accounts_contacts ac ON ac.contact_id=c.id 
            LEFT JOIN accounts a ON ac.account_id=a.id AND ac.deleted=0
            LEFT JOIN email_addr_bean_rel ear ON ear.bean_id=c.id AND ear.bean_module = 'Contacts' AND ear.deleted=0
            LEFT JOIN email_addresses ea ON ear.email_address_id=ea.id
            WHERE plp.prospect_list_id = %1\$s AND plp.related_type = 'Contacts' AND plp.deleted=0
            AND c.deleted=0
            AND (ear.deleted=0 OR ear.deleted IS NULL)
        UNION ALL 
            SELECT p.id AS id, 'Prospects' AS related_type, '' AS name, p.first_name AS first_name, 
                p.last_name AS last_name,p.title AS title, p.salutation AS salutation,
                p.primary_address_street AS primary_address_street,p.primary_address_city AS primary_address_city, 
                p.primary_address_state AS primary_address_state,  
                p.primary_address_postalcode AS primary_address_postalcode, 
                p.primary_address_country AS primary_address_country,
                p.account_name AS account_name, ea.email_address AS email_address, ea.invalid_email AS invalid_email, 
                ea.opt_out AS opt_out, ea.deleted AS ea_deleted, ear.deleted AS ear_deleted, 
                ear.primary_address AS primary_address, p.do_not_call AS do_not_call, p.phone_fax AS phone_fax, 
                p.phone_other AS phone_other, p.phone_home AS phone_home, p.phone_mobile AS phone_mobile, 
                p.phone_work AS phone_work
            FROM prospect_lists_prospects plp
            INNER JOIN prospects p ON plp.related_id=p.id
            LEFT JOIN email_addr_bean_rel ear ON  ear.bean_id=p.id AND ear.bean_module = 'Prospects' AND ear.deleted=0
            LEFT JOIN email_addresses ea ON ear.email_address_id=ea.id
            WHERE plp.prospect_list_id = %1\$s AND plp.related_type = 'Prospects' AND plp.deleted=0
            AND p.deleted=0
            AND (ear.deleted=0 OR ear.deleted IS NULL)
        UNION ALL 
            SELECT a.id AS id, 'Accounts' AS related_type, a.name AS name, '' AS first_name, '' AS last_name,
                '' AS title, '' AS salutation,  a.billing_address_street AS primary_address_street,
                a.billing_address_city AS primary_address_city, a.billing_address_state AS primary_address_state, 
                a.billing_address_postalcode AS primary_address_postalcode, 
                a.billing_address_country AS primary_address_country, '' AS account_name, 
                ea.email_address AS email_address, ea.invalid_email AS invalid_email, ea.opt_out AS opt_out, 
                ea.deleted AS ea_deleted, ear.deleted AS ear_deleted, ear.primary_address AS primary_address, 
                0 AS do_not_call, a.phone_fax as phone_fax, a.phone_alternate AS phone_other, '' AS phone_home, 
                '' AS phone_mobile, a.phone_office AS phone_office
            FROM prospect_lists_prospects plp
            INNER JOIN accounts a ON plp.related_id=a.id
            LEFT JOIN email_addr_bean_rel ear ON  ear.bean_id=a.id AND ear.bean_module = 'Accounts' AND ear.deleted=0
            LEFT JOIN email_addresses ea ON ear.email_address_id=ea.id
            WHERE plp.prospect_list_id = %1\$s AND plp.related_type = 'Accounts' AND plp.deleted=0
            AND a.deleted=0
            AND (ear.deleted=0 OR ear.deleted IS NULL)
        ORDER BY related_type, id, primary_address DESC",
            $this->db->quoted($record_id)
        );
    }

    public function save_relationship_changes($is_update, $exclude = array())
    {
        parent::save_relationship_changes($is_update, $exclude);
		if($this->lead_id != "")
	   		$this->set_prospect_relationship($this->id, $this->lead_id, "lead");
    	if($this->contact_id != "")
    		$this->set_prospect_relationship($this->id, $this->contact_id, "contact");
    	if($this->prospect_id != "")
    		$this->set_prospect_relationship($this->id, $this->contact_id, "prospect");
    }

	function set_prospect_relationship($prospect_list_id, &$link_ids, $link_name)
	{
		$link_field = sprintf("%s_id", $link_name);

		foreach($link_ids as $link_id)
		{
			$this->set_relationship('prospect_lists_prospects', array( $link_field=>$link_id, 'prospect_list_id'=>$prospect_list_id ));
		}
	}

	function set_prospect_relationship_single($prospect_list_id, $link_id, $link_name)
	{
		$link_field = sprintf("%s_id", $link_name);

		$this->set_relationship('prospect_lists_prospects', array( $link_field=>$link_id, 'prospect_list_id'=>$prospect_list_id ));
	}


	function clear_prospect_relationship($prospect_list_id, $link_id, $link_name)
	{
		$link_field = sprintf("%s_id", $link_name);
		$where_clause = " AND $link_field = '$link_id' ";

		$query = sprintf("DELETE FROM prospect_lists_prospects WHERE prospect_list_id='%s' AND deleted = '0' %s", $prospect_list_id, $where_clause);

		$this->db->query($query, true, "Error clearing prospect/prospect_list relationship: ");
	}


	function fill_in_additional_list_fields()
	{
	}

    public function updateRelatedCalcFields($linkName = "")
    {
        parent::updateRelatedCalcFields($linkName);
        $this->entry_count = $this->get_entry_count();
    }


	function update_currency_id($fromid, $toid){
	}


	function get_entry_count()
	{
        $query = "SELECT count(*) AS num FROM prospect_lists_prospects WHERE prospect_list_id= ? AND deleted = '0'";
        $count = $this->db->getConnection()
                    ->executeQuery($query, array($this->id))
                    ->fetchOne();
        return $count;
	}


	function get_list_view_data(){
		$temp_array = $this->get_list_view_array();
		$temp_array["ENTRY_COUNT"] = $this->get_entry_count();
	    $this->load_relationship('teams');
        require_once('modules/Teams/TeamSetManager.php');
        $teams = TeamSetManager::getTeamsFromSet($this->team_set_id);

        if(count($teams) > 1) {
      	   $temp_array['TEAM_NAME'] .= "<span id='div_{$this->id}_teams'>
						<a href=\"#\" onMouseOver=\"javascript:toggleMore('div_{$this->id}_teams','img_{$this->id}_teams', 'Teams', 'DisplayInlineTeams', 'team_set_id={$this->team_set_id}&team_id={$this->team_id}');\"  onFocus=\"javascript:toggleMore('div_{$this->id}_teams','img_{$this->id}_teams', 'Teams', 'DisplayInlineTeams', 'team_set_id={$this->team_set_id}');\" id='more_feather' class=\"utilsLink\">
					  ".SugarThemeRegistry::current()->getImage(MoreDetail, "style='padding: 0px 0px 0px 0px' border='0'", 8, 7, ".gif", $mod_strings['LBL_MORE_DETAIL'])."
						</a>
						</span>";
        }
		return $temp_array;
	}
	/**
		builds a generic search based on the query string using or
		do not include any $this-> because this is called on without having the class instantiated
	*/
	function build_generic_where_clause ($the_query_string)
	{
		$where_clauses = Array();
		$the_query_string = $GLOBALS['db']->quote($the_query_string);
		array_push($where_clauses, "prospect_lists.name like '$the_query_string%'");

		$the_where = "";
		foreach($where_clauses as $clause)
		{
			if($the_where != "") $the_where .= " or ";
			$the_where .= $clause;
		}


		return $the_where;
	}

	function save($check_notify = FALSE) {

		return parent::save($check_notify);

	}

	 function bean_implements($interface){
		switch($interface){
			case 'ACL':return true;
		}
		return false;
	}

}

