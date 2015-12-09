<?php
/*
  $Id: fdm_library_backup.php,v 1.0.0 2006/10/14 00:36:41 eversun Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gerente de Reserva de Base de datos de CDS');
define('TABLE_HEADING_TITLE', 'T�tulo');
define('TABLE_HEADING_FILE_DATE', 'Fecha');
define('TABLE_HEADING_FILE_SIZE', 'Tama�o');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TEXT_INFO_HEADING_NEW_BACKUP', 'Nueva Reserva');
define('TEXT_INFO_HEADING_RESTORE_LOCAL', 'Restaure Local');
define('TEXT_INFO_NEW_BACKUP', 'No interrumpa el proceso de reserva que podr�a tomar un par de minutos. ');
define('TEXT_INFO_UNPACK', '<br><br>(despu�s de desempaquetar el archivo del archivo)');
define('TEXT_INFO_RESTORE', 'No interrumpa el proceso de restauraci�n.<br><br>�M�s grande la reserva, m�s largo este proceso toma!<br><br>De ser posible, use al cliente mysql.<br><br>Por ejemplo:<br><br><b>mysql -h' . DB_SERVER . ' -u' . DB_SERVER_USERNAME . ' -p ' . DB_DATABASE . ' < %s </b> %s');
define('TEXT_INFO_RESTORE_LOCAL', 'No interrumpa el proceso de restauraci�n.<br><br>�M�s grande la reserva, m�s largo este proceso toma!');
define('TEXT_INFO_RESTORE_LOCAL_RAW_FILE', 'El archivo cargado debe ser un sql crudo (texto) archivo.');
define('TEXT_INFO_DATE', 'Fecha:');
define('TEXT_INFO_SIZE', 'Tama�o:');
define('TEXT_INFO_COMPRESSION', 'Compresi�n:');
define('TEXT_INFO_USE_GZIP', 'Uso GZIP');
define('TEXT_INFO_USE_ZIP', 'Uso ZIP');
define('TEXT_INFO_USE_NO_COMPRESSION', 'Ninguna Compresi�n (SQL puro)');
define('TEXT_INFO_DOWNLOAD_ONLY', 'Descargue s�lo (no almacene el lado de servidor)');
define('TEXT_INFO_BEST_THROUGH_HTTPS', 'Mejor por una uni�n HTTPS');
define('TEXT_DELETE_INTRO', '�Usted est� seguro que usted quiere suprimir esta reserva?');
define('TEXT_NO_EXTENSION', 'Ninguno');
define('TEXT_BACKUP_DIRECTORY', 'Directorio de Reserva:');
define('TEXT_LAST_RESTORATION', '�ltima Restauraci�n:');
define('TEXT_FORGET', '(<u>olvidar</u>)');
define('ERROR_BACKUP_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de reserva no existe. Por favor juego este en configure.php.');
define('ERROR_BACKUP_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio de reserva no es writeable.');
define('ERROR_DOWNLOAD_LINK_NOT_ACCEPTABLE', 'Error: eslab�n de telecarga no aceptable.');
define('SUCCESS_LAST_RESTORE_CLEARED', '�xito: la �ltima fecha de restauraci�n ha sido limpiada.');
define('SUCCESS_DATABASE_SAVED', '�xito: la base de datos ha sido salvada.');
define('SUCCESS_DATABASE_RESTORED', '�xito: la base de datos ha sido restaurada.');
define('SUCCESS_BACKUP_DELETED', '�xito: la reserva ha sido quitada.');
define('ERROR_FILE_NOT_REMOVEABLE', 'Error: no puedo quitar este archivo. Por favor ponga los permisos de usuario derechos en: %s');
define('BYTES', ' bytes');

?>