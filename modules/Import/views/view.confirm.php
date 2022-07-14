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


class ImportViewConfirm extends ImportView
{
    const SAMPLE_ROW_SIZE = 3;
 	protected $pageTitleKey = 'LBL_CONFIRM_TITLE';
    protected $errorScript = "";

 	/**
     * @see SugarView::display()
     */
 	public function display()
    {
        global $mod_strings, $app_strings, $current_user;
        global $sugar_config, $locale;

        $importModule = $this->request->getValidInputRequest('import_module', 'Assert\Mvc\ModuleName', '');
        $this->ss->assign("IMPORT_MODULE", $importModule);

        $defaultType = 'import';
        if ($this->isLimitedForModuleInIdmMode($importModule)) {
            $this->ss->assign('idm_update_mode_only', true);
            $defaultType = 'update';
        } else {
            $this->ss->assign('idm_update_mode_only', false);
        }

        $this->ss->assign(
            'TYPE',
            $this->request->getValidInputRequest(
                'type',
                array('Assert\Choice' => array('choices' => array('import', 'update', ''))),
                $defaultType
            ) ?: $defaultType
        );

        $this->ss->assign("SOURCE_ID", $this->request->getValidInputRequest('source_id'));

        $this->instruction = 'LBL_SELECT_PROPERTY_INSTRUCTION';
        $this->ss->assign('INSTRUCTION', $this->getInstruction());

        $this->ss->assign("MODULE_TITLE", $this->getModuleTitle(false), ENT_NOQUOTES);
        $this->ss->assign("CURRENT_STEP", $this->currentStep);
        $sugar_config['import_max_records_per_file'] = ( empty($sugar_config['import_max_records_per_file']) ? 1000 : $sugar_config['import_max_records_per_file'] );
        $importSource = $this->request->getValidInputRequest('source', array('Assert\Choice' => array('choices' => self::getImportSourceOptions())), 'csv');

        // Clear out this user's last import
        $seedUsersLastImport = BeanFactory::newBean('Import_2');
        $seedUsersLastImport->mark_deleted_by_user_id($current_user->id);
        ImportCacheFiles::clearCacheFiles();

        // handle uploaded file
        $uploadFile = new UploadFile('userfile');
        if (isset($_FILES['userfile']) && $uploadFile->confirm_upload())
        {
            $uploadFile->final_move('IMPORT_'.$this->bean->object_name.'_'.$current_user->id);
            $uploadFileName = $uploadFile->get_upload_path('IMPORT_'.$this->bean->object_name.'_'.$current_user->id);
        }
        elseif( !empty($_REQUEST['tmp_file']) )
        {
            $uploadFileName = "upload://".basename($_REQUEST['tmp_file']);
        }
        else
        {
            $this->_showImportError($mod_strings['LBL_IMPORT_MODULE_ERROR_NO_UPLOAD'], $importModule,'Step2', true, null, true);
            return;
        }

        //check the file size, we dont want to process an empty file
        if(isset($_FILES['userfile']['size']) && $_FILES['userfile']['size'] == 0){
            //this file is empty, throw error message
            $this->_showImportError($mod_strings['LBL_NO_LINES'], $importModule,'Step2', false, null, true);
            return;
        }

        $mimeTypeOk = true;

        //check to see if the file mime type is not a form of text or application octed streramand fire error if not
        if(isset($_FILES['userfile']['type']) && strpos($_FILES['userfile']['type'],'octet-stream') === false && strpos($_FILES['userfile']['type'],'text') === false
            && strpos($_FILES['userfile']['type'],'application/vnd.ms-excel') === false) {
            //this file does not have a known text or application type of mime type, issue the warning
            $error_msgs[] = $mod_strings['LBL_MIME_TYPE_ERROR_1'];
            $error_msgs[] = $mod_strings['LBL_MIME_TYPE_ERROR_2'];
            $this->_showImportError($error_msgs, $importModule,'Step2', true, $mod_strings['LBL_OK']);
            $mimeTypeOk = false;
        }

        $this->ss->assign("FILE_NAME", $uploadFileName);



        // Now parse the file and look for errors
        $customDelimiter = $this->getDelimiterValue();
        $customEnclosure = $this->request->getValidInputRequest('custom_enclosure', array('Assert\Type' => array('type' => 'string'), 'Assert\Length' => array('min' => 0, 'max' => 1)), '');

        $importFile = new ImportFile( $uploadFileName, $customDelimiter, html_entity_decode($customEnclosure,ENT_QUOTES), FALSE);

        if( $this->shouldAutoDetectProperties($importSource) )
        {
            $GLOBALS['log']->debug("Auto detecing csv properties...");
            $autoDetectOk = $importFile->autoDetectCSVProperties();
            $importFileMap = array();
            $this->ss->assign("SOURCE", 'csv');
            if($autoDetectOk === FALSE)
            {
                //show error only if previous mime type check has passed
                if($mimeTypeOk){
                     $this->ss->assign("AUTO_DETECT_ERROR",  $mod_strings['LBL_AUTO_DETECT_ERROR']);
                 }
            }
            else
            {
                $dateFormat = $importFile->getDateFormat();
                $timeFormat = $importFile->getTimeFormat();
                if ($dateFormat) {
                    $importFileMap['importlocale_dateformat'] = $dateFormat;
                }
                if ($timeFormat) {
                    $importFileMap['importlocale_timeformat'] = $timeFormat;
                }
            }
        }
        else
        {
            $impotMapSeed = $this->getImportMap($importSource);
            $importFile->setImportFileMap($impotMapSeed);
            $importFileMap = $impotMapSeed->getMapping($_REQUEST['import_module']);
        }

        $delimeter = $importFile->getFieldDelimeter();
        $enclosure = $importFile->getFieldEnclosure();
        $hasHeader = $importFile->hasHeaderRow();

        $encodeOutput = TRUE;
        //Handle users navigating back through the wizard.
        if( !empty($_REQUEST['previous_action']) && $_REQUEST['previous_action'] == 'Confirm')
        {
            $encodeOutput = FALSE;
            $importFileMap = $this->overloadImportFileMapFromRequest($importFileMap);

            $delimeter = !empty($customDelimiter) ? $customDelimiter : $delimeter;
            $enclosure = !empty($customEnclosure) ? $customEnclosure : $enclosure;

            $enclosure = html_entity_decode($enclosure, ENT_QUOTES);
            $hasHeader = !empty($_REQUEST['has_header']) ? $_REQUEST['has_header'] : $hasHeader;
            if ($hasHeader == 'on') {
                $hasHeader = true;
            } else if ($hasHeader == 'off') {
                $hasHeader = false;
            }
        }

        $this->ss->assign("IMPORT_ENCLOSURE_OPTIONS",  $this->getEnclosureOptions($enclosure));
        $this->ss->assign("IMPORT_DELIMETER_OPTIONS",  $this->getDelimeterOptions($delimeter));

        $delimiters = $this->getDelimitersFromRequest();
        $this->ss->assign("CUSTOM_DELIMITER", $delimiters['custom']);
        $this->ss->assign("CUSTOM_DELIMITER_OTHER", $delimiters['other']);

        $this->ss->assign("CUSTOM_ENCLOSURE", htmlentities($enclosure, ENT_QUOTES, 'utf-8'));
        $hasHeaderFlag = $hasHeader ? " CHECKED" : "";
        $this->ss->assign("HAS_HEADER_CHECKED", $hasHeaderFlag);

        if ( !$importFile->fileExists() ) {
            $this->_showImportError($mod_strings['LBL_CANNOT_OPEN'], $importModule,'Step2', false, null, true);
            return;
        }

         //Check if we will exceed the maximum number of records allowed per import.
         $maxRecordsExceeded = FALSE;
         $maxRecordsWarningMessg = "";
         $lineCount = $importFile->getNumberOfLinesInfile();
         $maxLineCount = isset($sugar_config['import_max_records_total_limit'] ) ? $sugar_config['import_max_records_total_limit'] : 5000;
         if( !empty($maxLineCount) && ($lineCount > $maxLineCount) )
         {
             $maxRecordsExceeded = TRUE;
             $maxRecordsWarningMessg = string_format($mod_strings['LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED'], array($lineCount, $maxLineCount) );
         }

        //Retrieve a sample set of data
        $rows = $this->getSampleSet($importFile);
        $this->ss->assign('column_count', $this->getMaxColumnsInSampleSet($rows) );
        $this->ss->assign('HAS_HEADER', $importFile->hasHeaderRow(FALSE) );
        $this->ss->assign('getNumberJs', $locale->getNumberJs());
        $this->setImportFileCharacterSet($importFile, $importFileMap);
        $this->setDateTimeProperties($importFileMap);
        $this->setCurrencyOptions($importFileMap);
        $this->setNumberFormatOptions($importFileMap);
        $this->setNameFormatProperties($importFileMap);

        $importMappingJS = $this->getImportMappingJS();

        $this->ss->assign("SAMPLE_ROWS",$rows);
        $JS = $this->_getJS($maxRecordsExceeded, $maxRecordsWarningMessg, $importMappingJS, $importFileMap );
        $this->ss->assign("JAVASCRIPT", $JS);
        $content = $this->ss->fetch('modules/Import/tpls/confirm.tpl');
        $this->ss->assign("CONTENT",$content);
        $this->ss->display('modules/Import/tpls/wizardWrapper.tpl');

    }

