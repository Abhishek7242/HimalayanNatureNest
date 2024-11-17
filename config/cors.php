<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    */

    'paths' => ['/*'],  // Allows all paths or adjust as needed

    'allowed_methods' => ['*'],  // Allows all HTTP methods

    'allowed_origins' => [
        'https://himalayannaturenest.azurewebsites.net/',  // Replace with your Azure app URL
    ],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],  // Allows all headers

    'exposed_headers' => [],  // Optional: add headers you want exposed to the browser

    'max_age' => 0,

    'supports_credentials' => true,  // Enable if using cookies or credentials

];
