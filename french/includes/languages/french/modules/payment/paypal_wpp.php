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
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TITLE', 'Paiement Expr�s De PayPal');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DESCRIPTION', '<a href=\"http://altfarm.mediaplex.com/ad/ck/3484-23890-3840-94\" target=\"_blank\" style=\"color:#0033cc\"> Get your Free PayPal Account!</a></style><br><br>PayPal WPP/EC <a href=\"' . DIR_WS_CATALOG . DIR_WS_MODULES . 'payment/paypal_wpp/doc/wpp.htm\" target=\"_blank\" style=\"color:#0033cc\"> [Setup Help]</a> </style><br> Credit Card Test Info:<br><br>CC#: 4111111111111111<br>Expiry: Any');
  define('MODULE_PAYMENT_PAYPAL_WPP_ERROR_HEADING', 'Nous sommes d�sol�s, mais nous ne pouvions pas traiter votre carte de degr� de solvabilit�.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CARD_ERROR', 'L\'information de carte de degr� de solvabilit� que vous avez �crite contient une erreur. Veuillez la v�rifier et essayez encore.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Pr�nom sur la carte de Degr� de solvabilit�:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_LASTNAME', 'Dernier nom sur la carte de Degr� de solvabilit�:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_TYPE', 'Type De Carte De Degr� de solvabilit�:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_NUMBER', 'Nombre De Carte De Degr� de solvabilit�:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_EXPIRES', 'Date D\'�ch�ance De Carte De Degr� de solvabilit�:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV Nombre');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(plac� au fond de la carte de degr� de solvabilit�)');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DECLINED', 'Votre carte de degr� de solvabilit� a �t� diminu�e. Veuillez essayer une autre carte ou contactez votre banque pour plus d\'information.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_INVALID_RESPONSE', 'PayPal est retourn� des donn�es inadmissibles ou inachev�es pour ex�cuter votre commande. Essayez svp encore ou choisissez une m�thode alternative de paiement.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_GEN_ERROR', 'Une erreur s\'est produite quand nous avons essay� d\'entrer en contact avec les serveurs de PayPal.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ERROR', 'Une erreur s\'est produite quand nous avons essay� de traiter votre carte de degr� de solvabilit�.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_CARD', 'Nous faisons des excuses pour le d�rangement, mais PayPal accepte seulement le visa, carte principale, le d�couvre, et American Express. Veuillez employer une carte diff�rente de degr� de solvabilit�.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_LOGIN', 'Il y avait un probl�me validant votre compte. Svp essai encore.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_OWNER', '* Le nom du propri�taire de la carte de degr� de solvabilit� doit �tre au moins ' . CC_OWNER_MIN_LENGTH . ' caract�res.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_NUMBER', '* Le nombre de carte de degr� de solvabilit� doit �tre au moins ' . CC_NUMBER_MIN_LENGTH . ' caract�res.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_HEADER', 'Contr�le rapide et bloqu� avec PayPal:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BUTTON_TEXT', '�conomiser le temps. Contr�le solidement.<br>Salaire sans partager votre information financi�re.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_STATE_ERROR', 'L\'�tat assign� � votre compte est inadmissible. Veuillez entrer dans vos arrangements de compte et changez-le.');
  define('MODULE_PAYMENT_PAYPAL_WPP_DIRECTPAY_ERROR', 'Le paiement de carte de degr� de solvabilit� par PayPal n\'a pas �t� permis, emploie svp le contr�le expr�s');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_CVC', '* Vous devez �crire un nombre CCV pour proc�der.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CVV_LINK', 'Ce qui est lui?');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_EXPLAIN', 'Vous permet de payer votre ordre en utilisant votre compte de PayPal.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ACCEPTANCE_MARK', '�conomiser le temps. V�rifiez solidement. Payez sans partager votre information financi�re.');
?>