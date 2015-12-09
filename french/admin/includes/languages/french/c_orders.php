<?php
/*
  $Id: edit_orders.php,v 1.2 2004/03/05 00:36:41 ccwjr Exp $

  osCommerce, Open Source E-Commerce Solutions
  http://www.oscommerce.com

  Copyright (c) 2002 osCommerce

  Released under the GNU General Public License
*/
define('ADDPRODUCT_TEXT_CONFIRM_QUANTITY', 'morceaux de ce produit');
define('ADD_PRODUCT', 'Agregue un producto a la orden');
define('HEADING_TITLE', '�dition de l\'ordre');
define('HEADING_TITLE_NUMBER', 'Nr.');
define('HEADING_TITLE_DATE', 'of');
define('HEADING_SUBTITLE', 'Veuillez �diter toutes les pi�ces comme d�sir�es et cliquez sur dessus le " ; Update" ; bouton ci-dessous.');
define('HEADING_TITLE_SEARCH', 'Identification d\'ordre:');
define('HEADING_TITLE_STATUS', 'Statut:');
define('ADDING_TITLE', 'Ajouter un produit � l\'ordre');
define('CATEGORY_ORDER_DETAILS', 'Groupes de client');
define('ENTRY_CURRENCY', 'Devise de client');

define('ENTRY_UPDATE_TO_CC', '(Mise � jour � <b>Par la carte de cr�dit</b> pour regarder des champs de cc.)');
define('HINT_DELETE_POSITION', '<font color="#FF0000">Conseil: </font>Pour supprimer un ensemble de produit sa quantit� � "0".');
define('HINT_TOTALS', '<font color="#FF0000">Conseil: </font>Sentez-vous libre pour donner des escomptes en ajoutant des montants n�gatifs � la liste.<br>Champs avec le " ; 0" ; des valeurs sont supprim�es en mettant � jour l\'ordre (exception : exp�dition).');
define('HINT_PRESS_UPDATE', 'Veuillez cliquer sur dessus le " ; Update" ; pour sauver toutes les modifications apport�es ci-dessus.');
define('TABLE_HEADING_COMMENTS', 'Commentaires');
define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_CUSTOMER_ID', 'Identification de client :');
define('TABLE_HEADING_CUSTOMER_GROUP', 'Groupe de client: ');
define('TABLE_HEADING_PWA', 'Achat sans compte');
define('TABLE_HEADING_ORDER_TOTAL', 'Total d\'ordre');
define('TABLE_HEADING_DATE_PURCHASED', 'Date achet�e');
define('TABLE_HEADING_STATUS', 'Statut');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_QUANTITY', 'Quantit�.');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Mod�le');
define('TABLE_HEADING_PRODUCTS', 'Produits');
define('TABLE_HEADING_TAX', 'Imp�t');
define('TABLE_HEADING_TOTAL', 'Total');
define('TABLE_HEADING_UNIT_PRICE', 'Prix unitaire');
define('TABLE_HEADING_BASE_PRICE', 'Prix bas de catalogue');
define('TABLE_HEADING_UNIT_PRICE_TAXED', 'Prix (incl. Imp�t)');
define('TABLE_HEADING_TOTAL_PRICE', 'Prix total');
define('TABLE_HEADING_TOTAL_PRICE_TAXED', 'Total (incl. Imp�t)');
define('TABLE_HEADING_TOTAL_MODULE', 'Composant des prix totaux');
define('TABLE_HEADING_TOTAL_AMOUNT', 'Quantit�');

define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Prix (ex)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Prix  (inc)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Total (ex)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Total (inc)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Le client a annonc�');
define('TABLE_HEADING_DATE_ADDED', 'La date s\'est ajout�e');

