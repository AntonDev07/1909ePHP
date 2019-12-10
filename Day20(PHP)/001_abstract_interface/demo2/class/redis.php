<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 7:28 PM
 */


include_once "../abstract/database.php";
include_once "../interface/crud.php";
include_once "../interface/log.php";
include_once "../interface/search.php";


class Redis extends Database implements Crud, Log, Search {

    public function connect()
    {
        // TODO: Implement connect() method.
        $redis = new Redis();
        $redis->connect('127.0.0.1', 6379);
        echo "Connection to server sucessfully";
        //check whether server is running or not
        echo "Server is running: ".$redis->ping();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }
    public function  read()
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
    public function writeLog()
    {
        // TODO: Implement writeLog() method.
        echo "writeLog success";
    }
    public function readLog()
    {
        // TODO: Implement readLog() method.
        echo "readLog success";
    }

    public function Search()
    {

        echo "type what you search";
    }

}
?>