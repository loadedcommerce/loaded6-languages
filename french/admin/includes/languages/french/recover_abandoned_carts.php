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
define('MESSAGE_STACK_DELETE_SUCCESS', ' supprim� avec succ�s');
define('HEADING_TITLE', 'R�cup�rez les chariots abandonn�s');
define('HEADING_EMAIL_SENT', 'Email envoy� rapport');
define('EMAIL_TEXT_LOGIN', 'Ouverture � votre compte ici:');
define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Enqu�te de '.  STORE_NAME );
define('EMAIL_TEXT_SALUTATION', 'Cher ' );
define('EMAIL_TEXT_NEWCUST_INTRO', "\n\n" . 'Merci de l\'arr�t pr�s ' . STORE_NAME .
                                   ' et vu nous pour votre achat. ');
define('EMAIL_TEXT_CURCUST_INTRO', "\n\n" . 'Nous voudrions vous remercier de l\'achat � ' .
                                   STORE_NAME . ' dans le pass�. ');
define('EMAIL_TEXT_BODY_HEADER',
 'Nous avons not� cela pendant une visite � notre magasin que vous avez plac� ' .
 'les articles suivants dans votre caddie, mais n\'ont pas accompli ' .
 'la transaction.' . "\n\n" .
 'Contenu de caddie:' . "\n\n"
 );
 
define('EMAIL_TEXT_BODY_FOOTER',
 'Nous sommes toujours int�ress�s � savoir ce qui s\'est produit ' .
 'et s\'il y avait une raison pour laquelle vous avez d�cid� de ne pas acheter � ' .
 'cette fois. Si vous pourriez �tre si aimable quant � nous laissiez ' .
 'sachez si vous avait des issues ou soucis, nous l\'appr�cierions.  ' .
 'Nous demandons la r�troaction de vous et d\'autres quant � la fa�on dont nous pouvons ' .
 'l\'aide font votre exp�rience � '. STORE_NAME . ' meilleur.'."\n\n".
 'NOTEZ SVP:'."\n".'Si vous croyez vous avez accompli votre achat et �tes ' .
 'se demandant pourquoi il n\'a pas �t� livr�, cet email est une indication cela ' .
 'votre commande n\'a pas �t� ex�cut�e, et cela vous n\'avez pas �t� charg�! ' .
 'Revenez svp au magasin afin d\'ex�cuter votre commande.'."\n\n".
 'Nos excuses si vous accomplissiez d�j� votre achat, ' .
 'nous essayons de ne pas envoyer ces messages dans ces cas, mais parfois il est ' .
 'dur pour que nous disent selon diff�rentes circonstances.'."\n\n".
 'Encore, merci de votre temps et consid�ration en nous aidant ' .
 'am�liorez ' . STORE_NAME .  " site Web.\n\nSinc�rement,\n\n"
 );

define('DAYS_FIELD_PREFIX', 'Montrez pour le bout ');
define('DAYS_FIELD_POSTFIX', ' jours ');
define('DAYS_FIELD_BUTTON', 'Allez');
define('TABLE_HEADING_DATE', 'DATE');
define('TABLE_HEADING_CONTACT', 'ENTR� EN CONTACT');
define('TABLE_HEADING_CUSTOMER', 'NOM DE CLIENT');
define('TABLE_HEADING_EMAIL', 'E-MAIL');
define('TABLE_HEADING_PHONE', 'T�L�PHONE');
define('TABLE_HEADING_MODEL', 'ARTICLE');
define('TABLE_HEADING_DESCRIPTION', 'DESCRIPTION');
define('TABLE_HEADING_QUANTY', 'QUANTIT�');
define('TABLE_HEADING_PRICE', 'PRIX');
define('TABLE_HEADING_TOTAL', 'TOTAL');
define('TABLE_GRAND_TOTAL', 'Total g�n�ral: ');
define('TABLE_CART_TOTAL', 'Total de chariot: ');
define('TEXT_CURRENT_CUSTOMER', 'CLIENT');
define('TEXT_SEND_EMAIL', 'Envoyez l\'email');
define('TEXT_RETURN', '[Cliquez sur ici pour retourner]');
define('TEXT_NOT_CONTACTED', 'Non entr� en contact');
define('PSMSG', 'Additionnel PS Message: ');
define('TEXT_RAC_EDIT', '�ditez les arrangements pour RAC');
define('TEXT_RAC_RUN_RECOVER_CARTS_REPORT', 'Course RAC Rapport');
define('TEXT_CUR_CUSTOMER', 'Client courant'); 
define('TEXT_CONTACTED', 'Entr� en contact'); 
define('TEXT_UNCONTACTED', 'Non entr� en contact'); 
define('TEXT_MATCHED', 'Ordre assorti');  
?>