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
return <<<EOT
<?xml version="1.0" encoding="ISO-8859-1"?>
<definitions xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" xmlns:tns="http://www.sugarcrm.com/sugarcrm" xmlns:soap="http://schemas.xmlsoap.org/wsdl/soap/" xmlns:wsdl="http://schemas.xmlsoap.org/wsdl/" xmlns="http://schemas.xmlsoap.org/wsdl/" targetNamespace="http://www.sugarcrm.com/sugarcrm">
<types>
<xsd:schema targetNamespace="http://www.sugarcrm.com/sugarcrm"
>
 <xsd:import namespace="http://schemas.xmlsoap.org/soap/encoding/" schemaLocation="{$GLOBALS['sugar_config']['site_url']}/service/soap-encoding.xsd"/>
 <xsd:import namespace="http://schemas.xmlsoap.org/wsdl/" schemaLocation="{$GLOBALS['sugar_config']['site_url']}/service/wsdl.xsd"/>
 <xsd:complexType name="new_note_attachment">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
   <xsd:element name="filename" type="xsd:string"/>
   <xsd:element name="file" type="xsd:string"/>
   <xsd:element name="related_module_id" type="xsd:string"/>
   <xsd:element name="related_module_name" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="new_return_note_attachment">
  <xsd:all>
   <xsd:element name="note_attachment" type="tns:new_note_attachment"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="user_auth">
  <xsd:all>
   <xsd:element name="user_name" type="xsd:string"/>
   <xsd:element name="password" type="xsd:string"/>
   <xsd:element name="encryption" type="xsd:string" minOccurs="0"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="field">
  <xsd:all>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="type" type="xsd:string"/>
   <xsd:element name="group" type="xsd:string"/>
   <xsd:element name="label" type="xsd:string"/>
   <xsd:element name="required" type="xsd:int"/>
   <xsd:element name="options" type="tns:name_value_list"/>
   <xsd:element name="default_value" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="field_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:field[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="link_field">
  <xsd:all>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="type" type="xsd:string"/>
   <xsd:element name="relationship" type="xsd:string"/>
   <xsd:element name="module" type="xsd:string"/>
   <xsd:element name="bean_name" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="link_field_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:link_field[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="name_value">
  <xsd:all>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="value" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="name_value_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:name_value[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="name_value_lists">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:name_value_list[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="select_fields">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="deleted_array">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:int[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="new_module_fields">
  <xsd:all>
   <xsd:element name="module_name" type="xsd:string"/>
   <xsd:element name="table_name" type="xsd:string"/>
   <xsd:element name="module_fields" type="tns:field_list"/>
   <xsd:element name="link_fields" type="tns:link_field_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="entry_value">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
   <xsd:element name="module_name" type="xsd:string"/>
   <xsd:element name="name_value_list" type="tns:name_value_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="entry_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:entry_value[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="set_entries_detail_result">
  <xsd:all>
   <xsd:element name="name_value_lists" type="tns:name_value_lists"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="link_names_to_fields_array">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:link_name_to_fields_array[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="link_name_to_fields_array">
  <xsd:all>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="value" type="tns:select_fields"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="link_value">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:name_value[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="link_array_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:link_value2[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="link_name_value">
  <xsd:all>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="records" type="tns:link_array_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="link_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:link_name_value[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="link_lists">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:link_list2[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="get_entry_result_version2">
  <xsd:all>
   <xsd:element name="entry_list" type="tns:entry_list"/>
   <xsd:element name="relationship_list" type="tns:link_lists"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="return_search_result">
  <xsd:all>
   <xsd:element name="entry_list" type="tns:search_link_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="get_entry_list_result_version2">
  <xsd:all>
   <xsd:element name="result_count" type="xsd:int"/>
   <xsd:element name="total_count" type="xsd:int"/>
   <xsd:element name="next_offset" type="xsd:int"/>
   <xsd:element name="entry_list" type="tns:entry_list"/>
   <xsd:element name="relationship_list" type="tns:link_lists"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="get_server_info_result">
  <xsd:all>
   <xsd:element name="flavor" type="xsd:string"/>
   <xsd:element name="version" type="xsd:string"/>
   <xsd:element name="gmt_time" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="new_set_entry_result">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="new_set_entries_result">
  <xsd:all>
   <xsd:element name="ids" type="tns:select_fields"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="new_set_relationhip_ids">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:select_fields[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="new_set_relationship_list_result">
  <xsd:all>
   <xsd:element name="created" type="xsd:int"/>
   <xsd:element name="failed" type="xsd:int"/>
   <xsd:element name="deleted" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="document_revision">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
   <xsd:element name="document_name" type="xsd:string"/>
   <xsd:element name="revision" type="xsd:string"/>
   <xsd:element name="filename" type="xsd:string"/>
   <xsd:element name="file" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="new_return_document_revision">
  <xsd:all>
   <xsd:element name="document_revision" type="tns:document_revision"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="module_list">
  <xsd:all>
   <xsd:element name="modules" type="tns:module_list_array"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="get_entries_count_result">
  <xsd:all>
   <xsd:element name="result_count" type="xsd:int"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="report_field_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:field_list2[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="report_entry_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:entry_list2[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="get_entry_result_for_reports">
  <xsd:all>
   <xsd:element name="field_list" type="tns:report_field_list"/>
   <xsd:element name="entry_list" type="tns:report_entry_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="md5_results">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="module_names">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="xsd:string[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="upcoming_activities_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:upcoming_activity_entry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="upcoming_activity_entry">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
   <xsd:element name="module" type="xsd:string"/>
   <xsd:element name="date_due" type="xsd:string"/>
   <xsd:element name="summary" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="last_viewed_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:last_viewed_entry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="last_viewed_entry">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
   <xsd:element name="item_id" type="xsd:string"/>
   <xsd:element name="item_summary" type="xsd:string"/>
   <xsd:element name="module_name" type="xsd:string"/>
   <xsd:element name="monitor_id" type="xsd:string"/>
   <xsd:element name="date_modified" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="module_list_array">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:module_list_entry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="module_list_entry">
  <xsd:all>
   <xsd:element name="module_key" type="xsd:string"/>
   <xsd:element name="module_label" type="xsd:string"/>
   <xsd:element name="favorite_enabled" type="xsd:boolean"/>
   <xsd:element name="acls" type="tns:acl_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="acl_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:acl_list_entry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="acl_list_entry">
  <xsd:all>
   <xsd:element name="action" type="xsd:string"/>
   <xsd:element name="access" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="link_list2">
  <xsd:all>
   <xsd:element name="link_list" type="tns:link_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="link_value2">
  <xsd:all>
   <xsd:element name="link_value" type="tns:link_value"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="field_list2">
  <xsd:all>
   <xsd:element name="field_list" type="tns:field_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="entry_list2">
  <xsd:all>
   <xsd:element name="entry_list" type="tns:entry_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="search_link_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:search_link_name_value[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="search_link_name_value">
  <xsd:all>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="records" type="tns:search_link_array_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="search_link_array_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:link_value[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="error_value">
  <xsd:all>
   <xsd:element name="number" type="xsd:string"/>
   <xsd:element name="name" type="xsd:string"/>
   <xsd:element name="description" type="xsd:string"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="modified_relationship_entry_list">
  <xsd:complexContent>
   <xsd:restriction base="SOAP-ENC:Array">
    <xsd:attribute ref="SOAP-ENC:arrayType" wsdl:arrayType="tns:modified_relationship_entry[]"/>
   </xsd:restriction>
  </xsd:complexContent>
 </xsd:complexType>
 <xsd:complexType name="modified_relationship_entry">
  <xsd:all>
   <xsd:element name="id" type="xsd:string"/>
   <xsd:element name="module_name" type="xsd:string"/>
   <xsd:element name="name_value_list" type="tns:name_value_list"/>
  </xsd:all>
 </xsd:complexType>
 <xsd:complexType name="modified_relationship_result">
  <xsd:all>
   <xsd:element name="result_count" type="xsd:int"/>
   <xsd:element name="next_offset" type="xsd:int"/>
   <xsd:element name="entry_list" type="tns:modified_relationship_entry_list"/>
   <xsd:element name="error" type="tns:error_value"/>
  </xsd:all>
 </xsd:complexType>
</xsd:schema>
</types>
<message name="loginRequest">
  <part name="user_auth" type="tns:user_auth" />
  <part name="application_name" type="xsd:string" />
  <part name="name_value_list" type="tns:name_value_list" /></message>
<message name="loginResponse">
  <part name="return" type="tns:entry_value" /></message>
<message name="logoutRequest">
  <part name="session" type="xsd:string" /></message>
<message name="logoutResponse"></message>
<message name="get_entryRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="id" type="xsd:string" />
  <part name="select_fields" type="tns:select_fields" />
  <part name="link_name_to_fields_array" type="tns:link_names_to_fields_array" />
  <part name="track_view" type="xsd:boolean" /></message>
<message name="get_entryResponse">
  <part name="return" type="tns:get_entry_result_version2" /></message>
<message name="get_entriesRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="ids" type="tns:select_fields" />
  <part name="select_fields" type="tns:select_fields" />
  <part name="link_name_to_fields_array" type="tns:link_names_to_fields_array" />
  <part name="track_view" type="xsd:boolean" /></message>
<message name="get_entriesResponse">
  <part name="return" type="tns:get_entry_result_version2" /></message>
<message name="get_entry_listRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="query" type="xsd:string" />
  <part name="order_by" type="xsd:string" />
  <part name="offset" type="xsd:int" />
  <part name="select_fields" type="tns:select_fields" />
  <part name="link_name_to_fields_array" type="tns:link_names_to_fields_array" />
  <part name="max_results" type="xsd:int" />
  <part name="deleted" type="xsd:int" />
  <part name="favorites" type="xsd:boolean" /></message>
<message name="get_entry_listResponse">
  <part name="return" type="tns:get_entry_list_result_version2" /></message>
<message name="set_relationshipRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="module_id" type="xsd:string" />
  <part name="link_field_name" type="xsd:string" />
  <part name="related_ids" type="tns:select_fields" />
  <part name="name_value_list" type="tns:name_value_list" />
  <part name="delete" type="xsd:int" /></message>
<message name="set_relationshipResponse">
  <part name="return" type="tns:new_set_relationship_list_result" /></message>
<message name="set_relationshipsRequest">
  <part name="session" type="xsd:string" />
  <part name="module_names" type="tns:select_fields" />
  <part name="module_ids" type="tns:select_fields" />
  <part name="link_field_names" type="tns:select_fields" />
  <part name="related_ids" type="tns:new_set_relationhip_ids" />
  <part name="name_value_lists" type="tns:name_value_lists" />
  <part name="delete_array" type="tns:deleted_array" /></message>
<message name="set_relationshipsResponse">
  <part name="return" type="tns:new_set_relationship_list_result" /></message>
<message name="get_relationshipsRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="module_id" type="xsd:string" />
  <part name="link_field_name" type="xsd:string" />
  <part name="related_module_query" type="xsd:string" />
  <part name="related_fields" type="tns:select_fields" />
  <part name="related_module_link_name_to_fields_array" type="tns:link_names_to_fields_array" />
  <part name="deleted" type="xsd:int" />
  <part name="order_by" type="xsd:string" />
  <part name="offset" type="xsd:int" />
  <part name="limit" type="xsd:int" /></message>
<message name="get_relationshipsResponse">
  <part name="return" type="tns:get_entry_result_version2" /></message>
<message name="set_entryRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="name_value_list" type="tns:name_value_list" /></message>
<message name="set_entryResponse">
  <part name="return" type="tns:new_set_entry_result" /></message>
<message name="set_entriesRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="name_value_lists" type="tns:name_value_lists" /></message>
<message name="set_entriesResponse">
  <part name="return" type="tns:new_set_entries_result" /></message>
<message name="get_server_infoRequest"></message>
<message name="get_server_infoResponse">
  <part name="return" type="tns:get_server_info_result" /></message>
<message name="get_user_idRequest">
  <part name="session" type="xsd:string" /></message>
<message name="get_user_idResponse">
  <part name="return" type="xsd:string" /></message>
<message name="get_module_fieldsRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="fields" type="tns:select_fields" /></message>
<message name="get_module_fieldsResponse">
  <part name="return" type="tns:new_module_fields" /></message>
<message name="seamless_loginRequest">
  <part name="session" type="xsd:string" /></message>
<message name="seamless_loginResponse">
  <part name="return" type="xsd:int" /></message>
<message name="set_note_attachmentRequest">
  <part name="session" type="xsd:string" />
  <part name="note" type="tns:new_note_attachment" /></message>
<message name="set_note_attachmentResponse">
  <part name="return" type="tns:new_set_entry_result" /></message>
<message name="get_note_attachmentRequest">
  <part name="session" type="xsd:string" />
  <part name="id" type="xsd:string" /></message>
<message name="get_note_attachmentResponse">
  <part name="return" type="tns:new_return_note_attachment" /></message>
<message name="set_document_revisionRequest">
  <part name="session" type="xsd:string" />
  <part name="note" type="tns:document_revision" /></message>
<message name="set_document_revisionResponse">
  <part name="return" type="tns:new_set_entry_result" /></message>
<message name="get_document_revisionRequest">
  <part name="session" type="xsd:string" />
  <part name="i" type="xsd:string" /></message>
<message name="get_document_revisionResponse">
  <part name="return" type="tns:new_return_document_revision" /></message>
<message name="search_by_moduleRequest">
  <part name="session" type="xsd:string" />
  <part name="search_string" type="xsd:string" />
  <part name="modules" type="tns:select_fields" />
  <part name="offset" type="xsd:int" />
  <part name="max_results" type="xsd:int" />
  <part name="assigned_user_id" type="xsd:string" />
  <part name="select_fields" type="tns:select_fields" />
  <part name="unified_search_only" type="xsd:boolean" />
  <part name="favorites" type="xsd:boolean" /></message>
<message name="search_by_moduleResponse">
  <part name="return" type="tns:return_search_result" /></message>
<message name="get_available_modulesRequest">
  <part name="session" type="xsd:string" />
  <part name="filter" type="xsd:string" /></message>
<message name="get_available_modulesResponse">
  <part name="return" type="tns:module_list" /></message>
<message name="get_user_team_idRequest">
  <part name="session" type="xsd:string" /></message>
<message name="get_user_team_idResponse">
  <part name="return" type="xsd:string" /></message>
<message name="set_campaign_mergeRequest">
  <part name="session" type="xsd:string" />
  <part name="targets" type="tns:select_fields" />
  <part name="campaign_id" type="xsd:string" /></message>
<message name="set_campaign_mergeResponse"></message>
<message name="get_entries_countRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="query" type="xsd:string" />
  <part name="deleted" type="xsd:int" /></message>
<message name="get_entries_countResponse">
  <part name="return" type="tns:get_entries_count_result" /></message>
<message name="get_report_entriesRequest">
  <part name="session" type="xsd:string" />
  <part name="ids" type="tns:select_fields" />
  <part name="select_fields" type="tns:select_fields" /></message>
<message name="get_report_entriesResponse">
  <part name="return" type="tns:get_entry_result_for_reports" /></message>
<message name="get_module_fields_md5Request">
  <part name="session" type="xsd:string" />
  <part name="module_names" type="tns:select_fields" /></message>
<message name="get_module_fields_md5Response">
  <part name="return" type="tns:md5_results" /></message>
<message name="get_last_viewedRequest">
  <part name="session" type="xsd:string" />
  <part name="module_names" type="tns:module_names" /></message>
<message name="get_last_viewedResponse">
  <part name="return" type="tns:last_viewed_list" /></message>
<message name="get_upcoming_activitiesRequest">
  <part name="session" type="xsd:string" /></message>
<message name="get_upcoming_activitiesResponse">
  <part name="return" type="tns:upcoming_activities_list" /></message>
<message name="get_modified_relationshipsRequest">
  <part name="session" type="xsd:string" />
  <part name="module_name" type="xsd:string" />
  <part name="related_module" type="xsd:string" />
  <part name="from_date" type="xsd:string" />
  <part name="to_date" type="xsd:string" />
  <part name="offset" type="xsd:int" />
  <part name="max_results" type="xsd:int" />
  <part name="deleted" type="xsd:int" />
  <part name="module_user_id" type="xsd:string" />
  <part name="select_fields" type="tns:select_fields" />
  <part name="relationship_name" type="xsd:string" />
  <part name="deletion_date" type="xsd:string" /></message>
<message name="get_modified_relationshipsResponse">
  <part name="return" type="tns:modified_relationship_result" /></message>
<portType name="sugarsoapPortType">
  <operation name="login">
    <input message="tns:loginRequest"/>
    <output message="tns:loginResponse"/>
  </operation>
  <operation name="logout">
    <input message="tns:logoutRequest"/>
    <output message="tns:logoutResponse"/>
  </operation>
  <operation name="get_entry">
    <input message="tns:get_entryRequest"/>
    <output message="tns:get_entryResponse"/>
  </operation>
  <operation name="get_entries">
    <input message="tns:get_entriesRequest"/>
    <output message="tns:get_entriesResponse"/>
  </operation>
  <operation name="get_entry_list">
    <input message="tns:get_entry_listRequest"/>
    <output message="tns:get_entry_listResponse"/>
  </operation>
  <operation name="set_relationship">
    <input message="tns:set_relationshipRequest"/>
    <output message="tns:set_relationshipResponse"/>
  </operation>
  <operation name="set_relationships">
    <input message="tns:set_relationshipsRequest"/>
    <output message="tns:set_relationshipsResponse"/>
  </operation>
  <operation name="get_relationships">
    <input message="tns:get_relationshipsRequest"/>
    <output message="tns:get_relationshipsResponse"/>
  </operation>
  <operation name="set_entry">
    <input message="tns:set_entryRequest"/>
    <output message="tns:set_entryResponse"/>
  </operation>
  <operation name="set_entries">
    <input message="tns:set_entriesRequest"/>
    <output message="tns:set_entriesResponse"/>
  </operation>
  <operation name="get_server_info">
    <input message="tns:get_server_infoRequest"/>
    <output message="tns:get_server_infoResponse"/>
  </operation>
  <operation name="get_user_id">
    <input message="tns:get_user_idRequest"/>
    <output message="tns:get_user_idResponse"/>
  </operation>
  <operation name="get_module_fields">
    <input message="tns:get_module_fieldsRequest"/>
    <output message="tns:get_module_fieldsResponse"/>
  </operation>
  <operation name="seamless_login">
    <input message="tns:seamless_loginRequest"/>
    <output message="tns:seamless_loginResponse"/>
  </operation>
  <operation name="set_note_attachment">
    <input message="tns:set_note_attachmentRequest"/>
    <output message="tns:set_note_attachmentResponse"/>
  </operation>
  <operation name="get_note_attachment">
    <input message="tns:get_note_attachmentRequest"/>
    <output message="tns:get_note_attachmentResponse"/>
  </operation>
  <operation name="set_document_revision">
    <input message="tns:set_document_revisionRequest"/>
    <output message="tns:set_document_revisionResponse"/>
  </operation>
  <operation name="get_document_revision">
    <input message="tns:get_document_revisionRequest"/>
    <output message="tns:get_document_revisionResponse"/>
  </operation>
  <operation name="search_by_module">
    <input message="tns:search_by_moduleRequest"/>
    <output message="tns:search_by_moduleResponse"/>
  </operation>
  <operation name="get_available_modules">
    <input message="tns:get_available_modulesRequest"/>
    <output message="tns:get_available_modulesResponse"/>
  </operation>
  <operation name="get_user_team_id">
    <input message="tns:get_user_team_idRequest"/>
    <output message="tns:get_user_team_idResponse"/>
  </operation>
  <operation name="set_campaign_merge">
    <input message="tns:set_campaign_mergeRequest"/>
    <output message="tns:set_campaign_mergeResponse"/>
  </operation>
  <operation name="get_entries_count">
    <input message="tns:get_entries_countRequest"/>
    <output message="tns:get_entries_countResponse"/>
  </operation>
  <operation name="get_report_entries">
    <input message="tns:get_report_entriesRequest"/>
    <output message="tns:get_report_entriesResponse"/>
  </operation>
  <operation name="get_module_fields_md5">
    <input message="tns:get_module_fields_md5Request"/>
    <output message="tns:get_module_fields_md5Response"/>
  </operation>
  <operation name="get_last_viewed">
    <input message="tns:get_last_viewedRequest"/>
    <output message="tns:get_last_viewedResponse"/>
  </operation>
  <operation name="get_upcoming_activities">
    <input message="tns:get_upcoming_activitiesRequest"/>
    <output message="tns:get_upcoming_activitiesResponse"/>
  </operation>
  <operation name="get_modified_relationships">
    <input message="tns:get_modified_relationshipsRequest"/>
    <output message="tns:get_modified_relationshipsResponse"/>
  </operation>
</portType>
<binding name="sugarsoapBinding" type="tns:sugarsoapPortType">
  <soap:binding style="rpc" transport="http://schemas.xmlsoap.org/soap/http"/>
  <operation name="login">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/login" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="logout">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/logout" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_entry">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_entry" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_entries">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_entries" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_entry_list">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_entry_list" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_relationship">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_relationship" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_relationships">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_relationships" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_relationships">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_relationships" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_entry">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_entry" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_entries">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_entries" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_server_info">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_server_info" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_user_id">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_user_id" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_module_fields">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_module_fields" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="seamless_login">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/seamless_login" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_note_attachment">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_note_attachment" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_note_attachment">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_note_attachment" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_document_revision">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_document_revision" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_document_revision">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_document_revision" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="search_by_module">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/search_by_module" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_available_modules">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_available_modules" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_user_team_id">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_user_team_id" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="set_campaign_merge">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/set_campaign_merge" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_entries_count">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_entries_count" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_report_entries">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_report_entries" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_module_fields_md5">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_module_fields_md5" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_last_viewed">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_last_viewed" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_upcoming_activities">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_upcoming_activities" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
  <operation name="get_modified_relationships">
    <soap:operation soapAction="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php/get_modified_relationships" style="rpc"/>
    <input><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></input>
    <output><soap:body use="literal" namespace="http://www.sugarcrm.com/sugarcrm"/></output>
  </operation>
</binding>
<service name="sugarsoap">
  <port name="sugarsoapPort" binding="tns:sugarsoapBinding">
    <soap:address location="{$GLOBALS['sugar_config']['site_url']}/service/v4_1/soap.php"/>
  </port>
</service>
</definitions>
EOT;
