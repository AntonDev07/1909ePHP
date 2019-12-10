<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/1/2019
 * Time: 6:05 PM
 */
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Session vs cookie</title>
</head>
<body>

 <pre>
        Session trong PHP

        Một session là cách để lưu trữ thông tin trong biến mà được sử dụng
        trên toàn bộ các trang trên cùng 1 trang web
        Không giống cookie , thông tin được lưu trữ trên session được lưu trữ trên
        server

        Ứng dụng của session
        1 - làm giỏ hàng trong php để lưu trữ các sản phẩm mà khách hàng muốn mua
        2 - làm chức năng đăng nhập và đăng xuất trong php

        Chú ý để sử dụng session thì đầu file phải để dòng code :
        session_start();

        Để khởi tạo session
        $_SESSION["username"] = "admin";
        Chú ý
        $_SESSION là 1 mảng
    </pre>
  <?php
  // khởi tạo 3 session
    $_SESSION["user_name"] = "admin";
    $_SESSION["user_email"] = "admin@gmail.com";
    $_SESSION["user_role"] = "administrator";

    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

   unset($_SESSION["user_name"]);

  echo "<pre>";
  print_r($_SESSION);
  echo "</pre>";
  ?>
</body>
</html>
