<?php
/*
  $Id: cresecure.php,v 1.0 2009/01/27 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2009 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_CRESECURE_TEXT_TITLE', 'De la tarjeta de crédito vía CRE Secure');
define('MODULE_PAYMENT_CRESECURE_TEXT_DESCRIPTION', '<div align="center"><img src="images/cre_secure.png"/></div><div style="padding:10px;"> <b>Sistema de pago universal</b><br/>Vea por usted mismo porqué CRE aseguran son la mejor opción para los minoristas en línea que quieren un obediente, manera diseñador-amistosa de aceptar tarjetas de crédito.<br/><a href="http://cresecure.com/from_admin" target="_blank">Chasque aquí para aprender más >></a><p>Versión 1.0</p><p><a href="' . tep_href_link('cc_purge.php', '', 'SSL') . '">Utilidad de la tarjeta de crédito de la purgación >></a></p></div>');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_OWNER', 'Dueño de la tarjeta de crédito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_NUMBER', 'Número de tarjeta de crédito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de vencimiento de la tarjeta de crédito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_TYPE', 'Tipo de la tarjeta de crédito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_OWNER', '* El owner\' el nombre de s del de la tarjeta de crédito debe ser por lo menos los caracteres ' . CC_OWNER_MIN_LENGTH);
define('MODULE_PAYMENT_CRESECURE_TEXT_CVV_LINK', '¿Cuál es él??');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_NUMBER', '* El número de tarjeta de crédito debe ser por lo menos los caracteres ' . CC_NUMBER_MIN_LENGTH);
define('MODULE_PAYMENT_CRESECURE_TEXT_ERROR', 'Error de la tarjeta de crédito!');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_CVV', '* Usted debe incorporar un número CVC para proceder.');
define('TEXT_CCVAL_ERROR_CARD_TYPE_MISMATCH', 'El tipo de la tarjeta de crédito que usted ha elegido no empareja el número de tarjeta de crédito incorporado. Compruebe por favor el número y el tipo de la tarjeta de crédito e intente otra vez.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'El número CVC incorporado es incorrecto. Intente por favor otra vez.');
?>