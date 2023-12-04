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
        <title>Authentification</title>
        <?php include_once "../Includes/i_links.php" ; ?>
        <link rel="stylesheet" href="../Style/s_authentification.css">
    </head>

    <body>

        <?php
            if(!empty($_SESSION['erreurs_aut'])) {
                $erreurs_aut = $_SESSION['erreurs_aut'];
                echo "
                    <div class='alert_erreurs'>
                        $erreurs_aut
                    </div>
                ";
            }
        ?>

        <section class="authentification_section">
            <div class="part_forme">
            </div>

            <div class="login_part">
                <div class="part1">
                    <img src="../Images/login_image.jpg">
                </div>

                <div class="part2">
                    <h2 style="font-size: 30px;">login to your account</h2>

                    <form action="../Controllers/c_authentification.php" method="POST" enctype="multipart/form-data">
                            <div class="inputs" style="display:flex; flex-direction:column;">
                                <input type="text" name="user_name" placeholder="User Name" required>
                                <input type="text" name="password_key" placeholder="Password" required>
                            </div>

                            <div class="inputs_submit">
                                <input type="submit" class="login_btn" value="Login">
                            </div>
                    </form>

                    <a href="v_update_password.php"  style="text-decoration:none; color:#F24822;">Forgot your password ?</a> 
                    <!-- or -->
                    <!-- <a href="v_admin_registration.php"  style="text-decoration:none; color:rgb(13, 13, 155);">Sing in</a> -->
                </div>
            </div>

            <div class="part_forme">
            </div>
        </section>
    </body>
</html>