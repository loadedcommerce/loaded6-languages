<?php
/*
  $Id: paypal_wpp.php,v 1.0.0.0 2007/11/12 13:41:11 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2007 Chain Reaction Ecommerce, Inc.
  Copyright (c) 2007 PayPal Inc. 
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License

*/
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_TITLE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPAL_WPP_MODULE_TITLE', 'PayPal Express Checkout');
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TITLE', 'Pago Expreso De PayPal');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DESCRIPTION', '<a href=\"http://altfarm.mediaplex.com/ad/ck/3484-23890-3840-94\" target=\"_blank\" style=\"color:#0033cc\"> Get your Free PayPal Account!</a></style><br><br>PayPal WPP/EC <a href=\"' . DIR_WS_CATALOG . DIR_WS_MODULES . 'payment/paypal_wpp/doc/wpp.htm\" target=\"_blank\" style=\"color:#0033cc\"> [Setup Help]</a> </style><br> Credit Card Test Info:<br><br>CC#: 4111111111111111<br>Expiry: Any');
  define('MODULE_PAYMENT_PAYPAL_WPP_ERROR_HEADING', 'Estamos apesadumbrados, pero no pod�amos procesar su tarjeta de cr�dito.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CARD_ERROR', 'La informaci�n de la tarjeta de cr�dito que usted incorpor� contiene un error. Compru�bela por favor e intente otra vez.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Nombre en tarjeta de cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_LASTNAME', 'Nombre pasado en tarjeta de cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_TYPE', 'Tipo De la Tarjeta De Cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_NUMBER', 'N�mero De la Tarjeta De Cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_EXPIRES', 'Fecha De Vencimiento De la Tarjeta De Cr�dito:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV N�mero');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(localizado en la parte posteriora de la tarjeta de cr�dito)');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DECLINED', 'Su tarjeta de cr�dito fue declinada. Intente por favor otra tarjeta o entre en contacto con su banco para m�s informaci�n.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_INVALID_RESPONSE', 'PayPal volvi� los datos inv�lidos o incompletos para terminar su orden. Intente por favor otra vez o seleccione un m�todo alterno del pago.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_GEN_ERROR', 'Un error ocurri� cuando intentamos entrar en contacto con los servidores de PayPal.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ERROR', 'Un error ocurri� cuando intentamos procesar su tarjeta de cr�dito.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_CARD', 'Nos disculpamos por la inconveniencia, pero PayPal acepta solamente la visa, tarjeta principal, la descubre, y americano expreso. Utilice por favor una diversa tarjeta de cr�dito.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_LOGIN', 'Hab�a un problema que validaba su cuenta. Por favor intento otra vez.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_OWNER', '* El nombre del due�o de la tarjeta de cr�dito debe estar por lo menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_NUMBER', '* El n�mero de la tarjeta de cr�dito debe estar por lo menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_HEADER', 'Comprobaci�n r�pida, segura con PayPal:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BUTTON_TEXT', 'Excepto tiempo. Comprobaci�n con seguridad.<br>Paga sin compartir su informaci�n financiera.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_STATE_ERROR', 'El estado asignado a su cuenta es inv�lido. Entre por favor sus ajustes de la cuenta y camb�elo.');
  define('MODULE_PAYMENT_PAYPAL_WPP_DIRECTPAY_ERROR', 'El pago de tarjeta de cr�dito con PayPal no fue permitido, utiliza por favor la comprobaci�n expresa.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_CVC', '*Usted debe incorporar un n�mero CCV para proceder.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CVV_LINK', 'Cu�l es �l?');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_EXPLAIN', 'Permite que usted pague su orden usando su cuenta de PayPal.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ACCEPTANCE_MARK', 'Excepto tiempo. Compruebe hacia fuera con seguridad. Pague sin compartir su informaci�n financiera.');
?>