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
	'LBL_BASIC_SEARCH'					=> 'Bazinė paieška',
	'LBL_ADVANCED_SEARCH'				=> 'Išplėstinė paieška',
	'LBL_BASIC_TYPE'					=> 'Bazinis tipas',
	'LBL_ADVANCED_TYPE'					=> 'Išplėstinis tipas',
	'LBL_SYSOPTS_1'						=> 'Pasirinkite vieną iš šių toliau pateiktų sistemos konfigūracijos parinkčių.',
    'LBL_SYSOPTS_2'                     => 'Kokio tipo duomenų bazė bus naudojama jūsų diegiamame „Sugar“ egzemplioriuje?',
	'LBL_SYSOPTS_CONFIG'				=> 'Sistemos konfigūracija',
	'LBL_SYSOPTS_DB_TYPE'				=> '',
	'LBL_SYSOPTS_DB'					=> 'Nurodykite duomenų bazės tipą',
    'LBL_SYSOPTS_DB_TITLE'              => 'Duomenų bazės tipas',
	'LBL_SYSOPTS_ERRS_TITLE'			=> 'Prieš tęsdami ištaisykite šias klaidas:',
	'LBL_MAKE_DIRECTORY_WRITABLE'      => 'Įgalinkite rašymą į šį katalogą:',


    'ERR_DB_LOGIN_FAILURE_IBM_DB2'		=> 'Nurodytas duomenų bazės pagrindinis kompiuteris ar vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
    'ERR_DB_IBM_DB2_CONNECT'			=> 'Nurodytas duomenų bazės pagrindinis kompiuteris, vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
    'ERR_DB_IBM_DB2_VERSION'			=> '„Sugar“ nepalaiko jūsų DB2 (%s) versijos. Turite įdiegti versiją, suderinamą su „Sugar“ taikomąja programa. Palaikomas DB2 versijas žr. suderinamumo matricoje, pateiktoje leidimo pastabose.',

	'LBL_SYSOPTS_DB_DIRECTIONS'			=> 'Jei pasienkate „Oracle“, privalote turėti įdiegtą ir sukonfigūruotą "Oracle" kliento programą.',
	'ERR_DB_LOGIN_FAILURE_OCI8'			=> 'Nurodytas duomenų bazės pagrindinis kompiuteris, vartotojo vardas ir (arba) slaptažodis yra neteisinagas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
	'ERR_DB_OCI8_CONNECT'				=> 'Nurodytas duomenų bazės pagrindinis kompiuteris, vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
	'ERR_DB_OCI8_VERSION'				=> '„Sugar“ nepalaiko jūsų „Oracle“ (%s) versijos. Turite įdiegti versiją, suderinamą su „Sugar“ taikomąja programa. Palaikomas „Oracle“ versijas žr. suderinamumo matricoje, pateiktoje leidimo pastabose.',
    'LBL_DBCONFIG_ORACLE'               => 'Nurodykite savo duomenų bazės pavadinimą. Pagal jį jūsų vartotojui bus priskirta numatytoji lentelių sritis ((SID iš tnsnames.ora).',
	// seed Ent Reports
	'LBL_Q'								=> 'Galimybių užklausa',
	'LBL_Q1_DESC'						=> 'Galimybės pagal tipą',
	'LBL_Q2_DESC'						=> 'Galimybės pagal sąskaitą',
	'LBL_R1'							=> '6 mėnesių pardavimų galimybių ataskaita',
	'LBL_R1_DESC'						=> 'Galimybės per artimiausius 6 mėnesius, suskirstytos pagal mėnesius ir tipą',
	'LBL_OPP'							=> 'Galimybių duomenų bazė',
	'LBL_OPP1_DESC'						=> 'Čia galite keisti nestandartinės užklausos išvaizdą ir įspūdį.',
	'LBL_OPP2_DESC'						=> 'Ši užklausa į ataskaitą bus įdėta žemiau pirmos užklausos.',
    'ERR_DB_VERSION_FAILURE'			=> 'Neįmanoma patikrinti duomenų bazės versijos.',

	'DEFAULT_CHARSET'					=> 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK'         => 'Nurodykite „Sugar“ administratoriaus vartotojo vardą. ',
	'ERR_ADMIN_PASS_BLANK'				=> 'Nurodytas „Sugar“ administratoriaus slaptažodį. ',

    'ERR_CHECKSYS'                      => 'Suderinamumo patikrinimo metu rasta klaidų. Kad įdiegtas „SugarCRM“ veiktų tinkamai, pašalinkite žemiau išvardytas problemas atlikdami atitinkamus veiksmus, o tada paspaukite pakartotinio tikrinimo mygtuką arba bandykite diegti dar kartą.',
    'ERR_CHECKSYS_CALL_TIME'            => '„Leisti perduoti skambučio laiko nuorodą“ yra įjungta – nustatyta kaip „Įjungta“ (faile php.ini ji turi būti nustatyta kaip „Išjungta“)',

	'ERR_CHECKSYS_CURL'					=> 'Nerasta: veiks ribotos „Sugar“ planuoklės funkcijos. El. pašto archyvavimo paslauga neveiks.',
    'ERR_CHECKSYS_IMAP'					=> 'Nerasta: gaunamam el. paštui ir kampanijoms (el. paštu) reikalingos IMAP biliotekos. Nė vienas iš jų neveiks.',
	'ERR_CHECKSYS_MSSQL_MQGPC'			=> 'Negalima nustatyti „Magic Quotes GPC“ reikšmės „Įjungta", kai naudojamas „MS SQL Server“.',
	'ERR_CHECKSYS_MEM_LIMIT_0'			=> 'Įspėjimas: ',
	'ERR_CHECKSYS_MEM_LIMIT_1'			=> ' (Nustatyti tai kaip ',
	'ERR_CHECKSYS_MEM_LIMIT_2'			=> 'M arba didesnis faile php.ini)',
	'ERR_CHECKSYS_MYSQL_VERSION'		=> 'Minimali versija 4.1.2 – rasta: ',
	'ERR_CHECKSYS_NO_SESSIONS'			=> 'Nepavyko įrašyti ir nuskaityti seanso kintamųjų. Diegimo tęsti negalima.',
	'ERR_CHECKSYS_NOT_VALID_DIR'		=> 'Neleistinas katalogas',
	'ERR_CHECKSYS_NOT_WRITABLE'			=> 'Įspėjimas: nerašomasis',
	'ERR_CHECKSYS_PHP_INVALID_VER'		=> '„SugarCRM“ nepalaiko jūsų PHP versijos. Turite įdiegti versiją, suderinamą su „Sugar“ taikomąja programa. Palaikomas PHP versijas žr. suderinamumo matricoje, pateiktoje leidimo pastabose. Jūsų versija yra ',
	'ERR_CHECKSYS_IIS_INVALID_VER'      => '„Sugar nepalaiko jūsų IIS versijos. Turite įdiegti versiją, suderinamą su „Sugar“ taikomąja programa. Palaikomas IIS versijas žr. suderinamumo matricoje, pateiktoje leidimo pastabose. Jūsų versija yra ',
    'ERR_CHECKSYS_FASTCGI'              => 'Aptikome, kad nenaudojate „FastCGI“ tvarkyklės atvaizdavimo PHP. Turėsite įdiegti / sukonfigūruoti versiją, suderinamą su „Sugar“ programa. Norėdami gauti palaikomas versijas, skaitykite suderinamumo matricą leidimo pastabose. Išsamesnės informacijos žr. <a href="http://www.iis.net/php/" target="_blank" rel="nofollow noopener noreferrer">http://www.iis.net/php/</a>',
	'ERR_CHECKSYS_FASTCGI_LOGGING'      => 'Norėdami, kad jūsų naudojimosi „IIS/FastCGI SAPI“ patirtis būtų optimali, faile php.ini nustatykite fastcgi.logging reikšmę 0.',
    'ERR_CHECKSYS_PHP_UNSUPPORTED'		=> 'Įdiegta nepalaikoma PHP versija: ( versija',
    'LBL_DB_UNAVAILABLE'                => 'Duomenų bazė neprieinama',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Duomenų bazės palaikymas nerastas. Įsitikinkite, kad turite reikiamas tvarkykles vienam iš šių palaikomų duomenų bazių tipų: MySQL, MS „SQLServer“, „Oracle“ arba DB2. Gali tekti atšaukti plėtinio php.ini failo komentarą arba perkompiliuoti naudojant tinkamą dvejetainį failą, atsižvelgiant į jūsų PHP versiją. Daugiau informacijos apie tai, kaip įjungti duomenų bazės palaikymą, rasite PHP vadove.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE'        => 'Nerasta „SugarCRM“ taikomajai programai reikalingų funkcijų, susietų su XML analizatoriaus bibliotekomis. Atsižvelgiant į naudojamą PHP versiją, gali reikėti anuliuoti plėtinio komentarus faile php.ini arba iš naujo sukompiliuoti su tinkamu dvejetainiu failu. Daugiau informacijos žr. PHP žinyne.',
    'LBL_CHECKSYS_CSPRNG' => 'Atsitiktinio numerio generatorius',
    'ERR_CHECKSYS_MBSTRING'             => 'Nerasta „SugarCRM“ taikomajai programai reikalingų funkcijų, susietų su „Multibyte Strings“ PHP plėtiniu (mbstring). <br/><br/>Paprastai pagal numatytąjį nustatymą modulis mbstring nėra įgalinamas PHP, todėl jį reikia suaktyvinti naudojant --enable-mbstring, kai PHP dvejetainis failas jau būna sukompiliuotas. Daugiau informacijos apie mbstring palaikymą žr. PHP žinyne.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_SET'       => 'Parametras session.save_path PHP konfigūracijos faile (php.ini) nenustatytas arba nustatytas nurodant neegzistuojantį aplanką. Gali reikėti nustatyti parametrą save_path faile php.ini arba patikrinti, ar egzistuoja aplankas, nustatytas parametre save_path.',
    'ERR_CHECKSYS_SESSION_SAVE_PATH_NOT_WRITABLE'  => 'Parametras session.save_path PHP konfigūracijos faile (php.ini) nustatytas nurodant aplanką, į kurį negalima rašyti. Atlikite reikiamus veiksmus, kad būtų galima rašyti į šį aplanką. <br>Atsižvelgiant į operacinę sistemą, tam gali reikėti pakeisti teises paleidžiant chmod 766 arba, spustelėjus dešiniuoju pelės mygtuku failo vardą, prieiti prie ypatybių ir anuliuoti tik skaitymo parinkties žymėjimą.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE'  => 'Konfigūracijos failas egzistuoja, tačiau į jį negalima rašyti. Atlikite reikiamus veiksmus, kad būtų galima rašyti į šį aplanką. Atsižvelgiant į operacinę sistemą, tam gali reikėti pakeisti teises paleidžiant chmod 766 arba, spustelėjus dešiniuoju pelės mygtuku failo vardą, prieiti prie ypatybių ir anuliuoti tik skaitymo parinkties žymėjimą.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE'  => 'Konfigūracijos perrašymo failas egzistuoja, tačiau į jį negalima rašyti. Atlikite reikiamus veiksmus, kad būtų galima rašyti į šį aplanką. Atsižvelgiant į operacinę sistemą, tam gali reikėti pakeisti teises paleidžiant chmod 766 arba, spustelėjus dešiniuoju pelės mygtuku failo vardą, prieiti prie ypatybių ir anuliuoti tik skaitymo parinkties žymėjimą.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE'  => 'Pasirinktinis katalogas egzistuoja, tačiau į jį negalima rašyti. Atsižvelgiant į operacinę sistemą, gali reikėti pakeisti jo teises (chmod 766) ir anuliuoti tik skaitymo parinkties žymėjimą. Atlikite reikiamus veiksmus, kad būtų galima rašyti į šį failą.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE'   => "Į žemiau išvardytus failus ar katalogus negalima rašyti arba jų išvis nėra ir negalima jų sukurti.  Atsižvelgiant į operacinę sistemą, norint tai pataisyti, gali reikėti pakeisti teises į failus ar pirminį katalogą (chmod 755) arba, spustelėjus dešiniuoju pelės mygtuku pirminį katalogą, pašalinti tik skaitymo parinkties žymėjimą ir pritaikyti tai visiems poaplankiams.",
	'ERR_CHECKSYS_SAFE_MODE'			=> 'Saugusis režimas įjungtas (galite jį išjungti faile php.ini)',
    'ERR_CHECKSYS_ZLIB'					=> 'Nerasta „ZLib“ palaikymo: zlib glaudinimas suteikia „SugarCRM“ milžinišką efektyvumą.',
    'ERR_CHECKSYS_ZIP'					=> 'Nerasta ZIP palaikymo: ZIP palaikymas „SugarCRM“ reikalingas, kad galėtų apdoroti glaudintus failus.',
    'ERR_CHECKSYS_BCMATH'				=> 'Nerasta BCMATH palaikymo: BCMATH palaikymas „SugarCRM“ reikalingas, kad galėtų atlikti pasirinktinio tikslumo matematinius skaičiavimus.',
    'ERR_CHECKSYS_HTACCESS'             => 'Failo .htaccess perrašymo testas nepavyko. Paprastai tai reiškia, kad „Sugar“ katalogui nesate nustatę „AllowOverride“.',
    'ERR_CHECKSYS_CSPRNG' => 'CSPRNG išimtis',
	'ERR_DB_ADMIN'						=> 'Nurodytas duomenų bazės administratoriaus vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl negalima prisijungti prie duomenų bazės. Įveskite teisingą vartotojo vardą ir slaptažodį. (Klaida: ',
    'ERR_DB_ADMIN_MSSQL'                => 'Nurodytas duomenų bazės administratoriaus vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl negalima prisijungti prie duomenų bazės. Įveskite teisingą vartotojo vardą ir slaptažodį.',
	'ERR_DB_EXISTS_NOT'					=> 'Nurodyta duomenų bazė neegzistuoja.',
	'ERR_DB_EXISTS_WITH_CONFIG'			=> 'Duomenų bazė su konfigūracijos duomenimis jau egzistuoja, iš naujo paleiskite diegimą ir pasirinkite: „Pašalinti egzistuojančias „SugarCRM“ lenteles ir sukurti jas iš naujo?" Norėdami naujovinti versiją, naudokite Administravimo konsolėje esantį Versijos naujovinimo vedlį. Perskaitykite versijos naujovinimo dokumentaciją, esančią <a href="http://www.sugarforge.org/content/downloads/" target="_new">here</a>.',
	'ERR_DB_EXISTS'						=> 'Toks duomenų bazės pavadinimas jau yra – kitos duomenų bazės tokiu pačiu pavadinimu sukurti negalima.',
    'ERR_DB_EXISTS_PROCEED'             => 'Toks duomenų bazės pavadinimas jau yra. Galite:<br>1. spustelėti mygtuką „Atgal“ ir pasirinkti naują duomenų bazės pavadinimą <br>2. spustelėti „Pirmyn“ ir tęsti, tačiau tuomet šioje duomenų bazėje egzistuojančios lentelės bus pašalintos. <strong>Tai reiškia, kad lentelės ir duomenys bus prarasti.</strong>',
	'ERR_DB_HOSTNAME'					=> 'Pagrindinio kompiuterio vardas negali būti tuščias.',
	'ERR_DB_INVALID'					=> 'Pasirinktas neleistinas duomenų bazės tipas.',
	'ERR_DB_LOGIN_FAILURE'				=> 'Nurodytas duomenų bazės pagrindinis kompiuteris, vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
	'ERR_DB_LOGIN_FAILURE_MYSQL'		=> 'Nurodytas duomenų bazės pagrindinis kompiuteris, vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
	'ERR_DB_LOGIN_FAILURE_MSSQL'		=> 'Nurodytas duomenų bazės pagrindinis kompiuteris, vartotojo vardas ir (arba) slaptažodis yra neteisingas, todėl prisijungti prie duomenų bazės negalima. Įveskite teisingą pagrindinio kompiuterio vardą, vartotojo vardą ir slaptažodį.',
	'ERR_DB_MYSQL_VERSION'				=> '„Sugar“ nepalaiko „MySQL“ (%s) versijos, nesuderinamos su „Sugar“. Turite įdiegti versiją, suderinamą su „Sugar“ taikomąja programa. Palaikomas „MySQL“ versijas žr. suderinamumo matricoje, pateiktoje leidimo pastabose.',
	'ERR_DB_NAME'						=> 'Duomenų bazės pavadinimas negali būti tuščias.',
	'ERR_DB_NAME2'						=> "Duomenų bazės pavadinime negali būti simbolių: \\, / ar taško.",
    'ERR_DB_MYSQL_DB_NAME_INVALID'      => "Duomenų bazės pavadinime negali būti simbolių: \\, / ar taško.",
    'ERR_DB_MSSQL_DB_NAME_INVALID'      => "Duomenų bazės pavadinimas negali prasidėti skaitmeniu, simboliu # ar @, taip pat jame negali būti tarpo ir simbolių: \", ', *, /, \\, ?, :, <, >, &, ! ar -.",
    'ERR_DB_OCI8_DB_NAME_INVALID'       => "Duomenų bazės pavadinimą gali sudaryti tik raidiniai ir skaitiniai simboliai bei simboliai #, _, -, :, ., / arba $",
	'ERR_DB_PASSWORD'					=> 'Pateikti „Sugar“ duomenų bazės administratoriaus slaptažodžiai nesutampa. Į slaptažodžių laukus iš naujo įveskite sutampančius slaptažodžius.',
	'ERR_DB_PRIV_USER'					=> 'Pateikite duomenų bazės administratoriaus vartotojo vardą. Šis vartotojas reikalingas pradiniam prisijungimui prie duomenų bazės.',
	'ERR_DB_USER_EXISTS'				=> 'Toks „Sugar“ duomenų bazės vartotojo vardas jau egzistuoja – negalima sukurti dar vieno tokiu pačiu vardu. Įveskite naują vartotojo vardą.',
	'ERR_DB_USER'						=> 'Įveskite „Sugar“ duomenų bazės administratoriaus vartotojo vardą.',
	'ERR_DBCONF_VALIDATION'				=> 'Prieš tęsdami, ištaisykite šias klaidas:',
    'ERR_DBCONF_PASSWORD_MISMATCH'      => 'Pateikti „Sugar“ duomenų bazės vartotojo slaptažodžiai nesutampa. Į slaptažodžių laukus iš naujo įveskite sutampančius slaptažodžius.',
	'ERR_ERROR_GENERAL'					=> 'Įvyko šios klaidos:',
	'ERR_LANG_CANNOT_DELETE_FILE'		=> 'Negalima panaikinti failo: ',
	'ERR_LANG_MISSING_FILE'				=> 'Negalima rasti failo: ',
	'ERR_LANG_NO_LANG_FILE'			 	=> 'Įtraukimo / kalbos kataloge nerasta jokio kalbos paketo: ',
	'ERR_LANG_UPLOAD_1'					=> 'Nusiunčiant kilo problema.  Bandykite dar kartą.',
	'ERR_LANG_UPLOAD_2'					=> 'Kalbų paketai turi būti ZIP archyvo failai.',
	'ERR_LANG_UPLOAD_3'					=> 'PHP negali perkelti laikino failo į atnaujinimo katalogą.',
	'ERR_LICENSE_MISSING'				=> 'Trūksta privalomų laukų',
	'ERR_LICENSE_NOT_FOUND'				=> 'Nerasta licencijos failo!',
	'ERR_LOG_DIRECTORY_NOT_EXISTS'		=> 'Nurodytas žurnalo katalogas yra neleistinas.',
	'ERR_LOG_DIRECTORY_NOT_WRITABLE'	=> 'Į nurodytą žurnalo katalogą negalima rašyti.',
	'ERR_LOG_DIRECTORY_REQUIRED'		=> 'Žurnalo katalogas būtinas, jei norite nurodyti savo katalogą.',
	'ERR_NO_DIRECT_SCRIPT'				=> 'Neįmanoma tiesiogiai paleisti scenarijaus.',
	'ERR_NO_SINGLE_QUOTE'				=> 'Negalima naudoti viengubų kabučių su ',
	'ERR_PASSWORD_MISMATCH'				=> 'Pateikti „Sugar“ duomenų bazės adaministratoriaus vartotojo slaptažodžiai nesutampa. Į slaptažodžių laukus iš naujo įveskite sutampančius slaptažodžius.',
	'ERR_PERFORM_CONFIG_PHP_1'			=> 'Negalima rašyti į failą <span class=stop>config.php</span>.',
	'ERR_PERFORM_CONFIG_PHP_2'			=> 'Galite tęsti šį diegimą, rankiniu būdu sukurdami failą config.php ir į failą config.php įklijuodami žemiau pateiktą informaciją. Tačiau failą config.php <strong>privalote </strong> sukurti prieš pereidami prie kito veiksmo.',
	'ERR_PERFORM_CONFIG_PHP_3'			=> 'Ar nepamiršote sukurti failo config.php?',
	'ERR_PERFORM_CONFIG_PHP_4'			=> 'Įspėjimas: nepavyksta rašyti į failą config.php. Įsitikinkite, kad jis egzistuoja.',
	'ERR_PERFORM_HTACCESS_1'			=> 'Neįmanoma rašyti į failą ',
	'ERR_PERFORM_HTACCESS_2'			=> '.',
	'ERR_PERFORM_HTACCESS_3'			=> 'Jei norite apsaugoti žurnalo failą, kad jis būtų neprieinamas per naršyklę, žurnalo kataloge sukurkite failą .htaccess su tokia eilute:',
	'ERR_PERFORM_NO_TCPIP'				=> '<b>Nėra interneto ryšio.</b> Kai interneto ryšys atsiras, apsilankykite puslapyje <a href="http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register">http://www.sugarcrm.com/home/index.php?option=com_extended_registration&task=register</a> ir prisiregistruokite prie „SugarCRM“. Jei suteiksite šiek tiek informacijos apie „SugarCRM“ naudojimo jūsų įmonėje planus, galėsime užtikrinti, kad visada pateiksime jūsų verslo poreikius atitinkančius programinius sprendimus.',
	'ERR_SESSION_DIRECTORY_NOT_EXISTS'	=> 'Nurodytas neleistinas seanso katalogas.',
	'ERR_SESSION_DIRECTORY'				=> 'Į nurodytą seanso katalogą negalima rašyti.',
	'ERR_SESSION_PATH'					=> 'Seanso kelias būtinas, jei norite nurodyti savo seansą.',
	'ERR_SI_NO_CONFIG'					=> 'Neįtraukėte config_si.php į dokumento šakninį katalogą arba faile config.php neapibrėžėte $sugar_config_si.',
	'ERR_SITE_GUID'						=> 'Taikomosios programos ID yra būtinas, jei norite nurodyti savo programą.',
    'ERROR_SPRITE_SUPPORT'              => "Šiuo metu nepavyko aptikti GD bibliotekos, todėl negalėsite naudotis „CSS Sprite“ funkcinėmis galimybėmis.",
	'ERR_UPLOAD_MAX_FILESIZE'			=> 'Įspėjimas: reikia pakeisti PHP konfigūraciją, nurodant, kad nusiųsti leidžiama ne mažesnius kaip 6 MB dydžio failus.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE'     => 'Nusiunčiamo failo dydis',
	'ERR_URL_BLANK'						=> 'Nurodykite „Sugar“ egzemplioriaus bazinį URL.',
	'ERR_UW_NO_UPDATE_RECORD'			=> 'Nepavyko rasti diegimo įrašo apie',
    'ERROR_FLAVOR_INCOMPATIBLE'         => 'Nusiųstas failas nesuderinamas su šių „Sugar“ leidimų konfigūracija („Professional“, „Enterprise“ arba „Ultimate“ leidimas): ',
	'ERROR_LICENSE_EXPIRED'				=> "Klaida: jūsų licencijos galiojimas baigėsi prieš ",
	'ERROR_LICENSE_EXPIRED2'			=> "dienas (-ų). Administravimo ekrane eikite į <a href='index.php?action=LicenseSettings&module=Administration'>'Licencijų valdymas</a> ir įveskite naują licencijos raktą. Jei, pasibaigus licencijos rakto galiojimui, per 30 dienų neįvesite naujo licencijos rakto, nebegalėsite prisijungti prie šios programos.",
	'ERROR_MANIFEST_TYPE'				=> 'Faile manifest turi būti nurodytas paketos tipas.',
	'ERROR_PACKAGE_TYPE'				=> 'Failas manifest nurodo neatpažinto paketo tipą.',
	'ERROR_VALIDATION_EXPIRED'			=> "Klaida: jūsų patvirtinimo rakto galiojimas baigėsi prieš",
	'ERROR_VALIDATION_EXPIRED2'			=> "dienas (-ų). Administravimo ekrane eikite į <a href='index.php?action=LicenseSettings&module=Administration'>'Licencijų valdymas</a> ir įveskite naują patvirtinimo raktą.   Jei, pasibaigus patvirtinimo rakto galiojimui, per 30 dienų neįvesite naujo patvirtinimo rakto, nebegalėsite prisijungti prie šios programos.",
	'ERROR_VERSION_INCOMPATIBLE'		=> 'Nusiųstas failas nesuderinamas su šia „Sugar“ versija:',

	'LBL_BACK'							=> 'Atgal',
    'LBL_CANCEL'                        => 'Atšaukti',
    'LBL_ACCEPT'                        => 'Sutinku',
	'LBL_CHECKSYS_1'					=> 'Kad įdiegta „SugarCRM“ veiktų tinkamai, užtikrinkite, kad visi žemiau išvardyti sistemos tikrinimo punktai būtų rodomi žaliai. Jei kurie nors iš jų yra raudoni, imkitės reikiamų veiksmų ir ištaisykite tai.<BR><BR> Šių sistemos tikrinimų žinyną rasite apsilankę  <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>.',
	'LBL_CHECKSYS_CACHE'				=> 'Rašomieji talpyklos pakatalogiai',
    'LBL_DROP_DB_CONFIRM'               => 'Toks duomenų bazės pavadinimas jau yra.<br>Galite:<br>1. spustelėti mygtuką „Atšaukti“ ir pasirinkti naują duomenų bazės pavadinimą, arba <br>2. spustelėti „Sutinku“ ir tęsti. Visos egzistuojančios lentelės ir duomenų bazė bus pašalintos. <strong>Tai reiškia, kad visos lentelės ir išankstiniai duomenys bus prarasti.</strong>',
	'LBL_CHECKSYS_CALL_TIME'			=> 'PHP kode „Leisti perduoti skabučio laiką“ yra išjungtas',
    'LBL_CHECKSYS_COMPONENT'			=> 'Komponentas',
	'LBL_CHECKSYS_COMPONENT_OPTIONAL'	=> 'Nebūtini komponentai',
	'LBL_CHECKSYS_CONFIG'				=> 'Rašomasis „SugarCRM“ konfigūracijos failas (config.php)',
	'LBL_CHECKSYS_CONFIG_OVERRIDE'		=> 'Rašomasis „SugarCRM“ konfigūracijos failas (config_override.php)',
	'LBL_CHECKSYS_CURL'					=> '„cURL“ modulis',
    'LBL_CHECKSYS_SESSION_SAVE_PATH'    => 'Seanso įrašymo kelio parametras',
	'LBL_CHECKSYS_CUSTOM'				=> 'Rašomasis pasirinktis katalogas',
	'LBL_CHECKSYS_DATA'					=> 'Rašomieji duomenų pakatalogiai',
	'LBL_CHECKSYS_IMAP'					=> 'IMAP modulis',
	'LBL_CHECKSYS_MQGPC'				=> '„Magic Quotes“ GPC',
	'LBL_CHECKSYS_MBSTRING'				=> 'MB eilučių modulis',
	'LBL_CHECKSYS_MEM_OK'				=> 'Gerai (neribojama)',
	'LBL_CHECKSYS_MEM_UNLIMITED'		=> 'Gerai (neribotas)',
	'LBL_CHECKSYS_MEM'					=> 'PHP atminties limitas',
	'LBL_CHECKSYS_MODULE'				=> 'Rašomieji modulių pakatalogiai ir failai',
	'LBL_CHECKSYS_MYSQL_VERSION'		=> '„MySQL“ versija',
	'LBL_CHECKSYS_NOT_AVAILABLE'		=> 'Nėra',
	'LBL_CHECKSYS_OK'					=> 'Gerai',
	'LBL_CHECKSYS_PHP_INI'				=> 'PHP konfigūracijos failo (php.ini)  vieta:',
	'LBL_CHECKSYS_PHP_OK'				=> 'Gerai (versija',
	'LBL_CHECKSYS_PHPVER'				=> 'PHP versija',
    'LBL_CHECKSYS_IISVER'               => 'IIS versija',
    'LBL_CHECKSYS_FASTCGI'              => 'FastCGI',
	'LBL_CHECKSYS_RECHECK'				=> 'Tikrinti iš naujo',
	'LBL_CHECKSYS_SAFE_MODE'			=> 'PHP saugusis režimas išjungtas',
	'LBL_CHECKSYS_SESSION'				=> 'Rašomasis seanso įrašymo kelias (',
	'LBL_CHECKSYS_STATUS'				=> 'Būsena:',
	'LBL_CHECKSYS_TITLE'				=> 'Sistemos tikrinimo priėmimas',
	'LBL_CHECKSYS_VER'					=> 'Rasta: ( versija',
	'LBL_CHECKSYS_XML'					=> 'XML analizė',
	'LBL_CHECKSYS_ZLIB'					=> 'ZLIB glaudinimo modulis',
	'LBL_CHECKSYS_ZIP'					=> 'ZIP tvarkymo modulis',
    'LBL_CHECKSYS_BCMATH'				=> 'Pasirinktinio tikslumo matematinių skaičiavimų modulis',
    'LBL_CHECKSYS_HTACCESS'				=> 'Faile .htaccess leisti „allowOverride“ sąranką',
    'LBL_CHECKSYS_FIX_FILES'            => 'Prieš tęsdami ištaisykite šiuos failus ar katalogus:',
    'LBL_CHECKSYS_FIX_MODULE_FILES'     => 'Prieš tęsdami ištaisykite šių modulių katalogus ir failus juose:',
    'LBL_CHECKSYS_UPLOAD'               => 'Rašomasis nusiuntimo katalogas',
    'LBL_CLOSE'							=> 'Uždaryti',
    'LBL_THREE'                         => '3',
	'LBL_CONFIRM_BE_CREATED'			=> 'bus sukurta',
	'LBL_CONFIRM_DB_TYPE'				=> 'Duomenų bazės tipas',
	'LBL_CONFIRM_DIRECTIONS'			=> 'Patvirtinkite žemiau pateiktus parametrus. Jei norite pakeisti kurią nors reiškmę, spustelėkite mygtuką „Atgal“. Priešingu atveju spustelėkite „Pirmyn“, ir diegimas prasidės.',
	'LBL_CONFIRM_LICENSE_TITLE'			=> 'Licencijos informacija',
	'LBL_CONFIRM_NOT'					=> 'ne',
	'LBL_CONFIRM_TITLE'					=> 'Patvirtinkite parametrus',
	'LBL_CONFIRM_WILL'					=> 'bus',
	'LBL_DBCONF_CREATE_DB'				=> 'Kurti duomenų bazę',
	'LBL_DBCONF_CREATE_USER'			=> 'Kurti vartotoją',
	'LBL_DBCONF_DB_DROP_CREATE_WARN'	=> 'Perspėjimas: jei šis laukelis pažymėtas,<br>visi „Sugar“ duomenys bus ištrinti.',
	'LBL_DBCONF_DB_DROP_CREATE'			=> 'Pašalinti egzistuojančias „Sugar“ lenteles ir sukurti jas iš naujo?',
    'LBL_DBCONF_DB_DROP'                => 'Pašalinti lenteles',
    'LBL_DBCONF_DB_NAME'				=> 'Duomenų bazės pavadinimas',
	'LBL_DBCONF_DB_PASSWORD'			=> '„Sugar“ duomenų bazės vartotojo slaptažodis',
	'LBL_DBCONF_DB_PASSWORD2'			=> 'Iš naujo įveskite „Sugar“ duomenų bazės vartotojo slaptažodį',
	'LBL_DBCONF_DB_USER'				=> '„Sugar“ duomenų bazės vartotojo vardas',
    'LBL_DBCONF_SUGAR_DB_USER'          => '„Sugar“ duomenų bazės vartotojo vardas',
    'LBL_DBCONF_DB_ADMIN_USER'          => 'Duomenų bazės administratoriaus vartotojo vardas',
    'LBL_DBCONF_DB_ADMIN_PASSWORD'      => 'Duomenų bazės administratoriaus slaptažodis',
	'LBL_DBCONF_DEMO_DATA'				=> 'Automatiškai įvesti į duomenų bazę demonstracinius duomenis?',
    'LBL_DBCONF_DEMO_DATA_TITLE'        => 'Pasirinkti demonstracinius duomenis',
	'LBL_DBCONF_HOST_NAME'				=> 'Pagrindinio kompiuterio vardas',
	'LBL_DBCONF_HOST_INSTANCE'			=> 'Pagrindinio kompiuterio egzempliorius',
	'LBL_DBCONF_HOST_PORT'				=> 'Prievadas',
    'LBL_DBCONF_SSL_ENABLED'            => 'Įgalinti SSL ryšį',
	'LBL_DBCONF_INSTRUCTIONS'			=> 'Žemiau įveskite duomenų bazės konfigūracijos informaciją. Jei abejojate, kokias reikšmes įvesti, rekomenduojame naudoti numatytuosius parametrus.',
	'LBL_DBCONF_MB_DEMO_DATA'			=> 'Naudoti daugiabaitės koduotės tekstą demonstraciniuose duomenyse?',
    'LBL_DBCONFIG_MSG2'                 => 'To žiniatinklio serverio arba kompiuterio (pagrindinio kompiuterio) vardas, kuriame yra duomenų bazė ( pvz.: vietinio pagrindinio kompiuterio arba www.mydomain.com ):',
    'LBL_DBCONFIG_MSG3'                 => 'Tos duomenų bazės pavadinimas, kurioje bus laikomi diegiamo „Sugar“ egzemplioriaus duomenys:',
    'LBL_DBCONFIG_B_MSG1'               => 'Norint nustatyti „Sugar“ duomenų bazės parametrus, reikalingas to duomenų bazės administratoriaus vartotojo vardas ir slaptažodis, kuris turi duomenų bazės lentelių bei vartotojų kūrimo ir rašymo į duomenų bazę teises.',
    'LBL_DBCONFIG_SECURITY'             => 'Dėl saugumo galite nurodyti išskirtinį duomenų bazės vartotoją, kuris jungtųsi prie Sugar duomenų bazės.  Šis vartotojas turi galėti rašyti, atnaujinti ir gauti duomenis iš Sugar duomenų bazės. Šis vartotojas gali būti duomenų bazės administratorius nurodytas prieš tai arba galite pateikti naują vartotojo informaciją.',
    'LBL_DBCONFIG_AUTO_DD'              => 'Atlikti automatiškai',
    'LBL_DBCONFIG_PROVIDE_DD'           => 'Nurodyti esamą vartotoją',
    'LBL_DBCONFIG_CREATE_DD'            => 'Apibrėžti kuriamą vartotoją',
    'LBL_DBCONFIG_SAME_DD'              => 'Toks pat, kaip administratoriaus vartotojo',
	//'LBL_DBCONF_I18NFIX'              => 'Apply database column expansion for varchar and char types (up to 255) for multi-byte data?',
    'LBL_FTS'                           => 'Turinio teksto paieška',
    'LBL_FTS_INSTALLED'                 => 'Įdiegta',
    'LBL_FTS_INSTALLED_ERR1'            => 'Turinio teksto paieška nėra įdiegta.',
    'LBL_FTS_INSTALLED_ERR2'            => 'Vis tiek galite diegti, tačiau negalėsite naudotis turinio teksto paieškos funkcinėmis galimybėmis. Kaip tai padaryti, žr. duomenų bazės serverio diegimo vadove arba kreipkitės pagalbos į administratotorių.',
	'LBL_DBCONF_PRIV_PASS'				=> 'Privilegijuotojo duomenų bazės vartotojo slaptažodis',
	'LBL_DBCONF_PRIV_USER_2'			=> 'Ar aukščiau nurodyta duomenų bazės paskyra yra privilegijuotojo vartotojo?',
	'LBL_DBCONF_PRIV_USER_DIRECTIONS'	=> 'Šis privilegijuotasis vartotojas turi turėti reikiamas teises, leidžiančias sukurti, duomenų bazę, pašalinti / sukurti lenteles ir sukurti vartotoją. Šios užduotys privilegijuotojo duomenų bazės vartotojo vardu atliekamos tik prireikus, diegimo proceso metu. Galite naudoti ir tą pačią duomenų bazės vartotojo paskyrą, kaip anksčiau, jei toks vartotojas turi pakankamas teises.',
	'LBL_DBCONF_PRIV_USER'				=> 'Privilegijuotojo duomenų bazės vartotojo vardas',
	'LBL_DBCONF_TITLE'					=> 'Duomenų bazės konfigūracija',
    'LBL_DBCONF_TITLE_NAME'             => 'Nurodykite duomenų bazės pavadinimą',
    'LBL_DBCONF_TITLE_USER_INFO'        => 'Pateikite duomenų bazės vartotojo informaciją',
	'LBL_DISABLED_DESCRIPTION_2'		=> 'Kai šie paketimai bus atlikti, galite spustelėti žemiau esantį pradžios mygtuką ir diegimas prasidės. <i>Kai diegimas bus atliktas, nustatykite \'installer_locked\' reikšmę \'true\'.</i>',
	'LBL_DISABLED_DESCRIPTION'			=> 'Ši diegimo programa kartą jau buvo paleista. Saugumo tikslais šią programą uždrausta paleisti antrą kartą. Jei esate visiškai tikri, kad norite ją paleisti dar kartą, atsidarykite failą config.php ir susiraskite jame (arba pridėkite) kintamąjį pavadinimu \'installer_locked\', tada nustatykite jo reikšmę \'false\'. Šio kintamojo eilutė turi atordyti taip:',
	'LBL_DISABLED_HELP_1'				=> 'Diegimo žinyną rasite apsilankę „SugarCRM“ svetainėje',
    'LBL_DISABLED_HELP_LNK'               => 'http://www.sugarcrm.com/forums/',
	'LBL_DISABLED_HELP_2'				=> 'pagalbos forumai',
	'LBL_DISABLED_TITLE_2'				=> '„SugarCRM“ diegimas yra išjungtas',
	'LBL_DISABLED_TITLE'				=> '„SugarCRM“ diegimas išjungtas',
	'LBL_EMAIL_CHARSET_DESC'			=> 'Simbolių rinkinys, dažniausiai naudojamas jūsų lokalėje',
	'LBL_EMAIL_CHARSET_TITLE'			=> 'Siunčiamo el. pašto parametrai',
    'LBL_EMAIL_CHARSET_CONF'            => 'Simbolių rinkinys, skirtas siunčiamam el. paštui ',
	'LBL_HELP'							=> 'Žinynas',
    'LBL_INSTALL'                       => 'Įdiegti',
    'LBL_INSTALL_TYPE_TITLE'            => 'Diegimo parinktys',
    'LBL_INSTALL_TYPE_SUBTITLE'         => 'Pasirinkite diegimo tipą',
    'LBL_INSTALL_TYPE_TYPICAL'          => '<b>Standartinis diegimas</b>',
    'LBL_INSTALL_TYPE_CUSTOM'           => ' <b>Pasirinktinis diegimas</b>',
    'LBL_INSTALL_TYPE_MSG1'             => 'Šis raktas reikalingas bendrosioms programos funkcinėms galimybėms, bet diegiant jo nereikia. Šiuo metu šio rakto įvesti nereikia, tačiau šį raktą turėsite įvesti, kai programa bus įdiegta.',
    'LBL_INSTALL_TYPE_MSG2'             => 'Šiam diegimui reikalingas minimalus informacijos kiekis. Rekomenduojama naujiems vartotojams.',
    'LBL_INSTALL_TYPE_MSG3'             => 'Pateikia papildomas parinktis, kurias galite nustatyti diegimo metu. Dauguma šių parinkčių yra prieinamos ir administravimo ekranuose, kai programa jau įdiegta. Rekomenduojama patyrusiems vartotojams.',
	'LBL_LANG_1'						=> 'Norėdami „Sugar“ programoje naudoti kitą, o ne numatytąją kalbą (JAV–anglų k.), dabar galite nusiųsti norimos kalbos paketą ir jį įdiegti. Kalbos paketus galėsite nusiųsti bei įdiegti ir atsidarę „Sugar“ programą. Jei šį veiksmą norite praleisti, spustelėkite „Pirmyn“.',
	'LBL_LANG_BUTTON_COMMIT'			=> 'Įdiegti',
	'LBL_LANG_BUTTON_REMOVE'			=> 'Pašalinti',
	'LBL_LANG_BUTTON_UNINSTALL'			=> 'Išdiegti',
	'LBL_LANG_BUTTON_UPLOAD'			=> 'Nusiųsti',
	'LBL_LANG_NO_PACKS'					=> 'nėra',
	'LBL_LANG_PACK_INSTALLED'			=> 'Įdiegti šie kalbų paketai: ',
	'LBL_LANG_PACK_READY'				=> 'Šie kalbų paketai parengti įdiegti: ',
	'LBL_LANG_SUCCESS'					=> 'Kalbos paketas sėkmingai nusiųstas.',
	'LBL_LANG_TITLE'			   		=> 'Kalbos paketas',
    'LBL_LAUNCHING_SILENT_INSTALL'     => 'Dabar diegiama „Sugar“. Tai gali trukti iki kelių minučių.',
	'LBL_LANG_UPLOAD'					=> 'Nusiųsti kalbų paketą',
	'LBL_LICENSE_ACCEPTANCE'			=> 'Licencijos patvirtinimas',
    'LBL_LICENSE_CHECKING'              => 'Tikrinamas sistemos suderinamumas.',
    'LBL_LICENSE_CHKENV_HEADER'         => 'Tikrinama aplinka',
    'LBL_LICENSE_CHKDB_HEADER'          => 'Tikrinama DB, FTS prisijungimo informacija.',
    'LBL_LICENSE_CHECK_PASSED'          => 'Sistema suderinamumo tikrinimą išlaikė.',
    'LBL_LICENSE_REDIRECT'              => 'Nukreipiama į',
	'LBL_LICENSE_DIRECTIONS'			=> 'Jei turite licenciją, įveskite jos informaciją į žemiau esančius laukus.',
	'LBL_LICENSE_DOWNLOAD_KEY'			=> 'Įveskite atsisiuntimo raktą',
	'LBL_LICENSE_EXPIRY'				=> 'Galiojimo data',
	'LBL_LICENSE_I_ACCEPT'				=> 'Sutinku',
	'LBL_LICENSE_NUM_USERS'				=> 'Vartotojų skaičius',
	'LBL_LICENSE_PRINTABLE'				=> ' Spaudinio rodinys ',
    'LBL_PRINT_SUMM'                    => 'Spausdinti santrauką',
	'LBL_LICENSE_TITLE_2'				=> '„SugarCRM“ licencija',
	'LBL_LICENSE_TITLE'					=> 'Licencijos informacija',
	'LBL_LICENSE_USERS'					=> 'Licencijuoti vartotojai',

	'LBL_LOCALE_CURRENCY'				=> 'Valiutos parametrai',
	'LBL_LOCALE_CURR_DEFAULT'			=> 'Numatytoji valiuta',
	'LBL_LOCALE_CURR_SYMBOL'			=> 'Valiutos simbolis',
	'LBL_LOCALE_CURR_ISO'				=> 'Valiutos kodas (ISO 4217)',
	'LBL_LOCALE_CURR_1000S'				=> 'Tūkstančių skyriklis',
	'LBL_LOCALE_CURR_DECIMAL'			=> 'Dešimtainis skyriklis',
	'LBL_LOCALE_CURR_EXAMPLE'			=> 'Pavyzdys',
	'LBL_LOCALE_CURR_SIG_DIGITS'		=> 'Reikšminiai skaitmenys',
	'LBL_LOCALE_DATEF'					=> 'Numatytasis datos formatas',
	'LBL_LOCALE_DESC'					=> 'Nurodyti lokalės parametrai atsisipindės visame „Sugar“ egzemplioriuje.',
	'LBL_LOCALE_EXPORT'					=> 'Simbolių rinkinys, skirtas importavimui / eksportavimui<br> <i>(el. paštui, .csv, „vCard“, PDF, duomenų importavimui)</i>',
	'LBL_LOCALE_EXPORT_DELIMITER'		=> 'Eksportavimo (.csv) skyriklis',
	'LBL_LOCALE_EXPORT_TITLE'			=> 'Importavimo /eksportavimo parametrai',
	'LBL_LOCALE_LANG'					=> 'Numatytoji kalba',
	'LBL_LOCALE_NAMEF'					=> 'Numatytasis pavadinimo formatas',
	'LBL_LOCALE_NAMEF_DESC'				=> 's = pasisveikinimas<br />f = vardas<br />l = pavardė',
	'LBL_LOCALE_NAME_FIRST'				=> 'Jonas',
	'LBL_LOCALE_NAME_LAST'				=> 'Jonaitis',
	'LBL_LOCALE_NAME_SALUTATION'		=> 'Gerb.',
	'LBL_LOCALE_TIMEF'					=> 'Numatytasis laiko formatas',
	'LBL_LOCALE_TITLE'					=> 'Lokalės parametrai',
    'LBL_CUSTOMIZE_LOCALE'              => 'Tinkinti lokalės parametrus',
	'LBL_LOCALE_UI'						=> 'Vartotojo sąsaja',

	'LBL_ML_ACTION'						=> 'Veiksmas',
	'LBL_ML_DESCRIPTION'				=> 'Aprašas',
	'LBL_ML_INSTALLED'					=> 'Įdiegimo data',
	'LBL_ML_NAME'						=> 'Pavadinimas',
	'LBL_ML_PUBLISHED'					=> 'Publikavimo data',
	'LBL_ML_TYPE'						=> 'Tipas',
	'LBL_ML_UNINSTALLABLE'				=> 'Neišdiegiamasis',
	'LBL_ML_VERSION'					=> 'Versija',
	'LBL_MSSQL'							=> '„SQL Server“',
	'LBL_MSSQL_SQLSRV'				    => '„SQL Server“ („Microsoft SQL Server“ tvarkyklė, skirta PHP)',
	'LBL_MYSQL'							=> '„MySQL“',
    'LBL_MYSQLI'						=> '„MySQL“ (mysqli plėtinys)',
	'LBL_IBM_DB2'						=> 'IBM DB2',
	'LBL_NEXT'							=> 'Pirmyn',
	'LBL_NO'							=> 'Ne',
    'LBL_ORACLE'						=> '„Oracle“',
	'LBL_PERFORM_ADMIN_PASSWORD'		=> 'Nustatomas svetainės administratoriaus slaptažodis',
	'LBL_PERFORM_AUDIT_TABLE'			=> 'audito lentelė /',
	'LBL_PERFORM_CONFIG_PHP'			=> 'Kuriamas „Sugar“ konfigūracijos failas',
	'LBL_PERFORM_CREATE_DB_1'			=> '<b>Kuriama duomenų bazė</b>',
	'LBL_PERFORM_CREATE_DB_2'			=> ' <b>:</b> ',
	'LBL_PERFORM_CREATE_DB_USER'		=> 'Kuriamas duomenų bazės vartotojo vardas ir slaptažodis...',
	'LBL_PERFORM_CREATE_DEFAULT'		=> 'Kuriami numatytieji „Sugar“ duomenys',
	'LBL_PERFORM_CREATE_LOCALHOST'		=> 'Kuriamas vietinio pagrindinio kompiuterio duomenų bazės vartotojo vardas ir slaptažodis...',
	'LBL_PERFORM_CREATE_RELATIONSHIPS'	=> 'Kuriamos „Sugar“ ryšių lentelės',
	'LBL_PERFORM_CREATING'				=> 'kuriama /',
	'LBL_PERFORM_DEFAULT_REPORTS'		=> 'Kuriamos numatytosios ataskaitos',
	'LBL_PERFORM_DEFAULT_SCHEDULER'		=> 'Kuriamos numatytosios planuoklės užduotys',
	'LBL_PERFORM_DEFAULT_SETTINGS'		=> 'Įterpiami numatytieji parametrai',
	'LBL_PERFORM_DEFAULT_USERS'			=> 'Kuriami numatytieji vartotojai',
	'LBL_PERFORM_DEMO_DATA'				=> 'Automatiškai įvesti demonstracinius duomenis į duomenų bazės lenteles (tai gali šiek tiek užtrukti)',
	'LBL_PERFORM_DONE'					=> 'atlikta <br>',
	'LBL_PERFORM_DROPPING'				=> 'šalinama / ',
	'LBL_PERFORM_FINISH'				=> 'Baigti',
	'LBL_PERFORM_LICENSE_SETTINGS'		=> 'Atnaujinama licencijos informacija',
	'LBL_PERFORM_OUTRO_1'				=> '„Sugar“ sąranka ',
	'LBL_PERFORM_OUTRO_2'				=> ' yra užbaigta!',
	'LBL_PERFORM_OUTRO_3'				=> 'Trukmė iš viso: ',
	'LBL_PERFORM_OUTRO_4'				=> 'sekundžių.',
	'LBL_PERFORM_OUTRO_5'				=> 'Apytiksliai panaudota atminties: ',
	'LBL_PERFORM_OUTRO_6'				=> 'baitų.',
	'LBL_PERFORM_OUTRO_7'				=> 'Jūsų sistema yra įdiegta ir sukonfigūruota naudoti.',
	'LBL_PERFORM_REL_META'				=> 'ryšio metaduomenys ... ',
	'LBL_PERFORM_SUCCESS'				=> 'Sėkmingai atlikta!',
	'LBL_PERFORM_TABLES'				=> 'Kuriamos „Sugar“ programos lentelės, audito lentelės ir ryšio metaduomenys',
	'LBL_PERFORM_TITLE'					=> 'Atlikti sąranką',
	'LBL_PRINT'							=> 'Spausdinti',
	'LBL_REG_CONF_1'					=> 'Jei norite iš „SugarCRM“ gauti produktų skelbimus, mokymų naujienas, specialius pasiūlymus ir specialius kvietimus į renginius, užpildykite žemiau pateiktą trumpą formą. Čia surinktos informacijos mes neparduodame, nenuomojame, ja nesidaliname ir niekaip kitaip jos neplatiname trečiosioms šalims.',
	'LBL_REG_CONF_2'					=> 'Jūsų vardas ir el. pašto adresas yra vieninintelė informaciją, kurią registruojantis privaloma įvesti į laukus. Visi kiti laukai nėra privalomi, tačiau naudingi. Čia surinktos informacijos mes neparduodame, nenuomojame, ja nesidaliname ir niekaip kitaip jos neplatiname trečiosioms šalims.',
	'LBL_REG_CONF_3'					=> 'Ačiū, kad prisiregistravote. Spustelėkite mygtuką „Baigti“, kad prisijungtumėte prie „SugarCRM“. Pirmą kartą turite prisijungti naudodami administratoriaus vartotojo vardą ir slaptažodį, įvestą 2 žingsnyje.',
	'LBL_REG_TITLE'						=> 'Registracija',
    'LBL_REG_NO_THANKS'                 => 'Ne, ačiū',
    'LBL_REG_SKIP_THIS_STEP'            => 'Praleisti šį žingsnį',
	'LBL_REQUIRED'						=> '* Būtinas laukas',

    'LBL_SITECFG_ADMIN_Name'            => '„Sugar“ programos administratoriaus vartotojo vardas',
	'LBL_SITECFG_ADMIN_PASS_2'			=> 'Dar kartą įveskite „Sugar“ administratoriaus vartotojo slaptažodį',
	'LBL_SITECFG_ADMIN_PASS_WARN'		=> 'Perspėjimas: šiuo slaptažodžiu bus pakeistas visų ankstesnių diegimų administratoriaus slaptažodis.',
	'LBL_SITECFG_ADMIN_PASS'			=> '„Sugar“ administratoriaus slaptažodis',
	'LBL_SITECFG_APP_ID'				=> 'Taikomosios programos ID',
	'LBL_SITECFG_CUSTOM_ID_DIRECTIONS'	=> 'Jei pažymėta, turite pateikti taikomosios programos ID, kuris perrašys automatiškai sugeneruotą ID. ID užtikrina, kad „Sugar“ egzemplioriaus seansai nebus naudojami kituose egzemplioriuose. Jei turite įdiegtus kelis „Sugar“, visi jie bendrai naudotis tuo pačiu taikomosios programos ID.',
	'LBL_SITECFG_CUSTOM_ID'				=> 'Pateikite savo taikomosios programos ID',
	'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS'	=> 'Jei pasirinkta, turite nurodyti katalogą, kuris pakeis numatytąjį „Sugar“ žurnalo katalogą. Priklausomai nuo žurnalo failo vietos, prieiga prie jo per naršyklę bus apribota, nukreipiant per .htaccess.',
	'LBL_SITECFG_CUSTOM_LOG'			=> 'Naudoti pasirinktinį žurnalo katalogą',
	'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS'	=> 'Jei pasirinkta, turite nurodyti saugų aplanką, kuriama bus laikoma „Sugar“ seanso informacija. Tai leidžia išvengti seanso duomenų pažeidžiamumo, atsirandančio laikant duomenis bendro naudojimo serveriuose.',
	'LBL_SITECFG_CUSTOM_SESSION'		=> 'Naudoti pasirinktinį „Sugar“ seanso katalogą',
	'LBL_SITECFG_DIRECTIONS'			=> 'Žemiau įveskite konfigūracijos informaciją. Jei abejojate, ką įrašyti į laukus, rekomenduojame naudoti numatytuosius parametrus.',
	'LBL_SITECFG_FIX_ERRORS'			=> '<b>Prieš tęsdami ištaisykite šias klaidas:</b>',
	'LBL_SITECFG_LOG_DIR'				=> 'Žurnalo katalogas',
	'LBL_SITECFG_SESSION_PATH'			=> 'Seanso katalogo kelias<br>(turi būti rašomasis)',
	'LBL_SITECFG_SITE_SECURITY'			=> 'Pasirinkite saugumo parinktis',
	'LBL_SITECFG_SUGAR_UP_DIRECTIONS'	=> 'Jei pasirinkta, sistema periodiškai tikrins, ar yra atnaujintų programos versijų.',
	'LBL_SITECFG_SUGAR_UP'				=> 'Automatiškai tikrinti, ar yra naujinimų?',
	'LBL_SITECFG_SUGAR_UPDATES'			=> '„Sugar naujinimų konfigūracija',
	'LBL_SITECFG_TITLE'					=> 'Svetainės konfigūracija',
    'LBL_SITECFG_TITLE2'                => 'Identifikuoti administravimo vartotoją',
    'LBL_SITECFG_SECURITY_TITLE'        => 'Svetainės saugumas',
	'LBL_SITECFG_URL'					=> '„Sugar“ egzemplioriaus URL',
	'LBL_SITECFG_USE_DEFAULTS'			=> 'Naudoti numatytuosius parametrus?',
	'LBL_SITECFG_ANONSTATS'             => 'Siųsti anoniminę naudojimo statistiką?',
	'LBL_SITECFG_ANONSTATS_DIRECTIONS'  => 'Jei pasirinkta, „Sugar“ automatiškai siųs į „SugarCRM Inc.“ <b>anoniminę</b> statistiką apie jūsų įdiegtą programą kas kartą, kai sistema tikrins, ar yra naujų versijų. Ši informacija padės mums geriau suprasti, kaip programa naudojama, ir leis tobulinti produktą.',
    'LBL_SITECFG_URL_MSG'               => 'Įveskite URL, kuris bus naudojamas prieigai prie įdiegto „Sugar“ egzemplioriaus. Šis URL bus naudojamas ir kaip „Sugar“ programos puslapių URL pagrindas. Į URL turi būti įtrauktas žiniatinklio serverio ar kompiuterio vardas ar IP adresas.',
    'LBL_SITECFG_SYS_NAME_MSG'          => 'Įveskite sistemos pavadinimą. Vartotojams lankantis „Sugar“ programoje, šis sistemos pavadinimas bus matomas naršyklės pavadinimo juostoje.',
    'LBL_SITECFG_PASSWORD_MSG'          => 'Įdiegę „Sugar“ egzempliorių, turėsite prie jo prisijungti naudodami administratoriaus vartotojo vardą (numatytasis vardas yra „admin“). Įveskite šio administratoriaus vartotojo slaptažodį. Po pradinio prisijungimo šį slaptažodį galima pakeisti. Galite naudoti ir kitą administratoriaus vartotojo vardą, ne vien numatytąjį.',
    'LBL_SITECFG_COLLATION_MSG'         => 'Pasirinkite sistemos rikiavimo (rūšiavimo) parametrus. Šie parametrai sukurs lenteles konkrečia, jūsų naudojama kalba. Tuo atveju, jei jūsų kalbai specialiųjų parametrų nereikia, naudokite numatytąją reikšmę.',
    'LBL_SPRITE_SUPPORT'                => '„Sprite“ palaikymas',
	'LBL_SYSTEM_CREDS'                  => 'Sistemos prisijungimo informacija',
    'LBL_SYSTEM_ENV'                    => 'Sistemos aplinka',
	'LBL_START'							=> 'Pradžia',
    'LBL_SHOW_PASS'                     => 'Rodyti slaptažodžius',
    'LBL_HIDE_PASS'                     => 'Slėpti slaptažodžius',
    'LBL_HIDDEN'                        => '<i>(paslėpti)</i>',
