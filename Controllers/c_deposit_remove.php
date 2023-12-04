<?php
    session_start();
    include_once "../Configuration/config.php";
    include_once "../Models/m_customer.php";

    $id_customer = intval($_POST['id_customer']);
   

    $operation_type = $_POST['operation_type'];
    $amount = intval($_POST['amount']);

    $old_solde = intval(Customer :: getOldSolde($id_customer));
   

    if($old_solde>=0) {
        if($operation_type == "deposit" ) {
            $new_solde = $old_solde + $amount;

            if(Customer :: update_solde($id_customer, $new_solde)) {
                unset($_SESSION['erreur_remove']);
                header("Location:../Views/v_customers.php");
            }
        }

        elseif($operation_type == "remove" ) {
            $new_solde = $old_solde-$amount;

            if($new_solde > 0) {
                if(Customer :: update_solde($id_customer, $new_solde)) {
                    unset($_SESSION['erreur_remove']);
                    header("Location:../Views/v_customers.php");
                }

                else {
                    $_SESSION['erreur_remove']="Operation faild";
                    header("Location:../Views/v_deposit_remove.php");
                }
            }
            else {
                $_SESSION['erreur_remove'] = "Insuffisance balance";
                header("Location:../Views/v_deposit_remove.php");
            }
        }

    }
