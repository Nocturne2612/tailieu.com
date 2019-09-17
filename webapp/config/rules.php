<?php

return array(
    'ty' => 'admin/default',
    '/' => 'tailieu/home',
    '<title:.*>-b<id:\d+>' => 'tailieu/news',
    'tin-tuc/p/<page:[a-zA-Z0-9-]+>' => 'tailieu/categorynews/index/',
    'tin-tuc/<title:.*>-<id:\d+>' => 'tailieu/categorynews',
    'tin-tuc' => 'tailieu/categorynews/',
    
   'tim-kiem/<keyword:.*>' => 'tailieu/search',
    'tim-kiem/<platforms:.*>-<keyword:.*>' => 'tailieu/search',
    'tim-kiem-nang-cao' => 'tailieu/nangcao/index',
    'admin/logout' => 'admin/login/logout/',
    '<title:.*>-<id:\d+>' => 'tailieu/document',
    '<title:[a-zA-Z0-9-]+>/p/<page:[a-zA-Z0-9-]+>' => 'tailieu/categorydocument/index/',
    '<title:[a-zA-Z0-9-]+>/sort/<sort:[a-zA-Z0-9-]+>' => 'tailieu/categorydocument',
    '<title:[a-zA-Z0-9-]+>' => 'tailieu/categorydocument',
    'download/<title:.*>/<id:[0-9]+>' => 'tailieu/download/',
    'download/<id:[0-9]+>-<token:.*>' => 'tailieu/download/confirm',
    '<controller:\w+>/<id:\d+>' => '<controller>/view',
    '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
    '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
);
