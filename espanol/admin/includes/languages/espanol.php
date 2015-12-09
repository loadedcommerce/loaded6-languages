<?php
/*
  $Id: espanol.php,v 1.1.1.1 2004/03/04 23:40:01 ccwjr Exp $
  Translated by: jparis v1.0
  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2005 osCommerce

  Released under the GNU General Public License
*/
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_CHECK_ERROR', '<span class="errorText">?Tiene sido un error que env?a este email! Entre en contacto con por favor al due?o de almac?n.</span>');
 define('ENTRY_STATE_ERROR_SELECT', '<span class="errorText">&nbsp;Seleccione por favor un condado/un estado del condado/del estado tiran hacia abajo el men?.</span>');
 define('ENTRY_STATE_TEXT', '*');
 define('ENTRY_STREET_ADDRESS_TEXT', '*');
 define('ENTRY_SUBURB_TEXT', '');
 define('LANGUAGE_CURRENCY', 'USD');
 define('TEXT_MERCHANT','Comerciante de CRE');
//Admin begin
define('TEXT_ADMIN_HOME','Admin Home');
define('TEXT_VIEW_CATALOG','View Catalog');
define('TEXT_FORUMS','CRE Forums');
define('TEXT_PURCHASE_SUPPORT','Purchase CRE Support');

define('TEXT_ADMIN_LANG','Admin Language:');
define('TEXT_CHANGE_PASWORD','Change Password');
define('TEXT_LOGOUT','Logout');
define('TEXT_CHECK_UPDATES','Check for Updates');
define('TEXT_GET_PRO','Get Pro Version');

// header text in includes/header.php
define('HEADER_TITLE_ACCOUNT', 'Mi cuenta/contrase?a');
define('HEADER_TITLE_LOGOFF', 'Salir');
define('TEXT_SELECT_LANGUAGE', 'Please select Admin language for this session ');
define('BOX_REPORTS_NOT_VALID_USER', 'Customers Not Validated');

// Admin Account
define('BOX_HEADING_MY_ACCOUNT', 'Mi cuenta');

//MARKETING BOX
define('BOX_HEADING_MARKETING', 'Marketing');
define('BOX_MARKETING_EVENTS_MANAGER', 'Events Manager');
define('BOX_MARKETING_SALEMAKER', 'SaleMaker');
define('BOX_MARKETING_SPECIALS', 'Specials');
define('BOX_MARKETING_SPECIALSBYCAT','Specials By Category');
define('BOX_MARKETING_BANNER_MANAGER','Banner Manager');

// configuration box text in includes/boxes/administrator.php
define('BOX_HEADING_ADMINISTRATOR', 'Administrador');
define('BOX_ADMINISTRATOR_MEMBERS', 'Grupos de miembros');
define('BOX_ADMINISTRATOR_GROUPS', 'Admin Groups');
define('BOX_ADMINISTRATOR_MEMBER', 'Miembros');
define('BOX_ADMINISTRATOR_BOXES', 'Menu File Access');
define('BOX_ADMINISTRATOR_ACCOUNT_UPDATE', 'Actualizar cuenta');
define('BOX_ADMINISTRATOR_SECURITY', 'Admin File Security');

// images
define('IMAGE_FILE_PERMISSION', 'Permisos de archivos');
define('IMAGE_GROUPS', 'Lista de grupos');
define('IMAGE_INSERT_FILE', 'Insertar archivo');
define('IMAGE_MEMBERS', 'Lista de miembros');
define('IMAGE_NEW_GROUP', 'Nuevo grupo');
define('IMAGE_NEW_MEMBER', 'Nuevo miembro');
define('IMAGE_NEXT', 'Siguiente');

// constants for use in tep_prev_next_display function
define('TEXT_DISPLAY_NUMBER_OF_FILENAMES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> archivos)');
define('TEXT_DISPLAY_NUMBER_OF_MEMBERS', 'Mostrando <b>%d</b> a <b>%d</b> (de <b>%d</b> miembros)');
//Admin end

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// on Windows try 'sp', or 'Spanish' 
setlocale(LC_TIME, 'Spanish');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = true) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="es"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'CRE Loaded Commercial Open Source eCommerce');

// CCGV
define('BOX_HEADING_GV_ADMIN', 'Vouchers/Coupons');
define('BOX_GV_ADMIN_QUEUE', 'Gift Voucher Queue');
define('BOX_GV_ADMIN_MAIL', 'Mail Gift Voucher');
define('BOX_GV_ADMIN_SENT', 'Gift Vouchers Sent');
define('BOX_COUPON_ADMIN','Coupon Admin');
define('BOX_GV_REPORT','Coupon Report');
define('IMAGE_RELEASE', 'Redeem Gift Voucher');

define('_JANUARY', 'January');
define('_FEBRUARY', 'February');
define('_MARCH', 'March');
define('_APRIL', 'April');
define('_MAY', 'May');
define('_JUNE', 'June');
define('_JULY', 'July');
define('_AUGUST', 'August');
define('_SEPTEMBER', 'September');
define('_OCTOBER', 'October');
define('_NOVEMBER', 'November');
define('_DECEMBER', 'December');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> gift vouchers)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> coupons)');

define('TEXT_VALID_PRODUCTS_LIST', 'Products List');
define('TEXT_VALID_PRODUCTS_ID', 'Products ID');
define('TEXT_VALID_PRODUCTS_NAME', 'Products Name');
define('TEXT_VALID_PRODUCTS_MODEL', 'Products Model');

define('TEXT_VALID_CATEGORIES_LIST', 'Categories List');
define('TEXT_VALID_CATEGORIES_ID', 'Category ID');
define('TEXT_VALID_CATEGORIES_NAME', 'Category Name');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administraci?n');
define('HEADER_TITLE_SUPPORT_SITE', 'Soporte');
define('HEADER_TITLE_ONLINE_CATALOG', 'Cat?logo');
define('HEADER_TITLE_ADMINISTRATION', 'Administraci?n');
define('HEADER_TITLE_CHAINREACTION', 'Chainreactionweb');
define('HEADER_TITLE_CRELOADED', 'CRE Loaded Project');
// MaxiDVD Added Line For WYSIWYG HTML Area: BOF
define('BOX_CATALOG_DEFINE_MAINPAGE', 'Definir p?gina principal');
// MaxiDVD Added Line For WYSIWYG HTML Area: EOF

// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuraci?n');
define('BOX_CONFIGURATION_MYSTORE', 'Mi tienda');
define('BOX_CONFIGURATION_LOGGING', 'Registro');
define('BOX_CONFIGURATION_CACHE', 'Cach?');

