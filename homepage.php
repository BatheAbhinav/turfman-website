<?php
session_start();
include 'dbconn.php';

if(isset($_POST['Submit'])){
    
    $login_name = $_POST['login_name'];
    $login_password = $_POST['login_password'];

    $query = "select UserID , loginpass from logindetails where UserID = '$login_name'";
    $result = mysqli_query($conn,$query);
    $userdata= mysqli_fetch_assoc($result);

    if($result && mysqli_num_rows($result) > 0){
        if($login_password !== $userdata['loginpass']){
            header("Location: index.php?error_code=1");
            die;
        }
    }
    else{
        echo "Wrong username";
        header("Location: index.php?error_code = 1");
        die;
    }
    $_SESSION['UserID'] = $login_name;
}   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turf Booking Management</title>
    <link rel="stylesheet" href="homepagecss.css">
</head>
<body>

<header>
    <div class="company-logo">
        <img src="dr_turfman.png" alt="Turf Booking Management Logo"> <!--add logo here!!-->
    </div>
    <div class="company-name">
        <h1>Turfman</h1>
    </div>
    <div class="header-buttons">
        <a href="#" class="about-button">About Us</a>
    </div>
</header>

<div class="main-content">
    <h1>Welcome to Turfman</h1>
    <div class="sports-icons">
        <a href="TURF_FOOTBALLpage.php"><img src="shoot.png" alt="Football Icon"></a> 
        <a href="badmintonpage.php"><img src="badminton.png" alt="badminton Icon"></a> 
        <a href="swimmingpage.php"><img src="swimming.png" alt="swimming Icon"></a><br><br>
        <a href="pool_game1page.php"><img src="billiard.png" alt="Billiard Icon"></a>
        <a href="cricket_turfpage.php"><img src="cricket.png" alt="Cricket Icon"></a>
        <a href="table_tennispage.php"><img src="table-tennis.png" alt="Table Tennis Icon"></a>
    </div>
</div>

<footer>
    <div class="trademark">
        &copy; 2024 Turf Booking Management
    </div>
    <div class="contact-info">
        Contact us at: bookyourturf@gmail.com
    </div>
</footer>
</body>
</html>
