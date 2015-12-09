<?php
/*
   for Separate Pricing Per Customer v4 2005/03/03
   customers_groups.php
*/
  
define('HEADING_TITLE', 'Gruppen');
define('HEADING_TITLE_SEARCH', 'Suchen:');

define('TABLE_HEADING_NAME', 'Group Name');
define('TABLE_HEADING_ID', 'Group ID');
define('TABLE_HEADING_GROUPS_TEMPLATE','Group Template');
define('TABLE_HEADING_ACTION', 'Aktion');
define('TABLE_HEADING_GROUPS_ACCESS', 'Access');
define('TABLE_HEADING_GROUPS_PRICE', 'Price');
define('TABLE_HEADING_GROUPS_STATUS', 'Status');

define('ENTRY_GROUPS_NAME', 'Gruppenname:');
define('ENTRY_GROUPS_TEMPLATE','Group Template:');
define('ENTRY_GROUP_SHOW_TAX', 'Zeige&#160;Preis&#160;mit/ohne&#160;MwSt.:');
define('ENTRY_GROUP_SHOW_TAX_YES', 'Preis inkl. MwSt.');
define('ENTRY_GROUP_SHOW_TAX_NO', 'Preis ohne MwSt.');

define('ENTRY_GROUP_TAX_EXEMPT', 'Steuerfrei:'); 
define('ENTRY_GROUP_TAX_EXEMPT_YES', 'Ja'); 
define('ENTRY_GROUP_TAX_EXEMPT_NO', 'Nein'); 

define('ENTRY_GROUP_PAYMENT_SET', 'Bezahl Module für diese Gruppe setzen');
define('ENTRY_GROUP_PAYMENT_DEFAULT', 'Einstellung der Konfiguration verwenden');
define('ENTRY_PAYMENT_SET_EXPLAIN', 'If you choose <b><i>Set payment modules for the customer group</i></b> but do not check any of the boxes, default settings will still be used.');

define('ENTRY_GROUP_SHIPPING_SET', 'Versand Module für diese Kunden Gruppe');
define('ENTRY_GROUP_SHIPPING_DEFAULT', 'Einstellung der Konfiguration verwenden');
define('ENTRY_SHIPPING_SET_EXPLAIN', 'If you choose <b><i>Set shipping modules for the customer group</i></b> but do not check any of the boxes, default settings will still be used.');

define('TEXT_DELETE_INTRO', 'Wollen Sie diese Gruppe wirklich l&ouml;schen?');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS_GROUPS', 'Anzeigen <b>%d</b> bis <b>%d</b> (von <b>%d</b> Kundengruppen)');
define('TEXT_INFO_HEADING_DELETE_GROUP', 'Gruppe l&ouml;schen');

define('ERROR_CUSTOMERS_GROUP_NAME', 'Bitte geben Sie einen Gruppennamen an');
define('TEXT_CUSTOMERS_GROUPS_1', 'Maximum length: 32 characters');
define('TEXT_CUSTOMERS_GROUPS_2', "This Setting only works when 'Display Prices with Tax'");
define('TEXT_CUSTOMERS_GROUPS_3', "is set to true in the Configuration for your store and Tax Exempt (below) to 'No'.");
define('TEXT_CUSTOMERS_GROUPS_4', "You are not allowed to delete this group:<br><br><b>");


define('GROUP_DETAILS', "Group Details");
define('HEADING_TITLE_GROUP_DISCOUNT', "Group Discount Tool");
define('ENTRY_GROUP_DISCOUNT_OPTION1', "Push to Products Base Price Only");
define('ENTRY_GROUP_DISCOUNT_OPTION2', "Push to Products Base and Quantity Price Break Fields");
define('ENTRY_GROUPS_DISCOUNT', "Group Discount:");
define('TEXT_GROUP_TOOL', '<span class="errorText">** This is only a tool - the discount value is not stored **</span>');
define('ENTRY_GROUPS_HIDE_SHOW_PRICES','Hide/Show Prices: ');
define('ENTRY_GROUP_HIDE_SHOW_PRICES_OPTION1','Hide Prices');
define('ENTRY_GROUP_HIDE_SHOW_PRICES_OPTION2','Show Prices');
define('ENTRY_GROUPS_ALLOW_ADD_TO_CART','Allow Add To Cart: ');
define('ENTRY_GROUPS_ALLOW_ADD_TO_CART_OPTION1','Yes');
define('ENTRY_GROUPS_ALLOW_ADD_TO_CART_OPTION2','No');

define('ENTRY_PUBLIC_DESCRIPTION','Public Description: ');
define('ENTRY_APPROVAL_MESSAGE','Approval Message: ');
define('ENTRY_COMMENTS','Comments: ');
define('ENTRY_ADMIN_COMMENTS','Admin comments: ');
define('HEADING_TITLE_ADDITIONAL_INFO','Additional Info');

define('TEXT_PUSH_SAVE_OPTION','Außer Wahlen');
define('TEXT_PUSH_WARNING','Warnung: Betrieb kann heraus Zeit festsetzen, wenn dieses eine erste Seite ist und Sie viele Produkte haben.');
?>