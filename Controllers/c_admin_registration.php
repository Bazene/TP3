<?php
    session_start();

    include_once "../Configuration/config.php";
    include_once "../Models/admin_user.php";

    $user_name = $_POST['user_name'];
    $postname = $_POST['postname'];
    $sex = $_POST['sex'];
    $phone_number = $_POST['phone_number'];
    $mail_address = $_POST['mail_address'];
    $password_key1 = $_POST['password_key1'];
    $password_key2 = $_POST['password_key2'];

    if ($password_key1 != $password_key2) {
        $_SESSION['erreurs'] = "Passwords must be identical";
        header("Location:../Views/v_admin_registration.php");
    }

    else {
        $admin = new Admin_user($user_name, $postname, $sex, $phone_number, $mail_address, $password_key1);

        if($admin->create_account()) {
            unset($_SESSION['erreurs']);
            header("Location:../Views/v_customer_registration.php");
        }

        else {
            $_SESSION['erreurs'] = "The registration in database wasn't possible";
            header("Location:../Views/v_admin_registration.php");
        }
    }

    // hash_function
    
    // function str_random($length) {
    //     $alphabet = "0123456789abcdefghijklmnopqrstuvwxyz" ;
    //     return substr(str_shuffle(str_repeat( $alphabet, $length)), 0, $length);
    //     // cette fonction retourne un string aleatoir de $lenght caracteres melanges (chiffre, lettre majuscule et miniscule)
    // }