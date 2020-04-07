<?php

return [
    'table' => 'customer',


    /*
    |--------------------------------------------------------------------------
    | authentication defaults
    |--------------------------------------------------------------------------
    |
    | this option controls the default authentication "guard" and password
    | reset options for your application. you may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'customer',
    ],

    /*
    |--------------------------------------------------------------------------
    | authentication guards
    |--------------------------------------------------------------------------
    |
    | next, you may define every authentication guard for your application.
    | of course, a great default configuration has been defined for you
    | here which uses session storage and the eloquent user provider.
    |
    | all authentication drivers have a user provider. this defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'api' => [
            'driver' => 'token',
            'provider' => 'customer',
            'hash' => false,
        ],
        'customer' => [
            'redirectto' => 'account',
            'driver' => 'session',
            'provider' => 'customer',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | user providers
    |--------------------------------------------------------------------------
    |
    | all authentication drivers have a user provider. this defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | if you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. these sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Users\Customer::class,
        ],

//        'customer' => [
//            'driver' => 'eloquent',
//            'model' => app\users\customer::class,
//        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | resetting passwords
    |--------------------------------------------------------------------------
    |
    | you may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | the expire time is the number of minutes that the reset token should be
    | considered valid. this security feature keeps tokens short-lived so
    | they have less time to be guessed. you may change this as needed.
    |
    */

    'passwords' => [
        'customer' => [
            'provider' => 'customer',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | password confirmation timeout
    |--------------------------------------------------------------------------
    |
    | here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. by default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
