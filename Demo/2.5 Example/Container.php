<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午6:32
 */
namespace Demo\Five;

class Container {
    protected $binds;
    protected $instances;
    public function bind($abstract, $concrete) {
        if ($concrete instanceof Closure) {
            $this->binds[$abstract] = $concrete;
        } else {
            $this->instances[$abstract] = $concrete;
        }
    }

    public function make($abstract, $parameters = []) {
        if (isset($this->instances[$abstract])) {
            return $this->instances[$abstract];
        }
        array_unshift($parameters, $this);

        return call_user_func_array($this->binds[$abstract], $parameters);
    }
}