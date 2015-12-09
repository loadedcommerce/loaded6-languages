<?php
/*
  $Id: customers.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Pending Customers');
define('HEADING_TITLE_SEARCH', 'Search:');

define('TABLE_HEADING_FIRSTNAME', 'First Name');
define('TABLE_HEADING_LASTNAME', 'Last Name');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Account Created');
define('TABLE_HEADING_ACTION', 'Action');
define('TEXT_ACCOUNT_APPROVAL','Account Approval');
define('TEXT_DATE_ACCOUNT_CREATED', 'Account Created:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Last Modified:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Last Logon:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Number of Logons:');
define('TEXT_INFO_COUNTRY', 'Country:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Number of Reviews:');
define('TEXT_DELETE_INTRO', 'Are you sure you want to delete this customer?');
define('TEXT_DELETE_REVIEWS', 'Delete %s review(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Delete Customer');
if (!defined('TYPE_BELOW')) {
  define('TYPE_BELOW', 'Type below');
}
define('PLEASE_SELECT', 'Select One');

// Eversun mod for sppc and qty price breaks
define('TABLE_HEADING_CUSTOMERS_GROUPS', 'Customer&#160;Group');
define('TABLE_HEADING_CUSTOMERS_STATE', 'State');
define('TABLE_HEADING_CUSTOMERS_PHONE', 'Phone');
define('TABLE_HEADING_CUSTOMERS_EMAIL', 'Email');
define('TABLE_HEADING_REQUEST_AUTHENTICATION', 'RA');
define('ENTRY_CUSTOMERS_PAYMENT_SET', 'Set payment modules for the customer');
define('ENTRY_CUSTOMERS_PAYMENT_DEFAULT', 'Use settings from Group or Configuration');
define('ENTRY_CUSTOMERS_PAYMENT_SET_EXPLAIN', 'If you choose <b><i>Set payment modules for the customer</i></b> but do not check any of the boxes, default settings (Group settings or Configuration) will still be used.');
define('ENTRY_CUSTOMERS_SHIPPING_SET', 'Set shipping modules for the customer');
define('ENTRY_CUSTOMERS_SHIPPING_DEFAULT', 'Use settings from Group or Configuration');
define('ENTRY_CUSTOMERS_SHIPPING_SET_EXPLAIN', 'If you choose <b><i>Set shipping modules for the customer</i></b> but do not check any of the boxes, default settings (Group settings or Configuration) will still be used.');
define('ENTRY_CUSTOMERS_EMAIL_VALIDATED','Email Validated:');
define('ENTRY_CUSTOMERS_ACCOUNT_VALIDATED','Account Validate');
define('ENTRY_EMAILVALIDATE_YES', 'Validated (active)');
define('ENTRY_EMAILVALIDATE_NO', 'Unvalidated (inactive)');
define('TEXT_EMAIL_VALIDATE_FEATURE','Require E-mail confirmation on account creation is set off.');
define('TEXT_ACCOUNT_VALIDATE_FEATURE','Require Account confirmation on account creation is set off.');
define('ENTRY_ACCOUNTVALIDATE_P', 'Pending');
define('ENTRY_ACCOUNTVALIDATE_A', 'Approve');
define('ENTRY_ACCOUNTVALIDATE_D', 'Deny');
define('EMAIL_TEXT_ACCOUNT_ACTIVATION_NOTIFICATION','Your Account has been approved and activated');
define('EMAIL_TEXT_ACCOUNT_ACTIVATION_NOTIFICATION_SUBJECT','Account Activation');

define('TEXT_PENDING','Pending');
define('TEXT_DENY','Deny');
define('TEXT_APPROVE','Approve');
// Eversun mod end for sppc and qty price breaks

define('IMAGE_APPROVE_PENDING_CUSTOMERS','Click here to Approve all non-approved customers');
?>
