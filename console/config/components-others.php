<?php

return [
    'log' => [
        'targets' => [
            [
                'class' => 'yii\log\FileTarget',
                'levels' => ['error', 'warning'],
            ],
        ],
    ],
    'authManager' => [
        'class' => 'yii\rbac\PhpManager',
    ],
    
];