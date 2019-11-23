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
    Sử dụng hằng số hàm xử lý chuỗi;
</pre>
<?php
   $a = " Hello cac ban";
//   echo strlen($a);
   echo str_word_count($a);
   echo "<br>tìm chuỗi nhỏ trong chuỗi mẹ: ". strpos("Xin chao cac ban", "cac ban");
   echo "<br> Thay thế chuỗi: " .str_replace("viet nam", " han quoc", "chao viet nam");
   echo "<br> Thay thế chuỗi: " .str_replace("nhat ban", " han quoc", "chao viet nam");
?>
</body>
</html>
