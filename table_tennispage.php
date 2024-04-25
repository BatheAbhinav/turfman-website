<?php  
session_start();
include 'dbconn.php';
$_SESSION['sport'] = 'Table Tennis';

?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table Tennis</title>
<link rel="stylesheet" href="table_tennis_styles.css">
</head>
<body>
<header>
<h1>Table Tennis</h1>
</header>
<main>
<section id="about">
<h2>About Table Tennis Turf</h2>
<p>Welcome to our Table Tennis Turf! We offer a state-of-the-art facility designed for table tennis enthusiasts of all levels. Our turf is equipped with professional-grade tables, high-quality lighting, and comfortable seating areas for spectators.</p>
<p>Whether you're a beginner looking to improve your skills or a seasoned player seeking competitive matches, our turf provides the perfect environment for enjoyable gameplay.</p>
</section>
<section id="facilities">
<h2>Facilities</h2>
<ul>
<li>Professional-grade table tennis tables</li>
<li>High-quality lighting for optimal visibility</li>
<li>Comfortable seating areas for players and spectators</li>
<li>Refreshment area with snacks and beverages</li>
<li>Clean and well-maintained restroom facilities</li>
</ul>
</section>
<section id="schedule">
<h2>Booking Schedule</h2>
<p>Check our available time slots and book your game!</p>
<table id="timeSlots">

</table>
</section>
<section id="contact">
<h2>Contact Us</h2>
<p>If you have any questions or would like to make a booking, please contact us:</p>
<ul>
<li>Phone: 123-456-7890</li>
<li>Email: info@tabletennisturf.com</li>
<li>Address: 123 Main Street, City, State, ZIP</li>
</ul>
</section>
<a href="bookingpage.php" class="button">Book Now</a>
</main>
<script src="table_tennis_script.js"></script>
</body>
</html>
-->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Table Tennis Turf</title>
<link rel="stylesheet" href="table_tennis_styles.css">
</head>
<body>
<header>
<h1>Table Tennis Turf</h1>
</header>
<main>
<section id="about">
<h2>About Table Tennis Turf</h2>
<p>Welcome to our Table Tennis Turf! We offer a state-of-the-art facility designed for table tennis enthusiasts of all levels. Our turf is equipped with professional-grade tables, high-quality lighting, and comfortable seating areas for spectators.</p>
<p>Whether you're a beginner looking to improve your skills or a seasoned player seeking competitive matches, our turf provides the perfect environment for enjoyable gameplay.</p>
</section>
<section id="facilities">
<h2>Facilities</h2>
<ul>
<li>Professional-grade table tennis tables</li>
<li>High-quality lighting for optimal visibility</li>
<li>Comfortable seating areas for players and spectators</li>
<li>Refreshment area with snacks and beverages</li>
<li>Clean and well-maintained restroom facilities</li>
</ul>
</section>
<section id="schedule">
<h2>Booking Schedule</h2>
<p>Check our available time slots and book your game!</p>
<table id="timeSlots">
<!-- Time slot data will be added dynamically using JavaScript -->
</table>
</section>
<section id="contact">
<h2>Contact Us</h2>
<p>If you have any questions or would like to make a booking, please contact us:</p>
<ul>
<li>Phone: 123-456-7890</li>
<li>Email: info@tabletennisturf.com</li>
<li>Address: 123 Main Street, City, State, ZIP</li>
</ul>
</section>
<a href="bookingpage.php    " class="button">Book Now</a>
</main>
<script src="table_tennis_script.js"></script>
</body>
</html>
