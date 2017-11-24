<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 21/11/2017
 * Time: 16:19
 */

namespace core\orm;
class DBConnection
{

    private static $instance = null;

    private function __construct()
    {
     

    }

    public static function getInstance()
    {


        if (is_null(self::$instance)) {

            self::$instance = new DBConnection();
        }
    }


}