<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExcecution;

require 'app/start.php';

if (!isset($_GET['success'],$_GET['paymentId'], $_GET['PayerID'])){

    die();
}

if((bool)$_GET['success']===false){

    die();
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId,$payerId);

$excecute = new PaymentExcecution();
$excecute->setPayerId($payerId);

try {
    $resault = $payment->execute();


}
catch (Exception $e){
    die($e);

}

echo 'payment made';
?>