<?php


require 'vendor/autoload.php';

define('SITE_URL','http://localhost/visa%20project%20(india)/form.php');

$paypal = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AbmO3CNuaP32UC8Ee0sWQlyuXMEKKk7HV5gM_wbormRehsA6Z5WV7aqGlmUrQdfUbgokuuOmwQACNt_k',
        'EArHFsLs7TswxWcJuLC_YjAaDmDHKGprBD5vAD7sJui36ddmC5NNEI-z7-bs511CotPzm5e4SIEgeFiW')
);