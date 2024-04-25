<?php  
session_start();
include 'dbconn.php';
$_SESSION['sport'] = 'football';

?>

<!DOCTYPE html> 
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Football Club</title>
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
        background: linear-gradient(to bottom, #ff9900, #ff6600); /* Add a gradient background */
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
        background-color: #009933; /* Set button background color */
        color: #fff; /* Set button text color */
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        display: inline-block;
        margin-top: 20px;
    }

    a.button:hover {
        background-color: #006600; /* Change button background color on hover */
    }

</style>
</head>
<body>
<header>
<h1>Football Club</h1>
</header>
<main>
<section id="about">
<h2>About Football Club</h2>
<p>Welcome to our Football Club! We provide a premier facility designed for football enthusiasts of all levels. Our club is equipped with professional-grade pitches, high-quality lighting, and comfortable seating areas for spectators.</p>
<p>Whether you're a novice looking to learn the game or a seasoned player seeking competitive matches, our club offers the perfect environment for enjoyable gameplay.</p>
</section>
<section id="facilities">
<h2>Facilities</h2>
<ul>
<li>Professional-grade football pitches</li>
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
<li>Email: info@footballclub.com</li>
<li>Address: 789 Football Street, City, State, ZIP</li>
</ul>
</section>

<!-- Add images here -->
<section id="images">
    <h2>Images</h2>
    <div class="image-container">
        <img src="football.jpg" alt="Image 1">
        <img src="speed.jpg" alt="Image 2">
        <img src="foot.jpg" alt="Image 3">
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
      { day: "Monday", time: "10:00 AM - 11:00 AM", availability: "Available" },
      { day: "Tuesday", time: "2:00 PM - 3:00 PM", availability: "Booked" },
      { day: "Wednesday", time: "5:00 PM - 7:00 PM", availability: "Available" },
      // Add more time slot data as needed
    ];
  
    const timeSlotsTable = document.getElementById("timeSlots");
  
    // Add table headers
    const headers = ["Day", "Time Slot", "Availability"];
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