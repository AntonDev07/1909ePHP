<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<pre>

</pre>
<?php
/**
* Created by PhpStorm.
* User: FR
* Date: 11/24/2019
* Time: 6:18 PM
*/
 $mobiles = ["iphone", "samsung", "oppo", "vinsmart"];
 // in mảng :

  echo "<pre>";
  print_r($mobiles);
  echo "</pre>";
 // truy xuất từng phần tử trong mảng
  echo "<br>" . $mobiles[0];
  echo "<br>" . $mobiles[1];
  echo "<br>" . $mobiles[2];
  echo "<br>" . $mobiles[3];
  // tổng số phần tử trong mảng
  echo "<br>" . "Tổng số phần tử trong mảng: " . count($mobiles);
  //Kiểm tra 1 biến có phải là 2 mảng ko
    $checkArray = is_array($mobiles);
    echo "<br>" . "Test thử hàm is_array: ";
    var_dump($checkArray);
    //Muốn kiểm tra xem mảng có rỗng hay không
    $checkEmpty = empty($mobiles);
    echo "<br>" . "trả về true nếu mảng rỗng, false nếu mảng không rỗng";
    var_dump($checkEmpty);

    foreach ($mobiles as $key_mobiles => $value_mobiles){
    	echo "<br>". "Key: " . $key_mobiles;
    	echo "<br>". "Value: " . $value_mobiles;
	}
?>


</body>
</html>
<