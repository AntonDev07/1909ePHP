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

        // Test: url : index.php?controller=Post&action=index



        // Cách 2: ngắn gọn, dễ mở rộng code

        $controller = (isset($_REQUEST["controller"]) && $_REQUEST["controller"]) ? $_REQUEST["controller"] : "index";
        $action = (isset($_REQUEST["action"]) && $_REQUEST["action"]) ? $_REQUEST["action"] : "index";

        $controller = ucfirst($controller);
        $controllerClassName = "\\MVC\\Controllers\\" . $controller . "Controller";
        $actionMethodName = $action."Action";

        if (class_exists($controllerClassName)) {
            $controllerObject = new $controllerClassName();

            if (method_exists($controllerObject,$actionMethodName)) {
                $controllerObject->$actionMethodName();
            }
            else {
                $controllerClassName = "\\MVC\\Controllers\\ErrorController";
                $controllerObject = new $controllerClassName();
                $controllerObject->redirect404();
            }


        } else {
            $controllerClassName = "\\MVC\\Controllers\\ErrorController";
            $controllerObject = new $controllerClassName();
            $controllerObject->redirect404();
        }









        //Cách 1: Đơn giản dễ hiểu nhưng không tối ưu, không mở rộng được
      /*  if ($controller == "Post") {
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
        */
    }
}