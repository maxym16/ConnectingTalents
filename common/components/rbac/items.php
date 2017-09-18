<?php
return [
    'admin' => [
        'type' => 1,
        'description' => 'Administrator',
        'children' => [
            'admin_ct',
        ],
    ],
    'admin_ct' => [
        'type' => 1,
        'description' => 'Administrator of the Connecting Talents',
        'children' => [
            'user_3',
            'admin_email',
        ],
    ],
    'admin_email' => [
        'type' => 1,
        'description' => 'Administrator email',
    ],
    'user_1' => [
        'type' => 1,
        'description' => 'User level1',
        'children' => [
            'guest',
            'extra_registration',
            'profile_view',
        ],
    ],
    'user_2' => [
        'type' => 1,
        'description' => 'User 2',
        'children' => [
            'user_1',
            'profile_view',
            'profile_update',
            'team_view',
            'team_create',
            'team_update',
            'team_delete',
            'team_member_add',
            'team_member_delete',
        ],
    ],
    'user_3' => [
        'type' => 1,
        'description' => 'User 3',
        'children' => [
            'user_2',
        ],
    ],
    'guest' => [
        'type' => 1,
        'children' => [
            'login',
            'logout',
            'error',
            'sign-up',
            'index',
            'view',
        ],
    ],
    'adminPanel' => [
        'type' => 2,
        'description' => 'Admin dashboard',
    ],
    'login' => [
        'type' => 2,
    ],
    'logout' => [
        'type' => 2,
    ],
    'error' => [
        'type' => 2,
    ],
    'sign-up' => [
        'type' => 2,
    ],
    'index' => [
        'type' => 2,
    ],
    'view' => [
        'type' => 2,
    ],
    'update' => [
        'type' => 2,
    ],
    'delete' => [
        'type' => 2,
    ],
    'extra_registration' => [
        'type' => 2,
    ],
    'news_view' => [
        'type' => 2,
    ],
    'news_create' => [
        'type' => 2,
    ],
    'news_update' => [
        'type' => 2,
    ],
    'news_delete' => [
        'type' => 2,
    ],
    'profile_view' => [
        'type' => 2,
    ],
    'profile_update' => [
        'type' => 2,
    ],
    'team_view' => [
        'type' => 2,
    ],
    'team_create' => [
        'type' => 2,
    ],
    'team_update' => [
        'type' => 2,
    ],
    'team_delete' => [
        'type' => 2,
    ],
    'team_member_add' => [
        'type' => 2,
    ],
    'team_member_delete' => [
        'type' => 2,
    ],
];
