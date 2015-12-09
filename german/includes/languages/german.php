<?php
/*
  $Id: german.php,v 2.1 2008/06/12 00:36:41 datazen Exp $

  CRE Loaded, Commerical Open Source eCommerce
  http://www.creloaded.com

  Copyright (c) 2008 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/
// look in your $PATH_LOCALE/locale directory for available locales
// or type locale -a on the server.
// Examples:
// on RedHat try 'de_DE'
// on FreeBSD try 'de_DE.ISO_8859-1'
// on Windows try 'de' or 'German'
@setlocale(LC_TIME, 'de_DE.ISO_8859-1');
//VVC Constants
define('VISUAL_VERIFY_CODE_CHARACTER_POOL', 'ABCDEFGHIJKLMNPQRSTUVWXYZabcdefghjkmnpqrstuvwxyz123456789');  //no zeros or O
define('VISUAL_VERIFY_CODE_CATEGORY', 'Überprüfen Sie Sicherheits-Code');
define('VISUAL_VERIFY_CODE_ENTRY_ERROR', 'The security code you entered did not match the one displayed.');
define('VISUAL_VERIFY_CODE_ENTRY_TEXT', '*');
define('VISUAL_VERIFY_CODE_TEXT_INSTRUCTIONS', 'Schreiben Sie Sicherheits-Code hier:');
define('VISUAL_VERIFY_CODE_BOX_IDENTIFIER', '<- Security Code');
// restricted page text
define('TEXT_INDEX_RESTRICTED_HEADING','Eingeschränkter Bereich');
define('TEXT_INDEX_RESTRICTED_TEXT','Die Seite, die Sie versuchen anzusehen, ist eingeschränkt');
// date format
define('DATE_FORMAT_SHORT', '%d.%m.%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A, %d. %B %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd.m.Y');  // this is used for strftime()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
// Return date in raw format
// $date should be in format dd/mm/yyyy
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
define('HTML_PARAMS','dir="LTR" lang="de"');
// charset for web pages and emails
define('CHARSET', 'iso-8859-1');
// page title
define('TITLE', 'Your Store Name, change in catalog/includes/languages/   your language');
// CCGV
define('BOX_INFORMATION_GV', '      Geschenk-Gutschein einl&ouml;sen      ');
define('VOUCHER_BALANCE', 'Geschenk-Gutscheinwert');
define('BOX_HEADING_GIFT_VOUCHER', 'Geschenk-Gutschein Konto');
define('GV_FAQ', 'Geschenk-Gutschein FAQ');
define('ERROR_NO_REDEEM_CODE', 'Sie haben keinen einl&ouml;se-Code eingegeben.');
define('ERROR_NO_INVALID_REDEEM_GV', 'Ung&uuml;ltiger Geschenk-Gutschein-Code');
define('TABLE_HEADING_CREDIT', 'Guthaben verf&uuml;gbar');
define('GV_HAS_VOUCHERA', 'Sie haben Guthaben in Ihrem Geschenk-Gutschein-Konto. Wenn Sie m&ouml;chten, <br>k&ouml;nnen Sie dieses Guthaben per <a class="pageResults" href="');
define('GV_HAS_VOUCHERB', '"><b>Email</b></a> an jemanden versenden');
define('ENTRY_AMOUNT_CHECK_ERROR', 'Sie haben nicht gen&uuml;gend Guthaben, um diesen Wert zu versenden.');
define('BOX_SEND_TO_FRIEND', 'Geschenk-Gutschein versenden');
define('VOUCHER_REDEEMED', 'Gutschein eingel&ouml;st');
define('CART_COUPON', 'Kupon :');
define('CART_COUPON_INFO', 'Mehr Info');
define('MODULE_ORDER_TOTAL_COUPON_TEXT_ERROR', 'Coupon Redemption');
define('ERROR_REDEEMED_AMOUNT_ZERO', '<BR>***HOWEVER:No reducion available, please see the coupon restrictions***');
define('ERROR_REDEEMED_AMOUNT', 'Glückwünsche, haben Sie zurückgekauft ');
// header text in includes/header.php
define('HEADER_TITLE_CREATE_ACCOUNT', 'Neues Konto');
define('HEADER_TITLE_MY_ACCOUNT', 'Ihr Konto');
define('HEADER_TITLE_CART_CONTENTS', 'Warenkorb');
define('HEADER_TITLE_CHECKOUT', 'Kasse');
define('HEADER_TITLE_TOP', 'Startseite');
define('HEADER_TITLE_CATALOG', 'Katalog');
define('HEADER_TITLE_LOGOFF', 'Abmelden');
define('HEADER_TITLE_LOGIN', 'Anmelden');
// footer text in includes/footer.php
define('FOOTER_TEXT_REQUESTS_SINCE', 'Zugriffe seit');
// text for gender
define('MALE', 'Herr');
define('FEMALE', 'Frau');
define('MALE_ADDRESS', 'Herr');
define('FEMALE_ADDRESS', 'Frau');
// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/aaaa');
// categories mainpage
define('BOX_HEADING_CATEGORIES_MAIN_PAGE', 'Kategorien');
// quick_find box text in includes/boxes/quick_find.php
define('BOX_SEARCH_TEXT', 'Use keywords to find the product you are looking for.');
define('BOX_SEARCH_ADVANCED_SEARCH', 'erweiterte Suche');
// reviews box text in includes/boxes/reviews.php
define('BOX_HEADING_REVIEWS', 'Bewertungen');
define('BOX_REVIEWS_WRITE_REVIEW', 'Bewerten Sie diesen Artikel!');
define('BOX_REVIEWS_NO_REVIEWS', 'Es liegen noch keine Bewertungen vor');
define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s von 5 Sternen!');
// shopping_cart box text in includes/boxes/shopping_cart.php
define('BOX_SHOPPING_CART_EMPTY', '0 Artikel');
// best_sellers box text in includes/boxes/best_sellers.php
define('BOX_HEADING_BESTSELLERS_IN', 'Bestseller<br>&nbsp;&nbsp;');
// notifications box text in includes/boxes/products_notifications.php
//define('BOX_HEADING_NOTIFICATIONS', 'Warnungen');
define('BOX_NOTIFICATIONS_NOTIFY', 'Benachrichtigen Sie mich &uuml;ber Aktuelles zu diesem Artikel <b>%s</b>');
define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Benachrichtigen Sie mich nicht mehr zu diesem Artikel <b>%s</b>');
// manufacturer box text
define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s Homepage');
define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Mehr Artikel');
// tell a friend box text in includes/boxes/tell_a_friend.php
define('BOX_TELL_A_FRIEND_TEXT', 'Tell someone you know about this product.');
// allprods modification
define('BOX_INFORMATION_ALLPRODS', 'Zeige alle Artikel');
// all categories and products modification
define ('ALL_PRODUCTS_LINK', 'All Products sorted by Categories');
// all categories and products modification
define ('ALL_PRODUCTS_MANF', 'All Products sorted by Manufacturers');
// checkout procedure text
define('CHECKOUT_BAR_DELIVERY', 'Versandinformationen');
define('CHECKOUT_BAR_PAYMENT', 'Zahlungsweise');
define('CHECKOUT_BAR_CONFIRMATION', 'Best&auml;tigung');
define('CHECKOUT_BAR_FINISHED', 'Fertig!');
// pull down default text
define('PULL_DOWN_DEFAULT', 'Bitte w&auml;hlen');
define('TYPE_BELOW', 'bitte unten eingeben');
// javascript messages
define('JS_ERROR', 'Notwendige Angaben fehlen!\n\nBitte richtig ausf&uml;llen:\n');
define('JS_REVIEW_TEXT', '* Der Text muss mindestens aus ' . REVIEW_TEXT_MIN_LENGTH . ' Buchstaben bestehen.<br>');
define('JS_REVIEW_RATING', '* Geben Sie Ihre Bewertung ein.<br>');
define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Bitte wählen Sie eine Zahlungsweise für Ihre Bestellung.<br>');
define('JS_ERROR_SUBMITTED', 'Diese Seite wurde bereits bestätigt. Betätigen Sie bitte OK und warten bis der Prozess durchgeführt wurde.');
define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Bitte wählen Sie eine Zahlungsweise für Ihre Bestellung.');
define('CATEGORY_COMPANY', 'Firmendaten');
define('CATEGORY_PERSONAL', 'Ihre pers&ouml;nlichen Daten');
define('CATEGORY_ADDRESS', 'Ihre Adresse');
define('CATEGORY_CONTACT', 'Ihre Kontaktinformationen');
define('CATEGORY_OPTIONS', 'Optionen');
define('CATEGORY_PASSWORD', 'Ihr Passwort');
define('ENTRY_COMPANY', 'Firmenname:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_COMPANY_TEXT', '');
define('ENTRY_GENDER', 'Anrede:');
define('ENTRY_GENDER_ERROR', 'Bitte das Geschlecht angeben.');
define('ENTRY_GENDER_TEXT', '*');
define('ENTRY_FIRST_NAME', 'Vorname:');
define('ENTRY_FIRST_NAME_ERROR', 'Der Vorname sollte mindestens ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_FIRST_NAME_TEXT', '*');
define('ENTRY_LAST_NAME', 'Nachname:');
define('ENTRY_LAST_NAME_ERROR', 'Der Nachname sollte mindestens ' . ENTRY_LAST_NAME_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_LAST_NAME_TEXT', '*');
define('ENTRY_DATE_OF_BIRTH', 'Geburtsdatum:');
define('ENTRY_DATE_OF_BIRTH_ERROR', 'Bitte geben Sie Ihr Geburtsdatum in folgendem Format ein: TT.MM.JJJJ (z.B. 21.05.1970)');
define('ENTRY_DATE_OF_BIRTH_TEXT', '* (z.B. 21.05.1970)');
define('ENTRY_EMAIL_ADDRESS', 'Email-Adresse:');
define('ENTRY_EMAIL_ADDRESS_ERROR', 'Die Email Adresse sollte mindestens ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_EMAIL_ADDRESS_BLANK_ERROR', 'Bitte geben Sie Ihre gültige E-Mail-Adresse.');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Die Email Adresse scheint nicht gültig zu sein - bitte korrigieren.');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Die Email Adresse ist bereits gespeichert - bitte melden Sie sich mit dieser Adresse an oder eröffnen Sie ein neues Konto mit einer anderen Adresse.');
define('ENTRY_EMAIL_CHECK_ERROR', 'Hat gewesen eine Störung, die diese eMail sendet! Treten Sie bitte mit dem Speicherinhaber in Verbindung.');
define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
define('ENTRY_STREET_ADDRESS', 'Strasse/Nr.:');
define('ENTRY_STREET_ADDRESS_ERROR', 'Die Strassenadresse sollte mindestens ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_STREET_ADDRESS_TEXT', '*');
define('ENTRY_SUBURB', 'Stadtteil:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_SUBURB_TEXT', '');
define('ENTRY_POST_CODE', 'Postleitzahl:');
define('ENTRY_POST_CODE_ERROR', 'Die Postleitzahl sollte mindestens ' . ENTRY_POSTCODE_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_POST_CODE_TEXT', '*');
define('ENTRY_CITY', 'Ort:');
define('ENTRY_CITY_ERROR', 'Die Stadt sollte mindestens ' . ENTRY_CITY_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_CITY_TEXT', '*');
define('ENTRY_STATE', 'Bundesland:');
define('ENTRY_STATE_ERROR', 'Das Bundesland sollte mindestens ' . ENTRY_STATE_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_STATE_ERROR_SELECT', 'Bitte wählen Sie ein Bundesland aus der Liste.');
define('ENTRY_STATE_TEXT', '*');
define('ENTRY_COUNTRY', 'Land:');
define('ENTRY_COUNTRY_ERROR', 'Bitte wählen Sie ein Land aus der Liste.');
define('ENTRY_COUNTRY_TEXT', '*');
define('ENTRY_TELEPHONE_NUMBER', 'Telefonnummer:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Die Telefonnummer sollte mindestens ' . ENTRY_TELEPHONE_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
define('ENTRY_FAX_NUMBER', 'Telefaxnummer:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_FAX_NUMBER_TEXT', '');
define('ENTRY_NEWSLETTER', 'Newsletter:');
define('ENTRY_NEWSLETTER_TEXT', '');
define('ENTRY_NEWSLETTER_YES', 'abonniert');
define('ENTRY_NEWSLETTER_NO', 'nicht abonniert');
define('ENTRY_NEWSLETTER_ERROR', '');
define('ENTRY_PASSWORD', 'Passwort:');
define('ENTRY_PASSWORD_ERROR', 'Das Passwort sollte mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Beide eingegebenen Passwörter müssen identisch sein.');
define('ENTRY_PASSWORD_TEXT', '*');
define('ENTRY_PASSWORD_CONFIRMATION', 'Best&auml;tigung:');
define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT', 'Current Password:');
define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
define('ENTRY_PASSWORD_CURRENT_ERROR', 'Das Passwort sollte mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_PASSWORD_NEW', 'New Password:');
define('ENTRY_PASSWORD_NEW_TEXT', '*');
define('ENTRY_PASSWORD_NEW_ERROR', 'Das neue Passwort sollte mindestens ' . ENTRY_PASSWORD_MIN_LENGTH . ' Zeichen enthalten.');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Die Passwort-Bestätigung muss mit Ihrem neuen Passwort übereinstimmen.');
define('PASSWORD_HIDDEN', '--VERSTECKT--');
define('FORM_REQUIRED_INFORMATION', '* Notwendige Eingabe');
// constants for use in tep_prev_next_display function
define('TEXT_RESULT_PAGE', 'Seiten:');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Artikel)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Bestellungen)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Meinungen)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> neuen Artikeln)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Angeboten)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', 'Zeige <b>%d</b> bis <b>%d</b> (von insgesamt <b>%d</b> Speziellen Produkten)');
define('PREVNEXT_TITLE_FIRST_PAGE', 'erste Seite');
define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'vorherige Seite');
define('PREVNEXT_TITLE_NEXT_PAGE', 'n&auml;chste Seite');
define('PREVNEXT_TITLE_LAST_PAGE', 'letzte Seite');
define('PREVNEXT_TITLE_PAGE_NO', 'Seite %d');
define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Vorhergehende %d Seiten');
define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'N&auml;chste %d Seiten');
define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;ERSTE');
define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;vorherige]');
define('PREVNEXT_BUTTON_NEXT', '[n&auml;chste&nbsp;&gt;&gt;]');
define('PREVNEXT_BUTTON_LAST', 'LETZTE&gt;&gt;');
// image alt text
define('IMAGE_BUTTON_ADD_ADDRESS', 'Neue Adresse');
define('IMAGE_BUTTON_ADDRESS_BOOK', 'Adressbuch');
define('IMAGE_BUTTON_BACK', 'Zurück');
define('IMAGE_BUTTON_BUY_NOW', 'Buy Now');
define('IMAGE_BUTTON_CHANGE_ADDRESS', 'Adresse ändern');
define('IMAGE_BUTTON_CHECKOUT', 'Kasse');
define('IMAGE_BUTTON_CONFIRM_ORDER', 'Bestellung bestätigen');
define('IMAGE_BUTTON_CONTINUE', 'Weiter');
define('IMAGE_BUTTON_CONTINUE_SHOPPING', 'Einkauf fortsetzen');
define('IMAGE_BUTTON_DELETE', 'Löschen');
define('IMAGE_BUTTON_EDIT_ACCOUNT', 'Daten ändern');
define('IMAGE_BUTTON_HISTORY', 'Bestellübersicht');
define('IMAGE_BUTTON_LOGIN', 'Anmelden');
define('IMAGE_BUTTON_IN_CART', 'In den Warenkorb');
define('IMAGE_BUTTON_NOTIFICATIONS', 'Benachrichtigungen');
define('IMAGE_BUTTON_QUICK_FIND', 'Schnellsuche');
define('IMAGE_BUTTON_REMOVE_NOTIFICATIONS', 'Benachrichtigungen löschen');
define('IMAGE_BUTTON_REVIEWS', 'Bewertungen');
define('IMAGE_BUTTON_SEARCH', 'Suchen');
define('IMAGE_BUTTON_SHIPPING_OPTIONS', 'Versandoptionen');
define('IMAGE_BUTTON_TELL_A_FRIEND', 'Weiterempfehlen');
define('IMAGE_BUTTON_UPDATE', 'Aktualisieren');
define('IMAGE_BUTTON_UPDATE_CART', 'Warenkorb aktualisieren');
define('IMAGE_BUTTON_WRITE_REVIEW', 'Bewertung schreiben');
define('SMALL_IMAGE_BUTTON_DELETE', 'Delete');
define('SMALL_IMAGE_BUTTON_EDIT', 'Edit');
define('SMALL_IMAGE_BUTTON_VIEW', 'View');
define('IMAGE_BUTTON_VIEW_CART','View Cart');
define('ICON_ARROW_RIGHT', 'Zeige mehr');
define('ICON_CART', 'In den Warenkorb');
define('ICON_ERROR', 'Fehler');
define('ICON_SUCCESS', 'Success');
define('ICON_WARNING', 'Warnung');
define('TEXT_CUSTOMER_GREETING_HEADER', 'Unsere Kunden-Begr&uuml;ssung');
define('TEXT_GREETING_PERSONAL', 'Sch&ouml;n das Sie wieder da sind <span class="greetUser">%s!</span> M&ouml;chten Sie die <a href="%s"><u>neuen Artikel</u></a> ansehen?');
define('TEXT_GREETING_PERSONAL_RELOGON', '<small>Wenn Sie nicht %s sind, melden Sie sich bitte <a href="%s"><u>hier</u></a> mit Ihrem Kundenkonto an.</small>');
define('TEXT_GREETING_GUEST', 'Herzlich Willkommen <span class="greetUser">Gast!</span> M&ouml;chten Sie sich <a href="%s"><u>anmelden</u></a>? Oder wollen Sie ein <a href="%s"><u>Kundenkonto</u></a> er&ouml;ffnen?');
define('TEXT_SORT_PRODUCTS', 'Sortierung der Artikel ');
define('TEXT_DESCENDINGLY', 'absteigend');
define('TEXT_ASCENDINGLY', 'aufsteigend');
define('TEXT_BY', ' nach ');
define('TEXT_REVIEW_BY', 'von %s');
define('TEXT_REVIEW_WORD_COUNT', '%s Worte');
define('TEXT_REVIEW_RATING', 'Bewertung: %s [%s]');
define('TEXT_REVIEW_DATE_ADDED', 'Datum hinzugef&uuml;gt: %s');
define('TEXT_NO_REVIEWS', 'Es liegen noch keine Bewertungen vor.');
define('TEXT_NO_NEW_PRODUCTS', 'Zur Zeit gibt es keine neuen Artikel.');
define('TEXT_UNKNOWN_TAX_RATE', 'Unbekannter Steuersatz');
define('TEXT_REQUIRED', '<span class="errorText">erforderlich</span>');
// Down For Maintenance
define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'ACHTUNG: Diese Seite wird wegen Wartungsarbeiten offline sein am: ');
define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'ACHTUNG: Diese Seite ist im Moment offline wegen Wartungsarbeiten.');
define('ERROR_TEP_MAIL', '<font face="Verdana, Arial" size="2" color="#ff0000"><b><small>Fehler:</small> Die Email kann nicht &uuml;ber den angegebenen SMTP-Server verschickt werden. Bitte kontrollieren Sie die Einstellungen in der php.ini Datei und f&uuml;hren Sie notwendige Korrekturen durch!</b></font>');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warnung: Das Installationverzeichnis ist noch vorhanden auf: ' . DIR_FS_CATALOG . 'install. Bitte l&ouml;schen Sie das Verzeichnis aus Gr&uuml;nden der Sicherheit!');
define('WARNING_UPGRADES_DIRECTORY_EXISTS', 'Warnung: Aufsteigenverzeichnis besteht an: ' . DIR_FS_CATALOG . 'upgrades. Bitte l&ouml;schen Sie das Verzeichnis aus Gr&uuml;nden der Sicherheit!');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warnung: osC kann in die Konfigurationsdatei schreiben: ' . dirname($_SERVER['SCRIPT_FILENAME']) . '/includes/configure.php. Das stellt ein m&ouml;gliches Sicherheitsrisiko dar - bitte korrigieren Sie die Benutzerberechtigungen zu dieser Datei!');
define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Warnung: Das Verzeichnis f&uuml;r die Sessions existiert nicht: ' . tep_session_save_path() . '. Die Sessions werden nicht funktionieren bis das Verzeichnis erstellt wurde!');
define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Warnung: osC kann nicht in das Sessions Verzeichnis schreiben: ' . tep_session_save_path() . '. Die Sessions werden nicht funktionieren bis die richtigen Benutzerberechtigungen gesetzt wurden!');
define('WARNING_SESSION_AUTO_START', 'Warnung: session.auto_start ist enabled - Bitte disablen Sie dieses PHP Feature in der php.ini und starten Sie den WEB-Server neu!');
define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Warnung: Das Verzeichnis für den Artikel Download existiert nicht: ' . DIR_FS_DOWNLOAD . '. Diese Funktion wird nicht funktionieren bis das Verzeichnis erstellt wurde!');
define('WARNING_ENCRYPT_FILE_MISSING', 'Warning: The Encryption key file is missing.');
define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Error: 01 The first four digits of the number entered are: %s If that number is correct, we do not accept that type of credit card.If it is wrong, please try again.');
define('TEXT_CCVAL_ERROR_INVALID_MONTH', 'Error: 02 The expiry date Motnth entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_YEAR', 'Error: 03 The expiry date year entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Error: 04 The expiry date entered for the credit card is invalid.Please check the date and try again.');
define('TEXT_CSCAL_ERROR_CARD_TYPE_MISMATCH', 'Error: 05 The Credit Card number does not match the Card Type:');
define('TEXT_CCVAL_ERROR_SHORT', 'Error: 06 You have not entered the correct amount of digits. Please ensure you have entered all of the long number displayed on the front of your card');
define('TEXT_CCVAL_ERROR_BLACKLIST', 'Error: 07 We cannot accept your card as it is blacklisted, if you feel you have recieved this message in error please contact your card issuer.');
define('TEXT_CCVAL_ERROR_CVV_LENGTH', 'Error: 08 The CCV/CVV/CID number entered is the incorrect length. Please try again.');
define('TEXT_CCVAL_ERROR_NOT_ACCEPTED', 'Error: 09 The credit card number you have entered appears to be a %s card. Unfortunately at this time we do not accept %s as payment.');
define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Error: 10 The credit card number entered is invalid. Please check the number for misstyped numbers and try again.');
// footer text
define('FOOTER_TEXT1_BODY', 'Copyright &copy; ' . date("Y") . '&nbsp;<a target="_blank" href="http://www.crecommerce.com/">Chain Reaction Ecommerce, Inc.</a>, Inc.</a> Powered by <a target="_blank" href="http://www.creloaded.com">CRE Loaded</a>');
define('FOOTER_TEXT2_BODY', '<br>Using ' . PROJECT_VERSION );
define('FOOTER_TEXT_BODY', FOOTER_TEXT1_BODY . FOOTER_TEXT2_BODY);
// Header Links
define('HEADER_LINKS_DEFAULT','HAUS');
define('HEADER_LINKS_WHATS_NEW','WHAT\'S NEW?');
define('HEADER_LINKS_SPECIALS','SPECIALS');
define('HEADER_LINKS_REVIEWS','REVIEWS');
define('HEADER_LINKS_LOGIN','LOGIN');
define('HEADER_LINKS_LOGOFF','LOG OFF');
define('HEADER_LINKS_PRODUCTS_ALL','CATALOG');
define('HEADER_LINKS_ACCOUNT_INFO','ACCOUNT INFO');
define('HEADER_LINKS_LINKS','LINKS');
define('HEADER_LINKS_FAQ','FAQS');
define('HEADER_LINKS_NEWS','NEWS');
define('HEADER_LINKS_INFORMATION','INFORMATION');
// print order mod
define('IMAGE_BUTTON_PRINT_ORDER', 'Order printable');
// Attributes Sorter
require_once(DIR_WS_LANGUAGES . $language . '/' . 'attributes_sorter.php');
// wishlist box text in includes/boxes/wishlist.php
define('BOX_HEADING_CUSTOMER_WISHLIST', 'My Wishlist');
define('BOX_WISHLIST_EMPTY', 'You have no items on your Wishlist');
define('IMAGE_BUTTON_ADD_WISHLIST', 'Add to Wishlist');
define('TEXT_WISHLIST_COUNT', 'Currently %s items are on your Wishlist.');
define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> items on your wishlist)');
define('BOX_HEADING_CUSTOMER_WISHLIST_HELP', 'Wishlist Help');
define('BOX_HEADING_SEND_WISHLIST', 'Send your Wishlist');
define('BOX_TEXT_MOVE_TO_CART', 'Move to Cart');
define('BOX_TEXT_DELETE', 'Delete');
// Information Page
  define('BOX_HEADING_INFORMATION', 'Info-System');
  define('BOX_INFORMATION_MANAGER', 'Info-Manager');
if(file_exists('includes/languages/english_newsdesk.php')) {
  include_once('includes/languages/german_newsdesk.php');
  include_once('includes/languages/german_faqdesk.php');
}
// Checkout Without Account images
define('IMAGE_BUTTON_CREATE_ACCOUNT', 'Create Account');
define('NAV_ORDER_INFO', 'Order Info');
// Events Calendar
define('BOX_TOOLS_EVENTS_MANAGER', 'Events Manager');
define('IMAGE_NEW_EVENT', 'New Event');
define('BOX_INFORMATION_FAQ', 'FAQ');
// Article Manager
define('BOX_HEADING_ARTICLES', 'Artikel');
define('BOX_ALL_ARTICLES', 'All Articles');
define('BOX_NEW_ARTICLES', 'New Articles');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> articles)');
define('TEXT_DISPLAY_NUMBER_OF_ARTICLES_NEW', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> new articles)');
define('TABLE_HEADING_AUTHOR', 'Author');
define('TABLE_HEADING_ABSTRACT', 'Abstract');
define('BOX_HEADING_AUTHORS', 'Artikel durch Author');
define('NAVBAR_TITLE_DEFAULT', 'Articles');
define('BOX_ASEARCH_TEXT','Search Articles Text');
// Eversun mod for sppc and qty price breaks
define('ENTRY_COMPANY_TAX_ID', 'Company\'s tax id number:');
define('ENTRY_COMPANY_TAX_ID_ERROR', '');
define('ENTRY_COMPANY_TAX_ID_TEXT', '');
// Eversun mod end for sppc and qty price breaks  
define('IFRAME_ERROR','Sorry, you browser does not support iframes.');
define("GIFT_VOUCHER_ACCOUNT_BALANCE_1","You still have</br>");
define("GIFT_VOUCHER_ACCOUNT_BALANCE_2","</br>left to spend in your Gift Voucher Account<br><br>");
define("GIFT_VOUCHER_ACCOUNT_BALANCE_3","Send to a Friend");
define("LOGIN_ALT","login");
define("LOGOFF_ALT","logoff");
define("MYACCOUNT_ALT","MyAccount");
define("SPECIALS_ALT","Specials");
define("WHATS_NEW_ALT","What\'s New");
define("CONTACT_US_ALT","Contact Us");
define("IMAGE_ALT","image");
define("BOX_ALT","box");
//dayNames in calendar
define("S","S");
define("M","M");
define("T","T");
define("W","W");
define("F","F");
//monthNames  in calendar
define("JANUARY","JANUARY");
define("FEBRUARY","FEBRUARY");
define("MARCH","MARCH");
define("APRIL","APRIL");
define("MAY","MAY");
define("JUNE","JUNE");
define("JULY","JULY");
define("AUGUST","AUGUST");
define("SEPTEMBER","SEPTEMBER");
define("OCTOBER","OCTOBER");
define("NOVEMBER","NOVEMBER");
define("DECEMBER","DECEMBER");
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
define("BOX_HEADING_CUSTOMER_WISHLIST_VIEW","My Wishlist View");
define("HIDE_PRICES_ERROR",'Sie müssen angemeldet werden, um Preise anzusehen und Aufträge zu vergeben.'); 
define('HIDE_PRICES_TEXT', 'LOGON für Preis'); 
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
define('TEXT_CLOSE_WINDOW', 'Nahes Fenster');
define('TEXT_PRODUCT_SUBPROD_QUANTITY', 'Quantity');
define('TEXT_CART_COUNT', ' Item ');
define('TEXT_CART_COUNTS', ' Items ');
define('TEXT_CART_WEIGHT', ' lb ');
define('TEXT_CART_WEIGHTS', ' lbs ');
define('ALT_HOMEPAGE', 'Homepage');
define("TEXT_YOUR_CONTENT_HERE","Your Content here");
define("TEXT_NO_SPECIALS","There are currently no specials defined.");
define('TEXT_ENTER_COUPON_CODE', 'Enter Redeem Code&nbsp;&nbsp;');
define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Störung: Bestimmungsort existiert nicht.');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Störung: Bestimmungsort nicht writeable.');
define('ERROR_FILE_NOT_SAVED', 'Störung: Aktenantriebskraft nicht gespeichert.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Störung: Aktenantriebskraftart nicht erlaubt.');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Erfolg: Aktenantriebskraft erfolgreich gespeichert.');
define('WARNING_NO_FILE_UPLOADED', 'Warnung: Keine Akte geladen.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Warnung: Aktenantriebskräfte werden in der php.ini Konfigurationsakte gesperrt.');
define('TEXT_NO_PRODUCTS', 'Produkte in diesem Rang existieren nicht.');
// RMA Returns System
define('BOX_INFORMATION_RETURNS', 'Track your return');
define('BOX_HEADING_MANUFACTURER_INFO' ,'Hersteller-Info');
define('BOX_HEADING_SEARCH', 'Suche');
//MVS 
define('MULTIPLE_SHIP_METHODS_TITLE', 'Kombiniertes Verschiffen');
define('ERROR_NO_SHIPPING_SELECTED_SELECTED', 'Störung: Kein Verschiffen-Modul wählte vor.');
define('TEXT_POWERED_BY_CRE', 'Dieser Auftrag wurde durch freie CRE Loaded Software angetrieben. Erhalten Sie Ihren eigenen Speicher heute!'); 
define('ERROR_REDEEMED_SHIPPING_AMOUNT', 'Glückwünsche, haben Sie Versandmenge zurückgekauft ');

define('INTERNAL_ERROR', 'Innerer Fehler ist vorgekommen.');
?>