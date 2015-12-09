<?php
/*
  $Id: create_account_process.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('NAVBAR_TITLE', 'Konto er&ouml;ffnen');
define('HEADING_TITLE', 'Konto Information');
define('HEADING_NEW', 'Bestellablauf');
define('NAVBAR_NEW_TITLE', 'Bestellablauf');

define('EMAIL_SUBJECT', 'Willkommen bei ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Sehr geehrter Herr. ' . stripslashes($_POST['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_MS', 'Sehr geehrte Frau. ' . stripslashes($_POST['lastname']) . ',' . "\n\n");
define('EMAIL_GREET_NONE', 'Sehr geehrte/r ' . stripslashes($_POST['firstname']) . ',' . "\n\n");
define('EMAIL_WELCOME', 'Wir heissen Sie herzlich willkommen bei <b>' . STORE_NAME . '</b>.' . "\n\n");
define('EMAIL_TEXT', 'Sie k&ouml;nnen nun die <b>diversen Services</b>, die wir Ihnen anbieten, in Anspruch nehmen. Diese Services beinhalten:' . "\n\n" . '<li><b>Kundenwarenkorb</b> - Alle Produkte die Sie in Ihren Warenkorb legen, bleiben dort, bis Sie diese aus dem Warenkorb entfernen, oder bei uns bestellen.' . "\n" . '<li><b>Adressbuch</b> - Wir k&ouml;nnen Ihre Bestellung an eine andere Adresse, als Ihre eigene liefern! Dies ist besinders geeignet um Geburtstagsgeschenke direkt an das Geburtstagskind zu versenden.' . "\n" . '<li><b>Bestellhistorie</b> - Sehen Sie sich online an, welche Käufe Sie bei uns getätigt haben.' . "\n" . '<li><b>Produktbewertungen</b> - Teilen Sie Ihre Meinung über unsere Produkte auch anderen Kunden mit.' . "\n\n");
define('EMAIL_CONTACT', 'Für Hilfe zu unseren Online-Services, senden Sie bitte eine Email an uns: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n\n");
define('EMAIL_WARNING', '<b>Hinweis:</b> Diese Emailadresse wurde uns von einem unserer Kunden genannt. Wenn Sie sich nicht für ein kostenloses Kundenkonto angemeldet haben, senden Sie bitte eine Email an uns: ' . STORE_OWNER_EMAIL_ADDRESS . '.' . "\n");
define('EMAIL_PASS_1', 'Das Passwort für Ihr Kundenkonto lautet ');
define('EMAIL_PASS_2', ', bewaren Sie es an einem sicheren Ort. (Achten Sie bitte auf groß und Kleinschreibung.)');

define('ENTRY_CUSTOMERS_PAYMENT_SET', 'Set payment modules for the customer');
define('ENTRY_CUSTOMERS_PAYMENT_DEFAULT', 'Use settings from Group or Configuration');
define('ENTRY_CUSTOMERS_PAYMENT_SET_EXPLAIN', 'If you choose <b><i>Set payment modules for the customer</i></b> but do not check any of the boxes, default settings (Group settings or Configuration) will still be used.');
define('ENTRY_CUSTOMERS_SHIPPING_SET', 'Set shipping modules for the customer');
define('ENTRY_CUSTOMERS_SHIPPING_DEFAULT', 'Use settings from Group or Configuration');
define('ENTRY_CUSTOMERS_SHIPPING_SET_EXPLAIN', 'If you choose <b><i>Set shipping modules for the customer</i></b> but do not check any of the boxes, default settings (Group settings or Configuration) will still be used.');

?>