    private function getDelimeterOptions($selctedDelim)
    {
        $selctedDelim = $selctedDelim == "\t" ? '\t' : $selctedDelim;
        return get_select_options_with_id($GLOBALS['app_list_strings']['import_delimeter_options'], $selctedDelim);
    }

    private function getEnclosureOptions($enclosure)
    {
        $results = array();
        foreach ($GLOBALS['app_list_strings']['import_enclosure_options'] as $k => $v)
        {
            $results[htmlentities($k, ENT_QUOTES, 'utf-8')] = $v;
        }

        return get_select_options_with_id($results, htmlentities($enclosure, ENT_QUOTES, 'utf-8'));
    }

    private function overloadImportFileMapFromRequest($importFileMap)
    {
        $overideKeys = array(
            'importlocale_dateformat','importlocale_timeformat','importlocale_timezone','importlocale_charset',
            'importlocale_currency','importlocale_default_currency_significant_digits','importlocale_num_grp_sep',
            'importlocale_dec_sep','importlocale_default_locale_name_format','custom_delimiter', 'custom_enclosure'
        );

        foreach($overideKeys as $key)
        {
            if( !empty( $_REQUEST[$key]) )
                $importFileMap[$key] = $this->request->getValidInputRequest($key);
        }
        return $importFileMap;
    }

