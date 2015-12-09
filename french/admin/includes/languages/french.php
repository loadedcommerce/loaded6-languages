<?php
/*
  $Id: french.php,v 1.3 2003/09/28 23:37:26 anotherlango Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2003 osCommerce
  French Creload Team for Creload 6.1  

  Released under the GNU General Public License
*/
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_EMAIL_CHECK_ERROR', '<span class="errorText">Là a été une erreur envoyant cet email ! Veuillez contacter le propriétaire de magasin.</span>');
 define('ENTRY_STATE_ERROR_SELECT', '<span class="errorText">&nbsp;Veuillez choisir un comté/état à partir du comté/de état abaissent le menu.</span>');
 define('ENTRY_STATE_TEXT', '*');
 define('ENTRY_STREET_ADDRESS_TEXT', '*');
 define('ENTRY_SUBURB_TEXT', '');
 define('LANGUAGE_CURRENCY', 'USD');
 define('TEXT_MERCHANT','Le négociant de CRE');
//Admin begin
define('TEXT_ADMIN_HOME','Admin Home');
define('TEXT_VIEW_CATALOG','View Catalog');
define('TEXT_FORUMS','CRE Forums');
define('TEXT_PURCHASE_SUPPORT','Purchase CRE Support');

define('TEXT_ADMIN_LANG','Admin Language:');
define('TEXT_CHANGE_PASWORD','Change Password');
define('TEXT_LOGOUT','Logout');
define('TEXT_CHECK_UPDATES','Check for Updates');
define('TEXT_GET_PRO','Get Pro Version');


// header text in includes/header.php
define('HEADER_TITLE_ACCOUNT', 'Mon Compte');
define('HEADER_TITLE_LOGOFF', 'Se D&eacute;connecter');
define('TEXT_SELECT_LANGUAGE', 'Please select Admin language for this session ');
define('BOX_REPORTS_NOT_VALID_USER', 'Customers Not Validated');

// Admin Account
define('BOX_HEADING_MY_ACCOUNT', 'Mon Compte');

//MARKETING BOX
define('BOX_HEADING_MARKETING', 'Marketing');
define('BOX_MARKETING_EVENTS_MANAGER', 'Events Manager');
define('BOX_MARKETING_SALEMAKER', 'SaleMaker');
define('BOX_MARKETING_SPECIALS', 'Specials');
define('BOX_MARKETING_SPECIALSBYCAT','Specials By Category');
define('BOX_MARKETING_BANNER_MANAGER','Banner Manager');

// configuration box text in includes/boxes/administrator.php
define('BOX_HEADING_ADMINISTRATOR', 'Administrateur');
define('BOX_ADMINISTRATOR_MEMBERS', 'Membre du groupe');
define('BOX_ADMINISTRATOR_GROUPS', 'Admin Groups');
define('BOX_ADMINISTRATOR_MEMBER', 'Membres');
define('BOX_ADMINISTRATOR_BOXES', 'Menu File Access');
define('BOX_ADMINISTRATOR_ACCOUNT_UPDATE', 'Mettre &agrave; jour mon compte');
define('BOX_ADMINISTRATOR_SECURITY', 'Admin File Security');

// images
define('IMAGE_FILE_PERMISSION', 'Permission sur les fichiers');
define('IMAGE_GROUPS', 'Liste des Groupes');
define('IMAGE_INSERT_FILE', 'Ins&eacute;rer un fichier');
define('IMAGE_MEMBERS', 'Liste des Membres');
define('IMAGE_NEW_GROUP', 'Nouveau Groupe');
define('IMAGE_NEW_MEMBER', 'Nouveau Membre');
define('IMAGE_NEXT', 'Suivant');

// constants for use in tep_prev_next_display function
define('TEXT_DISPLAY_NUMBER_OF_FILENAMES', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> noms de fichiers)'); 
define('TEXT_DISPLAY_NUMBER_OF_MEMBERS', 'Afficher <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> membres)');
//Admin end

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'fr_FR.ISO_8859-1');
//setlocale(LC_TIME, 'fr');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');


//// 
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

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="fr"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// page title
define('TITLE', 'CRE Loaded Commercial Open Source eCommerce');

// CCGV
define('BOX_HEADING_GV_ADMIN', 'Ch&egrave;ques/Coupons');
define('BOX_GV_ADMIN_QUEUE', '&#8226; Ch&egrave;ques cadeaux en attente');
define('BOX_GV_ADMIN_MAIL', '&#8226; Ch&egrave;ques cadeaux par email');
define('BOX_GV_ADMIN_SENT', '&#8226; Ch&egrave;ques cadeaux envoyés');
define('BOX_COUPON_ADMIN','&#8226; Gestion des coupons');
define('BOX_GV_REPORT','Coupon Report');
define('IMAGE_RELEASE', 'Valider ce ch&egrave;que cadeau');

define('_JANUARY', 'Janvier');
define('_FEBRUARY', 'F&eacute;vrier');
define('_MARCH', 'Mars');
define('_APRIL', 'Avril');
define('_MAY', 'Mai');
define('_JUNE', 'Juin');
define('_JULY', 'Juillet');
define('_AUGUST', 'Ao&ucirc;t');
define('_SEPTEMBER', 'Septembre');
define('_OCTOBER', 'Octobre');
define('_NOVEMBER', 'Novembre');
define('_DECEMBER', 'D&eacute;cembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> ch&egrave;que cadeau)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (de <b>%d</b> coupon)');
define('BOX_HEADING_CONTENT',' Directeur content');

define('TEXT_VALID_PRODUCTS_LIST', 'Liste des produits');
define('TEXT_VALID_PRODUCTS_ID', 'Identification du produit');
define('TEXT_VALID_PRODUCTS_NAME', 'Nom des produits');
define('TEXT_VALID_PRODUCTS_MODEL', 'Mod&egrave;le des produits');

define('TEXT_VALID_CATEGORIES_LIST', 'Liste des cat&eacute;gories');
define('TEXT_VALID_CATEGORIES_ID', 'Identification cat&eacute;gorie');
define('TEXT_VALID_CATEGORIES_NAME', 'Nom des cat&eacute;gories');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administration');
define('HEADER_TITLE_SUPPORT_SITE', 'Support Site');
define('HEADER_TITLE_ONLINE_CATALOG', 'Catalogue en ligne');
define('HEADER_TITLE_ADMINISTRATION', 'Administration');
define('HEADER_TITLE_CHAINREACTION', 'Chainreactionweb');
define('HEADER_TITLE_CRELOADED', 'CRE Loaded Project');

// MaxiDVD Added Line For WYSIWYG HTML Area: BOF
define('BOX_CATALOG_DEFINE_MAINPAGE', 'D&eacute;finir la 1&egrave;re page');
// MaxiDVD Added Line For WYSIWYG HTML Area: EOF

// text for gender
define('MALE', 'Mr');
define('FEMALE', 'Mme');

// text for date of birth example
define('DOB_FORMAT_STRING', 'jj/mm/aaaa');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuration');
define('BOX_CONFIGURATION_MYSTORE', 'Mon magasin');
define('BOX_CONFIGURATION_LOGGING', 'Enregistrement');
define('BOX_CONFIGURATION_CACHE', 'Cache');

