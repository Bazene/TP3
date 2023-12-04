<?php
    session_start();
    if(!empty($_SESSION['connected'])) {
        header("Location:./v_customers.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update_Password</title>
    <?php include_once "../Includes/i_links.php" ; ?>
    <link rel="stylesheet" href="../Style/s_authentification.css">
</head>

<body>

    <?php
        if(!empty($_SESSION['erreurs_update'])) {
            $erreurs_update = $_SESSION['erreurs_update'];
            echo "
                <div class='alert_erreurs'>
                    $erreurs_update
                </div>
            ";
        }
        elseif (!empty($_SESSION['new_password'])) {
            $new_password = $_SESSION['new_password'];
            echo "
                <div class='alert_erreurs' style='background-color:#00B050; color:white;'>
                    Your new password is : $new_password
                </div>
            ";
        }
    ?>

    <section class="create_acount_section">
        <div class="part_forme">
        </div>

        <div class="login_part">
            <div class="part1">
                <img src="../Images/password.jpg">
            </div>

            <div class="part2">
                <h2 style="font-size: 25px; margin-bottom:-50px;">Change admin password</h2>

                <form action="../Controllers/c_update_password.php" method="POST" enctype="multipart/form-data">
                    <div class="inputs" style="display:flex; flex-direction:column;">
                        <input type="text" name="mail_address" placeholder="Mail address" required><br>
                        <input type="text" name="password_key1" placeholder="Password" required><br>
                        <input type="text" name="password_key2" placeholder="Confirm Password" required><br>
                    </div>
                    
                    <div class="inputs_submit">
                        <input type="submit" class="subscribe_btn" value="Subscribe">
                    </div>
                </form>
            </div>
        </div>

        <div class="part_forme">
        </div>
    </section>
</body>
</html>