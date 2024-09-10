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

        .image-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
        }

        .image-container img {
            width: 35%;
            height: 250px;
            border-radius: 25px;
        }

        .text-container {
            width: 60%;
            margin-left: 20px;
        }

        .text-container h2 {
            margin: 0;
        }

        .categories {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .car {
            width: 30%; /* Adjusted width for three cars in a row */
            margin-bottom: 20px;
            position: relative;
            opacity: 0; /* Hide initially */
            animation: fadeIn 1s forwards; /* Fade-in animation */
            background-color: #ffffff;
            padding: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center; /* Center align car name */
            overflow: hidden; /* Ensure checkbox doesn't overflow */
            position: relative; /* Make it relative for absolute positioning of checkbox */
        }

        .car img {
            width: 100%;
            height: 250px;
            border-radius: 10px;
        }

        .car .info {
            margin-top: 10px; /* Add some space between image and text */
            color: #ffffff;
            background-color: black;
            padding: 8px 0;
            border-radius: 0 0 10px 10px; /* Adjusted border radius */
        }

        .car-name {
            margin-top: 10px; /* Add space between car name and image */
            font-size: larger;
        }

        .car-checkbox {
            position: absolute;
            top: 10px;
            right: 10px;
        }

        .search-button {
            background-color: #000000;
            color: #ffffff;
            padding: 20px 20px;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            font-size: large;
            opacity: 1; /* Show button initially */
            animation: slideIn 1s forwards; /* Slide-in animation */
            text-align: center;
            margin-left: 45%;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
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
    
    
    <h1><b>Welcome</b></h1>
    <div class="image-container">
        <img src="images/u1.jpg" alt="image">
        <div class="text-container">
            <h2>Every Friday & Saturday</h2>
            <p>Get 25% off</p>
            <p>Use Coupon code: DEZ10F</p>
        </div>
    </div><br><hr>
    <h1>Select Categories</h1>
    <div class="categories">
        <div class="car">
            <img src="images/benz.jpg" alt="Car 1">
            <div class="car-name"><b>Mercedes Benz</b></div>
            <div class="info">5 cars available</div>
            <input class="car-checkbox" type="checkbox" name="car1">
        </div>
        <div class="car">
            <img src="images/audi.jpg" alt="Car 2">
            <div class="car-name"><b>Audi</b></div>
            <div class="info">10 cars available</div>
            <input class="car-checkbox" type="checkbox" name="car2">
        </div>
        <div class="car">
            <img src="images/mahindra.jpg" alt="Car 3">
            <div class="car-name"><b>Mahindra</b></div>
            <div class="info">4 cars available</div>
            <input class="car-checkbox" type="checkbox" name="car3">
        </div>
        <div class="car">
            <img src="images/mauriti.jpg" alt="Car 4">
            <div class="car-name"><b>Maruti</b></div>
            <div class="info">2 cars available</div>
            <input class="car-checkbox" type="checkbox" name="car4">
        </div>
        <div class="car">
            <img src="images/sports_car.jpg" alt="Car 5">
            <div class="car-name"><b>Sports Car</b></div>
            <div class="info">13 cars available</div>
            <input class="car-checkbox" type="checkbox" name="car5">
        </div>
        <div class="car">
            <img src="images/suv.jpg" alt="Car 6">
            <div class="car-name"><b>SUV</b></div>
            <div class="info">5 cars available</div>
            <input class="car-checkbox" type="checkbox" name="car6">
        </div>
    </div>
    <button class="search-button" onclick="checkSelection()">Continue</button>
<br><br><br>

<script>
    function checkSelection() {
        const checkboxes = document.querySelectorAll('.categories input[type="checkbox"]');
        let selectedCount = 0;
        let selectedCarName = '';
        checkboxes.forEach(checkbox => {
            if (checkbox.checked) {
                selectedCount++;
                selectedCarName = checkbox.name;
            }
        });
        if (selectedCount === 1) {
            redirectToCarDetails(selectedCarName);
        } else if (selectedCount > 1) {
            alert("You can choose only 1 car.");
        } else {
            alert("Please select a car.");
        }
    }

    function redirectToCarDetails(carName) {
        const carPages = {
            "car1": "benz.php",
            "car2": "audi.php",
            "car3": "mahindra.php",
            "car4": "maruti.php",
            "car5": "sports.php",
            "car6": "suv.php"
        };

        const page = carPages[carName];
        if (page) {
            window.location.href = page;
        } else {
            alert("Selected car not found.");
        }
    }
</script>

</body>
</html>
