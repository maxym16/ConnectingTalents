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
        'class' => 'yii\rbac\DbManager',
	'defaultRoles' => ['BASIC_USER'], // your define roles
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
            'login/<service:google|facebook|etc>' => 'site/login',
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
                'clientId' => '347050430833-hptnbmep2qumgfpjpqoa8fab9oci792u.apps.googleusercontent.com',
                'clientSecret' => '49w_1X0HWhUoUClKJauUr-kA',
                'title' => 'Google',
            ],
        ],
    ],
];