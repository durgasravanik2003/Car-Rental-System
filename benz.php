<?php
include 'protect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <style>
        .about-section nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.about-section nav .logo-nav {
    display: flex;
    align-items: center;
}

.about-section nav .logo-nav h1 {
    margin: 0;
    color: rgb(244, 241, 241);
    margin-right: 1100px;
}

.about-section nav .menu a {
    color: rgb(249, 244, 244);
    text-decoration: none;
    margin-right: 20px;
}

.about-section nav .menu a:hover {
    color: black;
}

.about-section nav .icons {
    display: flex;
}

.about-section nav .icons img {
    margin-right: 10px;
    height: 25px;
    width: 25px;
}

.about-section h6 {
    color: rgb(4, 4, 4);
    margin-top: 20px;
}


.about-section {
    margin-bottom: -1px; 
    border-bottom: 1px solid transparent; 
}

        .car-info {
            padding: 10px;
        }

        .car-info h2 {
            margin: 0;
            font-size: 18px;
        }

        .car-info img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }
        .benz-cars img{
            width: 450px;
            height: 450px;
            border-radius: 30px;
            margin-right: 41px;
        }
        .overview {
            margin-top: 20px;
        }

        .overview h2 {
            margin-bottom: 10px;
            font-size: 35px;
        }

        .overview p {
            margin: 0;
            font-size: 21px;
        }

        .specs {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .spec {
            width: calc(100% / 3); /* Set width to one-third of the container */
            text-align: center;
            margin-bottom: 20px;
            box-sizing: border-box; /* Include padding and border in the width */
            padding: 0 20px; /* Add padding to the sides */
        }
        
        .spec img {
            width: 70px;
            height: auto;
        }
        
        .spec p {
            font-size: 20px;
            color: white;
            background-color: black;
            margin-left: 145px;
            padding: 3px;
            border-radius: 15px;
            max-width: 10ch;
        }
        .spec img[src="images/fuel.png"] {
            width: 125px; /* Increase the width */
            height: auto; /* Increase the height */
        }
        .spec img[src="images/time.png"] {
            width: 60px; /* Increase the width */
            height: auto; /* Increase the height */
        }
        .spec img[src="images/milage.png"] {
            width: 75px; /* Increase the width */
            height: auto; /* Increase the height */
        }
        .rentor {
            margin-top: 20px;
        }

        .user {
            display: flex;
            align-items: center;
            margin-bottom: 30px;
            background-color: rgb(250, 246, 240);
            border-radius: 20px;
        }

        .user img {
            width: 100px;
            height: auto;
            margin-right: 10px;
            padding: 1px;
        }
        .user img[src="images/message.png"] {
            width: 50px; /* Decrease the width */
            height: auto; /* Decrease the height */
        }
        .user img[src="images/phone.png"] {
            width: 50px; /* Decrease the width */
            height: auto; /* Decrease the height */
        }
        .book-now {
            float: right;
            background-color: black;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 22px;
        }
    </style>
</head>
<body>
    <div class="about-section" style="background-color: #000000;">
        <nav>
            <div class="logo-nav">
                <h1>Cardez</h1>
                <div class="menu">
                    <a href="home.php">Home</a>
                    <a href="about.php">About</a>
                </div>
            </div>
            <div class="icons">
                <img class="notification" src="images/n1.png" alt="Notification Icon">
                <img class="profile" src="images/profile.png" alt="Profile Icon">
            </div>
        </nav>
    </div>

    <div class="car-info">
        <h1><b>Mercedes-Benz &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Rs.5850/day
        </b></h1>
        <div class="benz-cars">
            <img src="images/benz1.jpg" alt="Car 1">
            <img src="images/benz2.jpg" alt="Car 2">
            <img src="images/benz3.jpg" alt="Car 3">
        </div>
    </div>
    <hr>

    <div class="overview">
        <h2>Overview</h2><br>
        <p>"Mercedes - Benz is the Rolex of the Automotive industry".
            Mercedes-Benz, commonly referred to as Mercedes and sometimes as Benz, is a German luxury and commercial vehicle automotive brand established in 1926. Mercedes-Benz AG is headquartered in Stuttgart, Baden-Württemberg, Germany.</p>
    </div>

    <br>

    <div class="specs">
        <div class="spec">
            <img src="images/speed.png" alt="Speed">
            <p>140 Mph</p>
        </div>
        <div class="spec">
            <img src="images/milage.png" alt="Milage">
            <p>315 MI</p>
        </div>
        <div class="spec">
            <img src="images/time.png" alt="Time">
            <p>200 km/hr</p>
        </div>
        <div class="spec">
            <img src="images/battery.png" alt="Battery">
            <p>Long Range</p>
        </div>
        <div class="spec">
            <img src="images/dual.png" alt="Dual Motor">
            <p>Dual Motor</p>
        </div>
        <div class="spec">
            <img src="images/fuel.png" alt="Fuel">
            <p>Petrol</p>
        </div>
    </div>

    <br>

    <div class="rentor">
        <h1 style="font-size: 35px;">Rentor</h1>
        <div class="user">
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/user.png" alt="User Image">
            <span style="font-size: 30px;"><b>John Smith</b></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            
            <img src="images/message.png" alt="Message Icon">
            <img src="images/phone.png" alt="Call Icon">
        </div>
        <div>
            <button class="book-now" onclick="window.location.href='success.php'">Book Now</button><br><br><br><br>
        </div>
    </div>

</body>
</html>
