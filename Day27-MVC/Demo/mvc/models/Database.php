<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 7:26 PM
 */
namespace MVC\Models;

class Database {


    // thuộc tính để chưa kết nối
    public $connect;
    // tạo ra hằng số để kết nối csdl;



    const SERVER_NAME = "Localhost";

    const USER_NAME = "root";

    const PASSWORD = "";

    const DB_NAME = "mvcdemo";
    public function connectDB() {
        if (!$this->connect) {
            $connect =  mysqli_connect(self::SERVER_NAME, self::USER_NAME
            , self::PASSWORD, self::DB_NAME);
        }
        if (!$this->connect) {
            die("Connection failed" . mysqli_connect_error());
        }
    }
}