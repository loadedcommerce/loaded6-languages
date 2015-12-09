<?php
/*
  $Id: ot_coupon.php,v 1.3 2004/03/15 12:13:02 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
  if (!defined('MODULE_ORDER_TOTAL_COUPON_TEXT_ERROR')) {
    define('MODULE_ORDER_TOTAL_COUPON_TEXT_ERROR', 'Message');
  }
  define('MODULE_ORDER_TOTAL_COUPON_TITLE', 'Rabatt-Kupons');
  define('MODULE_ORDER_TOTAL_COUPON_HEADER', 'Geschenk-Gutscheine/Rabatt-Kupons');
  define('MODULE_ORDER_TOTAL_COUPON_DESCRIPTION', 'Rabatt-Kupon');
  if (!defined('SHIPPING_NOT_INCLUDED')) {
    define('SHIPPING_NOT_INCLUDED', ' [Versand nicht enthalten]');
  }
  if (!defined('TAX_NOT_INCLUDED')) {
    define('TAX_NOT_INCLUDED', ' [MwSt. nicht enthalten]');
  }
  
  define('MODULE_ORDER_TOTAL_COUPON_USER_PROMPT', '');
  define('ERROR_NO_INVALID_REDEEM_COUPON', 'Ung&uuml;ltiger Kupon-Code');
  define('ERROR_INVALID_STARTDATE_COUPON', 'Dieser Kupon ist nicht verf&uuml;gbar');
  define('ERROR_INVALID_FINISDATE_COUPON', 'Dieser Kupon ist abgelaufen');
  define('ERROR_INVALID_USES_COUPON', 'Dieser Kupon kann so oft benutzt werden: ');
  define('TIMES', ' mal.');
  define('ERROR_INVALID_USES_USER_COUPON', 'Sie haben nun den Kupon nun so oft benutzt, wie es maximal pro Kunden erlaubt ist.');
  define('REDEEMED_COUPON', 'ein Kupon im Wert von ');
  define('REDEEMED_MIN_ORDER', 'bei Bestellungen &uuml;ber mindestens ');
  define('REDEEMED_RESTRICTIONS', ' [Zutreffende Artikel-Kategorie Einschr&auml;nkungen]');
 //moved to base language define file
//  define('TEXT_ENTER_COUPON_CODE', 'Enter Redeem Code&nbsp;&nbsp;');
  define('IMAGE_REDEEM_VOUCHER', 'Redeem Code Voucher');
?>