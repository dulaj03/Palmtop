<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle login form submission
    $username = $_POST["username"];
    $password = $_POST["password"];

    include '../config.php';

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("SELECT id, username, password FROM adminusers WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->bind_result($id, $username, $hashedPassword);
    $stmt->fetch();

    if (password_verify($password, $hashedPassword)) {
        // Login successful
        $_SESSION["user_id"] = $id;
        $_SESSION["username"] = $username;
        header("Location: ../../index.php");
        exit();
    } else {
        echo "Invalid username or password";
    }

    $stmt->close();
    $conn->close();
}
?>

