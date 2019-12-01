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
   Khi mà thuộc tính action="" của form
        thì có nghĩa là form khi submit dữ liệu
        sẽ gửi đến đường dẫn URL hiện tại
        $_POST là 1 mảng
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



</body>
</html>
