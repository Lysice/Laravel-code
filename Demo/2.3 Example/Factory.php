<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午5:30
 */
namespace Demo\Three;
require_once "Flight.php";
require_once "Force.php";
require_once "Shot.php";

class Factory
{
    public function makeModule($moduleName, $options)
    {
        switch ($moduleName) {
            case 'Fight':
                return new Fight($options[0], $options[1]);
            case 'Force':
                return new Force($options[0]);
            case 'Shot':
                return new Shot($options[0], $options[1], $options[2]);
        }
    }
}