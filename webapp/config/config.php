<?php

YiiBase::setPathOfAlias('root_path', dirname(__FILE__) . DIRECTORY_SEPARATOR . '..');
YiiBase::setPathOfAlias('config', realpath(__DIR__ . '/../config'));
YiiBase::setPathOfAlias('images', realpath(__DIR__ . '/../../images'));
YiiBase::setPathOfAlias('assets', realpath(__DIR__ . '/../../assets'));
YiiBase::setPathOfAlias('games_css', realpath(__DIR__ . '/../../assets/game'));
YiiBase::setPathOfAlias('smarty', YiiBase::getPathOfAlias('root_path') . '/vendors/Smarty');

return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => NAME_APP,
    'defaultController' => 'default',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.libs.*',
        'application.components.*',
        'application.components.libs.*',
    ),
    // application modules
    'modules' => require(YiiBase::getPathOfAlias('config') . '/modules.php'),
    // application components
    'components' => require(YiiBase::getPathOfAlias('config') . '/components.php'),
    // application-level parameters that can be accessed
    // using Yii::app()->params['paramName']
    'params' => array(
        // this is used in contact page
        'Email' => '',
        'Website' => 'http://tailieukientruc.net',
        'Author' => 'Truong Xuan',
        'Desc' => 'Tài liệu tri thức',
    )
);
