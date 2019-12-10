<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 6:34 PM
 */
include_once "../abstract/dongvat.php";
include_once "../interface/An.php";
include_once "../interface/Keu.php";
include_once "../interface/Sinhsan.php";

class Cho extends Dongvat implements An,Keu,Sinhsan {

    public function tenloai()
    {
        // TODO: Implement tenloai() method.
        echo "Xin chào tôi là chó ";
    }

    public function thongtin()
    {
        // TODO: Implement thongtin() method.
        echo "Tôi có 4 chân di chuyển nhanh là thú cưng trong nhà";
    }

    public function toi_nay_an_gi()
    {
        // TODO: Implement toi_nay_an_gi() method.
        echo "Tối nay tôi ăn súc xích";
    }
    public function keu_the_nao()
    {
        // TODO: Implement keu_the_nao() method.
        echo "Tôi sủa gâu gâu";
    }
    public function thong_tin_sinh_san()
    {
        // TODO: Implement thong_tin_sinh_san() method.
        echo "tôi đẻ con, mỗi chu kì tầm 3 tháng";
    }


}



?>