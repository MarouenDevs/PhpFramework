<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 21/11/2017
 * Time: 16:21
 */

// setting router system dev mode

$router_config = ['DEV' =>
    [
        'displayErrorDetails' => true,
        'logger' => [
            'name' => 'slim-app',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log',
        ],
    ]

    , 'PROD' => [
        'displayErrorDetails' => false,
        'logger' => [
            'name' => 'slim-app',
            'level' => Monolog\Logger::DEBUG,
            'path' => __DIR__ . '/../logs/app.log',
        ],
    ]
];