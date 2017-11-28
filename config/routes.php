<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 21/11/2017
 * Time: 15:59
 */

return [
    //Front routes
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

    ],
    [
        'methods' => ['GET'],
        'path' => '/btb-public-network',
        'defaults' => 'FrontController:publicNetworkAction',
        'name' => 'btb-public-network'

    ],
    [
        'methods' => ['GET'],
        'path' => 'contact',
        'defaults' => 'FrontController:contactAction',
        'name' => 'contact'

    ],
    // admin routes

    [
        'methods' => ['GET'],
        'path' => '/mon-compte',
        'defaults' => 'AdminController:indexAction',
        'name' => 'backend_dashbord'

    ],

    [
        'methods' => ['GET'],
        'path' => '/search-members',
        'defaults' => 'AdminController:searchAction',
        'name' => 'serach_members'

    ],


    //logout

    [
        'methods' => ['GET'],
        'path' => '/logout',
        'defaults' => 'AdminController:logoutAction',
        'name' => 'logout'

    ],





];