// added for super-friendly admin menu:
define('BOX_CONFIGURATION_MIN_VALUES', 'Valores m?nimos');
define('BOX_CONFIGURATION_MAX_VALUES', 'Valores m?ximos');
define('BOX_CONFIGURATION_IMAGES', 'Configuraci?n de im?genes');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'Datos de clientes');
define('BOX_CONFIGURATION_SHIPPING', 'Ajustes de env?o por defecto');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Listado de productos');
define('BOX_CONFIGURATION_EMAIL', 'Email');
define('BOX_CONFIGURATION_DOWNLOAD', 'Gestor de descargas');
define('BOX_CONFIGURATION_GZIP', 'GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sesiones');
define('BOX_CONFIGURATION_STOCK', 'Control de stock');
define('BOX_CONFIGURATION_WYSIWYG', 'Editor WYSIWYG 1.7');
define('BOX_CONFIGURATION_AFFILIATE', 'Configuraci√≥n');  
define('BOX_CONFIGURATION_MAINT', 'Mantenimiento del sitio');
define('BOX_CONFIGURATION_ACCOUNTS', 'Comprar sin cuenta');
define('BOX_CONFIGURATION_CHECKOUT', 'Checkout Settings');
define('BOX_CONFIGURATION_LINKS', 'Gestor de enlaces');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'M?dulos');
define('BOX_MODULES_PAYMENT', 'Pago');
define('BOX_MODULES_SHIPPING', 'Portes');
define('BOX_MODULES_ORDER_TOTAL', 'Total de pedido');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Cat?logo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categor?as/Productos');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Atributos de productos');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_CATEGORY_OPTIONS', 'Products Categories Options');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Ofertas');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Pr?ximamente');
define('BOX_CATALOG_EASYPOPULATE', 'Easy Populate');
define('BOX_CATALOG_EASYPOPULATE_BASIC', 'Easy Populate Basic');
define('BOX_CATALOG_SHOP_BY_PRICE', 'Comprar por precio');

define('BOX_CATALOG_FEATURED', 'Featured Products');
define('BOX_CATALOG_PRODUCTS', 'Products');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administrators');
define('BOX_CONFIGURATION_SERVICES', 'Services');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Credit Cards');
define('BOX_CATALOG_CATEGORIES', 'Categories');
define('BOX_HEADING_SETUP', '<b>Set Up</b>');
define('BOX_HEADING_MARKETING_MANAGER', '<b>Marketing Manager</b>');
define('BOX_HEADING_CATALOG_MANAGER', '<b>Catalog Manager</b>');
define('BOX_HEADING_CONTENT_MANAGER', '<b>Encargado contento</b>');
define('BOX_HEADING_TEMPLATE_MANAGER', '<b>Template Manager</b>');
define('BOX_HEADING_CUSTOMERS_ORDERS', '<b>Customers/Orders</b>');
define('BOX_HEADING_ORDERS', '  Orders');

define('TEXT_HEADING_HOME', 'Home');
define('TEXT_HEADING_ORDERS', 'Orders');
define('TEXT_HEADING_CUSTOMERS', 'Customers');
define('TEXT_HEADING_CATALOG', 'Products');
define('TEXT_HEADING_CONTENT', 'Content');
define('TEXT_HEADING_MARKETING', 'Marketing');
define('TEXT_HEADING_CONFIGURATION', 'Configuration');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes/Pedidos');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_PENDING_APPROVALS', 'Pending Approvals');
//added for Super-Friendly Admin Menu:
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');
define('BOX_CUSTOMERS_EDIT_ORDERS', 'Editar pedidos');
define('BOX_ABANDONED_ORDERS', 'Abandoned Orders');
define('BOX_CREATE_ACCOUNT', 'Crear una cuenta nueva');
define('BOX_CREATE_ORDER', 'Crear un pedido nuevo');
define('BOX_CREATE_ORDERS_ADMIN', 'Crear un pedido nuevo de admin');
// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Lugares/Tasas');
define('BOX_TAXES_COUNTRIES', 'Pa?ses');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Zonas de impuestos');
define('BOX_TAXES_TAX_CLASSES', 'Clases de impuestos');
define('BOX_TAXES_TAX_RATES', 'Tasas de impuestos');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Productos Vistos Superiores');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Productos Comprados Tapa');
define('BOX_REPORTS_ORDERS_TOTAL', 'Customer Orders-Total');
define('BOX_REPORTS_BOX_REPORTS_MONTHLY_SALES', 'Monthly Sales');
define('BOX_REPORTS_CREDITS', 'Customer Credit');
define('BOX_REPORTS_COUPONS_REDEEMED','Coupons Redeemed');
define('BOX_REPORTS_CUSTOMER_WISHLIST', 'Customer Wishlist');
define('BOX_REPORTS_SALES_REPORT2', 'Sales Report');
define('BOX_REPORTS_ORDERLIST', 'Generate orderlist');
define('BOX_REPORTS_MONTHLY_SALES', 'Monthly Sales/Tax');
define('BOX_REPORTS_CUSTOMERS_ORDERS', 'Customer Statistics');
define('BOX_REPORTS_DAILY_PRODUCTS_ORDERS', 'Daily Product Sales');
define('BOX_REPORTS_PRODUCTS_NOTIFICATIONS', 'Product Notifications');
define('BOX_CUSTOMERS_MENU','Customer Menu');
define('BOX_ORDERS_MENU','Orders Menu');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_HEADING_B2BSETTINGS', 'B2B Settings');
define('BOX_TOOLS_BACKUP', 'Copia de seguridad de la base de datos');
define('BOX_TOOLS_IMAGE_MANAGER', 'Image Manager');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestor de banners');
define('BOX_TOOLS_CACHE', 'Control de cach?');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Redactor de la lengua');
define('BOX_TOOLS_FILE_MANAGER', 'Gestor de archivos');
define('BOX_TOOLS_MAIL', 'Enviar email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Encargado del bolet?n de noticias');
define('BOX_TOOLS_SERVER_INFO', 'Informaci?n del servidor');
define('BOX_TOOLS_WHOS_ONLINE', '?Qui?n est? conectado?');

// BMC CC Mod Start
define('BOX_TOOLS_BLACKLIST', 'Credit Card Blacklist');
// BMC CC Mod End
// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Idiomas y monedas');
define('BOX_LOCALIZATION_CURRENCIES', 'Monedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado de pedidos');

define('BOX_HEADING_HEADER_TAGS_CONTROLLER', 'Header Tags');
define('BOX_HEADER_TAGS_ADD_A_PAGE', 'Page Control');
define('BOX_HEADER_TAGS_ENGLISH', 'Text Control');
define('BOX_HEADER_TAGS_FILL_TAGS', 'Fill Tags');

// infobox box text in includes/boxes/info_boxes.php
define('BOX_HEADING_DESIGN_CONTROLS', 'Controles de dise?o');
define('BOX_HEADING_DESIGN_TEMPLATE', 'Template');
define('BOX_HEADING_TEMPLATE_CONFIGURATION', 'Administraci?n de plantillas');
define('BOX_HEADING_TEMPLATE_MANAGEMENT', 'Template Admin');
define('BOX_HEADING_TEMPLATE_MANAGEMENT1', 'New Manage Templates');
define('BOX_HEADING_DESIGN_INFOBOX', 'Infobox');
define('BOX_HEADING_BOXES', 'Infobox configura');
define('BOX_HEADING_BOXES_ADMIN', 'Infobox Configure');
define('BOX_HEADING_DESIGN_BRANDING', 'Branding');
define('BOX_HEADING_TEMPLATE_HEADER_TAGS','Header Tags');
define('BOX_HEADING_DESIGN_PRODUCT_INFO','Producto Info');
define('BOX_HEADING_DESIGN_PRODUCT_INFO_CONFIG','Config del producto Info');
define('BOX_HEADING_PRODUCT_INFO_CONFIGURATION','Product Info');

