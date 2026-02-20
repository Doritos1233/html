<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "zgloszenia";

$connection = new mysqli($server, $username, $password, $database);

if (!$connection) {
  die($connection);
}
?>

<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZGŁOSZENIA</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <div class="naglowek">
        <h1>Zgloszenia wydarzen</h1>
    </div>
    <div class="glowny">
        <div class="sekcja_lewa">
            <h2>Personel</h2>
            <form action="post">
                <input type="checkbox" checked>
                <input type="checkbox">
                <button id="skrypt_1">Pokaż</button>
            </form>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                </tr>
                <td></tr>
                <tr></tr>
                <tr></tr>
            </table>
        </div>
        <div class="sekcja_prawa">
            <h2>Nowe zgloszenie</h2>
            <ol>
                <p id="skrypt_2"></p>
            </ol>
            <form action="post">
                <p>wybierz id osoby z listy</p>
                <input type="nunber">
                <button>Dodaj zgloszenie</button>
                <p id="skrypt_3"></p>
            </form>
        </div>
    </div>
    <div class="stopka">
        <p>Stronę wykonal: Doritos1233</p>
    </div>
</body>

</html>