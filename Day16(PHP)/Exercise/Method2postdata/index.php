<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 11/28/2019
 * Time: 6:46 PM
 */
$height = $weight = "";
$bmi = "";
$phanloai = "";
$nguyco = "";

    if (isset($_POST["weight"])&& isset($_POST["height"])){
        if (($_POST["weight"] != "")  &&($_POST["height"] != "")){
            $weight = $_POST["weight"];
            $height = $_POST["height"];
            $bmi = $weight /($height*$height);


            if ($bmi < 18.5){
                $phanloai = "Gầy";
                $nguyco = "Thấp";
            }
            if ($bmi > 18.5 && $bmi <24.9){
                $phanloai = "Bình thường";
                $nguyco = "Trung bình";
            }
            if ($bmi > 25.0 && $bmi <29.9){
                $phanloai = "béo phì";
                $nguyco = "Cao";
            }

        }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tính toán BMI</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
<div class="container">
    <div class="row">

            <pre>
                Sử dụng công thức tại trang https://news.zing.vn/5-cong-thuc-don-gian-do-chi-so-bmi-post669580.html
                để tính toán ra chỉ số BMI khi nhập vào
                và in ra thông tin phân loại
                và nguy cơ bệnh tật
            </pre>
        <form name="bmi" action="" method="post" role="form">
            <div class="form-group">
                <label>Cân nặng ( Kg )</label>
                <input type="text" name="weight" class="form-control" placeholder="Cân nặng" value="<?php echo round($weight,2)?>">

            </div>
            <div class="form-group">
                <label>Chiều cao ( đơn vị mét )</label>
                <input type="text" name="height" class="form-control" placeholder="Chiều cao" value="<?php echo round($height,2)?>">
            </div>

            <button class="btn btn-primary" name="btnTinh">tính MBI</button>
        </form>
    </div>
    <div class="row">
        <h2>Kết quả sau tính toán</h2>


    </div>

    <div class="row">
        <p>BMI : <?php echo round($bmi,2) . "<br>" ?></p>

        <p>Phân loại : <?php echo $phanloai ."<br>" ?></p>

        <p>Nguy cơ bênh tật : <?php echo $nguyco . "<br>"?></p>
    </div>


</div>


</body>
</html>