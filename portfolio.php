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
            printf('<section class="fotolavori">
            <div class="card">
                <h4>LAVORO 1</h4>
            <a href="./progetto1.php" target="_blank"><img src="./immagini/webdesign.jpg" alt="lavoro1" title="lavoro1"></a>
            </div>
            <div class="card">
                <h4>LAVORO 2</h4>
            <a href="./progetto2.php" target="_blank"><img src="./immagini/webdesign.jpg" alt="lavoro2" title="lavoro2"></a>
            </div>
            <div class="card">
                <h4>LAVORO 3</h4>
            <a href="./progetto3.php" target="_blank"><img src="./immagini/webdesign.jpg" alt="lavoro3" title="lavoro3"></a>
            </div>
        </section>
        <section class="fotolavori">
            <div class="card">
                <h4>LAVORO 4</h4>
                <a href="./progetto4.php" target="_blank"><img src="./immagini/webdesign.jpg" alt="lavoro4" title="lavoro4"></a>
                </div>
                <div class="card">
                    <h4>LAVORO 5</h4>
                <a href="./progetto5.php" target="_blank"><img src="./immagini/webdesign.jpg" alt="lavoro5" title="lavoro5"></a>
                </div>
                <div class="card">
                    <h4>LAVORO 6</h4>
                <a href="./progetto6.php" target="_blank"><img src="./immagini/webdesign.jpg" alt="lavoro6" title="lavoro6"></a>
            </div>
        </section>', $classeSelezionato, $link->url, $link->id, $link->title, $link->nome);
            if ($n == 1) break;
        }
        ?>
        </main>
        <?php include 'footer.php';
        echo generateFooter();
        ?>
    </body>
    </html>