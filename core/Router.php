<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 21/11/2017
 * Time: 16:01
 */

namespace core;

use core\Exceptions\BtbException;
use Slim\Exception\SlimException;


class Router
{
    /**
     * Array des routes de l'application
     * @var mixed
     */
    private $_routes;

    /**
     * Slim instance
     * @var Slim
     */
    private $_app;

    public function __construct($app)
    {

        if(file_exists( __DIR__.'../../config/routes.php')){
            // load routes
            $this->_routes  = include __DIR__.'../../config/routes.php';
            $this->_app = $app;
        }else {
            throw new BtbException('File routes.php not founds dans app/config');
        }

    }

    /**
     * To make more powerfull
     * Validate the route
     * @param $route
     */
    private function _validateRoute($route){
        return is_array($route) && !empty($route['methods']) && is_array($route['methods']) && isset($route['path']) && !empty($route['defaults']) && !empty($route['name']);
    }

    public function run()
    {

        foreach ($this->_routes as $route){

            if($this->_validateRoute($route)){
                // resolve namespace configuration
                $route['defaults'] ="src\\controllers\\".$route['defaults'];
                $this->_app->map($route['methods'], $route['path'], $route['defaults'])->setName($route['name']);
            }else{
                throw new BtbException('Route in routes.php wrong format');

            }
        }
        // inject router as service into Slim Service Container

        /*$container = $this->_app->getContainer();
        $container['router'] = function($container){


        };*/

        $this->_app->run();

    }

    public function getRoutes(){

        return $this->_routes;
    }

    public function getRoutePath($route_name){

        dump($this->_routes);
        exit;


    }


}