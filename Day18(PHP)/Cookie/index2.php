 <?php
$cookieName = "username";
$cookieValue = "12345678";
$lifetime = time() + (86400*30);

setcookie($cookieName,$cookieValue,$lifetime, "/");

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

// thay đổi nổi dung
 setcookie($cookieName,987654321,$lifetime, "/");

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cookie</title>
</head>
<body>
 <pre>
        Cookie là gì ?
        Cookie thường được sử dụng để nhận diện người dùng . Một coolie là 1 file
        nhỏ mà server nhúng vào trong máy tính của người dùng . Mỗi lần cùng 1 máy tính
        gửi yêu cầu truy cập đến 1 trang trên trình duyệt nó sẽ gửi đi 1 cookie tương
        tự như những lần trước . Với PHP bạn có thể tạo và lấy giá trị của cookie

        Cú pháp tạo 1 cookie

        setcookie(name, value, expire, path, domain, secure, httponly);
        tham số 1 là tên cookie
        tham số 2 là giá trị
        tham số 3 là thời gian sống cookie
        tham số 4 đường dẫn của cookie
        tham số 5 tên miền


       Chú ý: setcookie phải để ở đầu trang trước thẻ mở html để ko phải f5 khi mở web


    </pre>

</body>
</html>
