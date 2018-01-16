<?php
/**
 * Created by PhpStorm.
 * User: sudai
 * Date: 17-12-27
 * Time: 下午6:36
 */
//2.1
//
require_once "../2.1 Example/Superman.php";
use Demo\One\Superman;
$superman = new Superman();

// 3.1 Facades
require_once '../3.1 Facades/DBFacade.php';
use Demo\Facades\DBFacade;
DBFacade::write('hello');

