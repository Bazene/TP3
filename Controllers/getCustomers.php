<?php 
    include "../Configuration/config.php";
    include "../Models/m_customer.php";

    function getCustomers() {
        return Customer :: getCustomers();
    }