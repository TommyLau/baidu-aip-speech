<?php

return [

    /*
    |--------------------------------------------------------------------------
    | AI Open Platform
    |--------------------------------------------------------------------------
    |
    | AI Open Platform Configurations
    |
    */
    'aip' => [
        /*
        |--------------------------------------------------------------------------
        | App ID
        |--------------------------------------------------------------------------
        */
        'app_id' => env('BAIDU_APP_ID', 'your-app-id'),

        /*
        |--------------------------------------------------------------------------
        | API Key
        |--------------------------------------------------------------------------
        */
        'api_key' => env('BAIDU_API_KEY', 'your-api-key'),

        /*
        |--------------------------------------------------------------------------
        | Secret Key
        |--------------------------------------------------------------------------
        */
        'secret_key' => env('BAIDU_SECRET_KEY', 'your-secret-key'),

        /*
        |--------------------------------------------------------------------------
        | Debug mode
        |--------------------------------------------------------------------------
        |
        | Enable debug mode or not, when debug mode is 'false' then no log will
        | be logged.
        |
        */
        'debug' => true,
    ],

];
