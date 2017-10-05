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
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=forever6_testopen',
            'username' => 'forever6_testope',
            'password' => 'SEsr70=91f;E',
            'charset' => 'utf8',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            'viewPath' => '@common/mail',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'transport' => [
                'class' => 'Swift_SmtpTransport',
//                'host' => 'connetingtalents.org',
                'host' => 'foreveridentity.com',
//                'host' => 'smtp.gmail.com',
//                'host' => 'smtp.meta.ua',
//                'username' => 'kerry',
//                'username' => 'kerry@connetingtalents.org',
//                'username' => 'forever7',
                'username' => 'forever7@foreveridentity.com',
//                'username' => '<username>@<yourDomain>',
//                'password' => 'D+Vm}u!x~Cs',
                'password' => 'contal17/',
//                'port' => '587',
                'port' => 465,
//                'port' => 2525,
//                'encryption' => 'tls',
                'encryption' => 'ssl',
            ],
            'useFileTransport' => false,            
//            'useFileTransport' => true,//test
        ],
    ],
];
