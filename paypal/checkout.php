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
session_start();
// if(!isset($_POST['product'], $_POST['price'])) {
//     die();

// }
$product = $_SESSION['hush_product'];
var_dump($product);
if(empty($product)){
    die();

}

// $product =$_POST['product'];
// $price = $_POST['price'];


$price = 5;

$shipping = 2.00;
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
} catch(Exception $e) {
    // die ($e);
    $data = json_decode($e->getData());
    var_dump($data);

    die();
}

$approvalUrl = $payment->getApprovalLink();

header ("Location: {$approvalUrl}");






        





