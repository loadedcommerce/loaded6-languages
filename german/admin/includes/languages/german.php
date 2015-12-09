<?php
/*
  $Id: german.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (z.B. 05/21/1970)');
define('ENTRY_CITY_TEXT', '*');
define('BOX_FEEDERS_GOOGLE', 'Google Base');
define('BOX_EDIT_HTML_INVOICE','HTML-Rechnung');
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Sprachherausgeber');
define('BOX_CATALOG_SPECIALSBYCAT','Specials durch Category');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_CHECK_ERROR', '<span class="errorText">Hat gewesen eine Störung, die diese eMail sendet! Treten Sie bitte mit dem Speicherinhaber in Verbindung.</span>');
define('ENTRY_STATE_ERROR_SELECT', '<span class="errorText">&nbsp;Wählen Sie bitte eine Grafschaft/einen Zustand von der Grafschaft/vom Zustand herunterziehen Menü vor.</span>');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB_TEXT', '');
define('LANGUAGE_CURRENCY', 'USD');
define('TEXT_MERCHANT','CRE Kaufmann');
//Admin begin
define('TEXT_ADMIN_HOME','Admin Home');
define('TEXT_VIEW_CATALOG','Katalog anzeigen');
define('TEXT_FORUMS','CRE Forums');
define('TEXT_PURCHASE_SUPPORT','Purchase CRE Support');

define('TEXT_ADMIN_LANG','Admin Sprache:');
define('TEXT_CHANGE_PASWORD','Passwort &auml;ndern');
define('TEXT_LOGOUT','Abmelden');
define('TEXT_CHECK_UPDATES','auf Aktuelle Version pr&uuml;fen');
define('TEXT_GET_PRO','Pro Version kaufen');


// header text in includes/header.php
define('HEADER_TITLE_ACCOUNT', 'Mein Konto');
define('HEADER_TITLE_LOGOFF', 'Beenden');
define('TEXT_SELECT_LANGUAGE', 'Bitte w&auml;hlen Sie die Sprache f&uuml;r diese Administrations Sitzung ');
define('BOX_REPORTS_NOT_VALID_USER', 'Kunde nicht validiert');

// Admin Account
define('BOX_HEADING_MY_ACCOUNT', 'Mein Konto');

//MARKETING BOX
define('BOX_HEADING_MARKETING', 'Marketing');
define('BOX_MARKETING_EVENTS_MANAGER', 'Events/Kalender Verwalten');
define('BOX_MARKETING_SALEMAKER', 'SaleMaker');
define('BOX_MARKETING_SPECIALS', 'Sonderangebote');
define('BOX_MARKETING_SPECIALSBYCAT','Sonderangebot in Kategorie');
define('BOX_MARKETING_BANNER_MANAGER','Banner Verwalten');

// configuration box text in includes/boxes/administrator.php
define('BOX_HEADING_ADMINISTRATOR', 'Administrator');
define('BOX_ADMINISTRATOR_MEMBERS', 'Mitglieder Gruppen');
define('BOX_ADMINISTRATOR_GROUPS', 'Admin Groups');
define('BOX_ADMINISTRATOR_MEMBER', 'Mitglieder');
define('BOX_ADMINISTRATOR_BOXES', 'Menu File Access');
define('BOX_ADMINISTRATOR_ACCOUNT_UPDATE', 'Konto updaten');
define('BOX_ADMINISTRATOR_SECURITY', 'Admin File Security');

// images
define('IMAGE_FILE_PERMISSION', 'Dateien Zugangsrechte');
define('IMAGE_GROUPS', 'Gruppenliste');
define('IMAGE_INSERT_FILE', 'Datei einf&uuml;gen');
define('IMAGE_MEMBERS', 'Mitgliederliste');
define('IMAGE_NEW_GROUP', 'Neue Gruppe');
define('IMAGE_NEW_MEMBER', 'Neues Mitglied');
define('IMAGE_NEXT', 'Weiter');

// constants for use in tep_prev_next_display function
define('TEXT_DISPLAY_NUMBER_OF_FILENAMES', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Dateinamen)');
define('TEXT_DISPLAY_NUMBER_OF_MEMBERS', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Mitgliedern)');
//Admin end

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'de_DE'
// on FreeBSD 4.0 I use 'de_DE.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'de_DE.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'd.m.Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="de"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'CRE Loaded Commercial Open Source eCommerce');

// CCGV
define('BOX_HEADING_GV_ADMIN', 'Gutschein/Rabatt');
define('BOX_GV_ADMIN_QUEUE', 'Ausgestellte Gutscheine');
define('BOX_GV_ADMIN_MAIL', 'EMail Gutscheine');
define('BOX_GV_ADMIN_SENT', 'Versandte Gutscheine');
define('BOX_COUPON_ADMIN','Rabatt Admin');
define('BOX_GV_REPORT','Rabatt Bericht');
define('IMAGE_RELEASE', 'Zufalls Gutschein');

define('_JANUARY', 'Januar');
define('_FEBRUARY', 'Februar');
define('_MARCH', 'M&auml;rz');
define('_APRIL', 'April');
define('_MAY', 'Mai');
define('_JUNE', 'Juni');
define('_JULY', 'Juli');
define('_AUGUST', 'August');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'Oktober');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'Dezember');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Anzeigen <b>%d</b> bis <b>%d</b> (von <b>%d</b> Gutscheinen)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Anzeigen <b>%d</b> bis <b>%d</b> (von <b>%d</b> Rabattgutscheinen)');
define('BOX_HEADING_CONTENT',' Zufriedener Manager');

define('TEXT_VALID_PRODUCTS_LIST', 'Produktliste');
define('TEXT_VALID_PRODUCTS_ID', 'Produkt ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Produkt Name');
define('TEXT_VALID_PRODUCTS_MODEL', 'Produkt Modell');

define('TEXT_VALID_CATEGORIES_LIST', 'Kategorie Liste');
define('TEXT_VALID_CATEGORIES_ID', 'Kategorie ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Kategorie Name');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Supportseite');
define('HEADER_TITLE_ONLINE_CATALOG', 'Online Katalog');
define('HEADER_TITLE_ADMINISTRATION', 'Administration');
define('HEADER_TITLE_CHAINREACTION', 'Chainreactionweb');
define('HEADER_TITLE_CRELOADED', 'CRE Loaded Project');

// MaxiDVD Added Line For WYSIWYG HTML Area: BOF
define('BOX_CATALOG_DEFINE_MAINPAGE', 'Startseite definieren');
// MaxiDVD Added Line For WYSIWYG HTML Area: EOF

// text for gender
define('MALE', 'Herr');
define('FEMALE', 'Frau');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Konfiguration');
define('BOX_CONFIGURATION_MYSTORE', 'Mein Shop');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cache');

// added for super-friendly admin menu:
define('BOX_CONFIGURATION_MIN_VALUES', 'Min Werte');
define('BOX_CONFIGURATION_MAX_VALUES', 'Max Werte');
define('BOX_CONFIGURATION_IMAGES', 'Bilder Konfiguration');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Kunden Details');
define('BOX_CONFIGURATION_SHIPPING', 'Default Versand Einstellungen');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Produkt Auflistung');
define('BOX_CONFIGURATION_EMAIL', 'Email');
define('BOX_CONFIGURATION_DOWNLOAD', 'Download Verwaltung');
define('BOX_CONFIGURATION_GZIP', 'GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sessions');
define('BOX_CONFIGURATION_STOCK', 'Lagerverwaltung');
define('BOX_CONFIGURATION_WYSIWYG', 'WYSIWYG Editor 1.7');
define('BOX_CONFIGURATION_AFFILIATE', 'Konfiguration');
define('BOX_CONFIGURATION_MAINT', 'Wartungsmodus');
define('BOX_CONFIGURATION_ACCOUNTS', 'Einkaufen ohne Kundenkonto');
define('BOX_CONFIGURATION_CHECKOUT', 'Einstellungen Bestellvorgang');
define('BOX_CONFIGURATION_LINKS', 'Links Verwaltung');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Module');
define('BOX_MODULES_PAYMENT', 'Zahlungsweise');
define('BOX_MODULES_SHIPPING', 'Versandart');
define('BOX_MODULES_ORDER_TOTAL', 'Zusammenfassung');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Katalog');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Kategorien / Artikel');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Produktmerkmale');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_CATEGORY_OPTIONS', 'Produkt Kategorie Optionen');
define('BOX_CATALOG_MANUFACTURERS', 'Hersteller');
define('BOX_CATALOG_REVIEWS', 'Produktbewertungen');
define('BOX_CATALOG_SPECIALS', 'Sonderangebote');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'erwartete Artikel');
define('BOX_CATALOG_EASYPOPULATE', 'EasyPopulate');
define('BOX_CATALOG_EASYPOPULATE_BASIC', 'Easy Populate Basic');
define('BOX_CATALOG_SHOP_BY_PRICE', 'Shop by Price');
define('BOX_CATALOG_FEATURED', 'Featured Products');
define('BOX_CATALOG_PRODUCTS', 'Products');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administrators');
define('BOX_CONFIGURATION_SERVICES', 'Services');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Credit Cards');
define('BOX_CATALOG_CATEGORIES', 'Categories');
define('BOX_HEADING_SETUP', '<b>Set Up</b>');
define('BOX_HEADING_MARKETING_MANAGER', '<b>Marketing Manager</b>');
define('BOX_HEADING_CATALOG_MANAGER', '<b>Catalog Manager</b>');
define('BOX_HEADING_CONTENT_MANAGER', '<b>Zufriedener Manager</b>');
define('BOX_HEADING_TEMPLATE_MANAGER', '<b>Template Manager</b>');
define('BOX_HEADING_CUSTOMERS_ORDERS', '<b>Customers/Orders</b>');
define('BOX_HEADING_ORDERS', '  Orders');

define('TEXT_HEADING_HOME', 'Home');
define('TEXT_HEADING_ORDERS', 'Orders');
define('TEXT_HEADING_CUSTOMERS', 'Customers');
define('TEXT_HEADING_CATALOG', 'Products');
define('TEXT_HEADING_CONTENT', 'Content');
define('TEXT_HEADING_MARKETING', 'Marketing');
define('TEXT_HEADING_CONFIGURATION', 'Configuration');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Kunden/Orders');
define('BOX_CUSTOMERS_CUSTOMERS', 'Kunden');
define('BOX_CUSTOMERS_PENDING_APPROVALS', 'Pending Approvals');
//added for Super-Friendly Admin Menu:
define('BOX_CUSTOMERS_ORDERS', 'Bestellungen');
define('BOX_CUSTOMERS_EDIT_ORDERS', 'Bestellungen Editieren');
define('BOX_ABANDONED_ORDERS', 'Abandoned Orders');
define('BOX_CREATE_ACCOUNT', 'Neues Konto erstellen');
define('BOX_CREATE_ORDER', 'Neue Bestellung erstellen');
define('BOX_CREATE_ORDERS_ADMIN', 'Bestellung erstellen Admin');
// taxes box text in includes/boxes/taxes.php

define('BOX_HEADING_LOCATION_AND_TAXES', 'L&auml;nder / Steuern');
define('BOX_TAXES_COUNTRIES', 'L&auml;nder');
define('BOX_TAXES_ZONES', 'Bundesl&auml;nder');
define('BOX_TAXES_GEO_ZONES', 'Steuerzonen');
define('BOX_TAXES_TAX_CLASSES', 'Steuerklassen');
define('BOX_TAXES_TAX_RATES', 'Steuers&auml;tze');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Reports');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Obere Gesehene Produkte');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Oberseite Gekaufte Produkte');
define('BOX_REPORTS_ORDERS_TOTAL', 'Customer Orders-Total');
define('BOX_REPORTS_BOX_REPORTS_MONTHLY_SALES', 'Monthly Sales');
define('BOX_REPORTS_CREDITS', 'Customer Credit');
define('BOX_REPORTS_COUPONS_REDEEMED','Coupons Redeemed');
define('BOX_REPORTS_CUSTOMER_WISHLIST', 'Customer Wishlist');
define('BOX_REPORTS_SALES_REPORT2', 'Sales Report');
define('BOX_REPORTS_ORDERLIST', 'Generate orderlist');
define('BOX_REPORTS_MONTHLY_SALES', 'Monthly Sales/Tax');
define('BOX_REPORTS_CUSTOMERS_ORDERS', 'Customer Statistics');
define('BOX_REPORTS_DAILY_PRODUCTS_ORDERS', 'Daily Product Sales');
define('BOX_REPORTS_PRODUCTS_NOTIFICATIONS', 'Product Notifications');
define('BOX_CUSTOMERS_MENU','Customer Menu');
define('BOX_ORDERS_MENU','Orders Menu');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Hilfsprogramme');
define('BOX_HEADING_B2BSETTINGS', 'B2B Settings');
define('BOX_TOOLS_BACKUP', 'Datenbanksicherung');
define('BOX_TOOLS_IMAGE_MANAGER', 'Image Manager');
define('BOX_TOOLS_BANNER_MANAGER', 'Banner Manager');
define('BOX_TOOLS_CACHE', 'Cache Steuerung');
define('BOX_TOOLS_FILE_MANAGER', 'Datei-Manager');
define('BOX_TOOLS_MAIL', 'Email versenden');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Rundschreiben-Manager');
define('BOX_TOOLS_SERVER_INFO', 'Server Info');
define('BOX_TOOLS_WHOS_ONLINE', 'Wer ist Online');

// BMC CC Mod Start
define('BOX_TOOLS_BLACKLIST', 'Kreditkarten Blackliste');
// BMC CC Mod End
// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Sprachen/W&auml;hrungen');
define('BOX_LOCALIZATION_CURRENCIES', 'W&auml;hrungen');
define('BOX_LOCALIZATION_LANGUAGES', 'Sprachen');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Bestellstatus');

define('BOX_HEADING_HEADER_TAGS_CONTROLLER', 'Header Tags');
define('BOX_HEADER_TAGS_ADD_A_PAGE', 'Page Control');
define('BOX_HEADER_TAGS_ENGLISH', 'Text Control');
define('BOX_HEADER_TAGS_FILL_TAGS', 'Fill Tags');

// infobox box text in includes/boxes/info_boxes.php
define('BOX_HEADING_DESIGN_CONTROLS', 'Design Verwaltung');
define('BOX_HEADING_DESIGN_TEMPLATE', 'Template');
define('BOX_HEADING_TEMPLATE_CONFIGURATION', 'Template Konfiguration');
define('BOX_HEADING_TEMPLATE_MANAGEMENT', 'Template Manager');
define('BOX_HEADING_TEMPLATE_MANAGEMENT1', 'Neues Template verwalten');
define('BOX_HEADING_DESIGN_INFOBOX', 'Infobox');
define('BOX_HEADING_BOXES', 'Infobox Verwaltung');
define('BOX_HEADING_BOXES_ADMIN', 'Infobox bauen zusammen');
define('BOX_HEADING_DESIGN_BRANDING', 'Branding');
define('BOX_HEADING_TEMPLATE_HEADER_TAGS','Header Tags');
define('BOX_HEADING_DESIGN_PRODUCT_INFO','Produkt-Info');
define('BOX_HEADING_DESIGN_PRODUCT_INFO_CONFIG','Produkt-InfoConfig');
define('BOX_HEADING_PRODUCT_INFO_CONFIGURATION','Produkt-Info');

define('BOX_HEADING_ADMIN_MENU_BUILDER', 'Admin Menu Builder');
define('BOX_HEADING_ADMIN_MENU', 'Admin Menu System');
define('BOX_HEADING_DESIGN_LAYOUT', 'Layout');
define('BOX_HEADING_DESIGN_PRODUCT_LISTING', 'Produkt anzeige');
define('BOX_HEADING_DESIGN_HOME_PAGE', 'Home Seite');
define('BOX_HEADING_DESIGN_INDEX_PAGE', 'Index Seite');
define('BOX_HEADING_DESIGN_PRODUCT_PAGE', 'Produkt Seite');

define('BOX_TEMPLATE_NAVMENU','Navigation Verwaltung');
define('BOX_HEADING_BRANDING_MANAGER','Branding Manager');


// VJ Links Manager v1.00 begin
// links manager box text in includes/boxes/links.php
define('BOX_HEADING_LINKS', 'Links Verwaltung');
define('BOX_LINKS_LINKS', 'Links');
define('BOX_LINKS_LINK_CATEGORIES', 'Link Kategorien');
define('BOX_LINKS_LINKS_CONTACT', 'Links Kontakt');
// VJ Links Manager v1.00 end

// javascript messages
define('JS_ERROR', 'Während der Eingabe sind Fehler aufgetreten!\nBitte korrigieren Sie folgendes:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Sie müssen diesem Wert einen Preis zuordnen\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Sie müssen ein Vorzeichen für den Preis angeben (+/-)\n');

define('JS_PRODUCTS_NAME', '* Der neue Artikel muss einen Namen haben\n');
define('JS_PRODUCTS_DESCRIPTION', '* Der neue Artikel muss eine Beschreibung haben\n');
define('JS_PRODUCTS_PRICE', '* Der neue Artikel muss einen Preis haben\n');
define('JS_PRODUCTS_WEIGHT', '* Der neue Artikel muss eine Gewichtsangabe haben\n');
define('JS_PRODUCTS_QUANTITY', '* Sie müssen dem neuen Artikel eine verfügbare Anzahl zuordnen\n');
define('JS_PRODUCTS_MODEL', '* Sie müssen dem neuen Artikel eine Artikel-Nr. zuordnen\n');
define('JS_PRODUCTS_IMAGE', '* Sie müssen dem Artikel ein Bild zuordnen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Es muss ein neuer Preis für diesen Artikel festgelegt werden\n');

define('JS_GENDER', '* Die \'Anrede\' muss ausgewählt werden.\n');
define('JS_FIRST_NAME', '* Der \'Vorname\' muss mindestens aus ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_LAST_NAME', '* Der \'Nachname\' muss mindestens aus ' . ENTRY_LAST_NAME_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_DOB', '* Das \'Geburtsdatum\' muss folgendes Format haben: xx.xx.xxxx (Tag/Jahr/Monat).\n');
define('JS_EMAIL_ADDRESS', '* Die \'Email-Adresse\' muss mindestens aus ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_ADDRESS', '* Die \'Strasse\' muss mindestens aus ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_POST_CODE', '* Die \'Postleitzahl\' muss mindestens aus ' . ENTRY_POSTCODE_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_CITY', '* Die \'Stadt\' muss mindestens aus ' . ENTRY_CITY_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_STATE', '* Das \'Bundesland\' muss ausgewählt werden.\n');
define('JS_STATE_SELECT', '-- Wählen Sie oberhalb --');
define('JS_ZONE', '* Das \'Bundesland\' muss aus der Liste für dieses Land ausgewählt werden.');
define('JS_COUNTRY', '* Das \'Land\' muss ausgewählt werden.\n');
define('JS_TELEPHONE', '* Die \'Telefonnummer\' muss aus mindestens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' Zeichen bestehen.\n');
define('JS_PASSWORD', '* Das \'Passwort\' sowie die \'Passwortbestätigung\' müssen übereinstimmen und aus mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen bestehen.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Auftragsnummer %s existiert nicht!');
/* User Friendly Admin Menu */
define('CATALOG_CATEGORIES', 'Kategorien');
define('CATALOG_ATTRIBUTES', 'Produkt Attribute');
define('CATALOG_REVIEWS', 'Produkt Berichte');
define('CATALOG_SPECIALS', 'Sonderangebote');
define('CATALOG_EXPECTED', 'Produkt erwartet');
define('REPORTS_PRODUCTS_VIEWED', 'Betrachtete Produkte');
define('REPORTS_PRODUCTS_PURCHASED', 'gekaufte Produkte');
define('TOOLS_FILE_MANAGER', 'Datei-Explorer');
define('TOOLS_CACHE', 'Cache Verwaltung');
define('TOOLS_DEFINE_LANGUAGES', 'Definiere Sprachen');
define('TOOLS_EMAIL', 'Email Kunden');
define('TOOLS_NEWSLETTER', 'Newsletters');
define('TOOLS_SERVER_INFO', 'Server Info');
define('TOOLS_WHOS_ONLINE', 'Wer ist Online');
define('BOX_HEADING_GV', 'Gutschein/Rabatt');
define('GV_COUPON_ADMIN', 'Discount Gutscheine');
define('GV_EMAIL', 'Gutschein versenden');
define('GV_QUEUE', 'Gift Voucher Redeem');
define('GV_SENT', 'Gift Voucher\'s Sent');
define('BOX_GV_SENT', 'Gift Voucher\'s Sent');
/* User Friedly Admin Menu */

