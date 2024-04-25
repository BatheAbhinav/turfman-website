<?php  
session_start();
include 'dbconn.php';
$_SESSION['sport'] = 'Swimming';

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Swimming Facility</title>
<style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: #faf9f9;
  }
  
  header {
    background-color: #6592f5;
    color: #fff;
    padding: 15px;
    text-align: center;
    border-bottom: 2px solid #0056b3;
  }
  
  h1 {
    margin: 20px 0;
    color: rgb(251, 250, 250);
    font-size: 36px; /* Increased font size */
  }
  
  
  main {
    padding: 20px;
  }
  
  h2 {
    border-bottom: 2px solid #f3f5f7;
    padding-bottom: 5px;
    margin-top: 30px;
    color: rgb(251, 248, 248);
    font-weight: 700;
    animation: colorChange 8s infinite alternate;
    font-size: 24px; /* Increased font size */
  }
  
  * {
  box-sizing: border-box;
}

.column {
  float: left;
  width: 33.33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
  p {
    line-height: 1.6;
    color: #faf6f6;
    font-weight: 700;
  }
  
  ul {
    list-style-type: none;
    padding-left: 20px;
    font-weight: 700;
  }
  
  ul li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 10px;
  }
  
  ul li:before {
    content: "\2022";
    color: #f6f7f8;
    font-weight: bold;
    position: absolute;
    left: 0;
  }
  
  #timetable {
    margin-top: 30px;
  }
  
  #timeSlots {
    width: 100%;
    border-collapse: collapse;
    margin-top: 10px;
    font-weight: 700;
  }
  
  #timeSlots th, #timeSlots td {
    padding: 10px;
    border: 1px solid #ccc;
  }
  
  #timeSlots th {
    background-color: #6592f5;
  }
  
  #bookNowBtn {
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
    transition: background-color 0.3s ease;
    box-shadow: #f3f5f7;
  }
  
  #bookNowBtn:hover {
    background-color: #218838;
  }
  
  img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }
  
  #contact {
    margin-top: 30px;
  }
  
  #contact ul {
    padding-left: 0;
  }
  
  #contact ul li {
    margin-bottom: 5px;
  }
  
  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    padding: 20px;
    color: black;
  }

  /* Style for video background */
  #video-bg {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -1; /* Ensure video stays behind content */
    }

  .button {
    display: inline-block;
    background-color:  #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    margin-top: 20px;
    margin-left: 720px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    transition: background-color 0.3s ease;
}

.button:hover {
    background-color: #0056b3;
}
</style>

</head>
<body>
  <!-- Video background -->
<video autoplay muted loop id="video-bg">
  <source src="swim3.mp4" type="video/mp4">
  </video>
  
<header>
<h1>Swimming Facility</h1>
</header>
<main>
<section id="about">
<h2>About Swimming Facility</h2>
<p>Welcome to our Swimming Facility! Dive into the refreshing world of swimming at our state-of-the-art facility.</p>
<p>Our facility is designed to provide swimmers with a safe and enjoyable experience, featuring:</p>
<ul>
<li>Olympic-size swimming pool with temperature control</li>
<li>Separate lanes for lap swimming and recreational swimming</li>
<li>Professional lifeguards on duty</li>
<li>Comfortable seating areas for swimmers and spectators</li>
<li>Access to changing rooms, showers, and locker facilities</li>
</ul>
<p>Whether you're training for a competition or just enjoying a leisurely swim, our facility offers the perfect environment for swimmers of all levels.</p>
</section>
<section id="timetable">
<h2>Pool Schedule</h2>
<p>Check our available swim times and plan your visit!</p>
<table id="timeSlots">
    <ul>
        <li>Morning: 8:00 AM - 12:00 PM</li>
        <li>Afternoon: 1:00 PM - 5:00 PM</li>
        <li>Evening: 6:00 PM - 10:00 PM</li>
    </ul>
</table>
</section>
<section id="image">
<h2>Swimming Facility Image</h2>
<div class="row">
  <div class="column">
    <img src="https://en.reformsports.com/oxegrebi/2023/10/what-is-an-olymp-swimming-pool.jpg" alt="pool1" style="width:100%">
  </div>
  <div class="column">
    <img src="https://images.hindustantimes.com/img/2022/12/29/1600x900/Mumbai--India---November-05--2020--Workers-are-see_1672341864256.jpg" alt="Forest" style="width:100%">
  </div>
  <div class="column">
    <img src="https://lavahotsprings.com/wp-content/uploads/lava-hot-springs-indoor-swimming-pool-slidehow-1024x576.jpg" alt="Mountains" style="width:100%">
  </div>
</div>
</section>
<section id="contact">
<h2>Contact Us</h2>
<p>If you have any questions or would like to book our facility, please contact us:</p>
<ul>
<li>Phone: 123-456-7890</li>
<li>Email: info@swimmingfacility.com</li>
<li>Address: 123 Main Street, City, State, ZIP</li>
</ul>
</section>
</main>
</div>
<a href="bookingpage.php" class="button">Book Now</a>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const timeSlotsData = [
      { day: "Monday", time: "10:00 AM - 11:00 AM"},
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
</body>
</html>