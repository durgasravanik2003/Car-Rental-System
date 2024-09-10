
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "21711a05f4-db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

