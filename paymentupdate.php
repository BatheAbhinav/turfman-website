<?php
session_start();
include 'dbconn.php';
    
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name =  $_SESSION['name'];
    $phone = $_SESSION['phone'];
    $Gmail = $_SESSION['email'];
    $location =  $_SESSION['location'];
    $time = $_SESSION['time'];
    $PaymentType = $_SESSION['payment_type'];
    $PaymentID = rand(100000,999999);
    $BookingID = rand(10000,99999);
    $PaymentAmount = 500;
    $TurfID = 999;
    $date = $_SESSION['date'];
    $status = 'booked';

    //insert into payments
    $query2 = "insert into payment(Payment_id, Payment_Type, Payment_amount) values ('$PaymentID','$PaymentType','$PaymentAmount')";
    
    //insert into book table
    $query1 = "insert into books(bookname,Phone_No,Gmail,Booking_id,Booking_time,Payment_id,Turf_id) values('$name','$phone','$Gmail','$BookingID','$time','$PaymentID','$TurfID')";  
    
    $checkquery = "select status from bookingdetails where BookingTime = '$time' and BookingDate = '$date' ";
    $result = mysqli_query($conn,$checkquery);
    $userdata= mysqli_fetch_assoc($result);
    if($result && mysqli_num_rows($result) > 0){
        header("Location:bookingpage.php?error_code=2");
        die;
    }

    //insert into bookingdetails
    $query3 = "insert into bookingdetails(BookingID,UserID,BookingDate,BookingTime,status) values('$BookingID','$name','$date','$time','$status')";

    mysqli_query($conn,$query2);
    mysqli_query($conn,$query1);
    mysqli_query($conn,$query3);

    $_SESSION['paymentID'] = $PaymentID;
    $_SESSION['bookingID'] = $BookingID;
    
    header("Location: confirmation.php"); 
    die;

}
?>