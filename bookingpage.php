<?php
session_start();
include 'dbconn.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      background-image: url('https://images.pexels.com/photos/46798/the-ball-stadion-football-the-pitch-46798.jpeg');
      background-size: cover;
      background-repeat: no-repeat;
      background-color: #f2f2f2;
      backdrop-filter: blur(2px);
    }
    
    form {
      width: 500px;
      background-color: #88bef7;
      padding: 20px;
      border-radius: 9px;
      box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.5), 0 6px 20px 0 rgba(0, 0, 0, 0.25);
    }
    
    label {
      display: block;
      margin-bottom: 5px;
    }
    
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    input[type="date"],
    select {
      width: 100%;
      padding: 10px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-bottom: 15px;
    }
    
    #submit {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      display: block;
      margin: 0 auto;
    }
    
    button:hover {
      background-color: #6fb3d2;
    }

    button:active
   {
    opacity: 0.6;
   }
    
    .booking-heading {
      text-align: center;
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <form method="post" action="bookphp.php"> <!-- enter php action page -->
    <div class="booking-heading">Confirm Booking</div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="phone">Phone No</label>
    <input type="text" id="phone" name="phone" placeholder="Enter your phone number" required>

    <label for="Gmail">Gmail</label>
    <input type="email" id="email" name="email" placeholder="Enter your email address" required>
   
    <label for="Date">Date </label>
        <input type="date" name="date" placeholder="Enter Date" required>
  

    <label for="time">Time</label>
    <select id="time" name="time" required>
      <option value="">Select a time slot</option>
      <option value="10am-12pm">10 AM - 12 PM</option>
      <option value="2am-4pm">2 PM - 4 PM</option>
      <option value="5pm-7pm">5 PM - 7 PM</option>
    </select>

    <label for="payment">Payment Method</label>
    <select id="payment" name="payment" required>
      <option value="">Select a payment method</option>
      <option value="cardpaymentpage.php">Credit Card</option>
      <option value="cardpaymentpage.php">Debit Card</option>
      <option value="upipage.php">UPI</option>
    </select>

    <input id="submit" type="submit" value="Submit" name = "Submit">
  </form>

  <div>
        <?php if (isset($_GET['error_code']) && ($_GET['error_code'] == 2)){
        ?>
            <script>alert("ALREADY BOOKED!");</script>
        <?php
        }  
        ?>
    </div>

  
</body>
</html>
