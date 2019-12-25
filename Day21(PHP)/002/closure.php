<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/12/2019
 * Time: 8:52 PM
 */

// closure cũng là lamda nhưng có thể use biến bên ngoài function ()
function tinhchuvihinhtron($r) {
    return $r * 2 * 3.14;
}

function hello($name) {
    echo "<br>Chào: " . $name;
}
hello("tuấn");

$name = "phiên bản 7";
$new = ", phiên bản 10";
$php = function () use ($name, $new) {
    return "PHP " . $name . $new;
};

hello($php());

?>