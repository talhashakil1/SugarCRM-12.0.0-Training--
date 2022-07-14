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
    // Dashboard Names
    'LBL_OPPORTUNITIES_LIST_DASHBOARD' => 'Електронно табло със списък на възможностите',
    'LBL_OPPORTUNITIES_RECORD_DASHBOARD' => 'Електронно табло със запис на възможностите',
    'LBL_OPPORTUNITIES_MULTI_LINE_DASHBOARD' => 'Подробна информация за възможности',
    'LBL_OPPORTUNITIES_FOCUS_DRAWER_DASHBOARD' => 'Чекмедже Фокус на възможности',
    'LBL_RENEWAL_OPPORTUNITY' => 'Възможност за подновяване',

    'LBL_MODULE_NAME' => 'Възможности',
    'LBL_MODULE_NAME_SINGULAR' => 'Възможност',
    'LBL_MODULE_TITLE' => 'Възможности',
    'LBL_SEARCH_FORM_TITLE' => 'Търсене на възможности',
    'LBL_VIEW_FORM_TITLE' => 'Изглед с възможности',
    'LBL_LIST_FORM_TITLE' => 'Списък с възможности:',
    'LBL_OPPORTUNITY_NAME' => 'Възможност:',
    'LBL_OPPORTUNITY' => 'Свързан с възможност:',
    'LBL_NAME' => 'Сделка',
    'LBL_TIME' => 'Час',
    'LBL_INVITEE' => 'Контакти',
    'LBL_CURRENCIES' => 'Валути',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Име',
    'LBL_LIST_ACCOUNT_NAME' => 'Oрганизация',
    'LBL_LIST_DATE_CLOSED' => 'Затвори',
    'LBL_LIST_AMOUNT' => 'Вероятен сценарий',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Сума',
    'LBL_ACCOUNT_ID' => 'Идентификатор на организацията',
    'LBL_CURRENCY_RATE' => 'Валутен курс',
    'LBL_CURRENCY_ID' => 'Валута',
    'LBL_CURRENCY_NAME' => 'Име на валутата',
    'LBL_CURRENCY_SYMBOL' => 'Валутен символ',
//DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
    'db_name' => 'LBL_NAME',
    'db_amount' => 'LBL_LIST_AMOUNT',
    'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
    'UPDATE' => 'Възможности - Актуализация на валути',
    'UPDATE_DOLLARAMOUNTS' => 'Обновяване на сумата в щатски долари',
    'UPDATE_VERIFY' => 'Проверка на сумата',
    'UPDATE_VERIFY_TXT' => 'Проверка, че сумите в отделните възможности са валидни десетични числа, които съдържат само цифри (0-9) и разделители (.)',
    'UPDATE_FIX' => 'Фиксиране на суми',
    'UPDATE_FIX_TXT' => 'Извършване фиксиране на грешни суми, посредством създаване на правилни знакови разделения от текущата сума. Променената сума се съхранява в поле amount_backup на базата данни. Ако по време на изпълнението получите съобщение за грешка, не се връщайте без да сте възстановили от архива; в противен случай архивът може да бъде презаписан с неверни данни.',
    'UPDATE_DOLLARAMOUNTS_TXT' => 'Актуализира сумите в полето U.S. Dollar на база на текущите разменни курсове на валутите. Стойността на това поле се използва при калкулации в графиката List View Currency Amounts.',
    'UPDATE_CREATE_CURRENCY' => 'Въвеждане на нова валута:',
    'UPDATE_VERIFY_FAIL' => 'Неуспешна проверка на запис:',
    'UPDATE_VERIFY_CURAMOUNT' => 'Текуща сума:',
    'UPDATE_VERIFY_FIX' => 'Фиксиране на данни',
    'UPDATE_INCLUDE_CLOSE' => 'Включване на записите със статус "Приключени"',
    'UPDATE_VERIFY_NEWAMOUNT' => 'Нова сума:',
    'UPDATE_VERIFY_NEWCURRENCY' => 'Нова валута:',
    'UPDATE_DONE' => 'Добави',
    'UPDATE_BUG_COUNT' => 'Намерени проблеми и опити за разрешаването им:',
    'UPDATE_BUGFOUND_COUNT' => 'Намерени проблеми:',
    'UPDATE_COUNT' => 'Актуализирани записи:',
    'UPDATE_RESTORE_COUNT' => 'Сумата в записите е възстановена:',
    'UPDATE_RESTORE' => 'Възстановяване на суми',
    'UPDATE_RESTORE_TXT' => 'Възстановяване на сумите от архива, създаден по време на фиксирането.',
    'UPDATE_FAIL' => 'Не може да се актуализира -',
    'UPDATE_NULL_VALUE' => 'Сумата NULL установена на 0 -',
    'UPDATE_MERGE' => 'Сливане на валути',
    'UPDATE_MERGE_TXT' => 'Сливане на няколко валути в една. Ако сте открили, че има много записи за една и съща валута, можете да ги слеете. Така се сливат и данните за валути от другите модули.',
    'LBL_ACCOUNT_NAME' => 'Организация:',
    'LBL_CURRENCY' => 'Валута:',
    'LBL_DATE_CLOSED' => 'Дата на финализиране:',
    'LBL_DATE_CLOSED_TIMESTAMP' => 'Очаквана дата на затваряне',
    'LBL_TYPE' => 'Тип:',
    'LBL_CAMPAIGN' => 'Кампания:',
    'LBL_NEXT_STEP' => 'Следваща стъпка:',
    'LBL_SERVICE_START_DATE' => 'Начална дата на изпълнение',
    'LBL_LEAD_SOURCE' => 'Източник:',
    'LBL_SALES_STAGE' => 'Етап на преговори:',
    'LBL_SALES_STATUS' => 'Статус',
    'LBL_PROBABILITY' => 'Вероятност (%):',
    'LBL_DESCRIPTION' => 'Описание:',
    'LBL_DUPLICATE' => 'Възможно е дублиране',
    'MSG_DUPLICATE' => 'Създаденият запис има вероятност да дублира вече съществуваща възможност. Възможностите с близки имена са изброени отдолу.<br>Натиснете бутоина Съхрани ако желаете да създадете новия запис или бутона Отмени, за да се върнете в модула без да създавате нова възможност.',
    'LBL_NEW_FORM_TITLE' => 'Създаване на възможност',
    'LNK_NEW_OPPORTUNITY' => 'Създаване на възможност',
    'LNK_CREATE' => 'Създай сделка',
    'LNK_OPPORTUNITY_LIST' => 'Списък с възможности',
    'ERR_DELETE_RECORD' => 'Необходимо е да маркирате поне 1 запис, за да продължите.',
    'LBL_TOP_OPPORTUNITIES' => 'Моите възможности',
    'NTC_REMOVE_OPP_CONFIRMATION' => 'Сигурни ли сте, че искате да изтриете тази връзка?',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Сигурни ли сте, че искате да изтриете тази връзка?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Възможности',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Дейности',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'История',
    'LBL_RAW_AMOUNT' => 'Приблизителна сума',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Потенциални клиенти',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Контакти',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Документи',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Проекти',
    'LBL_ASSIGNED_TO_NAME' => 'Отговорник:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Отговорник',
    'LBL_LIST_SALES_STAGE' => 'Етап на преговори',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Моите реализирани възможности',
    'LBL_TOTAL_OPPORTUNITIES' => 'Възможности',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Моите реализирани възможности',
    'LBL_ASSIGNED_TO_ID' => 'Отговорник:',
    'LBL_CREATED_ID' => 'Създадено от',
    'LBL_MODIFIED_ID' => 'Модифицирано от',
    'LBL_MODIFIED_NAME' => 'Модифицирано от',
    'LBL_CREATED_USER' => 'Създаден потребител',
    'LBL_MODIFIED_USER' => 'Модифициран потребител',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Кампании',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Проекти',
    'LABEL_PANEL_ASSIGNMENT' => 'Отговорник',
    'LNK_IMPORT_OPPORTUNITIES' => 'Импортиране на възможности',
    'LBL_EDITLAYOUT' => 'Редактиране на подредби' /*for 508 compliance fix*/,
    //For export labels
    'LBL_EXPORT_CAMPAIGN_ID' => 'Кампания',
    'LBL_OPPORTUNITY_TYPE' => 'Тип на възможността',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Отговорник',
    'LBL_EXPORT_ASSIGNED_USER_ID' => 'Отговорник',
    'LBL_EXPORT_MODIFIED_USER_ID' => 'Модифицирано от',
    'LBL_EXPORT_CREATED_BY' => 'Създадено от',
    'LBL_EXPORT_NAME' => 'Име',
    // SNIP
    'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Related Contacts&#39; Emails',
    'LBL_FILENAME' => 'Прикачен файл',
    'LBL_PRIMARY_QUOTE_ID' => 'Основна оферта',
    'LBL_CONTRACTS' => 'Договори',
    'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Договори',
    'LBL_PRODUCTS' => 'Оферирани продукти',
    'LBL_RLI' => 'Приходни позиции',
    'LNK_OPPORTUNITY_REPORTS' => 'Справки за възможности',
    'LBL_QUOTES_SUBPANEL_TITLE' => 'Оферти',
    'LBL_TEAM_ID' => 'Идентификатор на екип',
    'LBL_TIMEPERIODS' => 'Времеви периоди',
    'LBL_TIMEPERIOD_ID' => 'Идентификатор на времевия период',
    'LBL_COMMITTED' => 'Разпределена',
    'LBL_FORECAST' => 'Включена в прогнозата',
    'LBL_COMMIT_STAGE' => 'Изпрати етапа на възможността',
    'LBL_COMMIT_STAGE_FORECAST' => 'Прогноза',
    'LBL_WORKSHEET' => 'План',
    'LBL_PURCHASED_LINE_ITEMS' => 'Закупени позиции',

    'LBL_FORECASTED_LIKELY' => 'Прогнозирани Вероятни',
    'LBL_RENEWAL' => 'Подновяване',
    'LBL_RENEWAL_OPPORTUNITIES' => 'Възможности за подновяване',
    'LBL_RENEWAL_PARENT' => 'Възможност на родителски запис',
    'LBL_PARENT_RENEWAL_OPPORTUNITY_ID' => 'Идентификатор на родителския запис на подновяване',
    'LBL_MONTH_YEAR_RENEWAL' => '{{month}}, {{year}}',

    'LBL_WIDGET_SALES_STAGE' => 'Етап на продажби',
    'LBL_WIDGET_DATE_CLOSED' => 'Очаквана дата на финализиране',
    'LBL_WIDGET_AMOUNT' => 'Сума',

    'TPL_RLI_CREATE' => 'Трябва да има асоциирана приходна позиция с Възможността.',
    'TPL_RLI_CREATE_LINK_TEXT' => 'Въведете приходна позиция.',
    'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Оферирани продукти',
    'LBL_RLI_SUBPANEL_TITLE' => 'Приходни позиции',

    'LBL_TOTAL_RLIS' => '# от всички приходни позиции',
    'LBL_CLOSED_RLIS' => '# от приключените приходни позции',
    'LBL_CLOSED_WON_RLIS' => '# от приходни позции Затворени реализирани',
    'LBL_SERVICE_OPEN_FLEX_DURATION_RLIS' => '# на включени приходни позиции с променливо времетраене на отворена услуга',
    'NOTICE_NO_DELETE_CLOSED_RLIS' => 'Не могат да бъдат изтривани Възможности, които съдържат приходни позиции',
    'WARNING_NO_DELETE_CLOSED_SELECTED' => 'Един или повече от селектираните записи съдържат приходни позиции и не могат да бъдат изтрити.',
    'LBL_INCLUDED_RLIS' => '# на включени приходни позиции',
    'LBL_UPDATE_OPPORTUNITIES_RLIS' => 'Отворена актуализация',
    'LBL_CASCADE_RLI_EDIT' => 'Обновете отворените приходни позиции',
    'LBL_CASCADE_RLI_CREATE' => 'Пояснете приходните позиции',
    'LBL_SERVICE_START_DATE_INVALID' => 'Началната дата на изпълнение не може да бъде зададена по-късна от крайната дата на изпълнение на всяка отворена допълнена приходна позиция.',

    'LBL_QUOTE_SUBPANEL_TITLE' => 'Оферти',
    'LBL_FILTER_OPPORTUNITY_TEMPLATE' => 'Възможности чрез динамичен профил',


    // Config
    'LBL_OPPS_CONFIG_VIEW_BY_LABEL' => 'Йерархия на възможностите',
    'LBL_OPPS_CONFIG_VIEW_BY_DATE_ROLLUP' => 'Датата на финализиране на създаваната Възможност ще съвпада с най-ранната или най-късната дата на финализиране в съществуващите Приходни позиции',

    //Dashlet
    'LBL_PIPELINE_TOTAL_IS' => 'Обща сума на текущи възможности',

    'LBL_OPPORTUNITY_ROLE'=>'Роля при реализиране на възможността',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Бележки',

    // Help Text
    'LBL_OPPS_CONFIG_ALERT' => 'С натискане на бутона Потвърди ще бъдат изтрити ВСИЧКИ Прогнози и ще се промени изгледът на модул Възможноси. Ако не желаете това, натиснете бутона Отмени, за да възстановите предишните настройки.',
    'LBL_OPPS_CONFIG_ALERT_TO_OPPS' =>
        'Като щракнете върху Потвърди, ще изтриете ВСИЧКИ данни на Прогнозите и ще промените изгледа на Възможностите. '
        .'Също така ВСИЧКИ Дефиниции на процеса с целеви модул на Приходни позиции ще бъдат деактивирани. '
        .'Ако това не е каквото сте искали, щракнете върху "Отмяна" за да се върнете към предишните настройки.',
    'LBL_OPPS_CONFIG_SALES_STAGE_1a' => 'Ако всички Приходни позиции са затворени и поне една е спечелена,',
    'LBL_OPPS_CONFIG_SALES_STAGE_1b' => 'етапът на преговори във Възможността се променя на "Спечелена"',
    'LBL_OPPS_CONFIG_SALES_STAGE_2a' => 'ако всички Приходни позиции са в "Загубени" етап на преговори',
    'LBL_OPPS_CONFIG_SALES_STAGE_2b' => 'етапът на преговори във Възможността се променя на "Загубена"',
    'LBL_OPPS_CONFIG_SALES_STAGE_3a' => 'Ако някоя от приходните позиции е все още отворена,',
    'LBL_OPPS_CONFIG_SALES_STAGE_3b' => 'ще бъде поставен възможно най-провоначален етап на преговори във Възможността.',

