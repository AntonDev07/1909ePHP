<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/29/2019
 * Time: 6:46 PM
 */


$hostname = 'localhost';

$username = 'root';

$password ='';

$database = 'simple_shop';

$connect = new mysqli($hostname,$username,$password,$database);

if ($connect->connect_error) {
    echo "Két nôi không thành công" . $connect->connect_error;
}

echo "Kết nối thành công !";