<?php
/*
  $Id: affiliate_affiliates.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $
  Translated by: jparis v1.0
  OSC-Affiliate

  Contribution based on:

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 - 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Asociados');
define('HEADING_TITLE_SEARCH', 'Buscar:');

define('TABLE_HEADING_FIRSTNAME', 'Nombre');
define('TABLE_HEADING_LASTNAME', 'Apellidos');
define('TABLE_HEADING_USERHOMEPAGE', 'Homepage');
define('TABLE_HEADING_COMMISSION','Comisión');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Cuenta creada');
define('TABLE_HEADING_ACTION', 'Acción');
define('TABLE_HEADING_AFFILIATE_ID','ID de asociado');

define('TEXT_DATE_ACCOUNT_CREATED', 'Cuenta creada:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Última modificación:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Última visita:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Número de visitas:');
define('TEXT_INFO_TEMPLATE_ASIGNED','Template Asigned:');
define('TEXT_INFO_COMMISSION','Comisión');
define('TEXT_INFO_NUMBER_OF_SALES', 'Número de ventas:');
define('TEXT_INFO_COUNTRY', 'País:');
define('TEXT_INFO_SALES_TOTAL', 'Total de ventas:');
define('TEXT_INFO_AFFILIATE_TOTAL', 'Comisión:');
define('TEXT_DELETE_INTRO', '¿Seguro que desea eliminar este asociado?');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Eliminar Asociado');
define('TEXT_DISPLAY_NUMBER_OF_AFFILIATES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> asociados)');

define('ENTRY_AFFILIATE_PAYMENT_DETAILS', 'Pagable a:');
define('ENTRY_AFFILIATE_PAYMENT_CHECK','Nombre del pagador:');
define('ENTRY_AFFILIATE_PAYMENT_PAYPAL','Cuenta email de PayPal:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_NAME','Nombre del banco:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NAME','Nombre de la cuenta:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_ACCOUNT_NUMBER','Número de la cuenta:');
define('ENTRY_AFFILIATE_PAYMENT_BANK_BRANCH_NUMBER','Número ABA/BSB (branch number)');
define('ENTRY_AFFILIATE_PAYMENT_BANK_SWIFT_CODE','Código SWIFT ');
define('ENTRY_AFFILIATE_COMPANY','Empresa');
define('ENTRY_AFFILIATE_COMPANY_TAXID','N.I.F.:');
define('ENTRY_AFFILIATE_HOMEPAGE','Homepage');
define('ENTRY_AFFILIATE_COMMISSION',' Porcentaje de pago por ventas');
define('ENTRY_AFFILIATE_TEMPLATE','Affiliate Template');

define('CATEGORY_COMMISSION','Comisión individual');
define('CATEGORY_PAYMENT_DETAILS','Su dinero le llegará por:');

if (!defined('TYPE_BELOW')) {
define('TYPE_BELOW', 'Escriba debajo');
}
define('PLEASE_SELECT', 'Seleccione');
define('AFFILIATE_PERCENT_NOT_SET', 'No fijado');

    
// afiliado cobrand
define('TITLE_AFFILIATE_COBRANDING', 'Afiliado Co Branding');
define('ENTRY_COBRANDING_COMPANY_LOGO', 'Co Brand Logo:');
define('DELETE_COBRANDING_COMPANY_LOGO', 'eliminar algunos de los ya logotipo');
define('ENTRY_COBRANDING_COMPANY_NAME', 'Co nombre de marca:');
define('ENTRY_COBRANDING_SLOGAN','Co lema de marca:');
define('ENTRY_COBRANDING_URL', 'Co Brand URL:');
define('ENTRY_COBRANDING_URL_HELP','http:// or https:// required.');
define('ENTRY_COBRANDING_SUPPORT_EMAIL','Customer Service Email:');
define('ENTRY_COBRANDING_SUPPORT_PHONE','Customer Service Phone:');

define('AFFILIATE_ERROR_DIRECTORY_DOES_NOT_EXIST', 'Directorio: %s no existe.');
define('AFFILITE_ERROR_DIRECTORY_NOT_WRITABLE', 'Directorio: %s no es escribible.');
define('AFFILIATE_SUCCESS_DELETEED_IMAGE', 'suprimido Afiliados Cobrand Imagen.');
define('AFFILIATE_SUCCESS_UPLOADED_IMAGE', 'subidos de afiliados Cobrand Imagen.');
define('AFFILIATE_ERROR_UPLOADING_IMAGE', 'No se puede cargar de afiliados Cobrand Imagen');
define('AFFILIATE_ERROR_IMAGE_MISSING','Afiliados Cobrand Logo archivo que falta.');

define('JS_COBRANDING_SALES_ERROR','* The \'Co Branding Sales E-Mail Address\' has problem.\n');
define('JS_COBRANDING_SUPPORT_ERROR','* The \'Co Branding Support E-Mail Address\' has problem.\n');
define('JS_COBRANDING_BILLING_ERROR','* The \'Co Branding Billing E-Mail Address\' has problem.\n');
?>
