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
    <title>Admin_Inscription</title>
    <?php include_once "../Includes/i_links.php" ; ?>
    <link rel="stylesheet" href="../Style/s_authentification.css">
</head>

<body>
    
    <?php
        if(!empty($_SESSION['erreurs'])) {
            $erreur = $_SESSION['erreurs'];
            echo "
                <div class='alert_erreurs'>
                    $erreur
                </div>
            ";
        }
    ?>

    <section class="create_acount_section">
        <h2>Create an Admin account</h2>

        <form action="../Controllers/c_admin_registration.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="user_name" placeholder="User name" required><br>
            <input type="text" name="postname" placeholder="Postname" required><br>

            <select name="sex" class="sex" required>
                <option value="male">Male</option>
                <option value="feminine">Feminine</option>
            </select> <br>

            <input type="text" name="phone_number" placeholder="Phone number" required><br>
            <input type="text" name="mail_address" placeholder="Mail address" required><br>
            <input type="text" name="password_key1" placeholder="Password" required><br>
            <input type="text" name="password_key2" placeholder="Confirm Password" required><br>
            <input type="submit" class="subscribe_btn" value="Subscribe">
        </form>
    </section>
</body>
</html>