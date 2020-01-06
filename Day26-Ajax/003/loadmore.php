<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/2/2020
 * Time: 8:29 PM
 */

include_once "connect.php";

if (isset($_POST['start']) && isset($_POST['limit'])) {
    $start = $_POST['start'];
    $limit = $_POST['limit'];

    $sqlSelect = "SELECT * FROM posts ORDER BY id ASC LIMIT $start,$limit";


    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();
// set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $data = $stmt->fetchAll();

    echo json_encode($data);


} else {
    echo "DỮ LIỆU KHÔNG HỢP LỆ";
}

exit;