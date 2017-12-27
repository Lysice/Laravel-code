<?php
namespace Demo\One;
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:05
 */
require_once "Power.php";
class Superman {
    protected $power;

    public function __construct()
    {
        $this->power = new Power(999, 100);
    }

    public function beat() {
        echo $this->power->beat();
    }
}