define('BOX_HEADING_ADMIN_MENU_BUILDER', 'Admin Menu Builder');
define('BOX_HEADING_ADMIN_MENU', 'Admin Menu System');
define('BOX_HEADING_DESIGN_LAYOUT', 'Layout');
define('BOX_HEADING_DESIGN_PRODUCT_LISTING', 'Product Listing');
define('BOX_HEADING_DESIGN_HOME_PAGE', 'Home Page');
define('BOX_HEADING_DESIGN_INDEX_PAGE', 'Index Page');
define('BOX_HEADING_DESIGN_PRODUCT_PAGE', 'Product Page');

define('BOX_TEMPLATE_NAVMENU','Navigation Manager');
define('BOX_HEADING_BRANDING_MANAGER','Branding Manager');

// VJ Links Manager v1.00 begin
// links manager box text in includes/boxes/links.php
define('BOX_HEADING_LINKS', 'Gestor de enlaces');
define('BOX_LINKS_LINKS', 'Enlaces');
define('BOX_LINKS_LINK_CATEGORIES', 'Categor?as de enlaces');
define('BOX_LINKS_LINKS_CONTACT', 'Contactos de enlaces');
// VJ Links Manager v1.00 end

// javascript messages
define('JS_ERROR', '?Hubo errores mientras de procesaba su ficha!\nPor favor haga las siguientes correciones:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* El nuevo atributo de producto necesita un precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El nuevo atributo de producto necesita un prefijo de precio\n');

define('JS_PRODUCTS_NAME', '* El nuevo producto necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El nuevo producto necesita una descripci?n\n');
define('JS_PRODUCTS_PRICE', '* El nuevo producto necesita un valor en el precio\n');
define('JS_PRODUCTS_WEIGHT', '* El nuevo producto necesita un valor en el peso\n');
define('JS_PRODUCTS_QUANTITY', '* El nuevo producto necesita un valor en la cantidad\n');
define('JS_PRODUCTS_MODEL', '* El nuevo producto necesita un valor en el modelo\n');
define('JS_PRODUCTS_IMAGE', '* El nuevo producto necesita un valor en la imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Es necesario un precio nuevo para este producto\n');

define('JS_GENDER', '* El valor de \'G?nero\' es necesario.\n');
define('JS_FIRST_NAME', '* El campo \'Nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El campo \'Apellidos\' debe tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* El campo \'Fecha de nacimiento\' debe tener el siguiente formato: xx/xx/xxxx (d?a/mes/a?o).\n');
define('JS_EMAIL_ADDRESS', '* El campo \'Direcci?n de email\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* El campo \'Direcci?n\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El campo \'C?digo postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* El campo \'Ciudad\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* El campo \'Provincia\' es necesario.\n');
define('JS_STATE_SELECT', '-- Seleccionar arriba --');
define('JS_ZONE', '* El campo \'Provincia\' hay que escogerlo de la lista para ese pa?s.');
define('JS_COUNTRY', '* El campo \'Pa?s\' es necesario.\n');
define('JS_TELEPHONE', '* El campo \'N?mero de tel?fono\' debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* Los campos \'Contrase?a\' y \'Confirmaci?n\' deben coincidir y tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', '?El n?mero de pedido %s no existe!');
/* User Friendly Admin Menu */
define('CATALOG_CATEGORIES', 'Categor?as');
define('CATALOG_ATTRIBUTES', 'Atributos de productos');
define('CATALOG_REVIEWS', 'Comentarios de productos');
define('CATALOG_SPECIALS', 'Ofertas');
define('CATALOG_EXPECTED', 'Pr?ximamente');
define('REPORTS_PRODUCTS_VIEWED', 'Productos vistos');
define('REPORTS_PRODUCTS_PURCHASED', 'Productos comprados');
define('TOOLS_FILE_MANAGER', 'Gestor de archivos');
define('TOOLS_CACHE', 'Control de cach?');
define('TOOLS_DEFINE_LANGUAGES', 'Definir idiomas');
define('TOOLS_EMAIL', 'Enviar email a clientes');
define('TOOLS_NEWSLETTER', 'Boletines de noticias');
define('TOOLS_SERVER_INFO', 'Informaci?n del servidor');
define('TOOLS_WHOS_ONLINE', '?Qui?n est? conectado?');
define('BOX_HEADING_GV', 'Cupones/cheques');
define('GV_COUPON_ADMIN', 'Cupones de descuento');
define('GV_EMAIL', 'Enviar un cheque regalo por email');
define('GV_QUEUE', 'Canjear cheque regalo');
define('GV_SENT', 'Cheque regalo enviado');
define('BOX_GV_SENT', 'Gift Voucher\'s Sent');
/* User Friedly Admin Menu */

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Direcci?n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Opciones');
define('CATEGORY_PASSWORD', 'Your Password');

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'G?nero:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">necesario</span>');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">m?nimo de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">m?nimo ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_LAST_NAME_TEXT', '*');

define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ej. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Direcci?n de e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">m?nimo ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">?La direcci?n de correo no parece v?lida!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">?Esta direcci?n de correo ya existe en nuestra base de datos!</span>');
define('ENTRY_COMPANY', 'Nombre de la empresa');
define('ENTRY_STREET_ADDRESS', 'Direcci?n:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">m?nimo ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_SUBURB', 'Suburbio:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_POST_CODE', 'C?digo postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">m?nimo ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">m?nimo ' . ENTRY_CITY_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">necesaria</span>');
define('ENTRY_COUNTRY', 'Pa?s:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'N?mero de tel?fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">m?nimo ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres</span>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'N?mero de fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Bolet?n de noticias:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Subscrito');
define('ENTRY_NEWSLETTER_NO', 'No subscrito');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'The Password Confirmation must match your Password.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Password Confirmation:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Current Password:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW', 'New Password:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Your new Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'The Password Confirmation must match your new Password.');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* Informaci?n requerida');
define('CATEGORY_ORDER_DETAILS', 'Detalles del cliente');
define('ENTRY_CURRENCY', 'Moneda del cliente');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Enviando e-mail');
define('IMAGE_BACK', 'Atr?s');
define('IMAGE_BACKUP', 'Copia de seguridad');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_BUTTON_CONTINUE', 'Continue');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar a');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Eliminar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EDIT_STATUS', 'Edit Order Status');
define('IMAGE_EDIT_ORDER', 'Edit Order');
define('IMAGE_EDIT_LANG_DEFINE', 'Edit Language Defines');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_FILE_MANAGER', 'Gestor de archivos');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activar');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Desactivar');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Bloquear');
define('IMAGE_MODULE_INSTALL', 'Instalar m?dulo');
define('IMAGE_MODULE_REMOVE', 'Quitar m?dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nuevo banner');
define('IMAGE_NEW_CATEGORY', 'Nueva categor?a');
define('IMAGE_NEW_COUNTRY', 'Nuevo pa?s');
define('IMAGE_NEW_CURRENCY', 'Nueva moneda');
define('IMAGE_NEW_FILE', 'Nuevo archivo');
define('IMAGE_NEW_FOLDER', 'Nueva carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nuevo idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo bolet?n de noticias');
define('IMAGE_NEW_PRODUCT', 'Nuevo producto');
define('IMAGE_NEW_SALE', 'Nueva venta');
define('IMAGE_NEW_TAX_CLASS', 'Nueva clase de impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nueva tasa de impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva zona de impuesto');
define('IMAGE_NEW_ZONE', 'Nueva zona');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Factura');
define('IMAGE_ORDERS_PACKINGSLIP', 'Packing slip');
define('IMAGE_PREVIEW', 'Previo');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Reset');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar email');
define('IMAGE_UNLOCK', 'Desbloquear');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizar el tipo de cambio');
define('IMAGE_UPLOAD', 'Upload');

