<?php
/**
 * Created by PhpStorm.
 * User: FR
 * Date: 12/12/2019
 * Time: 7:05 PM
 */

namespace Ultilities\Payment;
use Traits\Momo;
use Traits\Napas;


class Payment {

    use Momo;
    use Napas;

    public function demo(){
        echo "<br>" . __METHOD__ ;
    }
}


$paymentabc = new Payment();
$paymentabc->demo();
$paymentabc->demoNapas();
$paymentabc->demoMomo();

?>