// BEGIN ENT/ULT

    // Opps Config - View By Opportunities
    'LBL_HELP_CONFIG_OPPS' => 'След като инициирате тази промяна резюмиращите бележки свързани с Приходните позиции ще бъдат генерирани. След като бележките са създадени и са достъпни ще бъде изпратено уведомление на електронната поща от вашия профил. В случай че инсталацията на системата има конфигурирани {{forecasts_module}}, Sugar ще изпрати уведомление когато записите от модул {{module_name}} са синхронизирани с модул {{forecasts_module}} и могат да се използват в нови {{forecasts_module}}. Моля имайте в предид, че за изпращане на иведомления е необходимо инсталацията на системата трябва да бъде конфигурирана да изпраща електронна поща през Администрация > Настройки на електронна поща.',

    // Opps Config - View By Opportunities And RLIs
    'LBL_HELP_CONFIG_RLIS' => 'След като инициирате тази промяна ще бъдат генерирани Приходни позиции за всеки от същесвуващите {{module_name}}. След като Приходните позиции са създадени и са достъпни ще бъде изпратено уведомление на електронната поща от вашия профил. Моля имайте в предид, че за изпращане на иведомления е необходимо инсталацията на системата трябва да бъде конфигурирана да изпраща електронна поща през Администрация > Настройки на електронна поща.',
    // List View Help Text
    'LBL_HELP_RECORDS' => 'Модулът {{plural_module_name}} ви позволява да следите индивидуални продажби от начало до край. Всеки запис на {{module_name}} представлява перспективна продажба и включва съответни данни за продажба, както и връзка към други важни записи, като {{quotes_module}}, {{contacts_module}} и др. Един {{module_name}} обикновено ще премине през няколко етапа на продажба, докато бъде отбелязан или като „Затворен реализиран“, или като „Затворен загубен“. {{plural_module_name}} може да се използва още по-нататък чрез използване на модула {{forecasts_singular_module}} на Sugar, за да се разберат и предвидят тенденции в продажбите, както и като фокус на работа за постигане на целите за продажби.',

    // Record View Help Text
    'LBL_HELP_RECORD' => 'Модулът {{plural_module_name}} ви позволява да следите индивидуални продажби и позиции от линия, които принадлежат към тези продажби, от начало до край. Всеки запис {{module_name}} представлява перспективна продажба и включва съответни данни за продажбата както и връзка към други важни записи като {{quotes_module}}, {{contacts_module}} и др.

