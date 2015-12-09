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
  define('MODULE_ADDONS_BUYSAFE_DESCRIPTION', '<p><b>liaison de buySAFE</b><br><b>Convertissez plus de vos clients en acheteurs avec le buySAFE</b><br>Le joint et l\'Obligation marchands collés par buySAFE montrés sur un site Web EST AVÉRÉ faire plus des visiteurs à votre achat de site Web à partir de vous en leur donnant la paix complète de l\'esprit.</p><p><b><u>Comme buySAFE le négociant collé, vous apprécierez: </u></b></p><ul>  <li>Augmentez dans la conversion de site Web - 6.8% plus haut en moyenne.</li><li>Rentabilité accrue - les bénéfices nets augmentent normalement près plus de 20%</li><li>Un avantage concurrentiel important - le buySAFE est exclusif, seulement le meilleur bidon qualifient pour être collés.</li></ul><p><b>Offre d\'introduction pour les négociants par CRE Loaded</b><br>Essayez le buySAFE et obtenez DEUX mois d\'accueil LIBREMENT !&nbsp; <b>Visite <a target="_blank" href="http://www.buysafe.com/offerCRE2"><font style="font-weight: bold;" color="#0033CC">www.buySAFE.com/offerCRE2</font></a> pour des détails!</b></p><b>3 étapes au buySAFE</b><br>1. Permettez le module<br>2. <a href="https://www.buysafe.com/web/login/registrationoptions.aspx?pfNameFull=' . STORE_OWNER . '&pfEmail=' . $store_email . '&pfStoreUrl=' . $http_server . DIR_WS_CATALOG . '&pfStoreName=' . STORE_NAME . '&pfMspId=59" tager="_blank" style="text-decoration:underline">Appliquez pour le buySAFE</a><br>3. Authentifiez Le Magasin');
  define('SUB_TITLE_TOTAL', 'Total:');
?>