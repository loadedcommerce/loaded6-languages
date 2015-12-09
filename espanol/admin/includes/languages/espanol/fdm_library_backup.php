<?php
/*
  $Id: fdm_library_backup.php,v 1.0.0 2006/10/14 00:36:41 eversun Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'FDMS Encargado de la reserva de la base de datos');

define('TABLE_HEADING_TITLE', 'Título');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tamaño');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nueva Reserva');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Local del Restore');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de reserva que pudo tomar un par de minutos.');
define('TEXT_INFO_UNPACK', '<br><br>(después de desempaquetar el archivo del archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de la restauración.<br><br>Cuanto más grande es la reserva, ¡este proceso dura!<br><br>Si es posible, utilice a cliente del mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de la restauración.<br><br>Cuanto más grande es la reserva, ¡este proceso dura!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo uploaded debe ser un archivo crudo del sql (texto).');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tamaño:');
define('TEXT_INFO_COMPRESSION', 'Compresión:');
define('TEXT_INFO_USE_GZIP', 'Uso GZIP');
define('TEXT_INFO_USE_ZIP', 'Uso ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Ninguna compresión (SQL puro)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Transferencia directa solamente (no almacene el lado del servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Lo más mejor posible a través de una conexión de HTTPS');
define('TEXT_DELETE_INTRO', '¿Es usted seguro usted desea suprimir esta reserva?');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de Reserva:');
define('TEXT_LAST_RESTORATION', 'Restauración Pasada:');
define('TEXT_FORGET', '(<u>olvídese</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de reserva no existe. Fije por favor esto adentro configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de reserva no es writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: Acoplamiento de la transferencia directa no aceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', 'Éxito: La fecha pasada de la restauración ha sido despejó.');
define('SUCCESS_DATABASE_SAVED', 'Éxito: Se ha ahorrado la base de datos.');
define('SUCCESS_DATABASE_RESTORED', 'Éxito: Se ha restaurado la base de datos.');
define('SUCCESS_BACKUP_DELETED', 'Éxito: Se ha quitado la reserva.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No puedo quitar este archivo. Fije por favor los permisos derechos del usuario encendido: %s');
define('BYTES', ' octetos');

?>