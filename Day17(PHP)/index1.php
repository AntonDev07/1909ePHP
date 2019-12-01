<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 11/28/2019
 * Time: 7:21 PM
 */
$username = $password = "";
$result = "";

  if (isset($_POST['Login']) && !empty($_POST)){
      if (isset($_POST["username"]) && isset($_POST["password"])){
          $username = $_POST["username"];
          $password = $_POST["password"];
          if ($username == "admin" && $password == "12345"){
            echo "<div>";
            echo "<strong>Success bạn đã đăng nhập thành công !". "</strong>";
			echo "</div>";
          }
      }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<pre>
    Tạo 1 form đăng nhập trong chính file index1.php
    có username và mật khẩu
    nếu username = admin và mật khẩu == 12345
    thì hiển thị ra màn hình 3 dòng thông báo thành công bên dưới
    chú ý không được echo ra thẻ html để hiểu được cách nhúng thẻ html
    trong các cú pháp if else hay for loop trong PHP
    ngược lại hiển thị 3 dòng thông báo thất bại trong chính file này
</pre>
<form action="" name="login" method="post">
    <p>
        <label>Username</label>
        <input type="text" name="username" value="">
    </p>
    <p>
        <label>Password</label>
        <input type="password" name="password" value="">
    </p>
    <p>
        <input type="submit" value="Login" name="submit">
    </p>
</form>

<!--<div class="alert alert-success">-->
<!--    <strong>Success! Bạn đã đăng nhập thành công</strong>-->
<!--</div>-->
<!--<div class="alert alert-danger">-->
<!--    <strong>Fail!</strong> Sai username và mật khẩu-->
<!--</div>-->
</body>
</html>
