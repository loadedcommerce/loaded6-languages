<?php
/*
  $Id: moneyorder.php,v 1.1.1.1 2004/03/04 23:41:03 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Orden del cheque/de dinero');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Haga pagadero a:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO')? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br><br>Env�e a:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Su orden no enviar� hasta que recibamos el pago.');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Haga pagadero a: ". (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nEnv�e a:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Su orden no enviar� hasta que recibamos el pago.');
?>