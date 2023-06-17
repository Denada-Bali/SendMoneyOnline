<?php
if (isset($_POST['login_user'])) {

    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    // Call the loginUser() function and assign the return value to $user
    $user = loginUser($email, $password); // Update this line

    if ($user) {
        // User is logged in, set session variables
        $_SESSION['name'] = $user['name'];
        // Additional session variables if needed
    } else {
        // Login failed
        echo 'Login failed. Please check your credentials.';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jellyfish | Login</title>
    <link rel="stylesheet" href="css/log_style.css">
</head>

<body>
    <!-- Login Popup -->
    <div id="loginFormContainer">
        <div class="form-popup" id="myForm">
            <form action="header.php" method="post" class="form-container">
                <h2 data-text="&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;">&nbsp;&nbsp;&nbsp;&nbsp;Login&nbsp;</h2>
                <div class="form">
                    <input type="text" name="email" id="email" class="form_input" autocomplete="off" placeholder=" " required>
                    <label for="email" class="form_label">Email</label>
                </div>
                <div class="form">
                    <input type="password" name="password" class="form_input" autocomplete="off" placeholder=" " required>
                    <label for="psw" class="form_label">Password</label>
                </div>
                <div class="">
                    <button type="submit" name="login_user" style="visibility: hidden;" class="btn">Login</button>
                    <button type="submit" name="login_user" class="btbn">Login</button>
                    <label type="button" class="cancel" onclick="closeForm()"> x </label>
                </div>

            </form>
        </div>
    </div>
</body>

</html>