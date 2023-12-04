<?php

include_once "../Configuration/config.php";
include_once "../Models/m_customer.php";

$id_customer = $_POST['id_customer'];

$delte_resul = Customer :: delete_customer($id_customer);

if($delte_resul) {
    header("Location:../Views/v_customers.php");
}

// else {

// }