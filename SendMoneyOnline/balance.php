<?php

/**  In Progress **/

$db = mysqli_connect('localhost', 'root', 'root', 'sendmoneydb');

// Function to get transfer history and balance for a user
function getTransferHistoryAndBalance($userid)
{
    global $db;

    // Retrieve transfer history
    $query = "SELECT * FROM transfer WHERE user_id = '$userid'";
    $result = mysqli_query($db, $query);

    if ($result) {

        $balanceQuery = "SELECT SUM(amount) AS balance FROM transfer WHERE user_id = '$userid'";
        $balanceResult = mysqli_query($db, $balanceQuery);
    } else {
        return false;
    }
}
/*
$userid = 1;

$data = getTransferHistoryAndBalance($userid);

if ($data) {
    $balance = $data['balance'];

    echo "Balance: " . $balance;
} else {
    echo "Error retrieving transfer history and balance.";
}
*/
mysqli_close($db);
