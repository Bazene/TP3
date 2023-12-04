<?php
    session_start();

    include_once "../Configuration/config.php";
    include_once "../Models/m_admin_user.php";

    $user_name = $_POST['user_name'];
    $password_key = $_POST['password_key'];

    $authentification_result = Admin_user :: authentification($user_name, $password_key);
    
    if($authentification_result) {
        unset($_SESSION['erreurs_aut']);
        $_SESSION['connected'] = true;
        header("Location:../Views/v_customers.php");
    }

    else {
        $_SESSION['erreurs_aut'] ="Incorrect user name or password";
        header("Location:../Views/v_authentification.php");
    }
    
