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

$modules['attachments'] = [
    'class' => 'lispa\amos\attachments\FileModule',
    'webDir' => 'files',
    'tempPath' => '@common/uploads/temp',
    'storePath' => '@common/uploads/store'
];

$modules['cwh'] = [
    'class' => 'lispa\amos\cwh\AmosCwh',
    'rbacEnabled' => false
];

$modules['email'] = [
    'class' => 'lispa\amos\emailmanager\AmosEmail',
    'templatePath' => '@common/mail/emails',
];

$modules['tag'] = [
    'class' => 'lispa\amos\tag\AmosTag',
];

$modules['notify'] = [
        'class' => 'lispa\amos\notificationmanager\AmosNotify',
];

//$modules['porting'] = [
//    'class' => 'lispa\amos\porting\AmosPorting',
//];

return $modules;
