<?php

return [
    'assetManager' => [
        //'bundles' => require(__DIR__ . '/../../backend/assets/AppAsset.php'),
        'appendTimestamp' => true,
        'forceCopy' => false,
        'converter' => [
            'class' => 'nizsheanez\assetConverter\Converter',
            'force' => false,
            'destinationDir' => 'assets',
            'parsers' => [
                'less' => [ // file extension to parse
                    'class' => 'nizsheanez\assetConverter\Less',
                    'output' => 'css', // parsed output file type
                    'options' => [
                        'auto' => true, // optional options
                    ]
                ]
            ]
        ]
    ],
    'authManager' => [
        'class' => 'yii\rbac\PhpManager',
        'defaultRoles' => \common\models\User::roleArray(),
	//'defaultRoles' => ['admin', 'admin_ct', 'admin_email',
        //    'user_1','user_2','user_3'], // your define roles
        //задамо куди будуть зберігатися наші файли конфігурацій RBAC для 'class' => 'yii\rbac\PhpManager'
        'itemFile' => '@common/components/rbac/items.php',
        'assignmentFile' => '@common/components/rbac/assignments.php',
        'ruleFile' => '@common/components/rbac/rules.php',        
    ],

    'cache' => [
        'class' => 'yii\caching\FileCache',
    ],
    'eventSequence' => [
        'class' => '\raoul2000\workflow\events\BasicEventSequence',
    ],
    'i18n' => [
        'translations' => [
            '*' => [
                'class' => 'yii\i18n\DbMessageSource',
                'db' => 'db',
                'sourceLanguage' => 'it-IT', // Developer language
                'sourceMessageTable' => '{{%language_source}}',
                'messageTable' => '{{%language_translate}}',
                'cachingDuration' => 86400,
                'enableCaching' => false,
                'forceTranslation' => true,
            ],
            'eauth' => [
                'class' => 'yii\i18n\PhpMessageSource',
                'basePath' => '@eauth/messages',
            ],
        ],
    ],
    'translatemanager' => [
        'class' => 'lajax\translatemanager\Component'
    ],
    'urlManager' => [
        'class' => 'yii\web\UrlManager',
        // Disable index.php
        'showScriptName' => false,
        // Disable r= routes
        'enablePrettyUrl' => true,
        'rules' => array(
            'my-teams/<id:\d+>' => 'my-teams/view',
            'api/<controller:[\w-]+>' => 'api/<controller>',
            'login/<service:google|facebook|linkedin_oauth2>' => 'site/login',
            '<module:[\w-]+>/<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>] => <module>/<controller>/<action>',
        ),
    ],
    'eauth' => [
        'class' => 'nodge\eauth\EAuth',
        'popup' => true, // Use the popup window instead of redirecting.
        'cache' => false, // Cache component name or false to disable cache. Defaults to 'cache' on production environments.
        'cacheExpire' => 0, // Cache lifetime. Defaults to 0 - means unlimited.
        'httpClient' => [
            // uncomment this to use streams in safe_mode
            //'useStreamsFallback' => true,
        ],
        'services' => [ // You can change the providers and their classes.
            'google' => [
                // register your app here: https://code.google.com/apis/console/
                'class' => 'nodge\eauth\services\GoogleOAuth2Service',
                'clientId' => '221077937769-308umg865t2osnfach3d6l2i47h5mlv8.apps.googleusercontent.com',
                'clientSecret' => 'EslmhU46TVbaFvVLYyl7Am0M',
                'title' => 'Google',
            ],
            'facebook' => [
                // register your app here: https://developers.facebook.com/apps/
                'class' => 'nodge\eauth\services\FacebookOAuth2Service',
                'clientId' => '128162874568874',
                'clientSecret' => '1f83080f7a34d23a78f66f6b1c7536b3',
            ],
            'linkedin_oauth2' => [
                // register your app here: https://www.linkedin.com/secure/developer
                'class' => 'nodge\eauth\services\LinkedinOAuth2Service',
                'clientId' => '86n14wknf1j83y',
                'clientSecret' => 'PAvd1mkyNUCIOOj2',
                'title' => 'LinkedIn',
            ],
        ],
    ],
    'jwt' => [
        'class' => 'sizeg\jwt\Jwt',
        'key' => 'GtWQMzG4alJGjfahqFGxR7ascaYVaQ',
    ],
    'reCaptcha' => [
        'name' => 'reCaptcha',
        'class' => 'himiklab\yii2\recaptcha\ReCaptcha',
        'siteKey' => '6LcI2jIUAAAAAKIh7rZLgjSVwECzbKVWlwkAtNpb',
        'secret' => '6LcI2jIUAAAAAKNezuGV1TOhT6Z7uv3A4LJC_Yc_',
    ],
	'googleApi' =>
	[
		'class'                 => '\skeeks\yii2\googleApi\GoogleApiComponent',
		'developer_key'         => 'AIzaSyBgx7y0_wFrWezm3mTVaU-vcQCMaBzOvwU',
	],
];