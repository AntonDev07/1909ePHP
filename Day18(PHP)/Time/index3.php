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
    	thực hành strtotime();
    </pre>


 <?php
    $time1 = "12:05:05 23-12-2018";

    echo "<br> Thời gian 1: 12:05:05 23-12-2018 ";

    $time2 = strtotime($time1);

    echo "<br> demo strtotime: " .  $time2;
    // chuyển ngược lại thì date
    echo  "<br> chuyển ngược lại xem có đúng ko: " . date("H:i:s d/m/Y",$time2);


 ?>

</body>
</html>
