<?php
/*
  $Id: recover_abandonded_carts.php,v 1.0.0 2008/05/22 00:36:41 datazen Exp $    

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('MESSAGE_STACK_CUSTOMER_ID', 'Karre für Customer-ID ');
define('MESSAGE_STACK_DELETE_SUCCESS', ' erfolgreich gelöscht');
define('HEADING_TITLE', 'Gewinnen Sie verlassene Karren zurück');
define('HEADING_EMAIL_SENT', 'EMail gesendeter Report');
define('EMAIL_TEXT_LOGIN', 'LOGON zu Ihrem Konto hier:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Anfrage von '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Lieb ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Danke für das Kurz aufhalten bei' . STORE_NAME .
                                   ' und in Betracht wir für Ihren Kauf. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Wir möchten Ihnen für den Einkauf an danken ' .
                                   STORE_NAME . ' in der Vergangenheit. ');
define('EMAIL_TEXT_BODY_HEADER',
 'Wir beachteten das während eines Besuchs zu unserem Speicher, den Sie setzten ' .
 'die folgenden Einzelteile in Ihrem Einkaufswagen, aber schlossen nicht ab ' .
 'die Verhandlung.' . "\n\n" .
 'Einkaufswagen-Inhalt:' . "\n\n"
 );
 
define('EMAIL_TEXT_BODY_FOOTER',
 'Wir sind immer interessiert, an, zu wissen, was geschah ' .
 'und wenn es einen Grund gab, dass Sie, sich entschieden nicht an zu kaufen ' .
 'dieses Mal. Wenn Sie hinsichtlich so freundlich sein konnten ließen uns ' .
 'wissen Sie wenn Sie hatte irgendwelche Ausgaben oder Interessen, wir es schätzen würden.  ' .
 'Wir bitten um Rückgespräch von Ihnen und andere hinsichtlich, wie wir können ' .
 'Hilfe bilden Ihre Erfahrung an '. STORE_NAME . ' besser.'."\n\n".
 'MERKEN SIE BITTE:'."\n".'Wenn Sie glauben, schlossen Sie Ihren Kauf ab und sind ' .
 'wundernd, warum sie nicht geliefert wurde, ist diese eMail eine Anzeige das ' .
 'Ihr Auftrag wurde NICHT abgeschlossen, und das sind Sie NICHT aufgeladen worden! ' .
 'Gehen Sie bitte zum Speicher zurück, um Ihren Auftrag abzuschließen.'."\n\n".
 'Unsere Entschuldigungen, wenn Sie bereits Ihren Kauf abschlossen, ' .
 'wir versuchen, diese Mitteilungen in jenen Fällen nicht zu senden, aber manchmal ist es ' .
 'stark, damit wir abhängig von einzelnen Umständen erklären.'."\n\n".
 'Wieder danke für Ihre Zeit und Betrachtung, wenn Sie uns helfen ' .
 'verbessern Sie ' . STORE_NAME .  " Web site.\n\nHerzlichst,\n\n"
 );

define('DAYS_FIELD_PREFIX', 'Stellen Sie für Letztes dar ');
define('DAYS_FIELD_POSTFIX', ' Tage ');
define('DAYS_FIELD_BUTTON', 'Gehen Sie');
define('TABLE_HEADING_DATE', 'DATUM');
define('TABLE_HEADING_CONTACT', 'IN VERBINDUNG GETRETEN');
define('TABLE_HEADING_CUSTOMER', 'KUNDEN-NAME');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'TELEFON');
define('TABLE_HEADING_MODEL', 'EINZELTEIL');
define('TABLE_HEADING_DESCRIPTION', 'BESCHREIBUNG');
define('TABLE_HEADING_QUANTY', 'QUANTITÄT');
define('TABLE_HEADING_PRICE', 'PREIS');
define('TABLE_HEADING_TOTAL', 'GESAMTMENGE');
define('TABLE_GRAND_TOTAL', 'Gesamtsumme: ');
define('TABLE_CART_TOTAL', 'Karren-Gesamtmenge: ');
define('TEXT_CURRENT_CUSTOMER', 'KUNDE');
define('TEXT_SEND_EMAIL', 'Senden Sie eMail');
define('TEXT_RETURN', '[Klicken Sie hier, um zurückzugehen]');
define('TEXT_NOT_CONTACTED', 'Nicht in Verbindung getreten');
define('PSMSG', 'Zusätzlich PS Mitteilung: ');
define('TEXT_RAC_EDIT', 'Redigieren Sie Einstellungen für RAC');
define('TEXT_RAC_RUN_RECOVER_CARTS_REPORT', 'Durchlauf RAC Report');
define('TEXT_CUR_CUSTOMER', 'Gegenwärtiger Kunde'); 
define('TEXT_CONTACTED', 'In Verbindung getreten'); 
define('TEXT_UNCONTACTED', 'Nicht in Verbindung getreten'); 
define('TEXT_MATCHED', 'Zusammengebrachter Auftrag');  
?>