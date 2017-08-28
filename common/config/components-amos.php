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
    'formatter' => [
        'class' => 'lispa\amos\core\formatter\Formatter',
        'dateFormat' => 'php:d/m/Y',
        'datetimeFormat' => 'php:d/m/Y H:i',
        'timeFormat' => 'php:H:i',
        'defaultTimeZone' => 'Europe/Rome',
        'timeZone' => 'Europe/Rome',
        'locale' => 'it-IT',
    ],
    'imageUtility' => [
        'class' => 'lispa\amos\core\components\ImageUtility',
    ],
    'view' => [
         'class' => 'lispa\amos\core\components\AmosView',
    ],
    'workflowSource' => [
        'class' => 'lispa\amos\core\workflow\ContentDefaultWorkflowDbSource',
    ],
];
