<?php
/*
  $Id: pages.php,v 1.0.0.0 2007/02/27 13:41:11 datazen Exp $

  CRE Loaded, Open Source E-Commerce Solutions
  http://www.creloaded.com

  Copyright (c) 2007 CRE Loaded
  Copyright (c) 2003 osCommerce

  Released under the GNU General Public License
*/

define('HEADING_TITLE', 'Gerente de Página de CDS');
define('HEADING_TITLE_PAGES', 'Cree/Corrija Página');
define('HEADING_TITLE_SEARCH', 'Búsqueda:');
define('HEADING_TITLE_GOTO', 'Vaya:');
define('HEADING_TITLE_NEW_PAGES', 'Nueva Página');
define('HEADING_TITLE_EDIT_PAGES', 'Corrija Página');
define('HEADING_TITLE_NEW_PAGES_CATEGORY', 'Nueva Categoría');
define('HEADING_TITLE_EDIT_PAGES_CATEGORY', 'Corrija Categoría');
define('TEXT_PAGES_HEADING_DELETE_PAGE','Suprima Página');
define('TABLE_HEADING_PAGES_CATEGORIES', 'Categorías/Páginas');
define('TABLE_HEADING_STATUS', 'Estado');
define('TABLE_HEADING_MENU', 'Menú');
define('TABLE_HEADING_LISTING', 'Listado');
define('TABLE_HEADING_PRODUCT', 'Producto');
define('TABLE_HEADING_SORT_ORDER','Clase');
define('TABLE_HEADING_ACTION', 'Acción');
define('TEXT_CATEGORIES_COUNT', 'Categorías:');
define('TEXT_CATEGORIES_TEMPLATE', 'Plantilla de Categorías de Uso:');
define('TEXT_PAGES_COUNT', 'Páginas:');
define('TEXT_PAGES_HEADING_NEW_PAGES_CATEGORY', 'Nueva Categoría');
define('TEXT_PAGES_HEADING_EDIT_PAGES_CATEGORY', 'Corrija Categoría');
define('TEXT_PAGES_HEADING_DELETE_PAGES_CATEGORY', 'Suprima Categoría');
define('TEXT_PAGES_HEADING_MOVE_PAGES_CATEGORY', 'Categoría de Movimiento');
define('TEXT_PAGES_HEADING_MOVE_PAGES', 'Página de Movimiento');
define('TEXT_PAGES_CATEGORY_COUNT', 'Páginas:');
define('TEXT_PAGES_CATEGORY_STATUS', 'Estado:');
define('TEXT_PAGES_CATEGORY_DESCRIPTION', 'Descripción:');
define('TEXT_PAGES_CATEGORY_SORT_ORDER', 'Orden de Clase:');
define('TEXT_PAGE_CATEGORY_URL_OVERRIDE','Los URL Anulan:');
define('TEXT_OVERRIDE_TARGET','Los URL Anulan el Objetivo:');
define('TEXT_APPEND_CATEGORY','añada CDpath');
define('TEXT_TARGET_PAGE','El _blank es para la nueva ventana');
define('TEXT_DATE_PAGES_CATEGORY_CREATED', 'Creado:');
define('TEXT_DATE_PAGES_CATEGORY_LAST_MODIFIED', 'Último Modificado:');
define('TEXT_IMAGE_NONEXISTENT', 'IMAGEN NO EXISTE');
define('TEXT_PAGES_THUMBNAIL_IMAGE', 'Imagen de Uña del pulgar');
define('TEXT_NEW_PAGES_CATEGORIES_INTRO', 'Por favor llene la información siguiente para la nueva categoría');
define('TEXT_EDIT_PAGES_CATEGORIES_INTRO', 'Por favor haga cualquier cambio necesario');
define('TEXT_DELETE_PAGES_CATEGORIES_INTRO', '¿Usted está seguro que usted quiere suprimir esta categoría?');
define('TEXT_MOVE_PAGES_CATEGORIES_INTRO', '¿Usted está seguro que usted quiere mover esta categoría?');
define('TEXT_MOVE_PAGES_INTRO', '¿Usted está seguro que usted quiere mover esta página?');
define('TEXT_INFO_COPY_TO_PAGES_INTRO', 'Por favor elija la nueva categoría a la que usted desea copiar esta página');
define('TEXT_PAGES_CATEGORIES_NAME', ' Nombre de Menú');
define('TEXT_PAGES_CATEGORY_HEADING',' Título de Título:');
define('TEXT_PAGES_CATEGORIES_DESCRIPTION', ' Descripción:');
define('TEXT_CDS_URL_OVERRIDE', 'Permitir');
define('TEXT_PAGES_CATEGORIES_IMAGE', 'Imagen de Uña del pulgar:');
define('TEXT_PAGES_CATEGORIES_SORT_ORDER', 'Orden de Clase:');
define('TEXT_PAGES_CATEGORIES_STATUS', 'Estado:');
define('TEXT_PAGES_CATEGORIES_STATUS_ENABLE', 'Permitir');
define('TEXT_PAGES_CATEGORIES_STATUS_DISABLE', 'Incapacitar');
define('TEXT_DELETE_WARNING_LINKS', '<b>ADVERTENCIA:</b> ¡hay páginas de %s todavía unidas para esta categoría!');
define('TEXT_EMPTY_CATEGORY', 'Categoría Vacía');
define('TEXT_NO_CHILD_CATEGORIES_OR_PAGES', 'No hay ningunas categorías o páginas en este nivel');
define('TEXT_CDS_NO_CATEGORIES_OR_PAGES_SELECTED', 'Ninguna Categoría o Página Seleccionada.');
define('TEXT_DELETE_INTRO', '¿Usted está seguro que usted quiere suprimir esta página?');
define('TEXT_PAGES_AUTHOR', 'Autor:');
define('TEXT_PAGES_SORT_ORDER', 'Orden de Clase:');
define('TEXT_DATE_PAGES_CREATED', 'Fecha Creada:');
define('TEXT_DATE_PAGES_LAST_MODIFIED', 'Fecha Última Modificado:');
define('TEXT_NO_PAGE_DETAIL_IMAGE', '(sólo aparece en Listados y no en el Detalle de Página)');
define('TEXT_INFO_HEADING_COPY_TO_PAGES', 'Copia A');
define('TEXT_INFO_HEADING_MOVE_PAGES', 'Movimiento A');
define('TEXT_PAGES_HOW_TO_COPY', 'Método de Copia:');
define('TEXT_PAGES_COPY_AS_LINK', 'Página de eslabón');
define('TEXT_COPY_AS_DUPLICATE', 'Página duplicada');
define('TEXT_INFO_CURRENT_PAGES_CATEGORIES', 'Categorías Corrientes:');
define('TEXT_COPY', 'Movimiento: <b>%s</b>');
define('ENTRY_TITLE', 'Título:');
define('ENTRY_MENU_NAME', 'Nombre de Menú');
define('ENTRY_CATEGORY_MENU', ' Nombre de Menú');
define('ENTRY_CATEGORY', 'Categoría:');
define('ENTRY_BLURB', ' Listado de Información publicitaria:');
define('ENTRY_BODY', 'Cuerpo:');
define('ENTRY_IMAGE', 'Imagen:');
define('ENTRY_META_TITLE', 'Meta Title:');
define ('ENTRY_HEADING_TITLE_IMAGE','Título de Imagen de Título:');
define('ENTRY_CATEGORY_PAGE_BANNER_IMAGE','Bandera de Jefe:');
define('PAGES_SUB_CATEGORY_VIEW','Vista de Categoría de Suscripción:');
define('PAGES_LISTING_CONTENT_MODE','Listado de Modo Contento:');
define('PAGES_LISTING_COLUMNS','Página que Pone Columnas en una lista:');
define('TEXT_PAGES_USE_SEPERATE_LANGUAGE','Uso lenguas separadas');
define('TEXT_PAGES_USE_ENGLISH','Use el inglés en todas las lenguas');
define('LANGUAGE_SAVING_OPTION','Lengua que Salva Opción:');
define('WITH_DESC_LEFT','con descripción en izquierdo');
define('TEXT_PAGES_NESTED','Anidado');  
define('TEXT_PAGES_FLAT','El apartamento <span class="smallText">(todas las páginas deben estar en categorías de suscripción para ser visibles)</span>');
define('TEXT_PAGES_THUMBNAIL','Uña del pulgar con Información publicitaria');
define('TEXT_SHOW_LINK','Eslabones de Espectáculo en:');
define('TEXT_IN_MENU','Menú de InfoBox');
define('TEXT_AUXILIARY_CONTENT_FILE','Archivo Contento Auxiliar');
define('TEXT_ACF_FILE_MISSING','El Archivo Contento Auxiliar <b>%s</b> no existe en el servidor.');
define('TEXT_ACF_FILE_PLEASE_UPLOAD','Por favor cargue a ');
define('TEXT_AUXILIARY_CONTENT_FILE_RENAME_ERROR','Renombre Archivo Contento Auxiliar es Minusválido');
define('TEXT_AUXILIARY_CONTENT_FILE1','Archivo');
define('TEXT_AUXILIARY_CONTENT_FILE_MISSING','Ausencia de Archivo de ACF');
define('TEXT_IN_PAGE_LISTING','Listado de Página');
define('TEXT_IN_CATEGORY_LISTING','En Listado de Categoría');
define('TEXT_PAGES_IMAGES','Imágenes Sólo');
define('META_TAG_INFORMATION','Información de Meta Tag');
define('ENTRY_META_KEYWORD_CATEGORY','Palabras clave de Meta Tag:');
define('DISPLAY_MODES','Opciones de Demostración:');
define('PAGES_IMAGES','Imagen de Páginas:');
define('TEXT_CATEGORY_IMAGES','Imágenes de CDS:');
define('TEXT_BANNER_IMAGE','<small>(muestra en lo alto de todos <u> al niño </u> categorías y páginas)</small>');
define('TEXT_TITLE_IMAGE','<small>(anula el texto de Título que se Dirige para esta categoría)</small>');
define('TEXT_CATEGORY_IMAGE','<small>(muestra en listados de subcategoría)</small>');
define('TEXT_CATAGORY_IMAGE_DELETE_SHORT','Suprimir');
define('TEXT_CATAGORY_IMAGE_REMOVE_SHORT','Quitar');
define('TEXT_PAGES_IMAGE_NOTE','<b>Imagen de Página:</b><br>'); 
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
define('TEXT_NO_CATEGORY', 'Ninguna Categoría');
define('TEXT_MOVE', 'Movimiento: <b>%s</b>');
define('TEXT_PREVIEW','Vista anticipada');
define('TEXT_SELECT_PRODUCT','-------Seleccionar el Producto--------');
define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'La demostración <b>%d</b> a <b>%d</b> (de <b>%d</b> páginas)');
define('IMAGE_NEW_PAGE', 'Nueva Página');
define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Error: no Puede unir páginas en la misma categoría.');
define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio de imágenes de catálogo no es writeable: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de imágenes de catálogo no existe: ' . DIR_FS_CATALOG_IMAGES);
define('ERROR_CATALOG_PAGE_DIRECTORY_NOT_WRITEABLE', 'Error: el directorio de Directorio de Páginas de catálogo no es writeable:' );
define('ERROR_CATALOG_PAGE_DIRECTORY_DOES_NOT_EXIST', 'Error: el directorio de Páginas de catálogo no existe: ' );
define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Error: la Categoría no puede ser movida en la categoría de niño.');
define('TEXT_ERROR','<font color="#FF0000">¡Advertencia! Había un error en cargar el archivo Auxiliar </font>');
define('CDS_IMAGE_ICON_STATUS_INACTIVE', 'Inactivo: Chasquido para Activar');
define('CDS_IMAGE_ICON_STATUS_ACTIVE', 'Activo: Chasquido para Desactivar');
define('IMAGE_UPDATE_SORT', 'Clase De la Actualización');

?>