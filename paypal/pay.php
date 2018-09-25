<?php

use PayPal\Api\Payment;
use PayPal\Api\PaymentExecution;


require 'app/start.php';

$hash = $_SESSION['paypal_hash'];

if (!isset($_GET['success'],$_GET['paymentId'], $_GET['PayerID'])){

    die();
}

if((bool)$_GET['success']===false){

    die();
}

$paymentId = $_GET['paymentId'];
$payerId = $_GET['PayerID'];

//Excecute paypal payment
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

    header("Location: http://localhost/visa%20project%20(india)/paynosuccess.php");
}

//Upadate transaction
$updateTransaction = $db->prepare("
UPDATE transaction_paypal
SET complete = 1
WHERE hash = :hash
");

$updateTransaction->execute([
'hash' => $hash,

]);
header("Location: http://localhost/visa%20project%20(india)/export.php");


?>