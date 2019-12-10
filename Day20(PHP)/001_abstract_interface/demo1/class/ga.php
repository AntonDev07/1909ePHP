<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 6:46 PM
 */


include_once "../abstract/dongvat.php";
include_once "../interface/An.php";
include_once "../interface/Keu.php";
include_once "../interface/Sinhsan.php";


class Ga extends Dongvat implements An,Keu,Sinhsan {


    public function tenloai()
    {
        // TODO: Implement tenloai() method.
        echo "tôi là gà, gia súc trong nhà";
    }

    public function thongtin()
    {
        // TODO: Implement thongtin() method.
        echo "tôi thường là thức ăn cho cả nhà mỗi khi tết đến";
    }

    public function toi_nay_an_gi()
    {
        // TODO: Implement toi_nay_an_gi() method.
        echo "tối nay tôi chỉ có ăn thóc mà thôi";
    }
    public function keu_the_nao()
    {
        // TODO: Implement keu_the_nao() method.
        echo "tôi kêu cục cục tác tác";
    }

    public function thong_tin_sinh_san()
    {
        // TODO: Implement thong_tin_sinh_san() method.
        echo "tôi đẻ trứng, hên xui thì ra con không thì bị ăn mất ";
    }


}


?>