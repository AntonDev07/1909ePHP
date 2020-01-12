<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 1/5/2020
 * Time: 6:38 PM
 */

namespace MVC\Controllers;

use MVC\Models\PostModel;

class PostController {

    public function indexAction() {
        echo "<br>" . __METHOD__;

        $model = new PostModel();

        $result = $model->getAll();
        include_once "mvc/views/post/index.php";
    }
    public function createAction() {
        echo "<br>" . __METHOD__;

        $error = array();

        if (isset($_POST) && !empty($_POST)) {
            $model = new PostModel();

            $status = $model->insert($_POST);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $error[] = "Lưu thất bại !";
        }
        include_once "mvc/views/post/create.php";
    }
    public function editAction() {
        echo "<br>" . __METHOD__;
        $error = array();

        if (isset($_POST) && !empty($_POST)) {
            $model = new PostModel();

            $status = $model->update($_POST);
            if ($status) {
                header("Location: index.php");
                exit;
            }
            $error[] = "Cập nhật thất bại !";
        }

        if (isset($_GET["id"])) {
            $id =(int) $_GET["id"];
            $model = new PostModel();
            $employee = $model->getSingle($id);
        }
        include_once "mvc/views/post/edit.php";
    }
    public function deleteAction() {
        echo "<br>" . __METHOD__;
        $error = array();

        if (isset($_POST) && !empty($_POST)){
            $model = new PostModel();
            $id = isset($_POST["id"]) ? (int)$_POST["id"] : 0;

            $status = $model->delete($id);

            if ($status) {
                header("Location: index.php");
                exit;
            }
            $error[] ="Xóa thất bại";
        }

        if (isset($_GET["id"])) {
            $id = (int) $_GET["id"];
            $model = new PostModel();
            $employee = $model->getSingle($id);
        }
        include_once "mvc/views/post/delete.php";
    }
}