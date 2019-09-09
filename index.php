<?php
/*error_reporting(E_ALL);
ini_set("display_startup_errors", "1");
ini_set("display_errors", "1");*/
// change the following paths if necessary
$yii = dirname(__FILE__) . '/systemlibs/yii.php';
$config = dirname(__FILE__) . '/webapp/config/config.php';
// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG', true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL', 0);
require_once 'bootstrap.php';error_reporting(E_ALL ^ E_DEPRECATED);ini_set('display_errors', 1);
require_once($yii);
Yii::createWebApplication($config)->run();
