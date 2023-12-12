<?php
    // Database connection
    include 'no_config_session.php';

    $rondomId = rand(100000, 9999999);
    $orderId = rand(100000, 9999999);

    $deviceId = $_POST['did'] ?? '';

 
    // Form data
    $fname = $_POST['Fname'];
    $sname = $_POST['Sname'];
    $purpose = $_POST['Purpose'];
    $province = $_POST['Province'];
    $stradd1 = $_POST['StrAdd1'];
    $stradd2 = $_POST['StrAdd2'];
    $town = $_POST['Town'];
    $poscode = $_POST['PosCode'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $info = $_POST['info'];

    // Additional shipping dat
    $showAdditional = isset($_POST['showAdditional']);
    $sfname = $showAdditional ? $_POST['sfname'] : $fname;
    $ssname = $showAdditional ? $_POST['ssname'] : $sname;
    $sprovince = $showAdditional ? $_POST['sprovince'] : $province;
    $ssaddress = $showAdditional ? $_POST['ssaddress'] : $stradd1;
    $ssapartment = $showAdditional ? $_POST['ssapartment'] : $_POST['StrAdd2'];
    $stown = $showAdditional ? $_POST['stown'] : $town;
    $spostal = $showAdditional ? $_POST['spostal'] : $poscode;
    $sphone = $showAdditional ? $_POST['sphone'] : $phone;
    $semail = $showAdditional ? $_POST['semail'] : $email;
    

    // Insert data into the cusdetails table
    $sql_cusdetails = "INSERT INTO cusdetails (CID, Fname, Sname, Purpose, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email, Info)
    VALUES ('$rondomId', '$fname', '$sname', '$purpose', '$province', '$stradd1', '$stradd2', '$town', '$poscode', '$phone', '$email', '$info')";


    if ($conn->query($sql_cusdetails) === TRUE) {
        $successMessage = "Record inserted successfully";
        
        
        // Check if the checkbox is checked
        if ($showAdditional) {
            // Insert data into the shipping table
            $sql_shipping = "INSERT INTO shipping (Fname, Sname, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email, CID)
                VALUES ('$sfname', '$ssname', '$sprovince', '$ssaddress', '$ssapartment', '$stown', '$spostal', '$sphone', '$semail', '$rondomId')";

            if ($conn->query($sql_shipping) !== TRUE) {
                $errorMessage = "Error inserting shipping data: " . $conn->error;
            }
        } else {
            // If checkbox is not checked, insert the same data into the shipping table
            $sql_shipping_same_data = "INSERT INTO shipping (Fname, Sname, Purpose, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email, CID)
                VALUES ('$fname', '$sname', '$purpose', '$province', '$stradd1', '$stradd2', '$town', '$poscode', '$phone', '$email', '$rondomId')";

            if ($conn->query($sql_shipping_same_data) !== TRUE) {
                $errorMessage = "Error inserting shipping data: " . $conn->error;
            }
        }

        $sql_order = "INSERT INTO orders (OID, DID, CID) VALUES ('$orderId', '$deviceId', '$rondomId')";

        if ($conn->query($sql_order) !== TRUE) {
            $errorMessage = "Error inserting shipping data: " . $conn->error;
        }

        $conn->close();

        // Redirect back to the HTML file with success or error message as URL parameters
        if (isset($successMessage)) {

            header("Location: ../orderplace.php?success=" . urlencode($successMessage));
        } elseif (isset($errorMessage)) {
            header("Location: ../orderplace.php?error=" . urlencode($errorMessage));
        }
    }
?>
