<?php
/*
  $Id: french.php,v 2.1 2008/06/12 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
//@setlocale(LC_TIME, 'fr');
setlocale(LC_TIME, 'fr_FR.ISO_8859-1');
define('ENTRY_EMAIL_CHECK_ERROR', 'Là a été une erreur envoyant cet email ! Veuillez contacter le propriétaire de magasin.');
//VVC Constants
define('VISUAL_VERIFY_CODE_CHARACTER_POOL', 'ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789');  //no zeros or O
define('VISUAL_VERIFY_CODE_CATEGORY', 'V&eacute;rification du code de s&eacute;curit&eacute;');
define('VISUAL_VERIFY_CODE_ENTRY_ERROR', 'Le code de Securit&eacute; que vous avez donn&eacute; n\'est pas valide');
define('VISUAL_VERIFY_CODE_ENTRY_TEXT', '*');
define('VISUAL_VERIFY_CODE_TEXT_INSTRUCTIONS', 'Entrez le code de securit&eacute; ici:');
define('VISUAL_VERIFY_CODE_BOX_IDENTIFIER', '<- Code de Securit&eacute;');
// date format
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
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
define('HTML_PARAMS','dir="LTR" lang="fr"');
// charset for web pages and emails
define('CHARSET', 'iso-8859-1');
// page title
define('TITLE', 'Nom de votre boutique, &agrave; changer dans catalog/includes/languages/french');
// CCGV
define('BOX_INFORMATION_GV', 'Ch&egrave;ques Cadeaux - Questions Fr&eacute;quentes');
define('VOUCHER_BALANCE', 'Solde des Ch&egrave;ques Cadeaux');
define('BOX_HEADING_GIFT_VOUCHER', 'Compte de Ch&egrave;ques Cadeaux');
define('GV_FAQ', 'Questions Fr&eacute;quentes sur les Ch&egrave;ques Cadeaux');
define('ERROR_REDEEMED_AMOUNT', 'F&eacute;licitations, vous avez rachet&eacute; ');
define('ERROR_NO_REDEEM_CODE', 'Vous n\'avez pas fournis un code de rachat.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Code de ch&egrave;que cadeaux invalide');
define('TABLE_HEADING_CREDIT', 'Montant Disponible');
define('GV_HAS_VOUCHERA', 'Vous avez de l\'argent dans votre compte de Ch&egrave;ques cadeaux. Si vous voulez <br>
                           Vous pouvez envoyer cette somme vers le <a class="pageResults" href="');
define('GV_HAS_VOUCHERB', '"><b>envoyer un email</b></a> &agrave; quelqu\'un');
define('ENTRY_AMOUNT_CHECK_ERROR', 'Vous n\'avez pas assez pour envoyer ce montant.');
define('BOX_SEND_TO_FRIEND', 'Envoyer un Ch&egrave;que Cadeaux');
define('VOUCHER_REDEEMED', 'Ch&egrave;que rachet&eacute;');
define('CART_COUPON', 'Coupon :');
define('CART_COUPON_INFO', 'Caract&eacute;ristiques');
define('MODULE_ORDER_TOTAL_COUPON_TEXT_ERROR', 'Coupon Redemption');
define('ERROR_REDEEMED_AMOUNT_ZERO', '<br>***Attention: Aucune r&eacute;duction possible pour ce Ch&egrave;que Cadeaux***');
// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Cr&eacute;er un compte');
define('HEADER_TITLE_MY_ACCOUNT', 'Mon compte');
define('HEADER_TITLE_CART_CONTENTS', 'Mon panier');
define('HEADER_TITLE_CHECKOUT', 'Commander');
define('HEADER_TITLE_TOP', 'Accueil');
define('HEADER_TITLE_CATALOG', 'Catalogue');
define('HEADER_TITLE_LOGOFF', 'Se d&eacute;connecter');
define('HEADER_TITLE_LOGIN', 'S\'identifier');
// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'visites depuis');
// text for gender
define('MALE', 'Monsieur');
define('FEMALE', 'Madame');
define('MALE_ADDRESS', 'Mr.');
define('FEMALE_ADDRESS', 'Mme.');
// text for date of birth example
define('DOB_FORMAT_STRING', 'jj/mm/aaaa');
// categories mainpage
define('BOX_HEADING_CATEGORIES_MAIN_PAGE', 'Cat&eacute;gories');
// quick_find box text in includes/boxes/quick_find.php
define('BOX_SEARCH_TEXT', 'Utilisez des mots clefs pour trouver le produit que vous cherchez.');
define('BOX_SEARCH_ADVANCED_SEARCH', 'Recherche Avanc&eacute;e');
// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Commentaires');
define('BOX_REVIEWS_WRITE_REVIEW', 'R&eacute;diger un commentaire pour ce produit!');
define('BOX_REVIEWS_NO_REVIEWS', 'Il n\'y a actuellement aucun commentaire');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s de 5 &eacute;toiles!');
// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_SHOPPING_CART_EMPTY', '0 produits');
// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS_IN', 'Meilleures Ventes Pour<br>&nbsp;&nbsp;');
// notifications box text in includes/boxes/products_notifications.php
//define('BOX_HEADING_NOTIFICATIONS', 'Avertissements');
define('BOX_NOTIFICATIONS_NOTIFY', 'M\'informer des mises &agrave; jour de <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Ne pas m\'informer des mises &agrave; jour de <b>%s</b>');
// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s page d\'accueil');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Autres produits');
// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_TELL_A_FRIEND_TEXT', 'Informer un(e) ami(e) de ce produit.');
// allprods modification
define('BOX_INFORMATION_ALLPRODS', 'Voir tous les articles');
// all categories and products modification
define ('ALL_PRODUCTS_LINK', 'Tous les produits par cat&eacute;gories');
// all categories and products modification
define ('ALL_PRODUCTS_MANF', 'Tous les produits par Marque/Fabricant');
// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Informations de livraison');
define('CHECKOUT_BAR_PAYMENT', 'Informations sur le paiement');
define('CHECKOUT_BAR_CONFIRMATION', 'Confirmation');
define('CHECKOUT_BAR_FINISHED', 'C\'est fini!');
// pull down default text
define('PULL_DOWN_DEFAULT', 'Veuillez s&eacute;lectionner');
define('TYPE_BELOW', 'un type ci-dessous');
// javascript messages
define('JS_ERROR', 'Des erreurs sont apparues pendant le traitement de votre formulaire.\n\nVeuillez faire les corrections suivantes:\n');
define('JS_REVIEW_TEXT', '* Le \'commentaire\' doit avoir au moins ' . REVIEW_TEXT_MIN_LENGTH . ' caract&egrave;res.<br>');
define('JS_REVIEW_RATING', '* Vous devez &eacute;valuer le produit pour votre commentaire.<br>');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Veuillez s&eacute;lectionner un mode de paiement pour votre commande.<br>');
define('JS_ERROR_SUBMITTED', 'Ce formulaire a d&eacute;j&agrave; &eacute;t&eacute; soumis. Veuillez cliquer sur Ok et attendre la fin du traitement.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Veuillez choisir un mode de paiement pour votre commande.');
define('CATEGORY_COMPANY', 'Information soci&eacute;t&eacute;');
define('CATEGORY_PERSONAL', 'Vos informations personnelles');
define('CATEGORY_ADDRESS', 'Votre adresse');
define('CATEGORY_CONTACT', 'Vos informations de contact');
define('CATEGORY_OPTIONS', 'Options');
define('CATEGORY_PASSWORD', 'Votre mot de passe');
define('ENTRY_COMPANY', 'Nom de la soci&eacute;t&eacute;:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Civilit&eacute;:');
define('ENTRY_GENDER_ERROR', 'Veuillez s&eacute;lectionner votre civilit&eacute;.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Votre Pr&eacute;nom:');
define('ENTRY_FIRST_NAME_ERROR', 'Votre pr&eacute;nom doit contenir un minimum de ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Votre Nom:');
define('ENTRY_LAST_NAME_ERROR', 'Votre Nom doit contenir un minimum de ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Date de naissance:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Votre date de naissance doit &ecirc;tre au format: JJ/MM/AAAA (ex 03/02/1961)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (ex. 03/02/1974)');
define('ENTRY_EMAIL_ADDRESS', 'Votre adresse email:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Votre adresse email doit contenir un minimum de ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_EMAIL_ADDRESS_BLANK_ERROR', 'S’il vous plait entr&eacute;e adresse e-mail valide.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Votre adresse email ne semble pas valide - Veuillez faire les corrections n&eacute;cessaires.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Votre adresse email figure d&eacute;j&agrave; dans notre base de donn&eacute;es - Veuillez vous identifier avec cette adresse ou alors cr&eacute;er un nouveau compte avec une adresse email diff&eacute;rente.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Rue:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Votre Rue doit contenir un minimum de ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Compl&eacute;ment d\'adresse:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Code postal:');
define('ENTRY_POST_CODE_ERROR', 'Votre code postal doit contenir un minimum de ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Ville:');
define('ENTRY_CITY_ERROR', 'Votre ville doit contenir un minimum de ' . ENTRY_CITY_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'N&deg; d&eacute;partement:');
define('ENTRY_STATE_ERROR', 'Votre N&deg; de d&eacute;partement doit contenir un minimum de ' . ENTRY_STATE_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_STATE_ERROR_SELECT', 'Veuillez s&eacute;lectionner un N&deg; d&eacute;partement &agrave; partir de la liste d&eacute;roulante.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Pays:');
define('ENTRY_COUNTRY_ERROR', 'Vous devez s&eacute;lectionner un pays dans la liste d&eacute;roulante.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Num&eacute;ro de t&eacute;l&eacute;phone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Votre N° de téléphone doit contenir un minimum de ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Num&eacute;ro de Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Lettre d\'information:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Je veux souscrire');
define('ENTRY_NEWSLETTER_NO', 'Je ne veux pas souscrire');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Mot de passe:');
define('ENTRY_PASSWORD_ERROR', 'Votre mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'La confirmation du mot de passe doit correspondre au mot de passe saisi pr&eacute;c&eacute;demment.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Confirmation du mot de passe:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Mot de passe actuel:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Votre mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_PASSWORD_NEW', 'Nouveau mot de passe:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Votre nouveau mot de passe doit contenir un minimum de ' . ENTRY_PASSWORD_MIN_LENGTH . ' caract&egrave;res.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'La confirmation du mot de passe doit correspondre au nouveau mot de passe saisi.');
define('PASSWORD_HIDDEN', '--Masqu&eacute;--');
define('FORM_REQUIRED_INFORMATION', '* Informations requises');
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page de r&eacute;sultats:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> produits)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> commentaires)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> nouveaux produits)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> promotions)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> produits d&eacute;crits)');
define('PREVNEXT_TITLE_FIRST_PAGE', 'Premi&egrave;re page');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Page Pr&eacute;c&eacute;dente');
define('PREVNEXT_TITLE_NEXT_PAGE', 'Page Suivante');
define('PREVNEXT_TITLE_LAST_PAGE', 'Derni&egrave;re Page');
define('PREVNEXT_TITLE_PAGE_NO', 'Page %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Groupe pr&eacute;c&eacute;dent de %d Pages');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Groupe suivant de %d Pages');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;Premier');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Prec]');
define('PREVNEXT_BUTTON_NEXT', '[Suiv&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'Derni&egrave;re&gt;&gt;');
// image alt text
define('IMAGE_BUTTON_ADD_ADDRESS', 'Ajouter une adresse');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Carnet d\'adresses');
define('IMAGE_BUTTON_BACK', 'Retour');
define('IMAGE_BUTTON_BUY_NOW', 'Acheter maintenant');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Changer l\'adresse');
define('IMAGE_BUTTON_CHECKOUT', 'Confirmation');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Valider la commande');
define('IMAGE_BUTTON_CONTINUE', 'Continuer');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Continuer vos achats');
define('IMAGE_BUTTON_DELETE', 'Supprimer');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Editer mon compte');
define('IMAGE_BUTTON_HISTORY', 'Historique des commandes');
define('IMAGE_BUTTON_LOGIN', 'S\'inscrire');
define('IMAGE_BUTTON_IN_CART', 'Ajouter au panier');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Mon avis');
define('IMAGE_BUTTON_QUICK_FIND', 'Recherche Rapide');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Supprimer mon avis');
define('IMAGE_BUTTON_REVIEWS', 'Commentaires');
define('IMAGE_BUTTON_SEARCH', 'Rechercher');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Options de Livraison');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Informer un(e) ami(e)');
define('IMAGE_BUTTON_UPDATE', 'Mise &agrave; jour');
define('IMAGE_BUTTON_UPDATE_CART', 'Mettre &agrave; jour le panier');
define('IMAGE_BUTTON_WRITE_REVIEW', 'R&eacute;diger un commentaire');
define('SMALL_IMAGE_BUTTON_DELETE', 'Supprimer');
define('SMALL_IMAGE_BUTTON_EDIT', 'Editer');
define('SMALL_IMAGE_BUTTON_VIEW', 'Voir');
define('IMAGE_BUTTON_VIEW_CART','View Cart');
define('ICON_ARROW_RIGHT', 'plus');
define('ICON_CART', 'Dans le panier');
define('ICON_ERROR', 'Erreur');
define('ICON_SUCCESS', 'Succ&egrave;s');
define('ICON_WARNING', 'Attention');
// greeting text
define('TEXT_CUSTOMER_GREETING_HEADER', 'Bienvenue &agrave; nos clients');
define('TEXT_GREETING_PERSONAL', 'Soyez le bienvenu <span class="greetUser">%s</span>, voulez-vous prendre connaissance des <a href="%s"><u>nouveaux produits</u></a> mis en vente ?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Si vous n\'&ecirc;tes pas %s, veuillez <a href="%s"><u>vous identifier &agrave; nouveau</u></a> avec votre propre compte.</small>');
define('TEXT_GREETING_GUEST', 'Bonjour et Bienvenue <span class="greetUser">cher visiteur</span>, voulez vous vous <a href="%s"><u>identifier</u></a> ou d&eacute;sirez vous <a href="%s"><u>cr&eacute;er votre compte</u></a> ?');
define('TEXT_SORT_PRODUCTS', 'Produits tri&eacute;s  ');
define('TEXT_DESCENDINGLY', 'D&eacute;croissant');
define('TEXT_ASCENDINGLY', 'Croissant');
define('TEXT_BY', ' par ');
define('TEXT_REVIEW_BY', 'par %s');
define('TEXT_REVIEW_WORD_COUNT', '%s mots');
define('TEXT_REVIEW_RATING', 'Ratio: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Ajout&eacute; le : %s');
define('TEXT_NO_REVIEWS', 'Actuellement, aucun commentaire n\'est disponible.');
define('TEXT_NO_NEW_PRODUCTS', 'Actuellement, aucun produit n\'est disponible.');
define('TEXT_UNKNOWN_TAX_RATE', 'Taux de taxe inconnue');
define('TEXT_REQUIRED', '<span class="errorText">Obligatoire</span>');
// Down For Maintenance
define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'ATTENTION: Ce site Internet sera en maintenance &agrave; partir de : ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'ATTENTION: Ce site Internet est &agrave; l\'heure actuelle indisponible pour des raisons de maintenance');
define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>ERREUR:</small> Impossible d\'envoyer des emails avec la configuration actuelle du serveur SMTP. Veuillez v&eacute;rifier les r&eacute;glages de votre php.ini et corriger le serveur SMTP si n&eacute;cessaire.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Attention : Le r&eacute;pertoire d\'installation existe &agrave; : ' .  DIR_FS_CATALOG . 'install. Pour des raisons de s&eacute;curit&eacute;, veuillez supprimer ce dossier.');
define('WARNING_UPGRADES_DIRECTORY_EXISTS', 'Attention : L\'annuaire de mises à niveau existe à: ' .  DIR_FS_CATALOG . 'upgrades. Pour des raisons de s&eacute;curit&eacute;, veuillez supprimer ce dossier.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Attention : Je suis en mesure d\'&eacute;crire sur votre fichier configure.php &agrave; : ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. Veuillez SVP faire un CHMOD 444 sur ce fichier pour r&eacute;duire les risques et am&eacute;liorer la s&eacute;curit&eacute;.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Attention : Le r&eacute;pertoire des sessions n\'existe pas : ' . tep_session_save_path() . '. L\'enregistrement des sessions ne pourra se faire tant que le r&eacute;pertoire ne sera pas cr&eacute;&eacute;.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Attention : Je ne suis pas en mesure d\'&eacute;crire dans le r&eacute;pertoire de sessions : ' . tep_session_save_path() . '. Les sessions ne seront pas disponibles tant que ce r&eacute;pertoire n\'aura pas les bonnes permissions (CHMOD 777).');
define('WARNING_SESSION_AUTO_START', 'Attention: session.auto_start est activ&eacute; - Veuillez d&eacute;sactiver cette fonction de php dans php.ini et redemarrer le serveur web.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Attention : Le r&eacute;pertoire de t&eacute;l&eacute;chargement des produits n\'existe pas : ' . DIR_FS_DOWNLOAD . '. Le t&eacute;l&eacute;chargement de produits ne fonctionnera pas tant que le r&eacute;pertoire se sera pas cr&eacute;&eacute;.');
define('WARNING_ENCRYPT_FILE_MISSING', 'Attention: Le fichier contenant la cl&eacute; de cryptage est introuvable.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Erreur: 01 Les quatre premiers chiffres que vous avez entr&eacute; sont: %s Si ce nombre est correct, nous n\'acceptons pas ce type de carte de cr&eacute;dit.Sinon veuillez recommencer.');
define('TEXT_CCVAL_ERROR_INVALID_MONTH', 'Erreur: 02 Le mois de la date d\'expiration entr&eacute; pour la carte de cr&eacute;dit est invalide.Merci de v&eacute;rifier la date fournie !');
define('TEXT_CCVAL_ERROR_INVALID_YEAR', 'Erreur: 03 L\'ann&eacute;e de la date d\'expiration entr&eacute;e pour la carte de cr&eacute;dit est invalide. Merci de v&eacute;rifier la date fournie !');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Erreur: 04 La date d\'expiration entr&eacute; pour la carte de cr&eacute;dit est invalide. Merci de v&eacute;rifier la date fournie !');
define('TEXT_CSCAL_ERROR_CARD_TYPE_MISMATCH', 'Erreur: 05 La carte de cr&eacute;dit choisie ne correspond pas au num&eacute;ro saisi. Veuillez v&eacute;rifier le num&eacute;ro et le type de carte de cr&eacute;dit et recommencez:');
define('TEXT_CCVAL_ERROR_SHORT', 'Erreur: 06 Vous n\'avez pas entr&eacute; le bon nombre de chiffres. Veuillez v&eacute;rifier que vous avez fourni en entier le num&eacute;ro de votre carte de cr&eacute;dit');
define('TEXT_CCVAL_ERROR_BLACKLIST', 'Erreur: 07 Nous ne pouvons accepter votre carte car elle est sur la Blacklist, si vous pensez qu\'il s\'agit d\'une erreur contactez votre banque.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Erreur: 08 Le num&eacute;ro CVV (Code de S&eacute;curit&eacute;) saisi n\'a pas une longueur correcte. Veuillez recommencer.');
define('TEXT_CCVAL_ERROR_NOT_ACCEPTED', 'Erreur: 09 Le num&eacute;ro de la carte de cr&eacute;dit fourni semble &ecirc;tre celui d\'une carte %s. Malheureusement nous n\'acceptons pas %s comme moyen de paiement pour le moment.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Erreur: 10 The credit card number entered is invalid. Merci de v&eacute;rifier les informations fournies !');
// footer text
define('FOOTER_TEXT1_BODY', 'Copyright &copy; ' . date("Y") . '&nbsp;<a target="_blank" href="http://www.crecommerce.com/">Chain Reaction Ecommerce, Inc.</a>, Inc.</a> Powered by <a target="_blank" href="http://www.creloaded.com">CRE Loaded</a>');
define('FOOTER_TEXT2_BODY', '<br>Using ' . PROJECT_VERSION );
define('FOOTER_TEXT_BODY', FOOTER_TEXT1_BODY . FOOTER_TEXT2_BODY);
// Header Links
define('HEADER_LINKS_DEFAULT','MAISON');
define('HEADER_LINKS_WHATS_NEW','NOUVEAUTES');
define('HEADER_LINKS_SPECIALS','PROMOTIONS');
define('HEADER_LINKS_REVIEWS','COMMENTAIRES');
define('HEADER_LINKS_LOGIN','S\'IDENTIFIER');
define('HEADER_LINKS_LOGOFF','SE DECONNECTER');
define('HEADER_LINKS_PRODUCTS_ALL','CATALOGUE');
define('HEADER_LINKS_ACCOUNT_INFO','INFORMATION COMPTE');
define('HEADER_LINKS_LINKS','LIENS');
define('HEADER_LINKS_FAQ','FAQS');
define('HEADER_LINKS_NEWS','NEWS');
define('HEADER_LINKS_INFORMATION','INFORMATION');
// print order mod
define('IMAGE_BUTTON_PRINT_ORDER', 'Commande imprimable');
//  Attributes Sorter
require_once(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');
// wishlist box text in includes/boxes/wishlist.php
define('BOX_HEADING_CUSTOMER_WISHLIST', 'Mes futurs achats');
define('BOX_WISHLIST_EMPTY', 'Vous n\'avez pas d\'article dans votre liste des futurs achats');
define('IMAGE_BUTTON_ADD_WISHLIST', 'Ajouter &agrave; ma liste d\'achats futurs');
define('TEXT_WISHLIST_COUNT', 'Actuellement %s articles sont dans votre liste d\'achat futurs.');
define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> articles de votre liste des futurs achats)');
//define('BOX_HEADING_CUSTOMER_WISHLIST_HELP', 'Aide sur "mes futurs achats"');
define('BOX_HEADING_SEND_WISHLIST', 'Envoyer mes futurs achats');
define('BOX_TEXT_MOVE_TO_CART', 'Envoyer vers Panier');
define('BOX_TEXT_DELETE', 'Effacer');
// Information Page
  define('BOX_HEADING_INFORMATION', 'Directeur d\'information');
  define('BOX_INFORMATION_MANAGER', 'Directeur d\'information');
if(file_exists('includes/languages/english_newsdesk.php')) {
  include_once('includes/languages/french_newsdesk.php');
  include_once('includes/languages/french_faqdesk.php');
}
// Checkout Without Account images
define('IMAGE_BUTTON_CREATE_ACCOUNT', 'Cr&eacute;er Compte');
define('NAV_ORDER_INFO', 'Information Commande');
// Events Calendar
define('BOX_TOOLS_EVENTS_MANAGER', 'Gestion des &eacute;v&eacute;nements');
define('IMAGE_NEW_EVENT', 'Nouvel &eacute;v&eacute;nement');
define('BOX_INFORMATION_FAQ', 'Questions Fr&eacute;quentes');
// Article Manager
define('BOX_HEADING_ARTICLES', 'Comentaires');
define('BOX_ALL_ARTICLES', 'Tous les Commentaires');
define('BOX_NEW_ARTICLES', 'Nouveaux Commentaires');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> commentaires)');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES_NEW', 'Affichage de <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> nouveaux commentaires)');
define('TABLE_HEADING_AUTHOR', 'Auteur');
define('TABLE_HEADING_ABSTRACT', 'Resum&eacute;');
define('BOX_HEADING_AUTHORS', 'Commentaires du m&eacute;me auteur');
define('NAVBAR_TITLE_DEFAULT', 'Commentaires');
define('BOX_ASEARCH_TEXT','Recherche d\'articles');
// Eversun mod for sppc and qty price breaks
define('ENTRY_COMPANY_TAX_ID', 'N° TVA Intra:');
define('ENTRY_COMPANY_TAX_ID_ERROR', '');
define('ENTRY_COMPANY_TAX_ID_TEXT', '');
// Eversun mod end for sppc and qty price breaks
define('IFRAME_ERROR','Sorry, you browser does not support iframes.');
define("GIFT_VOUCHER_ACCOUNT_BALANCE_1","You still have</br>");
define("GIFT_VOUCHER_ACCOUNT_BALANCE_2","</br>left to spend in your Gift Voucher Account<br><br>");
define("GIFT_VOUCHER_ACCOUNT_BALANCE_3","Send to a Friend");
define('LOGIN_ALT','Connexion');
define('LOGOFF_ALT','Deconnexion');
define('MYACCOUNT_ALT','Mon compte');
define('SPECIALS_ALT','Promotions');
define('WHATS_NEW_ALT','Du nouveau');
define('CONTACT_US_ALT','Contactez Nous');
define('IMAGE_ALT','image');
define('BOX_ALT','box');
//dayNames in calendar
define("S","S");
define("M","M");
define("T","T");
define("W","W");
define("F","F");
//monthNames  in calendar
define('JANUARY','JANVIER');
define('FEBRUARY','FEVRIER');
define('MARCH','MARS');
define('APRIL','AVRIL');
define('MAY','MAI');
define('JUNE','JUIN');
define('JULY','JUILLET');
define('AUGUST','AOUT');
define('SEPTEMBER','SEPTEMBRE');
define('OCTOBER','OCTOBRE');
define('NOVEMBER','NOVEMBRE');
define('DECEMBER','DECEMBRE');
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
define('BOX_HEADING_CUSTOMER_WISHLIST_VIEW','Ma liste \'AChats de demain\' - Voir');
define('BOX_HEADING_CUSTOMER_WISHLIST_HELP','Ma liste \'Achats de demain\' - Aide');
define("HIDE_PRICES_ERROR",'Vous devez être ouvert une session pour regarder des prix et pour passer des commandes.');   
define('HIDE_PRICES_TEXT', 'Ouverture pour le prix'); 
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
define('TEXT_CLOSE_WINDOW', 'Fenêtre étroite');
define('TEXT_PRODUCT_SUBPROD_QUANTITY', 'Quantity');
define('TEXT_CART_COUNT', ' Item ');
define('TEXT_CART_COUNTS', ' Items ');
define('TEXT_CART_WEIGHT', ' lb ');
define('TEXT_CART_WEIGHTS', ' lbs ');
define('ALT_HOMEPAGE', 'Homepage');
define("TEXT_YOUR_CONTENT_HERE","Your Content here");
define("TEXT_NO_SPECIALS","There are currently no specials defined.");
define('TEXT_ENTER_COUPON_CODE', 'Enter Redeem Code&nbsp;&nbsp;');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erreur : La destination n\'existe pas.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erreur : Destination non writeable.');
define('ERROR_FILE_NOT_SAVED', 'Erreur : Téléchargement de dossier non sauvé.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Erreur : Type de téléchargement de dossier non permis.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succès : Le téléchargement de dossier a économisé avec succès.');
define('TEXT_INDEX_RESTRICTED_HEADING','Secteur restreint');
define('TEXT_INDEX_RESTRICTED_TEXT','La page que vous essayez de regarder est restreinte');
define('WARNING_NO_FILE_UPLOADED', 'Avertissement : Aucun dossier n\'a téléchargé.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Avertissement : Des téléchargements de dossier sont désactivés dans le fichier de configuration de php.ini.');
define('TEXT_NO_PRODUCTS', 'Les produits dans ce rang n\'existent pas.');
// Returns System
define('BOX_INFORMATION_RETURNS', 'Track your return');
define('BOX_HEADING_MANUFACTURER_INFO' ,'Information de fabricant');
define('BOX_HEADING_SEARCH', 'Recherche');
//MVS 
define('MULTIPLE_SHIP_METHODS_TITLE', 'Expédition combinée');
define('ERROR_NO_SHIPPING_SELECTED_SELECTED', 'Erreur : Aucun module d\'expédition n\'a choisi');  
define('TEXT_POWERED_BY_CRE', 'Cet ordre a été actionné par CRE Loaded le logiciel libre. Obtenez votre propre magasin aujourd\'hui !'); 
define('ERROR_REDEEMED_SHIPPING_AMOUNT', 'Des félicitations, vous avez racheté la quantité de expédition ');

define('INTERNAL_ERROR', 'L\'erreur intérieure s\'est produite.');
?>