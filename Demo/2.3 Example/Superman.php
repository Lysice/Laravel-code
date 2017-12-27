<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:13
 */
namespace Demo\Three;
require_once "Factory.php";
use Demo\Three\Factory;

class Superman {
    protected $power;

    function __construct($modules = [])
    {
        $factory = new Factory();
//        $this->power = $factory->makeModule('Flight', [9,100]);
        foreach ($modules as $moduleName => $moduleOptions) {
            $this->power[] = $factory->makeModule($moduleName, $moduleOptions);
        }
    }
}