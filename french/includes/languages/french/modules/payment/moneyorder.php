<?php
/*
  $Id: moneyorder.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Contrôle/mandat');
define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Rendez payable à:&nbsp;' . (defined('MODULE_PAYMENT_MONEYORDER_PAYTO')? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . '<br><br>Envoyez à:<br>' . nl2br(STORE_NAME_ADDRESS) . '<br><br>' . 'Votre ordre ne se transportera pas jusqu\'à ce que nous recevions le paiement.');
define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Rendez payable à: ". (defined('MODULE_PAYMENT_MONEYORDER_PAYTO') ? MODULE_PAYMENT_MONEYORDER_PAYTO : '') . "\n\nEnvoyez à:\n" . STORE_NAME_ADDRESS . "\n\n" . 'Votre ordre ne se transportera pas jusqu\'à ce que nous recevions le paiement.');
?>