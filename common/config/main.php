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

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$modules = array_merge(
    require(__DIR__ . '/modules-others.php'),
    require(__DIR__ . '/modules-amos.php')
);
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$bootstrap = array_merge(
    require(__DIR__ . '/bootstrap-extra.php')
);

if (isset($modules['tag'])) {
    $bootstrap[] = 'tag';
}
if (isset($modules['cwh'])) {
    $bootstrap[] = 'cwh';
}
if (isset($modules['chat'])) {
    $bootstrap[] = 'chat';
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$components = array_merge(
    require(__DIR__ . '/components-others.php'),
    require(__DIR__ . '/components-amos.php')
);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$params = array_merge(
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
return [
    'language' => 'it-IT',
    'timeZone' => 'Europe/Rome',
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'aliases' => [
        '@file' => dirname(__DIR__),
    ],
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    'bootstrap' => $bootstrap,
    'components' => $components,
    'modules' => $modules,
    'params' => $params,
    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
];