// added for super-friendly admin menu:
define('BOX_CONFIGURATION_MIN_VALUES', 'Valeurs Minimales');
define('BOX_CONFIGURATION_MAX_VALUES', 'Valeurs Maximales');
define('BOX_CONFIGURATION_IMAGES', 'Images');
define('BOX_CONFIGURATION_CUSTOMER_DETAILS', 'D&eacute;tails Clients');
define('BOX_CONFIGURATION_SHIPPING', 'Exp&eacute;dition');
define('BOX_CONFIGURATION_PRODUCT_LISTING', 'Liste des Produits');
define('BOX_CONFIGURATION_EMAIL', 'Email');
define('BOX_CONFIGURATION_DOWNLOAD', 'T&eacute;l&eacute;chargement');
define('BOX_CONFIGURATION_GZIP', 'Compression GZip');
define('BOX_CONFIGURATION_SESSIONS', 'Sessions');
define('BOX_CONFIGURATION_STOCK', 'Stock');
define('BOX_CONFIGURATION_WYSIWYG', 'WYSIWYG Editor 1.7');
define('BOX_CONFIGURATION_AFFILIATE', 'Configuration'); 
define('BOX_CONFIGURATION_MAINT', 'Maintenance Site');
define('BOX_CONFIGURATION_ACCOUNTS', 'Achat sans accompte');
define('BOX_CONFIGURATION_CHECKOUT', 'Checkout Settings');
define('BOX_CONFIGURATION_LINKS', 'Liens');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Modules');
define('BOX_MODULES_PAYMENT', 'Paiement');
define('BOX_MODULES_SHIPPING', 'Exp&eacute;dition');
define('BOX_MODULES_ORDER_TOTAL', 'Total commande');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Catalogue');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Cat&eacute;gories/Produits');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_ATTRIBUTES', 'Attributs produits');
define('BOX_CATALOG_CATEGORIES_PRODUCTS_CATEGORY_OPTIONS', 'Products Categories Options');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricants');
define('BOX_CATALOG_REVIEWS', 'Critiques');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Produits en attente');
define('BOX_CATALOG_EASYPOPULATE', 'EasyPopulate');
define('BOX_CATALOG_EASYPOPULATE_BASIC', 'EasyPopulate Basique');
define('BOX_CATALOG_SHOP_BY_PRICE', 'Shop by Price');
define('BOX_CATALOG_FEATURED', 'Featured Products');
define('BOX_CATALOG_PRODUCTS', 'Products');
define('BOX_CONFIGURATION_ADMINISTRATORS', 'Administrators');
define('BOX_CONFIGURATION_SERVICES', 'Services');
define('BOX_CONFIGURATION_CREDIT_CARDS', 'Credit Cards');
define('BOX_CATALOG_SPECIALS', 'Specials');
define('BOX_CATALOG_CATEGORIES', 'Categories');
define('BOX_HEADING_SETUP', '<b>Set Up</b>');
define('BOX_HEADING_MARKETING_MANAGER', '<b>Marketing Manager</b>');
define('BOX_HEADING_CATALOG_MANAGER', '<b>Catalog Manager</b>');
define('BOX_HEADING_CONTENT_MANAGER', '<b>Directeur content</b>');
define('BOX_HEADING_TEMPLATE_MANAGER', '<b>Template Manager</b>');
define('BOX_HEADING_CUSTOMERS_ORDERS', '<b>Customers/Orders</b>');
define('BOX_HEADING_ORDERS', '  Orders');

define('TEXT_HEADING_HOME', 'Home');
define('TEXT_HEADING_ORDERS', 'Orders');
define('TEXT_HEADING_CUSTOMERS', 'Customers');
define('TEXT_HEADING_CATALOG', 'Products');
define('TEXT_HEADING_CONTENT', 'Content');
define('TEXT_HEADING_MARKETING', 'Marketing');
define('TEXT_HEADING_CONFIGURATION', 'Configuration');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clients/Orders');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clients');
define('BOX_CUSTOMERS_PENDING_APPROVALS', 'Pending Approvals');
//added for Super-Friendly Admin Menu:
define('BOX_CUSTOMERS_ORDERS', 'Commandes');
define('BOX_CUSTOMERS_EDIT_ORDERS', 'Editer les Commandes');
define('BOX_ABANDONED_ORDERS', 'Abandoned Orders');
define('BOX_CREATE_ACCOUNT', 'Cr&eacute;ation de compte');
define('BOX_CREATE_ORDER', 'Cr&eacute;ation de commnande');
define('BOX_CREATE_ORDERS_ADMIN', 'Create Orders Admin');
// taxes box text in includes/boxes/taxes.php

define('BOX_HEADING_LOCATION_AND_TAXES', 'Lieux / Taxes');
define('BOX_TAXES_COUNTRIES', 'Pays');
define('BOX_TAXES_ZONES', 'Zones');
define('BOX_TAXES_GEO_ZONES', 'Zones fiscales');
define('BOX_TAXES_TAX_CLASSES', 'Classes fiscales');
define('BOX_TAXES_TAX_RATES', 'Taux fiscaux');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Rapports');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Produits Vus Supérieurs');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Produits Achetés Par Dessus');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total de commande client');
define('BOX_REPORTS_BOX_REPORTS_MONTHLY_SALES', 'Monthly Sales');
define('BOX_REPORTS_CREDITS', 'Customer Credit');
define('BOX_REPORTS_COUPONS_REDEEMED','Coupons Redeemed');
define('BOX_REPORTS_CUSTOMER_WISHLIST', 'Customer Wishlist');
define('BOX_REPORTS_SALES_REPORT2', 'Sales Report');
define('BOX_REPORTS_ORDERLIST', 'Generate orderlist');
define('BOX_REPORTS_MONTHLY_SALES', 'Monthly Sales/Tax');
define('BOX_REPORTS_CUSTOMERS_ORDERS', 'Customer Statistics');
define('BOX_REPORTS_DAILY_PRODUCTS_ORDERS', 'Daily Product Sales');
define('BOX_REPORTS_PRODUCTS_NOTIFICATIONS', 'Product Notifications');
define('BOX_CUSTOMERS_MENU','Customer Menu');
define('BOX_ORDERS_MENU','Orders Menu');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Outils');
define('BOX_HEADING_B2BSETTINGS', 'B2B Settings');
define('BOX_TOOLS_BACKUP', 'Sauvegarde de base de donn&eacute;es');
define('BOX_TOOLS_IMAGE_MANAGER', 'Image Manager');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestionnaire de banni&egrave;re');
define('BOX_TOOLS_CACHE', 'Contr&ocirc;le du cache');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Rédacteur de langue');
define('BOX_TOOLS_FILE_MANAGER', 'Gestionnaire de fichiers');
define('BOX_TOOLS_MAIL', 'Envoyez un courrier &eacute;lectronique');
define('BOX_TOOLS_SERVER_INFO', 'Renseignements sur serveur');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui est en ligne');

// BMC CC Mod Start
define('BOX_TOOLS_BLACKLIST', 'Credit Card Blacklist');
// BMC CC Mod End
// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localisation');
define('BOX_LOCALIZATION_CURRENCIES', 'Devises');
define('BOX_LOCALIZATION_LANGUAGES', 'Langues');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Statut des commandes');
// header_tags_controller text in includes/boxes/header_tags_controller.php

define('BOX_HEADING_HEADER_TAGS_CONTROLLER', 'Header Tags');
define('BOX_HEADER_TAGS_ADD_A_PAGE', 'Page Control');
define('BOX_HEADER_TAGS_ENGLISH', 'Text Control');
define('BOX_HEADER_TAGS_FILL_TAGS', 'Fill Tags');

// infobox box text in includes/boxes/info_boxes.php
define('BOX_HEADING_DESIGN_CONTROLS', 'Contr&ocirc;le du Design');
define('BOX_HEADING_DESIGN_TEMPLATE', 'Template');
define('BOX_HEADING_TEMPLATE_CONFIGURATION', 'Administration des Templates');
define('BOX_HEADING_TEMPLATE_MANAGEMENT', 'Template Admin');
define('BOX_HEADING_TEMPLATE_MANAGEMENT1', 'New Manage Templates');
define('BOX_HEADING_DESIGN_INFOBOX', 'Infobox');
define('BOX_HEADING_BOXES', 'Infobox configurent');
define('BOX_HEADING_BOXES_ADMIN', 'Infobox Manager');
define('BOX_HEADING_DESIGN_BRANDING', 'Branding');
define('BOX_HEADING_TEMPLATE_HEADER_TAGS','Header Tags');
 
define('BOX_HEADING_DESIGN_PRODUCT_INFO_CONFIG','Config d\'information de produit');
define('BOX_HEADING_PRODUCT_INFO_CONFIGURATION','Information de produit');

