<?php
/* $Id$
osCommerce, Open Source E-Commerce Solutions
http://www.oscommerce.com
Copyright (c) 2002 osCommerce

Released under the GNU General Public License
xsell.php
Original Idea From Isaac Mualem im@imwebdesigning.com <mailto:im@imwebdesigning.com>
Complete Recoding From Stephen Walker admin@snjcomputers.com
Translate into French Nguyen Hoang Linh linhnh@transat-informatique.fr
*/

define('CROSS_SELL_SUCCESS', 'Les articles de Vente-X mettent � jour avec succ�s pour le produit de Vente-X  #'.(isset($_GET['add_related_product_ID']) ? $_GET['add_related_product_ID'] : 0));
define('SORT_CROSS_SELL_SUCCESS', 'L\'ordre de sorte mettent � jour avec succ�s pour le produit de Vente-X #'.(isset($_GET['add_related_product_ID']) ? $_GET['add_related_product_ID'] : 0));
define('HEADING_TITLE', 'Vente crois�e (Vente-X) Admin');
define('TABLE_HEADING_PRODUCT_ID', 'Identit�');
define('TABLE_HEADING_PRODUCT_MODEL', 'Mod�le');
define('TABLE_HEADING_PRODUCT_NAME', 'Nom');
define('TABLE_HEADING_CURRENT_SELLS', 'Vente-X actuel');
define('TABLE_HEADING_UPDATE_SELLS', 'Mis � jour Vente-X');
define('TABLE_HEADING_PRODUCT_IMAGE', 'Image');
define('TABLE_HEADING_PRODUCT_PRICE', 'Prix');
define('TABLE_HEADING_CROSS_SELL_THIS', 'Vente-X ce produit?');
define('TEXT_EDIT_SELLS', 'Modifier');
define('TEXT_SORT', 'Priorit�');
define('TEXT_SETTING_SELLS', 'Modifier Vente-X ');
define('TEXT_PRODUCT_ID', 'Identit� ');
define('TEXT_MODEL', 'Mod�le ');
define('TABLE_HEADING_PRODUCT_SORT', 'Ordre');
define('TEXT_NO_IMAGE', 'Aucune image');
define('TEXT_CROSS_SELL', 'Vente-X');
?>
