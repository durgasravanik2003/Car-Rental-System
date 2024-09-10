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
    padding-right:20px;
    padding-bottom:20px;
    padding-top:5px;
    padding-left:20px;
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
footer {
            text-align: center;
            background-color: #000000;
            color: rgb(255, 255, 255);
            padding: 19px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
    }
       
        .gif-video {
            position: fixed;
            bottom: -222px;
            right: -300px;
            width: 1200px;
            height: auto;
            z-index: 9999;
        }

        .details1 {
            margin-left: 3%;
        }

        .details {
            margin-left: 7%;
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
                    <a href="logout.php">logout</a>
                </div>
            </div>
            <div class="icons">
                <img class="notification" src="images/n1.png" alt="Notification Icon">
                <img class="profile" src="images/profile.png" alt="Profile Icon">
            </div>
        </nav>
    </div>
    <div class="details1">
        <h1 style="text-align: center;">Enjoy your trip with Cardez!</h1><br><br>
       
        <?php
   
    if (isset($_SESSION['username'])) {
        echo '<p style="font-size: 25px;">Dear ' . $_SESSION['username'] .  '</p>';
    } else {
        echo '<p style="font-size: 25px;">Your car has been booked!</p>';
    }
    ?>
    <p style="font-size: 25px;">Your car has been booked!</p>
    </div>
    <div class="details">
        <p style="font-size: 25px;">Source: <strong><span style="color: red;" id="fromLocation"></span></strong></p>
        <p style="font-size: 25px;">Destination: <strong><span style="color: red;" id="toLocation"></span></strong></p>
        <p style="font-size: 25px;">Date: <strong><span style="color: red;" id="date"></span></strong></p>
        <p style="font-size: 25px;">Time: <strong><span style="color: red;" id="time"></span></strong></p>
    </div>
    <div class="details1">
        <center><h2>Thank you for choosing us. <br><br>Enjoy your trip!</h2></center>
    </div>

    <script>
        // Retrieve values from localStorage and sessionStorage
        // document.getElementById('username').innerText = localStorage.getItem('username');
        document.getElementById('fromLocation').innerText = sessionStorage.getItem("from");
        document.getElementById('toLocation').innerText = sessionStorage.getItem("to");
        document.getElementById('date').innerText = formatDate(sessionStorage.getItem("pickupDate"));
        document.getElementById('time').innerText = sessionStorage.getItem("pickupTime");

        // Function to format date as dd/mm/yyyy
        function formatDate(dateString) {
            const date = new Date(dateString);
            const day = date.getDate().toString().padStart(2, '0');
            const month = (date.getMonth() + 1).toString().padStart(2, '0');
            const year = date.getFullYear();
            return `${day}/${month}/${year}`;
        }
    </script>

    <img class="gif-video" src="images/anim.gif" alt="GIF Video">
    <footer>
        &copy; Copyrights of Cardez &nbsp; 2024
    </footer>
</div>
   
</body>
</html>