//	'LBL_NO_THANKS'						=> 'Continue to installer',
	'LBL_CHOOSE_LANG'					=> '<b>Pasirinkite kalbą</b>',
	'LBL_STEP'							=> 'Žingsnis',
	'LBL_TITLE_WELCOME'					=> 'Sveiki atvykę į „SugarCRM“ ',
	'LBL_WELCOME_1'						=> 'Diegimo programa sukuria „SugarCRM“ duomenų bazės lentelės ir nustato konfigūracijos kintamuosius. Visas procesas turėtų trukti apie dešimt minučių.',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY'            => 'Ar esate pasirengę diegti?',
    'REQUIRED_SYS_COMP' => 'Reikalingi sistemos komponentai',
    'REQUIRED_SYS_COMP_MSG' =>
                    'Prieš pradėdami įsitikinkite, kad turite šių sistemos komponentų palaikomas versijas:<br>
<ul>
<li> Duomenų bazės / duomenų bazės valdymo sistema (pvz.: „MySQL“, „SQL Server“, „Oracle“, DB2)</li>
<li> Žiniatinklio serveris („Apache“, IIS)</li>
<li> „Elasticsearch“</li>
</ul>
Su diegiama „Sugar“ versija suderinamus sistemos komponentus žr. suderinamumo matricoje, pateiktoje leidimo pastabose.<br>',
    'REQUIRED_SYS_CHK' => 'Pradinis sistemos tikrinimas',
    'REQUIRED_SYS_CHK_MSG' =>
                    'Kai pradėsite diegimo procesą, sistemos patikrinimas bus atliekamas serveryje, kuriame yra Sugar failai. <br />                      Tikrinama ar sistema sistema sukonfigūruota ir turi visus reikiamus komponentus<br />                      sėkmingam diegimui. <br><br><br />                      Sistema tikrins:<br><br />                      <ul><br />                      <li><b>PHP versiją</b> &#8211; turi būti suderinama<br />                      su programa</li><br />                                        <li><b>Sesijos kintamieji</b> &#8211; turi veikti tinkamai</li><br />                                            <li> <b>MB eilutės</b> &#8211; turi būti įjungtos php.ini faile</li><br /><br />                      <li> <b>Duomenų bazės palaikymas</b> &#8211; turi būti „MySQL“, „SQL<br />                      Server“ arba „Oracle“</li><br /><br />                      <li> <b>Config.php</b> &#8211; failas turi egzistuoti ir<br />                                  turėti įrašymo teises</li><br />					  <li>„Sugar“ failai, kurie turi turėti įrašymo teises:<ul><li><b>/custom</li><br /><li>/cache</li><br /><li>/modules</b></li></ul></li></ul><br />                                  Jei patikrinimas nepavyksta, negalėsite tęsti diegimo. Bus rodomas klaidos pranešimas, paaiškindamas, kodėl jūsų sistema<br />                                  neatitiko reikalavimų.<br />                                  Po neatitikimų ištaisymų galėsite paleisti sistemos<br />                                  patikrinimą dar kartą ir tęsti diegimą.<br>',
    'REQUIRED_INSTALLTYPE' => 'Standartinis arba pasirinktinis diegimas',
    'REQUIRED_INSTALLTYPE_MSG' =>
                    "Atlikę sistemos patikrinimą, galite pasirinkti arba standartinį arba pasirinktinį diegimą.<br><br>
