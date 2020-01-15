<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/5/2019
 * Time: 8:29 PM
 */

/*Phương thuc tĩnh là phương thức có thể gọi đến chính nó mà không cần khởi
tạo đối tượng, gọi cả phương thức bằng dấu ::.
Chú ý: trong phức tĩnh gọi đến phương thức tĩnh ko dùng từ this mà dùng self::
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