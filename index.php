<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Rental Page</title>
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            font-family: Arial, sans-serif;
            background-color: black; /* Set the background color to black */
            position: relative;
        }
        
        .container {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        
        img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
        
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            padding: 20px;
            box-sizing: border-box;
            background-color: rgba(0, 0, 0, 0.5);
        }
        
        h2 {
            margin: 20px 20px 0 20px;
            color: white;
            font-size: 50px;
            position: absolute;
            top: 10;
            left: 0;
        }
        
        h1 {
            margin: 0 20px;
            color: white;
            font-size: 36px;
            font-weight: bold;
            position: absolute;
            bottom: 110px;
        }
        
        p {
            margin: 0 20px;
            color: white;
            font-size: 18px;
            position: absolute;
            bottom: 70px;
            left: 160px;
        }

        .get-started-btn {
            position: absolute;
            font-size: 30px;
            font-weight: 200;
            bottom: 28px;
            right: 50px;
            background-color: rgb(255, 255, 255);
            color: rgb(0, 0, 0);
            border: none;
            padding: 15px 20px;
            border-radius: 10px;
            cursor: pointer;
            text-decoration: none; 
        }

        .get-started-btn:hover {
            background-color: #333; 
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="images/l2.jpg" alt="Car Image">
        <div class="overlay">
            <h2>Cardez</h2>
            <h1>Find your ideal car rental for your trip!</h1>
            <p>Get access to best deals from global car rental companies</p>
            <a href="register.php" class="get-started-btn">Get started</a>
        </div>
    </div>
</body>
</html>
