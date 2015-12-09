<?php
/*
  $Id: create_account.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/


// MAIL VALIDATION START //
define('VALIDATE_YOUR_MAILADRESS', 'Click here to Validate/Activate Your account');
define('SECOND_LINK', '<B>Or you can manually copy and paste in the following link into your browsers window:</B><BR> ');
define('OR_VALIDATION_CODE', '<B>Your Validation Code is:</B> ');
define('MAIL_VALIDATION', '<FONT COLOR="#FF0000"><B>You have to validate/activate your account before you can login.</B></FONT><P><B>Please click on the link below to finish the account creation process:</B> ');
// MAIL VALIDATION END //

define('NAVBAR_TITLE', 'Cr&eacute;er un compte');

define('HEADING_TITLE', 'Mon compte :');

define('TEXT_ORIGIN_LOGIN', '<font color="#FF0000"><small><b>NOTE :</b></font></small> Si vous poss&eacute;dez d&eacute;j&agrave; un compte, merci de vous identifier &agrave; la <a href="%s"><u>page de connexion</u></a>.');

/*
define('EMAIL_SUBJECT', 'Bienvenue chez' . STORE_NAME);
define('EMAIL_GREET_MR', 'Cher Mr. ' . stripslashes($_POST['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Ch&egrave;re Ms. ' . stripslashes($_POST['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Cher ' . stripslashes($_POST['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'Nous vous souhaitons la bienvenue chez <b>' . STORE_NAME . '</b>.' . "\n\n");
*/
define('EMAIL_SUBJECT', 'Bienvenue chez' . STORE_NAME);
define('EMAIL_GREET_MR', 'Cher Mr. %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Ch&egrave;re Ms. %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Cher %s' . "\n\n");
define('EMAIL_WELCOME', 'Nous vous souhaitons la bienvenue chez <b>' . STORE_NAME . '</b>.' . "\n\n");

define('EMAIL_TEXT', 'Vous avez acc&egrave;s maintenant à de  <b>nombreux services</b> qui vous sont offerts. Ceci Inclu :' . "\n\n" . '<li><b>Caddie Permanent</b> - Tous les produits ajout&eacute;s sur le site sont stock&eacute;s jusqu\'à ce que vous les supprimiez ou vous passiez une s&eacute;lection.' . "\n" . '<li><b>Carnet d\'adresse</b> - Vous pouvez utilisez une autre adresse pour envoyer votre s&eacute;lection.' . "\n" . '<li><b>Historique des s&eacute;lections</b> - Vosu avez acc&egrave;s à l\'historique de vos s&eacute;lections.' . "\n" . '<li><b>Commentaires</b> - Vous pouvez &eacute;mettre une ou des opinions sur nos produits.' . "\n\n");
define('ADMIN_EMAIL_WELCOME', 'Application to become a wholesale customer of <b>' . STORE_NAME . '</b>.' . "\n\n");
define('ADMIN_EMAIL_TEXT', 'You have received an application to become a wholesale customer from your website.  Information regarding this application can be found at your online administration panel.' . "\n\n");

define('EMAIL_CONFIRMATION', 'Thank you for submitting your account information to our ' . STORE_NAME . "\n\n" . 'To finish your account setup please verify your e-mail address by clicking the link below: ' . "\n\n");
define('EMAIL_CONTACT', 'Si vous avez besoin d\'aide, vous pouvez nous contacter par le biais de cet E Mail : ');
define('EMAIL_CONTACT_TEXT', '<a href = \"mailto:' . STORE_OWNER_EMAIL_ADDRESS . '\">' . STORE_OWNER_EMAIL_ADDRESS . '</a>' . "\n\n");
define('EMAIL_WARNING', '<b>Note:</b> Si votre adresse mail nous a &eacute;t&eacute; donn&eacute;e par un de nos clients et que vous ne souhaitez pas être inform&eacute;, vous pouvez r&eacute;silier votre compte en nous envoyant un mail à l\'adresse suivante : ');
define('EMAIL_WARNING_TEXT', '<a href = \"mailto:' . STORE_OWNER_EMAIL_ADDRESS . '\">' . STORE_OWNER_EMAIL_ADDRESS . '</a>' . "\n");

/* ICW Credit class gift voucher begin */
define('EMAIL_GV_INCENTIVE_HEADER', "\n\n" .'As part of our welcome to new customers, we have sent you a Gift Voucher worth %s');
define('EMAIL_GV_REDEEM', 'The redeem code for your Gift Voucher is %s. You can enter the redeem code when checking out while making a purchase');
define('EMAIL_GV_LINK', 'or by following this link ');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Congratulations! to make your first visit to our online shop a more rewarding experience, we are sending you an e-Discount Coupon.' . "\n" .
                                        ' Below are details of the Discount Coupon created just for you' . "\n");
define('EMAIL_COUPON_REDEEM', 'To use the coupon enter the redeem code which is %s during checkout while making a purchase');
/* ICW Credit class gift voucher end */
define('HEADING_TITLE_CHECKOUT','Information personnelle de contrôle');// Added by sheetal for PWA form Title

define('MAIL_VALIDATION_B2B','Thank you for creating an account in our store. We validate account access. We will review your information and contact you if necessary. If we approve your account, you will receive a notification via email."');
?>