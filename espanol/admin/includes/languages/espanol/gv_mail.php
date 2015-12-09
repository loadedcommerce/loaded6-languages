<?php
/*
  $Id: gv_mail.php,v 1.1.1.1 2004/03/04 23:40:11 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Enviar cup�n de regalo a los clientes');

define('TEXT_CUSTOMER', 'Cliente:');
define('TEXT_SUBJECT', 'Asunto:');
define('TEXT_FROM', 'De:');
define('TEXT_TO', 'E-mail a:');
define('TEXT_AMOUNT', 'Monto:');
define('TEXT_MESSAGE', 'Mensaje:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Use esta solo para el env�o de mensajes de correo electr�nico, utilizan de alguna manera por encima desplegable.</span>');
define('TEXT_SELECT_CUSTOMER', 'Seleccionar al cliente');
define('TEXT_ALL_CUSTOMERS', 'Todos los clientes');
define('TEXT_NEWSLETTER_CUSTOMERS', 'A todos los suscriptores Newsletter');

define('NOTICE_EMAIL_SENT_TO', 'Aviso: Los mensajes que se env�en a: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Error: Ning�n cliente ha sido seleccionado.');
define('ERROR_NO_AMOUNT_SELECTED', 'Error: No importe ha sido seleccionado.');

define('TEXT_TO_REDEEM1', 'Usted puede tambi�n redimir este vale del regalo durante la comprobaci�n. Apenas introduzca el c�digo en la caja proporcionada, y chasque encendido el bot�n del redimir. ');
define('TEXT_GV_WORTH', 'El cup�n de regalo vale la pena ');
define('TEXT_TO_REDEEM', 'Para canjear este cup�n de regalo, por favor haga clic en el v�nculo que aparece a continuaci�n. Por favor, anote tambi�n la redenci�n c�digo');
define('TEXT_REMEMBER', 'Por favor, no pierdan el c�digo de cup�n, aseg�rese de guardar el c�digo de seguridad de modo que puede beneficiarse de esta oferta especial');
define('TEXT_WHICH_IS', ' que es ');
define('TEXT_IN_CASE', ' en caso de que tenga alg�n problema.');
define('TEXT_OR_VISIT', 'o visite ');
define('TEXT_ENTER_CODE', ' e introduzca el c�digo durante el proceso de verificaci�n.');

define('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Recientemente ha comprado un certificado de regalo de nuestra tienda on-line.' . "\n"
                                          . 'Por razones de seguridad, esta no se hizo inmediatamente disponibles para usted.' . "\n"
                                          . 'Sin embargo, este importe ha sido puesto en libertad. Ya puede visitar nuestra tienda' . "\n"
                                          . 'y enviar el valor por e-mail a alguien.' . "\n\n");
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'El valor del cup�n de regalo se %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Ahora puede visitar nuestro sitio, de acceso y enviar el cup�n de regalo importe a nadie que quiera.');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

// MaxiDVD Added Line For WYSIWYG HTML Area: BOF
define('TEXT_EMAIL_BUTTON_TEXT', '<p><HR><b><font color="red">El bot�n Atr�s lo que se ha inhabilitado mientras que WYSIWG HTML Editor se activa.</b></font><HR>');
define('TEXT_EMAIL_BUTTON_HTML', '<p><HR><b><font color="red">HTML is currently Disabled!</b></font><br><br>If you want to send HTML email, Enable WYSIWYG Editor for Email in: Admin-->Configuration-->WYSIWYG Editor-->Options<br>');
// MaxiDVD Added Line For WYSIWYG HTML Area: EOF
?>