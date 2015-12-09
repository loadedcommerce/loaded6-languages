<?php
/*
  Written by Marc Sauton, September 2004
  Daily Product Report Contribution for the OsCommerce Community
  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Informe de ventas del producto para ');

define('TABLE_HEADING_NUMBER', 'No.');
define('TABLE_HEADING_ORDER_QUANTITY', 'Order Quantity');
define('TABLE_HEADING_PRODUCT_NAME', 'Product Name');
define('TABLE_HEADING_PRODUCT_MODEL', 'Product Model');
define('TABLE_HEADING_UNITPRICE', 'Unit Price');
define('TABLE_HEADING_PRODUCT_QUANTITY', 'Product Quantity');
define('TABLE_HEADING_TOTAL_PURCHASED', 'Total Purchased');
if (!defined('TEXT_DISPLAY_NUMBER_OF_PRODUCTS')) {
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> customers)');
}
define('TEXT_BUTTON_REPORT_SAVE','Save CSV');

define('TABLE_DAILY_VALUE', 'Total para la página: ');
define('TABLE_ACCUMULATED_VALUE', 'Total comprado: ');
define('DISPLAY_ANOTHER_REPORT_DATE', 'Display another report for this date: ');
define('REPORT_END_DATE','Hasta la fecha');
define('REPORT_START_DATE','A partir de fecha');

?>