<?php  
session_start();
include 'dbconn.php';
$_SESSION['sport'] = 'Cricket';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cricket Club</title>
<link rel="stylesheet" href="cricket_styles.css">
<style>
    /* Additional CSS for image container */
    .image-container {
        display: flex;
        justify-content: space-between; /* Align items with equal spacing */
        flex-wrap: wrap; /* Allow items to wrap to the next line */
        margin-top: 20px;
    }

    .image-container img {
        width: calc(33.33% - 10px); /* Each image takes 1/3 of the container width with a small gap */
        margin-bottom: 20px; /* Add some bottom margin for spacing */
        object-fit: cover;
    }

    body {
        background: linear-gradient(to bottom, #4facfe, #00f2fe); /* Add a gradient background */
        color: #333; /* Set default text color */
    }

    header {
        background-color: rgba(255, 255, 255, 0.8); /* Add a semi-transparent white background to header */
        padding: 20px;
        text-align: center;
    }

    main {
        background-color: rgba(255, 255, 255, 0.9); /* Add a semi-transparent white background to main content */
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1); /* Add a shadow effect */
        margin: 20px;
    }

    h1, h2, h3 {
        color: #333; /* Set heading color */
    }

    a.button {
        background-color: #007bff; /* Set button background color */
        color: #fff; /* Set button text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    a.button:hover {
        background-color: #0056b3; /* Change button background color on hover */
    }

</style>
</head>
<body>
<header>
<h1>Cricket Club</h1>
</header>
<main>
<section id="about">
<h2>About Cricket Club</h2>
<p>Welcome to our Cricket Club! We provide a premier facility designed for cricket enthusiasts of all levels. Our club is equipped with professional-grade pitches, high-quality lighting, and comfortable seating areas for spectators.</p>
<p>Whether you're a novice looking to learn the game or a seasoned player seeking competitive matches, our club offers the perfect environment for enjoyable gameplay.</p>
</section>
<section id="facilities">
<h2>Facilities</h2>
<ul>
<li>Professional-grade cricket pitches</li>
<li>High-quality lighting for day and night matches</li>
<li>Comfortable seating areas for players and spectators</li>
<li>Refreshment area with snacks and beverages</li>
<li>Clean and well-maintained restroom facilities</li>
</ul>
</section>
<section id="schedule">
<h2>Booking Schedule</h2>
<p>Check our available time slots and book your match!</p>
<table id="timeSlots">
<!-- Time slot data will be added dynamically using JavaScript -->
</table>
</section>
<section id="contact">
<h2>Contact Us</h2>
<p>If you have any questions or would like to make a booking, please contact us:</p>
<ul>
<li>Phone: 123-456-7890</li>
<li>Email: info@cricketclub.com</li>
<li>Address: 456 Cricket Avenue, City, State, ZIP</li>
</ul>
</section>

<!-- Add images here -->
<section id="images">
    <h2>Images</h2>
    <div class="image-container">
        <img src="C:\Users\Nutan\OneDrive\Documents\turf\c.jpg" alt="Image 1">
        <img src="C:\Users\Nutan\OneDrive\Documents\turf\crick.jpg" alt="Image 2">
        <img src="C:\Users\Nutan\OneDrive\Documents\turf\cricket.jpg" alt="Image 3">
    </div>
</section>

<a href="#" class="button">Book Now</a>
</main>
<script src="cricket_script.js"></script>
</body>
</html>