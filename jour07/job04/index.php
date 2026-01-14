<?php
if (isset($_POST['connexion'])) {
    setcookie('prenom', $_POST['prenom'], 0);
    $_COOKIE['prenom'] = $_POST['prenom'];
}

if (isset($_POST['deco'])) {
    setcookie('prenom', '', 1);
    $prenom_efface = true;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job</title>
</head>
<body>

    <?php if (isset($_COOKIE['prenom']) && !isset($prenom_efface)): ?>
        
        <p>Bonjour <?php echo $_COOKIE['prenom']; ?> !</p>
        
        <form method="post" action="">
            <button type="submit" name="deco">Déconnexion</button>
        </form>

    <?php else: ?>

        <form method="post" action="">
            <input type="text" name="prenom" placeholder="Votre prénom" required>
            <button type="submit" name="connexion">Connexion</button>
        </form>

    <?php endif; ?>

</body>
</html>