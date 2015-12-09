<?php
/*
  $Id: login.php,v 1.1 2004/03/05 01:39:13 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/

define('NAVBAR_TITLE', 'Anmeldung');
define('HEADING_TITLE', 'Willkommen, bitte melden Sie sich an');

define('HEADING_RETURNING_ADMIN', 'Anmeldepanel:');
define('HEADING_PASSWORD_FORGOTTEN', 'Passwort vergessen:');
define('TEXT_RETURNING_ADMIN', 'Nur f&uuml;r Mitarbeiter!');
define('ENTRY_FIRSTNAME', 'Vorname:');
define('IMAGE_BUTTON_LOGIN', 'Eingeben');

define('TEXT_PASSWORD_FORGOTTEN', 'Passwort vergessen?');

define('TEXT_LOGIN_ERROR', '<font color="#ff0000"><b>FEHLER:</b></font> Falscher Username oder Passwort!');
define('TEXT_FORGOTTEN_ERROR', '<font color="#ff0000"><b>FEHLER:</b></font> Vorname und Passwort stimmen nicht &uuml;berein!');
define('TEXT_FORGOTTEN_FAIL', 'Sie haben es mehr als 3 mal versucht. Aus Sicherheitsgr&uuml;nden kontaktieren Sie bitte den Webmaster, um ein neues Passwort zu bekommen.<br>&nbsp;<br>&nbsp;');
define('TEXT_FORGOTTEN_SUCCESS', 'Das neue Passwort wurde Ihnen an Ihre Emailadresse zugesandt. Bitte &uuml;berpr&uuml;fen Sie Ihre Emails und klicken Sie Zur&uuml;ck, um sich erneut anzumelden<br>&nbsp;<br>&nbsp;');
define('TEXT_FORGOTTEN_SUPPORT_MESSAGE','Wenn Sie die zurückstellende Unterstützung benötigen, treten Ihr email address oder das Zurückholen Ihres Kennwortes bitte Ihrer webhost Unterstützung oder mit CRE geladener Unterstützung an in Verbindung <a href="http://www.creloaded.com/support/" target="_blank">www.creloaded.com/support/</a>');

define('ADMIN_EMAIL_SUBJECT', 'Neues Kennwort');
define('ADMIN_EMAIL_TEXT', 'Hi %s,' . "\n\n" . 'Sie k&ouml;nnen das Admin-Panel mit folgendem Passwort betreten. Wenn Sie sich angemeldet haben, &auml;ndern Sie bitte umgehend Ihr Passwort!' . "\n\n" . 'Webseite : %s' . "\n" . 'Username: %s' . "\n" . 'Passwort: %s' . "\n\n" . 'Danke!' . "\n" . '%s' . "\n\n" . 'Dies ist eine vom System automatisch generierte Antwort. Eine Antwort Ihrerseits bliebe ungelesen!');
define('TEXT_PASSWORD_FORGOTTEN_TITLE','Vergessenes Kennwort');
?>