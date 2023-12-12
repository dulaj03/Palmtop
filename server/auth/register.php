<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST["username"];
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password

    include '../config.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO adminusers (username, fname, lname, password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $username, $fname, $lname, $password);

    if ($stmt->execute()) {
     //    echo "Registration successful!";
     header("Location: ../../login.html");

    } else {
        echo "Error during registration: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>