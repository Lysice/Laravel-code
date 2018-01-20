<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-19
 * Time: 下午5:33
 */
namespace Illuminate\Contracts\Foundation;

use Illuminate\Contracts\Container\Container;

interface Application extends Container
{
    // 获取版本号
    public function version();

    // 获取Laravel的安装路径
    public function basePath();

    // 获取/检查当前的环境
    public function environment();

    // 决定我们是否在console中运行
    public function runningInConsole();

    // 是否维护
    public function isDownForMaintenance();

    // 注册所有配置的服务提供者
    public function registerConfiguredProviders();

    // 注册服务提供者
    public function register($provider, $options = [], $force = false);

    // 注册延迟服务提供者和服务
    public function registerDeferredProvider($provider, $service = null);

    // 引导应用的服务提供者
    public function boot();

    // 注册一个新的引导监听
    public function booting($callback);

    // 注册一个新的　booted 监听器
    public function booted($callback);

    // 获取缓存服务提供者的文件services.php的路径
    public function getCachedServicesPath();

    // 获取缓存的包文件packages.php的路径
    public function getCachedPackagesPath();


}