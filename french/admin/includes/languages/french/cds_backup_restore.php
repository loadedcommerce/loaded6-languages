<?php
/*
  $Id: fdm_library_backup.php,v 1.0.0 2006/10/14 00:36:41 eversun Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Directeur de Soutien de Base de données de DISQUES COMPACTS');
define('TABLE_HEADING_TITLE', 'Titre');
define('TABLE_HEADING_FILE_DATE', 'Date');
define('TABLE_HEADING_FILE_SIZE', 'Grandeur');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nouveau Soutien');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restituez Local');
define('TEXT_INFO_NEW_BACKUP', 'N\'interrompez pas le processus de renfort qui pourrait prendre deux ou trois minutes.');
define('TEXT_INFO_UNPACK', '<br><br>(après le fait de défaire le dossier des archives)');
define('TEXT_INFO_RESTORE', 'N\'interrompez pas le processus de restauration.<br><br>Plus grand le soutien, plus long ce processus prend!<br><br>Si possible, utilisez le client mysql.<br><br>Par exemple :<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'N\'interrompez pas le processus de restauration. Plus grand le soutien, plus long ce processus prend!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Le dossier téléversé doit être des matières premières sql (le texte) le dossier.');
define('TEXT_INFO_DATE', 'Date :');
define('TEXT_INFO_SIZE', 'Grandeur :');
define('TEXT_INFO_COMPRESSION', 'Compression :');
define('TEXT_INFO_USE_GZIP', 'Utilisez GZIP');
define('TEXT_INFO_USE_ZIP', 'Utilisez la FERMETURE À GLISSIÈRE');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Aucune Compression (SQL Pur)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Téléchargez seulement (ne conservez pas de côté de serveur)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Le mieux par une connexion HTTPS');
define('TEXT_DELETE_INTRO', 'Êtes-vous sûrs que vous voulez effacer ce soutien ?');
define('TEXT_NO_EXTENSION', 'Personne');
define('TEXT_BACKUP_DIRECTORY', 'Annuaire de Renfort :');
define('TEXT_LAST_RESTORATION', 'Dernière Restauration :');
define('TEXT_FORGET', '(<u>oublier</u>)');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Erreur : l\'annuaire de renfort n\'existe pas. S\'il vous plaît le jeu cela dans configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Erreur : l\'annuaire de renfort n\'est pas writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Erreur : lien de Téléchargement non acceptable.');
define('SUCCESS_LAST_RESTORE_CLEARED', 'Succès : la dernière date de restauration a été dégagée.');
define('SUCCESS_DATABASE_SAVED', 'Succès : la base de données a été sauvée.');
define('SUCCESS_DATABASE_RESTORED', 'Succès : la base de données a été restituée.');
define('SUCCESS_BACKUP_DELETED', 'Succès : le soutien a été enlevé.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Erreur : je ne peux pas enlever ce dossier. Mettez s\'il vous plaît les permissions d\'utilisateur justes sur : %s');
define('BYTES', ' octets');

?>