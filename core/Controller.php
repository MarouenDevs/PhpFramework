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

    protected $layout = false;

    // constructor receives container instance
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function redirect($routeName)
    {
        $path = $this->container->get('router')->pathFor($routeName);
        header("Location: $path");
        exit;
    }


    protected function beforeFilter($view)
    {
    }

    /**
     * Render
     * @param $view
     * @param $params
     */
    protected function render($view, $params)
    {
        $this->beforeFilter($view);
        $user = $this->container->get('user');
        if ($this->layout && is_string($this->layout)) {
            ob_start();
            $this->container->get('templateEngine')->display($view);
            $content = ob_get_clean();
            $this->container->get('templateEngine')->assign('user', $user);
            $this->container->get('templateEngine')->assign('CONTENT', $content);
            $this->container->get('templateEngine')->display('layouts/' . $this->layout);

        }

    }


}