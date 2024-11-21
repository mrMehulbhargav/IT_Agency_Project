<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            echo "Welcome, " . $user['first_name'] . "!\\nCustomer ID: " . $user['customer_id'] . 
                 "\\nDate of Birth: " . $user['dob'] . "\\nPhone: " . $user['phone'];
        } else {
            echo "Password is incorrect!";
        }
    } else {
        echo "You are not registered!";
    }

    $conn->close();
}
?>
