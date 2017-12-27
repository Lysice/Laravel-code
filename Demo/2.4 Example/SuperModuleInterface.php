<?php

namespace Demo\Four;
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:43
 */

interface SuperModuleInterface {
    /*
     * 超能力激活方法
     * 任何一个超能力都得有该方法　并拥有一个参数
     */
    public function active($target = []);
}