<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "wedkowanie";

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
    die($connection);
}

$query1 = "SELECT `id`, `nazwa`, `wystepowanie` FROM `ryby` WHERE ryby.styl_zycia = 2";
$result1 = mysqli_query($connection, $query1);

while ($row = mysqli_fetch_array($result1)) {
    echo "<li>$row[0] nazywa sie $row[1] występuje $row[2]</li>";
}
?>