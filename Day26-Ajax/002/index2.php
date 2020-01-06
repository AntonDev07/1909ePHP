<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/2/2020
 * Time: 6:52 PM
 */

$json1 = '[{"ten":"h\u00e0 n\u1ed9i","gdp":"10 t\u1ef7 usd"},{"ten":"h\u1ed3 ch\u00ed minh","gdp":"15 t\u1ef7 usd"},{"ten":"b\u1eafc ninh","gdp":"5 t\u1ef7 usd"}]';

$mang1 = json_decode($json1);

echo "<pre>";
print_r($json1);
echo "</pre>";

echo "<pre>";
print_r($mang1);
echo "</pre>";