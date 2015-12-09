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

define('TABLE_HEADING_TITLE', 'T�tulo');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tama�o');
define('TABLE_HEADING_ACTION', 'Acci�n');

define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nueva Reserva');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Local del Restore');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de reserva que pudo tomar un par de minutos.');
define('TEXT_INFO_UNPACK', '<br><br>(despu�s de desempaquetar el archivo del archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de la restauraci�n.<br><br>Cuanto m�s grande es la reserva, �este proceso dura!<br><br>Si es posible, utilice a cliente del mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de la restauraci�n.<br><br>Cuanto m�s grande es la reserva, �este proceso dura!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo uploaded debe ser un archivo crudo del sql (texto).');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tama�o:');
define('TEXT_INFO_COMPRESSION', 'Compresi�n:');
define('TEXT_INFO_USE_GZIP', 'Uso GZIP');
define('TEXT_INFO_USE_ZIP', 'Uso ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Ninguna compresi�n (SQL puro)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Transferencia directa solamente (no almacene el lado del servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Lo m�s mejor posible a trav�s de una conexi�n de HTTPS');
define('TEXT_DELETE_INTRO', '�Es usted seguro usted desea suprimir esta reserva?');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de Reserva:');
define('TEXT_LAST_RESTORATION', 'Restauraci�n Pasada:');
define('TEXT_FORGET', '(<u>olv�dese</u>)');

define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: El directorio de reserva no existe. Fije por favor esto adentro configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: El directorio de reserva no es writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: Acoplamiento de la transferencia directa no aceptable.');

define('SUCCESS_LAST_RESTORE_CLEARED', '�xito: La fecha pasada de la restauraci�n ha sido despej�.');
define('SUCCESS_DATABASE_SAVED', '�xito: Se ha ahorrado la base de datos.');
define('SUCCESS_DATABASE_RESTORED', '�xito: Se ha restaurado la base de datos.');
define('SUCCESS_BACKUP_DELETED', '�xito: Se ha quitado la reserva.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: No puedo quitar este archivo. Fije por favor los permisos derechos del usuario encendido: %s');
define('BYTES', ' octetos');

?>