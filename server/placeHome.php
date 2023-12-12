<!DOCTYPE html>
<html>
    <body>

        <?php
        // Database connection
        include 'no_config_session.php';

        $rondomId = rand(100000, 9999999);

        // Customer data
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

        // Device data
        $manuf = isset($_POST['Manuf']) ? $_POST['Manuf'] : '';
        $price = isset($_POST['Price']) ? $_POST['Price'] : '';
        $model = isset($_POST['Model']) ? $_POST['Model'] : '';
        $modelno = isset($_POST['ModelNo']) ? $_POST['ModelNo'] : '';
        $proce = isset($_POST['Processor']) ? $_POST['Processor'] : '';
        $gen = isset($_POST['Generation']) ? $_POST['Generation'] : '';
        $ram = isset($_POST['Ram']) ? $_POST['Ram'] : '';

        // Additional shipping data
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

        // Insert data into the devices table
        $sql_devices = "INSERT INTO devices_search (Manuf, Price, Model, ModelNo, Processor, Generation, Ram, CID)
        VALUES ('$manuf', '$price', '$model', '$modelno', '$proce', '$gen', '$ram', '$rondomId')";

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
                $sql_shipping_same_data = "INSERT INTO shipping (Fname, Sname, Province, StrAdd1, StrAdd2, Town, PosCode, Phone, Email, CID)
                                VALUES ('$fname', '$sname', '$province', '$stradd1', '$stradd2', '$town', '$poscode', '$phone', '$email', '$rondomId')";

                if ($conn->query($sql_shipping_same_data) !== TRUE) {
                    $errorMessage = "Error inserting shipping data: " . $conn->error;
                }
            }

            // Insert data into the devices table
            if ($conn->query($sql_devices) !== TRUE) {
                $errorMessage = "Error inserting device data: " . $conn->error;
            }
        } else {
            $errorMessage = "Error inserting cusdetails data: " . $conn->error;
        }

        $conn->close();

        // Redirect back to the HTML file with success or error message as URL parameters
        if (isset($successMessage)) {
            header("Location: ../PlaceUrOrHOME.php?success=" . urlencode($successMessage));
        } elseif (isset($errorMessage)) {
            header("Location: ../PlaceUrOrHOME.php?error=" . urlencode($errorMessage));
        }

        ?>

    </body>
</html>
