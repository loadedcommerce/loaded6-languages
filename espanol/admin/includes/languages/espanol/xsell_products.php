<?php
/* $Id$
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Copyright (c) 2002 osCommerce

Released under the GNU General Public License
xsell.php
Original Idea From Isaac Mualem im@imwebdesigning.com <mailto:im@imwebdesigning.com>
Complete Recoding From Stephen Walker admin@snjcomputers.com
*/

define('CROSS_SELL_SUCCESS', 'Con éxito Actualización Para El Producto #'.(isset($_GET['add_related_product_ID']) ? $_GET['add_related_product_ID'] : 0));
define('SORT_CROSS_SELL_SUCCESS', 'Con éxito Actualización Para El Producto  #'.(isset($_GET['add_related_product_ID']) ? $_GET['add_related_product_ID'] : 0));
define('HEADING_TITLE', 'Venta Cruzada (X-Venda) Admin');
define('TABLE_HEADING_PRODUCT_ID', 'Identificación Del Producto');
define('TABLE_HEADING_PRODUCT_MODEL', 'Modelo Del Producto');
define('TABLE_HEADING_PRODUCT_NAME', 'Nombre Del Producto');
define('TABLE_HEADING_CURRENT_SELLS', 'Ventas Actuales X-Venda');
define('TABLE_HEADING_UPDATE_SELLS', 'La Actualización  X-Venda');
define('TABLE_HEADING_PRODUCT_IMAGE', 'Imagen De Producto');
define('TABLE_HEADING_PRODUCT_PRICE', 'Precio Del Producto');
define('TABLE_HEADING_CROSS_SELL_THIS', 'Venta Cruzada Esto?');
define('TEXT_EDIT_SELLS', 'Corrija');
define('TEXT_SORT', 'Dé la prioridad');
define('TEXT_SETTING_SELLS', 'Ajuste X-Venda');
define('TEXT_PRODUCT_ID', 'Identificación Del Producto');
define('TEXT_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCT_SORT', 'Orden De la Clase');
define('TEXT_NO_IMAGE', 'Ninguna Imagen');
define('TEXT_CROSS_SELL', 'Venta Cruzada');
?>
