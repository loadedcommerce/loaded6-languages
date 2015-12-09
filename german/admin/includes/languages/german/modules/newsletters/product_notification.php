<?php
/*
  $Id: product_notification.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('TEXT_PRODUCT_NOTIFICATIONS_END_DATE', 'zu &nbsp;&nbsp;');
define('TEXT_PRODUCT_NOTIFICATIONS_NEWSLETTER_NAME', 'Produkt-Mitteilungen');
define('TEXT_PRODUCT_NOTIFICATIONS_START_DATE', 'von:');
define('TEXT_COUNT_CUSTOMERS', 'Anzahl der Kunden, welche das Rundschreiben erhalten: %s');
define('TEXT_PRODUCTS', 'Produkt');
define('TEXT_SELECTED_PRODUCTS', 'ausgew&auml;hlte Produkte');


if (!defined('JS_PLEASE_SELECT_PRODUCTS')) {
  define('JS_PLEASE_SELECT_PRODUCTS', 'Bitte wählen Sie zumindest einen Produkt aus!');
}

define('BUTTON_GLOBAL', 'Global');
if (!defined("BUTTON_SELECT")) {
  define("BUTTON_SELECT", ">>>");
}
if (!defined("BUTTON_UNSELECT")) {
  define("BUTTON_UNSELECT", "<<<");
}
define('BUTTON_SUBMIT', 'Weiter');
define('BUTTON_CANCEL', 'Abbrechen');
define('TXT_CUSTOMERS_PURCHASED_SELECTED_PRODUCTS', 'Send only to customers who purchased selected products');
?>