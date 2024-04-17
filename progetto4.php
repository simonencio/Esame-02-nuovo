<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>progetto 4</title>
    <link rel="stylesheet" href="./css/STYLE.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
    <?php include 'header.php';
        echo generateHeaderAndVideo();
        ?>
        <div class="intro">
            <h1>Progetti</h1>
        </div>
    </header>
    <main>
        <div class="title">
            <h1>Progetto 4</h1>
        </div>
            
        <section class="progetto">
            <img src="./immagini/16683353_5757453.jpg" alt="lavoro4" title="lavoro4">
            <div class="testo">
                <h2>Creazione di siti web responsive</h2>
            <p>Uno tra i tanti lavori che effettuiamo consiste nella creazione di siti web responsive,<br> 
                cioè in grado di adattarsi a computer, smartphone e tablet.<br>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum<br> 
                has been the industry's standard dummy text ever since the 1500s, when an unknown printer<br>
                 took a galley of type and scrambled it to make a type specimen book. It has survived not<br>
                  only five centuries, but also the leap into electronic typesetting, remaining essentially<br>
                   unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
                    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker<br>
                     including versions of Lorem Ipsum.</p>
        </div>    
        </section>
        <div class="title">
            <h1>Vedi Altri Progetti</h1>
        </div>
            <section class="fotolavori">
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
            </section>
        </main>
        <?php include 'footer.php';
        echo generateFooter();
        ?>
    </body>
    </html>