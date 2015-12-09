<?php
/*
  Written by Marc Sauton, September 2004
  Daily Product Report Contribution for the OsCommerce Community
  Released under the GNU General Public License
  stats_daily_products_sales_report.php
*/

define('HEADING_TITLE', 'Produkt-Verkaufs-Report für ');

define('TABLE_HEADING_NUMBER', 'Nr.');
define('TABLE_HEADING_ORDER_QUANTITY', 'Bestellungs Anzahl');
define('TABLE_HEADING_PRODUCT_NAME', 'Produkt Name');
define('TABLE_HEADING_PRODUCT_MODEL', 'Produkt Modell');
define('TABLE_HEADING_UNITPRICE', 'Preis Verpackungseinheit');
define('TABLE_HEADING_PRODUCT_QUANTITY', 'Produkt St&uuml;ckzahl');
define('TABLE_HEADING_TOTAL_PURCHASED', 'Summe Gesamt');
if (!defined('TEXT_DISPLAY_NUMBER_OF_PRODUCTS')) {
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> customers)');
}
define('TEXT_BUTTON_REPORT_SAVE','Save CSV');

define('TABLE_DAILY_VALUE', 'Gesamtmenge für die Seite: ');
define('TABLE_ACCUMULATED_VALUE', 'Gesamtmenge kaufte: ');
define('DISPLAY_ANOTHER_REPORT_DATE', 'Andere Statistik dieses Tages anzeigen: ');
define('REPORT_END_DATE','Bis jetzt');
define('REPORT_START_DATE','Vom Datum');


?>