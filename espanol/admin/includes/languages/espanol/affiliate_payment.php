<?php
/*
  $Id: affiliate_payment.php,v 1.3 $

  OSC-Affiliate

  Contribution based on:

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 - 2003 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Programa de Afiliado');
define('HEADING_TITLE', 'Programa de Afilado: Pagos');

define('TEXT_AFFILIATE_HEADER', 'Sus Pagos:');

define('TABLE_HEADING_DATE', 'Fecha de Pagos');
define('TABLE_HEADING_PAYMENT', 'Ingresos del Afiliado');
define('TABLE_HEADING_STATUS', 'Estado de Pagos');
define('TABLE_HEADING_PAYMENT_ID','Identificacion de Pago Payment-ID');
define('TEXT_DISPLAY_NUMBER_OF_PAYMENTS', 'Exhibir <b>%d</b> los <b>%d</b> (of <b>%d</b> pagos)');
define('TEXT_INFORMATION_PAYMENT_TOTAL', 'total de sus Ingresos to:');
define('TEXT_NO_PAYMENTS', 'No pagos han sido registrados.');
define('TEXT_PAYMENT_HELP', ' [?] ');
define('TEXT_PAYMENT', 'Click on [?] to see a description of each category.');
define('HEADING_PAYMENT_HELP', 'Affiliate Help');

    
define('IMAGE_AFFILIATE_BILLING', 'Generar pagos');
define('HEADING_TITLE_SEARCH', 'Buscar');
define('HEADING_TITLE_STATUS', 'Estado');
define('TEXT_ALL_PAYMENTS', 'Todos los pagos');
define('TABLE_HEADING_AFILIATE_NAME', 'Afiliado');
define('TABLE_HEADING_NET_PAYMENT', 'Pago (exc.)');
define('TABLE_HEADING_DATE_BILLED', 'Fecha facturada');
define('TABLE_HEADING_ACTION', 'Acción');

/*************************/

define('SUCCESS_BILLING','Your Affiliates have been sucessfully billed');
define('SUCCESS_PAYMENT_UPDATED','Your Affiliates Payment Requests have been sucessfully generated');
define('TEXT_AFFILIATE','Affiliate:');
define('TEXT_AFFILIATE_PAYMENT','Affiliate Payment:');
define('TEXT_AFFILIATE_BILLED',  'Affiliate Billed:');
define('TEXT_AFFILIATE_PAYING_POSSIBILITIES','Paying Possibilities:');  
define('TEXT_AFFILIATE_PAYMENT_BANK_TRANSFER','Bank Transfer');
define('TEXT_AFFILIATE_PAYMENT_BANK_NAME','Bank Name:');
define('TEXT_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER','Branch Number:');
define('TEXT_AFFILIATE_PAYMENT_BANK_SWIFT_CODE','Swift Code:');
define('TEXT_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME','Account Name:');
define('TEXT_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER','Account Number:');
define('TEXT_AFFILIATE_PAYMENT_PAYPAL','Paypal');
define('TEXT_AFFILIATE_PAYMENT_PAYPAL_EMAIL','Paypal Email:');
define('TEXT_AFFILIATE_PAYMENT_CHECK','Payment Check');
define('TEXT_AFFILIATE_PAYMENT_CHECK_PAYEE','Check Payee:');
define('PAYMENT_STATUS','Status');
define('PAYMENT_NOTIFY_AFFILIATE','Notify Affiliate:'); 
define('TABLE_HEADING_NEW_VALUE','New Value');
define('TABLE_HEADING_OLD_VALUE','Old Value');
define('TABLE_HEADING_AFFILIATE_NOTIFIED','Affiliate Notified');
define('TEXT_NO_PAYMENT_HISTORY','No Payment History');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Payment Update');
define('EMAIL_TEXT_AFFILIATE_PAYMENT_NUMBER', 'Payment Number:');
define('EMAIL_TEXT_INVOICE_URL', 'Detailed Invoice:');
define('EMAIL_TEXT_PAYMENT_BILLED', 'Date billed');
define('EMAIL_TEXT_STATUS_UPDATE', 'Your payment has been updated to the following status.' . "\n\n" . 'New status: %s' . "\n\n" . 'Please reply to this email if you have any questions.' . "\n");
define('EMAIL_TEXT_NEW_PAYMENT', 'A new invoice arrived to your payments' . "\n");

/***********************************/
?>