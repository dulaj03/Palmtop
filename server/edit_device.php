<?php

$manufacturer = $_POST['manufacturer'] ?? '';
$model = $_POST['model'] ?? '';
$processor = $_POST['processor'] ?? '';
$price = $_POST['price'] ?? '';
$generation = $_POST['generation'] ?? '';
$ram = $_POST['ram'] ?? '';
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';
$deviceId = $_POST['did'] ?? '';

include 'config.php';


$stmt = $conn->prepare("UPDATE devices SET Manuf = ?, Price = ?, Model = ?, Processor = ?, Generation = ?, Ram = ?, Title = ?, Description = ? WHERE DID = $deviceId");
$stmt->bind_param("ssssssss", $manufacturer, $price, $model, $processor, $generation, $ram, $title, $description);
$stmt->execute();


if ($stmt->affected_rows > 0) {
echo "details updated successfully!";
header("Location: ../view_devices.php");
} else {
echo "Error: details update failed.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>

