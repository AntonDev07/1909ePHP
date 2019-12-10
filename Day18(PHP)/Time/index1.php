<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/1/2019
 * Time: 7:03 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time trong PHP</title>
</head>
<body>
<pre>
    Thời gian trong PHP
        Có 2 kiểu thời gian trong PHP
        1 - Thời gian con người có thể đọc được
        2 - Thời gian tính toán được ( timestamp )

        Thay đổi múi giờ trong PHP
        date_default_timezone_set("America/New_York");
        danh sách timezone
        https://www.php.net/manual/en/timezones.php
        https://www.php.net/manual/en/timezones.asia.php


        date_default_timezone_set("Asia/Ho_Chi_Minh");
        date_default_timezone_get();

    </pre>


 <?php
    date_default_timezone_set("Asia/Ho_Chi_Minh");

   // in ra loại đầu tiên mà người dùng đọc được

   echo  "<br> Hàm date: " . date("H:i:s d/m/Y");

   // in ra thời gian hiện tại dùng để tính toán
   echo "<br> hàm timestamp: " . time();
   echo  "<br> múi giờ hiện tại " . date_default_timezone_get();
 ?>

</body>
</html>
