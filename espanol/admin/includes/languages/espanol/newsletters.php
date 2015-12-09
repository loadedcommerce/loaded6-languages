<?php
/*
  $Id: newsletters.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $
  Translated by: jparis v1.0
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
*/
define('TEXT_SELECTED_GROUPS', 'Grupos seleccionados del cliente');

define('TEXT_GROUPS', 'Grupos del cliente');
define('HEADING_TITLE', 'Gestor de boletines de noticias');
define('TEXT_ALL_GROUPS', 'Todos los grupos');
define('TABLE_HEADING_NEWSLETTERS', 'Boletines de noticias');
define('TABLE_HEADING_SIZE', 'Tamaño');
define('TABLE_HEADING_MODULE', 'Módulo');
define('TABLE_HEADING_GROUP', 'Grupo del cliente');
define('TABLE_HEADING_SENT', 'Enviado');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_ACTION', 'Acción');

define('TEXT_SELECT_GROUP', 'Seleccione al grupo');
define('TEXT_SELECT_CUSTOMER', 'Select Customer');
define('TEXT_ALL_CUSTOMERS', 'All Customers');
define('TEXT_NEWSLETTER_CUSTOMERS', 'To All Newsletter Subscribers');

define('TEXT_NEWSLETTER_MODULE', 'Módulo:');
define('TEXT_GROUP_MODULE', 'Grupo:');
define('TEXT_NEWSLETTER_RESELLER', 'Empleados');
define('TEXT_NEWSLETTER_CUSTOMER', 'Venta al por menor');
define('TEXT_NEWSLETTER_PRODUCER', 'Venta al por mayor');
define('TEXT_NEWSLETTER_TITLE', 'Título del boletín:');
define('TEXT_NEWSLETTER_CONTENT', 'Contenido:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Añadido el:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Fecha de envío:');

define('TEXT_INFO_DELETE_INTRO', '¿Seguro que quiere eliminar este boletín?');

define('TEXT_PLEASE_WAIT', 'Por favor espere .. enviando emails ..<br><br>¡No interrumpa este proceso!');
define('TEXT_FINISHED_SENDING_EMAILS', '¡Finalizado el envío de emails!');

define('ERROR_NEWSLETTER_TITLE', 'Error: Se requiere un título para el boletín');
define('ERROR_NEWSLETTER_MODULE', 'Error: Se requiere un módulo para el boletín');
define('ERROR_REMOVE_UNLOCKED_NEWSLETTER', 'Error: Bloquee el boletín antes de eliminarlo.');
define('ERROR_EDIT_UNLOCKED_NEWSLETTER', 'Error: Bloquee el boletín antes de editarlo.');
define('ERROR_SEND_UNLOCKED_NEWSLETTER', 'Error: Bloquee el boletín antes de enviarlo.');
if (!defined('JS_PLEASE_SELECT_PRODUCTS')) {
  define('JS_PLEASE_SELECT_PRODUCTS', 'Seleccione algunos productos.');
}
define('TEXT_PRODUCT_NOTIFICATIONS_NEWSLETTER_NAME', 'Notificaciones del producto');
define('TEXT_CUSTOMER_NEWSLETTER_NAME', 'Boletín de noticias del cliente');
define('TEXT_AFFILIATE_NEWSLETTER_NAME', 'Boletín de noticias del afiliado'); 
?>