define('CATEGORY_PERSONAL', 'Pers&ouml;nliche Daten');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Kontakt');
define('CATEGORY_OPTIONS', 'Optionen');
define('CATEGORY_PASSWORD', 'Ihr Passwort');

define('ENTRY_COMPANY', 'Firmen Name');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Gender:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">notwendige Eingabe</span>');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Vorname:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' Buchstaben</span>');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nachname:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_LAST_NAME_MIN_LENGTH . ' Buchstaben</span>');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Geburtsdatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(z.B. 21.05.1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Email Adresse:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' Buchstaben</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">ung&uuml;ltige Email-Adresse!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Diese Email-Adresse existiert schon!</span>');
define('ENTRY_STREET_ADDRESS', 'Strasse:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' Buchstaben</span>');
define('ENTRY_SUBURB', 'weitere Anschrift:');

define('ENTRY_SUBURB_ERROR', '');

define('ENTRY_POST_CODE', 'Postleitzahl:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_POSTCODE_MIN_LENGTH . ' Zahlen</span>');
define('ENTRY_CITY', 'Stadt:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_CITY_MIN_LENGTH . ' Buchstaben</span>');
define('ENTRY_STATE', 'Bundesland:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">notwendige Eingabe</font></small>');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', 'You must select a country from the Countries pull down menu.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">mindestens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' Zahlen</span>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Telefaxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Rundschreiben:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'abonniert');
define('ENTRY_NEWSLETTER_NO', 'nicht abonniert');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'The Password Confirmation must match your Password.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Password Confirmation:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Current Password:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW', 'New Password:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Your new Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'The Password Confirmation must match your new Password.');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* Ben&ouml;tigte Information');
define('CATEGORY_ORDER_DETAILS', 'Kunden Details');
define('ENTRY_CURRENCY', 'Kunden-Währung');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Email versenden');
define('IMAGE_BACK', 'Zur&uuml;ck');
define('IMAGE_BACKUP', 'Datensicherung');
define('IMAGE_CANCEL', 'Abbruch');
define('IMAGE_BUTTON_CONTINUE', 'Weiter');
define('IMAGE_CONFIRM', 'Best&auml;tigen');
define('IMAGE_COPY', 'Kopieren');
define('IMAGE_COPY_TO', 'Kopieren nach');
define('IMAGE_DETAILS', 'Details');
define('IMAGE_DELETE', 'L&ouml;schen');
define('IMAGE_EDIT', 'Bearbeiten');
define('IMAGE_EDIT_STATUS', 'Bestellstatus &auml;ndern');
define('IMAGE_EDIT_ORDER', 'Bestellung bearbeiten');
define('IMAGE_EDIT_LANG_DEFINE', 'Edit Language Defines');
define('IMAGE_EMAIL', 'Email versenden');
define('IMAGE_FILE_MANAGER', 'Datei-Manager');
define('IMAGE_ICON_STATUS_GREEN', 'aktiv');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'aktivieren');
define('IMAGE_ICON_STATUS_RED', 'inaktiv');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'deaktivieren');
define('IMAGE_ICON_INFO', 'Information');
define('IMAGE_INSERT', 'Einf&uuml;gen');
define('IMAGE_LOCK', 'Sperren');
define('IMAGE_MODULE_INSTALL', 'Modul Installieren');
define('IMAGE_MODULE_REMOVE', 'Modul Entfernen');
define('IMAGE_MOVE', 'Verschieben');
define('IMAGE_NEW_BANNER', 'Neuen Banner aufnehmen');
define('IMAGE_NEW_CATEGORY', 'Neue Kategorie erstellen');
define('IMAGE_NEW_COUNTRY', 'Neues Land aufnehmen');
define('IMAGE_NEW_CURRENCY', 'Neue W&auml;hrung einf&uuml;gen');
define('IMAGE_NEW_FILE', 'Neue Datei');
define('IMAGE_NEW_FOLDER', 'Neues Verzeichnis');
define('IMAGE_NEW_LANGUAGE', 'Neue Sprache anlegen');
define('IMAGE_NEW_NEWSLETTER', 'Neues Rundschreiben');
define('IMAGE_NEW_PRODUCT', 'Neuen Artikel aufnehmen');
define('IMAGE_NEW_SALE', 'New Sale');
define('IMAGE_NEW_TAX_CLASS', 'Neue Steuerklasse erstellen');
define('IMAGE_NEW_TAX_RATE', 'Neuen Steuersatz anlegen');
define('IMAGE_NEW_TAX_ZONE', 'Neue Steuerzone erstellen');
define('IMAGE_NEW_ZONE', 'Neues Bundesland einf&uuml;gen');
define('IMAGE_ORDERS', 'Bestellungen');
define('IMAGE_ORDERS_INVOICE', 'Rechnung');
define('IMAGE_ORDERS_PACKINGSLIP', 'Lieferschein');
define('IMAGE_PREVIEW', 'Vorschau');
define('IMAGE_RESET', 'Zur&uuml;cksetzen');
define('IMAGE_RESTORE', 'Zur&uuml;cksichern');
define('IMAGE_SAVE', 'Speichern');
define('IMAGE_SEARCH', 'Suchen');
define('IMAGE_SELECT', 'Ausw&auml;hlen');
define('IMAGE_SEND', 'Versenden');
define('IMAGE_SEND_EMAIL', 'Email versenden');
define('IMAGE_UNLOCK', 'Entsperren');
define('IMAGE_UPDATE', 'Aktualisieren');
define('IMAGE_UPDATE_CURRENCIES', 'Wechselkurse aktualisieren');
define('IMAGE_UPLOAD', 'Hochladen');

