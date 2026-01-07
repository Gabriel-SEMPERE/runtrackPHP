<?php
$nombre = [200, 204, 173, 98, 171, 404, 459];
$i = 0;

while($i < count($nombre)) {
    if($nombre[$i] % 2 == 0){
        echo "$nombre[$i] est pair <br>";
    }
    else{
        echo "$nombre[$i] est impair <br>";
    }
    $i++;
}
?>