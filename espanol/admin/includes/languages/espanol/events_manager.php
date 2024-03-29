<?php
/*
  $Id: events_calendar v2.00 2003/06/16 18:09:20 ip chilipepper.it Exp $
  Storeommerce, Open Source E-Commerce Solutions
  http://www.Storeommerce.com
  Copyright (c) 2003 Storeommerce
  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Events Manager');
define('DELETE_EVENTS_ERROR', 'Please select a date.');
define('EVENTS_ERROR', 'Form error.\n\n');

define('TABLE_HEADING_ID', 'Event ID');
define('TABLE_HEADING_SIZE', 'Size');
define('TABLE_HEADING_TITLE', 'Title');
define('TABLE_HEADING_DATE_ADDED', 'Date Added');
define('TABLE_HEADING_DATE_START', 'Start Date');
define('TABLE_HEADING_DATE_END', 'End Date');
define('TABLE_HEADING_LINKS', 'Link / Store link');
define('TABLE_HEADING_OSC_LINK', 'Store Link');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_NO_EVENTS', 'No events found.');

define('TEXT_EVENT_TITLE', 'Title:');
define('TEXT_EVENT_DESCRIPTION', 'Event:');

define('TEXT_EVENT_ID', 'Event ID:');
define('TEXT_EVENT_DATE_ADDED', 'Date Added:');

define('TEXT_EVENT_START', 'Start Date:');
define('TEXT_EVENT_END', 'End Date:');
define('TEXT_CHOOSE_MANUFACTURER', 'Manufacturer:');
define('TEXT_CHOOSE_CATEGORY', 'Category:');
define('TEXT_CHOOSE_PRODUCT', 'Product:');
define('TEXT_NO_PRODUCTS', 'Ningunos productos');
define('TEXT_CHOOSE_UPCOMING', 'Upcoming products:');
define('TEXT_NO_UPCOMING_PRODUCTS', 'No upcoming products:');

define('TEXT_EVENT_OSC_LINK', 'Store Link:');
define('TEXT_EVENT_OSC_LINK_HELP', '(acoplamiento a un fabricante espec�fico, a una categor�a, a un producto o a un producto pr�ximo)');
define('TEXT_CURRENT_OSC_LINK', 'Current Store link: ');
define('TEXT_START_DATE_NOTE', 'Upcoming products note: <b>Start Date</b> field will be set to "products_date_available".');
define('TEXT_EVENT_LINK', 'Link:');
define('TEXT_EVENT_LINK_HELP', 'Additional link, eg.: www.mysite.com/event_page.html (no http://)');
define('TEXT_EVENT_IMAGE', 'Image:');
define('TEXT_EVENT_NO_IMAGE', 'No Image:');

define('TEXT_EVENT_PREVIEW', 'Preview:');

define('TEXT_EVENT_DELETE_CONFIRM', 'Sure you want to delete event <a href="'. FILENAME_EVENTS_MANAGER .'?eID='. (isset($eID) ? $eID : 0) .'&action=edit"><font color="red"><b>'. (isset($eID) ? $eID : 0) .'</b></font></a> ?');
define('TEXT_DELETE_EVENTS', 'Delete all events before:');
//define('TEXT_EVENTS_DELETE_CONFIRM', 'Sure you want to delete all events before <b>'. (isset($before) ? $before : '') .'</b> ?');
define('TEXT_EVENTS_DELETE_CONFIRM', 'Usted quiere Sure suprimir todos los acontecimientos antes<b>'.(isset($before) && ($before != '') ? $before : '').'</b>?');


define('TEXT_INFO_DELETE_EVENT_INTRO', 'Are you sure you want to delete this event?');

define('ERROR_EVENT_TITLE', 'Error: Event Title required');
define('ERROR_EVENT_START_DATE', 'Error: Event Start Date required');

define('ERROR_REQUIRED_FIELDS', ' * required');
?>
