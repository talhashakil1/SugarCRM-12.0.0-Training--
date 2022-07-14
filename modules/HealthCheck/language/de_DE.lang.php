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
    'LBL_MODULE_NAME' => 'Gesundheits-Check',
    'LBL_MODULE_NAME_SINGULAR' => 'Gesundheits-Check',
    'LBL_MODULE_TITLE' => 'Gesundheits-Check',
    'LBL_LOGFILE' => 'Protokolldatei',
    'LBL_BUCKET' => 'Kategorisierung',
    'LBL_FLAG' => 'Markierung',
    'LBL_LOGMETA' => 'Protokoll-Metadaten',
    'LBL_ERROR' => 'Fehler',

    // Failure handling in SugarBPM upgraders
    'LBL_PA_UNSERIALIZE_DATA_FAILURE' => 'Serialisierung der serialisierten Daten konnte nicht aufgehoben werden',
    'LBL_PA_UNSERIALIZE_OBJECT_FAILURE' => 'Serialisierung der serialisierten Daten konnte nicht aufgehoben werden, da sie Verweise zu Objekten oder Klassen enthalten',

    'LBL_SCAN_101_LOG' => '%s hat eine Studio-Vorgeschichte',
    'LBL_SCAN_102_LOG' => '%s hat die folgenden Erweiterungen: %s',
    'LBL_SCAN_103_LOG' => '%s hat benutzerdefinierte vardefs',
    'LBL_SCAN_104_LOG' => '%s hat benutzerdefinierte layoutdefs',
    'LBL_SCAN_105_LOG' => '%s hat benutzerdefinierte viewdefs',

    'LBL_SCAN_201_LOG' => '%s ist kein Standardmodul',

    'LBL_SCAN_301_LOG' => '%s ist als BWC auszuführen',
    'LBL_SCAN_302_LOG' => 'Unbekannte Dateiansichten vorhanden - %s ist kein MB-Modul',
    'LBL_SCAN_303_LOG' => 'Nicht-leere Formulardatei %s - %s ist kein MB-Modul',
    'LBL_SCAN_304_LOG' => 'Unbekannte Dateien: %s%s - %s ist kein MB-Modul',
    'LBL_SCAN_305_LOG' => 'Ungültige vardefs - key %s, name %s in modul %s',
    'LBL_SCAN_306_LOG' => 'Ungültige vardefs - Feld %s in Modul %s hat leeren Wert "module"',
    'LBL_SCAN_307_LOG' => 'Ungültige vardefs - Link %s in Modul %s verweist auf ungültige Beziehung',
    'LBL_SCAN_308_LOG' => 'VarDef HTML-Funktion in %s',
    'LBL_SCAN_309_LOG' => 'Ungültige md5 für %s',
    'LBL_SCAN_310_LOG' => 'Unbekannte Datei %s/%s',
    'LBL_SCAN_311_LOG' => 'VarDef HTML-Funktion %s in $module Modul für Feld-%s',
    'LBL_SCAN_312_LOG' => 'Ungültige vardefs - Feld &#39;name&#39; ist ungültig &#39;%s&#39;, Modul - &#39;%s&#39;',
    'LBL_SCAN_313_LOG' => 'Erweiterung dir %s erkannt - %s ist kein MB-Modul',
    'LBL_SCAN_314_LOG' => "Ungültige vardefs - multienum-Feld '%s' mit Optionsliste '%s' Keys enthalten nicht zulässige Zeichen - '{%s}' im Modul %s",

    'LBL_SCAN_401_LOG' => 'Hersteller-Dateieinbindungen gefunden, bei Dateien, die an den Lieferanten verschoben wurden:'. PHP_EOL .'%s',
    'LBL_SCAN_402_LOG' => 'Ungültiges Modul %s - nicht in der Bean-Liste und nicht im Dateisystem enthalten',
    'LBL_SCAN_403_LOG' => 'Verknüpft mit folgenden Sugar-Dateien:' . PHP_EOL .'%s',
    'LBL_SCAN_520_LOG' => 'Logic Hook after_ui_frame in %s erkannt',
    'LBL_SCAN_521_LOG' => 'Logic Hook after_ui_footer in %s erkannt',
