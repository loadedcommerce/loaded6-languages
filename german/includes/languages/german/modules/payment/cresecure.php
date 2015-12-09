<?php
/*
  $Id: cresecure.php,v 1.0 2009/01/27 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2009 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_CRESECURE_TEXT_TITLE', 'Kreditkarte über CRE Secure');
define('MODULE_PAYMENT_CRESECURE_TEXT_DESCRIPTION', '<div align="center"><img src="images/cre_secure.png"/></div><div style="padding:10px;"> <b>Universalzahlungs-System</b><br/>Sehen Sie für selbst, warum CRE ist die beste Wahl für on-line-Einzelhändler sichern, die eine gefällige , Entwerfer-freundliche Weise, Kreditkarten anzunehmen wünschen.<br/><a href="http://cresecure.com/from_admin" target="_blank">Klicken Sie hier, um mehr zu erlernen >></a><p>Version 1.0</p><p><a href="' . tep_href_link('cc_purge.php', '', 'SSL') . '">Kreditkarte-Bereinigungs-Dienstprogramm >></a></p></div>');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_OWNER', 'Kreditkarte-Inhaber:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_NUMBER', 'Kreditkartennummer:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_EXPIRES', 'Kreditkarte-Verfallsdatum:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_TYPE', 'Kreditkarte-Art:');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_OWNER', '* Das owner\' s-Name der Kreditkarte muss mindestens Buchstaben ' . CC_OWNER_MIN_LENGTH . ' sein.');
define('MODULE_PAYMENT_CRESECURE_TEXT_CVV_LINK', 'Was ist es?');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_NUMBER', '* Die Kreditkartennummer muss mindestens Buchstaben ' . CC_NUMBER_MIN_LENGTH . ' sein.');
define('MODULE_PAYMENT_CRESECURE_TEXT_ERROR', 'Kreditkarte-Störung!');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_CVV', '* Sie müssen eine Nr. CVC eingeben, um fortzufahren.\n');
define('TEXT_CCVAL_ERROR_CARD_TYPE_MISMATCH', 'Die Kreditkarteart, die Sie gewählt haben, bringt nicht die eingegebene Kreditkartennummer zusammen. Überprüfen Sie bitte die Zahl und die Kreditkarteart und versuchen Sie noch einmal.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Die Nr. CVC, die eingegeben wird, ist falsch. Versuchen Sie bitte noch einmal..');
?>