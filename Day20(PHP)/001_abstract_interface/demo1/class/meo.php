<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 6:42 PM
 */

include_once "../abstract/dongvat.php";
include_once "../interface/An.php";
include_once "../interface/Keu.php";
include_once "../interface/Sinhsan.php";

class Meo extends Dongvat implements An, Keu, Sinhsan {

    public function tenloai()
    {
        // TODO: Implement tenloai() method.
        echo "Tôi là mèo ạ";
    }

    public function thongtin()
    {
        // TODO: Implement thongtin() method.
        echo "Mèo là hoàng gia trong nhà, mọi người xung quanh là sen";
    }

    public function toi_nay_an_gi()
    {
        // TODO: Implement toi_nay_an_gi() method.
        echo "tôi uống sting ăn bate";
    }

    public function keu_the_nao()
    {
        // TODO: Implement keu_the_nao() method.
        echo "tôi kêu quác quác";
    }
    public function thong_tin_sinh_san()
    {
        // TODO: Implement thong_tin_sinh_san() method.
        echo "tôi đẻ nhiều con vl, con tôi toàn bị đem cho";
    }



}


?>