define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Eliminar');
//added for quick product edit DMG
define('ICON_EDIT','Editar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Archivo');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Bloqueado');
define('ICON_PREVIOUS_LEVEL', 'Nivel anterior');
define('ICON_PREVIEW', 'Previo');
define('ICON_STATISTICS', 'Estad?sticas');
define('ICON_SUCCESS', 'OK');
define('ICON_TICK', 'Verdadero');
define('ICON_UNLOCKED', 'Desbloqueado');
define('ICON_WARNING', 'Atenci?n');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'P?gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> paises)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> boletines de noticias)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> estados de pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> pr?ximos productos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> comentarios de productos)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> ventas)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> productos en oferta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> clases de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> tasas de impuestos)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando desde <b>%d</b> a <b>%d</b> (de <b>%d</b> zonas)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'por defecto');
define('TEXT_SET_DEFAULT', 'Poner por defecto');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* necesario</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: No hay ning?n tipo de moneda definido en este momento. Por favor fije una en: Herramientas de administraci?n->Monedas/Idiomas->Monedas');

define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'Arriba');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: El destino no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: El destino no tiene permisos de escritura.');
define('ERROR_FILE_NOT_SAVED', 'Error: Carga por teletratamiento del archivo no ahorrada.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: No se permite el tipo de archivo para upload.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '?xito: Carga por teletratamiento del archivo ahorrada con ?xito.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: NinguÃ?n archivo cargado.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Las cargas por teletratamiento del archivo se inhabilitan en el archivo de configuraci?n de php.ini.');
define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> Cannot send the email through the specified SMTP server. Please check your php.ini setting and correct the SMTP server if necessary.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: ' . DIR_FS_CATALOG . 'install. Please remove this directory for security reasons.');
define('WARNING_UPGRADES_DIRECTORY_EXISTS', 'Warning: Upgrades directory exists at: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/upgrades. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: I am able to write to the configuration file: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_CONFIG_FILE_WRITEABLE_CATALOG', 'Warning: I am able to write to the configuration file: ' . DIR_FS_CATALOG . 'includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Warning: The sessions directory does not exist: ' . tep_session_save_path() . '. Sessions will not work until this directory is created.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the sessions directory: ' . tep_session_save_path() . '. Sessions will not work until the right user permissions are set.');
define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this php feature in php.ini and restart the web server.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_CATALOG . 'download/' . '. Downloadable products will not work until this directory is valid.');
define('WARNING_ENCRYPT_FILE_MISSING', 'Warning: The Encryption key file is missing.');
define('WARNING_TMP_DIRECTORY_NON_EXISTENT', 'Warning: The tmp/ is not writable: ' . DIR_FS_CATALOG . 'tmp/' . '. The page cacheing will not work until this directory is writable.');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTAR: El sitio Web est? actualmente Abajo Para el Mantenimiento al p?blico.');
define('BOX_CATALOG_XSELL_PRODUCTS', 'Productos Cross Sell'); // X-Sell

define('TEXT_CSCAL_ERROR_CARD_TYPE_MISMATCH', 'Error: 01 The Credit Card number does not match the Card Type:');
define('TEXT_CCVAL_ERROR_INVALID_MONTH', 'Error: 02 The expiry date Motnth entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_YEAR', 'Error: 03 The expiry date year entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Error: 04 The expiry date entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Error: 05 The credit card number entered is invalid. Please check the number for misstyped numbers and try again.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Error: 06 The first four digits of the number entered are: %s If that number is correct, we do not accept that type of credit card.If it is wrong, please try again.');
define('TEXT_CCVAL_ERROR_NOT_ACCEPTED', 'Error: 07 The credit card number you have entered appears to be a %s card. Unfortunately at this time we do not accept %s as payment.');
define('TEXT_CCVAL_ERROR_BLACKLIST', 'Error: 08 We cannot accept your card as it is blacklisted, if you feel you have recieved this message in error please contact your card issuer.');
define('TEXT_CCVAL_ERROR_SHORT', 'Error: 09 You have not entered the correct amount of digits. Please ensure you have entered all of the long number displayed on the front of your card');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Error: 10 The CCV/CVV/CID number entered is the incorrect length. Please try again.');

define('IMAGE_BUTTON_PRINT_ORDER', 'Pedido imprimible');
define('TEXT_PROCESS','Process');

// BOF: Lango Added for print order MOD
define('IMAGE_BUTTON_PRINT', 'Imprimir');
// EOF: Lango Added for print order MOD