    private function shouldAutoDetectProperties($importSource)
    {
        if(empty($importSource) || $importSource == 'csv' )
            return TRUE;
        else
            return FALSE;
    }

    private function getImportMap($importSource)
    {
        $import_map_seed = null;
        if ( strncasecmp("custom:",$importSource,7) == 0)
        {
            $id = substr($importSource,7);
            $import_map_seed = BeanFactory::getBean('Import_1', $id, array("encode" => false));

            $this->ss->assign("SOURCE_ID", $import_map_seed->id);
            $this->ss->assign("SOURCE_NAME", $import_map_seed->name);
            $this->ss->assign("SOURCE", $import_map_seed->source);
        }
        else
        {
            $classname = 'ImportMap' . ucfirst($importSource);
            if (! SugarAutoLoader::requireWithCustom("modules/Import/maps/{$classname}.php") ) {
                SugarAutoLoader::requireWithCustom("modules/Import/maps/ImportMapOther.php");
                $classname = 'ImportMapOther';
                $importSource = 'other';
            }
            if ( class_exists($classname) )
            {
                $import_map_seed = new $classname;
                $this->ss->assign("SOURCE", $importSource);
            }
        }

        return $import_map_seed;
    }

    private function setNameFormatProperties($field_map = array())
    {
        global $locale, $current_user;

        $localized_name_format = isset($field_map['importlocale_default_locale_name_format'])? $field_map['importlocale_default_locale_name_format'] : $locale->getLocaleFormatMacro($current_user);
        $this->ss->assign('default_locale_name_format', $localized_name_format);
        $this->ss->assign('getNameJs', $locale->getNameJs());

    }

