<?php
session_start();

if (isset($_SESSION['name'])) {
    session_destroy();
    unset($_SESSION['name']);
    $_SESSION['success'] = "You have been logged out";
}

header("location: header.php");
