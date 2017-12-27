<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:11
 */
namespace Demo\Four;

class Shot {
    protected $atk;
    protected $range;
    protected $limit;
    public function __construct($atk, $range, $limit) {
        $this->atk = $atk;
        $this->range = $range;
        $this->limit = $limit;
    }
}