<?php
/*
  $Id: cresecure.php,v 1.0 2009/01/27 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2009 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_CRESECURE_TEXT_TITLE', 'De la tarjeta de cr�dito v�a CRE Secure');
define('MODULE_PAYMENT_CRESECURE_TEXT_DESCRIPTION', '<div align="center"><img src="images/cre_secure.png"/></div><div style="padding:10px;"> <b>Sistema de pago universal</b><br/>Vea por usted mismo porqu� CRE aseguran son la mejor opci�n para los minoristas en l�nea que quieren un obediente, manera dise�ador-amistosa de aceptar tarjetas de cr�dito.<br/><a href="http://cresecure.com/from_admin" target="_blank">Chasque aqu� para aprender m�s >></a><p>Versi�n 1.0</p><p><a href="' . tep_href_link('cc_purge.php', '', 'SSL') . '">Utilidad de la tarjeta de cr�dito de la purgaci�n >></a></p></div>');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_OWNER', 'Due�o de la tarjeta de cr�dito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_NUMBER', 'N�mero de tarjeta de cr�dito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de vencimiento de la tarjeta de cr�dito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_TYPE', 'Tipo de la tarjeta de cr�dito:');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_OWNER', '* El owner\' el nombre de s del de la tarjeta de cr�dito debe ser por lo menos los caracteres ' . CC_OWNER_MIN_LENGTH);
define('MODULE_PAYMENT_CRESECURE_TEXT_CVV_LINK', '�Cu�l es �l??');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_NUMBER', '* El n�mero de tarjeta de cr�dito debe ser por lo menos los caracteres ' . CC_NUMBER_MIN_LENGTH);
define('MODULE_PAYMENT_CRESECURE_TEXT_ERROR', 'Error de la tarjeta de cr�dito!');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_CVV', '* Usted debe incorporar un n�mero CVC para proceder.');
define('TEXT_CCVAL_ERROR_CARD_TYPE_MISMATCH', 'El tipo de la tarjeta de cr�dito que usted ha elegido no empareja el n�mero de tarjeta de cr�dito incorporado. Compruebe por favor el n�mero y el tipo de la tarjeta de cr�dito e intente otra vez.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'El n�mero CVC incorporado es incorrecto. Intente por favor otra vez.');
?>