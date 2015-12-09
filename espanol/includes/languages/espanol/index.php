<?php
/*
  $Id: index.php,v 1.1.1.1 2004/03/04 23:41:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
if ( ($category_depth == 'products') || (isset($_GET['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'A ver que tenemos aqui');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', '&iquest;Que hay de nuevo por aqui?');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Categorias');
}
define('TEXT_MAIN', 'Ésta es la disposición del defecto del software de CRE Loaded. Los productos demostrados aquí están para los propósitos de la demostración solamente. Ninguna productos comprada no serán entregados ni el cliente serán mandados la cuenta.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Nuevos Productos En %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Pr&oacute;ximamente');
define('TABLE_HEADING_DATE_EXPECTED', 'Lanzamiento');
define('TABLE_HEADING_DEFAULT_SPECIALS', 'Specials For %s');
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_MANUFACTURER', 'Fabricante');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_PRICE', 'Precio');
define('TABLE_HEADING_WEIGHT', 'Peso');
define('TABLE_HEADING_BUY_NOW', 'Compre Ahora');
define('TEXT_NO_PRODUCTS', 'No hay productos en esta categoria.');
define('TEXT_NO_PRODUCTS2', 'No hay productos de este fabricante.');
define('TEXT_NUMBER_OF_PRODUCTS', 'N&uacute;mero de Productos: ');
define('TEXT_SHOW', '<b>Mostrar:</b>');
define('TEXT_BUY', 'Compre 1 \'');
define('TEXT_NOW', '\' ahora');
define('TEXT_ALL_CATEGORIES', 'Todas');
define('TEXT_ALL_MANUFACTURERS', 'Todos');
define('HEADING_CUSTOMER_GREETING', 'Our Customer Greeting');
define('MAINPAGE_HEADING_TITLE', 'Main Page Heading Title');
define('TABLE_HEADING_FEATURED_PRODUCTS', 'Featured Products');
define('TABLE_HEADING_FEATURED_PRODUCTS_CATEGORY', 'Featured Products in %s'); 
?>