<?php
$host = "localhost";
$user = "root"; // your MySQL username
$pass = ""; // your MySQL password
$db = "final_project";

$conn = new mysqli($host, $user, $pass, $db, 3306);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
