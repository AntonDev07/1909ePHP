<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/19/2019
 * Time: 8:44 PM
 */

if (isset($_GET["id"]) &&($_GET["id"] > 0)) {
    $id = (int)$_GET["id"];

    include_once "connectdb.php";

    $sqlSelect = "SELECT * FROM myguests where id = $id";

    $stmt = $conn->prepare($sqlSelect);
    $stmt->execute();

    // set the resulting array to associative;
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $all = $stmt->fetchAll();


    echo "<pre>";
    print_r($all);
    echo "</pre>";
    $user = isset($all[0]) ? $all[0] : 0;
}else {
    echo "<br> Không tìm thấy id";
}

if (!isset($user["id"])) {
    echo "<br> Không tìm thấy bản ghi có id tương ứng"; exit;
}
?>

<div class="page-wrap">
    <form name="myguests" action="remove.php" method="post">

        <input type="hidden" name="id" value="<?php echo $user["id"] ?>">
        <p>
            <label>firstname</label>
            <input name="firstname" type="text" value="<?php echo $user["firstname"] ?>" disabled>
        </p>

        <p>
            <label>lastname</label>
            <input name="lastname" type="text" value="<?php echo $user["lastname"] ?>" disabled>
        </p>

        <p>
            <label>email</label>
            <input name="email" type="email" value="<?php echo $user["email"] ?>" disabled>
        </p>

        <p>
            <input type="submit" name="submit" value="Xóa data">
        </p>

    </form>
</div>