    private function setNumberFormatOptions($field_map = array())
    {
        global $locale, $current_user, $sugar_config;

        $num_grp_sep = isset($field_map['importlocale_num_grp_sep'])? $field_map['importlocale_num_grp_sep'] : $current_user->getPreference('num_grp_sep');
        $dec_sep = isset($field_map['importlocale_dec_sep'])? $field_map['importlocale_dec_sep'] : $current_user->getPreference('dec_sep');

        $this->ss->assign("NUM_GRP_SEP",( empty($num_grp_sep) ? $sugar_config['default_number_grouping_seperator'] : $num_grp_sep ));
        $this->ss->assign("DEC_SEP",( empty($dec_sep)? $sugar_config['default_decimal_seperator'] : $dec_sep ));


        $significantDigits = isset($field_map['importlocale_default_currency_significant_digits']) ? $field_map['importlocale_default_currency_significant_digits']
                                :  $locale->getPrecedentPreference('default_currency_significant_digits', $current_user);

        $sigDigits = '';
        for($i=0; $i<=6; $i++)
        {
            if($significantDigits == $i)
            {
                $sigDigits .= '<option value="'.$i.'" selected="true">'.$i.'</option>';
            } else
            {
                $sigDigits .= '<option value="'.$i.'">'.$i.'</option>';
            }
        }

        $this->ss->assign('sigDigits', $sigDigits);
    }


    private function setCurrencyOptions($field_map = array() )
    {
        global $locale, $current_user;
        $cur_id = isset($field_map['importlocale_currency'])? $field_map['importlocale_currency'] : $locale->getPrecedentPreference('currency', $current_user);
        // get currency preference
        $currency = new ListCurrency();
        if($cur_id)
            $selectCurrency = $currency->getSelectOptions($cur_id);
        else
            $selectCurrency = $currency->getSelectOptions();

        $this->ss->assign("CURRENCY", $selectCurrency);

        $currenciesVars = "";
        $i=0;

        foreach ($locale->getCurrencies() as $id => ['symbol' => $symbol]) {
            $currenciesVars .= "currencies[{$i}] = '{$symbol}';\n";
            $i++;
        }

        $currencySymbolsJs = <<<eoq
var currencies = new Object;
{$currenciesVars}
function setSymbolValue(id) {
    document.getElementById('symbol').value = currencies[id];
}
eoq;
        return $currencySymbolsJs;

    }


    private function setDateTimeProperties( $field_map = array() )
    {
        global $current_user, $sugar_config;

        $timeFormat = $current_user->getUserDateTimePreferences();
        $defaultTimeOption = isset($field_map['importlocale_timeformat'])? $field_map['importlocale_timeformat'] : $timeFormat['time'];
        $defaultDateOption = isset($field_map['importlocale_dateformat'])? $field_map['importlocale_dateformat'] : $timeFormat['date'];

        $timeOptions = get_select_options_with_id($sugar_config['time_formats'], $defaultTimeOption);
        $dateOptions = get_select_options_with_id($sugar_config['date_formats'], $defaultDateOption);

        // get list of valid timezones
        $userTZ = isset($field_map['importlocale_timezone'])? $field_map['importlocale_timezone'] : $current_user->getPreference('timezone');
        if(empty($userTZ))
            $userTZ = TimeDate::userTimezone();

        $this->ss->assign('TIMEZONE_CURRENT', $userTZ);
        $this->ss->assign('TIMEOPTIONS', $timeOptions);
        $this->ss->assign('DATEOPTIONS', $dateOptions);
        $this->ss->assign('TIMEZONEOPTIONS', TimeDate::getTimezoneList());
    }

    private function setImportFileCharacterSet($importFile, $field_map = array())
    {
        global $locale;
        $charset_for_import = isset($field_map['importlocale_charset']) ? $field_map['importlocale_charset'] : $importFile->autoDetectCharacterSet();
        $charsetOptions = get_select_options_with_id( $locale->getCharsetSelect(), $charset_for_import);//wdong,  bug 25927, here we should use the charset testing results from above.
        $this->ss->assign('CHARSETOPTIONS', $charsetOptions);
    }