define('ICON_CROSS', 'Falsch');
define('ICON_CURRENT_FOLDER', 'aktueller Ordner');
define('ICON_DELETE', 'L&ouml;schen');
//added for quick product edit DMG
define('ICON_EDIT','Editieren');
define('ICON_ERROR', 'Fehler');
define('ICON_FILE', 'Datei');
define('ICON_FILE_DOWNLOAD', 'Herunterladen');
define('ICON_FOLDER', 'Ordner');
define('ICON_LOCKED', 'Gesperrt');
define('ICON_PREVIOUS_LEVEL', 'Vorherige Ebene');
define('ICON_PREVIEW', 'Vorschau');
define('ICON_STATISTICS', 'Statistik');
define('ICON_SUCCESS', 'Erfolg');
define('ICON_TICK', 'Wahr');
define('ICON_UNLOCKED', 'Entsperrt');
define('ICON_WARNING', 'Warnung');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Seite %s von %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Bannern)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> L&auml;ndern)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Kunden)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> W&auml;hrungen)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Sprachen)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Herstellern)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Rundschreiben)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Bestellungen)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Bestellstatus)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Artikeln)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> erwarteten Artikeln)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Bewertungen)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> sales)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Sonderangeboten)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Steuerklassen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Steuerzonen)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Steuers&auml;tzen)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Bundesl&auml;ndern)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'Standard');
define('TEXT_SET_DEFAULT', 'als Standard definieren');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* erforderlich</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Fehler: Es wurde keine Standardw&auml;hrung definiert. Bitte definieren Sie unter Adminstration -> Sprachen/W&auml;hrungen -> W&auml;hrungen eine Standardw&auml;hrung.');