define('BOX_HEADING_ADMIN_MENU_BUILDER', 'Admin Menu Builder');
define('BOX_HEADING_ADMIN_MENU', 'Admin Menu System');
define('BOX_HEADING_DESIGN_LAYOUT', 'Layout');
define('BOX_HEADING_DESIGN_PRODUCT_LISTING', 'Product Listing');
define('BOX_HEADING_DESIGN_HOME_PAGE', 'Home Page');
define('BOX_HEADING_DESIGN_INDEX_PAGE', 'Index Page');
define('BOX_HEADING_DESIGN_PRODUCT_PAGE', 'Product Page');

define('BOX_TEMPLATE_NAVMENU','Navigation Manager');
define('BOX_HEADING_BRANDING_MANAGER','Branding Manager');


// VJ Links Manager v1.00 begin
// links manager box text in includes/boxes/links.php
define('BOX_HEADING_LINKS', 'Liens Manager');
define('BOX_LINKS_LINKS', 'Liens');
define('BOX_LINKS_LINK_CATEGORIES', 'Liens Categories');
define('BOX_LINKS_LINKS_CONTACT', 'Liens Contact');
// VJ Links Manager v1.00 end

// javascript messages
define('JS_ERROR', 'Des erreurs sont survenues durant le traitement de votre formulaire!\nMerci de faire les corrections suivantes:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Le nouveau attribut produit nécessite un prix\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Le nouveau attribut produit nécessite un pr&eacute;fixe de prix\n');

define('JS_PRODUCTS_NAME', '*  Le nouveau produit nécessite un nom\n');
define('JS_PRODUCTS_DESCRIPTION', '* Le nouveau nécessite une description\n');
define('JS_PRODUCTS_PRICE', '* Le nouveau produit nécessite un prix\n');
define('JS_PRODUCTS_WEIGHT', '* Le nouveau produit nécessite un poids\n');
define('JS_PRODUCTS_QUANTITY', '* Le nouveau produit nécessite une quantité\n');
define('JS_PRODUCTS_MODEL', '* Le nouveau produit nécessite un modèle\n');
define('JS_PRODUCTS_IMAGE', '* Le nouveau produit nécessite une image\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Un nouveau prix pour ce produit doit être fixé\n');

define('JS_GENDER', '* La valeur de \'Genre\' doit être choisie.\n');
define('JS_FIRST_NAME', '* L\'entrée \'Prénom\' doit avoir au moins ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caractères.\n');
define('JS_LAST_NAME', '* L\'entr&eacute;e \'Nom\' doit avoir au moins ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caractères.\n');
define('JS_DOB', '* L\'entrée \'Date de naissance\' doit avoir la forme: xx/xx/xxxx (mois/date/année).\n');
define('JS_EMAIL_ADDRESS', '* L\'entrée \'Adresse électronique\' doit avoir au moins ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caractères.\n');
define('JS_ADDRESS', '* L\'entrée \'Adresse\' doit avoir au moins ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caractères.\n');
define('JS_POST_CODE', '* L\'entrée \'Code postal\' doit avoir au moins ' . ENTRY_POSTCODE_MIN_LENGTH . ' caractères.\n');
define('JS_CITY', '* L\'entrée \'Ville\' doit avoir au moins ' . ENTRY_CITY_MIN_LENGTH . ' caractères.\n');
define('JS_STATE', '* L\'entrée \'Etat\' doit avoir été choisie.\n');
define('JS_STATE_SELECT', '-- Choisissez ci-dessus --');
define('JS_ZONE', '* L\'entrée \'Etat\' doit être choisie parmi la liste pour ce pays.');
define('JS_COUNTRY', '* La valeur \'Pays\' doit être choisie.\n');
define('JS_TELEPHONE', '* L\'entr&eacute;e \'Numéro de téléphone\' doit avoir au moins ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caractères.\n');
define('JS_PASSWORD', '* Les entrées \'Mot de passe\' et \'Confirmation\' doivent avoir au moins ' . ENTRY_PASSWORD_MIN_LENGTH . ' caractères.\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Le numéro de commande %s n\'existe pas!');
/* User Friendly Admin Menu */
define('CATALOG_CATEGORIES', 'Cat&eacute;gories');
define('CATALOG_ATTRIBUTES', 'Attributs Produits');
define('CATALOG_REVIEWS', 'Critiques');
define('CATALOG_SPECIALS', 'Promotions');
define('CATALOG_EXPECTED', 'Produits en Attente');
define('REPORTS_PRODUCTS_VIEWED', 'Produits Visit&eacute;s');
define('REPORTS_PRODUCTS_PURCHASED', 'Produits Achet&eacute;s');
define('TOOLS_FILE_MANAGER', 'Gestionnaire de Fichiers');
define('TOOLS_CACHE', 'Controle du cache');
define('TOOLS_DEFINE_LANGUAGES', 'D&eacute;finir une Langue');
define('TOOLS_EMAIL', 'Envoyer un Email aux clients');
define('TOOLS_NEWSLETTER', 'Newsletters');
define('TOOLS_SERVER_INFO', 'Infos Serveur');
define('TOOLS_WHOS_ONLINE', 'Qui est en ligne');
define('BOX_HEADING_GV', 'Bons d\'achat/r&eacute;duction');
define('GV_COUPON_ADMIN', '&#x2022; Bon de R&eacute;duction');
define('GV_EMAIL', '&#x2022; Envoi de Bons d\'achat');
define('GV_QUEUE', '&#x2022; Bons d\'achat utilis&eacute;s');
define('GV_SENT', '&#x2022; Bons d\'achat envoy&eacute;s');
define('BOX_GV_SENT', 'Gift Voucher\'s Sent');
/* User Friedly Admin Menu */

define('CATEGORY_PERSONAL', 'Donn&eacute;es personnelles');
define('CATEGORY_ADDRESS', 'Adresse');
define('CATEGORY_CONTACT', 'Contact');
define('CATEGORY_COMPANY', 'Soci&eacute;t&eacute;');
define('CATEGORY_OPTIONS', 'Options');
define('CATEGORY_PASSWORD', 'Mot de passe');

define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Genre:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">requis</span>');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Pr&eacute;nom:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caract.</span>');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nom:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caract.</span>');
define('ENTRY_LAST_NAME_TEXT', '*');