Nesvarbu, ar pasirinksite <b>Standartinį</b>, ar <b>Pasirinktinį</b> diegimą, turite žinoti šią informaciją:<br>
<ul>
<li> <b>Duomenų bazės tipą</b> Tos  duomenų bazės, kurioje bus laikomi „Sugar“ duomenys <ul><li>Suderinamus duomenų bazių tipus: „MySQL“, „MS SQL Server“, „Oracle“, DB2.<br><br></li></ul></li>
<li> <b>Žiniatinklio serverio pavadinimą</b> arba to kompiuterio (pagrindinio kompiuterio) pavadinimą, kuriame yra duomenų bazė
<ul><li>Tai gali būti <i>vietinis pagrindinis kompiuteris</i>, jei duomenų bazė yra jūsų vietiniame kompiuteryje arba tame pačiame žiniatinklio serveryje ar kompiuteryje, kaip ir „Sugar“ failai.<br><br></li></ul></li>
<li><b>Duomenų bazės pavadinimas</b> Pavadinimas tos duomenų bazės, kurioje norėtumėte laikyti „Sugar“ duomenis</li>
<ul>
<li> Gali būti, kad jau turite egzistuojančią duomenų bazę, kurią norėtumėte naudoti. Jei nurodysite egzistuojančios duomenų bazės pavadinimą, toje duomenų bazėje esančios lentelės bus pašalintos diegimo metu, apibrėžus „Sugar“ duomenų bazės schemą.</li>
<li> Jei duomenų bazės dar neturite, jūsų pateiktu pavadinimu bus pavadinta nauja duomenų bazė, diegimo metu sukurta šiam programos egzemplioriui.<br><br></li>
</ul>
<li><b>Duomenų bazės administratoriaus vartotojo vardas ir slaptažodis</b> <ul><li>Duomenų bazės administratorius turi turėti lentelių bei vartotojų kūrimo ir rašymo į duomenų bazę teises.</li><li>Šios informacijos gali tekti prašyti duomenų bazės administratoriaus, jei duomenų bazė yra ne jūsų vietiniame kompiuteryje ir (arba) jei nesate tos duomenų bazės administratorius.<br><br></ul></li></li>
<li> <b>„Sugar“ duomenų bazės vartotojo vardas ir slaptažodis</b>
</li>
<ul>
<li> Vartotojas gali būti duomenų bazės administratorius arba galite pateikti kitą egzistuojančios duomenų bazės vartotojo vardą. </li>
<li> Jei šiam tikslui norite sukurti naują duomenų bazės vartotoją, tai naują vartotojo vardą ir slaptažodį galėsite pateikti diegimo proceso metu,
tuomet diegimo metu tas naujas vartotojas ir bus sukurtas. </li>
</ul>
<li> <b>„Elasticsearch“ pagrindinis kompiuteris ir prievadas</b>
</li>
<ul>
<li> „Elasticsearch“ pagrindinis kompiuteris – tai pagrindinis kompiuteris, kuriame veikia paieškos variklis. Pagal numatytąjį parametrą tai yra vietinis pagrindinis kompiuteris, tačiau su sąlyga, kad paieškos variklis veikia tame pačiame serveryje, kaip ir „Sugar“.</li>
<li> „Elasticsearch“ prievadas – tai to prievado numeris, per kurį „Sugar“ jungiasi prie paieškos variklio. Pagal numatytąjį parametrą, šis numeris yra 9200, t. y. yra „elasticsearch“ numatytasis parametras. </li>
</ul>
</ul><p>

 <b>Pasirinktinės</b> sąrankos atveju gali prireikti dar ir šios informacijos:<br>
