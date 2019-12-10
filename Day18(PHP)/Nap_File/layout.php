<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/1/2019
 * Time: 8:02 PM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .clearfix::after {
            content: '';
            display: table;
            clear: both;
        }
    </style>
</head>
<body>
  <div class="page-wrapper" style="width: 800px; background: green; margin: 0 auto">
        <?php include_once "header.php"?>
     <main class="clearfix">
         <?php include_once  "sidebar.php"?>
         <section style="background: #cae8ca; width: 70%; float: left; height: 500px;" >
            <?php include_once "maincontent.php"?>
         </section>
     </main>
       <?php include_once "footer.php"?>
  </div>
</body>
</html>
