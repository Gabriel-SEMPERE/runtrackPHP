<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $odre = $_GET['ordre'];
if (isset($_GET['ordre']) && !empty($_GET['ordre'])) {
    $ordre = $_GET['ordre'];
}
?>
    <form action="index.php" method="get">
        <label for="ordre">Choisis ton ordre</label>
        <select name="ordre" id="ordre">
            <option value="croissant" <?php if($ordre == 'croissant') echo 'selected'?>>croissant</option>
            <option value="décroissant" <?php if($ordre == 'décroissant') echo 'selected'?>>décroissant</option>
        </select>
        <button type="submit">Valider</button>
    </form>

</body>
</html>



<?php

function bubblesort($tab, $croissant) {
    $taille = count($tab);
    for ($i = 0; $i < $taille; $i++) {
        for ($j = 0; $j < $taille - 1 - $i; $j++) {
            $echange = false;
            // trier par ordre croissant
            if ($croissant) {
                if ($tab[$j] > $tab[$j + 1]) {
                    $echange = true;
                }
            // trier décroissant
            } else {
                if ($tab[$j] < $tab[$j + 1]) {
                    $echange = true;
                }
            }
            // Pour échanger entre deux valeur dans le tableau
            if ($echange) {
                $temp = $tab[$j];
                $tab[$j] = $tab[$j + 1];
                $tab[$j + 1] = $temp;
            }
        }
    }
    return $tab;
}

// liste
$test = ["frt", "eio", "abc", "ook", "tuv"];

if($ordre == "croissant"){
    $resultatCroissant = bubblesort($test, true);
    echo "Tri croissant : ";
    print_r($resultatCroissant);

}
if($odre == "décroissant"){
    $resultatCroissant = bubblesort($test, false);
    echo "Tri décroissant : ";
    print_r($resultatCroissant);
}


?>