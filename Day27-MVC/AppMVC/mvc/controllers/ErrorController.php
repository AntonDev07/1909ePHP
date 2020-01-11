<?php
namespace MVC\Controllers;

class ErrorController {

    public function redirect404() {
        include_once "mvc/views/error/404.php";
    }
}