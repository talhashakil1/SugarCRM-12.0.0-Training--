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
$mod_strings = array(
    'LBL_MODULE_NAME' => 'Поверителност на данните',
    'LBL_MODULE_NAME_SINGULAR' => 'Поверителност на данните',
    'LBL_NUMBER' => 'Номер',
    'LBL_TYPE' => 'Тип',
    'LBL_SOURCE' => 'Източник',
    'LBL_REQUESTED_BY' => 'Заявено от',
    'LBL_DATE_OPENED' => 'Начална дата',
    'LBL_DATE_DUE' => 'Крайна дата',
    'LBL_DATE_CLOSED' => 'Приключено на',
    'LBL_BUSINESS_PURPOSE' => 'Одобрени бизнес цели',
    'LBL_LIST_NUMBER' => 'Номер',
    'LBL_LIST_SUBJECT' => 'Относно',
    'LBL_LIST_PRIORITY' => 'Степен на важност',
    'LBL_LIST_STATUS' => 'Статус',
    'LBL_LIST_TYPE' => 'Тип',
    'LBL_LIST_SOURCE' => 'Източник',
    'LBL_LIST_REQUESTED_BY' => 'Заявено от',
    'LBL_LIST_DATE_DUE' => 'Падежна дата',
    'LBL_LIST_DATE_CLOSED' => 'Приключено на',
    'LBL_LIST_DATE_MODIFIED' => 'Модифицирано на',
    'LBL_LIST_MODIFIED_BY_NAME' => 'Модифицирано от',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
    'LBL_SHOW_MORE' => 'Покажи повече дейности за поверителност на данните',
    'LNK_DATAPRIVACY_LIST' => 'Преглед на дейностите за поверителност на данните',
    'LNK_NEW_DATAPRIVACY' => 'Създай дейност за поверителност на данните',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_PROSPECTS_SUBPANEL_TITLE' => 'Целеви клиенти',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Организации',
    'LBL_LISTVIEW_FILTER_ALL' => 'Всички дейности за поверителност на данните',
    'LBL_ASSIGNED_TO_ME' => 'Моите дейности за поверителност на данните',
    'LBL_SEARCH_AND_SELECT' => 'Търси и избери дейности за поверителност на данните',
    'TPL_SEARCH_AND_ADD' => 'Търси и добави дейности за поверителност на данните',
    'LBL_WARNING_ERASE_CONFIRM' => 'На път сте да премахнете {0} поле(та). Няма опция за възстановяване на тези данни след приключване на изтриването. Сигурни ли сте че искате да продължите?',
    'LBL_WARNING_REJECT_ERASURE_CONFIRM' => 'Имате {0} поле(та), маркирани за изтриване. Потвърждението ще спре изтриването, ще запази всички данни и ще маркира заявката като отхвърлена. Сигурни ли сте че искате да продължите?',
    'LBL_WARNING_COMPLETE_CONFIRM' => 'На път сте да маркирате тази заявка като приключена. Това ще настрои за постоянно статуса на Приключена и няма да може да бъде отворен отново. Сигурни ли сте че искате да продължите?',
    'LBL_WARNING_REJECT_REQUEST_CONFIRM' => 'На път сте да маркирате тази заявка като отхвърлена. Това ще настрои за постоянно статуса на Отхвърлена и няма да може да бъде отворена отново. Сигурни ли сте че искате да продължите?',
    'LBL_RECORD_SAVED_SUCCESS' => 'Успешно създадохте дейността за поверителност на данните <a href="#{{buildRoute model=this}}">{{name}}</a>.', // use when a model is available
    'LBL_REJECT_BUTTON_LABEL' => 'Отхвърли',
    'LBL_COMPLETE_BUTTON_LABEL' => 'Завърши',
    'LBL_ERASE_COMPLETE_BUTTON_LABEL' => 'Изтрий и завърши',
    'LBL_ERASE_SUBPANEL_FIELDS_LABEL' => 'Изтрий избраните полета чрез панелите със свързани записи',
    'LBL_COUNT_FIELDS_MARKED' => 'Полета, маркирани за изтриване',
    'LBL_NO_RECORDS_MARKED' => 'Няма полета или записи, маркирани за изтриване.',
    'LBL_DATA_PRIVACY_RECORD_DASHBOARD' => 'Електронно табло за записи за поверителност на данните',
    'LBL_DATA_PRIVACY_FOCUS_DRAWER_DASHBOARD' => 'Чекмедже Фокус на защита на данните',

    // list view
    'LBL_HELP_RECORDS' => 'Модулът за Поверителност на данните проследява дейностите за поверителност, включително заявки за съгласие и име в подкрепа на процедурите за поверителност в организацията ви. Създайте записи за поверителност на данните, свързани със записа на физическо лице (например договор), за да проследите съгласието или предприемете действия по заявка за поверителност.',
    // record view
    'LBL_HELP_RECORD' => 'Модулът за Поверителност на данните проследява дейностите за поверителност, включително заявки за съгласие и име в подкрепа на процедурите за поверителност в организацията ви. Създайте записи за поверителност на данните, свързани със записа на физическо лице (например договор), за да проследите съгласието или предприемете действия по заявка за поверителност. След като действието е завършено, потребителите с функция Мениджър Поверителност на данните могат да натиснат "Завърши" или "Отхвърли" за да актуализират статуса.

За заявки за изтриване изберете "Маркирай за изтриване" за всеки от записите на лицето, посочени в таблото със свързани записи по-долу. След като всички желани полета са избрани, натискането на "Изтрий и завърши" ще премахне стойностите на полетата и ще маркира записа за поверителност на данните като завършен.',
);
