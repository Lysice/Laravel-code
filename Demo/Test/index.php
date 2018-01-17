<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午6:36
 */
require_once '../../include.php';

//2.1
//
require_once "../2.1 Example/Superman.php";
//use Demo\One\Superman;
//$superman = new Superman();

// 3.1 Facades
require_once '../3.1 Facades/DBFacade.php';
//use Demo\Facades\DBFacade;
//DBFacade::write('hello');

// laravel Facades 实现
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\DB;
DB::write();

