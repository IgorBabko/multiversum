<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
     */

    'mailgun'  => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_API_KEY'),
    ],

    'mandrill' => [
        'secret' => env('MANDRILL_SECRET'),
    ],

    'ses'      => [
        'key'    => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'stripe'   => [
        'model'  => Multiversum\User::class,
        'key'    => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'paypal'   => [
        'client_id' => 'AWi2BMF20tbJaqVYzMT19IhWNKcWn_eNo78BDqmdwDe9_qzBG0HjgY4peI-RkfouPsrXrZ5HRHJ934yz', //'AVZbX-nFeRMo2v2e_9O9TBvOdRztb2yWzyLn1bN_pe1Xxf_SM2tus3kS5TWUTn9wrSNDjpA0KOVU4W-1',//env('PAYPAL_CLIENT_ID'),
        'secret' => 'EOHZG1HwCfA1RLOFi31wxxgab9plfVaOQ2F6JjwCHRUV17A0AqFW6bJVMJztyqFmOziiP-sOPyPCreB7', //'EPOAS3QwGm1AnsqtgTJFCWIF0MkD-D6x2u5r3AVsQd8PDHEVaaIhTF5Mrl3F7YDepxzlhjG-BFRtYla-',//env('PAYPAL_SECRET'),
    ],

];
