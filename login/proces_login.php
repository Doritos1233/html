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

$queryResoult = mysqli_query($connection, "SELECT * FROM `user` WHERE user.login = '$login' AND user.haslo = '$password'");

mysqli_fetch_array($queryResoult);

if (mysqli_num_rows($queryResoult) > 0) {
    echo "Zalogowano pomyślnie.";
} else {
    echo "Niepoprawny login lub hasło.";
}

mysqli_close($connection);
?>
