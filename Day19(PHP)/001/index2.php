<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/5/2019
 * Time: 6:40 PM
 */

/**
 * Bài toán thực tế ví dụ :
 * Trong diễn đàn sẽ có 3 đối tượng người dùng
 * Người dùng cấp độ 1 : khách truy cập trang
 * Khách chỉ được xem bài viết và để lại phần bình luận
 * Người dùng cấp độ 2 : Mod
 * Mod có quyền duyệt bình luận, cấm người dùng thông thường
 * Người dùng cấp độ 3 : Quản trị viện administrator
 * Quản trị viên có quyền cao nhất có thể tạo ra bài viết
 * thêm , sửa thông tin của Mod và có tất cả quyền của Mod
 */
/**
 * tạo ra 3 class
 * class Guest {}
 * class Mod {}
 * class Admin {}
 */
 include_once "guest.php";
 include_once "mod.php";
 include_once "admin.php";


 $guest1 = new Guest();
 $guest1->name ="người dùng 1";
 $guest1->age = "24";
 $guest1->join_created = "21/12/1999";

 $guest1->viewArticle();
 $guest1->commentArticle();

 echo "<pre>";
 print_r($guest1);
 echo "</pre>";

 $mod1 = new Mod();
 $mod1->name =" mod 1";
 $mod1->viewArticle();

    echo "<pre>";
    print_r($mod1);
    echo "</pre>";

    $admin1 = new Admin();

    echo "<pre>";
    print_r($admin1);
    echo "</pre>";

    $admin1->viewArticle();
?>