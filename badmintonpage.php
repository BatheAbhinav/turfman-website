<?php  
session_start();
include 'dbconn.php';
$_SESSION['sport'] = 'Badminton';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Badminton Court</title>
<style>
   body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
    color: black;
    font-weight: 800;
  }
  
  header {
    background-color: #afeeb0;
    color: #fff;
    padding: 15px;
    text-align: center;
    border-bottom: 2px solid #0a3767;
  }
  
  h1 {
    margin: 20px 0;
    color: black;
    font-size: 36px; /* Increased font size */
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

  
  h2 {
    border-bottom: 2px solid #070707;
    padding-bottom: 5px;
    margin-top: 30px;
    animation: colorChange 8s infinite alternate;
    font-size: 24px; /* Increased font size */
  }
  
  p {
    line-height: 2.0;
    color: #050505;
  }
  
  ul {
    list-style-type: none;
    padding-left: 20px;
  }
  
  ul li {
    position: relative;
    padding-left: 20px;
    margin-bottom: 10px;
  }
  
  ul li:before {
    content: "\2022";
    color: #050505;
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
  }
  
  #timeSlots th, #timeSlots td {
    padding: 10px;
    border: 1px solid #080808;
  }
  
  #timeSlots th {
    background-color: #21e352;
  }
  
    main {
    padding: 20px;
    position: relative;
    z-index: 1; /* Ensure content appears above video */
    }

    img {
    max-width: 100%;
    height: auto;
    display: block;
    margin: 20px auto;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
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

    /* Adjust styles for the button to align it */
    .button {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    text-decoration: none;
    margin-top: 20px;
    margin-left: 50%; /* Center the button horizontally */
    transform: translateX(-50%); /* Adjust for centered position */
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
<source src="badminton1.mp4" type="video/mp4">
</video>

<header>
<h1>Badminton Court</h1>
</header>
<main>
    <section id="about">
        <h2>About Badminton Court</h2>
        <p>Welcome to our Badminton Court! Experience the joy of badminton on our premium-quality courts.</p>
        <p>Our court is designed to provide players with a professional-grade playing surface, featuring:</p>
        <ul>
        <li>High-quality badminton court with proper lines and markings</li>
        <li>Professional lighting for optimal visibility</li>
        <li>Ample space for matches and practice sessions</li>
        <li>Comfortable seating areas for players and spectators</li>
        <li>Access to refreshments and facilities</li>
        </ul>
        <p>Whether you're practicing your shots or playing in a competitive match, our court offers the perfect environment for badminton enthusiasts.</p>
        </section>
        </section>
        <section id="image">
          <h2>Badminton Facility Image</h2>
          <div class="row">
            <div class="column">
              <img src="https://t4.ftcdn.net/jpg/03/33/14/19/360_F_333141947_xz1nD223W2f9EW43iZbjGqCRFC3WAgTy.jpg" height="200px" width="500px" alt="pool1" >
            </div>
            <div class="column">
              <img src="https://i.pinimg.com/736x/30/e8/00/30e8005d937ed7f5eefd42a31761860e.jpg" height="200px" width="420px" alt="Forest" >
            </div>
            <div class="column">
              <img src="https://upload.wikimedia.org/wikipedia/commons/7/78/Indoor_badminton_court.jpg" height="200px" width="500px" alt="Mountains" >
            </div>
          </div>
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
        <p>If you have any questions or would like to book our court, please contact us:</p>
        <ul>
        <li>Phone: 123-456-7890</li>
        <li>Email: info@badmintoncourt.com</li>
        <li>Address: 123 Main Street, City, State, ZIP</li>
        </ul>
        </section>
</main>
<a href="bookingpage.php" class="button">Book Now</a>

<script>
    document.addEventListener("DOMContentLoaded", function() {
      const timeSlotsData = [
        { day: "Monday", time: "10:00 AM - 11:00 AM"},
        { day: "Tuesday", time: "2:00 PM - 3:00 PM" },
        { day: "Wednesday", time: "5:00 PM - 7:00 PM"},
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