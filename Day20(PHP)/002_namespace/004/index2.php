<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 8:17 PM
 */

include_once "../app/controllers/controller.php";
include_once "../app/controllers/backend/index.php";
include_once "../app/controllers/backend/post.php";
include_once "../app/controllers/frontend/index.php";
include_once "../app/controllers/frontend/post.php";


 /*Muốn khởi tạp 1 dối tượng từ class
 Index Controller nằm trong folder app/controllers/backend
 Việc đầu tiên ?
 */


// Cách 2 sử dụng đầy đủ namespace rồi gọi class sau

use \App\Controllers\Backend\IndexController as BE_IndexController;
use \App\Controllers\Frontend\IndexController as FE_IndexController;

$indexController1 = new BE_IndexController();
$indexController1->getInfo();

$indexController2 = new  FE_IndexController();
$indexController2->getInfo();

?>