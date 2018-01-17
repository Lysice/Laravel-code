<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-4
 * Time: 下午2:24
 */
namespace Demo\Facades;
class Facade {
    public function __construct()
    {
    }

    public static function getInstance($classname, $args) {
        return new $classname($args);
    }

    public static function getFacadeAccessor() {

    }

    public static function __callStatic($method, $arguments)
    {
        $instance = static::getInstance(static::getFacadeAccessor(), [1, 2, 3]);
//        return call_user_func_array([$instance, $method], $arguments);
        return $instance->$method($arguments);
    }
}