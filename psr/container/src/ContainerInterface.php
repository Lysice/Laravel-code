<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-19
 * Time: 下午1:23
 */

namespace Psr\Container;

interface ContainerInterface
{
    public function get($id);

    public function has($id);
}