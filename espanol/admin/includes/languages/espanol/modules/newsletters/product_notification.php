<?php
/*
  $Id: product_notification.php,v 1.1.1.1 2004/03/04 23:40:15 ccwjr Exp $
  Translated by: jparis v1.0
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
*/
define('TEXT_PRODUCT_NOTIFICATIONS_END_DATE', 'a &nbsp;&nbsp;');
define('TEXT_PRODUCT_NOTIFICATIONS_NEWSLETTER_NAME', 'Notificaciones del producto');
define('TEXT_PRODUCT_NOTIFICATIONS_START_DATE', 'de:');
define('TEXT_COUNT_CUSTOMERS', 'Clientes que reciben el boletín: %s');
define('TEXT_PRODUCTS', 'Productos');
define('TEXT_SELECTED_PRODUCTS', 'Productos seleccionados');

if (!defined('JS_PLEASE_SELECT_PRODUCTS')) {
  define('JS_PLEASE_SELECT_PRODUCTS', 'Seleccione algunos productos.');
}


define('BUTTON_GLOBAL', 'Global');
if (!defined("BUTTON_SELECT")) {
  define("BUTTON_SELECT", ">>>");
}
if (!defined("BUTTON_UNSELECT")) {
  define("BUTTON_UNSELECT", "<<<");
}
define('BUTTON_SUBMIT', 'Enviar');
define('BUTTON_CANCEL', 'Cancelar');
define('TXT_CUSTOMERS_PURCHASED_SELECTED_PRODUCTS', 'Send only to customers who purchased selected products');
?>