//    'LBL_SCAN_405_LOG' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_LOG' => '%s enthält benutzerdefinierte Ansichten, die nicht unterstützt werden. Diese Dateien werden bei der Aktualisierung in ein Verzeichnis für deaktivierte Dateien verschoben',
    'LBL_SCAN_407_LOG' => '%s enthält benutzerdefinierte Ansichten, die nicht unterstützt werden. Diese Dateien werden bei der Aktualisierung in ein Verzeichnis für deaktivierte Dateien verschoben',
    'LBL_SCAN_408_LOG' => 'Benutzerdefinierte Komponenten von Erstellungsaktionen wurde in %s gefunden. Diese Komponenten werden kopiert und modifiziert, um stattdessen die Erstellungskomponente während des Upgrades zu erweitern',
    'LBL_SCAN_409_LOG' => 'Schlechte Vardefs - "link_file" ist veraltet. Die in "link_class" angegebene Linkklasse muss automatisch ladbar sein.',
    'LBL_SCAN_519_LOG' => 'Erweiterung dir %s erkannt',
    'LBL_SCAN_518_LOG' => 'CustomCode %s in %s, Datei %s gefunden',
    'LBL_SCAN_410_LOG' => 'Max. Felder - mehr als %s Felder (%s) in %s gefunden',
    'LBL_SCAN_522_LOG' => '&#39;get_subpanel_data&#39; mit Wert &#39;function:&#39; in %s gefunden',
    'LBL_SCAN_412_LOG' => 'Fehlerhafter Sub-Panel-Link %s in %s',
    'LBL_SCAN_413_LOG' => 'Unbekannte Widget-Klasse erkannt: %s für %s, Modul %s in Datei %s',
    'LBL_SCAN_414_LOG' => 'Unbekannte Felder werden durch CRYS-36 gehandhabt; hier finden keine weiteren Kontrollen statt',
    'LBL_SCAN_415_LOG' => 'Fehlerhafte Hook-Datei in %s: %s',
    'LBL_SCAN_523_LOG' => 'By-ref Parameter in Hook-Datei- %s Funktion %s',
    'LBL_SCAN_417_LOG' => 'Inkompatibles Modul %s',
    'LBL_SCAN_418_LOG' => 'Sub-Panel mit Link zu nicht existentem Modul gefunden: %s in %s Dateien',
    'LBL_SCAN_419_LOG' => 'Ungültige vardefs - key %s, name %s in modul %s',
    'LBL_SCAN_420_LOG' => 'Ungültige vardefs - Feld %s in Modul %s hat leeren Wert "module"',
    'LBL_SCAN_421_LOG' => 'Ungültige vardefs - Link %s in Modul %s verweist auf ungültige Beziehung',
    'LBL_SCAN_422_LOG' => 'Modul %s hat die Definition eines anderen Moduls %s in Datei %s',
    'LBL_SCAN_525_LOG' => 'VarDef HTML-Funktion in %s',
    'LBL_SCAN_423_LOG' => 'Ungültige vardefs-Subfelder - %s verweist auf ungültiges Subfeld %s. In Modul %s',
    'LBL_SCAN_424_LOG' => 'Inline-HTML gefunden in %s in Zeile %s',
    'LBL_SCAN_425_LOG' => '„echo“ in %s in Zeile %s gefunden',
    'LBL_SCAN_426_LOG' => '„print“ in %s in Zeile %s gefunden',
    'LBL_SCAN_427_LOG' => '„Die/exit“ in %s in Zeile %s gefunden',
    'LBL_SCAN_428_LOG' => '„print_r“ in %s in Zeile %s gefunden',
    'LBL_SCAN_429_LOG' => '„var_dump“ in %s in Zeile %s gefunden',
    'LBL_SCAN_430_LOG' => 'Ausgabepufferung (%s) in %s in Zeile %s gefunden',
    'LBL_SCAN_431_LOG' => 'Benutzerdefinierte Smarty-Vorlage gefunden: "%s"',
    'LBL_SCAN_436_LOG' => 'Benutzerdefinierte PDF-Vorlage gefunden: "%s"',
    'LBL_SCAN_437_LOG' => 'Smarty-Vorlage nicht mit Smarty3-Syntax kompatibel: "%s"',
    'LBL_SCAN_438_LOG' => 'Benutzerdefinierte PDF-Vorlage gefunden, die nicht automatisch in Smarty3-Syntax konvertiert werden kann: "%s"',
    'LBL_SCAN_439_LOG' => 'Vorlage nicht mit Smarty3-Syntax kompatibel, übersprungen: "%s"',
    'LBL_SCAN_451_LOG' => 'AuthN-Code wurde gelöscht, verwenden Sie stattdessen \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Dateien mit gelöschtem Code: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_LOG' => 'Vardef HTML-Funktion %s in %s Modul für Feld %s',
    'LBL_SCAN_432_LOG' => 'Ungültige vardefs - Feld &#39;name&#39; ist ungültig &#39;%s&#39;, Modul - &#39;%s&#39;',
    'LBL_SCAN_526_LOG' => "Ungültige vardefs - multienum-Feld '%s' mit Optionsliste '%s' Keys enthalten nicht zulässige Zeichen - '%s' im Modul %s",
    'LBL_SCAN_527_LOG' => "Tabellennamen in Bean %s entspricht nicht dem Tabellen-Attribut im %s/vardefs.php",
    'LBL_SCAN_528_LOG' => 'Feld %s des %s-Moduls hat falschen display_default Wert',
    'LBL_SCAN_529_LOG' => '%s: %s in Datei %s in Zeile %s',
    'LBL_SCAN_530_LOG' => 'Fehlende angepasste Datei: %s',
    'LBL_SCAN_531_LOG' => 'Veralteter Datenbank-Treiber: %s',
    'LBL_SCAN_532_LOG' => 'Eine Klasse in %s ruft den Konstruktor ihres übergeordneten Lagerelements als %s::%s() auf',
    'LBL_SCAN_533_LOG' => 'Eine Klasse in %s ruft den Konstruktor ihres benutzerdefinierten übergeordneten Elements als %s::%s() auf',
    'LBL_SCAN_534_LOG' => 'NIcht unterstützter Datenbank-Treiber: %s',
    'LBL_SCAN_535_LOG' => 'Unsupported method call: %s() in %s on line %s',
    'LBL_SCAN_536_LOG' => 'Unsupported property access: $%s in %s on line %s',
    'LBL_SCAN_433_LOG' => 'Benutzerdefiniderte Elasticsearch-Dateien gefunden %s',
    'LBL_SCAN_434_LOG' => 'Verwendung von Array-Funktionen in $_SESSION bei Dateien gefunden: %s',
    'LBL_SCAN_435_LOG' => 'Klasse SugarSession wurde aus API entfernt, verwenden Sie stattdessen Sugarcrm\Sugarcrm\Session\SessionStorage. Dateien mit veraltetem Code: ' . PHP_EOL . '%s',
    'LBL_SCAN_550_LOG' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_560_LOG' => 'custom/modules/Quotes/quotes.js Enthält EVTL. Anpassungen, die mit den neuen Angeboten nicht kompatibel sind.',
    'LBL_SCAN_561_LOG' => 'custom/modules/Quotes/EditView.js Enthält EVTL. Anpassungen, die mit den neuen Angeboten nicht kompatibel sind.',
    'LBL_SCAN_562_LOG' => 'Use of removed Sidecar app.view.invokeParent method in %s',
    'LBL_SCAN_570_LOG' => 'Ungültiger Status und Typ für E-Mails: Status=%s, Typ=%s',
    'LBL_SCAN_571_LOG' => 'Veraltete Datei besitzt benutzerdefinierte Anpassungen: %s',
    'LBL_SCAN_572_LOG' => 'Benutzerdefinierte Datei besitzt einen Namenskonflikt: %s',
    'LBL_SCAN_573_LOG' => 'Benutzerdefinierte Hilfe-Datei besitzt einen Namenskonflikt: %s',
    'LBL_SCAN_574_LOG' => 'E-Mails-Unterfenster benutzerdefiniertes Verzeichnis vorhanden: %s',
    'LBL_SCAN_575_LOG' => 'Kontakte-Unterfenster für E-Mails muss geändert werden, um Kontakt-Unterfenster "Archivierte-E-Mails" zu verwenden: %s',
    'LBL_SCAN_576_LOG' => 'Skin-Anpassungen wurden erkannt in: "%s". Letztes Skin-Ergebnis funktioniert möglicherweise nicht erwartungsgemäß, bitte überprüfen Sie Ihre Skin-Anpassungen.',
    'LBL_SCAN_580_LOG' => 'Removed jQuery function(s) detected in: `%s`.',
    'LBL_SCAN_585_LOG' => 'Verbotene Angabe in `%s`: %s erkannt',
    'LBL_SCAN_586_LOG' => 'FontAwesome ist ab Version 11.2 veraltet und wird nicht in 12.0 unterstützt. Verwenden Sie das erkannte FontAwesome in: %s',

    'LBL_SCAN_501_LOG' => 'Fehlende Datei: %s',
    'LBL_SCAN_502_LOG' => 'md5 Nichtübereinstimmung mit %s, erwartet %s',
    'LBL_SCAN_503_LOG' => 'Benutzerdefiniertes Modul mit dem gleichen Namen wie das neue Sugar7 Modul: %s',
    'LBL_SCAN_504_LOG' => 'Feldtyp fehlt in Modul-%s: %s',
    'LBL_SCAN_505_LOG' => 'Typänderung in %s für Feld %s: von %s bis %s',
    'LBL_SCAN_506_LOG' => 'Verwendung von $this in %s',
    'LBL_SCAN_507_LOG' => 'Ungültige vardefs-Subfelder - %s verweist auf ungültiges Subfeld %s. In Modul %s',
    'LBL_SCAN_508_LOG' => 'Inline-HTML gefunden in %s in Zeile %s',
    'LBL_SCAN_509_LOG' => '„echo“ in %s in Zeile %s gefunden',
    'LBL_SCAN_510_LOG' => '„print“ in %s in Zeile %s gefunden',
    'LBL_SCAN_511_LOG' => '„Die/exit“ in %s in Zeile %s gefunden',
    'LBL_SCAN_512_LOG' => '„print_r“ in %s in Zeile %s gefunden',
    'LBL_SCAN_513_LOG' => '„var_dump“ in %s in Zeile %s gefunden',
    'LBL_SCAN_514_LOG' => 'Ausgabepufferung (%s) in %s in Zeile %s gefunden',
    'LBL_SCAN_515_LOG' => 'Skript-Fehler: %s',
    'LBL_SCAN_516_LOG' => 'Auf zuvor entfernte Dateien wird verwiesen in: %s',
    'LBL_SCAN_517_LOG' => 'Inkompatible Integration - %s %s',
    'LBL_SCAN_540_LOG' => 'Inkompatible Integration Daten-Reset - %s %s',
    'LBL_SCAN_541_LOG' => 'Ungültige Serialisierung in SugarBPM - %s ungültige Serialisierung(en) in der Spalte %s der Tabelle %s: %s.',
    'LBL_SCAN_542_LOG' => 'Ungültige Feldnutzung von SugarBPM - %s ungültige(s) Feld(er) in %s verwendet.',
    'LBL_SCAN_545_LOG' => 'SugarBPM, teilweise gesperrte Feldgruppe - Feld %4$s in Gruppe %s in Prozessdefinition %s für das Modul %s gesperrt.',
    'LBL_SCAN_546_LOG' => 'Konfig von benutzerdefinierter Wissensdatenbank TinyMCE',
    'LBL_SCAN_547_LOG' => 'Verwendung der entfernten "ResetLoadFlag"-Signatur in %s',
    'LBL_SCAN_548_LOG' => 'Verwendung der verworfenen "InitButtons"-Methode in %s',
    'LBL_SCAN_549_LOG' => 'Verwendung der entfernten "getField"-Signatur in %s',
    'LBL_SCAN_552_LOG' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_LOG' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_LOG' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_LOG' => 'Die Instanz wurde bereits auf Sugar7 aktualisiert',
    'LBL_SCAN_903_LOG' => 'Nicht unterstützte Upgrader-Version. Bitte installieren Sie das korrekte SugarUpgradeWizardPrereq-Paket',
    'LBL_SCAN_904_LOG' => 'NULL-Werte in Strings moduleList gefunden: Datei: %s, Module: %s',
    'LBL_SCAN_999_LOG' => 'Unbekannter Fehler, nehmen Sie bitte Kontakt zum Support auf',

    'LBL_SCAN_101_TITLE' => '%s hat eine Studio-Vorgeschichte',
    'LBL_SCAN_102_TITLE' => '%s hat die folgenden Erweiterungen: %s',
    'LBL_SCAN_103_TITLE' => '%s hat benutzerdefinierte vardefs',
    'LBL_SCAN_104_TITLE' => '%s hat benutzerdefinierte layoutdefs',
    'LBL_SCAN_105_TITLE' => '%s hat benutzerdefinierte viewdefs',

    'LBL_SCAN_201_TITLE' => '%s ist kein Standardmodul',

    'LBL_SCAN_301_TITLE' => '%s ist als BWC auszuführen',
    'LBL_SCAN_302_TITLE' => 'Unbekannte Dateiansichten vorhanden - %s ist kein MB-Modul',
    'LBL_SCAN_303_TITLE' => 'Nicht-leere Formulardatei %s - %s ist kein MB-Modul',
    'LBL_SCAN_304_TITLE' => 'Unbekannte Dateien: %s%s - %s ist kein MB-Modul',
    'LBL_SCAN_305_TITLE' => 'Ungültige vardefs - key %s, name %s in modul %s',
    'LBL_SCAN_306_TITLE' => 'Ungültige vardefs - Feld %s in Modul %s hat leeren Wert "module"',
    'LBL_SCAN_307_TITLE' => 'Ungültige vardefs - Link %s in Modul %s verweist auf ungültige Beziehung',
    'LBL_SCAN_308_TITLE' => 'VarDef HTML-Funktion in %s',
    'LBL_SCAN_309_TITLE' => 'Ungültige md5 für %s',
    'LBL_SCAN_310_TITLE' => 'Unbekannte Datei %s/%s',
    'LBL_SCAN_311_TITLE' => 'VarDef HTML-Funktion %s in $module Modul für Feld-%s',
    'LBL_SCAN_312_TITLE' => 'Ungültige vardefs - Feld &#39;name&#39; ist ungültig &#39;%s&#39;, Modul - &#39;%s&#39;',
    'LBL_SCAN_313_TITLE' => 'Erweiterung dir %s erkannt - %s ist kein MB-Modul',

    'LBL_SCAN_401_TITLE' => 'Hersteller-Dateieinbindungen gefunden, bei Dateien, die an den Lieferanten verschoben wurden:'. PHP_EOL .'%s',
    'LBL_SCAN_402_TITLE' => 'Ungültiges Modul %s - nicht in der Bean-Liste und nicht im Dateisystem enthalten',
    'LBL_SCAN_403_TITLE' => 'Verknüpft mit folgenden Sugar-Dateien:' . PHP_EOL .'%s',
    'LBL_SCAN_520_TITLE' => 'Logic Hook after_ui_frame in %s erkannt',
    'LBL_SCAN_521_TITLE' => 'Logic Hook after_ui_footer in %s erkannt',
