<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/5/2019
 * Time: 7:23 PM
 */

class Mod extends Guest{

    public $approve_comment;

    public $manager_guest;


    // method duyệt comment người dùng
    public function approveComment(){

    }
    // method đồng ý hoặc loại người dùng ra khỏi diễn đàn
    public function manageGuest(){
        echo "<br> Cho phép người dùng";
    }


}



?>