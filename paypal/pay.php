<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;

require 'app/start.php';

if (!isset($_GET['success'],$_GET['paymentId'], $_GET['PayerID'])){

    die();
}

if((bool)$_GET['success']===false){

    die();
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

$payment = Payment::get($paymentId,$paypal);

$excecute = new PaymentExecution();
$excecute->setPayerId($payerId);

try {
    $resault = $payment->execute($excecute,$paypal);


}
catch (Exception $e){
    // die($e);
    $data = json_decode($e->getData());
    var_dump($data);

    die();
}

echo 'payment made';
header("Location: http://localhost/visa%20project%20(india)/export.php");


?>