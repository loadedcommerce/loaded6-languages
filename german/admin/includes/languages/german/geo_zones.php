<?php
/*
  $Id: geo_zones.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Steuerzonen');

define('TABLE_HEADING_COUNTRY', 'Land');
define('TABLE_HEADING_COUNTRY_ZONE', 'Bundesland');
define('TABLE_HEADING_TAX_ZONES', 'Steuerzonen');
define('TABLE_HEADING_ACTION', 'Aktion');

define('TEXT_INFO_HEADING_NEW_ZONE', 'Neue Steuerzone');
define('TEXT_INFO_NEW_ZONE_INTRO', 'Bitte geben Sie die neue Steuerzone mit allen relevanten Daten ein');

define('TEXT_INFO_HEADING_EDIT_ZONE', 'Steuerzone bearbeiten');
define('TEXT_INFO_EDIT_ZONE_INTRO', 'Bitte f&uuml;hren Sie alle notwendigen &Auml;nderungen durch.');

define('TEXT_INFO_HEADING_DELETE_ZONE', 'Steuerzone l&ouml;schen');
define('TEXT_INFO_DELETE_ZONE_INTRO', 'Sind Sie sicher, dass Sie diese Steuerzone l&ouml;schen wollen?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE', 'Neue Steuerklasse');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO','Geben Sie bitte die notwendigen Informationen f&uuml;r die neue Steuerklassen ein');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE', 'Steuerklasse bearbeiten');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO', 'Bitte f&uuml;hren Sie alle notwendigen &Auml;nderungen durch.');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE', 'Steuerklasse l&ouml;schen');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO','Wollen Sie diese Steuerklasse wirklich l&ouml;schen?');

define('TEXT_INFO_DATE_ADDED', 'hinzugef&uuml;gt am:');
define('TEXT_INFO_LAST_MODIFIED', 'letzte &Auml;nderung:');
define('TEXT_INFO_ZONE_NAME', 'Name der Steuerzone:');
define('TEXT_INFO_NUMBER_ZONES', 'Anzahl der Steuerzonen:');
define('TEXT_INFO_ZONE_DESCRIPTION', 'Beschreibung:');
define('TEXT_INFO_COUNTRY', 'Land:');
define('TEXT_INFO_COUNTRY_ZONE', 'Steuerzone:');

if (!defined('TYPE_BELOW')) {
  define('TYPE_BELOW', 'Alle Steuerzone');
}
define('PLEASE_SELECT', 'Alle Steuerzone');
define('TEXT_ALL_COUNTRIES', 'Alle L&auml;nder');
?>
