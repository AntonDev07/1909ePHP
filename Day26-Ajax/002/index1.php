<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/2/2020
 * Time: 6:46 PM
 */

$mang1 = [
    ["ten" => "hà nội", "gdp" => "10 tỷ usd"],
    ["ten" => "hồ chí minh", "gdp" => "15 tỷ usd"],
    ["ten" => "bắc ninh", "gdp" => "5 tỷ usd"],
];

$json1 = json_encode($mang1);

echo "<pre>";
print_r($mang1);
echo "</pre>";

echo "<pre>";
print_r($json1);
echo "</pre>";