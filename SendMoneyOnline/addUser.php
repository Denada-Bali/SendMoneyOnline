<?php
$db = mysqli_connect('localhost', 'root', 'root', 'sendmoneydb');
$errors = array();

// Check if the addUser() function is already defined
if (!function_exists('addUser')) {

    // Function to add a new user
    function addUser($name, $email, $password, $position)
    {
        global $db, $errors;

        // Form validation
        if (empty($name)) {
            array_push($errors, "Name is required");
            return ['success' => false];
        }
        if (empty($email)) {
            array_push($errors, "Email is required");
            return ['success' => false];
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Invalid email format");
            return ['success' => false];
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
            return ['success' => false];
        }
        if (empty($position)) {
            array_push($errors, "Position is required");
            return ['success' => false];
        }

        $user_check_query = "SELECT * FROM user WHERE email='$email' LIMIT 1"; // Check if email already exists in the database
        $result = mysqli_query($db, $user_check_query);
        $user = mysqli_fetch_assoc($result);
        if ($user) { // if user exists       
            if ($user['email'] === $email) {
                array_push($errors, "Email already exists");
                return ['success' => false];
            }
        }

        $password = md5($password); // encrypt the password before saving in the database
        $query = "INSERT INTO user (name, email, password, position) 
            VALUES('$name', '$email', '$password', '$position')";
        mysqli_query($db, $query);

        $id = mysqli_insert_id($db); // Get the last inserted user ID
        return ['success' => true, 'id' => $id];
    }
}
// Function to log in a user
function loginUser($email, $password)
{
    global $db, $errors;

    // Form validation
    if (empty($email)) {
        array_push($errors, "Email is required");
        return false;
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
        return false;
    }

    $password = md5($password);
    $query = "SELECT * FROM user WHERE email='$email' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
        $user = mysqli_fetch_assoc($results);
        return $user; // Return the user information
    } else {
        array_push($errors, "Wrong email/password combination");
        return false;
    }
}
