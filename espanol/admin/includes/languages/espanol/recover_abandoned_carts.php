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
define('MESSAGE_STACK_DELETE_SUCCESS', ' suprimido con éxito');
define('HEADING_TITLE', 'Recupere los carros abandonados');
define('HEADING_EMAIL_SENT', 'Informe enviado email');
define('EMAIL_TEXT_LOGIN', 'Conexión a su cuenta aquí:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Investigación de '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Estimado ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Gracias por parar cerca ' . STORE_NAME .
                                   ' y en vista de nosotros para su compra. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Quisiéramos agradecerle por hacer compras en ' .
                                   STORE_NAME . ' en el pasado. ');
define('EMAIL_TEXT_BODY_HEADER',
 'Notamos eso durante una visita a nuestro almacén que usted colocó ' .
 'los puntos siguientes en su carro de compras, pero no terminaron ' .
 'la transacción.' . "\n\n" .
 'Contenido del carro de compras:' . "\n\n"
 );
 
define('EMAIL_TEXT_BODY_FOOTER',
 'Estamos siempre interesados en saber qué sucedió ' .
 'y si había una razón que usted decidía no comprar en ' .
 'esta vez. Si usted podría ser tan bueno en cuanto a nos dejó ' .
 'sepa si usted tuviera algunas ediciones o preocupaciones, apreciaríamos.  ' .
 'Estamos pidiendo la regeneración de usted y otras en cuanto a cómo podemos ' .
 'la ayuda hace su experiencia en '. STORE_NAME . ' mejor.'."\n\n".
 'OBSERVE POR FAVOR:'."\n".'Si usted cree usted terminó su compra y es ' .
 'preguntándose porqué no fue entregado, este email es una indicación eso ' .
 'su orden no fue terminada, y eso le no han cargado! ' .
 'Vuelva por favor al almacén para terminar su orden.'."\n\n".
 'Nuestras apologías si usted terminó ya su compra, ' .
 'intentamos no enviar estos mensajes en esos casos, pero está a veces ' .
 'difícilmente para que nosotros digamos dependiendo de circunstancias individuales.'."\n\n".
 'Una vez más gracias por su tiempo y consideración en la ayuda de nosotros ' .
 'mejore ' . STORE_NAME .  " website.\n\Sinceramente,\n\n"
 );

define('DAYS_FIELD_PREFIX', 'Demuestre para el último ');
define('DAYS_FIELD_POSTFIX', ' días ');
define('DAYS_FIELD_BUTTON', 'Vaya');
define('TABLE_HEADING_DATE', 'FECHA');
define('TABLE_HEADING_CONTACT', 'ENTRADO EN CONTACTO CON');
define('TABLE_HEADING_CUSTOMER', 'NOMBRE DE CLIENTE');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'TELÉFONO');
define('TABLE_HEADING_MODEL', 'ARTÍCULO');
define('TABLE_HEADING_DESCRIPTION', 'DESCRIPCIÓN');
define('TABLE_HEADING_QUANTY', 'CANTIDAD');
define('TABLE_HEADING_PRICE', 'PRECIO');
define('TABLE_HEADING_TOTAL', 'TOTAL');
define('TABLE_GRAND_TOTAL', 'Importe total: ');
define('TABLE_CART_TOTAL', 'Total del carro: ');
define('TEXT_CURRENT_CUSTOMER', 'CLIENTE');
define('TEXT_SEND_EMAIL', 'Envíe E-mail');
define('TEXT_RETURN', '[Chasque aquí para volver]');
define('TEXT_NOT_CONTACTED', 'No entrado en contacto con');
define('PSMSG', 'Adicional PS Mensaje: ');
define('TEXT_RAC_EDIT', 'Corrija los ajustes para RAC');
define('TEXT_RAC_RUN_RECOVER_CARTS_REPORT', 'Funcionamiento RAC Informe');
define('TEXT_CUR_CUSTOMER', 'Cliente actual'); 
define('TEXT_CONTACTED', 'Entrado en contacto con'); 
define('TEXT_UNCONTACTED', 'No entrado en contacto con'); 
define('TEXT_MATCHED', 'Orden emparejada');  
?>