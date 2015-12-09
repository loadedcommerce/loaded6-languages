<?php
/*
  $Id: affiliate_affiliates.php,v 2.0

  OSC-Affiliate

  Contribution based on:

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 - 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Teilnehmer am Partnerprogramm');
define('HEADING_TITLE_SEARCH', 'Suche:');

define('TABLE_HEADING_FIRSTNAME', 'Vorname');
define('TABLE_HEADING_LASTNAME', 'Nachname');
define('TABLE_HEADING_USERHOMEPAGE', 'Homepage');
define('TABLE_HEADING_COMMISSION','Kommission');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Konto erstellt am');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_AFFILIATE_ID','Partner ID');

define('TEXT_DATE_ACCOUNT_CREATED', 'Zugang erstellt am:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'letzte &Auml;nderung:');
define('TEXT_INFO_DATE_LAST_LOGON', 'letzte Anmeldung:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Anzahl der Anmeldungen:');
define('TEXT_INFO_TEMPLATE_ASIGNED','Template Asigned:');
define('TEXT_INFO_COMMISSION','Provision');
define('TEXT_INFO_NUMBER_OF_SALES', 'Anzahl der Verk&auml;ufe:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_SALES_TOTAL', 'Summe aller Verk&auml;ufe:');
define('TEXT_INFO_AFFILIATE_TOTAL', 'Provision:');
define('TEXT_DELETE_INTRO', 'Wollen Sie diesen Partner wirklich l&ouml;schen?');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Partner l&ouml;schen');
define('TEXT_DISPLAY_NUMBER_OF_AFFILIATES', 'Angezeigt werden <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Partnern)');

define('ENTRY_AFFILIATE_PAYMENT_DETAILS', 'zahlbar an:');
define('ENTRY_AFFILIATE_PAYMENT_CHECK','Scheck f&uuml;r:');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL','PayPal Konto Email:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME','Name der Bank:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME','Kontoinhaber:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER','Kontonummer:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER','Bankleitzahl:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE','SWIFT Code:');
define('ENTRY_AFFILIATE_COMPANY','Firma');
define('ENTRY_AFFILIATE_COMPANY_TAXID','UID-Nr.:');
define('ENTRY_AFFILIATE_HOMEPAGE','Homepage');
define('ENTRY_AFFILIATE_COMMISSION','Provision pro Verkauf in %');
define('ENTRY_AFFILIATE_TEMPLATE','Affiliate Template');

define('CATEGORY_COMMISSION','Individuelle Provision');
define('CATEGORY_PAYMENT_DETAILS','Auszahlung erfolgt &uuml;ber:');

if (!defined('TYPE_BELOW')) {
define('TYPE_BELOW', 'Bitte unten eingeben');
}
define('PLEASE_SELECT', 'Ausw&auml;hlen');
define('AFFILIATE_PERCENT_NOT_SET', 'Nicht eingestellt');

// Affiliate-cobrand
define('TITLE_AFFILIATE_COBRANDING', 'Affiliate Co-Branding');
define('ENTRY_COBRANDING_COMPANY_LOGO', 'Co Brand Logo:');
define('DELETE_COBRANDING_COMPANY_LOGO', 'Löschen Bestehende Logo');
define('ENTRY_COBRANDING_COMPANY_NAME', 'Co Brand Name:');
define('ENTRY_COBRANDING_SLOGAN','Co Brand Slogan:'); 
define('ENTRY_COBRANDING_URL', 'Co-Marken-URL:');
define('ENTRY_COBRANDING_URL_HELP','http:// or https:// required.');
define('ENTRY_COBRANDING_SUPPORT_EMAIL','Customer Service Email:');
define('ENTRY_COBRANDING_SUPPORT_PHONE','Customer Service Phone:');

define('AFFILIATE_ERROR_DIRECTORY_DOES_NOT_EXIST', 'Verzeichnis %s nicht gefunden.');
define('AFFILITE_ERROR_DIRECTORY_NOT_WRITABLE', 'Directory: %s ist nicht beschreibbar.');
define('AFFILIATE_SUCCESS_DELETEED_IMAGE', 'entfällt Affiliate Cobrand Bild.');
define('AFFILIATE_SUCCESS_UPLOADED_IMAGE', 'Uploaded Affiliate Cobrand Bild.');
define('AFFILIATE_ERROR_UPLOADING_IMAGE', 'Kann nicht hochgeladen Affiliate Cobrand Bild.');
define('AFFILIATE_ERROR_IMAGE_MISSING','Affiliate Cobrand-Logo Datei fehlt.'); 

define('JS_COBRANDING_SALES_ERROR','* The \'Co Branding Sales E-Mail Address\' has problem.\n');
define('JS_COBRANDING_SUPPORT_ERROR','* The \'Co Branding Support E-Mail Address\' has problem.\n');
define('JS_COBRANDING_BILLING_ERROR','* The \'Co Branding Billing E-Mail Address\' has problem.\n');
?>