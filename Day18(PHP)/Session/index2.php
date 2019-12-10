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
   $students[] = [];
   $students[] = "nguyễn văn a";
   $students[] = "nguyễn văn b";
   $students[] = "nguyễn văn c";

   echo "<pre>";
   print_r($students);
   echo "</pre>";

   // unset() để hủy phần tử trong mảng
  unset( $students[2]);


  echo "<pre>";
  print_r($students);
  echo "</pre>";

  ?>
</body>
</html>
