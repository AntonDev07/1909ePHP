<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 8:29 PM
 */
class Demo {
    public static $pro1;
    public $pro2;
    public function method1() {
        echo "<br> method1";
    }
    public static function method2() {
        echo "<br> static method2";
    }
}
$demo1 = new Demo();
$demo1->pro2 = "abc";
$demo1->method1();
?>