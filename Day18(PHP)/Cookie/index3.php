<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Hủy cookie thì set thời gian sống của nó là hiện tại time() - số  bất kỳ</h1>

<?php
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
$lifetime = time() - 86400;
setcookie("username", "", $lifetime, "/");
echo "<pre>";
print_r($_COOKIE);
echo "</pre>";
?>
</body>
</html>