<?php
session_start();
require('connection.php');

if (!empty($_POST)) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $q = "SELECT * FROM login WHERE username = '$username'";
    $res = mysqli_query($conn, $q) or die("wrong query");
    $row = mysqli_fetch_assoc($res);

    if (!empty($row)) {
        // Compare the entered password with the hashed password from the database
        if (password_verify($password, $row['password'])) {
            $_SESSION = array();
            $_SESSION['id'] = $row['id'];
            header("location: index.php?admn=1");
        } else {
            header("location: login.php?wrongpass=1");
        }
    } else {
        header("location: login.php?wronguser=1");
    }
}
?>
