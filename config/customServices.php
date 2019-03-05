<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */


    // 'app_per' => env('APP_PER', 'Administer roles & permissions'),
    'app_per' => env('APP_PER', 'Administer roles & permissions'),
    'services' => [
        'social' => env('API_SOCIAL'),
        'crm' => env('API_CRMURL'),
        'helpdesk' => env('API_HELPDESKURL'),
    ],

    'localservices' => [
        'social' => env('Local_API_SOCIAL'),
        'crm' => env('Local_API_CRMUR'),
        'helpdesk' => env('Local_API_HELPDESKURL'),
    ],


    


// APP_PER='Administer roles & permissions'
    // 'name' => env('APP_NAME', 'Laravel'),

    // 'name' => env('APP_NAME', 'Laravel'),

    // 'name' => env('APP_NAME', 'Laravel'),


    // 'mailgun' => [
    //     'domain' => env('MAILGUN_DOMAIN'),
    //     'secret' => env('MAILGUN_SECRET'),
    //     'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    // ],

    // 'ses' => [
    //     'key' => env('SES_KEY'),
    //     'secret' => env('SES_SECRET'),
    //     'region' => env('SES_REGION', 'us-east-1'),
    // ],

    // 'sparkpost' => [
    //     'secret' => env('SPARKPOST_SECRET'),
    // ],

    // 'stripe' => [
    //     'model' => App\User::class,
    //     'key' => env('STRIPE_KEY'),
    //     'secret' => env('STRIPE_SECRET'),
    //     'webhook' => [
    //         'secret' => env('STRIPE_WEBHOOK_SECRET'),
    //         'tolerance' => env('STRIPE_WEBHOOK_TOLERANCE', 300),
    //     ],
    // ],

    // 'name' => env('APP_NAME', 'Laravel'),



];
