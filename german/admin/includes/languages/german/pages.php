<?php
/*
  $Id: pages.php,v 1.0.0.0 2007/02/27 13:41:11 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2007 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'CDS-Seitenbetriebsleiter');
define('HEADING_TITLE_PAGES', 'Schaffen Sie Seite/editieren Sie');
define('HEADING_TITLE_SEARCH', 'Suche:');
define('HEADING_TITLE_GOTO', 'Gehen Sie Dazu:');
define('HEADING_TITLE_NEW_PAGES', 'Neue Seite');
define('HEADING_TITLE_EDIT_PAGES', 'Editieren Sie Seite');
define('HEADING_TITLE_NEW_PAGES_CATEGORY', 'Neue Kategorie');
define('HEADING_TITLE_EDIT_PAGES_CATEGORY', 'Editieren Sie Kategorie');
define('TEXT_PAGES_HEADING_DELETE_PAGE','Löschen Sie Seite');
define('TABLE_HEADING_PAGES_CATEGORIES', 'Kategorien/Seiten');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_MENU', 'Menü');
define('TABLE_HEADING_LISTING', 'Die Auflistung');
define('TABLE_HEADING_PRODUCT', 'Produkt');
define('TABLE_HEADING_SORT_ORDER','Sorte');
define('TABLE_HEADING_ACTION', 'Handlung');
define('TEXT_CATEGORIES_COUNT', 'Kategorien:');
define('TEXT_CATEGORIES_TEMPLATE', 'Gebrauch-Kategorie-Schablone:');
define('TEXT_PAGES_COUNT', 'Seiten:');
define('TEXT_PAGES_HEADING_NEW_PAGES_CATEGORY', 'Neue Kategorie');
define('TEXT_PAGES_HEADING_EDIT_PAGES_CATEGORY', 'Editieren Sie Kategorie');
define('TEXT_PAGES_HEADING_DELETE_PAGES_CATEGORY', 'Löschen Sie Kategorie');
define('TEXT_PAGES_HEADING_MOVE_PAGES_CATEGORY', 'Bewegungskategorie');
define('TEXT_PAGES_HEADING_MOVE_PAGES', 'Bewegungsseite');
define('TEXT_PAGES_CATEGORY_COUNT', 'Seiten:');
define('TEXT_PAGES_CATEGORY_STATUS', 'Status:');
define('TEXT_PAGES_CATEGORY_DESCRIPTION', 'Beschreibung:');
define('TEXT_PAGES_CATEGORY_SORT_ORDER', 'Sorte-Ordnung:');
define('TEXT_PAGE_CATEGORY_URL_OVERRIDE','URL Überreiten:');
define('TEXT_OVERRIDE_TARGET','URL Überreiten Ziel:');
define('TEXT_APPEND_CATEGORY','hängen Sie CDpath an');
define('TEXT_TARGET_PAGE','_blank ist für das neue Fenster');
define('TEXT_DATE_PAGES_CATEGORY_CREATED', 'Geschaffen:');
define('TEXT_DATE_PAGES_CATEGORY_LAST_MODIFIED', 'Letzt Modifiziert:');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGE BESTEHT NICHT');
define('TEXT_PAGES_THUMBNAIL_IMAGE', 'Daumennagel-Image');
define('TEXT_NEW_PAGES_CATEGORIES_INTRO', 'Füllen Sie bitte die folgende Information für die neue Kategorie aus');
define('TEXT_EDIT_PAGES_CATEGORIES_INTRO', 'Nehmen Sie bitte irgendwelche notwendigen Änderungen vor');
define('TEXT_DELETE_PAGES_CATEGORIES_INTRO', 'Sind Sie sicher, dass Sie diese Kategorie löschen wollen?');
define('TEXT_MOVE_PAGES_CATEGORIES_INTRO', 'Sind Sie sicher, dass Sie diese Kategorie bewegen wollen?');
define('TEXT_MOVE_PAGES_INTRO', 'Sind Sie sicher, dass Sie diese Seite bewegen wollen?');
define('TEXT_INFO_COPY_TO_PAGES_INTRO', 'Wählen Sie bitte die neue Kategorie, zu der Sie diese Seite kopieren mögen');
define('TEXT_PAGES_CATEGORIES_NAME', ' Menüname:');
define('TEXT_PAGES_CATEGORY_HEADING',' Das Kopfstück des Titels:');
define('TEXT_PAGES_CATEGORIES_DESCRIPTION', ' Beschreibung:');
define('TEXT_CDS_URL_OVERRIDE', 'URL Überreiten:');
define('TEXT_PAGES_CATEGORIES_IMAGE', 'Daumennagel-Image');
define('TEXT_PAGES_CATEGORIES_SORT_ORDER', 'Sorte-Ordnung:');
define('TEXT_PAGES_CATEGORIES_STATUS', 'Status:');
define('TEXT_PAGES_CATEGORIES_STATUS_ENABLE', 'Ermöglichen');
define('TEXT_PAGES_CATEGORIES_STATUS_DISABLE', 'Unbrauchbar machen');
define('TEXT_DELETE_WARNING_LINKS', '<b>Die WARNUNG:</b> Es gibt %s zu dieser Kategorie noch verbundene Seiten!');
define('TEXT_EMPTY_CATEGORY', 'Leere Kategorie');
define('TEXT_NO_CHILD_CATEGORIES_OR_PAGES', 'Es gibt keine Kategorien oder Seiten in diesem Niveau.');
define('TEXT_CDS_NO_CATEGORIES_OR_PAGES_SELECTED', 'Keine Kategorie oder Ausgewählte Seite.');
define('TEXT_DELETE_INTRO', 'Sind Sie sicher, dass Sie diese Seite löschen wollen?');
define('TEXT_PAGES_AUTHOR', 'Autor:');
define('TEXT_PAGES_SORT_ORDER', 'Sorte-Ordnung:');
define('TEXT_DATE_PAGES_CREATED', 'Geschaffenes Datum:');
define('TEXT_DATE_PAGES_LAST_MODIFIED', 'Datum Letzt Modifiziert:');
define('TEXT_NO_PAGE_DETAIL_IMAGE', '(nur erscheint auf Auflistungen und nicht auf dem Seitendetail)');
define('TEXT_INFO_HEADING_COPY_TO_PAGES', 'Kopie Dazu');
define('TEXT_INFO_HEADING_MOVE_PAGES', 'Bewegung Dazu');
define('TEXT_PAGES_HOW_TO_COPY', 'Kopie-Methode::');
define('TEXT_PAGES_COPY_AS_LINK', 'Verbindungsseite');
define('TEXT_COPY_AS_DUPLICATE', 'Doppelseite');
define('TEXT_INFO_CURRENT_PAGES_CATEGORIES', 'Gegenwärtige Kategorien:');
define('TEXT_COPY', 'Bewegung <b>%s</b> dem:');
define('ENTRY_TITLE', 'Titel:');
define('ENTRY_MENU_NAME', 'Menüname:');
define('ENTRY_CATEGORY_MENU', ' Menüname:');
define('ENTRY_CATEGORY', 'Kategorie:');
define('ENTRY_BLURB', ' Die Auflistung des Klappentextes:');
define('ENTRY_BODY', 'Körper:');
define('ENTRY_IMAGE', 'Image:');
define('ENTRY_META_TITLE', 'Meta Title:');
define ('ENTRY_HEADING_TITLE_IMAGE','Das Kopfstück des Titel-Images:');
define('ENTRY_CATEGORY_PAGE_BANNER_IMAGE','Kopfball-Schlagzeile:');
define('PAGES_SUB_CATEGORY_VIEW','U-Boot-Kategorie-Ansicht:');
define('PAGES_LISTING_CONTENT_MODE','Die Auflistung Zufriedener Weise:');
define('PAGES_LISTING_COLUMNS','Seite, die Säulen Verzeichnet:');
define('TEXT_PAGES_USE_SEPERATE_LANGUAGE','Gebrauch getrennte Sprachen');
define('TEXT_PAGES_USE_ENGLISH','Verwenden Sie Englisch in allen Sprachen');
define('LANGUAGE_SAVING_OPTION','Sprache, die Auswahl Spart:');
define('WITH_DESC_LEFT','mit der Beschreibung auf link');
define('TEXT_PAGES_NESTED','Verschachtelt');  
define('TEXT_PAGES_FLAT','Wohnung <span class="smallText">(müssen alle Seiten in U-Boot-Kategorien sein, um sichtbar zu sein)</span>');
define('TEXT_PAGES_THUMBNAIL','Daumennagel mit dem Klappentext');
define('TEXT_SHOW_LINK','Show-Verbindungen dazu:');
define('TEXT_IN_MENU','InfoBox-Menü');
define('TEXT_AUXILIARY_CONTENT_FILE','Zufriedene Hilfsdatei');
define('TEXT_ACF_FILE_MISSING','Die Zufriedene Hilfsdatei <b>%s</b> besteht auf dem Server nicht.');
define('TEXT_ACF_FILE_PLEASE_UPLOAD','Laden Sie bitte dazu ');
define('TEXT_AUXILIARY_CONTENT_FILE_RENAME_ERROR','Benennen Sie Hilfsinhalt-Datei um wird Unbrauchbar gemacht');
define('TEXT_AUXILIARY_CONTENT_FILE1','Datei');
define('TEXT_AUXILIARY_CONTENT_FILE_MISSING','Die ACF-Dateivermissten');
define('TEXT_IN_PAGE_LISTING','Die Seitenauflistung');
define('TEXT_IN_CATEGORY_LISTING','In der Kategorie-Auflistung');
define('TEXT_PAGES_IMAGES','Images Nur');
define('META_TAG_INFORMATION','Information von Meta Tag');
define('ENTRY_META_KEYWORD_CATEGORY','Schlüsselwörter von Meta Tag:');
define('DISPLAY_MODES','Anzeige-Optionen:');
define('PAGES_IMAGES','Seitenimage:');
define('TEXT_CATEGORY_IMAGES','CDS-Images:');
define('TEXT_BANNER_IMAGE','<small>(zeigt an der Oberseite von allen <u>Kind</u> Kategorien und Seiten)</small>');
define('TEXT_TITLE_IMAGE','<small>(überreitet Gehenden Titel-Text für diese Kategorie)</small>');
define('TEXT_CATEGORY_IMAGE','<small>(zeigt in Subkategorie-Auflistungen)</small>');
define('TEXT_CATAGORY_IMAGE_DELETE_SHORT','Löschen');
define('TEXT_CATAGORY_IMAGE_REMOVE_SHORT','Umziehen');
define('TEXT_PAGES_IMAGE_NOTE','<b>Seitenimage:</b><br>'); 
define('TEXT_PAGES_IMAGE_REMOVE','Umziehen');
define('TEXT_PAGES_IMAGE_DELETE','Löschen');
define('ICON_URL_OVERRIDE','URL Überreiten');
define('ENTRY_META_KEYWORDS', 'Meta Keywords:');
define('ENTRY_META_DESCRIPTION', 'Meta Description:');
define('ENTRY_STATUS', 'Status:');
define('ENTRY_SORT_ORDER', 'Sorte-Ordnung:');
define('TEXT_ATTACH_PRODUCT', 'Fügen Sie Produkte bei:');
define('ENTRY_AUTHOR', 'Autor:');
define('TEXT_PAGES_ACTIVE', 'Aktiv');
define('TEXT_PAGES_INACTIVE', 'Untätig');
define('TEXT_PAGES_RENAME_AUXILIARY_CONTENT','Benennen Sie Hilfsinhalt-Datei um:');
define('TEXT_PAGES_CHECK_TO_ENABLE','Überprüfen Sie, um Zu ermöglichen');
define('TEXT_NO_CATEGORY', 'Keine Kategorie');
define('TEXT_MOVE', 'Bewegung <b>%s</b> dem:');
define('TEXT_PREVIEW','Vorschau');
define('TEXT_SELECT_PRODUCT','-------Produkt auswählen--------');
define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Das Anzeigen <b>%d</b> <b>%d</b> (<b>%d</b> Seiten)');
define('IMAGE_NEW_PAGE', 'Neue Seite');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Fehler: Kann nicht Seiten in derselben Kategorie verbinden.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Fehler: Katalogbildverzeichnis ist nicht writeable:' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Fehler: Katalogbildverzeichnis besteht nicht:' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_PAGE_DIRECTORY_NOT_WRITEABLE', 'Fehler: Katalogseitenverzeichnisverzeichnis ist nicht writeable:' );
define('ERROR_CATALOG_PAGE_DIRECTORY_DOES_NOT_EXIST', 'Fehler: Katalogseitenverzeichnis besteht nicht:' );
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Fehler: Kategorie kann nicht in die Kinderkategorie bewegt werden.');
define('TEXT_ERROR','<font color="#FF0000">Die Warnung! Es gab einen Fehler im Laden der Hilfsdatei</font>');
define('CDS_IMAGE_ICON_STATUS_INACTIVE', 'Untätig: Klicken Sie, um Zu aktivieren');
define('CDS_IMAGE_ICON_STATUS_ACTIVE', 'Aktiv: Klicken Sie, um Auszuschalten');
define('IMAGE_UPDATE_SORT', 'Update-Art');

?>