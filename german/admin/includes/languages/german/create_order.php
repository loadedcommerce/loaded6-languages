<?php
/*
  $Id: create_order.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 - 2004 osCommerce

  Released under the GNU General Public License
  
*/
define('HEADING_STEP1', 'Schritt 1 - Kunden ausw&auml;hlen & Details pr&uuml;fen');

if (!defined('HEADING_STEP2')) {
define('HEADING_STEP2', 'SCHRITT 2 - Wählen Sie Zahlungs- und Verschiffenmethoden für neuen Auftrag #');
}
if (!defined('HEADING_INSTRUCT1')) {
  define('HEADING_INSTRUCT1', '!!! ANWEISUNGEN !!!');
}
if (!defined('HEADING_INSTRUCT2')) {
  define('HEADING_INSTRUCT2', 'Anmerkung: Wenn Sie die Auftragsprodukt quanities redigieren<br>
              sie aktualisieren nicht Ihre auf lagerniveaus mit<br>
          Änderungen. Stellen Sie Sie so sicher, sie nach diesem zu aktualisieren<br>
          redigieren Sie Abschnitt.<br>');
}
if (!defined('HEADING_STEP3')) {
  define('HEADING_STEP3', 'Schritt 3 ADDIEREN ein NEUES PRODUKT');
}
if (!defined('HEADING_SHIPPING')) {
  define('HEADING_SHIPPING', 'Verschiffen-Methode:');
}
if (!defined('TEXT_ADD_PROD_STEP1')) {
  define('TEXT_ADD_PROD_STEP1', 'SCHRITT 1:');
}
if (!defined('TEXT_ADD_STEP2')) {
  define('TEXT_ADD_STEP2', 'SCHRITT 2:');
}
if (!defined('TEXT_ADD_STEP3')) {
  define('TEXT_ADD_STEP3', 'SCHRITT 3:');
}
if (!defined('TEXT_ADD_STEP4')) {
  define('TEXT_ADD_STEP4', 'SCHRITT 4:');
}

define('HEADING_CREATE', 'Kunden Details pr&uuml;fen');

define('TEXT_SELECT_CUST', 'Kunden ausw&auml;hlen:');
define('TEXT_SELECT_CURRENCY', 'Select currency:');
define('BUTTON_TEXT_SELECT_CUST', 'Kunden selektieren');
define('TEXT_OR_BY', 'oder Kunden ID:');
define('BUTTON_TEXT_CHOOSE_CUST', 'Kunden ID selektieren');
define('BUTTON_SUBMIT', 'confirm');

if (!defined('TEXT_ADD_PROD')) {
  define('TEXT_ADD_PROD', 'Addieren Sie Produkt ');
}
if (!defined('TEXT_SELECT_PROD')) {
  define('TEXT_SELECT_PROD', 'Wählen Sie dieses Produkt vor');
}
if (!defined('TEXT_ADD_CAT_CHOOSE')) {
  define('TEXT_ADD_CAT_CHOOSE', '--- WÄHLEN SIE EINE KATEGORIE ---\n');
}
if (!defined('TEXT_ADD_PROD_CHOOSE')) {
  define('TEXT_ADD_PROD_CHOOSE', 'Addieren Sie Produkt ');
}
if (!defined('TEXT_SELECT_OPT')) {
  define('TEXT_SELECT_OPT', 'Wählen Sie Wahlen vor');
}
if (!defined('TEXT_SELECT_OPT_SKIP')) {
  define('TEXT_SELECT_OPT_SKIP', 'Keine Wahlen für dieses Produkt');
}
if (!defined('TEXT_ADD_QUANTITY')) {
  define('TEXT_ADD_QUANTITY', ' Quantität');
}
if (!defined('TEXT_ADD_NOW')) {
  define('TEXT_ADD_NOW', 'Fügen Sie jetzt hinzu!');
}
if (!defined('TEXT_VIEW_CC')) {
  define('TEXT_VIEW_CC', ' Zu cm-Felder ansehen');
}
if (!defined('TEXT_VIEW_PO')) {
  define('TEXT_VIEW_PO', ' oder Felder der Ansicht-PO');
}
if (!defined('TEXT_INFO_PO')) {
  define('TEXT_INFO_PO', 'PO-Informationen:');
}
if (!defined('TEXT_INFO_NAME')) {
  define('TEXT_INFO_NAME', 'Kontoname:');
}
if (!defined('TEXT_INFO_AC_NR')) {
  define('TEXT_INFO_AC_NR', 'Kontonummer:');
}
if (!defined('TEXT_INFO_PO_NR')) {
  define('TEXT_INFO_PO_NR', 'Kaufauftrag Nr:');
}

// pull down default text
if (!defined('PULL_DOWN_DEFAULT')) {
  define('PULL_DOWN_DEFAULT', 'Please Select');
}
if (!defined('TYPE_BELOW')) {
  define('TYPE_BELOW', 'Type Below');
}
if (!defined('JS_ERROR')) {
  define('JS_ERROR', 'Errors have occured during the process of your form!\nPlease make the following corrections:\n\n');
}
if (!defined('JS_GENDER')) {
  define('JS_GENDER', '* The \'Gender\' value must be chosen.\n');
}
if (!defined('JS_FIRST_NAME')) {
  define('JS_FIRST_NAME', '* The \'First Name\' entry must have at least ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_LAST_NAME')) {
  define('JS_LAST_NAME', '* The \'Last Name\' entry must have at least ' . ENTRY_LAST_NAME_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_DOB')) {
  define('JS_DOB', '* The \'Date of Birth\' entry must be in the format: xx/xx/xxxx (month/day/year).\n');
}
if (!defined('JS_EMAIL_ADDRESS')) {
  define('JS_EMAIL_ADDRESS', '* The \'E-Mail Address\' entry must have at least ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_ADDRESS')) {
  define('JS_ADDRESS', '* The \'Street Address\' entry must have at least ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_POST_CODE')) {
  define('JS_POST_CODE', '* The \'Post Code\' entry must have at least ' . ENTRY_POSTCODE_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_CITY')) {
  define('JS_CITY', '* The \'Suburb\' entry must have at least ' . ENTRY_CITY_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_STATE')) {
  define('JS_STATE', '* The \'State\' entry must be selected.\n');
}
if (!defined('JS_STATE_SELECT')) {
  define('JS_STATE_SELECT', '-- Select Above --');
}
if (!defined('JS_ZONE')) {
  define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.\n');
}
if (!defined('JS_COUNTRY')) {
  define('JS_COUNTRY', '* The \'Country\' entry must be selected.\n');
}
if (!defined('JS_TELEPHONE')) {
  define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');
}
if (!defined('JS_PASSWORD')) {
  define('JS_PASSWORD', '* The \'Password\' and \'Confirmation\' entries must match and have at least ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.\n');
}
if (!defined('CATEGORY_COMPANY')) {
  define('CATEGORY_COMPANY', 'Company Details');
}
if (!defined('CATEGORY_PERSONAL')) {
  define('CATEGORY_PERSONAL', 'Personal Details');
}
if (!defined('CATEGORY_ADDRESS')) {
  define('CATEGORY_ADDRESS', 'Address');
}
if (!defined('CATEGORY_CONTACT')) {
  define('CATEGORY_CONTACT', 'Contact Information');
}
if (!defined('CATEGORY_OPTIONS')) {
  define('CATEGORY_OPTIONS', 'Options');
}
if (!defined('CATEGORY_PASSWORD')) {
  define('CATEGORY_PASSWORD', 'Password');
}
if (!defined('CATEGORY_CORRECT')) {
  define('CATEGORY_CORRECT', 'If this is the right customer, press the Confirm button below.');
}
if (!defined('ENTRY_CUSTOMERS_ID')) {
  define('ENTRY_CUSTOMERS_ID', 'ID:');
}
if (!defined('ENTRY_CUSTOMERS_ID_TEXT')) {
  define('ENTRY_CUSTOMERS_ID_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_COMPANY')) {
  define('ENTRY_COMPANY', 'Company Name:');
}
if (!defined('ENTRY_NAME')) {
  define('ENTRY_NAME', 'Name:');
}
if (!defined('ENTRY_COMPANY_ERROR')) {
  define('ENTRY_COMPANY_ERROR', '');
}
if (!defined('ENTRY_COMPANY_TEXT')) {
  define('ENTRY_COMPANY_TEXT', '');
}
if (!defined('ENTRY_GENDER')) {
  define('ENTRY_GENDER', 'Gender:');
}
if (!defined('ENTRY_GENDER_ERROR')) {
  define('ENTRY_GENDER_ERROR', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_GENDER_TEXT')) {
  define('ENTRY_GENDER_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_FIRST_NAME')) {
  define('ENTRY_FIRST_NAME', 'First Name:');
}
if (!defined('ENTRY_FIRST_NAME_ERROR')) {
  define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_FIRST_NAME_TEXT')) {
  define('ENTRY_FIRST_NAME_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_LAST_NAME')) {
  define('ENTRY_LAST_NAME', 'Last Name:');
}
if (!defined('ENTRY_LAST_NAME_ERROR')) {
  define('ENTRY_LAST_NAME_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_LAST_NAME_TEXT')) {
  define('ENTRY_LAST_NAME_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_DATE_OF_BIRTH')) {
  define('ENTRY_DATE_OF_BIRTH', 'Date of Birth:');
}
if (!defined('ENTRY_DATE_OF_BIRTH_ERROR')) {
  define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<small><font color="#FF0000">(eg. 05/21/1970)</font></small>');
}
if (!defined('ENTRY_DATE_OF_BIRTH_TEXT')) {
  define('ENTRY_DATE_OF_BIRTH_TEXT', '&nbsp;<small>(eg. 05/21/1970) <font color="#AABBDD">erforderlich</font></small>');
}
if (!defined('ENTRY_EMAIL_ADDRESS')) {
  define('ENTRY_EMAIL_ADDRESS', 'E-Mail Address:');
}
if (!defined('ENTRY_EMAIL_ADDRESS_ERROR')) {
  define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_EMAIL_ADDRESS_CHECK_ERROR')) {
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<small><font color="#FF0000">Your email address doesn\'t appear to be valid!</font></small>');
}
if (!defined('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS')) {
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<small><font color="#FF0000">email address already exists!</font></small>');
}
if (!defined('ENTRY_EMAIL_ADDRESS_TEXT')) {
  define('ENTRY_EMAIL_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">erforderlich</font></small>');
}
if (!defined('ENTRY_STREET_ADDRESS')) {
  define('ENTRY_STREET_ADDRESS', 'Street Address:');
}
if (!defined('ENTRY_STREET_ADDRESS_ERROR')) {
  define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_STREET_ADDRESS_TEXT')) {
  define('ENTRY_STREET_ADDRESS_TEXT', '&nbsp;<small><font color="#AABBDD">erforderlich</font></small>');
}
if (!defined('ENTRY_SUBURB')) {
  define('ENTRY_SUBURB', 'Suburb:');
}
if (!defined('ENTRY_SUBURB_ERROR')) {
  define('ENTRY_SUBURB_ERROR', '');
}
if (!defined('ENTRY_SUBURB_TEXT')) {
  define('ENTRY_SUBURB_TEXT', '');
}
if (!defined('ENTRY_POST_CODE')) {
  define('ENTRY_POST_CODE', 'Post Code:');
}
if (!defined('ENTRY_POST_CODE_ERROR')) {
  define('ENTRY_POST_CODE_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_POST_CODE_TEXT')) {
  define('ENTRY_POST_CODE_TEXT', '&nbsp;<small><font color="#AABBDD">erforderlich</font></small>');
}
if (!defined('ENTRY_CITY_ERROR')) {
  define('ENTRY_CITY_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_CITY_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_CITY_TEXT')) {
  define('ENTRY_CITY_TEXT', '&nbsp;<small><font color="#AABBDD">erforderlich</font></small>');
}
if (!defined('ENTRY_CITY')) {
  define('ENTRY_CITY', 'City:');
}
if (!defined('ENTRY_STATE')) {
  define('ENTRY_STATE', 'State/Province:');
}
if (!defined('ENTRY_STATE_ERROR')) {
  define('ENTRY_STATE_ERROR', '&nbsp;<small><font color="#FF0000">required</font></small>');
}
if (!defined('ENTRY_STATE_TEXT')) {
  define('ENTRY_STATE_TEXT', '&nbsp;<small><font color="#AABBDD">erforderlich</font></small>');
}
if (!defined('ENTRY_COUNTRY')) {
  define('ENTRY_COUNTRY', 'Country:');
}
if (!defined('ENTRY_COUNTRY_ERROR')) {
  define('ENTRY_COUNTRY_ERROR', '');
}
if (!defined('ENTRY_COUNTRY_TEXT')) {
  define('ENTRY_COUNTRY_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_TELEPHONE_NUMBER')) {
  define('ENTRY_TELEPHONE_NUMBER', 'Telephone Number:');
}
if (!defined('ENTRY_TELEPHONE_NUMBER_ERROR')) {
  define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_TELEPHONE_NUMBER_TEXT')) {
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_FAX_NUMBER')) {
  define('ENTRY_FAX_NUMBER', 'Fax Number:');
}
if (!defined('ENTRY_FAX_NUMBER_ERROR')) {
  define('ENTRY_FAX_NUMBER_ERROR', '');
}
if (!defined('ENTRY_FAX_NUMBER_TEXT')) {
  define('ENTRY_FAX_NUMBER_TEXT', '');
}
if (!defined('ENTRY_NEWSLETTER')) {
  define('ENTRY_NEWSLETTER', 'Newsletter:');
}
if (!defined('ENTRY_NEWSLETTER_TEXT')) {
  define('ENTRY_NEWSLETTER_TEXT', '');
}
if (!defined('ENTRY_NEWSLETTER_YES')) {
  define('ENTRY_NEWSLETTER_YES', 'Subscribed');
}
if (!defined('ENTRY_NEWSLETTER_NO')) {
  define('ENTRY_NEWSLETTER_NO', 'Unsubscribed');
}
if (!defined('ENTRY_NEWSLETTER_ERROR')) {
  define('ENTRY_NEWSLETTER_ERROR', '');
}
if (!defined('ENTRY_PASSWORD')) {
  define('ENTRY_PASSWORD', 'Password:');
}
if (!defined('ENTRY_PASSWORD_CONFIRMATION')) {
  define('ENTRY_PASSWORD_CONFIRMATION', 'Password Confirmation:');
}
if (!defined('ENTRY_PASSWORD_CONFIRMATION_TEXT')) {
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('ENTRY_PASSWORD_ERROR')) {
  define('ENTRY_PASSWORD_ERROR', '&nbsp;<small><font color="#FF0000">min ' . ENTRY_PASSWORD_MIN_LENGTH . ' chars</font></small>');
}
if (!defined('ENTRY_PASSWORD_TEXT')) {
  define('ENTRY_PASSWORD_TEXT', '&nbsp;<small><font color="#AABBDD">required</font></small>');
}
if (!defined('PASSWORD_HIDDEN')) {
  define('PASSWORD_HIDDEN', '--HIDDEN--');
}

// manual order box text in includes/boxes/manual_order.php
if (!defined('BOX_HEADING_MANUAL_ORDER')) {
  define('BOX_HEADING_MANUAL_ORDER', 'Manual Orders');
}
if (!defined('BOX_MANUAL_ORDER_CREATE_ACCOUNT')) {
  define('BOX_MANUAL_ORDER_CREATE_ACCOUNT', 'Create Account');
}
if (!defined('BOX_MANUAL_ORDER_CREATE_ORDER')) {
  define('BOX_MANUAL_ORDER_CREATE_ORDER', 'Create Order');
}
if (!defined('TITLE_1')) {
  define('TITLE_1', 'Step-by-Step Manual Order Entry - Step 1');
}
?>