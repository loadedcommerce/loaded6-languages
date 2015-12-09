<?php
/*
  $Id: shopping_cart.php,v 1.1.1.1 2004/03/04 23:41:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Contenido de la Cesta');
define('HEADING_TITLE', 'Que hay en mi Cesta?');
define('TABLE_HEADING_REMOVE', 'Quitar');
define('TABLE_HEADING_QUANTITY', 'Cantidad');
define('TABLE_HEADING_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Producto(s)');
define('TABLE_HEADING_TOTAL', 'Total');
define('TEXT_CART_EMPTY', 'Tu Cesta de la Compra esta vacia!');
define('SUB_TITLE_SUB_TOTAL', 'Subtotal:');
define('SUB_TITLE_TOTAL', 'Total:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' do not exist in desired quantity in our stock.<br>This product can not be back ordered, and you cannot procced with checkout unles you remove this item from the cart.<br>Please alter the quantity of products marked with (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '), Thank you');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' do not exist in desired quantity in our stock.<br>You can purchase these products and the quantity not in stock will be back ordered.  The quantity we have in stock for immediate delivery can be checked in the checkout process.');

// Eversun mod for display unit price column
define('TABLE_HEADING_UNIT_PRICE', 'Price Per.');
// Eversun mod end for display unit price column

define('TEXT_PRODUCTS', 'Products');

// RCI code start
$cre_RCI->get('espanol', 'shoppingcart');
// RCI code eof
?>