define('ENTRY_DATE_OF_BIRTH', 'Date de naissance:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ex. 03/02/1961)</span>');
define('ENTRY_EMAIL_ADDRESS', 'Adresse &eacute;lectronique:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caract.</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">L\'adresse &eacute;lectronique ne semble pas &ecirc;tre valide!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Cette adresse &eacute;lectronique existe d&eacute;j&agrave;!</span>');
define('ENTRY_COMPANY', 'Nom de la soci&eacute;t&eacute;');
define('ENTRY_STREET_ADDRESS', 'Adresse:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caract.</span>');
define('ENTRY_SUBURB', 'Compl&eacute;ment adresse:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_POST_CODE', 'Code postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_POSTCODE_MIN_LENGTH . ' caract.</span>');
define('ENTRY_CITY', 'Ville:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_CITY_MIN_LENGTH . ' caract.</span>');
define('ENTRY_STATE', 'Etat:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">required</span>');
define('ENTRY_COUNTRY', 'Pays:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Num&eacute;ro de t&eacute;l&eacute;phone:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min. ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caract.</span>');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Num&eacute;ro de fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Bulletin d\'informations:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'Abonn&eacute;');
define('ENTRY_NEWSLETTER_NO', 'D&eacute;sabonn&eacute;');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Password:');
define('ENTRY_PASSWORD_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'The Password Confirmation must match your Password.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Password Confirmation:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Current Password:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Your Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW', 'New Password:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Your new Password must contain a minimum of ' . ENTRY_PASSWORD_MIN_LENGTH . ' characters.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'The Password Confirmation must match your new Password.');
define('PASSWORD_HIDDEN', '--HIDDEN--');

define('FORM_REQUIRED_INFORMATION', '* L\'information requise');
define('CATEGORY_ORDER_DETAILS', 'Groupes de client');
define('ENTRY_CURRENCY', 'Devise de client');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Envoyer un courrier &eacute;lectronique');
define('IMAGE_BACK', 'Retour');
define('IMAGE_BACKUP', 'Sauvegarde');
define('IMAGE_CANCEL', 'Annuler');
define('IMAGE_BUTTON_CONTINUE', 'Continue');
define('IMAGE_CONFIRM', 'Confirmer');
define('IMAGE_COPY', 'Copier');
define('IMAGE_COPY_TO', 'Copier vers');
define('IMAGE_DETAILS', 'D&eacute;tails');
define('IMAGE_DELETE', 'Supprimer');
define('IMAGE_EDIT', 'Editer');
define('IMAGE_EDIT_STATUS', 'Edit Order Status');
define('IMAGE_EDIT_ORDER', 'Edit Order');
define('IMAGE_EDIT_LANG_DEFINE', 'Edit Language Defines');
define('IMAGE_EMAIL', 'Courrier &eacute;lectronique');
define('IMAGE_FILE_MANAGER', 'Gestionnaire de fichiers');
define('IMAGE_ICON_STATUS_GREEN', 'Actif');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Activer');
define('IMAGE_ICON_STATUS_RED', 'Inactif');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'D&eacute;sactiver');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Ins&eacute;rer');
define('IMAGE_LOCK', 'V&eacute;rouiller');
define('IMAGE_MODULE_INSTALL', 'Installez le module');
define('IMAGE_MODULE_REMOVE', 'Supprimer le module');
define('IMAGE_MOVE', 'D&eacute;placer');
define('IMAGE_NEW_BANNER', 'Nouvelle banni&egrave;re');
define('IMAGE_NEW_CATEGORY', 'Nouvelle cat&eacute;gorie');
define('IMAGE_NEW_COUNTRY', 'Nouveau pays');
define('IMAGE_NEW_CURRENCY', 'Nouvelle devises');
define('IMAGE_NEW_FILE', 'Nouveau fichier');
define('IMAGE_NEW_FOLDER', 'Nouveau dossier');
define('IMAGE_NEW_LANGUAGE', 'Nouvelle Langue');
define('IMAGE_NEW_NEWSLETTER', 'Nouveau bulletin d\'informations');
define('IMAGE_NEW_PRODUCT', 'Nouveau Produit');
define('IMAGE_NEW_SALE', 'Nouvelle vente');
define('IMAGE_NEW_TAX_CLASS', 'Nouvelle classe fiscale');
define('IMAGE_NEW_TAX_RATE', 'Nouveau taux fiscal');
define('IMAGE_NEW_TAX_ZONE', 'Nouvelle zone fiscale');
define('IMAGE_NEW_ZONE', 'Nouvelle zone');
define('IMAGE_ORDERS', 'Commandes');
define('IMAGE_ORDERS_INVOICE', 'Facture');
define('IMAGE_ORDERS_PACKINGSLIP', 'Emballage');
define('IMAGE_PREVIEW', 'Pr&eacute;visualiser');
define('IMAGE_RESTORE', 'Restaurer');
define('IMAGE_RESET', 'R&eacute;initialiser');
define('IMAGE_SAVE', 'Sauvegarder');
define('IMAGE_SEARCH', 'rechercher');
define('IMAGE_SELECT', 'Choisir');
define('IMAGE_SEND', 'Envoyer');
define('IMAGE_SEND_EMAIL', 'Envoyer un courrier &eacute;lectronique');
define('IMAGE_UNLOCK', 'D&eacute;verrouiller');
define('IMAGE_UPDATE', 'Mettre &agrave; jour');
define('IMAGE_UPDATE_CURRENCIES', 'Mettre &agrave; jour le taux de change');
define('IMAGE_UPLOAD', 'Transf&eacute;rer');

define('ICON_CROSS', 'Faux');
define('ICON_CURRENT_FOLDER', 'Dossier courant');
define('ICON_DELETE', 'Supprimer');
//added for quick product edit DMG
define('ICON_EDIT','Editer');
define('ICON_ERROR', 'Erreur');
define('ICON_FILE', 'Fichier');
define('ICON_FILE_DOWNLOAD', 'T&eacute;l&eacute;charger');
define('ICON_FOLDER', 'Dossier');
define('ICON_LOCKED', 'Verrouill&eacute;');
define('ICON_PREVIOUS_LEVEL', 'Niveau pr&eacute;c&eacute;dent');
define('ICON_PREVIEW', 'Pr&eacute;visualiser');
define('ICON_STATISTICS', 'Statistiques');
define('ICON_SUCCESS', 'Succ&egrave;s');
define('ICON_TICK', 'Vrai');
define('ICON_UNLOCKED', 'D&eacute;verrouill&eacute;');
define('ICON_WARNING', 'Attention');

// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Page %s sur %d');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> banni&egrave;res)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> pays)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> clients)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> devises)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> langues)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> fabricants)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> bulletin d\'informations)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> commandes)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> statut commandes)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> produits)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> produits en attente)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> critiques produit)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> ventes)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> produits en promotion)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> classes fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> zones fiscales)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> taux fiscal)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Affiche <b>%d</b> &agrave; <b>%d</b> (sur <b>%d</b> zones)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');

define('TEXT_DEFAULT', 'd&eacute;faut');
define('TEXT_SET_DEFAULT', 'mettre par d&eacute;faut');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Requis</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Erreur: Il n\'y a actuellement aucune devise par d&eacute;faut. Veuillez en choisir une: Outils administration->Localisation->Devises');


define('TEXT_NONE', '--aucun--');
define('TEXT_TOP', 'Haut');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Erreur: le chemin cible n\'existe pas.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Erreur: Impossible d\'&eacute;crire dans le r&eacute;pertoire cible.');
define('ERROR_FILE_NOT_SAVED', 'Erreur : Téléchargement de dossier non sauvé.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Erreur: type de fichier transf&eacute;r&eacute; non-permis.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Succès : Le téléchargement de dossier a économisé avec succès.');
define('WARNING_NO_FILE_UPLOADED', 'Avertissement : Aucun dossier n\'a téléchargé.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Avertissement : Des téléchargements de dossier sont désactivés dans le fichier de configuration de php.ini.');
define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>TEP ERROR:</small> Cannot send the email through the specified SMTP server. Please check your php.ini setting and correct the SMTP server if necessary.</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: ' . DIR_FS_CATALOG . 'install. Please remove this directory for security reasons.');
define('WARNING_UPGRADES_DIRECTORY_EXISTS', 'Warning: Upgrades directory exists at: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/upgrades. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: I am able to write to the configuration file: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_CONFIG_FILE_WRITEABLE_CATALOG', 'Warning: I am able to write to the configuration file: ' . DIR_FS_CATALOG . 'includes/configure.php. This is a potential security risk - please set the right user permissions on this file.');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Warning: The sessions directory does not exist: ' . tep_session_save_path() . '. Sessions will not work until this directory is created.');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warning: I am not able to write to the sessions directory: ' . tep_session_save_path() . '. Sessions will not work until the right user permissions are set.');
define('WARNING_SESSION_AUTO_START', 'Warning: session.auto_start is enabled - please disable this php feature in php.ini and restart the web server.');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warning: The downloadable products directory does not exist: ' . DIR_FS_CATALOG . 'download/' . '. Downloadable products will not work until this directory is valid.');
define('WARNING_ENCRYPT_FILE_MISSING', 'Warning: The Encryption key file is missing.');
define('WARNING_TMP_DIRECTORY_NON_EXISTENT', 'Warning: The tmp/ is not writable: ' . DIR_FS_CATALOG . 'tmp/' . '. The page cacheing will not work until this directory is writable.');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'REMARQUER: Le site Internet a baissé actuellement Pour la Maintenance au public.');
define('BOX_CATALOG_XSELL_PRODUCTS', 'Produits en vente crois&eacute;e');

