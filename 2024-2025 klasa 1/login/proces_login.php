<?php
$server = 'localhost';
$dbname = 'logowanie';
$user = 'root';
$pass = '';

$connection = mysqli_connect($server, $user, $pass, $dbname);

if (!$connection) {
    die('Connection failed: ' . mysqli_connect_error());
}

$login = $_POST["login"];
$password = $_POST["haslo"];

$Result = mysqli_query($connection, "SELECT * FROM `user` WHERE user.login = '$login' AND user.haslo = '$password'");

if ($Result) {
    $user = mysqli_num_rows($Result);
    if ($user == 1) {
        echo "siemano kolano $login.";
    } else {
        header('location: login.html?error=1');
    }
} else {
    header('location: login.html?error=1');
}


mysqli_close($connection);
?>