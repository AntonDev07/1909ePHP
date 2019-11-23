<?php
  function tinhdientichhinhtron($bankinh){
  	$S = $bankinh * $bankinh * 3.14;
  	return $S;
  }
  $r = 5;
  $dientich = tinhdientichhinhtron($r);
  echo "Diện tích hình tròn là: " .$dientich;
?>

