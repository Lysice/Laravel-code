<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-17
 * Time: 下午3:46
 */
namespace Illuminate\Support\Facades;
use RuntimeException;

abstract class Facade
{
    protected static $resolvedInstance;
    protected static $app;

    // 获取在组件中注册的名字 [多态]
    public static function getFacadeAccessor() {
        throw new RuntimeException('Facede 没有实现getFacadeAccessor方法');
    }

    // 从容器中解析解析facade实例
    public static function resolveFacadeInstance($name = '') {
        if (is_object($name)) {

            return $name;
        }
        if (isset($resolvedInstance[$name])) {
            return $resolvedInstance[$name];
        }
        return static::$resolvedInstance[$name] = static::$app[$name];
    }

    // 获取对象
    public static function getFacadeRoot()
    {
        return static::resolveFacadeInstance(static::getFacadeAccessor());
    }

    public static function __callStatic($method, $arguments)
    {
        $instance = static::getFacadeRoot();

        if (!$instance) {
            throw new RuntimeException('facade root未设置!');
        }

        return $instance->$method(...$arguments); // 可变参数
    }
}