<?php
function database_connect()
{
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "gry";

    $connection = mysqli_connect($server, $username, $password, $database);

    if (!$connection) {
        die($connection);
    }

    return $connection;
}

function script_1($connection)
{
    $kw3 = "SELECT nazwa, punkty FROM gry ORDER BY punkty DESC LIMIT 5";
    $result = mysqli_query($connection, $kw3);

    $result_string = "";

    while ($row = mysqli_fetch_row($result)) {
        $result_string = $result_string . "<li>" . $row[0] . " <span class='pkt'>" . $row[1] . "</span></li>";
    }

    return $result_string;
}


function script_2($connection)
{
    $kw1 = "SELECT id, nazwa, zdjecie FROM gry";
    $result = mysqli_query($connection, $kw1);

    $result_string = "";

    while ($row = mysqli_fetch_row($result)) {
        $result_string = $result_string . "<div class='gra'>" . "<img src='$row[2]' " . "alt='$row[1]' " . " title='$row[0]'>" . "<p>$row[1]</p>" . "</div>";
    }

    return $result_string;
}

function script_3($connection)
{
    if (isset($_POST['id_gry']) && $_POST['id_gry'] != "") {
        $id = $_POST['id_gry'];

        $kw2 = "SELECT nazwa, LEFT(opis,100), punkty, cena 
                FROM gry WHERE id = $id";

        $result = mysqli_query($connection, $kw2);
        $row = mysqli_fetch_row($result);

        $result_string = "";

        if ($row) {
            $result_string = $result_string . "<h2>$row[0], $row[2] punktów, $row[3] zł</h2>" . "<p>$row[1]</p>";
        }
        return $result_string;
    }
}

function script_4($connection)
{
    if (isset($_POST['nazwa'])) {

        $nazwa = $_POST['nazwa'];
        $opis = $_POST['opis'];
        $cena = $_POST['cena'];
        $zdjecie = $_POST['zdjecie'];

        $kw4 = "INSERT INTO gry(nazwa, opis, punkty, cena, zdjecie) 
                VALUES('$nazwa', '$opis', 0, '$cena', '$zdjecie')";

        mysqli_query($connection, $kw4);

        return "Dodano rekord";
    }
}
?>