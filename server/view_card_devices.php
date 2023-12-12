<?php

include 'no_config_session.php';

$stmt = $conn->prepare("SELECT * FROM devices");
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {

    while ($row = $result->fetch_assoc()) {
        echo '<div class="col-4">';
        echo '<div class="card col-md-4 col-lg-12">';
        echo '<img class="card-img-top" src="./Admin/server/'. $row['Imageurl'] .'" alt="Card image cap"/>';
        echo '<div class="card-body">';
        echo '<h5 class="card-title text-center"><strong>'. $row['Title'] .'</strong></h5>';
        echo '<p class="card-text">' . $row['Description'] . '</p>';
        echo '<center><a href="orderplace.php?did='.$row['DID'].'" class="btn btn-primary">Buy</a></center>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
    }   
} else {
    echo "No devices.";
}
$stmt->close();
$conn->close();
?>