// BOF: Lango Added for template MOD
// WebMakers.com Added: Attribute Sorter, Copier and Catalog additions
require(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');

//DWD Modify: Information Page Unlimited 1.1f - PT
  define('BOX_HEADING_INFORMATION', 'Encargado contento');
  define('BOX_INFORMATION_MANAGER', 'Encargado del Info');
//DWD Modify End

include('includes/languages/order_edit_english.php');

 define('BOX_TITLE_CRELOADED', 'Proyecto CRE Loaded');
 define('LINK_CRE_FORUMS','Foros de CRE Loaded');
 define('LINK_CRW_SUPPORT','Soporte t?cnico');
// General Release Edition
 define('LINK_SF_CRELOADED','Source Forge Home');
 define('LINK_SF_BUGTRACKER','Bug Tracker');
 define('LINK_SF_SUPPORT','Petici?n de soporte');
 define('LINK_SF_TASK','Seguimiento de tareas');
 define('LINK_SF_CVS','Hojear CVS');
 define('LINK_CRE_FILES','Descargas CRE');
 define('LINK_SF_FEATURE','Solicitud de caracter?sticas');
//included for Backup mySQL (courtesy Zen-Cart Team) DMG
 define('BOX_TOOLS_MYSQL_BACKUP','Copia de seguridad de mySQL');
define('BOX_B2BSETTINGS_STORE_SETTINGS','Store Settings');
define('BOX_B2BSETTINGS_CUSTOMERS_GROUPS','Customer Groups');

// Included for Events Calendar 2.0 DMG
define('IMAGE_NEW_EVENT', 'New Event');

// VJ member approval added
define('BOX_CUSTOMERS_APPROVAL', 'Waiting Approval');

//DMG FAQ System 2.1
  define('BOX_HEADING_FAQ', 'FAQ System');
  define('BOX_FAQ_MANAGER', 'FAQ Manager');
  define('BOX_FAQ_CATEGORIES', 'FAQ Categories');
  define('BOX_FAQ_VIEW', 'FAQ View');
  define('BOX_FAQ_VIEW_ALL', 'FAQ View All');
  
  
// Article Manager
define('BOX_HEADING_ARTICLES', 'Noticias Encargado');
define('BOX_TOPICS_ARTICLES', 'Secciones/Noticias');
define('BOX_ARTICLES_CONFIG', 'Configuraci&oacute;n');
define('BOX_ARTICLES_AUTHORS', 'Autores');
define('BOX_ARTICLES_REVIEWS', 'Noticias Comentarios');
define('BOX_ARTICLES_XSELL', 'Venta a trav&eacute;s de noticias');
define('IMAGE_NEW_TOPIC', 'Nueva secci&oacute;n');
define('IMAGE_NEW_ARTICLE', 'Nueva noticia');
define('TEXT_DISPLAY_NUMBER_OF_AUTHORS', 'Mostrando de <b>%d</b> a <b>%d</b> (de <b>%d</b> autores)');
define('IMAGE_NEW_AUTHOR', 'Nuevo Autor');
define('TEXT_WARNING_NO_AUTHORS', 'ADVERTENCIA: Los autores vac?os Table!&nbsp;&nbsp;You DEBEN agregar por lo menos a un autor antes de que usted pueda agregar cualquier art?culo');

// Article Statistics Report DMG
  define('BOX_REPORTS_ARTICLES_VIEWED', 'Art?culos Vistos Superiores');
  define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Mostrando de <b>%d</b> to <b>%d</b> (of <b>%d</b> productos)');
  
// DMG :  Mulitple Products Manager

define('BOX_CATALOG_CATEGORIES_PRODUCTS_MULTI', 'Encargado de productos multi');


// DMG : Specials by Category



// START: Product Extra Fields DMG
  define('BOX_CATALOG_PRODUCTS_EXTRA_FIELDS', 'Product Extra Fields');
// END: Product Extra Fields DMG

// Contact US Email Subject DMG
define('BOX_TOOLS_EMAIL_SUBJECTS', 'Email Subjects');
define('TEXT_DISPLAY_NUMBER_OF_EMAIL_SUBJECTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> email subjects)');

define('BOX_REPORTS_EXPLAIN','osC Explain Queries');
 
//define('BOX_HEADING_CRYPT', 'Encryption and Decryption'); 
define('BOX_HEADING_CRYPT', 'Encrypt & Decrypt');
define('BOX_CRYPT_CONFIGURATION', 'Configuration'); 
define('BOX_CRYPT_TEST', 'Test'); 
define('BOX_CRYPT_CC_DATA', 'CC Data'); 
define('BOX_CRYPT_CONVERT', '&nbsp; Convert CC Data');
define('BOX_CRYPT_PURGE', 'Purge CC Data');
define('BOX_CRYPT_UPDATE', 'Update CC Data');
define('BOX_CRYPT_KEYS', 'Manage Keys');
define('BOX_CRYPT_HELP', 'Help');

define('IMAGE_CONVERT', 'Convert info to new key');
define('IMAGE_ENCRYPT', 'Encrypt data');
define('IMAGE_DECRYPT', 'Decrypt data');
define('IMAGE_RETURN', 'Return to main');
define('IMAGE_EDIT_KEY', 'Edit Key File');
define('IMAGE_CREATE', 'Create key');
define('IMAGE_HELP', 'Help');
define('IMAGE_RUN', 'Run');
  define('BOX_DATA_EASYPOPULATE_BASIC', 'Easy Populate Basic');
  define('BOX_DATA_EASYPOPULATE', 'Easy Populate Advance');
  define('BOX_DATA_EASYPOPULATE_EXPORT', 'EPA Export');
  define('BOX_DATA_EASYPOPULATE_IMPORT', 'EPA Import');
  define('BOX_DATA_EASYPOPULATE_BASIC_EXPORT', 'EPB Export');
  define('BOX_DATA_EASYPOPULATE_BASIC_IMPORT', 'EPB Import');
  define('BOX_DATA_EASYPOPULATE_OPTIONS_EXPORT', 'Options Export');
  define('BOX_DATA_EASYPOPULATE_OPTIONS_IMPORT', 'Options Import');
  define('BOX_HEADING_DATA', 'Data Manager');
  define('BOX_DATA', 'Data Feeds');
  define('BOX_DATA_ADMIN', 'Data Configure');
  define('BOX_HEADING_FEEDERS', 'Feeder Systems');
  define('BOX_DATA_HELP', 'Data Help');
  define('BOX_FEEDERS_AMAZON', 'Amazon Marketplace');
  define('BOX_FEEDERS_BIZRATE', 'Biz Rate');
  define('BOX_FEEDERS_FROOGLE', 'Froogle');
  define('BOX_FEEDERS_MYSIMON', 'MySimon');
  define('BOX_FEEDERS_PRICE_GRABBER', 'Price Grabber');
  define('BOX_FEEDERS_SHOPPING', 'Shopping.com');
  define('BOX_FEEDERS_YAHOO', 'Yahoo');

define('BOX_HEADING_DOC', 'Documentation');
define('BOX_DOC_ADMIN', 'Admin');
define('BOX_DOC_CAT', 'Catalog');
define('BOX_DOC_MISC', 'Miscellaneous');



// Eversun mod for sppc and qty price breaks
define('ENTRY_CUSTOMERS_GROUP_NAME', 'Grupo del precio de cliente:');
define('BOX_CUSTOMERS_GROUPS', 'Customers Groups');
define('ENTRY_COMPANY_TAX_ID', 'Company\'s tax id number:');
define('ENTRY_COMPANY_TAX_ID_ERROR', '');
define('ENTRY_CUSTOMERS_GROUP_REQUEST_AUTHENTICATION', 'Switch off alert for authentication:');
define('ENTRY_CUSTOMERS_GROUP_RA_NO', 'Alert off');
define('ENTRY_CUSTOMERS_GROUP_RA_YES', 'Alert on');
define('ENTRY_CUSTOMERS_GROUP_RA_ERROR', '');
// Eversun mod end for sppc and qty price breaks
define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date("Y") . '&nbsp;<a target="_blank" href="http://www.creloaded.com/">Chain Reaction Ecommerce, Inc.</a>, portions &copy; 2003 <a target="_blank" href="http://www.oscommerce.com">osCommerce, Inc.</a><br>Powered by <a target="_blank" href="http://www.oscommerce.com">osCommerce</a> Supercharged by <a target="_blank" href="http://www.creloaded.com/creloaded">CRE Loaded Team</a>');
// VJ infosystem begin
define('BOX_HEADING_PAGE_MANAGER', 'Page Manager');
define('BOX_PAGES', 'Pages');
define('BOX_PAGES_CATEGORIES', 'Categories');
// VJ infosystem end

define('BOX_SHIPWIRE', 'ShipWire');
define('BOX_MODULES_CHECKOUT_SUCCESS', 'Checkout Success');
define('BOX_MODULES_ADDONS', 'Agregue-Ons');

define('BOX_HEADING_TECH_SUPPORT','Tech Support');
define('BOX_HEADING_INSTALL_EXPLAIN','Explain Quires');
define('IMAGE_BUTTON_BACK','Back');
define('IMAGE_BUTTON_CONFIRM','Confirme');

if(file_exists('includes/languages/english_newsdesk.php')) {
include('includes/languages/english_newsdesk.php');
include('includes/languages/english_faqdesk.php');
}

