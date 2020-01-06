<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Document</title>
</head>
<body>
<?php
include_once "connect.php";

// SELECT * FROM Table limit start
$sqlSelect = "SELECT * FROM posts ORDER BY id ASC LIMIT 0,20";

$stmt = $conn->prepare($sqlSelect);
$stmt->execute();

// set the resulting array to associative
$data = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$data = $stmt->fetchAll();

echo "<pre>";
print_r($data);
echo "</pre>";



?>

<div class="container">
    <h2>Basic Ajax</h2>
    <table id="ajaxtable" class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Intro</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($data as $item) { ?>
        <tr>
            <td><?php echo $item['id']?></td>
            <td><?php echo $item['title']?></td>
            <td><?php echo $item['intro']?></td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
    <button id="loadmore" class="btn btn-success">Xem thêm</button>
</div>
<script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#loadmore").on("click", function () {
            /*
            * LIMIT 0,20
            * LIMIT 20,20
            * LIMIT 40,20
            * LIMIT 80,20
            *
            * */

            var start = $("#ajaxtable tbody > tr").length;

            var dataPost = {};
            dataPost.start = start;
            dataPost.limit = 20;

            $.ajax({
                // đich gửi dữ liệu đến
                url: "loadmore.php",
                //dữ liệu gửi đi
                data: dataPost,
                //cách gửi dữ liệu
                type: "POST",
                //kiểu data trả về
                dataType: "json",
                beforeSend: function () {
                    alert("BEFORE SEND");
                },
                success: function (res) {
                    console.log(res);
                    
                    if (parseInt(res.length) > 0) {
                        var html ="";
                        for (i = 0; i<res.length;i++) {
                            console.log(res[i]);
                            html += '<tr>'+
                                '<td>'+ res[i].id + '</td>'+
                                '<td>'+ res[i].title + '</td>'+
                                '<td>'+ res[i].intro + '</td>'+
                                '</tr>';
                        }
                            console.log(html);
                        $("#ajaxtable tbody").append(html);
                    } else  {
                        alert("Hết dữ liệu trong db");
                        $("#loadmore").hide();
                    }

                },
                error: function() {
                  alert("ERROR HAPPENDED !");
                },
                complete: function () {
                    alert("FINISH AJAX")
                }
            });
        });
    })

</script>

</body>
</html>