<?php
/*
  $Id: newsletters.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('TEXT_SELECTED_GROUPS', 'Vorgewählte Kunden-Gruppen');
define('TEXT_SELECT_GROUP', 'Wählen Sie Gruppe vor');
define('TEXT_NEWSLETTER_RESELLER', 'Angestellte');
define('TEXT_GROUP_MODULE', 'Gruppe:');
define('TABLE_HEADING_GROUP', 'Kunden-Gruppe');
define('TEXT_ALL_GROUPS', 'Alle Gruppen');
define('TEXT_GROUPS', 'Kunden-Gruppen');
define('HEADING_TITLE', 'Newsletter Verwaltung');

define('TABLE_HEADING_NEWSLETTERS', 'Newsletter');
define('TABLE_HEADING_SIZE', 'Gr&ouml;&szlig;e');
define('TABLE_HEADING_MODULE', 'Module');
define('TABLE_HEADING_SENT', 'Gesendet');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_SELECT_CUSTOMER', 'Select Customer');
define('TEXT_ALL_CUSTOMERS', 'All Customers');
define('TEXT_NEWSLETTER_CUSTOMERS', 'To All Newsletter Subscribers');
define('TEXT_NEWSLETTER_CUSTOMER', 'Einzelverkauf');
define('TEXT_NEWSLETTER_PRODUCER', 'Großverkauf');
define('TEXT_NEWSLETTER_MODULE', 'Module:');
define('TEXT_NEWSLETTER_TITLE', 'Titel des Newsletters:');
define('TEXT_NEWSLETTER_CONTENT', 'Inhalt:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Hinzugef&uuml;gt am:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Gesendet am:');

define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sicher, dass Sie diesen Newsletter l&ouml;schen m&ouml;chten?');

define('TEXT_PLEASE_WAIT', 'Bitte warten Sie .. Emails werden gesendet ..<br><br>Bitte unterbrechen Sie diesen Prozess nicht!');
define('TEXT_FINISHED_SENDING_EMAILS','Email Versand abgeschlossen!');

define('ERROR_NEWSLETTER_TITLE','Fehler: Geben Sie bitte den Titel des Newsletter ein');
define('ERROR_NEWSLETTER_MODULE','Fehler: Das Newsletter Modul wird dazu ben&ouml;tigt.');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER','Fehler: Bitte sperren Sie den Newsletter, bevor Sie ihn l&ouml;schen.');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER','Fehler: Bitte sperren Sie den Newsletter, bevor Sie ihn bearbeiten.');
define('ERROR_SEND_UNLOCKED_NEWSLETTER','Fehler: Bitte sperren Sie den Newsletter, bevor Sie ihn senden.');
if (!defined('JS_PLEASE_SELECT_PRODUCTS')) {
  define('JS_PLEASE_SELECT_PRODUCTS', 'Bitte wählen Sie zumindest einen Produkt aus!');
}
define('TEXT_PRODUCT_NOTIFICATIONS_NEWSLETTER_NAME', 'Produkt-Mitteilungen');
define('TEXT_CUSTOMER_NEWSLETTER_NAME', 'Kunden-Rundschreiben');
define('TEXT_AFFILIATE_NEWSLETTER_NAME', 'Teilnehmer-Rundschreiben'); 
?>