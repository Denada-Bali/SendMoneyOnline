<?php
if (!isset($_SESSION)) {
    session_start();
}

// check whether a user has logged in
if (!isset($_SESSION['name'])) {

    // not logged in, move to login page
    /*  header('Location: login.php'); */
    exit();
}
