<?php
/*
  $Id: fdm_library_backup.php,v 1.0.0 2006/10/14 00:36:41 eversun Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'FDMS Directeur de protection de base de données');

define('TABLE_HEADING_TITLE', 'Titre');
define('TABLE_HEADING_FILE_DATE', 'Date');
define('TABLE_HEADING_FILE_SIZE', 'Taille');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nouvelle protection');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Gens du pays de restauration');
define('TEXT_INFO_NEW_BACKUP', 'N\'interrompez pas le processus de secours qui pourrait prendre un couple des minutes.');
define('TEXT_INFO_UNPACK', '<br><br>(après déballage du dossier des archives)');
define('TEXT_INFO_RESTORE', 'N\'interrompez pas le processus de restauration.<br><br>Plus la protection est grande, plus ce processus dure!<br><br>Si possible, employez le client de mysql.<br><br>Par exemple:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'N\'interrompez pas le processus de restauration.<br><br>Plus la protection est grande, plus ce processus dure!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Le dossier téléchargé doit être un dossier cru de SQL (texte).');
define('TEXT_INFO_DATE', 'Date:');
define('TEXT_INFO_SIZE', 'Taille:');
define('TEXT_INFO_COMPRESSION', 'Compression:');
define('TEXT_INFO_USE_GZIP', 'Utilisation GZIP');
define('TEXT_INFO_USE_ZIP', 'Utilisation ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Aucune compression (SQL pur)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Téléchargement seulement (ne stockez pas le côté de serveur)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Mieux par un raccordement de HTTPS');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûr vous voulez-vous supprimer cette protection?');
define('TEXT_NO_EXTENSION', 'Aucun');
define('TEXT_BACKUP_DIRECTORY', 'Annuaire de Secours:');
define('TEXT_LAST_RESTORATION', 'Dernière Restauration:');
define('TEXT_FORGET', '(<u>oubliez</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Erreur: L\'annuaire de secours n\'existe pas. Veuillez placer ceci configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Erreur: L\'annuaire de secours n\'est pas writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Erreur: Lien de téléchargement non acceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succès: La dernière date de restauration a été s\'est dégagée.');
define('SUCCESS_DATABASE_SAVED', 'Succès: La base de données a été sauvée.');
define('SUCCESS_DATABASE_RESTORED', 'Succès: La base de données a été reconstituée.');
define('SUCCESS_BACKUP_DELETED', 'Succès: La protection a été enlevée.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Erreur: Je ne peux pas enlever ce dossier. Veuillez placer les bonnes permissions d\'utilisateur dessus: %s');
define('BYTES', ' bytes');

?>