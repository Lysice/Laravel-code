<?php
namespace Demo\One;
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:06
 */
class Power {
    protected $ability;
    protected $range;

    function __construct($ability, $range)
    {
        $this->ability = $ability;
        $this->range = $range;
    }

    function beat() {
        echo 'power';
    }
}