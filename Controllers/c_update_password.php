<?php
    session_start();
    include_once "../Configuration/config.php";
    include_once "../Models/m_admin_user.php";

    $mail_address = $_POST['mail_address'];
    $password_key1 = $_POST['password_key1'];
    $password_key2 = $_POST['password_key2'];
    
    if ($password_key1 != $password_key2) {
        $_SESSION['erreurs_update'] = "Passwords must be identical";
        header("Location:../Views/v_update_password.php");
    }

    else {
        $uptate_password_result = Admin_user :: update_password($mail_address, $password_key1);
        
        if($uptate_password_result) {
            unset($_SESSION['erreurs_update']);
            $_SESSION['new_password'] = $password_key1;
            header("Location:../Views/v_update_password.php");
        }
        else {
            $_SESSION['erreurs_update'] = "Incorrect mail";
            header("Location:../Views/v_update_password.php");
        }
    }