define('TEXT_NONE', '--keine--');
define('TEXT_TOP', 'Top');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Fehler: Ziel existiert nicht.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Fehler: Ziel hat keine Schreibrechte.');
define('ERROR_FILE_NOT_SAVED', 'Störung: Aktenantriebskraft nicht gespeichert.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Fehler: Dateiupload Typ nicht erlaubt.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Erfolg: Aktenantriebskraft erfolgreich gespeichert.');
define('WARNING_NO_FILE_UPLOADED', 'Warnung: Keine Akte geladen.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Warnung: Aktenantriebskräfte werden in der php.ini Konfigurationsakte gesperrt.');
define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> Cannot send the email through the specified SMTP server. Please check your php.ini setting and correct the SMTP server if necessary.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: ' . DIR_FS_CATALOG . 'install. Please remove this directory for security reasons.');
define('WARNING_UPGRADES_DIRECTORY_EXISTS', 'Warning: Upgrades directory exists at: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/upgrades. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: I am able to write to the configuration file: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_CONFIG_FILE_WRITEABLE_CATALOG', 'Warning: I am able to write to the configuration file: ' . DIR_FS_CATALOG . 'includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Warning: The sessions directory does not exist: ' . tep_session_save_path() . '. Sessions will not work until this directory is created.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the sessions directory: ' . tep_session_save_path() . '. Sessions will not work until the right user permissions are set.');
define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this php feature in php.ini and restart the web server.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_CATALOG . 'download/' . '. Downloadable products will not work until this directory is valid.');
define('WARNING_ENCRYPT_FILE_MISSING', 'Warning: The Encryption key file is missing.');
define('WARNING_TMP_DIRECTORY_NON_EXISTENT', 'Warning: The tmp/ is not writable: ' . DIR_FS_CATALOG . 'tmp/' . '. The page cacheing will not work until this directory is writable.');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'BEMERKEN: Die Website ist zurzeit Unten Für die Wartung zum Publikum.');
define('BOX_CATALOG_XSELL_PRODUCTS', 'Cross-Sell Products'); // X-Sell

