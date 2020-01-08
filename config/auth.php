<?php
return [
    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],
    // Guard
    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'users',
        ],

        'guru' => [
          'driver' => 'session',
          'provider' => 'guru',
        ],
        'guru-api' => [
            'driver' => 'token',
            'provider' => 'guru',
        ],

        'kepsek' => [
          'driver' => 'session',
          'provider' => 'kepsek',
        ],
        'kepsek-api' => [
            'driver' => 'token',
            'provider' => 'kepsek',
        ],

        'adminsekolah' => [
          'driver' => 'session',
          'provider' => 'adminsekolah',
        ],
        'adminsekolah-api' => [
            'driver' => 'token',
            'provider' => 'adminsekolah',
        ],

        'adminkecamatan' => [
          'driver' => 'session',
          'provider' => 'adminkecamatan',
        ],
        'adminkecamatan-api' => [
            'driver' => 'token',
            'provider' => 'adminkecamatan',
        ],

        'admindinas' => [
          'driver' => 'session',
          'provider' => 'admindinas',
        ],
        'admindinas-api' => [
            'driver' => 'token',
            'provider' => 'admindinas',
        ],

        'adminmaster' => [
          'driver' => 'session',
          'provider' => 'adminmaster',
        ],
        'adminmaster-api' => [
            'driver' => 'token',
            'provider' => 'adminmaster',
        ],

    ],
    //  Providers
    'providers' => [
        'kepsek' => [
            'driver' => 'eloquent',
            'model' => App\Kepsek::class,
        ],
        'guru' => [
          'driver' => 'eloquent',
          'model' => App\Guru::class,
        ],
        'adminsekolah' => [
          'driver' => 'eloquent',
          'model' => App\AdminSekolah::class,
        ],
        'adminkecamatan' => [
          'driver' => 'eloquent',
          'model' => App\AdminKecamatan::class,
        ],
        'admindinas' => [
          'driver' => 'eloquent',
          'model' => App\AdminDinas::class,
        ],
        'adminmaster' => [
          'driver' => 'eloquent',
          'model' => App\AdminMaster::class,
        ],
    ],
    // Password
    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
        ],
    ],
];