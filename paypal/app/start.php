<?php

session_start();


require 'vendor/autoload.php';

define('SITE_URL','http://localhost/visa%20project%20(india)/paypal/pay.php');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AdSRWNgoRfa739ASBoh1OoEEQzoYpNT-0uFG1MnoMh8czN63MLlJH5D9tDWqWIiwTY5IwQZsrIB55RHY',
        'EApOzU0pOE0eAv4jdkRHO8nIuAvYcl2d_YePim-WE7TZLXDamKZj9sDZgcOUEhlP4ZNx6bzJ8CmJUXqT')
);