<?php
/**
 * Created by PhpStorm.
 * User: m.ben-ahmed
 * Date: 23/11/2017
 * Time: 11:08
 */

namespace core\Exceptions;

use Throwable;

class BtbException extends \Exception
{


    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}