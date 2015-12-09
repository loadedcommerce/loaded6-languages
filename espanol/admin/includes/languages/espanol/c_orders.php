<?php
/*
  $Id: edit_orders.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $
  Translated by: jparis v1.0
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
*/
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', 'pedazos de este producto');
define('HEADING_TITLE', 'Editar pedido');
define('HEADING_TITLE_NUMBER', 'Nr.');
define('HEADING_TITLE_DATE', 'of');
define('HEADING_SUBTITLE', 'Corrija por favor todas las piezas seg�n lo deseado y chasque encendido el " Update" bot�n abajo.');
define('HEADING_TITLE_SEARCH', 'ID de pedido:');
define('HEADING_TITLE_STATUS', 'Estado:');
define('ADDING_TITLE', 'A�adir un producto al pedido');

define('CATEGORY_ORDER_DETAILS', 'Detalles del cliente');
define('ENTRY_CURRENCY', 'Moneda del cliente');
define('ADD_PRODUCT', 'Agregue un producto a la orden');

define('ENTRY_UPDATE_TO_CC', '(Actualizar a <b>Tarjeta de cr�dito</b> para ver los campos CC.)');
define('HINT_DELETE_POSITION', '<font color="#FF0000">Indirecta: </font>Para suprimir un sistema de producto su cantidad a "0".');
define('HINT_TOTALS', '<font color="#FF0000">Indirecta: </font>Sienta libre de dar descuentos agregando cantidades negativas a la lista.<br>Campos con el " 0" se suprimen los valores al poner al d�a la orden (excepci�n: env�o).');
define('HINT_PRESS_UPDATE', 'Chasque por favor encendido el " Update" para ahorrar todos los cambios realizados arriba.');
define('TABLE_HEADING_COMMENTS', 'Comentarios');
define('TABLE_HEADING_CUSTOMERS', 'Clientes');
define('TABLE_HEADING_CUSTOMER_ID', 'Identificaci�n del cliente');
define('TABLE_HEADING_CUSTOMER_GROUP', 'Grupo del cliente: ');
define('TABLE_HEADING_PWA', 'Compra sin una cuenta');
define('TABLE_HEADING_ORDER_TOTAL', 'Total del pedido');
define('TABLE_HEADING_DATE_PURCHASED', 'Fecha de compra');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TABLE_HEADING_QUANTITY', 'Cant.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modelo');
define('TABLE_HEADING_PRODUCTS', 'Productos');
define('TABLE_HEADING_TAX', 'Impuesto');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_UNIT_PRICE', 'Precio unitario');
define('TABLE_HEADING_BASE_PRICE', 'Base Price');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Price (incl.)');
define('TABLE_HEADING_TOTAL_PRICE', 'Precio total');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Total (incl.)');
define('TABLE_HEADING_TOTAL_MODULE', 'Componente de precio total');
define('TABLE_HEADING_TOTAL_AMOUNT', 'Cantidad');

