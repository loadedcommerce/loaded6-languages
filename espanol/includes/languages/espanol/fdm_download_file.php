<?php
/*
  $Id: fdm_download_file.php,v 1.1.1.1 2006/10/13 Jagdish Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_LOGIN_REQUIRED', '<h2>Para descargar esta conexión requerida archivo, por favor tecleo <a href="' . tep_href_link(FILENAME_LOGIN, '', 'SSL') . '">aquí</a> a la conexión</h2>');
define('TEXT_PURCHASE_REQUIRED', '<h2>Para descargar este archivo, se requiere una compra requerida</h2>');
define('TEXT_FILE_UNAVAILABLE','<h2>Archivo inasequible</h2>'); 
define('ERROR_NO_FILE_ID', 'ERROR: El URL no contiene una identificación del archivo  Por favor webmaster del contacto.');
define('ERROR_FILE_INFORMATION_DOES_NOT_EXIST', 'ERROR: La información del archivo falta de base de datos.  Por favor webmaster del contacto.');
define('ERROR_FILE_DOES_NOT_EXIST', 'ERROR: El archivo no existe.  Por favor webmaster del contacto');

?>