<?php
/*
  $Id: buysafe.php,v 1.0.0.0 2007/11/09 13:41:11 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2007 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

  define('MODULE_ADDONS_BUYSAFE_TITLE', 'buySAFE');
  if (strpos(STORE_OWNER_EMAIL_ADDRESS, '<')) {
    $store_email = substr(strstr(htmlentities(STORE_OWNER_EMAIL_ADDRESS), htmlentities('<')), 4, -4);
  } else {
    $store_email = STORE_OWNER_EMAIL_ADDRESS;
  }
  $http_server = (defined('HTTP_CATALOG_SERVER')) ? HTTP_CATALOG_SERVER : '';
  define('MODULE_ADDONS_BUYSAFE_DESCRIPTION', '<p><b>buySAFE Abbinden</b><br><b>Wandeln Sie mehr Ihrer Käufer in Kunden mit buySAFE um</b><br>Die buySAFE abgebundene Handelsdichtung und die Bindung, die auf einer Web site angezeigt wird, wird NACHGEWIESEN, mehr von den Besuchern zu Ihrem Web site Kauf von Ihnen zu bilden, indem man ihnen kompletten Frieden des Verstandes gibt.</p><p><b><u>Als buySAFE abgebundener Kaufmann, genießen Sie: </u></b></p><ul><li>Erhöhen Sie sich Web site Umwandlung - 6.8% stark auf Durchschnitt.</li><li>Erhöhte Rentabilität - Reingewinne erhöhen normalerweise sich vorbei über 20%.</li><li>Ein hauptsächlichwettbewerbsvorteil - buySAFE ist exklusiv, nur die beste Dose qualifizieren abgebunden zu werden.</li></ul><p><b>Einleitendes Angebot für CRE geladene Kaufleute</b><br>Versuchen Sie buySAFE und erhalten Sie ZWEI Monate von FREI bewirten!&nbsp; <b>Besuch <a target="_blank" href="http://www.buysafe.com/offerCRE2"><font style="font-weight: bold;" color="#0033CC">www.buySAFE.com/offerCRE2</font></a> für Details!</b></p><b>3 Schritte zum buySAFE</b><br>1. Ermöglichen Sie dem Modul<br>2. <a href="https://www.buysafe.com/web/login/registrationoptions.aspx?pfNameFull=' . STORE_OWNER . '&pfEmail=' . $store_email . '&pfStoreUrl=' . $http_server . DIR_WS_CATALOG . '&pfStoreName=' . STORE_NAME . '&pfMspId=59" tager="_blank" style="text-decoration:underline">Beantragen Sie buySAFE</a><br>3. Beglaubigen Sie Speicher');
  define('SUB_TITLE_TOTAL', 'Total:');
?>