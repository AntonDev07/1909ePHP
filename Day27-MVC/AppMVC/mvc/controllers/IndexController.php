<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 6:38 PM
 */

namespace MVC\Controllers;

class IndexController {

    public function indexAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/index.php";
    }
    public function createAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/create.php";
    }
    public function editAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/edit.php";
    }
    public function deleteAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/index/delete.php";
    }
}