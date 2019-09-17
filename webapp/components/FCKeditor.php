<?php

$_SESSION['authorized'] = true;
if (!function_exists('version_compare') || version_compare(phpversion(), '5', '<')) {
    require_once( realpath(dirname(__FILE__) . '/../../includes/fckeditor/fckeditor_php4.php'));
} else {
    require_once( realpath(dirname(__FILE__) . '/../../includes/fckeditor/fckeditor_php5.php'));
}
