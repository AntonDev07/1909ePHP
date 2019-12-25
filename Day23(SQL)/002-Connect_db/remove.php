<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/22/2019
 * Time: 6:31 PM
 */

// Nạp file kết nối csdl

include_once "connectdb.php";

if (isset($_POST["id"]) ) {
    $id = $_POST["id"];

    $sql = "DELETE FROM myguests where id = $id";

    echo $sql;

    $test = $conn->query($sql);

    if ($test) {
        echo "<br> Xóa thành công ";
    }
    else {
        echo "<br> Xóa thất bại rồi";
    }

    echo "<br> Kết quả thực hiện câu query";
    var_dump($test);

    header("Location: selectindex6.php"); exit;


}

?>