<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo "Not logged in. Redirecting...";
    header("Location: login_ft.php");
    exit;
}
?>
