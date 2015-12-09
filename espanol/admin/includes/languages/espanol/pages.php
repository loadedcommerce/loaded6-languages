<?php
/*
  $Id: pages.php,v 1.0.0.0 2007/02/27 13:41:11 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2007 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gerente de P�gina de CDS');
define('HEADING_TITLE_PAGES', 'Cree/Corrija P�gina');
define('HEADING_TITLE_SEARCH', 'B�squeda:');
define('HEADING_TITLE_GOTO', 'Vaya:');
define('HEADING_TITLE_NEW_PAGES', 'Nueva P�gina');
define('HEADING_TITLE_EDIT_PAGES', 'Corrija P�gina');
define('HEADING_TITLE_NEW_PAGES_CATEGORY', 'Nueva Categor�a');
define('HEADING_TITLE_EDIT_PAGES_CATEGORY', 'Corrija Categor�a');
define('TEXT_PAGES_HEADING_DELETE_PAGE','Suprima P�gina');
define('TABLE_HEADING_PAGES_CATEGORIES', 'Categor�as/P�ginas');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_MENU', 'Men�');
define('TABLE_HEADING_LISTING', 'Listado');
define('TABLE_HEADING_PRODUCT', 'Producto');
define('TABLE_HEADING_SORT_ORDER','Clase');
define('TABLE_HEADING_ACTION', 'Acci�n');
define('TEXT_CATEGORIES_COUNT', 'Categor�as:');
define('TEXT_CATEGORIES_TEMPLATE', 'Plantilla de Categor�as de Uso:');
define('TEXT_PAGES_COUNT', 'P�ginas:');
define('TEXT_PAGES_HEADING_NEW_PAGES_CATEGORY', 'Nueva Categor�a');
define('TEXT_PAGES_HEADING_EDIT_PAGES_CATEGORY', 'Corrija Categor�a');
define('TEXT_PAGES_HEADING_DELETE_PAGES_CATEGORY', 'Suprima Categor�a');
define('TEXT_PAGES_HEADING_MOVE_PAGES_CATEGORY', 'Categor�a de Movimiento');
define('TEXT_PAGES_HEADING_MOVE_PAGES', 'P�gina de Movimiento');
define('TEXT_PAGES_CATEGORY_COUNT', 'P�ginas:');
define('TEXT_PAGES_CATEGORY_STATUS', 'Estado:');
define('TEXT_PAGES_CATEGORY_DESCRIPTION', 'Descripci�n:');
define('TEXT_PAGES_CATEGORY_SORT_ORDER', 'Orden de Clase:');
define('TEXT_PAGE_CATEGORY_URL_OVERRIDE','Los URL Anulan:');
define('TEXT_OVERRIDE_TARGET','Los URL Anulan el Objetivo:');
define('TEXT_APPEND_CATEGORY','a�ada CDpath');
define('TEXT_TARGET_PAGE','El _blank es para la nueva ventana');
define('TEXT_DATE_PAGES_CATEGORY_CREATED', 'Creado:');
define('TEXT_DATE_PAGES_CATEGORY_LAST_MODIFIED', '�ltimo Modificado:');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGEN NO EXISTE');
define('TEXT_PAGES_THUMBNAIL_IMAGE', 'Imagen de U�a del pulgar');
define('TEXT_NEW_PAGES_CATEGORIES_INTRO', 'Por favor llene la informaci�n siguiente para la nueva categor�a');
define('TEXT_EDIT_PAGES_CATEGORIES_INTRO', 'Por favor haga cualquier cambio necesario');
define('TEXT_DELETE_PAGES_CATEGORIES_INTRO', '�Usted est� seguro que usted quiere suprimir esta categor�a?');
define('TEXT_MOVE_PAGES_CATEGORIES_INTRO', '�Usted est� seguro que usted quiere mover esta categor�a?');
define('TEXT_MOVE_PAGES_INTRO', '�Usted est� seguro que usted quiere mover esta p�gina?');
define('TEXT_INFO_COPY_TO_PAGES_INTRO', 'Por favor elija la nueva categor�a a la que usted desea copiar esta p�gina');
define('TEXT_PAGES_CATEGORIES_NAME', ' Nombre de Men�');
define('TEXT_PAGES_CATEGORY_HEADING',' T�tulo de T�tulo:');
define('TEXT_PAGES_CATEGORIES_DESCRIPTION', ' Descripci�n:');
define('TEXT_CDS_URL_OVERRIDE', 'Permitir');
define('TEXT_PAGES_CATEGORIES_IMAGE', 'Imagen de U�a del pulgar:');
define('TEXT_PAGES_CATEGORIES_SORT_ORDER', 'Orden de Clase:');
define('TEXT_PAGES_CATEGORIES_STATUS', 'Estado:');
define('TEXT_PAGES_CATEGORIES_STATUS_ENABLE', 'Permitir');
define('TEXT_PAGES_CATEGORIES_STATUS_DISABLE', 'Incapacitar');
define('TEXT_DELETE_WARNING_LINKS', '<b>ADVERTENCIA:</b> �hay p�ginas de %s todav�a unidas para esta categor�a!');
define('TEXT_EMPTY_CATEGORY', 'Categor�a Vac�a');
define('TEXT_NO_CHILD_CATEGORIES_OR_PAGES', 'No hay ningunas categor�as o p�ginas en este nivel');
define('TEXT_CDS_NO_CATEGORIES_OR_PAGES_SELECTED', 'Ninguna Categor�a o P�gina Seleccionada.');
define('TEXT_DELETE_INTRO', '�Usted est� seguro que usted quiere suprimir esta p�gina?');
define('TEXT_PAGES_AUTHOR', 'Autor:');
define('TEXT_PAGES_SORT_ORDER', 'Orden de Clase:');
define('TEXT_DATE_PAGES_CREATED', 'Fecha Creada:');
define('TEXT_DATE_PAGES_LAST_MODIFIED', 'Fecha �ltima Modificado:');
define('TEXT_NO_PAGE_DETAIL_IMAGE', '(s�lo aparece en Listados y no en el Detalle de P�gina)');
define('TEXT_INFO_HEADING_COPY_TO_PAGES', 'Copia A');
define('TEXT_INFO_HEADING_MOVE_PAGES', 'Movimiento A');
define('TEXT_PAGES_HOW_TO_COPY', 'M�todo de Copia:');
define('TEXT_PAGES_COPY_AS_LINK', 'P�gina de eslab�n');
define('TEXT_COPY_AS_DUPLICATE', 'P�gina duplicada');
define('TEXT_INFO_CURRENT_PAGES_CATEGORIES', 'Categor�as Corrientes:');
define('TEXT_COPY', 'Movimiento: <b>%s</b>');
define('ENTRY_TITLE', 'T�tulo:');
define('ENTRY_MENU_NAME', 'Nombre de Men�');
define('ENTRY_CATEGORY_MENU', ' Nombre de Men�');
define('ENTRY_CATEGORY', 'Categor�a:');
define('ENTRY_BLURB', ' Listado de Informaci�n publicitaria:');
define('ENTRY_BODY', 'Cuerpo:');
define('ENTRY_IMAGE', 'Imagen:');
define('ENTRY_META_TITLE', 'Meta Title:');
define ('ENTRY_HEADING_TITLE_IMAGE','T�tulo de Imagen de T�tulo:');
define('ENTRY_CATEGORY_PAGE_BANNER_IMAGE','Bandera de Jefe:');
define('PAGES_SUB_CATEGORY_VIEW','Vista de Categor�a de Suscripci�n:');
define('PAGES_LISTING_CONTENT_MODE','Listado de Modo Contento:');
define('PAGES_LISTING_COLUMNS','P�gina que Pone Columnas en una lista:');
define('TEXT_PAGES_USE_SEPERATE_LANGUAGE','Uso lenguas separadas');
define('TEXT_PAGES_USE_ENGLISH','Use el ingl�s en todas las lenguas');
define('LANGUAGE_SAVING_OPTION','Lengua que Salva Opci�n:');
define('WITH_DESC_LEFT','con descripci�n en izquierdo');
define('TEXT_PAGES_NESTED','Anidado');  
define('TEXT_PAGES_FLAT','El apartamento <span class="smallText">(todas las p�ginas deben estar en categor�as de suscripci�n para ser visibles)</span>');
define('TEXT_PAGES_THUMBNAIL','U�a del pulgar con Informaci�n publicitaria');
define('TEXT_SHOW_LINK','Eslabones de Espect�culo en:');
define('TEXT_IN_MENU','Men� de InfoBox');
define('TEXT_AUXILIARY_CONTENT_FILE','Archivo Contento Auxiliar');
define('TEXT_ACF_FILE_MISSING','El Archivo Contento Auxiliar <b>%s</b> no existe en el servidor.');
define('TEXT_ACF_FILE_PLEASE_UPLOAD','Por favor cargue a ');
define('TEXT_AUXILIARY_CONTENT_FILE_RENAME_ERROR','Renombre Archivo Contento Auxiliar es Minusv�lido');
define('TEXT_AUXILIARY_CONTENT_FILE1','Archivo');
define('TEXT_AUXILIARY_CONTENT_FILE_MISSING','Ausencia de Archivo de ACF');
define('TEXT_IN_PAGE_LISTING','Listado de P�gina');
define('TEXT_IN_CATEGORY_LISTING','En Listado de Categor�a');
define('TEXT_PAGES_IMAGES','Im�genes S�lo');
define('META_TAG_INFORMATION','Informaci�n de Meta Tag');
define('ENTRY_META_KEYWORD_CATEGORY','Palabras clave de Meta Tag:');
define('DISPLAY_MODES','Opciones de Demostraci�n:');
define('PAGES_IMAGES','Imagen de P�ginas:');
define('TEXT_CATEGORY_IMAGES','Im�genes de CDS:');
define('TEXT_BANNER_IMAGE','<small>(muestra en lo alto de todos <u> al ni�o </u> categor�as y p�ginas)</small>');
define('TEXT_TITLE_IMAGE','<small>(anula el texto de T�tulo que se Dirige para esta categor�a)</small>');
define('TEXT_CATEGORY_IMAGE','<small>(muestra en listados de subcategor�a)</small>');
define('TEXT_CATAGORY_IMAGE_DELETE_SHORT','Suprimir');
define('TEXT_CATAGORY_IMAGE_REMOVE_SHORT','Quitar');
define('TEXT_PAGES_IMAGE_NOTE','<b>Imagen de P�gina:</b><br>'); 
define('TEXT_PAGES_IMAGE_REMOVE','Quitar');
define('TEXT_PAGES_IMAGE_DELETE','Suprimir');
define('ICON_URL_OVERRIDE','URL Anulan');
define('ENTRY_META_KEYWORDS', 'Meta Keywords:');
define('ENTRY_META_DESCRIPTION', 'Meta Description:');
define('ENTRY_STATUS', 'Estado:');
define('ENTRY_SORT_ORDER', 'Orden de Clase:');
define('TEXT_ATTACH_PRODUCT', 'Ate Productos:');
define('ENTRY_AUTHOR', 'Autor:');
define('TEXT_PAGES_ACTIVE', 'Activo');
define('TEXT_PAGES_INACTIVE', 'Inactivo');
define('TEXT_PAGES_RENAME_AUXILIARY_CONTENT','Renombre el Archivo Contento Auxiliar:');
define('TEXT_PAGES_CHECK_TO_ENABLE','Compruebe para Permitir');
define('TEXT_NO_CATEGORY', 'Ninguna Categor�a');
define('TEXT_MOVE', 'Movimiento: <b>%s</b>');
define('TEXT_PREVIEW','Vista anticipada');
define('TEXT_SELECT_PRODUCT','-------Seleccionar el Producto--------');
define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'La demostraci�n <b>%d</b> a <b>%d</b> (de <b>%d</b> p�ginas)');
define('IMAGE_NEW_PAGE', 'Nueva P�gina');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: no Puede unir p�ginas en la misma categor�a.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio de im�genes de cat�logo no es writeable: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de im�genes de cat�logo no existe: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_PAGE_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio de Directorio de P�ginas de cat�logo no es writeable:' );
define('ERROR_CATALOG_PAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de P�ginas de cat�logo no existe: ' );
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: la Categor�a no puede ser movida en la categor�a de ni�o.');
define('TEXT_ERROR','<font color="#FF0000">�Advertencia! Hab�a un error en cargar el archivo Auxiliar </font>');
define('CDS_IMAGE_ICON_STATUS_INACTIVE', 'Inactivo: Chasquido para Activar');
define('CDS_IMAGE_ICON_STATUS_ACTIVE', 'Activo: Chasquido para Desactivar');
define('IMAGE_UPDATE_SORT', 'Clase De la Actualizaci�n');

?>