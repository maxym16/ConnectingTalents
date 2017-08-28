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

$bootstrap[] = 'translatemanager';

$bootstrap[] = [
    'class' => 'lispa\amos\core\components\LanguageSelector',
    'supportedLanguages' => ['en-GB', 'it-IT'],
    'allowedIPs' => ['*']
];

return $bootstrap;
