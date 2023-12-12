<?php

include './server/config.php';

$stmt = $conn->prepare("SELECT * FROM devices");
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td><img src="./server/'. $row['Imageurl'] .'" alt="devices" width="40" /></td>';
        echo '<td>' . $row['Title'] . '</td>';
        echo '<td>' . $row['Manuf'] . '</td>';
        echo '<td>' . $row['Model'] . '</td>';
        echo '<td>' . $row['Processor'] . '</td>';
        echo '<td>' . $row['Generation'] . '</td>';
        echo '<td>' . $row['Ram'] . '</td>';
        echo '<td> <a href="./edit_device.php?did='.$row['DID'].'">Edit</a> <a href="./server/delete_device.php?did='.$row['DID'].'">Delete</a>  </td>';
        echo '</tr>';
    }   
} else {
    echo "No found.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>