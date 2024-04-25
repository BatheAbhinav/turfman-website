<?php
session_start();
include 'dbconn.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation!!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
            background-image: url('https://images.pexels.com/photos/46798/the-ball-stadion-football-the-pitch-46798.jpeg');
            background-size: cover;
            background-repeat: no-repeat;
            background-color: #f2f2f2;
            backdrop-filter: blur(3px);
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #e6e5e5;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 2.5);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        p {
            margin-bottom: 5px;
        }
        
        button {
      background-color: #279239;
      color: rgb(7, 7, 7);
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Booking Confirmed</h1>
        <p>Thank you for your booking! Your reservation has been successfully confirmed.</p>
        <p>Please find the details of your booking and payment information below:</p>

        <h2>Booking Details</h2>
        <p><strong>Name:</strong> <?php echo $_SESSION['name']; ?></p>
        <p><strong>Date:</strong> <?php echo $_SESSION['date']; ?></p> <!-- date form and database changes req -->
        <p><strong>Time slot: </strong><?php echo $_SESSION['time']; ?></p>
        <p><strong>Sport:</strong> <?php echo $_SESSION['sport']; ?></p>

        <h2>Payment Details</h2>
        <p><strong>Total Amount:</strong> $500</p>
        <p><strong>Payment Method: </strong><?php echo $_SESSION['payment_type']; ?> </p>
        <p><strong>Transaction ID:</strong> <?php echo $_SESSION['paymentID']; ?></p>
        <a href = 'homepage.php'><button>HOME PAGE</button>
    </div>
</body>
</html>