    protected function getImportMappingJS()
    {
        $results = array();
        $importMappings = array('ImportMapSalesforce', 'ImportMapOutlook');
        foreach($importMappings as $importMap)
        {
            $tmpFile = "modules/Import/maps/$importMap.php";
            if( file_exists($tmpFile) )
            {
                require_once($tmpFile);
                $t = new $importMap();
                $results[$t->name] = array('delim' => $t->delimiter, 'enclos' => $t->enclosure, 'has_header' => $t->has_header);
            }
        }
        return $results;
    }

    public function getMaxColumnsInSampleSet($sampleSet)
    {
        $maxColumns = 0;
        foreach($sampleSet as $v)
        {
            if(count($v) > $maxColumns)
                $maxColumns = count($v);
            else
                continue;
        }

        return $maxColumns;
    }

    public function getSampleSet($importFile)
    {
        $rows = array();
        for($i=0; $i < self::SAMPLE_ROW_SIZE; $i++)
        {
            $rows[] = $importFile->getNextRow();
        }

        if( ! $importFile->hasHeaderRow(FALSE) )
        {
            array_unshift($rows, array_fill(0,1,'') );
        }

        foreach ($rows as &$row) {
            if (is_array($row)) {
                foreach ($row as &$val) {
                    $val = strip_tags($val);
                }
            }
        }

        return $rows;
    }

    /**
     * Returns JS used in this view
     */
    private function _getJS($maxRecordsExceeded, $maxRecordsWarningMessg, $importMappingJS, $importFileMap)
    {
        global $mod_strings, $locale;
        $maxRecordsExceededJS = $maxRecordsExceeded?"true":"false";
        $importMappingJS = json_encode($importMappingJS);

        $currencySymbolJs = $this->setCurrencyOptions($importFileMap);
        $getNumberJs = $locale->getNumberJs();
        $getNameJs = $locale->getNameJs();

        return <<<EOJAVASCRIPT


var import_mapping_js = $importMappingJS;
document.getElementById('goback').onclick = function()
{
    document.getElementById('importconfirm').action.value = 'Step2';
    return true;
}

document.getElementById('gonext').onclick = function()
{
    document.getElementById('importconfirm').action.value = 'Step3';
    return true;
}

document.getElementById('custom_enclosure').onchange = function()
{
    document.getElementById('importconfirm').custom_enclosure_other.style.display = ( this.value == 'other' ? '' : 'none' );
}

document.getElementById('custom_delimiter').onchange = function()
{
    document.getElementById('importconfirm').custom_delimiter_other.style.display = ( this.value == 'other' ? '' : 'none' );
}

document.getElementById('toggleImportOptions').onclick = function() {
    if (document.getElementById('importOptions').style.display == 'none'){
        document.getElementById('importOptions').style.display = '';
        document.getElementById('toggleImportOptions').value='  {$mod_strings['LBL_HIDE_ADVANCED_OPTIONS']}  ';
        document.getElementById('toggleImportOptions').title='{$mod_strings['LBL_HIDE_ADVANCED_OPTIONS']}';
    }
    else {
        document.getElementById('importOptions').style.display = 'none';
        document.getElementById('toggleImportOptions').value='  {$mod_strings['LBL_SHOW_ADVANCED_OPTIONS']}  ';
        document.getElementById('toggleImportOptions').title='{$mod_strings['LBL_SHOW_ADVANCED_OPTIONS']}';
    }
}

YAHOO.util.Event.onDOMReady(function(){
    if($maxRecordsExceededJS)
    {
        var contImport = confirm('$maxRecordsWarningMessg');
        if(!contImport)
        {
            var module = document.getElementById('importconfirm').import_module.value;
            var source = document.getElementById('importconfirm').source.value;
            var returnUrl = "index.php?module=Import&action=Step2&import_module=" + module + "&source=" + source;
            document.location.href = returnUrl;
        }
    }

    function refreshDataTable(e)
    {
        var callback = {
          success: function(o) {
            document.getElementById('confirm_table').innerHTML = o.responseText;
          },
          failure: function(o) {},
        };

        var importFile = document.getElementById('importconfirm').file_name.value;
        var custom_delimiter = document.getElementById('custom_delimiter').value;
        var custom_delimiter_other = document.getElementById('custom_delimiter_other').value;        
        var fieldQualifier = document.getElementById('custom_enclosure').value;
        var hasHeader = document.getElementById('importconfirm').has_header.checked ? 'true' : '';

        if(fieldQualifier == 'other' && this.id == 'custom_enclosure')
        {
            return;
        }
        else if( fieldQualifier == 'other' )
        {
            fieldQualifier = document.getElementById('custom_enclosure_other').value;
        }

        var module = document.getElementById('importconfirm').import_module.value;
        
        var urlParams = $.param({
            'import_module': module,
            'action': 'RefreshMapping',
            'module': 'Import',
            'importFile': importFile,
            'custom_delimiter': custom_delimiter,
            'custom_delimiter_other': custom_delimiter_other, 
            'qualif': fieldQualifier,
            'header': hasHeader
        });
        var url = 'index.php?' + urlParams;

        YAHOO.util.Connect.asyncRequest('GET', url, callback);
    }
    var subscribers = ["custom_delimiter", "custom_enclosure", "custom_enclosure_other", "has_header", "importlocale_charset", "custom_delimiter_other"];
    YAHOO.util.Event.addListener(subscribers, "change", refreshDataTable);

    function setMappingProperties(el)
    {
       var sourceEl = document.getElementById('source');
       if(sourceEl.value != '' && sourceEl.value != 'csv' && sourceEl.value != 'salesforce' && sourceEl.value != 'outlook')
       {
           if( !confirm(SUGAR.language.get('Import','LBL_CONFIRM_MAP_OVERRIDE')) )
           {
                deSelectExternalSources();
                return;
           }
        }
        var selectedMap = this.value;
        if( typeof(import_mapping_js[selectedMap]) == 'undefined')
            return;

        sourceEl.value = selectedMap;
        document.getElementById('custom_delimiter').value = import_mapping_js[selectedMap].delim;
        document.getElementById('custom_enclosure').value = import_mapping_js[selectedMap].enclos;
        document.getElementById('has_header').checked = import_mapping_js[selectedMap].has_header;

        refreshDataTable();
    }

    function deSelectExternalSources()
    {
        var els = document.getElementsByName('external_source');
        for(i=0;i<els.length;i++)
        {
            els[i].checked = false;
        }
    }
    YAHOO.util.Event.addListener(['sf_map', 'outlook_map'], "click", setMappingProperties);
});
var deselectEl = document.getElementById('deselect');
if(deselectEl)
{
    deselectEl.onclick = function() {
        var els = document.getElementsByName('external_source');
        for(i=0;i<els.length;i++)
        {
            els[i].checked = false;
        }
    }
}

{$currencySymbolJs}
{$getNumberJs}
{$getNameJs}
setSigDigits();
setSymbolValue(document.getElementById('currency_select').selectedIndex);

EOJAVASCRIPT;
    }

