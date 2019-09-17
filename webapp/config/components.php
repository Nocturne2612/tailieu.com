<?php

return array(
    // uncomment the following to enable URLs in path-format
    'viewRenderer' => array(
        'class' => 'application.extensions.smarty.ESmartyViewRenderer',
        'fileExtension' => '.tpl',
    ),
    'user' => array(
        // enable cookie-based authentication
        'allowAutoLogin' => true,
    ),
    // uncomment the following to enable URLs in path-format
    'urlManager' => array(
        'urlFormat' => 'path',
        'showScriptName' => false,
        'urlSuffix' => '.html',
        'caseSensitive' => false,
        'rules' => require(YiiBase::getPathOfAlias('config') . '/rules.php'),
    ),
    // uncomment the following to use a MySQL database
    'db' => array(
         'connectionString' => 'mysql:host=localhost;dbname=tailieuk_v01',
        'emulatePrepare' => true,
        'username' => 'tailieuk',
        'password' => '3n4EDE7(3si*cK',
        'charset' => 'utf8',
    ),
    'errorHandler' => array(
        // use 'site/error' action to display errors
        'errorAction' => 'site/error',
    ),
    'log' => array(
        'class' => 'CLogRouter',
        'routes' => array(
            array(
                'class' => 'CFileLogRoute',
                'levels' => 'error',
            ),
        // uncomment the following to show log messages on web pages
        /*
          array(
          'class'=>'CWebLogRoute',
          ),
         */
        ),
    ),
    'request' => array(
        'enableCsrfValidation' => true,
        'class' => 'HttpRequest',
        'noCsrfValidationRoutes' => array(
        ),
    ),
   
    'metadata' => array('class' => 'Metadata'),
    'language' => 'vi',
);
