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
  mảng đa chiều
</pre>
<?php
 $vietnam = [];
 $vietnam["hn"] =  [
 		"province" => 'Hà Nội',
	 	"district" =>[
			"tx" => 'thanh xuân',
			"hk" => 'Hoàn kiếm',
			"th" => 'Tây hồ',

 ]];

 $vietnam["hcm"] = [
 		"province" => "Hồ chí minh",
	 	"district" => [
	 			"td" => 'thủ đức',
	 			"1" => 'quận 1',
	 			"3" => 'quận 3',
	 			"7" => 'quận 7',
		]
 ];
 $vietnam["dn"] = [
 		"province" => "Đà Nẵng",
	    "district" => [
	    	"lc" => "Liên chiều",
	    	"hs" => "Ngũ hành sơn",
	    	"tk" => "Triều khúc",
	    	"hk" => "Hương khê",
		]
 ];
 echo "<pre>";
 print_r($vietnam);
 echo "</pre>";

 echo "<br>" . $vietnam["hn"]["province"];
 echo "<br>" . $vietnam["hn"]["district"]["tx"];
 echo "<br>" . $vietnam["hcm"]["province"];
 echo "<br>" . $vietnam["hcm"]["district"]["td"];

  foreach ($vietnam as $key_province => $value_province){
  	 echo  "<br>".  "-" . $value_province["province"];
//  	 echo "<pre>";
//  	 print_r($value_province);
//  	 echo "</pre>";
  	 foreach ($value_province["district"] as $key_district => $value_district){
  	 	echo "<br>". "--".  $key_district . "-". $value_district;
//         echo "<pre>";
//         print_r($value_district);
//         echo "</pre>";
	 }
  }
?>


</body>
</html>
