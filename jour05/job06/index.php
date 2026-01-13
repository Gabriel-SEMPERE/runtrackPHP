<?php
function leetSpeak($texte) {
    $i = 0;
    $texteConverti = "";

    while (isset($texte[$i])) {
        $char = $texte[$i];
        if ($char == "A" || $char == "a") {
            $texteConverti .= "4";

        } elseif ($char == "E" || $char == "e") {
            $texteConverti .= "3";
        
        } elseif ($char == "I" || $char == "i") {
            $texteConverti .= "1";
        } elseif ($char == "O" || $char == "o") {
            $texteConverti .= "0";      
        } elseif ($char == "S" || $char == "s") {
            $texteConverti .= "5";
        } elseif ($char == "T" || $char == "t") {
            $texteConverti .= "7";
        } else {
            $texteConverti .= $char;
        }
    
        $i++;
    }

    return $texteConverti;
}

echo leetSpeak("Texte à convertir");
?>