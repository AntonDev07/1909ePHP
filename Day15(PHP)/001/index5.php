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
   Học về mảng (array)


	Note: echo không in được chuỗi, phải dùng print_ r()
</pre>
<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 11/21/2019
 * Time: 6:35 PM
 */
   $a = array(1,2,3,5,8,9,10);
   $b = array('Nguyen van a', ' Le Thi B', ' Ho Van Hao');
   $c = array(1,3, true, 8.8, false );


	   echo "<pre>";
	   print_r($a);
	   echo "</pre>";
		echo "<pre>";
		   print_r($b);
		   echo "</pre>";
		echo "<pre>";
		   print_r($c);
		   echo "</pre>";
    // Sử dụng vòng lặp for each đi với mảng
    foreach ($b as $key => $value){
    	echo $key . " - " . $value . "<br>";
	}


?>
</body>
</html>
