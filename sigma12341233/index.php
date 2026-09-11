<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "warsztat");
    if (!$conn) {
        die($conn->error);
    }
    ?>

    <header>
        <h1>AutoSerwis- PanelObsługiZgłoszeń</h1>
    </header>
    <section class="left">
        <h2>Nowe zgłoszenie</h2>
        <form method="post">
            <input id="klient" type="text">
            <input id="numer_rej" type="text">
            <select name="usluga">
                <?php

                $query = mysqli_query($conn, "SELECT `id`, `nazwa`, `cena` FROM `uslugi`");
                while ($row = mysqli_fetch_array($query)) {
                    echo "<option>" . "id: " . $row[0] . " nazwa: " . $row[1] . " cena: " . $row[2] . "</option>";
                }
                mysqli_close($conn);
                ?>
            </select>
            <textarea name="uwagi" id="sasa">Uwagi i opis usterki</textarea>
            <button type="submit">Dodaj zgłoszenie</button>
        </form>
    </section>
    <section class="right">
        <h2>Ostatnie naprawy</h2>
        <table>
            <?php
            $query = mysqli_query($conn, "SELECT zgloszenia.klient, zgloszenia.nr_rejestracyjny, uslugI.nazwa, uslugi.cena, zgloszenia.opis FROM zgloszenia JOIN uslugi ON zgloszenia.uslugi_id = uslugi.id ORDER BY zgloszenia.id DESC;");
            while ($row = mysqli_fetch_array($query)) {
                echo "<tr>";
                echo "<td>" . "$query[0]" . "$query[1]" . "$query[2]" . "$query[3]" . "$query[4]" . "</td>";
                echo "</tr>";
                echo "<tr>";
                echo "<td>". "". "</td>";
                echo "</tr>";
            }

            mysql_close($conn);
            ?>
        </table>
    </section>
    <footer>
        <p>D/W 11.09.2026</p>
    </footer>
    <?php
    mysqli_close($conn);
    ?>
</body>

</html>