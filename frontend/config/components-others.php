<?php

return [
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'log' => [
        'traceLevel' => YII_DEBUG ? 3 : 0,
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'request' => [
        'csrfParam' => '_csrf-frontend',
    ],
    'session' => [
        // this is the name of the session cookie used for login on the frontend
        'name' => 'advanced-frontend',
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
        'rules' => [
            'my-team/<id:\d+>' => 'my-team/view',
        ],
    ],
    'user' => [
        'identityClass' => 'common\models\User',
        'enableAutoLogin' => true,
        'identityCookie' => ['name' => '_identity-frontend', 'httpOnly' => true],
    ],
    'authManager' => [
        'class' => 'yii\rbac\PhpManager',
        'defaultRoles' => ['admin', 'admin_ct', 'admin_email',
            'user_1','user_2','user_3'],
    ],
];