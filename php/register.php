<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $customer_id = 'CUST' . time(); // Unique ID
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $newsletter = isset($_POST['newsletter']) ? 1 : 0;
    $remarks = $_POST['remarks'];

    $sql = "INSERT INTO users (customer_id, first_name, last_name, dob, gender, email, phone, password, newsletter, remarks)
            VALUES ('$customer_id', '$first_name', '$last_name', '$dob', '$gender', '$email', '$phone', '$password', $newsletter, '$remarks')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
