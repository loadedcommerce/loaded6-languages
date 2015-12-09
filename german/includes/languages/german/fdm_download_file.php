<?php
/*
  $Id: fdm_download_file.php,v 1.1.1.1 2006/10/13 Jagdish Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2006 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('TEXT_LOGIN_REQUIRED', '<h2>Diesen Akte erforderlichen LOGON downloaden, bitte Klicken <a href="' . tep_href_link(FILENAME_LOGIN, '', 'SSL') . '">hier</a> zum LOGON</h2>');
define('TEXT_PURCHASE_REQUIRED', '<h2>Diesen Akte erforderlichen Erwerb downloaden, kaufen Sie bitte zuerst</h2>');
define('TEXT_FILE_UNAVAILABLE','<h2>Akte nicht erreichbar</h2>'); 
define('ERROR_NO_FILE_ID', 'STÖRUNG: URL enthält nicht eine Akte Identifikation  Bitte Kontakt webmaster.');
define('ERROR_FILE_INFORMATION_DOES_NOT_EXIST', 'STÖRUNG: Akte Informationen fehlen von der Datenbank.  Bitte Kontakt webmaster.');
define('ERROR_FILE_DOES_NOT_EXIST', 'STÖRUNG: Die Akte besteht nicht.  Bitte Kontakt webmaster.');

?>