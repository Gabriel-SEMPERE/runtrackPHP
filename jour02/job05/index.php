<?php
$nombre = 1;

while ($nombre <= 1000) {
    
    $diviseur = 1;        
    $compteur = 0;  

    while ($diviseur <= $nombre) {
        if ($nombre % $diviseur == 0) {
            $compteur++;
        }
        $diviseur++;
    }
    if ($compteur <= 2) {
        echo "$nombre<br>";
    }

    $nombre++;
}
?>