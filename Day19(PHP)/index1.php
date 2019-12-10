<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/5/2019
 * Time: 6:40 PM
 */
Class Car
{
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
    public $manufacture;
    /*Phương thức khởi tạo*/
    public function __construct($name, $model,$weight, $price,$manufacture,$year_publish)
    {

        echo "<br>" . "Tôi là phương thức khởi tạo tôi tự gọi lấy chính mình";

        /*
         * Lấy giá trị từ tham số truyền vào gán cho các thuộc tính
         * Chú ý : bên trong class khi muốn gọi đến chính class đó
         * thì sẽ sử dụng từ khóa $this
         */
       $this->name = $name;
       $this->model = $model;
       $this->weight = $weight;
       $this->price = $price;
       $this->manufacture = $manufacture;
       $this->year_publish = $year_publish;

    }
    public function getInfo(){
        echo "<br> getInfo";
        echo "<br>". $this->name;
        echo  "<br>". $this->model;
        echo  "<br>". $this->weight;
        echo  "<br>". $this->price;
        echo  "<br>". $this->manufacture;
        echo  "<br>". $this->year_publish;
    }



}

  $Car1 = new Car("vinfast","lx","1 tấn", 500000, "vincom", 2019);

$Car1->getInfo();
?>