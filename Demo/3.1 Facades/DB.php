<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-4
 * Time: 下午2:22
 */
namespace Demo\Facades;
class DB {
    public function __construct()
    {
    }

    // write
    public function write($str = '') {
        echo 'write' . $str . PHP_EOL;
    }

    // read
    public function read($str = '') {
        echo 'read' . $str . PHP_EOL;
    }
}