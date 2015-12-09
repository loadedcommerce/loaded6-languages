<?php
/*
  $Id: recover_abandonded_carts.php,v 1.0.0 2008/05/22 00:36:41 datazen Exp $    

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('MESSAGE_STACK_CUSTOMER_ID', 'Chariot pour Customer-ID ');
define('MESSAGE_STACK_DELETE_SUCCESS', ' supprimé avec succès');
define('HEADING_TITLE', 'Récupérez les chariots abandonnés');
define('HEADING_EMAIL_SENT', 'Email envoyé rapport');
define('EMAIL_TEXT_LOGIN', 'Ouverture à votre compte ici:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Enquête de '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Cher ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Merci de l\'arrêt près ' . STORE_NAME .
                                   ' et vu nous pour votre achat. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Nous voudrions vous remercier de l\'achat à ' .
                                   STORE_NAME . ' dans le passé. ');
define('EMAIL_TEXT_BODY_HEADER',
 'Nous avons noté cela pendant une visite à notre magasin que vous avez placé ' .
 'les articles suivants dans votre caddie, mais n\'ont pas accompli ' .
 'la transaction.' . "\n\n" .
 'Contenu de caddie:' . "\n\n"
 );
 
define('EMAIL_TEXT_BODY_FOOTER',
 'Nous sommes toujours intéressés à savoir ce qui s\'est produit ' .
 'et s\'il y avait une raison pour laquelle vous avez décidé de ne pas acheter à ' .
 'cette fois. Si vous pourriez être si aimable quant à nous laissiez ' .
 'sachez si vous avait des issues ou soucis, nous l\'apprécierions.  ' .
 'Nous demandons la rétroaction de vous et d\'autres quant à la façon dont nous pouvons ' .
 'l\'aide font votre expérience à '. STORE_NAME . ' meilleur.'."\n\n".
 'NOTEZ SVP:'."\n".'Si vous croyez vous avez accompli votre achat et êtes ' .
 'se demandant pourquoi il n\'a pas été livré, cet email est une indication cela ' .
 'votre commande n\'a pas été exécutée, et cela vous n\'avez pas été chargé! ' .
 'Revenez svp au magasin afin d\'exécuter votre commande.'."\n\n".
 'Nos excuses si vous accomplissiez déjà votre achat, ' .
 'nous essayons de ne pas envoyer ces messages dans ces cas, mais parfois il est ' .
 'dur pour que nous disent selon différentes circonstances.'."\n\n".
 'Encore, merci de votre temps et considération en nous aidant ' .
 'améliorez ' . STORE_NAME .  " site Web.\n\nSincèrement,\n\n"
 );

define('DAYS_FIELD_PREFIX', 'Montrez pour le bout ');
define('DAYS_FIELD_POSTFIX', ' jours ');
define('DAYS_FIELD_BUTTON', 'Allez');
define('TABLE_HEADING_DATE', 'DATE');
define('TABLE_HEADING_CONTACT', 'ENTRÉ EN CONTACT');
define('TABLE_HEADING_CUSTOMER', 'NOM DE CLIENT');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'TÉLÉPHONE');
define('TABLE_HEADING_MODEL', 'ARTICLE');
define('TABLE_HEADING_DESCRIPTION', 'DESCRIPTION');
define('TABLE_HEADING_QUANTY', 'QUANTITÉ');
define('TABLE_HEADING_PRICE', 'PRIX');
define('TABLE_HEADING_TOTAL', 'TOTAL');
define('TABLE_GRAND_TOTAL', 'Total général: ');
define('TABLE_CART_TOTAL', 'Total de chariot: ');
define('TEXT_CURRENT_CUSTOMER', 'CLIENT');
define('TEXT_SEND_EMAIL', 'Envoyez l\'email');
define('TEXT_RETURN', '[Cliquez sur ici pour retourner]');
define('TEXT_NOT_CONTACTED', 'Non entré en contact');
define('PSMSG', 'Additionnel PS Message: ');
define('TEXT_RAC_EDIT', 'Éditez les arrangements pour RAC');
define('TEXT_RAC_RUN_RECOVER_CARTS_REPORT', 'Course RAC Rapport');
define('TEXT_CUR_CUSTOMER', 'Client courant'); 
define('TEXT_CONTACTED', 'Entré en contact'); 
define('TEXT_UNCONTACTED', 'Non entré en contact'); 
define('TEXT_MATCHED', 'Ordre assorti');  
?>