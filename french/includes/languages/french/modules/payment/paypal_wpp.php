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
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TITLE', 'Paiement Exprès De PayPal');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DESCRIPTION', '<a href=\"http://altfarm.mediaplex.com/ad/ck/3484-23890-3840-94\" target=\"_blank\" style=\"color:#0033cc\"> Get your Free PayPal Account!</a></style><br><br>PayPal WPP/EC <a href=\"' . DIR_WS_CATALOG . DIR_WS_MODULES . 'payment/paypal_wpp/doc/wpp.htm\" target=\"_blank\" style=\"color:#0033cc\"> [Setup Help]</a> </style><br> Credit Card Test Info:<br><br>CC#: 4111111111111111<br>Expiry: Any');
  define('MODULE_PAYMENT_PAYPAL_WPP_ERROR_HEADING', 'Nous sommes désolés, mais nous ne pouvions pas traiter votre carte de degré de solvabilité.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CARD_ERROR', 'L\'information de carte de degré de solvabilité que vous avez écrite contient une erreur. Veuillez la vérifier et essayez encore.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Prénom sur la carte de Degré de solvabilité:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_LASTNAME', 'Dernier nom sur la carte de Degré de solvabilité:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_TYPE', 'Type De Carte De Degré de solvabilité:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_NUMBER', 'Nombre De Carte De Degré de solvabilité:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_EXPIRES', 'Date D\'Échéance De Carte De Degré de solvabilité:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV Nombre');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(placé au fond de la carte de degré de solvabilité)');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DECLINED', 'Votre carte de degré de solvabilité a été diminuée. Veuillez essayer une autre carte ou contactez votre banque pour plus d\'information.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_INVALID_RESPONSE', 'PayPal est retourné des données inadmissibles ou inachevées pour exécuter votre commande. Essayez svp encore ou choisissez une méthode alternative de paiement.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_GEN_ERROR', 'Une erreur s\'est produite quand nous avons essayé d\'entrer en contact avec les serveurs de PayPal.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ERROR', 'Une erreur s\'est produite quand nous avons essayé de traiter votre carte de degré de solvabilité.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_CARD', 'Nous faisons des excuses pour le dérangement, mais PayPal accepte seulement le visa, carte principale, le découvre, et American Express. Veuillez employer une carte différente de degré de solvabilité.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_LOGIN', 'Il y avait un problème validant votre compte. Svp essai encore.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_OWNER', '* Le nom du propriétaire de la carte de degré de solvabilité doit être au moins ' . CC_OWNER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_NUMBER', '* Le nombre de carte de degré de solvabilité doit être au moins ' . CC_NUMBER_MIN_LENGTH . ' caractères.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_HEADER', 'Contrôle rapide et bloqué avec PayPal:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BUTTON_TEXT', 'Économiser le temps. Contrôle solidement.<br>Salaire sans partager votre information financière.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_STATE_ERROR', 'L\'état assigné à votre compte est inadmissible. Veuillez entrer dans vos arrangements de compte et changez-le.');
  define('MODULE_PAYMENT_PAYPAL_WPP_DIRECTPAY_ERROR', 'Le paiement de carte de degré de solvabilité par PayPal n\'a pas été permis, emploie svp le contrôle exprès');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_CVC', '* Vous devez écrire un nombre CCV pour procéder.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CVV_LINK', 'Ce qui est lui?');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_EXPLAIN', 'Vous permet de payer votre ordre en utilisant votre compte de PayPal.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ACCEPTANCE_MARK', 'Économiser le temps. Vérifiez solidement. Payez sans partager votre information financière.');
?>