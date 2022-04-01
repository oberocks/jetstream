<?php

use Laravel\Jetstream\Features;

return [
    'stack' => 'inertia',
    'middleware' => ['web'],
    'features' => [Features::accountDeletion()],
    'profile_photo_disk' => 'public',

    //
    // Inertia View Paths Variation (Path Syntax)
    //

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

    //
    // Livewire View Paths Variation (Dot Syntax)
    //

    // 'view' => [
    //     'api' => [
    //         'index' => 'api.index',
    //     ],
    //     'features' => [
    //         'privacy' => 'policy',
    //         'terms' => 'terms',
    //     ],
    //     'profile' => [
    //         'show' => 'profile.show',
    //     ],
    //     'teams' => [
    //         'create' => 'teams.create',
    //         'show' => 'teams.show',
    //     ],
    // ],

    //
    // Inertia & Livewire Route URI Strings
    //

    'uri' => [
        'api' => [
            'index' => '/user/api-tokens',
        ],
        'features' => [
            'privacy' => '/privacy-policy',
            'terms' => '/terms-of-service',
        ],
        'profile' => [
            'show' => '/user/profile',
        ],
        'teams' => [
            'create' => '/teams/create',
            'show' => '/teams/{team}',
        ],
    ],
];