    /**
     * Displays the Smarty template for an error
     *
     * @param string $message error message to show
     * @param string $module what module we were importing into
     * @param string $action what page we should go back to
     */
    protected function _showImportError($message,$module,$action = 'Step1',$showCancel = false, $cancelLabel = null, $display = false)
    {
        if(!is_array($message)){
            $message = array($message);
        }
        $ss = new Sugar_Smarty();
        $display_msg = '';
        foreach($message as $m){
            $display_msg .= '<p>'.htmlentities($m, ENT_QUOTES, 'utf-8').'</p><br>';
        }
		global $mod_strings;

        $ss->assign("MESSAGE",$display_msg);
        $ss->assign("ACTION",$action);
        $ss->assign("IMPORT_MODULE",$module);
        $ss->assign("MOD", $GLOBALS['mod_strings']);
        $ss->assign("SOURCE","");
        $ss->assign("SHOWCANCEL",$showCancel);
        $ss->assign("SOURCE", $this->request->getValidInputRequest('source', array('Assert\Choice' => array('choices' => self::getImportSourceOptions()))));

        if ($cancelLabel) {
            $ss->assign('CANCELLABEL', $cancelLabel);
        }

        $content = $ss->fetch('modules/Import/tpls/error.tpl');

        echo $ss->fetch('modules/Import/tpls/error.tpl');
    }

}

?>
