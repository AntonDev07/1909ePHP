<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/12/2019
 * Time: 8:45 PM
 */
// Lamda là hàm ko có tên, ẩn danh
// CÓ những hàm chỉ dùng một lần duy nhất


function tinhchuvihinhtron($r) {
    return $r * 2 * 3.14;
}

function hello($name) {
    echo "<br>Chào: " . $name;
}
hello("tuấn");

$php = function ()
{
    return "PHP";
};

hello($php());
?>

