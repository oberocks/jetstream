<?php

use Laravel\Jetstream\Features;

return [
    'stack' => 'inertia',
    'middleware' => ['web'],
    'features' => [Features::accountDeletion()],
    'profile_photo_disk' => 'public',
    'view' => [
        'api' => [
            'index' => 'API/Index',
        ],
        'features' => [
            'privacy' => 'PrivacyPolicy',
            'terms' => 'TermsOfService',
        ],
        'profile' => [
            'show' => 'Profile/Show',
        ],
        'teams' => [
            'create' => 'Teams/Create',
            'show' => 'Teams/Show',
        ],
    ],
];
