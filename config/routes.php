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
        'methods' => ['GET', 'POST'],
        'path' => '/page-web-pro',
        'defaults' => 'FrontController:webProAction',
        'name' => 'web-pro'

    ],

    [
        'methods' => ['GET'],
        'path' => '/search-members',
        'defaults' => 'AdminController:searchAction',
        'name' => 'serach_members'

    ],

    //login

    [
        'methods' => ['GET'],
        'path' => '/login',
        'defaults' => 'AuthentificationController:loginAction',
        'name' => 'login'

    ],
    //logout

    [
        'methods' => ['GET'],
        'path' => '/logout',
        'defaults' => 'AdminController:logoutAction',
        'name' => 'logout'

    ],

    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/company',
        'defaults' => 'AdminController:editCompanyAction',
        'name' => 'edit-company'

    ],
    ///web-pro/actualites,
    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/actualites',
        'defaults' => 'AdminController:editActusAction',
        'name' => 'edit-actus'

    ],
    //
    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/delete-actus',
        'defaults' => 'AdminController:deleteActusAction',
        'name' => 'delete-actus'

    ],

    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/offres',
        'defaults' => 'AdminController:editOffreAction',
        'name' => 'edit-offre'

    ],
    // to do
    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/delete-offre',
        'defaults' => 'AdminController:deleteOffreAction',
        'name' => 'delete-offre'

    ],
    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/gallery',
        'defaults' => 'AdminController:galleryAction',
        'name' => 'gallery'

    ],


    [
        'methods' => ['GET', 'POST'],
        'path' => '/api/upload',
        'defaults' => 'UploadController:uploadAction',
        'name' => 'upload'

    ],
    //delete_gallery
    [
        'methods' => ['GET', 'POST'],
        'path' => '/web-pro/delete_gallery',
        'defaults' => 'AdminController:deletegalleryAction',
        'name' => 'delete_gallery'

    ]
,
    //
    [
    'methods' => ['GET', 'POST'],
    'path' => '/web-pro/team',
    'defaults' => 'AdminController:teamAction',
    'name' => 'team'

]
];