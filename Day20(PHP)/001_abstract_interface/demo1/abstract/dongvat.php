<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/8/2019
 * Time: 6:10 PM
 */

//abstract là gi ?
// * interface làm gi ?
// *
// * trong abstract class có thể có các abstract method
// * và method bình thường

abstract class Dongvat {

    /**

* trong abstract class có abstract method và method bình thường
     *
     */
    // tên loài
    public abstract function tenloai();
    // thông tin
    public abstract function thongtin();

    // method thông thường

    public function khainiem() {
        echo "Từ \"animal\" xuất phát từ tiếng Latin animalis, có nghĩa là \"có thở\".[1] 
        Trong sử dụng ngôn ngữ giao tiếp hàng ngày, từ \"động vật\" thường bị sử dụng sai -
         từ \"động vật\" đó dùng để chỉ tất cả các thành viên của giới Animalia trừ con người. Theo nghĩa sinh học, 
        \"động vật\" dùng để chỉ tất cả các thành viên của giới Animalia, bao gồm cả con người.";
    }

}



?>