//    'LBL_SCAN_405_TITLE' => 'Incompatible Integration - %s %s',
    'LBL_SCAN_406_TITLE' => '%s enthält benutzerdefinierte Ansichten, die nicht unterstützt werden. Diese Dateien werden bei der Aktualisierung in ein Verzeichnis für deaktivierte Dateien verschoben',
    'LBL_SCAN_407_TITLE' => '%s enthält benutzerdefinierte Ansichten, die nicht unterstützt werden. Diese Dateien werden bei der Aktualisierung in ein Verzeichnis für deaktivierte Dateien verschoben',
    'LBL_SCAN_408_TITLE' => 'Benutzerdefinierte Komponenten von Erstellungsaktionen wurden gefunden, die nicht mehr unterstützt werden.',
    'LBL_SCAN_409_TITLE' => 'Schlechte Vardefs - %s Modul verfügt über ungültige Vardefs für das %s Feld.',
    'LBL_SCAN_519_TITLE' => 'Erweiterung dir %s erkannt',
    'LBL_SCAN_518_TITLE' => 'CustomCode %s in %s, Datei %s gefunden',
    'LBL_SCAN_410_TITLE' => 'Max. Felder - mehr als %s Felder (%s) in %s gefunden',
    'LBL_SCAN_522_TITLE' => '&#39;get_subpanel_data&#39; mit Wert &#39;function:&#39; in %s gefunden',
    'LBL_SCAN_412_TITLE' => 'Fehlerhafter Sub-Panel-Link %s in %s',
    'LBL_SCAN_413_TITLE' => 'Unbekannte Widget-Klasse erkannt: %s für %s, Modul %s in Datei %s',
    'LBL_SCAN_414_TITLE' => 'Unbekannte Felder werden durch CRYS-36 gehandhabt; hier finden keine weiteren Kontrollen statt',
    'LBL_SCAN_415_TITLE' => 'Fehlerhafte Hook-Datei in %s: %s',
    'LBL_SCAN_523_TITLE' => 'By-ref Parameter in Hook-Datei- %s Funktion %s',
    'LBL_SCAN_417_TITLE' => 'Inkompatibles Modul %s',
    'LBL_SCAN_418_TITLE' => 'Sub-Panel mit Link zu nicht existentem Modul gefunden: %s in %s Dateien',
    'LBL_SCAN_419_TITLE' => 'Ungültige vardefs - key %s, name %s in modul %s',
    'LBL_SCAN_420_TITLE' => 'Ungültige vardefs - Feld %s in Modul %s hat leeren Wert "module"',
    'LBL_SCAN_421_TITLE' => 'Ungültige vardefs - Link %s in Modul %s verweist auf ungültige Beziehung',
    'LBL_SCAN_422_TITLE' => 'Modul %s hat die Definition eines anderen Moduls',
    'LBL_SCAN_525_TITLE' => 'VarDef HTML-Funktion in %s',
    'LBL_SCAN_423_TITLE' => 'Ungültige vardefs-Subfelder - %s verweist auf ungültiges Subfeld %s. In Modul %s',
    'LBL_SCAN_424_TITLE' => 'Inline-HTML gefunden in %s in Zeile %s',
    'LBL_SCAN_425_TITLE' => '„echo“ in %s in Zeile %s gefunden',
    'LBL_SCAN_426_TITLE' => '„print“ in %s in Zeile %s gefunden',
    'LBL_SCAN_427_TITLE' => '„Die/exit“ in %s in Zeile %s gefunden',
    'LBL_SCAN_428_TITLE' => '„print_r“ in %s in Zeile %s gefunden',
    'LBL_SCAN_429_TITLE' => '„var_dump“ in %s in Zeile %s gefunden',
    'LBL_SCAN_430_TITLE' => 'Ausgabepufferung (%s) in %s in Zeile %s gefunden',
    'LBL_SCAN_431_TITLE' => 'Benutzerdefinierte Smarty-Vorlage gefunden: "%s"',
    'LBL_SCAN_436_TITLE' => 'Benutzerdefinierte PDF-Vorlage gefunden: "%s"',
    'LBL_SCAN_437_TITLE' => 'Smarty-Vorlage nicht mit Smarty3-Syntax kompatibel: "%s"',
    'LBL_SCAN_438_TITLE' => 'Benutzerdefinierte PDF-Vorlage gefunden, die nicht automatisch in Smarty3-Syntax konvertiert werden kann: "%s"',
    'LBL_SCAN_439_TITLE' => 'Vorlage nicht mit Smarty3-Syntax kompatibel, übersprungen: "%s"',
    'LBL_SCAN_451_TITLE' => 'AuthN-Code wurde gelöscht, verwenden Sie stattdessen \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate. Dateien mit gelöschtem Code: ' . PHP_EOL . '%s',
    'LBL_SCAN_524_TITLE' => 'Vardef HTML-Funktion %s in %s Modul für Feld %s',
    'LBL_SCAN_432_TITLE' => 'Ungültige vardefs - Feld &#39;name&#39; ist ungültig &#39;%s&#39;, Modul - &#39;%s&#39;',
    'LBL_SCAN_433_TITLE' => 'Benutzerdefiniderte Elasticsearch-Dateien gefunden %s',
    'LBL_SCAN_434_TITLE' => 'Verwendung von Array-Funktionen in $_SESSION bei Dateien gefunden: %s',
    'LBL_SCAN_435_TITLE' => 'Nutzung von entfernter Klasse SugarSession wurde festgestellt',
    'LBL_SCAN_550_TITLE' => 'Use of removed Sidecar app.date APIs in %s',
    'LBL_SCAN_551_TITLE' => 'Use of removed Sidecar Bean APIs in %s',

    'LBL_SCAN_501_TITLE' => 'Fehlende Datei: %s',
    'LBL_SCAN_502_TITLE' => 'md5 Nichtübereinstimmung mit %s, erwartet %s',
    'LBL_SCAN_503_TITLE' => 'Benutzerdefiniertes Modul mit dem gleichen Namen wie das neue Sugar7 Modul: %s',
    'LBL_SCAN_504_TITLE' => 'Feldtyp fehlt in Modul-%s: %s',
    'LBL_SCAN_505_TITLE' => 'Typänderung in %s für Feld %s: von %s bis %s',
    'LBL_SCAN_506_TITLE' => 'Verwendung von $this in %s',
    'LBL_SCAN_507_TITLE' => 'Ungültige vardefs-Subfelder - %s verweist auf ungültiges Subfeld %s in Modul %s. In Modul %s',
    'LBL_SCAN_508_TITLE' => 'Inline-HTML gefunden in %s in Zeile %s',
    'LBL_SCAN_509_TITLE' => '„echo“ in %s in Zeile %s gefunden',
    'LBL_SCAN_510_TITLE' => '„print“ in %s in Zeile %s gefunden',
    'LBL_SCAN_511_TITLE' => '„Die/exit“ in %s in Zeile %s gefunden',
    'LBL_SCAN_512_TITLE' => '„print_r“ in %s in Zeile %s gefunden',
    'LBL_SCAN_513_TITLE' => '„var_dump“ in %s in Zeile %s gefunden',
    'LBL_SCAN_514_TITLE' => 'Ausgabepufferung (%s) in %s in Zeile %s gefunden',
    'LBL_SCAN_515_TITLE' => 'Skript-Fehler: %s',
    'LBL_SCAN_517_TITLE' => 'Inkompatible Integration - %s %s',
    'LBL_SCAN_526_TITLE' => "Ungültige vardefs - multienum-Feld '%s' mit Optionsliste '%s' Keys enthalten nicht zulässige Zeichen - '%s' im Modul %s",
    'LBL_SCAN_528_TITLE' => 'Feld %s des %s-Moduls hat falschen display_default Wert',
    'LBL_SCAN_529_TITLE' => '%s: %s in Datei %s in Zeile %s',
    'LBL_SCAN_530_TITLE' => 'Fehlende angepasste Datei: %s',
    'LBL_SCAN_531_TITLE' => 'Veralteter Datenbank-Treiber: %s',
    'LBL_SCAN_532_TITLE' => 'Übergeordnetes Lagerelement PHP4 Konstruktoraufruf in %s',
    'LBL_SCAN_533_TITLE' => 'Benutzerdefiniertes übergeordnetes Element PHP4 Konstruktoraufruf in %s',
    'LBL_SCAN_534_TITLE' => 'Nicht unterstützter Datenbank-Treiber: %s',
    'LBL_SCAN_535_TITLE' => 'Unsupported method call: %s()',
    'LBL_SCAN_536_TITLE' => 'Unsupported property access: $%s',
    'LBL_SCAN_540_TITLE' => 'Inkompatible Integration Daten-Reset - %s %s',
    'LBL_SCAN_541_TITLE' => 'Ungültige Serialisierung in SugarBPM - %s ungültige Serialisierung(en) in der Spalte %s der Tabelle %s: %s',
    'LBL_SCAN_542_TITLE' => 'Ungültige Feldnutzung von SugarBPM - %s ungültige(s) Feld(er) in %s verwendet.',
    'LBL_SCAN_545_TITLE' => 'SugarBPM, teilweise gesperrte Feldgruppe - Modul %3$s: Gruppe %s ist teilweise in Prozessdefinition %s gesperrt.',
    'LBL_SCAN_546_TITLE' => 'Konfig von benutzerdefinierter Wissensdatenbank TinyMCE',
    'LBL_SCAN_547_TITLE' => 'Verwendung der entfernten "ResetLoadFlag"-Signatur in %s',
    'LBL_SCAN_548_TITLE' => 'Verwendung der verworfenen "InitButtons"-Methode in %s',
    'LBL_SCAN_549_TITLE' => 'Verwendung der entfernten "getField"-Signatur in %s',
    'LBL_SCAN_552_TITLE' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_TITLE' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_TITLE' => 'Sidecar controller %s extends from removed Sidecar controller',
    'LBL_SCAN_570_TITLE' => 'Unerwartete Werte in E-Mails gefunden',
    'LBL_SCAN_571_TITLE' => 'Benutzerdefinierte Datei enthält veralteten Code',
    'LBL_SCAN_572_TITLE' => 'Es gibt einen Namenskonflikt mit einer benutzerdefinierten Datei',
    'LBL_SCAN_573_TITLE' => 'Es gibt einen Namenskonflikt mit einer benutzerdefinierten Hilfe-Datei',
    'LBL_SCAN_574_TITLE' => 'Es gibt Anpassungen am E-Mails-Unterfenster',
    'LBL_SCAN_575_TITLE' => 'Es gibt Anpassungen am Kontakte-Unterfenster in E-Mails',
    'LBL_SCAN_576_TITLE' => 'Skin-Anpassungen wurden erkannt',
    'LBL_SCAN_580_TITLE' => 'Removed jQuery function(s) detected',
    'LBL_SCAN_585_TITLE' => 'Verbotene Angaben erkannt',
    'LBL_SCAN_586_TITLE' => 'Veraltete Verwendung von FontAwesome erkannt',

    'LBL_SCAN_901_TITLE' => 'Die Instanz wurde bereits auf Sugar7 aktualisiert',
    'LBL_SCAN_903_TITLE' => 'Nicht unterstützte Upgrader-Version',
    'LBL_SCAN_904_TITLE' => 'NULL-Werte in moduleList-Strings gefunden',
    'LBL_SCAN_999_TITLE' => 'Unbekannter Fehler, nehmen Sie bitte Kontakt zum Support auf',

    'LBL_SCAN_101_DESCR' => 'In Ihrer Instanz wurden Studio-Anpassungen erkannt. Wir erwarten keinerlei Probleme mit dieser Anpassung und Ihre Anpassungen können auf Sugar7 aktualisiert werden.',
    'LBL_SCAN_102_DESCR' => 'In Ihrer Instanz wurden Studio-Anpassungen erkannt. Wir erwarten keinerlei Probleme mit dieser Anpassung und Ihre Anpassungen können auf Sugar7 aktualisiert werden.',
    'LBL_SCAN_103_DESCR' => 'In Ihrer Instanz wurden Studio-Anpassungen erkannt. Wir erwarten keinerlei Probleme mit dieser Anpassung und Ihre Anpassungen können auf Sugar7 aktualisiert werden.',
    'LBL_SCAN_104_DESCR' => 'In Ihrer Instanz wurden Studio-Anpassungen erkannt. Wir erwarten keinerlei Probleme mit dieser Anpassung und Ihre Anpassungen können auf Sugar7 aktualisiert werden.',
    'LBL_SCAN_105_DESCR' => 'In Ihrer Instanz wurden Studio-Anpassungen erkannt. Wir erwarten keinerlei Probleme mit dieser Anpassung und Ihre Anpassungen können auf Sugar7 aktualisiert werden.',

    'LBL_SCAN_201_DESCR' => 'In Ihrer Instanz wurden Studio-Anpassungen erkannt. Wir erwarten keinerlei Probleme mit dieser Anpassung und Ihre Anpassungen können auf Sugar7 aktualisiert werden.',

    'LBL_SCAN_301_DESCR' => 'Bestimmte Anpassungen wurden gefunden und nicht auf Sugar7 migriert.  Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden.',
    'LBL_SCAN_302_DESCR' => 'Unbekannte Dateiansichten wurden gefunden und nicht auf Sugar7 migriert.  Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_303_DESCR' => 'Nicht leere Formfelder wurden gefunden und nicht auf Sugar7 migriert.  Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_304_DESCR' => 'Unbekannte Dateien (%s%s) wurden gefunden und nicht auf Sugar7 migriert.  Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_305_DESCR' => 'Ungültige vardefs (%s: %s) wurden in Modul %s gefunden und nicht auf Sugar7 migriert. Diese Anpassung wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_306_DESCR' => 'Ungültige vardefs wurden gefunden und nicht auf Sugar7 migriert. (Feld (%s) in Modul %s hat ein leeres Feld `module`). Diese Anpassung wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_307_DESCR' => 'Ungültige vardefs wurden gefunden und nicht auf Sugar7 migriert. Der Link (%s) in Modul %s verweist auf eine ungültige Beziehung. Diese Anpassung wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_308_DESCR' => 'Bestimmte Anpassungen wurden gefunden und nicht auf Sugar7 migriert.  Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_309_DESCR' => 'Ein md5-Hash für %s entspricht nicht der ursprünglichen Datei. Diese Datei wurde vielleicht verändert und nicht auf Sugar7 aktualisiert',
    'LBL_SCAN_310_DESCR' => 'Unbekannte Ansichtsdateien (%s) wurden erkannt und nicht auf Sugar7 migriert. Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden.',
    'LBL_SCAN_311_DESCR' => 'Bestimmte Anpassungen wurden gefunden und nicht auf Sugar7 migriert.  Dieses Modul (%s) wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_312_DESCR' => 'Ungültige vardefs wurden gefunden und nicht auf Sugar7 migriert. Der Feldtyp &#39;name&#39; ist ungültig &#39;%s&#39; für Modul &#39;%s&#39;. Diese Anpassung wird weiterhin zur Verfügung stehen, wird in Sugar7 aber im Kompatibilitätsmodus ausgeführt werden. ',
    'LBL_SCAN_313_DESCR' => 'Erweiterungs-Verzeichnis wurde erkannt - %s ist kein Modul-Builder-Modul.  Dieses Modul wird weiterhin zur Verfügung stehen, aber nur im Kompatibilitätsmodus.',

    'LBL_SCAN_401_DESCR' => 'Die benutzerdefinierte Datei enthält eine Datei, die in das Verkäufer-Verzeichnis verschoben wurde. Eine Korrektur wurde vorgenommen, und es ist keine weitere Aktion notwendig. ',
    'LBL_SCAN_402_DESCR' => 'Ungültiges Modul %s - nicht in der Bean-Liste und nicht im Dateisystem enthalten',
    'LBL_SCAN_403_DESCR' => 'Einige der Sugar-Dateien haben in Sugar 7 einen anderen Speicherort. Wir müssen ihre Einschließungspfade korrigieren.',
    'LBL_SCAN_520_DESCR' => 'Dieser Logik-Hook wird in Sugar7 nicht mehr unterstützt',
    'LBL_SCAN_521_DESCR' => 'Dieser Logik-Hook wird in Sugar7 nicht mehr unterstützt',