define('TEXT_CSCAL_ERROR_CARD_TYPE_MISMATCH', 'Error: 01 The Credit Card number does not match the Card Type:');
define('TEXT_CCVAL_ERROR_INVALID_MONTH', 'Error: 02 The expiry date Motnth entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_YEAR', 'Error: 03 The expiry date year entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Error: 04 The expiry date entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Error: 05 The credit card number entered is invalid. Please check the number for misstyped numbers and try again.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Error: 06 The first four digits of the number entered are: %s If that number is correct, we do not accept that type of credit card.If it is wrong, please try again.');
define('TEXT_CCVAL_ERROR_NOT_ACCEPTED', 'Error: 07 The credit card number you have entered appears to be a %s card. Unfortunately at this time we do not accept %s as payment.');
define('TEXT_CCVAL_ERROR_BLACKLIST', 'Error: 08 We cannot accept your card as it is blacklisted, if you feel you have recieved this message in error please contact your card issuer.');
define('TEXT_CCVAL_ERROR_SHORT', 'Error: 09 You have not entered the correct amount of digits. Please ensure you have entered all of the long number displayed on the front of your card');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Error: 10 The CCV/CVV/CID number entered is the incorrect length. Please try again.');

define('IMAGE_BUTTON_PRINT_ORDER', 'Imprimer la commande');
define('TEXT_PROCESS','Process');
// BOF: Lango Added for print order MOD
define('IMAGE_BUTTON_PRINT', 'Imprimer');
// EOF: Lango Added for print order MOD


// BOF: Lango Added for template MOD
// WebMakers.com Added: Attribute Sorter, Copier and Catalog additions
require(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');

//DWD Modify: Information Page Unlimited 1.1f - PT
  define('BOX_HEADING_INFORMATION', 'Directeur content');
  define('BOX_INFORMATION_MANAGER', 'Directeur d\'information');
//DWD Modify End

include('includes/languages/order_edit_french.php');

 define('BOX_TITLE_CRELOADED', 'CRE Loaded Project');
 define('LINK_CRE_FORUMS','CRE Loaded Forums');
 define('LINK_CRW_SUPPORT','Support Technique');
// General Release Edition
 define('LINK_SF_CRELOADED','Source Forge Home');
 define('LINK_SF_BUGTRACKER','Bug Tracker');
 define('LINK_SF_SUPPORT','Support Request');
 define('LINK_SF_TASK','Task Tracker');
 define('LINK_SF_CVS','Browse CVS');
 define('LINK_CRE_FILES','CRE T&eacute;l&eacute;chargement');
 define('LINK_SF_FEATURE','Feature Request');
//included for Backup mySQL (courtesy Zen-Cart Team) DMG
 define('BOX_TOOLS_MYSQL_BACKUP','Sauvegarde mySQL');
define('BOX_B2BSETTINGS_STORE_SETTINGS','Store Settings');
define('BOX_B2BSETTINGS_CUSTOMERS_GROUPS','Customer Groups');

// Included for Events Calendar 2.0 DMG
define('IMAGE_NEW_EVENT', 'New Event');

// VJ member approval added
define('BOX_CUSTOMERS_APPROVAL', 'Waiting Approval');

//DMG FAQ System 2.1
  define('BOX_HEADING_FAQ', 'FAQ System');
  define('BOX_FAQ_MANAGER', 'FAQ Manager');
  define('BOX_FAQ_CATEGORIES', 'FAQ Categories');
  define('BOX_FAQ_VIEW', 'FAQ View');
  define('BOX_FAQ_VIEW_ALL', 'FAQ View All');
  
  
// DMG Article Manager
define('BOX_HEADING_ARTICLES', 'Directeur D\'Article');
define('BOX_TOPICS_ARTICLES', 'Matières/Articles');
define('BOX_ARTICLES_CONFIG', 'Configuration');
define('BOX_ARTICLES_AUTHORS', 'Auteurs');
define('BOX_ARTICLES_REVIEWS', 'Article Revues');
define('BOX_ARTICLES_XSELL', 'Vente En travers Articles');
define('IMAGE_NEW_TOPIC', 'Nouvelle Matière');
define('IMAGE_NEW_ARTICLE', 'Nouvelle Article');
define('TEXT_DISPLAY_NUMBER_OF_AUTHORS', 'Montrer <b>%d</b> to <b>%d</b> (of <b>%d</b> auteurs)');
define('IMAGE_NEW_AUTHOR', 'Nouvel Auteur');
define('TEXT_WARNING_NO_AUTHORS', 'AVERTISSEMENT : Les auteurs vides Table!&nbsp;&nbsp;You DOIVENT ajouter au moins un auteur avant que vous puissiez ajouter tous les articles');

// Article Statistics Report DMG
  define('BOX_REPORTS_ARTICLES_VIEWED', 'Articles Vus Supérieurs');
  define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Montrer <b>%d</b> to <b>%d</b> (of <b>%d</b> produits)');
  
// DMG :  Mulitple Products Manager

define('BOX_CATALOG_CATEGORIES_PRODUCTS_MULTI', 'Chef de produit multi');


// DMG : Specials by Category

define('BOX_CATALOG_SPECIALSBYCAT','Specials par Category');

// START: Product Extra Fields DMG
  define('BOX_CATALOG_PRODUCTS_EXTRA_FIELDS', 'Product Extra Fields');
// END: Product Extra Fields DMG

// Contact US Email Subject DMG
define('BOX_TOOLS_EMAIL_SUBJECTS', 'Email Subjects');
define('TEXT_DISPLAY_NUMBER_OF_EMAIL_SUBJECTS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> email subjects)');

define('BOX_REPORTS_EXPLAIN','osC Explain Queries');
 
//define('BOX_HEADING_CRYPT', 'Encryption and Decryption'); 
define('BOX_HEADING_CRYPT', 'Encrypt & Decrypt');
define('BOX_CRYPT_CONFIGURATION', 'Configuration'); 
define('BOX_CRYPT_TEST', 'Test'); 
define('BOX_CRYPT_CC_DATA', 'CC Data'); 
define('BOX_CRYPT_CONVERT', 'Convert CC Data');
define('BOX_CRYPT_PURGE', 'Purge CC Data');
define('BOX_CRYPT_UPDATE', 'Update CC Data');
define('BOX_CRYPT_KEYS', 'Manage Keys');
define('BOX_CRYPT_HELP', 'Help');

define('IMAGE_CONVERT', 'Convert info to new key');
define('IMAGE_ENCRYPT', 'Encrypt data');
define('IMAGE_DECRYPT', 'Decrypt data');
define('IMAGE_RETURN', 'Return to main');
define('IMAGE_EDIT_KEY', 'Edit Key File');
define('IMAGE_CREATE', 'Create key');
define('IMAGE_HELP', 'Help');
define('IMAGE_RUN', 'Run');
  define('BOX_DATA_EASYPOPULATE_BASIC', 'Easy Populate Basic');
  define('BOX_DATA_EASYPOPULATE', 'Easy Populate Advance');
  define('BOX_DATA_EASYPOPULATE_EXPORT', 'EPA Export');
  define('BOX_DATA_EASYPOPULATE_IMPORT', 'EPA Import');
  define('BOX_DATA_EASYPOPULATE_BASIC_EXPORT', 'EPB Export');
  define('BOX_DATA_EASYPOPULATE_BASIC_IMPORT', 'EPB Import');
  define('BOX_DATA_EASYPOPULATE_OPTIONS_EXPORT', 'Options Export');
  define('BOX_DATA_EASYPOPULATE_OPTIONS_IMPORT', 'Options Import');
  define('BOX_HEADING_DATA', 'Data Manager');
  define('BOX_DATA', 'Data Feeds');
  define('BOX_DATA_ADMIN', 'Data Configure');
  define('BOX_HEADING_FEEDERS', 'Feeder Systems');
  define('BOX_DATA_HELP', 'Data Help');
  define('BOX_FEEDERS_AMAZON', 'Amazon Marketplace');
  define('BOX_FEEDERS_BIZRATE', 'Biz Rate');
  define('BOX_FEEDERS_FROOGLE', 'Froogle');
  define('BOX_FEEDERS_MYSIMON', 'MySimon');
  define('BOX_FEEDERS_PRICE_GRABBER', 'Price Grabber');
  define('BOX_FEEDERS_SHOPPING', 'Shopping.com');
  define('BOX_FEEDERS_YAHOO', 'Yahoo');

define('BOX_HEADING_DOC', 'Documentation');
define('BOX_DOC_ADMIN', 'Admin');
define('BOX_DOC_CAT', 'Catalog');
define('BOX_DOC_MISC', 'Miscellaneous');
// Eversun mod for sppc and qty price breaks
define('ENTRY_CUSTOMERS_GROUP_NAME', 'Groupe des prix de client :');
define('BOX_CUSTOMERS_GROUPS', 'Customers Groups');
define('ENTRY_COMPANY_TAX_ID', 'Company\'s tax id number:');
define('ENTRY_COMPANY_TAX_ID_ERROR', '<span class="errorText"></span>');
define('ENTRY_CUSTOMERS_GROUP_REQUEST_AUTHENTICATION', 'Switch off alert for authentication:');
define('ENTRY_CUSTOMERS_GROUP_RA_NO', 'Alert off');
define('ENTRY_CUSTOMERS_GROUP_RA_YES', 'Alert on');
define('ENTRY_CUSTOMERS_GROUP_RA_ERROR', '');
// Eversun mod end for sppc and qty price breaks
define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date("Y") . '&nbsp;<a target="_blank" href="http://www.creloaded.com/">Chain Reaction Ecommerce, Inc.</a>, portions &copy; 2003 <a target="_blank" href="http://www.oscommerce.com">osCommerce, Inc.</a><br>Powered by <a target="_blank" href="http://www.oscommerce.com">osCommerce</a> Supercharged by <a target="_blank" href="http://www.creloaded.com">CRE Loaded Team</a>');
// VJ infosystem begin
define('BOX_HEADING_PAGE_MANAGER', 'Page Manager');
define('BOX_PAGES', 'Pages');
define('BOX_PAGES_CATEGORIES', 'Categories');
// VJ infosystem end

