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
   $_GET có 2 tác dụng
        tác dụng 1 là nó lấy dữ liệu submit đi từ form có method="get"
        tác dụng 2 là nó sẽ lấy dữ liệu từ trên URL xuống
        URL : index4.php
        thêm query string vào sau index4.php
        index4.php?"query string"
        => index4.php?controller=index&action=edit&id=5&catid=9
</pre>
<?php

echo "<pre>";
print_r($_GET);
echo "</pre>";

echo "<br>" .$_GET["controller"];
echo "<br>" .$_GET["action"];
echo "<br>" .$_GET["id"];
echo "<br>" .$_GET["catid"];

?>



</body>
</html>
