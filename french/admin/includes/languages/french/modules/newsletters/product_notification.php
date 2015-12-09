<?php
/*
  $Id: product_notification.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('TEXT_PRODUCT_NOTIFICATIONS_END_DATE', 'à &nbsp;&nbsp;');
define('TEXT_PRODUCT_NOTIFICATIONS_NEWSLETTER_NAME', 'Avis de produit');
define('TEXT_PRODUCT_NOTIFICATIONS_START_DATE', 'de:');
define('TEXT_COUNT_CUSTOMERS', 'Clients abonn&eacute;s &agrave; la lettre d\'information %s');
define('TEXT_PRODUCTS', 'Produits');
define('TEXT_SELECTED_PRODUCTS', 'Produits s&eacute;lectionn&eacute;s');

if (!defined('JS_PLEASE_SELECT_PRODUCTS')) {
  define('JS_PLEASE_SELECT_PRODUCTS', 'Veuillez s&eacute;lectionner des produits');
}


define('BUTTON_GLOBAL', 'Global');
if (!defined("BUTTON_SELECT")) {
  define("BUTTON_SELECT", ">>>");
}
if (!defined("BUTTON_UNSELECT")) {
  define("BUTTON_UNSELECT", "<<<");
}
define('BUTTON_SUBMIT', 'Envoyer');
define('BUTTON_CANCEL', 'Effacer');
define('TXT_CUSTOMERS_PURCHASED_SELECTED_PRODUCTS', 'Send only to customers who purchased selected products');
?>