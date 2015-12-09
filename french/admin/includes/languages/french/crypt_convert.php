<?php
/*
  $Id: crypt_convert.php,v 1.1 2005/08/16 00:36:41 zip1 Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com
    Copyright (c) 2005 
    
  Released under the GNU General Public License
*/

define('TABLE_HEADING_CONFIGURATION_TITLE', 'Titre');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Valeur');
define('TABLE_HEADING_ACTION', 'Action');


define('HEADING_TITLE_OID', 'N&deg; Commande:');
define('HEADING_TITLE', 'Convertir de l\'ancienne clef vers la nouvelle clef.');
define('HEADING_TITLE_SEARCH', 'N&deg; Commande:');
define('HEADING_TITLE_STATUS', 'Statut:');
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDER_TOTAL', 'Total Commande');
define('TABLE_HEADING_DATE_PURCHASED', 'Date d\'achat');

define('TEXT_CARD_ENCRPYT', '<font color=green> <b> Ce num&eacute;ro de carte de cr&eacute;dit a &eacute;t&eacute; sauvegard&eacute; de fa&ccedil;on crypt&eacute;e </b></font>');
define('TEXT_CARD_NOT_ENCRPYT', '<font color=red> <b> Attention !!!! Ce num&eacute;ro de carte de cr&eacute;dit n\'a pas &eacute;t&eacute; sauvegard&eacute; de fa&ccedil;on crypt&eacute;e </b></font>');
define('TABLE_HEADING_IS_ENCRYPTED', 'Le num&eacute;ro de carte de cr&eacute;dit est-il crypt&eacute; ?');

define('TEXT_KEY_CURRENT', 'La cl&eacute; actuelle est: ');
define('TEXT_CONVRT_ALL', 'Convertir toutes les cartes de cr&eacute;dits avec la nouvelle clef');
define('TEXT_KEY_NEW', 'Nouvelle cl&eacute;: ');
define('TEXT_KEY_STATUS_01', '<font color=red> <b> Ce fichier n\'a pas de cl&eacute; de cryptage </b></font>');
define('TEXT_KEY_STATUS_02', '<font color=blue> <b> OK! Ce fichier a une cl&eacute; de cryptage </b></font>');
define('TEXT_KEY_STATUS_03', '<font color=red> <b> Veuillez &eacute;diter les fichiers cl&eacute; dans le gestionnaire des cl&eacute;s de cryptage </b></font>');

define('TEXT_INFO_DELETE_DATA', 'Nom du client  ');
define('TEXT_INFO_DELETE_DATA_OID', 'Num&eacute;ro de commande  ');

define('ERROR_KEY_DIRECTORY_DOES_NOT_EXIST', 'Attention!!!! Le r&eacute;pertoire des cl&eacute;s n\'existe pas.');
define('ERROR_KEY_DIRECTORY_NOT_WRITEABLE', 'Attention!!!!  Le r&eacute;pertoire des cl&eacute;s n\'est pas accessible en &eacute;criture.');
?>
