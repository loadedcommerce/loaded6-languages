<?php
/*
  $Id: edit_orders.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Bestellung Generieren');
define('HEADING_TITLE_NUMBER', 'Nr.');
define('HEADING_TITLE_DATE', 'of');
define('HEADING_SUBTITLE', 'Redigieren Sie bitte alle Teile, wie gewünscht und klicken Sie an das " Update" Knopf unten.');
define('HEADING_TITLE_SEARCH', 'Bestell ID:');
define('HEADING_TITLE_STATUS', 'Status:');
define('ADDING_TITLE', 'Produkt hinzuf&uuml;gen');
define('CATEGORY_ORDER_DETAILS', 'Kunden-Sonderkommandos');
define('ENTRY_CURRENCY', 'Kunden-Währung');
define('ADD_PRODUCT', 'Fügen Sie ein Produkt Auftrag hinzu');

define('ENTRY_UPDATE_TO_CC', '(Aktualisieren der <b>Kreditkarte</b> zum anzeigen des CC Feldes.)');
define('HINT_DELETE_POSITION', '<font color="#FF0000">Tipp: </font>Zu einen Produktsatz seine Quantität zu löschen "0".');
define('HINT_TOTALS', '<font color="#FF0000">Tipp: </font>Fühlen Sie sich frei, Diskonte zu geben, indem Sie negative Mengen der Liste hinzufügen.<br>Felder mit " 0" Werte werden gelöscht, wenn der Auftrag aktualisiert wird (Ausnahme: Verschiffen).');
define('HINT_PRESS_UPDATE', 'Klicken Sie bitte an " Update" zu alle Änderungen sparen oben vorgenommen.');
define('TABLE_HEADING_COMMENTS', 'Kommentare');
define('TABLE_HEADING_CUSTOMERS', 'Kunden');

define('TABLE_HEADING_CUSTOMER_ID', 'Kunde Identifikation');
define('TABLE_HEADING_PWA', 'Kauf ohne ein Konto');
define('TABLE_HEADING_ORDER_TOTAL', 'Bestellung Summe');
define('TABLE_HEADING_DATE_PURCHASED', 'Bestelldatum');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_QUANTITY', 'Stk.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Modell');
define('TABLE_HEADING_PRODUCTS', 'Produkte');
define('TABLE_HEADING_TAX', 'MwSt.');
define('TABLE_HEADING_TOTAL', 'Gesamt');
define('TABLE_HEADING_UNIT_PRICE', 'Preis pro Einheit');
define('TABLE_HEADING_BASE_PRICE', 'Niedriger Preis');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Price (incl. Tax)');
define('TABLE_HEADING_TOTAL_PRICE', 'Summe Gesamt');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Gesamtmenge (incl. Steuer)');
define('TABLE_HEADING_TOTAL_MODULE', 'Gesamtpreis-Bestandteil');
define('TABLE_HEADING_TOTAL_AMOUNT', 'Menge');

define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Preis (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Preis (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Gesamtmenge  (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Gesamtmenge  (inc)');
define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Kunde benachrichtigt');
define('TABLE_HEADING_DATE_ADDED', 'hinzugef&uuml;gt am:');

define('ENTRY_CUSTOMER', 'Kunde:');
define('ENTRY_CUSTOMER_NAME', 'Name');
define('ENTRY_CUSTOMER_COMPANY', 'Firma');
define('ENTRY_CUSTOMER_ADDRESS', 'Adresse');
define('ENTRY_CUSTOMER_SUBURB', 'Vorort');
define('ENTRY_CUSTOMER_CITY', 'Stadt');
define('ENTRY_CUSTOMER_STATE', 'Zustand');
define('ENTRY_CUSTOMER_POSTCODE', 'Postleitzahl');
define('ENTRY_CUSTOMER_COUNTRY', 'Land');
define('ENTRY_CUSTOMER_PHONE', 'Telefon');
define('ENTRY_CUSTOMER_EMAIL', 'EMail');
define('ENTRY_SOLD_TO', 'Verkauft an:');
define('ENTRY_DELIVERY_TO', 'Zugestellt an:');
define('ENTRY_SHIP_TO', 'Versand an:');
define('ENTRY_SHIPPING_ADDRESS', 'Versand Adresse:');
define('ENTRY_BILLING_ADDRESS', 'Rechnungs Addresse:');
define('ENTRY_PAYMENT_METHOD', 'Bezahlverfahren:');
define('ENTRY_CREDIT_CARD_TYPE', 'Kreditkarten Type:');
define('ENTRY_CREDIT_CARD_OWNER', 'Kreditkartenbesitzer:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Kreditkartennummer:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Kreditkarte g&uuml;ltig bis:');
define('ENTRY_CREDIT_CARD_CCV', 'CCV/CVC/CSC code: ');
define('ENTRY_CREDIT_CARD_START_DATE', 'Date de début : ');
define('ENTRY_CREDIT_CARD_ISSUE', 'Ausgaben-Zahl: ');
define('ENTRY_SUB_TOTAL', 'Zwischensumme:');
define('ENTRY_TAX', 'MwSt.:');
define('ENTRY_SHIPPING', 'Versand:');
define('ENTRY_TOTAL', 'Gesamt:');
define('ENTRY_DATE_PURCHASED', 'Kaufdatum:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_DATE_LAST_UPDATED', 'Letzte Aktuallisierung:');
define('ENTRY_NOTIFY_CUSTOMER', 'Kunde benachrichtigen:');
define('ENTRY_NOTIFY_COMMENTS', 'Eingetragene Kommentare:');
define('ENTRY_PRINTABLE', 'Rechnung drucken');
define('ENTRY_CUSTOMER_DISCOUNT', 'Nutzen Sie hier Ziffern in negierter Form -1.00 ');
define('ENTRY_CUSTOMER_GV', 'Diskont/Geschenk-Zeuge: ');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Bestellung l&ouml;schen');
define('TEXT_INFO_DELETE_INTRO', 'Sind Sie sich sicher das Sie die Bestellung l&ouml;schen wollen?');
//define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Anzahl dem Lager gutschreiben');
define('TEXT_DATE_ORDER_CREATED', 'Erstellt am:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Letzte &Auml;nderung:');
define('TEXT_DATE_ORDER_ADDNEW', 'Addieren Sie neues Produkt');
define('TEXT_INFO_PAYMENT_METHOD', 'Bezahlmetode:');

define('TEXT_CARD_ENCRPYT', '<font color=green> </b> Diese cm-Zahl wird verschlüsselte gespeichert </b></font>');
define('TEXT_CARD_NOT_ENCRPYT', '<font color=red> <b>Warnung!!!! Dieser cm-Zahl wird nicht verschlüsselt gespeichert </b></font>');
define('TEXT_EXPIRES_ENCRPYT', '<font color=green> </b> Dieser cm laufen Datum wird gespeichert verschlüsselte ab </b></font>');
define('TEXT_EXPIRES_NOT_ENCRPYT', '<font color=red> <b>Warnung!!!! Dieser cm laufen Datum wird gespeichert nicht verschlüsselt ab </b></font>');
define('TEXT_CCV_ENCRPYT', '<font color=green> </b> Dieser cm CCV wird verschlüsselte gespeichert </b></font>');
define('TEXT_CCV_NOT_ENCRPYT', '<font color=red> <b>Warnung!!!! Diesem cm CCV wird nicht verschlüsselt gespeichert, wenn freier Raum diese Mitteilung ignorieren</b></font>');

define('TEXT_EXPIRES_REMOVED', '<font color=green> </b> Dieser cm laufen Datum ist entfernt worden vom Speicher ab.</b></font>');
define('TEXT_CCV_REMOVED', '<font color=green> </b> CCV Code: Nicht gespeichert - passend zur Verarbeitung von Regelungen. Ermöglichen Sie eMail CCV in den Moduleinstellungen.</b></font>');
define('TEXT_CARD__REMOVED', '<font color=green> </b> Diese cm-Zahl ist nicht Speicher oder ist vom Speicher entfernt worden.</b></font>');


define('ENTRY_IPADDRESS', 'Ihre IP-Adresse');
define('ENTRY_IPISP', 'Ihr Provider');

define('TEXT_ALL_ORDERS', 'Alle Bestellungen');
define('TEXT_NO_ORDER_HISTORY', 'Keine Bestell&uuml;bersicht vorhanden');


define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Bestellung aktuallisiert');
define('EMAIL_TEXT_ORDER_NUMBER', 'Bestellnummer:');
define('EMAIL_TEXT_INVOICE_URL', 'Aufgeschl&uuml;sselte Rechnung:');
define('EMAIL_TEXT_DATE_ORDERED', 'Bestelldatum:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Ihre Bestellung wurde auf folgenden Status gesetzt.' . "\n\n" . 'Neuer Status: %s' . "\n\n" . 'Sollten Sie Fragen zu diesem Vorgang haben, so senden Sie uns eine Email.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Folgender Kommentar wurde hinzugef&uuml;gt' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Fehler: Bestellung existiert nicht.');
define('SUCCESS_ORDER_UPDATED', 'ERFOLGREICH: Bestellung wurde aktualisiert.');
define('WARNING_ORDER_NOT_UPDATED', 'FEHLER: Nichts zu &auml;ndern. Es wurde keine &Auml;nderung durchgef&uuml;hrt.');
define('SUCCESS_PRODUCT_ADDED', 'Erfolg: Dieser Auftrag ist aktualisiert worden und ein neues Produkt ist addiert worden');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'O.K.');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Wählen Sie ein Produkt');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'O.K.');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Wählen Sie eine Wahl');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'O.K.');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'Produkt hat keine Wahlen und so überspringt...');
define('ADDPRODUCT_TEXT_OPTIONS_EXIST', 'Produkt hat die Wahlen, Klicken, zum zum folgenden Schritt zu gehen...');
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', 'Stücke dieses Produktes');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Fügen Sie hinzu');
define('ADDPRODUCT_TEXT_STEP', 'Schritt');
define('ADDPRODUCT_TEXT_PROGRESS', 'Schritt-Fortschritt ');

define('ADDPRODUCT_TEXT_STEP_1', 'Schritt 1');
define('ADDPRODUCT_TEXT_STEP_2', 'Schritt 2');
define('ADDPRODUCT_TEXT_STEP_3', 'Schritt 3');
define('ADDPRODUCT_TEXT_STEP_4', 'Schritt 4');

define('MENUE_TITLE_CUSTOMER', '1. Kunden-Daten');
define('MENUE_TITLE_PAYMENT', '2. Zahlungs-Methode');
define('MENUE_TITLE_ORDER', '3. Bestellte Produkte');
define('MENUE_TITLE_TOTAL', '4. Diskont, Verschiffen und Gesamtmenge');
define('MENUE_TITLE_STATUS', '5. Status und Mitteilung');
define('MENUE_TITLE_UPDATE', '6. Update-Daten');

define('DONT_ADD_NEW_PRODUCT', 'Addieren Sie nicht neues Produkt');
define('SELECT_THESE_OPTIONS', "Vorwählen Sie diese Wahlen se");
define('ADDPRODUCT_TEXT_GET_PRODUCT', 'Erhalten Sie Liste der Produkte');
define('TEXT_ADD_PROD_NAME', 'Produkt-Name');
define('TEXT_ADD_PROD_PRICE', 'Niedriger Preis des Produktes');
define('TEXT_PRODUCT_OPTIONS', 'Produkt-Wahlen');
define('REMOVE_CVV', 'Entfernen Sie cm');
define('TABLE_HEADING_CUSTOMER_GROUP', 'Kunden-Gruppe: ');
?>
