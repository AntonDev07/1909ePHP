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
        Nạp file trong PHP
        include , require , include_once , require_once
        Ứng dụng của việc nạp file trong PHP
        chia nhỏ ứng dụng thành các file theo chức năng để dễ bảo trì và quản lý
        trong đó sẽ có 1 file chính và nạp các file con vào trong suốt quá trình chạy
    </pre>
  <pre>
    Sự giống nhau : 4 hàm này đều dùng để nạp 1 file vào 1 file khác
    Sự khác nhau :
    - include ( khi mà quá trình nạp file bị lỗi thì chương trình vẫn chạy tiếp )
    - require ( khi mà quá trình nạp file bị lôi thì chương trình sẽ dừng chạy )
    - include_once ( giống include nhưng chỉ nạp file 1 lần ngay cả khi bị gọi nhiều lần )
    - require_once ( giống require nhưng chỉ nạp file 1 lần ngày cả khi gọi nhiều lần )
</pre>
</body>
</html>