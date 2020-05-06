<?php

return [
    'plugin' => [
        'name'        => 'RedirectToHTTPS',
        'description' => 'Простой плагин для редиректа всех HTTP запросов на HTTPS.'
    ],
    'settings' => [
        'label'       => 'Переадресация на HTTPS',
        'description' => 'Настройка параметров.',
        'status_code' => 'Код состояния для редиректа'
    ],
    'permissions' => [
        'tab'   => 'RedirectToHTTPS',
        'label' => 'Управление настройками переадресации'
    ]
];