<ul>
<li> <b>URL, suteiksiantis prieigą prie jau įdiegto</b> „Sugar“ egzemplioriaus.
Šiame URL turi būti žiniatinklio serverio ar kompiuterio pavadinimas arba IP adresas.<br><br></li>
<li> [Optional] <b>Seanso katalogo kelias</b> Jei „Sugar“ informaciją norite laikyti pasirinktiniame seanso kataloge, kad išvengtumėte seanso duomenų pažeidžiamumo, atsirandančio laikant duomenis bendro naudojimo serveriuose.<br><br></li>
<li> [Optional] <b>Pasirinktinio žurnalo katalogo kelias</b> Jei norite perrašyti numatytąjį „Sugar“ žurnalo katalogą.<br><br></li>
<li> [Optional] <b>Taikomosios programos ID</b> Jei norite perrašyti automatiškai sugeneruotą ID; ID užtikrina, kad vieno „Sugar“ egzemplioriaus seansai nebus naudojami kituose egzemplioriuose.<br><br></li>
<li><b>Simbolių rinkinys</b> Dažniausiai naudojamas jūsų lokalės simbolių rinkinys.<br><br></li></ul>
Išsamesnės informacijos žr. diegimo vadove.                                ",
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Prieš tęsdami diegimą, perskaitykite toliau pateiktą svarbią informaciją. Ši informacija jums padės nustatyti, ar šiuo metu esate pasirengę diegti programą.',


	'LBL_WELCOME_2'						=> 'Diegimo informaciją rasite apsilankę <a href="http://www.sugarcrm.com/crm/installation" target="_blank">Sugar Wiki</a>. <BR><BR> Jei diegiant reikia pagalbos, susisiekite su „SugarCRM“ palaikymo inžinieriumi, prisijungdami prie <a target="_blank" href="http://support.sugarcrm.com">„SugarCRM“ palaikymo portalas</a>, ir pateikite palaikymo užklausą.',
	'LBL_WELCOME_CHOOSE_LANGUAGE'		=> '<b>Pasirinkite kalbą</b>',
	'LBL_WELCOME_SETUP_WIZARD'			=> 'Sąrankos vedlys',
	'LBL_WELCOME_TITLE_WELCOME'			=> 'Sveiki atvykę į „SugarCRM“ ',
	'LBL_WELCOME_TITLE'					=> '„SugarCRM“ sąrankos vedlys',
	'LBL_WIZARD_TITLE'					=> '„Sugar“ sąrankos vedlys: ',
	'LBL_YES'							=> 'Taip',
    'LBL_YES_MULTI'                     => 'Taip – daugiabaitė koduotė',
	// OOTB Scheduler Job Names:
	'LBL_OOTB_WORKFLOW'		=> 'Apdoroti darbo eigos užduotis',
	'LBL_OOTB_REPORTS'		=> 'Vykdyti suplanuotas ataskaitų generavimo užduotis',
	'LBL_OOTB_IE'			=> 'Tikrinti gaunamo pašto dėžutes',
	'LBL_OOTB_BOUNCE'		=> 'Vykdyti naktinį nepristatytų el. laiškų kampanijų apdorojimą',
    'LBL_OOTB_CAMPAIGN'		=> 'Vykdyti naktines masines el. laiškų kampanijas',
	'LBL_OOTB_PRUNE'		=> 'Sumažinti duomenų bazę kiekvieno mėnesio 1 dieną',
    'LBL_OOTB_TRACKER'		=> 'Sumažinti sekimo priemonės lenteles',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Paleisti el. pašto priminimų pranešimus',
    'LBL_UPDATE_TRACKER_SESSIONS' => 'Atnaujinti tracker_sessions lentelę',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Išvalyti užduočių eilę',


    'LBL_FTS_TABLE_TITLE'     => 'Nurodykite viso teksto paieškos parametrus',
    'LBL_FTS_HOST'     => 'Pagrindinis kompiuteris',
    'LBL_FTS_PORT'     => 'Prievadas',
    'LBL_FTS_TYPE'     => 'Paieškos variklio tipas',
    'LBL_FTS_HELP'      => 'Norėdami įjungti turinio teksto paiešką, įveskite to pagrindinio kompiuterio vardą ir prievadą, kuriame yra paieškos variklis. „Sugar“ programoje yra įtaisytasis „elasticSearch “ variklio palaikymas.',
    'LBL_FTS_REQUIRED'    => 'Reikalinga „Elastic Search“.',
    'LBL_FTS_CONN_ERROR'    => 'Nepavyksta prisijungti prie viso teksto paieškos serverio. Patikrinkite parametrus.',
    'LBL_FTS_NO_VERSION_AVAILABLE'    => 'Nėra jokios viso teksto paieškos serverio versijos, patikrinkite parametrus.',
    'LBL_FTS_UNSUPPORTED_VERSION'    => 'Aptikta nepalaikoma „Elastic“ paieškos versija. Naudokite versijas: %s',

    'LBL_PATCHES_TITLE'     => 'Įdiegti naujausias pataisas',
    'LBL_MODULE_TITLE'      => 'Įdiegti kalbų paketus',
    'LBL_PATCH_1'           => 'Jei šį žingsnį norite praleisti, spustelėkite „Pirmyn“.',
    'LBL_PATCH_TITLE'       => 'Sistemos pataisa',
    'LBL_PATCH_READY'       => 'Parengtos diegti šios pataisos:',
	'LBL_SESSION_ERR_DESCRIPTION'		=> "Jungdamasi prie šio žiniatinklio serverio, „SugarCRM“ svarbios informacijos laikymas priklauso nuo PHP seansų. Jūsų įdiegtame PHP seanso informacija sukonfigūruota netinkamai.
