<?php
/*
  $Id: create_account_success.php,v 1.1.1.1 2004/03/04 23:41:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'Crear una Cuenta');
define('NAVBAR_TITLE_2', 'Exito');
define('HEADING_TITLE', 'Su cuenta ha sido creada!');

define('TEXT_ACCOUNT_CREATED_NEEDS_VALIDATE', 'Las felicitaciones, su nueva cuenta se han creado con éxito. Usted pueden ahora aprovecharse de privilegios del miembro de realzar su experiencia en línea de las compras con nosotros. Si usted tiene <small><b>CUALESQUIERA</b></small> preguntas sobre la operación de esta tienda en línea, por favor email el <a href="' . tep_href_link(FILENAME_CONTACT_US) . '">dueño del almacén</a>.<P>
Un email de la confirmación con un código de validation/activation se ha enviado al email address que usted proveió de nosotros.<P>
Usted DEBE <b>Validar/Activa</b> su cuenta antes de que usted pueda conexión. Siga por favor las instrucciones en el E-mail que le hemos enviado.<P>
Si usted no ha recibido este email en el plazo de cinco minutos, una de dos cosas ha sucedido:<P>
1. Su email de la confirmación fue enviado equivocadamente a su "CORREO A GRANEL" o "carpeta del CORREO del Spam" por su Internet Service Provider, compruebe por favor para saber si hay él allí.
<P> O <P>2. Usted incorporó su email address a incorrecto, dobla por favor el cheque él o dimite para arriba otra vez para una cuenta.
<P>Si después de que usted haya comprobado esas cosas, usted todavía no ha recibido un email de la confirmación por favor <U><a href="' . tep_href_link(FILENAME_CONTACT_US) . '">éntrenos en contacto</a></U> con para el assistance.');

define('TEXT_ACCOUNT_CREATED_NO_VALIDATE', 'Las felicitaciones, su nueva cuenta se han creado con éxito. Usted pueden ahora aprovecharse de privilegios del miembro de realzar su experiencia en línea de las compras con nosotros. Si usted tiene <small><b>CUALESQUIERA</b></small> preguntas sobre la operación de esta tienda en línea, por favor email el <a href="' . tep_href_link(FILENAME_CONTACT_US) . '">dueño del almacén</a>.' );
?>