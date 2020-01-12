<?php
namespace MVC\Models;

class PostModel extends Database {
    public function getAll() {
        $sql = "SELECT * FROM posts_table";

        $result = mysqli_query($this->connect, $sql);

        return $result;
    }

    public function getSingle($employee_id = 0) {
        $sqlSelect = "SELECT * FROM posts_table where id = " .$employee_id;

        $result = mysqli_query($this->connect,$sqlSelect);

        $row = mysqli_fetch_assoc($result);

        return $result;
    }

    public function insert($data) {
        $name = $data["name"];
        $address = $data["desc"];
        $review =(int) $data["view"];

        if (empty($name) || empty($address)) {
            return false;
        }

        $sqlInsert = "INSERT INTO posts_table (name, desc, view) VALUES ('$name', '$address', '$review')";

        if (mysqli_query($this->connect, $sqlInsert)) {
            return true;
        }

        return false;
    }

    public function update($data) {
        $name = $data["name"];
        $address = $data["desc"];
        $review = (int)$data["view"];
        $id = (int)$data["id"];

        if (empty($name) || empty($address)) {
            return false;
        }

        $sqlUpdate = "UPDATE posts_table SET name = '$name', desc = '$address', view = '$review' where id = ". (int)$id;

        echo $sqlUpdate;

        if (mysqli_query($this->connect,$sqlUpdate)) {
            echo "Update thành công";

            header("Location: index.php");
            exit;
        } else {
            return false;
        }


    }
    public function delete($id) {
        $sqlDelete = "DELETE FROM posts_table WHERE id = $id";
        if (mysqli_query($this->connection, $sqlDelete)) {
            return true;
        }
        return false;
    }


}