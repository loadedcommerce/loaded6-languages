<?php
/*
  $Id: index.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
if ( ($category_depth == 'products') || (isset($_GET['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Faites votre choix :');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Quoi de neuf ?');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Cat&eacute;gories');
}
define('TEXT_MAIN', 'C\'est l\'installation de défaut du logiciel de CRE Loaded. Les produits montrés ici sont pour <b>la démonstration seulement</b>. Aucun produit acheté ne sera livré ni le client sera affiché.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveaux produits pour %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produits &agrave; venir');
define('TABLE_HEADING_DATE_EXPECTED', 'Date pr&eacute;vue');
define('TABLE_HEADING_DEFAULT_SPECIALS', 'Promotions pour %s');
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Mod&egrave;le');
define('TABLE_HEADING_PRODUCTS', 'Nom du produit');
define('TABLE_HEADING_MANUFACTURER', 'Constructeurs');
define('TABLE_HEADING_QUANTITY', 'Qte');
define('TABLE_HEADING_PRICE', 'Prix');
define('TABLE_HEADING_WEIGHT', 'Poids');
define('TABLE_HEADING_BUY_NOW', 'Acheter');
define('TEXT_NO_PRODUCTS', 'Il n\'y a aucun produit dans cette cat&eacute;gorie.');
define('TEXT_NO_PRODUCTS2', 'Il n\'y a aucun produit de ce fabricant.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Nombre de produits : ');
define('TEXT_SHOW', '<b>Voir :</b>');
define('TEXT_BUY', 'Acheter 1 \'');
define('TEXT_NOW', '\' maintenant');
define('TEXT_ALL_CATEGORIES', 'Toutes cat&eacute;gories');
define('TEXT_ALL_MANUFACTURERS', 'Tous fabricants');
define('HEADING_CUSTOMER_GREETING', 'F&eacute;licitation cher client');
define('MAINPAGE_HEADING_TITLE', 'Titre principal de la page');
define('TABLE_HEADING_FEATURED_PRODUCTS', 'Descriptions Produits');
define('TABLE_HEADING_FEATURED_PRODUCTS_CATEGORY', 'Descriptions Produits %s'); 
?>