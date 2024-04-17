<?php
ini_set("auto_detect_line_endings", true);

require_once('Utility.php');

use MieClassi\Utility as UT;

$file = "progetti.json";
$arr = json_decode(UT::leggiTesto($file));
$selezionato = UT::richiestaHTTP("selezionato");
$selezionato = ($selezionato == null) ? 1 : $selezionato;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portfolio</title>
    <link rel="stylesheet" href="./css/STYLE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <?php include 'header.php';
        echo generateHeaderAndVideo();
        ?>
        <div class="intro">
            <h1>I Nostri Progetti</h1>
        </div>
    </header>
    <main>
        <div class="title">
            <h1>Lavori</h1>
        </div>
        <?php
        foreach ($arr as $link) {
            $n = $link->id;
            $classeSelezionato = ($n == $selezionato) ? 'class="selezionato"' : '';
            printf($stringa, $classeSelezionato, $link->url, $link->id, $link->title, $link->nome);
            if ($n == 1) break;
        }
        ?>
        </main>
        <?php include 'footer.php';
        echo generateFooter();
        ?>
    </body>
    </html>