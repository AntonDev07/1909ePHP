<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 7:51 PM
 */

class Student {

    public function demo1(){
        echo "Demo 1";
    }

}
//class Student {
//    public function demo2(){
//        echo "Demo 2";
//    }
//}



/**
 * Cannot declare class Student, because the name is already in use in
 * khi mà 2 class , 2 function trùng tên nhau
 * bị xung đột bị lỗi
 * => để giải quyết vấn đề trùng tên
 * người ta sử dụng namespace ( không gian tên )
 *
 */
$student = new Student();
?>