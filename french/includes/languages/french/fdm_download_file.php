<?php
/*
  $Id: fdm_download_file.php,v 1.1.1.1 2006/10/13 Jagdish Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_LOGIN_REQUIRED', '<h2>Pour télécharger cette ouverture requise par dossier, svp clic <a href="' . tep_href_link(FILENAME_LOGIN, '', 'SSL') . '">ici</a> à l\'ouverture</h2>');
define('TEXT_PURCHASE_REQUIRED', '<h2>Pour télécharger cet achat requis par dossier, achetez svp d\'abord</h2>');
define('TEXT_FILE_UNAVAILABLE','<h2>Dossier indisponible</h2>'); 
define('ERROR_NO_FILE_ID', 'ERREUR : URL ne contient pas une identification de dossier  Svp webmaster de contact.');
define('ERROR_FILE_INFORMATION_DOES_NOT_EXIST', 'ERREUR: L\'information de dossier est absente de la base de données.  Svp webmaster de contact.');
define('ERROR_FILE_DOES_NOT_EXIST', 'ERREUR : Le dossier n\'existe pas.  Svp webmaster de contact.');

?>