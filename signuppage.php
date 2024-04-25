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

            <a href="index.html"><h2 class="w3-bar-item w3-button w3-purple w3-mobile w3-display-topmiddle">Turf Booking System</h2></a>

        </div>
        <br><br><br>
        <div class="wrapper">
            <div class="title-text">
                
                <div class="title signup">
                    Signup
                </div>
            </div>
            <div class="form-container">
               
                <div class="form-inner">
                    <form action="signup.php" method="post" class="signup">

                        <div class="field">
                            <input type="text" name="Username" placeholder="Enter Name" required>
                        </div>

                        <div class="field">
                            <input type="text" name="City" placeholder="Enter City" required>
                        </div>

                        <div class="field">
                            <input type="text" name="Gmail" placeholder="Enter Gmail" required>
                        </div>

                        <div class="field">
                            <input type="text" name="Phone_Number" placeholder="Enter Phone Number" required>
                        </div>

                        <div class="field">
                            <input type="date" name="DOB" placeholder="Enter DOB" required>
                        </div>

                        <div class="field">
                            <input type="text" name="UserID" placeholder="Create Username" required>
                        </div>

                        <div class="field">
                            <input type="password" name="Password" placeholder="Enter Password" required>
                        </div>

                        <div class="field btn">
                            <div class="btn-layer"></div>
                            <input type="submit" value="Signup">
                        </div>
                    </form>
                </div>
            </div>
        </div>

        
          <script>
         const loginText = document.querySelector(".title-text .login");
         const loginForm = document.querySelector("form.login");
         const loginBtn = document.querySelector("label.login");
         const signupBtn = document.querySelector("label.signup");
         const signupLink = document.querySelector("form .signup-link a");
         signupBtn.onclick = (()=>{
           loginForm.style.marginLeft = "-50%";
           loginText.style.marginLeft = "-50%";
         });
         loginBtn.onclick = (()=>{
           loginForm.style.marginLeft = "0%";
           loginText.style.marginLeft = "0%";
         });
         signupLink.onclick = (()=>{
           signupBtn.click();
           return false;
         });
      </script>
       
    </body>
</html>