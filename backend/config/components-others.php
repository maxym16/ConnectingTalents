<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 * @see http://example.com Developers'community
 * @license GPLv3
 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 * @author     Lombardia Informatica S.p.A.
 */

return [
    'errorHandler' => [
        'errorAction' => 'site/error',
    ],
    'eventSequence' => [
        'class' => '\raoul2000\workflow\events\BasicEventSequence',
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
        'csrfParam' => '_csrf-backend',
    ],
    'session' => [
        // this is the name of the session cookie used for login on the backend
        'name' => 'advanced-backend',
    ],
    'user' => [
        'identityClass' => 'common\models\User',
//        'class' => 'lispa\amos\core\user\AmosUser',
//        'identityClass' => 'lispa\amos\core\user\User',
        'enableAutoLogin' => true,
        'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
    ],

    'authManager' => [
        'class' => 'yii\rbac\PhpManager',
        'defaultRoles' => ['admin', 'admin_ct', 'admin_email',
            'user_1','user_2','user_3'],
    ],
    'urlManagerFrontend' => [
        'class' => 'yii\web\urlManager',
//        'baseUrl' => 'http://connectingtalents.org',
        'baseUrl' => 'http://open',
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
/*    'urlManager' => [
        'class' => 'yii\web\UrlManager',
        // Disable index.php
        'showScriptName' => false,
        // Disable r= routes
        'enablePrettyUrl' => true,
        'rules' => array(
            'login/<service:google|facebook|linkedin_oauth2>' => 'site/login',
            'admin/<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>] => <controller>/<action>',
            '<module:[\w-]+>/<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>] => <module>/<controller>/<action>',
        ),
    ],*/
/*    'authManager' => [
        'class' => 'yii\rbac\PhpManager',
        'defaultRoles' => \common\models\User::roleArray(),
//	'defaultRoles' => ['admin'], // your define roles
    ],*/
/*    'authManager' => [
        'class' => 'yii\rbac\DbManager',
        'defaultRoles' => \common\models\User::roleArray(),
//	'defaultRoles' => ['BASIC_USER'], // your define roles
//	'defaultRoles' => ['admin'], // your define roles
//	'defaultRoles' => ['ROLE_ADMIN'], // your define roles
    ],*/
];