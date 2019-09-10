<?php

define('DS', "/");
if($_SERVER['HTTP_HOST']=='localhost'){
    define('ROOT_URL', 'http://localhost/tailieukientruc');
}else {
     define('ROOT_URL', 'https://tailieukientruc.net');
}

define('ROOT_PATH', dirname(__FILE__));
require_once dirname(__FILE__) .'/webapp/config/global_define.php';

define('NAME_APP', 'Tài liệu kiến trúc');
define('DIR_CACHE', dirname(__FILE__) . '/data/cache/');

define('BASE_URL_ADMIN', ROOT_URL . '/admin/');

define('FCK', ROOT_URL . '/includes/fckeditor/');
define('FCK_FILE_PATCH', ROOT_URL . '/images/');
define('FCK_PATCH_IMG_UPLOAD_EDITOR', '../../../../../../');

define('IMG_EDIT', ROOT_URL . 'images/news/images/');
define('IMG_NEWS', 'images/news/');
define('IMG_NEWS_THUMB', 'images/news/thumbs/');

define('IMG_PRODUCT', 'images/product/');
define('IMG_PRODUCT_THUMB', 'images/product/thumbs/');

define('IMG_ADS', 'images/ads/');
define('IMG_LINK', 'images/links/');
define('IMG_LINK_2', 'images/links/2/');
define('DIR_TAILIEU', 'data/tailieu/');


$GLOBALS['POSITION'] = array('0' => 'Tất cả', '1' => 'HOME_TOP', '2' => 'HOME_LEFT', '3' => 'HOME_RIGHT_1', '4' => 'HOME_RIGHT_2', '5' => 'HOME_LEFT_SLIDER', '6' => 'HOME_RIGHT_SLIDER', '7' => 'DETAIL_CENTER','8'=>'DETAIL_BOTTOM','8' => 'DETAIL_CENTER2','9' => 'DETAIL_CENTER3',);
$GLOBALS['CATEGORY_TYPE'] = array('0' => 'Tất cả', '1' => 'MENU TOP', '2' => 'MENU LEFT');
$GLOBALS['TYPE_POINT'] = array('0' => 'Tất cả', '1' => 'NẠP POINT', '2' => 'CỘNG POINT UPLOAD', '3' => 'TRỪ POINT DOWNLOAD TÀI LIỆU','4' => 'CỘNG POINT KHI DOWNLOAD TÀI LIỆU','7'=> 'NẠP POINT PAYPAL');
define('IMG_W', 800);// do rong
define('IMG_WT', 260); //chieu cao
define('IMG_HT', '');
//Config Page
define('ADMIN_MAX_PAGE_DISPLAY', 10);
define('ADMIN_MAX_SIZE_PAGE', 20);

define('HOME_MAX_PAGE_DISPLAY', 10);
define('HOME_MAX_SIZE_PAGE', 20);
define('HOME_NEXT_PAGE', '&raquo;');
define('HOME_PREV_PAGE', '&laquo;');