<br><br>Dažniausia konfigūracijos klaida yra ta, kad <b>'session.save_path'</b> katalogas nurodo neteisingą katalogą. <br>
<br> Ištaisykite <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP konfigūraciją</a>  faile php.ini, pateiktame žemiau.",
	'LBL_SESSION_ERR_TITLE'				=> 'PHP seansų konfigūravimo klaida',
	'LBL_SYSTEM_NAME'=>'Sistemos pavadinimas',
    'LBL_COLLATION' => 'Rikiavimo parametrai',
	'LBL_REQUIRED_SYSTEM_NAME'=>'Nurodykite „Sugar“ egzemplioriui sistemos pavadinimą.',
	'LBL_PATCH_UPLOAD' => 'Pasirinkite pataisos failą iš savo kompiuterio',
	'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP atgalinio suderinamumo režimas yra įjungtas. Prieš tęsdami, nustatykite zend.ze1_compatibility_mode išjungimo reikšmę.',

    'meeting_notification_email' => array(
        'name' => 'Pranešimų apie susitikimus el. laiškai',
        'subject' => '„SugarCRM“ susitikimas – $event_name ',
        'description' => 'Šis šablonas naudojamas, kai sistema siunčia vartotojui pranešimus apie susitikimą.',
        'body' => '<div>
	<p>Kam: $assigned_user</p>

	<p>$assigned_by_user pakvietė jus dalyvauti susitikime</p>

	<p>Pavadinimas: $event_name<br/>
	Pradžios data: $start_date<br/>
	Pabaigos data: $end_date</p>

	<p>Aprašas: $description</p>

	<p>Patvirtinti šį susitikimą:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Neapsisprendęs dėl šio susitikimo patvirtinimo:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Atmesti šį susitikimą::<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Kam: $assigned_user

$assigned_by_user pakvietė jus dalyvauti susitikime

Pavadinimas: $event_name
Pradžios data: $start_date
Pabaigos data: $end_date

Aprašas: $description

Priimti šį susitikimą:
<$accept_link>

Neapsisprendęs dėl šio susitikimo priėmimo
<$tentative_link>

Atmesti šį susitikimą
<$decline_link>',
    ),

    'call_notification_email' => array(
        'name' => 'Pranešimų apie skambučius el. laiškai',
        'subject' => '„SugarCRM“ skambutis – $event_name ',
        'description' => 'Šis šablonas naudojamas, kai sistema siunčia vartotojui pranešimus apie skambutį.',
        'body' => '<div>
	<p>Kam: $assigned_user</p>

	<p>$assigned_by_user pakvietė jus dalyvauti skambutyje</p>

	<p>Pavadinimas: $event_name<br/>
	Pradžios data: $start_date<br/>
	Trukmė: $hoursh, $minutesm</p>

	<p>Aprašas: $description</p>

	<p>Patvirtinti šį skambutį:<br/>
	<<a href="$accept_link">$accept_link</a>></p>
	<p>Neapsisprendęs dėl šio skambučio patvirtinimo:<br/>
	<<a href="$tentative_link">$tentative_link</a>></p>
	<p>Atmesti šį skambutį:<br/>
	<<a href="$decline_link">$decline_link</a>></p>
</div>',
        'txt_body' =>
            'Kam: $assigned_user

$assigned_by_user pakvietė jus dalyvauti skambutyje

Pavadinimas: $event_name
Pradžios data: $start_date
Trukmė: $hoursh, $minutesm

Aprašas: $description

Priimti šį skambutį:
<$accept_link>

Neapsisprendęs dėl šio skambučio priėmimo
<$tentative_link>

Atmesti šį skambutį
<$decline_link>',
    ),

    'assigned_notification_email' => array(
        'name' => 'Pranešimo apie paskyrimą el. laiškai',
        'subject' => '„SugarCRM“ – priskirtas $module_name ',
        'description' => 'Šis šablonas naudojamas, kai sistema siunčia vartotojui priskirtą užduotį.',
        'body' => '<div>
<p>$assigned_by_user priskyrė&nbsp;$module_name vartotojui&nbsp;$assigned_user.</p>

<p>Galite peržiūrėti&nbsp;$module_name spustelėję nuorodą:<br/>
	<<a href="$module_link">$module_link</a>></p>
</div>',
        'txt_body' =>
            '$assigned_by_user priskyrė $module_name vartotojui $assigned_user.

Galite peržiūrėti $module_name spustelėję nuorodą:
<$module_link>',
    ),

    'scheduled_report_email' => array(
        'name' => 'Suplanuotų ataskaitų el. laiškai',
        'subject' => 'Suplanuota ataskaita: $report_name $report_time',
        'description' => 'Šis šablonas naudojamas, kai sistema siunčia vartotojui suplanuotą ataskaitą.',
        'body' => '<div>
<p>Sveiki, $assigned_user!</p>
<p>Prisegta suplanuota ir automatiškai sukurta ataskaita.</p>
<p>Ataskaitos pavadinimas: $report_name</p>
<p>Ataskaitos vykdymo data ir laikas: $report_time</p>
</div>',
        'txt_body' =>
            'Sveiki, $assigned_user!

Prisegta suplanuota ir automatiškai sukurta ataskaita.

Ataskaitos pavadinimas: $report_name

Ataskaitos vykdymo data ir laikas: $report_time',
    ),

    'comment_log_mention_email' => [
        'name' => 'Pranešimas el. laišku apie sistemos komentarų žurnalą',
        'subject' => '„SugarCRM“ – $initiator_full_name jus paminėjo modulyje $singular_module_name',
        'description' => 'Šis šablonas naudojamas siųsti vartotojams pranešimus el. laiškais, kai jie pažymimi komentarų žurnalo skiltyje.',
        'body' =>
            '<div>
                <p>Jus paminėjo šio įrašo komentarų žurnale: <a href="$record_url">$record_name</a></p>
                <p>Norėdami peržiūrėti komentarą, prisijunkite prie „Sugar“.</p>
            </div>',
        'txt_body' =>
'Jus paminėjo šio įrašo komentarų žurnale: $record_name
            Norėdami peržiūrėti komentarą, prisijunkite prie „Sugar“.',
    ],

    'advanced_password_new_account_email' => array(
        'subject' => 'Naujos paskyros informacija',
        'description' => 'Šis šablonas naudojamas, kai sistemos administratorius siunčia vartotojui naują slaptažodį.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Štai jūsų paskyros vartotojo vardas ir laikinas slaptažodis:</p><p>Vartotojo vardas: $contact_user_user_name </p><p>Slaptažodis: $contact_user_user_hash </p><br><p><a href="$config_site_url">$config_site_url</a></p><br><p>Prisiregistravus šiuo nurodytu slaptažodžiu, gali reikėti tą slaptažodį nustatyti iš naujo, įvedant savo norimą slaptažodį.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Štai jūsų paskyros vartotojo vardas ir laikinas slaptažodis:
Vartotojo vardas: $contact_user_user_name
Slaptažodis: $contact_user_user_hash

$config_site_url

Prisiregistravus šiuo nurodytu slaptažodžiu, gali reikėti tą slaptažodį nustatyti iš naujo, įvedant savo norimą slaptažodį.',
        'name' => 'Sistemos sugeneruotas slaptažodis el. paštu',
        ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Iš naujo nustatyti paskyros slaptažodį',
        'description' => "Šis šablonas bus naudojamas siunčiant vartotojui nuorodą, kurią spustelėjęs, vartotojas galės iš naujo nustatyti savo paskyros slaptažodį.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Neseniai pateikėte $contact_user_pwd_last_changed užklausą, kad galėtumėte iš naujo nustatyti savo paskyros slaptažodį:</p><p> <a href="$contact_user_link_guid">$contact_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
'
Neseniai pateikėte $contact_user_pwd_last_changed užklausą, kad galėtumėte iš naujo nustatyti savo paskyros slaptažodį.

Spustelėkite žemiau pateiktą nuorodą ir galėsite iš naujo nustatyti savo slaptažodį:

$contact_user_link_guid',
        'name' => 'El. paštas pamiršus slaptažodį',
        ),

