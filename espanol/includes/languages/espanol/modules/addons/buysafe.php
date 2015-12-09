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
  define('MODULE_ADDONS_BUYSAFE_DESCRIPTION', '<p><b>vinculación del buySAFE</b><br><b>Convierta a más de sus compradores a los compradores con el buySAFE</b><br>El sello y el enlace mercantil enlazados buySAFE exhibidos en un Web site ES DEMOSTRADO hacer a más de los visitantes a su compra del Web site de usted dándoles la paz completa de la mente.</p><p><b>Como buySAFE comerciante enlazado, usted gozará</b><u><b>: </b> </u></p><ul>  <li>Aumente de la conversión del Web site - 6.8% más arriba en promedio.</li>  <li>Lo beneficioso creciente   - los beneficios netos aumentan normalmente cerca sobre el 20%.</li>  <li>Una ventaja competitiva importante - el buySAFE es exclusivo, sólo la mejor lata califica para ser enlazada.</li></ul><p><b>Oferta introductoria para los comerciantes cargados CRE</b><br>¡Intente el buySAFE y consiga DOS meses de recibimiento LIBREMENTE!&nbsp; <b>Visita <a target="_blank" href="http://www.buysafe.com/offerCRE2"><font style="font-weight: bold;" color="#0033CC">www.buySAFE.com/offerCRE2</font></a> ¡para los detalles!</b></p><b>3 pasos al buySAFE</b><br>1. Permita el módulo<br>2. <a href="https://www.buysafe.com/web/login/registrationoptions.aspx?pfNameFull=' . STORE_OWNER . '&pfEmail=' . $store_email . '&pfStoreUrl=' . $http_server . DIR_WS_CATALOG . '&pfStoreName=' . STORE_NAME . '&pfMspId=59" tager="_blank" style="text-decoration:underline">Solicite buySAFE</a><br>3. Authentique El Almacén<b>3 Steps to buySAFE</b><br>1. Enable the module<br>2. <a href="https://www.buysafe.com/web/login/registrationoptions.aspx?pfNameFull=' . STORE_OWNER . '&pfEmail=' . $store_email . '&pfStoreUrl=' . $http_server . DIR_WS_CATALOG . '&pfStoreName=' . STORE_NAME . '&pfMspId=59" tager="_blank" style="text-decoration:underline">Apply for buySAFE</a><br>3. Authenticate Store');
  define('SUB_TITLE_TOTAL', 'Total:');
?>