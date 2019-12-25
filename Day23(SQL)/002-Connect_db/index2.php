<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/19/2019
 * Time: 7:11 PM
 */

/**
 * Cách 2 : Sử dụng MYSQLI hướng thủ tục
 * để kết nối đến CSDL
 */
// Biến 1: Ip máy chủ SQL
// trên máy tính local thì nhập là localhost
$mysqlServer = "localhost";
// Biến 2: username để kết nối với CSDL
$mysqlUser = "root";
// Biến 3: password để kết nối máy chủ csdl
$mysqlPassword = "";
//Biến 4: tên database đã có sẵn nếu cần kết nối luôn
$mysqlDatabasename = "ngay19thang12";

// tạo 1 kết nối tới csdl
$connection = mysqli_connect($mysqlServer,$mysqlUser,$mysqlPassword,$mysqlDatabasename);

// kiểm tra kết nối

if (!$connection) {
    die("Kết nối thất bại rồi ông giáo ạ !" . mysqli_connect_error());
}

echo "<br> Kết nối thành công rồi lão hạc !";
?>