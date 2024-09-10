<?php
include 'config.php';

if (isset($_POST['submit'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $errors = array();

    $checkEmail = "SELECT * FROM reggister WHERE email='$email'";
    $resultEmail = mysqli_query($conn, $checkEmail);
    if (mysqli_num_rows($resultEmail) > 0) {
        $errors[] = "The email already exists.";
    }

    $checkMobile = "SELECT * FROM reggister WHERE mobile='$mobile'";
    $resultMobile = mysqli_query($conn, $checkMobile);
    if (mysqli_num_rows($resultMobile) > 0) {
        $errors[] = "The mobile number already exists.";
    }

    if (count($errors) > 0) {
        echo "<script>";
        foreach ($errors as $error) {
            echo "alert('$error');";
        }
        echo "window.history.back();";  
        echo "</script>";
    } else {
        $sql = "INSERT INTO reggister (firstName, lastName, age, mobile, gender, email, password) VALUES ('$firstName', '$lastName', '$age', '$mobile', '$gender', '$email', '$password')";

        if (mysqli_query($conn, $sql)) {
            echo "<script>";
            echo "alert('Registration successful!');";
            echo "window.location.href = 'login_ft.php';"; 
            echo "</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    mysqli_close($conn);
}
?>
