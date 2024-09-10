
<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!filter_var($username, FILTER_VALIDATE_EMAIL) && !preg_match('/^\d{10}$/', $username)) {
        $response = array("status" => "error", "message" => "Enter a valid email or phone number");
        echo json_encode($response);
        exit;
    }

    $stmt = $conn->prepare("SELECT firstName, password FROM reggister WHERE email = ? OR mobile = ?");
    $stmt->bind_param("ss", $username, $username);
    $stmt->execute();
    $stmt->bind_result($firstName, $dbPassword);
    $stmt->fetch();
    $stmt->close();

    if ($dbPassword) {
        if ($password === $dbPassword) {
            $_SESSION['username'] = $firstName;
            $_SESSION['loggedin'] = true;
            $response = array("status" => "success", "message" => "Login successful!", "firstName" => $firstName);
            echo json_encode($response);
        } else {
            $response = array("status" => "error", "message" => "Password does not match.");
            echo json_encode($response);
        }
    } 

    else {
        $response = array("status" => "error", "message" => "Username not found.");
        echo json_encode($response);
    }

    $conn->close();
} else {
    $response = array("status" => "error", "message" => "Invalid request method.");
    echo json_encode($response);
}
?>