define('TEXT_CSCAL_ERROR_CARD_TYPE_MISMATCH', 'Error: 01 The Credit Card number does not match the Card Type:');
define('TEXT_CCVAL_ERROR_INVALID_MONTH', 'Error: 02 The expiry date Motnth entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_YEAR', 'Error: 03 The expiry date year entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Error: 04 The expiry date entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Error: 05 The credit card number entered is invalid. Please check the number for misstyped numbers and try again.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Error: 06 The first four digits of the number entered are: %s If that number is correct, we do not accept that type of credit card.If it is wrong, please try again.');
define('TEXT_CCVAL_ERROR_NOT_ACCEPTED', 'Error: 07 The credit card number you have entered appears to be a %s card. Unfortunately at this time we do not accept %s as payment.');
define('TEXT_CCVAL_ERROR_BLACKLIST', 'Error: 08 We cannot accept your card as it is blacklisted, if you feel you have recieved this message in error please contact your card issuer.');
define('TEXT_CCVAL_ERROR_SHORT', 'Error: 09 You have not entered the correct amount of digits. Please ensure you have entered all of the long number displayed on the front of your card');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Error: 10 The CCV/CVV/CID number entered is the incorrect length. Please try again.');

define('IMAGE_BUTTON_PRINT_ORDER', 'Druckf&auml;hige Bestellung');
define('TEXT_PROCESS','Process');
// BOF: Lango Added for print order MOD
define('IMAGE_BUTTON_PRINT', 'Drucken');
// WebMakers.com Added: Attribute Sorter, Copier and Catalog additions
require(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');

//DWD Modify: Information Page Unlimited 1.1f - PT
  define('BOX_HEADING_INFORMATION', 'Zufriedener Manager');
  define('BOX_INFORMATION_MANAGER', 'Info-Manager');
//DWD Modify End

include('includes/languages/order_edit_german.php');

 define('BOX_TITLE_CRELOADED', 'CRE Loaded Project');
 define('LINK_CRE_FORUMS','CRE Loaded Forums');
 define('LINK_CRW_SUPPORT','Technical Support');
// General Release Edition
 define('LINK_SF_CRELOADED','Source Forge Home');
 define('LINK_SF_BUGTRACKER','Bug Tracker');
 define('LINK_SF_SUPPORT','Support Request');
 define('LINK_SF_TASK','Task Tracker');
 define('LINK_SF_CVS','Browse CVS');
 define('LINK_CRE_FILES','CRE Downloads');
 define('LINK_SF_FEATURE','Feature Request');
//included for Backup mySQL (courtesy Zen-Cart Team) DMG
 define('BOX_TOOLS_MYSQL_BACKUP','Backup mySQL');
define('BOX_B2BSETTINGS_STORE_SETTINGS','Store Settings');
define('BOX_B2BSETTINGS_CUSTOMERS_GROUPS','Customer Groups');

// Included for Events Calendar 2.0 DMG
define('IMAGE_NEW_EVENT', 'New Event');

// VJ member approval added
define('BOX_CUSTOMERS_APPROVAL', 'Waiting Approval');

// FAQ System 2.1
  define('BOX_HEADING_FAQ', 'FAQ System');
  define('BOX_FAQ_MANAGER', 'FAQ Manager');
  define('BOX_FAQ_CATEGORIES', 'FAQ Categories');
  define('BOX_FAQ_VIEW', 'FAQ View');
  define('BOX_FAQ_VIEW_ALL', 'FAQ View All');
  
// Article Manager
define('BOX_HEADING_ARTICLES', 'Artikel Verwalten');
define('BOX_TOPICS_ARTICLES', 'Topics/Articles');
define('BOX_ARTICLES_CONFIG', 'Configuration');
define('BOX_ARTICLES_AUTHORS', 'Authors');
define('BOX_ARTICLES_REVIEWS', 'Reviews');
define('BOX_ARTICLES_XSELL', 'Cross-Sell Articles');
define('IMAGE_NEW_TOPIC', 'New Topic');
define('IMAGE_NEW_ARTICLE', 'New Article');
define('TEXT_DISPLAY_NUMBER_OF_AUTHORS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> authors)');
define('IMAGE_NEW_AUTHOR', 'Neuer Autor');
define('TEXT_WARNING_NO_AUTHORS', 'WARNING: Leere Autoren Table!&nbsp;&nbsp;You MÜSSEN mindestens einen Autor addieren, bevor Sie in der LageSIND, alle mögliche Artikel zu addieren');

// Article Statistics Report DMG
  define('BOX_REPORTS_ARTICLES_VIEWED', 'Obere Gesehene Artikel');
  define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products)');
  
