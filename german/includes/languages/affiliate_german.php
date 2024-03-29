<?php
/*
  $Id: affiliate_german.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  OSC-Affiliate

  Contribution based on:

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 - 2003 osCommerce

  Released under the GNU General Public License
*/

define('BOX_INFORMATION_AFFILIATE', 'Partnerprogramm');
//define('BOX_HEADING_AFFILIATE', 'Partnerprogramm');
define('BOX_HEADING_AFFILIATE_NEWS', 'Partner News');
define('BOX_AFFILIATE_CENTRE', 'Affiliate Center');
define('BOX_AFFILIATE_BANNER_CENTRE', 'Affiliate Links');
define('BOX_AFFILIATE_REPORT_CENTRE', 'Affiliate Reports');
define('BOX_AFFILIATE_INFO', 'Partner Informationen');
define('BOX_AFFILIATE_SUMMARY', 'Partnerkonto &Uuml;bersicht');
define('BOX_AFFILIATE_PASSWORD', 'Change Password');
define('BOX_AFFILIATE_NEWS', 'Affiliate News');
define('BOX_AFFILIATE_NEWSLETTER', 'Newsletter');
define('BOX_AFFILIATE_ACCOUNT', 'Partnerkonto bearbeiten');
define('BOX_AFFILIATE_REPORTS', 'Affiliate Reports');
define('BOX_AFFILIATE_CLICKRATE', '&Uuml;bersicht Klicks');
define('BOX_AFFILIATE_PAYMENT', 'Provisionszahlungen');
define('BOX_AFFILIATE_SALES', '&Uuml;bersicht Verk&auml;ufe');
define('BOX_AFFILIATE_BANNERS', 'Banner');
define('BOX_AFFILIATE_BANNERS_BANNERS', 'WebSite Banners');
define('BOX_AFFILIATE_BANNERS_BUILD_CAT', 'Build Category Link');
define('BOX_AFFILIATE_BANNERS_BUILD', 'Build Product Link');
define('BOX_AFFILIATE_BANNERS_PRODUCT', 'Product Banners');
define('BOX_AFFILIATE_BANNERS_CATEGORY', 'Category Banners');
define('BOX_AFFILIATE_BANNERS_TEXT', 'Text Links');
define('TEXT_PAYMENT_ID', 'Shows the ID Number, of payments.');
define('TEXT_SALES_PAYMENT_DATE', 'Shows the date, of payments.');
define('TEXT_SALES_PAYMENT_Ammount', 'Affiliate Earnings represents the commission due on the sale');
define('TEXT_PAYMENT_STATUS', 'Sale Status represents the status the sale.');
define('BOX_AFFILIATE_CONTACT', 'Kontakt');
define('BOX_AFFILIATE_FAQ', 'FAQ');
define('BOX_AFFILIATE_LOGIN', 'Partner Anmeldung');
define('BOX_AFFILIATE_LOGOUT', 'Abmelden');

define('ENTRY_AFFILIATE_PAYMENT_DETAILS', 'Zahlbar an:');
define('ENTRY_AFFILIATE_ACCEPT_AGB', 'Bitte best&auml;tigen Sie, dass Sie mit unseren <a target="_new" href="' . tep_href_link(FILENAME_AFFILIATE_TERMS, '', 'SSL') . '">AGB\'s</a> einverstanden sind.');
if (!defined('ENTRY_AFFILIATE_AGB_ERROR')) {
define('ENTRY_AFFILIATE_AGB_ERROR', '&nbsp;<small><font color="#FF0000">Sie m&uuml;ssen sich mit unseren AGB\'s einverstanden erkl&auml;ren.</font></small>');
}
//define('ENTRY_AFFILIATE_AGB_ERROR', ' &nbsp;<small><font color="#FF0000">You must accept our Affiliate Program Terms & Conditions</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_CHECK', 'Empf&auml;nger des Schecks:');
define('ENTRY_AFFILIATE_PAYMENT_CHECK_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_CHECK_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL', 'PayPal Account Email:');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME', 'Kreditinstitut:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME', 'Kontoinhaber:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER', 'Konto-Nr.:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER', 'Bankleitzahl:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE', 'SWIFT Code:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE_TEXT', '');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_COMPANY', 'Firma:');
define('ENTRY_AFFILIATE_COMPANY_TEXT', '');
define('ENTRY_AFFILIATE_COMPANY_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_COMPANY_TAXID', 'UID-Nr:');
define('ENTRY_AFFILIATE_COMPANY_TAXID_TEXT', '');
define('ENTRY_AFFILIATE_COMPANY_TAXID_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich</font></small>');
define('ENTRY_AFFILIATE_HOMEPAGE', 'Homepage:');
define('ENTRY_AFFILIATE_HOMEPAGE_TEXT', '&nbsp;<small><font color="#000000"> (http://)</font></small>');
define('ENTRY_AFFILIATE_HOMEPAGE_ERROR', '&nbsp;<small><font color="#FF0000">erforderlich (http://)</font></small>');
define('ENTRY_AFFILIATE_NEWSLETTER', 'Affiliate Newsletter');
define('ENTRY_AFFILIATE_NEWSLETTER_TEXT', '');
define('ENTRY_AFFILIATE_NEWSLETTER_ERROR', '&nbsp;<small><font color="#FF0000">required</font></small>');

define('CATEGORY_PAYMENT_DETAILS','Sie Erhalten Ihr Geld vorbei');

define('TEXT_AFFILIATE_BANNERS_BANNERS', 'Web Site Banner Links');
define('TEXT_AFFILIATE_BANNERS', 'Affiliate Banners');
define('TEXT_AFFILIATE_BANNERS_BUILD', 'Build Product Link');
define('TEXT_AFFILIATE_BANNERS_CAT', 'Build Category Link');
define('TEXT_AFFILIATE_BANNERS_CATEGORY', 'Pre defined Category Link');
define('TEXT_AFFILIATE_BANNERS_PRODUCT', 'Pre defined Product Links');
define('TEXT_AFFILIATE_BANNERS_TEXT', 'Text Links');
define('ENTRY_AFFILIATE_ACCEPT_AGB_TEXT', 'Teilnehmer-Programm-Bedingungen ');

define('AFFILIATE_MALE', 'Mann');
define('AFFILIATE_FEMALE', 'Frau');

define('TEXT_AFFILIATE_NO_BANNERS','No Banners found.<br>You can create banners from <a href="' . tep_href_link(FILENAME_AFFILIATE_BANNERS_BUILD, '', 'SSL') . '">"' . BOX_AFFILIATE_BANNERS_BUILD . '"</a> or <a href="' . tep_href_link(FILENAME_AFFILIATE_BANNERS_BUILD_CAT, '', 'SSL') . '">"' . BOX_AFFILIATE_BANNERS_BUILD_CAT . '"</a');
//common breadcrumb
define('NAVBAR_TITLE_AFFILIATE_CENTRAL','The Affiliate Program');
?>