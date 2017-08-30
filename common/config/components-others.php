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
/*    'authClientCollection' => [
        'class'   => \yii\authclient\Collection::className(),
        'clients' => [
            // here is the list of clients you want to use
            // you can read more in the "Available clients" section
        ],
    ],*/
/*    'facebook' => [
        'class'        => 'dektrium\user\clients\Facebook',
        'clientId'     => 'APP_ID',
        'clientSecret' => 'APP_SECRET',
    ],
    'google' => [
        'class'        => 'dektrium\user\clients\Google',
        'clientId'     => 'CLIENT_ID',
        'clientSecret' => 'CLIENT_SECRET',
    ], */    
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
            '<module:[\w-]+>/<controller:[\w-]+>/<action:[\w-]+>/<id:\d+>] => <module>/<controller>/<action>',
        ),
    ],
];