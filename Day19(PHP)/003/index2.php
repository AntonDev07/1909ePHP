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
        $this->pro2 = "abcd";
    }
    public static function method2() {
        echo "<br> static method2";
        self::$pro1 = "xin chao";
    }
}
Demo::$pro1 = "hello";
Demo::method2();
?>