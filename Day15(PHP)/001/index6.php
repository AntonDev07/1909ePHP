<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php first 1</title>
</head>
<body>
<pre>
   Vừa khai báo mảng vừa gán giá trị cho mảng

</pre>
<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 11/21/2019
 * Time: 6:35 PM
 */
  // khai báo mảng vào sinh key tự động
    $e = [];
    $e[] = "nguyen van a";
    $e[] = "nguyen van b";
    $e[] = "nguyen van c";

    // khai báo mảng và gán key khi khai báo phần tử

$f = [];
$f[0] = "nguyen van a";
$f[1] = "nguyen van b";
$f[3] = "nguyen van c";

// Khai báo mảng và gán key trong cùng một dòng
// mảng kết hợp là mảng có key là chuỗi
 $g = ["a" => "nguyen van a", "b" => "nguyen van b", "c" => "nguyen van c"];
 echo "<pre>";
 print_r($g);
 echo "</pre>";
echo "<pre>";
 print_r($e);
 echo "</pre>";
echo "<pre>";
 print_r($f);
 echo "</pre>";


?>
</body>
</html>
