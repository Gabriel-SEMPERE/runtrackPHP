<?php
function bonjour($jour) {
    if ($jour === true) {
        echo "Bonjour";
    } else {
        echo "Bonsoir";
    }
}

bonjour(jour: true);
echo "<br>";
bonjour(false);
?>