- Редактирайте полетата на този запис като щраквате върху отделно поле или бутона Редактиране.
- Разглеждайте или модифицирайте връзки към други записи в подпанелите като превключите долния ляв екран на „Изглед на данни".
- Правете и разглеждайте потребителски коментари и записвайте хронология на промените на записи в {{activitystream_singular_module}} като превключите долния ляв екран на „Поток на активност".
- Следвайте или предпочитайте този запис с помощта на иконите отдясно на името на записа.
- Допълнителни действия са налични в падащото меню „Действия" отдясно на бутона „Редактиране".',

    // Create View Help Text
    'LBL_HELP_CREATE' => 'Модулът {{plural_module_name}} ви позволява да следите отделни продажби и позиции, принадлежащи към тези продажби, от началото до края. Всеки запис в {{module_name}} представя потенциална продажба и включва съответни данни за продажбата, както и връзката към други важни записи, като {{quotes_module}}, {{contacts_module}} и други.

За да създадете {{module_name}}:
1. Дайте стойности за полетата, както желаете.
 - Полетата, маркирани като „Задължителни“, трябва да бъдат попълнени преди записване.
 - Щракнете върху „Покажи повече“, за да се покажат допълнителни полета, ако е необходимо.
2. Щракнете върху „Запиши“, за да финализирате новия запис и да се върнете към предишната страница.',

