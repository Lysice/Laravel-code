<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:13
 */
namespace Demo\Two;
require_once "Flight.php";
require_once "Force.php";
require_once "Shot.php";
use Demo\Two\Flight;
use Demo\Two\Force;
use Demo\Two\Shot;

class Superman {
    protected $power;

    function __construct()
    {
        $this->power = array(
            new Force(45),
            new Shot(99, 50, 2)
        );
    }
}