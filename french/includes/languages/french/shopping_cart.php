<?php
/*
  $Id: shopping_cart.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Votre panier');
define('HEADING_TITLE', 'Qu\'y a t\'il dans le panier ? ');
define('TABLE_HEADING_REMOVE', 'Supprimer');
define('TABLE_HEADING_QUANTITY', 'Qt&eacute;.');
define('TABLE_HEADING_MODEL', 'Mod&egrave;le');
define('TABLE_HEADING_PRODUCTS', 'Produit(s)');
define('TABLE_HEADING_TOTAL', 'Total');
define('TEXT_CART_EMPTY', 'Votre panier est vide!');
define('SUB_TITLE_SUB_TOTAL', 'Sous-Total:');
define('SUB_TITLE_TOTAL', 'Total:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' do not exist in desired quantity in our stock.<br>This product can not be back ordered, and you cannot procced with checkout unles you remove this item from the cart.<br>Please alter the quantity of products marked with (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '), Thank you');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Products marked with ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' do not exist in desired quantity in our stock.<br>You can purchase these products and the quantity not in stock will be back ordered.  The quantity we have in stock for immediate delivery can be checked in the checkout process.');

// Eversun mod for display unit price column
define('TABLE_HEADING_UNIT_PRICE', 'Price Per.');
// Eversun mod end for display unit price column
define('TEXT_PRODUCTS', 'Products');
// RCI code start
$cre_RCI->get('french', 'shoppingcart');
// RCI code eof
?>