// Mulitple Products Manager
define('BOX_CATALOG_CATEGORIES_PRODUCTS_MULTI', 'Multi Produkt-Manager');

// START: Product Extra Fields DMG
  define('BOX_CATALOG_PRODUCTS_EXTRA_FIELDS', 'Product Extra Fields');
// END: Product Extra Fields DMG

// Contact US Email Subject DMG
define('BOX_TOOLS_EMAIL_SUBJECTS', 'Email Subjects');
define('TEXT_DISPLAY_NUMBER_OF_EMAIL_SUBJECTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> email subjects)');

define('BOX_REPORTS_EXPLAIN','osC Explain Queries');
 
//define('BOX_HEADING_CRYPT', 'Encryption and Decryption'); 
define('BOX_HEADING_CRYPT', 'Encrypt & Decrypt');
define('BOX_CRYPT_CONFIGURATION', 'Configuration'); 
define('BOX_CRYPT_TEST', 'Test'); 
define('BOX_CRYPT_CC_DATA', 'CC Data'); 
define('BOX_CRYPT_CONVERT', 'Convert CC Data');
define('BOX_CRYPT_PURGE', 'Purge CC Data');
define('BOX_CRYPT_UPDATE', 'Update CC Data');
define('BOX_CRYPT_KEYS', 'Manage Keys');
define('BOX_CRYPT_HELP', 'Help');

