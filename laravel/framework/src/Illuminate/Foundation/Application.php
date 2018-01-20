<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-19
 * Time: 上午11:52
 */
use Illuminate\Container\Container;
use Illuminate\Contracts\Foundation\Application as ApplicationContract;
use Illuminate\Support\Str;

class Application extends Container implements ApplicationContract
{
    const VERSION = '1.0';

    protected $basePath;                    //根目录

    protected $hasBeenBootstrapped = false; // 指示应用程序是否被引导

    protected $booted = false;              //指示应用程序是否已启动

    protected $bootingCallbacks = [];       // 引导回调函数的数组

    protected $bootedCallbacks = [];        // 引导后执行回调函数的数组

    protected $terminatingCallbacks = [];   // 终止回调函数数组

    protected $serviceProviders = [];       //　所有的注册过的服务提供者

    protected $loadedProviders = [];        // 已加载的服务提供者名字

    protected $deferredServices = [];       // 延迟回调及提供者

    protected $monologConfigurator;         // 自定义回调　用于配置monolog

    protected $databasePath;                // 自定义数据库路径

    protected $storagePath;                 // 自定义缓存路径

    protected $environmentPath;             // 自定义环境路径

    protected $environmentFile = '.env';    // 在bootstrapping过程中加载的环境文件

    protected $namespace;                   // 应用命名空间

    // 创建实例
    public function __construct($basePath = null)
    {
        if ($basePath) {
            $this->setBasePath();
        }


    }

    // 版本信息
    public function version()
    {
        return static::VERSION;
    }


    // 注册基础绑定
    protected function registerBaseBindings()
    {

    }

    // 注册基础服务提供者
    protected function registerBaseServiceProviders()
    {
//        $this->
    }

    // 运行给定的引导类
    public function bootstrapWith(array $bootstrappers)
    {
        $this->hasBeenBootstrapped = true;

        foreach ($bootstrappers as $bootstrapper) {

        }
    }

    // 注册 加载完环境之后运行的回调函数
    public function afterLoadingEnvironment(Closure $callback)
    {

    }

    // 注册一个回调函数 该毁掉函数会在一个bootstrapper之前执行
    public function beforeBootstrapping(Closure $callback)
    {
    }

    public function afterBootstrapping(Closure $callback)
    {

    }

    // 判断当前应用是否被引导过了
    public function hasBeenBootstrapped()
    {

    }

    // 为应用设置basePath
    public function setBasePath()
    {}

    // 在容器中绑定所有应用路径
    public function bindPathsInContainer()
    {
//        $this->instance('path', $this->path());
    }

    // 获取app的路径
    public function path($path = '')
    {

    }

    // 获取laravel安装根路径
    public function basePath()
    {
        // TODO: Implement basePath() method.
    }

    //  获取bootstrap的路径
    public function bootstrapPath($path = '')
    {

    }

    // 获取配置路径
    public function configPath($path = '')
    {}

    // 获取数据库路径
    public function databasePath($path = '')
    {}

    // 设置数据库路径
    public function setDatabasePath($path = '')
    {}

    // 获取语言路径
    public function langPath()
    {}

    // 获取公共路径
    public function publicPath()
    {

    }

    // 获取storage路径
    public function storagePath()
    {

    }

    // 设置storage路径
    public function setStoragePath()
    {}

    // 获取resource路径
    public function resourcePath()
    {}

    // 获取环境文件路径
    public function environmentPath()
    {

    }

    // 设置环境文件路径
    public function setEnvironmentPath()
    {}

    // 设置要在引导过程中加载的环境文件。
    public function loadEnvironmentFrom($file)
    {

    }

    // 获取应用正在用的环境文件名
    public function environmentFile()
    {
        return $this->environmentFile ? : '.env';
    }

    public function environmentFilePath()
    {
        return $this->environmentPath() . '/' . $this->environmentFile();
    }

    // 获取/检测当前应用环境
    public function environment()
    {
        // func_num_args 获取传入函数的参数数目
        if (func_num_args() > 0) {
            $patterns = is_array(func_get_arg(0)) ? func_get_arg(0) : func_get_args();

            foreach ($patterns as $pattern) {
                if (Str::is($pattern, $this['env'])) {
                    return true;
                }
            }

        }

        return $this['env'];
    }


}