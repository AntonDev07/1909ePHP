<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>

<?php
    // Nạp file connect
include_once "connectdb.php";

if (isset($_POST['firstname']) && isset($_POST["lastname"]) && isset($_POST["email"])) {
    $id = (int)$_POST["id"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];

//    $sql_insert = "INSERT INTO myguests (firstname, lastname, email) VALUES ('$firstname', '$lastname','$email')";
    $sql_update = "UPDATE myguests SET firstname ='$firstname',lastname ='$lastname',email='$email' where id = $id";
//    echo $sql_insert;

    $test = $conn->query($sql_update);

    if ($test) {
//        echo "<br> Insert thành công rồi ông giáo !";
        echo "<br> Update thành công rồi ông giáo !";
    }
    else  {
//        echo "<br> Insert thất bại rồi lão !";
        echo "<br> Update thất bại rồi lão !";
    }
    echo "<br> Thực hiện câu query";
    var_dump($test);
}


?>
    <div class="page-wrap">
        <form action="" name="myguest" method="post">
            <p>
                <label>id</label>
                <input name="id" type="text" value="">
            </p>
            <p>
                <label>firstname</label>
                <input type="text" name="firstname" value="">
            </p>
            <p>
                <label>lastname</label>
                <input type="text" name="lastname" value="">
            </p>
            <p>
                <label>email</label>
                <input type="text" name="email" value="">
            </p>
            <p>
                <input type="submit" name="submit" value="Sign up">
            </p>
        </form>
    </div>
</body>
</html>