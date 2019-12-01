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
  Sort-array
</pre>
<?php
  $age = array("Peter" => 37, "John" => 35, "Doe" =>43);

	echo "<pre>";
	print_r($age);
	echo "</pre>";
	krsort($age);
	echo "<pre>";
	print_r($age);
	echo "</pre>";

?>


</body>
</html>
