<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 7:02 PM
 */

class Student {

    public function getInfo() {
        echo "<br>" . __METHOD__;
    }
}

class Teacher {


}

class Course {


}

//Cách 1: Đơn giản
$an = new Student();
$minh = new Teacher();
$php = new Course();

// Cách 2: Biến tất cả các hàm thành biến
$className = "Student";
$chi = new $className();
// gọi method
$methodName = "getInfo";
$chi->$methodName();