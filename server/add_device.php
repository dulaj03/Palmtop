<?php
$manufacturer = $_POST['manufacturer'] ?? '';
$model = $_POST['model'] ?? '';
$processor = $_POST['processor'] ?? '';
$price = $_POST['price'] ?? '';
$generation = $_POST['generation'] ?? '';
$ram = $_POST['ram'] ?? '';
$title = $_POST['title'] ?? '';
$description = $_POST['description'] ?? '';

// Image upload
$target_dir = "images/";
$target_file = $target_dir . basename($_FILES["imageurl"]["name"]);
$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if (isset($_FILES["imageurl"]["tmp_name"]) && is_uploaded_file($_FILES["imageurl"]["tmp_name"])) {
    $check = getimagesize($_FILES["imageurl"]["tmp_name"]);
    if ($check !== false) {
        // Allow file formats
        if ($imageFileType == "jpg" || $imageFileType == "png" || $imageFileType == "jpeg" || $imageFileType == "gif") {
            if (move_uploaded_file($_FILES["imageurl"]["tmp_name"], $target_file)) {
                include 'config.php';

                $stmt = $conn->prepare("INSERT INTO devices(Manuf, Model, Processor, Price, Generation, Ram, Imageurl, Title, Description) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("sssssssss", $manufacturer, $model, $processor, $price, $generation, $ram, $target_file, $title, $description);
                $stmt->execute();

                // Check if the data was inserted successfully
                if ($stmt->affected_rows > 0) {
                    echo "Successful!";
                    header("Location: ../view_devices.php");
                } else {
                    echo "Error: Failed to insert data.";
                }

                // Close the database connection
                $stmt->close();
                $conn->close();
            } else {
                echo "Error: There was a problem uploading the image.";
            }
        } else {
            echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
        }
    } else {
        echo "Error: The uploaded file is not an image.";
    }
} else {
    echo "Error: No image was uploaded.";
}
?>

