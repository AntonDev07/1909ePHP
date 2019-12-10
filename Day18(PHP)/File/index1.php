<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/1/2019
 * Time: 7:40 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File</title>
</head>
<body>

   <pre>
       Xử lý file trong PHP
        sử dụng hàm fopen() fread() fclose
    </pre>
   <?php
    $myfile = fopen("demo.txt", "r") or die("Không thể mở file");
    echo  fread($myfile,filesize("demo.txt"));
    fclose($myfile);
   ?>
</body>
</html>
