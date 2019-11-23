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
   // Vòng lặp for
     for ($i = 0; $i <10; $i++){
     	echo "<br>" . $i;
	 }
	 //vòng lặp while
   $n = 1;
     $m = 1;
   while($n < 20) {
       echo "<br>" . $n;
       $n++;
   }
   // vòng lặp do-while
   do {
       echo "<br>" . $m;
       $m++;
   } while($m < 21);
   ?>

</body>
</html>
