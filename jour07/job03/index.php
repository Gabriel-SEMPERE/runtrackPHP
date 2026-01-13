<?php
session_start();

if (!isset($_SESSION['prenoms'])) {
    $_SESSION['prenoms'] = [];
}

if (isset($_POST['reset'])) {
    $_SESSION['prenoms'] = [];
} 
else if (isset($_POST['prenom']) && $_POST['prenom'] != "") {
    $_SESSION['prenoms'][] = $_POST['prenom'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Job</title>
</head>
<body>

    <p>prénom</p>

    <form method="post" action="">
        <input type="text" name="prenom">
        <button type="submit">Ajouter</button>
    </form>
    <p>Liste</p>
    <ul>
        <?php
        if (isset($_SESSION['prenoms'])) {
            foreach ($_SESSION['prenoms'] as $nom) {
                echo "<p>" . $nom . "</p>";
            }
        }
        ?>
    </ul>

    <form method="post" action="">
        <button type="submit" name="reset">reset</button>
    </form>

</body>
</html>