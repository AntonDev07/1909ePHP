<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 6:38 PM
 */

namespace MVC\Controllers;

class PostController {

    public function indexAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/index.php";
    }
    public function createAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/create.php";
    }
    public function editAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/edit.php";
    }
    public function deleteAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/post/delete.php";
    }
}