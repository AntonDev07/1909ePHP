<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/19/2019
 * Time: 7:26 PM
 */
// Cách 3: SỬ dụng phương pháp PDO database


$servername = 'localhost';
$serveruser = 'root';
$serverpassword = '';
$dbname = "ngay19thang12";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$serveruser,$serverpassword);
    //set the pdo error mode to exception

    $conn->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);
    echo "Kết nối ổn đấy bạn ạ !";
}
catch (PDOException $e) {
    echo "Kết nối tệ vl ông ạ " .$e->getMessage();
}


?>