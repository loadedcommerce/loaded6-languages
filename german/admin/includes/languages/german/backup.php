<?php
/*
  $Id: backup.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Datenbanksicherung'); 

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Gr&ouml;sse');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Neue Sicherung');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Lokal wiederherstellen');
define('TEXT_INFO_NEW_BACKUP', 'Bitte den Sicherungsprozess AUF KEINEN FALL unterbrechen. Dieser kann einige Minuten in Anspruch nehmen.');
define('TEXT_INFO_UNPACK', '<br><br>(nach dem die Dateien aus dem Archiv extrahiert wurden)');
define('TEXT_INFO_RESTORE', 'Den Wiederherstellungsprozess AUF KEINEN FALL unterbrechen.<br><br>Je gr&ouml;sser die Sicherungsdatei - desto l&auml;nger dauert die Wiederherstellung!<br><br>Bitte wenn m&ouml;glich den mysql client benutzen.<br><br>Beispiel:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Den Wiederherstellungsprozess AUF KEINEN FALL unterbrechen.<br><br>Je gr&ouml;sser die Sicherungsdatei - desto l&auml;nger dauert die Wiederherstellung!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Die Datei, welche hochgeladen wird muss eine sog. raw sql Datei sein (nur Text).');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Gr&ouml;sse:');
define('TEXT_INFO_COMPRESSION', 'Komprimieren:');
define('TEXT_INFO_USE_GZIP', 'Mit GZIP');
define('TEXT_INFO_USE_ZIP', 'Mit ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Keine Komprimierung (Raw SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Nur herunterladen (nicht auf dem Server speichern)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Sichere HTTPS Verbindung verwenden!');
define('TEXT_DELETE_INTRO', 'Sind Sie sicher, dass Sie diese Sicherung l&ouml;schen m&ouml;chten?');
define('TEXT_NO_EXTENSION', 'Keine');
define('TEXT_BACKUP_DIRECTORY', 'Sicherungsverzeichnis:');
define('TEXT_LAST_RESTORATION', 'Letzte Wiederherstellung:');
define('TEXT_FORGET', '(<u> vergessen</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fehler: Das Sicherungsverzeichnis ist nicht vorhanden.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fehler: Das Sicherungsverzeichnis ist schreibgesch&uuml;tzt.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fehler: Download Link nicht akzeptabel.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Erfolg: Das letzte Wiederherstellungdatum wurde gel&ouml;scht.');
define('SUCCESS_DATABASE_SAVED', 'Erfolg: Die Datenbank wurde gesichert.');
define('SUCCESS_DATABASE_RESTORED', 'Erfolg: Die Datenbank wurde wiederhergestellt.');
define('SUCCESS_BACKUP_DELETED', 'Erfolg: Die Sicherungsdatei wurde gel&ouml;scht.');

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

define('ERROR_FILE_NOT_REMOVEABLE', 'Fehler: Die Datei kann nicht gel&ouml;scht werden. Bitte korrigieren Sie die Zugriffsrechte f&uuml;r: %s !');
?>