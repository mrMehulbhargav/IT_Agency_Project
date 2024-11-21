<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    $sql = "INSERT INTO newsletters (email) VALUES ('$email')";

    if ($conn->query($sql) === TRUE) {
        echo "Thank you for subscribing to our newsletter!";
    } else {
        echo "You have already subscribed!";
    }

    $conn->close();
}
?>
