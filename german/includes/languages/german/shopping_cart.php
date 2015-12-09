<?php
/*
  $Id: shopping_cart.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Warenkorb');
define('HEADING_TITLE', 'Ihr Warenkorb enth&auml;lt :');
define('TABLE_HEADING_REMOVE', 'Entfernen');
define('TABLE_HEADING_QUANTITY', 'Anzahl');
define('TABLE_HEADING_MODEL', 'Artikelnr.');
define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_TOTAL', 'Summe');
define('TEXT_CART_EMPTY', 'Sie haben noch nichts in Ihrem Warenkorb.');
define('SUB_TITLE_SUB_TOTAL', 'Zwischensumme:');
define('SUB_TITLE_TOTAL', 'Summe:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' do not exist in desired quantity in our stock.<br>This product can not be back ordered, and you cannot procced with checkout unles you remove this item from the cart.<br>Please alter the quantity of products marked with (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '), Thank you');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' do not exist in desired quantity in our stock.<br>You can purchase these products and the quantity not in stock will be back ordered.  The quantity we have in stock for immediate delivery can be checked in the checkout process.');

// Eversun mod for display unit price column
define('TABLE_HEADING_UNIT_PRICE', 'Price Per.');
// Eversun mod end for display unit price column
define('TEXT_PRODUCTS', 'Products');
// RCI code start
$cre_RCI->get('german', 'shoppingcart');
// RCI code eof
?>