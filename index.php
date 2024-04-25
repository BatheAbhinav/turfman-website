<?php  
session_start();
include 'dbconn.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Turf Booking System</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>

        <div class="w3-container">
            <a href="index.php"><h2 class="w3-bar-item w3-button w3-purple w3-mobile w3-display-topmiddle" style="font-family: 'Poppins', sans-serif;">Turf Booking System</h2></a>
        </div>  
        <br><br><br>

        <div class="wrapper">
            <div class="title-text">
                <div>
                    <?php if (isset($_GET['error_code']) && ($_GET['error_code'] == 1)){
                    ?>
                        <script>alert("WRONG ID/PASS");</script>
                    <?php
                    }  
                    ?>
                </div>
                <div class="title login">
                    Login
                </div>

            </div>
            <div class="form-container">
                <div class="form-inner">

                    <form method="post"  action="homepage.php" class="login"  onsubmit="return checkPassword();">

                        <div class="field">
                            <input type="text" name="login_name" placeholder="Username" required>
                        </div>

                        <div class="field">
                            <input type="password" name="login_password" placeholder="Password" required>
                        </div>

                        <div class="pass-link">
                            <a href="signuppage.php">New User? Sign up</a>
                        </div>

                        <div class="field btn">
                            <div class="btn-layer"></div>

                            <input type="submit" value="Submit" name = "Submit">
                        </div>

                </div>
            </div>
        </div>
    </body>
</html>
