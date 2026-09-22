<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "baza";

$connection = new mysqli($server, $username, $password, $database);

if (!$connection) {
  die($connection);
}

foreach ($_POST as $key => $value) {
  echo $key, "; ", $value, " ";
}

$Date = $_POST ["data_rez"];
$Phone = $_POST ["tel"];
$AmounOfPeople = $_POST["ilosc"];


mysqli_query($connection, "INSERT INTO `rezerwacje`(`data_rez`, `liczba_osob`, `telefon`) VALUES ('$Date','$AmounOfPeople','$Phone')");
 

mysqli_close($connection);
?>

$connection = new mysqli($server, $username, $password, $database);
