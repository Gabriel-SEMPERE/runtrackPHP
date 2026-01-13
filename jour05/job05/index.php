<?php
function occurrences($str, $char) {
    $compteur = 0;
    $i = 0;

    while (isset($str[$i])) {
        if ($str[$i] == $char) {
            $compteur++;
        }
        $i++;
    }

    return $compteur;
}

echo occurrences("Aujourd'hui", "u");
?>  