<?php
/*
  $Id: newsletters.php,v 1.2 2003/09/24 13:57:08 wilt Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('TEXT_SELECTED_GROUPS', 'Groupes choisis de client');
define('TEXT_SELECT_GROUP', 'Choisissez le groupe');

define('TEXT_NEWSLETTER_RESELLER', 'Employés');
define('TEXT_GROUP_MODULE', 'Groupe:');
define('TEXT_GROUPS', 'Groupes de client');
define('TABLE_HEADING_GROUP', 'Groupe de client');
define('TEXT_ALL_GROUPS', 'Tous les groupes');
define('HEADING_TITLE', 'Gestionnaire de bulletin d\'informations');

define('TABLE_HEADING_NEWSLETTERS', 'Bulletin d\'informations');
define('TABLE_HEADING_SIZE', 'Taille');
define('TABLE_HEADING_MODULE', 'Module');
define('TABLE_HEADING_SENT', 'Envoyer');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_SELECT_CUSTOMER', 'Select Customer');
define('TEXT_ALL_CUSTOMERS', 'All Customers');
define('TEXT_NEWSLETTER_CUSTOMERS', 'To All Newsletter Subscribers');
define('TEXT_NEWSLETTER_CUSTOMER', 'Détail');
define('TEXT_NEWSLETTER_PRODUCER', 'Vente en gros');
define('TEXT_NEWSLETTER_MODULE', 'Module :');
define('TEXT_NEWSLETTER_TITLE', 'Titre du bulletin d\'informations :');
define('TEXT_NEWSLETTER_CONTENT', 'Contenu :');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Date d\'ajout :');
define('TEXT_NEWSLETTER_DATE_SENT', 'Date d\'envoi :');

define('TEXT_INFO_DELETE_INTRO', 'Etes vous sur de vouloir supprimer ce bulletin d\'informations ?');

define('TEXT_PLEASE_WAIT', 'Merci de patienter .. envois en cours ..<br><br>Merci de ne pas interrompre ce traitement !');
define('TEXT_FINISHED_SENDING_EMAILS', 'Fini.. courrier &eacute;lectronique envoy&eacute;s !');

define('ERROR_NEWSLETTER_TITLE', 'Erreur : Titre du bulletin d\'informations requis');
define('ERROR_NEWSLETTER_MODULE', 'Erreur : Module bulletin d\'informations requis');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', 'Erreur : Merci de fermer le bulletin d\'informations avant de le supprimer.');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', 'Erreur : Merci de fermer le bulletin d\'informations avant de l\'&eacute;diter.');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', 'Erreur : Merci de fermer le bulletin d\'informations avant de l\'envoyer.');
if (!defined('JS_PLEASE_SELECT_PRODUCTS')) {
  define('JS_PLEASE_SELECT_PRODUCTS', 'Veuillez s&eacute;lectionner des produits');
}
define('TEXT_PRODUCT_NOTIFICATIONS_NEWSLETTER_NAME', 'Avis de produit');
define('TEXT_CUSTOMER_NEWSLETTER_NAME', 'Bulletin de client');
define('TEXT_AFFILIATE_NEWSLETTER_NAME', 'Bulletin de filiale'); 
?>