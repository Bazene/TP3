<?php
    include_once "../Includes/i_redurection_log_in.php";

    if(!empty($_POST)){
        $_SESSION['id_customer'] = $_POST['id_customer'];
        unset($_SESSION['erreur_remove']);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operations</title>
    <?php include_once "../Includes/i_header.php";?>
    <?php include_once "../Includes/i_links.php";?>
    <link rel="stylesheet" href="../Style/s_authentification.css">
    <link rel="stylesheet" href="../Style/s_deposit_remove.css">
    <script src="../JS_Files/j_customers.js" defer></script>
</head>

<body> 
        <?php include_once "../Controllers/getCustomers.php";?>

        <?php
            if(!empty($_SESSION['erreur_remove'])) {
                $erreurs_remove = $_SESSION['erreur_remove'];
                echo "
                    <div class='alert_erreurs'>
                        $erreurs_remove
                    </div>
                ";
            }
        ?>
        
        <section class="big_deposit_remove">
            <section class="deposit_remove">
                <form action="../Controllers/c_deposit_remove.php" method="POST">
                    <div style="display: flex; flex-direction:row; justify-content: space-between; margin:10px 0px 10px 0px; width:100%;">
                        <div style="display: flex; flex-direction:row; justify-content: flex-start; width:60%; margin:0px 0px 0px 12px;">
                            <label for="operation_type" style="padding:7px; margin-left:-10px; background-color:rgb(25, 132, 210); color:white; width:200px; background-color:#00B050;">Operation type</label>
                            <select name="operation_type" style="width:80px; background-color:white; padding:7px; border:0px;">
                                <option value="deposit">Deposit</option>
                                <option value="remove">Remove</option>
                            </select>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction:row; justify-content:center; width:100%;">
                        <input type='hidden' name='id_customer' value='<?php echo $_SESSION['id_customer'];?>'>
                        <input type="number" name='amount' placeholder="Amount to deposit or withdraw" style="width:210px; padding:7px;">
                        <input type="submit" value="Confirm" style="width:70px; background-color:rgb(13, 13, 155); color:white; border:0px; cursor:pointer;">
                    </div>
                </form>
            </section>
        </section>
</body>
</html>