// END ENT/ULT

    //Marketo
    'LBL_MKTO_SYNC' => 'Синхронизирай с Marketo®',
    'LBL_MKTO_ID' => 'Идентификатор на потенциалния клиент в Marketo',

    'LBL_DASHLET_TOP10_SALES_OPPORTUNITIES_NAME' => 'Топ 10 Търговски възможности',
    'LBL_TOP10_OPPORTUNITIES_CHART_DESC' => 'Представя топ десет Търговски възможности в графика.',
    'LBL_TOP10_OPPORTUNITIES_MY_OPP' => 'Моите Възможности',
    'LBL_TOP10_OPPORTUNITIES_MY_TEAMS_OPP' => "Възможности на моите екипи",

    'LBL_PIPELINE_ERR_CLOSED_SALES_STAGE' => 'Не е възможна промяна на {{fieldName}}, тъй като този {{moduleSingular}} няма отворени позиции.',
    'TPL_ACTIVITY_TIMELINE_DASHLET' => 'Хронология на възможности',

    'LBL_CASCADE_SERVICE_WARNING' => ' не могат да бъдат разпределени в никоя от тези приходни позиции, защото не са услуги. Желаете ли да продължите със създаването?',
    'LBL_CASCADE_DURATION_WARNING' => ' не могат да бъдат разпределени в никоя от тези приходни позиции, тъй като тяхната продължителност е фиксирана. Желаете ли да продължите със създаването?',

    // AI Predict
    'LBL_AI_OPPORTUNITY_CLOSE_PREDICTION_NAME' => 'Прогноза за затваряне на възможност',
    'LBL_AI_OPPORTUNITY_CLOSE_PREDICTION_DESC' => 'Вижте подробности на прогноза за конкретна възможност',
);
