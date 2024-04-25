<?php  
session_start();
include 'dbconn.php';
$_SESSION['sport'] = 'Pool';

?>

<!--<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>8-Ball Pool Game Turf Information</title>
<link rel="stylesheet" href="pool_styles.css">
</head>
<body>
    <div class="container">
        <h1>8-Ball Pool Game Turf Information</h1>
        <div class="court-info">
            <img src="C:\Users\Nutan\OneDrive\Documents\turf\pool.jpg" alt="8-Ball Pool Game Turf">
            <h2>About the 8-Ball Pool Game Turf</h2>
            <p>Welcome to our 8-ball pool game turf, where you can enjoy the thrill of strategic cue ball control and precision shots! Our turf is designed to provide an immersive experience for players of all skill levels, from beginners to seasoned pros.</p>

            <h2>Time Slots</h2>
            <p>Available days: Monday to Sunday</p>
            <p>Time slots:
                <ul>
                    <li>Morning: 8:00 AM - 12:00 PM</li>
                    <li>Afternoon: 1:00 PM - 5:00 PM</li>
                    <li>Evening: 6:00 PM - 10:00 PM</li>
                </ul>
            </p>
        </div>
        <div class="contact-info">
            <h2>Contact Information</h2>
            <p>For bookings and inquiries, contact us at:</p>
            <p>Phone: <a href="tel:+1234567890">123-456-7890</a></p>
            <p>Email: <a href="mailto:info@8ballpoolturf.com">info@8ballpoolturf.com</a></p>
        </div>
        <a href="bookingpage.php" class="button">Book Now</a>
    </div>
</body>
</html>
--> 


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Pool Club</title>
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
        background-color: #ffef96; /* Set a light yellow background color */
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
        background-color: #ff5714; /* Set button background color */
        color: #fff; /* Set button text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    a.button:hover {
        background-color: #d8480b; /* Change button background color on hover */
    }

</style>
</head>
<body>
<header>
<h1>Pool Club</h1>
</header>
<main>
<section id="about">
<h2>About Pool Club</h2>
<p>Welcome to our Pool Club! We provide a premier facility designed for pool enthusiasts of all levels. Our club is equipped with professional-grade pool tables, ambient lighting, and comfortable seating areas for players and spectators.</p>
<p>Whether you're a beginner looking to have some fun or a seasoned player seeking competitive matches, our club offers the perfect environment for enjoyable gameplay.</p>
</section>
<section id="facilities">
<h2>Facilities</h2>
<ul>
<li>Professional-grade pool tables</li>
<li>Ambient lighting for a cozy atmosphere</li>
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
<li>Email: info@poolclub.com</li>
<li>Address: 789 Pool Street, City, State, ZIP</li>
</ul>
</section>

<!-- Add images here -->
<section id="images">
    <h2>Images</h2>
    <div class="image-container">
        <img src="pool.jpg" alt="Image 1">
        <img src="pool2.jpg" alt="Image 2">
        <img src="pool3.jpg" alt="Image 3">
    </div>
</section>

<a href="bookingpage.php" class="button">Book Now</a>
</main>
<script src=""></script>
</body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const timeSlotsData = [
      { day: "Monday", time: "10:00 AM - 11:00 AM" },
      { day: "Tuesday", time: "2:00 PM - 3:00 PM" },
      { day: "Wednesday", time: "5:00 PM - 7:00 PM" },
      // Add more time slot data as needed
    ];
  
    const timeSlotsTable = document.getElementById("timeSlots");
  
    // Add table headers
    const headers = ["Day", "Time Slot"];
    const headerRow = timeSlotsTable.insertRow();
    headers.forEach(headerText => {
      const th = document.createElement("th");
      th.textContent = headerText;
      headerRow.appendChild(th);
    });
  
    // Add time slot data rows
    timeSlotsData.forEach(slot => {
      const row = timeSlotsTable.insertRow();
      Object.values(slot).forEach(value => {
        const cell = row.insertCell();
        cell.textContent = value;
      });
      
    });
  });
  </script>