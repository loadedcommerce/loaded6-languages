<?php
/*
  $Id: backup.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gestionnaire de sauvegarde de la base de donn&eacute;es');

define('TABLE_HEADING_TITLE', 'Titre');
define('TABLE_HEADING_FILE_DATE', 'Date');
define('TABLE_HEADING_FILE_SIZE', 'Taille');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nouvelle sauvegarde');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurer localement');
define('TEXT_INFO_NEW_BACKUP', 'N\'interrompez pas le processus de sauvegarde. Celui-ci peut durer quelques minutes');
define('TEXT_INFO_UNPACK', '<br><br>(apr&egrave;s extraction des fichiers de l\'archive)');
define('TEXT_INFO_RESTORE', 'Ne pas interrompre le processus de restauration.<br><br>Plus le fichier est grand, plus cela prendra du temps!<br><br>Si possible, utilisez un client Mysql.<br><br>Par exemple :<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Ne pas interrompre le processus de restauration.<br><br>Plus le fichier est grand, plus cela prendra du temps!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Le fichier transf&eacute;rl&eacute; doit &ecirc;tre au format SQL brut (texte).');
define('TEXT_INFO_DATE', 'Date :');
define('TEXT_INFO_SIZE', 'Taille :');
define('TEXT_INFO_COMPRESSION', 'Compression :');
define('TEXT_INFO_USE_GZIP', 'Utiliser GZIP');
define('TEXT_INFO_USE_ZIP', 'Utiliser ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Pas de compression (Pur SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'T&eacute;l&eacute;charger seulement (ne pas le stocker côt&eacute; serveur)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Le meilleur dans le cas d\'une connexion HTTPS');
define('TEXT_DELETE_INTRO', 'Etes vous sur de vouloir supprimer cette sauvegarde ?');
define('TEXT_NO_EXTENSION', 'Aucune');
define('TEXT_BACKUP_DIRECTORY', 'R&eacute;pertoire de sauvegarde :');
define('TEXT_LAST_RESTORATION', 'Derni&egrave;re restauration :');
define('TEXT_FORGET', '(<u>oubli&eacute;</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Erreur : Le r&eacute;pertoire de sauvegarde n\'existe pas. Merci de le pr&eacute;ciser dans le fichier configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Erreur : Impossible d\'&eacute;crire dans le r&eacute;pertoire de sauvegarde.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Erreur : Lien de t&eacute;l&eacute;chargement non disponible.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Succ&egrave;s : La date de derniere restauration est modifi&eacute;e.');
define('SUCCESS_DATABASE_SAVED', 'Succ&egrave;s : La base de donn&eacute;es a &eacute;t&eacute; sauv&eacute;e.');
define('SUCCESS_DATABASE_RESTORED', 'Succ&egrave;s : La base de donn&eacute;es a &eacute;t&eacute; restaur&eacute;.');
define('SUCCESS_BACKUP_DELETED', 'Success : La base de donn&eacute;es a &eacute;t&eacute; supprim&eacute;.');
define('BYTES', ' bytes');

define('BACKUP_MYSQl_ERROR_MSG_1', 'Checking for mysql and mysql_dump: ');
define('BACKUP_MYSQl_ERROR_MSG_2', 'COMMAND FILES FOUND/SELECTED:');
define('BACKUP_MYSQl_ERROR_MSG_3', 'COMMAND: ');
define('BACKUP_MYSQl_ERROR_MSG_4', "valueA: ");
define('BACKUP_MYSQl_ERROR_MSG_5', "valueB: ");
define('BACKUP_MYSQl_ERROR_MSG_6', 'Result code: ');
define('BACKUP_MYSQl_ERROR_MSG_7', 'mysql path :  ');
define('BACKUP_MYSQl_ERROR_MSG_8', 'mysqlbump path: ');
define('BACKUP_MYSQl_ERROR_MSG_9', 'Debug Mode is ON: ');

define('BACKUP_MYSQl_DEBUG_MSG_1', 'Gzip found on server: ');
define('BACKUP_MYSQl_DEBUG_MSG_2', 'Gunzip found on server: ');
define('BACKUP_MYSQl_DEBUG_MSG_3', 'Zip found on server: ');
define('BACKUP_MYSQl_DEBUG_MSG_4', 'Unzip found on server: ');
define('BACKUP_MYSQl_DEBUG_MSG_5', 'Gzip was not found on the server: ');
define('BACKUP_MYSQl_DEBUG_MSG_6', 'Zip was not found on the server: ');

define('BACKUP_MYSQl_DEBUG_MSG_12', 'The Server operating system could not be detected: ');
define('BACKUP_MYSQl_DEBUG_MSG_7', 'The Server operating system appears to be FreeBSD or Linux: ');
define('BACKUP_MYSQl_DEBUG_MSG_8', 'The Server operating system Win NT based: ');

define('BACKUP_MYSQl_DEBUG_MSG_9', 'Using Zlib to sompress file: ');

define('BACKUP_MYSQl_DEBUG_MSG_10', 'Using PHP Gzip functions to compress file: ');
define('BACKUP_MYSQl_DEBUG_MSG_11', 'Using PHP Zip to compress file: ');

define('ERROR_FILE_NOT_REMOVEABLE', 'Erreur : Impossible de supprimer ce fichier. Merci de v&eacute;rifier les droits d\'acc&egrave;s sur : %s');
?>