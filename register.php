<?php
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$confirm_password = $_POST['confirm_password'];

if (empty($username) || empty($password) || empty($confirm_password) || empty($email)) {
    die("All fields are required.");
}

if ($password !== $confirm_password) {
    die("Passwords do not match.");
}
else{
    echo "You have successfully registered!";

    echo "<br>";
    echo "Click here to <a href='login.php'>Login</a>";
}



