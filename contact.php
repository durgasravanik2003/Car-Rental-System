
<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $message = trim($_POST['message']);

    $stmt = $conn->prepare("INSERT INTO contact (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);


    if ($stmt->execute()) {
        $response = array("status" => "success", "message" => "Your message has been successfully sent.");
        echo json_encode($response);
    } else {
        $response = array("status" => "error", "message" => "There was an error submitting your message.");
        echo json_encode($response);
    }

    $stmt->close();
    $conn->close();
}
?>

