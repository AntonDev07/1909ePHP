<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/5/2019
 * Time: 8:47 PM
 */



// Đa kế thừa trong PHP
/*
 * Đơn kế thừa sử dụng extend
 *
 * Da kế thừa sử dụng trait
 *
 * Bài toán
 * điện thoại thông minh kế thừa từ điện thoại phổ thông gồm tính năng nghe và gọi
 *
 *
 * */
class ClassicPhone{

    public $name;

    public function goiDien(){
        echo "<br> gọi điện";
    }
    public function guiSmS(){
        echo "<br> gui tin nhan";
    }

}

trait Computer{
    public function sendEmail(){
        echo "<br> send email";
    }
    public function playGame(){
        echo "<br> play game";
    }
    public function office(){
        echo "<br> soạn thảo văn bản";
    }

}
trait Radio{
    public function ngheDai(){
        echo "<br> mở đài radio";
    }
}
trait Camera {
    public function chupAnh(){
        echo "<br> chụp ảnh";
    }
}
class SmartPhone extends ClassicPhone{
    //kế thừa từ các trait bằng từ khóa use
    use Computer,Radio,Camera;

}

$sony = new SmartPhone();
$sony->goiDien();
$sony->chupAnh();
$sony->office();
$sony->sendEmail();
?>