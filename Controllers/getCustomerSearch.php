<?php
    include_once "../Configuration/config.php";
    include_once "../Models/m_customer.php";
    
    function customer_search() {
        if($_POST) {
            $id_search = $_POST['id_search'];
            $customer_search_result = Customer :: customer_search($id_search);
            return $customer_search_result;
        }
        else {
            return false;
        }
    }