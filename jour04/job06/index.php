<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="index.php" method="get">
        <input type="text" name="nombre" placeholder="Choisis un nombre">
        <button type="submit">Envoyer</button>
    </form>

        <?php
        $nombre = count($_GET);

        if($_GET["nombre"] % 2 == 0){
            echo "Nombre pair";
        }
        else{
            echo "Impair";
        }
        ?>
    </div>

</body>
</html>