<?php
/**

 * Lombardia Informatica S.p.A.

 * OPEN 2.0

 *

 * @see http://example.com Developers'community

 * @license GPLv3

 * @license https://opensource.org/licenses/gpl-3.0.html GNU General Public License version 3

 *

 * @package    httpdocs

 * @category   CategoryName

 * @author     Lombardia Informatica S.p.A.

 */

return [

    'audit' => [

        'class' => 'bedezign\yii2\audit\Audit',

        'db' => 'db',

        'accessRoles' => ['ADMIN'],

        'ignoreActions' => [

            'debug/*',

            'ajax/*',

            'audit/*'

        ],

    ],

    'translatemanager' => [

        'class' => 'lajax\translatemanager\Module',

        'root' => [

	    '@frontend',

            '@app', // The root directory of the project scan.

            '@vendor/lispa/',

        ],

            'scanRootParentDirectory' => true, // Whether scan the defined `root` parent directory, or the folder itself.

        // IMPORTANT: for detailed instructions read the chapter about root configuration.

            'layout' => 'language',             // Name of the used layout. If using own layout use 'null'.

            'allowedIPs' => ['*'],      // IP addresses from which the translation interface is accessible.

            'roles' => ['ADMIN'],               // For setting access levels to the translating interface.

            'tmpDir' => '@runtime',             // Writable directory for the client-side temporary language files.

        // IMPORTANT: must be identical for all applications (the AssetsManager serves the JavaScript files containing language elements from this directory).

        'phpTranslators' => [               // list of the php function for translating messages.

            '::t',

            '::tText',

            '::tHtml',

        ],

            'jsTranslators' => ['lajax.t'],     // list of the js function for translating messages.

            'patterns' => ['*.js', '*.php'],    // list of file extensions that contain language elements.

            'ignoredCategories' => ['yii'],     // these categories won't be included in the language database.

            'ignoredItems' => ['config'],       // these files will not be processed.

            'scanTimeLimit' => null,            // increase to prevent "Maximum execution time" errors, if null the default max_execution_time will be used

            'searchEmptyCommand' => '!',        // the search string to enter in the 'Translation' search field to find not yet translated items, set to null to disable this feature

            'defaultExportStatus' => 1,         // the default selection of languages to export, set to 0 to select all languages by default

            'defaultExportFormat' => 'json',    // the default format for export, can be 'json' or 'xml'

        'tables' => [                       // Properties of individual tables

            [

                'connection' => 'db',       // connection identifier

                'table' => '{{%language}}',         // table name

                'columns' => ['name', 'name_ascii'],// names of multilingual fields

                'category' => 'database-table-name',// the category is the database table name

            ]

        ],

    ],

    'mailchimp' => [
        'class' => 'cinghie\mailchimp\Mailchimp',
//        'apiKey' => '50f8afa0152fda55b9f7f2a211952ab3-us16',
//        'apiKey' => 'dc585151fe26a88886a8d9b0190e6d58-us16',
        'apiKey' => 'ff6016393612a3c07b6b3a80d93e14b5-us16',
//        'apiKey' => '971e1e6c8d688569e8e0539c5f175ac1-us16',
        'showFirstname' => false,
        'showLastname' => false
    ]
];

