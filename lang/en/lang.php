<?php

return [
    'plugin' => [
        'name'        => 'RedirectToHTTPS',
        'description' => 'Simple plugin for redirect all request to HTTPS.'
    ],
    'settings' => [
        'label'       => 'Redirect to https',
        'description' => 'Redirect to https management.',
        'status_code' => 'Status code'
    ],
    'permissions' => [
        'tab'   => 'RedirectToHTTPS',
        'label' => 'Manage the redirect settings'
    ]
];
