<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 11/28/2019
 * Time: 6:31 PM
 */
$_POST["btnTinh"] = ($_POST["weight"] / ($_POST["height"] * $_POST["height"]));
 echo '<br>Cân nặng' . $_POST['weight'];
 echo '<br>Chiều cao' . $_POST['height'];
 echo '<br>BMI: ' . $_POST['btnTinh'];
?>