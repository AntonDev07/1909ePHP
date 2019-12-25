<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/19/2019
 * Time: 6:56 PM
 */

/**
 * Có 2 cách kết nối đến CSDL trong php
 * cách 1 : MySQLi extension (the "i" stands for improved)
 * cách 2 : PDO (PHP Data Objects)
 */
/**
 * Cách 1 : Sử dụng MYSQLI theo kiểu hướng đối tượng
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

$connection = new mysqli($mysqlServer,$mysqlUser,$mysqlPassword,$mysqlDatabasename);

// Kiểm tra xem connection có lỗi hay không

if ($connection->connect_error){
    // nếu có lỗi xảy ra
    // có thể CSDL không tồn tại
    // hay kết nối máy chủ CSDL bị lỗi
    // hay sai username và password
    // ngắt chương trình bằng lệnh die
    // và show cái lỗi đang gặp phải
    die("Connect unsuccessfully !" .$connection->connect_error);
}

echo "<br> Connection successfully";




?>