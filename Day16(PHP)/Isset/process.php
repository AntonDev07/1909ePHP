<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 11/24/2019
 * Time: 8:36 PM
 */

if (isset($_POST["username"]) && isset($_POST["password"])){
    if (($_POST["username"]  != "") &&($_POST["password"] != "")){
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "admin" && $password == "12345"){
            header("Location: success.php");
            exit(0);
        }
    }
}
header("Location: index1.php?message=Username hay password không đúng");
exit();
?>