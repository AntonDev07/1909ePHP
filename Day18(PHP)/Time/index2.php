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
    	 tạo thời gian bằng hàm
        mktime(hour, minute, second, month, day, year)
        kết quả trả về là dạng thời gian timestamp

    </pre>


 <?php
    $time2000 = mktime(12,0,0,1,1,2000);

    echo "<br>". $time2000;

    // chuyển kết quả về thời gian đọc được

 echo "<br>". date("H:i:s d/m/Y", $time2000);
 ?>

</body>
</html>
