<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 6:38 PM
 */

namespace MVC\Controllers;

class ProductController {

    public function indexAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/product/index.php";
    }
    public function createAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/product/create.php";
    }
    public function editAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/product/edit.php";
    }
    public function deleteAction() {
        echo "<br>" . __METHOD__;

        include_once "mvc/views/product/delete.php";
    }
}