<?php

class Database {

    private $host = 'localhost';

    private $username = 'root';

    private $password = '';

    private $database = 'database_driven';

    private $charset = 'utf8';

    private $conn;

    public function __construct()
    {
        $this->connect();
    }

    public function connect() {

        if (!$this->conn) {
            $this->conn = mysqli_connect($this->host,$this->username,$this->password,$this->database);
            if (mysqli_connect_error()) {
                echo "Kết nối thất bại" . mysqli_connect_error();
                die();
            }
            mysqli_set_charset($this->conn,$this->charset);
        }
    }

    public function disConnect() {
        if ($this->conn) {
            mysqli_close($this->conn);
        }
    }

    public function error() {
        if ($this->conn)
            return mysqli_error($this->conn);
        else
            return false;
    }
    public function insert($table ='', $data =[]){
        $keys = '';
        $values = '';
        foreach ($data as $key => $value) {
            $keys .= ','. $key;
            $values .= ',"'. mysqli_real_escape_string($this->conn, $value).'"';
        }
        $sql = 'INSERT INTO ' .$table .'('. trim($keys,',') . ') VALUES (' . trim($values,',') . ')';

        return mysqli_query($this->conn, $sql);
    }
    public function update($table ='', $data =[], $id = []) {
        $content = '';

        if (is_integer($id)) {
            $where = 'id ='.$id;
        }
        elseif (is_array($id) && count($id) == 1) {
            $listkey = array_keys($id);
            $where = $listkey[0].'='.$id[$listkey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        foreach ($data as $key => $value){
//            $content .= ','. $key . '="' . mysqli_real_escape_string($this->conn,$value). '""';

        }
//        $sql = 'UPDATE ' .$table .' SET '.trim($content,','). 'WHERE' . $where;
        $sql = 'UPDATE ' .$table .' SET '.trim($content,',') . ' WHERE ' . $where ;
        return mysqli_query($this->conn, $sql);
    }
    public function delete($table = '', $id = []) {
        $content = '';
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'DELETE FROM ' . $table . 'WHERE' . $where;
        return mysqli_query($this->conn,$sql);
    }
    public function getObject($table = '') {
        $sql = "SELECT * FROM" . $table;
        $data = null;
        if ($result = mysqli_query($this->conn,$sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        return false;
    }

    public function getArray($table ='') {
        $sql = 'SELECT * FROM' . $table;
        $data = null;
        if ($result = mysqli_query($this->conn,$sql)) {
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    public function getRowArray($table = '', $id =[]) {
        if(is_integer($id))
            $where = 'id = '.$id;
        else if(is_array($id) && count($id)==1){
            $listKey = array_keys($id);
            $where = $listKey[0].'='.$id[$listKey[0]];
        }
        else
            die('Không thể có nhiều hơn 1 khóa chính và id truyền vào phải là số');
        $sql = 'SELECT * FROM '. $table . ' WHERE '. $where;
        if ($result = mysqli_query($this->conn, $sql)) {
            $data = mysqli_fetch_array($result);
            mysqli_free_result($result);
            return $data;
        }
        else
            return false;
    }
    public function query($sql = '', $return = true) {
        if ($result = mysqli_query($this->conn,$sql)) {
            if ($return === true) {
                while ($row = mysqli_fetch_array($result)) {
                    $data[] = $row;
                }
                mysqli_free_result($result);
                return $data;
            }
            else
                return true;
        }
        else
            return false;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
        $this->disConnect();
    }
}

$db = new Database();

$db->error();
// thêm dữ liệu
$data = [
    'title' => 'Bài viết 2',
    'slug'  => 'bai-viet-2',
    'content' => 'Nội dung 2'
];
$id = 2;
if ($db->update('tbl_news', $data, $id)) {
    echo "update thành công";
}
else {
    echo "update thất bại !" . $db->error();
}