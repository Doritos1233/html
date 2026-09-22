<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST">
        <textarea name="text"></textarea>
        <button type="submit">Wyślij</button>
    </form>
    <?php

    if (isset($_POST['text'])) {
        echo $_POST['text'];
        $now = date("[ Y-m-d H:i:s ]") . " - ";

        $file = fopen("log.txt", "a");
        fwrite($file, $now . $_POST['text'] . "\n");
        fclose($file);
    }



    if (file_exists("log.txt")) {
        $file = fopen("log.txt", "r");
        $content = fread($file, filesize("log.txt"));
        $log = explode("\n", $content);
        fclose($file);

        for ($i = 0; $i < count($log); $i++) {
            if (!empty($log[$i])) {
                echo "<div style='border: 1px solid black; padding: 10px; margin: 5px;'>";
                echo $log[$i];
                echo "</div>";
            }
        }
    }
    ?>
</body>

</html>