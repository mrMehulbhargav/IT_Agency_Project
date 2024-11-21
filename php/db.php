<?php
$host = 'localhost';
$user = 'root';
$password = '';
$dbname = 'ITAgencyDB';

// Create Connection
$conn = new mysqli($host, $user, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