// labels for Tools>Cache Control
define('TEXT_CACHE_CATEGORIES', 'Panel de categor?as');
define('TEXT_CACHE_CATEGORIES1', 'Panel de categor?as 1');
define('TEXT_CACHE_CATEGORIES2', 'Panel de categor?as 2');
define('TEXT_CACHE_CATEGORIES3', 'Panel de categor?as 3');
define('TEXT_CACHE_CATEGORIES4', 'Panel de categor?as 4');
define('TEXT_CACHE_CATEGORIES5', 'Panel de categor?as 5');
define('TEXT_CACHE_ALLPROD', 'Todos los productos');
define('TEXT_CACHE_ALLMANUF', 'Todos los fabricantes');
define('TEXT_CACHE_ALLCATS', 'Todas las categor?as');
define('TEXT_CACHE_MANUFACTURERS', 'Panel de fabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'M?dulo de "Tambi?n compraron"');
define('TEXT_CACHE_COOLMENU', 'Men? especial');

define('NON_TTF_FONT_ERROR','Non-TTF font size must be 1,2,3,4 or 5');
define('SETLEGEND_ERROR','Error: SetLegend argument must be an array');

define('UNABLE_TO_OPEN_ERROR','Unable to open ');
define('UNABLE_TO_OPEN_GIF_ERROR',' as a GIF');
define('UNABLE_TO_OPEN_PNG_ERROR',' as a PNG');
define('UNABLE_TO_OPEN_JPG_ERROR',' as a JPG');
define('SELECT_IMAGE_ERROR','Please select wbmp,gif,jpg, or png for image type!');
define('SELECT_IMAGE_TYPE_ERROR','Please select an image type!');
define('NOT_ACCEPTABLE_PLOT_TYPE_ERROR',' not an acceptable plot type');
define('UNKNOWN_CHART_TYPE_ERROR','ERROR: unknown chart type');
define('LOG_PLOTS_DATA_GREATER_ERROR','Log plots need data greater than 0');
define('ERROR_IN_DATA','Error in Data - max not gt min');
define('FATAL_ERROR','Fatal error');
define('THINBARLINES_DATA_TYPE_ERROR','Data Type for ThinBarLines must be data-data');
define('BAR_PLOTS_DATA_TYPE_ERROR','Bar plots must be text-data: use function SetDataType(\'text-data\')');
define('NO_IMAGE_DEFINED_DRAWGRAPH_ERROR','No Image Defined: DrawGraph');
define('NO_ARRAY_OF_DATA_IN_ERROR','No array of data in ');

define('SESSION_FILE_OPEN_ERROR_1','Could not open session file (');
define('SESSION_FILE_OPEN_ERROR_2',').');
define('SESSION_FILE_WRITE_ERROR_1','Could not write session file (');
define('SESSION_FILE_WRITE_ERROR_2',').');
define('CACHING_METHOD_ERROR_1','Caching method ');
define('CACHING_METHOD_ERROR_2',' not implemented.');
define('INITIALIZE_SESSION_MODULE_ERROR','Failed to initialize session module.');
define('SESSION_NOT_SAVED_ERROR','Session could not be saved.');
define('SESSION_NOT_CLOSED_ERROR','Session could not be closed.');
define('SESSION_NOT_STARTED_ERROR','Session could not be started.');


define('CANNOT_COPY_PRODUCT_ERROR_1','<b>WARNING: Cannot copy from Product ID #');
define('CANNOT_COPY_PRODUCT_ERROR_2',' to Product ID # ');
define('CANNOT_COPY_PRODUCT_ERROR_3',' ... No copy was made</b>');
define('NO_ATTRIBUTES_COPY_ERROR_1','<b>WARNING: No Attributes to copy from Product ID #');
define('NO_ATTRIBUTES_COPY_ERROR_2',' for: ');
define('NO_ATTRIBUTES_COPY_ERROR_3',' ... No copy was made</b>');
define('NO_PRODUCT_ERROR_1','<b>WARNING: There is no Product ID #');
define('NO_PRODUCT_ERROR_2',' ... No copy was made</b>');


define('MCRYPT_ALGORITHMS_AND_MODES','Mcrypt Algorithms and Modes');
define('MCRYPT_ALGORITHM','Algorithm');
define('MCRYPT_Status','Status');
define('MCRYPT_OK','OK');
define('MCRYPT_NOT_OK','NOT OK');
define('MCRYPT_NOT_TESTED','NOT TESTED');
define('MCRYPT_MAXIMUM_KEY_SIZES_ALLOWED','Maximum Key Sizes Allowed');
define('MCRYPT_MAXIMUM_KEY_SIZE','Maximum Key Size');
define('MCRYPT_KEY_TEXT','this is a very long key, even too long for the cipher');
define('MCRYPT_PLAIN_TEXT','very important data');

define('DATABASE_TEP_DB_ERROR','[TEP STOP]');

define('CANNOT_CHANGE_THE_MODE_OF_FILE','Cannot change the mode of file');
define('FAILED_TO_OPEN_FILE','Failed to open file ');
define('CANNOT_WRITE_TO_FILE','Cannot write to file ');

define('UNABLE_TO_DETERMINE_PAGE_LINK','<b>Error!</b></font><br><br><b>Unable to determine the page link!<br><br>Function used:<br><br>');
define('UNABLE_TO_DETERMINE_CONNECTION_METHOD_ON_PAGE_LINK','<b>Error!</b></font><br><br><b>Unable to determine connection method on a link!<br><br>Known methods: NONSSL SSL<br><br>Function used:<br><br>');


define('SUPPORT_DESK','Support Desk');

define('FRAUDSCREENCLIENT_AFS','AFS');
define('FRAUDSCREENCLIENT_QUERY_RESULT','query result');
define('FRAUDSCREENCLIENT_SERVER_UNAVAILABLE','Algozone Fraud Screen Server currently unavailable. Please try again later.');
define('FRAUDSCREENCLIENT_AFS_INPUTS','AFS Inputs');
define('FRAUDSCREENCLIENT_INPUT','input');
define('FRAUDSCREENCLIENT_INVALID_INPUT','invalid input');
define('FRAUDSCREENCLIENT_MISSPELLED_FIELD','- perhaps misspelled field?');
define('FRAUDSCREENCLIENT_AFS_USING_CURL','AFS using curl');
define('FRAUDSCREENCLIENT_AFS_CURL_PARAMS','AFS curl params');
define('FRAUDSCREENCLIENT_AFS_CURL_NOT_SUPPORT','<br>error: this version of curl does not support HTTPS try build curl with SSL or specify');
define('FRAUDSCREENCLIENT_AFS_RECEIVED_ERROR_MESSAGE_1','Received error message');
define('FRAUDSCREENCLIENT_AFS_RECEIVED_ERROR_MESSAGE_2','from curl');
define('FRAUDSCREENCLIENT_AFS_CURL_PROXY','<p>using curl thru proxy');
define('FRAUDSCREENCLIENT_AFS_USING_FSOCKOPEN','<p><b>AFS using fsockopen</b>');
define('FRAUDSCREENCLIENT_AFS_SOCKET_PARAM','AFS socket url param');
define('FRAUDSCREENCLIENT_AFS_FSOCKOPEN_PROXY','<p><b>AFS using fsockopen proxy<b><br>');
define('FRAUDSCREENCLIENT_AFS_PROXY_PORT','<br>error: you need to provide the proxy port number to use the proxy port provided');
define('FRAUDSCREENCLIENT_AFS_INSTALL_CURL','<br>error: you need to install curl if you want secure HTTPS or specify the variable to be');
define('FRAUDSCREENCLIENT_AFS_QUERY_RESULTS','<p><b>AFS query results: </b>');
define('FRAUDSCREENCLIENT_AFS_OUTPUT','output');
define('MAP_MSG','<p>Courtesy of the U.S. Census Bureau\'s TIGER Mapping Service');
define('ATTRIBUTES_DISPLAY_MSG','**Discounts may vary based on selected options');

##################### 05/07/2006 End  ####################
##################### 06/07/2006 Start  ####################

define("FEATURE_NOT_PRESENT_TEXT",'This feature has not yet been added, It is a work in progress');


define('INSTALL_EXPLAIN_TXT_1','Install (and Uninstall) Database Settings script for osC-Explain - by Chemo');
define('INSTALL_EXPLAIN_TXT_2','<p><b>Install option selected...running queries</b></p>');
define('INSTALL_EXPLAIN_TXT_3','<p>STEP 1 => Add configuration group</p>');
define('INSTALL_EXPLAIN_TXT_4','<p>Added the configuration group ');
define('INSTALL_EXPLAIN_TXT_5','successfully...adding configuration values</p>');
define('INSTALL_EXPLAIN_TXT_6','<p>STEP 2 => Add configuration settings</p>');
define('INSTALL_EXPLAIN_TXT_7','<blockquote>Success...</blockquote>');
define('INSTALL_EXPLAIN_TXT_8','<p>Added the configuration settings successfully...adding the \'explain_queries\' table</p>');
define('INSTALL_EXPLAIN_TXT_9','<p>STEP 3 => Creating explain_queries table</p>');
define('INSTALL_EXPLAIN_TXT_10','<blockquote>Successfully created the table.</blockquote>');
define('INSTALL_EXPLAIN_TXT_11','<p><b>All done!  You should delete this script from the server...or not...you\'re choice.</b></p>');

define('INSTALL_EXPLAIN_TXT_12','<p><b>Uninstall optin selected...running queries</b></p><p>STEP 1 => Delete the configuration group from configuration_group table</p>');

define('INSTALL_EXPLAIN_TXT_13','<blockquote>Deleted the configuration group successfully...removing configuration values</blockquote><p>STEP 2 => Delete configuraton values</p>');

define('INSTALL_EXPLAIN_TXT_14','<blockquote>Deleted the configuration values successfully...dropping the explain_queries table</blockquote><p>STEP 3 => Dropping explain_queries table</p>');


define('INSTALL_EXPLAIN_TXT_15','<blockquote>Table dropped successfully...analyzing tables</blockquote><p>STEP 4 => Analyzing configuration_group and configuration table</p>');

define('INSTALL_EXPLAIN_TXT_16','<blockquote>Analyze configuration_group success...</blockquote>');

define('INSTALL_EXPLAIN_TXT_17','<blockquote>Analyze configuration success...</blockquote>');

define('INSTALL_EXPLAIN_TXT_18','<blockquote>Optimize configuration_group success...</blockquote>');

define('INSTALL_EXPLAIN_TXT_19','<blockquote>Optimize configuration success...</blockquote><p><b>All done!  You should delete this script from the server...or not...you\'re choice.</b></p>');

define('INSTALL_EXPLAIN_TXT_20','<p>Welcome to the barebones osC-Explain installation script (<a href="http://forums.oscommerce.com/index.php?showuser=9196">by Chemo</a>)!</p><p>This contribution is GPL and the target audience is fellow coders, optimizers,   and knowledgeable webmasters. I encourage each of you to look over the   code and add functionality so that the rest of us can benefit as well.</p><p>There are two options for this script:</p><p><strong>INSTALL</strong></p><blockquote>  <p>This option is self explanatory :) It will add a configuration group     with the title &quot;Explain Queries&quot; and set the sort order to 99 (making     it the last listed). The script will then add values to the configuration     table that is the options for this contribution. Currently, these are     available:</p>  <ul>    <li> Global on / off</li>    <li>Enable on for specific scripts (add one or list separated by comma).       This will be handy for contribution coders since they can enable only for       their development scripts and not waste room for storing other page queries.       In addition, it will speed up the admin report if there are 1,000 rows instead       of 500,000 :)</li>    <li>Enable page exclusion for specific scripts. This is handy to exclude       certain scripts (for instance, ones already optimized) but capture the rest.</li>  </ul>  <p>The last thing this install script does is add a new table called \'explain_queries\'.    This is needed to store the data. Do not change the name since the table     name is hardcoded all over the place. Why not add a new define to filenames.php?     If there is room to trim install steps and decrease the number of file changes     I\'ll take it any day of the week and twice on Sunday. You are (hopefully)     an experienced osC developer so if you want to do define table names the standard     way edit your own files.</p></blockquote><p align="center"><strong><a href="'.$PHP_SELF.'?action=install">INSTALL</strong> THE DATABASE VALUES FOR OSC-EXPLAIN</a></p><p align="left"><strong>UNINSTALL</strong></p><blockquote>  <p align="left">Hopefully, this option is self-explanatory too :) This     will delete all the values associated with osC-Explain from the configuration_group     and configuration tables. Then it will analyze the tables to reset the     cardinality of the tables. Next, the script will drop the \'explain_queries\'     table.</p></blockquote><p align="center"><strong><a href="'.$PHP_SELF.'?action=delete">UNINSTALL</strong> THE DATABASE VALUES FOR OSC-EXPLAIN</a></p><p align="left"><strong>NOTES</strong>: By default all values are set to false.   So, once you have the files uploaded and necessary changes have been made you\'ll   have to enable it through the admin control panel. </p><blockquote>  <p align="left">Configuration -> Explain Queries -> Enable explain queries     -> true</p></blockquote>');

define('VALID_CATEGORIES_PRODUCTS_LIST','Valid Categories/Products List');
define('VALID_CATEGORIES_LIST','Valid Categories List');
define('VALID_PRODUCTS_LIST','Valid Products List');


define('CRE_LOADED_OSCOMMERCE','CRE Loaded osCommerce');
define('PASS_FORGOTTEN_FOOTER','E-Commerce Engine Copyright &copy; 2003 <a href="http://oscommerce.com" target="_blank">osCommerce</a> <br>      Supercharged by <a href="http://www.creloaded.com" target="_blank">CRE Loaded</a>');

##################### 06/07/2006 End  ####################


##################### 07/07/2006 End  ####################

define('QUICK_ATTRIBUTES_POPUP_TXT_0','Current Attributes');
define('QUICK_ATTRIBUTES_POPUP_TXT_1','Current ID#');
define('QUICK_ATTRIBUTES_POPUP_TXT_2','Model:');
define('QUICK_ATTRIBUTES_POPUP_TXT_3','NO CURRENT ATTRIBUTES ...');
define('QUICK_ATTRIBUTES_POPUP_TXT_4','CURRENT ATTRIBUTES:');
define('QUICK_ATTRIBUTES_POPUP_TXT_5','Close Window');

define('QUICK_PRODUCTS_POPUP_TXT_0','Quick Products Listing');
define('QUICK_PRODUCTS_POPUP_TXT_1','Quick Product Locator');
define('QUICK_PRODUCTS_POPUP_TXT_2','All categories:');
define('QUICK_PRODUCTS_POPUP_TXT_3','Click to:');
define('QUICK_PRODUCTS_POPUP_TXT_4','Show Attributes');

define('TREEVIEW_TXT_1','Catalog Tree');
define('TREEVIEW_TXT_2','open all');
define('TREEVIEW_TXT_3','close all');

define("ADMIN_JS_FILE_BROWSER","File Browser");
define("ADMIN_JS_INSERT_FILE","Insert File");

define("ADMIN_JS_IBROWSER_MSG_1",'<strong>net<span class="hilight">4</span>visions.com</strong> - the image browser plugin for WYSIWYG editors like FCKeditor, SPAW, tinyMCE, Xinha, and HTMLarea!</p>
              <p> <strong> <span class="hilight">i</span>Browser</strong> does upload images and supply file management functions. Images can be resized on the fly. If you need even more advanced features, have a look at <strong> <span class="hilight">i</span>Manager</strong>, another <strong>net<span class="hilight">4</span>visions.com</strong> plugin - it adds truecolor image editing functions like: resize, flip, crop, add text, gamma correct, merge into other image, and many others.</p>
              <p><strong> <span class="hilight">i</span>Browser</strong> is written and distributed under the GNU General Public License which means that its source code is freely-distributed and available to the general public.</p>
              <p>&nbsp;</p>');

define("ADMIN_JS_IBROWSER_MSG_2",'Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Loreum ipsum edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit. Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.');

define("ADMIN_JS_PREVIEW_PAGE","Preview page");
define("ADMIN_JS_EDITOR_CONTENTS","Editor contents:");
define("ADMIN_JS_CLOSE","Close");
define("ADMIN_JS_PRINT","Print");

define("DOCUMENT_INDEX","Document Index");

define("CUSTOMER_ZIP_CODE_VALIDATOR","Customer Zip Code Validator");
define("SEND_EMAIL_TO_ALL","Send Email to All");
define("MISMATCHED_STATE_AND_ZIPCODE","Mismatched State and Zipcode");
define("ADDRESS_BOOK_ID","Address Book ID");
define("CUSTOMER_ID","Customer ID");
define("CUSTOMER","Customer");
define("REMOVE","Remove");
define('TEXT_HEADING_INPUT_COLOR', 'Current Color');
define('TEXT_HEADING_CHANGE_COLOR', 'Change Color');
define('BOX_REPORTS_RECOVER_CART_SALES', 'Recover Carts');
define('BOX_TOOLS_RECOVER_CART', 'Recover Carts');
// Begin RMA Returns System
define('TEXT_DISPLAY_NUMBER_OF_TICKET_STATUS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b>)');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Restock Product');
// End RMA Returns System
// Begin RMA Returns System
define('BOX_RETURNS_HEADING', 'Customer Returns');
define('BOX_RETURNS_REASONS', 'Return Reasons');
define('BOX_RETURNS_MAIN', 'Returned Products');
define('BOX_RETURNS_TEXT', 'Return Text Edit');
define('BOX_RETURNS_STATUS', 'Returns Status');
define('BOX_HEADING_REFUNDS', 'Refund Methods');
// End RMA Returns System
/*
define('TEXT_PRODUCTS_GROUP_ACCESS','Group Access');
define('CAT_GUEST', ' Guest');
define('CAT_SHOW', ' Show');
define('CAT_HIDE', ' Hide');
define('TEXT_PUSH_SAVE_OPTION','Save Options');
define('TEXT_DO_NOT_PUSH','Do not Push Type');
define('TEXT_PUSH_SUB_CATEGORIES','Push type to all sub categories');
define('TEXT_PUSH_SUB_CATEGORIES_PRODUCTS','Push type to all sub categories and products');
define('TEXT_PUSH_WARNING','Warning : may time out if this is a top level and you have a large number of products and categories');
*/
define('BOX_TOOLS_MY_SQL_MANAGER', 'MySQL Manager');
define('BOX_CRE_MARKETPLACE', 'CRE Marketplace');  
define('BOX_EDIT_HTML_INVOICE','Factura del HTML'); 
define('BOX_FEEDERS_GOOGLE', 'Google Base');
define('BOX_HEADING_CONTENT',' Encargado contento');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (eg. 21/05/1970)');
define('BOX_CATALOG_SPECIALSBYCAT','Specials de Category');

define('TEXT_ORDER', 'Orden');  
define('TEXT_SEARCH', 'B√∫squeda');
define('TEXT_CREATE', 'Cree'); 
define('TEXT_IMAGE_NONEXISTENT', 'La imagen no existe en el servidor.');    
define('VISUAL_IMAGE_NONEXISTENT', '<center>' . tep_image(DIR_WS_IMAGES . 'image_not_avail.jpg') . '</center>');
define('TEXT_POPUP_CLOSE_WINDOW','Ventana cercana'); 
// multi-vendor shipping
define('VENDOR_IMAGE_MAIN_CONFIGURATION', 'Fije los constantes del vendedor');
define('VENDOR_IMAGE_MANAGE_MODULES', 'Encargado del m√≥dulo del vendedor');
define('IMAGE_MANAGE', 'Maneje');
define('VENDOR_HEADING_TITLE', 'Encargado del m√≥dulo del vendedor');
define('BOX_HEADING_VENDOR_MODULES', 'Gerencia del vendedor');
define('BOX_VENDOR_SELECT', 'Vendedor selecto');
define('BOX_VENDOR_MODULES_SHIPPING', 'Env√≠o del vendedor');
define('BOX_VENDOR_CONFIGURATION', 'Config del vendedor');
define('BOX_CATALOG_VENDORS', 'Encargado del vendedor');
define('BOX_HEADING_VENDORS', 'Vendedores');
define('BOX_VENDORS', 'Encargado del vendedor');
define('BOX_VENDORS_REPORTS_PROD', 'Informes del producto');
define('TEXT_DISPLAY_NUMBER_OF_VENDORS', 'Exhibici√≥n <b>%d</b> a <b>%d</b> (de <b>%d</b> vendedores)');
define('TEXT_CACHE_VENDORS', 'Caja de los vendedores');
define('BOX_VENDORS_ORDERS', 'Lista de las pedidos de los vendedores');
define('BOX_MOVE_VENDOR_PRODS', 'Mueva los productos entre los vendedores');
// multi-vendor shipping //eof

// Products Sales overtime report
define('BOX_REPORTS_PRODUCTS_SALES', 'Ventas en un cierto plazo');
// Multi Warehouse Shipping 
define('BOX_WAREHOUSE_ZONES','Zonas del almacÈn');
define('BOX_HEADING_MANUFACTURER_INFO' ,'Manufactuer Info');
define('TEXT_POWERED_BY_CRE_NAG', '…xito de la actualizaciÛn!<br><br>You\'°re usando nuestro software cargado CRE libre, quitar este mensaje, mejora a nuestros favorables productos y conseguir m·s caracterÌsticas y ayuda!<br><br>Las favorables versiones le traer·n derecho de nuevo a la p·gina %s y evitar·n este paso.');
define('ENTRY_CUSTOMERS_ACCESS_GROUP', 'Customer Access Group:');
define('ENTRY_CUSTOMERS_ALL_GROUP', ' All');
define('ENTRY_CUSTOMERS_GUEST_GROUP', ' Guest');
?>