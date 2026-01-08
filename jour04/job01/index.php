<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="prenom" placeholder="Ton prénom">
        <input type="text" name="age" placeholder="Ton âge">
        <button type="submit">Envoyer</button>
    </form>

        <?php
        $nombre = count($_GET);

        if ($nombre > 0) {
            echo "Vous avez envoyé $nombre argument(s).<br>";
            print_r($_GET); 
        } 
        ?>
    </div>

</body>
</html>