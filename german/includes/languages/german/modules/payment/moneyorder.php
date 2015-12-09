<?php
/*
  $Id: moneyorder.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Überprüfung/Zahlungsanweisung');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Bilden Sie zahlbar zu:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO')? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br><br>Senden Sie zu:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Ihr Auftrag versendet nicht, bis wir Zahlung empfangen.');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Bilden Sie zahlbar zu: ". (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nSenden Sie zu:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Ihr Auftrag versendet nicht, bis wir Zahlung empfangen.');
?>