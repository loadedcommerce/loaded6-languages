<?php
/*
  $Id: products_multi.php, v 2.0

  autor: sr, 2003-07-31 / sr@ibis-project.de

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Multi-Produkt-Manager');
define('HEADING_TITLE_SEARCH', 'Suche:');
define('HEADING_TITLE_GOTO', 'Gehe zu:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_CHOOSE', 'Wahl');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Kategorie / Produkt');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Model');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_STATUS', 'Status');

define('DEL_DELETE', 'Produkt l&ouml;schen');
define('DEL_CHOOSE_DELETE_ART', 'Wie soll gel&ouml;scht werden?');
define('DEL_THIS_CAT', 'Nur in dieser Kategorie');
define('DEL_COMPLETE', 'Das komlette Produkt l&ouml;schen');

define('TEXT_NEW_PRODUCT', 'Neues Produkt in &quot;%s&quot;');
define('TEXT_CATEGORIES', 'Kategorie:');
define('TEXT_ATTENTION_DANGER', '<br><br><span class="dataTableContentRedAlert">
                                 !!! Vorsicht !!! Bitte lesen !!!</span><br><br>
                                 <span class="dataTableContentRed">
                                 Dieses Tool ver&auml;ndert die Tabellen <I>products_to_categories</I>
                                 (und bei \'L&ouml;sche das komplette Produkt\' auch <I>products</I>
                                 und <I>products_description</I> neben anderen; [Siehe Funktion
                                 <I>\'tep_remove_product\'</I>]) - deshalb wird eine Datensicherung der
                                 Tabellen unbedingt empfohlen!<br><br>
                                 <B>Dieses Tool l&ouml;scht, verschiebt und kopiert alle ausgew&auml;hlten
                                 Produkte ohne Warnung.</B></span><br><br>
                                 <span class="dataTableContentRedAlert">
                                 </span>
                                 <ul>
                                 <li>Vorsicht beid er Ben&uuml;tzung von
                                     <strong>\'Produkt komplett l&ouml;schen\'</strong>.
                                     Diese Funktion l&ouml;scht alle gew&auml;hlten Produkte sofort,
                                     ohne Warnung, und komplett von allen Tabellen, zu denen das Produkt
                                     geh&ouml;rt.</strong>
                                     <P></li>
                                 <li>Die Funktion <strong>\'Produkt nur in dieder Kategorie
                                     l&ouml;schen\'</strong>, l&ouml;scht keine Produkte komplett,
                                     sondern nur die Verkn&uuml;pfungen zu allen zugewiesenen
                                     Kategorien - sogar, wenn es die einzige Kategorie-Verkn&uuml;pfung
                                     des Produktes ist, ohne Warnung.
                                     Es ist also auch mit dieser Funktion Vorsicht geboten!<P></li>
                                 <li>Die Funktion <strong>Kopieren</strong> kopiert die Produkte nicht,
                                     sie werden nur mit der gew&auml;hlten Kategorie verkn&uuml;pft.<P></li>
                                 <li>Produkte werden nur in eine neue Kategorie <strong>verschoben</strong>
                                     resp. <strong>kopiert</strong> wenn sie darin noch nicht existiert.<P></li>
                                 </ul>');
define('TEXT_MOVE_TO', 'Verschieben nach');
define('TEXT_CHOOSE_ALL', 'Alle w&auml;hlen');
define('TEXT_CHOOSE_ALL_REMOVE', 'Auswahl l&ouml;schen');
define('TEXT_SUBCATEGORIES', 'Unterkategorien:');
define('TEXT_PRODUCTS', 'Produkt:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Preis:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Steuerklasse:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Durschschnittliche Bewertung:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Anzahl:');
define('TEXT_DATE_ADDED', 'Hinzugef&uuml;gt am:');
define('TEXT_DATE_AVAILABLE', 'Verf&uuml;gbar ab:');
define('TEXT_LAST_MODIFIED', 'Letzte &Auml;nderung:');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Bitte eine neue Kategorie oder Produkt in <br>&nbsp;<br><b>%s</b> erzeugen');
define('TEXT_PRODUCT_MORE_INFORMATION', 'F&uuml;r weitere Informationen bitte diese Seite besuchen: <a href="http://%s" target="blank"><u>Internetseite</u></a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Dieses Produkt wurde unserem Katalog am %s zugef&uuml;gt.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Dieses Produkt wird am %s verf&uuml;gbar sein.');

define('TEXT_EDIT_INTRO', 'Bitte alle n&ouml;tigen &Auml;nderungen vornehmen');
define('TEXT_EDIT_CATEGORIES_ID', 'Kategorie-ID:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Kategorie-Name:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Kategorie-Bild:');
define('TEXT_EDIT_SORT_ORDER', 'Sortierung:');

define('TEXT_INFO_COPY_TO_INTRO', 'Bitte die Kategorie w&auml;hlen, in die das Produkt kopiert werden soll');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Aktuelle Kategorien:');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Neue Kategorie');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Kategorie bearbeiten');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Kategorie l&ouml;schen');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Kategorie verschieben');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Produkt l&ouml;schen');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Produkt veschieben');
define('TEXT_INFO_HEADING_COPY_TO', 'Kopieren nach');

define('TEXT_DELETE_CATEGORY_INTRO', 'Soll die Kategorie wirklich gel&ouml;scht werden?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Soll das Produkt wirklich permanent gel&ouml;scht werden?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>WARNUNG:</b> Es hat noch %s (Unter-)Kategorien die noch mit dieser Kategorie verkn&uuml;pft sind!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>WARNUNG:</b> Es hat noch %s Produkte, die noch mit dieser Kategorie verkn&uuml;pft sind!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'In welcher Kategorie soll <b>%s</b> hinzugef&uuml;gt werden?');
define('TEXT_MOVE_CATEGORIES_INTRO', 'In welcher Kategorie soll <b>%s</b> hinzugef&uuml;gt werden?');
define('TEXT_MOVE', 'Verschiebe <b>%s</b> nach:');

define('TEXT_NEW_CATEGORY_INTRO', 'Bitte f&uuml;r die neue Kategorie die folgenden Informationen ausf&uuml;llen');
define('TEXT_CATEGORIES_NAME', 'Kategorie-Name:');
define('TEXT_CATEGORIES_IMAGE', 'Kategorie-Bild:');
define('TEXT_SORT_ORDER', 'Sortierung:');

define('TEXT_PRODUCTS_STATUS', 'Produkt-Status:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Verf&uuml;gbar ab:');
define('TEXT_PRODUCT_AVAILABLE', 'Am Lager');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Nicht am Lager');
define('TEXT_PRODUCTS_MANUFACTURER', 'Hersteller:');
define('TEXT_PRODUCTS_NAME', 'Produkt-Name:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Produkt Beschreibung:');
define('TEXT_PRODUCTS_QUANTITY', 'Produkt-Menge:');
define('TEXT_PRODUCTS_MODEL', 'Produkt-Modell:');
define('TEXT_PRODUCTS_IMAGE', 'Produkt-Bild:');
define('TEXT_PRODUCTS_URL', 'Produkt-URL:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(ohne http://)</small>');
define('TEXT_PRODUCTS_PRICE', 'Produkt-Preis:');
define('TEXT_PRODUCTS_WEIGHT', 'Produkt-Gewicht:');
define('TEXT_NONE', '--leer--');

define('EMPTY_CATEGORY', 'Leere Kategorie');

define('TEXT_HOW_TO_COPY', 'Art der Kopie:');
define('TEXT_COPY_AS_LINK', 'Verkn&uuml;pfen');
define('TEXT_COPY_AS_DUPLICATE', 'Kopieren');

define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fehler: Das Produkt kann nicht in die selbe Kategorie verkn&uuml;pft werden.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fehler: Katalog-Bild-Verzeichnis ist nicht beschreibbar!: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fehler: Katalog-Bild-Verzeichnis existiert nicht!: ' . DIR_FS_CATALOG_IMAGES);
define('LINK_TO', 'Verbindung zu');
define('TABLE_HEADING_MANUFACTURERS_NAME', 'Hersteller');
define('TABLE_HEADING_PRODUCTS_QUANTITY', 'Quantität');

?>
