<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 18-1-4
 * Time: 下午2:34
 */
namespace Demo\Facades;
require_once 'Facade.php';
require_once 'DB.php';
use Demo\Facades\Facade;
use Demo\Facades\DB;

class DBFacade extends Facade {
    public static function getFacadeAccessor()
    {
        return DB::class;
    }
}