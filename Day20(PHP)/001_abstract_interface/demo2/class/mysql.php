<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 7:23 PM
 */

include_once "../abstract/database.php";
include_once "../interface/crud.php";
include_once "../interface/log.php";
include_once "../interface/search.php";


class Mysql extends Database implements Crud, Log, Search {


    public function connect()
    {
        // TODO: Implement connect() method.
        $connection = mysqli_connect("", "", "");;
    }

    public function create()
    {
        // TODO: Implement create() method.
    }
    public function read()
    {
        // TODO: Implement read() method.
    }
    public function update()
    {
        // TODO: Implement update() method.
    }
    public function delete()
    {
        // TODO: Implement delete() method.
    }

    public function readLog()
    {
        // TODO: Implement readLog() method.
        echo "readLog success";
    }

    public function writeLog()
    {
        // TODO: Implement writeLog() method.
        echo "writeLog success";
    }

    public function Search()
    {
        echo "type what you search";
    }


}


?>