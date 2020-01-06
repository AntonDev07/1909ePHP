<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 6:40 PM
 */
namespace MVC;


class Route {

    public function run(){
        // $_REQUEST = $_POST + $_GET

        $controller = $_REQUEST["controller"];
        $action = $_REQUEST["action"];

        // ucfirst  viết hoa chữ cái đầu
        // Test: url : index.php?controller=Post&action=index
        $controller = ucfirst($controller);
        if ($controller == "Post") {
            $controllerObject = new \MVC\Controllers\PostController();

            if ($action == "index") {
                $controllerObject->indexAction();
            } elseif ($action == "create") {
                $controllerObject->createAction();
            } elseif ($action == "edit") {
                $controllerObject->editAction();
            } elseif ($action == "delete") {
                $controllerObject->deleteAction();
            }
        }elseif ($controller == "Product") {
            $controllerObject = new \MVC\Controllers\ProductController();

            if ($action == "index") {
                $controllerObject->indexAction();
            } elseif ($action == "create") {
                $controllerObject->createAction();
            } elseif ($action == "edit") {
                $controllerObject->editAction();
            } elseif ($action == "delete") {
                $controllerObject->deleteAction();
            }

        }
    }
}