define('IMAGE_CONVERT', 'Convert info to new key');
define('IMAGE_ENCRYPT', 'Encrypt data');
define('IMAGE_DECRYPT', 'Decrypt data');
define('IMAGE_RETURN', 'Return to main');
define('IMAGE_EDIT_KEY', 'Edit Key File');
define('IMAGE_CREATE', 'Create key');
define('IMAGE_HELP', 'Help');
define('IMAGE_RUN', 'Run');
  define('BOX_DATA_EASYPOPULATE_BASIC', 'Easy Populate Basic');
  define('BOX_DATA_EASYPOPULATE', 'Easy Populate Advance');
  define('BOX_DATA_EASYPOPULATE_EXPORT', 'EPA Export');
  define('BOX_DATA_EASYPOPULATE_IMPORT', 'EPA Import');
  define('BOX_DATA_EASYPOPULATE_BASIC_EXPORT', 'EPB Export');
  define('BOX_DATA_EASYPOPULATE_BASIC_IMPORT', 'EPB Import');
  define('BOX_DATA_EASYPOPULATE_OPTIONS_EXPORT', 'Options Export');
  define('BOX_DATA_EASYPOPULATE_OPTIONS_IMPORT', 'Options Import');
  define('BOX_HEADING_DATA', 'Im- und Export Funktionen');
  define('BOX_DATA', 'Data Feeds');
  define('BOX_DATA_ADMIN', 'Data Configure');
  define('BOX_HEADING_FEEDERS', 'Feeder Systems');
  define('BOX_DATA_HELP', 'Data Help');
  define('BOX_FEEDERS_AMAZON', 'Amazon Marketplace');
  define('BOX_FEEDERS_BIZRATE', 'Biz Rate');
  define('BOX_FEEDERS_FROOGLE', 'Froogle');
  define('BOX_FEEDERS_MYSIMON', 'MySimon');
  define('BOX_FEEDERS_PRICE_GRABBER', 'Price Grabber');
  define('BOX_FEEDERS_SHOPPING', 'Shopping.com');
  define('BOX_FEEDERS_YAHOO', 'Yahoo');

define('BOX_HEADING_DOC', 'Documentation');
define('BOX_DOC_ADMIN', 'Admin');
define('BOX_DOC_CAT', 'Catalog');
define('BOX_DOC_MISC', 'Miscellaneous');

// Eversun mod for sppc and qty price breaks
define('ENTRY_CUSTOMERS_GROUP_NAME', 'Kunden-Preis-Gruppe:');
define('BOX_CUSTOMERS_GROUPS', 'Kunden Gruppe');
define('ENTRY_COMPANY_TAX_ID', 'Umsatz-Steuer-Ident-Nummer (UStId-Nr.):');
define('ENTRY_COMPANY_TAX_ID_ERROR', '');
define('ENTRY_CUSTOMERS_GROUP_REQUEST_AUTHENTICATION', 'Switch off alert for authentication:');
define('ENTRY_CUSTOMERS_GROUP_RA_NO', 'Alert off');
define('ENTRY_CUSTOMERS_GROUP_RA_YES', 'Alert on');
define('ENTRY_CUSTOMERS_GROUP_RA_ERROR', '');
// Eversun mod end for sppc and qty price breaks
define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date("Y") . '&nbsp;<a target="_blank" href="http://www.creloaded.com/">Chain Reaction Ecommerce, Inc.</a>, portions &copy; 2003 <a target="_blank" href="http://www.oscommerce.com">osCommerce, Inc.</a><br>Powered by <a target="_blank" href="http://www.oscommerce.com">osCommerce</a> Supercharged by <a target="_blank" href="http://www.creloaded.com">CRE Loaded Team</a>');
define('BOX_CRE_MARKETPLACE', 'CRE Marketplace');  
// VJ infosystem begin
define('BOX_HEADING_PAGE_MANAGER', 'Page Manager');
define('BOX_PAGES', 'Pages');
define('BOX_PAGES_CATEGORIES', 'Categories');
// VJ infosystem end

define('BOX_SHIPWIRE', 'Amerika ShipWire');
define('BOX_MODULES_CHECKOUT_SUCCESS', 'Checkout Success');
define('BOX_MODULES_ADDONS', 'FügenSie hinzu');

define('BOX_HEADING_TECH_SUPPORT','Tech Support');
define('BOX_HEADING_INSTALL_EXPLAIN','Explain Quires');
define('IMAGE_BUTTON_BACK','Back');
define('IMAGE_BUTTON_CONFIRM','Bestätigen Sie');

if(file_exists('includes/languages/german_newsdesk.php')) {
include('includes/languages/german_newsdesk.php');
include('includes/languages/german_faqdesk.php');
}

// labels for Tools>Cache Control
define('TEXT_CACHE_CATEGORIES', 'Kategorie Box');
define('TEXT_CACHE_CATEGORIES1', 'Kategorie Box 1');
define('TEXT_CACHE_CATEGORIES2', 'Kategorie Box 2');
define('TEXT_CACHE_CATEGORIES3', 'Kategorie Box 3');
define('TEXT_CACHE_CATEGORIES4', 'Kategorie Box 4');
define('TEXT_CACHE_CATEGORIES5', 'Kategorie Box 5');
define('TEXT_CACHE_ALLPROD', 'Alle Artikel');
define('TEXT_CACHE_ALLMANUF', 'Alle Hersteller');
define('TEXT_CACHE_ALLCATS', 'Alle Kategorien');
define('TEXT_CACHE_MANUFACTURERS', 'Hersteller Box');
define('TEXT_CACHE_ALSO_PURCHASED', 'Ebenfalls erworben Modul');
define('TEXT_CACHE_COOLMENU', 'Cool Menu');

define('NON_TTF_FONT_ERROR','Non-TTF font size must be 1,2,3,4 or 5');
define('SETLEGEND_ERROR','Error: SetLegend argument must be an array');

