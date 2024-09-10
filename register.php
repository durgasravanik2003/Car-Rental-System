

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            background: url('images/bg_1.png');
            background-repeat: no-repeat;
            background-size: cover; /* Set background size to cover */
            margin-top: 100px;
            
        }
        
        .container {
            width: 700px;
            margin: 30px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .form-group {
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        .form-group label {
            width: 120px;
            font-weight: bold;
        }
        
        .form-group input[type="text"],
        .form-group input[type="password"] {
            flex: 1;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .form-group input[type="email"]{
            position: relative;
        }
        
        .form-group input[type="radio"] {
            margin-right: 10px;
        }
        
        .form-group input[type="submit"],
        .form-group input[type="reset"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        
        hr {
            margin-top: 30px;
            margin-bottom: 20px;
            border: none;
            border-top: 1px solid #ccc;
        }
        
        .login-link {
            text-align: center;
            margin-bottom: 10px;
        }
        
        .login-link a {
            color: #007bff;
            text-decoration: none;
        }
        
        .error {
            color: red;
            font-size: 12px;
            display: inline-block; 
            margin-top: 4px;
        }        
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter Your Details</h2>
        <form id="registrationForm" method="POST" action="registration_form.php" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName" required>
                <span id="firstNameError" class="error"></span>

            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName" required>
                <span id="lastNameError" class="error"></span>

            </div>
            <div class="form-group">
                <label for="age">Age:</label>
                <input type="text" name="age" id="age" required>
                <span id="ageError" class="error"></span>

            </div>
            <div class="form-group">
                <label for="mobile">Mobile:</label>
                <input type="text" name="mobile" id="mobile" required>
                <span id="mobileError" class="error"></span>

            </div>
            <div class="form-group">
                <label>Gender:</label>
                <input type="radio" name="gender" id="male" value="male" required>
                <label for="male">Male</label>
                <input type="radio" name="gender" id="female" value="female" required>
                <label for="female">Female</label>
                <span id="genderError" class="error"></span>

            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" required>
                <span id="emailError" class="error"></span>

            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" required>
                <span id="passwordError" class="error"></span>
            </div>
            <div class="form-group">
                <label for="confirmPassword">Confirm Password:</label>
                <input type="password" name="confirmPassword" id="confirmPassword" required>
                <span id="confirmPasswordError" class="error"></span>
            </div>
            <div class="form-group">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="submit" id="submit" value="Submit">
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>
    <hr>
    <div class="login-link">
       <p style="color: white;">Already have an account? <a href="login_ft.php">Login here</a>.</p>
    </div>
 
</div>


    <script>
        function validateForm() {
            var firstName = document.getElementById('firstName').value;
            var lastName = document.getElementById('lastName').value;
            var age = document.getElementById('age').value;
            var mobile = document.getElementById('mobile').value;
            var gender = document.querySelector('input[name="gender"]:checked');
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
    
            var valid = true;
    
            if (firstName.trim() == '') {
                alert('Please enter your first name');
                valid = false;
            } else if (lastName.trim() == '') {
                alert('Please enter your last name');
                valid = false;
            } else {
                var emailRegex = /^[a-zA-Z0-9._%+-]+@gmail\.com$/;
                if (!emailRegex.test(email)) {
                    alert('Please enter a valid Gmail address');
                    valid = false;
                } else if (mobile.length != 10) {
                    alert('Mobile number should be 10 digits');
                    valid = false;
                } else if (password.length < 8) {
                    alert('Password must be at least 8 characters');
                    valid = false;
                } else if (password != confirmPassword) {
                    alert('Passwords do not match');
                    valid = false;
                }
            }
    
            if (valid) {
               
                window.location.href = 'login_ft.php';
            }
    
            return valid;
        }
    </script>
    
</body>
</html>
