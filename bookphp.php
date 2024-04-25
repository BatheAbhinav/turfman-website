<?php
session_start();
include 'dbconn.php';

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $_SESSION['name'] = $_POST['name'];
  $_SESSION['phone'] = $_POST['phone'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['location'] = $_POST['location'];
  $_SESSION['time'] = $_POST['time'];
  $_SESSION['payment'] = $_POST['payment'];
  $_SESSION['date'] = $_POST['date'];  

  if($_SESSION['payment'] == 'cardpaymentpage.php'){
        $_SESSION['payment_type'] = 'Card';
  }

  if($_SESSION['payment'] == 'upipage.php'){
    $_SESSION['payment_type'] = 'UPI';
  }


  if(isset($_POST['payment']) && !empty($_POST['payment'])) {
      $paymentMethod = $_POST['payment'];
      header("Location: $paymentMethod");
      exit();
  } else {
      echo "Please select a payment method.";
  }
}
?>