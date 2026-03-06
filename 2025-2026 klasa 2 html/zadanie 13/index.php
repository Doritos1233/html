<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZGŁOSZENIA</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "zgloszenia";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die($connection);
    }
    ?>

    <div class="naglowek">
        <h1>Zgloszenia wydarzen</h1>
    </div>
    <div class="glowny">
        <div class="sekcja_lewa">
            <h2>Personel</h2>
            <form method="post">
                <input type="radio" id="policjant" name="personel" value="policjant" checked>
                <label for="policjant">Policjant</label>
                <input type="radio" id="ratownik" name="personel" value="ratownik">
                <label for="ratownik">Ratownik</label>
                <button type="submit">Pokaż</button>
            </form>
            <table>
                <tr>
                    <th>Id</th>
                    <th>Imię</th>
                    <th>Nazwisko</th>
                </tr>
                <?php
                $connection = mysqli_connect($server, $username, $password, $database);

                $opcja = "policjant";
                if (isset($_POST['personel'])) {
                    $opcja = $_POST['personel'];
                }
                echo "<h3>Wybrano opcję: $opcja</h3>";

                $query = "SELECT id, imie, nazwisko FROM personel WHERE status = '$opcja'";
                $result = mysqli_query($connection, $query);

                while ($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>$row[id]</td>";
                    echo "<td>$row[imie]</td>";
                    echo "<td>$row[nazwisko]</td>";
                    echo "</tr>";
                }
                mysqli_close($connection);
                ?>
            </table>
        </div>
        <div class="sekcja_prawa">
            <h2>Nowe zgloszenie</h2>
            <ol>
                <?php
                $connection = mysqli_connect($server, $username, $password, $database);


                $query = 'SELECT personel.`id`, personel.`nazwisko` FROM `personel` WHERE personel.id NOT IN (SELECT rejestr.id_personel FROM rejestr)';

                $result = mysqli_query($connection, $query);
                $wynik_zapytania = mysqli_query($connection, $query);
                for ($i = 0; $i < mysqli_num_rows($wynik_zapytania); $i++) {
                    // $dane = mysqli_fetch_row($wynik_zapytania);
                    $dane = mysqli_fetch_array($wynik_zapytania);

                    echo "<li>$dane[id] $dane[nazwisko] </li>";
                }
                mysqli_close($connection)
                    ?>
            </ol>
            <form method="post">
                <p>wybierz id osoby z listy</p>
                <input type="number">
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