<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gry komputerowe</title>
    <link rel="stylesheet" href="styl.css">
</head>

<body>
    <?php
    require 'functions.php';
    $connection = database_connect();
    ?>
    <header>
        <h1>Ranking gier komputerowych</h1>
    </header>

    <main>
        <div class="lewa">
            <h3>Top 5 gier w tym miesiącu</h3>
            <ul>
                <?php
                echo script_1($connection);
                ?>
            </ul>
            <h3>Nasz sklep</h3>
            <a href="http://sklep.gry.pl">Tu kupisz gry</a>
            <h3>Stronę wykonał</h3>
            <p>Doritos1233</p>
        </div>
        <div class="srodek">
            <?php
            echo script_2($connection);
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
                echo script_4($connection)
                    ?>
            </form>
        </div>
    </main>

    <footer>
        <form method="POST">
            <input type="text" name="id_gry" id="opis_inp_stop">
            <button type="submit">Pokaż opis</button>
            <?php
            echo script_3($connection);
            ?>
        </form>
    </footer>
</body>

</html>
<?php
mysqli_close($connection);
?>