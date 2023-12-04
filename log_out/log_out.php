<?php
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location:../Views/v_authentification.php");
?>