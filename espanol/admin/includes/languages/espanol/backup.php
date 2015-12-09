<?php
/*
  $Id: backup.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $
  Translated by: jparis v1.0
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Copia de seguridad de la base de datos');

define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nueva copia de seguridad');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaurar localmente');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de copia, que puede durar unos minutos.');
define('TEXT_INFO_UNPACK', '<br><br>(despues de descomprimir el archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de restauración.<br><br>¡Cuanto más grande sea la copia de seguridad, más tardará este proceso!<br><br>Si es posible, use el cliente de mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de restauración.<br><br>¡Cuanto más grande sea la copia de seguridad, más tardará este proceso!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo subido debe ser de texto.');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tamaño:');
define('TEXT_INFO_COMPRESSION', 'Compresión:');
define('TEXT_INFO_USE_GZIP', 'Usar GZIP');
define('TEXT_INFO_USE_ZIP', 'Usar ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Sin compresión (directamente SQL)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Descargar sólo (no guardar en el servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Preferiblemente con una conexión segura HTTPS');
define('TEXT_DELETE_INTRO', '¿Seguro que quiere eliminar esta copia de seguridad?');
define('TEXT_NO_EXTENSION', 'Ninguna');
define('TEXT_BACKUP_DIRECTORY', 'Directorio para copias de seguridad:');
define('TEXT_LAST_RESTORATION', 'Última restauración:');
define('TEXT_FORGET', '(<u>descartar</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: No existe el directorio de copias de seguridad. Por favor indíquelo en configure.php');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: No hay permiso de escritura en el directorio de copias de seguridad.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: No se aceptan enlaces.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'OK: La fecha de última restauración ha sido borrada.');
define('SUCCESS_DATABASE_SAVED', 'OK: Se ha guardado la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'OK: Se ha restaurado la base de datos.');
define('SUCCESS_BACKUP_DELETED', 'OK: Se ha eliminado la copia de seguridad.');

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

define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No puedo quitar este archivo. Fije por favor los permisos derechos del usuario encendido: %s');
?>