<?php
if (isset($_POST['transaction']) && isset($_POST['recipientName ']) && isset($_POST['amount']) && isset($_POST['transfer_date']) && isset($_POST['currency'])) {
    $recipientName = mysqli_real_escape_string($db, $_POST['recipientName ']);
    $amount = mysqli_real_escape_string($db, $_POST['amount']);
    $transferDate = mysqli_real_escape_string($db, $_POST['transfer_date']);
    $currency = mysqli_real_escape_string($db, $_POST['currency']);

    // Retrieve the recipient's user ID based on the username
    $recipientIdQuery = "SELECT userid FROM user WHERE name = '$recipientName'";
    $recipientIdResult = mysqli_query($db, $recipientIdQuery);

    if ($recipientIdResult && mysqli_num_rows($recipientIdResult) > 0) {
        $recipientIdRow = mysqli_fetch_assoc($recipientIdResult);
        $recipientId = $recipientIdRow['userid'];

        // Call the insertTransferData() function
        insertTransferData($recipientId, $amount, $transferDate, $currency);

        if ($registrationSuccess) {

            echo json_encode(array('status' => 'success'));
        } else {

            echo json_encode(array('status' => 'error', 'message' => 'Transfer failed. Please check your input.'));
        }

        exit();
    } else {
        // Return an error response if the recipient username is not found
        echo json_encode(array('status' => 'error', 'message' => 'Recipient not found. Please check the username.'));
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Transfer Money Online</title>
    <link rel="stylesheet" href="css/send_money_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FontAweome CDN Link for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />

    <script>
        $(document).ready(function() {
            // Submit the form using AJAX
            $('form').submit(function(e) {
                e.preventDefault(); // Prevent the form from submitting normally

                var formData = $(this).serialize(); // Get the form data

                // Send an AJAX request
                $.ajax({
                    type: 'POST',
                    url: 'sendmoney.php',
                    data: formData,
                    dataType: 'json',
                    success: function(response) {
                        if (response.status === 'success') {
                            // Handle the success case
                            alert('Transfer successful!');
                        } else {
                            // Handle the error case
                            alert(response.message);
                        }
                    },
                    error: function() {
                        // Handle the error case
                        alert('An error occurred during the transfer.');
                    }
                });
            });
        });
    </script>
</head>

<body>
    <div class="wrapper_sendMoney">
        <header>Transfer Money with Jellyfish</header>
        <form action="sendmoney.php" method="POST">
            <div class="amount_sm">
                <p>Name of Recipient</p>
                <input type="text" required autocomplete="off" placeholder=" " name="recipient_username">
                <p>Enter Amount</p>
                <input type="text" required autocomplete="off" placeholder=" " name="amount" value="1">
                <input type="date" required autocomplete="off" placeholder=" " name="transfer_date" id="dateInput">
            </div>
            <div class="drop-list">
                <div class="from">
                    <p>Currency</p>
                    <div class="select-box">
                        <img src="https://flagcdn.com/48x36/us.png" alt="flag">
                        <select name="currency">
                            <!--  <option value="USD">USD</option>
                            <option value="ALL">ALL</option>
                            <option value="EUR">EUR</option> -->
                        </select>
                    </div>
                </div>
            </div>
            <button name="transaction" type="submit">Transfer</button>
    </div>

    </form>
    </div>

    <script src="JavaScript/country-list.js"></script>
    <script src="JavaScript/script.js"></script>
    <script src="JavaScript/dynamically-date.js"></script>

</body>

</html>