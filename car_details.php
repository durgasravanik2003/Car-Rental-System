<?php
include 'protect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Details</title>
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

        .search-container {
            margin-top: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-container input[type="date"],
        .search-container input[type="time"],
        .search-container button {
            padding: 10px;
            border: none;
            border-radius: 5px;
            outline: none;
            font-size: 16px;
        }

        .popular-cars {
            display: flex; 
        }

        .car {
            margin-bottom: 20px;
            display: flex;
            align-items: center;
        }

        .car img {
            width: 180px;
            height: auto;
            margin-right: 20px;
        }

        .car-details {
            display: flex;
            align-items: center;
        }

        .car-details h2 {
            margin: 0;
        }

        .car-details span {
            margin-right: 10px;
        }

        .stars img {
            width: 20px;
            height: 20px;
            margin-right: 5px;
        }

        .search-container input[type="text"],
        .search-container input[type="date"],
        .search-container input[type="time"] {
        flex: 1;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-weight: bold;
        display: inline-block;
        vertical-align: top; /* Align elements vertically */
        margin-right: 10px;
        }
        .search-container input[type="time"],
        .search-container input[type="date"] {
            padding-right: 15px;
            padding-bottom: 10px;
            padding-left: 15px;
            padding-top: 10px;
        }

        .search-container input[type="text"]{
            padding: 12px 30px;
        }
        .button_search{
            background-color: black; color: white; padding:12px;
            margin-left: 500px; border-radius: 10px; 
        } 
        .search-container{
            margin-left: 220px;
        }
        footer {
            text-align: center;
            background-color: #000000;
            color: rgb(255, 255, 255);
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
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
    <h1>Let's find your favourite car here!!</h1><br>
    <div class="search-container">
        <div>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <label for="pickup-date" style="font-size: 20px;">Pick up date:&nbsp;&nbsp;</label>
            <input type="date" id="pickup-date">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;
            <label for="pickup-time" style="font-size: 20px;">Pick up time:&nbsp;&nbsp;</label>
            <input type="time" id="pickup-time"><br><br>
        <div>
            <label for="from" style="font-size: 20px;">From location:&nbsp;&nbsp;</label>
            <input type="text" id="from" size="12">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;
            <label for="to" style="font-size: 20px;">To location:&nbsp;&nbsp;</label>
            <input type="text" id="to" size="12"><br><br>
        </div>
    </div>
</div>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
<button class="button_search" onclick="validateForm()"><b>Search Car</b></button><br>

    <h1>Popular cars</h1>
    <div class="popular-cars">
        <div class="car">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="images/benz.jpg" alt="Mercedes Benz">
            <div class="car-details">
                <div>
                    <h1>Rs.450/day</h1>
                    <h2>Mercedes Benz&nbsp;&nbsp;</h2><span> </span>
                   <br>
                </div>
                <div class="stars">
                    <br><br><br><br> &nbsp;
                    <img src="images/star1.png" alt="Star"><span> </span>
                    <span>4.9</span>
                </div>
            </div>
        </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <div class="car">
            <img src="images/mahindra.jpg" alt="SUV">
            <div class="car-details">
                <div>
                    <h1>Rs.200/day</h1>
                    <h2>Mahindra Scorpio</h2>
                    <span></span>
                </div>
                <div class="stars">
                    <br><br><br><br>&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="images/star1.png" alt="Star"><span> </span>
                    <span>4.7</span>
                </div>
            </div>
        </div>
    </div>

    <script>
        function validateForm() {
            var pickupDate = document.getElementById("pickup-date").value;
            var pickupTime = document.getElementById("pickup-time").value;
            var from = document.getElementById("from").value;
            var to = document.getElementById("to").value;

            if (pickupDate === "" || pickupTime === "" || from === "" || to === "") {
                alert("Please select all fields.");
                return false;
            } else {
                
                sessionStorage.setItem("pickupDate", pickupDate);
                sessionStorage.setItem("pickupTime", pickupTime);
                sessionStorage.setItem("from", from);
                sessionStorage.setItem("to", to);

                
                window.location.href = "home.php";
            }
        }
    </script>
    <footer>
        &copy; Copyrights of Cardez
        &nbsp; 2024
    </footer>

</body>
</html>
