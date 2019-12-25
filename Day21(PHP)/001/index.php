<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/12/2019
 * Time: 7:01 PM
 */
/**
 * Tiến hành khởi tạo 5 đối tượng từ các class Payment, Paypal , Pdf , ImportExcel,
 * ExportExcel
 * và gọi method demo() trong các class này
 * Bước 2 :
 * vào trong class Payment
 * và nạp các trait Momo và Napas vào class Payment
 * cuối cùng hãy dùng chính đối tượng payment khởi tạo từ class Payment
 * và gọi đến 2 method demoMomo và demoNapas từ đối tượng payment
 */
include_once "Excel/export.php";
include_once "Excel/import.php";
include_once  "Traits/momo.php";
include_once  "Traits/napas.php";

include_once "Ultilities/Payment/payment.php";
include_once  "Ultilities/Paypal/paypal.php";
include_once  "Ultilities/Pdf/pdf.php";

use \Excel\ExportExcel;
use \Excel\ImportExcel;
use \Ultilities\Payment\Payment;
use \Ultilities\Paypal\Paypal;
use \Ultilities\Pdf\Pdf;



$ImportExcel = new ImportExcel();
$ImportExcel->demo();
echo "<br>";
$ExportExcel = new ExportExcel();
$ExportExcel->demo();

echo "<br>";
$Payment = new Payment();
$Payment->demo();
//$Payment->demoMomo();
//$Payment->demoNapas();
echo "<br>";

$Paypal = new Paypal();
$Paypal->demo();
echo "<br>";
$Pdf = new Pdf();
$Pdf->demo();





?>