define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Precio (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Precio (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inc)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Cliente notificado');
define('TABLE_HEADING_DATE_ADDED', 'Fecha a�adido');

define('ENTRY_CUSTOMER', 'Cliente:');
define('ENTRY_CUSTOMER_NAME', 'Nombre');
define('ENTRY_CUSTOMER_COMPANY', 'Compa��a');
define('ENTRY_CUSTOMER_ADDRESS', 'Direcci�n');
define('ENTRY_CUSTOMER_SUBURB', 'Suburbio');
define('ENTRY_CUSTOMER_CITY', 'Ciudad');
define('ENTRY_CUSTOMER_STATE', 'Estado');
define('ENTRY_CUSTOMER_POSTCODE', 'Prefijo postal');
define('ENTRY_CUSTOMER_COUNTRY', 'Pa�s');
define('ENTRY_CUSTOMER_PHONE', 'Tel�fono');
define('ENTRY_CUSTOMER_EMAIL', 'Email');
define('ENTRY_SOLD_TO', 'Vendido a:');
define('ENTRY_DELIVERY_TO', 'Facturado a:');
define('ENTRY_SHIP_TO', 'Enviado a:');
define('ENTRY_SHIPPING_ADDRESS', 'Direcci�n de envio:');
define('ENTRY_BILLING_ADDRESS', 'Direcci�n de facturaci�n:');
define('ENTRY_PAYMENT_METHOD', 'M�todo de pago:');
define('ENTRY_CREDIT_CARD_TYPE', 'Tipo de tarjeta de cr�dito:');
define('ENTRY_CREDIT_CARD_OWNER', 'Propietario de la tarjeta:');
define('ENTRY_CREDIT_CARD_NUMBER', 'N�mero de la tarjeta de cr�dito:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Fecha de caducidad de la tarjeta:');
define('ENTRY_CREDIT_CARD_CCV', 'C�digo de CCV/CVC/CSC: ');
define('ENTRY_CREDIT_CARD_START_DATE', 'Fecha de inicio: ');
define('ENTRY_CREDIT_CARD_ISSUE', 'N�mero de la edici�n: ');
define('ENTRY_SUB_TOTAL', 'Subtotal:');
define('ENTRY_TAX', 'Impuesto:');
define('ENTRY_SHIPPING', 'Portes:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'Fecha de compra:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_DATE_LAST_UPDATED', 'Fecha de la �ltima actualizaci�n:');
define('ENTRY_NOTIFY_CUSTOMER', 'Notificar al cliente:');
define('ENTRY_NOTIFY_COMMENTS', 'A�adir comentarios:');
define('ENTRY_PRINTABLE', 'Imprimir factura');
define('ENTRY_CUSTOMER_DISCOUNT', 'Utilizar un n�mero negativo -1.00 ');
define('ENTRY_CUSTOMER_GV', 'Descuento/vale del regalo: ');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Eliminar pedido');
define('TEXT_INFO_DELETE_INTRO', '�Est� seguro de eliminar este pedido?');
//define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Recargar los productos en el stock');
define('TEXT_DATE_ORDER_CREATED', 'Fecha de creaci�n:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '�ltima modificacion:');
define('TEXT_DATE_ORDER_ADDNEW', 'Agregue el nuevo producto');
define('TEXT_INFO_PAYMENT_METHOD', 'M�todo de pago:');

define('TEXT_CARD_ENCRPYT', '<font color=green> </b> Se almacena este n�mero del cc cifr� </b></font>');
define('TEXT_CARD_NOT_ENCRPYT', '<font color=red> <b>�Advertencia!!!! Este n�mero del cc no se almacena cifrado </b></font>');
define('TEXT_EXPIRES_ENCRPYT', '<font color=green> </b> Se almacena este cc expira fecha cifr� </b></font>');
define('TEXT_EXPIRES_NOT_ENCRPYT', '<font color=red> <b>�Advertencia!!!! Este cc expira fecha no se almacena cifrado </b></font>');
define('TEXT_CCV_ENCRPYT', '<font color=green> </b> Se almacena este cc CCV cifr� </b></font>');
define('TEXT_CCV_NOT_ENCRPYT', '<font color=red> <b>�Advertencia!!!! Este cc CCV no se almacena cifrado si el espacio en blanco no hace caso de este mensaje</b></font>');

define('TEXT_EXPIRES_REMOVED', '<font color=green> </b> Este cc expira fecha se ha quitado del almac�n.</b></font>');
define('TEXT_CCV_REMOVED', '<font color=green> </b> Este CCV no es almac�n ni se ha quitado del almac�n.</b></font>');
define('TEXT_CARD__REMOVED', '<font color=green> </b> Este n�mero del cc no es almac�n ni se ha quitado del almac�n.</b></font>');


define('ENTRY_IPADDRESS', 'IP Address:');
define('ENTRY_IPISP', 'ISP:');

define('TEXT_ALL_ORDERS', 'Todos los pedidos');
define('TEXT_NO_ORDER_HISTORY', 'No hay hist�rico de pedidos');


define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Actualizaci�n de pedido');
define('EMAIL_TEXT_ORDER_NUMBER', 'N�mero de pedido:');
define('EMAIL_TEXT_INVOICE_URL', 'Factura detallada:');
define('EMAIL_TEXT_DATE_ORDERED', 'Fecha de pedido:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Su pedido ha sido actualizado con el siguiente estado.' . "\n\n" . 'Nuevo estado: %s' . "\n\n" . 'Por favor responda a este email si tiene alguna duda o pregunta.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Los comentarios para su pedido son' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Error: El pedido no existe.');
define('SUCCESS_ORDER_UPDATED', 'OK: El pedido ha sido actualizado.');
define('WARNING_ORDER_NOT_UPDATED', 'Atenci�n: No hay ning�n cambio. El pedido no ha sido actualizado.');
define('SUCCESS_PRODUCT_ADDED', '�xito: Se ha puesto al d�a esta orden y se ha agregado un nuevo producto');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'AUTORIZACI�N');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Elija un producto');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'AUTORIZACI�N');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Elija una opci�n');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'AUTORIZACI�N');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'El producto no tiene ninguna opci�n, tecleo para saltar este paso...');
define('ADDPRODUCT_TEXT_OPTIONS_EXIST', 'El producto tiene opciones, tecleo a ir al paso siguiente...');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Agregue');
define('ADDPRODUCT_TEXT_STEP', 'Paso');
define('ADDPRODUCT_TEXT_PROGRESS', 'Progreso del paso ');

define('ADDPRODUCT_TEXT_STEP_1', 'Paso 1');
define('ADDPRODUCT_TEXT_STEP_2', 'Paso 2');
define('ADDPRODUCT_TEXT_STEP_3', 'Paso 3');
define('ADDPRODUCT_TEXT_STEP_4', 'Paso 4');

define('MENUE_TITLE_CUSTOMER', '1. Datos del cliente');
define('MENUE_TITLE_PAYMENT', '2. M�todo del pago');
define('MENUE_TITLE_ORDER', '3. Productos pedidos');
define('MENUE_TITLE_TOTAL', '4. Descuento, env�o y total');
define('MENUE_TITLE_STATUS', '5. Estado y notificaci�n');
define('MENUE_TITLE_UPDATE', '6. Datos de la actualizaci�n');

define('DONT_ADD_NEW_PRODUCT', 'No agregue el producto nuevo');
define('SELECT_THESE_OPTIONS', "Seleccione estas opciones");
define('ADDPRODUCT_TEXT_GET_PRODUCT', 'Consiga la lista de productos');
define('TEXT_ADD_PROD_NAME', 'Nombre de producto');
define('TEXT_ADD_PROD_PRICE', 'Precio bajo del producto');
define('TEXT_PRODUCT_OPTIONS', 'Opciones del producto');
define('REMOVE_CVV', 'Quite el cc');
?>
