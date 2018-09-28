<?php

use PayPal\Api\Payer;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Details;
use PayPal\Api\Amount;
use PayPal\Api\Transaction;
use PayPal\Api\RedirectUrls;
use PayPal\Api\Payment;

require 'app/start.php';
// session_start();
/////
$product = $_SESSION['hush_product'];

if(empty($product)){
    die();

}

// $product =$_POST['product'];
// $price = $_POST['price'];


$price = 11.00;

$shipping = 1.00;
$total =$price + $shipping;

$payer = new Payer();
$payer->setPaymentMethod('paypal');

$item = new Item();
$item->setName($product)   
    ->setCurrency('ILS')
    ->setQuantity(1)
    ->setPrice($price);

    $itemList = new ItemList();
    $itemList->setItems([$item]);

$details = new Details();
$details->setShipping($shipping)
    ->setSubtotal($price);

$amount = new Amount();
$amount->setCurrency('ILS')
    ->setTotal($total)
    ->setDetails($details);


$transaction = new Transaction();
$transaction->setAmount($amount)
     ->setItemList($itemList)
     ->setDescription('PayForSomthing Payment')
     ->setInvoiceNumber(uniqid());

$redirectUrls = new RedirectUrls();
$redirectUrls->setReturnUrl(SITE_URL . '/pay.php?success=true')
    ->setCancelUrl(SITE_URL . '/pay.php?success=false');

$payment = new Payment();
$payment->setIntent('sale')
    ->setPayer($payer)
    ->setRedirectUrls($redirectUrls)
    ->setTransactions([$transaction]);


try{
    $payment->create($paypal);
    $hash = md5($payment->getId());
    $_SESSION['paypal_hash'] = $hash;

    
} catch(Exception $e) {
    // die ($e);
    $data = json_decode($e->getData());
    var_dump($data);
    header("Location: http://localhost/visa%20project%20(india)/paynosuccess.php");

    die();

}


$store = $db ->prepare("
INSERT INTO transaction_paypal (payer_id, payment_id, hash)
VALUES(:Payer_id ,:Payment_id ,:hash)

");

$store->execute([
    'Payment_id' =>$payment->getId(),
    'Payer_id' =>$product,
    'hash' =>$hash

]);

$approvalUrl = $payment->getApprovalLink();

header ("Location: {$approvalUrl}");






        





