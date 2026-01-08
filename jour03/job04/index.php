<?php
$str = "Dans l'espace, personne ne vous entend crier.";
$i = 0;


while (isset($str[$i])) { 
    echo $str[$i]; 
    $i++;
}

echo "<br> Nombre de caractères dans la string = $i";

?>