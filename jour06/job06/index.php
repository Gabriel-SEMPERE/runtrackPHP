<?php
$styleChoisi = "style1";

if (isset($_GET['style']) && !empty($_GET['style'])) {
    $styleChoisi = $_GET['style'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>G_DuStyle</title>
    <link rel="stylesheet" href="<?php echo $styleChoisi; ?>.css">
</head>
<body>

    <form action="index.php" method="get">
        <label for="style">Choisis ton style</label>
        <select name="style" id="style">
            <option value="style1" <?php if($styleChoisi == 'style1') echo 'selected'; ?>>Style 1</option>
            <option value="style2" <?php if($styleChoisi == 'style2') echo 'selected'; ?>>Style 2</option>
            <option value="style3" <?php if($styleChoisi == 'style3') echo 'selected'; ?>>Style 3</option>
        </select>
        <button type="submit">Valider</button>
    </form>

<?php 
if($styleChoisi == 'style1'){
    echo "<br> Le style 1 est vraiment incroyable, il mélange le bleu, une couleur très appréciée qui rappelle les fontaines, évidemment. <br>
Le bleu rappelle l'été, mais aussi le froid, ce qui donne le sourire. <br>
Derrière ce bleu, le style 1 est aussi très moderne et permet de bien lire le texte grâce au texte de couleur blanche qui ressort très bien sur du bleu. ";
}
if($styleChoisi == 'style2'){
    echo"<br> Le style deux est vraiment originale, vous ne trouverez jamais ça ailleurs. Je pense que je n'ai rien à ajouter. <br>
    Profiter de cette déco sans vous posez trop de question.";

}
if($styleChoisi == 'style3'){
    echo"<br> Je ne suis vraiment pas sûr de ce style, mais c'est pas parce que ça ne me plait pas qu'il faut le jeter non ?  <br>
    Il faut de tout pour faire un monde, et malheureusement ce style en fait partie.";

}

?>

</body>
</html>