<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "wedkowanie";

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
    <title>Document</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <div>
        <div class="baner">
            <h1>Portal dla wędkarzy</h1>
        </div>
        <div class="srodek">
            <div class="lewy_blok">
                <h3>Ryby zamieszkujące rzeki</h3>
                <ol>
                    <?php
                    $query1 = "SELECT  ryby.nazwa, lowisko.akwen, lowisko.wojewodztwo FROM ryby JOIN lowisko ON ryby.id = lowisko.Ryby_id WHERE lowisko.rodzaj = 3";
                    $result1 = mysqli_query($connection, $query1);

                    while ($row = mysqli_fetch_array($result1)) {
                        echo "<li>$row[0] pływa w rzece $row[1] wojewodztwo $row[2]</li>";
                    }
                    ?>
                </ol>
                <div class="lewy_blok2">
                    <h3>Ryby drapieżne naszych wód</h3>
                    <table>
                        <th class="td1">L.p.
                        <td class="td1">Gatunek</td>
                        <td class="td1">Występowanie</td>
                        </th>
                        <tbody>
                            <?php
                            $query2 = "SELECT id, nazwa, wystepowanie FROM ryby WHERE styl_zycia = 1";
                            $result2 = mysqli_query($connection, $query2);
                            $lp = 1;

                            while ($row = mysqli_fetch_assoc($result2)) {
                                echo "<tr>
                                    <td>{$lp}</td>
                                    <td>{$row['nazwa']}</td>
                                    <td>{$row['wystepowanie']}</td>
                                  </tr>";
                                $lp++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="prawy_blok">
                <img src="ryba1.jpg" alt="ryba">
                <a href="kwerendy.txt">Pobierz kwerendy</a>
            </div>
        </div>
        <div class="stopka">
            Strone wykonał: 0000000000
        </div>
    </div>
</body>

</html>

<?php
mysqli_close($connection);
?>