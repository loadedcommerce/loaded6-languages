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
  define('MODULE_PAYMENT_PAYPAL_EC_TEXT_TITLE', 'PayPal Ausdrückliche Zahlung');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DESCRIPTION', '<a href=\"http://altfarm.mediaplex.com/ad/ck/3484-23890-3840-94\" target=\"_blank\" style=\"color:#0033cc\"> Get your Free PayPal Account!</a></style><br><br>PayPal WPP/EC <a href=\"' . DIR_WS_CATALOG . DIR_WS_MODULES . 'payment/paypal_wpp/doc/wpp.htm\" target=\"_blank\" style=\"color:#0033cc\"> [Setup Help]</a> </style><br> Credit Card Test Info:<br><br>CC#: 4111111111111111<br>Expiry: Any');
  define('MODULE_PAYMENT_PAYPAL_WPP_ERROR_HEADING', 'Es tut uns leid, aber wir waren nicht imstande, Ihre Kreditkarte zu verarbeiten.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CARD_ERROR', 'Die Kreditkarte Informationen, die Sie eintrugen, enthalten eine Störung. Überprüfen Sie es bitte und versuchen Sie noch einmal.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Vorname auf Kreditkarte:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_LASTNAME', 'Letzter Name auf Kreditkarte:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_TYPE', 'Kreditkarte Art:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_NUMBER', 'Kreditkarte Zahl:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_EXPIRES', 'Kreditkarte Verfallsdatum:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'CVV Zahl');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(gefunden an der Rückseite der Kreditkarte)');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_DECLINED', 'Ihre Kreditkarte wurde gesunken. Versuchen Sie bitte eine andere Karte oder treten Sie mit Ihrer Bank zu mehr Information in Verbindung.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_INVALID_RESPONSE', 'PayPal ging unzulässige oder unvollständige Daten zurück, um Ihren Auftrag durchzuführen. Versuchen Sie bitte noch einmal oder wählen Sie eine wechselnde Zahlung Methode vor.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_GEN_ERROR', 'Eine Störung trat auf, als wir versuchten, mit Bedienern PayPals in Verbindung zu treten.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ERROR', 'Eine Störung trat auf, als wir versuchten, Ihre Kreditkarte zu verarbeiten.<br><br>');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_CARD', 'Wir entschuldigen uns für die Unannehmlichkeit, aber PayPal nimmt nur Visum, Hauptkarte an, entdeckt, und der ausdrückliche Amerikaner. Benutzen Sie bitte eine andere Kreditkarte.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BAD_LOGIN', 'Es gab ein Problem, das Ihr Konto validiert. Bitte Versuch wieder.');                        
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_OWNER', '* Der Name des Inhabers der Kreditkarte muß mindestens sein ' . CC_OWNER_MIN_LENGTH . ' Buchstaben.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_NUMBER', '* Die Kreditkarte Zahl muß mindestens sein ' . CC_NUMBER_MIN_LENGTH . ' Buchstaben.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_HEADER', 'Schnelle, sichere Prüfung mit PayPal:');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_BUTTON_TEXT', 'Außer Zeit. Prüfung sicher.<br>Bezahlung, ohne Ihre finanziellen Informationen zu teilen.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_STATE_ERROR', 'Der Zustand, der Ihrem Konto zugewiesen wird, ist unzulässig. Steigen Sie bitte in Ihre Kontoeinstellungen ein und ändern Sie ihn.');
  define('MODULE_PAYMENT_PAYPAL_WPP_DIRECTPAY_ERROR', 'Kreditkartenzahlungssystem durch PayPal wurde nicht ermöglicht, bitte ausdrückliche Prüfung verwendet');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_JS_CC_CVC', '* Sie müssen eine Nr. CCV eintragen, um fortzufahren.\n');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_CVV_LINK', 'Was es ist?');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_EC_EXPLAIN', 'Erlaubt Ihnen, für Ihren Auftrag mit Ihrem PayPal Konto zu zahlen.');
  define('MODULE_PAYMENT_PAYPAL_WPP_TEXT_ACCEPTANCE_MARK', 'Außer Zeit. Überprüfen Sie heraus sicher. Zahlen Sie, ohne Ihre finanziellen Informationen zu teilen.');
?>