'portal_forgot_password_email_link' => [
    'name' => 'El. paštas pamiršus portalo slaptažodį',
    'subject' => 'Atkurkite savo paskyros slaptažodį',
    'description' => 'Šis šablonas naudojamas siunčiant vartotojui nuorodą, kurią spustelėjęs jis galės iš naujo nustatyti savo portalo vartotojo paskyros slaptažodį.',
    'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Neseniai paprašėte atkurti jūsų paskyros slaptažodį. </p><p>Norėdami atkurti savo slaptažodį, spustelėkite toliau pateiktą nuorodą:</p><p> <a href="$portal_user_link_guid">$portal_user_link_guid</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
    'txt_body' =>
'
    Neseniai paprašėte atkurti jūsų paskyros slaptažodį.

    Norėdami atkurti savo slaptažodį, spustelėkite toliau pteiktą nuorodą:

    $portal_user_link_guid',
],

    'portal_password_reset_confirmation_email' => [
        'name' => 'Portalo slaptažodžio atkūrimo patvirtinimo el. laiškas',
        'subject' => 'Jūsų paskyros slaptažodis buvo atkurtas',
        'description' => 'Šis šablonas naudojamas siekiant išsiųsti portalo vartotojui patvirtinimą, kad jo paskyros slaptažodis buvo atkurtas.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Šis el. laiškas skirtas patvirtinti, kad jūsų portalo paskyros slaptažodis buvo atkurtas. </p><p>Prisijunkite prie portalo naudodami toliau pateiktą nuorodą:</p><p> <a href="$portal_login_url">$portal_login_url</a> </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
    Šis el. laiškas skirtas pavirtinti, kad jūsų portalo paskyros slaptažodis buvo atkurtas.

    Prisijunkite prie portalo naudodami toliau pateiktą nuorodą:

    $portal_login_url',
    ],
);
