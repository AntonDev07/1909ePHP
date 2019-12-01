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
     - isset() để kiểm tra 1 biến có tồn tại hay không
        nếu biến tồn tại isset() trả về true
        nếu biến không tồn tại isset() trả về false
        - header("Location: url")
        hàm header trong PHP được dùng để chuyển hướng URL
        đến 1 trang khác sau header nhớ dùng lệnh exit();
</pre>
<form action="process.php" name="login" method="post">
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

<?php
  if (isset($_GET["message"])){
?>
  <p style="color: red;"><?php echo $_GET["message"]?></p>
  <?php }
?>


</body>
</html>
