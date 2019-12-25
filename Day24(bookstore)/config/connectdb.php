<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/22/2019
 * Time: 7:10 PM
 */

$servername = "localhost";
$username = "root";
$password ="";
$dbname ="bookstore";



try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection thất bại: " . $e->getMessage();
}
?>

