<?php

$Id = $_GET['did'];

include 'config.php';


$stmt = $conn->prepare("DELETE FROM devices WHERE DID = ?");
$stmt->bind_param("i", $Id);
$stmt->execute();


if ($stmt->affected_rows > 0) {
    echo "Deleted successfully!";
    header("Location: ../view_devices.php");
} else {
    echo "Error: Deletion failed.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
