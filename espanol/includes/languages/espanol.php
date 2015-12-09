<?php
/*
  $Id: espanol.php,v 2.1 2008/06/12 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'es_ES'
// on FreeBSD try 'es_ES.ISO_8859-1'
// on Windows try 'sp', or 'Spanish'
//@setlocale(LC_TIME, 'es_ES.ISO_8859-1');
@setlocale(LC_TIME, 'Spanish');
//VVC Constants
define('VISUAL_VERIFY_CODE_CHARACTER_POOL', 'ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789');  //no zeros or O
define('VISUAL_VERIFY_CODE_CATEGORY', 'Verifique el código de seguridad');
define('VISUAL_VERIFY_CODE_ENTRY_ERROR', 'The security code you entered did not match the one displayed.');
define('VISUAL_VERIFY_CODE_ENTRY_TEXT', '*');
define('VISUAL_VERIFY_CODE_TEXT_INSTRUCTIONS', 'Mecanografíe el código de seguridad aquí:');
define('VISUAL_VERIFY_CODE_BOX_IDENTIFIER', '<- Código de seguridad');
// restricted pages text
define('TEXT_INDEX_RESTRICTED_HEADING','Área restricta');
define('TEXT_INDEX_RESTRICTED_TEXT','La página que usted está intentando ver es restricta');
// date format
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function tep_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 0, 2) . substr($date, 3, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 3, 2) . substr($date, 0, 2);
  }
}
// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
define('LANGUAGE_CURRENCY', 'EUR');
// Global entries for the <html> tag
define('HTML_PARAMS','dir="LTR" lang="es"');
// charset for web pages and emails
define('CHARSET', 'iso-8859-1');
// page title
define('TITLE', 'El nombre de su tienda, cámbielo en catalog/includes/languajes/   su idioma');
// CCGV
define('BOX_INFORMATION_GV', 'Gift Voucher FAQ');
define('VOUCHER_BALANCE', 'Voucher Balance');
define('BOX_HEADING_GIFT_VOUCHER', 'Cuenta del vale del regalo');
define('GV_FAQ', 'Gift Voucher FAQ');
define('ERROR_REDEEMED_AMOUNT', 'Enhorabuena, usted ha redimido ');
define('ERROR_NO_REDEEM_CODE', 'You did not enter a redeem code.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Invalid Gift Voucher Code');
define('TABLE_HEADING_CREDIT', 'Credits Available');
define('GV_HAS_VOUCHERA', 'You have funds in your Gift Voucher Account. If you want <br>
                         you can send those funds by <a class="pageResults" href="');
define('GV_HAS_VOUCHERB', '"><b>email</b></a> to someone');
define('ENTRY_AMOUNT_CHECK_ERROR', 'You do not have enough funds to send this amount.');
define('BOX_SEND_TO_FRIEND', 'Send Gift Voucher');
define('VOUCHER_REDEEMED', 'Voucher Redeemed');
define('CART_COUPON', 'Coupon :');
define('CART_COUPON_INFO', 'more info');
define('MODULE_ORDER_TOTAL_COUPON_TEXT_ERROR', 'Coupon Redemption');
define('ERROR_REDEEMED_AMOUNT_ZERO', '<BR>***HOWEVER:No reducion available, please see the coupon restrictions***');
// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Crear una cuenta');
define('HEADER_TITLE_MY_ACCOUNT', 'Mi cuenta');
define('HEADER_TITLE_CART_CONTENTS', 'Ver carrito');
define('HEADER_TITLE_CHECKOUT', 'Hacer efectivo el pedido');
define('HEADER_TITLE_TOP', 'Inicio');
define('HEADER_TITLE_CATALOG', 'Catálogo');
define('HEADER_TITLE_LOGOFF', 'Salir');
define('HEADER_TITLE_LOGIN', 'Registrarse');
// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'peticiones desde');
// text for gender
define('MALE', 'Hombre');
define('FEMALE', 'Mujer');
define('MALE_ADDRESS', 'Sr.');
define('FEMALE_ADDRESS', 'Sra.');
// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');
// categories mainpage
define('BOX_HEADING_CATEGORIES_MAIN_PAGE', 'Categorías');
// quick_find box text in includes/boxes/quick_find.php
define('BOX_SEARCH_TEXT', 'Use palabras clave para encontrar el producto que busca.');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Búsqueda avanzada');
// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Comentarios');
define('BOX_REVIEWS_WRITE_REVIEW', 'Escriba un comentario para este producto');
define('BOX_REVIEWS_NO_REVIEWS', 'En este momento, no hay ningún comentario');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 estrellas!');
// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_SHOPPING_CART_EMPTY', '0 productos');
// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS_IN', 'Los más vendidos en <br>&nbsp;&nbsp;');
// notifications box text in includes/boxes/products_notifications.php
//define('BOX_HEADING_NOTIFICATIONS', 'Avisos');
define('BOX_NOTIFICATIONS_NOTIFY', 'Avíseme de cambios a <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'No me avisen de cambios a <b>%s</b>');
// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', 'Sitio Web de %s');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Otros productos');
// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_TELL_A_FRIEND_TEXT', 'Envíe información a alguien sobre este producto.');
// allprods modification
define('BOX_INFORMATION_ALLPRODS', 'Ver todos los productos');
// all categories and products modification
define ('ALL_PRODUCTS_LINK', 'Todos los productos ordenados por categorías');
// all categories and products modification
define ('ALL_PRODUCTS_MANF', 'Todos los productos ordenados por fabricantes');
// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Información de envío');
define('CHECKOUT_BAR_PAYMENT', 'Información de pago');
define('CHECKOUT_BAR_CONFIRMATION', 'Confirmación');
define('CHECKOUT_BAR_FINISHED', '¡Finalizado!');
// pull down default text
define('PULL_DOWN_DEFAULT', 'Seleccione');
define('TYPE_BELOW', 'Escriba debajo');
// javascript messages
define('JS_ERROR', '¡Hay errores en su formulario!\n\nPor favor, haga las siguientes correcciones:\n');
define('JS_REVIEW_TEXT', '* Su \'comentario\' debe tener al menos ' . REVIEW_TEXT_MIN_LENGTH . ' caracteres.<br>');
define('JS_REVIEW_RATING', '* Debe evaluar el producto sobre el que opina.\n');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Por favor seleccione un método de pago para su pedido.<br>');
define('JS_ERROR_SUBMITTED', 'Ya ha enviado antes el formulario. Pulse Aceptar y espere a que termine el proceso.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Por favor seleccione un método de pago para su pedido.');
define('CATEGORY_COMPANY', 'Datos de la empresa');
define('CATEGORY_PERSONAL', 'Datos personales');
define('CATEGORY_ADDRESS', 'Dirección');
define('CATEGORY_CONTACT', 'Información de contacto');
define('CATEGORY_OPTIONS', 'Opciones');
define('CATEGORY_PASSWORD', 'Contraseña');
define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', 'Por favor seleccione una opción.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', 'Su nombre debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Apellidos:');
define('ENTRY_LAST_NAME_ERROR', 'Sus apellidos deben tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Su fecha de nacimiento debe tener este formato: DD/MM/AAAA (p.ej. 21/05/1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ej. 21/05/1970)');
define('ENTRY_EMAIL_ADDRESS', 'Dirección de e-mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Su dirección de e-mail debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_EMAIL_ADDRESS_BLANK_ERROR', 'Introduce dirección de correo electrónico válida.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Su dirección de e-mail no parece válida - por favor haga los cambios necesarios.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Su dirección de e-mail ya figura en nuestros registros - puede entrar a su cuenta con esta dirección o crear una cuenta nueva con una dirección diferente.');
define('ENTRY_EMAIL_CHECK_ERROR', '¡Tiene sido un error que envía este email! Entre en contacto con por favor al dueño de almacén.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Dirección:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Su dirección debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Suburbio');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Código postal:');
define('ENTRY_POST_CODE_ERROR', 'Su código postal debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Población:');
define('ENTRY_CITY_ERROR', 'Su población debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Provincia/Estado:');
define('ENTRY_STATE_ERROR', 'Su provincia/estado debe tener al menos ' . ENTRY_STATE_MIN_LENGTH . ' caracteres.');
define('ENTRY_STATE_ERROR_SELECT', 'Por favor seleccione un estado de la lista desplegable.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'País:');
define('ENTRY_COUNTRY_ERROR', 'Debe seleccionar un país de la lista desplegable.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Teléfono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Su número de teléfono debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' números.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Boletín de noticias:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Suscrito');
define('ENTRY_NEWSLETTER_NO', 'No suscrito');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Contraseña:');
define('ENTRY_PASSWORD_ERROR', 'Su contraseña debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmación de la contraseña debe coincidir con la contraseña.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirme la contraseña:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Contraseña actual:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Su contraseña debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.');
define('ENTRY_PASSWORD_NEW', 'Nueva contraseña:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Su contraseña nueva debe tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracateres.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La confirmación de su contraseña debe coincidir con su contraseña nueva.');
define('PASSWORD_HIDDEN', '--OCULTO--');
define('FORM_REQUIRED_INFORMATION', '* Dato necesario');
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Páginas de resultados:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> comentarios)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos nuevos)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> ofertas)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos destacados)');
define('PREVNEXT_TITLE_FIRST_PAGE', 'Primera página');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Página anterior');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Página siguiente');
define('PREVNEXT_TITLE_LAST_PAGE', 'Última página');
define('PREVNEXT_TITLE_PAGE_NO', 'Página %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', '%d páginas anteriores');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', '%d páginas siguientes');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;PRINCIPIO');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Anterior]');
define('PREVNEXT_BUTTON_NEXT', '[Siguiente&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'FINAL&gt;&gt;');
// alt image text
define('IMAGE_BUTTON_ADD_ADDRESS', 'Añadir dirección');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Libreta de direcciones');
define('IMAGE_BUTTON_BACK', 'Atrás');
define('IMAGE_BUTTON_BUY_NOW', 'Comprar Ahora');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Cambiar Dirección');
define('IMAGE_BUTTON_CHECKOUT', 'Hacer efectivo el pedido');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Confirmar el pedido');
define('IMAGE_BUTTON_CONTINUE', 'Continuar');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Seguir comprando');
define('IMAGE_BUTTON_DELETE', 'Eliminar');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Editar cuenta');
define('IMAGE_BUTTON_HISTORY', 'Historial de pedidos');
define('IMAGE_BUTTON_LOGIN', 'Registrarse');
define('IMAGE_BUTTON_IN_CART', 'Añadir al carrito');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Notificaciones');
define('IMAGE_BUTTON_QUICK_FIND', 'Búsqueda rápida');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Eliminar avisos');
define('IMAGE_BUTTON_REVIEWS', 'Comentarios');
define('IMAGE_BUTTON_SEARCH', 'Buscar');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Opciones de envío');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Enviar información a alguien');
define('IMAGE_BUTTON_UPDATE', 'Actualizar');
define('IMAGE_BUTTON_UPDATE_CART', 'Actualizar carrito');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Escribir comentario');
define('SMALL_IMAGE_BUTTON_DELETE', 'Eliminar');
define('SMALL_IMAGE_BUTTON_EDIT', 'Modificar');
define('SMALL_IMAGE_BUTTON_VIEW', 'Ver');
define('IMAGE_BUTTON_VIEW_CART','View Cart');
define('ICON_ARROW_RIGHT', 'más');
define('ICON_CART', 'En el carrito');
define('ICON_ERROR', 'Error');
define('ICON_SUCCESS', 'Correcto');
define('ICON_WARNING', 'Aviso');
// greeting text
define('TEXT_CUSTOMER_GREETING_HEADER', 'Bienvenida');
define('TEXT_GREETING_PERSONAL', '¡Bienvenido de nuevo <span class="greetUser">%s!</span> ¿Le gustaría ver que <a href="%s"><u>nuevos productos</u></a> hay disponibles?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Si usted no es %s, por favor <a href="%s"><u>regístrese</u></a> con sus propios datos.</small>');
define('TEXT_GREETING_GUEST', '¡Bienvenido <span class="greetUser">Invitado!</span> ¿Le gustaría <a href="%s"><u>registrarse</u></a> o prefiere <a href="%s"><u>crear una cuenta nueva</u></a>?');
// product sort text
define('TEXT_SORT_PRODUCTS', 'Ordenar productos ');
define('TEXT_DESCENDINGLY', 'orden descendente');
define('TEXT_ASCENDINGLY', 'orden ascendente');
define('TEXT_BY', ' por ');
// reviews text
define('TEXT_REVIEW_BY', 'por %s');
define('TEXT_REVIEW_WORD_COUNT', '%s palabras');
define('TEXT_REVIEW_RATING', 'Valoración: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Añadido en: %s');
define('TEXT_NO_REVIEWS', 'Actualmente no hay ningún comentario.');
define('TEXT_NO_NEW_PRODUCTS', 'Actualmente no hay novedades.');
define('TEXT_NO_PRODUCTS', 'No existen productos en ese rango.');
define('TEXT_UNKNOWN_TAX_RATE', 'Impuesto desconocido');
define('TEXT_REQUIRED', '<span class="errorText">Necesario</span>');
// Down For Maintenance
define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'NOTA: Este sitio estará cerrado por mantenimiento el: ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'NOTA: Este sitio está cerrado al público por mantenimiento');
define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> No se ha podido enviar el email con el servidor SMTP especificado. Configure su servidor SMTP en la sección adecuada del fichero php.ini.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Aviso: La carpeta de instalación existe en: ' .  DIR_FS_CATALOG . 'install. Por razones de seguridad, elimine esta carpeta completamente.');
define('WARNING_UPGRADES_DIRECTORY_EXISTS', 'Aviso: El directorio de las mejoras existe en: ' .  DIR_FS_CATALOG . 'upgrades. Por razones de seguridad, elimine esta carpeta completamente.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Aviso: Se puede escribir en el archivo de configuración: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. En determinadas circunstancias esto puede suponer un riesgo - por favor cambie los permisos de este archivo.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Aviso: La carpeta para guardar datos de sesión no existe: ' . tep_session_save_path() . '. Las sesiones no funcionarán hasta que no se solvente este error.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Aviso: No es posible escribir en la carpeta para datos de sesión: ' . tep_session_save_path() . '. Las sesiones no funcionarán hasta que no se solvente este error.');
define('WARNING_SESSION_AUTO_START', 'Aviso: session.auto_start esta activado - por favor, desactive esta característica php en el archivo php.ini y reinicie el servidor web.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Aviso: La carpeta para productos descargables no existe: ' . DIR_FS_DOWNLOAD . '. Los productos descargables no funcionarán hasta que no se solvente este error.');
define('WARNING_ENCRYPT_FILE_MISSING', 'Warning: The Encryption key file is missing.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Error: 01 The first four digits of the number entered are: %s If that number is correct, we do not accept that type of credit card.If it is wrong, please try again.');
define('TEXT_CCVAL_ERROR_INVALID_MONTH', 'Error: 02 The expiry date Motnth entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_YEAR', 'Error: 03 The expiry date year entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Error: 04 The expiry date entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CSCAL_ERROR_CARD_TYPE_MISMATCH', 'Error: 05 The Credit Card number does not match the Card Type:');
define('TEXT_CCVAL_ERROR_SHORT', 'Error: 06 You have not entered the correct amount of digits. Please ensure you have entered all of the long number displayed on the front of your card');
define('TEXT_CCVAL_ERROR_BLACKLIST', 'Error: 07 We cannot accept your card as it is blacklisted, if you feel you have recieved this message in error please contact your card issuer.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Error: 08 The CCV/CVV/CID number entered is the incorrect length. Please try again.');
define('TEXT_CCVAL_ERROR_NOT_ACCEPTED', 'Error: 09 The credit card number you have entered appears to be a %s card. Unfortunately at this time we do not accept %s as payment.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Error: 10 The credit card number entered is invalid. Please check the number for misstyped numbers and try again.');
// footer text
define('FOOTER_TEXT1_BODY', 'Copyright &copy; ' . date("Y") . '&nbsp;<a target="_blank" href="http://www.crecommerce.com/">Chain Reaction Ecommerce, Inc.</a>, Inc.</a> Powered by <a target="_blank" href="http://www.creloaded.com">CRE Loaded</a>');
define('FOOTER_TEXT2_BODY', '<br>Using ' . PROJECT_VERSION );
define('FOOTER_TEXT_BODY', FOOTER_TEXT1_BODY . FOOTER_TEXT2_BODY);
// Header Links
define('HEADER_LINKS_DEFAULT','HOGAR');
define('HEADER_LINKS_WHATS_NEW','NOVEDADES');
define('HEADER_LINKS_SPECIALS','OFERTAS');
define('HEADER_LINKS_REVIEWS','COMENTARIOS');
define('HEADER_LINKS_LOGIN','REGISTRARSE');
define('HEADER_LINKS_LOGOFF','SALIR');
define('HEADER_LINKS_PRODUCTS_ALL','CATÁLOGO');
define('HEADER_LINKS_ACCOUNT_INFO','SU CUENTA');
define('HEADER_LINKS_LINKS','ENLACES');
define('HEADER_LINKS_FAQ','PREGUNTAS FRECUENTES (FAQ)');
define('HEADER_LINKS_NEWS','NOVEDADES');
define('HEADER_LINKS_INFORMATION','INFORMACIÓN');
// print order mod
define('IMAGE_BUTTON_PRINT_ORDER', 'Pedido imprimible');
// Attributes Sorter
require_once(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');
// wishlist box text in includes/boxes/wishlist.php
define('BOX_HEADING_CUSTOMER_WISHLIST', 'Mis artículos favoritos');
define('BOX_WISHLIST_EMPTY', 'Usted no tiene artículos en su lista de favoritos');
define('IMAGE_BUTTON_ADD_WISHLIST', 'Agregar a la lista de favoritos');
define('TEXT_WISHLIST_COUNT', 'Existen %s artículos favoritos en su lista.');
define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> artículos favoritos en su lista)');
define('BOX_HEADING_CUSTOMER_WISHLIST_HELP', 'Ayuda de la lista de favoritos');
define('BOX_HEADING_SEND_WISHLIST', 'Enviar su lista de favoritos');
define('BOX_TEXT_MOVE_TO_CART', 'Mover al carrito');
define('BOX_TEXT_DELETE', 'Eliminar');
// Information Page
 define('BOX_HEADING_INFORMATION', 'Sistema del Info');
 define('BOX_INFORMATION_MANAGER', 'Encargado del Info');
if(file_exists('includes/languages/espanol_newsdesk.php')) {
  include_once('includes/languages/espanol_newsdesk.php');
  include_once('includes/languages/espanol_faqdesk.php');
}
// Checkout Without Account images
define('IMAGE_BUTTON_CREATE_ACCOUNT', 'Crear cuenta');
define('NAV_ORDER_INFO', 'Información de pedido');
// Events Calendar
define('BOX_TOOLS_EVENTS_MANAGER', 'Events Manager');
define('IMAGE_NEW_EVENT', 'New Event');
define('BOX_INFORMATION_FAQ', 'FAQ');
// Article Manager
define('BOX_HEADING_ARTICLES', 'Noticias');
define('BOX_ALL_ARTICLES', 'Todas las noticias');
define('BOX_NEW_ARTICLES', '&Uacute;ltimas noticias');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Mostrando de <b>%d</b> a <b>%d</b> (de <b>%d</b> noticias)');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES_NEW', 'Mostrando de <b>%d</b> a <b>%d</b> (de <b>%d</b> &uacute;ltimas noticias)');
define('TABLE_HEADING_AUTHOR', 'Autor');
define('TABLE_HEADING_ABSTRACT', 'Extracto');
define('BOX_HEADING_AUTHORS', 'Noticias por autor');
define('NAVBAR_TITLE_DEFAULT', 'Noticias');
define('BOX_ASEARCH_TEXT','Search Articles Text');
// Eversun mod for sppc and qty price breaks
define('ENTRY_COMPANY_TAX_ID', 'Company\'s tax id number:');
define('ENTRY_COMPANY_TAX_ID_ERROR', '');
define('ENTRY_COMPANY_TAX_ID_TEXT', '');
// Eversun mod end for sppc and qty price breaks  
define('IFRAME_ERROR','Sorry, you browser does not support iframes.');
define("GIFT_VOUCHER_ACCOUNT_BALANCE_1","You still have</br>");
define("GIFT_VOUCHER_ACCOUNT_BALANCE_2","</br>left to spend in your Gift Voucher Account<br><br>");
define("GIFT_VOUCHER_ACCOUNT_BALANCE_3","Send to a Friend");
define("LOGIN_ALT","login");
define("LOGOFF_ALT","logoff");
define("MYACCOUNT_ALT","MyAccount");
define("SPECIALS_ALT","Specials");
define("WHATS_NEW_ALT","What\'s New");
define("CONTACT_US_ALT","Contact Us");
define("IMAGE_ALT","image");
define("BOX_ALT","box");
//dayNames in calendar
define("S","S");
define("M","M");
define("T","T");
define("W","W");
define("F","F");
//monthNames  in calendar
define("JANUARY","JANUARY");
define("FEBRUARY","FEBRUARY");
define("MARCH","MARCH");
define("APRIL","APRIL");
define("MAY","MAY");
define("JUNE","JUNE");
define("JULY","JULY");
define("AUGUST","AUGUST");
define("SEPTEMBER","SEPTEMBER");
define("OCTOBER","OCTOBER");
define("NOVEMBER","NOVEMBER");
define("DECEMBER","DECEMBER");
define("DELETE_CACHE_FILES",'cache files deleted - top level');
define("UPDATE_CONFIGURATION_SETTING",'reset to false');
define("UPDATE_CONFIG_FILES_EXIST",'configuration cache files updated');
define("UPDATE_CONFIG_FILES_NOTEXIST",'ERROR: update file does not exist');
define("IS_GUEST_CHECK",'customer_id not set');
define("FILE_EXISTS_AND_IS_NOT_EXPIRED",'file exists and is not expired');
define("NO_FILE_OR_EXPIRED",'file does not exist or is expired');
define("OB_STARTED",'ob started @ ');
define("IS_GUESS_CHECK_END",'customer_id not set ');
define("OB_COMPRESSED",'output buffer flushed and compressed');
define("CACHE_OUTPUTT",'compressed ob sent to screen');
define("CACHE_WRITE_FILE",'compressed ob written to file');
define("UNSET_CACHE_COMPRESS", 'cache compress unset');
define("COMPRESS_BUFFER", 'compressing buffer');
define("CACHE_FILE_WRITE", 'buffer writtent to file');
define("CACHE_UNSET_WRITE_BUFFER", 'write buffer unset');
define("OUTPUT_2_SCREEN", 'successfully output to screen');
define("CACHE_UNSET_SCREEN_BUFFER", 'screen buffer unset');
define("OPEN_SESSION_FILE_ERROR", 'Could not open session file');
define("WRITE_SESSION_FILE_ERROR", 'Could not write session file');
define("SESSION_MODULE_ERROR", 'Failed to initialize session module.');
define("SESSION_NOT_SAVED", 'Session could not be saved.');
define("SESSION_NOT_CLOSED", 'Session could not be closed.');
define("SESSION_NOT_STARTED", 'Session could not be started.');
define("NO_BANNER_WITH_GROUP_ERROR1", '<b>TEP ERROR!');
define("NO_BANNER_WITH_GROUP_ERROR2", 'No banners with group');
define("NO_BANNER_WITH_GROUP_ERROR3", ' found!</b>');
define("NO_BANNER_WITH_ID_ERROR1", '<b>TEP ERROR!');
define("NO_BANNER_WITH_ID_ERROR2", 'Banner with ID');
define("NO_BANNER_WITH_ID_ERROR3", ' not found, or status inactive</b>');
define("NO_BANNER_WITH_UNKNOWN_PARAM_ERROR1", '<b>TEP ERROR!');
define("NO_BANNER_WITH_UNKNOWN_PARAM_ERROR2", 'Unknown');
define("NO_BANNER_WITH_UNKNOWN_PARAM_ERROR3", 'parameter value - it must be either');
define("NO_BANNER_WITH_UNKNOWN_PARAM_ERROR4", 'dynamic');
define("NO_BANNER_WITH_UNKNOWN_PARAM_ERROR5", 'static');
define("TEP_DB_ERROR", '[TEP STOP]');
define("TEP_HREF_LINK_ERROR1", '<b>Error!</b></font><br><br><b>Unable to determine the page link!<br><br>');
define("TEP_HREF_LINK_ERROR2", '<b>Error!</b></font><br><br><b>Unable to determine connection method on a link!<br><br>Known methods: NONSSL SSL</b><br><br>');
define("BOX_HEADING_CUSTOMER_WISHLIST_VIEW","My Wishlist View");
define("HIDE_PRICES_ERROR",'Usted debe ser abierto una sesi´on para ver precios y para poner ´ordenes.');   
define('HIDE_PRICES_TEXT_LOGIN', 'Conexi´on para el precio'); 
define("UNABLE_TO_CONNECT_TO_DATABASE_SERVER",'Unable to connect to database server!');
define("AFFILIATE_SHOW_BANNER_CHECK_PATHES",'Check the pathes! (catalog/includes/configure.php)');
define("AFFILIATE_SHOW_BANNER_ABSOLUTE_PATH",'absolute path to picture:');
define("AFFILIATE_SHOW_BANNER_BUILD_WITH_1",'build with:');
define("AFFILIATE_SHOW_BANNER_BUILD_WITH_2",'DIR_FS_DOCUMENT_ROOT . DIR_WS_CATALOG . DIR_WS_IMAGES . $banner');
define("AFFILIATE_SHOW_BANNER_DIR_FS_DOCUMENT_ROOT",'DIR_FS_DOCUMENT_ROOT');
define("AFFILIATE_SHOW_BANNER_DIR_WS_CATALOG",'DIR_WS_CATALOG');
define("AFFILIATE_SHOW_BANNER_DIR_WS_IMAGES",'DIR_WS_IMAGES');
define("AFFILIATE_SHOW_BANNER_BANNER",'$banner');
define("AFFILIATE_SHOW_BANNER_SQL_QUERY_USED",'SQL-Query used:');
define("AFFILIATE_SHOW_BANNER_TRY_TO_FIND_ERROR",'Try to find error:');
define("AFFILIATE_SHOW_BANNER_SQL_QUERY",'SQL-Query:');
define("AFFILIATE_SHOW_BANNER_LOCATING_PIC",'Locating Pic');
define('TEXT_CLOSE_WINDOW', 'Ventana cercana');
define('TEXT_PRODUCT_SUBPROD_QUANTITY', 'Quantity');
define('TEXT_CART_COUNT', ' Item ');
define('TEXT_CART_COUNTS', ' Items ');
define('TEXT_CART_WEIGHT', ' lb ');
define('TEXT_CART_WEIGHTS', ' lbs ');
define('ALT_HOMEPAGE', 'Homepage');
define("TEXT_YOUR_CONTENT_HERE","Your Content here");
define("TEXT_NO_SPECIALS","There are currently no specials defined.");
define('TEXT_ENTER_COUPON_CODE', 'Enter Redeem Code&nbsp;&nbsp;');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: La destinación no existe.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: Destinación no writeable.');
define('ERROR_FILE_NOT_SAVED', 'Error: Carga por teletratamiento del archivo no ahorrada.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: Tipo de la carga por teletratamiento del archivo no permitido.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Éxito: Carga por teletratamiento del archivo ahorrada con éxito.');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: NinguÌ?n archivo cargado.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Las cargas por teletratamiento del archivo se inhabilitan en el archivo de configuración de php.ini.');
// RMA Returns System
define('BOX_INFORMATION_RETURNS', 'Track your return');
define('BOX_HEADING_MANUFACTURER_INFO' ,'Fabricante Info');
define('BOX_HEADING_SEARCH', 'Búsqueda');
//MVS 
define('MULTIPLE_SHIP_METHODS_TITLE', 'Envío combinado');
define('ERROR_NO_SHIPPING_SELECTED_SELECTED', 'Error: Ninguin módulo del envío seleccionado');
define('TEXT_POWERED_BY_CRE', 'Esta orden fue accionada por CRE Loaded el software libre. ¡Consiga su propio almacén hoy!');
define('ERROR_REDEEMED_SHIPPING_AMOUNT', 'Enhorabuena, usted ha redimido cantidad de envío');

define('INTERNAL_ERROR', 'El error interno ha ocurrido.');
?>