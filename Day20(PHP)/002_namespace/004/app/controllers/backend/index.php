<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 7:56 PM
 */
namespace App\Controllers\Backend;



use App\Models\Backend\IndexModel;

class IndexController {


    public function getInfo(){

        echo "<br>" . __METHOD__;
    }
    public function getInfo2(){

        $model1 = new IndexModel();
        $model1->getALL();
    }


}



?>