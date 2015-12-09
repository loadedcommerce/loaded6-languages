<?php
/*
  $Id: create_account_success.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE_1', 'cr&eacute;er un compte');
define('NAVBAR_TITLE_2', 'compte cr&eacute;&eacute;');
define('HEADING_TITLE', 'f&eacute;licitations !');

define('TEXT_ACCOUNT_CREATED_NEEDS_VALIDATE', 'F&eacute;licitation, Votre nouveau compte a &eacute;t&eacute; cr&eacute;&eacute;,
Vous pouvez d&egrave;s &agrave; pr&eacute;sent faire des achats dans notre boutique.
Si vous avez des questions veuillez contacter le <a href="' . tep_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">Propri&eacute;taire</a>.
<p>
  Un email de confirmation d\'inscription comportant un code d\'activation de votre compte vous a &eacute;t&eacute; envoy&eacute;
  &agrave l\'adresse email que vous avez fourni.
</p>
<p>
  Vous devez <b>Valider/Activater</b> Votre compte avant de pouvoir vous connecter, Veuillez suivre les
  instructions du email que nous vous avons envoy&eacute;.
</p>
<p>
  Si vous n\'avez pas re&ccedil;u ce mail en 5 minutes, il se peut que :
  <p>
    1. Votre email de confirmation a &eacute;t&eacute; plac&eacute; dans le r&eacute;pertoire "COURRIER INDESIRABLE" ou "SPAM"
       par votre Fournisseur d\'acc&egrave;s &agrave; Internet (FAI).
  </p> 
  <p>
    2. Vous avez fourni une mauvaise adresse email, Veuillez v&eacute;rifier votre adresse email ou vous r&eacute;enregistrer avec un nouveau compte.
  </p>
  Si apr&egrave; toutes ces &eacute;tapes vous n\'avez toujours pas re&ccedil;u un email de confirmation,
  veuillez nous <u><a href="' . tep_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">contacter</a></u> pour vous aider.');

define('TEXT_ACCOUNT_CREATED_NO_VALIDATE', 'F&eacute;licitation, Votre nouveau compte a &eacute;t&eacute; cr&eacute;&eacute;,
Vous pouvez d&egrave;s &agrave; pr&eacute;sent faire des achats dans notre boutique.
Si vous avez des questions veuillez contacter le <a href="' . tep_href_link(FILENAME_CONTACT_US, '', 'SSL') . '">Propri&eacute;taire</a> de la boutique.' );
?>