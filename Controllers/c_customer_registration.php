<?php
    include_once "../Configuration/config.php";
    include_once "../Models/m_customer.php";

    $user_name = $_POST['user_name'];
    $postname = $_POST['postname'];
    $sex = $_POST['sex'];
    $local_address = $_POST['local_address'];
    $phone_number = $_POST['phone_number'];
    $mail_address = $_POST['mail_address'];
    $solde = 1;

    $customer = new Customer($user_name, $postname, $sex, $local_address, $phone_number, $mail_address, $solde);

    if($customer->create_an_account()) {
        header("Location:../Views/v_customers.php");
    }

    else {
        header("Location:../Views/v_customer_registration.php");
    }