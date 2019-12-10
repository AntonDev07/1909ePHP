<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 8:17 PM
 */

include_once  "../app/controllers/controller.php";
include_once  "../app/controllers/backend/index.php";
include_once  "../app/controllers/backend/post.php";
include_once  "../app/controllers/frontend/index.php";
include_once  "../app/controllers/frontend/post.php";


 /*Muốn khởi tạp 1 dối tượng từ class
 Index Controller nằm trong folder app/controllers/backend
 Việc đầu tiên ?
 */


// Cách 1 sử dụng đầy đủ namespace khi khởi tạo đối tượng

$indexController = new \App\Controllers\Backend\IndexController();
$indexController->getInfo();

$indexController1 = new  \App\Controllers\Frontend\IndexController();
$indexController1->getInfo();
?>