define('BOX_SHIPWIRE', 'ShipWire');
define('BOX_MODULES_CHECKOUT_SUCCESS', 'Checkout Success');
define('BOX_MODULES_ADDONS', 'Ajoutez-Ons');

define('BOX_HEADING_TECH_SUPPORT','Tech Support');
define('BOX_HEADING_INSTALL_EXPLAIN','Explain Quires');
define('IMAGE_BUTTON_BACK','Back');
define('IMAGE_BUTTON_CONFIRM','Confirmez');

if(file_exists('includes/languages/french_newsdesk.php')) {
include('includes/languages/french_newsdesk.php');
include('includes/languages/french_faqdesk.php');
}

// labels for Tools>Cache Control
define('TEXT_CACHE_CATEGORIES', 'Categories Box');
define('TEXT_CACHE_CATEGORIES1', 'Categories Box 1');
define('TEXT_CACHE_CATEGORIES2', 'Categories Box 2');
define('TEXT_CACHE_CATEGORIES3', 'Categories Box 3');
define('TEXT_CACHE_CATEGORIES4', 'Categories Box 4');
define('TEXT_CACHE_CATEGORIES5', 'Categories Box 5');
define('TEXT_CACHE_ALLPROD', 'All Produces');
define('TEXT_CACHE_ALLMANUF', 'All Manufactures');
define('TEXT_CACHE_ALLCATS', 'All Categories');
define('TEXT_CACHE_MANUFACTURERS', 'Manufacturers Box');
define('TEXT_CACHE_ALSO_PURCHASED', 'Also Purchased Module');
define('TEXT_CACHE_COOLMENU', 'Cool Menu');

define('NON_TTF_FONT_ERROR','Non-TTF font size must be 1,2,3,4 or 5');
define('SETLEGEND_ERROR','Error: SetLegend argument must be an array');

define('UNABLE_TO_OPEN_ERROR','Unable to open ');
define('UNABLE_TO_OPEN_GIF_ERROR',' as a GIF');
define('UNABLE_TO_OPEN_PNG_ERROR',' as a PNG');
define('UNABLE_TO_OPEN_JPG_ERROR',' as a JPG');
define('SELECT_IMAGE_ERROR','Please select wbmp,gif,jpg, or png for image type!');
define('SELECT_IMAGE_TYPE_ERROR','Please select an image type!');
define('NOT_ACCEPTABLE_PLOT_TYPE_ERROR',' not an acceptable plot type');
define('UNKNOWN_CHART_TYPE_ERROR','ERROR: unknown chart type');
define('LOG_PLOTS_DATA_GREATER_ERROR','Log plots need data greater than 0');
define('ERROR_IN_DATA','Error in Data - max not gt min');
define('FATAL_ERROR','Fatal error');
define('THINBARLINES_DATA_TYPE_ERROR','Data Type for ThinBarLines must be data-data');
define('BAR_PLOTS_DATA_TYPE_ERROR','Bar plots must be text-data: use function SetDataType(\'text-data\')');
define('NO_IMAGE_DEFINED_DRAWGRAPH_ERROR','No Image Defined: DrawGraph');
define('NO_ARRAY_OF_DATA_IN_ERROR','No array of data in ');

define('SESSION_FILE_OPEN_ERROR_1','Could not open session file (');
define('SESSION_FILE_OPEN_ERROR_2',').');
define('SESSION_FILE_WRITE_ERROR_1','Could not write session file (');
define('SESSION_FILE_WRITE_ERROR_2',').');
define('CACHING_METHOD_ERROR_1','Caching method ');
define('CACHING_METHOD_ERROR_2',' not implemented.');
define('INITIALIZE_SESSION_MODULE_ERROR','Failed to initialize session module.');
define('SESSION_NOT_SAVED_ERROR','Session could not be saved.');
define('SESSION_NOT_CLOSED_ERROR','Session could not be closed.');
define('SESSION_NOT_STARTED_ERROR','Session could not be started.');


define('CANNOT_COPY_PRODUCT_ERROR_1','<b>WARNING: Cannot copy from Product ID #');
define('CANNOT_COPY_PRODUCT_ERROR_2',' to Product ID # ');
define('CANNOT_COPY_PRODUCT_ERROR_3',' ... No copy was made</b>');
define('NO_ATTRIBUTES_COPY_ERROR_1','<b>WARNING: No Attributes to copy from Product ID #');
define('NO_ATTRIBUTES_COPY_ERROR_2',' for: ');
define('NO_ATTRIBUTES_COPY_ERROR_3',' ... No copy was made</b>');
define('NO_PRODUCT_ERROR_1','<b>WARNING: There is no Product ID #');
define('NO_PRODUCT_ERROR_2',' ... No copy was made</b>');


define('MCRYPT_ALGORITHMS_AND_MODES','Mcrypt Algorithms and Modes');
define('MCRYPT_ALGORITHM','Algorithm');
define('MCRYPT_Status','Status');
define('MCRYPT_OK','OK');
define('MCRYPT_NOT_OK','NOT OK');
define('MCRYPT_NOT_TESTED','NOT TESTED');
define('MCRYPT_MAXIMUM_KEY_SIZES_ALLOWED','Maximum Key Sizes Allowed');
define('MCRYPT_MAXIMUM_KEY_SIZE','Maximum Key Size');
define('MCRYPT_KEY_TEXT','this is a very long key, even too long for the cipher');
define('MCRYPT_PLAIN_TEXT','very important data');

define('DATABASE_TEP_DB_ERROR','[TEP STOP]');

define('CANNOT_CHANGE_THE_MODE_OF_FILE','Cannot change the mode of file');
define('FAILED_TO_OPEN_FILE','Failed to open file ');
define('CANNOT_WRITE_TO_FILE','Cannot write to file ');

define('UNABLE_TO_DETERMINE_PAGE_LINK','<b>Error!</b></font><br><br><b>Unable to determine the page link!<br><br>Function used:<br><br>');
define('UNABLE_TO_DETERMINE_CONNECTION_METHOD_ON_PAGE_LINK','<b>Error!</b></font><br><br><b>Unable to determine connection method on a link!<br><br>Known methods: NONSSL SSL<br><br>Function used:<br><br>');


define('SUPPORT_DESK','Support Desk');

