<?php
/*
  $Id: affiliate_affiliates.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $

  OSC-Affiliate

  Contribution based on:

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 - 2003 osCommerce
  Creload French Team for Creload 6.1
  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Affili&eacute;s');
define('HEADING_TITLE_SEARCH', 'Recherche:');

define('TABLE_HEADING_FIRSTNAME', '¨Pr&eacute;nom');
define('TABLE_HEADING_LASTNAME', 'Nom');
define('TABLE_HEADING_USERHOMEPAGE', 'Homepage');
define('TABLE_HEADING_COMMISSION','Commission');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Compte cr&eacute;&eacute;');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_AFFILIATE_ID','ID Affili&eacute;');

define('TEXT_DATE_ACCOUNT_CREATED', 'Compte Cr&eacute;&eacute;:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Derni&egrave;re modification:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Derni&egrave;re connexion:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Nombre de connexions:');
define('TEXT_INFO_TEMPLATE_ASIGNED','Template Asigned:');
define('TEXT_INFO_COMMISSION','Commission');
define('TEXT_INFO_NUMBER_OF_SALES', 'Nombre de Ventes:');
define('TEXT_INFO_COUNTRY', 'Pays:');
define('TEXT_INFO_SALES_TOTAL', 'Total des ventes:');
define('TEXT_INFO_AFFILIATE_TOTAL', 'Commission:');
define('TEXT_DELETE_INTRO', 'Etes vous sûr vous voulez supprimer cet affili&eacute;?');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Supprimer Affili&eacute;');
define('TEXT_DISPLAY_NUMBER_OF_AFFILIATES', 'Affichage <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> affili&eacute;s)');

define('ENTRY_AFFILIATE_PAYMENT_DETAILS', 'Payable &agrave;:');
define('ENTRY_AFFILIATE_PAYMENT_CHECK','Nom du destinataire du ch&egrave;que:');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL','Email du compte PayPal:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME','Nom de la Banque:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME','Nom du compte:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER','Num&eacute;ro de compte:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER','nombre ABA/BSB');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE','Code SWIFT ');
define('ENTRY_AFFILIATE_COMPANY','Soci&eacute;t&eacute;');
define('ENTRY_AFFILIATE_COMPANY_TAXID','Tax-Id.:');
define('ENTRY_AFFILIATE_HOMEPAGE','Homepage');
define('ENTRY_AFFILIATE_COMMISSION',' Paiement par vente et taux');
define('ENTRY_AFFILIATE_TEMPLATE','Affiliate Template');

define('CATEGORY_COMMISSION','Commission Individuelle');
define('CATEGORY_PAYMENT_DETAILS','Vous obtiendrez votre argent par:');


if (!defined('TYPE_BELOW')) {
  define('TYPE_BELOW', 'Type suivant');
}
define('PLEASE_SELECT', 'S&eacute;lectionnez en un');
define('AFFILIATE_PERCENT_NOT_SET', 'Non réglé');

    
// affilié cobrand
define('TITLE_AFFILIATE_COBRANDING','l\'image de marque d\'affiliation Co');
define('ENTRY_COBRANDING_COMPANY_LOGO','Co marque Logo:');
define('DELETE_COBRANDING_COMPANY_LOGO','Supprimer le logo');
define('ENTRY_COBRANDING_COMPANY_NAME','Co Nom de marque:');
define('ENTRY_COBRANDING_SLOGAN','Co marque slogan:');
define('ENTRY_COBRANDING_URL','Co Marque Web:');
define('ENTRY_COBRANDING_URL_HELP','http:// or https:// required.');
define('ENTRY_COBRANDING_SUPPORT_EMAIL','Customer Service Email:');
define('ENTRY_COBRANDING_SUPPORT_PHONE','Customer Service Phone:');

define('AFFILIATE_ERROR_DIRECTORY_DOES_NOT_EXIST','Répertoire:% s n\'existe pas.');
define('AFFILITE_ERROR_DIRECTORY_NOT_WRITABLE','Répertoire:% s n\'est pas en écriture.');
define('AFFILIATE_SUCCESS_DELETEED_IMAGE','Supprimé Affiliation Cobrand l\'image.');
define('AFFILIATE_SUCCESS_UPLOADED_IMAGE','Téléchargement d\'affiliation Cobrand l\'image.');
define('AFFILIATE_ERROR_UPLOADING_IMAGE','Impossible de transférer d\'affiliation Cobrand Image.');
define('AFFILIATE_ERROR_IMAGE_MISSING','Affiliation Cobrand Logo fichier est manquant.');

define('JS_COBRANDING_SALES_ERROR','* The \'Co Branding Sales E-Mail Address\' has problem.\n');
define('JS_COBRANDING_SUPPORT_ERROR','* The \'Co Branding Support E-Mail Address\' has problem.\n');
define('JS_COBRANDING_BILLING_ERROR','* The \'Co Branding Billing E-Mail Address\' has problem.\n');
?>
