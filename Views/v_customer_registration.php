<?php
    include_once "../Includes/i_redurection_log_in.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <?php include_once "../Includes/i_links.php" ; ?>
    <link rel="stylesheet" href="../Style/s_customer_registration.css">
</head>
<body>
    
    <?php include_once "../Includes/i_header.php";?>

    <section class="authentification_section">
        <div class="part_forme">
        </div>

        <div class="login_part">
            <div class="part1">
                <img src="../Images/customer.jpg">
            </div>

            <div class="part2">
                <h2 style="font-size: 30px;">Create a customer account</h2>

                <form action="../Controllers/c_customer_registration.php" method="POST" enctype="multipart/form-data">
                    <div class="inputs" style="display:flex; flex-direction:column;">
                        <input type="text" name="user_name" placeholder="User name" required><br>
                        <input type="text" name="postname" placeholder="Postname" required><br>
                        <select name="sex" style="padding:7px; margin-bottom:5px; background-color:white; border:solid 1px gray; color:gray;" required>
                            <option value="male">Male</option>
                            <option value="feminine">Feminine</option>
                        </select>
                        <input type="text" name="local_address" placeholder="Local address" required><br>
                        <input type="text" name="phone_number" placeholder="Phone number" required><br>
                        <input type="text" name="mail_address" placeholder="Mail address" required><br>
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