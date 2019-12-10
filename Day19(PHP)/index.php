<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/5/2019
 * Time: 6:40 PM
 */
Class Car {
    /**
     * Khai báo các thuộc tính bên trong class
     * Thuộc tính chỉ ra tính chất đặt điểm cho 1 đối tượng
     * thuộc tính tên, model , khối lượng, giá cả, năm sản xuất
     * nhà sản xuất
     * Thuộc tính ( property )
     */
    public $name;
    public $model;
    public $weight;
    public $price;
    public $year_publish;
    public  $manufacture;

    public function start(){
        echo "<br>  khởi động xe" ;
    }
    public function drive(){
        echo "<br> Lái xe";
    }
    public function stop(){
        echo "<br> dừng xe";
    }

}
$mazda = new Car();
$mazda->name = "Mazda CX5";
$mazda->weight = "1 ton";
$mazda->price = "500000";
$mazda->manufacture = "Mazda";
$mazda->year_publish= 2017;

echo "<pre>";
print_r($mazda);
echo "</pre>";
// gọi đến 1 phương thức trong class
$mazda->start();
$mazda->drive();
$mazda->stop();

?>