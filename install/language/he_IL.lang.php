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
/*********************************************************************************

 * Description:
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc. All Rights
 * Reserved. Contributor(s): ______________________________________..
 * *******************************************************************************/

$mod_strings = array(
	'LBL_BASIC_SEARCH'					=> 'חיפוש בסיסי',
	'LBL_ADVANCED_SEARCH'				=> 'חיפוש מתקדם',
	'LBL_BASIC_TYPE'					=> 'סוג בסיסי',
	'LBL_ADVANCED_TYPE'					=> 'סוג מתקדם',
	'LBL_SYSOPTS_1'						=> 'בחר מבין אפשרויות תצורת המערכת הבאות להלן.',
    'LBL_SYSOPTS_2'                     => 'איזה סוג של מסד נתונים ישמש למופע הSugar שאתה עומד להתקין?',
	'LBL_SYSOPTS_CONFIG'				=> 'תצורת מערכת',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'ציין סוג מסד הנתונים',
    'LBL_SYSOPTS_DB_TITLE'              => 'סוג מסד נתונים',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'אנא תקן את השגיאות הבאות לפני ההמשך:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'אנא הפוך הספרייה הבאה לניתנת לכתיבה:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
    'ERR_DB_IBM_DB2_VERSION'			=> 'הגרסה שלך של DB2 (%s) אינה נתמכת על ידי Sugar. אתה צריך להתקין גרסה התואמת את יישום הSugar. יש להתייעץ עם מטריצת התאימות בהערות המוצר לגרסות DB2 נתמכות.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'אתה חייב להיות לקוח מותקן ומוגדר של Oracle אם תבחר Oracle.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
	'ERR_DB_OCI8_CONNECT'				=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
	'ERR_DB_OCI8_VERSION'				=> 'הגרסה שלך של Oracle (%s) אינה נתמכת על ידי Sugar.  אתה צריך להתקין גרסה התואמת את יישום הSugar. יש להתייעץ עם מטריקס התאימות בהערות לגרסות Oracle נתמכות.',
    'LBL_DBCONFIG_ORACLE'               => 'ציין את השם של מסד הנתונים שלך. זה יהיה ברירת המחדל של רווח הטבלה שהוקצה למשתמש שלך ((SID מtnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'שאילתת ההזדמנות ',
	'LBL_Q1_DESC'						=> 'הזדמנויות לפי סוג',
	'LBL_Q2_DESC'						=> 'הזדמנויות לפי חשבון',
	'LBL_R1'							=> 'דוח קו צינור מכירות לחודש 6',
	'LBL_R1_DESC'						=> 'הזדמנויות מעל 6 החודשים הבאים מחולקות לפי חודש וסוג',
	'LBL_OPP'							=> 'Opportunity Data Set',
	'LBL_OPP1_DESC'						=> 'כאן אתה תוכל לשנות את המראה והתחושה של השאילתה המותאמת אישית',
	'LBL_OPP2_DESC'						=> 'שאילתה זו תהיה מעורמת מתחת לשאילתה הראשונה בדו"ח',
    'ERR_DB_VERSION_FAILURE'			=> 'לא ניתן לבדוק את גרסת מסד הנתונים.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Provide the user name for the Sugar admin user.',
	'ERR_ADMIN_PASS_BLANK'				=> 'Provide the password for the Sugar admin user.',

    'ERR_CHECKSYS'                      => 'שגיאות אותרו במהלך בדיקת תאימות. על מנת שהתקנת הSugarCRM שלך תתפקד כראוי, בבקשה תנקוט בצעדים המתאימים כדי לטפל בבעיות המפורטים להלן וגם לחץ על כפתור בדוק מחדש, או נסה להתקין שוב.',
    'ERR_CHECKSYS_CALL_TIME'            => 'הפניית העברת זמן שיחה מופעלת (יש להגדיר את זה לכבויה ב-php.ini)',

	'ERR_CHECKSYS_CURL'					=> 'לא נמצא: מתזמן Sugar יפעל עם פונקציונליות מוגבלת. השירות של אחסון דוא"ל בארכיון לא יפעל.',
    'ERR_CHECKSYS_IMAP'					=> 'לא נמצא: InboundEmail ו-Campaigns (דוא"ל) דורשים ספריות IMAP. שניהם לא יפעלו.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'לא ניתן להפעיל Magic Quotes GPC בעת השימוש בשרת MS SQL.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Warning:',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> '(Set this to',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M או גדול יותר בקובץ הphp.ini שלך)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimum Version 4.1.2 - Found:',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'נכשל לכתוב ולקרוא משתני הפעלה. לא ניתן להמשיך בהתקנה.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'מדריך כתובות לא חוקי',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'אזהרה: לא ניתן לכתיבה',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> 'Your version of PHP is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported PHP Versions. Your version is',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => 'Your version of IIS is not supported by Sugar.  You will need to install a version that is compatible with the Sugar application.  Please consult the Compatibility Matrix in the Release Notes for supported IIS Versions. Your version is',
    'ERR_CHECKSYS_FASTCGI'              => 'שמנו לב שאינך משתמש במיפוי מטפל FastCGI עבור PHP. תצטרך להתקין/להגדיר גרסה בעלת תאימות לאפליקציית Sugar. עיין במטריצת התאימות בהערות המוצר כדי ללמוד אילו גרסאות נתמכות. לפרטים, ראה <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a> ',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'לחוויה אופטימלית באמצעות sapi IIS/FastCGI, הגדר fastcgi.logging ל0 בקובץ ה-php.ini שלך.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'מותקנת גרסת PHP לא נתמכת: (גרסה',
    'LBL_DB_UNAVAILABLE'                => 'מסד נתונים אינו זמין',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'לא נמצאה תמיכה במסד הנתונים. ודא שברשותך מנהלי ההתקנים הדרושים עבור אחד מהסוגים הבאים של מסדי נתונים נתמכים: MySQL‏, MS SQLServer‏, Oracle או DB2. ייתכן שתצטרך להוריד את התגובה של הסיומת בקובץ ה-php.ini, או להדר מחדש עם הקובץ הבינארי הנכון, בהתאם לגרסת PHP שברשותך. עיין במדריך PHP לקבלת מידע נוסף אודות אופן ההפעלה של תמיכה במסד נתונים.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'לא נמצאו פונקציות הקשורות לספריות מנתח XML הנחוצים ליישום ה-Sugar. ייתכן שתצטרך להוריד את התגובה של השלוחה בקובץ php.ini, או להדר מחדש עם הקובץ הבינארי הנכון, בהתאם לגרסת ה-PHP שלך. נא עיין במדריך PHP שלך לקבלת מידע נוסף.',
    'LBL_CHECKSYS_CSPRNG' => 'מחולל מספרים אקראיים',
    'ERR_CHECKSYS_MBSTRING'             => 'לא נמצאו פונקציות הקשורות לשלוחת מחרוזות מרובות הבתים של PHP (mbstring) הנחוצים ליישום ה-Sugar. <br/><br/>באופן כללי, מודול ה-mbstring לא מופעל כברירת מחדל ב-PHP וחייב להיות מופעל עם --אפשר-mbstring כאשר ה-PHP הבניארי בנוי. נא עיין במדריך PHP שלך לקבלת מידע נוסף על כיצד לאפשר תמיכת mbstring.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'ההגדרה של Session.save_path בקובץ תצורת ה-php שלך (php.ini) אינה מוגדרת או מוגדרת לתיקייה שלא הייתה קיימת. ייתכן שתצטרך להגדיר את הגדרת save_path ב-php.ini או לוודא שקיימות ערכות התיקייה ב-save_path.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'ההגדרה של Session.save_path בקובץ תצורת ה-php שלך (php.ini) מוגדרת לתיקייה שאינה ניתנת לכתיבה. אנא נקוט בצעדים הדרושים כדי להפוך את התיקייה לניתנת לכתיבה. <br>בהתאם למערכת ההפעלה שלך, זה עשוי לחייב אותך לשנות את ההרשאות על ידי הפעלת chmod 766, או ללחוץ באמצעות לחצן העכבר הימני על שם הקובץ כדי לגשת לתכונות ולבטל את הסימון של אפשרות \'לקריאה בלבד\'.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'קובץ התצורה קיים, אך הוא אינו ניתן לכתיבה. אנא נקוט בצעדים הדרושים כדי להפוך אותו לניתן לכתיבה. בהתאם למערכת ההפעלה שלך, זה עשוי לחייב אותך לשנות את ההרשאות על ידי הפעלת chmod 766, או ללחוץ באמצעות לחצן העכבר הימני על שם הקובץ כדי לגשת לתכונות ולבטל את סימון האפשרות \'לקריאה בלבד\'.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'קובץ עקיפת תצורה קיים, אך הוא אינו ניתן לכתיבה. אנא נקוט בצעדים הדרושים כדי להפוך אותו לניתן לכתיבה. בהתאם למערכת ההפעלה שלך, זה עשוי לחייב אותך לשנות את ההרשאות על ידי הפעלת chmod 766, או ללחוץ באמצעות לחצן העכבר הימני על שם הקובץ כדי לגשת לתכונות ולבטל את סימון האפשרות \'לקריאה בלבד\'.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'מדריך הכתובות המותאם אישית קיים, אך הוא אינו ניתן לכתיבה. ייתכן שיהיה צורך לשנות את ההרשאות עבורו (chmod 766) או ללחוץ באמצעות לחצן העכבר הימני עליו ולבטל את סימון האפשרות \'לקריאה בלבד\', בהתאם למערכת ההפעלה שלך. אנא נקוט בצעדים הדרושים כדי להפוך את הקובץ לניתן לכתיבה.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "The files or directories listed below are not writeable or are missing and cannot be created.  Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 766), or to right click on the parent directory and uncheck the &#39;read only&#39; option and apply it to all subfolders.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'מצב בטוח מופעל (ייתכן שתרצה לבטל ב-php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'תמיכת ZLib לא נמצאה: SugarCRM קצר יתרונות ביצועים עצומים עם דחיסת zlib.',
    'ERR_CHECKSYS_ZIP'					=> 'תמיכת ZIP לא נמצאה: SugarCRM זקוק לתמיכת ZIP כדי לעבד קבצים דחוסים.',
    'ERR_CHECKSYS_BCMATH'				=> 'לא נמצאה תמיכת BCMATH: שוגר צריך תמיכת BCMATH עבור חשבון מדוייק שרירותי',
    'ERR_CHECKSYS_HTACCESS'             => 'בדיקה של כתיבת .htaccess נכשלה. זה בדרך כלל אומר שלא הוגדרה אפשרות דריסה בספריית שוגר',
    'ERR_CHECKSYS_CSPRNG' => 'חריגת CSPRNG',
	'ERR_DB_ADMIN'						=> 'The provided database administrator username and/or password is invalid, and a connection to the database could not be established.  Please enter a valid user name and password.  (Error:',
    'ERR_DB_ADMIN_MSSQL'                => 'שם המשתמש המסופק של מנהל מסד הנתונים  ו\או הסיסמה  לא חוקי\ת, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן שם משתמש וסיסמה בתוקף.',
	'ERR_DB_EXISTS_NOT'					=> 'מסד הנתונים שצוין אינו קיים.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'מסד הנתונים כבר קיים עם נתוני תצורה. כדי להפעיל התקנה עם מסד הנתונים שנבחר, בבקשה הפעל מחדש את ההתקנה ובחר: "שחרר ושחזר טבלאות SugarCRM קיימות?" כדי לשדרג, השתמש באשף השדרוג במסוף הניהול. אנא קרא את תיעוד השדרוג הממוקם ב<a href="http://www.sugarforge.org/content/downloads/" target="_new">here</a>.',
	'ERR_DB_EXISTS'						=> 'שם מסד הנתונים שסופק כבר קיים - לא יכול ליצור עוד אחד עם אותו שם.',
    'ERR_DB_EXISTS_PROCEED'             => 'שם מסד הנתונים שסופק כבר קיים. אתה יכול<br>1. לחץ על לחצן \'\'הקודם\'\' ובחר שם מסד נתונים חדש <br>2. לחץ על "הבא" ו"המשך" אבל כל הטבלאות הקיימות במסד נתונים זה יושמטו. <strong>משמעות הדבר שהטבלאות והנתונים שלך יהיו מחוסלים.</strong>',
	'ERR_DB_HOSTNAME'					=> 'שם המארח אינו יכול להיות ריק.',
	'ERR_DB_INVALID'					=> 'נבחר סוג מסד נתונים לא חוקי.',
	'ERR_DB_LOGIN_FAILURE'				=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'מארח מסד הנתונים, שם המשתמש ו/או הסיסמה המסופק לא חוקי, והתחברות למסד הנתונים לא ניתנת לייצור. נא הזן מארח, שם משתמש וסיסמה בתוקף',
	'ERR_DB_MYSQL_VERSION'				=> 'גרסת  ה-MySQL שלך (%s) אינה נתמכת על ידי Sugar. יהיה עליך להתקין גרסה התואמת את יישום ה-Sugar. יש להתייעץ במטריצת התאימות בהערות המוצר לגרסאות MySQL נתמכות.',
	'ERR_DB_NAME'						=> 'שם מסד הנתונים אינו יכול להיות ריק.',
	'ERR_DB_NAME2'						=> "Database name cannot contain a &#39;\\&#39;, &#39;/&#39;, or &#39;.&#39;",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Database name cannot contain a &#39;\\&#39;, &#39;/&#39;, or &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Database name cannot contain a &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, or &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "שם מסד הנתונים יכול להכיל רק תווים אלפאנומריים ואת הסמלים '#', '_', '-', ':', '.', '/' או '$'",
	'ERR_DB_PASSWORD'					=> 'הסיסמאות המסופקות למנהל מסד נתוני ה-Sugar אינן תואמות. נא הזן מחדש את אותן סיסמאות בשדות הסיסמה.',
	'ERR_DB_PRIV_USER'					=> 'ספק שם משתמש למנהל מסד הנתונים. המשתמש נדרש להתחברות ראשונית למסד הנתונים.',
	'ERR_DB_USER_EXISTS'				=> 'שם המשתמש למשתמש מסד נתוני Sugar כבר קיים -- אי אפשר ליצור עוד אחד עם אותו שם. נא הזן שם משתמש חדש.',
	'ERR_DB_USER'						=> 'הזן שם משתמש עבור מנהל מסד נתוני ה-Sugar.',
	'ERR_DBCONF_VALIDATION'				=> 'אנא תקן את השגיאות הבאות לפני ההמשך:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'הסיסמאות המסופקות למסד הנתונים של משתמש ה-Sugar אינן תואמות. נא הזן מחדש את אותן סיסמאות בשדות הסיסמה.',
	'ERR_ERROR_GENERAL'					=> 'התגלו השגיאות הבאות:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Cannot delete file:',
	'ERR_LANG_MISSING_FILE'				=> 'Cannot find file:',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'No language pack file found at include/language inside:',
	'ERR_LANG_UPLOAD_1'					=> 'הייתה בעיה עם ההעלאה שלך. אנא נסה שוב.',
	'ERR_LANG_UPLOAD_2'					=> 'ערכות שפה חייבות להיות בארכיוני ZIP.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP אינו יכול להעביר את הקובץ הזמני לספריית השדרוג.',
	'ERR_LICENSE_MISSING'				=> 'חסרים שדות חובה',
	'ERR_LICENSE_NOT_FOUND'				=> 'לא נמצא קובץ רישיון!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'ספריית יומן רישום שסופקה אינה ספרייה תקפה.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'ספריית יומן רישום שסופקה אינה ספרייה הניתנת לכתיבה.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'דרושה ספריית יומן רישום אם ברצונך לציין ערך משלך.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'לא הצליח לעבד את ה-script באופן ישיר.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Cannot use the single quotation mark for',
	'ERR_PASSWORD_MISMATCH'				=> 'הסיסמאות המסופקות למשתמש מנהל מערכת ה-Sugar אינן תואמות. אנא הזן מחדש את אותן סיסמאות בשדות הסיסמה.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'אין אפשרות כתיבה לקובץ <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'אתה יכול להמשיך בהתקנה זה על ידי יצירת קובץ config.php באופן ידני והדבקה של מידע התצורה מתחת לקובץ config.php. עם זאת, אתה <strong>חייב </strong>ליצור את קובץ config.php לפני שתמשיך לשלב הבא.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'האם אתה זוכר יצירת קובץ ה-config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'אזהרה: לא ניתנת כתיבה לקובץ config.php. נא לוודא שהוא קיים.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Cannot write to the',
	'ERR_PERFORM_HTACCESS_2'			=> 'file.',
	'ERR_PERFORM_HTACCESS_3'			=> 'אם אתה רוצה להבטיח את קובץ יומן הרישום שלך באמצעות נגישות דרך דפדפן, צור קובץ htaccess. בספריית יומן הרישום שלך עם הקו:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>לא הייתה אפשרות לזהות התחברות לאינטרנט. </b> כאשר יש לך התחברות, אנא בקר <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> כדי להירשם ל-SugarCRM. אם תאפשר לנו לדעת קצת על איך החברה שלך מתכננת להשתמש ב-SugarCRM, אנחנו יכולים להבטיח שתמיד נעביר את היישום המתאים לצרכי העסק שלך.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'ספריית ההפעלה שסופקה אינה ספרייה תקפה.',
	'ERR_SESSION_DIRECTORY'				=> 'ספריית ההפעלה שסופקה אינה ספרייה ניתנת לכתיבה.',
	'ERR_SESSION_PATH'					=> 'נדרש נתיב הפעלה אם ברצונך לציין ערך משלך.',
	'ERR_SI_NO_CONFIG'					=> 'אתה לא כללת config_si.php בבסיס המסמך, או שאתה לא הגדרת את sugar_config_si $ ב-config.php',
	'ERR_SITE_GUID'						=> 'נדרש מזהה יישום אם ברצונך לציין ערך משלך.',
    'ERROR_SPRITE_SUPPORT'              => "נכון לעכשיו שלא הצלחנו לאתר את ספריית GD, כתוצאה מכך לא תוכל להשתמש בפונקציונליות CSS Sprite.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'אזהרה: תצורת PHP שלך צריכה להשתנות כדי לאפשר קבצים של לפחות 6MB להיות נטענים.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'העלה גודל הקובץ',
	'ERR_URL_BLANK'						=> 'ספק את ה-URL הבסיסי למופע ה-Sugar.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'לא ניתן לאתר רישום התקנה של',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'הקובץ שהועלה אינו תואם את טעם זה (מהדורת Professional, Enterprise או Ultimate) של Sugar: ',
	'ERROR_LICENSE_EXPIRED'				=> "Error: Your license expired",
	'ERROR_LICENSE_EXPIRED2'			=> "day(s) ago.   Please go to the <a href=&#39;index.php?action=LicenseSettings&module=Administration&#39;>&#39;\"License Management\"</a>  in the Admin screen to enter your new license key.  If you do not enter a new license key within 30 days of your license key expiration, you will no longer be able to log in to this application.",
	'ERROR_MANIFEST_TYPE'				=> 'קובץ המנשר חייב לציין את סוג החבילה.',
	'ERROR_PACKAGE_TYPE'				=> 'קובץ מנשר מציין סוג חבילה לא מזוהה',
	'ERROR_VALIDATION_EXPIRED'			=> "Error: Your validation key expired",
	'ERROR_VALIDATION_EXPIRED2'			=> "day(s) ago.   Please go to the <a href=&#39;index.php?action=LicenseSettings&module=Administration&#39;>&#39;\"License Management\"</a> in the Admin screen to enter your new validation key.  If you do not enter a new validation key within 30 days of your validation key expiration, you will no longer be able to log in to this application.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'The uploaded file is not compatible with this version of Sugar:',

	'LBL_BACK'							=> 'חזרה',
    'LBL_CANCEL'                        => 'בטל',
    'LBL_ACCEPT'                        => 'אני מסכים',
	'LBL_CHECKSYS_1'					=> 'כדי שהתקנת SugarCRM שלך תתפקד כראוי, אנא ודא שכל פריטי בדיקת המערכת המפורטים להלן הם בצבע ירוק. אם יש כאלה שבצבע אדום, בבקשה נקוט בצעדים הדרושים כדי לתקן אותם.<BR><BR> לקבלת עזרה בבדיקות מערכת אלה, אנא בקר ב<a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'ספריות-משנה למטמון שניתן לכתוב בהן',
    'LBL_DROP_DB_CONFIRM'               => 'שם מסד הנתונים שניתן כבר קיים.<br>באפשרותך:<br>. ללחוץ על כפתור הביטול ולבחור שם חדש למסד הנתונים, או <br>2. ללחוץ על כפתור האישור ולהמשיך. כל הטבלאות הקיימות במסד הנתונים יימחקו. <strong>המשמעות היא שכל הטבלאות והנתונים הקיימים ייעלמו לחלוטין.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP הפניית העברת חיוג שיחה כבוי',
    'LBL_CHECKSYS_COMPONENT'			=> 'רכיב',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'רכיבים אופציונליים',
	'LBL_CHECKSYS_CONFIG'				=> 'קובץ תצורת SugarCRM שניתן לכתוב בו (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'קובץ תצורת SugarCRM שניתן לכתוב בו (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> 'מודול cURL',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'הגדרת נתיב שמירת הפעלה',
	'LBL_CHECKSYS_CUSTOM'				=> 'ספרייה מותאמת אישית שניתן לכתוב בה',
	'LBL_CHECKSYS_DATA'					=> 'ספריות משנה לנתונים שניתן לכתוב בהן',
	'LBL_CHECKSYS_IMAP'					=> 'מודול IMAP',
	'LBL_CHECKSYS_MQGPC'				=> 'Magic Quotes GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'מודול MB Strings',
	'LBL_CHECKSYS_MEM_OK'				=> 'אישור (ללא הגבלה)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'אישור (ללא הגבלה)',
	'LBL_CHECKSYS_MEM'					=> 'הגבלת זיכרון PHP',
	'LBL_CHECKSYS_MODULE'				=> 'קבצים וספריות משנה של מודולות שניתן לכתוב בהן',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> 'גרסת MySQL',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'לא זמין',
	'LBL_CHECKSYS_OK'					=> 'אישור',
	'LBL_CHECKSYS_PHP_INI'				=> 'המיקום של קובץ תצורת ה-PHP שלך (php.ini):',
	'LBL_CHECKSYS_PHP_OK'				=> 'OK (ver',
	'LBL_CHECKSYS_PHPVER'				=> 'גרסת PHP',
    'LBL_CHECKSYS_IISVER'               => 'גרסת IIS',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'בדיקה חוזרת',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'מצב בטוח של PHP כבוי',
	'LBL_CHECKSYS_SESSION'				=> 'נתיב שניתן לכתוב בו את שמירת ההפעלה (',
	'LBL_CHECKSYS_STATUS'				=> 'מצב',
	'LBL_CHECKSYS_TITLE'				=> 'קבלת בדיקת מערכת',
	'LBL_CHECKSYS_VER'					=> 'Found: ( ver',
	'LBL_CHECKSYS_XML'					=> 'ניתוח XML',
	'LBL_CHECKSYS_ZLIB'					=> 'מודול דחיסת ZLIB',
	'LBL_CHECKSYS_ZIP'					=> 'מודול טיפול ZIP',
    'LBL_CHECKSYS_BCMATH'				=> 'מודות מתמטי דיוק שרירותי',
    'LBL_CHECKSYS_HTACCESS'				=> 'אפשר דריסה עבור .htaccess',
    'LBL_CHECKSYS_FIX_FILES'            => 'אנא תקן את הקבצים או הספריות הבאים לפני שתמשיך:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'אנא תקן את ספריות המודולים הבאות ואת הקבצים שבתוכן לפני שתמשיך:',
    'LBL_CHECKSYS_UPLOAD'               => 'ספריית העלאה שניתן לכתוב בה',
    'LBL_CLOSE'							=> 'סגור',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'ייווצר',
	'LBL_CONFIRM_DB_TYPE'				=> 'סוג מסד נתונים',
	'LBL_CONFIRM_DIRECTIONS'			=> 'אנא אשר את ההגדרות שלמטה. במידה ותרצה לשנות ערך מסוים, לחץ על "הקודם" כדי לערוך. אחרת, לחץ על "הבא" כדי להתחיל את ההתקנה.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'פרטי רישיון',
	'LBL_CONFIRM_NOT'					=> ' ',
	'LBL_CONFIRM_TITLE'					=> 'אשר הגדרות',
	'LBL_CONFIRM_WILL'					=> 'לא',
	'LBL_DBCONF_CREATE_DB'				=> 'ייצור מסד נתונים',
	'LBL_DBCONF_CREATE_USER'			=> 'צור משתמש [Alt+N]',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'אזהרה: כל הנתונים של Sugar יימחקו<br>אם תיבה זו מסומנת.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'מחק וצור מחדש טבלאות Sugar קיימות?',
    'LBL_DBCONF_DB_DROP'                => 'מחק טבלאות',
    'LBL_DBCONF_DB_NAME'				=> 'שם מסד נתונים',
	'LBL_DBCONF_DB_PASSWORD'			=> 'סיסמת המשתמש למסד נתונים Sugar',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'הזן שוב את סיסמת המשתמש למסד נתונים Sugar',
	'LBL_DBCONF_DB_USER'				=> 'שם משתמש למסד נתונים Sugar',
    'LBL_DBCONF_SUGAR_DB_USER'          => 'שם משתמש למסד נתונים Sugar',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'שם משתמש למנהל מערכת של מסד נתונים',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'סיסמה למנהל מערכת של מסד נתונים',
	'LBL_DBCONF_DEMO_DATA'				=> 'למלא את מסד הנתונים בנתוני דמו?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'בחר נתוני דמו',
	'LBL_DBCONF_HOST_NAME'				=> 'שם שרת מארח',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'מופע שרת מארח',
	'LBL_DBCONF_HOST_PORT'				=> 'יציאה',
    'LBL_DBCONF_SSL_ENABLED'            => 'אפשר חיבור SSL',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'אנא הזן את פרטי התצורה של מסד הנתונים שלך למטה. במידה ואינך בטוח מה להזין, אנחנו מציעים שתשתמש בערכי ברירת המחדל.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'להשתמש בטקסט מרובה-בתים בנתוני דמו?',
    'LBL_DBCONFIG_MSG2'                 => 'שם שרת האינטרנט או המכונה (שרת מארח) שבו ממוקם מסד הנתונים ( כמו localhost או www.mydomain.com ):',
    'LBL_DBCONFIG_MSG3'                 => 'השם של מסד הנתונים שיכיל את הנתונים עבור מופע Sugar שאתה עומד להתקין:',
    'LBL_DBCONFIG_B_MSG1'               => 'נדרשים שם המשתמש והסיסמה של מנהל מערכת של מסד הנתונים שיכול ליצור טבלאות ומשתמשים שיכולים לכתוב למסד הנתונים על מנת להגדיר את מסד הנתונים של Sugar.',
    'LBL_DBCONFIG_SECURITY'             => 'מסיבות אבטחה, תוכל לציין משתמש מיוחד של מסד הנתונים כדי להתחבר למסד הנתונים של Sugar. משתמש זה יהיה חייב לכתוב, לעדכן ולאחזר נתונים במסד הנתונים של Sugar שייווצר עבור מופע זה. משתמש זה יכול להיות מנהל המערכת של מסד הנתונים שצוין לעיל, או שתוכל לציין את פרטיו של משתמש חדש או קיים של מסד הנתונים.',
    'LBL_DBCONFIG_AUTO_DD'              => 'בצע את זה עבורי',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'הזן משתמש קיים',
    'LBL_DBCONFIG_CREATE_DD'            => 'הגדר משתמש ליצירה',
    'LBL_DBCONFIG_SAME_DD'              => 'שמור כמשתמש מנהל מערכת',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'חיפוש לפי מלל מלא',
    'LBL_FTS_INSTALLED'                 => 'הותקן',
    'LBL_FTS_INSTALLED_ERR1'            => 'האפשרות חיפוש טקסט מלא לא מותקנת.',
    'LBL_FTS_INSTALLED_ERR2'            => 'באפשרותך עדיין להתקין אך לא תוכל להשתמש באפשרות חיפוש טקסט מלא. אנא פנה למדריך התקנת שרת מסד הנתונים שלך כדי ללמוד כיצד לבצע את זה, או צור קשר עם מנהל המערכת שלך.',
	'LBL_DBCONF_PRIV_PASS'				=> 'סיסמת משתמש מסד נתונים בעל זכויות מיוחדות',
	'LBL_DBCONF_PRIV_USER_2'			=> 'חשבון מסד הנתונים שלמעלה הוא משתמש בעל זכויות מיוחדות?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'משתמש מסד נתונים בעל זכויות מיוחדות חייב להחזיק בהרשאות המתאימות כדי ליצור מסד נתונים, למחוק/ליצור טבלאות, וליצור משתמש. משתמש מסד נתונים זה בעל זכויות מיוחדות ישמש רק כדי לבצע את המשימות האלה במידת הצורך במהלך תהליך ההתקנה. באפשרותך גם להשתמש באותו משתמש של מסד הנתונים שלמעלה במידה ולמשתמש זה יש את ההרשאות המתאימות.',
	'LBL_DBCONF_PRIV_USER'				=> 'שם משתמש מסד נתונים בעל זכויות מיוחדות',
	'LBL_DBCONF_TITLE'					=> 'תצורת מסד נתונים',
    'LBL_DBCONF_TITLE_NAME'             => 'הזן שם מסד נתונים',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'הזן פרטי משתמש מסד נתונים',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'After this change has been made, you may click the "Start" button below to begin your installation.  <i>After the installation is complete, you will want to change the value for &#39;installer_locked&#39; to &#39;true&#39;.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'The installer has already been run once.  As a safety measure, it has been disabled from running a second time.  If you are absolutely sure you want to run it again, please go to your config.php file and locate (or add) a variable called &#39;installer_locked&#39; and set it to &#39;false&#39;.  The line should look like this:',
	'LBL_DISABLED_HELP_1'				=> 'עבור עזרה בהתקנה, אנא עבור אל SugarCRM',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'פורומים לתמיכה',
	'LBL_DISABLED_TITLE_2'				=> 'ההתקנה של SugarCRM הושבתה',
	'LBL_DISABLED_TITLE'				=> 'ההתקנה של SugarCRM מושבתת',
	'LBL_EMAIL_CHARSET_DESC'			=> 'חבילת התווים בשימוש הנפוץ ביותר באזור שלך',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'הגדרות דואר יוצא',
    'LBL_EMAIL_CHARSET_CONF'            => 'Character Set for Outbound Email',
	'LBL_HELP'							=> 'עזרה',
    'LBL_INSTALL'                       => 'התקן',
    'LBL_INSTALL_TYPE_TITLE'            => 'אפשרויות התקנה',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'בחר סוג התקנה',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Typical Install</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => '<b>Custom Install</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'המפתח נדרש עבור פונקציונליות של יישום כללי, אך אינו נדרש עבור ההתקנה. אינך צריך להזין את המפתח בשלב זה, אך תצטרך להזינו לאחר התקנת היישום.',
    'LBL_INSTALL_TYPE_MSG2'             => 'דורש מידע מינימלי עבור ההתקנה. מומלץ עבור משתמשים חדשים.',
    'LBL_INSTALL_TYPE_MSG3'             => 'מציג אפשרויות נוספות להגדרה במהלך ההתקנה. רוב האפשרויות האלה זמינות גם לאחר ההתקנה במסכי ניהול המערכת. מומלץ עבור משתמשים מתקדמים.',
	'LBL_LANG_1'						=> 'כדי להשתמש בשפה ב-Sugar שאיננה שפת ברירת המחדל (אנגלית ארה"ב), תוכל להעלות ולהתקין את חבילת השפות בשלב זה. כמו כן, תוכל להעלות ולהתקין חבילות שפות מתוך היישום Sugar. במידה ותרצה לדלג על שלב זה, לחץ על הבא.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'התקן',
	'LBL_LANG_BUTTON_REMOVE'			=> 'הסר',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'הסר התקנה',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'העלה',
	'LBL_LANG_NO_PACKS'					=> 'אין',
	'LBL_LANG_PACK_INSTALLED'			=> 'The following language packs have been installed:',
	'LBL_LANG_PACK_READY'				=> 'The following language packs are ready to be installed:',
	'LBL_LANG_SUCCESS'					=> 'חבילת השפות הועלתה בהצלחה.',
	'LBL_LANG_TITLE'			   		=> 'חבילת שפה',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'מתקין את Sugar כעת. זה עלול להימשך כמה דקות.',
	'LBL_LANG_UPLOAD'					=> 'העלה חבילת שפות',
	'LBL_LICENSE_ACCEPTANCE'			=> 'קבלת רישיון',
    'LBL_LICENSE_CHECKING'              => 'בודק מערכת עבור תאימות.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'בודק סביבה',
    'LBL_LICENSE_CHKDB_HEADER'          => 'מאמת אישורי DB‏, FTS.',
    'LBL_LICENSE_CHECK_PASSED'          => 'המערכת עברה את בדיקת התאימות.',
    'LBL_LICENSE_REDIRECT'              => 'Redirecting in',
	'LBL_LICENSE_DIRECTIONS'			=> 'במידה ויש לך את פרטי הרישיון שלך, אנא הזן אותם בשדות הבאים.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'הזן מפתח הורדה',
	'LBL_LICENSE_EXPIRY'				=> 'תאריך תפוגה',
	'LBL_LICENSE_I_ACCEPT'				=> 'אני מסכים',
	'LBL_LICENSE_NUM_USERS'				=> 'מספר משתמשים',
	'LBL_LICENSE_PRINTABLE'				=> 'Printable View',
    'LBL_PRINT_SUMM'                    => 'סיכום הדפסה',
	'LBL_LICENSE_TITLE_2'				=> 'רישיון SugarCRM',
	'LBL_LICENSE_TITLE'					=> 'פרטי רישיון',
	'LBL_LICENSE_USERS'					=> 'משתמשים בעלי רישיון',

	'LBL_LOCALE_CURRENCY'				=> 'הגדרות מטבע',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'מטבע ברירת מחדל',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'סימול מטבע',
	'LBL_LOCALE_CURR_ISO'				=> 'קוד מטבע (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'מפריד אלפים',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'מפריד עשרוני',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'דוגמה',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'ספרות משמעותיות',
	'LBL_LOCALE_DATEF'					=> 'תבנית תאריך ברירת מחדל',
	'LBL_LOCALE_DESC'					=> 'ההגדרות המקומיות שצוינו ישתקפו גלובלית בתוך מופע Sugar.',
	'LBL_LOCALE_EXPORT'					=> 'חבילת תווים עבור ייבוא/ייצוא<br> <i>(דוא"ל, .csv, vcard, PDF, ייבוא נתונים)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'ייצוא (.csv) תוחם',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'הגדרות ייבוא/ייצוא',
	'LBL_LOCALE_LANG'					=> 'שפה ברירת מחדל',
	'LBL_LOCALE_NAMEF'					=> 'פורמט שם ברירת מחדל',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = ברכות<br />f = שם פרטי<br />l = שם משפחה',
	'LBL_LOCALE_NAME_FIRST'				=> 'דוד',
	'LBL_LOCALE_NAME_LAST'				=> 'Livingstone',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'ד"ר',
	'LBL_LOCALE_TIMEF'					=> 'תבנית זמן ברירת מחדל',
	'LBL_LOCALE_TITLE'					=> 'הגדרות מקומיות',
    'LBL_CUSTOMIZE_LOCALE'              => 'שנה הגדרות מקומיות',
	'LBL_LOCALE_UI'						=> 'ממשק משתמש',

	'LBL_ML_ACTION'						=> 'פעולה',
	'LBL_ML_DESCRIPTION'				=> 'תיאור',
	'LBL_ML_INSTALLED'					=> 'תאריך התקנה',
	'LBL_ML_NAME'						=> 'שם',
	'LBL_ML_PUBLISHED'					=> 'תאריך פרסום',
	'LBL_ML_TYPE'						=> 'סוג:',
	'LBL_ML_UNINSTALLABLE'				=> 'לא בר-התקנה',
	'LBL_ML_VERSION'					=> 'גרסה',
	'LBL_MSSQL'							=> 'שרת SQL',
	'LBL_MSSQL_SQLSRV'				    => 'שרת SQL (Microsoft SQL Server Driver for PHP)',
	'LBL_MYSQL'							=> 'MySQL',
    'LBL_MYSQLI'						=> 'MySQL (הרחבת extension)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'הבא',
	'LBL_NO'							=> 'לא',
    'LBL_ORACLE'						=> 'Oracle',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'הגדרת סיסמת מנהל מערכת אתר',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audit table /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'יוצר קובץ תצורת Sugar',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Creating the database</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> '<b>on</b>',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'יוצר את שם המשתמש והסיסמה למסד הנתונים...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'יוצר נתוני Sugar ברירת מחדל',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'יוצר את שם המשתמש והסיסמה למסד הנתונים עבור השרת המקומי...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'יוצר טבלאות יחסים של Sugar',
	'LBL_PERFORM_CREATING'				=> 'creating /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'יוצר דו"חות ברירת מחדל',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'יוצר משרות ברירת מחדל ביומן האירועים',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'מכניס הגדרות ברירת מחדל',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'יוצר משתמשים ברירת מחדל',
	'LBL_PERFORM_DEMO_DATA'				=> 'ממלא את טבלאות מסד הנתונים בנתוני דמו (ייתכן וזה ייארך זמן מה)',
	'LBL_PERFORM_DONE'					=> 'בוצע<br>',
	'LBL_PERFORM_DROPPING'				=> 'dropping /',
	'LBL_PERFORM_FINISH'				=> 'סיום',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'מעדכן פרטי רישיון',
	'LBL_PERFORM_OUTRO_1'				=> 'The setup of Sugar',
	'LBL_PERFORM_OUTRO_2'				=> 'is now complete!',
	'LBL_PERFORM_OUTRO_3'				=> 'Total time:',
	'LBL_PERFORM_OUTRO_4'				=> 'seconds.',
	'LBL_PERFORM_OUTRO_5'				=> 'Approximate memory used:',
	'LBL_PERFORM_OUTRO_6'				=> 'bytes.',
	'LBL_PERFORM_OUTRO_7'				=> 'המערכת שלך כעת מותקנת ומוגדרת לשימוש.',
	'LBL_PERFORM_REL_META'				=> 'relationship meta ...',
	'LBL_PERFORM_SUCCESS'				=> 'הצלחה!',
	'LBL_PERFORM_TABLES'				=> 'יוצר טבלאות יישום Sugar, טבלאות ביקורת ומטה-נתוני יחסים',
	'LBL_PERFORM_TITLE'					=> 'בצע התקנה',
	'LBL_PRINT'							=> 'הדפס',
	'LBL_REG_CONF_1'					=> 'אנא מלא את הטופס הקצר שלמטה כדי לקבל פרסומי מוצרים, חדשות הדרכה, הצעות מיוחדות והזמנות לאירועים מיוחדים מ-SugarCRM. אנחנו לא מוכרים, משכירים, משתפים או אחרת מפיצים את המידע שנאסף כאן לצדדים שלישיים.',
	'LBL_REG_CONF_2'					=> 'השם וכתובת הדוא"ל שלך הם השדות היחידים הדרושים לרישום. כל השדות האחרים אופציונליים, אך מועילים רבות. אנחנו לא מוכרים, משכירים, משתפים או אחרת מפיצים את המידע שנאסף כאן לצדדים שלישיים.',
	'LBL_REG_CONF_3'					=> 'תודה לך על הרשמתך. לחץ על כפתור הסיום כדי להתחבר ל-SugarCRM. תצטרך להתחבר בפעם הראשונה בעזרת שם המשתמש "admin" והסיסמה שהוזנה בשלב 2.',
	'LBL_REG_TITLE'						=> 'רישום',
    'LBL_REG_NO_THANKS'                 => 'לא תודה',
    'LBL_REG_SKIP_THIS_STEP'            => 'דלג על שלב זה',
	'LBL_REQUIRED'						=> 'שדה נדרש *',

    'LBL_SITECFG_ADMIN_Name'            => 'שם של מנהל מערכת ביישום Sugar',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'הזן שוב סיסמת משתמש מנהל מערכת Sugar',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'אזהרה: זה ימחק את סיסמת מנהל המערכת של כל התקנה קודמת.',
	'LBL_SITECFG_ADMIN_PASS'			=> 'סיסמת משתמש מנהל מערכת Sugar',
	'LBL_SITECFG_APP_ID'				=> 'מזהה אפליקציה',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'במידה ונבחר, עליך להזין מזהה יישום כדי לעקוף את המזהה שנוצר אוטומטית. המזהה מוודא שההפעלות של מופע אחד של Sugar לא תבואנה לשימוש במופעים אחרים. במידה ויש לך מקבץ של התקנות Sugar, כולן צריכות להשתמש באותו מזהה יישום.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'הזן את מזהה היישום שלך',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'במידה ונבחר, עליך לציין ספריית תיעוד כדי לעקוף את הספרייה ברירת המחדל עבור תיעודים של Sugar. בכל מקום שבו יימצא קובץ התיעוד, הגישה אליו דרך דפדפן תהיה מוגבלת דרך הפניית .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'השתמש בספריית תיעוד מותאמת אישית',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'במידה ונבחר, עליך להזין ספרייה מאובטחת לאחסון מידע על ההפעלה של Sugar. ניתן לבצע את זה כדי למנוע את פגיעותם של נתוני ההפעלה בשרתים משותפים.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'השתמש בספריית הפעלה מותאמת אישית עבור Sugar',
	'LBL_SITECFG_DIRECTIONS'			=> 'אנא הזן את פרטי תצורת האתר שלך למטה. במידה ואינך בטוח בשדות, אנחנו מציעים שתשתמש בערכי ברירת המחדל.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>אנא תקן את השגיאות הבאות לפני שתמשיך:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'ספריית תיעוד',
	'LBL_SITECFG_SESSION_PATH'			=> 'נתיב לספריית הפעלה<br>(חייב להיות מורשה כתיבה)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'בחר אפשרויות אבטחה',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'במידה ונבחר, המערכת תבדוק באופן תקופתי עבור גרסאות מעודכנות של היישום.',
	'LBL_SITECFG_SUGAR_UP'				=> 'לבדוק אוטומטית עבור עדכונים?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> 'תצורת עדכוני Sugar',
	'LBL_SITECFG_TITLE'					=> 'תצורת אתר',
    'LBL_SITECFG_TITLE2'                => 'זהה משתמש מנהל מערכת',
    'LBL_SITECFG_SECURITY_TITLE'        => 'אבטחת אתר',
	'LBL_SITECFG_URL'					=> 'כתובת URL של מופע Sugar',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'להשתמש בברירות מחדל?',
	'LBL_SITECFG_ANONSTATS'             => 'לשלוח סטטיסטיקת ניצולת אנונימית?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'במידה ונבחר, Sugar יישלח סטטיסטיקה <b>אנונימית</b> לגבי ההתקנה שלך ל-SugarCRM Inc. בכל פעם שהמערכת שלך מחפשת גרסאות חדשות. מידע זה יעזור לנו להבין טוב יותר כיצד היישום מובא לשימוש ולהכווין שיפורים למוצר.',
    'LBL_SITECFG_URL_MSG'               => 'הזן את כתובת ה-URL שתשמש כדי לגשת למופע Sugar לאחר ההתקנה. כתובת ה-URL תשמש גם בתור בסיס לכתובות ה-URL בדפי היישום של Sugar. כתובת ה-URL צריכה לכלול את השם של שרת האינטרנט או המכונה או את כתובת ה-IP.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'הזן שם למערכת שלך. שם זה יוצג בסרגל הכותרת של הדפדפן כאשר משתמשים נכנסים ליישום Sugar.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'לאחר ההתקנה, תצטרך להשתמש במנהל המערכת של Sugar (שם משתמש ברירת מחדל = admin) כדי להתחבר למופע Sugar. הזן סיסמה עבור משתמש מנהל מערכת זה. ניתן לשנות את הסיסמה לאחר הכניסה הראשונית. תוכל להזין גם שם משתמש אחר למנהל הערכת מלבד ערך ברירת המחדל שניתן.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Select collation (sorting) settings for your system. This settings will create the tables with the specific language you use. In case your language doesn&#39;t require special settings please use default value.',
    'LBL_SPRITE_SUPPORT'                => 'Sprite Support',
	'LBL_SYSTEM_CREDS'                  => 'הרשאות מערכת',
    'LBL_SYSTEM_ENV'                    => 'סביבת מערכת',
	'LBL_START'							=> 'התחלה',
    'LBL_SHOW_PASS'                     => 'הצג סיסמאות',
    'LBL_HIDE_PASS'                     => 'הסתר סיסמאות',
    'LBL_HIDDEN'                        => '<i>(hidden)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>בחר את השפה שלך</b>',
	'LBL_STEP'							=> 'שלב',
	'LBL_TITLE_WELCOME'					=> 'Welcome to the SugarCRM',
	'LBL_WELCOME_1'						=> 'מתקין זה יוצר את הטבלאות של מסד הנתונים SugarCRM ומגדיר את משתני התצורה שתצטרך על מנת להתחיל. התהליך כולו צפוי להיארך כעשר דקות.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'האם אתה מוכן להתקין?',
    'REQUIRED_SYS_COMP' => 'רכיבי מערכת נדרשים',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Before you begin, please be sure that you have the supported versions of the following system<br />                      components:<br><br />                      <ul><br />                      <li> Database/Database Management System (Examples: MySQL, SQL Server, Oracle)</li><br />                      <li> Web Server (Apache, IIS)</li><br />                      </ul><br />                      Consult the Compatibility Matrix in the Release Notes for<br />                      compatible system components for the Sugar version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'בדיקת מערכת ראשונית',
    'REQUIRED_SYS_CHK_MSG' =>
                    'When you begin the installation process, a system check will be performed on the web server on which the Sugar files are located in order to<br />                      make sure the system is configured properly and has all of the necessary components<br />                      to successfully complete the installation. <br><br><br />                      The system checks all of the following:<br><br />                      <ul><br />                      <li><b>PHP version</b> &#8211; must be compatible<br />                      with the application</li><br />                                        <li><b>Session Variables</b> &#8211; must be working properly</li><br />                                            <li> <b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li><br /><br />                      <li> <b>Database Support</b> &#8211; must exist for MySQL, SQL<br />                      Server or Oracle</li><br /><br />                      <li> <b>Config.php</b> &#8211; must exist and must have the appropriate<br />                                  permissions to make it writeable</li><br />					  <li>The following Sugar files must be writeable:<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</b></li></ul></li></ul><br />                                  If the check fails, you will not be able to proceed with the installation. An error message will be displayed, explaining why your system<br />                                  did not pass the check.<br />                                  After making any necessary changes, you can undergo the system<br />                                  check again to continue the installation.<br>',
    'REQUIRED_INSTALLTYPE' => 'התקנה טיפוסית או מותאמת אישית',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "After the system check is performed, you can choose either<br />                      the Typical or the Custom installation.<br><br><br />                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br><br />                      <ul><br />                      <li> <b>Type of database</b> that will house the Sugar data <ul><li>Compatible database<br />                      types: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Name of the web server</b> or machine (host) on which the database is located<br />                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your Sugar files.<br><br></li></ul></li><br />                      <li><b>Name of the database</b> that you would like to use to house the Sugar data</li><br />                        <ul><br />                          <li> You might already have an existing database that you would like to use. If<br />                          you provide the name of an existing database, the tables in the database will<br />                          be dropped during installation when the schema for the Sugar database is defined.</li><br />                          <li> If you do not already have a database, the name you provide will be used for<br />                          the new database that is created for the instance during installation.<br><br></li><br />                        </ul><br />                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to<br />                      contact your database administrator for this information if the database is<br />                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li><br />                      <li> <b>Sugar database user name and password</b><br />                      </li><br />                        <ul><br />                          <li> The user may be the database administrator, or you may provide the name of<br />                          another existing database user. </li><br />                          <li> If you would like to create a new database user for this purpose, you will<br />                          be able to provide a new username and password during the installation process,<br />                          and the user will be created during installation. </li><br />                        </ul></ul><p><br /><br />                      For the <b>Custom</b> setup, you might also need to know the following:<br><br />                      <ul><br />                      <li> <b>URL that will be used to access the Sugar instance</b> after it is installed.<br />                      This URL should include the web server or machine name or IP address.<br><br></li><br />                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom<br />                                  session directory for Sugar information in order to prevent session data from<br />                                  being vulnerable on shared servers.<br><br></li><br />                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the Sugar log.<br><br></li><br />                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated<br />                                  ID that ensures that sessions of one Sugar instance are not used by other instances.<br><br></li><br />                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul><br />                                  For more detailed information, please consult the Installation Guide.",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'אנא קרא את המידע החשוב הבא לפני שתמשיך בהתקנה. המידע יעזור לך לקבוע אם אתה מוכן להתקין את היישום בשלב זה.',


	'LBL_WELCOME_2'						=> 'לקריאת מסמכי עזר בנושא התקנה, בקר ב-<a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.  <BR><BR> ליצירת קשר עם איש תמיכה ב-SugarCRM על מנת שיסייע לך בהתקנה, היכנס ל<a target="_blank" href="http://support.sugarcrm.com">פורטל התמיכה של SugarCRM</a> והגש אירוע תמיכה.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>בחר את השפה שלך</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'אשף ההתקנה',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Welcome to the SugarCRM',
	'LBL_WELCOME_TITLE'					=> 'אשף ההתקנה של SugarCRM',
	'LBL_WIZARD_TITLE'					=> 'Sugar Setup Wizard:',
	'LBL_YES'							=> 'כן',
    'LBL_YES_MULTI'                     => 'כן - מרובה-בתים',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'עבד משימות וורקפלו',
	'LBL_OOTB_REPORTS'		=> 'הרץ יצור דוחות מתוזמן',
	'LBL_OOTB_IE'			=> 'בוק תיבות דואר נכנס',
	'LBL_OOTB_BOUNCE'		=> 'אבד משימות ריצת דואר יוצא ליליות',
    'LBL_OOTB_CAMPAIGN'		=> 'הרץ קמפיין מייל לילי',
	'LBL_OOTB_PRUNE'		=> 'קצץ מסד נתונים בראשון לכל חודש',
    'LBL_OOTB_TRACKER'		=> 'טבלאות מעקב Prune',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'הפעל הודעות תזכורת בדוא"ל',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'עדכן טבלת tracker_sessions',
    'LBL_OOTB_CLEANUP_QUEUE' => 'נקה תור משרות',


    'LBL_FTS_TABLE_TITLE'     => 'הזן הגדרות חיפוש טקסט-מלא',
    'LBL_FTS_HOST'     => 'מארח',
    'LBL_FTS_PORT'     => 'יציאה',
    'LBL_FTS_TYPE'     => 'סוג מנוע חיפוש',
    'LBL_FTS_HELP'      => 'To enable full-text searching, select the search engine type and enter the Host and Port where the search engine is hosted. Sugar includes built-in support for the elasticsearch engine.',
    'LBL_FTS_REQUIRED'    => 'דרוש חיפוש אלסטי',
    'LBL_FTS_CONN_ERROR'    => 'לא ניתן להתחבר לשרת חיפוש טקסט מלא, אנא אמת את ההגדרות שלך.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'לא זמינה אף גירסה של שרת חיפוש טקסט מלא, אנא אמת את ההגדרות שלך.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'זוהתה גירסה של חיפוש Elastic שאינה נתמכת. יש להשתמש בגרסאות: %s',

    'LBL_PATCHES_TITLE'     => 'התקן טלאים אחרונים',
    'LBL_MODULE_TITLE'      => 'התקן חבילות שפות',
    'LBL_PATCH_1'           => 'במידה ותרצה לדלג על שלב זה, לחץ על הבא.',
    'LBL_PATCH_TITLE'       => 'טלאי מערכת',
    'LBL_PATCH_READY'       => 'הטלאי(ם) הבא(ים) מוכן(ים) להתקנה:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "SugarCRM relies upon PHP sessions to store important information while connected to this web server.  Your PHP installation does not have the Session information correctly configured.<br />											<br><br>A common misconfiguration is that the <b>&#39;session.save_path&#39;</b> directive is not pointing to a valid directory.  <br><br />											<br> Please correct your <a target=_new href=&#39;http://us2.php.net/manual/en/ref.session.php&#39;>PHP configuration</a> in the php.ini file located here below.",
	'LBL_SESSION_ERR_TITLE'				=> 'שגיאת תצורה של הפעלות PHP',
	'LBL_SYSTEM_NAME'=>'שם מערכת',
    'LBL_COLLATION' => 'הגדרות איסוף',
	'LBL_REQUIRED_SYSTEM_NAME'=>'הזן שם מערכת עבור מופע Sugar.',
	'LBL_PATCH_UPLOAD' => 'בחר קובץ טלאי מהמחשב המקומי שלך',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Backward Compatibility mode is turned on. Set zend.ze1_compatibility_mode to Off for proceeding further',

    'meeting_notification_email' => array(
        'name' => 'הודעות דוא"ל לגבי פגישות',
        'subject' => 'פגישה ב-SugarCRM - ‏$event_name ',
        'description' => 'תבנית זו נמצאת בשימוש כאשר המערכת שולחת למשתמש הודעה על פגישה.',
        'body' => '<div>
	<p>אל: $assigned_user</p>

	<p>$assigned_by_user הזמין אותך לפגישה</p>

	<p>נושא: $event_name<br/>
	תאריך התחלה: $start_date<br/>
	תאריך סיום: $end_date</p>

	<p>תיאור: $description</p>

	<p>לקבלת הפגישה:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>לקבלה טנטטיבית של הפגישה:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>לדחיית הפגישה:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'אל: $assigned_user

$assigned_by_user הזמין אותך לפגישה

נושא: $event_name
תאריך התחלה: $start_date
תאריך סיום: $end_date

תיאור: $description

לקבלת הפגישה:
<$accept_link>

לקבלה טנטטיבית של הפגישה:
<$tentative_link>

לדחיית הפגישה:
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'הודעות דוא"ל לגבי שיחות',
        'subject' => 'שיחה ב-SugarCRM - ‏$event_name ',
        'description' => 'תבנית זו נמצאת בשימוש כאשר המערכת שולחת למשתמש הודעה על שיחה.',
        'body' => '<div>
	<p>אל: $assigned_user</p>

	<p>$assigned_by_user הזמין אותך לשיחה</p>

	<p>נושא: $event_name<br/>
	תאריך התחלה: $start_date<br/>
	משך זמן: $hoursh, $minutesm</p>

	<p>תיאור: $description</p>

	<p>לקבלת השיחה:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>לקבלה טנטטיבית של השיחה:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>לדחיית השיחה:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'אל: $assigned_user

$assigned_by_user הזמין אותך לשיחה

נושא: $event_name
תאריך התחלה: $start_date
משך זמן: $hoursh, $minutesm

תיאור: $description

לקבלת השיחה:
<$accept_link>

לקבלה טנטטיבית של השיחה:
<$tentative_link>

לדחיית השיחה:
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'הודעות דוא"ל עם התראות הקצאה',
        'subject' => 'SugarCRM - הקצאת $module_name ',
        'description' => 'תבנית זו נמצאת בשימוש כאשר המערכת שולחת למשתמש הקצאה של משימה.',
        'body' => '<div>
<p>$assigned_by_user הקצה&nbsp;$module_name ל$assigned_user.</p>

<p>ניתן לראות את ה$module_name כאן:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user הקצה $module_name ל$assigned_user.

ניתן לראות את ה$module_name כאן:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'הודעות דוא"ל לגבי דוחות מתוזמנים',
        'subject' => 'דוח מתוזמן: $report_name נכון ל-$report_time',
        'description' => 'תבנית זו נמצאת בשימוש כאשר המערכת שולחת למשתמש דוח מתוזמן.',
        'body' => '<div>
<p>הי $assigned_user,</p>
<p>מצורף לדוא"ל דוח שהופק אוטומטית ותוזמן עבורך.</p>
<p>שם הדוח: $report_name</p>
<p>התאריך והשעה של הפקת הדוח: $report_time</p>
</div>',
        'txt_body' =>
            'הי $assigned_user,

מצורף לדוא"ל דוח שהופק אוטומטית ותוזמן עבורך.

שם הדוח: $report_name

התאריך והשעה של הפקת הדוח: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'הודעת דוא"ל על יומן ההערות במערכת',
        'subject' => 'SugarCRM - שמך הוזכר על-ידי $initiator_full_name ב-$singular_module_name',
        'description' => 'תבנית זו מיועדת לשליחת הודעת דוא"ל למשתמשים שתויגו ביומן ההערות.',
        'body' =>
            '<div>
                <p>שמך הוזכר ביומן ההערות של הרשומה הבאה:  <a href="$record_url">$record_name</a></p>
                <p>לצפייה בהערה, יש להיכנס למערכת של Sugar.</p>
            </div>',
        'txt_body' =>
'שמך הוזכר ביומן ההערות של הרשומה הבאה: $record_name
            לצפייה בהערה, יש להיכנס למערכת של Sugar.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'פרטי חשבון חדשים',
        'description' => 'תבנית זו מובאת לשימוש כאשר מנהל המערכת שולח סיסמה חדשה למשתמש.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'Here is your account username and temporary password:<br />Username : $contact_user_user_name<br />Password : $contact_user_user_hash<br /><br />$config_site_url<br /><br />After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'דוא"ל סיסמה ביצירת המערכת',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'אפס סיסמת החשבון שלך',
        'description' => "This template is used to send a user a link to click to reset the user&#39;s account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
'You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.<br /><br />Click on the link below to reset your password:<br /><br />$contact_user_link_guid',
        'name' => 'שכחת את סיסמת הדואר האלקטרוני',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'דוא"ל בנושא סיסמת כניסה לפורטל שהמשתמש שכח',
    'subject' => 'אפס את סיסמת החשבון',
    'description' => 'תבנית זו משמשת לשליחת קישור למשתמש שעליו הוא צריך ללחוץ כדי לאפס את סיסמת הכניסה לחשבון שלו בפורטל.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>לאחרונה ביקשת לאפס את סיסמת החשבון שלך. </p><p>לחץ על הקישור שלהלן כדי לאפס את הסיסמה:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    לאחרונה ביקשת לאפס את סיסמת החשבון שלך.

    לחץ על הקישור שלהלן כדי לאפס את הסיסמה:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'דוא"ל לאימות איפוס סיסמה לפורטל',
        'subject' => 'סיסמת החשבון שלך אופסה',
        'description' => 'תבנית זו משמשת לשליחת הודעת אישור למשתמש בפורטל לגבי איפוס סיסמת החשבון שלו.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>הודעת דוא"ל זו נשלחה אליך כדי לאשר כי בוצע איפוס של סיסמת החשבון שלך בפורטל. </p><p>השתמש בקישור שלהלן כדי להיכנס לפורטל:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    הודעת דוא"ל זו נשלחה אליך כדי לאשר כי בוצע איפוס של סיסמת החשבון שלך בפורטל.

    השתמש בקישור שלהלן כדי להיכנס לפורטל:

    $portal_login_url',
    ],
);