define('UNABLE_TO_OPEN_ERROR','Unable to open ');
define('UNABLE_TO_OPEN_GIF_ERROR',' as a GIF');
define('UNABLE_TO_OPEN_PNG_ERROR',' as a PNG');
define('UNABLE_TO_OPEN_JPG_ERROR',' as a JPG');
define('SELECT_IMAGE_ERROR','Please select wbmp,gif,jpg, or png for image type!');
define('SELECT_IMAGE_TYPE_ERROR','Please select an image type!');
define('NOT_ACCEPTABLE_PLOT_TYPE_ERROR',' not an acceptable plot type');
define('UNKNOWN_CHART_TYPE_ERROR','ERROR: unknown chart type');
define('LOG_PLOTS_DATA_GREATER_ERROR','Log plots need data greater than 0');
define('ERROR_IN_DATA','Error in Data - max not gt min');
define('FATAL_ERROR','Fatal error');
define('THINBARLINES_DATA_TYPE_ERROR','Data Type for ThinBarLines must be data-data');
define('BAR_PLOTS_DATA_TYPE_ERROR','Bar plots must be text-data: use function SetDataType(\'text-data\')');
define('NO_IMAGE_DEFINED_DRAWGRAPH_ERROR','No Image Defined: DrawGraph');
define('NO_ARRAY_OF_DATA_IN_ERROR','No array of data in ');

define('SESSION_FILE_OPEN_ERROR_1','Could not open session file (');
define('SESSION_FILE_OPEN_ERROR_2',').');
define('SESSION_FILE_WRITE_ERROR_1','Could not write session file (');
define('SESSION_FILE_WRITE_ERROR_2',').');
define('CACHING_METHOD_ERROR_1','Caching method ');
define('CACHING_METHOD_ERROR_2',' not implemented.');
define('INITIALIZE_SESSION_MODULE_ERROR','Failed to initialize session module.');
define('SESSION_NOT_SAVED_ERROR','Session could not be saved.');
define('SESSION_NOT_CLOSED_ERROR','Session could not be closed.');
define('SESSION_NOT_STARTED_ERROR','Session could not be started.');

define('CANNOT_COPY_PRODUCT_ERROR_1','<b>WARNING: Cannot copy from Product ID #');
define('CANNOT_COPY_PRODUCT_ERROR_2',' to Product ID # ');
define('CANNOT_COPY_PRODUCT_ERROR_3',' ... No copy was made</b>');
define('NO_ATTRIBUTES_COPY_ERROR_1','<b>WARNING: No Attributes to copy from Product ID #');
define('NO_ATTRIBUTES_COPY_ERROR_2',' for: ');
define('NO_ATTRIBUTES_COPY_ERROR_3',' ... No copy was made</b>');
define('NO_PRODUCT_ERROR_1','<b>WARNING: There is no Product ID #');
define('NO_PRODUCT_ERROR_2',' ... No copy was made</b>');

define('MCRYPT_ALGORITHMS_AND_MODES','Mcrypt Algorithms and Modes');
define('MCRYPT_ALGORITHM','Algorithm');
define('MCRYPT_Status','Status');
define('MCRYPT_OK','OK');
define('MCRYPT_NOT_OK','NOT OK');
define('MCRYPT_NOT_TESTED','NOT TESTED');

define('TEXT_ORDER', 'Auftrag');  
define('TEXT_SEARCH', 'Suche');
define('TEXT_CREATE', 'Auftrag'); 
define('TEXT_IMAGE_NONEXISTENT', 'Bild existiert nicht vom Bediener.');    
define('VISUAL_IMAGE_NONEXISTENT', '<center>' . tep_image(DIR_WS_IMAGES . 'image_not_avail.jpg') . '</center>');
define('TEXT_POPUP_CLOSE_WINDOW','Nahes Fenster'); 
// multi-vendor shipping
define('VENDOR_IMAGE_MAIN_CONFIGURATION', 'Stellen Sie Verkäufer-Konstanten ein');
define('VENDOR_IMAGE_MANAGE_MODULES', 'Verkäufer-Modul-Manager');
define('IMAGE_MANAGE', 'Handhaben Sie');
define('VENDOR_HEADING_TITLE', 'Verkäufer-Modul-Manager');
define('BOX_HEADING_VENDOR_MODULES', 'Verkäufer-Management');
define('BOX_VENDOR_SELECT', 'Verkäufer auserwählt');
define('BOX_VENDOR_MODULES_SHIPPING', 'Verkäufer-Verschiffen');
define('BOX_VENDOR_CONFIGURATION', 'VerkäuferConfig');
define('BOX_CATALOG_VENDORS', 'Verkäufer-Manager');
define('BOX_HEADING_VENDORS', 'Verkäufer');
define('BOX_VENDORS', 'Verkäufer-Manager');
define('BOX_VENDORS_REPORTS_PROD', 'Produkt-Reports');
define('TEXT_DISPLAY_NUMBER_OF_VENDORS', 'Anzeigen <b>%d</b> zu <b>%d</b> (von <b>%d</b> Verkäufer)');
define('TEXT_CACHE_VENDORS', 'Verkäufer-Kasten');
define('BOX_VENDORS_ORDERS', 'Verkäufer-Auftrags-Liste');
define('BOX_MOVE_VENDOR_PRODS', 'Verschieben Sie Produkte zwischen Verkäufer');
// multi-vendor shipping //eof

// Products Sales overtime report
define('BOX_REPORTS_PRODUCTS_SALES', 'Verkäufe im Laufe der Zeit');
// Multi Warehouse Shipping 
define('BOX_WAREHOUSE_ZONES','Lager-Zonen');
define('BOX_HEADING_MANUFACTURER_INFO' ,'Manufactuer Info');
define('TEXT_POWERED_BY_CRE_NAG', 'Update-Erfolg!<br><br>You\'Re unter Verwendung unserer freien CRE geladenen Software, diese Mitteilung, Aufsteigen zu unseren Proprodukten entfernen und mehr Eigenschaften und Unterstützung erhalten!<br><br>Proversionen holen Sie recht zurück zu der Seite %s und vermeiden diesen Schritt.');
define('ENTRY_CUSTOMERS_ACCESS_GROUP', 'Customer Access Group:');
define('ENTRY_CUSTOMERS_ALL_GROUP', ' All');
define('ENTRY_CUSTOMERS_GUEST_GROUP', ' Guest');
?>