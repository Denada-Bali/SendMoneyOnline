<?php
ob_start();
if (isset($_POST['reg_user'])) {
    // Retrieve form inputs
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $confirm_password = mysqli_real_escape_string($db, $_POST['confirm_password']);
    $position = mysqli_real_escape_string($db, $_POST['position']);

    // Call the addUser() function
    addUser($name, $email, $password, $position);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jellyfish | Send Money Online</title>
    <link rel="stylesheet" href="css/reg_style.css">
    <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && count($errors) > 0) : ?> <!-- clean inputs  -->
        <script>
            window.addEventListener('DOMContentLoaded', function() {
                var inputs = document.querySelectorAll('input.regform_input');
                for (var i = 0; i < inputs.length; i++) {
                    inputs[i].value = '';
                }
            });
        </script>
    <?php endif ?>
</head>

<body>
    <!-- Register Popup -->
    <div class="re_form_popup" id="myRegForm">
        <form method="post" action="header.php" class="re_form_container">
            <?php include('errors.php'); ?>
            <h2 class="blue" data-text="&nbsp;Register&nbsp;">&nbsp;Register&nbsp;</h2>
            <div class="re_form">
                <input type="text" id="name" class="regform_input" required autocomplete="off" placeholder=" " name="name">
                <label for="name" class="regform_label">Name</label>
            </div>
            <div class="re_form">
                <input type="text" id="email" class="regform_input" required autocomplete="off" placeholder=" " name="email">
                <label for="email" class="regform_label">Email</label>
            </div>
            <div class="re_form">
                <input type="password" class="regform_input" required autocomplete="off" placeholder=" " name="password">
                <label for="password" class="regform_label">Password</label>
            </div>
            <div class="re_form">
                <input type="password" class="regform_input" required autocomplete="off" placeholder=" " name="confirm_password">
                <label for="confirm_password" class="regform_label">Confirm password</label>
            </div>
            <div class="radio-container">
                <div class="radio-title-group">
                    <div class="input-radio-container">
                        <input id="personal" type="radio" name="position" value="personal">
                        <div class="radio-title">
                            <ion-icon name="people-circle"></ion-icon>
                            <label for="personal">Personal</label>
                        </div>
                    </div>
                    <div class="input-radio-container">
                        <input id="business" type="radio" name="position" value="business">
                        <div class="radio-title">
                            <ion-icon name="briefcase"></ion-icon>
                            <label for="business">Business</label>
                            <span class="first">This option is </br> currently in progress.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <button type="submit" name="reg_user" class="re-btn">Register</button>
                <label type="button" class="re-cancel" onclick="closeRegForm()"> x </label>
            </div>
        </form>
    </div>

</body>

</html>