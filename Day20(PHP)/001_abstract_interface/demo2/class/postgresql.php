<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 7:26 PM
 */


include_once "../abstract/database.php";
include_once "../interface/crud.php";
include_once "../interface/log.php";
include_once "../interface/search.php";


class Postgresql extends Database implements Crud, Log, Search {

    public function connect()
    {
        // TODO: Implement connect() method.
        $db_connection = pg_connect("host=localhost dbname=DBNAME user=USERNAME password=PASSWORD");
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

        echo "readLog success";
           // TODO: Implement readLog() method.
    }
    public function writeLog()
    {

     echo "writeLog success";
        // TODO: Implement writeLog() method.
    }

    public function Search()
    {
        echo "type search";
    }

}


?>