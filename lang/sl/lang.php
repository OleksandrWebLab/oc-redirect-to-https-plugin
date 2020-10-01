<?php

return [
    'plugin' => [
        'name'        => 'RedirectToHTTPS',
        'description' => 'Enostaven vtiènik za preusmeritev vseh zahtev na HTTPS.'
    ],
    'settings' => [
        'label'       => 'Preusmeritev na https',
        'description' => 'Upravljanje preusmeritve na https.',
        'status_code' => 'Koda statusa'
    ],
    'permissions' => [
        'tab'   => 'RedirectToHTTPS',
        'label' => 'Upravljanje preusmeritvenih nastavitev'
    ]
];
