<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-19
 * Time: 上午11:55
 */
namespace Illuminate\Contracts\Container;

use Closure;
use Psr\Container\ContainerInterface;

interface Container extends ContainerInterface
{
    // 判断给定的抽象类型是否被绑定
    public function bound($abstract);

    // 给一个类型起别名
    public function alias($abstract, $alias);

    // 为给定绑定设置标签集合
    public function tag($abstracts, $tags);

    // 为给定标签解析所有绑定
    public function tagged($tag);

    // 注册绑定
    public function bind($abstract, $concrete = null, $shared = false);

    // 如果还没注册　则注册一个绑定
    public function bindif($abstract, $concrete = null, $shared = false);

    // 在容器中注册一个共享绑定
    public function singleton($abstract, $concrete = null);

    // 在容器中扩展一个抽象类型
    public function extend($abstract, Closure $closure);

    // 绑定一个实例
    public function instance($abstract, $instance);

    // 定义一个上下文绑定
    public function when($concrete);

    // 获取一个　从容器中解析给定类型　的闭包
    public function factory($abstract);

    // 从容器中解析给定类型
    public function make($abstract, $parameters = []);

    // 调用给定闭包/类的方法　并且注入它的依赖
    public function call($callback, $parameters = [], $defaultMethod = null);

    // 检查给定类型是否被解析
    public function resolved($abstract);

    // 注册一个新的解析回调函数
    public function resolving($abstract, Closure $callback = null);

    // 注册一个后执行的解析回调闭包
    public function afterResolving($abstract, Closure $callback = null);





}