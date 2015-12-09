<?php
/*
  $Id: fdm_library_backup.php,v 1.0.0 2006/10/14 00:36:41 eversun Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'CDS-Datenbankaushilfsbetriebsleiter');
define('TABLE_HEADING_TITLE', 'Titel');
define('TABLE_HEADING_FILE_DATE', 'Datum');
define('TABLE_HEADING_FILE_SIZE', 'Größe');
define('TABLE_HEADING_ACTION', 'Handlung');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Neue Unterstützung');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Stellen Sie Lokal wiederher');
define('TEXT_INFO_NEW_BACKUP', 'Unterbrechen Sie den Aushilfsprozess nicht, der ein paar Minuten nehmen könnte.');
define('TEXT_INFO_UNPACK', '<br><br>(nach dem Auspacken der Datei vom Archiv)');
define('TEXT_INFO_RESTORE', 'Unterbrechen Sie den Wiederherstellungsprozess nicht.<br><br>Unterstützung, desto länger dieser Prozess nimmt!<br><br>Wenn möglich, verwenden Sie den mysql Kunden.<br><br>Zum Beispiel:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'Unterbrechen Sie den Wiederherstellungsprozess nicht.<br><br>Je größer die Unterstützung, desto länger dieser Prozess nimmt!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'Die geladene Datei muss ein Rohstoff sql (Text) Datei sein.');
define('TEXT_INFO_DATE', 'Datum:');
define('TEXT_INFO_SIZE', 'Größe:');
define('TEXT_INFO_COMPRESSION', 'Kompression:');
define('TEXT_INFO_USE_GZIP', 'Gebrauch GZIP');
define('TEXT_INFO_USE_ZIP', 'GEBRAUCH-SCHWIRREN');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Keine Kompression (Reiner SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Laden Sie herunter nur (versorgen Sie Server-Seite nicht)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Am besten durch eine HTTPS Verbindung');
define('TEXT_DELETE_INTRO', 'Sind Sie sicher, dass Sie diese Unterstützung löschen wollen?');
define('TEXT_NO_EXTENSION', 'Niemand');
define('TEXT_BACKUP_DIRECTORY', 'Aushilfsverzeichnis:');
define('TEXT_LAST_RESTORATION', 'Letzte Wiederherstellung:');
define('TEXT_FORGET', '(<u>vergessen</u>)');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Fehler: Aushilfsverzeichnis besteht nicht. Bitte Satz das in configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Fehler: Aushilfsverzeichnis ist nicht writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Fehler: nicht annehmbare Download-Verbindung.');
define('SUCCESS_LAST_RESTORE_CLEARED', 'Erfolg: Das letzte Wiederherstellungsdatum ist geklärt worden.');
define('SUCCESS_DATABASE_SAVED', 'Erfolg: Die Datenbank ist gespart worden.');
define('SUCCESS_DATABASE_RESTORED', 'Erfolg: Die Datenbank ist wiederhergestellt worden.');
define('SUCCESS_BACKUP_DELETED', 'Erfolg: Die Unterstützung ist entfernt worden.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Fehler: ich kann nicht diese Datei entfernen. Setzen Sie bitte die richtige Benutzererlaubnis darauf: %s');
define('BYTES', ' Bytes');

?>