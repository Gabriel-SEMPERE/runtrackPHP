<?php

function gras($text) {
    $res = ""; 
    $i = 0; 
    $open = false;

    while (isset($text[$i])) {
        $c = $text[$i];
        $debut = ($i == 0 || $text[$i-1] == ' ');
        $maj = ($c >= 'A' && $c <= 'Z');

        if ($debut && $maj) {
            $res .= "<b>" . $c;
            $open = true;
        } elseif ($c == ' ' && $open) {
            $res .= "</b> ";
            $open = false;
        } else {
            $res .= $c;
        }
        $i++;
    }
    return $open ? $res . "</b>" : $res;
}