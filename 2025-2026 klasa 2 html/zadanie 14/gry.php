<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "gry";

$connection = mysqli_connect($server, $username, $password, $database);

if (!$connection) {
    die($connection);
}
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>

    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>

    <main>
        <div class="lewa">
            <h3>Top 5 gier w tym miesiącu</h3>
            <ul>
                <?php
                $kw3 = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5";
                $result = mysqli_query($connection, $kw3);

                while ($row = mysqli_fetch_row($result)) {
                    echo "<li>" . $row[0] . " <span class='pkt'>" . $row[1] . " </span></li>";
                }
                ?>
            </ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
            <h3>Stronę wykonał</h3>
            <p>Doritos1233</p>
        </div>
        <div class="srodek">
            <?php

            $kw1 = "SELECT id, nazwa, zdjecie FROM gry";
            $result = mysqli_query($connection, $kw1);

            while ($row = mysqli_fetch_row($result)) {
                echo "<div class='gra'>";
                echo "<img src='$row[2]'" . " alt='$row[1]'" . " title='$row[0]'>";
                echo "<p>$row[1]</p>";
                echo "</div>";
            }
            ?>
        </div>
        <div class="prawa">
            <h3>Dodaj nową grę</h3>
            <form method="POST">
                <input type="text" name="nazwa" id="nazwa_inp">
                <label for="nazwa">Nazwa</label>
                <input type="text" name="opis" id="opis_inp">
                <label for="opis">Opis</label>
                <input type="number" name="cena" id="cena_inp">
                <label for="cena">Cena</label>
                <input type="text" name="zdjecie" id="zdjecie_inp">
                <label for="zdjecie">zdjecie</label>
                <button type="submit">DODAJ</button>
                <?php
                
                ?>
            </form>
        </div>
    </main>

    <footer>
        <form method="POST">
            <input type="text" name="id_gry" id="opis_inp_stop">
            <button type="submit">Pokaż opis</button>
            <?php
            if (isset($_POST['id_gry']) && $_POST['id_gry'] != "") {
                $id = $_POST['id_gry'];

                $kw2 = "SELECT nazwa, LEFT(opis,100), punkty, cena 
                FROM gry WHERE id = $id";

                $result = mysqli_query($connection, $kw2);
                $row = mysqli_fetch_row($result);

                if ($row) {
                    echo "<h2>$row[0], $row[2] punktów, $row[3] zł</h2>";
                    echo "<p>$row[1]</p>";
                }
            }
            ?>
        </form>
    </footer>
</body>

</html>
<?php
mysqli_close($connection);
?>