define('ENTRY_CUSTOMER', 'Client:');
define('ENTRY_CUSTOMER_NAME', 'Nom:');
define('ENTRY_CUSTOMER_COMPANY', 'Compagnie:');
define('ENTRY_CUSTOMER_ADDRESS', 'Adresse:');
define('ENTRY_CUSTOMER_SUBURB', 'Banlieue');
define('ENTRY_CUSTOMER_CITY', 'Ville');
define('ENTRY_CUSTOMER_STATE', '�tat');
define('ENTRY_CUSTOMER_POSTCODE', 'Code postal');
define('ENTRY_CUSTOMER_COUNTRY', 'Pays');
define('ENTRY_CUSTOMER_PHONE', 'T�l�phone');
define('ENTRY_CUSTOMER_EMAIL', 'Email');
define('ENTRY_SOLD_TO', 'Vendu �:');
define('ENTRY_DELIVERY_TO', 'La livraison �:');
define('ENTRY_SHIP_TO', 'Bateau �:');
define('ENTRY_SHIPPING_ADDRESS', 'Adresse de exp�dition:');
define('ENTRY_BILLING_ADDRESS', 'Adresse de facturation:');
define('ENTRY_PAYMENT_METHOD', 'Payment Method:');
define('ENTRY_CREDIT_CARD_TYPE', 'Type par la carte de cr�dit:');
define('ENTRY_CREDIT_CARD_OWNER', 'Propri�taire par la carte de cr�dit:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Nombre par la carte de cr�dit:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Par la carte de cr�dit expire:');
define('ENTRY_CREDIT_CARD_CCV', 'Code de CCV/CVC/CSC: ');
define('ENTRY_CREDIT_CARD_START_DATE', 'Date de d�but : ');
define('ENTRY_CREDIT_CARD_ISSUE', 'Nombre d\'issue: ');
define('ENTRY_SUB_TOTAL', 'Total partiel:');
define('ENTRY_TAX', 'Imp�t:');
define('ENTRY_SHIPPING', 'Exp�dition:');
define('ENTRY_TOTAL', 'Total:');
define('ENTRY_DATE_PURCHASED', 'La date a achet�:');
define('ENTRY_STATUS', 'Statut:');
define('ENTRY_DATE_LAST_UPDATED', 'Le bout de date a mis � jour:');
define('ENTRY_NOTIFY_CUSTOMER', 'Informez le client:');
define('ENTRY_NOTIFY_COMMENTS', 'Apposez les commentaires � l\'email d\'avis de statut:');
define('ENTRY_PRINTABLE', 'Facture d\'impression');
define('ENTRY_CUSTOMER_DISCOUNT', 'Employez les nombres entiers, aucuns escomptes de pour cent ');
define('ENTRY_CUSTOMER_GV', 'Escompte/bon de cadeau: ');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Ordre de suppression');
define('TEXT_INFO_DELETE_INTRO', '�tes-vous s�r vous voulez-vous supprimer cet ordre ?');
//define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Restock product quantity');
define('TEXT_DATE_ORDER_CREATED', 'Date cr��e:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Last Modified:');
define('TEXT_DATE_ORDER_ADDNEW', 'Ajoutez le produit');
define('TEXT_INFO_PAYMENT_METHOD', 'M�thode de paiement:');

define('TEXT_CARD_ENCRPYT', '<font color=green> </b> Ce nombre de cc est stock� a chiffr�</b></font>');
define('TEXT_CARD_NOT_ENCRPYT', '<font color=red> <b>Avertissement ! ! ! ! Ce nombre de cc n\'est pas stock� chiffr� </b></font>');
define('TEXT_EXPIRES_ENCRPYT', '<font color=green> </b> Ce cc expire date est stock� a chiffr� </b></font>');
define('TEXT_EXPIRES_NOT_ENCRPYT', '<font color=red> <b>Avertissement ! ! ! ! Ce cc expire date n\'est pas stock� chiffr� </b></font>');
define('TEXT_CCV_ENCRPYT', '<font color=green> </b> Ce cc CCV est stock� a chiffr� </b></font>');
define('TEXT_CCV_NOT_ENCRPYT', '<font color=red> <b>Avertissement ! ! ! ! Ce cc CCV n\'est pas stock� chiffr� si le blanc ignorent ce message</b></font>');

