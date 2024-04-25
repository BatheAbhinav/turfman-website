<?php
session_start();
include 'dbconn.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $Username = $_POST['Username'];
    $City = $_POST['City'];
    $Gmail = $_POST['Gmail'];
    $Phone_Number = $_POST['Phone_Number'];
    $DOB = $_POST['DOB'];
    $UserID = $_POST['UserID'];
    $Password = $_POST['Password'];

    $query1 = "insert into userdetails(username, city, DOB, Phone_No, Gmail, UserID) values('$Username','$City','$DOB','$Phone_Number','$Gmail','$UserID')";
    $query2 = "insert into logindetails(UserID,loginpass) values ('$UserID','$Password')";

    mysqli_query($conn,$query1);
    mysqli_query($conn,$query2);

    header("Location: index.php");
    die;
}