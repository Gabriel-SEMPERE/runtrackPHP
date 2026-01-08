<?php 
$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a', 'e', 'i', 'o', 'u', 'y', 'A', 'E', 'I', 'O', 'U', 'Y'];

$i = 0; // i pour faire toute la string

while (isset($str[$i])) { 
    
    $v = 0; // v pour faire tout les voyelles
    
    while (isset($voyelles[$v])) {
        
        if ($str[$i] == $voyelles[$v]) {
            echo $str[$i]; 
            break; 
        }
        $v++;
    }
    $i++;
}
?>