define('TEXT_EXPIRES_REMOVED', '<font color=green> </b> Ce cc expire date a �t� enlev� du magasin.</b></font>');
define('TEXT_CCV_REMOVED', '<font color=green> </b> CCV code : Non stock� - en raison de traiter des r�glements. Permettez l\'email CCV dans des arrangements de module.</b></font>');
define('TEXT_CARD__REMOVED', '<font color=green> </b> Ce nombre de cc n\'est pas magasin ou a �t� enlev� du magasin.</b></font>');


define('ENTRY_IPADDRESS', 'IP Address:');
define('ENTRY_IPISP', 'ISP:');

define('TEXT_ALL_ORDERS', 'Tous les ordres');
define('TEXT_NO_ORDER_HISTORY', 'Aucune histoire d\'ordre disponible');


define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Mise � jour d\'ordre');
define('EMAIL_TEXT_ORDER_NUMBER', 'Num�ro de commande:');
define('EMAIL_TEXT_INVOICE_URL', 'Facture d�taill�e:');
define('EMAIL_TEXT_DATE_ORDERED', 'La date a pass� commande:');
define('EMAIL_TEXT_STATUS_UPDATE', 'Votre ordre a �t� mis � jour au statut suivant.' . "\n\n" . 'Nouveau statut: %s' . "\n\n" . 'Veuillez r�pondre � cet email si vous avez n\'importe quelles questions.' . "\n");
define('EMAIL_TEXT_COMMENTS_UPDATE', 'Les commentaires pour votre ordre sont' . "\n\n%s\n\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Erreur : L\'ordre n\'existe pas.');
define('SUCCESS_ORDER_UPDATED', 'Succ�s : L\'ordre a �t� avec succ�s mis � jour.');
define('WARNING_ORDER_NOT_UPDATED', 'Avertissement : Rien � changer. L'ordre n'�tait pas mis � jour.');
define('SUCCESS_PRODUCT_ADDED', 'Succ�s : Cet ordre a �t� mis � jour et un produit a �t� ajout�');
define('ADDPRODUCT_TEXT_CATEGORY_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_PRODUCT', 'Choisissez un produit');
define('ADDPRODUCT_TEXT_PRODUCT_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_SELECT_OPTIONS', 'Choisissez une option');
define('ADDPRODUCT_TEXT_OPTIONS_CONFIRM', 'OK');
define('ADDPRODUCT_TEXT_OPTIONS_NOTEXIST', 'Le produit n\'a aucune option, clic pour sauter cette �tape...');
define('ADDPRODUCT_TEXT_OPTIONS_EXIST', 'Le produit a des options, clic � passer � la prochaine �tape...');
define('ADDPRODUCT_TEXT_CONFIRM_ADDNOW', 'Ajoutez');
define('ADDPRODUCT_TEXT_STEP', '�tape');
define('ADDPRODUCT_TEXT_PROGRESS', 'Progr�s d\'�tape ');

define('ADDPRODUCT_TEXT_STEP_1', '�tape 1');
define('ADDPRODUCT_TEXT_STEP_2', '�tape 2');
define('ADDPRODUCT_TEXT_STEP_3', '�tape 3');
define('ADDPRODUCT_TEXT_STEP_4', '�tape 4');

define('MENUE_TITLE_CUSTOMER', '1. Donn�es de client');
define('MENUE_TITLE_PAYMENT', '2. M�thode de paiement');
define('MENUE_TITLE_ORDER', '3. Produits command�s');
define('MENUE_TITLE_TOTAL', '4. Escompte, exp�dition et total');
define('MENUE_TITLE_STATUS', '5. Statut et avis');
define('MENUE_TITLE_UPDATE', '6. Donn�es de mise � jour');

define('DONT_ADD_NEW_PRODUCT', "Don' ; t ajoutent le produit");
define('SELECT_THESE_OPTIONS', "Choisissez ces options");
define('ADDPRODUCT_TEXT_GET_PRODUCT', 'Obtenez la liste de produits');
define('TEXT_ADD_PROD_NAME', 'Nom de produit');
define('TEXT_ADD_PROD_PRICE', 'Prix bas de produit');
define('TEXT_PRODUCT_OPTIONS', 'Options de produit');
define('REMOVE_CVV', 'Enlevez le cc');
?>
