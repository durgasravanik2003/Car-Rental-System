
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: rgb(0, 0, 0); 
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
        }

        header h1 {
            margin: 0;
            font-size: 24px;
        }

        header .notification {
            margin-right: 10px;
            width: 20px;
            height: auto;
            margin-bottom: -20px;
        }

        header .profile {
            margin-right: 0px;
            width: 40px;
            height: auto;
            margin-bottom: -21px;
        }

        header nav a {
            color: rgb(0, 0, 0);
            text-decoration: underline;
            margin: 0 -80px;
        }

      
        footer {
            text-align: center;
            background-color: #ffffff;
            color: rgb(0, 0, 0);
            padding: 10px 0;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        
        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: calc(100vh - 132px); 
            padding-top: 20px; 
        }

        .image-container, .form-container {
            width: 45%;
            padding: 0;
            box-sizing: border-box;
        }

        .image-container img {
            width: 600px;
            height: auto;
            object-fit: cover;
        }

        .form-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgb(0, 0, 0);
            overflow: hidden;
            padding: 20px;
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            left: -120px;
        }

        .form-container h2 {
            text-align: center;
            margin-top: 0;
            margin-bottom: 20px;
            margin-left: 50px;
        }

        .form-group {
            margin-bottom: 20px;
            width: 96%; 
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .login-btn {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            border: none;
            background-color: #000000;
            color: white;
            cursor: pointer;
        }

        .error-message {
            color: red;
            font-size: 14px;
            width: 100%;
            text-align: center;
        }

        .login-container {
            animation: slideInFromLeft 1s ease;
        }

        @keyframes slideInFromLeft {
            0% {
                transform: translateX(-100%);
                opacity: 0;
            }
            100% {
                transform: translateX(0);
                opacity: 1;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Cardez</h1>
        <div>
            <img class="notification" src="images/notification1.png" alt="Notification Icon">
            <img class="profile" src="images/profile.png" alt="Profile Icon">
            <nav>
                <a href="home.php">Home</a>
                <a href="about.php">Contact</a>
            </nav>
        </div>
    </header>

    <div class="login-container">
        <div class="image-container">
            <img src="images/s22.jpg" alt="Background Image">
        </div>
        <div class="form-container">
            <h2>User Login</h2>
        <form id="login-form" action="login.php" method="post">
            <div class="form-group">
                <label for="username">Email </label>
                <input type="text" id="username" name="username" required>
                <span id="username-error" class="error-message"></span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span id="password-error" class="error-message"></span>
            </div><br>
            <button type="submit" class="login-btn">Login</button>
        </form>
        </div>
    </div>

    <footer>
        &copy; Copyrights of Cardez
    </footer>

    <script>
        document.getElementById('login-form').addEventListener('submit', function(event) {
            event.preventDefault(); 

            var form = this;
            var formData = new FormData(form);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'login.php', true);
            xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
            xhr.onload = function() {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    alert(response.message); 
                    if (response.status === "success") {
                        form.reset(); 
                        localStorage.setItem('username', response.firstName);
                        window.location.href = "car_details.php"; 
                    }
                } else {
                    alert('An error occurred during the login process.');
                }
            };
            xhr.send(formData);
        });
        if (response.status === "success") {
    form.reset();
    localStorage.setItem('username', response.firstName); 
    window.location.href = "car_details.php"; 
}

    </script>
</body>
</html>
