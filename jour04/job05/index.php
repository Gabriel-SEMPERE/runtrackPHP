<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Ton pseudo">
        <input type="text" name="password" placeholder="Ton mot de passe">
        <button type="submit">Envoyer</button>
    </form>

        <?php
        $nombre = count($_POST);

        if($_POST["password"] == "Rambo" && $_POST["username"] == "John")  {
        echo "“c’est pas ma guerre”";
        } 
        else{
            echo "votre pire cauchemard";
        }
        ?>
    </div>

</body>
</html>