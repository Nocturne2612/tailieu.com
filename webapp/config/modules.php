<?php

return array(
    'tailieu' => array(
        'import' => array(
            'tailieu.models.*',
            'tailieu.components.*',
            'tailieu.components.widgets.*',
            'tailieu.components.libs.*',
            'tailieu.components.libs.lib.*',
        ),
        'defaultController' => 'home',
    ),
    'admin' => array(
        'import' => array(
            'admin.models.*',
            'admin.components.*',
            'admin.components.widgets.*',
            'admin.components.libs.*',
        ),
        'defaultController' => 'default',
    ),
);
