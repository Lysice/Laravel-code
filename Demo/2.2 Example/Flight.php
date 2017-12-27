<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:10
 */
namespace Demo\Two;

class Flight {
    protected $speed;
    protected $holdtime;
    public function __construct($speed, $holdtime) {
        $this->speed = $speed;
        $this->holdtime = $holdtime;
    }
}