//    'LBL_SCAN_405_DESCR' => 'Package detected which has been blacklisted as not supported in Sugar 7',
    'LBL_SCAN_406_DESCR' => 'Das Standard-Sugar-Modul enthält nicht unterstützte, benutzerdefinierte Ansichten in benutzerdefinierten/Modulen/%s/Ansichten. Diese benutzerdefinierten Ansichten-Dateien werden während der Aktualisierung in ein Verzeichnis für deaktivierte Dateien verschoben',
    'LBL_SCAN_407_DESCR' => 'Das Standard-Sugar-Modul enthält nicht unterstützte, benutzerdefinierte Ansichten in Modulen/%s/Ansichten. Diese benutzerdefinierten Ansichten-Dateien werden während der Aktualisierung in ein Verzeichnis für deaktivierte Dateien verschoben',
    'LBL_SCAN_408_DESCR' => 'Benutzerdefinierte Komponenten von Erstellungsaktionen wurde in %s gefunden. Diese Komponenten werden kopiert und modifiziert, um stattdessen die Erstellungskomponente während des Upgrades zu erweitern',
    'LBL_SCAN_409_DESCR' => 'Das Attribut "link_file" in vardefs ist veraltet. Die Link-Klasse muss automatisch ladbar sein',
    'LBL_SCAN_519_DESCR' => 'Das Standard-Sugar-Modul enthält eine der Erweiterungen, die für die Aktualisierung nicht unterstützt werden, wie z. B. benutzerdefiniertes Routing, Zugriffskontrolle, Javascript etc.',
    'LBL_SCAN_518_DESCR' => 'Die Vardefs umfassen benutzerdefinierte Code-Definitionen, die nicht konvertiert werden können',
    'LBL_SCAN_410_DESCR' => 'Zu viele Felder in der Ansicht',
    'LBL_SCAN_522_DESCR' => 'Sub-Panel-Daten werden durch eine Funktion erfasst, deren Aktualisierung noch nicht unterstützt wird.',
    'LBL_SCAN_412_DESCR' => 'Das Sub-Panel verweist auf einen Link, den es entweder noch nicht gibt, oder der nicht korrekt definiert ist',
    'LBL_SCAN_413_DESCR' => 'Das Sub-Panel verweist auf einen Link, den es entweder noch nicht gibt, oder der nicht korrekt definiert ist',
    'LBL_SCAN_414_DESCR' => 'Unbekannte Felder werden durch CRYS-36 gehandhabt; hier finden keine weiteren Kontrollen statt',
    'LBL_SCAN_415_DESCR' => 'Logik-Hook verweist auf eine Datei, die nicht existiert',
    'LBL_SCAN_523_DESCR' => 'Die alte Logic-Hook-Datei verwendet Parameterübergabe per Referenz, was zu Fehlermeldungen führen kann (und damit REST beeinträchtigt)',
    'LBL_SCAN_417_DESCR' => 'Modul-Feeds oder iFrames erkannt, die es nicht mehr geben sollte',
    'LBL_SCAN_418_DESCR' => 'Sup-Panel verweist auf eine Datei, die nicht existiert',
    'LBL_SCAN_419_DESCR' => 'VarDef-Schlüssel stimmt nicht mit dem Vardef-Namen überein',
    'LBL_SCAN_420_DESCR' => 'VarDef enthält Beziehungsfelder, die auf eine Beziehung verweisen, die nicht korrekt geladen werden können',
    'LBL_SCAN_421_DESCR' => 'VarDef enthält ein Link-Feld, das nicht korrekt geladen werden kann',
    'LBL_SCAN_422_DESCR' => 'Modul %s hat die Definition eines anderen Moduls %s in Datei %s',
    'LBL_SCAN_525_DESCR' => 'VarDef definiert enum als Resultat HTML-Funktion, die von Sugar7 nicht unterstützt wird',
    'LBL_SCAN_423_DESCR' => 'VarDef besteht aus zusammengesetzten Feldern, die Subfelder enthalten, von denen eines nicht mehr existiert',
    'LBL_SCAN_424_DESCR' => 'Datei enthält Inline-HTML',
    'LBL_SCAN_425_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_426_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_427_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_428_DESCR' => 'Code enthält diese Produktionsfunktion. Beachten Sie bitte, dass print_r(..., true) zugelassen ist.',
    'LBL_SCAN_429_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_430_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_431_DESCR' => 'Sie wird in eine mit der Smarty3-Syntax kompatible Version konvertiert.',
    'LBL_SCAN_436_DESCR' => 'Sie wird in eine mit der Smarty3-Syntax kompatible Version konvertiert.',
    'LBL_SCAN_437_DESCR' => 'In der .tpl-Datei ist Syntax enthalten, die nicht für eine Kompatibilität mit Smarty3 konvertiert werden kann. Reparieren Sie dies manuell, um ein Upgrade der Instanz durchzuführen.',
    'LBL_SCAN_438_DESCR' => 'Benutzerdefinierte PDF-Vorlage kann nicht für eine Konformität mit der Smarty3-Syntax konvertiert werden. Beheben Sie dies manuell, um ein Upgrade der Instanz durchführen zu können.',
    'LBL_SCAN_439_DESCR' => 'In der .tpl-Datei ist Syntax enthalten, die nicht für eine Kompatibilität mit Smarty3 konvertiert werden kann. Sie wurde übersprungen. Falls dies eine gültige Smarty-Vorlage ist, beheben Sie dies manuell.',
    'LBL_SCAN_451_DESCR' => 'AuthN-Code wurde gelöscht, verwenden Sie stattdessen \IdMSugarAuthenticate, \IdMSAMLAuthenticate, \IdMLDAPAuthenticate',
    'LBL_SCAN_524_DESCR' => 'Das Feld ist als Funktion definiert, die HTML produziert, und kann nicht automatisch konvertiert werden (es ist bekannt, wie einige Standardfelder wie E-Mails und Währungen konvertiert werden)',
    'LBL_SCAN_432_DESCR' => 'Das Feld "name" hat andere Typen als name, fullname, varchar oder id',
    'LBL_SCAN_433_DESCR' => 'Benutzerdefiniderte Elasticsearch-Dateien gefunden %s',
    'LBL_SCAN_434_DESCR' => 'Verwendung von Array-Funktionen in $_SESSION bei Dateien gefunden: %s',
    'LBL_SCAN_550_DESCR' => 'Use of removed Sidecar app.date APIs in %s, this code will be migrated by upgrade scripts',
    'LBL_SCAN_551_DESCR' => 'Use of removed Sidecar Bean APIs in %s, this code will be migrated by upgrade scripts',

    'LBL_SCAN_501_DESCR' => 'Eine der Kerndateien ist nicht in der Instanz enthalten',
    'LBL_SCAN_502_DESCR' => 'Eine der Kerndateien wurde in dieser Installation verändert',
    'LBL_SCAN_503_DESCR' => 'Benutzerdefiniertes Modul hat denselben Namen wie eines der neuen Sugar-Module',
    'LBL_SCAN_504_DESCR' => 'Bei der VarDef-Felddefinition wurde der Typ ausgelassen',
    'LBL_SCAN_505_DESCR' => 'Nicht-Blob-Feldtyp wird geändert in Blob-Feldtyp. Dies ist nicht zulässig, da Blob-Typen nicht indiziert werden können und wir möglicherweise Filter haben, die auf die Indizierung dieses Feldes angewiesen sind.',
    'LBL_SCAN_506_DESCR' => '$this wird in der Metadatendatei angewendet. Da diese in Sugar7 in einem anderen Kontext geladen wird, würde dieser Vorgang scheitern.',
    'LBL_SCAN_507_DESCR' => 'VarDef besteht aus zusammengesetzten Feldern, die Subfelder enthalten, von denen eines nicht mehr existiert',
    'LBL_SCAN_508_DESCR' => 'Datei enthält Inline-HTML',
    'LBL_SCAN_509_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_510_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_511_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_512_DESCR' => 'Code enthält diese Produktionsfunktion. Beachten Sie bitte, dass print_r(..., true) zugelassen ist.',
    'LBL_SCAN_513_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_514_DESCR' => 'Code enthält diese Produktionsfunktion',
    'LBL_SCAN_515_DESCR' => 'Das Überprüfungsskript schlug fehl, was bedeutet, dass die instaScannerMeta.phpnce wahrscheinlich fehlerhaften PHP-Code enthält, der durch der Skript nicht geladen werden konnte.',
    'LBL_SCAN_517_DESCR' => 'Paket erkannt, das entweder schwarzgelistet ist oder in Sugar7 nicht unterstützt wird',
    'LBL_SCAN_526_DESCR' => "Diese Liste enthält Objekt-Namen-Werte, die die Aktualisierung verhindern.",
    'LBL_SCAN_528_DESCR' => 'Datum/ DatumUhrzeit/Uhrzeit-Feld mit falschem display_default Wert, wie z. B. - keine-',
    'LBL_SCAN_529_DESCR' => 'PHP-Fehler kann von Übersetzer ausgelöst werden, wenn eine falsche php-Syntax oder Probleme mit dem Runtime-Code festgestellt werden.',
    'LBL_SCAN_530_DESCR' => 'Eine der angepassten Dateien ist in der Instanz nicht vorhanden, wird aber vom angepassten Code verwendet.',
    'LBL_SCAN_531_DESCR' => 'Der Datenbank-Treiber %s ist veraltet. Bitte verwenden Sie stattdessen %s.',
    'LBL_SCAN_532_DESCR' => 'Eine in %s deklarierte Klasse ruft den Konstruktor ihres übergeordneten Lagerelements als %s::%s() auf',
    'LBL_SCAN_533_DESCR' => 'Eine in %s deklarierte Klasse ruft den Konstruktor ihres benutzerdefinierten übergeordneten Elements als %s::%s() auf',
    'LBL_SCAN_534_DESCR' => 'Der Datenbank-Treiber %s wird nicht mehr unterstützt. Bitte verwenden Sie stattdessen %s.',
    'LBL_SCAN_535_DESCR' => 'A call to unsupported method %s() found in %s on line %d',
    'LBL_SCAN_536_DESCR' => 'Access to an unsupported property $%s found in %s on line %d',
    'LBL_SCAN_540_DESCR' => 'Paket erkannt, das als von der Ziel-Sugar-Version als nicht unterstützt aufgeführt wird. Diese Pakete müssen vor dem Upgrade deinstalliert UND gelöscht werden. Bitte beachten Sie, dass durch die Deinstallation dieser Pakete die von diesem Paket erstellten Tabellen und Daten entfernt werden und die Verwendung der Paketmodule nicht mehr möglich ist.',
    'LBL_SCAN_541_DESCR' => 'In Ihren Prozess-Management-Tabellen wurden Daten erkannt, deren Serialisierung nicht aufgehoben werden kann oder die nicht konvertierbar sind',
    'LBL_SCAN_542_DESCR' => 'Invalid fields have been found in your Process Management Business Rules and/or Actions. These fields must be removed from Business Rules and/or Actions in order to upgrade.',
    'LBL_SCAN_545_DESCR' => 'Ein Gruppenfeld ist in der Prozessdefinition teilweise gesperrt. Diese Felder müssen in der Prozessdefinition entsperrt werden, damit das Upgrade fortgesetzt werden kann.',
    'LBL_SCAN_546_DESCR' => 'Benutzerdefinierte TinyMCE Konfig kann nicht in Modul Wissensdatenbank migriert werden. '
        . 'Der Parameter "tinyConfig" in der Datei %s wird geleert. '
        . 'Falls dort Anpassungen an TinyMCE vorgenommen wurden, müssen diese vor der Aktualisierung gespeichert werden '
        . 'und fügen Sie dies nach der Aktualisierung manuell hinzu.',
    'LBL_SCAN_547_DESCR' => 'Verwendung der entfernten "ResetLoadFlag"-Signatur in %s',
    'LBL_SCAN_548_DESCR' => 'Verwendung der verworfenen "InitButtons"-Methode in %s',
    'LBL_SCAN_549_DESCR' => 'Verwendung der entfernten "getField"-Signatur in %s',
    'LBL_SCAN_552_DESCR' => 'Use of removed Underscore APIs in %s',
    'LBL_SCAN_553_DESCR' => 'Use of removed Sidecar Bean APIs in %s',
    'LBL_SCAN_554_DESCR' => 'Sidecar controller %s extends from removed Sidecar controller',

    'LBL_SCAN_901_DESCR' => 'Die Instanz wurde bereits auf Sugar7 aktualisiert',
    'LBL_SCAN_903_DESCR' => 'Nicht unterstützte Upgrader-Version. Bitte installieren Sie das korrekte SugarUpgradeWizardPrereq-Paket',
    'LBL_SCAN_904_DESCR' => 'Datei: %s, Module: %s',
    'LBL_SCAN_999_DESCR' => 'Unbekannter Fehler, nehmen Sie bitte Kontakt zum Support auf',

    'LBL_SCAN_577_TITLE' => 'Inkompatible Datenbankkollation',
    'LBL_SCAN_577_LOG' => "Kollation '%s' ist mit dem Zeichensatz '%s' nicht kompatibel",
    'LBL_SCAN_577_DESCR' => "Wählen Sie eine andere Kollation in den Regionseinstellungen oder entfernen Sie die Konfiguration 'dbconfigoption.collation', um die Standardkollation zu verwenden.",

    'LBL_SCAN_578_TITLE' => 'Temporäre Datenbanktabelle kann nicht entfernt werden: %s',
    'LBL_SCAN_578_LOG' => 'Temporäre Datenbanktabelle kann nicht entfernt werden: %s',
    'LBL_SCAN_578_DESCR' => 'Eine für die Überprüfung der Zeichensatzkonvertierung erstellte temporäre Tabelle wurde während des Upgrades nicht gelöscht und muss manuell gelöscht werden',

    'LBL_SCAN_579_TITLE' => 'Zeichensatz-/Kollationskonvertierung kann nicht durchgeführt werden: (%s) in Tabelle: %s',
    'LBL_SCAN_579_LOG' => 'Zeichensatz-/Kollationskonvertierung kann nicht durchgeführt werden: (%s) in Tabelle: %s',
);