define('FRAUDSCREENCLIENT_AFS','AFS');
define('FRAUDSCREENCLIENT_QUERY_RESULT','query result');
define('FRAUDSCREENCLIENT_SERVER_UNAVAILABLE','Algozone Fraud Screen Server currently unavailable. Please try again later.');
define('FRAUDSCREENCLIENT_AFS_INPUTS','AFS Inputs');
define('FRAUDSCREENCLIENT_INPUT','input');
define('FRAUDSCREENCLIENT_INVALID_INPUT','invalid input');
define('FRAUDSCREENCLIENT_MISSPELLED_FIELD','- perhaps misspelled field?');
define('FRAUDSCREENCLIENT_AFS_USING_CURL','AFS using curl');
define('FRAUDSCREENCLIENT_AFS_CURL_PARAMS','AFS curl params');
define('FRAUDSCREENCLIENT_AFS_CURL_NOT_SUPPORT','<br>error: this version of curl does not support HTTPS try build curl with SSL or specify');
define('FRAUDSCREENCLIENT_AFS_RECEIVED_ERROR_MESSAGE_1','Received error message');
define('FRAUDSCREENCLIENT_AFS_RECEIVED_ERROR_MESSAGE_2','from curl');
define('FRAUDSCREENCLIENT_AFS_CURL_PROXY','<p>using curl thru proxy');
define('FRAUDSCREENCLIENT_AFS_USING_FSOCKOPEN','<p><b>AFS using fsockopen</b>');
define('FRAUDSCREENCLIENT_AFS_SOCKET_PARAM','AFS socket url param');
define('FRAUDSCREENCLIENT_AFS_FSOCKOPEN_PROXY','<p><b>AFS using fsockopen proxy<b><br>');
define('FRAUDSCREENCLIENT_AFS_PROXY_PORT','<br>error: you need to provide the proxy port number to use the proxy port provided');
define('FRAUDSCREENCLIENT_AFS_INSTALL_CURL','<br>error: you need to install curl if you want secure HTTPS or specify the variable to be');
define('FRAUDSCREENCLIENT_AFS_QUERY_RESULTS','<p><b>AFS query results: </b>');
define('FRAUDSCREENCLIENT_AFS_OUTPUT','output');
define('MAP_MSG','<p>Courtesy of the U.S. Census Bureau\'s TIGER Mapping Service');
define('ATTRIBUTES_DISPLAY_MSG','**Discounts may vary based on selected options');

##################### 05/07/2006 End  ####################
##################### 06/07/2006 Start  ####################

define("FEATURE_NOT_PRESENT_TEXT",'This feature has not yet been added, It is a work in progress');


define('INSTALL_EXPLAIN_TXT_1','Install (and Uninstall) Database Settings script for osC-Explain - by Chemo');
define('INSTALL_EXPLAIN_TXT_2','<p><b>Install option selected...running queries</b></p>');
define('INSTALL_EXPLAIN_TXT_3','<p>STEP 1 => Add configuration group</p>');
define('INSTALL_EXPLAIN_TXT_4','<p>Added the configuration group ');
define('INSTALL_EXPLAIN_TXT_5','successfully...adding configuration values</p>');
define('INSTALL_EXPLAIN_TXT_6','<p>STEP 2 => Add configuration settings</p>');
define('INSTALL_EXPLAIN_TXT_7','<blockquote>Success...</blockquote>');
define('INSTALL_EXPLAIN_TXT_8','<p>Added the configuration settings successfully...adding the \'explain_queries\' table</p>');
define('INSTALL_EXPLAIN_TXT_9','<p>STEP 3 => Creating explain_queries table</p>');
define('INSTALL_EXPLAIN_TXT_10','<blockquote>Successfully created the table.</blockquote>');
define('INSTALL_EXPLAIN_TXT_11','<p><b>All done!  You should delete this script from the server...or not...you\'re choice.</b></p>');

define('INSTALL_EXPLAIN_TXT_12','<p><b>Uninstall optin selected...running queries</b></p><p>STEP 1 => Delete the configuration group from configuration_group table</p>');

define('INSTALL_EXPLAIN_TXT_13','<blockquote>Deleted the configuration group successfully...removing configuration values</blockquote><p>STEP 2 => Delete configuraton values</p>');

define('INSTALL_EXPLAIN_TXT_14','<blockquote>Deleted the configuration values successfully...dropping the explain_queries table</blockquote><p>STEP 3 => Dropping explain_queries table</p>');


define('INSTALL_EXPLAIN_TXT_15','<blockquote>Table dropped successfully...analyzing tables</blockquote><p>STEP 4 => Analyzing configuration_group and configuration table</p>');

define('INSTALL_EXPLAIN_TXT_16','<blockquote>Analyze configuration_group success...</blockquote>');

define('INSTALL_EXPLAIN_TXT_17','<blockquote>Analyze configuration success...</blockquote>');

define('INSTALL_EXPLAIN_TXT_18','<blockquote>Optimize configuration_group success...</blockquote>');

define('INSTALL_EXPLAIN_TXT_19','<blockquote>Optimize configuration success...</blockquote><p><b>All done!  You should delete this script from the server...or not...you\'re choice.</b></p>');

define('INSTALL_EXPLAIN_TXT_20','<p>Welcome to the barebones osC-Explain installation script (<a href="http://forums.oscommerce.com/index.php?showuser=9196">by Chemo</a>)!</p><p>This contribution is GPL and the target audience is fellow coders, optimizers,   and knowledgeable webmasters. I encourage each of you to look over the   code and add functionality so that the rest of us can benefit as well.</p><p>There are two options for this script:</p><p><strong>INSTALL</strong></p><blockquote>  <p>This option is self explanatory :) It will add a configuration group     with the title &quot;Explain Queries&quot; and set the sort order to 99 (making     it the last listed). The script will then add values to the configuration     table that is the options for this contribution. Currently, these are     available:</p>  <ul>    <li> Global on / off</li>    <li>Enable on for specific scripts (add one or list separated by comma).       This will be handy for contribution coders since they can enable only for       their development scripts and not waste room for storing other page queries.       In addition, it will speed up the admin report if there are 1,000 rows instead       of 500,000 :)</li>    <li>Enable page exclusion for specific scripts. This is handy to exclude       certain scripts (for instance, ones already optimized) but capture the rest.</li>  </ul>  <p>The last thing this install script does is add a new table called \'explain_queries\'.    This is needed to store the data. Do not change the name since the table     name is hardcoded all over the place. Why not add a new define to filenames.php?     If there is room to trim install steps and decrease the number of file changes     I\'ll take it any day of the week and twice on Sunday. You are (hopefully)     an experienced osC developer so if you want to do define table names the standard     way edit your own files.</p></blockquote><p align="center"><strong><a href="'.$PHP_SELF.'?action=install">INSTALL</strong> THE DATABASE VALUES FOR OSC-EXPLAIN</a></p><p align="left"><strong>UNINSTALL</strong></p><blockquote>  <p align="left">Hopefully, this option is self-explanatory too :) This     will delete all the values associated with osC-Explain from the configuration_group     and configuration tables. Then it will analyze the tables to reset the     cardinality of the tables. Next, the script will drop the \'explain_queries\'     table.</p></blockquote><p align="center"><strong><a href="'.$PHP_SELF.'?action=delete">UNINSTALL</strong> THE DATABASE VALUES FOR OSC-EXPLAIN</a></p><p align="left"><strong>NOTES</strong>: By default all values are set to false.   So, once you have the files uploaded and necessary changes have been made you\'ll   have to enable it through the admin control panel. </p><blockquote>  <p align="left">Configuration -> Explain Queries -> Enable explain queries     -> true</p></blockquote>');

define('VALID_CATEGORIES_PRODUCTS_LIST','Valid Categories/Products List');
define('VALID_CATEGORIES_LIST','Valid Categories List');
define('VALID_PRODUCTS_LIST','Valid Products List');


define('CRE_LOADED_OSCOMMERCE','CRE Loaded osCommerce');
define('PASS_FORGOTTEN_FOOTER','E-Commerce Engine Copyright &copy; 2003 <a href="http://oscommerce.com" target="_blank">osCommerce</a> <br>      Supercharged by <a href="http://www.creloaded.com" target="_blank">CRE Loaded</a>');

##################### 06/07/2006 End  ####################


##################### 07/07/2006 End  ####################

