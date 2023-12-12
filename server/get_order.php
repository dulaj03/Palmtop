<?php

include './server/config.php';

$stmt = $conn->prepare("SELECT * FROM orders INNER JOIN devices ON orders.DID = devices.DID INNER JOIN cusdetails ON orders.CID = cusdetails.CID");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['OID'] . '</td>';
        echo '<td>' . $row['Title'] . '</td>';
        echo '<td>' . $row['Model'] . '</td>';
        echo '<td>' . $row['Email'] . '</td>'; 
        echo '<td>' . $row['Province'] . '</td>'; 
        echo '<td>' . $row['StrAdd1'] . '</td>'; 
        echo '<td> <a href="./view_order.php?oid='.$row['OID'].'">View</a></td>';
        echo '</tr>';
    }
} else {
    echo "No records found.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>

