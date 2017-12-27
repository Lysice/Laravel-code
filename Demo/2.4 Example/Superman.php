<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:13
 */
namespace Demo\Four;
require_once "Factory.php";

class Superman {
    protected $module;

    function __construct(SuperModuleInterface $module)
    {
        $this->module = $module;
    }
}