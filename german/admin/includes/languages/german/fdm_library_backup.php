<?php
/*
  $Id: fdm_library_backup.php,v 1.0.0 2006/10/14 00:36:41 eversun Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'FDMS Datenbank-Unterstützungsmanager');

define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Größe');
define('TABLE_HEADING_ACTION', 'Tätigkeit');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Neue Unterstützung');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Wiederherstellung Einheimischer');
define('TEXT_INFO_NEW_BACKUP', 'Unterbrechen Sie nicht den Aushilfsprozeß, der ein Paar von Minuten nehmen konnte.');
define('TEXT_INFO_UNPACK', '<br><br>(nach dem Auspacken der Akte vom Archiv)');
define('TEXT_INFO_RESTORE', 'Unterbrechen Sie nicht den Wiederherstellungprozeß.<br><br>Das größer die Unterstützung, länger nimmt dieser Prozeß!<br><br>Wenn möglich, verwenden Sie den mysql Klienten.<br><br>Z.B.:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Unterbrechen Sie nicht den Wiederherstellungprozeß.<br><br>Das größer die Unterstützung, länger nimmt dieser Prozeß!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Die gehochladene Akte muß eine rohe sql (Text) Akte sein.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Größe:');
define('TEXT_INFO_COMPRESSION', 'Kompression:');
define('TEXT_INFO_USE_GZIP', 'Gebrauch GZIP');
define('TEXT_INFO_USE_ZIP', 'Gebrauch ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Keine Kompression (reiner SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Nur Download (speichern Sie nicht Bedienerseite)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Gut durch einen HTTPS Anschluß');
define('TEXT_DELETE_INTRO', 'Sind Sie Sie möchten diese Unterstützung löschen sicher?');
define('TEXT_NO_EXTENSION', 'Kein');
define('TEXT_BACKUP_DIRECTORY', 'Aushilfsverzeichnis:');
define('TEXT_LAST_RESTORATION', 'Letzte Wiederherstellung:');
define('TEXT_FORGET', '(<u>vergessen Sie</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Störung: Aushilfsverzeichnis besteht nicht. Stellen Sie bitte dieses zusammenbauen innen configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Störung: Aushilfsverzeichnis ist nicht writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Störung: Downloadverbindung nicht annehmbar.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Erfolg: Das letzte Wiederherstellungdatum ist löschte gewesen..');
define('SUCCESS_DATABASE_SAVED', 'Erfolg: Die Datenbank ist gespeichert worden.');
define('SUCCESS_DATABASE_RESTORED', 'Erfolg: Die Datenbank ist wieder hergestellt worden.');
define('SUCCESS_BACKUP_DELETED', 'Erfolg: Die Unterstützung ist entfernt worden.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Störung: Ich kann nicht diese Akte entfernen. Stellen Sie bitte die rechte Benutzererlaubnis an ein: %s');
define('BYTES', ' bytes');

?>