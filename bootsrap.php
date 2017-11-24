<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 23/11/2017
 * Time: 11:28
 */

require_once(__DIR__ . '/vendor/autoload.php');
use core\Bootstrap;

// dev mode reporting and explain error
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();
$bootstrap = Bootstrap::getInstance($smarty);
$bootstrap->run();

