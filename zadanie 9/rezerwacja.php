<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "baza";

$conn = new mysqli($server, $username, $password, $database);

if (!$connection) {
  die($connection);
}
echo "Connected successfully";

foreach ($_POST as $key => $value) {
  echo $key, "; ", $value, " ";
}

$Date = $_POST ["data"];
$Phone = $_POST ["telefon"];
$AmounOfPeople = $_POST["ilość_osób"];

echo($date $Phone $amountOfPeople);

mysqli_query(

);

mysqli_close($conn);

?>