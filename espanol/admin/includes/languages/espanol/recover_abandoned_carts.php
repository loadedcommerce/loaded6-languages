<?php
/*
  $Id: recover_abandonded_carts.php,v 1.0.0 2008/05/22 00:36:41 datazen Exp $    

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('MESSAGE_STACK_CUSTOMER_ID', 'Carro para Customer-ID ');
define('MESSAGE_STACK_DELETE_SUCCESS', ' suprimido con �xito');
define('HEADING_TITLE', 'Recupere los carros abandonados');
define('HEADING_EMAIL_SENT', 'Informe enviado email');
define('EMAIL_TEXT_LOGIN', 'Conexi�n a su cuenta aqu�:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Investigaci�n de '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Estimado ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Gracias por parar cerca ' . STORE_NAME .
                                   ' y en vista de nosotros para su compra. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Quisi�ramos agradecerle por hacer compras en ' .
                                   STORE_NAME . ' en el pasado. ');
define('EMAIL_TEXT_BODY_HEADER',
 'Notamos eso durante una visita a nuestro almac�n que usted coloc� ' .
 'los puntos siguientes en su carro de compras, pero no terminaron ' .
 'la transacci�n.' . "\n\n" .
 'Contenido del carro de compras:' . "\n\n"
 );
 
define('EMAIL_TEXT_BODY_FOOTER',
 'Estamos siempre interesados en saber qu� sucedi� ' .
 'y si hab�a una raz�n que usted decid�a no comprar en ' .
 'esta vez. Si usted podr�a ser tan bueno en cuanto a nos dej� ' .
 'sepa si usted tuviera algunas ediciones o preocupaciones, apreciar�amos.  ' .
 'Estamos pidiendo la regeneraci�n de usted y otras en cuanto a c�mo podemos ' .
 'la ayuda hace su experiencia en '. STORE_NAME . ' mejor.'."\n\n".
 'OBSERVE POR FAVOR:'."\n".'Si usted cree usted termin� su compra y es ' .
 'pregunt�ndose porqu� no fue entregado, este email es una indicaci�n eso ' .
 'su orden no fue terminada, y eso le no han cargado! ' .
 'Vuelva por favor al almac�n para terminar su orden.'."\n\n".
 'Nuestras apolog�as si usted termin� ya su compra, ' .
 'intentamos no enviar estos mensajes en esos casos, pero est� a veces ' .
 'dif�cilmente para que nosotros digamos dependiendo de circunstancias individuales.'."\n\n".
 'Una vez m�s gracias por su tiempo y consideraci�n en la ayuda de nosotros ' .
 'mejore ' . STORE_NAME .  " website.\n\Sinceramente,\n\n"
 );

define('DAYS_FIELD_PREFIX', 'Demuestre para el �ltimo ');
define('DAYS_FIELD_POSTFIX', ' d�as ');
define('DAYS_FIELD_BUTTON', 'Vaya');
define('TABLE_HEADING_DATE', 'FECHA');
define('TABLE_HEADING_CONTACT', 'ENTRADO EN CONTACTO CON');
define('TABLE_HEADING_CUSTOMER', 'NOMBRE DE CLIENTE');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'TEL�FONO');
define('TABLE_HEADING_MODEL', 'ART�CULO');
define('TABLE_HEADING_DESCRIPTION', 'DESCRIPCI�N');
define('TABLE_HEADING_QUANTY', 'CANTIDAD');
define('TABLE_HEADING_PRICE', 'PRECIO');
define('TABLE_HEADING_TOTAL', 'TOTAL');
define('TABLE_GRAND_TOTAL', 'Importe total: ');
define('TABLE_CART_TOTAL', 'Total del carro: ');
define('TEXT_CURRENT_CUSTOMER', 'CLIENTE');
define('TEXT_SEND_EMAIL', 'Env�e E-mail');
define('TEXT_RETURN', '[Chasque aqu� para volver]');
define('TEXT_NOT_CONTACTED', 'No entrado en contacto con');
define('PSMSG', 'Adicional PS Mensaje: ');
define('TEXT_RAC_EDIT', 'Corrija los ajustes para RAC');
define('TEXT_RAC_RUN_RECOVER_CARTS_REPORT', 'Funcionamiento RAC Informe');
define('TEXT_CUR_CUSTOMER', 'Cliente actual'); 
define('TEXT_CONTACTED', 'Entrado en contacto con'); 
define('TEXT_UNCONTACTED', 'No entrado en contacto con'); 
define('TEXT_MATCHED', 'Orden emparejada');  
?>