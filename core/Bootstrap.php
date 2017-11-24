<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 22/11/2017
 * Time: 12:39
 */


namespace core;

use core\Router;
use core\orm\DBConnection;
use core\Exceptions\BtbException;

class Bootstrap
{

    private static $instance = null;

    private $_router = null;

    private $_app;

    private $_tplEngine;

    private function __construct($smarty)
    {

        if (file_exists(__DIR__ . '../../config/config.php') && file_exists(__DIR__ . '../../config/paramaters.php')) {
            require_once __DIR__ . '../../config/paramaters.php';
            require_once __DIR__ . '../../config/config.php';
            // register tpl engine
            $this->_tplEngine = $smarty;
            // inject tplEngine
            $container = new \Slim\Container;
            $container['templateEngine'] = function ($container) use ($smarty) {

                return $smarty;
            };

            // Create instance of slim
            $this->_app = new \Slim\App($container);

            $settings = $this->_app->getContainer()->get('settings');

            $settings->replace($router_config[$paramaters['MODE']]);



            // pass instance to router how will do the work
            $this->_router = new Router($this->_app);
        } else {
            throw new BtbException('Required Files config.php | paramaters.php not founds dans app/config');
        }


    }

    public static function getInstance($smarty)
    {
        if (is_null(self::$instance)) {

            self::$instance = new Bootstrap($smarty);
        }
        return self::$instance;
    }

    public function run()
    {
        $this->_router->run();

    }

}