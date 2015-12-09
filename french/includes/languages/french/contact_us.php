<?php
/*
  $Id: contact_us.php,v 1.2 2004/03/05 00:36:42 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Contacts');
define('NAVBAR_TITLE', 'Contacts');
define('TEXT_SUCCESS', 'Votre message a &eacute;t&eacute; bien envoy&eacute;.');
//define('EMAIL_SUBJECT', 'Mail pour ' . STORE_NAME);

define('ENTRY_NAME', 'Votre nom :');
define('ENTRY_EMAIL', 'Votre adresse E-Mail :');
define('ENTRY_ENQUIRY', 'Enquiry:');

// Contact US Email Subject : DMG
define('TEXT_EMAIL_SUBJECTS', '* select a subject *');
define('EMAIL_SUBJECT', 'Message from ' . STORE_NAME. ': ');
define('ENTRY_SUBJECT','Subject:');

// CRE Contact Us Enhancements 
// VJ
define('ENTRY_URGENT', 'Urgent:');
define('ENTRY_SELF', 'Send myself a copy:');
define('TEXT_SUBJECT_URGENT', 'Urgent');
define('ENTRY_TOPIC','Email Topic:');
define('ENTRY_TOPIC_1', 'Sales');
define('ENTRY_TOPIC_2', 'Tracking');
define('ENTRY_TOPIC_3', 'Technical');
define('ENTRY_TOPIC_4', 'Sponsorship');
define('ENTRY_TOPIC_5', 'Wholesale');

define('TEXT_SUBJECT_PREFIX', 'Contact from ' . STORE_NAME . ': ');
define('TEXT_BODY', '<div class="main"><strong>Si�ges sociaux de corporation:</strong><br>
Votre nom commercial <br>
   adresse de rue d/affaires<br>
  Votre ville daffaires et code postal.<br>
  Pays d/affaires
<br><br>
T�l�phone:  Num�ro de t�l�phone<br>
Fax:  Num�ro de fax<br>
<br>
<strong>E-mail Contacts:</strong><br>
Business Relations - <a href="mailto:info@yourstore.com" target="blank">info@yourstore.com</a><br>
Wholesale Inquiries -&nbsp;<a href="mailto:wholesale@yourstore.com" target="blank">wholesale@yourstore.com</a><br>
Technical Assistance - <a href="mailto:tech@yourstore.com" target="blank">tech@yourstore.com</a><br>
Product Inquiries - <a href="mailto:sales@yourstore.com" target="blank">sales@yourstore.com</a><br>
Order Status - <a href="mailto:tracking@yourstore.com" target="blank">tracking@yourstore.com</a><br>
<br><br>
<strong>AOL IM Help:</strong> Your Business Name - <a href="aim:goim?screenname=YourAIM_ScreenName&message=Hi.+Are+you+there?">Click Here</a>
</div>
<br>
: Edit this information in includes/languages/' . $language . '/contact_us.php<br>');
?>