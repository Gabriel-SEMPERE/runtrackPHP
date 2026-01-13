<?php
function calcule($nombre1, $operation, $nombre2) {
    switch ($operation) {
        case '+':
            return $nombre1 + $nombre2;
        case '-':
            return $nombre1 - $nombre2;
        case '*':
            return $nombre1 * $nombre2;
        case '/':
            return $nombre2 != 0 ? $nombre1 / $nombre2 : "Erreur (div par 0)";
        case '%':
            return $nombre2 != 0 ? $nombre1 % $nombre2 : "Erreur (modulo)";
        default:
            return "Opération inconnue";
    }
}

echo "10 + 2 = " . calcule(10, '+', 2) . "<br>";
echo "20 * 3 = " . calcule(20, '*', 3) . "<br>";
echo "200 / 5 = " . calcule(200, '/', 5);
?>