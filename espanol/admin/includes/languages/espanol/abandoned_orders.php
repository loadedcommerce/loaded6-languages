<?php
/*
  $Id: edit_orders.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Abandoned Orders');
define('HEADING_TITLE_NUMBER', 'Nr.');
define('HEADING_TITLE_DATE', 'of');
define('HEADING_SUBTITLE', 'Please edit all parts as desired and click on the "Update" button below.');
define('HEADING_TITLE_SEARCH', 'Order ID:');
define('HEADING_TITLE_STATUS', 'Status:');
define('ADDING_TITLE', 'Adding a Product to Order');

define('ADD_PRODUCT', 'Agregue un producto a la orden');
define('HEADING_ABANDONED', '<B>The shopping basket for this order was abandoned!!! Order ID:  </B>');
define('TEXT_INFO_ABANDONDED', 'Abandoned');

define('ENTRY_UPDATE_TO_CC', '(Update to <b>Credit Card</b> to view CC fields.)');
define('HINT_DELETE_POSITION', '<font color="#FF0000">Hint: </font>To delete a product set its quantity to "0".');
define('HINT_TOTALS', '<font color="#FF0000">Hint: </font>Feel free to give discounts by adding negative amounts to the list.<br>Fields with "0" values are deleted when updating the order (exception: shipping).');
define('HINT_PRESS_UPDATE', 'Please click on "Update" to save all changes made above.');
define('TABLE_HEADING_COMMENTS', 'Comments');
define('TABLE_HEADING_CUSTOMERS', 'Customers');
define('TABLE_HEADING_ORDER_TOTAL', 'Order Total');
define('TABLE_HEADING_DATE_PURCHASED', 'Date Purchased');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Qty.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_PRODUCTS', 'Products');
define('TABLE_HEADING_TAX', 'Tax');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_UNIT_PRICE', 'Unit Price');
define('TABLE_HEADING_BASE_PRICE', 'Base Price');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Price (incl.)');
define('TABLE_HEADING_TOTAL_PRICE', 'Total Price');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Total (incl.)');
define('TABLE_HEADING_TOTAL_MODULE', 'Total Price Component');
define('TABLE_HEADING_TOTAL_AMOUNT', 'Amount');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Customer Notified');
define('TABLE_HEADING_DATE_ADDED', 'Date Added');

define('ENTRY_CUSTOMER', 'Customer general');
define('ENTRY_CUSTOMER_NAME', 'Name');
define('ENTRY_CUSTOMER_COMPANY', 'Company');
define('ENTRY_CUSTOMER_ADDRESS', 'Address');
define('ENTRY_CUSTOMER_SUBURB', 'Suburb');
define('ENTRY_CUSTOMER_CITY', 'City');
define('ENTRY_CUSTOMER_STATE', 'State');
define('ENTRY_CUSTOMER_POSTCODE', 'Postcode');
define('ENTRY_CUSTOMER_COUNTRY', 'Country');
define('ENTRY_CUSTOMER_PHONE', 'Phone');
define('ENTRY_CUSTOMER_EMAIL', 'E-Mail');
define('ENTRY_SOLD_TO', 'Sold To:');
define('ENTRY_DELIVERY_TO', 'Delivery To:');
define('ENTRY_SHIP_TO', 'Ship To:');
define('ENTRY_SHIPPING_ADDRESS', 'Shipping Address:');
define('ENTRY_BILLING_ADDRESS', 'Billing Address:');
define('ENTRY_PAYMENT_METHOD', 'Payment Method:');
define('ENTRY_CREDIT_CARD_TYPE', 'Type: ');
define('ENTRY_CREDIT_CARD_OWNER', 'Owner: ');
define('ENTRY_CREDIT_CARD_NUMBER', 'CC Number: ');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Expires: ');
define('ENTRY_CREDIT_CARD_CCV', 'CCV/CVC/CSC code: ');
define('ENTRY_CREDIT_CARD_START_DATE', 'Fecha de inicio: ');
define('ENTRY_CREDIT_CARD_ISSUE', 'Issue Number: ');
define('ENTRY_SUB_TOTAL', 'Sub-Total:');
define('ENTRY_TAX', 'Tax:');
define('ENTRY_SHIPPING', 'Shipping:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Date Purchased:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Date Last Updated:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notify Customer:');
define('ENTRY_NOTIFY_COMMENTS', 'Append Comments:');
define('ENTRY_PRINTABLE', 'Print Invoice');
define('ENTRY_CUSTOMER_DISCOUNT', 'Use a negative number -1.00 ');
define('ENTRY_CUSTOMER_GV', 'Discount/Gift Voucher: ');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Delete Order');
define('TEXT_INFO_DELETE_INTRO', 'Are you sure you want to delete this order?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Restock product quantity');
define('TEXT_DATE_ORDER_CREATED', 'Date Created:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Last Modified:');
define('TEXT_DATE_ORDER_ADDNEW', 'Add New Product');
define('TEXT_INFO_PAYMENT_METHOD', 'Payment Method:');

define('TEXT_CARD_ENCRPYT', '<font color=green> </b> This CC number is stored Encrypted </b></font>');
define('TEXT_CARD_NOT_ENCRPYT', '<font color=red> <b>Warning !!!! This CC number is not stored Encrypted </b></font>');
define('TEXT_EXPIRES_ENCRPYT', '<font color=green> </b> This CC expire date is stored Encrypted </b></font>');
define('TEXT_EXPIRES_NOT_ENCRPYT', '<font color=red> <b>Warning !!!! This CC expire date is not stored Encrypted </b></font>');
define('TEXT_CCV_ENCRPYT', '<font color=green> </b> This CC CCV is stored Encrypted </b></font>');
define('TEXT_CCV_NOT_ENCRPYT', '<font color=red> <b>Warning !!!! This CC CCV is not stored Encrypted If blank ignore this message</b></font>');

define('TEXT_EXPIRES_REMOVED', '<font color=green> </b> This CC expire date has been removed from the store.</b></font>');
define('TEXT_CCV_REMOVED', '<font color=green> </b> CCV Code:  Not stored - due to processing regulations. Enable CCV email in module settings.</b></font>');
define('TEXT_CARD__REMOVED', '<font color=green> </b> This CC number is not store or has been removed from the store.</b></font>');

define('TEXT_ALL_ORDERS', 'All Orders');
define('TEXT_NO_ORDER_HISTORY', 'No Order History Available');


define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Order Update');
define('EMAIL_TEXT_ORDER_NUMBER', 'Order Number:');
define('EMAIL_TEXT_INVOICE_URL', 'Detailed Invoice:');
define('EMAIL_TEXT_DATE_ORDERED', 'Date Ordered:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Your order has been updated to the following status.' . "\n\n" . 'New status: %s' . "\n\n" . 'Please reply to this email if you have any questions.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'The comments for your order are' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: Order does not exist.');
define('SUCCESS_ORDER_UPDATED', 'Success: Order has been successfully updated.');
define('WARNING_ORDER_NOT_UPDATED', 'Warning: Nothing to change. The order was not updated.');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Choose a product');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Choose an option');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'Product has no options, so skipping...');
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', 'pedazos de este producto');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Add');
define('ADDPRODUCT_TEXT_STEP', 'Step');
define('ADDPRODUCT_TEXT_STEP1', ' &laquo; Choose a catalogue. ');
define('ADDPRODUCT_TEXT_STEP2', ' &laquo; Choose a product. ');
define('ADDPRODUCT_TEXT_STEP3', ' &laquo; Choose an option. ');

define('MENUE_TITLE_CUSTOMER', '1. Customer Data');
define('MENUE_TITLE_PAYMENT', '2. Payment Method');
define('MENUE_TITLE_ORDER', '3. Ordered Products');
define('MENUE_TITLE_TOTAL', '4. Discount, Shipping and Total');
define('MENUE_TITLE_STATUS', '5. Status and Notification');
define('MENUE_TITLE_UPDATE', '6. Update Data');

define('DISPLAY_BASKET', 'Cesta de la exhibici�n');
define('DONT_ADD_NEW_PRODUCT', 'No agregue El Producto Nuevo');
?>
