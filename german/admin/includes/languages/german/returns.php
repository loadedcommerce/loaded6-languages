<?php
/*
$id author Puddled Internet - http://www.puddled.co.uk
  email support@puddled.co.uk
   osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Produkt-Austausch / Rückkehr');
define('HEADING_TITLE_SEARCH', 'RMA Zahl:');
define('HEADING_TITLE_STATUS', 'Status:');

define('TABLE_HEADING_COMMENTS', 'Admin-Anmerkungen');
define('TABLE_HEADING_CUSTOMERS', 'Kunden');
define('TABLE_HEADING_ORDER_TOTAL', 'Rückholgesamtmenge');
define('TABLE_HEADING_DATE_PURCHASED', 'Antrag-Datum');
define('TABLE_HEADING_REASON', 'Grund');
define('TABLE_HEADING_ACTION', 'Status');
//define('TABLE_HEADING_ACTION', 'Action');

define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_OLD_DEPT', 'Alte Abteilung');
define('TABLE_HEADING_NEW_DEPT', 'Neue Abteilung');
define('TABLE_HEADING_OLD_ADMIN', 'Alter Admin');
define('TABLE_HEADING_NEW_ADMIN', 'Neuer Admin');

define('TABLE_HEADING_NEW_VALUE', 'Neuer Wert');
define('TABLE_HEADING_OLD_VALUE', 'Alter Wert');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde mitgeteilt');
define('TABLE_HEADING_DATE_ADDED', 'Datum addiert');

define('CUSTOMER_PREFERENCE', 'Kunden-Präferenz');

define('ENTRY_CUSTOMER', 'Kunde:');
define('ENTRY_SOLD_TO', 'VERKAUFT AN:');
//define('ENTRY_STREET_ADDRESS', 'Address Line 1:');
//define('ENTRY_SUBURB', 'Address Line 2:');
//define('ENTRY_CITY', 'City:');
define('ENTRY_CONTACT_NAME', 'Kontakt-Name:');
//define('ENTRY_POST_CODE', 'Zip Code:');
//define('ENTRY_STATE', 'State:');
//define('ENTRY_COUNTRY', 'Country:');
define('ENTRY_TELEPHONE', 'Telefon:');
//define('ENTRY_EMAIL_ADDRESS', 'Contact Email:');
define('ENTRY_DELIVERY_TO', 'Anlieferung zu:');
define('ENTRY_SHIP_TO', 'SCHIFF ZU:');
define('ENTRY_SHIPPING_ADDRESS', 'Versandadresse:');
define('ENTRY_BILLING_ADDRESS', 'Gebührenzählungs-Adresse:');
define('ENTRY_PAYMENT_METHOD', 'Rückerstattung-Methode:');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkarte-Art:');
define('ENTRY_CREDIT_CARD_OWNER', 'Kreditkarte-Inhaber:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kreditkartennummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kreditkarte läuft ab:');
define('ENTRY_SUB_TOTAL', 'Teilsumme:');
define('ENTRY_TAX', 'Steuer:');
define('ENTRY_SHIPPING', 'Verschiffen:');
define('ENTRY_TOTAL', 'Gesamtmenge:');
define('ENTRY_DATE_PURCHASED', 'Datum gekauft:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Datum-Letztes aktualisierte:');
define('ENTRY_NOTIFY_CUSTOMER', 'Teilen Sie Kunden mit:');
define('ENTRY_NOTIFY_COMMENTS', 'Fügen Sie Anmerkungen an:');
define('ENTRY_PRINTABLE', 'Druck-Rechnung');
define('ENTRY_TICKET_DATE', 'Gehen Sie an eingereicht zurück');
define('ENTRY_DEPARTMENT', 'Abteilung');
define('ENTRY_SUPPORTER', 'Zugewiesen ');
define('ENTRY_PAYMENT_DATE', 'Rückerstattung-Datum:');
DEFINE('ENTRY_NOTIFY_CLOSE', '<font color=red>Nahe Karte</font>');
define('TEXT_INFO_HEADING_DELETE_ORDER', 'Löschung-Karte');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie, sure, das Sie diese Rückkehr löschen möchten?');
define('TABLE_HEADING_QUANTITY', 'Menge.');
define('TABLE_HEADING_PRODUCTS_MODEL', '');

// BEGIN - Product Serial Numbers
define('TABLE_HEADING_PRODUCTS_SERIAL_NUMBER', 'Seriennummer');
// END - Product Serial Numbers
define('TABLE_HEADING_PRODUCTS', 'Produkte');
define('TABLE_HEADING_TAX', 'Steuer');
define('TABLE_HEADING_TOTAL', 'Gesamtmenge');
//define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Preis (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Preis (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Gesamtmenge (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Gesamtmenge (inc)');
define('ORDER_NO', 'Auftrag #: ');
define('TEXT_INVOICE_NO', 'Rückkehr #: ');
define('TEXT_DATE_TIME', 'Antrag-Datum: ');
define('TEXT_IP_ADDRESS', 'RMA Zahl: ');
define('TEXT_IP_ADDRESS_HOST', 'IP- addresswirt: ');
//define('TEXT_INFO_HEADING_DELETE_ORDER', 'Delete Order');

define('TEXT_DATE_ORDER_CREATED', 'Datum verursachte:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Last Modified:');
define('TEXT_INFO_PAYMENT_METHOD', 'Rückkehr schloß ab:');

define('TEXT_ALL_ORDERS', 'Alle Karten');
define('TEXT_NO_ORDER_HISTORY', 'Keine Karten-Geschichte vorhanden');
define('ENTRY_PAYMENT_REFERENCE', 'Rückerstattung-Hinweis #:');
define('ENTRY_PAYMENT_AMOUNT', 'Rückerstattung-Menge:');
define('ENTRY_RESTOCK_CHARGE', 'Treffen Sie Lager auffüllen der Gebühr zu:');

define('ERROR_ORDER_DOES_NOT_EXIST', 'Störung: Karte existiert nicht.');
define('SUCCESS_ORDER_UPDATED', 'Erfolg: Karte ist erfolgreich aktualisiert worden.');
define('WARNING_ORDER_NOT_UPDATED', 'Warnung: Nichts zu ändern. Die Karte war nicht modernisiert.');
define('SUCCESS_RETURNED_GIFT', 'Rückerstattung durch Geschenkzeugen');
define('SUCCESS_RETURN_CLOSED', 'Rückkehr schloß jetzt ab');
define('SUCCESS_PRODUCT_TO_STOCK','Produkt fügte zurück zu Vorrat hinzu');
define('TEXT_GIFT_COMMENT', 'Geschenkzeugeanmerkungen<br><font color=8E8E8E>ANMERKUNG: GV wird innen herausgegeben<br> ursprünglicher Kundenname.</font>');
define('TEXT_BACK_TO_STOCK', ' Fügen Sie zurück zu Vorrat hinzu');
define('TEXT_COMPLETE_RETURN', 'Schließen Sie diese Rückkehr ab');
define('TEXT_CUSTOM_PREF_METHOD','Bevorzugte Methode des Kunden:');

define('TEXT_SUPPORT_ADDED', 'Ihr Rückholantrag ist in unserer Datenbank gesendet worden und notiert worden.');
define('TEXT_SUPPORT_UPDATE', 'Der Rückholantrag, den Sie, sind jetzt aktualisiert worden einreichten.');
define('TEXT_SUPPORT_SOLVED', 'Ihr Rückholantrag ist jetzt gelöst worden.');
define('TEXT_SUPPORT_ADDED_TO_FAQ', 'Der Rückholantrag, den Sie einreichten, ist jetzt der FAQ-Seite hinzugefügt worden.');
define('TEXT_SUPPORT_CLOSED', 'Dieser Rückholantrag wird jetzt geschlossen.');

define('EMAIL_SEPARATOR', '===================================');
define('EMAIL_TEXT_SUBJECT', STORE_NAME . ' ' .'Rückholupdate');
define('EMAIL_TEXT_GV_SUBJECT', STORE_NAME . ' '. 'Gutschrift für zurückgebrachtes Produkt');
define('EMAIL_TEXT_ORDER_NUMBER', 'Rückholzahl:');
define('EMAIL_TEXT_DATE_ORDERED', 'Rückholantrag-Datum:');
define('EMAIL_TEXT_STATUS_UPDATE', '<b>Ihre Rückkehr ist zum folgenden Status aktualisiert worden:</b>' . "\n" . 'Neuer Status: %s');
define('EMAIL_TEXT_REPLY', 'Antworten Sie bitte auf diese eMail, wenn Sie irgendwelche Fragen haben.');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<b>Kommentiert & Richtungen, zum Ihrer Rückkehr abzuschließen:</b>' . "\n" . "%s\n");
define('TEXT_ALL_RETURNS','Alles geht zurück');
?>