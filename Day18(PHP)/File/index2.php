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
      Tạo và ghi nội dung vào file trong PHP
        sử dụng hàm fwrite() fopen() fclose
    </pre>
   <?php
   $myfile =  fopen("write.txt","w") or die("Không thể ghi file");
   $content ="
     Dòng số 1
     Dòng số 2
     Dòng số 3
     Dòng số 3
   ";
   fwrite($myfile, $content);
   fclose($myfile);
   ?>
</body>
</html>
