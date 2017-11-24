<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 21/11/2017
 * Time: 15:59
 */

return [
    [
        'methods' => ['GET'],
        'path' => '/',
        'defaults' => 'FrontController:indexAction',
        'name' => 'home'

    ],
    [
        'methods' => ['GET'],
        'path' => '/annuaire',
        'defaults' => 'FrontController:annuaireAction',
        'name' => 'annuaire'

    ],

    [
        'methods' => ['GET'],
        'path' => '/avantages-adherents',
        'defaults' => 'FrontController:avantagesAction',
        'name' => 'adherents'

    ],
    [
        'methods' => ['GET'],
        'path' => '/our-circle',
        'defaults' => 'FrontController:circleAction',
        'name' => 'circle'

    ],
    [
        'methods' => ['GET'],
        'path' => '/who-are-we',
        'defaults' => 'FrontController:presentationAction',
        'name' => 'circle'

    ],
    //btb-network
    [
        'methods' => ['GET'],
        'path' => '/btb-network',
        'defaults' => 'FrontController:networkAction',
        'name' => 'circle'

    ]




];