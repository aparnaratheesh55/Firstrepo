<?php
session_start();
require('connection.php');

if (!empty($_POST)) {
    $username = $_POST['username'];
    $name = $_POST['name'];
    $age = $_POST['age'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $password = $_POST['password'];

    // Insert data into the "registration" table
    $q_registration = "INSERT INTO registration (name, age, weight, height)
                      VALUES ('$name', '$age', '$weight', '$height')";

    if (mysqli_query($conn, $q_registration)) {
        $user_id = mysqli_insert_id($conn); // Get the auto-generated ID of the inserted row

        // Hash the password before inserting into the "login_credentials" table
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert data into the "login_credentials" table
        $q_login_credentials = "INSERT INTO login(user_id, username, password)
                                VALUES ('$user_id', '$username', '$hashed_password')";
        mysqli_query($conn, $q_login_credentials);

        $_SESSION = array();
        $_SESSION['id'] = $user_id;
        header("location: newregistration.php?success=1");
    } else {
        header("location: newregistration.php?fail=1");
    }
}

?>
