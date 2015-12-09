<?php
/*
  $Id: index.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/


if ( ($category_depth == 'products') || (isset($_GET['manufacturers_id'])) ) {
  define('HEADING_TITLE', 'Unser Angebot');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Unser Angebot');
} elseif ($category_depth == 'nested') {
  define('HEADING_TITLE', 'Kategorien');
}
define('TEXT_MAIN', 'Dieses ist die Rückstellungseinstellung der CRE Loaded Software. Die Produkte, die hier gezeigt werden, sind <b>nur zu den Demonstrationszwecken</b>. Keine gekauften Produkte werden nicht noch werden der Kunde berechnet geliefert.');
define('TABLE_HEADING_NEW_PRODUCTS', 'Neue Artikel im %s');
define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Wann ist was verf&uuml;gbar');
define('TABLE_HEADING_DATE_EXPECTED', 'Voraussichtlich ab');
define('TABLE_HEADING_DEFAULT_SPECIALS', 'Angebote f&uuml;r %s');
define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Artikel-Nr.');
define('TABLE_HEADING_PRODUCTS', 'Artikel');
define('TABLE_HEADING_MANUFACTURER', 'Hersteller');
define('TABLE_HEADING_QUANTITY', 'Anzahl');
define('TABLE_HEADING_PRICE', 'Preis');
define('TABLE_HEADING_WEIGHT', 'Gewicht');
define('TABLE_HEADING_BUY_NOW', 'Bestellen');
define('TEXT_NO_PRODUCTS', 'Es gibt keine Artikel in dieser Kategorie.');
define('TEXT_NO_PRODUCTS2', 'Es gibt keinen Artikel, das von diesem Hersteller stammt.');
define('TEXT_NUMBER_OF_PRODUCTS', 'Artikel: ');
define('TEXT_SHOW', '<b>Darstellen:</b>');
define('TEXT_BUY', '1 x \'');
define('TEXT_NOW', '\' bestellen!');
define('TEXT_ALL_CATEGORIES', 'Alle Kategorien');
define('TEXT_ALL_MANUFACTURERS', 'Alle Hersteller');
define('HEADING_CUSTOMER_GREETING', 'Unsere Kundenbegr&uuml;ssung');
define('MAINPAGE_HEADING_TITLE', 'Hauptseiten-Heading Titel');
define('TABLE_HEADING_FEATURED_PRODUCTS', 'Spezielle Produkte');
define('TABLE_HEADING_FEATURED_PRODUCTS_CATEGORY', 'Spezielle Produkte in %s');
?>