<?php
$db = mysqli_connect('localhost', 'root', 'root', 'sendmoneydb');
$errors = array();
$registrationSuccess = true;

// Function to insert transfer data into the database
function insertTransferData($recipientId, $currency, $amount, $transferDate)
{
    global $db, $errors, $registrationSuccess;

    // Form validation
    if (empty($recipientId)) {
        array_push($errors, "Recipient ID is required");
        $registrationSuccess = false;
    }
    if (empty($amount)) {
        array_push($errors, "Amount is required");
        $registrationSuccess = false;
    }
    if (empty($transferDate)) {
        array_push($errors, "Transfer date is required");
        $registrationSuccess = false;
    }
    if (empty($currency)) {
        array_push($errors, "Currency is required");
        $registrationSuccess = false;
    }

    if ($registrationSuccess) {
        // Get the recipient's name from the "user" table using the recipient ID
        $recipientQuery = "SELECT name FROM user WHERE userId = '$recipientId'";
        $recipientResult = mysqli_query($db, $recipientQuery);

        if ($recipientResult && mysqli_num_rows($recipientResult) > 0) {
            $recipientRow = mysqli_fetch_assoc($recipientResult);
            $recipientName = $recipientRow['name'];

            // Get the user's name from the session
            $name = $_SESSION['name'];

            // Insert data into the "transfer" table
            $insertQuery = "INSERT INTO transfer (userId, currency, amount, sentDate)
                            VALUES ('$recipientId', '$currency', '$amount', '$transferDate')";
            mysqli_query($db, $insertQuery);
        } else {
            array_push($errors, "Recipient not found");
            // Handle the case when the recipient is not found
        }
    }
}
