<?php

    //Follow Start From Strip-php Githup
    require_once('vendor/autoload.php');

    \Stripe\Stripe::setApiKey('sk_test_IikDiA1nrGiO0isOn2b9Vsr000BcWhxuhv');

    //Get Posted Fields
    $first_name = filter_var($_POST['firstName'], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST['lastName'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $token = filter_var($_POST['stripeToken'], FILTER_SANITIZE_STRING);

    //Create Customer
    $customer = \Stripe\Customer::create(array(
        'email' => $email,
        'source' => $token
    ));

    //Create Charge
    $charge = \Stripe\Charge::create(array(
        'amount' => 5000,
        'currency' => 'usd',
        'description' => 'Payment Course',
        'customer' => $customer->id
    ));
    //echo "<pre>";
    //print_r($charge);
    //echo "</pre>";
   header('location:success.php?tid=' . $charge->id . '&product=' . $charge->description . '&firstname=' . $first_name . '&lastname=' . $last_name . '&email=' . $email . '');