define('QUICK_ATTRIBUTES_POPUP_TXT_0','Current Attributes');
define('QUICK_ATTRIBUTES_POPUP_TXT_1','Current ID#');
define('QUICK_ATTRIBUTES_POPUP_TXT_2','Model:');
define('QUICK_ATTRIBUTES_POPUP_TXT_3','NO CURRENT ATTRIBUTES ...');
define('QUICK_ATTRIBUTES_POPUP_TXT_4','CURRENT ATTRIBUTES:');
define('QUICK_ATTRIBUTES_POPUP_TXT_5','Close Window');

define('QUICK_PRODUCTS_POPUP_TXT_0','Quick Products Listing');
define('QUICK_PRODUCTS_POPUP_TXT_1','Quick Product Locator');
define('QUICK_PRODUCTS_POPUP_TXT_2','All categories:');
define('QUICK_PRODUCTS_POPUP_TXT_3','Click to:');
define('QUICK_PRODUCTS_POPUP_TXT_4','Show Attributes');

define('TREEVIEW_TXT_1','Catalog Tree');
define('TREEVIEW_TXT_2','open all');
define('TREEVIEW_TXT_3','close all');

define("ADMIN_JS_FILE_BROWSER","File Browser");
define("ADMIN_JS_INSERT_FILE","Insert File");

define("ADMIN_JS_IBROWSER_MSG_1",'<strong>net<span class="hilight">4</span>visions.com</strong> - the image browser plugin for WYSIWYG editors like FCKeditor, SPAW, tinyMCE, Xinha, and HTMLarea!</p>
              <p> <strong> <span class="hilight">i</span>Browser</strong> does upload images and supply file management functions. Images can be resized on the fly. If you need even more advanced features, have a look at <strong> <span class="hilight">i</span>Manager</strong>, another <strong>net<span class="hilight">4</span>visions.com</strong> plugin - it adds truecolor image editing functions like: resize, flip, crop, add text, gamma correct, merge into other image, and many others.</p>
              <p><strong> <span class="hilight">i</span>Browser</strong> is written and distributed under the GNU General Public License which means that its source code is freely-distributed and available to the general public.</p>
              <p>&nbsp;</p>');

define("ADMIN_JS_IBROWSER_MSG_2",'Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.Loreum ipsum edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exercitation ullamcorper suscipit. Lorem ipsum, Dolor sit amet, consectetuer adipiscing loreum ipsum edipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.');

define("ADMIN_JS_PREVIEW_PAGE","Preview page");
define("ADMIN_JS_EDITOR_CONTENTS","Editor contents:");
define("ADMIN_JS_CLOSE","Close");
define("ADMIN_JS_PRINT","Print");

define("DOCUMENT_INDEX","Document Index");

define("CUSTOMER_ZIP_CODE_VALIDATOR","Customer Zip Code Validator");
define("SEND_EMAIL_TO_ALL","Send Email to All");
define("MISMATCHED_STATE_AND_ZIPCODE","Mismatched State and Zipcode");
define("ADDRESS_BOOK_ID","Address Book ID");
define("CUSTOMER_ID","Customer ID");
define("CUSTOMER","Customer");
define("REMOVE","Remove");
define('TEXT_HEADING_INPUT_COLOR', 'Current Color');
define('TEXT_HEADING_CHANGE_COLOR', 'Change Color');
define('BOX_REPORTS_RECOVER_CART_SALES', 'Recover Carts');
define('BOX_TOOLS_RECOVER_CART', 'Recover Carts');
// Begin RMA Returns System
define('TEXT_DISPLAY_NUMBER_OF_TICKET_STATUS', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b>)');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Restock Product');
// End RMA Returns System
// Begin RMA Returns System
define('BOX_RETURNS_HEADING', 'Customer Returns');
define('BOX_RETURNS_REASONS', 'Return Reasons');
define('BOX_RETURNS_MAIN', 'Returned Products');
define('BOX_RETURNS_TEXT', 'Return Text Edit');
define('BOX_RETURNS_STATUS', 'Returns Status');
define('BOX_HEADING_REFUNDS', 'Refund Methods');
// End RMA Returns System
/*
define('TEXT_PRODUCTS_GROUP_ACCESS','Group Access');
define('CAT_GUEST', ' Guest');
define('CAT_SHOW', ' Show');
define('CAT_HIDE', ' Hide');
define('TEXT_PUSH_SAVE_OPTION','Save Options');
define('TEXT_DO_NOT_PUSH','Do not Push Type');
define('TEXT_PUSH_SUB_CATEGORIES','Push type to all sub categories');
define('TEXT_PUSH_SUB_CATEGORIES_PRODUCTS','Push type to all sub categories and products');
define('TEXT_PUSH_WARNING','Warning : may time out if this is a top level and you have a large number of products and categories');
*/
define('BOX_TOOLS_MY_SQL_MANAGER', 'MySQL Manager');
define('BOX_CRE_MARKETPLACE', 'CRE Marketplace');  
define('BOX_EDIT_HTML_INVOICE','Facture de HTML'); 
define('BOX_FEEDERS_GOOGLE', 'Google Base');
define('BOX_HEADING_DESIGN_PRODUCT_INFO','Information de produit');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Directeur de bulletin');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (par exemple 21/05/1970)');

define('TEXT_ORDER', 'Ordre');  
define('TEXT_SEARCH', 'Recherche');
define('TEXT_CREATE', 'Créez'); 
define('TEXT_IMAGE_NONEXISTENT', 'L\'image n\'existe pas sur le serveur.');    
define('VISUAL_IMAGE_NONEXISTENT', '<center>' . tep_image(DIR_WS_IMAGES . 'image_not_avail.jpg') . '</center>');
define('TEXT_POPUP_CLOSE_WINDOW','Fenêtre étroite'); 
// multi-vendor shipping
define('VENDOR_IMAGE_MAIN_CONFIGURATION', 'Placez les constantes de fournisseur');
define('VENDOR_IMAGE_MANAGE_MODULES', 'Directeur de module de fournisseur');
define('IMAGE_MANAGE', 'Contrôlez');
define('VENDOR_HEADING_TITLE', 'Directeur de module de fournisseur');
define('BOX_HEADING_VENDOR_MODULES', 'Gestion de fournisseur');
define('BOX_VENDOR_SELECT', 'Fournisseur choisi');
define('BOX_VENDOR_MODULES_SHIPPING', 'Expédition de fournisseur');
define('BOX_VENDOR_CONFIGURATION', 'Config de fournisseur');
define('BOX_CATALOG_VENDORS', 'Directeur de fournisseur');
define('BOX_HEADING_VENDORS', 'Fournisseurs');
define('BOX_VENDORS', 'Directeur de fournisseur');
define('BOX_VENDORS_REPORTS_PROD', 'Rapports de produit');
define('TEXT_DISPLAY_NUMBER_OF_VENDORS', 'Déploiement <b>%d</b> à <b>%d</b> (de <b>%d</b> fournisseurs)');
define('TEXT_CACHE_VENDORS', 'Boîte de fournisseurs');
define('BOX_VENDORS_ORDERS', 'Liste d\'ordres de fournisseurs');
define('BOX_MOVE_VENDOR_PRODS', 'Déplacez les produits entre les fournisseurs');
// multi-vendor shipping //eof

// Products Sales overtime report
define('BOX_REPORTS_PRODUCTS_SALES', 'Ventes avec le temps');
// Multi Warehouse Shipping 
define('BOX_WAREHOUSE_ZONES','Zones d\'entrepôt');
define('BOX_HEADING_MANUFACTURER_INFO' ,'Information de Manufactuer');
define('TEXT_POWERED_BY_CRE_NAG', 'Succès de mise à jour!<br><br>You\' ; Re utilisant notre logiciel chargé par CRE libre, pour enlever ce message, mise à niveau sur nos pro produits et obtenir plus de dispositifs et d\'appui !<br><br>Les pro versions vous amèneront droit de nouveau à la page %s et éviteront cette étape..');
define('ENTRY_CUSTOMERS_ACCESS_GROUP', 'Customer Access Group:');
define('ENTRY_CUSTOMERS_ALL_GROUP', ' All');
define('ENTRY_CUSTOMERS_GUEST_GROUP', ' Guest');
?>