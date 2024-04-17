<?php
namespace MieClassi;
$stringa ='<section class="fotolavori">
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
</section>';
$stringa2 = ('<div class="testo">
<h2>Creazione di siti web responsive</h2>
<p>Uno tra i tanti lavori che effettuiamo consiste nella creazione di siti web responsive,<br> 
cioè in grado di adattarsi a computer, smartphone e tablet.<br>
Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum<br> 
has been the industries standard dummy text ever since the 1500s, when an unknown printer<br>
 took a galley of type and scrambled it to make a type specimen book. It has survived not<br>
  only five centuries, but also the leap into electronic typesetting, remaining essentially<br>
   unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
    Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker<br>
     including versions of Lorem Ipsum.</p>
</div>');

/**
 * questa classe contiene tutti i metodi utili
 * @author Mario Rossi
 * @copyright 2022
 * @license LGPL
 * @version 1.0.0
 */

class Utility
{
    /**
     * funzione per leggere del testo in un file
     * 
     * @param string $file Nome del file
     * @return boolean|string
     * 
     */
    public static function leggiTesto($file)
    {
        $rit = false;
        if (!$fp = fopen($file, 'r')) {
            echo "non posso aprire il file $file<br>";
        } else {
            if (is_readable($file) === false) {
                echo " il file $file non è leggibile<br>";
            } else {
                $rit = fread($fp, filesize($file));
            }
        }
        fclose($fp);
        return $rit;
    }
    /**
     * funzione per estrarre dal $_POST o dal $_GET la proprieta richiesta
     * 
     * @param string proprieta da ricercare 
     * @return string|null
     * 
     */
    public static function richiestaHTTP($str)
    {
        $rit = null;
        if ($str !== null) {
            if (isset($_POST[$str])) {
                $rit = $_POST[$str];
            } elseif (isset($_GET[$str])) {
                $rit = $_GET[$str];
            }
        }
        return $rit;
    }
}