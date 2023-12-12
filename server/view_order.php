<?php

include './server/config.php';

$stmt = $conn->prepare("SELECT * FROM orders INNER JOIN devices ON orders.DID = devices.DID INNER JOIN cusdetails ON orders.CID = cusdetails.CID WHERE orders.OID = '7069240'");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<tr><h5>Device Details</h5></tr>';
        echo '<tr>';
        echo '<th>Title</th>';
        echo '<td>' . $row['Title'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<th>Manuf</th>';
        echo '<td>' . $row['Manuf'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Model</th>';
        echo '<td>' . $row['Model'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Generation</th>';
        echo '<td>' . $row['Generation'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Ram</th>';
        echo '<td>' . $row['Ram'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Processor</th>';
        echo '<td>' . $row['Processor'] . '</td>';
        echo '</tr>';

        echo '<tr><td><h5>Customer Details</h5><td></tr>';
        echo '<tr>';
        echo '<th>Province</th>';
        echo '<td>' . $row['Province'] . '</td>';
        echo '</tr>';
        
        echo '<tr>';
        echo '<th>Address1</th>';
        echo '<td>' . $row['StrAdd1'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Address2</th>';
        echo '<td>' . $row['StrAdd2'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Phone</th>';
        echo '<td>' . $row['Phone'] . '</td>';
        echo '</tr>';

        echo '<tr>';
        echo '<th>Email</th>';
        echo '<td>' . $row['Email'] . '</td>';
        echo '</tr>';
    }
} else {
    echo "No records found.";
}

// Close the database connection
$stmt->close();
$conn->close();
?>
