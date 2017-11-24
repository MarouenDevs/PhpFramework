<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 21/11/2017
 * Time: 16:08
 */

namespace core;
use Psr\Container\ContainerInterface;

class Controller
{


    protected $container;

    protected $_views_path = '';

    protected $layout =false ;

    // constructor receives container instance
    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }

    /**
     * Render
     * @param $view
     * @param $params
     */
    protected function render($view,$params){

        $this->container->get('templateEngine')->display($view);
    }


}