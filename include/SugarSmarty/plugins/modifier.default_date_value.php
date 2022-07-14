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

/*

Modification information for LGPL compliance

r56990 - 2010-06-16 13:05:36 -0700 (Wed, 16 Jun 2010) - kjing - snapshot "Mango" svn branch to a new one for GitHub sync

r56989 - 2010-06-16 13:01:33 -0700 (Wed, 16 Jun 2010) - kjing - defunt "Mango" svn dev branch before github cutover

r55980 - 2010-04-19 13:31:28 -0700 (Mon, 19 Apr 2010) - kjing - create Mango (6.1) based on windex

r51719 - 2009-10-22 10:18:00 -0700 (Thu, 22 Oct 2009) - mitani - Converted to Build 3  tags and updated the build system

r51634 - 2009-10-19 13:32:22 -0700 (Mon, 19 Oct 2009) - mitani - Windex is the branch for Sugar Sales 1.0 development

r50375 - 2009-08-24 18:07:43 -0700 (Mon, 24 Aug 2009) - dwong - branch kobe2 from tokyo r50372

r42807 - 2008-12-29 11:16:59 -0800 (Mon, 29 Dec 2008) - dwong - Branch from trunk/sugarcrm r42806 to branches/tokyo/sugarcrm

r36834 - 2008-06-18 13:12:25 -0700 (Wed, 18 Jun 2008) - jmertic - Bug 22982: Remove hardcoding of the default database date and time formats, instead using TimeDate::$dbDayFormat, TimeDate::$dbTimeFormat, and TimeDate::get_db_date_time_format() as appropriate.
Touched:
- dceCreateReportData.php
- modules/SchedulersJobs/SchedulersJobOLD.php
- modules/SchedulersJobs/SchedulersJob.php
- modules/Tasks/MyTasks.php
- modules/Tasks/Task.php
- modules/Forecasts/ForecastUtils.php
- modules/ModuleBuilder/MB/MBPackage.php
- modules/Documents/GetLatestRevision.php
- modules/Campaigns/QueueCampaign.php
- modules/Campaigns/WebToLeadCapture.php
- modules/Campaigns/utils.php
- modules/Campaigns/RoiDetailView.php
- modules/Campaigns/PopupCampaignRoi.php
- modules/Campaigns/TrackDetailView.php
- modules/Activities/OpenListView.php
- modules/UpgradeWizard/uw_utils.php
- modules/Emails/EmailUI.php
- modules/Emails/Save.php
- modules/DCEClients/client_utils.php
- modules/DCEClients/instanceImport.php
- modules/DCEClients/processAction.php
- modules/KBOLDDocuments/Save.php
- modules/KBOLDDocuments/SearchUtils.php
- modules/EmailMan/EmailMan.php
- modules/EmailMan/EmailManDelivery.php
- modules/ProjectTask/ProjectTask.php
- modules/ProjectTask/MyProjectTasks.php
- modules/ProductBundles/ProductBundle.php
- modules/Reports/schedule/save_schedule.php
- modules/Reports/schedule/ReportSchedule.php
- modules/Schedulers/JobThread.php
- modules/Schedulers/_AddJobsHere.php
- modules/Schedulers/Scheduler.php
- modules/Users/reassignUserRecords.php
- modules/Users/Logout.php
- modules/ACLRoles/ACLRole.php
- modules/Meetings/MeetingsQuickCreate.php
- modules/Meetings/Meeting.php
- modules/Administration/CreateImportAction.php
- modules/Administration/RebuildRelationship.php
- modules/Administration/SessionManager.php
- modules/Administration/DstFix.php
- modules/Administration/RebuildExtensions.php
- modules/Administration/System.php
- modules/Administration/updater_utils.php
- modules/Administration/UpgradeWizard_commit.php
- modules/Calls/CallFormBase.php
- modules/Calls/Call.php
- modules/Calls/CallsQuickCreate.php
- modules/MailMerge/Step1.php
- modules/Queues/Seed.php
- modules/Queues/Queue.php
- modules/Calendar/Calendar.php
- modules/Calendar/index.php
- modules/Calendar/templates/templates_calendar.php
- modules/DCEReports/DCESalesReport.php
- modules/DCEReports/controller.php
- modules/DynamicFields/templates/Fields/TemplateDate.php
- modules/Quotes/layouts/Invoice.php
- modules/Quotes/layouts/Standard.php
- modules/Quotes/QuoteFormBase.php
- modules/Quotes/EmailPDF.php
- modules/Contracts/Save.php
- modules/DCEInstances/DCEInstance.php
- modules/InboundEmail/InboundEmail.php
- modules/Project/Export.php
- modules/Project/ResourceReport.php
- modules/Project/Convert.php
- modules/Project/EditGridView.php
- modules/Project/Dashboard.php
- modules/WorkFlow/WorkFlowSchedule.php
- modules/TeamNotices/DisplayNotices.php
- modules/TeamNotices/DefaultNotices.php
- modules/TeamNotices/EditView.php
- modules/DCEActions/dceActionUtils.php
- modules/ProspectLists/Duplicate.php
- modules/Trackers/populateSeedData.php
- data/Link.php
- data/SugarBean.php
- test/modules/Teams_test.php
- test/modules/Trackers/Tracker_Reports_Usage_test.php
- test/test_utilities/SugarTest_UserUtilities.php
- include/workflow/action_utils.php
- include/generic/SugarWidgets/SugarWidgetFielddatetime.php
- include/generic/SugarWidgets/SugarWidgetFielddate.php
- include/generic/DeleteRelationship.php
- include/SugarSmarty/modifier.default_date_value.php
- include/SugarEmailAddress/SugarEmailAddress.php
- include/database/DBManager.php
- include/javascript/jsAlerts.php
- include/CurrencyService/CurrencyService.php
- include/MVC/View/SugarView.php
- include/MVC/SugarApplication.php
- include/ListView/ListViewData.php
- install/populateSeedData.php
- install/seed_data/dceSeedData.php
- examples/SoapTestDCE.php
- examples/SoapFullTest.php

r29406 - 2007-11-08 16:36:28 -0800 (Thu, 08 Nov 2007) - bsoufflet - Bug 17690 : [RC] No license and/or entry point check in the files

r27703 - 2007-10-05 14:59:07 -0700 (Fri, 05 Oct 2007) - clee - Fix for 16206
Updated the date SugarField to support default_value formats via using the Smarty default_date_value modifier. Also updated Studio support for the date field to display a default_value dropdown list.
Touched:
include/SugarFields/Fields/Datetime/EditView.tpl
modules/DynamicFields/templates/FieldViewer.php
modules/DynamicFields/templates/Fields/Forms/date.php
modules/DynamicFields/templates/Fields/Forms/date.tpl
Added:
include/SugarSmarty/modifier.default_date_value.php


*/

/**
 * Smarty plugin
 * @package Smarty
 * @subpackage plugins
 */

/**
 * Smarty modifier to return default date value
 *
 * Type:     modifier<br>
 * Name:     default_date_value<br>
 * Purpose:  Utility to return a default date value given the field's default value settings
 * @author   Collin Lee <clee at sugarcrm dot com>
 * @param defaultValue The date field's default value setting
 * @return String representing date value
 */
function smarty_modifier_default_date_value($defaultValue) {
	global $timedate;
	$td = new TemplateDate();
	return $timedate->asUser(new SugarDateTime($td->dateStrings[$defaultValue]));
}
