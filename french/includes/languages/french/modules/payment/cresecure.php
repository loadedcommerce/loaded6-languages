<?php
/*
  $Id: cresecure.php,v 1.0 2009/01/27 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2009 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
define('MODULE_PAYMENT_CRESECURE_TEXT_TITLE', 'Par la carte de crédit par l\'intermédiaire de CRE Secure');
define('MODULE_PAYMENT_CRESECURE_TEXT_DESCRIPTION', '<div align="center"><img src="images/cre_secure.png"/></div><div style="padding:10px;"> <b>Système de paiement universel</b><br/>Voyez pour vous-même pourquoi CRE fixent sont la meilleure option pour les détaillants en ligne qui veulent un  conforme, manière concepteur-amicale d\'accepter des cartes de crédit.<br/><a href="http://cresecure.com/from_admin" target="_blank">Cliquez sur ici pour apprendre plus >></a><p>Version 1.0</p><p><a href="' . tep_href_link('cc_purge.php', '', 'SSL') . '">Utilité par la carte de crédit de purge >></a></p></div>');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_OWNER', 'Propriétaire par la carte de crédit:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_NUMBER', 'Nombre par la carte de crédit:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'échéance par la carte de crédit:');
define('MODULE_PAYMENT_CRESECURE_TEXT_CREDIT_CARD_TYPE', 'Type par la carte de crédit:');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_OWNER', '* L\'owner\' ; le nom de s du par la carte de crédit doit être au moins les caractères ' . CC_OWNER_MIN_LENGTH);
define('MODULE_PAYMENT_CRESECURE_TEXT_CVV_LINK', 'Qu\'est-ce que c\'est ?');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_NUMBER', '* Le nombre par la carte de crédit doit être au moins les caractères ' . CC_NUMBER_MIN_LENGTH);
define('MODULE_PAYMENT_CRESECURE_TEXT_ERROR', 'Erreur par la carte de crédit!');
define('MODULE_PAYMENT_CRESECURE_TEXT_JS_CC_CVV', '* Vous devez introduire un nombre CVC pour procéder.');
define('TEXT_CCVAL_ERROR_CARD_TYPE_MISMATCH', 'Le type par la carte de crédit que vous avez choisi n\'assortit pas le nombre par la carte de crédit introduit. Veuillez vérifier le nombre et le type par la carte de crédit et essayez encore.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Le nombre CVC introduit est incorrect. Essayez svp encore.');
?>